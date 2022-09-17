@extends("admin.master");

@include("admin.navbar");

<div id="layoutSidenav_content">
    <main>
        <div class="card bg-light">
        <div class="card-body">
            <h3 class="card-title">Add Product</h3>
        </div>
        </div>
    <br>
    <div class="card bg-light">
      <div class="card-body">

        <form method="POST" action="{{ route ('update', $paypartners->id)}}" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label class="form-label" for="namabarang">Name Item: </label>
            <input class="form-control" type="text" name="name" placeholder="{{$paypartners->name}}">
          </div>
          <div class="form-group">
            <label class="form-label" for="harga">Tax: </label>
            <input class="form-control" type="number" name="tax" placeholder="{{$paypartners->tax}}">
          </div>
          <div class="form-group">
            <label class="form-label" for="gambarbarang">Image Item: </label>
            <input class="form-control" type="file" name="image" >
          </div>
          <br>
          <div class="form-group">
            <button type="submit" style="text-align: center;" class="btn btn-primary" name="databutton">Add</button>
          </div>
        </form>
      </div>
    </div>
    </main>
  </div>
