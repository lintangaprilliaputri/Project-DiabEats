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

        .menu{
            width: 100%;
            padding: 70px 0;
        }

        .menu h1{
            font-size: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }

        .menu h1 span{
            color: #bd0505;
            margin-left: 15px;
            font-family: mv boli;
        }

        .menu h1 span::after{
            content: '';
            width: 100%;
            height: 2px;
            background: #bd0505;
            display: block;
            position: relative;
            bottom: 15px;
        }

        .menu .menu_box{
            width: 95%;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-gap: 15px;
        }

        .menu .menu_box .menu_card{
            width: 325px;
            height: 480px;
            padding-top: 10px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        .menu .menu_box .menu_card .menu_image{
            width: 300px;
            height: 245px;
            margin: 0 auto;
            overflow: hidden;
        }

        .menu .menu_box .menu_card .menu_image img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: 0.3s;
        }

        .menu .menu_box .menu_card .menu_image:hover img{
            transform: scale(1.1);
        }

        .menu .menu_box .menu_card .small_card{
            width: 45px;
            height: 45px;
            float: right;
            position: relative;
            top: -240px;
            right: -8px;
            opacity: 0;
            border-radius: 7px;
            transition: 0.3s;
        }

        .menu .menu_box .menu_card:hover .small_card{
            position: relative;
            top: -240px;
            right: 20px;
            opacity: 1;
        }

        .menu .menu_box .menu_card .small_card i{
            font-size: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            line-height: 50px;
            color: #000;
            cursor: pointer;
            text-shadow: 0 0 6px #000;
            transition: 0.2s;
        }

        .menu .menu_box .menu_card .small_card i:hover{
            color: #bd0505;
        }

        .menu .menu_box .menu_card .menu_info h2{
            width: 80%;
            text-align: center;
            margin: 35px auto 10px auto;
            font-size: 25px;
            color: #bd0505;
        }

        .menu .menu_box .menu_card .menu_info p{
            text-align: center;
            margin: 8px 10px 15px 10px;
            line-height: 21px;
        }

        .menu .menu_box .menu_card .menu_info h3{
            text-align: center;
            margin-top: 10px;
        }

        .menu .menu_box .menu_card .menu_info .menu_icon{
            color: #bd0505;
            text-align: center;
            margin: 10px 0 10px 0;
        }

        .menu_btn{
            padding: 5px;
            width: fit-content;
            justify-content: center;
            position: relative;
            text-decoration: none;
            color: white;
            background: #bd0505;
            margin-left: 80px;
            transition: ease 0.30s;
        }

        .menu_btn a{
            justify-content: center;
            text-align: center;
            text-decoration: none;
            color: white;
        }
        .menu_btn:hover {
            transform: scale(1.2);
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
            <img src="image/Shop.png">
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
    </section>

    <div class="menu" id="Menu">
        <h1>Our<span>Menu</span></h1>

        <div class="menu_box">
            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/paket1.png">
                </div>

                <div class="menu_info">
                    <h2>Paket 1</h2>
                    <p>
                        Salad sayur dengan campuran telur rebus serta edamame dan almond yang lezat
                    </p>
                    <h3>Rp 45.000</h3>
                </div>

                <div class="menu_btn">
                    <a href="#">Masukkan Keranjang</a>
                </div>
            </div> 
            
            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/paket2.png">
                </div>

                <div class="menu_info">
                    <h2>Paket 2</h2>
                    <p>
                        Mie goreng dengan topping chicken pop dan jus apel yang segar
                    </p>
                    <h3>Rp 25.000</h3>
                </div>

                <div class="menu_btn">
                    <a href="#">Masukkan Keranjang</a>
                </div>
            </div> 

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/paket3.png">
                </div>

                <div class="menu_info">
                    <h2>Paket 3</h2>
                    <p>
                        Omelet tahu sayur yang gurih dan enak dengan porsi yang mengenyangkan
                    </p>
                    <h3>Rp 20.000</h3>
                </div>

                <div class="menu_btn">
                    <a href="#">Masukkan Keranjang</a>
                </div>
            </div> 

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/paket4.png">
                </div>

                <div class="menu_info">
                    <h2>Paket 4</h2>
                    <p>
                        Sayur lodeh dengan kentang rebus serta bubur kacang merah
                    </p>
                    <h3>Rp 40.000</h3>
                </div>

                <div class="menu_btn">
                    <a href="#">Masukkan Keranjang</a>
                </div>
            </div>
            
            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/buburkacang.png">
                </div>

                <div class="menu_info">
                    <h2>Bubur Kacang Merah</h2>
                    <p>
                        Bubur dengan bahan dasar kacang merah tinggi serat
                    </p>
                    <h3>Rp 10.000</h3>
                </div>

                <div class="menu_btn">
                    <a href="#">Masukkan Keranjang</a>
                </div>
            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/pudding.png">
                </div>

                <div class="menu_info">
                    <h2>Pudding Jagung </h2>
                    <p>
                        Pudding jagung rendah kandungan glikemik
                    </p>
                    <h3>Rp 7.000</h3>
                </div>

                <div class="menu_btn">
                    <a href="#">Masukkan Keranjang</a>
                </div>
            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/yogurt.png">
                </div>

                <div class="menu_info">
                    <h2>Yogurt berry</h2>
                    <p>
                        Yogurt dengan topping strawberry dan blueberry
                    </p>
                    <h3>Rp 12.000</h3>
                </div>

                <div class="menu_btn">
                    <a href="#">Masukkan Keranjang</a>
                </div>
            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/susu.png">
                </div>

                <div class="menu_info">
                    <h2>Susu</h2>
                    <p>
                        Susu dengan kandungan lemak yang rendah
                    </p>
                    <h3>Rp 50.000</h3>
                </div>

                <div class="menu_btn">
                    <a href="#">Masukkan Keranjang</a>
                </div>
            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/kombucha.png">
                </div>

                <div class="menu_info">
                    <h2>Kombucha</h2>
                    <p>
                        Teh fermentasi yang mengandung berbagai zat baik
                    </p>
                    <h3>Rp 40.000</h3>
                </div>

                <div class="menu_btn">
                    <a href="#">Masukkan Keranjang</a>
                </div>
            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/infusedwater.png">
                </div>

                <div class="menu_info">
                    <h2>Infused Water</h2>
                    <p>
                        Air mineral dengan rendaman buah, sayur, atau rempah-rempah 
                    </p>
                    <h3>Rp 40.000</h3>
                </div>

                <div class="menu_btn">
                    <a href="#">Masukkan Keranjang</a>
                </div>
            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/jusjeruk.png">
                </div>

                <div class="menu_info">
                    <h2>Jus Apel </h2>
                    <p>
                        Jus apel yang mengandung beberapa antioksidan
                    </p>
                    <h3>Rp 40.000</h3>
                </div>

                <div class="menu_btn">
                    <a href="#">Masukkan Keranjang</a>
                </div>
            </div>

            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/jusalpukat.png">
                </div>

                <div class="menu_info">
                    <h2>Smoothies</h2>
                    <p>
                        Smoothies dengan kandungan bayam dan apel
                    </p>
                    <h3>Rp 40.000</h3>
                </div>

                <div class="menu_btn">
                    <a href="#">Masukkan Keranjang</a>
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