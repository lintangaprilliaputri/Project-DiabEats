<?php
include_once ("koneksi.php");
session_start();
$nama_pengguna = "";

// Apabila langsung mengakses admin.php tanpa login, maka akan diarahkan ke login.php untuk login terlebih dahulu
if (isset($_SESSION['login'])) {
    // Jika pengguna sudah login, dapatkan nama pengguna dari $_SESSION['nama']
    $username = $_SESSION['login'];
    // Lakukan query SQL untuk mendapatkan nama dari pengguna dengan username yang sesuai
    $query = "SELECT nama FROM tb_akun WHERE username = '$username'";
    $hasil = mysqli_query($conn, $query);

    // Periksa apakah query berhasil dieksekusi
    if ($hasil) {
        // Ambil hasil query
        $row = mysqli_fetch_assoc($hasil);
        $nama_pengguna = $row['nama'];
    } else {
        // Jika query gagal, tampilkan pesan error
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Menuju login.php jika pengguna belum login
    header("location:masukAkun.php");
    exit; // Keluar dari skrip
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
    <link rel="stylesheet" href="styleAdmin.css">
</head>
<body>
    <section>
        <nav>
            <div class="logo">
                <img src="image/logo DiabEats.png">
            </div>

            <ul>
                <li><a href="#Home">Beranda</a></li>
                <li><a href="#Pesanan">Pesanan</a></li>
                <li><a href="StokProduk.php">Stok Produk</a></li>
                <li><a href="laporanAdmin.php">Laporan</a></li>
                <li><a href="keluarAkun.php">Logout</a></li>                
            </ul>
            <div class="icon">
                <img src="image/pesan.png">
                <img src="image/profil.png"> 
            </div>
        </nav>
        <div class="main">
            <h1>Selamat Datang <?php echo $nama_pengguna; ?></h1>
        </div>
    </section>

</body>
</html>