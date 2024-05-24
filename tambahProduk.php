<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <!-- Required meta tags -->
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"crossorigin="anonymous">
</head>
<body>
    <div class="alert alert-info text-center" role="alert" > 
        <h2>DATA PRODUK</h2>
    </div>
    <h1 class="ml-5">Tambah Produk</h1>
    <form method="post" action="prosestambahlagu.php" class="ml-5">
    <div class="form-group row">
        <label for="id_produk" class="col-sm-1 col-form-label">ID Produk</label>
        <div class="col-sm-3">
            <input type="text" name="id_produk" class="form-control" placeholder="ID Produk">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama_produk" class="col-sm-1 col-form-label">Nama Produk</label>
        <div class="col-sm-3">
            <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk">
        </div>
    </div>
    <div class="form-group row">
        <label for="kategori" class="col-sm-1 col-form-label">Kategori</label>
        <div class="col-sm-3">
            <input type="text" name="kategori" class="form-control" placeholder="Kategori">
        </div>
    </div>
    <div class="form-group row">
        <label for="harga_produk" class="col-sm-1 col-form-label">Harga</label>
        <div class="col-sm-3">
            <input type="number" name="harga_produk" class="form-control" placeholder="Harga Produk">
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
    <a href="index.php" class="btn btn-danger mb-1 mt-1ml-0"><i class="fas fa-user-plus mr-0"></i>Koleksi Lagu</a>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"crossorigin="anonymous"></script>

</body>
</html>