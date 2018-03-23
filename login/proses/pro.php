<?php
//kesel la, konek.php gbs $global gitu kek :p//
mysql_connect("localhost","root","");
mysql_select_db("bk");
//ya here we go again...//
session_start();
if($_SESSION['status'] !="login"){
	header("location:login.php");
}
$nisn = $_SESSION['nisn'];
$nilaiw = mysql_query("SELECT * FROM bk.smt1 WHERE nisn = '$nisn'")or die(mysql_error());?>
?>
