<?php
include '../konek.php';
session_start();



// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.php");
}


?>
<?php
$lihat = $_GET['lihat'];
$b = mysql_query("SELECT * FROM bk.bio WHERE nisn = '$lihat'");
$b2 = mysql_query("SELECT * FROM bk.bio WHERE nisn = '$lihat'");
$b3 = mysql_query("SELECT * FROM bk.bio WHERE nisn = '$lihat'");
$b4 = mysql_query("SELECT * FROM bk.bio WHERE nisn = '$lihat'");
$b5 = mysql_query("SELECT * FROM bk.bio WHERE nisn = '$lihat'");
$sa1 = mysql_query("SELECT * FROM bk.smt1 WHERE nisn = '$lihat'");
$sa2 = mysql_query("SELECT * FROM bk.smt2 WHERE nisn = '$lihat'");
$sa3 = mysql_query("SELECT * FROM bk.smt3 WHERE nisn = '$lihat'");
$sa4 = mysql_query("SELECT * FROM bk.smt4 WHERE nisn = '$lihat'");
$sa5 = mysql_query("SELECT * FROM bk.smt5 WHERE nisn = '$lihat'");
$q1 = mysql_query("SELECT * FROM bk.smt1 WHERE nisn = '$lihat'");
$q2 = mysql_query("SELECT * FROM bk.smt2 WHERE nisn = '$lihat'");
$q3 = mysql_query("SELECT * FROM bk.smt3 WHERE nisn = '$lihat'");
$q4 = mysql_query("SELECT * FROM bk.smt4 WHERE nisn = '$lihat'");
$q5 = mysql_query("SELECT * FROM bk.smt5 WHERE nisn = '$lihat'");
include 'theme/head.php';
?>
<div class="box">
	<div class="box-body">
    <script type="text/javascript">
$(function () {
    $('#view').highcharts({
        title: {
            text: 'Nilai Semester 1',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: ['agama', 'pkn', 'mtk', 'sji', 'bin', 'bing', 'sb', 'pr', 'pjok', 'sbk', 'pra', 'pjo', 'bio', 'fis', 'kim', 'mtkp', 'geo', 'sejp', 'sos', 'eko', 'bsin', 'bsing', 'bsas', 'bsam', 'bsaj', 'bsps', 'bsjp', 'bd']
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#25D366'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Nilai ',
            data: [<?php while($t=mysql_fetch_array($sa1)){
			echo $t["agama"].",";
			echo $t["pkn"].",";
			echo $t["mtk"].",";
			echo $t["sji"].",";
			echo $t["bin"].",";
			echo $t["bing"].",";
			echo $t["sb"].",";
			echo $t["pr"].",";
			echo $t["pjok"].",";
			echo $t["sbk"].",";
			echo $t["pra"].",";
			echo $t["pjo"].",";
			echo $t["bio"].",";
			echo $t["fis"].",";
			echo $t["kim"].",";
			echo $t["mtkp"].",";
			echo $t["geo"].",";
			echo $t["sejp"].",";
			echo $t["sos"].",";
			echo $t["eko"].",";
			echo $t["bsin"].",";
			echo $t["bsing"].",";
			echo $t["bsas"].",";
			echo $t["bsam"].",";
			echo $t["bsaj"].",";
			echo $t["bsps"].",";
			echo $t["bsjp"].",";
			echo $t["bd"].",";
			}?>]
        }]
    });
});
</script>

<div id="view" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<br/>
<hr>
<h3><center>Nilai Semester 1 Untuk <strong><?php while($el = mysql_fetch_array($b)){echo $el['namel'];}?></strong></center></h3>
<div class="table-container">
<table border="1">
<tr>
   <th>Agama</th>
   <th>PKN</th>
   <th>MTK</th>
   <th>Sjr.Indo</th>
   <th>B.Indo</th>
   <th>B.Ing</th>
   <th>SBK</th>
   <th>Prakarya</th>
   <th>PJOK</th>
   <th>Bio.</th>
   <th>Fis.</th>
   <th>Kim.</th>
   <th>MTK(p)</th>
   <th>Geo.</th>
   <th>SEJ(p/r)</th>
   <th>Sos.</th>
   <th>Eko.</th>
   <th>B/S.Indo</th>
   <th>B/S.Ing</th>
   <th>B/S Arab</th>
   <th>B/S Mand.</th>
   <th>B/S Jerm</th>
   <th>B/S Pran.</th>
   <th>B/S Jepn.</th>
   <th>Mulok</th>

