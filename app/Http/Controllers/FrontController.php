<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Symfony\Component\HttpKernel\Profiler\Profile;

class FrontController extends Controller
{
    // menampilkan semua data produk
    public function produk()
    {
        $produk = Produk::latest()->get();
        return view('welcome', compact('produk'));
    }

    public function detail($id)
    {
        $produk = Produk::findOrFail($id);
        return view('detail', compact('produk'));
    }
}
