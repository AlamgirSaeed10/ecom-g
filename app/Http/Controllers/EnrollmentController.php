<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EnrollmentController extends Controller
{

    public string $title = "Student Enrollment";

    public function enrollment()
    {

        return view('pages.enrollment', ['title' => $this->title]);

    }

    public function store_enrollment(Request $request)
    {

        $en_data = [
            'PlanID' => $request->PlanID,
            'CourseCode' => implode(',', $request->course_selected),
            'StudentID' => $request->StudentID,
            'StudentName' => $request->StudentName,
            'FatherName' => $request->FatherName,
            'StudentCNIC' => $request->StudentCNIC,
            'StudentPhone' => $request->StudentPhone,
            'StudentCity' => $request->StudentCity,
            'StudentEmail' => $request->StudentEmail,
            'StudentEducation' => $request->StudentEducation,
            'TrainingMode' => $request->TrainingMode,
            'PaymentOption' => $request->PaymentOption,
            'KnowAboutUs' => $request->KnowAboutUs,
        ];

        if ($en_data['PlanID'] === '2' && count($request->course_selected) < 2) {
            return redirect()->back()->with('error', 'Please select a second course');
        }else{

        $invoiceNo = Str::replaceFirst('STU', 'INV', $request->StudentID);
        $plan = DB::table('course_plan')->where('PlanID', $request->PlanID)->get();
        $enroll_cnic = DB::table('enrollment')->where('StudentCNIC', $request->StudentCNIC)->get();
        $inv_data = [
            'InvoiceNo' => $invoiceNo,
            'PaymentAmount' => $plan[0]->PricePKR,
            'PaymentType' => $request->PaymentOption,
            'PaymentDate' => Carbon::now()->addDays(7)->format('Y-m-d'),
            'PaymentStatus' => 'Pending',
            'PlanType' => $plan[0]->PlanType,
            'StudentID' => $request->StudentID,
            'CourseCode' => implode(',', $request->course_selected),
        ];
        if (count($enroll_cnic) > 0) {
            return redirect()->route('pages.enrollment')->with('error', 'Student already registered with this CNIC.');
        }


        if (count($en_data) > 0 && count($inv_data) > 0) {

            DB::table('enrollment')->insert($en_data);
            DB::table('course_payment')->insert($inv_data);


            $mail = new PHPMailer(true);
            try {
                $mail->SMTPDebug = 1;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'info.ecomgladiators@gmail.com';
                $mail->Password = 'ldgmdqxwachhqqqi';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->setFrom('admission@ecomgladiators.com', 'Ecomgladiators');

                $mail->addAddress('info.ecomgladiators@gmail.com', 'Ecomgladiators');
                $mail->Subject = 'Student Enrollment Form ' . $request->StudentName;
                $mail->Body .= "Plan ID: " . $request->PlanID . "<br>";
                $mail->Body .= "Course Code: " . implode(',', $request->course_selected) . "<br>";
                $mail->Body .= "Student ID: " . $request->StudentID . "<br>";
                $mail->Body .= "Student Name: " . $request->StudentName . "<br>";
                $mail->Body .= "Father's Name: " . $request->FatherName . "<br>";
                $mail->Body .= "Student CNIC: " . $request->StudentCNIC . "<br>";
                $mail->Body .= "Student Phone: " . $request->StudentPhone . "<br>";
                $mail->Body .= "Student City: " . $request->StudentCity . "<br>";
                $mail->Body .= "Student Email: " . $request->StudentEmail . "<br>";
                $mail->Body .= "Student Education: " . $request->StudentEducation . "<br>";
                $mail->Body .= "Training Mode: " . $request->TrainingMode . "<br>";
                $mail->Body .= "Payment Option: " . $request->PaymentOption . "<br>";
                $mail->Body .= "How did you know about us? " . $request->KnowAboutUs . "<br>";

                $mail->isHTML(true);
                $mail->send();
                $mail->ClearAddresses();

                return redirect()->back()->with('success', 'Congratulations on successfully enrolling! Our team will be in touch with you shortly');
            } catch (Exception $e) {
                return redirect()->back()->with('success', 'Email could not be sent. Error: ', $mail->ErrorInfo);
            }
            }
        }
        return redirect()->back()->with('success', 'Our team will contact you shortly... Please be patient.');
    }
}

