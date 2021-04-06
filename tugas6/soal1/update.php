<?php
include_once("koneksi.php");
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$nopeg = $_POST['no_pegawai'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];

	$result = mysqli_query($conn, "UPDATE data_pegawai SET no_pegawai='$nopeg",nama='$nama',email='$email',alamat='$alamat' WHERE id=$id);
	header("Location: index.php");
}
?>
<?php
$id = $_GET ['id'];
$result = mysqli_query($conn, "SELECT * FROM data_pegawai WHERE id=$id");
while($pegawai = mysqli_fetch_array($result)) 
{
	$nopeg = $pegawai['no_pegawai'];
	$nama = $pegawai['nama'];
	$email = $pegawai['email'];
	$alamat = $pegawai['alamat'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Data Pegawai</title>
</head>
<body>
	<a href="index.php">Kembali</a>
	<br></br>
	<form name="update_user" method="post" action="update.php">
	<table border="0">
		<tr>
			<td>No. Pegawai</td>
			<td><input type="number" name="no_pegawai"value=<?php echo $nopeg;?>></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"value=<?php echo $nama;?>></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email"value=<?php echo $email;?>></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat"value=<?php echo $alamat;?>></td>
		</tr>
		<tr>
			<td><input type="hidden" name="id"value=<?php echo $_GET['id'];?>></td>
			<td><input type="submit" name="update"value="update"></td>
		</tr>
	</table>
	</form>
</body>
</html>