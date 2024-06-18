<?php
session_start();
include_once('koneksi.php');

// Ambil data produk dari database
$sql = "SELECT id_menu, nama, deskripsi, gambar, harga FROM tb_menu";
$result = $conn->query($sql);
$produk = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $produk[$row['id_menu']] = $row;
    }
}

// Kelola keranjang belanja
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
if (isset($_GET['beli']) && is_numeric($_GET['beli'])) {
    $productId = $_GET['beli'];
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]++;
    } else {
        $_SESSION['cart'][$productId] = 1;
    }
} elseif (isset($_GET['kurangi']) && is_numeric($_GET['kurangi'])) {
    $productId = $_GET['kurangi'];
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]--;
        if ($_SESSION['cart'][$productId] <= 0) {
            unset($_SESSION['cart'][$productId]);
        }
    }
} elseif (isset($_GET['hapus']) && is_numeric($_GET['hapus'])) {
    $productId = $_GET['hapus'];
    if (isset($_SESSION['cart'][$productId])) {
        unset($_SESSION['cart'][$productId]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleMenu.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>DiabEats</title>
</head>
<body>
    <section id="Home">
        <nav>
            <div class="logo">
                <img src="image/logo DiabEats.png">
            </div>
            <ul>
                <li><a href="pelanggan.php">Beranda</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="artikel.php">Artikel</a></li>
                <li><a href="review.php">Review</a></li>
            </ul>
            <div class="icon">
                <img src="image/Shop.png"><a href="keranjang.php"></a>
                <img src="image/Profil.png" onclick="toggleMenu()">
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <a href="keluarAkun.php" class="sub-menu-link">
                            <h3>Keluar</h3>
                            <span>></span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <div class="menu" id="Menu">
    <h1>Our<span>Menu</span></h1>
    <?php
    foreach ($produk as $key => $produkitem) {
        echo '
        <div class="menu_box">
            <div class="menu_card">
                <div class="menu_image">
                    <img src="image.php?id=' . htmlspecialchars($produkitem['id_menu']) . '" alt="' . htmlspecialchars($produkitem['nama']) . '">
                </div>
                <div class="menu_info">
                    <h2>' . htmlspecialchars($produkitem['nama']) . '</h2>
                    <p>' . htmlspecialchars($produkitem['deskripsi']) . '</p>
                    <h3> Rp ' . number_format($produkitem['harga']) . '</h3>
                </div>
                <div class="menu_btn">
                    <a href="?beli=' . $key . '">Masukkan Keranjang</a>
                </div>
            </div>
        </div>';
    }
    ?>
</div>



    <div class="sidebar" id="sidebar">
        <div class="cart-menu">
            <?php
            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                echo '
                <h3>Daftar Belanja</h3>
                <table class="table">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>';
                $jumlah = 0;
                foreach ($_SESSION['cart'] as $key => $value) {
                    if (isset($produk[$key])) { // Memastikan kunci produk ada
                        echo '
                        <tr>
                            <td>' . $produk[$key]['nama'] . '</td>
                            <td>' . $value . '</td>
                            <td class="text-end">' . number_format($produk[$key]['harga'] * $value) . '</td>
                            <td>
                                <a href="?kurangi=' . $key . '" data-toggle="tooltip" title="Kurangi">&#9940;</a>&nbsp;<a href="?hapus=' . $key . '" data-toggle="tooltip" title="Hapus">&#10060;</a>
                            </td>
                        </tr>';
                        $jumlah += $produk[$key]['harga'] * $value;
                    }
                }
                echo '
                <tr>
                    <td colspan="2" class="text-end"><b>Jumlah</b></td>
                    <td class="text-end"><b>' . number_format($jumlah) . '</b></td>
                    <td></td>
                </tr>
                </tbody>
                </table>';
            } else {
                echo '<p>Keranjang belanja Anda kosong.</p>';
            }
            ?>

            <h3>Pemesanan</h3>
            <form class="form" method="post" action="appcheckout.php">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>No.HP</label>
                    <input type="text" name="nohp" class="form-control" placeholder="No.HP" required>
                </div>
                <label>Pembayaran</label><br>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="opsi" value="Transfer"> Transfer
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="opsi" value="COD"> COD
                    </label>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                </div>
                <input type="submit" value="Beli Sekarang" class="btn btn-success">
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>
</html>
