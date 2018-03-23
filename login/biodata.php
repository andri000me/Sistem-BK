<html>
<?php
include '../konek.php';
session_start();
if($_SESSION['status'] !="login"){
	header("location:/login.php");
}
$nisn = $_SESSION['nisn'];
$bio = mysql_query("SELECT * FROM bk.bio WHERE nisn = '$nisn'")or die(mysql_error());
$log = mysql_query("SELECT * FROM bk.login WHERE nisn = '$nisn'")or die(mysql_error());
?>
<?php
$title = "<title>Tambah Biodata</title>";

include_once '/theme/biasa.php';
?>
<div class="content-wrapper">
		<div class="container-fluid">
			<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="index.php">Dashboard</a>
							</li>
							<li class="breadcrumb-item active">Biodata</li>
						</ol>
						<div class="row">
							<div class="col-12">
  <h1>Tambah Data Siswa</h1>
  <form method="post" action="bio_pro.php" enctype="multipart/form-data">
    <table cellpadding="8">
      BIODATA
      <br />
      <hr>
			<?php $data = mysql_fetch_array($bio); $data2 = mysql_fetch_array($log);?>
    <tr>
      <td>Nama Lengkap  :</td>
      <td><input type="text" name="namel" value="<?php echo $data['namel'];?>"></td>
    </tr>
    <tr>
      <td>Nomor induk siswa nasional (NISN)  :</td>
      <td><input type="text" disabled value="<?php echo "$nisn";?>"</td>
    </tr>
		<tr>
			<tbody style="display:none">
			<td><input type="text" readonly="readonly" name="kelas" value="<?php echo $data2['kelas'];?>"></td>
		</tbody>
		</tr>
		<tr>
		<td>Kelas</td>
		<td><input type="text" disabled name="kelas" value="<?php echo $data2['kelas'];?>"></td>
	</tr>
    <tr>
      <td>Nomor induk kependudukan (NIK)  :</td>
      <td><input type="number" name="nik" value="<?php echo $data['nik'];?>"></td>
    </tr>
    <tr>
      <td>Tempat Lahir  :</td>
      <td><input type="text" name="tl" value="<?php echo $data['tl'];?>"></td>
    </tr>
		<tr>
      <td>Tanggal Lahir  :</td>
      <td><input type="text" name="ttl" id="tanggal" value="<?php echo $data['ttl'];?>"></td>
    </tr>
    <tr>
      <td> Agama    : </td>
      <td><select name="agama" data-text=""/>
        <option value=""</option>
        <option value="Islam" <?php if($data['agama'] == 'Islam'){ echo 'selected'; } ?>>Islam</option>
        <option value="Kristen" <?php if($data['agama'] == 'Kristen'){ echo 'selected'; } ?>>Kristen</option>
        <option value="Katolik" <?php if($data['agama'] == 'Katolik'){ echo 'selected'; } ?>>Katolik</option>
        <option value="Kong Hu Cu" <?php if($data['agama'] == 'Kong Hu Cu'){ echo 'selected'; } ?>>Kong Hucu</option>
        <option value="Hindu" <?php if($data['agama'] == 'Hindu'){ echo 'selected'; } ?>>Hindu</option>
				<option value="Buddha" <?php if($data['agama'] == 'Buddha'){ echo 'selected'; } ?>>Buddha</option>
        <option value="Lainnya" <?php if($data['agama'] == 'Lainnya'){ echo 'selected'; } ?>>Lainnya</option>
      </td></tr>
      <tr>
        <td>Alamat Lengkap  :</td>
        <td><textarea cols="25" row="5" type="text" name="alamat"/><?php echo $data['alamat'];?></textarea>
      </td>
      <tr>
        <td>Nomor Telepon  :</td>
        <td><input type="text" name="nopel" value="<?php echo $data['nopel'];?>"/></td>
      </tr>
      <tr>
        <td>Nomor Pribadi  :</td>
        <td><input type="text" name="nope" value="<?php echo $data['nope'];?>"/></td>
      </tr>
      <tr>
        <td>Email  :</td>
        <td><input type="text" name="email" value="<?php echo $data['email'];?>" /></td>
      </tr>
    </table>

      <hr>
        <input type="submit" value="Simpan"></input>
        <a href="index.php"><input type="button" value="Batal"></a>
			<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	      <script src="https://cdn.jsdelivr.net/npm/zebra_datepicker/dist/zebra_datepicker.min.js"></script>
	      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/zebra_datepicker/dist/css/default/zebra_datepicker.min.css" type="text/css">
				<script>
    $(document).ready(function(){
        $('#tanggal').Zebra_DatePicker({
            format: 'd-F-Y',
            months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
    });
</script>

  </form>
</div>
<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © <a href="https://api.whatsapp.com/send?phone=082228191006">Sinyo</a> (Sistem INput Yang Organizable) <?php $date = date('Y'); echo "$date";?>
            <?php
            $btime = microtime(true);
            $tend = $btime;
          // Store end time in a variable

          // Calculate Difference
          $time = ($tend - $tstart );
          $time = number_format((float)$time, 3, '.', '');
          // Output the result
          printf (" .Waktu menampilkan laman %f detik.", $time);
  ?>
</small>
        </div>
      </div>
    </footer>
       <script src="theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
       <!-- Core plugin JavaScript-->
       <script src="theme/vendor/jquery-easing/jquery.easing.min.js"></script>
       <!-- Custom scripts for all pages-->
       <script src="theme/js/sb-admin.min.js"></script>


     </div>
   </body>

   </html>
