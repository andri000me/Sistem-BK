<?php
include '../konek.php';
session_start();
$nisn = $_SESSION['nisn'];
$test = mysql_query("SELECT * FROM simpan WHERE nisn='$nisn'");
while ($asam = mysql_fetch_array($test));

// mengaktifkan session


// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:/login.php");
}
//$nis = $_GET['nisn'];
$nisn = $_SESSION['nisn'];
$title = "<title>UNIV</title>";
include_once '/theme/biasa.php';
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
								<form action="sv_u.php" method="post">
	<table border="0" align="center" style="margin-top: 50px" width="250px">
		<tr>
			<table>
			<tr>
				<tbody style="display:none">
				<td><input type="text" readonly="readonly" name="nisn" value="<?php echo $_SESSION['nisn'];?>"></td>
			</tbody>
			</tr>
			</table>
					<td width="100px">Prioritas Pilihan</td>
					<td>:</td>
					<td><select name="prioritas">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</tr>


		<tr>
					<td width="100px">Fakultas</td>
					<td>:</td>
					<td><select class="form-control" name="fakultas" id="fakultas">
        	    			<option value="">--- Pilih Fakultas ---</option>

	                		<!-- looping data Fakultas -->
    	            		<?php

	                			$sel_fakul="select * from fakultas";
    	            			$q=mysql_query($sel_fakul);
        	        			while($data_fakul=mysql_fetch_array($q)){
            	    		?>

	            	    	<option value="<?php echo $data_fakul["id_fakultas"] ?>"><?php echo $data_fakul["nama_fakultas"] ?></option>

	                		<?php
    	              			}
        	        		?>
            			</select>
            		</td>
				</tr>
				<tr>
					<td width="100px">Jurusan</td>
					<td>:</td>
					<td><select class="form-control" name="jurusan" id="jurusan">
            				<option value="">--- Pilih Jurusan ---</option>
            				<!-- hasil data dari jurusan.php akan ditampilkan disini -->
            			</select>
            		</td>
				</tr>
				<tr></tr>
				<tr>
					<td></td>
					<td></td>
					<td colspan="2"><input type="submit" name="simpan" value="SIMPAN"></td>
				</tr>
			</table>
		</form>

		<hr>
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

		<!-- JavaScript -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

		<script>
		    $("#fakultas").change(function(){
        		// variabel dari nilai combo box Fakultas
       			var id_fakultas = $("#fakultas").val();
        		// mengirim dan mengambil data
        		$.ajax({
            		type: "POST",
            		dataType: "html",
            		url: "cari_class.php",
            		data: "fakul="+id_fakultas,
            		success: function(msg){
                		// jika tidak ada data
                		if(msg == ''){
                		    alert('Tidak ada data Jurusan');
                		}
                		// jika dapat mengambil data,, tampilkan di combo box jurusan
                		else{
                    		$("#jurusan").html(msg);
                		}
            		}
        		});
    		});
		</script>
	</div>
</div>
	</div>
	<br/>
	<br/>
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
