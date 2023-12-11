<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class KaryawanController extends Controller
{
	public function index()
	{
    	// mengambil data dari table karyawan
		$karyawan = DB::table('karyawan')->paginate(10);
 
    	// mengirim data karyawan ke view index
		return view('indexKaryawan',['karyawan' => $karyawan]);
 
	}

	// public function viewPegawai($id)
	// {
    // 	// mengambil data dari table karyawan
	// 	$karyawan = DB::table('karyawan')->where('kodekaryawan',$id)->get();
 
    // 	// mengirim data karyawan ke view index
	// 	return view('lihatKeyboard',['karyawan' => $karyawan]);
 
	// }
 
	// method untuk menampilkan view form tambah karyawan
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambahKaryawan');
 
	}
 
	// method untuk insert data ke table karyawan
 
	// method untuk edit data karyawan
	// public function edit($id)
	// {
	// 	// mengambil data karyawan berdasarkan id yang dipilih
	// 	$karyawan = DB::table('karyawan')->where('kodekaryawan',$id)->get();
	// 	// passing data karyawan yang didapat ke view edit.blade.php
	// 	return view('editKeyboard',['karyawan' => $karyawan]);
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('karyawan')->insert([
			'kodepegawai' => $request->kode,
			'namalengkap' => $request->nama,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
 
	}
	

	// }
 
	// update data karyawan
// 	public function update(Request $request)
// 	{
// // update data karyawan
// 	DB::table('karyawan')->where('kodekaryawan', $request->id)->update([
//     	'merkkaryawan' => $request->merkkaryawan,
//     	'stockkaryawan' => $request->stockkaryawan,
//     	'tersedia' => $request->stockkaryawan > 0 ? '1' : '0',
// 	]);
// 		// alihkan halaman ke halaman karyawan
// 		return redirect('/karyawan');
// 		//redirect melempar ke suatu url route karyawan, maka akan query all record 
// 	}
	

	// method untuk hapus data karyawan
	public function hapus($id)
	{
		// menghapus data karyawan berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();
		
		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');
	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table karyawan sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('namalengkap','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data karyawan ke view index
		return view('indexKaryawan',['karyawan' => $karyawan]);
 
	}
	
}