<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PayPartner;

class PayPartnerController extends Controller
{
    public function show(){
        $paypartner = DB::table('pay_partners')->get();

        return view('admin/paypartner/paypartner', ['paypartner' => $paypartner]);
    }

    public function add(){
        $pay_partners = PayPartner::all();

        return view('admin/paypartner/add', compact('pay_partners'));
    }

    public function store(Request $request){
        request() -> validate([
            'name' => ['required'],
            'tax' => ['required'],
            'image' => ['required']
        ]);

        PayPartner::create([
            'name' => $request->name,
            'tax' => $request->tax,
            'image' => $request->image,
        ]);

        return redirect('paypartner');
    }

    public function edit($id){
        $paypartner = PayPartner::find($id);

        return view('admin/paypartner/edit', compact('pay_partner'));
    }

    public function update(Request $request, $id){
        $products = PayPartner::find($id);
        $products->name = $request->name;
        $products->update();

        return redirect('paypartner');
    }

    public function delete($id){
        PayPartner::find($id)->delete();

        return redirect('paypartner');
    }
}
