<?php
include '../konek.php';
include_once 'passhash.php';
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nis = $_POST['nis'];
$password2       = randomString();
$hasher         = md5($password2);

$cekdata="select * from login where nisn='$nisn'";
$ada=mysql_query($cekdata) or die(mysql_error());
if(mysql_num_rows($ada)>0)
{
  echo "<h3>NISN .'$nisn' telah Terdaftar! Silahkan diulangi / Hapus data yang sama di dashboard guru.</h3>";
  echo "<br/>";
  echo "<a href=\"javascript:history.go(-1)\">Kembali</a>";
  echo "<hr>";
}
else{
  $query = "INSERT into bk.login (nisn,nama,kelas,nis,password,password2)values('$nisn','$nama','$kelas', '$nis', '$hasher', '$password2')";
  $hasil = mysql_query($query) or die (mysql_error());
}
if(!$hasil>0){
//          jika import gagal
    die(mysql_error());
}else{
//          jika impor berhasil
    echo "Data berhasil diupload";
    header('location:index.php');
}
$query2 = "INSERT into bk.bio (nisn)VALUES('$nisn')";
mysql_query($query2) or die (mysql_error());
?>
