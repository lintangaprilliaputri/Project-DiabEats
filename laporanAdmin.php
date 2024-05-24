<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan - Admin</title>
    <style>
/* CSS */
* {
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
            width: 30px;
            margin-left: 20px;
        }

        .container {
            width: 80%;
            margin: 40px auto 10px auto; /* memberikan margin atas dan bawah sebesar 50px dan 10px */
            overflow: hidden; /*mengatur tata letak dan tampilan elemen yang terkandung di dalam kontainer */
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
            <img src="image/Profil.png" alt="Profile">
        </div>
    </nav>
    <div class="container">
        <h2>Halaman Laporan</h2>
        <p>Konten untuk mengelola laporan akan ditampilkan di sini.</p>
    </div>
</body>
</html>
