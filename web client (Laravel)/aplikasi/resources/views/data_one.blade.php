@extends('layouts.main')

@section('container')
<body style="background-color:#B2F1AD;">
<div class="container" style="background-color:#97E491; border-style: dashed; border-color: #cfffcc; color:green">
    <h3>Detail {{ $data['nama_produk'] }}</h3>
    <hr>
    <table class="mt-4">
          <tr>
              <td>Kode Produk</td>
              <td> : </td>
              <td> {{ $data['kode_produk'] }}</td>
          </tr>
          <tr>
              <td>Nama Produk</td>
              <td> : </td>
              <td> {{ $data['nama_produk'] }}</td>
          </tr>
          <tr>
              <td>Harga Produk</td>
              <td> : </td>
              <td> Rp{{ $data['harga_produk'] }},00</td>
          </tr>
          <tr>
            <td>Jumlah unit tersisa</td>
            <td> : </td>
            <td> {{ $data['jumlah_produk'] }}</td>
        </tr>
    </table>
    <hr>
    <a class="mt-4" href="/data">Kembali ke halaman data barang</a>
</div>
</body>
@endsection
