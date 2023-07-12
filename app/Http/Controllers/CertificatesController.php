<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CertificatesController extends Controller
{
    public string $title = "Verify Certificate";

    public function certificate()
    {
        return view('verify-certificate.certificate', ['title' => $this->title]);
    }

    public function verify_certificate(Request $request)
    {
        $CertID = $request->CertificateNo;
        return $this->extracted($CertID);

    }

    public function verify_certificate_online($CertID)
    {
        return $this->extracted($CertID);

    }

    public function extracted(mixed $CertID):
    \Illuminate\Contracts\Foundation\Application|
    \Illuminate\Http\RedirectResponse|
    \Illuminate\Contracts\View\View|
    \Illuminate\Foundation\Application|
    \Illuminate\Contracts\View\Factory
    {
        $title = "Verify Certificate";
        $Cert_ID = DB::table('certificates')->where('CertificateNo', $CertID)->first();

        if($Cert_ID !== null){
            $stdDetail = DB::table('enrollment')->where('StudentID', $Cert_ID->StudentID)->get();

            $courseCode = [];
            foreach ($stdDetail as $value) {
                $courseCode = explode(',', $value->CourseCode);
            }

            if (($courseCode[0] === $Cert_ID->CourseCode) && ($stdDetail[0]->StudentID === $Cert_ID->StudentID)) {
                $course = DB::table('courses_offered')->where('CourseCode', $Cert_ID->CourseCode)->get();
                $courseName = $course[0]->CourseName;
                $stdName = $stdDetail[0]->StudentName;
                $compDate = $Cert_ID->CompilitionDate;

//            return view('verify-certificate.verify-certificate', ['title' => $this->title , 'courseName','stdName','compDate'] );
                return view('verify-certificate.verify-certificate', compact('title', 'courseName', 'stdName', 'compDate','CertID'));

            }

        }else{
            return redirect()->back()->with('error', 'Invalid Certificate Number. Please contact the Certificate Provider');
        }

    }

}
