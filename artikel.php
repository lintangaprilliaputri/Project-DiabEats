<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleDiabEats.css">
    <title>Artikel</title>
    
</head>
<body>

<header>
    <img src="logo DiabEats.png" alt="Logo" class="logo">
    <nav>
        <?php
        $current_page = basename($_SERVER['PHP_SELF']);
        ?>
        <a href="beranda.php" <?php if ($current_page === 'beranda.php') echo 'style="font-weight:bold;"'; ?>>Beranda</a>
        <a href="artikel.php" <?php if ($current_page === 'artikel.php') echo 'style="font-weight:bold;"'; ?>>Artikel</a>
        <a href="pesanmakanan.php" <?php if ($current_page === 'pesanmakanan.php') echo 'style="font-weight:bold;"'; ?>>Pesan Makanan</a>
        <a href="profil.php" <?php if ($current_page === 'profil.php') echo 'style="font-weight:bold;"'; ?>>Profil</a>
    </nav>
</header>

<div class="container">
    <h1>Artikel</h1>

    <div class="article">
        <h2>Diabetes - Penyebab, jenis, Gejala, dan Cara Pengobatannya</h2>
        <p>Di artikel ini, ...</p>
    </div>

    <div class="article">
        <h2>Mengenal Diabetes Mellitus</h2>
        <p>Berikut adalah beberapa ...</p>
    </div>
</div>

</body>
</html>
