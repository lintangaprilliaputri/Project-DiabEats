<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiabEats</title>
    <link rel="stylesheet" href="styleMain.css">

</head>
<body>

    <section id="Home">
        <nav>
            <div class="logo">
                <img src="image/logo DiabEats.png">
            </div>

            <ul>
                <li><a href="#Home">Beranda</a></li>
                <li><a href="#About">Tentang</a></li>
                <li><a href="#Menu">Menu</a></li>
                <li><a href="#Article">Artikel</a></li>
                <li><a href="#Review">Review</a></li>
                <li><a href="#Order">Pesan</a></li>
            </ul>

            <div class="icon">
                <img src="image/shop.png">
                <img src="image/Profil.png" onclick="toggleMenu()">
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <a href="masukAkun.php" class="sub-menu-link">
                            <h3>Masuk Akun</h3>
                            <span>></span>
                        </a>
                    </div>
                </div>
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
            gaya hidup Anda menjadi lebih aktif dan berenergi. Jangan biarkan diabetes mengendalikan hidup Anda. <br><br>Dengan DiabEats, Anda dapat dengan 
            mudah memesan makanan yang mendukung gaya hidup sehat. <br><br>Ayo pesan sekarang!
        </p>

        <div class="main_btn">
            <a href="masukAkun.php">Pesan Sekarang</a>
            <img src="image/panah kanan.png">
        </div>

    </section>



    <!--About-->

    <div class="about" id="About">
        <div class="about_main">

            <div class="image">
                <img src="image/logo DiabEats2.png">
            </div>

            <div class="about_text">
                <h1><span>Tentang</span>DiabEats</h1>
                <h3>Kenapa Anda Harus Memilih Kami?</h3>
                <p>
                    DiabEats adalah website yang membantu penderita diabetes mellitus dalam menjaga pola hidup yang sehat dengan memberikan 
                    paket menu makanan sehat untuk mengontrol kadar gula darah. Aplikasi DiabEats dibutuhkan karena tidak hanya menyediakan 
                    layanan makanan saja namun juga menyediakan informasi lain yang diperlukan oleh penderita Diabetes Mellitus.
                </p>
            </div>
        </div>
    </div>



    <!--Menu-->

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
            </div>
            <div class="menu_btn">
                <a href="masukAkun.php">Lihat Selengkapnya</a>
                <img src="image/panah kanan.png">
            </div> 
        </div>
    </div>




    <!--Article-->

    <div class="article" id="Article">
        <h1><span>Artikel</span></h1>

        <div class="article_image_box">
            <div class="article_image">
                <img src="image/artikel1.jpg">

                <h3>Mengenal Gejala Diabetes Melitus</h3>
                <p>
                Sebagai salah satu masalah kesehatan yang berbahaya dan banyak ditemukan di tengah masyarakat Indonesia, 
                Diabetes harus mendapatkan penanganan sedini mungkin untuk menghindari berbagai efek yang lebih buruk di kemudian hari...
                </p>
            </div>

            <div class="article_image">
                <img src="image/artikel2.jpg">

                <h3>Tanda dan Gejala Diabetes</h3>
                <p>
                Rasa lapar yang berlebihan, merupakan tanda diabetes lainnya. Ketika kadar gula darah merosot, 
                tubuh mengira belum diberi makan dan lebih menginginkan glukosa yang dibutuhkan sel...
                </p>
            </div>

            <div class="article_image">
                <img src="image/artikel3.png">

                <h3>Manfaat dan Jenis Olahraga yang Cocok untuk Penderita Diabetes</h3>
                <p>
                Diabetes tidak bisa disembuhkan secara total. Namun, penderita diabetes dapat 
                mengendalikan kadar normal gula darah dengan melakoni gaya hidup sehat, salah satunya melalui olahraga...
                </p>
            </div>
            <div class="article_btn">
                <a href="masukAkun.php">Baca Selengkapnya</a>
                <img src="image/panah kanan.png">
            </div> 
        </div>

    </div>


    <!--Review-->

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
                        Saya telah berlangganan di DiabEats dan alhamdulillah saya cocok dengan paket makanannya. 
                        Makanan yang saya beli rasanya enak serta cocok di lidah saya. Terima kasih DiabEats.
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
                        Saya telah berlangganan di DiabEats dan alhamdulillah saya cocok dengan paket makanannya. 
                        Makanan yang saya beli rasanya enak serta cocok di lidah saya. Terima kasih DiabEats.
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
                        Saya telah berlangganan di DiabEats dan alhamdulillah saya cocok dengan paket makanannya. 
                        Makanan yang saya beli rasanya enak serta cocok di lidah saya. Terima kasih DiabEats.
                    </p>

                </div>

            </div>

        </div>

    </div>



    <!--Order-->

    <div class="order" id="Order">
        <h1><span>Pesan</span>Makanan</h1>

        <div class="order_main">

            <div class="order_image">
                <img src="image/pesanmakanan.png">
            </div>

            <form action="#">

                <div class="input">
                    <p>Nama</p>
                    <input type="text" placeholder="Nama">
                </div>

                <div class="input">
                    <p>Email</p>
                    <input type="email" placeholder="email">
                </div>

                <div class="input">
                    <p>Nomor Telepon</p>
                    <input placeholder="Nomor Telepon">
                </div>

                <div class="input">
                    <p>Jumlah</p>
                    <input type="number" placeholder="Jumlah pesan">
                </div>

                <div class="input">
                    <p>Pesanan</p>
                    <input placeholder="Nama Pesanan">
                </div>

                <div class="input">
                    <p>Alamat</p>
                    <input placeholder="Alamat">
                </div>

                <a href="masukAkun.php" class="order_btn">Pesan Sekarang</a>

            </form>

        </div>

    </div>



    <!--Team-->

    <div class="team">
        <h1>Our<span>Team</span></h1>

        <div class="team_box">
            <div class="profile">
                <img src="image/team1.jpg">

                <div class="info">
                    <h2 class="name">Bilqis Aurabillah</h2>
                    <p class="bio"> 
                        <table>
                            <tr>
                                <td>Tempat</td>
                                <td>: Sidoarjo</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>: 15 April 2004</td>
                            </tr>
                            <tr>
                                <td>Hobi</td>
                                <td>: Travelling</td>
                            </tr>
                            <tr>
                                <td>Universitas</td>
                                <td>: UPN Veteran Jatim</td>
                            </tr>
                        </table>
                    </p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i><a href="https://www.instagram.com/bilsarb?igsh=enJhMDBydTJobjdu">bilsarb</a>
                    </div>
                </div>
            </div>

            <div class="profile">
                <img src="image/team2.jpg">

                <div class="info">
                    <h2 class="name">Lintang Aprillia Putri</h2>
                    <p class="bio">
                        <table>
                            <tr>
                                <td>Tempat</td>
                                <td>: Surabaya</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>: 06 April 2004</td>
                            </tr>
                            <tr>
                                <td>Hobi</td>
                                <td>: Memasak</td>
                            </tr>
                            <tr>
                                <td>Universitas</td>
                                <td>: UPN Veteran Jatim</td>
                            </tr>
                        </table>
                    </p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i><a href="https://www.instagram.com/lintangaprilliia?igsh=aTl0NHF4bjl1ZG5z">lintangaprilliia</a>
                    </div>
                </div>
            </div>

            <div class="profile">
                <img src="image/team3.jpg">

                <div class="info">
                    <h2 class="name">Novia Citra Fadhlilla</h2>
                    <p class="bio">
                        <table>
                            <tr>
                                <td>Tempat</td>
                                <td>: Grobogan</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>: 15 November 2003</td>
                            </tr>
                            <tr>
                                <td>Hobi</td>
                                <td>: Mengaji</td>
                            </tr>
                            <tr>
                                <td>Universitas</td>
                                <td>: UPN Veteran Jatim</td>
                            </tr>
                        </table>
                    </p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i><a href="https://www.instagram.com/noviacitraf__?igsh=MTF5cXhnMmdteHNjMg==">noviacitraf__</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="footer_tag">
                <h2>Quick Link</h2>
                <p>Beranda</p>
                <p>Tentang</p>
                <p>Menu</p>
                <p>Artikel</p>
                <p>Review</p>
                <p>Pesan</p>
            </div>

            <div class="footer_tag">
                <h2>Contact</h2>
                <p>+6281357188845</p>
                <p>diabeats@gmail.com</p>
                <p>bilqisbillah@gmail.com</p>
            </div>

            <div class="footer_tag">
                <h2>Our Service</h2>
                <p>Pengiriman Cepat</p>
                <p>Pembayaran Mudah</p>
                <p>Layanan 12 Jam</p>
            </div>

            <div class="footer_tag">
                <h2>Follows</h2>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>

        </div>

        <p class="end">Hak Cipta<span> kelompok 8</span></p>

    </footer>
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>
</html>