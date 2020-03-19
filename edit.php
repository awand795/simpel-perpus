<!DOCTYPE HTML>
<html lang="id">
<head>
	<title>Input Buku</title>
</head>
<body>
	<h1><center>Edit Data Buku</center></h1>
	<?php
	session_start();
	
	include "connection.php";
	$url = $_SERVER['REQUEST_URI'];
	$_SESSION['kd_buku'] = substr($url,30,5);
	$kode_buku = $_SESSION['kd_buku'];
	$query = mysql_query("select * from tbl_buku where kode_buku = '$kode_buku'");
	$buku = mysql_fetch_array($query);
	?>
	<form method="POST" action="./editbuku.php">
	<center><table border="1px solid black">
		<tr>
			<td>Kode Buku</td>
			<td><input type="text" name="kode_buku" value="<?php echo $buku['kode_buku'];?>"></td>
		</tr>
		<tr>
			<td>Judul</td>
			<td><input type="text" name="judul" value="<?php echo $buku['judul'];?>"></td>
		</tr>
		<tr>
			<td>Pengarang</td>
			<td><input type="text" name="pengarang" value="<?php echo $buku['pengarang'];?>"></td>
		</tr>
		<tr>
			<td>Penerbit</td>
			<td><input type="text" name="penerbit" value="<?php echo $buku['penerbit'];?>"></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><input type="text" name="jumlah" value="<?php echo $buku['jumlah'];?>"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Simpan"></td>
			<td><input type="reset" value="Reset"></td>
		</tr>
	</table></center>
	</form>
</body>
</html>