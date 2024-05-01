<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
    <div class="wrapper">
        <h1>Login</h1>
        <form action="" method="post">
            <div class="input-box">
                <input type="text" placeholder="Username" required name="User">
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" required name="Pass">
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> Ingatkan saya</label> 
                <a href="#">Lupa Kata Sandi?</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Belum memiliki akun?
                <a href="#">Daftar</a></p>
            </div>
        </form>
    </div>
    <?php
        session_start();
        $user = 'bils';
        $pw = 'bils';
        
        // Apabila telah login namun admin ingin kembali ke index.php tanpa logout, maka akses tidak dapat diakses, admin harus melakukan logout terlebih dahulu
        if (isset($_SESSION['user'])) {
            header("location:admin.php");
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
                header("location:admin.php");?>
                <?php
                } else {
                    echo 'user/password Tidak Sesuai';
                    return false;
                }
            }   
        ?>

</body>
</html>
