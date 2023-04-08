<?php
require_once '../dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
$sql = "SELECT * FROM pembelian WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>

<table class="table table-striped">
    <tbody>
        <tr>
            <td>Tanggal</td>
            <td>:<?= $row['tanggal'] ?></td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td>:<?= $row['nomor'] ?></td>
        </tr>
        <tr>
            <td>Produk ID</td>
            <td>:<?= $row['produk_id'] ?></td>
        </tr>
        <tr>
            <td>jumlah</td>
            <td>:<?= $row['jumlah'] ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:<?= $row['harga'] ?></td>
        </tr>
        <tr>
            <td>Iuran</td>
            <td>:<?= $row['vendor_id'] ?></td>
        </tr>
    </tbody>
</table>