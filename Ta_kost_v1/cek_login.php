<?php 
// MENGAKTIFKAN SESSION PADA PHP
session_start();

// MENGHUBUNGKAN PHP DENGAN KONEKSI DATABASE
include 'config.php';

// MENANGKAP DATA YANG DIKIRIM DARI FORM LOGIN
$email = $_POST['email'];
$password = md5($_POST['password']);

// MENYELEKSI DATA USER DENGAN USERNAME DAN PASSWORD YANG SESUAI
$login = mysqli_query($conn,"select * from register where email='$email' and password='$password'");

// MENGHITUNG JUMLAH DATA YANG DITEMUKAN ATAU MENGECEK
$cek = mysqli_num_rows($login);

// CEK APAKAH USERNAME DAN PASSWORD DI TEMUKAN PADA DATABASE
if($cek > 0){

// MEMBUAT VARIABEL BARU DATA UNTUK MEMANGGIL VARIABEL LOGIN
	$data = mysqli_fetch_assoc($login);

	// CEK JIKA USER LOGIN SEBAGAI ADMIN
	if($data['level']=="admin"){

		// BUAT SESSION LOGIN DAN USERNAME
		// CEK JIKA USER LOGIN SEBAGAI ADMIN
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";
		// ALIHKAN KE HALAMAN DASHBOARD ADMIN JIKA USER ADMIN
		header("location:admin/index.php");

	// CEK JIKA USER LOGIN SEBAGAI USER
	}else if($data['level']==""){
		// BUAT SESSION LOGIN DAN USERNAME
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		// ALIHKAN KE HALAMAN DASHBOARD USER
		header("location:home.php");

	}else{

		// ALIHKAN KE HALAMAN LOGIN KEMBALI
		echo "<script>alert('Email atau kata sandi yang anda masukkan salah.'); window.location.href='login.php'</script>";
	}	
}else{
	echo "<script>alert('Email atau kata sandi yang anda masukkan salah.'); window.location.href='login.php'</script>";
}

?>