<?php 
include('koneksi.php');

$id_obat = $_POST['id_obat'];
$nama_obat = $_POST['nama_obat'];
$jenis_obat = $_POST['jenis_obat'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$nama_file = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];
$folder = './upload/';

move_uploaded_file($source, $folder.$nama_file);
$edit = mysqli_query($koneksi, "UPDATE obat SET nama_obat='$nama_obat', jenis_obat='$jenis_obat', stok='$stok', harga='$harga', gambar='$nama_file' WHERE id_obat='$id_obat' ");

if($edit)
	header('location: daftar_menu.php');
else
	echo "Edit Menu Gagal";


 ?>