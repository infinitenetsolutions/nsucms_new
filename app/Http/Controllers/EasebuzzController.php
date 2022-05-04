<?php

namespace App\Http\Controllers;

use App\Http\Easebuzz\Easebuzz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EasebuzzController extends Controller
{
    public function store(Request $request)
    {

        // include file

        /*
    * Create object for call easepay payment gate API and Pass required data into constructor.
    * Get API response.
    *  
    * param string $_GET['apiname'] - holds the API name.
    * param  string $MERCHANT_KEY - holds the merchant key.
    * param  string $SALT - holds the merchant salt key.
    * param  string $ENV - holds the env(enviroment).
    * param  string $_POST - holds the form data.
    *
    * ##Return values
    *   
    * - return array ApiResponse['status']== 1 successful.
    * - return array ApiResponse['status']== 0 error.
    *
    * @param string $_GET['apiname'] - holds the API name.
    * @param  string $MERCHANT_KEY - holds the merchant key.
    * @param  string $SALT - holds the merchant salt key.
    * @param  string $ENV - holds the env(enviroment).
    * @param  string $_POST - holds the form data.
    *
    * @return array ApiResponse['status']== 1 successful. 
    * @return array ApiResponse['status']== 0 error. 
    *
    */
        if (!empty($_POST) && (sizeof($_POST) > 0)) {

            /*
        * There are three approch to call easebuzz API.
        *
        * 1. using hidden api_name which is $_POST from form.
        * 2. using pass api_name into URL.
        * 3. using extract html file name then based on file name call API.
        *
        */

            // first way
            // $apiname = trim(htmlentities($_POST['api_name'], ENT_QUOTES));

            // second way
            $apiname = 'initiate_payment';

            // third way
            // $url_link = $_SERVER['HTTP_REFERER'];
            // $apiname = explode('.', ( end( explode( '/',$url_link) ) ) )[0];
            // $apiname = trim(htmlentities($apiname, ENT_QUOTES));

            /*
        * Based on API call change the Merchant key and salt key for testing(initiate payment).
        */

            $MERCHANT_KEY = "VNQSM82SAE";
            $SALT = "LNRNU85EPI";
            // $ENV = "test";    // setup test enviroment (testpay.easebuzz.in).
            $ENV = "prod";   // setup production enviroment (pay.easebuzz.in).

            $easebuzzObj = new Easebuzz($MERCHANT_KEY, $SALT, $ENV);

            if ($apiname === "initiate_payment") {

                // getting the all data from the session
                $amount = session('amount') . '.0';

                if ($_SERVER['HTTP_HOST'] == '127.0.0.1:8000') {
                    $amount =  '1.0';
                }

                $txn_id = session('txn_id');
                $student_prospectus_id = session('student_id');
                $email = session('email');
                $phone = session('phone');
                $name = session('name');
                $url = route('response');
                $postData = array(
                    "txnid" => "$txn_id",
                    "amount" => "$amount",
                    "firstname" => "$name",
                    "email" => "$email",
                    "phone" => "$phone",
                    "productinfo" => "Laptop",
                    "surl" => "$url",
                    "furl" => "$url",
                    "udf1" => "$student_prospectus_id",
                    "udf2" => "aaaa",
                    "udf3" => "aaaa",
                    "udf4" => "aaaa",
                    "udf5" => "aaaa",
                    "address1" => "aaaa",
                    "address2" => "aaaa",
                    "city" => "aaaa",
                    "state" => "aaaa",
                    "country" => "aaaa",
                    "zipcode" => "123123"
                );

                $result = $easebuzzObj->initiatePaymentAPI($postData);

                print_r($result);
            } else if ($apiname === "transaction") {

                /*  Very Important Notes
            * 
            * Post Data should be below format.
            *
                Array ( [txnid] => TZIF0SS24C [amount] => 1.03 [email] => test@gmail.com [phone] => 1231231235 )
            */
                $result = $easebuzzObj->transactionAPI($_POST);

                print_r($result);
            } else if ($apiname === "transaction_date" || $apiname === "transaction_date_api") {

                /*  Very Important Notes
            * 
            * Post Data should be below format.
            *
                Array ( [merchant_email] => jitendra@gmail.com [transaction_date] => 06-06-2018 )
            */
                $result = $easebuzzObj->transactionDateAPI($_POST);

                print_r($result);
            } else if ($apiname === "refund") {

                /*  Very Important Notes
            * 
            * Post Data should be below format.
            *
                Array ( [txnid] => ASD20088 [refund_amount] => 1.03 [phone] => 1231231235 [email] => test@gmail.com [amount] => 1.03 )
            */
                $result = $easebuzzObj->refundAPI($_POST);

                print_r($result);
            } else if ($apiname === "payout") {

                /*  Very Important Notes
            * 
            * Post Data should be below format.
            *
               Array ( [merchant_email] => jitendra@gmail.com [payout_date] => 08-06-2018 )
            */
                $result = $easebuzzObj->payoutAPI($_POST);

                print_r($result);
            } else {

                echo '<h1>You called wrong API, Pleae try again</h1>';
            }
        } else {
            echo '<h1>Please fill all mandatory fields.</h1>';
        }
    }
    public function response2(Request $request)
    {

        // salt for testing env
        $SALT = "LNRNU85EPI";

        /*
    * Get the API response and verify response is correct or not.
    *
    * params string $easebuzzObj - holds the object of Easebuzz class.
    * params array $_POST - holds the API response array.
    * params string $SALT - holds the merchant salt key.
    * params array $result - holds the API response array after valification of API response.
    *
    * ##Return values
    *
    * - return array $result - hoids API response after varification.
    * 
    * @params string $easebuzzObj - holds the object of Easebuzz class.
    * @params array $_POST - holds the API response array.
    * @params string $SALT - holds the merchant salt key.
    * @params array $result - holds the API response array after valification of API response.
    *
    * @return array $result - hoids API response after varification.
    *
    */
        $easebuzzObj = new Easebuzz($MERCHANT_KEY = null, $SALT, $ENV = null);

        $result = $easebuzzObj->easebuzzResponse($_POST);
        $result = json_decode($result);
        echo "<pre>";
        print_r($result->data);
        echo "<pre>";
        if ($result->data->status == "success") {
            $net_debited_amount = $result->data->net_amount_debit;
            $easepayid = $result->data->easepayid;

            $txnid = $result->data->txnid;
            $prospectus_student_id = $result->data->udf1;
            $mode = $result->data->mode;
            $bank_name = $result->data->bank_name;
            $addedon = $result->data->addedon;
            session('student_id', $prospectus_student_id);
            $status = md5('visible');
            $payment_success = DB::table('tbl_prospectus')->where('id', $prospectus_student_id)->update([
                'transaction_id' => $txnid,
                'easebuzz_id' => $easepayid,
                'bank_name' => $bank_name,
                'transaction_date' => $addedon,
                'post_at' => date('Y-m-d h:m:s'),
                'type' => $mode,
                'status' => $status,
                'prospectus_rate' => $net_debited_amount,
                'transaction_no' => $txnid,
            ]);
            if ($payment_success) {
                redirect()->route('print');
            }
            print_r($result->data);
        } else {
            redirect()->route('prospectus');
        }
    }

    public function print_form()
    {
         $data = DB::table('tbl_prospectus')->find(12);
        return view('print', ['data' => $data]);
    }
}
