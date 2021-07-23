<?php

namespace App\Http\Controllers;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index(){
        return view('pemesanan', [
            'title' => 'data_pemesanan',
            'data' => Pemesanan::all()
        ]);
    }

    public function show($kode_pemesanan){
        return view('pemesanan_one', [
            'title' => 'Data Barang Satu',
            'data' => Pemesanan::find($kode_pemesanan)
        ]);
    }
}
