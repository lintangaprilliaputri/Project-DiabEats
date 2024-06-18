<?php
session_start();
    $title = 'Paket 1';
    $harga = '45000';
    $produk = array(
        1 => array(
            'namaproduk' => 'Paket 1',
            'deskripsi' => 'Salad sayur dengan campuran telur rebus serta edamame dan almond yang lezat',
            'gambar' => 'paket1.png',
            'harga' => 45000
        ),
        2 => array(
            'namaproduk' => 'Paket 2',
            'deskripsi' => 'Mie goreng dengan topping chicken pop dan jus apel yang segar',
            'gambar' => 'paket2.png',
            'harga' => 25000
        ),
        3 => array(
            'namaproduk' => 'Paket 3',
            'deskripsi' => 'Omelet tahu sayur yang gurih dan enak dengan porsi yang mengenyangkan',
            'gambar' => 'paket3.png',
            'harga' => 20000
        ),
        4 => array(
            'namaproduk' => 'Paket 4',
            'deskripsi' => 'Sayur lodeh dengan kentang rebus serta bubur kacang merah',
            'gambar' => 'paket4.png',
            'harga' => 40000
        ),
        5 => array(
            'namaproduk' => 'Bubur Kacang Merah',
            'deskripsi' => 'Bubur dengan bahan dasar kacang merah tinggi serat',
            'gambar' => 'buburkacang.png',
            'harga' => 10000
        ),
        6 => array(
            'namaproduk' => 'Pudding Jagung',
            'deskripsi' => 'Pudding jagung rendah kandungan glikemik',
            'gambar' => 'pudding.png',
            'harga' => 7000
        ),
        7 => array(
            'namaproduk' => 'Yogurt Berry',
            'deskripsi' => 'Yogurt dengan topping strawberry dan blueberry',
            'gambar' => 'yogurt.png',
            'harga' => 12000
        ),
        8 => array(
            'namaproduk' => 'Susu',
            'deskripsi' => 'Susu dengan kandungan lemak yang rendah',
            'gambar' => 'susu.png',
            'harga' => 50000
        ),
        9 => array(
            'namaproduk' => 'Kombucha',
            'deskripsi' => 'Teh fermentasi yang mengandung berbagai zat baik',
            'gambar' => 'kombucha.png',
            'harga' => 20000
        ),
        10 => array(
            'namaproduk' => 'Infused Water',
            'deskripsi' => 'Air mineral dengan rendaman buah, sayur, atau rempah-rempah',
            'gambar' => 'infusedwater.png',
            'harga' => 15000
        ),
        11 => array(
            'namaproduk' => 'Jus Apel',
            'deskripsi' => 'Jus apel yang mengandung beberapa antioksidan',
            'gambar' => 'jusjeruk.png',
            'harga' => 10000
        ),
        12 => array(
            'namaproduk' => 'Smoothies',
            'deskripsi' => 'Smoothies dengan kandungan bayam dan apel',
            'gambar' => 'jusalpukat.png',
            'harga' => 15000
        ),
    )
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"href="bootstrap\css\bootstrap.css">
    <title>DiabEats</title>        
</head>

<body>
    <div class="navbar">
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
            <img src="image/Shop.png"><span>0</span><a href="keranjang.php"></a>
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
    </div>

    <section id="">
    <div class="container">
        <?php
        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {   //mengosongkan keranjang//
            //tampilan keranjang belanja//
            echo '
            <h3>Daftar Belanja</h3> 
            <table class="table">
            <thead>
            <tr><th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Aksi</th>
            </tr>
            </thead>
            </tbody>';
            $jumlah = 0;

            foreach ($_SESSION['cart'] as $key => $value) {
                echo'
                <tr>
                    <td>'.$produk[$key]['namaproduk'].'</td>
                    <td>'.$value.'</td>
                    <td class="text-end">'.number_format($produk[$key]['harga']*$value).'</td>
                    <td>
                        <a href="?kurangi='.$key.'" data-toggle="tooltip" title="Kurangi">&#9940;</a>&nbsp;<a href="?hapus='.$key.'" data-toggle="tooltip" title="Hapus">&#10060;</a>
                    </td>
                <tr>';
                $jumlah += $produk[$key]['harga'] * $value;
            }
            echo '
                <tr><td colspan="2" class="text-end"><b>Jumlah</b></td>
                <td class="text-end"><b>'.number_format($jumlah).'</b></td><td></td>
                </tr>
                </tbody>
                </table>';

            echo '
            <p><strong>Dikirimkan Kepada:</strong><br/>
            Nama :'. $_POST['nama'].'<br/>
            Email :'. $_POST['email'].'<br/>
            No.Hp :'. $_POST['nohp'].'<br/>
            Metode Pembayaran :'.$_POST['opsi'].'<br/>
            Alamat :'. $_POST['alamat'].'</p>
            <p><a href="?submit=yes" class="btn btn-success"> PESAN SEKARANG</a></p>';
        }
        ?>
    </div>
    </section>
</body>
</html>