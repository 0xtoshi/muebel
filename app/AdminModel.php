<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class AdminModel extends Model
{
    

    protected $table = 'admin';

    protected $fillable = [ 'nama', 'username', 'password', 'level' ];

    public function setPasswordAttribute($value){

		$this->attributes['password'] = Hash::make($value);
	
	}


}
