<?php

$host = "localhost"; // nama host server
$username = "root"; // nama pengguna
$password = ""; // kata sandi
$dbname = "pa"; // nama database

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}



?>