@extends('layouts/main')

@section('container')
<body style="background-color:#B2F1AD;">
    <div class="container" style="background-color:#97E491; border-style: dashed; border-color: #cfffcc; color:green">
        <h3>Detail {{ $data['nama_child'] }}</h3>
        <hr>
        <table class="mt-4">
              <tr>
                  <td>Kode Perusahaan</td>
                  <td> : </td>
                  <td> {{ $data['kode_child'] }}</td>
              </tr>
              <tr>
                  <td>Nama Perusahaan</td>
                  <td> : </td>
                  <td> {{ $data['nama_child'] }}</td>
              </tr>
              <tr>
                  <td>Lokasi</td>
                  <td> : </td>
                  <td>{{ $data['lokasi'] }}</td>
              </tr>
              <tr>
                <td>Contact</td>
                <td> : </td>
                <td> {{ $data['no_telp'] }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td> : </td>
                <td> {{ $data['email'] }}</td>
            </tr>
        </table>
        <hr>
        <a class="mt-4" href="/data">Kembali ke halaman data barang</a>
    </div>
    </body>
@endsection