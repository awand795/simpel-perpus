<?php

include "connection.php";

$url = $_SERVER['REQUEST_URI'];
$kode_buku = substr($url,31,5);

$query = mysql_query("DELETE FROM tbl_buku WHERE kode_buku='$kode_buku'");
if($query){
	echo "<br><br><center>Sukses Hapus Buku</center>";
}
else{
	echo "<br><br><center>Gagal Hapus Buku</center>";
}

?>