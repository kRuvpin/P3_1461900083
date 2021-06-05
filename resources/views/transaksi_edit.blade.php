<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<h3>Edit transaksi</h3>
 
	<a href="/transaksi"> Kembali</a>
	
	<br/>
	<br/>
    @foreach($transaksi as $trx)
	<form action="/pelanggan/updatetrans" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $trx->id }}"> <br/>
		id_pelanggan <input type="text" required="required" name="id_pelanggan" value="{{ $trx->id_pelanggan }}"> <br/>
		id_barang <input type="text" required="required" name="id_barang" value="{{ $trx->id_barang }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>