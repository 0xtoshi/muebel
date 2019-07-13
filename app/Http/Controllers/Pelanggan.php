<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MPelanggan;
use Illuminate\Support\Facades\Validator;


class Pelanggan extends Controller
{
    

	public function daftar(Request $request)
	{

		/*


			$table->bigIncrements('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('kota');
            $table->string('propinsi');
            $table->string('kodepos');
            $table->string('nomor_telepon');
            $table->string('password');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
	
		*/

		$validasi = Validator::make($request->all(), [

			'nama' => 'required|max:255|min:5',
			'alamat' => 'required|max:255|min:5',
			'kota' => 'required|max:255|min:3',
			'propinsi' => 'required|max:255|min:3',
			'kodepos' => 'required|max:6|min:5',
			'nomor_telepon' => 'required|max:13|min:10',
			'password' => 'required|max:255|min:6',
			'email' => 'required|max:255|email|unique:pelanggan|min:6',


		]);

		if ($validasi->fails()) {
            
          

         return [ 'success' => false, 'messages' => $validasi->errors()->first() ];
        
        }else{


		MPelanggan::create($request->only(['nama', 'alamat','kota','propinsi','kodepos','nomor_telepon','password','email']));

		return [ 'success' => true, 'messages' => 'Akun Berhasil dibuat' ];

		}

	}


	public function masuk(Request $request)
	{

		$validasi = Validator::make($request->all(), [

			'email' => 'required|max:255|email|min:6|exists:pelanggan',
			'password' => 'required|max:255|min:6',

		]);

		if ($validasi->fails()) {
            
          return [ 'success' => false, 'messages' => $validasi->errors()->first() ];
        
        }else{

        $data = $request->only(['email','password']);

		$data_pelanggan = MPelanggan::where('email', $data['email'])->get();

         if(password_verify($data['password'], $data_pelanggan[0]->password)){ 

         	session(['user_login' => true]);
         	session(['data_pelanggan' => $data_pelanggan[0]]);

         	return [ 'success' => true, 'messages' => 'Login sukses! Anda akan dialihkan' ];

         }else{

         	return [ 'success' => false, 'messages' => 'Password yang anda masukan salah' ];

         }

		}

	}

}
