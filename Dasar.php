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
<h4>Form Input</h4>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">
<label>Nama: </label>
<input type="text" name="nama">
<input type="submit" value="Kirim">
</form>
<?php
echo 'Selamat Datang ' . $_POST['nama'];
?>
<h5>Operator</h5>
<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
?>

</body>
</html>