<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function tampilbarang()
    {
        $barang = DB::table('barang')->get();
        return view('barang',['barang' => $barang]);
    }
    public function tampilpelanggan()
    {
        $pelanggan = DB::table('pelanggan')->get();
        return view('pelanggan',['pelanggan' => $pelanggan]);
    }
    public function tampiltrans()
    {
        $transaksi = DB::table('transaksi')->get();
        return view('transaksi',['transaksi' => $transaksi]);
    }
    public function tampiluser()
    {
        $user = DB::table('user')->get();
        return view('user',['user' => $user]);
    }
    public function tambahbrg()
    {
	    return view('barang_tambah');
    }
    public function tambahplg()
    {
	    return view('pelanggan_tambah');
    }
    public function tambahtrans()
    {
	    return view('transaksi_tambah');
    }
    public function tambahuser()
    {
	    return view('user_tambah');
    }
    public function storebrg(Request $request)
    {
	DB::table('barang')->insert([
		'id' => $request->id,
		'nama' => $request->nama,
		'harga' => $request->harga,
	]);
	return redirect('/barang');
    }
    public function storeplg(Request $request)
    {
	DB::table('pelanggan')->insert([
		'id' => $request->id,
		'nama' => $request->nama,
		'alamat' => $request->alamat,
	]);
	return redirect('/pelanggan');
    }
    public function storetrans(Request $request)
    {
	DB::table('transaksi')->insert([
		'id' => $request->id,
		'id_pelanggan' => $request->id_pelanggan,
		'id_barang' => $request->id_barang,
	]);
	return redirect('/transaksi');
    }
    public function storeusr(Request $request)
    {
	DB::table('barang')->insert([
		'id' => $request->id,
		'nama' => $request->nama,
		'username' => $request->username,
        'password' => $request->password,
	]);
	return redirect('/user');
    }
    public function editbrg($id)
{
	$barang = DB::table('barang')->where('id',$id)->get();
	return view('barang_edit',['barang' => $barang]);
}
public function editplg($id)
{
	$pelanggan = DB::table('pelanggan')->where('id',$id)->get();
	return view('pelanggan_edit',['pelanggan' => $pelanggan]);
}
public function edittrans($id)
{
	$transaksi = DB::table('transaksi')->where('id',$id)->get();
	return view('transaksi_edit',['transaksi' => $transaksi]);
}
public function editusr($id)
{
	$user = DB::table('user')->where('id',$id)->get();
	return view('user_edit',['user' => $user]);
}
public function updatebrg(Request $request)
    {
	DB::table('barang')->where('id',$request->id)->update([
		'id' => $request->id,
		'nama' => $request->nama,
		'harga' => $request->harga,
	]);
	return redirect('/barang');
    }
public function updateplg(Request $request)
    {
	DB::table('pelanggan')->where('id',$request->id)->update([
		'id' => $request->id,
		'nama' => $request->nama,
		'alamat' => $request->alamat,
        ]);
	return redirect('/pelanggan');
    }
public function updatetrans(Request $request)
{
	DB::table('transaksi')->where('id',$request->id)->update([
		'id' => $request->id,
		'id_pelanggan' => $request->id_pelanggan,
		'id_barang' => $request->id_barang,
        ]);
	return redirect('/transaksi');
}
public function updateusr(Request $request)
{
	DB::table('barang')->where('id',$request->id)->update([
		'id' => $request->id,
		'nama' => $request->nama,
		'username' => $request->username,
        'password' => $request->password,
	]);
	return redirect('/user');
}
public function hapusbrg($id)
{
	DB::table('barang')->where('barang',$id)->delete();
	return redirect('/barang');
}
public function hapusplg($id)
{
	DB::table('pelanggan')->where('pelanggan',$id)->delete();
	return redirect('/pelanggan');
}
public function hapustrans($id)
{
	DB::table('transaksi')->where('transaksi',$id)->delete();
	return redirect('/transaksi');
}
public function hapususr($id)
{
	DB::table('user')->where('user',$id)->delete();
	return redirect('/user');
}
}