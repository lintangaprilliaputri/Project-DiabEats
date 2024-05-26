<?php
include_once("koneksi.php");
$query = "SELECT * FROM tb_stokproduk";
$hasil = mysqli_query($conn, $query);

while ($data = mysqli_fetch_array($hasil)) {
    // menampilkan data didalam table tb_stokproduk
    echo $data ['idbarang'] . "<br/>";
    echo $data ['nama'] . "<br/>";
    echo $data ['harga'] . "<br/>";
    echo $data ['stok'] . "<br/>";
    echo $data ['satuan'] . "<br/>";
}
?>