<?php
$id = $_POST['id'];
$passwd = $_POST['nama'];
$harga = $_POST['harga'];
$link = new mysqli("localhost","root","","p_ganjil3");
                $q = $link->query("sinsert into barang values('$id','$nama','$harga'");
    redirect(0083barang);
?>