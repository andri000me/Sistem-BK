<?php
include '../konek.php';
$nisn = $_POST['nisn'];
$password = md5($_POST['password']);

$login = mysql_query("select * from login where nisn='$nisn' and password='$password'");
$cek = mysql_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['nisn'] = $nisn;
	$_SESSION['status'] = "login";
	header("location:index.php?nisn=$nisn");
}else{
	header("location:login.php");
}

?>
