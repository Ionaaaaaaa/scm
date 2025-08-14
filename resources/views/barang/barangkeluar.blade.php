<!-- filepath: d:\kulyeah\SCM\scm\resources\views\barang\barangkeluar.blade.php -->
@extends('layouts.main')
@section('main')
<div class="container mt-4">
    <div class="card shadow mb-4">
        <div class="card-header bg-danger text-white">
            <h2>Input Barang Keluar</h2>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @elseif(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form method="POST" action="{{ route('barangkeluar.store') }}">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <div>Jenis Barang :</div>
                        <select class="form-select" id="nama_barang" name="nama_barang" required>
                            <option value="">-- Pilih Jenis Barang --</option>
                            @foreach($barangOptions as $barang)
                                <option value="{{ $barang->nama }}">{{ $barang->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <div>Pilih Gudang :</div>
                        <select class="form-select" id="gudang" name="gudang" required>
                            <option value="">-- Pilih Gudang --</option>
                            @foreach($gudangOptions as $gudang)
                                <option value="{{ $gudang->gudang }}">{{ $gudang->gudang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <div>Jumlah (M/Pcs):</div>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" placeholder="Jumlah" required>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-danger">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header bg-secondary text-white">
            <h4>Data Barang Keluar Sebelumnya</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Jenis Barang</th>
                        <th>Gudang</th>
                        <th>Jumlah (M/Pcs)</th>
                        <th>Tanggal Keluar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataBarangKeluar as $barang)
                        <tr>
                            <td>{{ $barang->stok->nama ?? '-' }}</td>
                            <td>{{ $barang->stok->gudang ?? '-' }}</td>
                            <td>{{ $barang->jumlah }}</td>
                            <td>{{ $barang->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection