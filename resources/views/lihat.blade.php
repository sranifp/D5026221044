@extends('master')
@section('title', 'View Data Pegawai')

@section('konten')
<h1>Detail Pegawai</h1>

@foreach($pegawai as $p)
<div class="container">
  <div class="row">
    <div class="col border-right">
      Box Kosong
    </div>
    <div class="col">
    <ul>
        <li>{{ $p->pegawai_nama }}</li>
        <li>{{ $p->pegawai_jabatan }}</li>
        <li>{{ $p->pegawai_umur }}</li>
        <li>{{ $p->pegawai_alamat }}</li>
    </ul>
    </div>
@endforeach

@endsection