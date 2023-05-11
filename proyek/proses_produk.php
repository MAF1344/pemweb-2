<?php
require_once 'koneksi.php';
?>
<?php
$sql = "SELECT * FROM produk";
$rs = $dbh->query($sql);
?>
<?php
$_nama = $_POST['nama'];
$_harga = $_POST['harga'];
$_stok = $_POST['stok'];
$_merk = $_POST['merk'];
$_jenis_produk = $_POST['jenis_produk'];
$_status = $_POST['status'];
$_deskripsi = $_POST['deskripsi'];

$_proses = $_POST['proses'];

$ar_data[] = $_nama;
$ar_data[] = $_harga;
$ar_data[] = $_stok;
$ar_data[] = $_merk;
$ar_data[] = $_jenis_produk;
$ar_data[] = $_status;
$ar_data[] = $_deskripsi;

if ($_proses == "Submit") {
    // data baru
    $sql = "INSERT INTO produk (nama,harga,stok,merk,idjenis,status,deskripsi) VALUES (?,?,?,?,?,?,?)";
} else if ($_proses == "Update") {
    $ar_data[] = $_POST['idedit'];
    $sql = "UPDATE produk SET nama=?,harga=?,stok=?,merk=?,idjenis=?,status=?,deskripsi=? WHERE id=?";
}
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

header('location:index_admin.php');
?>