<?php
include '../konek.php';

session_start();
if($_SESSION['status'] !="login"){
	header("location:/login.php");
}

$nisn = $_SESSION['nisn'];
$password = $_POST['pass'];
$kpass = $_POST['kpass'];
$lepass = md5($password);


if ($password != $kpass) {
  echo "<script>alert('Maaf, Password tidak sesuai dengan konfirmasi password, silahkan di ulang');</script>";
  echo "<script>window.history.back();</script>";
} else {
  mysql_query("UPDATE login SET password='$lepass', password2='$password' WHERE nisn='$nisn'");
  header('Location:index.php');
}
?>
