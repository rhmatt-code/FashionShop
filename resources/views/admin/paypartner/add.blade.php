@extends("admin.master");

@include("admin.navbar");

<div id="layoutSidenav_content">
    <main>
        <div class="card bg-light">
        <div class="card-body">
            <h3 class="card-title">Add PayPartners</h3>
        </div>
        </div>
        <br>
        <div class="card bg-light">
        <div class="card-body">
            <form method="POST" action="{{ route('paypartner/store')}}" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label class="form-label" for="namabarang">Name PayPartners: </label>
                <input class="form-control" type="text" name="name">
                @error('name')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="gambarbarang">Tax: </label>
                <input class="form-control" type="text" name="tax" >
                @error('tax')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                @enderror
            </div>
            </div>
            <div class="form-group">
            <label class="form-label" for="gambarbarang">Image: </label>
            <input class="form-control" type="file" name="image" >
            @error('image')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
            @enderror
            </div>
            <br>
            <div class="form-group">
                <button type="submit" style="text-align: center;" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </main>
</div>

  </div>
