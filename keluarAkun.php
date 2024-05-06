<?php
// Unset Session Login
session_start();
session_unset();
session_destroy();

//Kembali ke halaman index.php 
header("location:masukAkun.php");
exit;
?>