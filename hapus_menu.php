<?php 

include('koneksi.php');

$id_obat = $_GET['id_obat'];

$hapus= mysqli_query($koneksi, "DELETE FROM obat WHERE id_obat='$id_obat'");

if($hapus)
	header('location: daftar_menu.php');
else
	echo "Hapus data gagal";

 ?>