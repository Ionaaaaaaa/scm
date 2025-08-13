<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('barang.index'); // Assuming you have a view named 'barang.index'
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         return view('barang.barangmasuk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    // // Data dummy barang keluar
    // $dataBarangKeluar = [
    //     (object)[
    //         'jenis_barang' => 'Kaos',
    //         'nama_barang' => 'Kaos Polos',
    //         'jumlah' => 10,
    //         'nama_penerima' => 'Budi',
    //         'harga' => 50000,
    //         'resi' => 'RESI123',
    //         'created_at' => now()->format('Y-m-d H:i'),
    //     ],
    //     (object)[
    //         'jenis_barang' => 'Jaket',
    //         'nama_barang' => 'Jaket Bomber',
    //         'jumlah' => 5,
    //         'nama_penerima' => 'Siti',
    //         'harga' => 150000,
    //         'resi' => 'RESI456',
    //         'created_at' => now()->format('Y-m-d H:i'),
    //     ],
    // ];
    //  return view('barang.barangkeluar', compact('dataBarangKeluar'));
    // }
    //ini klo mau pake db
    return view('barang.barangkeluar');
    }
}
