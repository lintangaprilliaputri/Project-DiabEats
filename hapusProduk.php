<?php
include_once ("koneksi.php");
$id=$_GET['id'];
$query="delete from tb_stokproduk where idbarang=$id";
$hasil=mysqli_query($conn,$query);
if ($hasil) {
    header('location:stokproduk.php');
    }else {
    echo "Hapus Data Gagal";
    }
?>