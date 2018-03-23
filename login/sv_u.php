<?php
	include '../konek.php';
	$id=$_POST['prioritas'];
	$nisn=$_POST['nisn'];
	$fakultas=$_POST['fakultas'];
	$jurusan=$_POST['jurusan'];
	$simpan2 = mysql_query("SELECT * FROM simpan WHERE nisn='$nisn' pilihan='$id'");
	$simpan = mysql_query("INSERT INTO simpan (pilihan, nisn, fakultas, jurusan) VALUES ('$id','$nisn','$fakultas','$jurusan')");;
	if ($simpan2 > 0) {
		echo "Maaf anda telah memasukkan data untuk pilihan $id";
	}
	if ($simpan){
		echo "<script>alert('Data BERHASIL di Simpan!');window.location='univ.php';</script>";
	}else{
		echo "<script>alert('Data GAGAL di Simpan!');window.location='univ.php';</script>";
	}
?>
