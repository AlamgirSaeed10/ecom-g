<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
class EcomController extends Controller
{
    public function index()
    {
        $title = "We Empower Entrepreneurs";
        return view('pages.index', compact('title'));
    }

    public function about()
    {
        $title = "About Us";
        return view('pages.about', compact('title'));
    }
    public function courses()
    {
        $title = "Courses";
        return view('pages.courses', compact('title'));
    }

    public function services()
    {
        $title = "Services";
        return view('pages.services', compact('title'));
    }

    public function contact_us()
    {
        $title = "Contact Us";
        return view('pages.contact-us', compact('title'));
    }

    public function contact_us_form(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 1;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'muhammadalamgir10@gmail.com';
            $mail->Password = 'znensgwmxpgeflzi';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom($data['email'], $data['name']);

            $mail->addAddress("muhammadalamgir10@gmail.com",$data['name']);
            $mail->Subject = 'Contact us Form Query From ' . $request->name;
            $mail->Body .= "Name : " . $data['name'] . "<br>";
            $mail->Body .= "Email : " . $data['email'] . "<br>";
            $mail->Body .= "Subject : " . $data['subject'] . "<br>";
            $mail->Body .= "Message : " . $data['message'] . "<br>";

            $mail->isHTML(true);
            $mail->send();
            $mail->ClearAddresses();

            return redirect()->back()->with('success','Thank you for contacting Us. Our team will contact you shortly!  ');
        } catch (Exception $e) {
            return redirect()->back()->with('success','Email could not be sent. Error: ', $mail->ErrorInfo);
        }
    }

    public function privacy()
    {
        $title = "Privacy Policy";
        return view('pages.privacy-policy', compact('title'));
    }

    public function sitemap()
    {
        $title = "Sitemap";
        return view('pages.sitemap', compact('title'));
    }
    public function newsletter(Request $request){
        DB::table('newsletter')->insert(['NewsletterEmail'=>$request->NewsletterEmail]);
        return redirect()->back()->with('success','You have subscribed successfully. Our team will contact you shortly');
    }
}

