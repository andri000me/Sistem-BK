<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bk";


$conn = mysql_connect("$dbhost","$dbuser","$dbpass");

if (!$conn) die ('Gagal Melakukan Koneksi');

mysql_select_db($dbname,$conn) or die ('Database Tidak Diketemukan di Server');


    $sel_fakul="select * from jurusan where id_fakultas='".$_POST["fakul"]."'";
    $q=mysql_query($sel_fakul);
    while($data_fakul=mysql_fetch_array($q)){

    ?>
        <option value="<?php echo $data_fakul["id_jurusan"] ?>"><?php echo $data_fakul["nama_jurusan"] ?></option><br>

    <?php
    }
    ?>
