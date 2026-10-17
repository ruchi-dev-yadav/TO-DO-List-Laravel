<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function register(){
return view('auth.register');
    }


    public function login(){
        return view('auth.login');
    }
    }
