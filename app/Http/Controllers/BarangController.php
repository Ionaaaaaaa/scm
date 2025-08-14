<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stok;
use App\Models\barangKeluar;
use App\Models\penjualan;
use App\Models\supplier;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    return view('barang.index'); // Assuming you have a view named 'barang.index'  
    }

    public function dashboard()
    {
        $totalSupplier = supplier::count();
        $totalStok = stok::sum('jumlah');
        $totalBarangKeluar = barangKeluar::sum('jumlah');
        $totalPenjualan = penjualan::sum('jumlah');

        // Data ringkasan stok per barang
        $stokPerBarang = stok::select('nama', 'jumlah', 'gudang')->get();

        return view('dashboard', compact(
            'totalSupplier',
            'totalStok',
            'totalBarangKeluar',
            'totalPenjualan',
            'stokPerBarang'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stoks= stok::all(); // Fetch all stock items from the database
        return view('barang.barangmasuk', compact('stoks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $stoks= stok::all();
        $request->validate([
            'gudang' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'jumlah_barang' => 'required|integer|min:1',
        ]);
        $namaBarang = strtolower($request->nama_barang);
        // Cek apakah stok dengan nama dan gudang yang sama sudah ada
        $stoks = stok::whereRaw('LOWER(nama) = ?', [$namaBarang])
                    ->where('gudang', $request->gudang)
                    ->first();

        if ($stoks) {
            // Jika ada, tambahkan jumlahnya
            $stoks->jumlah += $request->jumlah_barang;
            $stoks->save();
        } else {
            // Jika tidak ada, buat data baru
            stok::create([
                'nama' => $request->nama_barang,
                'jumlah' => $request->jumlah_barang,
                'gudang' => $request->gudang,
            ]);
        }

        return redirect()->back()->with('success', 'Data barang masuk berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function keluarCreate()
    {
        $stoks = stok::all();
        $barangOptions = $stoks->unique('nama');
        $gudangOptions = $stoks->unique('gudang');
        $dataBarangKeluar = barangKeluar::with('stok')->latest()->get();

        return view('barang.barangkeluar', compact('dataBarangKeluar', 'barangOptions', 'gudangOptions'));
    }

    public function keluarStore(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string',
            'gudang' => 'required|string',
            'jumlah' => 'required|integer|min:1',
        ]);

        // Cari stok sesuai nama dan gudang
        $stok = stok::where('nama', $request->nama_barang)
                    ->where('gudang', $request->gudang)
                    ->first();

        if (!$stok) {
            return back()->with('error', 'Stok tidak ditemukan!');
        }

        if ($stok->jumlah < $request->jumlah) {
            return back()->with('error', 'Stok tidak cukup!');
        }

        // Kurangi stok
        $stok->jumlah -= $request->jumlah;
        $stok->save();

        // Simpan barang keluar
        barangKeluar::create([
            'id_barang' => $stok->id,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->back()->with('success', 'Barang keluar berhasil disimpan!');
    }
    

    


}
