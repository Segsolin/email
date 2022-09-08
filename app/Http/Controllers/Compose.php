<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;

class Compose extends Controller
{
    function sendMail(Request $req) {
         $email = new Email;
         $email->sender=$req->sender;
         $email->receiver=$req->receiver;
         $email->harm=$req->harm;
         $email->subject=$req->subject;
         $email->message=$req->message;
         $email->save();
         return redirect('compose');
    }
}
