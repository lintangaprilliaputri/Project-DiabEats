<?php
include_once ("koneksi.php");
$query = "SELECT * FROM tb_stokproduk";
$hasil = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"href="bootstrap\css\bootstrap.css">
    <title>Admin - Stok Makanan Sehat</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f4;
        }

        html {
            scroll-behavior: smooth;
        }

        nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            position: relative;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            padding: 5px 0;
        }

        nav .logo img {
            width: 100px;
            cursor: pointer;
            margin: 7px 0;
        }

        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #000;
            font-weight: 500;
            font-size: 17px;
            transition: 0.1s;
        }

        nav ul li a:hover {
            color: #bd0505;
        }

        nav ul li a::after {
            content: '';
            width: 0;
            height: 2px;
            background: #bd0505;
            display: block;
            transition: 0.2s linear;
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        nav .icon img {
            width: 20px;
            cursor: pointer;
            margin-left: 20px;
        }
        .sub-menu-wrap{
            overflow: hidden;
            position: absolute;
            top: 100%;
            right: 5%;
            width: 150px;
            max-height: 0px;
            transition: max-height 0.5s;
        }

        .sub-menu-wrap.open-menu{
            max-height: 400px;
        }
        .sub-menu {
            border: 2px solid #BD0505;
            border-radius: 5px;
            background:#ffffff ;
            padding: 10px;
        }

        .sub-menu h3 {
            font-size: 12pt;
            display: flex;
            align-items: center;
        }

        .sub-menu hr {
            border: 0;
            height: 1px;
            width: 100%;
            background: #303030 ;
            margin: 10px 0;
        }

        .sub-menu-link {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #BD0505;
            margin: 12px 0;
        }

        .sub-menu-link p{
            width: 100%;
        }

        .sub-menu-link span {
            font-size: 10px;
            transform: 0.5s;
        }

        .sub-menu-link:hover span {
            transform: translateX(5px);
        }

        .sub-menu-link:hover p {
            font-weight: 600;
        }
        .popup-info {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(.9);
            width: 500px;
            background: rgb(255, 255, 255);
            border-radius: 6px;
            padding: 10px 25px;
            opacity: 0;
            pointer-events: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: 0.5s ease;
        }
        .popup-info.active {
            opacity: 100;
            pointer-events: auto;
            transform: translate(-50%, -50%) scale(1);
        }
        .popup-info h2 {
            font-size: 50px;
            color: rgb(0, 0, 0);
        }
        .popup-info .info {
            display: inline-block;
            font-size: 16px;
            color: #000000;
            font-weight: 500;
            margin: 4px 0;
        }
        .popup-info .btn-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #bd0505;
            margin-top: 10px;
            padding: 15px 0 7px;
        }
        .popup-info .btn-group .info-btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 130px;
            height: 45px;
            background-color: #bd0505;
            border: 2px solid;
            outline: none;
            border-radius: 6px;
            text-decoration: none;
            font-size: 16px;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: 0.5s;
        }
        .popup-info .btn-group .info-btn:nth-child(1) {
            background: transparent;
            color: #bd0505;
        }
        .popup-info .btn-group .info-btn:nth-child(1):hover {
            background: #bd0505;
            color: white;
        }
        .popup-info .btn-group .info-btn:nth-child(2):hover {
            background: transparent;
            color: #bd0505;
        }
        .mainn {
            transition: 0.5s ease;
        }
        .mainn.active {
            transition: 0.5s ease;
            pointer-events:none;
}
    </style>
</head>

<body>
    <div class="mainn">
        <nav>
            <div class="logo">
                <img src="image/logo DiabEats.png" alt="Logo">
            </div>
            <ul>
                <li><a href="admin.php">Pesanan</a></li>
                <li><a href="stokproduk.php">Stok Produk</a></li>  
            </ul>
            <div class="icon">
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
        
        <div class="container pt-3">
            <div class="text-center">
                <h3>DATA STOK PRODUK DIABEATS </h3>
            </div>
            <a href="tambahproduk.php" class="btn btn-primary mb-1mt-1">Tambah Produk</a>
            <a href="stokprodukPDF.php" target="_blank" class="btn btn-success"> PRINT LAPORAN</a>
            <br><table class="table table-striped"><br>
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">ID Produk</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1;
                    while ($data = mysqli_fetch_array($hasil)) { ?>
                        <tr>
                            <th scope="row"><?php echo $nomor; ?></th>
                            <td><?php echo $data['idbarang']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['harga']; ?></td>
                            <td><?php echo $data['stok']; ?></td>
                            <td>
                                <a href="ubahproduk.php?id=<?php echo $data['idbarang']; ?>">Edit</a> |
                                <a href="#" class="start" data-id="<?php echo $data['idbarang']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php $nomor++;
                    } ?>
                </tbody>
            </table>  
        </div>
    </div>

    <div class="popup-info">
        <h2 style="font-size:30pt;">Apa anda yakin untuk menghapus stok produk?</h2>
        <div class="btn-group">
            <button type="button" class="info-btn exit-btn">Tidak</button>
            <a href="#" id="confirmDelete" class="info-btn continue-btn">Iya</a>
        </div>
    </div>

    <script src="popup.js"></script> 
</body>
</html>