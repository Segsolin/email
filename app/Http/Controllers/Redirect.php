<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;

class Redirect extends Controller
{
   public function redir() {
     return redirect(RouteServiceProvider::HOME);
   }
}
