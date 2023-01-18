<?php
include "koneksi.php";
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Id');
$sheet->setCellValue('B1', 'Tanggal Pemesanan');
$sheet->setCellValue('C1', 'Nama Lengkap');
$sheet->setCellValue('D1', 'Email');
$sheet->setCellValue('E1', 'Asal Kota');
$sheet->setCellValue('F1', 'No. HP');


$query = mysqli_query($conn, "select * from tb_pengunjung");
$i = 2;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $row['id']);
	$sheet->setCellValue('B'.$i, $row['tanggal']);
	$sheet->setCellValue('C'.$i, $row['nama']);
	$sheet->setCellValue('D'.$i, $row['email']);
	$sheet->setCellValue('E'.$i, $row['askot']);
	$sheet->setCellValue('F'.$i, $row['nohp']);
	$i++;
}

$styleArray = [
	'borders' => [
		'allBorders' => [
			'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
		],
	],
];

$i = $i - 1;
$sheet->getStyle('A1:D'.$i)->applyFromArray($styleArray);


$writer = new Xlsx($spreadsheet);
$writer->save('laporanpengunjung.xlsx');
?>