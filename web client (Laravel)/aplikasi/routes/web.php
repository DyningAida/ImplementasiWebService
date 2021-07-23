<?php

use App\Models\Barang;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\PemesananController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//23.41
Route::get('/', function () {
    return view('index', [
        'name' => 'Dyning Aida Batrishya',
        'title' => 'home'
    ]);
});
Route::get('/data', [BarangController::class, 'index']);
Route::get('/about', function () {
    return view('about', [
        'title' => 'about'
    ]);
});
Route::get('/data/{kode_produk}',[BarangController::class, 'show']);

Route::get('/cabang', [CabangController::class,'index']);

Route::get('/cabang/{kode_child}', [CabangController::class,'show']);
Route::get('/pemesanan', [PemesananController::class,'index']);
Route::get('/pemesanan/{kode_pemesanan}', [PemesananController::class,'show']);
// Route::get('/', [BarangController::class, 'ambil_api']);