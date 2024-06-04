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
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <nav>
        <div class="logo">
            <img src="image/logo DiabEats.png" alt="Logo">
        </div>
        <ul>
            <li><a href="admin.php">Beranda</a></li>
            <li><a href="#Pesanan">Pesanan</a></li>
            <li><a href="stokproduk.php">Stok Produk</a></li>
            <li><a href="laporanAdmin.php">Laporan</a></li>
            <li><a href="keluarAkun.php">Logout</a></li>                
        </ul>
        <div class="icon">
            <img src="image/Pesan.png">
            <img src="image/Profil.png">
        </div>
    </nav>

    <div class="card-body p-5">
        <div class="alert alert-danger text-center" role="alert">
        <h3>DATA STOK PRODUK DIABEATS </h3>
	</div>
        <a href="tambahproduk.php" class="btn btn-primary mb-1mt-1">Tambah Produk</a>
        <a href="stokprodukPDF.php" target="_blank" class="btn btn-success"> PRINT</a>
        <br><table class="table table-striped"><br>
            <thead class="thead-light">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">ID Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Satuan</th>
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
                        <td><?php echo $data['satuan']; ?></td>
                        <td>
                            <a href="ubahproduk.php?id=<?php echo $data['idbarang']; ?>">Edit</a> |
                            <a href="hapusProduk.php?id=<?php echo $data['idbarang']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php $nomor++;
                } ?>
            </tbody>
        </table>
        
</body>
</html>
