<?php 
include '../config.php';

// menerima atau menampung data id yang dikirim 
$id = $_GET['id'];

// Menghapus data dari database sesuai dengan id nya
$delete = mysqli_query($conn, "DELETE FROM pesanan WHERE id='$id'");

// membuat pop up dan juga mengalihkan kembali ke halaman read
if ($delete) {
    echo "<script>alert('Data berhasil dihapus'); window.location.href='read.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus');</script>";
}

?>