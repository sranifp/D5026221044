
@extends('master2')
@section('title', 'Tambah Data Pegawai')

@section('konten')

 	<a href="/pegawai" class="btn btn-secondary"> Kembali</a>
	
	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
            <div class="form-group">
              <label for="nama">Nama</label>
              <input name="nama" type="text" class="form-control" id="nama" placeholder="Enter Nama">
            </div>
            <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <input name="jabatan" type="text" class="form-control" id="jabatan" placeholder="Jabatan">
            </div>
            <div class="form-group">
                <label for="Umur">Umur</label>
                <input name="umur" type="number" class="form-control" id="Umur" placeholder="Enter Umur">
              </div>
            <div class="form-group">
              <label for="alamat">Alamat </label>
              <textarea name="alamat" class="form-control" id="alamat" placeholder="Enter Alamat"></textarea>
            </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endsection