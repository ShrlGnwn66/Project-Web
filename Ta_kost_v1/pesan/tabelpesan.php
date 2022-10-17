<?php
$conn = new mysqli('localhost','root','', 'kost');

$sql = "CREATE TABLE pesanan (
    id INT(10) primary key AUTO_INCREMENT,
    nama varchar (50),
    asalkota varchar(50),
    jeniskamar varchar(50),
    telp char (15))";

if ($conn->query($sql) === TRUE){
    echo "Tabel berhasil dibuat";
} else {
    echo "Tabel gagal dibuat";
}
