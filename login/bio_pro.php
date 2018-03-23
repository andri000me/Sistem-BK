<?php
include '../konek.php';
session_start();
if($_SESSION['status'] !="login"){
 header("location:login.php");
}
$nisn = $_SESSION['nisn'];
/////masukkan variabel coeg :D////
$nis = $_POST['nis'];
$kelas = $_POST['kelas'];
$nik = $_POST['nik'];
$namel = $_POST['namel'];
$tl = $_POST['tl'];
$ttl = $_POST['ttl'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$nopel = $_POST['nopel'];
$nope = $_POST['nope'];
$email = $_POST['email'];
/////////////////////////////////
mysql_query("UPDATE bio SET nisn='$nisn', nis='$nis', kelas='$kelas', nik='$nik', namel='$namel', tl='$tl', ttl='$ttl', agama='$agama', alamat='$alamat', nopel='$nopel', nope='$nope', email='$email' WHERE nisn='$nisn'") or die(mysql_error());
exit(header("location:lihat_biodata.php"));
?>
