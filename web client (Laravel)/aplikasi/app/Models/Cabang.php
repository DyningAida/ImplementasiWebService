<?php

namespace App\Models;
use Illuminate\Support\Facades\Http;

class Cabang
{
    public static function koneksiapi(){
        $response = Http::withHeaders([
            'api_key'=>'362713788c0c45d7c649ebf5afd0a0d05ac9ce9f'
        ])->get('http://localhost:8080/data_barang/cabang/')['data'];
        return $response;
    }
    public static function all(){
        $data = static::koneksiapi();
        return collect($data);
    }

    public static function find($kode_child){
        $data = static::all();
        return $data->firstWhere('kode_child', $kode_child);
    }
}
