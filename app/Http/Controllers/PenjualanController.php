<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penjualan;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualans = penjualan::latest()->get();
        return view('penjualan.penjualan', compact('penjualans'));
    }

    public function create()
    {
        return view('penjualan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_barang' => 'required|in:kaos,jaket,hoodie',
            'jumlah' => 'required|integer|min:1',
        ]);

        penjualan::create([
            'jenis_barang' => $request->jenis_barang,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil disimpan!');
    }
}
