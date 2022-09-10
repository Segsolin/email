<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AllMailsController extends Controller
{
    function show() {
        $data = Email::all();
        return view('dashboard', ['mails'=>$data]);
    }

   

    function findReceived() {
        
            $data = DB::table('emails')->where('harm', '0')
            ->where('receiver', Auth::user()->email)
            ->get();
            return view('received', ['mails' => $data]);
    }

    function findHam() {
        
            $data = DB::table('emails')->where('harm', '0')
            ->get();
            return view('ham', ['mails' => $data]);
    }

     function findSent() {
      
            $data = DB::table('emails')
            ->where('sender', Auth::user()->email)
            ->get();
            return view('sent', ['mails' => $data]);
    }

     function findSpam() {
            $data = DB::table('emails')->where('harm', '1')
            ->where('receiver', Auth::user()->email)
            ->get();
            return view('received', ['mails' => $data]);
    }

     function findSpams() {
            $data = DB::table('emails')->where('harm', '1')
            ->get();
            return view('spams', ['mails' => $data]);
    }

    function updateSpam(Request $req) {
        $data=Email::find($req->id);
        $data->harm=$req->harm;
        $data->save();
        return redirect('ham');
    }

    function updateHam(Request $req) {
        $data=Email::find($req->id);
        $data->harm=$req->harm;
        $data->save();
        return redirect('spams');
    }
}
