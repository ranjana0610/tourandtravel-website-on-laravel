<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    public function contact(){
        return view('frontend.contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email3' => 'required|email',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);
    
        $mail = new PHPMailer(true);
    
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.hostinger.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'ranjanamishra@exportersway.com';
            $mail->Password   = 'Ran#@jana#@12';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;
    
            //Recipients
            $mail->setFrom('ranjanamishra@exportersway.com', 'Contact Form');
            $mail->addAddress('missmishra0610@gmail.com', 'Ranjana');
    
            //Content
            $mail->isHTML(true);
            $mail->Subject = 'New Inquiri - MyTourizi';
    
            $mailBody = "
                <h2>New Tour Booking Request</h2>
                <p><strong>Name:</strong> {$request->name}</p>
                <p><strong>Email:</strong> {$request->email3}</p>
                <p><strong>Phone:</strong> {$request->phone}</p>
                <p><strong>Message:</strong><br>{$request->message}</p>
            ";
    
            $mail->Body    = $mailBody;
            $mail->AltBody = strip_tags($mailBody);
    
            $mail->send();
    
            return back()->with('success', 'Email sent successfully.');
        } catch (Exception $e) {
            return back()->with('error', "Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    }
    
}
