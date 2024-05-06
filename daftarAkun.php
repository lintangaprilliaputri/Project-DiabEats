<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <style>
        *{
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
            width: 750px;
            background: #bd0505;
            color: #fff;
            border-radius: 10px;
            padding: 40px 35px 40px;
            margin: 0 10px;
        }

        .wrapper h1 {
            font-size: 36px;
            text-align: center;
            margin-bottom: 20px;
        }

        .wrapper .input-box {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            background: #bd0505;
        }

        .input-box .input-field {
            position: relative;
            width: 48%;
            height: 43px;
            margin: 15px 0;
        }

        .input-box .input-field input {
            width: 100%;
            height: 100%;
            background-color: white;
            border: 2px solid #000;
            border-radius: 10px;
            outline: none;
            font-size: 16px;
            color: #000000;
            padding: 15px 15px 15px 10px;

        }

        .inputbox .input-field input::placeholder {
            color: #fff;
        }

        .wrapper .btn {
            width: 50%;
            height: 40px;
            margin-left: 25%;
            margin-top: 30px;
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

        .wrapper .login-link {
            font-size: 14.5px;
            text-align: center;
            margin-top: 10px;
        }

        .login-link p a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link p a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
<div class="wrapper">
    <form action="" method="post">
        <h1>Daftar Akun</h1>

        <div class="input-box">
            <div class="input-field">
                <span class="details">Nama Lengkap</span>
                <input type="text" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="input-field">
            <span class="details">Email</span>
                <input type="email" placeholder="Masukkan email" required>
            </div>
        </div>

        <div class="input-box">
            <div class="input-field">
            <span class="details">Nomor Telepon</span>
                <input type="number" placeholder="Masukkan nomor telepon" required>
            </div>

            <div class="input-field">
            <span class="details">Alamat</span>
                <input type="text" placeholder="Masukkan alamat lengkap" required>
            </div>
        </div>

        <div class="input-box">
            <div class="input-field">
            <span class="details">Username</span>
                <input type="text" placeholder="Masukkan username" required>
            </div>

            <div class="input-field">
            <span class="details">Password</span>
                <input type="password" placeholder="Masukkan password" required>
            </div>
        </div>

        <button type="submit" class="btn">Daftar</button>

        <div class="login-link">
                <p>Sudah memiliki akun?
                <a href="masukAkun.php">Masuk Akun</a></p>
            </div>

        
    </form>
</div>