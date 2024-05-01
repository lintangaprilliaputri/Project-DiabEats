<?php
session_start(); //memulai sesi

defined('_VALID') or die('not allowed');

function init_login() {
    // Simulasi data account nama dan password
    $nama = 'bils';
    $pass = 'bils';
    
    if (isset($_POST['nama']) && isset($_POST['pass'])) {
        $n = trim($_POST['nama']);
        $p = trim($_POST['pass']);

        if ( ($n === $nama) && ($p === $pass) ) {
            $_SESSION['nlogin'] = $n; // set session 'nlogin' 
            $_SESSION['time'] = time(); // set session 'time' 
            header("Location: index.php"); // Redirect ke halaman admin setelah login berhasil
            exit();

        } else {
            echo 'Nama/Password Tidak Sesuai';
            return false;
        }
    }
}

function validate() {
    if (!isset($_SESSION['nlogin']) || !isset($_SESSION['time']) ) { //jika tidak set session
        ?>
        <div class="inner">
            <form action="" method="post">
                <table border=0 cellpadding=5>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" /></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pass" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="LOGIN" /></td>
                    </tr>
                </table>
            </form>
        </div>
        <?php
        exit;
    }
    
    if (isset($_GET['m']) && $_GET['m'] == 'logout') {
        session_unset(); // Hapus semua variabel sesi
        session_destroy(); // Hapus seluruh sesi
        header('Location: ./');
        exit();
        
    }
}
?>
