<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','ViewController@index');





Route::post('/pelanggan/daftar','Pelanggan@daftar');
Route::post('/pelanggan/masuk','Pelanggan@masuk');




Route::get('/admin/genesis','AdminController@genesis_admin');


Route::get('/akun/masuk','ViewController@UserLogin');
Route::get('/akun/daftar','ViewController@UserRegister');