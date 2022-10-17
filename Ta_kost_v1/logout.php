<?php 

// fungsi session ini yaitu untuk memulai eksekusi session pada server dan kemudian menyimpan nya pada browser. 
session_start();
// fungsi session ini yaitu untuk menghapus semua session data di server/\.
session_destroy();

header("Location: login.php");
?>