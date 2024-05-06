<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link rel="stylesheet" href="styleAdmin.css">
</head>
<body>

    <section id="Home">
        <nav>
            <div class="logo">
                <img src="image/logo DiabEats.png">
            </div>

            <ul>
                <li><a href="#Home">Beranda</a></li>
                <li><a href="#Pesanan">Pesanan</a></li>
                <li><a href="#Stok">Stok Produk</a></li>
                <li><a href="#Laporan">Laporan</a></li>
                <li><a href="keluarAkun.php">Logout</a></li>                
            </ul>

            <div class="icon">
                <img src="image/Pesan.png">
                <img src="image/Profil.png">
            </div>
        </nav>
    </section>
    <?php
    session_start();
    // Apabila langsung mengakses admin.php tanpa login, maka akan diarahkan ke index.php untuk login terlebih dahulu
    if (!isset($_SESSION['user'])) {
        
        // Menuju index.php
        header("location:masukAkun.php");
        exit;
    }
    ?>
</body>
</html>