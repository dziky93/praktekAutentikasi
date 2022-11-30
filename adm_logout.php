<?php
session_start();
 
unset($_SESSION['usr']);
unset($_SESSION['nm_usr']);


$pesan = "Anda telah logout!";
header("Location: adm_login.php?msg=$pesan");
?>