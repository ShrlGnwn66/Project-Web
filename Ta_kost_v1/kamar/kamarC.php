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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kamar C</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Vollkorn:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
</head>

<body>
  <div class="header">
    <nav>
      <img src="../img/logo.png" alt="">
    </nav>
  </div>

  <div class="card">
    <img src="../img/C.jpg" class="card__image" alt="brown couch" />
    <div class="card__content">
      <h1><b>Kamar C</b></h1>
      <span class="card__title">Kamar ini memiliki spesifikasi sebagai berikut :
        <ul>
          <li>Luas 4x3 Meter</li>
          <li>Kasur dengan ranjang 2 unit</li>
          <li>Lemari</li>
          <li>Kamar mandi luar</li>
          <li>Rp 500k/bln</li>
        </ul>
        <span>

          <button onclick="window.location.href='../pesan/index3.php'" class="btn btn-primary">Pesan</button>
          <button onclick="window.location.href='../menukamar.php'" class="btn btn-primary">Cancel</button>
    </div>
  </div>
</body>

</html>