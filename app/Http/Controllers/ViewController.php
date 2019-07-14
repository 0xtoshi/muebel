<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    

	public function index()
	{

		
		return view('/normal/index',[

			'data' => [

				'judul' => 'Muebel',
				'diskripsi' => '',
				'nama_toko' => '',
				'telp_toko' => '',


			],

		]);


	}


	public function UserLogin()
	{

		return view('/normal/login',[

			'data' => [

				'judul' => 'Muebel',
				'diskripsi' => '',
				'nama_toko' => '',
				'telp_toko' => '',


			],

		]);
	}


	public function UserRegister()
	{

		return view('/normal/register',[

			'data' => [

				'judul' => 'Muebel',
				'diskripsi' => '',
				'nama_toko' => '',
				'telp_toko' => '',


			],

		]);
	}




}
