<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    

	public function index()
	{

		
		return view('/normal/index',[

			'data' => [

				'judul' => '',
				'diskripsi' => '',
				'nama_toko' => '',
				'telp_toko' => '',


			],

		]);

	}


}