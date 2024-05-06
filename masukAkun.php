<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Akun</title>
    <link rel="stylesheet" href="styleLogin.css">
    <style> 
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url(image/bg1.png);
            background-size: cover;
            background-position: center;
        }

        .wrapper {
            width: 420px;
            background: #bd0505;
            color: #fff;
            border-radius: 10px;
            padding: 30px 40px;
        }

        .wrapper h1 {
            font-size: 36px;
            text-align: center;
        }

        .wrapper .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            background: #bd0505;
            margin: 30px 0;
        }

        .input-box input {
            width: 100%;
            height: 60%;
            background: white;
            border: none;
            outline: none;
            border: 2px solid #000;
            border-radius: 10px;
            font-size: 16px;
            color: #000000;
            padding: 20px 45px 20px 20px;
        }

        .inputbox input::placeholder {
            color: #fff;
        }

        .wrapper .remember-forgot {
            display: flex;
            justify-content: space-between;
            font-size: 14.5px;
            margin: -15px 0 15px;

        }

        .remember-forgot label input {
            accent-color: fff;
            margin-right: 3px; 
        }

        .remember-forgot a {
            color: #fff;
            text-decoration: none;
        }

        .remember-forgot a:hover {
            text-decoration: underline;
        }

        .wrapper .btn {
            width: 100%;
            height: 35px;
            background: #fff;
            border: none;
            outline: none;
            border-radius: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            font-size: 16px;
            color: #333;
            font-weight: 600;
        }

        .wrapper .register-link {
            font-size: 14.5px;
            text-align: center;
            margin-top: 20px;
        }

        .register-link p a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1>Masuk Akun</h1>
        <form action="" method="post">
            <div class="input-box">
            <span class="details">Username</span>
                <input type="text" placeholder="Masukkan username" required name="User">
            </div>

            <div class="input-box">
            <span class="details">Password</span>
                <input type="password" placeholder="Masukkan password" required name="Pass">
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> Ingatkan saya</label> 
                <a href="#">Lupa Kata Sandi?</a>
            </div>

            <button type="submit" class="btn">Masuk</button>

            <div class="register-link">
                <p>Belum memiliki akun?
                <a href="daftarAkun.php">Daftar</a></p>
            </div>
        </form>
    </div>
    <?php
        session_start();
        $user = 'bils';
        $pw = 'bils';
        
        // Apabila telah login namun admin ingin kembali ke index.php tanpa logout, maka akses tidak dapat diakses, admin harus melakukan logout terlebih dahulu
        if (isset($_SESSION['user'])) {
            header("location:pelanggan.php");
            exit;
        }

        if (isset($_POST['User']) && isset($_POST['Pass'])) {
            $U = trim($_POST['User']);
            $P = trim($_POST['Pass']);

            $_SESSION['user'] = $_POST['User'];
            if ( ($U === $user) && ($P === $pw) ) {
                // Set Session Login
                $_SESSION['user'] = $_POST['User'];

                //Apabila login berhasil, maka diarahkan ke admin.php
                header("location:pelanggan.php");?>
                <?php
                } else {
                    echo 'user/password Tidak Sesuai';
                    return false;
                }
            }   
        ?>

</body>
</html>
