<!-- filepath: d:\kulyeah\SCM\scm\resources\views\supplier\supplier.blade.php -->
@extends('layouts.main')
@section('main')
<div class="container mt-4">
    <div class="card shadow mb-4">
        <div class="card-header bg-secondary text-white">
            <h4>Tambah Supplier Baru</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('/supplier') }}" method="POST" class="mb-4">
                @csrf
                <div class="row mb-2">
                    <div class="col">
                        <div>Nama : </div>
                        <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                    </div>
                    <div class="col">
                        <div>Alamat : </div>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                    </div>
                    <div class="col">
                        <div>No. Telepon : </div>
                        <input type="text" name="telepon" class="form-control" placeholder="Telepon" required>
                    </div>
                    <div class="col">
                      <div>Email : </div>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header bg-secondary text-white">
            <h4>Data Supplier</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($suppliers as $supplier)
                        <tr>
                            <td>{{ $supplier->id }}</td>
                            <td>{{ $supplier->nama }}</td>
                            <td>{{ $supplier->alamat }}</td>
                            <td>{{ $supplier->telepon }}</td>
                            <td>{{ $supplier->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection