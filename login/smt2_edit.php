<?php
include '../konek.php';
session_start();
if($_SESSION['status'] !="login"){
	header("location:login.php");
}
$nisn = $_SESSION['nisn'];
$nilaiw = mysql_query("SELECT * FROM bk.smt2 WHERE nisn = '$nisn'")or die(mysql_error());?>

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
								<h1>Edit Nilai Semester 2</h1>
  <form method="post" action="proses/pro2.php" enctype="multipart/form-data">
		<?php $data = mysql_fetch_array($nilaiw);?>
		<br>
		  <table cellpadding="8">
		    Mata Pelajaran Wajib (Kelompok A)
		  <tr>
		    <td>Pendidikan Agama</td>
		    <td><input type="text" name="agama" value="<?php echo $data['agama'];?>"></td>
		  </tr>
		  <tr>
		    <td>Pendidikan Pancasila dan Kewarganegaraan</td>
		    <td><input type="text" name="pkn" value="<?php echo $data['pkn'];?>"></td>
		  </tr>
		  <tr>
		    <td>Matematika</td>
		    <td><input type="text" name="mtk" value="<?php echo $data['mtk'];?>"></td>
		  </tr>
		  <tr>
		    <td>Sejarah Indonesia</td>
		    <td><input type="text" name="sji" value="<?php echo $data['sji'];?>"></td>
		  </tr>
		  <tr>
		    <td>Bahasa Indonesia</td>
		    <td><input type="text" name="bin" value="<?php echo $data['bin'];?>"></td>
		  </tr>
		  <tr>
		    <td>Bahasa Inggris</td>
		    <td><input type="text" name="bing" value="<?php echo $data['bing'];?>"></td>
		  </tr>
		</table>
		<table cellpadding="8">
		</br>
		  Mata Pelajaran Wajib (Kelompok B)
		<tr>
		  <td>Seni Budaya</td>
		  <td><input type="text" name="sb" value="<?php echo $data['sb'];?>"></td>
		</tr>
		<tr>
		  <td>Prakarya</td>
		  <td><input type="text" name="pr" value="<?php echo $data['pr'];?>"></td>
		</tr>
		<tr>
		  <td>Pendidikan Jasmani, Olahraga dan Kesehatan</td>
		  <td><input type="text" name="pjok" value="<?php echo $data['pjok'];?>"></td>
		</tr>
		  </table>



		  <table cellpadding="8">
		  </br>
		    Mata Pelajaran Wajib (Kelompok B)
		  <tr>
		    <td>Seni Budaya</td>
		    <td><input type="text" name="sbk" value="<?php echo $data['sbk'];?>"></td>
		  </tr>
		  <tr>
		    <td>Prakarya</td>
		    <td><input type="text" name="pra" value="<?php echo $data['pra'];?>"></td>
		  </tr>
		  <tr>
		    <td>Pendidikan Jasmani, Olahraga dan Kesehatan</td>
		    <td><input type="text" name="pjo" value="<?php echo $data['pjo'];?>"></td>
		  </tr>
		</table>


		<table cellpadding="8">
		</br>
		Mata Pelajaran Pilihan (Kelompok C) / Peminatan Akademik<br>
		A. Peminatan Matematika dan Sains
		<tr>
		  <td>Biologi</td>
		  <td><input type="text" name="bio" value="<?php echo $data['bio'];?>"></td>
		</tr>
		<tr>
		  <td>Fisika</td>
		  <td><input type="text" name="fis" value="<?php echo $data['fis'];?>"></td>
		</tr>
		<tr>
		  <td>Kimia</td>
		  <td><input type="text" name="kim" value="<?php echo $data['kim'];?>"></td>
		</tr>
		<tr>
		  <td>Matematika Pemintan</td>
		  <td><input type="text" name="mtkp" value="<?php echo $data['mtkp'];?>"></td>
		</tr>
		</table>


		<table cellpadding="8">
		</br>
		B. Peminatan Sosial
		<tr>
		  <td>Geografi</td>
		  <td><input type="text" name="geo" value="<?php echo $data['geo'];?>"></td>
		</tr>
		<tr>
		  <td>Sejarah</td>
		  <td><input type="text" name="sejp" value="<?php echo $data['sejp'];?>"></td>
		</tr>
		<tr>
		  <td>Sosiologi dan Anthropologi</td>
		  <td><input type="text" name="sos" value="<?php echo $data['sos'];?>"></td>
		</tr>
		<tr>
		  <td>Ekonomi</td>
		  <td><input type="text" name="eko" value="<?php echo $data['eko'];?>"></td>
		</tr>
		</table>

		<table cellpadding="8">
		</br>
		C. Peminatan Bahasa
		<tr>
		  <td>Bahasa dan Sastra Indonesia</td>
		  <td><input type="text" name="bsin" value="<?php echo $data['bsin'];?>"></td>
		</tr>
		<tr>
		  <td>Bahasa dan Sastra Inggris</td>
		  <td><input type="text" name="bsing" value="<?php echo $data['bsing'];?>"></td>
		</tr>
		<tr>
		  <td>Bahasa dan Sastra Arab</td>
		  <td><input type="text" name="bsas" value="<?php echo $data['bsas'];?>"></td>
		</tr>
		<tr>
		  <td>Bahasa dan Sastra Mandarin</td>
		  <td><input type="text" name="bsam" value="<?php echo $data['bsam'];?>"></td>
		</tr>
		<tr>
		  <td>Bahasa dan Sastra Jerman</td>
		  <td><input type="text" name="bsaj" value="<?php echo $data['bsaj'];?>"></td>
		</tr>
		<tr>
		  <td>Bahasa dan Sastra Perancis</td>
		  <td><input type="text" name="bsps" value="<?php echo $data['bsps'];?>"></td>
		</tr>
		<tr>
		  <td>Bahasa dan Sastra Jepang</td>
		  <td><input type="text" name="bsjp" value="<?php echo $data['bsjp'];?>"></td>
		</tr>
		</table>

		<table cellpadding="8">
		</br>
		D. Muatan Lokal
		<tr>
		  <td>Bahasa Daerah</td>
		  <td><input type="text" name="bd" value="<?php echo $data['bd'];?>"></td>
		</tr>
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
