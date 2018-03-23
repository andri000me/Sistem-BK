<?php
include '../konek.php';
session_start();
if($_SESSION['status'] !="login"){
	header("location:login.php");
}
$nisn = $_SESSION['nisn'];
?>
<?php
$title = "<title>Tambah Nilai</title>";
include_once '/theme/biasa.php';
?>
<div class="content-wrapper">
		<div class="container-fluid">
			<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="index.php?nisn=<?php echo "$nisn";?>">Dashboard</a>
							</li>
							<li class="breadcrumb-item active">Tambah Nilai</li>
						</ol>
						<div class="row">
							<div class="col-12">
  <form method="post" action="proses_nilai.php?pro_nisn=<?php echo"$nisn";?> enctype="multipart/form-data">
<?php
$ya = mysql_connect("localhost","root","");
$sql = mysql_query("SELECT nisn FROM bk.smt1 WHERE nisn = '$nisn'");
$sql2 = mysql_query("SELECT nisn FROM bk.smt2 WHERE nisn = '$nisn'");
$sql3 = mysql_query("SELECT nisn FROM bk.smt3 WHERE nisn = '$nisn'");
$sql4 = mysql_query("SELECT nisn FROM bk.smt4 WHERE nisn = '$nisn'");
$sql5 = mysql_query("SELECT nisn FROM bk.smt5 WHERE nisn = '$nisn'");
$sql6 = mysql_query("SELECT * FROM bio WHERE nisn = '$nisn'");
$data1 = mysql_fetch_array($sql6);
?>
<table>
<tr>
	<tbody style="display:none">
	<td>Nama Lengkap</td>
	<td><input type="text" readonly="readonly" name="namel" value="<?php echo $data1['namel'];?>"></td>
</tbody>
</tr>
</table>
    <select name="smt">
      <option> Semester </option>
        <option value="1"><?php if (mysql_num_rows($sql) == 0) {
          echo "Semester 1";}
				else {
					echo "===Kosong===";
				}?>
        </option>
        <option value="2"><?php if (mysql_num_rows($sql2) == 0) {
          echo "Semester 2";}
			else {
				echo "===Kosong===";}?>
        </option>
        <option value="3"><?php if (mysql_num_rows($sql3) == 0) {
          echo "Semester 3";}
			else {
				echo "===Kosong===";}?>
        </option>
        <option value="4"><?php if (mysql_num_rows($sql4) == 0) {
          echo "Semester 4";}
			else {
				echo "===Kosong===";}?>
        </option>
        <option value="5"><?php if (mysql_num_rows($sql5) == 0) {
          echo "Semester 5";}
			else {
				echo "===Kosong===";}?>
        </option>
      </select>
<hr>
  <table cellpadding="8">
    Mata Pelajaran Wajib (Kelompok A)
  <tr>
    <td>Pendidikan Agama</td>
    <td><input type="text" name="agama"></td>
  </tr>
  <tr>
    <td>Pendidikan Pancasila dan Kewarganegaraan</td>
    <td><input type="text" name="pkn"></td>
  </tr>
  <tr>
    <td>Matematika</td>
    <td><input type="text" name="mtk"></td>
  </tr>
  <tr>
    <td>Sejarah Indonesia</td>
    <td><input type="text" name="sji"></td>
  </tr>
  <tr>
    <td>Bahasa Indonesia</td>
    <td><input type="text" name="bin"></td>
  </tr>
  <tr>
    <td>Bahasa Inggris</td>
    <td><input type="text" name="bing"></td>
  </tr>
</table>
<table cellpadding="8">
</br>
  Mata Pelajaran Wajib (Kelompok B)
<tr>
  <td>Seni Budaya</td>
  <td><input type="text" name="sb"></td>
</tr>
<tr>
  <td>Prakarya</td>
  <td><input type="text" name="pr"></td>
</tr>
<tr>
  <td>Pendidikan Jasmani, Olahraga dan Kesehatan</td>
  <td><input type="text" name="pjok"></td>
</tr>
  </table>



  <table cellpadding="8">
  </br>
    Mata Pelajaran Wajib (Kelompok B)
  <tr>
    <td>Seni Budaya</td>
    <td><input type="text" name="sbk"></td>
  </tr>
  <tr>
    <td>Prakarya</td>
    <td><input type="text" name="pra"></td>
  </tr>
  <tr>
    <td>Pendidikan Jasmani, Olahraga dan Kesehatan</td>
    <td><input type="text" name="pjo"></td>
  </tr>
</table>


<table cellpadding="8">
</br>
Mata Pelajaran Pilihan (Kelompok C) / Peminatan Akademik<br>
A. Peminatan Matematika dan Sains
<tr>
  <td>Biologi</td>
  <td><input type="text" name="bio"></td>
</tr>
<tr>
  <td>Fisika</td>
  <td><input type="text" name="fis"></td>
</tr>
<tr>
  <td>Kimia</td>
  <td><input type="text" name="kim"></td>
</tr>
<tr>
  <td>Matematika Pemintan</td>
  <td><input type="text" name="mtkp"></td>
</tr>
</table>


<table cellpadding="8">
</br>
B. Peminatan Sosial
<tr>
  <td>Geografi</td>
  <td><input type="text" name="geo"></td>
</tr>
<tr>
  <td>Sejarah</td>
  <td><input type="text" name="sejp"></td>
</tr>
<tr>
  <td>Sosiologi dan Anthropologi</td>
  <td><input type="text" name="sos"></td>
</tr>
<tr>
  <td>Ekonomi</td>
  <td><input type="text" name="eko"></td>
</tr>
</table>

<table cellpadding="8">
</br>
C. Peminatan Bahasa
<tr>
  <td>Bahasa dan Sastra Indonesia</td>
  <td><input type="text" name="bsin"></td>
</tr>
<tr>
  <td>Bahasa dan Sastra Inggris</td>
  <td><input type="text" name="bsing"></td>
</tr>
<tr>
  <td>Bahasa dan Sastra Arab</td>
  <td><input type="text" name="bsas"></td>
</tr>
<tr>
  <td>Bahasa dan Sastra Mandarin</td>
  <td><input type="text" name="bsam"></td>
</tr>
<tr>
  <td>Bahasa dan Sastra Jerman</td>
  <td><input type="text" name="bsaj"></td>
</tr>
<tr>
  <td>Bahasa dan Sastra Perancis</td>
  <td><input type="text" name="bsps"></td>
</tr>
<tr>
  <td>Bahasa dan Sastra Jepang</td>
  <td><input type="text" name="bsjp"></td>
</tr>
</table>

<table cellpadding="8">
</br>
D. Muatan Lokal
<tr>
  <td>Bahasa Daerah</td>
  <td><input type="text" name="bd"></td>
</tr>
<br>
</table>


<hr>
  <input type="submit" value="Simpan">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</div>
</div>
<br/>
<br/>
					<?php include 'theme/biasa2.php';?>
