<?php
require_once 'koneksi.php';
?>
<?php
$sql = "SELECT * FROM pesanan";
$rs = $dbh->query($sql);
?>
<?php
$_nama = $_POST['nama'];
$_alamat = $_POST['alamat'];
$_qty = $_POST['qty'];
$_produk = $_POST['produk'];
$_tanggal = $_POST['tanggal'];

if ($_produk === "1") {
    $_total_harga = 1200000 * $_qty;
} elseif ($_produk === "2") {
    $_total_harga = 1500000 * $_qty;
} elseif ($_produk === "3") {
    $_total_harga = 3000000 * $_qty;
} elseif ($_produk === "4") {
    $_total_harga = 2850000 * $_qty;
} elseif ($_produk === "5") {
    $_total_harga = 4100000 * $_qty;
} elseif ($_produk === "6") {
    $_total_harga = 5850000 * $_qty;
} elseif ($_produk === "7") {
    $_total_harga = 500000 * $_qty;
} elseif ($_produk === "8") {
    $_total_harga = 1000000 * $_qty;
} elseif ($_produk === "9") {
    $_total_harga = 1500000 * $_qty;
} elseif ($_produk === "10") {
    $_total_harga = 300000 * $_qty;
} elseif ($_produk === "11") {
    $_total_harga = 250000 * $_qty;
} elseif ($_produk === "12") {
    $_total_harga = 150000 * $_qty;
} elseif ($_produk === "13") {
    $_total_harga = 70000 * $_qty;
} elseif ($_produk === "14") {
    $_total_harga = 50000 * $_qty;
} elseif ($_produk === "15") {
    $_total_harga = 120000 * $_qty;
} else {
    echo "Produk Tidak Tersedia";
}

// $_format_harga = number_format($_total_harga, 0, ',', '.');

$_proses = $_POST['proses'];

$ar_data[] = $_nama;
$ar_data[] = $_alamat;
$ar_data[] = $_qty;
$ar_data[] = $_produk;
$ar_data[] = $_tanggal;
$ar_data[] = $_total_harga;
// $ar_data[] = $_format_harga;




if ($_proses == "Pesan") {
    // data baru
    $sql = "INSERT INTO pesanan (nama,alamat,qty,produk,tanggal,total_harga) VALUES (?,?,?,?,?,?)";
} else if ($_proses == "Update") {
    $ar_data[] = $_POST['idedit'];
    $sql = "UPDATE pesanan SET nama=?,alamat=?,qty=?,produk=?,
    tanggal=?,total_harga=? WHERE id=?";
}
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
};

header("Location: daftar_pesanan.php");
?>