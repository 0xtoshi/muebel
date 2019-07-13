<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminModel;

class AdminController extends Controller
{
   



	public function genesis_admin()
	{
		$data = [


			'nama' => 'Taufik Pamungkas',
			'username' => 'admin',
			'password' => 'admin',
			'level' => 'superadmin',


		];

		return AdminModel::FirstOrCreate($data);
	}

	public function buat_admin(Request $request)
	{

		$validasi = Validator::make($request->all(), [

			'nama' => 'required|max:255|min:5',
			'username' => 'required|max:255|min:5|unique:admin',
			'password' => 'required|max:255|min:3',
			'level' => 'required|max:255|min:3',

		]);

		if ($validasi->fails()) {
            
          

         return [ 'success' => false, 'messages' => $validasi->errors()->first() ];
        
        }else{


		AdminModel::create($request->only([ 'nama', 'username', 'password', 'level' ]));

		return [ 'success' => true, 'messages' => 'Admin Baru Berhasil dibuat!' ];

		}

	}


	public function masuk(Request $request)
	{

		$validasi = Validator::make($request->all(), [

			'username' => 'required|max:255|min:6|exists:admin',
			'password' => 'required|max:255|min:6',

		]);

		if ($validasi->fails()) {
            
           return [ 'success' => false, 'messages' => $validasi->errors()->first() ];
          
        
        }else{

        $data = $request->only(['email','password']);

		$data_admin = AdminModel::where('email', $data['email'])->get();
         

         if(password_verify($data['password'], $data_admin[0]->password)){ 

         	session(['admin_login' => true]);
         	session(['admin_level' => $data_admin['level']]);
         	session(['admin_nama' => $data_admin['nama']]);

         	

         	return [ 'success' => true, 'messages' => 'Login sukses! Anda akan dialihkan' ];

         }else{

         	return [ 'success' => false, 'messages' => 'Password yang anda masukan salah' ];

         }

		}

	}


}
