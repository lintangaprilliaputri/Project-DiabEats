<?php
include_once("koneksi.php");
session_start();
$menu = "";

if (isset($_SESSION['produk'])) {
    $kode = $_SESSION['produk'];
    $query = "SELECT nama, stok FROM tb_stokproduk WHERE idbarang = '$kode'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $menu = $row['nama'];
        $stok = $row['stok'];
        if ($stok == 0) {
            echo "Produk ini sudah habis.";
            exit();
        }
    } else {
        echo "Error: Produk tidak ditemukan";
        exit();
    }
} else {
    echo "Error: Tidak ada produk yang dipilih.";
    exit();
}

$que = "SELECT * FROM `tb_stokproduk` WHERE nama LIKE '$menu'";
$result = mysqli_query($conn, $que);
$produk = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiabEats</title>
    <link rel="stylesheet" href="styleMenu.css">
    <link rel="stylesheet"href="bootstrap\css\bootstrap.css">

    <script>
        function calculateTotal() {
            var jumlahBeli = document.getElementById('jumlah').value;
            var hargaPerProduk = document.getElementById('hargaPerProduk').value;

            jumlahBeli = parseInt(jumlahBeli);
            hargaPerProduk = parseInt(hargaPerProduk);

            var totalPembayaran = jumlahBeli * hargaPerProduk;

            document.getElementById('totalPembayaran').value = totalPembayaran;
        }

        window.onload = checkStatus;
    </script>
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
                        <a href="index.php" class="sub-menu-link">
                            <h3>Keluar</h3>
                            <span>></span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <section class="registration">
        <div class="register-form">
            <h1>Silahkan <span>ISI</span></h1>
            <form action="prosespembelian.php" method="POST" onsubmit="return validateStock()">
                <p>Nama Produk</p>
                <input type="text" value="<?php echo $produk['nama'] ?>" required="Requiered" name="NamaProduk" readonly>
                <p>Harga</p>
                <input type="text" id="hargaPerProduk" value="<?php echo $produk['harga'] ?>" required="Requiered" name="harga" readonly>
                <p>Jumlah Pesanan</p>
                <input type="number" id="jumlah" name="jumlah" required="Requiered" oninput="calculateTotal()">
                <p>Total Pembayaran</p>
                <input type="text" id="totalPembayaran" required="Requiered" name="totalPembayaran" readonly><br>
                <p>Metode Pembayaran</p>
                <input type="radio" name="tipe" value="Transfer" id="" required> Transfer &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                <input type="radio" name="tipe" value="Cash" id=""> COD

                <h4>Masukkan Data</h4>
                <p>Nama </p>
                <input type="text" required="Requiered" name="namaUser">
                <p>Email</p>
                <input type="text" required="Requiered" name="email">
                <p>No Telp</p>
                <input type="text" name="notelp" required="Requiered">
                <p>Alamat</p>
                <input type="text" required="Requiered" name="alamat"><br>

                <input type="hidden" id="stok" value="<?php echo $stok; ?>">
                <input type="submit" class="start" value="Checkout" name="Submit" class="submitbtn">
            </form>
        </div>
    </section>

    <div class="popup-info" id="popup-info">
        <h2 style="font-size:30pt;">Terima Kasih</h2>
        <h4 style="font-size: 20pt;">Pesanan Anda Akan Segera di Proses!</h4>
        <div class="btn-group">
            <a href="pelanggan.php" id="confirmBack" class="info-btn continue-btn">Kembali</a>
        </div>
    </div>

    <script>
        function calculateTotal() {
            var jumlahBeli = document.getElementById('jumlah').value;
            var hargaPerProduk = document.getElementById('hargaPerProduk').value;

            jumlahBeli = parseInt(jumlahBeli);
            hargaPerProduk = parseInt(hargaPerProduk);

            var totalPembayaran = jumlahBeli * hargaPerProduk;

            document.getElementById('totalPembayaran').value = totalPembayaran;
        }

        function validateStock() {
            var stok = document.getElementById('stok').value;
            var jumlahBeli = document.getElementById('jumlah').value;

            if (parseInt(jumlahBeli) > parseInt(stok)) {
                alert("Jumlah pembelian melebihi stok yang tersedia.");
                return false;
            }

            return true;
        }

        function checkStatus() {
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');
            if (status === 'success') {
                document.querySelector('.popup-info').style.display = 'block';
            } else if (status === 'failure') {
                alert("Input data gagal.");
            } else if (status === 'outofstock') {
                alert("Stok tidak mencukupi.");
            }
        }

        window.onload = checkStatus;
    </script>
</body>
</html>