<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiabEats</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        
        section nav{
            display: flex;
            justify-content: space-around;
            align-items: center;
            position: fixed;
            right: 0;
            left: 0;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
            z-index: 1000;
        }

        section nav .logo img{
            width: 100px;
            cursor: pointer;
            margin: 7px 0;
        }

        section nav ul{
            list-style: none;
        }

        section nav ul li{
            display: inline-block;
            margin: 0 15px;
        }

        section nav ul li a{
            text-decoration: none;
            color: #000;
            font-weight: 500;
            font-size: 17px;
            transition: 0.1s;
        }

        section nav ul li a::after{
            content: '';
            width: 0;
            height: 2px;
            background: #bd0505;
            display: block;
            transition: 0.2s linear;
        }

        section nav ul li a:hover::after{
            width: 100%;
        }

        section nav ul li a:hover{
            color: #bd0505;
        }

        section nav .img {
            width: 100px;
            height: 100px;
        }

        section nav .icon img {
            margin-left: 20px;
            width: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        section nav .icon img:hover{
            color: #161616;
        }
        
        .article{
            width: 100%;
            padding: 150px 0;
            background-image: url(image/bg1000.png);
            background-size: cover;
            background-position: center;
        }

        .article h1{
            font-size: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .article h1 span{
            margin-left: 15px;
            color: #bd0505;
            font-family: mv boli;
        }

        .article h1 span::after{
            content: '';
            width: 100%;
            height: 2px;
            background: #bd0505;
            display: block;
            position: relative;
            bottom: 15px;
        }

        .article .article_image_box{
            width: 95%;
            margin: 30px auto;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 10px;
        }

        .article .article_image_box .article_image{
            height: 97.5%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: black;
            }

        .article .article_image_box .article_image img{
            width: 100%;
            transition: .3s;
            
        }

        .article .article_image_box .article_image:hover img{
            opacity: 0.4;
        }

        .article .article_image_box .article_image h3{
            position: absolute;
            width: 400px;
            font-size: 20px;
            text-align: center;
            margin-bottom: 130px;
            color: #bd0505;
            font-family: polo;
            z-index: 5;
            opacity: 0;
            transition: 0.3s;
        }

        .article .article_image_box .article_image:hover h3{
            opacity: 1;
        }

        .article .article_image_box .article_image p{
            position: absolute;
            width: 400px;
            margin-top: 30px;
            text-align: center;
            color: white;
            line-height: 22px;
            opacity: 0;
            z-index: 5;
            transition: 0.3s;
        }

        .article .article_image_box .article_image:hover p{
            opacity: 1;
        }

        .article_image_box .article_btn{
            background: #bd0505;
            position: relative;
            left: 1123px;
            bottom: -50px;
            width: 220px;
            cursor: pointer;
            padding: 12px 25px;
        }

        .article_image_box .article_btn a{
            color: #fff;
            margin-right: 5px;
            text-decoration: none;
        }

        .article_image_box .article_btn img{
            width: 15px;
            transition: 0.3s;
        }

        .article_image_box .article_btn:hover img{
            transform: translateX(7px);
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
    </section>

    <div class="article" id="Article">
        <h1><span>Artikel</span></h1>

        <div class="article_image_box">
            <div class="article_image">
            <a href="https://upk.kemkes.go.id/new/mengenal-gejala-diabetes-melitus">
                <img src="image/artikel1.jpg"></a>
                <h3>Mengenal Gejala Diabetes Melitus</h3>
                <p>
                Sebagai salah satu masalah kesehatan yang berbahaya dan banyak ditemukan di tengah masyarakat Indonesia, 
                Diabetes harus mendapatkan penanganan sedini mungkin untuk menghindari berbagai efek yang lebih buruk di kemudian hari...
                </p></a>

            </div>

            <div class="article_image">
                <a href="https://p2ptm.kemkes.go.id/tag/tanda-dan-gejala-diabetes">
                <img src="image/artikel2.jpg"></a>
                <h3>Tanda dan Gejala Diabetes</h3>
                <p>
                Rasa lapar yang berlebihan, merupakan tanda diabetes lainnya. Ketika kadar gula darah merosot, 
                tubuh mengira belum diberi makan dan lebih menginginkan glukosa yang dibutuhkan sel...
                </p></a>
            </div>

            <div class="article_image">
                <a href="https://health.kompas.com/read/22L08120000568/manfaat-dan-jenis-olahraga-yang-cocok-untuk-penderita-diabetes">
                <img src="image/artikel3.png"></a>
                <h3>Manfaat dan Jenis Olahraga yang Cocok untuk Penderita Diabetes</h3>
                <p>
                Diabetes tidak bisa disembuhkan secara total. Namun, penderita diabetes dapat 
                mengendalikan kadar normal gula darah dengan melakoni gaya hidup sehat, salah satunya melalui olahraga...
                </p>
            </div>

            <div class="article_image">
                <a href="https://aaji.or.id/Articles/3-hal-penting-agar-terhindar-dari-diabetes">
                <img src="image/artikel4.png"></a>
                <h3>3 Hal Penting Agar Terhindar Dari Diabetes</h3>
                <p>
                Lalu, apakah ada cara menyembuhkan penyakit diabetes bagi para penderita diabetes? 
                Banyak penderita diabetes yang merasa pesimis dengan keadaanya. Berikut adalah beberapa cara yang bisa menghindarkan kamu dari diabetes....
                </p>
            </div>

            <div class="article_image">
                <a href="https://primayahospital.com/gizi/pantangan-makanan-penderita-diabetes/">
                <img src="image/artikel5.png"></a>
                <h3>Manfaat dan Jenis Olahraga yang Cocok untuk Penderita Diabetes</h3>
                <p>
                Salah satu konsekuensinya adalah adanya pantangan makanan untuk penderita diabetes. Bila sebelumnya dia kerap makan tanpa batasan yang jelas, 
                kini ada aturan diet yang harus ditaati agar penyakit diabetes tak memburuk dan menimbulkan komplikasi yang fatal....
                </p>
            </div>

            <div class="article_image">
                <a href="https://diabetasol.com/id/news-detail/kapan-waktu-ngemil-yang-aman-bagi-penderita-diabetes-">
                <img src="image/artikel6.png"></a>
                <h3>Kapan Waktu Ngemil yang Aman bagi Penderita Diabetes?</h3>
                <p>
                Ngemil bisa mendatangkan manfaat untuk penderita diabetes. Yang penting, Anda tahu kapan waktu 
                yang tepat untuk ngemil. Ini penjelasan lengkapnya....
                </p>
            </div>
        </div>
    </div>
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>