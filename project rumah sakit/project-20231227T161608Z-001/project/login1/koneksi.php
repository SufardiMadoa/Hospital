<?php
// Fungsi koneksi ke database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'rumah_sakit'; // Ganti dengan nama database Anda

$koneksi = mysqli_connect($host, $user, $password, $database);


if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Menerima kata kunci pencarian dari form


?>

