<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function sigin(){
        return view('frontend.auth.sign-in');
    }
    public function signup(){
        return view('frontend.auth.sign-up');
    }
}
