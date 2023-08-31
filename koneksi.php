<?php 

$host = "localhost";
$user = "root";
$pass = "rahasia";
$db = "toko_obat"; 

$koneksi = mysqli_connect($host, $user, $pass, $db);

	if (!$koneksi) {
		die("Koneksi Gagal:".mysqli_connect_error());
	}
 ?>