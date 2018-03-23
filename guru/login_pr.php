<?php
include 'konek.php';
$username = $_POST['user'];
$password = md5($_POST['password']);

$login = mysql_query("select * from bk.login_guru where username='$username' and password='$password'");
$cek = mysql_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:login.php");
}
mysql_error();

?>