</tr>
<?php
   while($data = mysql_fetch_array($q1)){
     echo "<tr>";
     echo "<td>".$data['agama']."</td>";
     echo "<td>".$data['pkn']."</td>";
     echo "<td>".$data['mtk']."</td>";
     echo "<td>".$data['sji']."</td>";
     echo "<td>".$data['bin']."</td>";
     echo "<td>".$data['bing']."</td>";
     echo "<td>".$data['sbk']."</td>";
     echo "<td>".$data['pr']."</td>";
     echo "<td>".$data['pjok']."</td>";
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
     echo "</tr>";
}
?>
</table>
<hr>
<hr>
<br/>
<br/>
<script type="text/javascript">
$(function () {
$('#view2').highcharts({
		title: {
				text: 'Nilai Semester 2',
				x: -20 //center
		},
		subtitle: {
				text: '',
				x: -20
		},
		xAxis: {
				categories: ['agama', 'pkn', 'mtk', 'sji', 'bin', 'bing', 'sb', 'pr', 'pjok', 'sbk', 'pra', 'pjo', 'bio', 'fis', 'kim', 'mtkp', 'geo', 'sejp', 'sos', 'eko', 'bsin', 'bsing', 'bsas', 'bsam', 'bsaj', 'bsps', 'bsjp', 'bd']
		},
		yAxis: {
				title: {
						text: 'Jumlah'
				},
				plotLines: [{
						value: 0,
						width: 1,
						color: '#25D366'
				}]
		},
		tooltip: {
				valueSuffix: ''
		},
		legend: {
				layout: 'vertical',
				align: 'right',
				verticalAlign: 'middle',
				borderWidth: 0
		},
		series: [{
				name: 'Nilai ',
				data: [<?php while($t=mysql_fetch_array($sa2)){
	echo $t["agama"].",";
	echo $t["pkn"].",";
	echo $t["mtk"].",";
	echo $t["sji"].",";
	echo $t["bin"].",";
	echo $t["bing"].",";
	echo $t["sb"].",";
	echo $t["pr"].",";
	echo $t["pjok"].",";
	echo $t["sbk"].",";
	echo $t["pra"].",";
	echo $t["pjo"].",";
	echo $t["bio"].",";
	echo $t["fis"].",";
	echo $t["kim"].",";
	echo $t["mtkp"].",";
	echo $t["geo"].",";
	echo $t["sejp"].",";
	echo $t["sos"].",";
	echo $t["eko"].",";
	echo $t["bsin"].",";
	echo $t["bsing"].",";
	echo $t["bsas"].",";
	echo $t["bsam"].",";
	echo $t["bsaj"].",";
	echo $t["bsps"].",";
	echo $t["bsjp"].",";
	echo $t["bd"].",";
	}?>]
		}]
});
});
</script>

<div id="view2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<br/>
<hr>
<h3><center>Nilai Semester 2 Untuk <strong><?php while($el = mysql_fetch_array($b2)){echo $el['namel'];}?></strong></center></h3>
<div class="table-container">
<table border="1">
<tr>
<th>Agama</th>
<th>PKN</th>
<th>MTK</th>
<th>Sjr.Indo</th>
<th>B.Indo</th>
<th>B.Ing</th>
<th>SBK</th>
<th>Prakarya</th>
<th>PJOK</th>
<th>Bio.</th>
<th>Fis.</th>
<th>Kim.</th>
<th>MTK(p)</th>
<th>Geo.</th>
<th>SEJ(p/r)</th>
<th>Sos.</th>
<th>Eko.</th>
<th>B/S.Indo</th>
<th>B/S.Ing</th>
<th>B/S Arab</th>
<th>B/S Mand.</th>
<th>B/S Jerm</th>
<th>B/S Pran.</th>
<th>B/S Jepn.</th>
<th>Mulok</th>

