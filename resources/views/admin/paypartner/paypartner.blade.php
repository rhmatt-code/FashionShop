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
                            <th>Name Pay Partners</th>
                            <th>Tax</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name Pay Partners</th>
                            <th>Tax</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($paypartner as $paypartners)
                        <tr>
                            <td>{{ $paypartners->id }}</td>
                            <td>{{ $paypartners->name }}</td>
                            <td>{{ $paypartners->tax }}</td>
                            <td>
                                <img src="{{ asset('storage/paypartners/' . $categorys->image) }}" width="80px">
                            </td>
                            <td>
                                <a href="{{ route ('paypartner/delete')}}{{ $categorys->id }}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route ('paypartner/add')}}">Add Pay Partner</a>
            </div>
        </div>
    </main>
</div>
