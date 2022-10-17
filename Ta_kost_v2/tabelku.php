<?php
$conn = new mysqli('localhost','root', '', 'kost');

// membuat tabel dengan nama register (tabel untuk user yang mendaftar akun)
// id bersifat primary key atau unik
$sql = "CREATE TABLE register (
    id INT(10) primary key AUTO_INCREMENT, 
    username varchar (50),
    email varchar(50),
    password varchar(50))";

if ($conn->query($sql) === TRUE){
    echo "Tabel berhasil dibuat";
} else {
    echo "Tabel gagal dibuat";
}
?>