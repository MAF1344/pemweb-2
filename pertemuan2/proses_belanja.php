<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #daftarHarga {
            float: right;
            width: 25%;
            margin-right: 20px;
            margin-top: -3%;
        }

        #form {
            position: relative;
            padding-right: 30%;
        }
    </style>
</head>

<body>
    <h2 class="m-3">Belanja Online</h2>
    <hr class="mr-5">
    <ul class="list-group" id="daftarHarga">
        <li class="list-group-item active">Daftar Harga</li>
        <li class="list-group-item" name="tv">TV : 4.200.000</li>
        <li class="list-group-item" name="kulkas">Kulkas : 3.100.000</li>
        <li class="list-group-item" name="mesinCuci">Mesin Cuci : 3.800.000</li>
        <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
    </ul>
    <form class="m-4" method="POST" action="form_belanja.php" id="form">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukan Nama " type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label>
            <div class="col-8" value="produk">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Televisi" required="required">
                    <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required">
                    <label for="produk_1" class="custom-control-label">KULKAS</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required">
                    <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label" value="jumlah">Jumlah</label>
            <div class="col-8">
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8" value="proses">
                <button name="submit" type="submit" class="btn btn-primary" onclick="submit()">Kirim</button>
            </div>
        </div>
    </form>
    <hr>

    <?php
    if (isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $produk = $_POST["produk"];
        $jumlah = $_POST["jumlah"];
        $tv = 4200000;
        $kulkas = 3100000;
        $mesinCuci = 3800000;

        echo "Nama Customer : $nama <br>";
        echo "Produk Pilihan : $produk <br>";
        echo "Jumlah Beli : $jumlah <br>";
        echo "Total Belanja : ";

        if ($produk == "Televisi") {
            echo $jumlah * $tv;
        } elseif ($produk == "Kulkas") {
            echo $jumlah * $kulkas;
        } elseif ($produk == "Mesin Cuci") {
            echo $jumlah * $mesinCuci;
        }
    }
    ?>
</body>

</html>