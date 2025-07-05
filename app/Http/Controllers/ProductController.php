<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $id = 101;
        $produk = "Kamera Mirrorless";

        return view('list_product', compact('id', 'produk'));
    }
}
