<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class basecontroller extends Controller
{
	public function index (){
		$base = DB::table('snk')->get();
		return view('base', compact('base'));

	}
    //
}
