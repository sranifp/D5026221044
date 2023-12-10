<!DOCTYPE html>
@extends('master2')
@section('title', 'Edit Database keyboard')

@section('konten')

	<h3>Edit Data Keyboard</h3>

	@foreach($keyboard as $p)
	<form action="/keyboard/update" method="post" class="form-horizontal">
		{{ csrf_field() }}	
    <input type="hidden" name="id" value="{{ $p->kodekeyboard  }}"><br/>
    <!-- biar letaknya horizontal inget syntax bagian "form-group row" "class = "col-sm-1 col-form-label"  "class = "form-control"-->
    <!-- required="required" ini menyuruh harus diisi kalau ga maka gabisa disubmit -->

    <div class="form-group row">
              <label for="merkkeyboard" class="col-sm-2 col-form-label">Merk Keyboard</label>
              <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
              <input name="merkkeyboard" required="required" type="text" class="form-control" id = "merkkeyboard" value="{{ $p->merkkeyboard }}">
            </div>
            </div>

      <div class="form-group row">
                <label for="stockkeyboard" class="col-sm-2 col-form-label">Stock Keyboard</label>
                <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
                <input name="stockkeyboard" required="required" type="number" class="form-control" id = "stockkeyboard"  value="{{ $p->stockkeyboard }}">
              </div>
              </div>

            <a href="/keyboard" class="btn btn-danger"> Kembali</a>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	@endforeach

@endsection