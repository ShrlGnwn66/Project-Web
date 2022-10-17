<?php
// fungsi blok kode dibawah ini adalah agar kita harus melewati form login terlebih dahulu untuk mengaksesnya.
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="with=device-width, initial- scale=1.0">
    <title>KOST KITA</title>
    <link rel="stylesheet" href="1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Oswald:wght@200&family=Share+Tech+Mono&family=VT323&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>

<body>
    <section class="header">
        <nav>
            <img src="img/logo.png">
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="menukamar.php">KAMAR</a></li>
                    <li><a href="maps.php">MAPS</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
            <h1>Pilihan Kamar</h1>
            <p>Kami menyediakan penginapan untuk mahasiswa Politeknik Negeri Jember dengan lokasi yang dekat dengan kampus Polije.
                <br>Terdapat berbagai pilihan kamar yang kami sediakan seperti dibawah ini.
            </p>
        </div>
    </section>

    <!--- javascript for Toggle Menu-->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>

    <!---- Kamar yang Tersedia -->
    <section class="promotion">
        <h1>Pilihan Kamar</h1>
        <p>Setiap kamar memiliki bentuk yang berbeda untuk menyesuaikan kebutuhan pelanggan.</p>

        <div class="row">
            <div class="promo-col">
                <h3><u>Kamar A</u></h3>
                <h4>Rp.300K</h4>
                <a href="kamar/kamarA.php"><img src="img/A.jpg"></a>
                <p>Kamar ini memiliki ukuran standar yaitu 3x3 meter. Sebuah ukuran yang pas dan nyaman.<a href="kamar/kamarA.php"> Selengkapnya..</a></p>
            </div>

            <div class="promo-col">
                <h3><u>Kamar B</u></h3>
                <h4>Rp.350K</h4>
                <a href="kamar/kamarB.php"><img src="img/B.jpg"></a>
                <p>Kamar ini memiliki ukuran yang sama dengan kamar A, namun kamar ini memiliki meja dan kursi untuk memudahkan keperluan pelanggan.<a href="kamar/kamarB.php"> Selengkapnya..</a></p>
            </div>

            <div class="promo-col">
                <h3><u>Kamar C</u></h3>
                <h4>Rp.500K</h4>
                <a href="kamar/kamarC.php"><img src="img/C.jpg"></a>
                <p>Kamar ini memiliki ukuran yang cukup luas dibandingkan kamar sebelumnya. Kamar ini cocok bagi pelanggan yang membutuhkan ruang lebih luas atau untuk yang membutuhkan dua kasur. <a href="kamar/kamarC.php"> Selengkapnya..</a></p>
            </div>

            <div class="promo-col">
                <h3><u>Kamar D</u></h3>
                <h4>Rp.650K</h4>
                <a href="kamar/kamarD.php"><img src="img/D.jpg"></a>
                <p>Kamar ini memiliki ukuran yang sama dengan kamar sebelumnya, hanya saja kamar ini menawarkan kamar mandi didalam sehingga pelanggan tidak perlu antri kamar mandi diluar. <a href="kamar/kamarD.php"> Selengkapnya..</a></p>
            </div>
        </div>
    </section>


    <!---- Footer ---->
    <section class="footer">
        <h4>About Us</h4>
        <p>Website ini dibuat untuk memenuhi Tugas Akhir Pemrograman Web. <br> Jangan lupa ikuti kami ya!</p>
        <div class="icons">
            <a href="https://instagram.com/shrlgn05/">
                <i class="fa fa-instagram"></i>
            </a>
            <a href="https://wa.me/6285336282458">
                <i class="fa fa-whatsapp"></i>
            </a>
            <a href="https://twitter.com/mutyarapertiwi">
                <i class="fa fa-twitter"></i>
            </a>
        </div>
        <p>Made with <i class="fa fa-heart-o"></i> by Team 2</p>
    </section>
</body>

</html>