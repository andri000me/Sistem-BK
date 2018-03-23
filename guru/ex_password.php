<?php
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.php");
}
$mdyy = $_GET['fd456406745d816a45cae554c788e754'];

if ($mdyy != 'ZXhfcGFzc3dvcmQucGhwP3doYXQ9ZWRiZmZmNzE2ODcyOWJmY2EyYjQyNjVkMGMxMGE1ZGI=') {
	echo "Maaf, Anda tidak mempunyai akses untuk mendownload file";
	exit();
}

include"plugins/fpdf/fpdf.php";


# MEMBUAT KONEKSI KE DATABASE
mysql_connect('localhost',"root",'');
mysql_select_db('bk');


$header = array(
	array("label"=>"No", "length"=>10, "align"=>"C"),
	array("label"=>"Nama", "length"=>15, "align"=>"C"),
	array("label"=>"Username", "length"=>40, "align"=>"L"),
	array("label"=>"Password", "length"=>30, "align"=>"L"),
);

$pdf = new FPDF;

// Menambahkan halaman baru
$pdf->AddPage();

// set margin top
$pdf->SetLeftMargin(10);

// set font
$pdf->SetFont('Arial','B','12');

// set background tabel
$pdf->SetFillColor(207,223,233);

// set warna text
$pdf->SetTextColor(000);

// Set warna garis
$pdf->SetDrawColor(000);

// Tulis judul dokumen
$pdf->Cell(40, 8, 'Daftar Siswa SMAN 3 Bondowoso', 0, '0', "L", false);

// turun kebawah
$pdf->Ln();

#buat header tabel
foreach ($header as $kolom) {
	$pdf->Cell($kolom['length'], 8, $kolom['label'], 1, '0', $kolom['align'], true);
}


$pdf->Ln();

#tampilkan data tabelnya
$pdf->SetFillColor(224,235,255);
$pdf->SetFont('Arial','','12');

$fill 	= false;
$no		= 1;

# MENGAMBIL DATA DARI DATABASE MYSQL
$siswa = mysql_query("SELECT * FROM login ORDER BY nama ASC");
while( $data = mysql_fetch_array($siswa)){
	$i = 0;
	$pdf->Cell($header[$i]['length'], 8, $no.'.', 1, '0','C', $fill);
	$i++;
	$pdf->Cell($header[$i]['length'], 8, $data['nama'], 1, '0','C', $fill);
	$i++;
	$pdf->Cell($header[$i]['length'], 8, $data['nisn'], 1, '0','L', $fill);
	$i++;
	$pdf->Cell($header[$i]['length'], 8, $data['password2'], 1, '0','L', $fill);
	$no++;

	$fill = !$fill;
	$pdf->Ln();
}


$pdf->Output('daftar-siswa.pdf','i'); // menampilkan di browser
#$pdf->Output('daftar-siswa.pdf','d'); // download

?>
