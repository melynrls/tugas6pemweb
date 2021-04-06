<?php
include_once("koneksi.php");
$id=$_GET['id'];
$result = mysqli_query($conn,"DELETE FROM data_pegawai WHERE id=$id");
header("Location: index.php");
?>