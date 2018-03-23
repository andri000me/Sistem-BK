<?php
// Load file koneksi.php
include "../konek.php";
$k = $_GET['key'];
$mdgz = '0E704A6B24F07B4F10A31C9B7DF1BBC55747AE40B1ECBE71269EE408A4908D5C';
if ($k != $mdgz) {
  echo "Maaf, Anda tidak mempunyai akses untuk mendownload file";
	exit();
}
// Load plugin PHPExcel nya
require_once 'plugins/ex/PHPExcel.php';
// Panggil class PHPExcel nya
$excel = new PHPExcel();
// Settingan awal file excel
$excel->getProperties()->setCreator('SMA Negeri 3 Bondowoso')
             ->setTitle("Rekap Nilai Semester 5")
             ->setSubject("Siswa");
// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
$style_col = array(
  'font' => array('bold' => true), // Set font nya jadi bold
  'alignment' => array(
    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
  ),
  'borders' => array(
    'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
    'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
    'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
    'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
  )
);
// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
$style_row = array(
  'alignment' => array(
    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
  ),
  'borders' => array(
    'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
    'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
    'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
    'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
  )
);
$excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA SISWA"); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('A1:AE1'); // Set Merge Cell pada kolom A1 sampai F1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
// Buat header tabel nya pada baris ke 3
$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('B3', "NISN"); // Set kolom B3 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA LENGKAP"); // Set kolom C3 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('D3', "AGAMA"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
$excel->setActiveSheetIndex(0)->setCellValue('E3', "PKN"); // Set kolom E3 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('F3', "MTK"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('G3', "SJI"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('H3', "BIN"); // Set kolom B3 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('I3', "BING"); // Set kolom C3 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('J3', "SB"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
$excel->setActiveSheetIndex(0)->setCellValue('K3', "PR"); // Set kolom E3 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('L3', "PJOK"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('M3', "SBK"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('N3', "PRA"); // Set kolom B3 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('O3', "PJO"); // Set kolom C3 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('P3', "BIO"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
$excel->setActiveSheetIndex(0)->setCellValue('Q3', "FIS"); // Set kolom E3 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('R3', "KIM"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('S3', "MTKP"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('T3', "GEO"); // Set kolom B3 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('U3', "SEJP"); // Set kolom C3 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('V3', "SOS"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
$excel->setActiveSheetIndex(0)->setCellValue('W3', "EKO"); // Set kolom E3 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('X3', "BSIN"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('Y3', "BSING"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('Z3', "BSAS"); // Set kolom B3 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('AA3', "BSAM"); // Set kolom C3 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('AB3', "BSAJ"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
$excel->setActiveSheetIndex(0)->setCellValue('AC3', "BSPS"); // Set kolom E3 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('AD3', "BSJP"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AE3', "MULOK"); // Set kolom F3 dengan tulisan "ALAMAT"
// Apply style header yang telah kita buat tadi ke masing-masing kolom header
$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('S3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('T3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('U3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('V3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('W3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('X3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Y3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Z3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AA3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AB3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AC3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AD3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AE3')->applyFromArray($style_col);

// Set height baris ke 1, 2 dan 3
$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);
// Buat query untuk menampilkan semua data siswa
$sql = "SELECT * FROM bk.smt5";
$b = mysql_query($sql); // Eksekusi querynya
$no = 1; // Untuk penomoran tabel, di awal set dengan 1
$numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
while($data = mysql_fetch_array($b)){ // Ambil semua data dari hasil eksekusi $sql
  $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
  $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data['nisn']);
  $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data['namel']);
  $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data['agama']);
  $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data['pkn']);
  $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data['mtk']);
  $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data['sji']);
  $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data['bin']);
  $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data['bing']);
  $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data['sb']);
  $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data['pr']);
  $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data['pjok']);
  $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data['sbk']);
  $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data['pra']);
  $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data['pjo']);
  $excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data['bio']);
  $excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $data['fis']);
  $excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $data['kim']);
  $excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $data['mtkp']);
  $excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $data['geo']);
  $excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $data['sejp']);
  $excel->setActiveSheetIndex(0)->setCellValue('V'.$numrow, $data['sos']);
  $excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow, $data['eko']);
  $excel->setActiveSheetIndex(0)->setCellValue('X'.$numrow, $data['bsin']);
  $excel->setActiveSheetIndex(0)->setCellValue('Y'.$numrow, $data['bsing']);
  $excel->setActiveSheetIndex(0)->setCellValue('Z'.$numrow, $data['bsas']);
  $excel->setActiveSheetIndex(0)->setCellValue('AA'.$numrow, $data['bsam']);
  $excel->setActiveSheetIndex(0)->setCellValue('AB'.$numrow, $data['bsaj']);
  $excel->setActiveSheetIndex(0)->setCellValue('AC'.$numrow, $data['bsps']);
  $excel->setActiveSheetIndex(0)->setCellValue('AD'.$numrow, $data['bsjp']);
  $excel->setActiveSheetIndex(0)->setCellValue('AE'.$numrow, $data['bd']);


  // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
  $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('V'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('W'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('X'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('Y'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('Z'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AA'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AB'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AC'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AD'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AE'.$numrow)->applyFromArray($style_row);


  $excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);

  $no++; // Tambah 1 setiap kali looping
  $numrow++; // Tambah 1 setiap kali looping
}
// Set width kolom
$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(5); // Set width kolom D
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(5); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(5); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('G')->setWidth(5); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('H')->setWidth(5); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('I')->setWidth(5); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('J')->setWidth(5); // Set width kolom D
$excel->getActiveSheet()->getColumnDimension('K')->setWidth(5); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('L')->setWidth(5); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('M')->setWidth(5); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('N')->setWidth(5); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('O')->setWidth(5); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('P')->setWidth(5); // Set width kolom D
$excel->getActiveSheet()->getColumnDimension('Q')->setWidth(5); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('R')->setWidth(5); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('S')->setWidth(5); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('T')->setWidth(5); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('U')->setWidth(5); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('V')->setWidth(5); // Set width kolom D
$excel->getActiveSheet()->getColumnDimension('W')->setWidth(5); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('X')->setWidth(5); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('Y')->setWidth(5); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('Z')->setWidth(5); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('AA')->setWidth(5); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AB')->setWidth(5); // Set width kolom D
$excel->getActiveSheet()->getColumnDimension('AC')->setWidth(5); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('AD')->setWidth(5); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('AE')->setWidth(5); // Set width kolom A


// Set orientasi kertas jadi LANDSCAPE
$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
// Set judul file excel nya
$excel->getActiveSheet(0)->setTitle("SEMESTER 5");
$excel->setActiveSheetIndex(0);
// Proses file excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="Data Nilai Semester 5.xlsx"'); // Set nama file excel nya
header('Cache-Control: max-age=0');
$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
$write->save('php://output');
?>
