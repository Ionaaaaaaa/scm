<?php

namespace App\Http\Controllers;
use App\Models\supplier;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function create()
    {
        $suppliers = supplier::all();
        return view('supplier.supplier', compact('suppliers'));
    }

    public function store(Request $request)
    {
        // Logic to store supplier data
        // Validate and save the supplier information
        // Redirect or return a response
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
        ]);
        supplier::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
        ]);
        return redirect()->route('supplier.create')->with('success', 'Supplier created successfully.');
    }
}
