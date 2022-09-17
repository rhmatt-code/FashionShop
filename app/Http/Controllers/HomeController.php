<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Transactions;
use App\Models\TransactionDetail;

class HomeController extends Controller
{


    public function show(){
        return view('profile');
    }

    public function update(Request $request){
        $request->users()->update(
            $request->all()
        );

        return redirect('profile');
    }

    public function actionlogout(){
        Auth::logout();
        return redirect('home');
    }

    public function addCart(Request $request, $product_id)
    {
        $last_transaction = Transactions::where([
            'user_id' => Auth::user()->id,
            'done' => false,
        ])->get()->last();

        if (! $last_transaction){
            $last_transaction = $this->new_transaction();
        }
        $this->add_details($request, $last_transaction->id, $product_id);

        return redirect('home');
    }

    public function new_transaction()
    {
        $transaction = Transactions::create([
            'user_id' => Auth::user()->id,
            'date' => date("Ymd"),
            'done' => false,
            'code_transaksi' => 'none',
        ]);
        return $transaction;
    }

    public function add_details(Request $request, $transaction_id, $product_id)
    {
        $checkTransaction = TransactionDetail::where([
            'transactions_id' => $transaction_id,
            'product_id' => $product_id,
        ])->get()->last();


        if ($checkTransaction){
          $detail = TransactionDetail::find($checkTransaction->id);
          $detail->amount = $detail->amount + 1;
          $detail->update();
        }
        else{
            TransactionDetail::create([
                'product_id' => $product_id,
                'amount' => 1,
                'transactions_id' => $transaction_id,

            ]);
        }
    }

    public function cart(){
        $category = Category::all();
        $transaction = Transactions::with('details', 'details.product')->where([
            'user_id' => Auth::user()->id,
            'done' => false,
        ])->get()->last();

        $totalproduct = 0;

        if (! $transaction){
            $transaction = $this->new_transaction();
        }

        return redirect('cart', compact('transaction','category','totalproduct'));
    }

    public function cartToAll(Int $mode){
        if(Auth::check()){
            $transaction = Transactions::with('details', 'details.product')->where([
                'user_id' => Auth::user()->id,
                'done' => false,
            ])->get()->last();

            $totalproduct = 0;

            if (! $transaction){
                $transaction = $this->new_transaction();
            }

            foreach($transaction->details as $detail){
                $totalproduct += $detail->amount;
            }

            switch ($mode){
                case 1:
                    return $transaction;
                    break;
                case 2:
                    return $totalproduct;
                    break;
            }
        }
    }

    public function home(){
        $products = Product::with("category")->get();
        $category = DB::table('categories')->get();;

        $transaction = $this->cartToAll(1);
        $totalproduct = $this->cartToAll(2);


        return view('home',compact("products", "category","transaction","totalproduct"));
    }

    public function deleteCart($detail_id)
    {
        $checkTransaction = TransactionDetail::find($detail_id);

        if ($checkTransaction->amount > 1){
          $detail = TransactionDetail::find($checkTransaction->id);
          $detail->amount = $detail->amount - 1;
          $detail->update();
        }
        else{
            $detail = TransactionDetail::find($checkTransaction->id)->delete();
        }

        return redirect('home');
    }

    public function checkout($transaction_id)
    {
        $category = Category::all();
        $transaction = Transactions::find($transaction_id);
        $transaction->done = true;
        $transaction->code_transaksi = 'INV/' . date('Ymd') . $transaction_id;
        $transaction->update();



        $total_harga = 0;
        $stock = 0;
        $transaction = Transactions::with('details', 'details.product')->where("id", $transaction_id)->get()->last();



        foreach($transaction->details as $detail){
            $total_harga += $detail->amount * $detail->product->price;
            $stock = $detail->product->stock - 1;

            $p = Product::find($detail->product->id);


            $p->stock = $p->stock - $detail->amount;
            $p->update();
            }

        return view('summary', compact('transaction', 'category', 'total_harga'));
        }
    }





