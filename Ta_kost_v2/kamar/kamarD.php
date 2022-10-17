<?php
// fungsi blok kode dibawah ini adalah agar kita harus melewati form login terlebih dahulu untuk mengaksesnya.
session_start();

if (!isset($_SESSION['username'])) {
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
    <img src="../img/D.jpg" class="card__image" alt="brown couch" />
    <div class="card__content">
      <h1><b>Kamar D</b></h1>
      <span class="card__title">Kamar ini memiliki spesifikasi sebagai berikut :
        <ul>
          <li>Luas 4x3 Meter</li>
          <li>Kasur diatas</li>
          <li>Karpet</li>
          <li>Lemari</li>
          <li>Kamar mandi dalam</li>
          <li>Rp 650k/bln</li>
        </ul>
        <span>

          <button onclick="window.location.href='../pesan/index.php'" class="btn btn-primary">Pesan</button>
          <button onclick="window.location.href='../menukamar.php'" class="btn btn-primary">Cancel</button>
    </div>
  </div>
</body>

</html>