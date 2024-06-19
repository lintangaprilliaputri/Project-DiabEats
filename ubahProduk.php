<?php
include_once("koneksi.php");
$id=$_GET['id'];
$query="SELECT * FROM tb_stokproduk WHERE idbarang=" . $id;
$hasil=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Produk</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"href="bootstrap\css\bootstrap.css">
</head>
<body>
<div class="container pt-3">
<div class="alert alert-info text-center" role="alert" > 
        <h2>DATA PRODUK</h2>
    </div>
    <h1 class="text-center">Ubah Produk</h1>
    <form method="post" action="prosesubahproduk.php" class="text-center">
    <?php while ($data=mysqli_fetch_array($hasil)) { ?>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <div class="form-group row">
        <label for="nama" class="col-sm-1 col-form-label">Nama Produk</label>
        <div class="col-sm-3">
            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="harga" class="col-sm-1 col-form-label">Harga</label>
        <div class="col-sm-3">
            <input type="number" name="harga" class="form-control" value="<?php echo $data['harga'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="stok" class="col-sm-1 col-form-label">Stok</label>
        <div class="col-sm-3">
            <input type="number" name="stok" class="form-control" value="<?php echo $data['stok'] ?>">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-1 mt-1 ml-0mr-0" >Kirim</button>
    <a href="stokproduk.php" class="btn btn-primary mb-1 mt-1 ml-0"><i class="fas fa-user-plus mr-0"></i>Kembali</a>
    </form>
    <?php } ?>
</div>
</body>
</html>