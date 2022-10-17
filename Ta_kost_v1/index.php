<!DOCTYPE html>
<html>

<head>
    <!-- membuat website menjadi responsive -->
    <meta name="viewport" content="with=device-width, initial- scale=1.0">
    <!--  -->
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
                <!-- menu burger atau bars button -->
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="menukamar.php">KAMAR</a></li>
                    <li><a href="javascript:alert('Anda Harus Login Terlebih Dahulu Untuk Mengakses Halaman Ini !!')">MAPS</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                </ul>
            </div>
            <!-- close button -->
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
            <h1>The Best Kost Ever</h1>
            <p>Merantau ke kota orang adalah hal yang luar biasa, tetapi apakah dompet kalian luar biasa juga?
                Ingin tempat kost yang nyaman dan harga terjangkau? Tenang kami solusinya. Tidak ada waktu untuk survey ke kost kami?
                Tenang, website kami menyediakan informasi lengkap seputar kost kami.
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

        function myFunction() {
            alert("Saya adalah kotak peringatan!");
        }
    </script>

    <!----- Features ------>
    <section class="features">
        <h1>Our Kost Features</h1>
        <p>Adapun beberapa foto asli dari penginapan kami. Agar calon pelanggan tidak perlu jauh-jauh untuk melihat ruangan penginapan kami.</p>

        <div class="row">
            <div class="features-col">
                <img src="img/WIFI.jpg">
                <div class="layer">
                    <h3>Free WIFI</h3>
                </div>
            </div>

            <div class="features-col">
                <img src="img/dapur.jpeg">
                <div class="layer">
                    <h3>DAPUR UMUM</h3>
                </div>
            </div>

            <div class="features-col">
                <img src="img/km.jpeg">
                <div class="layer">
                    <h3>KAMAR MANDI</h3>
                </div>
            </div>
        </div>
    </section>

    <!---- Facilities --->
    <section class="facilities">
        <h1>Our Kost Facilities</h1>
        <p>Selain kenyamanan kamar untuk calon pelanggan, kami juga menyediakan outdoor dan lainnya. Kami ingin melayani yang terbaik untuk para pelanggan.</p>

        <div class="row">
            <div class="facilities-col">
                <img src="img/park.jpg">
                <h3>Safe Parking</h3>
                <p>Tersedia tempat parkir di dalam sehingga tidak perlu khawatir kendaraan basah atau rawan dicuri.</p>
            </div>

            <div class="facilities-col">
                <img src="img/security.jpeg">
                <h3>Security</h3>
                <p>Keamanan kami terjamin aman karena telah tersedia cctv di setiap sudut rawan pencurian.</p>
            </div>

            <div class="facilities-col">
                <img src="img/ruangtamu.jpg">
                <h3>Others</h3>
                <p>Adapun tempat untuk melepas lelah sambil menghirup udara segar dari luar.</p>
            </div>
        </div>
    </section>

    <!--- testimoni --->
    <section class="testimoni">
        <h1>What Our Consumer Says</h1>
        <p>Beberapa pelanggan kami telah membuktikan tempat penginapan kami.</p>

        <div class="row">
            <div class="testimoni-col">
                <img src="img/profil1.jpeg">
                <div>
                    <p>Saya senang menginap disini karena kecepatan wifi nya sangat cepat dan tempatnya kondusif.
                        Sehingga,saya dapat konsentrasi penuh saat mengerjakan tugas. Apalagi bidang saya yang selalu mengerjakan koding dan
                        itu harus memerlukan ekstra konsentrasi. Ayo segera daftar disini, kapan lagi dapat penginapan yang kondusif dan wifi lancar? :D</p>
                    <h3>Ramadhan Maulana</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>

            <div class="testimoni-col">
                <img src="img/profil3.jpeg">
                <div>
                    <p>Penginapan ini sangat recommended untuk orang yang butuh mencari ketenangan. Selain, penginapannya yang nyaman dan wifi yang lancar,
                        teman sebelah kamar dan pemilik penginapan ini sangat ramah. Apalagi mereka tipe orang yang suka ketenangan seperti saya.
                        Tidak perlu ragu-ragu untuk memilih penginapan ini. So, segera daftar ygy!
                    </p>
                    <h3>Abdul Ghofur</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
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