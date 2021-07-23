<?php

namespace App\Models;
use Illuminate\Support\Facades\Http;

class Barang
{
    // private static $response = Http::withHeaders([
    //     'api_key'=>'362713788c0c45d7c649ebf5afd0a0d05ac9ce9f'
    // ])->get('http://localhost:8080/data_barang/produk/')['data'];

    public static function koneksiapi(){
        $response = Http::withHeaders([
            'api_key'=>'362713788c0c45d7c649ebf5afd0a0d05ac9ce9f'
        ])->get('http://localhost:8080/data_barang/produk/')['data'];
        return $response;
    }
    public static function all(){
        $data = static::koneksiapi();
        return collect($data);
    }

    public static function find($kode_produk){
        $data = static::all();
        return $data->firstWhere('kode_produk', $kode_produk);
    }
}
