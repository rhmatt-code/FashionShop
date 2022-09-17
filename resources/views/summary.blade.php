@extends('layouts.master')

@section('title', 'Home')

    <div class="uk-container uk-position-large">
    <div class="uk-card uk-card-default uk-width-1-1@m uk-box-shadow-large uk-container ">
        <div class="">
            <div class="uk-card-header uk-box-shadow-small">
            <h2 class="uk-text-center">THANK YOU FOR ORDERING!</h2>
                <b>Customer Name</b>
                <span>: {{Auth::user()->name}}</span>
                <br>
                <b>Transaction Code</b>
                <span>: {{$transaction->code_transaksi}}</span>
                <br>
                <b>Items</b>
                <span>:</span>
            </div>
            <table class="uk-table uk-table-divider">
                <thead>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th class="uk-width-small">Price</th>
                </thead>
                <tfoot>
                    <th><h3><strong>TOTAL PRICE</strong></h3></th>
                    <th></th>
                    <th><h3>Rp. <strong>{{$total_harga}}</strong></h3></th>
                </tfoot>
                <tbody>
                    @foreach($transaction->details as $detail)
                    <tr>
                        <td>{{$detail->product->name}}</td>
                        <td>{{$detail->amount}}</td>
                        <td>Rp. {{$detail->product->price * $detail->amount}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{url('home')}}" class="uk-button uk-button-secondary uk-container">Home</a>
        </div>
    </div>

