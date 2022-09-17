@extends("admin.master");

@include("admin.navbar");

<div id="layoutSidenav_content">
    <main>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Products
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Update Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Update Stock</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td><img src="{{ asset('storage/product/' .$product->image) }}" width="60px"></td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->updated_at }}</td>
                            <td>
                                <a href="{{route('edit', $product->id)}}">Edit</a>
                                |
                                <a href="{{route('delete', $product->id)}}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route ('product/add')}}">Add Product</a>
            </div>
        </div>
    </main>
</div>
