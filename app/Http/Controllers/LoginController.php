<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(){
        return view('/login');

    }

    public function dashboard(){
        return view('/dashboard');
    }

    

}