<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<h3>Data usern</h3>
 
	<a href="/user"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/user/storeusr" method="post">
		{{ csrf_field() }}
		id <input type="text" name="id" required="required"> <br/>
		nama <input type="text" name="nama" required="required"> <br/>
		username <input type="text" name="username" required="required"> <br/>
        password <input type="text" name="password" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>