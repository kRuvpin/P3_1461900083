<form action="{{ route('barang.store')}}" method="post">
    @csrf
    nama: <input type="text" name="nama">
    harga: <input type="text" name="harga">
    <button type="submit">Simpan</button>
</form>