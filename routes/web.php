<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;
use App\Http\Controllers\ProductController;

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/user/{id}' , function ($id) {
//     return 'User dengan ID' . $id;
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', function () {
//         return 'Admin Dashboard';
//         });

//         Route::get('/users', function () {
//             return 'Admin Users';
//             });
// });

// Route::get('/listbarang/{id}/{nama}', function ($id, $nama) {
//     return view('list_barang', compact('id', 'nama'));
// });
Route::get('/test', [TestController::class, 'tampilkan']);
// Route::get('/listbarang/{id}/{nama}', function ($id, $nama) {
// return view('list_barang', compact('id', 'nama'));
// });

Route::get('/produk', [ListProdukController::class, 'index'])->name('produk.index');
Route::post('/produk/simpan', [ListProdukController::class, 'simpan'])->name('produk.simpan');
Route::get('/', function () {
    return view('welcome');
});Route::get('/produk', [ProductController::class, 'index']);

