<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;


class MPelanggan extends Model
{
        protected $table = 'pelanggan';

        protected $fillable = ['nama', 'alamat','kota','propinsi','kodepos','nomor_telepon','password','email'];

        public function setPasswordAttribute($value)
		{
			$this->attributes['password'] = Hash::make($value);
		}

}
