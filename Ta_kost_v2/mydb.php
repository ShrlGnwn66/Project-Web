<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli ($servername, $username, $password);

// membuat database dengan nama "kost"
$sql = "CREATE DATABASE kost";
if ($conn->query($sql) === TRUE){
    echo "Database berhasil dibuat";
} else {
    echo "Database gagal dibuat";
}
?>