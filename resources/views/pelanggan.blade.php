<html>
<head>
	<title>CRUD</title>
</head>
<body>
 
	<h3>Data pelanggan</h3>
 
	<a href="/pelanggan/pelanggan_tambah"> + Tambah Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>id</th>
			<th>nama</th>
			<th>alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pelanggan as $plg)
		<tr>
			<td>{{ $plg->id }}</td>
			<td>{{ $plg->nama }}</td>
			<td>{{ $plg->alamat }}</td>
			<td>
				<a href="/pelanggan/pelanggan_edit/{{ $plg->id }}">Edit</a>
				|
				<a href="/pelanggan/hapusplg/{{ $plg->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>