<?php
include_once("koneksi.php");
session_start();

$sql = "SELECT idbarang, nama, harga, deskripsi, gambar, stok FROM tb_stokproduk";
$result = $conn->query($sql);
$produk = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $produk[$row['idbarang']] = $row;
    }
}

if (isset($_POST['Login'])) {
    if (isset($_POST['nama'])) {
        $id = $_POST['nama'];
        // Lakukan pembersihan atau validasi input $id sebelum digunakan dalam query SQL
        $id = mysqli_real_escape_string($conn, $id);

        $cek_id = mysqli_query($conn, "SELECT * FROM tb_stokproduk WHERE idbarang = '$id'");

        if (mysqli_num_rows($cek_id) === 1) {
            $data = mysqli_fetch_assoc($cek_id);
            $produk = $data['nama'];
            // Set session dengan data produk yang ditemukan
            $_SESSION['produk'] = $id;
            header("location: prosesbeli.php");
            exit();
        } else {
            echo "Produk tidak ditemukan"; // Tambahkan pesan kesalahan jika produk tidak ditemukan
        }
    } else {
        echo "ID produk tidak ditemukan dalam permintaan";
    }
}

// Ambil semua data produk dari database
$produk_query = mysqli_query($conn, "SELECT * FROM tb_stokproduk");
$produk_list = mysqli_fetch_all($produk_query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleMenu.css">
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
                <img src="image/profil.png" onclick="toggleMenu()">
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
        <form id="orderForm" action="menu.php" method="POST">
            <h1>Our<span>Menu</span></h1>
            <div class="menu_box">
                <?php foreach ($produk_list as $produk): ?>
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image.php?id=<?php echo htmlspecialchars($produk['idbarang']); ?>" alt="<?php echo htmlspecialchars($produk['nama']); ?>">
                        </div>
                        <div class="menu_info">
                            <h2><?php echo $produk['nama']; ?></h2>
                            <p><?php echo $produk['deskripsi']; ?></p>
                            <h3>Rp <?php echo number_format($produk['harga'], 0, ',', '.'); ?></h3>
                        </div>
                        <input type="button" class="btn-order" onclick="checkStockAndSubmit('<?php echo $produk['idbarang']; ?>', '<?php echo $produk['stok']; ?>')" value="Beli Sekarang">
                    </div>
                <?php endforeach; ?>
            </div>
            <input type="hidden" name="nama" id="nama_input">
            <input type="hidden" name="Login" value="true">
        </form>
    </div>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }

        function checkStockAndSubmit(produk, stok) {
            if (stok == 0) {
                alert("Produk ini tidak tersedia, Harap memilih produk lain.");
            } else {
                document.getElementById('nama_input').value = produk;
                document.getElementById('orderForm').submit();
            }
        }
    </script>
</body>
</html>
