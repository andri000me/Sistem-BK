<?php
include '../konek.php';



// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:/login.php");
}
//$nis = $_GET['nisn'];
$nisn = $_SESSION['nisn'];

// menampilkan pesan selamat datang
///echo "Hai, selamat datang ". $_SESSION['nisn'];
///////////hahahaha////
//////////
$a3 = mysql_query("select fotoku from bk.bio where nisn='$nisn' and fotoku=''");
$a1 = mysql_query("select * from bk.bio where nisn='$nisn'");
$a2 = mysql_num_rows($a1);
?>
<?php
$title = "<title>Indeks</title>";
include_once '/theme/biasa.php';
?>
				<!---start bang---->
				<div class="content-wrapper">
				    <div class="container-fluid">
							<ol class="breadcrumb">
							        <li class="breadcrumb-item">
							          <a href="index.php">Dashboard</a>
							        </li>
							        <li class="breadcrumb-item active">Indeks</li>
							      </ol>
							      <div class="row">
							        <div class="col-12">
							          <h1>INFO LOGIN</h1>
							         <?php
											 $query_mysql = mysql_query("SELECT * FROM bk.login WHERE nisn = '$nisn'")or die(mysql_error());
											 	while($data = mysql_fetch_array($query_mysql)){
											 		echo "<br />";
											 		echo "Nomor induk siswa nasional (NISN)	: " .$data['nisn'];
											 		echo "<br />";
											 		echo "Nomor induk siswa	: ".$data['nis'];
											 		echo "<br />";
											 		echo "Nama lengkap	: " .$data['nama'];
											 		echo "<br />";
											 		echo "Kelas/Jurusan	: " .$data['kelas'];
											 		echo "<br />";
											 		echo "IP terakhir login	: ".$data['ip'];
											 		echo "<br />";
											 		echo "Jam terakhir login	: ".$data['jam']."WIB";
											 	}
											 echo "<br />";
											?>
							        </div>
							      </div>
							    </div>
									<?php include 'theme/biasa2.php';?>
