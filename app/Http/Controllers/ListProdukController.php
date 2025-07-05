<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    // Tampilkan halaman daftar produk dan form input
    public function index()
    {
        $produk = Produk::all();

        // Kirim data produk ke view
        return view('list_produk', compact('produk'));
    }

    // Simpan produk baru
    public function simpan(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
        ]);

        // Simpan ke database
        Produk::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        // Redirect kembali ke halaman produk dengan notifikasi
        return redirect()->route('produk.index')->with('success', 'Data berhasil disimpan!');
    }
}
