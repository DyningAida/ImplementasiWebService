@extends('layouts.main')

@section('container')
<body style="background-color:#B2F1AD;">
<div class="container" style="background-color:#97E491; border-style: dashed; border-color: #cfffcc; color:green">
    <h3>Detail Pemesanan</h3>
    <hr>
    <table class="mt-4">
          <tr>
              <td>Kode Pemesanan</td>
              <td> : </td>
              <td> {{ $data['kode_pemesanan'] }}</td>
          </tr>
          <tr>
              <td>ID Userk</td>
              <td> : </td>
              <td> {{ $data['id_user'] }}</td>
          </tr>
          <tr>
              <td>Kode Produk</td>
              <td> : </td>
              <td> {{ $data['kode_produk'] }}</td>
          </tr>
          <tr>
            <td>Total Pemesanan</td>
            <td> : </td>
            <td> {{ $data['total_pemesanan'] }}</td>
        </tr>
    </table>
    <hr>
    <a class="mt-4" href="/data">Kembali ke halaman data barang</a>
</div>
</body>
@endsection
