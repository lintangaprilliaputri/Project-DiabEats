<?php
    session_start();
    // Apabila langsung mengakses admin.php tanpa login, maka akan diarahkan ke index.php untuk login terlebih dahulu
    if (!isset($_SESSION['login'])) {
        
        // Menuju index.php
        header("location:masukAkun.php");
        exit;
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Pelanggan</title>
    <link rel="stylesheet" href="stylePelanggan.css">

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
                <li><a href="keluarAkun.php">Logout</a></li>   
            </ul>

            <div class="icon">
                <img src="image/Shop.png">
                <a href="Login.php"><img src="image/Profil.png"></a>
            </div>

        </nav>

        <div class="main">

            <div class="men_text">
                <h1>Kontrol Diabetes<br>dengan<span>DiabEats</span></h1>
            </div>

            <div class="main_image">
                <img src="image/healthy.png">
            </div>

        </div>
        
        <p>
            "Selamat datang di DiabEats, sumber informasi terpercaya untuk pencegahan diabetes dan gaya hidup sehat". 
            Di sini Anda akan menemukan beragam artikel informatif tentang faktor risiko diabetes, termasuk pola makan yang sehat, aktivitas fisik, 
            dan kebiasaan hidup lainnya yang dapat memengaruhi kesehatan Anda. Kami juga menyajikan rekomendasi makanan sehat, dan tips untuk mengubah
            gaya hidup Anda menjadi lebih aktif dan berenergi. Jangan biarkan diabetes mengendalikan hidup Anda. Dengan DiabEats, Anda dapat dengan 
            mudah memesan makanan yang mendukung gaya hidup sehat. Ayo pesan sekarang!
        </p>

        <div class="main_btn">
            <a href="#">Pesan Sekarang</a>
            <img src="image/panah kanan.png">
        </div>

    </section>

</body>
</html>