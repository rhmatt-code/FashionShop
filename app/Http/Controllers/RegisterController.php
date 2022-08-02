<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(){
        return view('register');
    }

    public function store(Request $request){
        request() -> validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        User::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/');
    }

}
