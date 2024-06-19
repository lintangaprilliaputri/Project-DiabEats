<?php
include_once("koneksi.php");
session_start();

if (isset($_POST['Login'])) {
    if (isset($_POST['nama'])) {
        $id = $_POST['nama'];
        // Lakukan pembersihan atau validasi input $id sebelum digunakan dalam query SQL

        $cek_id = mysqli_query($conn, "SELECT * FROM tb_stokproduk WHERE idbarang = '$id'");

        if (mysqli_num_rows($cek_id) === 1) {
            $data = mysqli_fetch_assoc($cek_id);
            $produk = $data['nama'];
            // Set session dengan data wisata yang ditemukan
            $_SESSION['produk'] = $id;
            header("location: prosesbeli.php");
            exit();
        } else {
            echo "Produk tidak ditemukan"; // Tambahkan pesan kesalahan jika wisata tidak ditemukan
        }
    } else {
        echo "ID produk tidak ditemukan dalam permintaan";
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
                <div class="menu_card">
                    <div class="menu_image">
                        <img src="image/paket1.png">
                    </div>
                    <div class="menu_info">
                        <h2>Paket 1</h2>
                        <p>Salad sayur dengan campuran telur rebus serta edamame dan almond yang lezat</p>
                        <h3>Rp 45.000</h3>
                    </div>
                    <input type="button" class="btn-order" onclick="setNamaAndSubmit('1')" value="Beli Sekarang">
                </div> 
                
                <div class="menu_card">
                    <div class="menu_image">
                        <img src="image/paket2.png">
                    </div>
                    <div class="menu_info">
                        <h2>Paket 2</h2>
                        <p>Mie goreng dengan topping chicken pop dan jus apel yang segar</p>
                        <h3>Rp 25.000</h3>
                    </div>
                    <input type="button" class="btn-order" onclick="setNamaAndSubmit('8')" value="Beli Sekarang">
                </div> 

                <div class="menu_card">
                    <div class="menu_image">
                        <img src="image/paket3.png">
                    </div>
                    <div class="menu_info">
                        <h2>Paket 3</h2>
                        <p>Omelet tahu sayur yang gurih dan enak dengan porsi yang mengenyangkan</p>
                        <h3>Rp 20.000</h3>
                    </div>
                    <input type="button" class="btn-order" onclick="setNamaAndSubmit('12')" value="Beli Sekarang">
                </div> 

                <div class="menu_card">
                    <div class="menu_image">
                        <img src="image/paket4.png">
                    </div>
                    <div class="menu_info">
                        <h2>Paket 4</h2>
                        <p>Sayur lodeh dengan kentang rebus serta bubur kacang merah</p>
                        <h3>Rp 40.000</h3>
                    </div>
                    <input type="button" class="btn-order" onclick="setNamaAndSubmit('14')" value="Beli Sekarang">
                </div>
                
                <div class="menu_card">
                    <div class="menu_image">
                        <img src="image/buburkacang.png">
                    </div>
                    <div class="menu_info">
                        <h2>Bubur Kacang Merah</h2>
                        <p>Bubur dengan bahan dasar kacang merah tinggi serat</p>
                        <h3>Rp 10.000</h3>
                    </div>
                    <input type="button" class="btn-order" onclick="setNamaAndSubmit('16')" value="Beli Sekarang">
                </div>

                <div class="menu_card">
                    <div class="menu_image">
                        <img src="image/pudding.png">
                    </div>
                    <div class="menu_info">
                        <h2>Pudding Jagung</h2>
                        <p>Pudding jagung rendah kandungan glikemik</p>
                        <h3>Rp 7.000</h3>
                    </div>
                    <input type="button" class="btn-order" onclick="setNamaAndSubmit('18')" value="Beli Sekarang">
                </div>

                <div class="menu_card">
                    <div class="menu_image">
                        <img src="image/yogurt.png">
                    </div>
                    <div class="menu_info">
                        <h2>Yogurt berry</h2>
                        <p>Yogurt dengan topping strawberry dan blueberry</p>
                        <h3>Rp 12.000</h3>
                    </div>
                    <input type="button" class="btn-order" onclick="setNamaAndSubmit('20')" value="Beli Sekarang">
                </div>

                <div class="menu_card">
                    <div class="menu_image">
                        <img src="image/susu.png">
                    </div>
                    <div class="menu_info">
                        <h2>Susu</h2>
                        <p>Susu dengan kandungan lemak yang rendah</p>
                        <h3>Rp 50.000</h3>
                    </div>
                    <input type="button" class="btn-order" onclick="setNamaAndSubmit('22')" value="Beli Sekarang">
                </div>

                <div class="menu_card">
                    <div class="menu_image">
                        <img src="image/kombucha.png">
                    </div>
                    <div class="menu_info">
                        <h2>Kombucha</h2>
                        <p>Teh fermentasi yang mengandung berbagai zat baik</p>
                        <h3>Rp 20.000</h3>
                    </div>
                    <input type="button" class="btn-order" onclick="setNamaAndSubmit('23')" value="Beli Sekarang">
                </div>

                <div class="menu_card">
                    <div class="menu_image">
                        <img src="image/infusedwater.png">
                    </div>
                    <div class="menu_info">
                        <h2>Infused Water</h2>
                        <p>Air mineral dengan rendaman buah, sayur, atau rempah-rempah</p>
                        <h3>Rp 15.000</h3>
                    </div>
                    <input type="button" class="btn-order" onclick="setNamaAndSubmit('24')" value="Beli Sekarang">
                </div>

                <div class="menu_card">
                    <div class="menu_image">
                        <img src="image/jusjeruk.png">
                    </div>
                    <div class="menu_info">
                        <h2>Jus Apel</h2>
                        <p>Jus apel yang mengandung beberapa antioksidan</p>
                        <h3>Rp 10.000</h3>
                    </div>
                    <input type="button" class="btn-order" onclick="setNamaAndSubmit('25')" value="Beli Sekarang">
                </div>

                <div class="menu_card">
                    <div class="menu_image">
                        <img src="image/jusalpukat.png">
                    </div>
                    <div class="menu_info">
                        <h2>Smoothies</h2>
                        <p>Smoothies dengan kandungan bayam dan apel</p>
                        <h3>Rp 15.000</h3>
                    </div>
                    <input type="button" class="btn-order" onclick="setNamaAndSubmit('26')" value="Beli Sekarang">
                </div>
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

        function setNamaAndSubmit(produk) {
            document.getElementById('nama_input').value = produk;
            document.getElementById('orderForm').submit();
        }
    </script>
</body>
</html>