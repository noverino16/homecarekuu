<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //namespace App\Http\Controllers;

use Illuminate\Http\Request;
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'deskripsi_barang' => 'required|string',
            'harga_barang' => 'required|numeric',
            'stok_barang' => 'required|integer',
            'gambar_barang' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the uploaded image
        $imagePath = $request->file('gambar_barang')->store('images', 'public');

        // Save the item data to the database (create the model if needed)
        // Example:
        // Item::create([
        //     'nama_barang' => $request->nama_barang,
        //     'deskripsi_barang' => $request->deskripsi_barang,
        //     'harga_barang' => $request->harga_barang,
        //     'stok_barang' => $request->stok_barang,
        //     'gambar_barang' => $imagePath,
        // ]);

        return back()->with('success', 'Item berhasil disimpan!');
    }


}
