<?php
include '../konek.php';
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.php");
}
$mdayy = $_GET['b2507468f95156358fa490fd543ad2f0'];
if ($mdayy != 'FABA1E00AF8E6C89837F711EEB6F67C0D1BDB573C63ABCDCDB2FBF7AB5AD22955') {
  echo "Maaf, Anda tidak mempunyai akses untuk mendownload file";
	exit();
}
$username = $_SESSION['username'];

include 'theme/head.php';
?>

<!---hahahhahahahhahaha--->
<div class="box">
  <h3 class="box-title">Data Siswa</h3>
	<div class="box-body">
     <a href="proses5.php?key=0E704A6B24F07B4F10A31C9B7DF1BBC55747AE40B1ECBE71269EE408A4908D5C">Export ke Excel</a><br><br>
     <table border="1" cellpadding="5">
      <tr>
        <th>No</th>
        <th>NISN</th>
        <th>Nama Lengkap</th>
        <th>Agama</th>
        <th>PKN</th>
        <th>MTK</th>
        <th>SJI</th>
        <th>BIN</th>
        <th>BING</th>
        <th>SB</th>
        <th>PR</th>
        <th>PJOK</th>
        <th>SBK</th>
        <th>PRA</th>
        <th>PJOK</th>
        <th>BIO</th>
        <th>FIS</th>
        <th>KIM</th>
        <th>MTKP</th>
        <th>GEO</th>
        <th>SEJP</th>
        <th>SOS</th>
        <th>EKO</th>
        <th>BSIN</th>
        <th>BSING</th>
        <th>BSAS</th>
        <th>BSAM</th>
        <th>BSAJ</th>
        <th>BSPS</th>
        <th>BSJP</th>
        <th>Mulok</th>
      </tr>
<?php $i = 1;
$s1 = mysql_query("SELECT * FROM smt5");
if ($s1 === FALSE) {
    die(mysql_error());
}
while($data = mysql_fetch_array($s1)){
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$data['nisn']."</td>";
        echo "<td>".$data['namel']."</td>";
        echo "<td>".$data['agama']."</td>";
        echo "<td>".$data['pkn']."</td>";
        echo "<td>".$data['mtk']."</td>";
        echo "<td>".$data['sji']."</td>";
        echo "<td>".$data['bin']."</td>";
        echo "<td>".$data['bing']."</td>";
        echo "<td>".$data['sb']."</td>";
        echo "<td>".$data['pr']."</td>";
        echo "<td>".$data['pjok']."</td>";
        echo "<td>".$data['sbk']."</td>";
        echo "<td>".$data['pra']."</td>";
        echo "<td>".$data['pjo']."</td>";
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
$i++;}
        ?>
      </table>
    </div>

      <?php include 'theme/foot.php';
