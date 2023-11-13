<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function shownama($nama){
        return "Anda telah mengisikan :".$nama; //$nama itu sama dengan {nama} di web.php
    }

    public function formulir(){
        //cek soal hak akses
    	return view('formulir');
 
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
}

