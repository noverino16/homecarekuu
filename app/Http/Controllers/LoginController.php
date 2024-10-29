<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('products.index');
    }

    // Menampilkan form untuk membuat produk baru
    public function create()
    {
        return view('products.create');
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        // Validasi dan simpan produk
        // $request->validate([...]);

        // Product::create([...]);

        return redirect()->route('products.index');
    }

    // Menampilkan detail produk
    public function show($id)
    {
        return view('products.show', compact('id'));
    }

    // Menampilkan form untuk mengedit produk
    public function edit($id)
    {
        return view('products.edit', compact('id'));
    }

    // Mengupdate produk
    public function update(Request $request, $id)
    {
        // Validasi dan update produk
        // $request->validate([...]);

        // Product::find($id)->update([...]);

        return redirect()->route('products.index');
    }

    // Menghapus produk
    public function destroy($id)
    {
        // Product::find($id)->delete();

        return redirect()->route('products.index');
    }
}
