<?php
$id = $_GET['id'];
mysqli_query($koneksi,"delete from barang where id='$id'");
header("location:/0083barang");
?>