<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Daftar Buku</title>
</head>
<body>
	<h1><center>Daftar Buku</center></h1>
	<table border="1px solid black" align="center">
		<tr>
			<td>Kode Buku</td>
			<td>Judul Buku</td>
			<td>Pengarang Buku</td>
			<td>Penerbit Buku</td>
			<td>Jumlah Buku</td>
			<td colspan="2">Action</td>
		</tr>
		<?php
		include "connection.php";
		$query = mysql_query('select * from tbl_buku');
		while($buku = mysql_fetch_array($query)){
			?>
			<tr>
			<td><?php echo $buku['kode_buku'] ?></td>
			<td><?php echo $buku['judul'] ?></td>
			<td><?php echo $buku['pengarang'] ?></td>
			<td><?php echo $buku['penerbit'] ?></td>
			<td><?php echo $buku['jumlah'] ?></td>
			<td><a href="./edit.php/?kode_buku=<?php echo $buku['kode_buku'];?>" target="isi">Edit</a></td>
			<td><a href="./hapus.php/?kode_buku=<?php echo $buku['kode_buku'];?>" target="isi">Hapus</a></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>