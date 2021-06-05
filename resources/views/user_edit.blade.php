<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<h3>Edit user</h3>
 
	<a href="/user"> Kembali</a>
	
	<br/>
	<br/>
    @foreach($user as $usr)
	<form action="/user/updateusr" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $usr->id }}"> <br/>
		nama <input type="text" required="required" name="nama" value="{{ $usr->nama }}"> <br/>
		username <input type="text" required="required" name="username" value="{{ $usr->username }}"> <br/>
        password <input type="text" required="required" name="password" value="{{ $usr->password }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>