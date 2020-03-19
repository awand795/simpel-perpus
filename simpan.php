<!DOCTYPE HTML>
<html lang="id">
<head>
	<title>Input Buku</title>
</head>
<body>
	<h1><center>Input Data Buku</center></h1>
	<form method="POST" action="simpanbuku.php">
	<center><table border="1px solid black">
		<tr>
			<td>Kode Buku</td>
			<td><input type="text" name="kode_buku"></td>
		</tr>
		<tr>
			<td>Judul</td>
			<td><input type="text" name="judul"></td>
		</tr>
		<tr>
			<td>Pengarang</td>
			<td><input type="text" name="pengarang"></td>
		</tr>
		<tr>
			<td>Penerbit</td>
			<td><input type="text" name="penerbit"></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><input type="text" name="jumlah"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Simpan"></td>
			<td><input type="reset" value="Reset"></td>
		</tr>
	</table></center>
	</form>
</body>
</html>