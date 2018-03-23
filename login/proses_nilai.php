<?php
 include '../konek.php';
 session_start();
 if($_SESSION['status'] !="login"){
 	header("location:login.php");
 }

 // cek apakah user telah login, jika belum login maka di alihkan ke halaman login


$nisn = $_SESSION['nisn'];
$pro_nisn = $_POST['nisn'];
$smt = $_POST['smt'];
$namel = $_POST['namel'];
$agama = $_POST['agama'];
$pkn = $_POST['pkn'];
$mtk = $_POST['mtk'];
$sji = $_POST['sji'];
$bin = $_POST['bin'];
$bing = $_POST['bing'];
$sb = $_POST['sb'];
$pr = $_POST['pr'];
$pjok = $_POST['pjok'];
$sbk = $_POST['sbk'];
$pra = $_POST['pra'];
$pjo = $_POST['pjo'];
$bio = $_POST['bio'];
$fis = $_POST['fis'];
$kim = $_POST['kim'];
$mtkp = $_POST['mtkp'];
$geo = $_POST['geo'];
$sejp = $_POST['sejp'];
$sos = $_POST['sos'];
$eko = $_POST['eko'];
$bsin = $_POST['bsin'];
$bsing = $_POST['bsing'];
$bsas = $_POST['bsas'];
$bsam = $_POST['bsam'];
$bsaj = $_POST['bsaj'];
$bsps = $_POST['bsps'];
$bsjp = $_POST['bsjp'];
$bd = $_POST['bd'];

////////Query per semester////
//$query1 =
//$query2 =
//$query3 =
//$query4 =
//$query5 =
///////AYY, penggunaan If, Logika///////
if ($smt == 1) {
  mysql_query("INSERT INTO bk.smt1 VALUES ('$nisn', '$namel', '$agama', '$pkn', '$mtk', '$sji', '$bin', '$bing', '$sb', '$pr', '$pjok', '$sbk', '$pra', '$pjo', '$bio', '$fis', '$kim', '$mtkp', '$geo', '$sejp', '$sos', '$eko', '$bsin', '$bsing', '$bsas', '$bsam', '$bsaj', '$bsps', '$bsjp', '$bd')") or die(mysql_error());
}
//////2/////////
if ($smt == 2) {
  mysql_query("INSERT INTO bk.smt2 VALUES ('$nisn', '$namel', '$agama', '$pkn', '$mtk', '$sji', '$bin', '$bing', '$sb', '$pr', '$pjok', '$sbk', '$pra', '$pjo', '$bio', '$fis', '$kim', '$mtkp', '$geo', '$sejp', '$sos', '$eko', '$bsin', '$bsing', '$bsas', '$bsam', '$bsaj', '$bsps', '$bsjp', '$bd')") or die(mysql_error());
}
/////3/////////
if ($smt == 3) {
  mysql_query("INSERT INTO bk.smt3 VALUES ('$nisn', '$namel', '$agama', '$pkn', '$mtk', '$sji', '$bin', '$bing', '$sb', '$pr', '$pjok', '$sbk', '$pra', '$pjo', '$bio', '$fis', '$kim', '$mtkp', '$geo', '$sejp', '$sos', '$eko', '$bsin', '$bsing', '$bsas', '$bsam', '$bsaj', '$bsps', '$bsjp', '$bd')") or die(mysql_error());
}
//////4/////////
if ($smt == 4) {
  mysql_query("INSERT INTO bk.smt4 VALUES ('$nisn', '$namel', '$agama', '$pkn', '$mtk', '$sji', '$bin', '$bing', '$sb', '$pr', '$pjok', '$sbk', '$pra', '$pjo', '$bio', '$fis', '$kim', '$mtkp', '$geo', '$sejp', '$sos', '$eko', '$bsin', '$bsing', '$bsas', '$bsam', '$bsaj', '$bsps', '$bsjp', '$bd')") or die(mysql_error());
}
//////5/////////
if ($smt == 5) {
  mysql_query("INSERT INTO bk.smt5 VALUES ('$nisn', '$namel', '$agama', '$pkn', '$mtk', '$sji', '$bin', '$bing', '$sb', '$pr', '$pjok', '$sbk', '$pra', '$pjo', '$bio', '$fis', '$kim', '$mtkp', '$geo', '$sejp', '$sos', '$eko', '$bsin', '$bsing', '$bsas', '$bsam', '$bsaj', '$bsps', '$bsjp', '$bd')") or die(mysql_error());
}
exit(header("location:index.php"));
/////lol done////
