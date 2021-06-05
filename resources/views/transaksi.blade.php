<html>
<head>
	<title>CRUD</title>
</head>
<body>
 
	<h3>Data transaksi</h3>
 
	<a href="/transaksi/transaksi_tambah"> + Tambah Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>id</th>
			<th>id_transaksi</th>
			<th>id_barang</th>
			<th>Opsi</th>
		</tr>
		@foreach($transaksi as $trx)
		<tr>
			<td>{{ $trx->id }}</td>
			<td>{{ $trx->id_pelanggan }}</td>
			<td>{{ $trx->id_barang }}</td>
			<td>
				<a href="/transaksi/transaksi_edit/{{ $trx->id }}">Edit</a>
				|
				<a href="/transaksi/hapustrans/{{ $trx->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>