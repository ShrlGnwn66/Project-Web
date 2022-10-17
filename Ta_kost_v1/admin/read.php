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

    <div class="content read">
        <h2>Data Pesanan</h2>
        <br>
        <table>
            <thead>
                <tr>
                    <td>NO</td>
                    <td>Nama</td>
                    <td>Asal Kota</td>
                    <td>Jenis Kamar</td>
                    <td>No. Telp</td>
                    <td>Opsi</td>
                </tr>
            </thead>

            <tbody>

                <?php
                $no = 1;
                $data = mysqli_query($conn, "select * from pesanan");
                // Fungsi fetch_array() / mysqli_fetch_array() digunakan untuk mengambil baris hasil sebagai array asosiatif, array numerik, atau keduanya.
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['asalkota']; ?></td>
                        <td><?php echo $d['jeniskamar']; ?></td>
                        <td><?php echo $d['telp']; ?></td>
                        <td class="actions">
                            <a href="update.php?id=<?php echo $d['id']; ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                            <a href="delete.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" class="hapus"><i class="fas fa-trash fa-xs"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>