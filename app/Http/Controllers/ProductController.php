<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Category;
use App\Models\Product;


class ProductController extends Controller
{
    public function show(){
        $products = Product::with("category")->get();

        return view('admin/product/product',['products' => $products]);
    }

    public function add(){
        $categories = Category::all();

        return view('admin/product/addproduct', compact('categories'));
    }

    public function store(Request $request){
        request() -> validate([
            'name' => ['required'],
            'image' => ['required'],
            'description' => ['required'],
        ]);

        $request->image->store('product','public');
        Product::create([
            'name' => $request->name,
            'image' => $request->image->hashName(),
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category,
            'description' => $request->description,
        ]);

        return redirect('product');
    }

    public function edit($id){
        $products = Product::find($id);
        $categories = Category::all();

        return view('admin/product/edit', compact('products', 'categories'));
    }

    public function update(Request $request, $id){
        $products = Product::find($id);
        $products->name = $request->name;
        $products->category_id = $request->category;
        $products->stock = $request->stock;
        $products->price = $request->price;
        $products->description = $request->description;
        if ($request->input('image')){
            $products->image = $request->image;
        }
        $products->update();

        return redirect('product');
    }

    public function delete($id){
        Product::find($id)->delete();

        return redirect('product');
    }
}

