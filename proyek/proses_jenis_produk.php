<?php
require_once 'koneksi.php';
?>
<?php
$sql = "SELECT * FROM jenis_produk";
$rs = $dbh->query($sql);
?>
<?php
$_nama = $_POST['nama'];

$_proses = $_POST['proses'];

$ar_data[] = $_nama;




if ($_proses == "Submit") {
    // data baru
    $sql = "INSERT INTO jenis_produk (nama) VALUES (?)";
} else if ($_proses == "Update") {
    $ar_data[] = $_POST['idedit'];
    $sql = "UPDATE jenis_produk SET nama=? WHERE id=?";
}
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

header('location:daftar_jenis_produk.php');
?>