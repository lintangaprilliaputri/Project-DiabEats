<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <!-- Required meta tags -->
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"href="bootstrap\css\bootstrap.css">
</head>
<body>
<div class="container pt-3">
    <div class="alert alert-info text-center" role="alert" > 
        <h2>DATA PRODUK</h2>
    </div>
    <h1 class="ml-5">Tambah Produk</h1>
    <form method="post" action="prosestambahproduk.php" class="ml-5">
    <div class="form-group row">
        <label for="nama" class="col-sm-1 col-form-label">Nama Produk</label>
        <div class="col-sm-3">
            <input type="text" name="nama" class="form-control" placeholder="Nama Produk">
        </div>
    </div>
    <div class="form-group row">
        <label for="harga" class="col-sm-1 col-form-label">Harga</label>
        <div class="col-sm-3">
            <input type="number" name="harga" class="form-control" placeholder="Harga Produk">
        </div>
    </div>
    <div class="form-group row">
        <label for="stok" class="col-sm-1 col-form-label">Stok</label>
        <div class="col-sm-3">
            <input type="number" name="stok" class="form-control" placeholder="Stok">
        </div>
    </div>
    <div class="form-group row">
        <label for="satuan" class="col-sm-1 col-form-label">Satuan</label>
        <div class="col-sm-3">
            <input type="text" name="satuan" class="form-control" placeholder="Satuan">
        </div>
    </div>
    <button type="submit" class="btn btn-danger mb-1mt-1 ml-0 mr-0" >Kirim</button>
    <a href="stokproduk.php" class="btn btn-danger mb-1 mt-1ml-0"><i class="fas fa-user-plus mr-0"></i>Kembali</a>
    </form>
</div>
</body>
</html>