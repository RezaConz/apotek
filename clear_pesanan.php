<?php 

include('koneksi.php');

$id = $_GET['id'];


$hapus2= mysqli_query($koneksi, "DELETE FROM pemesanan_obat WHERE id_pemesanan='$id'");
$hapus= mysqli_query($koneksi, "DELETE FROM pemesanan WHERE id_pemesanan='$id'");
if($hapus)
	header('location: pesanan.php');
else
	echo "Hapus data gagal";

 ?>