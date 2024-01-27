<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('login');
    // Route::get('/login', 'Auth\UserAuthController@showLoginForm')->name('login');
});


Route::get('user/login', 'Auth\UserAuthController@getLogin')->name('user.login');
Route::post('user/login', 'Auth\UserAuthController@postLogin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




    //item
    Route::get('/mobil/cari','MobilController@cari');
    Route::get('/mobil', 'MobilController@index');
    Route::get('/mobil/tambah', 'MobilController@tambah');
    Route::post('/mobil/store', 'MobilController@store');
    Route::put('/mobil/update/{id}', 'MobilController@update');
    Route::get('/mobil/list_item', 'MobilController@list_item');
    Route::get('/mobil/edit/{id}', 'MobilController@edit');
    Route::get('/mobil/hapus/{id}', 'MobilController@delete');


    //trans
    Route::get('/transaksi/cari','TransaksiController@cari');
    Route::get('/transaksi', 'TransaksiController@index');
    Route::get('/transaksi/tambah', 'TransaksiController@tambah');
    Route::post('/transaksi/store', 'TransaksiController@store');
    Route::put('/transaksi/update/{id}', 'TransaksiController@update');
    Route::get('/transaksi/list_item', 'TransaksiController@list_item');
    Route::get('/transaksi/edit/{id}', 'TransaksiController@edit');
    Route::get('/transaksi/hapus/{id}', 'TransaksiController@delete');