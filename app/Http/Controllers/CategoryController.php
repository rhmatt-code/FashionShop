<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function show(){
        $category = DB::table('categories')->get();
        // return public_path('../');
        return view('admin/category/category',['category' => $category]);
    }

    public function add(){
        return view('admin/category/add');
    }

    public function store(Request $request){
        request() -> validate([
            'name' => ['required'],
            'image' => ['required'],
        ]);

        $request->image->store('categories','public');
        Category::create([
            'name' => $request->name,
            'image' => $request->image->hashName(),
        ]);

        return redirect('category');
    }
    public function delete($id){
        Category::find($id)->delete();

        return redirect('category');
    }
}
