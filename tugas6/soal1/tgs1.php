<?php
$server1 = "localhost";
$user1 = "root";
$pass = "";
$dbs = "tamu";
//create connection
$conn = mysqli_connect($server1, $user1, $pass, $dbs);
//check connection
if (!$conn) {
	die("Connection failed : ".mysqli_connect_error());
}
//create database
$sql = "CREATE DATABASE tamu";
if (mysqli_query($conn, $sql)) {
	echo "Database created successfully";
} else {
	echo "Error creating database: ".mysqli_error($conn);
}
//create table
$query = "CREATE TABLE  buku_tamu (ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, NAMA VARCHAR(200) NOT NULL, EMAIL VARCHAR(50) NOT NULL, ISI TEXT)";
$hasil_query = mysqli_query($conn,$query); //variabel untuk query
if (!$conn) {
	die ("Query Error: ".mysqli_errno($conn).
	" - ".mysqli_error($conn));
} else {
	echo "Table buku_tamu berhasil dibuat";
}

mysqli_close($conn);
?>