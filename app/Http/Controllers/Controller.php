<?php

namespace App\Http\Controllers;

abstract class Controller
{
    function tampilkan($id, $nama){
        return view('list_barang', ['id' => $id, 'nama' => $nama]);
    }
}
