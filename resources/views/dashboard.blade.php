<!-- filepath: d:\kulyeah\SCM\scm\resources\views\dashboard.blade.php -->
@extends('layouts.main')
@section('main')
<div class="container mt-4">
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card text-white bg-secondary mb-3 shadow">
                <div class="card-body">
                    <h5 class="card-title">Total Supplier</h5>
                    <h2 class="card-text">{{ $totalSupplier }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3 shadow">
                <div class="card-body">
                    <h5 class="card-title">Total Barang Keluar</h5>
                    <h2 class="card-text">{{ $totalBarangKeluar }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3 shadow">
                <div class="card-body">
                    <h5 class="card-title">Total Penjualan</h5>
                    <h2 class="card-text">{{ $totalPenjualan }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header bg-dark text-white">
            <h4>Ringkasan Stok Barang</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Gudang</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stokPerBarang as $stok)
                        <tr>
                            <td>{{ $stok->nama }}</td>
                            <td>{{ $stok->jumlah }}</td>
                            <td>{{ $stok->gudang }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection