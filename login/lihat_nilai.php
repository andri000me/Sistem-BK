<?php
include '../konek.php';
session_start();
if($_SESSION['status'] !="login"){
	header("location:/login.php");
}
$nisn = $_SESSION['nisn'];
$sa1 = mysql_query("SELECT * FROM bk.smt1 WHERE nisn = '$nisn'");
$sa2 = mysql_query("SELECT * FROM bk.smt2 WHERE nisn = '$nisn'");
$sa3 = mysql_query("SELECT * FROM bk.smt3 WHERE nisn = '$nisn'");
$sa4 = mysql_query("SELECT * FROM bk.smt4 WHERE nisn = '$nisn'");
$sa5 = mysql_query("SELECT * FROM bk.smt5 WHERE nisn = '$nisn'");
?>
<?php
$title = "<title>Lihat Nilai</title>";
include_once '/theme/biasa.php';
?>
<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php?nisn=<?php echo "$nisn";?>">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Lihat Nilai</li>
            </ol>
            <div class="row">
              <div class="col-12">
                <h1>INFO NILAI</h1>
								<h6>Jika nilai tidak ada / tidak muncul. Silahkan isi nilai terlebih dahulu</h6>
                <br/>
                <br/>
                <br/>


<h4>Nilai Semester 1    <?php if (mysql_num_rows($sa1) == 1) {echo "<a href='smt1_edit.php' class='fa fa-edit'>Edit</a>";}?></h4>
<div class="table-container">
<table border="1">
<tr>
   <th>Agama</th>
   <th>PKN</th>
   <th>MTK</th>
   <th>Sjr.Indo</th>
   <th>B.Indo</th>
   <th>B.Ing</th>
   <th>SBK</th>
   <th>Prakarya</th>
   <th>PJOK</th>
   <th>Bio.</th>
   <th>Fis.</th>
   <th>Kim.</th>
   <th>MTK(p)</th>
   <th>Geo.</th>
   <th>SEJ(p/r)</th>
   <th>Sos.</th>
   <th>Eko.</th>
   <th>B/S.Indo</th>
   <th>B/S.Ing</th>
   <th>B/S Arab</th>
   <th>B/S Mand.</th>
   <th>B/S Jerm</th>
   <th>B/S Pran.</th>
   <th>B/S Jepn.</th>
   <th>Mulok</th>

</tr>
<?php
if (!$sa1 == 0) {
   while($data = mysql_fetch_array($sa1)){
     echo "<tr>";
     echo "<td>".$data['agama']."</td>";
     echo "<td>".$data['pkn']."</td>";
     echo "<td>".$data['mtk']."</td>";
     echo "<td>".$data['sji']."</td>";
     echo "<td>".$data['bin']."</td>";
     echo "<td>".$data['bing']."</td>";
     echo "<td>".$data['sbk']."</td>";
     echo "<td>".$data['pr']."</td>";
     echo "<td>".$data['pjok']."</td>";
     echo "<td>".$data['bio']."</td>";
     echo "<td>".$data['fis']."</td>";
     echo "<td>".$data['kim']."</td>";
     echo "<td>".$data['mtkp']."</td>";
     echo "<td>".$data['geo']."</td>";
     echo "<td>".$data['sejp']."</td>";
     echo "<td>".$data['sos']."</td>";
     echo "<td>".$data['eko']."</td>";
     echo "<td>".$data['bsin']."</td>";
     echo "<td>".$data['bsing']."</td>";
     echo "<td>".$data['bsas']."</td>";
     echo "<td>".$data['bsam']."</td>";
     echo "<td>".$data['bsaj']."</td>";
     echo "<td>".$data['bsps']."</td>";
     echo "<td>".$data['bsjp']."</td>";
     echo "<td>".$data['bd']."</td>";
     echo "</tr>";
}} else {
  echo " anda belum memasukkan nilai untuk semester 1";
}
?>
</table>
</div>


<br/>
<br/>
<h4>Nilai Semester 2   <?php if (mysql_num_rows($sa2) == 1) {echo "<a href='smt2_edit.php' class='fa fa-edit'>Edit</a>";}?></h4>
<div class="table-container">
<table border="1">
<tr>
   <th>Agama</th>
   <th>PKN</th>
   <th>MTK</th>
   <th>Sjr.Indo</th>
   <th>B.Indo</th>
   <th>B.Ing</th>
   <th>SBK</th>
   <th>Prakarya</th>
   <th>PJOK</th>
   <th>Bio.</th>
   <th>Fis.</th>
   <th>Kim.</th>
   <th>MTK(p)</th>
   <th>Geo.</th>
   <th>SEJ(p/r)</th>
   <th>Sos.</th>
   <th>Eko.</th>
   <th>B/S.Indo</th>
   <th>B/S.Ing</th>
   <th>B/S Arab</th>
   <th>B/S Mand.</th>
   <th>B/S Jerm</th>
   <th>B/S Pran.</th>
   <th>B/S Jepn.</th>
   <th>Mulok</th>

</tr>
<?php
if (!$sa2 == 0) {
   while($data = mysql_fetch_array($sa2)){
     echo "<tr>";
     echo "<td>".$data['agama']."</td>";
     echo "<td>".$data['pkn']."</td>";
     echo "<td>".$data['mtk']."</td>";
     echo "<td>".$data['sji']."</td>";
     echo "<td>".$data['bin']."</td>";
     echo "<td>".$data['bing']."</td>";
     echo "<td>".$data['sbk']."</td>";
     echo "<td>".$data['pr']."</td>";
     echo "<td>".$data['pjok']."</td>";
     echo "<td>".$data['bio']."</td>";
     echo "<td>".$data['fis']."</td>";
     echo "<td>".$data['kim']."</td>";
     echo "<td>".$data['mtkp']."</td>";
     echo "<td>".$data['geo']."</td>";
     echo "<td>".$data['sejp']."</td>";
     echo "<td>".$data['sos']."</td>";
     echo "<td>".$data['eko']."</td>";
     echo "<td>".$data['bsin']."</td>";
     echo "<td>".$data['bsing']."</td>";
     echo "<td>".$data['bsas']."</td>";
     echo "<td>".$data['bsam']."</td>";
     echo "<td>".$data['bsaj']."</td>";
     echo "<td>".$data['bsps']."</td>";
     echo "<td>".$data['bsjp']."</td>";
     echo "<td>".$data['bd']."</td>";
     echo "</tr>";
}} else {
  echo " anda belum memasukkan nilai untuk semester 2";
}
?>
</table>
</div>

<br />
<br />
<h4>Nilai Semester 3   <?php if (mysql_num_rows($sa3) == 1) {echo "<a href='smt3_edit.php' class='fa fa-edit'>Edit</a>";}?></h4>
<div class="table-container">
<table border="1">
<tr>
   <th>Agama</th>
   <th>PKN</th>
   <th>MTK</th>
   <th>Sjr.Indo</th>
   <th>B.Indo</th>
   <th>B.Ing</th>
   <th>SBK</th>
   <th>Prakarya</th>
   <th>PJOK</th>
   <th>Bio.</th>
   <th>Fis.</th>
   <th>Kim.</th>
   <th>MTK(p)</th>
   <th>Geo.</th>
   <th>SEJ(p/r)</th>
   <th>Sos.</th>
   <th>Eko.</th>
   <th>B/S.Indo</th>
   <th>B/S.Ing</th>
   <th>B/S Arab</th>
   <th>B/S Mand.</th>
   <th>B/S Jerm</th>
   <th>B/S Pran.</th>
   <th>B/S Jepn.</th>
   <th>Mulok</th>

</tr>
<?php
if (!$sa3 == 0) {
   while($data = mysql_fetch_array($sa3)){
     echo "<tr>";
     echo "<td>".$data['agama']."</td>";
     echo "<td>".$data['pkn']."</td>";
     echo "<td>".$data['mtk']."</td>";
     echo "<td>".$data['sji']."</td>";
     echo "<td>".$data['bin']."</td>";
     echo "<td>".$data['bing']."</td>";
     echo "<td>".$data['sbk']."</td>";
     echo "<td>".$data['pr']."</td>";
     echo "<td>".$data['pjok']."</td>";
     echo "<td>".$data['bio']."</td>";
     echo "<td>".$data['fis']."</td>";
     echo "<td>".$data['kim']."</td>";
     echo "<td>".$data['mtkp']."</td>";
     echo "<td>".$data['geo']."</td>";
     echo "<td>".$data['sejp']."</td>";
     echo "<td>".$data['sos']."</td>";
     echo "<td>".$data['eko']."</td>";
     echo "<td>".$data['bsin']."</td>";
     echo "<td>".$data['bsing']."</td>";
     echo "<td>".$data['bsas']."</td>";
     echo "<td>".$data['bsam']."</td>";
     echo "<td>".$data['bsaj']."</td>";
     echo "<td>".$data['bsps']."</td>";
     echo "<td>".$data['bsjp']."</td>";
     echo "<td>".$data['bd']."</td>";
}} else {
  echo " anda belum memasukkan nilai untuk semester 3";
}
?>
</table>
</div>

