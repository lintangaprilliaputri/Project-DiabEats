<?php
// Memanggil library FPDF
require('library/fpdf.php');
include 'koneksi.php'; // Pastikan file koneksi.php ada dan berisi kode koneksi ke database

// Membuat instance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetFont('Times', 'B', 13);
$pdf->Cell(200, 10, 'DATA PESANAN PRODUK DIABEATS', 0, 0, 'C');

$pdf->Cell(10, 15, '', 0, 1);  //atur lebar tinggi cell
$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(10, 7, 'NO', 1, 0, 'C');
$pdf->Cell(10, 7, 'ID', 1, 0, 'C');
$pdf->Cell(25, 7, 'NAMA PRODUK', 1, 0, 'C');
$pdf->Cell(20, 7, 'JUMLAH', 1, 0, 'C');
$pdf->Cell(25, 7, 'TOTAL', 1, 0, 'C');
$pdf->Cell(25, 7, 'NAMA USER', 1, 0, 'C');
$pdf->Cell(30, 7, 'EMAIL', 1, 0, 'C');
$pdf->Cell(20, 7, 'NO TELP', 1, 0, 'C');
$pdf->Cell(30, 7, 'ALAMAT', 1, 0, 'C');

$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', '', 10);
$no = 1;

// Periksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$data = mysqli_query($conn, "SELECT * FROM tb_pesanan");
if (!$data) {
    die("Query gagal: " . mysqli_error($conn));
}

while ($d = mysqli_fetch_array($data)) {
    $pdf->Cell(10, 6, $no++, 1, 0, 'C');
    $pdf->Cell(10, 6, $d['idpesanan'], 1, 0, 'C');
    $pdf->Cell(25, 6, $d['produk'], 1, 0, 'C');
    $pdf->Cell(20, 6, $d['jumlah'], 1, 0, 'C');
    $pdf->Cell(25, 6, $d['total'], 1, 0, 'C');
    $pdf->Cell(25, 6, $d['nama_user'], 1, 0, 'C');
    $pdf->Cell(30, 6, $d['email'], 1, 0, 'C');
    $pdf->Cell(20, 6, $d['notelp'], 1, 0, 'C');
    $pdf->Cell(30, 6, $d['alamat'], 1, 1, 'C');
}

$pdf->Output();
?>