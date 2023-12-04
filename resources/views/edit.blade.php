<!DOCTYPE html>
@extends('master2')
@section('title', 'Edit Database Pegawai')

@section('konten')

	<a href="/pegawai" class="btn btn-secondary"> Kembali</a>

	<h3>Edit Pegawai</h3>

	@foreach($pegawai as $p)
	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}		
		<div class="form-group">
              <label for="nama">Nama</label>
              <input name="nama" type="text" class="form-control" value="{{ $p->pegawai_nama }}">
            </div>
			<div class="form-group">
              <label for="jabatan">Jabatan</label>
              <input name="jabatan" type="text" class="form-control" value="{{ $p->pegawai_jabatan }}">
            </div>
            <div class="form-group">
                <label for="Umur">Umur</label>
                <input name="umur" type="number" class="form-control" value="{{ $p->pegawai_umur }}">
              </div>
            <div class="form-group">
              <label for="alamat">Alamat </label>
              <textarea name="alamat" class="form-control" name="alamat">{{ $p->pegawai_alamat }}</textarea>
            </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	@endforeach

@endsection