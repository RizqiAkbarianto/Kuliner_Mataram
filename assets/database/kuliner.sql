-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 10:48 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliner`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `judul_gambar` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_produk`, `judul_gambar`, `gambar`, `tanggal_update`) VALUES
(3, 7, 'Sate - Taichan x Nyotnyot 2', 'Sata_taichan_2.jpg', '2020-12-12 11:45:24'),
(4, 10, 'Kebab2 - Babarafi', 'babarafi.jpg', '2020-12-21 17:51:55'),
(5, 10, 'Kebab3 - Babarafi', 'babarafi2.jpg', '2020-12-21 17:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `header_transaksi`
--

CREATE TABLE `header_transaksi` (
  `id_header_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `jumlah_bayar` int(11) DEFAULT NULL,
  `rekening_pembayaran` varchar(255) DEFAULT NULL,
  `rekening_pelanggan` varchar(255) DEFAULT NULL,
  `bukti_bayar` int(255) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `slug_kategori`, `nama_kategori`, `urutan`, `tanggal_update`) VALUES
(1, 'minuman', 'Minuman', 1, '2020-10-25 13:52:57'),
(2, 'cake', 'Cake', 2, '2020-10-25 13:52:57'),
(3, 'street-food', 'Street food', 3, '2020-10-25 13:46:52'),
(4, 'makanan', 'Makanan', 4, '2020-12-12 12:13:51'),
(5, 'cemilan', 'Cemilan', 5, '2020-12-12 12:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `namaweb` varchar(255) NOT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `keywords` text,
  `metatext` text,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `slider` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `rekening_pembayaran` varchar(255) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `namaweb`, `tagline`, `email`, `website`, `keywords`, `metatext`, `telepon`, `alamat`, `facebook`, `instagram`, `deskripsi`, `logo`, `icon`, `slider`, `login`, `rekening_pembayaran`, `tanggal_update`) VALUES
(1, 'Kuliner.Mataram', 'Eat Well, Life Well in Lombok', 'kuliner.mataram@gmail.com', 'http://kulinermataram.com', 'Kuliner.Mataram', 'Kuliner.Mataram', '081902987365', 'Jl. Towuti Raya No.9 Perumnas Tanjung Karang', 'http://facebook.com/kuliner.mataram', 'http://instagram.com/kuliner.mataram', 'Kuliner', 'Picture4.png', 'iconlogonkl.png', 'slider1.jpg', '', '36574365348756047', '2021-01-10 04:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_pelanggan` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `slug_produk` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `link_instagram` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `maps` varchar(1000) NOT NULL,
  `keterangan` text NOT NULL,
  `keywords` text,
  `harga` int(11) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `berat` float DEFAULT NULL,
  `ukuran` varchar(255) DEFAULT NULL,
  `status_produk` varchar(20) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_user`, `id_kategori`, `kode_produk`, `nama_produk`, `slug_produk`, `instagram`, `link_instagram`, `alamat`, `maps`, `keterangan`, `keywords`, `harga`, `stok`, `gambar`, `berat`, `ukuran`, `status_produk`, `tanggal_post`, `tanggal_update`) VALUES
(3, 1, 1, 'M1Kulo', 'Kulo', 'kulo-m1kulo', '', '', '', '', '<p>Kulo</p>\r\n', 'Kulo', 12000, 1000, 'Kulo.jpg', 1, '20X10 Cm', 'Publish', '2020-11-14 15:16:01', '2020-12-12 11:47:09'),
(4, 1, 2, 'C1MandeCakery', 'Kue Bolu - Mande Cakery', 'kue-bolu-mande-cakery-c1mandecakery', '', '', '', '', '<p>Kue Bolu - Mande Cakery</p>\r\n', 'Kue Bolu - Mande Cakery', 20000, 100, 'Mandre_Cakery.jpg', 2, '70X70 Cm', 'Publish', '2020-12-12 13:17:32', '2020-12-12 11:47:09'),
(5, 1, 1, 'M2Boba - Xiboba', 'Boba - Xiboba', 'boba-xiboba-m2boba-xiboba', '', '', '', '', '<p>Boba - Xiboba</p>\r\n', 'Boba - Xiboba', 15000, 100, 'Xiboba.jpg', 1, '20X10 Cm', 'Publish', '2020-12-12 13:22:13', '2020-12-12 11:47:35'),
(6, 1, 2, 'C2Korean Garlic - Ni', 'Korean Garlic - Niat Baik Coffe', 'korean-garlic-niat-baik-coffe-c2korean-garlic-niat-baik-coffe', '', '', '', '', '<p>Korean Garlic - Niat Baik Coffe</p>\r\n', 'Korean Garlic - Niat Baik Coffe', 35000, 90, 'Niat_baik_Coffe.jpg', 1, '70X70 Cm', 'Publish', '2020-12-12 13:34:02', '2020-12-12 11:47:09'),
(7, 1, 4, 'MK1Sate - Taichan x ', 'Sate - Taichan x Nyotnyot', 'sate-taichan-x-nyotnyot-mk1sate-taichan-x-n', '', '', '', '', '<p>Sate - Taichan x Nyotnyot</p>\r\n', ' Sate - Taichan x Nyotnyot', 21000, 78, 'taichan_nyot2.jpg', 1, '30X10 Cm', 'Publish', '2020-12-12 13:18:22', '2020-12-12 12:28:37'),
(8, 1, 1, 'M3Boba - KingBoba', 'Boba - KingBoba', 'boba-kingboba-m3boba-kingboba', '', '', '', '', '<p>Boba - KingBoba</p>\r\n', 'Boba - KingBoba', 15000, 89, 'king_boba.jpg', 1, '20X10 Cm', 'Publish', '2020-12-12 13:22:21', '2020-12-12 12:22:21'),
(9, 1, 1, 'M4jus - Nyotnyot', 'Jus - Nyotnyot', 'jus-nyotnyot-m4jus-nyotnyot', '', '', '', '', '<p>jus - Nyotnyot</p>\r\n', ' jus - Nyotnyot', 15000, 86, 'nyot_nyot_.jpg', 1, '20X10 Cm', 'Publish', '2020-12-12 13:27:58', '2020-12-12 12:28:49'),
(10, 1, 3, 'S2Kebab - Babarafi', 'Kebab - Babarafi', 'kebab-babarafi-s2kebab-babarafi', 'babarafi.mataram', 'http://instagram.com/babarafi.mataram', 'JL. Sriwijaya, Cilinaya, Kec. cakranegara, Kota Mataram, Nusa tenggara Barat', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.035973434713!2d116.12378061541615!3d-8.592539739612414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbfdd8708739b%3A0x9b8c738e2ae74c5b!2sKebab%20Turki%20Baba%20Rafi%20Mataram!5e0!3m2!1sid!2sid!4v1610278104861!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', '<p>Hallo kuliner lover! Sore ini mimin mampir ke @babarafi.mataram&nbsp;<br />\r\nNaah, buat kalian pecinta kebab, roti canai dan burger, di @babarafi.mataram yang menurut mimin recommended banget buat kalian cobain malam minggu ini loh, Kalo menurut mimin di @babarafi.mataram ini roti tortilla (roti kebab) nya enak banget, dengan isian sayur yang fresh fresh banget dan potongan daging di dalemnya banyak. Dengan harga 20ribuan aja, kalian udah bisa dapetin kebab yang enak dan di jamin puas deh makannya&nbsp;Untuk roti canainya di @babarafi.mataram ini kalian di suguhi topping yang melimpah seperti ini. Burgernya?? jangan di tanya lagi, mantep banget, Makanya nih mimin buru buru infoin kalian hari ini buat mampir ke @babarafi.mataram karna momentnya pas banget nih buat yang lagi jalan jalan malam mingguan bisa mampir ke @babarafi.mataram yang ada di jalan stiwijaya atau pas di teras Alfamart deket Hotel Golden Palace&nbsp;</p>\r\n', '         Kebab - Babarafi', 20000, 79, 'kebab_babarafi.jpg', 1, '70X10 Cm', 'Publish', '2020-12-12 13:22:00', '2021-01-11 06:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(250) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `tanggal_update`) VALUES
(1, 'Rizqi Akbarianto', 'riskiak@gmail.com', 'RizqiAkbarianto', '7c222fb2927d828af22f592134e8932480637c0d', 'Admin', '2020-10-24 06:57:27'),
(2, 'administrator', 'admin@gmail.com', 'administrator', '7c222fb2927d828af22f592134e8932480637c0d', 'Admin', '2021-01-05 06:44:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  ADD PRIMARY KEY (`id_header_transaksi`),
  ADD UNIQUE KEY `kode_transaksi` (`kode_transaksi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  MODIFY `id_header_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
