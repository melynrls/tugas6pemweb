<?php
$server1 = "localhost";
$user1 = "root";
$pass = "";

//create connection
$conn = mysqli_connect($server1, $user1, $pass);
//check connection
if (!$conn) {
	die("Connection failed : ".mysqli_connect_error());
}
//create database
$sql = "CREATE DATABASE pegawai";
if (mysqli_query($conn, $sql)) {
	$conn = mysqli_connect($server1, $user1, $pass, "pegawai");
	echo "Database created successfully"."<br>";
//create table
	$table = "CREATE TABLE  data_pegawai(id INT(10) NOT NULL AUTO_INCREMENT, no_pegawai INT(20) NOT NULL, NAMA VARCHAR(50) NOT NULL, EMAIL VARCHAR(50), ALAMAT VARCHAR(100), PRIMARY KEY (id), UNIQUE KEY (no_pegawai))";
if(mysqli_query($conn, $table)) {
	echo "Table data_pegawai berhasil dibuat: ";
} else {
	echo "Table data_pegawai gagal dibuat: ".mysqli_error($conn);
}
} else {
	echo "Database gagal dibuat".mysqli_error($conn);
}

mysqli_close($conn);
?>