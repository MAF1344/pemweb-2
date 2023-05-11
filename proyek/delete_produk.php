<?php
require_once 'koneksi.php';

$id = $_GET['iddel'];

$stmt = $dbh->prepare("DELETE FROM produk WHERE id=?");
$stmt->execute([$id]);

header('location:index_admin.php');
