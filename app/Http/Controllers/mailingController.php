<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\HaoSaudiMail;

class mailingController extends Controller
{
    // * http://localhost:8000/hao-email/welcome/azhr.mughl@gmail.com
    // * http://localhost:8000/hao-email/discount/azhr.mughl@gmail.com
    // * http://localhost:8000/hao-email/gift/azhr.mughl@gmail.com
    // * http://localhost:8000/hao-email/booking/azhr.mughl@gmail.com

    public function haoEmail($template, $email)
    {

        echo '<pre style="text-align:center; margin-top: 100px;">';
        echo '[' . $template . '] email sent to "' . $email . '"';
        echo '</pre>';

        $mailData = [];
        $mailData['template'] = $template;

        $to = $email ? $email : 'mister_azhar@yahoo.com';
        $subject = 'HaoSaudi | ' . $template;
        $markdown = 'Email.' . $template;
        // Mail::to($to)->send(new HaoSaudiMail($mailData));

        // $arrayEmails = ['someone@mail.com', 'stranger@mail.com'];
        // $emailSubject = 'My Subject';
        // $emailBody = 'Hello, this is my message content.';

        Mail::send(
            $markdown,
            ['data' => $mailData],
            function ($message) use ($to, $subject) {
                $message->to($to)->subject($subject);
            }
        );

        // echo '<div style="text-align:center; margin-top: 30px; color:green">Email Sent Successfully...!</div>';
    }
}
