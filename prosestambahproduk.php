<?php
include_once("koneksi.php");
$nama= $_POST['nama'];
$harga= $_POST['harga'];
$stok= $_POST['stok'];
$query="INSERT INTO tb_stokproduk(nama,harga,stok,satuan) VALUE('$nama','$harga','$stok')";
$hasil=mysqli_query($conn,$query);
if ($hasil) {
    header('location:stokproduk.php');
} else {
    echo "input data gagal";
}
?>