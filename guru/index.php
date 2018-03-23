<?php
include '../konek.php';




// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.php");
}
$username = $_SESSION['username'];
$ayy = mysql_query("select * from bk.login_guru where username='$username'");

include 'theme/head.php';
?>
<div class="box">
	<div class="box-body">
		<?php
		 while($data = mysql_fetch_array($ayy)){
			 echo "<h2><strong>Selamat Datang,  ".$data['namel']."</strong></h2><br>";
		 }
			 ?>
	</div>
	<!-- /.box-body -->
	<!-- /.box-footer-->
<!-- /.box -->

<?php include 'theme/foot.php';?>
