<?php
use app\Http\Controllers\BarangController;
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
Route::get('/0083barang', function () {
    return view('0083barang');
});
Route::get('/pelanggan', function () {
    return view('pelanggan');
});
Route::get('/transaksi', function () {
    return view('transaksi');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/0083barang/barang_tambah', function () {
    return view('barang_tambah');
});
Route::get('/pelanggan/pelanggan_tambah', function () {
    return view('pelanggan_tambah');
});
Route::get('/transaksi/transaksi_tambah', function () {
    return view('transaksi_tambah');
});
Route::get('/user/user_tambah', function () {
    return view('user_tambah');
});
Route::get('/0083barang/barang_edit', function () {
    return view('barang_edit');
});
Route::get('/pelanggan/pelanggan_edit', function () {
    return view('pelanggan_edit');
});
Route::get('/transaksi/transaksi_edit', function () {
    return view('transaksi_edit');
});
Route::get('/user/user_edit', function () {
    return view('user_edit');
});
Route::post('/0083barang/barang_tambah/tambahbarang', function () {
    return view('tambahbarang');
});
Route::resource('BarangController', app\Http\Controllers\BarangController::class);
