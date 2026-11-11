<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['kasir'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Kasir</title>
</head>
<body>

<h2> KASIR SEKOLAH</h2>

<p>Selamat datang, <?php echo $_SESSION['kasir']; ?></p>

<hr>

<h3>Menu Utama</h3>

<a href="barang.php">Data Barang</a>
<br><br>

<a href="transaksi.php">Transaksi Penjualan</a>
<br><br>

<a href="laporan.php">Laporan Penjualan</a>
<br><br>

<a href="logout.php">Logout</a>

</body>
</html>
