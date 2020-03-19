<?php

include "connection.php";

$kode_buku = $_POST['kode_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$jumlah = $_POST['jumlah'];

$query = mysql_query("insert into tbl_buku(kode_buku,judul,pengarang,penerbit,jumlah) values('$kode_buku','$judul','$pengarang','$penerbit','$jumlah')");
if($query){
	echo "<br><br><center>Sukses Insert</center>";
}
else{
	echo "<br><br><center>Gagal Insert</center>";
}

?>