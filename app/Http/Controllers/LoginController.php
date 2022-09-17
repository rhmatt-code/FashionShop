<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login(){
        return view('login');

    }

    public function actionlogin (Request $request){
    $data = [
        'email' => $request->input('email'),
        'password' => $request->input('password'),
    ];

    if (Auth::Attempt($data)) {
        if(Auth::user()->role == 1){
            return redirect("admin");
        }
        else{
            return redirect("home");
        }
    }else{
        Session::flash('error', 'Email atau Password Salah');
        return redirect('login');
    }

    }


}
