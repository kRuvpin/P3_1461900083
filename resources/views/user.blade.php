<html>
<head>
	<title>CRUD</title>
</head>
<body>
 
	<h3>Data user</h3>
 
	<a href="/user/user_tambah"> + Tambah Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>id</th>
			<th>nama</th>
			<th>username</th>
            <th>password</th>
			<th>Opsi</th>
		</tr>
		@foreach($user as $usr)
		<tr>
			<td>{{ $usr->id }}</td>
			<td>{{ $usr->nama }}</td>
			<td>{{ $usr->username }}</td>
            <td>{{ $usr->password }}</td>
			<td>
				<a href="/user/user_edit/{{ $usr->id }}">Edit</a>
				|
				<a href="/user/hapususr/{{ $usr->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>