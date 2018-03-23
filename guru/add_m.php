<?php
include '../konek.php';




// mengaktifkan session
session_start();
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.php");
}
include 'theme/head.php'; ?>
<div class="box">
  <h3 class="box-title">Data Siswa</h3>
	<div class="box-body">
<form method="post" action="u_m.php" enctype="multipart/form-data">
<table cellspacing="10">
<tr>
	<td>NISN</td>
	<td><input type="text" name="nisn"></td>
</tr>
<tr>
	<td>NIS</td>
	<td><input type="text" name="nis"></td>
</tr>
<tr>
	<td>Nama</td>
	<td><input type="text" name="nama"></td>
</tr>
<tr>
	<td>Kelas (Format: XII A 4)</td>
	<td><input type="text" name="kelas"></td>
</tr>
<hr>
<input type="submit" value="Simpan">
  <a href="index.php"><input type="button" value="Batal"></a>
</table>
</form>
</div>

  <?php include 'theme/foot.php';
