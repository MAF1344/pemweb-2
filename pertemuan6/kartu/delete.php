<?php
require_once '../dbkoneksi.php';

// Menangkap data dari URL
$id = $_GET['iddel'];

$dbh->query("DELETE FROM pembelian WHERE id=$id");

header('location:index.php');
