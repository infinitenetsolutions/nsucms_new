<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionEnquiry extends Controller
{
    function otp_generating(Request $request)
    {
        return view('opt_verify');
    }
    function otp_verify(Request $request)
    {
        return view('admission_form');
    }
    function admission_form(){
        return view('admission_form');
    }

}
