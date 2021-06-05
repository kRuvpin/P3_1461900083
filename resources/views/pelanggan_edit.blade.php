<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<h3>Edit pelanggan</h3>
 
	<a href="/pelanggan"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($pelanggan as $plg)
	<form action="/pelanggan/updateplg" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $plg->id }}"> <br/>
		nama <input type="text" required="required" name="nama" value="{{ $plg->nama }}"> <br/>
		alamat <input type="text" required="required" name="alamat" value="{{ $plg->alamat }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>