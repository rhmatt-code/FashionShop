@extends("admin.master");

@include("admin.navbar");

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Category Table
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name Category</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name Category</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($category as $categorys)
                        <tr>
                            <td>{{ $categorys->id }}</td>
                            <td>{{ $categorys->name }}</td>
                            <td>
                                <img src="{{ asset('storage/categories/' . $categorys->image) }}" width="80px">
                            </td>
                            <td>
                                <a href="{{ route ('category/delete', $categorys->id )}}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{route('category/add')}}">Add Category</a>
            </div>
        </div>
    </main>
</div>
