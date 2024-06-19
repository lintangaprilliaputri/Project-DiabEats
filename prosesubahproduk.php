<?php
include_once("koneksi.php");
$id= $_POST['id'];
$nama = $_POST['nama'];
$harga= $_POST['harga'];
$stok= $_POST['stok'];
$satuan= $_POST['satuan'];
$query="UPDATE tb_stokproduk SET nama='$nama',harga='$harga',stok='$stok' WHERE idbarang='$id'";
$hasil= mysqli_query($conn, $query);
    if ($hasil) {
        header('location:stokproduk.php');
    } else {
        echo "Update data gagal";
    }
?>