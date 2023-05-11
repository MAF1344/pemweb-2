<?php
require_once 'koneksi.php';

$id = $_GET['iddel'];

$stmt = $dbh->prepare("DELETE FROM pesanan WHERE id=?");
$stmt->execute([$id]);

header('location:daftar_pesanan.php');
