<?php
include '../konek.php';




// mengaktifkan session
session_start();
include 'theme/head.php';
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.php");
}
$nisn = $_GET['nisn']


?>
<div class="box">
	<div class="box-body">
<div class="table-container">
<table border="1" align="center" style="margin-top: 20px" width="700px">
  <?php

    $query=mysql_query("SELECT * FROM simpan
              JOIN fakultas ON simpan.fakultas = fakultas.id_fakultas
              JOIN jurusan ON simpan.jurusan = jurusan.id_jurusan WHERE nisn='$nisn'") or die (mysql_error());
  ?>
  <tr align="center">
    <td width="50px">Prioritas</td>
    <td width="300px">Fakultas</td>
    <td width="200px">Jurusan</td>
  </tr>

  <?php
    while ($tampil=mysql_fetch_array($query))
    {
  ?>

  <tr>
    <td align="center"><?php echo $tampil['pilihan']; ?></td>

    <td><?php echo $tampil['nama_fakultas']; ?></td>
    <td><?php echo $tampil['nama_jurusan']; ?></td>
  </tr>

  <?php
    }
  ?>
</table>
</div>
</div>
<?php include 'theme/foot.php';?>
