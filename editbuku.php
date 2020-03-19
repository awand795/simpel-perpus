<?php
session_start();
include "connection.php";
$kode_buku = $_SESSION['kd_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$jumlah = $_POST['jumlah'];

$query = mysql_query("UPDATE tbl_buku set judul_buku='$judul', pengarang='$pengarang',penerbit='$penerbit',jumlah='$jumlah' where kode_buku='$kode_buku'");
if($query){
	echo "<br><br><center>Sukses Update Buku</center>";
	session_destroy();
}
else{
	echo "<br><br><center>Gagal Update Buku</center>";
	session_destroy();
}

?>