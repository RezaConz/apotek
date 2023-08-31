<?php 
session_start();

$id_obat = $_GET['id_obat'];

if (isset($_SESSION['pesanan'][$id_obat]))
{
	$_SESSION['pesanan'][$id_obat]+=1;
}

else 
{
	$_SESSION['pesanan'][$id_obat]=1;
}

echo "<script>alert('Produk telah masuk ke pesanan anda');</script>";
echo "<script>location= 'pesanan_pembeli.php'</script>";

 ?>