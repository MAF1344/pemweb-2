<?php
require_once '../dbkoneksi.php';

// Menangkap data dari URL
$id = $_GET['iddel'];

$dbh->query("DELETE FROM kartu WHERE id=$id");

header('location:index.php');
