<?php
$host = 'localhost'; // Lokasi server MySQL
$user = 'root'; // Nama pengguna MySQL (biasanya "root" secara default)
$pass = ''; // Kata sandi pengguna MySQL (biasanya kosong secara default)
$dbname = 'latihan'; // Nama database yang ingin Anda hubungkan

// Membuat koneksi ke database
$koneksi = new mysqli($host, $user, $pass, $dbname);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
else{
    echo "Koneksi ke database berhasil terhubung!";
}
// Jika koneksi sukses, Anda siap untuk melakukan operasi database
?>
