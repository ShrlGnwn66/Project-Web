<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login user</title>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>

<body>
    <div class="form">
        <h2>Login</h2>
        <form action="cek_login.php" method="POST" class="login-email">
            <input type="email" name="email" placeholder="Email"  required>

            <input type="password" name="password" placeholder="Password"  required>

            <button type="submit" name="submit">Login</button>

            <p>Masuk sebagai Admin? <a href="admin/adminlogin.php"><b>Admin</b></a></p>
            <p>Belum punya akun? <a href="register.php"><b>Register disini</b></a></p>
           
        </form>
    </div>
</body>

</html>