<?php
include_once("koneksi.php");

$produk = $_POST['NamaProduk'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$total = $_POST['totalPembayaran'];
$metode = $_POST['tipe'];
$user = $_POST['namaUser'];
$email = $_POST['email'];
$notelp = $_POST['notelp'];
$alamat = $_POST['alamat'];

// Periksa stok sebelum melakukan insert
$query = "SELECT stok FROM tb_stokproduk WHERE nama = '$produk'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$stok = $row['stok'];

if ($stok >= $jumlah) {
    // Kurangi stok produk
    $newStok = $stok - $jumlah;
    $updateStokQuery = "UPDATE tb_stokproduk SET stok = $newStok WHERE nama = '$produk'";
    mysqli_query($conn, $updateStokQuery);

    // Masukkan data ke tb_pesanan
    $query = "INSERT INTO tb_pesanan (produk, harga, jumlah, total, tipe, nama_user, email, notelp, alamat) 
    VALUES ('$produk', '$harga', '$jumlah', '$total', '$metode', '$user', '$email', '$notelp', '$alamat')";
    $hasil = mysqli_query($conn, $query);

    if ($hasil) {
        header('location:pelanggan.php');
    } else {
        echo "Input data gagal";
    }
} else {
    echo "Error: Stok tidak mencukupi.";
}
?>
