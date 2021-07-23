@extends('layouts.main')

@section('container')
<h3 class="text-center">Anak Perusahaan</h3>
    <article>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nama Anak Perusahaan</th>
            <th scope="col">Lokasi</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($data as $d)
          <tr>      
            <td><a href="/cabang/{{ $d['kode_child'] }}">{{ $d['nama_child'] }}</a></td>
            <td>{{ $d['lokasi'] }}</td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </article>
@endsection