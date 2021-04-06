<?php
include_once("koneksi.php");
$result = mysqli_query($conn, "SELECT * FROM data_pegawai ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Pegawai</title>
</head>
<body>
<a href="tambah.php">Tambah</a><br><br>
<table width='60%' border=1>
<tr>
<th>No. Pegawai</th><th>Nama</th><th>Email</th><th>Alamat</th><th>Update</th>
</tr>
<?php
while ($pegawai = mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>".$pegawai['no_pegawai']."</td>";
	echo "<td>".$nama['nama']."</td>";
	echo "<td>".$email['email']."</td>";
	echo "<td><a href='update.php?id=$pegawai[id]'>Edit</a> | <a href='hapus.php?id=$pegawai[id]'>Delete</a></td></tr>";
}
?>
</table>
</body>
</html>