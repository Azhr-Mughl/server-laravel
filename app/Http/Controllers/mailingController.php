<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\HaoSaudiMail;

class mailingController extends Controller
{
    // * http://localhost:8000/haro-email/booking/mister_azhar@yahoo.com

    public function haoEmail($template, $email)
    {

        echo '<pre style="text-align:center; margin-top: 100px;">';
        echo 'Sending ['. $template. '] email to "'. $email . '"';
        echo '</pre>';

        // return;
        $to = $email ? $email : 'mister_azhar@yahoo.com';
        $mailData = [];
        Mail::to($to)->send(new HaoSaudiMail($mailData));

        // echo '<div style="text-align:center; margin-top: 30px; color:green">Email Sent Successfully...!</div>';
    }
}
