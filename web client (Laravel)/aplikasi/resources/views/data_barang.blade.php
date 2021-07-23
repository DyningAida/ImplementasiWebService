@extends('layouts/main')

@section('container')
    <h3 class="text-center">Data Barang</h3>
    <article>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($data as $d)
          <tr>      
            <td><a href="/data/{{ $d['kode_produk'] }}">{{ $d['nama_produk'] }}</a></td>
            <td>Rp{{ $d['harga_produk'] }},00</td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </article>
@endsection
