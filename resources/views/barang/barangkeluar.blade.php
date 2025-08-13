@extends('layouts.main')
@section('main')
<div class="container mt-4">
    <div class="card shadow mb-4">
        <div class="card-header bg-danger text-white">
            <h2>Input Barang Keluar</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('barangkeluar.store') }}">
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
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                </div>
                <div class="mb-3">
                    <label for="nama_penerima" class="form-label">Nama Penerima</label>
                    <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" required>
                </div>
                <div class="mb-3">
                    <label for="resi" class="form-label">Resi</label>
                    <input type="text" class="form-control" id="resi" name="resi" required>
                </div>
                <button type="submit" class="btn btn-danger">Simpan</button>
            </form>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header bg-secondary text-white">
            <h4>Data Barang Keluar Sebelumnya</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Jenis Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Nama Penerima</th>
                        <th>Harga</th>
                        <th>Resi</th>
                        <th>Tanggal Keluar</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- @foreach($dataBarangKeluar ?? [] as $barang)
                        <tr>
                            <td>{{ $barang->jenis_barang }}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->jumlah }}</td>
                            <td>{{ $barang->nama_penerima }}</td>
                            <td>{{ $barang->harga }}</td>
                            <td>{{ $barang->resi }}</td>
                            <td>{{ $barang->created_at }}</td>
                        </tr>
                    @endforeach -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection