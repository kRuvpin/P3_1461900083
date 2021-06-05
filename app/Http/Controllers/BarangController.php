<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Models\Barang;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = \App\Models\Barang::All();
        return view('home' , ['barang' => $barang]);
        $pelanggan = \App\Models\Pelanggan::All();
        return view('home' , ['pelanggan' => $pelanggan]);
        $transaksi = \App\Models\Transaksi::All();
        return view('home' , ['transaksi' => $transaksi]);
        $user = \App\Models\User::All();
        return view('home' , ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang_tambah');
        return view('pelanggan_tambah');
        return view('transaksi_tambah');
        return view('user_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Barang::create({
            'id' => $request->id,
            'nama' => $request->nama,
            'harga' => $request->harga,
        });
        return redirect('barang');
        Pelanggan::create({
            'id' => $request->id,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        });
        return redirect('pelanggan');
        Transaksi::create({
            'id' => $request->id,
            'id_pelanggan' => $request->id_pelanggan,
            'id_transaksi' => $request->id_transaksi,
        });
        return redirect('transaksi');
        User::create({
            'id' => $request->id,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
        });
        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang_edit',['barang'=>$barang]);
        $pelanggan = Pelanggan::find($id);
        return view('pelanggan_edit',['pelanggan'=>$pelanggan]);
        $transaksi = Transaksi::find($id);
        return view('transaksi_edit',['transaksi'=>$transaksi]);
        $user = User::find($id);
        return view('user_edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->save();
        return redirect('barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('barang');
    }
}
