<?php
include '../config.php';
// fungsi session ini yaitu untuk memulai eksekusi session pada server dan kemudian menyimpan nya pada browser
session_start();

// fungsi blok kode dibawah ini adalah agar kita harus melewati form login terlebih dahulu untuk mengaksesnya.
if (!isset($_SESSION['email'])) {
    header("Location: adminlogin.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
</head>

<body>
    <nav class="navtop">
        <div>
            <h1>ADMIN OF KOST KITA</h1>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
            <a href="read.php"><i class="fa fa-book"></i>Data Pesanan</a>
        </div>
    </nav>

    <div class="content update">
        <h2>Update Data Pesanan</h2>
        <?php
        $id = $_GET['id'];
        $data = mysqli_query($conn, "SELECT * FROM pesanan WHERE id='$id'");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <form action="#" method="post">
                <label for="nama">Nama</label>
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                <label for="asalkota">Asal kota</label>
                <input type="text" name="asalkota" value="<?php echo $d['asalkota']; ?>">
                <label for="jeniskamar">Jenis Kamar</label>
                <input type="text" name="jeniskamar" value="<?php echo $d['jeniskamar']; ?>">
                <label for="telepon">No. Telp</label>
                <input type="text" name="telp" value="<?php echo $d['telp']; ?>">
                <input type="submit" name="update" value="Update data">
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>

<?php

// menangkap data yang sudah di update melalui form, if isset berfungsi untuk memeriksa apakah variabel sudah diatur atau belum
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $asalkota = $_POST['asalkota'];
    $jeniskamar = $_POST['jeniskamar'];
    $telp = $_POST['telp'];

    // Update data ke database
    $update = mysqli_query($conn, "UPDATE pesanan set nama='$nama', asalkota='$asalkota', jeniskamar='$jeniskamar', telp='$telp' where id='$id'");

    // pop up dan juga untuk kembali ke halaman read
    if ($update) {
        echo "<script>alert('Data berhasil diubah');window.location.href='read.php';</script>";
    } else {
        echo "<script>alert('Data gagal diubah');window.location.href='read.php';</script>";
    }
}

?>