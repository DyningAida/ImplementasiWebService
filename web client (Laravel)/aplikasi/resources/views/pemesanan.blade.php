@extends('layouts/main')

@section('container')
    <h3 class="text-center">Data Pemesanan</h3>
    <article>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Kode Pemesanan</th>
            <th scope="col">Kode Produk</th>
            <th scope="col">Total Pemesanan</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($data as $d)
          <tr>      
            <td><a href="/pemesanan/{{ $d['kode_pemesanan'] }}">{{ $d['kode_pemesanan'] }}</a></td>
            <td>{{ $d['kode_produk'] }}</td>
            <td>{{ $d['total_pemesanan'] }}</td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </article>
@endsection
