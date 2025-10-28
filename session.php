<?php 
    session_start(); // variabel global
    $_SESSION['isLoggedIn'] = true; // menandakan user sudah login, biasanya di fitur 'ingat saya'
    $_SESSION['username'] = "ADMIN";


    header("Location: cekSession.php");
?>