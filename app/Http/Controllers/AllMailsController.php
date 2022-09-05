<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;

class AllMailsController extends Controller
{
    function show() {
        $data = Email::all();
        return view('dashboard', ['mails'=>$data]);
    }
}
