<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function create()
    {
        return view('auth.adminLogin');
    }
   
    public function adminAuthentiate(Request $request) {
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password, 'email' => 'admin@admin.com'])) {
            $request->session()->regenerateToken();
            return redirect("/admin");
        }
        return back()->withErrors(['failed'=>"Invalid Username/Password"]);
    }
    
}
