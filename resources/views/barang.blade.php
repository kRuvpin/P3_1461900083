<html>
<head>
	<title>CRUD</title>
</head>
<body>
 
	<h3>Data Pegawai</h3>
 
	<a href="/barang/barang_tambah"> + Tambah Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>id</th>
			<th>nama</th>
			<th>harga</th>
			<th>Opsi</th>
		</tr>
		@foreach($barang as $brg)
		<tr>
			<td>{{ $brg->id }}</td>
			<td>{{ $brg->nama }}</td>
			<td>{{ $brg->harga }}</td>
			<td>
			<a href="/barang/barang_edit/{{ $brg->id }}">Edit</a>
				|
				<a href="/barang/hapusbrg/{{ $brg->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>