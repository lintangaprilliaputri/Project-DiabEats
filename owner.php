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
$query = "SELECT idpesanan, produk, harga, jumlah, total, tipe, nama_user, email, notelp, alamat FROM tb_pesanan";
$result = mysqli_query($conn, $query);

$pesanan_data = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $pesanan_data[] = $row;
    }
}

// Mengambil data untuk grafik
$query_chart = "SELECT produk, SUM(jumlah) as jumlah FROM tb_pesanan GROUP BY produk";
$result_chart = mysqli_query($conn, $query_chart);

$chart_data = array();

if (mysqli_num_rows($result_chart) > 0) {
    while ($row = mysqli_fetch_assoc($result_chart)) {
        $chart_data[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Owner</title>
    <link rel="stylesheet" href="styleAdmin.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<section>
    <nav>
        <div class="logo">
            <img src="image/logo DiabEats.png">
        </div>
        
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
    <h1>Selamat Datang <?php echo htmlspecialchars($nama_pengguna); ?></h1>
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
            // Mendapatkan data pesanan dari PHP dan mengubahnya menjadi format JavaScript
            var pesananData = <?php echo json_encode($chart_data); ?>;
            console.log(pesananData); // Debug: cek data di konsol

            if (pesananData.length > 0) {
                // Mengambil label produk dari data pesanan
                var produkLabels = pesananData.map(function(e) {
                    return e.produk;
                });
                // Mengambil jumlah pesanan dari data pesanan
                var jumlahData = pesananData.map(function(e) {
                    return e.jumlah;
                });

                // Membuat chart menggunakan Chart.js
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

                // Fungsi untuk memperbarui data chart
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

                // Mengambil data baru dari server dan memperbarui chart
                function fetchNewData() {
                    fetch('get_updated_data.php')
                        .then(response => response.json())
                        .then(newData => {
                            updateChart(newData);
                        })
                        .catch(error => console.error('Error fetching data:', error));
                }

                // Memperbarui data chart setiap 10 detik
                setInterval(fetchNewData, 10000); // Memperbarui data chart setiap 10 detik
            } else {
                console.error('Tidak ada data untuk ditampilkan di grafik');
            }
        });
    </script>

    <div class="container mt-5">
        <h1 class="mb-4">Data Pesanan</h1>
        <a href="pesananPDF.php" target="_blank" class="btn btn-success"> PRINT LAPORAN</a>
        
        <!-- Tabel Bootstrap -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID Pesanan</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Tipe</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>No Telp</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($pesanan_data)) { ?>
                    <?php foreach($pesanan_data as $pesanan) { ?>
                        <tr>
                            <td><?php echo $pesanan['idpesanan']; ?></td>
                            <td><?php echo $pesanan['produk']; ?></td>
                            <td><?php echo $pesanan['harga']; ?></td>
                            <td><?php echo $pesanan['jumlah']; ?></td>
                            <td><?php echo $pesanan['total']; ?></td>
                            <td><?php echo $pesanan['tipe']; ?></td>
                            <td><?php echo $pesanan['nama_user']; ?></td>
                            <td><?php echo $pesanan['email']; ?></td>
                            <td><?php echo $pesanan['notelp']; ?></td>
                            <td><?php echo $pesanan['alamat']; ?></td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="10" class="text-center">Tidak ada data</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <script>
        let subMenu = document.getElementById("subMenu");
        
        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>
    </div>

</body>
</html>