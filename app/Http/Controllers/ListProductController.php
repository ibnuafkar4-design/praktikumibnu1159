<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class ListProductController extends Controller
{
    public function show()
    {
        $data = Produk::get();
        foreach ($data as $produk) {
            $nama[] = $produk->nama;
            $deskripsi[] = $produk->deskripsi;
            $harga[] = $produk->harga;
        }
        return view('list_produk', compact('nama', 'deskripsi', 'harga'));
    }
}
