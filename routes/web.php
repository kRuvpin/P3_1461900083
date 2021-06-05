<?php
use App\Http\Controllers\BarangController;
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
    return view('home');
});
Route::get('/barang', 'App\Http\Controllers\BarangController@tampilbarang');
Route::get('/pelanggan', 'App\Http\Controllers\BarangController@tampilpelanggan');
Route::get('/transaksi', 'App\Http\Controllers\BarangController@tampiltrans');
Route::get('/user', 'App\Http\Controllers\BarangController@tampiluser');
Route::get('/barang/barang_tambah','App\Http\Controllers\BarangController@tambahbrg');
Route::get('/pelanggan/pelanggan_tambah','App\Http\Controllers\BarangController@tambahplg');
Route::get('/transaksi/transaksi_tambah','App\Http\Controllers\BarangController@tambahtrans');
Route::get('/user/user_tambah','App\Http\Controllers\BarangController@tambahusr');
Route::post('/barang/storebrg','App\Http\Controllers\BarangController@storebrg');
Route::get('/barang/barang_edit/{id}','App\Http\Controllers\BarangController@editbrg');
Route::get('/pelanggan/pelanggan_edit/{id}','App\Http\Controllers\BarangController@editplg');
Route::get('/transaksi/transaksi_edit/{id}','App\Http\Controllers\BarangController@edittrans');
Route::get('/user/user_edit/{id}','App\Http\Controllers\BarangController@editusr');
Route::post('/barang/updatebrg','App\Http\Controllers\BarangController@updatebrg');
Route::post('/pelanggan/updateplg','App\Http\Controllers\BarangController@updateplg');
Route::post('/transaksi/updatetrans','App\Http\Controllers\BarangController@updatetrans');
Route::post('/user/updateusr','App\Http\Controllers\BarangController@updateusr');
Route::post('/barang/hapusbrg','App\Http\Controllers\BarangController@hapusbrg');
Route::post('/pelanggan/hapusplg','App\Http\Controllers\BarangController@hapusplg');
Route::post('/transaksi/hapustrans','App\Http\Controllers\BarangController@hapustrans');
Route::post('/user/hapususr','App\Http\Controllers\BarangController@hapususr');