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
        
        .review{
            width: 100%;
            height: 100vh;
            padding: 70px 0;
        }

        .review h1{
            font-size: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .review h1 span{
            margin-left: 15px;
            color: #bd0505;
            font-family: mv boli;
        }

        .review h1 span::after{
            content: '';
            width: 100%;
            height: 2px;
            background: #bd0505;
            position: relative;
            bottom: 15px;
            display: block;
        }

        .review .review_box{
            width: 95%;
            margin: 70px auto;
            display: flex;
        }

        .review .review_box .review_card{
            width: 350px;
            height: 500px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.5);
            border-radius: 8px;
            padding: 15px 20px;
            margin: 0 8px;
        }

        .review .review_box .review_card .review_profile{
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: 0.3s;
        }

        .review .review_box .review_card:hover .review_profile{
            transform: translateY(-60px);
        }

        .review .review_box .review_card .review_profile img{
            width: 180px;
            height: 180px;
            object-fit: cover;
            object-position: center;
            border-radius: 50%;
            border: 5px solid #cccccc;
        }

        .review .review_box .review_card .review_text{
            text-align: center;
        }

        .review .review_box .review_card .review_text .name{
            color: #000;
            transition: 0.3s;
        }

        .review .review_box .review_card:hover .review_text .name{
            transform: translateY(-50px);
        }

        .review .review_box .review_card .review_text p{
            margin-top: 30px;
            text-align: center;
            line-height: 22px;
            transition: 0.3s;
        }

        .review .review_box .review_card:hover .review_text p{
            margin-top: 10px;
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


    <div class="review" id="Review">
        <h1>Customer<span>Review</span></h1>

        <div class="review_box">
            <div class="review_card">

            <div class="review_profile">
                    <img src="image/review_1.png">
                </div>

                <div class="review_text">
                    <h2 class="name">Ernawati</h2>

                    <p>
                        Saya telah berlangganan di DiabEats dan alhamdulillah saya cocok dengan paket makanannya. 
                        Makanan yang saya beli rasanya enak serta cocok di lidah saya. Terima kasih DiabEats.
                    </p>

                </div>

            </div>

            <div class="review_card">

                <div class="review_profile">
                    <img src="image/review_2.png">
                </div>

                <div class="review_text">
                    <h2 class="name">Margono</h2>
                    <p>
                        Saya telah memesan dan mencoba paket 1 di DiabEats dan makanan yang saya beli ternyata rasanya enak. 
                        Kedepannya mungkin saya akan berlangganan. Terima kasih DiabEats.
                    </p>

                </div>

            </div>

            <div class="review_card">

                <div class="review_profile">
                    <img src="image/review_3.png">
                </div>

                <div class="review_text">
                    <h2 class="name">Dita</h2>

                    <p>
                        Paket yang saya beli yaitu paket 3 rasanya enak dan tidak hambar. 
                        Mungkin saya akan mencoba paket atau menu lain. Terima kasih DiabEats.
                    </p>

                </div>

            </div>

            <div class="review_card">

                <div class="review_profile">
                    <img src="image/review_4.png">
                </div>

                <div class="review_text">
                    <h2 class="name">Dimas</h2>

                    <p>
                        DiabEats ini menunya lumayan bervariasi jadi pembeli dapat mencoba menu berbeda tiap harinya.
                        Saya pribadi sudah mencoba paket 4 dan yogurt berry, semua terasa enak. Terima kasih DiabEats.
                    </p>

                </div>

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