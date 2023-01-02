<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class ApiSendMailController extends Controller
{
		
    public static function send($email) {
		Mail::to($email)->send(new SendMail());
    }
}
