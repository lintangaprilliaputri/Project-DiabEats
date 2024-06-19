<?php
// Memanggil library FPDF
require('library/fpdf.php');
include 'koneksi.php'; // Pastikan file koneksi.php ada dan berisi kode koneksi ke database

// Membuat instance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetFont('Times', 'B', 13);
$pdf->Cell(200, 10, 'DATA STOK PRODUK DIABEATS', 0, 0, 'C');

$pdf->Cell(10, 15, '', 0, 1);  //atur lebar tinggi cell
$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(10, 7, 'NO', 1, 0, 'C');
$pdf->Cell(25, 7, 'ID PRODUK', 1, 0, 'C');
$pdf->Cell(60, 7, 'NAMA PRODUK', 1, 0, 'C');
$pdf->Cell(45, 7, 'HARGA', 1, 0, 'C');
$pdf->Cell(45, 7, 'STOK', 1, 0, 'C');

$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', '', 10);
$no = 1;

// Periksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$data = mysqli_query($conn, "SELECT * FROM tb_stokproduk");
if (!$data) {
    die("Query gagal: " . mysqli_error($conn));
}

while ($d = mysqli_fetch_array($data)) {
    $pdf->Cell(10, 6, $no++, 1, 0, 'C');
    $pdf->Cell(25, 6, $d['idbarang'], 1, 0, 'C');
    $pdf->Cell(60, 6, $d['nama'], 1, 0, 'C');
    $pdf->Cell(45, 6, $d['harga'], 1, 0, 'C');
    $pdf->Cell(45, 6, $d['stok'], 1, 1, 'C');
}

$pdf->Output();
?>