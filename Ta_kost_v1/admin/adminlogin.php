<?php
// memanggil koneksi
include '../config.php';

// memulai eksekusi session pada server
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="../login.css">
    <!-- fungsi blok kode dibawah ini untuk logo icon di atas website -->
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
</head>

<body>
    <div class="form">
        <h2>ADMIN</h2>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="submit">Login</button>
            <p>
                Login user? <a href="../login.php"><b>Login</b></a>
            </p>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $qry = mysqli_query($conn, "SELECT * FROM adminku WHERE username = '$username'  AND password = md5 ('$password') ");

            // fungsi md5 yaitu untuk mengenkripsi password yang diinputkan
            // Fungsi mysql_num_rows() digunakan untuk mengetahui berapa banyak jumlah baris hasil pemanggilan fungsi mysql_query().
            // Fungsi ini membutuhkan 1 buah argumen, yakni variabel resources hasil dari fungsi mysql_query() 
            $cek = mysqli_num_rows($qry);
            if ($cek) {
                $_SESSION['username'] = $username;
                header("location:index.php");
            } else {
                echo "<script>alert('username atau password yang anda masukkan salah.')</script>";
            }
        }
        ?>
    </div>
</body>

</html>