<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<h3>Data pelanggan</h3>
 
	<a href="/pelanggan"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/pelanggan/storeplg" method="post">
		{{ csrf_field() }}
		id <input type="text" name="id" required="required"> <br/>
		nama <input type="text" name="nama" required="required"> <br/>
		alamat <input type="text" name="alamat" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>