<br />
<br />
<h4>Nilai Semester 4   <?php if (mysql_num_rows($sa4) == 1) {echo "<a href='smt1_edit.php' class='fa fa-edit'>Edit</a>";}?></h4>
<div class="table-container">
<table border="1">
<tr>
   <th>Agama</th>
   <th>PKN</th>
   <th>MTK</th>
   <th>Sjr.Indo</th>
   <th>B.Indo</th>
   <th>B.Ing</th>
   <th>SBK</th>
   <th>Prakarya</th>
   <th>PJOK</th>
   <th>Bio.</th>
   <th>Fis.</th>
   <th>Kim.</th>
   <th>MTK(p)</th>
   <th>Geo.</th>
   <th>SEJ(p/r)</th>
   <th>Sos.</th>
   <th>Eko.</th>
   <th>B/S.Indo</th>
   <th>B/S.Ing</th>
   <th>B/S Arab</th>
   <th>B/S Mand.</th>
   <th>B/S Jerm</th>
   <th>B/S Pran.</th>
   <th>B/S Jepn.</th>
   <th>Mulok</th>

</tr>
<?php
if (!$sa4 == 0) {
   while($data = mysql_fetch_array($sa4)){
     echo "<tr>";
     echo "<td>".$data['agama']."</td>";
     echo "<td>".$data['pkn']."</td>";
     echo "<td>".$data['mtk']."</td>";
     echo "<td>".$data['sji']."</td>";
     echo "<td>".$data['bin']."</td>";
     echo "<td>".$data['bing']."</td>";
     echo "<td>".$data['sbk']."</td>";
     echo "<td>".$data['pr']."</td>";
     echo "<td>".$data['pjok']."</td>";
     echo "<td>".$data['bio']."</td>";
     echo "<td>".$data['fis']."</td>";
     echo "<td>".$data['kim']."</td>";
     echo "<td>".$data['mtkp']."</td>";
     echo "<td>".$data['geo']."</td>";
     echo "<td>".$data['sejp']."</td>";
     echo "<td>".$data['sos']."</td>";
     echo "<td>".$data['eko']."</td>";
     echo "<td>".$data['bsin']."</td>";
     echo "<td>".$data['bsing']."</td>";
     echo "<td>".$data['bsas']."</td>";
     echo "<td>".$data['bsam']."</td>";
     echo "<td>".$data['bsaj']."</td>";
     echo "<td>".$data['bsps']."</td>";
     echo "<td>".$data['bsjp']."</td>";
     echo "<td>".$data['bd']."</td>";
}} else {
  echo " anda belum memasukkan nilai untuk semester 4";
}
?>
</table>
</div>

<br />
<br />
<h4>Nilai Semester 5   <?php if (mysql_num_rows($sa5) == 1) {echo "<a href='smt1_edit.php' class='fa fa-edit'>Edit</a>";}?></h4>
<div class="table-container">
<table border="1">
<tr>
   <th>Agama</th>
   <th>PKN</th>
   <th>MTK</th>
   <th>Sjr.Indo</th>
   <th>B.Indo</th>
   <th>B.Ing</th>
   <th>SBK</th>
   <th>Prakarya</th>
   <th>PJOK</th>
   <th>Bio.</th>
   <th>Fis.</th>
   <th>Kim.</th>
   <th>MTK(p)</th>
   <th>Geo.</th>
   <th>SEJ(p/r)</th>
   <th>Sos.</th>
   <th>Eko.</th>
   <th>B/S.Indo</th>
   <th>B/S.Ing</th>
   <th>B/S Arab</th>
   <th>B/S Mand.</th>
   <th>B/S Jerm</th>
   <th>B/S Pran.</th>
   <th>B/S Jepn.</th>
   <th>Mulok</th>

</tr>
<?php
if (!$sa5 == 0) {
   while($data = mysql_fetch_array($sa5)){
     echo "<tr>";
     echo "<td>".$data['agama']."</td>";
     echo "<td>".$data['pkn']."</td>";
     echo "<td>".$data['mtk']."</td>";
     echo "<td>".$data['sji']."</td>";
     echo "<td>".$data['bin']."</td>";
     echo "<td>".$data['bing']."</td>";
     echo "<td>".$data['sbk']."</td>";
     echo "<td>".$data['pr']."</td>";
     echo "<td>".$data['pjok']."</td>";
     echo "<td>".$data['bio']."</td>";
     echo "<td>".$data['fis']."</td>";
     echo "<td>".$data['kim']."</td>";
     echo "<td>".$data['mtkp']."</td>";
     echo "<td>".$data['geo']."</td>";
     echo "<td>".$data['sejp']."</td>";
     echo "<td>".$data['sos']."</td>";
     echo "<td>".$data['eko']."</td>";
     echo "<td>".$data['bsin']."</td>";
     echo "<td>".$data['bsing']."</td>";
     echo "<td>".$data['bsas']."</td>";
     echo "<td>".$data['bsam']."</td>";
     echo "<td>".$data['bsaj']."</td>";
     echo "<td>".$data['bsps']."</td>";
     echo "<td>".$data['bsjp']."</td>";
     echo "<td>".$data['bd']."</td>";
}} else {
  echo " anda belum memasukkan nilai untuk semester 5";
}
?>
</table>
</div>
</div>
</div>
<br/>
<br/>

<?php

include 'theme/biasa2.php'; ?>
