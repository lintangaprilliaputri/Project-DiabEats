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
            width: 20px;
            margin-left: 20px;
        }

        .container {
            width: 80%;
            margin: 40px auto 10px auto; /* memberikan margin atas dan bawah sebesar 50px dan 10px */
            overflow: hidden; /*mengatur tata letak dan tampilan elemen yang terkandung di dalam kontainer */
        }

        .sub-menu-wrap{
            position: absolute;
            top: 100%;
            right: 5%;
            width: 150px;
            max-height: 0px;
            overflow: hidden;
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
        </div>
    </nav>
    <div class="container">
        <h2>Laporan Pesanan Masuk</h2>
        <p>Konten untuk mengelola laporan akan ditampilkan di sini.</p>
    </div>
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>
</html>
