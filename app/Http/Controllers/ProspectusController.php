<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProspectusController extends Controller
{

    // initialization  of the page
    public function index()
    {
        $course = DB::table('tbl_course')->get();
        session(['amount' => $course[0]->prospectus_rate]);
        return view('index', ['data' => $course]);
    }

    // storing the data of the user 
    public function store(Request $request)
    {
        if ($request->prospectus_otp == session('otp')) {
            try {

                $prospectus = DB::table('tbl_prospectus')->insertGetId($request->except(['_token', 'prospectus_otp']));
                session(['student_id' => $prospectus]);
                // redirecting to the confirmation page
                return redirect()->route('prospectus.confirmation');
            } catch (Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
        } else {
            return redirect()->back()->with('error', 'Please Enter Correct otp');
        }
    }

    // for showing the course it's call throw the ajax
    public function course($id)
    {
        $course = DB::table('tbl_course')->where('course_id', $id)->get();
        echo $course;
    }
    public function confirmation()
    {
        // set  the student data into the session
        $student = DB::table('tbl_prospectus')->find(session('student_id'));
        session(['name' => $student->prospectus_applicant_name, 'email' => $student->prospectus_emailid, 'phone' => $student->mobile, 'txn_id' => rand(10000000000, 99999999999)]);
        return view('confirmation', ['data' => $student, 'txn_id' => session('txn_id')]);
    }



    public function send_otp($mobile_number, $email)
    {
        $otp = rand(100000, 999999);
        session(['otp' => $otp, 'phone' => $mobile_number]);
        $mobileNumber = $mobile_number;
        $message = "Your OTP is " . $otp . ". Please do not share this OTP to anyone. Regards, Netaji subhas  University, JSR";
        $senderId = "NSUJSR";
        $serverUrl = "msg.msgclub.net";

        //put the auth key;			
        $authKey = "6a4743a8355fb97aa42dc2452185a1cd";
        $routeId = "1";
        $route = "default";
        $getData = 'mobileNos=' . $mobileNumber . '&message=' . urlencode($message) . '&senderId=' . $senderId . '&routeId=' . $routeId;
        //API URL			
        $url = "http://" . $serverUrl . "/rest/services/sendSMS/sendGroupSms?AUTH_KEY=" . $authKey . "&" . $getData;
        // init the resource			
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0
        ));
        //get response			
        $output = curl_exec($ch);
        //Print error if any		
        if (curl_errno($ch)) {
            echo 'error:' . curl_error($ch);
        }
        curl_close($ch);
        // sending the email otp into the email
        Mail::to($email)->send(new \App\Mail\mymail());
        return $output;
    }

    function already()
    {
        return view('already_prospectus');
    }
    function prospectus_check($prospectus_number)
    {
        dd($prospectus_number);
    }
}
