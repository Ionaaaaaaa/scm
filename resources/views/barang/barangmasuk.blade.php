<!-- filepath: d:\kulyeah\SCM\scm\resources\views\barang\barangmasuk.blade.php -->
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
                <div class="row mb-3">
                    <div class="col">
                        <div>Nama Barang : </div>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang" required>
                    </div>
                    <div class="col">
                        <div>Jumlah Barang (M/Pcs) : </div>
                        <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" placeholder="Jumlah Barang" required>
                    </div>
                    <div class="col">
                        <div>Pilih Gudang</div>
                        <select class="form-select" id="gudang" name="gudang" required>
                            <option value="">-- Pilih Gudang --</option>
                            <option value="Gudang A">Gudang A</option>
                            <option value="Gudang B">Gudang B</option>
                            <option value="Gudang C">Gudang C</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4>Stok Jenis Barang</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Barang</th>
                        <th>Jumlah (M/Pcs)</th>
                        <th>Gudang</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($stoks as $stok)
                    <tr>
                        <td>{{ $stok->id }}</td>
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