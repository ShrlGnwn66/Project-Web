<?php
// fungsi blok kode dibawah ini adalah agar kita harus melewati form login terlebih dahulu untuk mengaksesnya.
session_start();

if (!isset($_SESSION['email'])) {
header("Location: ../login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css'>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
</head>

<!-- form pesanan -->

<body>
    <div class="form-holder">
        <div class="form-content">
            <div class="form-items">
                <h3>Form Pesanan</h3>
                <p>Masukkan data Anda.</p>
                <form action="" method="post">
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="nama" placeholder="Nama Anda" required>
                    </div>

                    <div class="col-md-12">
                        <input class="form-control" type="text" name="asalkota" placeholder="Kota Asal" required>
                    </div>

                    <!-- memilih jenis kamar -->
                    <div class="col-md-12">
                            <input value="Kamar D" name="jeniskamar" class="form-select mt-3" required readonly></input>
                    </div>


                    <div class="col-md-12">
                        <input class="form-control" type="tel" pattern="[0][8][0-9]{11,13}" maxlength="13" name="telp" placeholder="No Telp" required>
                    </div>

                    <div class="form-button mt-3">
                        <button name="submit" type="submit" class="btn btn-primary">Pesan</button>
                        <button onclick="window.location.href='../home.php';return false;" class="btn btn-primary">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
// koneksi ke database
include '../config.php';
// menangkap data dari form dan fungsi isset yaitu memeriksa apakah variabel sudah di atur atau belum
if (isset($_POST['submit'])) {
    $nama = $_REQUEST['nama'];
    $asalkota = $_REQUEST['asalkota'];
    $jeniskamar = $_REQUEST['jeniskamar'];
    $telp = $_REQUEST['telp'];

    // menginputkan data ke database
    $tambah = mysqli_query($conn, "INSERT INTO pesanan values ('', '$nama', '$asalkota', '$jeniskamar', '$telp')");

    // pop up dan kembali ke halaman home
    if ($tambah) {
        echo "<script>alert('Pesanan anda diterima, kami akan menghubungi melalui telepon yang anda inputkan. Jika ada yang ingin ditanyakan dapat menghubungi media sosial yang tertera.'); window.location.href='../home.php'</script>";
    } else {
        echo "<script>alert('Pesanan anda gagal, periksa kembali kelengkapan data yang anda masukkan.')</script>";
    }
}

?>