| Nama      | Shobahus Solichin |
| ----------- | ----------- |
| NIM     | 312010076       |
| Kelas   | TI.20.A.1        |

## Langkah langkah praktikum 7

## 1. Install XAMPP
Unduh XAMPP dari https://www.apachefriends.org/download.html

![Foto](Foto/Foto1.png)

## 2. Menjalankan web server
Untuk menjalankan web server dari menu XAMPP Control

![Foto](Foto/Foto3.png)

• Uji coba apakah server sudah berkerja dengan baik
http://127.0.0.1 atau http://localhost

Tampil halaman utama XAMPP jika server sudah berkerja dengan baik.

• Dokumen Website
Semua file website tempatkan di direktori: \xampp\htdocs\

• Database MySQL
Direktori: \xampp\mysql\

Manajemen database: http://localhost/phpmyadmin

## 3. Memulai PHP
Buat folder lab7_php_dasar pada root directory web server (\xampp\htdocs)

![Foto](Foto/Foto2.png)

Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/Lab7_php_dasar/

![Foto](Foto/5.1.png)

## 4. PHP Dasar
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat
kode seperti berikut.

## **Codingan** ##

```PHP
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
</body>
</html>
```
![Foto](Foto/Foto5.png)
Kemudian untuk mengakses hasilnya melalui URL:
http://localhost/lab7_php_dasar/php_dasar.php

### Variable PHP
Menambahkan variable pada program.

## **Codingan** ##

```PHP
<?php
$nim = "0411500400";
$nama = 'Abdullah';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>
```

![Foto](Foto/Foto6.png)

### Predefine Variable `$_GET`
## **Codingan** ##

```PHP
<?php
echo 'Selamat Datang ' . $_GET['nama'];
?>
```

Untuk mengaksesnya gunakan URL:
http://localhost/Lab7_php_dasar/dasar.php?nama=%20Shoba

![Foto](Foto/Foto7.png)

## 5. Membuat Form Input
## **Codingannya** ##
```PHP
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
</body>
</html>
```
![Foto](Foto/Foto8.png)

### Operator
## **Codingannya** ##
```PHP
<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
?>
```
![Foto](Foto/Foto9.png)

### Kondisi IF
## **Codingannya** ##
```PHP
<?php
$nama_hari = date("l");
if ($nama_hari == "Sunday") {
echo "Minggu";
} elseif ($nama_hari == "Monday") {
echo "Senin";
} else {
echo "Selasa";
}
?>
```
![Foto](Foto/Foto10.png)

### Kondisi Switch
## **Codingannya** ##
```PHP
<h2>Kondisi Switch</h2>
<?php
    $nama_hari = date("l");
    switch ($nama_hari) {
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        default:
            echo "Sabtu";
    }
    echo"/$nama_hari";
?>
```

![Foto](Foto/Foto11.png)

### Perulangan for
## **Codingannya** ##
```PHP
<?php
echo "Perulangan 1 sampai 10 <br />";
for ($i=1; $i<=10; $i++) {
echo "Perulangan ke: " . $i . '<br />';
}
echo "Perulangan Menurun dari 10 ke 1 <br />";
for ($i=10; $i>=1; $i--) {
echo "Perulangan ke: " . $i . '<br />';
}
?>
```

![Foto](Foto/Foto12.png)

### Perulangan while
## **Codingannya** ##
```PHP
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
while ($i<=10) {
echo "Perulangan ke: " . $i . '<br />';
$i++;
}
?>
```
![Foto](Foto/Foto13.png)

### Perulangan do while
## **Codingannya** ##
```PHP
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
do {
echo "Perulangan ke: " . $i . '<br />';
$i++;
} while ($i<=10);
?>
```

![Foto](Foto/Foto14.png)

## Pertanyaan dan Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan.

## Jawab
### Pertama saya akan membuat 1 module dan 3 package

![img2!](assets/img/praktikum/1.png)

terdapat folder core yang berisi file umur.php dan gaji.php

dimana file `umur.php` untuk menampilkan output dengan menghitung
umur berdasarkan inputan tanggal lahir, 

Lalu file `gaji.php` untuk menentukan gaji yang berbeda-beda sesuai pilihan pekerjaan,

dan file `index.php` sebagai halaman utama dalam program sederhana ini.

### Menentukan umur berdasarkan tanggal lahir
![img2!](assets/img/praktikum/umr.png)

Untuk menentukan umur berdasarkan tgl lahir, saya menggunakan ``date_diff()`` yang berfungsi untuk menghitung selisih waktu dengan format penulisan seperti diatas

### Menentukan gaji sesuai dengan pilihan pekerjaan
![img2!](assets/img/praktikum/g.png)

Untuk Menentukan gaji sesuai dengan pilihan pekerjaan, saya menggunakan pengkondisian ``if()`` dan untuk opsi pilihan html menggunakan type `select`. dimana jika saya memilih dokter maka gaji saya adalah 10jt /bulan, jika tidak maka saya akan memilih pilihan selanjutnya. dst sampai tidak ada pilihan yang tersisa

### Form Input
![img2!](assets/img/praktikum/form.png)

Untuk form saya menggunakan method `POST`, dan action ``$_SERVER["PHP_SELF"]`` yaitu variabel super global yang mengembalikan nama file dari skript yang sedang dieksekusi. Jadi ``$_SERVER["PHP_SELF"]`` mengirimkan data formulir yang dikirimkan ke halaman itu sendiri

### Form Output
![img2!](assets/img/praktikum/o.png)

didalam kolom tabel saya menyisipkan sintaks php ke dalam html supaya pas nanti di run akan muncul output yg sebelumnya sudah di input

untuk kolom umur dan gaji saya memanggil file php terpisah, tujuan nya agar penulisan kode terlihat lebih rapi

## Output
![img2!](assets/img/praktikum/14.png)

![img2!](assets/img/praktikum/15.png)

![img2!](assets/img/praktikum/16.png)