</tr>
<?php
while($data = mysql_fetch_array($q2)){
 echo "<tr>";
 echo "<td>".$data['agama']."</td>";
 echo "<td>".$data['pkn']."</td>";
 echo "<td>".$data['mtk']."</td>";
 echo "<td>".$data['sji']."</td>";
 echo "<td>".$data['bin']."</td>";
 echo "<td>".$data['bing']."</td>";
 echo "<td>".$data['sbk']."</td>";
 echo "<td>".$data['pr']."</td>";
 echo "<td>".$data['pjok']."</td>";
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
 echo "</tr>";
}
?>


</table>
<hr>
<hr>
<br/>
<br/>
<script type="text/javascript">
$(function () {
$('#view3').highcharts({
		title: {
				text: 'Nilai Semester 3',
				x: -20 //center
		},
		subtitle: {
				text: '',
				x: -20
		},
		xAxis: {
				categories: ['agama', 'pkn', 'mtk', 'sji', 'bin', 'bing', 'sb', 'pr', 'pjok', 'sbk', 'pra', 'pjo', 'bio', 'fis', 'kim', 'mtkp', 'geo', 'sejp', 'sos', 'eko', 'bsin', 'bsing', 'bsas', 'bsam', 'bsaj', 'bsps', 'bsjp', 'bd']
		},
		yAxis: {
				title: {
						text: 'Jumlah'
				},
				plotLines: [{
						value: 0,
						width: 1,
						color: '#25D366'
				}]
		},
		tooltip: {
				valueSuffix: ''
		},
		legend: {
				layout: 'vertical',
				align: 'right',
				verticalAlign: 'middle',
				borderWidth: 0
		},
		series: [{
				name: 'Nilai ',
				data: [<?php while($t=mysql_fetch_array($sa3)){
	echo $t["agama"].",";
	echo $t["pkn"].",";
	echo $t["mtk"].",";
	echo $t["sji"].",";
	echo $t["bin"].",";
	echo $t["bing"].",";
	echo $t["sb"].",";
	echo $t["pr"].",";
	echo $t["pjok"].",";
	echo $t["sbk"].",";
	echo $t["pra"].",";
	echo $t["pjo"].",";
	echo $t["bio"].",";
	echo $t["fis"].",";
	echo $t["kim"].",";
	echo $t["mtkp"].",";
	echo $t["geo"].",";
	echo $t["sejp"].",";
	echo $t["sos"].",";
	echo $t["eko"].",";
	echo $t["bsin"].",";
	echo $t["bsing"].",";
	echo $t["bsas"].",";
	echo $t["bsam"].",";
	echo $t["bsaj"].",";
	echo $t["bsps"].",";
	echo $t["bsjp"].",";
	echo $t["bd"].",";
	}?>]
		}]
});
});
</script>

<div id="view3" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<br/>
<hr>
<h3><center>Nilai Semester 3 Untuk <strong><?php while($el = mysql_fetch_array($b3)){echo $el['namel'];}?></strong></center></h3>
<div class="table-container">
<table border="1">
<tr>
<th>Agama</th>
<th>PKN</th>
<th>MTK</th>
<th>Sjr.Indo</th>
<th>B.Indo</th>
<th>B.Ing</th>
<th>SBK</th>
<th>Prakarya</th>
<th>PJOK</th>
<th>Bio.</th>
<th>Fis.</th>
<th>Kim.</th>
<th>MTK(p)</th>
<th>Geo.</th>
<th>SEJ(p/r)</th>
<th>Sos.</th>
<th>Eko.</th>
<th>B/S.Indo</th>
<th>B/S.Ing</th>
<th>B/S Arab</th>
<th>B/S Mand.</th>
<th>B/S Jerm</th>
<th>B/S Pran.</th>
<th>B/S Jepn.</th>
<th>Mulok</th>

</tr>
<?php
while($data = mysql_fetch_array($q3)){
 echo "<tr>";
 echo "<td>".$data['agama']."</td>";
 echo "<td>".$data['pkn']."</td>";
 echo "<td>".$data['mtk']."</td>";
 echo "<td>".$data['sji']."</td>";
 echo "<td>".$data['bin']."</td>";
 echo "<td>".$data['bing']."</td>";
 echo "<td>".$data['sbk']."</td>";
 echo "<td>".$data['pr']."</td>";
 echo "<td>".$data['pjok']."</td>";
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
 echo "</tr>";
}
?>


