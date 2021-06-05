<form action="{{ route('barang.store')}}" method="post">
    @csrf
    nama: <input type="text" name="nama">
    alamat: <input type="text" name="alamat">
    <button type="submit">Simpan</button>
</form>