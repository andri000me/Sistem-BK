<?php
include 'konek.php';
require "plugins/excel_reader.php";
include_once 'passhash.php';

//jika tombol import ditekan
if(isset($_POST['submit'])){

    $target = basename($_FILES['val']['name']) ;
    move_uploaded_file($_FILES['val']['tmp_name'], $target);

// tambahkan baris berikut untuk mencegah error is not readable
    chmod($_FILES['val']['name'],0777);

    $data = new Spreadsheet_Excel_Reader($_FILES['val']['name'],false);

//    menghitung jumlah baris file xls
    $baris = $data->rowcount($sheet_index=0);

//    jika kosongkan data dicentang jalankan kode berikut
    $drop = isset( $_POST["drop"] ) ? $_POST["drop"] : 0 ;
    if($drop == 1){
//             kosongkan tabel pegawai
             $truncate ="TRUNCATE TABLE login";
             mysql_query($truncate);
    };

//    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
    for ($i=3; $i<=$baris; $i++)
    {
//       membaca data (kolom ke-1 sd terakhir)
      $nisn           = $data->val($i, 1);
      $nama           = $data->val($i, 3);
      $kelas          = $data->val($i, 4);
      $nis            = $data->val($i, 2);

/////password+++++++++++++.//

///\/\/\/\/\/\/\\/\//\/\/\/\/\/\
$password2       = randomString();
$hasher         = md5($password2);

      $cekdata="select * from login where nisn='$nisn'";
      $ada=mysql_query($cekdata) or die(mysql_error());
      if(mysql_num_rows($ada)>0)
      {
        echo "<h3>NISN .'$nisn' telah Terdaftar! Silahkan diulangi / Hapus data yang sama di dashboard guru.</h3>";
      }
      else
      {
        $query = "INSERT into bk.login (nisn,nama,kelas,nis,password,password2)values('$nisn','$nama','$kelas', '$nis', '$hasher', '$password2')";
        $hasil = mysql_query($query) or die (mysql_error());
    if(!$hasil>0){
//          jika import gagal
          die(mysql_error());
      }else{
//          jika impor berhasil
          echo "Data berhasil diupload";
          header('location:login/login.php');
    }

//    hapus file xls yang udah dibaca
    unlink($_FILES['val']['name']);
  }
  $query2 = "INSERT into bk.bio (nisn)VALUES('$nisn')";
  mysql_query($query2) or die (mysql_error());
}
}


?>
