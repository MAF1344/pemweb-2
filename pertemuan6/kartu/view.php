<?php
require_once '../dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
$sql = "SELECT * FROM kartu WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>

<table class="table table-striped">
    <tbody>
        <tr>
            <td>Kode</td>
            <td>:<?= $row['kode'] ?></td>
        </tr>
        <tr>
            <td>Nama Kartu</td>
            <td>:<?= $row['nama'] ?></td>
        </tr>
        <tr>
            <td>Diskon</td>
            <td>:<?= $row['diskon'] ?></td>
        </tr>
        <tr>
            <td>Iuran</td>
            <td>:<?= $row['iuran'] ?></td>
        </tr>
    </tbody>
</table>