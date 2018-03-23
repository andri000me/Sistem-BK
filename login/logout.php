<?php
include '../konek.php';
session_start();
$nisn = $_SESSION['nisn'];
date_default_timezone_set('Asia/Jakarta');
$ip_num = $_SERVER['REMOTE_ADDR']; //untuk mendeteksi alamat IP
$host_name = gethostbyaddr($_SERVER['REMOTE_ADDR']); //untuk mendeteksi computer name
$jam = date('d M Y H:i:s');
$ipku = "UPDATE login SET ip = '$ip_num-$host_name', jam ='$jam' WHERE nisn = '$nisn'";
mysql_query($ipku);
session_destroy();
header("location:../login/login.php");
?>
