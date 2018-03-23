<?php
include '../konek.php';




// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.php");
}
include 'theme/head.php';?>
<div class="box">
  <h3 class="box-title">Data Siswa</h3>
	<div class="box-body">
<form name="myForm" id="myForm" onSubmit="return validateForm()" action="try.php" method="post" enctype="multipart/form-data">
    <input type="file" id="val" name="val" />
		<br/>
		<hr>
    <input type="submit" name="submit" value="Import" /><br/>
    <label><input type="checkbox" name="drop" value="1" /> <u><strong>Hapus seluruh data (Untuk pengisian data yang baru)</strong></u> </label>
		<br/>
		<a href="___template/template.xls" download>Download template login</a>
</form>

<script type="text/javascript">
//    validasi form (hanya file .xls yang diijinkan)
    function validateForm()
    {
        function hasExtension(inputID, exts) {
            var fileName = document.getElementById(inputID).value;
            return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
        }

        if(!hasExtension('val', ['.xls'])){
            alert("Hanya file XLS (Excel 2003) yang diijinkan.");
            return false;
        }
    }
</script>
</div>
<?php include 'theme/foot.php'; ?>
