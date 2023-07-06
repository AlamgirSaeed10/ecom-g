<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificatesController extends Controller
{
    public string $title = "Verify Certificate";
    public function certificate(){
        return view('verify-certificate.certificate',['title'=>$this->title]);

    }

    public function verify_certificate(Request $request){

        return view('verify-certificate.verify-certificate',['title'=>$this->title]);


    }
}
