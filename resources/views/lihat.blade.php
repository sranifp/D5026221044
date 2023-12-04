@extends('master2')
@section('title', 'View Data Pegawai')

@section('konten')
<h1>Detail Pegawai</h1>

@foreach($pegawai as $p)
<div class="container">
  <div class="row">
    <div class="col border-right">
      <li>Nama</li>
      <li>Jabatan</li>
      <li>Umur</li>
      <li>Alamat</li>
    </div>
    <div class="col">
    <div>
        <div>{{ $p->pegawai_nama }}</div>
        <div>{{ $p->pegawai_jabatan }}</div>
        <div>{{ $p->pegawai_umur }}</div>
        <div>{{ $p->pegawai_alamat }}</div>
</div>
    </div>
@endforeach

<div class="text-center mt-3">
    <a href="/pegawai" class="btn btn-secondary btn-sm">Kembali</a>
</div>

@endsection