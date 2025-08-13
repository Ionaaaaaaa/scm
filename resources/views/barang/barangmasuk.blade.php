@extends('layouts.main')
@section('main')
<div class="container mt-4">
    <div class="card shadow mb-4">
        <div class="card-header bg-primary text-white">
            <h2>Input Barang Masuk</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('barangmasuk.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="jenis_barang" class="form-label">Jenis Barang</label>
                    <select class="form-select" id="jenis_barang" name="jenis_barang" required>
                        <option value="">-- Pilih Jenis Barang --</option>
                        <option value="Kaos">Kaos</option>
                        <option value="Jaket">Jaket</option>
                        <option value="Hoodie">Hoodie</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                </div>
                <div class="mb-3">
                    <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                    <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4>Stok Jenis Barang</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Jenis Barang</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stokBarang ?? [] as $jenis => $stok)
                        <tr>
                            <td>{{ $jenis }}</td>
                            <td>{{ $stok }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection