<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
		return view('home');
	}
 
	public function tentang(){
		return view('tentang');
	}
 
	public function kontak(){
		return view('kontak');
	}
}
