<?php 
session_start();
 
$id_obat = $_GET["id_obat"];

unset($_SESSION["pesanan"][$id_obat]);

echo "<script>alert('Produk telah dihapus');</script>"; 
echo "<script>location= 'pesanan_pembeli.php'</script>";


?>