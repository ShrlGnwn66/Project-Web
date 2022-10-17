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

        <div class="maps">
            <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1759.327623116132!2d113.72457454360368!3d-8.163336279214445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd69562761869c9%3A0x9bf54bd38d95f52b!2sKost%20Putra%20B3!5e0!3m2!1sid!2sid!4v1653972476701!5m2!1sid!2sid" width="1250" height="450" style="border:0;" loading="lazy"></iframe></center>
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

    <!-- -- Footer -- -->
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