<?php

namespace App\Http\Controllers;

use App\Models\Barang;

class BarangController extends Controller
{
    public function index(){
        return view('data_barang', [
            'title' => 'data_barang',
            'data' => Barang::all()
        ]);
    }

    public function show($kode_produk){
        return view('data_one', [
            'title' => 'Data Barang Satu',
            'data' => Barang::find($kode_produk)
        ]);
    }
}
