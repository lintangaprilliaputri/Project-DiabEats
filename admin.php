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
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="styleAdmin.css">
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <script type="text/javascript" src="Chartjs/Chart.js"></script>
</head>
<body>
    <section>
        <nav>
            <div class="logo">
                <img src="image/logo DiabEats.png">
            </div>

            <ul>
                <li><a href="BerandaAdm.php">Beranda</a></li>
                <li><a href="admin.php">Pesanan</a></li>
                <li><a href="StokProduk.php">Stok Produk</a></li>
            </ul>
            <div class="icon">
                <img src="image/Profil.png" onclick="toggleMenu()">
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <a href="index.php" class="sub-menu-link">
                            <h3>Keluar</h3>
                            <span>></span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

    </section>
    <br><br><br><br>
    
    <?php
    $query = "SELECT idpesanan, produk, harga, jumlah, total, tipe, nama_user, email, notelp, alamat FROM tb_pesanan";
    $result = mysqli_query($conn, $query);

    $pesanan_data = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $pesanan_data[] = $row;
        }
    }
    ?>

<div class="container mt-5">
<h1 class="mb-4">Data Pesanan</h1>
        <!-- Tabel Bootstrap -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID Pesanan</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Tipe</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>No Telp</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($pesanan_data)) { ?>
                    <?php foreach($pesanan_data as $pesanan) { ?>
                        <tr>
                            <td><?php echo $pesanan['idpesanan']; ?></td>
                            <td><?php echo $pesanan['produk']; ?></td>
                            <td><?php echo $pesanan['harga']; ?></td>
                            <td><?php echo $pesanan['jumlah']; ?></td>
                            <td><?php echo $pesanan['total']; ?></td>
                            <td><?php echo $pesanan['tipe']; ?></td>
                            <td><?php echo $pesanan['nama_user']; ?></td>
                            <td><?php echo $pesanan['email']; ?></td>
                            <td><?php echo $pesanan['notelp']; ?></td>
                            <td><?php echo $pesanan['alamat']; ?></td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="10" class="text-center">Tidak ada data</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        

    <script>
        let subMenu = document.getElementById("subMenu");
        
        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>
</html>