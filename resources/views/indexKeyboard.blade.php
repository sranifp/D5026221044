<!DOCTYPE html>
@extends('master2')
@section('title', 'Keyboard')

@section('konten')

<h2>Data Keyboard</h2>

<a href="/keyboard/tambah" class="btn btn-secondary"> + Tambah Keyboard Baru</a>
<p style="margin-top: 3px;">Cari Merk Keyboard:</p>
<!-- row supaya satu baris -->
<form action="/keyboard/cari" method="GET">
	<div class="row">
		<div class="col-sm-11">
			<input class="form-control" type="text" name="cari" placeholder="Cari Merk Keyboard .."
				value="{{ old('cari') }}">
		</div>
		<div class="col-sm-1">
			<input class="btn btn-primary" type="submit" value="CARI">
		</div>
	</div>
</form>

<table>
	<table class="table table striped table-hover">
		<tr>
			<th>Kode Keyboard</th>
			<th>Merk Keyboard</th>
			<th>Stock Keyboard</th>
			<th>Tersedia</th>
		</tr>
		@foreach($keyboard as $p)
		<tr>
			<td>{{ $p->kodekeyboard }}</td>
			<td>{{ $p->merkkeyboard }}</td>
			<td>{{ $p->stockkeyboard }}</td>
			<td>
				<input class="form-check-input" type="checkbox" value="" {{ $p->tersedia === '1' && $p->stockkeyboard >
				0 ? 'checked disabled' : '' }}
				id="flexCheckDefault">
			</td>
			<td>
				<a href="/keyboard/lihat/{{ $p->kodekeyboard }}" class="btn btn-success">View</a>
				|
				<a href="/keyboard/edit/{{ $p->kodekeyboard }}" class="btn btn-warning">Edit</a>
				|
				<a href="/keyboard/hapus/{{ $p->kodekeyboard }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	{{$keyboard->links()}}


	@endsection