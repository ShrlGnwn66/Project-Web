<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "kost";

// membuat koneksi untuk database
$conn = mysqli_connect($server, $user, $pass, $database);

// Check connection (error atau tidak)
// Fungsi mysqli_connect_errno () digunakan untuk mengembalikan kode kesalahan dari kesalahan koneksi terakhir, jika ada.

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : ". mysqli_connect_error();
}
 ?>