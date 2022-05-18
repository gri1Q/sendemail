<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function send()
    {
    $otpravka= new SendMail();
    Mail::to('otpravkatestovaya@gmail.com')->send($otpravka);
    }
}
