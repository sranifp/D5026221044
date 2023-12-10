<!DOCTYPE html>
@extends('master2')
@section('title', 'Edit Database Pegawai')

@section('konten')

	<h3>Edit Pegawai</h3>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post" class="form-horizontal">
		{{ csrf_field() }}	
    <input type="hidden" name="id" value="{{ $p->pegawai_id }}"><br/>
    <!-- biar letaknya horizontal inget syntax bagian "form-group row" "class = "col-sm-1 col-form-label"  "class = "form-control"-->
    <!-- required="required" ini menyuruh harus diisi kalau ga maka gabisa disubmit -->
		<div class="form-group row ">
              <label for="nama" class = "col-sm-1 col-form-label">Nama</label>
              <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
              <input name="nama" required="required" type = "text" class = "form-control" id = "nama" value="{{ $p->pegawai_nama }}">
            </div>
            </div>
			<div class="form-group row">
              <label for="jabatan" class="col-sm-1 col-form-label">Jabatan</label>
              <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
              <input name="jabatan" required="required" type="text" class="form-control" id = "jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
            </div>
      <div class="form-group row">
                <label for="Umur" class="col-sm-1 col-form-label">Umur</label>
                <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
                <input name="umur" required="required" type="number" class="form-control" id = "umur"  value="{{ $p->pegawai_umur }}">
              </div>
              </div>
      <div class="form-group row">
              <label for="alamat" class="col-sm-1 col-form-label">Alamat </label>
              <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
              <textarea name="alamat" required="required" class="form-control" id = "alamat" name="alamat">{{ $p->pegawai_alamat }}</textarea>
            </div>
            </div>

            <a href="/pegawai" class="btn btn-danger"> Kembali</a>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	@endforeach

@endsection