<?php
include './konek.php'; ?>
<p><a href="ex_excel_try.php"><button>Export Data ke Excel</button></a></p>
    <div class="table-container">
    <table border="1">
	<tr>
		<th>NO.</th>
		<th>NISN</th>
		<th>NAMA</th>
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
    <th>PJO</th>
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
    <th>BD</th>
	</tr>
	<?php
	$sql = mysql_query("SELECT * FROM smt1 ORDER BY nisn ASC");
  while($data5 = mysql_fetch_assoc($sql));
  $sql2 = mysql_query("SELECT * FROM bio ORDER BY nisn ASC");
  while($data9 = mysql_fetch_assoc($sql2));
  $data9['namel']  == $data5['nisn'];
	$no = 1;
	while($data = mysql_fetch_assoc($sql) AND $data2 = mysql_fetch_array($sql2)){
		echo '
		<tr>
			<td>'.$no.'</td>
			<td>'.$data['nisn'].'</td>
			<td>'.$data2['namel'].'</td>
			<td>'.$data['agama'].'</td>
      <td>'.$data['pkn'].'</td>
      <td>'.$data['mtk'].'</td>
      <td>'.$data['sji'].'</td>
      <td>'.$data['bin'].'</td>
      <td>'.$data['bing'].'</td>
      <td>'.$data['sb'].'</td>
      <td>'.$data['pr'].'</td>
      <td>'.$data['pjok'].'</td>
      <td>'.$data['sbk'].'</td>
      <td>'.$data['pra'].'</td>
      <td>'.$data['pjo'].'</td>
      <td>'.$data['bio'].'</td>
      <td>'.$data['fis'].'</td>
      <td>'.$data['kim'].'</td>
      <td>'.$data['mtkp'].'</td>
      <td>'.$data['geo'].'</td>
      <td>'.$data['sejp'].'</td>
      <td>'.$data['sos'].'</td>
      <td>'.$data['eko'].'</td>
      <td>'.$data['bsin'].'</td>
      <td>'.$data['bsing'].'</td>
      <td>'.$data['bsas'].'</td>
      <td>'.$data['bsam'].'</td>
      <td>'.$data['bsaj'].'</td>
      <td>'.$data['bsps'].'</td>
      <td>'.$data['bsjp'].'</td>
      <td>'.$data['bd'].'</td>
		</tr>
		';
		$no++;
	}
	?>
</table>
