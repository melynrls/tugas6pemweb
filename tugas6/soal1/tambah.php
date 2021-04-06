<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
<a href="index.php">Kembali</a>
<br></body><br>
<form action="tambah.php" method="post" name="form1">
	<table width="20%" border="0">
		<tr>
			<td>No. Pegawai</td>
			<td><input type="number" name="no_pegawai"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="Tambah"></td>
		</tr>
	</table>
</form>
<?php
if(isset($_POST['Submit']))
{
	$nopeg = $_POST['no_pegawai'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];

	include_once("koneksi.php");

	$result = mysqli_query($conn, "INSERT INTO data_pegawai(no_pegawai,nama, email, alamat) VALUES ('$nopeg','$nama','$email','$alamat')");
	echo "data pegawai telah diubah <a href='index.php'>lihat data pegawai</a>";
}
?>
</body>
</html>