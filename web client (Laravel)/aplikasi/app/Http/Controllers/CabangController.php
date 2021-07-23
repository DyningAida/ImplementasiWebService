<?php

namespace App\Http\Controllers;
use App\Models\Cabang;

class CabangController extends Controller
{
    public function index(){
        return view('cabang', [
            'title' => 'data_cabang',
            'data' => Cabang::all()
        ]);
    }

    public function show($kode_child){
        return view('cabang_one', [
            'title' => 'Data Cabang Satu',
            'data' => Cabang::find($kode_child)
        ]);
    }
}