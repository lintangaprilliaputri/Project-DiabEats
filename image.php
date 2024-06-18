<?php
session_start();
include_once('koneksi.php');

// Error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT gambar FROM tb_menu WHERE id_menu = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }
    $stmt->bind_param("i", $id);
    if (!$stmt->execute()) {
        die('Execute failed: ' . htmlspecialchars($stmt->error));
    }
    $stmt->bind_result($gambar);
    $stmt->fetch();
    $stmt->close();

    if ($gambar) {
        header("Content-Type: image/png"); // Sesuaikan dengan tipe gambar yang disimpan
        echo $gambar;
    } else {
        // Jika gambar tidak ditemukan atau null
        header("Content-Type: image/png");
        // Tampilkan placeholder atau gambar default
        echo file_get_contents('path/to/default/image.png');
    }
}

$conn->close();
?>
