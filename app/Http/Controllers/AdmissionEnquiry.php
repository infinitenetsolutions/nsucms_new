<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProspectusController;

class AdmissionEnquiry extends Controller
{
    function otp_generating(Request $request)
    {
        $prospectus =  DB::table('tbl_prospectus')->where(['prospectus_no' => $request->prospectus_number, 'mobile' => $request->phone_number])->exists();
        if ($prospectus) {
            session(['prospectus_no' => $request->prospectus_number, 'mobile' => $request->phone_number]);
            $prospectus_otp = new ProspectusController();
            $prospectus_otp->send_otp($request->phone_number);
            return view('admission_opt_verify')->with('success', 'Otp sended' . $request->phone_number);;
        } else {
            return  redirect()->route('prospectus.already')->with('error', 'Prospectus and phone number not match with our records');
        }
    }
    public function otp_verify(Request $request)
    {
        $course = DB::table('tbl_course')->get();


        if ($request->otp == session('otp')) {
            $prospectus_details = DB::table('tbl_prospectus')->where(['prospectus_no' => session('prospectus_no'), 'mobile' => session('mobile')])->get();

            return view('admission_form', ['courses' => $course, 'data' => $prospectus_details[0]]);
        } else {
            return view('admission_opt_verify', ['otp_error' => 'Please Enter a valid otp']);
        }
    }
    function session_get($course_id)
    {
        $course = DB::table('tbl_course')->where('course_id', $course_id)->get();

        $sessions = DB::table('tbl_university_details')->orderBy('university_details_id', 'DESC')->get();
        foreach ($sessions as  $session) {
            $start_year = explode('-', $session->university_details_academic_start_date)[0];
            $end_year = explode('-', $session->university_details_academic_end_date)[0];
            $total_year = $end_year - $start_year;
            if ($total_year == $course[0]->duration) {
                echo ' <option value="' . $session->university_details_id . '">' . $start_year . '-' . $end_year . '</option>';
            }
        }
    }

    function admission_form(Request $request)
    {
        $admission_id = DB::table('tbl_admission')->insertGetId($request->except('_token'));
        return view('admission_document');
    }

    public function admission_document( Request $request)
    {

        if ($request->file('header_image')) {
            $about_image = DB::table('pages')->find($id);
            $about_image = $about_image->header_image;
            $image = $request->file('header_image');
            $destinationPath = 'upload/about/';
            $image->move($destinationPath, $about_image);
        }

        if ($request->file('image_name')) {
            $about_image = DB::table('pages')->find($id);
            $about_image = $about_image->image_name;
            $image = $request->file('image_name');
            $destinationPath = 'upload/about/';
            $image->move($destinationPath, $about_image);
        }
        if ($request->file('image_name1')) {
            $about_image = DB::table('pages')->find($id);
            $about_image = $about_image->image_name1;
            $image = $request->file('image_name1');
            $destinationPath = 'upload/about/';
            $image->move($destinationPath, $about_image);
        }

        $admission_id = DB::table('tbl_admission')->update($request->except('_token'));

    }
}
