<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
<h1>Belajar PHP Dasar</h1>
<?php
echo "Hello World";
?>
<h2>Menggunakan Variabel</h2>
<?php
$nim = "312010076";
$nama = 'Shobahus Solichin';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>
<h3>Predefine Variabel</h3>
<?php
echo 'Selamat Datang ' . $_GET['nama'];
?>
