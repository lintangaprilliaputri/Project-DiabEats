<?php
include_once ("koneksi.php");
session_start();
$nama_pengguna = "";

// Apabila langsung mengakses admin.php tanpa login, maka akan diarahkan ke login.php untuk login terlebih dahulu
if (isset($_SESSION['login'])) {
    // Jika pengguna sudah login, dapatkan nama pengguna dari $_SESSION['nama']
    $username = $_SESSION['login'];
    // Lakukan query SQL untuk mendapatkan nama dari pengguna dengan username yang sesuai
    $query = "SELECT nama FROM tb_akun WHERE username = '$username'";
    $hasil = mysqli_query($conn, $query);

    // Periksa apakah query berhasil dieksekusi
    if ($hasil) {
        // Ambil hasil query
        $row = mysqli_fetch_assoc($hasil);
        $nama_pengguna = $row['nama'];
    } else {
        // Jika query gagal, tampilkan pesan error
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Menuju login.php jika pengguna belum login
    header("location:masukAkun.php");
    exit; // Keluar dari skrip
}

// Mengambil data pesanan dari database
$query = "SELECT produk, SUM(jumlah) as jumlah FROM tb_pesanan GROUP BY produk";
$result = mysqli_query($conn, $query);

$pesanan_data = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $pesanan_data[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
    <link rel="stylesheet" href="styleAdmin.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="Chartjs/Chart.js"></script>
</head>
<body>
<section>
        <nav>
            <div class="logo">
                <img src="image/logo DiabEats.png">
            </div>

            <ul>
                <li><a href="BerandaAdm.php">Beranda</a></li>
                <li><a href="admin.php">Pesanan</a></li>
                <li><a href="StokProduk.php">Stok Produk</a></li>
            </ul>
            <div class="icon">
                <img src="image/Profil.png" onclick="toggleMenu()">
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <a href="index.php" class="sub-menu-link">
                            <h3>Keluar</h3>
                            <span>></span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

    </section>
    <br><br><br><br>
    <div class="main">
        <h1>Selamat Datang <?php echo $nama_pengguna; ?></h1>
    </div>

    <div class="container mt-5">
        <h1 class="mb-4">Data Pesanan</h1>

        <!-- Chart -->
        <div style="width: 800px; margin: 0 auto;">
            <canvas id="pesananChart" width="400" height="200"></canvas>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var ctx = document.getElementById('pesananChart').getContext('2d');
                var pesananData = <?php echo json_encode($pesanan_data); ?>;
                var produkLabels = pesananData.map(function(e) {
                    return e.produk;
                });
                var jumlahData = pesananData.map(function(e) {
                    return e.jumlah;
                });

                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: produkLabels,
                        datasets: [{
                            label: 'Jumlah Pesanan',
                            data: jumlahData,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Function to update chart data
                function updateChart(newData) {
                    var produkLabels = newData.map(function(e) {
                        return e.produk;
                    });
                    var jumlahData = newData.map(function(e) {
                        return e.jumlah;
                    });

                    chart.data.labels = produkLabels;
                    chart.data.datasets[0].data = jumlahData;
                    chart.update();
                }

                // Fetch new data from the server and update the chart
                function fetchNewData() {
                    fetch('get_updated_data.php')
                        .then(response => response.json())
                        .then(newData => {
                            updateChart(newData);
                        })
                        .catch(error => console.error('Error fetching data:', error));
                }

                // Update chart data every 10 seconds
                setInterval(fetchNewData, 10000); // Update chart data every 10 seconds
            });
        </script>
    </div>
</body>
</html>