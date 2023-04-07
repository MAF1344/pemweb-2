<?php
require_once '../dbkoneksi.php';

$sql = "SELECT DISTINCT vendor.*, pembelian.vendor_id as is_pembelian FROM vendor LEFT JOIN pembelian ON vendor.id = pembelian.vendor_id";
$rs = $dbh->query($sql);
?>

<a class="btn btn-success m-2" href="create.php" role="button">Tambah Vendor</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>ID</th>
            <th>nomor</th>
            <th>Nama</th>
            <th>Kota</th>
            <th>Kota</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor  = 1;
        foreach ($rs as $row) {
        ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $row['kode'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['diskon'] ?></td>
                <td><?= $row['iuran'] ?></td>
                <td>
                    <a class="btn btn-primary" href="view.php?id=<?= $row['id'] ?>">View</a>
                    <a class="btn btn-primary" href="edit.php?idedit=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-primary <?= $row['is_pelanggan'] ? 'disabled' : '' ?>" href="delete.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                </td>
            </tr>
        <?php
            $nomor++;
        }
        ?>
    </tbody>
</table>