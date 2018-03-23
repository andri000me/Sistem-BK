<?php
include "lib/qr/qrlib.php";
include '../konek.php';
$title = "<title>Lihat Biodata</title>";
session_start();
if($_SESSION['status'] !="login"){
	header("location:/login.php");
}
$nisn = $_SESSION['nisn'];
include_once '/theme/biasa.php';
$bio = mysql_query("SELECT * FROM bk.bio WHERE nisn = '$nisn'")or die(mysql_error());
?>
<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php?nisn=<?php echo "$nisn";?>">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Lihat Nilai</li>
            </ol>
            <h1>Lihat Biodata</h1>
            <?php
            QRcode::png("$nisn", "qr/$nisn.png", "L", 4, 3);
               while($data = mysql_fetch_array($bio)){
                 echo "<br/>";
            echo "<ya class='foto'><img src='images/tmp/".$data['fotoku']."' width='200' height='300'/></ya>";
            echo "<qr><img src='qr/$nisn.png' width='300' height='300'/></qr>";
            echo "<br/>";
              echo "<br/>";
                echo "<br/>";
                echo "<br/>";
            echo "<strong>Nama lengkap	: </strong>" .$data['namel'];
            echo "<br/>";
            echo "<strong>Nomor Induk Siswa Nasional (NISN)	: </strong>" .$data['nisn'];
            echo "<br/>";
						echo "<strong>Nomor Induk Sekolah (NIS)	: </strong>" .$data['nis'];
						echo "<br/>";
            echo "<strong>Tempat tanggal lahir	: </strong>" .$data['tl'];echo " " .$data['ttl'];
            echo "<br/>";
            echo "<strong>Agama	: </strong>" .$data['agama'];
            echo "<br/>";
            echo "<strong>Alamat	: </strong>" .$data['alamat'];
            echo "<br/>";
            echo "<strong>Nomor pribadi	: </strong>" .$data['nope'];
            echo "<br/>";
            echo "<strong>Nomor telepon 	: </strong>" .$data['nopel'];
            echo "<br/>";
						echo "<strong>Email 	: </strong>" .$data['email'];
            echo "<br/>";
						echo "<br/>";
          }
            ?>
            <a href="images/tmp/fotoku_<?php echo"$nisn.jpg";?>" download>Download Gambar (4x6)</a>
            <hr>
            <?php
            include 'theme/biasa2.php'; ?>