</table>
<script type="text/javascript">
$(function () {
$('#view4').highcharts({
		title: {
				text: 'Nilai Semester 4',
				x: -20 //center
		},
		subtitle: {
				text: '',
				x: -20
		},
		xAxis: {
				categories: ['agama', 'pkn', 'mtk', 'sji', 'bin', 'bing', 'sb', 'pr', 'pjok', 'sbk', 'pra', 'pjo', 'bio', 'fis', 'kim', 'mtkp', 'geo', 'sejp', 'sos', 'eko', 'bsin', 'bsing', 'bsas', 'bsam', 'bsaj', 'bsps', 'bsjp', 'bd']
		},
		yAxis: {
				title: {
						text: 'Jumlah'
				},
				plotLines: [{
						value: 0,
						width: 1,
						color: '#25D366'
				}]
		},
		tooltip: {
				valueSuffix: ''
		},
		legend: {
				layout: 'vertical',
				align: 'right',
				verticalAlign: 'middle',
				borderWidth: 0
		},
		series: [{
				name: 'Nilai ',
				data: [<?php while($t=mysql_fetch_array($sa5)){
	echo $t["agama"].",";
	echo $t["pkn"].",";
	echo $t["mtk"].",";
	echo $t["sji"].",";
	echo $t["bin"].",";
	echo $t["bing"].",";
	echo $t["sb"].",";
	echo $t["pr"].",";
	echo $t["pjok"].",";
	echo $t["sbk"].",";
	echo $t["pra"].",";
	echo $t["pjo"].",";
	echo $t["bio"].",";
	echo $t["fis"].",";
	echo $t["kim"].",";
	echo $t["mtkp"].",";
	echo $t["geo"].",";
	echo $t["sejp"].",";
	echo $t["sos"].",";
	echo $t["eko"].",";
	echo $t["bsin"].",";
	echo $t["bsing"].",";
	echo $t["bsas"].",";
	echo $t["bsam"].",";
	echo $t["bsaj"].",";
	echo $t["bsps"].",";
	echo $t["bsjp"].",";
	echo $t["bd"].",";
	}?>]
		}]
});
});
</script>
<hr>
<hr>
<br/>
<br/>
<div id="view4" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<br/>
<hr>
<h3><center>Nilai Semester 4 Untuk <strong><?php while($el = mysql_fetch_array($b4)){echo $el['namel'];}?></strong></center></h3>
<div class="table-container">
<table border="1">
<tr>
<th>Agama</th>
<th>PKN</th>
<th>MTK</th>
<th>Sjr.Indo</th>
<th>B.Indo</th>
<th>B.Ing</th>
<th>SBK</th>
<th>Prakarya</th>
<th>PJOK</th>
<th>Bio.</th>
<th>Fis.</th>
<th>Kim.</th>
<th>MTK(p)</th>
<th>Geo.</th>
<th>SEJ(p/r)</th>
<th>Sos.</th>
<th>Eko.</th>
<th>B/S.Indo</th>
<th>B/S.Ing</th>
<th>B/S Arab</th>
<th>B/S Mand.</th>
<th>B/S Jerm</th>
<th>B/S Pran.</th>
<th>B/S Jepn.</th>
<th>Mulok</th>

