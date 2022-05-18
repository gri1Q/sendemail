<?php

namespace App\Http\Controllers;

use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function send()
    {
      $mail = new DemoEmail();
      Mail::to('otpravkatestovaya@gmail.com')->send($mail);
    }
    
}
