<?php
require_once 'koneksi.php';

$id = $_GET['iddel'];

$stmt = $dbh->prepare("DELETE FROM jenis_produk WHERE id=?");
$stmt->execute([$id]);

header('location:daftar_jenis_produk.php');
