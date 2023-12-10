
@extends('master2')
@section('title', 'Tambah Data keyboard')

@section('konten')

	<form action="/keyboard/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
         <div class = "form-group row">
            <label for = "nama" class = "col-sm-2 col-form-label">Merk Keyboard</label>
            <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
               <input name="nama" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Merk Keyboard">
            </div>
         </div>
         <div class = "form-group row">
            <label for = "stok" class = "col-sm-2 col-form-label">Stok Keyboard</label>
            <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
               <input name="stok" type = "text" class = "form-control" id = "stok" placeholder = "Masukkan Stok Keyboard">
            </div>
            </div>
            <a href="/keyboard" class="btn btn-danger"> Kembali</a>

		<input type="submit" value="Simpan Data" class="btn btn-primary">

@endsection