<?php
include '../konek.php';




// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.php");
}
$username = $_SESSION['username'];
$q = mysql_query("SELECT * FROM bk.bio");
include 'theme/head.php'; ?>

<!---hahahhahahahhahaha--->
<div class="box">
  <h3 class="box-title">Data Siswa</h3>
	<div class="box-body">
		<form action="v_murid.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
<?php
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
    <table border="1" width="100%">
  <tr>
    <th>Foto</th>
		<th>NISN</th>
    <th>Kelas</th>
		<th>Nama Lengkap</th>
    <th colspan="3">Aksi</th>
  </tr>
  <?php


	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("select * from bk.bio where namel like '%".$cari."%' OR kelas like '%".$cari."%' OR nisn like '%".$cari."%' ");
	}else{
		$data = mysql_query("select * from bk.bio");

	}

  while($y = mysql_fetch_array($data)){
    echo "<tr>";
    echo "<td><img src='../login/images/tmp/".$y['fotoku']."' width='100' height='150'></td>";
		echo "<td>".$y['nisn']."</td>";
		echo "<td>".$y['kelas']."</td>";
    echo "<td>".$y['namel']."</td>";
    echo "<td><a href='v_n.php?lihat=".$y['nisn']."'>Lihat Nilai</a></td>";
		echo "<td><a href='l_u.php?nisn=".$y['nisn']."'>Lihat Pilihan Univ.</a></td>";
    echo "<td><a href='del.php?nisn=".$y['nisn']."'>Hapus User & Nilai</a></td>";
    echo "</tr>";}
     ?>
   </table>
</div>

  <?php include 'theme/foot.php';
