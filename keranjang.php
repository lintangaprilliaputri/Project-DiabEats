<?php
session_start();

if (isset($_GET['beli']) && is_numeric($_GET['beli'])) {
    // Inisialisasi keranjang jika belum ada
    if (!isset($_SESSION['chart']) || !is_array($_SESSION['chart'])) {
        $_SESSION['chart'] = array();
    }

    $itemId = $_GET['beli'];

    // Tambahkan atau perbarui item di keranjang
    if (isset($_SESSION['chart'][$itemId])) {
        $_SESSION['chart'][$itemId]++;
    } else {
        $_SESSION['chart'][$itemId] = 1;
    }
}

// Tampilkan isi keranjang
echo "<pre>";
print_r($_SESSION['chart']);
echo "</pre>";
?>
<p>
    <a href="?beli=1">Beli 1</a><br/>
    <a href="?beli=2">Beli 2</a><br/>
    <a href="?beli=3">Beli 3</a><br/>
    <a href="?beli=4">Beli 4</a><br/>
</p>
