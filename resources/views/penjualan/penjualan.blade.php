<!-- filepath: d:\kulyeah\SCM\scm\resources\views\penjualan\penjualan.blade.php -->
@extends('layouts.main')
@section('main')
<div class="container mt-4">
    <div class="card shadow mb-4">
        <div class="card-header bg-primary text-white">
            <h4>Input Penjualan</h4>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form method="POST" action="{{ route('penjualan.store') }}">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <div>Jenis Barang : </div>
                        <select name="jenis_barang" class="form-select" required>
                            <option value="">-- Pilih Jenis Barang --</option>
                            <option value="kaos">Kaos</option>
                            <option value="jaket">Jaket</option>
                            <option value="hoodie">Hoodie</option>
                        </select>
                    </div>
                    <div class="col">
                        <div>Jumlah : </div>
                        <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" min="1" required>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header bg-secondary text-white">
            <h4>Data Penjualan</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Jenis Barang</th>
                        <th>Jumlah</th>
                        <th>Tanggal Penjualan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penjualans as $penjualan)
                        <tr>
                            <td>{{ $penjualan->jenis_barang }}</td>
                            <td>{{ $penjualan->jumlah }}</td>
                            <td>{{ $penjualan->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection