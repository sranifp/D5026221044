<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class KeyboardController extends Controller
{
	public function index()
	{
    	// mengambil data dari table keyboard
		$keyboard = DB::table('keyboard')->paginate(10);
 
    	// mengirim data keyboard ke view index
		return view('indexKeyboard',['keyboard' => $keyboard]);
 
	}

	public function viewPegawai($id)
	{
    	// mengambil data dari table keyboard
		$keyboard = DB::table('keyboard')->where('keyboard_id',$id)->get();
 
    	// mengirim data keyboard ke view index
		return view('lihat',['keyboard' => $keyboard]);
 
	}
 
	// method untuk menampilkan view form tambah keyboard
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambahKeyboard');
 
	}
 
	// method untuk insert data ke table keyboard
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keyboard')->insert([
			'merkkeyboard' => $request->nama,
			'stockkeyboard' => $request->stok,
			'tersedia' => $request->stok > 0 ? '1' : '0'
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keyboard');
 
	}
 
	// method untuk edit data keyboard
	public function edit($id)
	{
		// mengambil data keyboard berdasarkan id yang dipilih
		$keyboard = DB::table('keyboard')->where('kodekeyboard',$id)->get();
		// passing data keyboard yang didapat ke view edit.blade.php
		return view('editKeyboard',['keyboard' => $keyboard]);
 
	}
 
	// update data keyboard
	public function update(Request $request)
	{
		// update data keyboard
		DB::table('keyboard')->where('kodekeyboard',$request->id)->update([
			'merkkeyboard' => $request->merkkeyboard,
			'stockkeyboard' => $request->stockkeyboard,
			'tersedia' => $request->Stok > 0 ? '1' : '0'
			]);
		// alihkan halaman ke halaman keyboard
		return redirect('/keyboard');
		//redirect melempar ke suatu url route keyboard, maka akan query all record 
	}
 
	// method untuk hapus data keyboard
	public function hapus($id)
	{
		// menghapus data keyboard berdasarkan id yang dipilih
		DB::table('keyboard')->where('kodekeyboard',$id)->delete();
		
		// alihkan halaman ke halaman keyboard
		return redirect('/keyboard');
	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table keyboard sesuai pencarian data
		$keyboard = DB::table('keyboard')
		->where('merkkeyboard','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data keyboard ke view index
		return view('indexKeyboard',['keyboard' => $keyboard]);
 
	}
	
}