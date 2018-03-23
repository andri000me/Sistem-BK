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
//variabel untuk semuanya//
$nisn = $_SESSION['nisn'];
$pro_nisn = $_POST['nisn'];
$smt = $_POST['smt'];
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

mysql_query("UPDATE bk.smt2 SET nisn='$nisn', agama='$agama', pkn='$pkn', mtk='$mtk', sji='$sji', bin='$bin', bing='$bing', sb='$sb', pr='$pr', pjok='$pjok', sbk='$sbk', pra='$pra', pjo='$pjo', bio='$bio', fis='$fis', kim='$kim', mtkp='$mtkp', geo='$geo', sejp='$sejp', sos='$sos', eko='$eko', bsin='$bsin', bsing='$bsing', bsas='$bsas', bsam='$bsam', bsaj='$bsaj', bsps='$bsps', bsjp='$bsjp', bd='$bd' WHERE nisn='$nisn'") or die(mysql_error());
exit(header("location:../lihat_nilai.php"));
?>
