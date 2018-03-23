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
?>
<?php
$title = "<title>Indeks</title>";
include_once 'theme/biasa.php';
?>
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
								<hr>
								<form method="post" action="pro_upass.php" enctype="multipart/form-data">
							    <table cellpadding="8">
								<tr>
						      <td><i class="fa fa-key"> Password baru   :<i></td>
						      <td><input type="password" name="pass"></td>
						    </tr>
								<tr>
						      <td><i class="fa fa-key"> Ulangi Password baru   :</i></td>
						      <td><input type="password" name="kpass" ></td>
						    </tr>
							</form>
						</table>
							<hr>
							<input type="submit" value="Simpan"></input>
							<a href="index.php"><input type="button" value="Batal"></a>
							</div>
						</div>
					</div>
<?php include 'theme/biasa2.php';?>
