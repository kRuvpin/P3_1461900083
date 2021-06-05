<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<h3>Data transaksi</h3>
 
	<a href="/transaksi"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/pelanggan/storetrans" method="post">
		{{ csrf_field() }}
		id <input type="text" name="id" required="required"> <br/>
		id_pelanggan <input type="text" name="id_pelanggan" required="required"> <br/>
		id_barang <input type="text" name="id_barang" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>