</tr>
<?php
while($data = mysql_fetch_array($q4)){
 echo "<tr>";
 echo "<td>".$data['agama']."</td>";
 echo "<td>".$data['pkn']."</td>";
 echo "<td>".$data['mtk']."</td>";
 echo "<td>".$data['sji']."</td>";
 echo "<td>".$data['bin']."</td>";
 echo "<td>".$data['bing']."</td>";
 echo "<td>".$data['sbk']."</td>";
 echo "<td>".$data['pr']."</td>";
 echo "<td>".$data['pjok']."</td>";
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
 echo "</tr>";
}
?>
</table>
<hr>
<hr>
<br/>
<br/>
<script type="text/javascript">
$(function () {
$('#view5').highcharts({
		title: {
				text: 'Nilai Semester 5',
				x: -20 //center
		},
		subtitle: {
				text: '',
				x: -20
		},
		xAxis: {
				categories: ['agama', 'pkn', 'mtk', 'sji', 'bin', 'bing', 'sb', 'pr', 'pjok', 'sbk', 'pra', 'pjo', 'bio', 'fis', 'kim', 'mtkp', 'geo', 'sejp', 'sos', 'eko', 'bsin', 'bsing', 'bsas', 'bsam', 'bsaj', 'bsps', 'bsjp', 'bd']
		},
		yAxis: {
				title: {
						text: 'Jumlah'
				},
				plotLines: [{
						value: 0,
						width: 1,
						color: '#25D366'
				}]
		},
		tooltip: {
				valueSuffix: ''
		},
		legend: {
				layout: 'vertical',
				align: 'right',
				verticalAlign: 'middle',
				borderWidth: 0
		},
		series: [{
				name: 'Nilai ',
				data: [<?php while($t=mysql_fetch_array($sa4)){
	echo $t["agama"].",";
	echo $t["pkn"].",";
	echo $t["mtk"].",";
	echo $t["sji"].",";
	echo $t["bin"].",";
	echo $t["bing"].",";
	echo $t["sb"].",";
	echo $t["pr"].",";
	echo $t["pjok"].",";
	echo $t["sbk"].",";
	echo $t["pra"].",";
	echo $t["pjo"].",";
	echo $t["bio"].",";
	echo $t["fis"].",";
	echo $t["kim"].",";
	echo $t["mtkp"].",";
	echo $t["geo"].",";
	echo $t["sejp"].",";
	echo $t["sos"].",";
	echo $t["eko"].",";
	echo $t["bsin"].",";
	echo $t["bsing"].",";
	echo $t["bsas"].",";
	echo $t["bsam"].",";
	echo $t["bsaj"].",";
	echo $t["bsps"].",";
	echo $t["bsjp"].",";
	echo $t["bd"].",";
	}?>]
		}]
});
});
</script>
<hr>
<hr>
<br/>
<br/>
<div id="view5" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<br/>
<hr>
<h3><center>Nilai Semester 5 Untuk <strong><?php while($el = mysql_fetch_array($b5)){echo $el['namel'];}?></strong></center></h3>
<div class="table-container">
<table border="1">
<tr>
<th>Agama</th>
<th>PKN</th>
<th>MTK</th>
<th>Sjr.Indo</th>
<th>B.Indo</th>
<th>B.Ing</th>
<th>SBK</th>
<th>Prakarya</th>
<th>PJOK</th>
<th>Bio.</th>
<th>Fis.</th>
<th>Kim.</th>
<th>MTK(p)</th>
<th>Geo.</th>
<th>SEJ(p/r)</th>
<th>Sos.</th>
<th>Eko.</th>
<th>B/S.Indo</th>
<th>B/S.Ing</th>
<th>B/S Arab</th>
<th>B/S Mand.</th>
<th>B/S Jerm</th>
<th>B/S Pran.</th>
<th>B/S Jepn.</th>
<th>Mulok</th>

</tr>
<?php
while($data = mysql_fetch_array($q5)){
 echo "<tr>";
 echo "<td>".$data['agama']."</td>";
 echo "<td>".$data['pkn']."</td>";
 echo "<td>".$data['mtk']."</td>";
 echo "<td>".$data['sji']."</td>";
 echo "<td>".$data['bin']."</td>";
 echo "<td>".$data['bing']."</td>";
 echo "<td>".$data['sbk']."</td>";
 echo "<td>".$data['pr']."</td>";
 echo "<td>".$data['pjok']."</td>";
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
 echo "</tr>";
}
?>
</table>
</div>
</div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
<div class="pull-right hidden-xs">
  <b>Version</b> 2.4.0
</div>
<strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Create the tabs -->

    <!-- /.control-sidebar-menu -->

  </div>
  <!-- /.tab-pane -->
  <!-- Stats tab content -->
      <!-- /.form-group -->

  <!-- /.tab-pane -->
</div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<!-- Bootstrap 3.3.7 -->
<script src="../guru/gm/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../guru/gm/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../guru/gm/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../guru/gm/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../guru/gm/dist/js/demo.js"></script>
<script>
$(document).ready(function () {
$('.sidebar-menu').tree()
})
</script>
</body>
</html>
