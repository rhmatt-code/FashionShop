<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function show(){
        $products = Product::with("category")->get();

        return view('admin/admin', ['products' => $products]);
    }

    public function logout(){
        Auth::logout();

        return redirect ('home');
    }

}
