
@extends('master2')
@section('title', 'Tambah Data Pegawai')

@section('konten')
	
	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class = "form-group row">
            <label for = "nama" class = "col-sm-1 col-form-label">Nama</label>
            <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
               <input name="nama" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Nama Pegawai">
            </div>
         </div>
         <div class = "form-group row">
            <label for = "nama" class = "col-sm-1 col-form-label">Jabatan</label>
            <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
               <input name="nama" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Jenis Jabatan Pegawai">
            </div>
         </div>
         <div class = "form-group row">
            <label for = "nama" class = "col-sm-1 col-form-label">Umur</label>
            <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
               <input name="nama" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Umur Pegawai">
            </div>
         </div>
         <div class = "form-group row">
            <label for = "nama" class = "col-sm-1 col-form-label">Alamat</label>
            <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
               <textarea name="nama" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Alamat Pegawai"></textarea>
            </div>
         </div>
         <a href="/pegawai" class="btn btn-danger"> Kembali</a>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endsection