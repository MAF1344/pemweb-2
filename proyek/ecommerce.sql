-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 08:49 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id`, `nama`) VALUES
(1, 'Televisi'),
(2, 'kulkas'),
(3, 'kipas'),
(4, 'setrika'),
(5, 'terminal');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `qty` int(11) NOT NULL,
  `produk` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `total_harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `alamat`, `qty`, `produk`, `tanggal`, `total_harga`) VALUES
(53, 'Fatih', 'Depok', 5, 9, '2023-05-12 05:21:00', 7500000),
(54, 'Budi', 'Cilodong', 3, 1, '2023-05-12 05:22:00', 3600000),
(55, 'Rudi', 'Surabaya', 2, 12, '2023-04-12 07:49:00', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(11) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `idjenis` int(11) NOT NULL,
  `status` enum('Baru','Bekas') NOT NULL,
  `deskripsi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `stok`, `merk`, `idjenis`, `status`, `deskripsi`) VALUES
(1, 'TV 24 inci', 1200000, 10, 'SHARP', 1, 'Baru', 'Televisi dari brand SHARP dengan lebar 24 inci didukung dengan resolusi 4K dan panel OLED yang dapat memanjakan mata penontonnya'),
(2, 'TV 32 inci', 1500000, 15, 'Aquos', 1, 'Bekas', 'TV dengan lebar 32 inci dari Aquos yang sudah mendukung port HDMI dan juga terdapat 3 port USB A dan sudah memiliki fitur smart TV yang dapat dihubungkan ke internet secara langsung'),
(3, 'TV 40 inci ', 3000000, 5, 'Polytron', 1, 'Baru', 'Televisi keluaran brand Polytron terbaru dengan lebar 40 inci yang dapat ditonton dengan nyaman bersama keluarga yang sudah dilengkapi dengan resolusi 4K dan juga layar oled dengan akurasi warna 100% agar semakin nyaman dilihat mata anda'),
(4, 'Kulkas 100 Liter', 2850000, 16, 'Polytron', 2, 'Bekas', 'Kulkas single door dari Polytron dengan kapasitas 100 Liter yang sudah dilengkapi dengan freezer super dingin yang dapat mencapai suhu 0 derajat celcius'),
(5, 'Kulkas 200 Liter', 4100000, 21, 'SHARP', 2, 'Baru', 'Kulkas keluaran brand SHARP semi double door  yang sudah memiliki kapasitas 200 Liter dapat menampung kebutuhan pangan untuk satu keluarga dilengkapi dengan fitur penguncian dengan sidik jari agar tidak sembarang dibuka oleh anak anak'),
(6, 'Kulkas 300 Liter', 5850000, 3, 'SANKEN', 2, 'Bekas', 'Kulkas edisi terbatas dari Sanken yang sudah memiliki kapasitas super besar 300 Liter yang dapat menampung kebetuhan bahan banyak makanan dan minuman anda, dilengkapi dengan freezer yang juga berkapasitas sebesar 50 Liter yang dapat membekukan minuman anda hanya dalam waktu 30 menit'),
(7, 'Kipas Dinding(Wall Fan)', 500000, 11, 'COSMOS', 3, 'Baru', 'Kipas keluaran brand Cosmos yang dapat diletakan pada dinding rumah anda dengan sangat mudah yang sudah memiliki kecepatan 2000 RPM'),
(8, 'Kipas Berdiri(Stand Fan)', 1000000, 8, 'SANYO', 3, 'Bekas', 'Kipas yang sudah memiliki kecepatan 2500 RPM dari SANYO yang dapat diletakan dilantai cocok untuk menyejukan ruang keluarga, meski memiliki kecepatan yang tinggi namun kipas ini sangat hemat listrik dan ekonomis '),
(9, 'Kipas + AC', 1500000, 10, 'MASPION', 3, 'Baru', 'Kipas yang juga menjadi Air Conditioner karena sudah dilengkapi dengan penyejuk tambahan yang dapat anda isi ulang dengan es batu. Tidak hanya itu kipas ini juga ramah lingkungan karena setengah bahan pembuatannya menggunakan bahan yang dapat didaur ulang dan tidak lupa kipas ini juga tidak menggunakan banyak listrik dan ekonomiis juga memiliki mobilitas yang tinggi sehingga sangat mudah dibawa bawa'),
(10, 'Setrika Listrik Ceramic HD1173', 300000, 23, 'PHILIPS', 4, 'Bekas', 'Setrika Listrik Ceramic seri HD1173 dari brand Philips yang hanya menggunakan listrik sebesar 350 watt yang dapat merapihkan pakaian anda dalam waktu singkat'),
(11, 'Setrika Listrik NI-317T', 250000, 31, 'PANASONIC', 4, 'Baru', 'Panasonic Setrika Listrik NI-317T adalah setrika yang hanya menggunakan listrik sebesat 300 watt saja yang dapat dengan mudah dibawa kemana mana karena juga dilengkapi dengan tas khususnya yang dapat membantu mobilitas anda dalam membawanya'),
(12, 'Setrika Listrik HA-110', 150000, 19, 'MASPION', 4, 'Bekas', 'Setrika yang dikeluarkan oleh brand Maspion dengan seri HA-110 yang hanya menggunakan listrik sebesar 350 watt yang bisa anda dapatkan dengan mudah dan dapat diservis dengan mudah karena tersebarnya cabang cabang maspion di Indonesia'),
(13, 'Terminal Uticon ST1582 productnation', 70000, 29, 'UTICON', 5, 'Baru', 'UTICON Terminal dengan Saklar, 5 Lubang + Kabel 1.5 Meter - Power Extension ST1582\r\nA compact and versatile portable multi outlet for Residential, Commercial and DIY Projects User'),
(14, 'Terminal Hexagon', 50000, 14, 'Vanstar', 5, 'Baru', 'Vanstar terminal universal 4 usb hexagon power socket / colokan charge segi enam '),
(16, 'Mega Fan', 500000, 11, 'Banteng', 3, 'Baru', 'Mega Fan dilengkapi dengan fitur penyefot panas dalam ruangan super yang dapat menghilangkan panas dan menyejukan ruangan hanya dalam hitungan detik, anda tidak perlu lagi membeli AC yang mahal karena Mega Fan dijual dengan harga yang terjangkau dan juga ekonomis dalam perawattnya serta listriknya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produk` (`produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idjenis` (`idjenis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`produk`) REFERENCES `produk` (`id`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`idjenis`) REFERENCES `jenis_produk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
