-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 02:42 PM
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
  `id_promosi` int(11) NOT NULL,
  `judul_gambar` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_produk`, `id_promosi`, `judul_gambar`, `gambar`, `tanggal_update`) VALUES
(3, 7, 0, 'Sate - Taichan x Nyotnyot 2', 'Sata_taichan_2.jpg', '2020-12-12 11:45:24'),
(4, 10, 0, 'Kebab2 - Babarafi', 'babarafi.jpg', '2020-12-21 17:51:55'),
(5, 10, 0, 'Kebab3 - Babarafi', 'babarafi2.jpg', '2020-12-21 17:54:03'),
(6, 9, 0, 'Nata De Coco', 'nata3.jpg', '2021-01-11 15:59:38'),
(7, 9, 0, 'Nata De Coco 2', 'nata1.jpg', '2021-01-11 16:00:11'),
(8, 9, 0, 'Nata De Coco 3', 'nata.jpg', '2021-01-11 16:00:39'),
(9, 9, 0, 'Nata De Coco 4', 'nata2.jpg', '2021-01-11 16:02:52'),
(10, 8, 0, 'Boba 1', 'boba.jpg', '2021-01-11 16:11:30'),
(11, 7, 0, 'Sate - Taichan x Nyotnyot 3', 'sate3.jpg', '2021-01-11 16:17:16'),
(12, 7, 0, 'Sate - Taichan x Nyotnyot 4', 'sate.jpg', '2021-01-11 16:17:51'),
(13, 7, 0, 'Sate - Taichan x Nyotnyot 5', 'sate5.jpg', '2021-01-11 16:18:21'),
(14, 6, 0, 'Korean Garlic - Niat Baik Coffe 2', 'korean_garlic_2.jpg', '2021-01-11 16:21:33'),
(15, 5, 0, 'Boba - Xiboba 2', 'Boba_-_Xiboba.jpg', '2021-01-11 16:26:43'),
(16, 5, 0, 'Boba - Xiboba 3', 'Boba_-_Xiboba_3.jpg', '2021-01-11 16:27:18'),
(17, 5, 0, 'Boba - Xiboba 4', 'Boba_-_Xiboba_2.jpg', '2021-01-11 16:27:53'),
(18, 4, 0, 'Kue Bolu - Mande Cakery 2', 'Kue_Bolu_-_Mande_Cakery_2.jpg', '2021-01-11 16:31:46'),
(19, 4, 0, 'Kue Bolu - Mande Cakery 3', 'Kue_Bolu_-_Mande_Cakery_5.jpg', '2021-01-11 16:32:36'),
(22, 3, 0, 'Coffe - Kedai Kopi Kulo 2', 'Kulo1.jpg', '2021-01-11 16:43:35'),
(23, 3, 0, 'Coffe - Kedai Kopi Kulo 3', 'kulo_3.jpg', '2021-01-11 16:44:10'),
(24, 3, 0, 'Coffe - Kedai Kopi Kulo 4', 'kulo_6.jpg', '2021-01-11 16:44:39'),
(25, 3, 0, 'Coffe - Kedai Kopi Kulo 5', 'kulo_2.jpg', '2021-01-11 16:45:04'),
(26, 11, 0, 'Waffle - Pocoyo waffle 2', 'Waffle_-_Pocoyo_waffle_2.jpg', '2021-01-12 04:28:53'),
(27, 11, 0, 'Waffle - Pocoyo waffle 3', 'Waffle_-_Pocoyo_waffle_3.jpg', '2021-01-12 04:29:15'),
(29, 12, 0, 'Warunk Meekow 3', 'warunk_meekow_5.jpg', '2021-01-12 04:51:09'),
(31, 12, 0, 'Warunk Meekow 4', 'warunk_meekow_3.jpg', '2021-01-12 04:52:09'),
(32, 12, 0, 'Warunk Meekow 5', 'warunk_meekow_6_.jpg', '2021-01-12 04:52:34'),
(33, 12, 0, 'Warunk Meekow 2', 'warunk_meekow_8.jpg', '2021-01-12 04:53:26'),
(34, 13, 0, 'Tahu - Tahu Brintik Lombok', 'Tahu_-_Tahu_Brintik_Lombok_3.jpg', '2021-01-12 04:55:48'),
(35, 13, 0, 'Tahu - Tahu Brintik Lombok 3', 'Tahu_-_Tahu_Brintik_Lombok_4.jpg', '2021-01-12 04:56:16'),
(36, 14, 0, 'Nasi Kulit Lombok 2', 'Nasi_Kulit_Lombok_5.jpg', '2021-01-12 04:58:24'),
(37, 14, 0, 'Nasi Kulit Lombok 3', 'Nasi_Kulit_Lombok_4.jpg', '2021-01-12 04:58:51'),
(38, 14, 0, 'Nasi Kulit Lombok 4', 'Nasi_Kulit_Lombok_9.jpg', '2021-01-12 04:59:13'),
(39, 14, 0, 'Nasi Kulit Lombok 5', 'Nasi_Kulit_Lombok_2.jpg', '2021-01-12 04:59:32'),
(42, 15, 0, 'Macaroni- Macaroni Factory 2', 'Macaroni-_Macaroni_Factory_3.jpg', '2021-01-12 05:23:02'),
(43, 15, 0, 'Macaroni- Macaroni Factory 3', 'Macaroni-_Macaroni_Factory_2.jpg', '2021-01-12 05:23:23');

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
  `gambar` varchar(255) NOT NULL,
  `status_produk` varchar(20) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_user`, `id_kategori`, `kode_produk`, `nama_produk`, `slug_produk`, `instagram`, `link_instagram`, `alamat`, `maps`, `keterangan`, `keywords`, `gambar`, `status_produk`, `tanggal_post`, `tanggal_update`) VALUES
(3, 1, 1, 'M1Kulo', 'Coffe - Kedai Kopi Kulo', 'coffe-kedai-kopi-kulo-m1kulo', '@kedaikopikulo', 'http://instagram.com/kedaikopikulo', 'Jl. Gajah Mada No.No.90, Jempong Baru, Kec. Sekarbela, Kota Mataram, Nusa Tenggara Bar. 83116', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.8819507111175!2d116.09812591541625!3d-8.607331289809297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf0d57a51615%3A0xdf2eea45458adf1d!2sKEDAI%20KOPI%20KULO%20LOMBOK!5e0!3m2!1sid!2sid!4v1610369829074!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', '<p>Hallo kuliner lover!!<br />\r\nSore ini mimin mau share ke kalian minuman yang cocok banget kalian order pas weekend gini, Yups! Ini dy! Minuman literan yang lumayan di bilang MENU BARU dari Kedai Kopi Kulo, Sebelumnya mimin udah sempet share produk yang satu ini. Makanya! Mimin gak pernah bosen buat ngajakin kaian cobain minuman literan dari Kedai Kopi Kulo ini! Kenapa mimin suka?? Karna harganya terjangkau, rasanya juga enak dan cocok banget buat jadi temen seru pas ngumpul weekend gini! Jadi buat kalian, yuk cobain minuman yang satu ini! Karna variannya banyak, dan yang paling mimin suka sih Kopi literan yang rasa kopi baileys, karna rasa kopi dan campuran sirup baileysnya pas banget! Pokoknya cocok deh! Buat yang mau coba varian lain juga bisa ya, Kalian tinggal order langsung di outletnya KEDAI KOPI KULO JEMPONG! atau bisa order di GOJEK &ldquo;KEDAI KOPI KULO LOMBOK&rdquo;, ??INGET! ini CUMA ADA DI KEDAI KOPI KULO JEMPONG ya! Atau di jln. Gajahmada no 90 Jempong! Jangan sampe salah ya&nbsp;<br />\r\n@kedaikopikulo<br />\r\nMinuman<br />\r\n- KEDAI KOPI KULO<br />\r\nAnti Gabut<br />\r\n70.000 - 85.000<br />\r\nKedai Kopi Kulo Jempong<br />\r\nJln. Gajah mada no 90 Jempong<br />\r\n0811 390 606</p>\r\n\r\n<p>#kulinerLombok #kulinerSumbawa #kulinerBima #kulinerDompu #makananenak #makananNusantara #pesonakulinernusantara #demenmakandaerahku #makananMataram #makananLombok #makananSumbawa #makananBima #makananDompu #visitLombokSumbawa #kekinian #exploreMataram #exploreLombok #exploreSumbawa #instagram #onlineshop #onlineshopMataram #olshopmataram #olshopLombok</p>\r\n', '  Kulo', 'kulo_4.jpg', 'Publish', '2020-11-14 15:16:01', '2021-01-11 16:42:21'),
(4, 1, 2, 'C1MandeCakery', 'Kue Bolu - Mandre Cakery', 'kue-bolu-mandre-cakery-c1mandecakery', '@madrecakery ', 'http://instagram.com/madrecakery ', 'Jl. Sriwijaya No.8, Pagesangan Tim., Kec. Mataram, Kota Mataram, Nusa Tenggara Bar. 83127', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d986.2539141772662!2d116.10972352936093!3d-8.594492299999981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf67bb1279bd%3A0x4e23967a8268c1f3!2sToko%20Senjaya!5e0!3m2!1sid!2sid!4v1610367139720!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', '<p>Hallo kuliner lovers!!&nbsp;<br />\r\nKali ini mimin mau kasi refrensi tempat beli cake yang enak di Mataram, yaitu di Madre Cakery @madrecakery . Ini salah satu tempat yang menjual berbakai macam cake yang lembut dengan harga murah meriah. Toko @madrecakery ini bisa jadi salah satu refrensi kalian klo mau beli roti, donat dan cake cake murah lainnya. Bisa di coba ya guys! Biar kalian tau nih gimana rasanya roti roti dan cake di sini @madrecakery&nbsp;<br />\r\n@madrecakery&nbsp;<br />\r\nMakanan :<br />\r\n- English Nou Cake<br />\r\n- Donat Kentang<br />\r\n- Spikoe Cake<br />\r\n27.000 - 35.000<br />\r\nJln. Sriwijaya Komplek Pertokoan Taman Baru<br />\r\n0878 6443 2165</p>\r\n\r\n<p>BUKA SETIAP HARI<br />\r\n#kulinerLombok #kulinerSumbawa #kulinerBima #kulinerDompu #makananenak #makananNusantara #pesonakulinernusantara #demenmakandaerahku #makananMataram #makananLombok #makananSumbawa #makananBima #makananDompu #visitLombokSumbawa #kekinian #exploreMataram #exploreLombok #exploreSumbawa #instagram #onlineshop #onlineshopMataram #olshopmataram #olshopLombok</p>\r\n', '  Kue Bolu - Mande Cakery', 'Mandre_Cakery.jpg', 'Publish', '2020-12-12 13:17:32', '2021-01-11 16:34:57'),
(5, 1, 1, 'M2Boba - Xiboba', 'Boba - Xiboba', 'boba-xiboba-m2boba-xiboba', '@xiboba.indonesia .', 'http://instagram.com/xiboba.indonesia ', 'Jl. Sriwijaya No.333, Punia, Kec. Mataram, Kota Mataram, Nusa Tenggara Bar. 83127 Lombok Epicentrum Mall lantai 1 (Samping Quicksilver) ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0267877964043!2d116.1025094154161!3d-8.593422589624184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf642e7e8d39%3A0xb051a9c0d129ee54!2sEpicentrum%20Mataram%20Mall!5e0!3m2!1sid!2sid!4v1610365335034!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', '<p>Hallo kuliner lover!!&nbsp;<br />\r\nAda yang BARU nih di Lombok!! Ada Xi Boba @xiboba.indonesia ! Akhirnya brand yang satu ini muncul juga di Lombok, setelah sekian lama di nanti. Wow!!! Seneng deh. Pasti kalian udah tau dong produk yang hits banget di Indonesia Raya ini Sore ini mimin mampir dan cobain boba satu ini. Untuk rasa di jamin enak dong dan untuk boba nya sendiri itu gak alot guys! Mimin sukaaaaaa .Buat kalian warga Lombok yang udah menantikan minuman yang satu ini, boleh lah mampir ke @xiboba.indonesia yang ada di Epicentrum Mall lantai 1 ini. Dan mimin saranin jangan beli satu ya karnaa enak! Yang mimin paling favorite ini sih yang Brown Sugar.<br />\r\nKalian yang udah cobain, suka yang mana??? Mimin saranin buat dateng pagian ya, atau bisa order via Gofood &amp; Grabfood. Karna kalo gak pagian pasti ngantriiiiiiiiiii guys! Dan takutnya kalian gak kebagian hari itu.<br />\r\nJadi, buruan mampir ke @xiboba.indonesia Epicentrum Mall ya&nbsp;<br />\r\n@xiboba.indonesia .</p>\r\n\r\n<p>Minuman :<br />\r\nXI BOBA<br />\r\n- Brown Sugar Boba Fresh Milk<br />\r\n- Salted Caramel Boba Fresh Milk<br />\r\n- Yuzu Sakura Macchiato with Yogurt Popping Boba<br />\r\n- Berry Sakura Macchiato with Strawberry Popping Boba<br />\r\n19.000 - 24.000<br />\r\nLombok Epicentrum Mall lantai 1 (Samping Quicksilver)</p>\r\n\r\n<p>Buka Setiap Hari<br />\r\nPukul 11.00 - 21.00<br />\r\n#kulinerLombok #kulinerSumbawa #kulinerBima #kulinerDompu #makananenak #makananNusantara #pesonakulinernusantara #demenmakandaerahku #makananMataram #makananLombok #makananSumbawa #makananBima #makananDompu #visitLombokSumbawa #kekinian #exploreMataram #exploreLombok #exploreSumbawa #instagram #onlineshop #onlineshopMataram #olshopmataram #olshopLombok</p>\r\n', '  Boba - Xiboba', 'Xiboba.jpg', 'Publish', '2020-12-12 13:22:13', '2021-01-11 11:48:10'),
(6, 1, 2, 'C2Korean Garlic - Ni', 'Korean Garlic - Niat Baik Coffe', 'korean-garlic-niat-baik-coffe-c2korean-garlic-ni', '@niatbaik.coffee', 'http://instagram.com/niatbaik.coffee', 'Jl. Sriwijaya No.307, Pagesangan Tim., Kec. Mataram, Kota Mataram, Nusa Tenggara Bar. 83127', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.010596069309!2d116.10499211541628!3d-8.594978589644917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbfb21a356bd5%3A0xc87f8291a6c77b34!2sNiat%20Baik%20Coffee!5e0!3m2!1sid!2sid!4v1610364507979!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', '<p>Hallo kuliner lover!!&nbsp;<br />\r\nSelamat pagi! Ada yang sesuatu yang BARU yang mimin cobain di Niat Baik Coffee nih @niatbaik.coffee Memang udah beberapa bulan ini @niatbaik.coffee buat inovasi baru buat kalian yang suka korean garlic, bread yang memang lagi hype banget di Indonesia saat ini. Naah, biasanya korean garlic identik dengan bread dengan bentuk bulat, berbeda di @niatbaik.coffee kalian di puaskan dengan Korean Garlic dengan porsi banyak seperti ini. Cocok banget di makan rame rame. Yang SPESIAL nya lagi! Kalian bisa mix rasa juga loh! Berhubung mimin suka korean garlic dan double choco nya @niatbaik.coffee , makanya mimin langsung order bread mix ini!! CAKEP BANGET KAN! Selain bentukannya yang cantik! Rasa juga enak!!<br />\r\nIni recommended sih buat di coba Jadi, buat kalian yang pagi ini lagi di tempat kerja atau lagi dirumah ngumpul dengan teman atau keluarga, bread satu ini cocok buat jadi pelengkap ngumpul kalian Prosesnya pun gak lama! Kalian pesen, tunggu 2-3 jam, bread ini langsung di anter ke kalian! Super fresh from the oven<br />\r\nBuruan deh langsung kepoin instagramnya @niatbaik.coffee ya&nbsp;<br />\r\nMakanan<br />\r\nMIX BREAD<br />\r\n- Korean Garlic<br />\r\n- Double Choco<br />\r\n50.000<br />\r\nJln. Sriwijaya no 307 Mataram (Rumah sebrang Melia Laundry)<br />\r\n089675005588</p>\r\n\r\n<p>BUKA Setiap Hari<br />\r\n08.30 - 16.00</p>\r\n\r\n<p>#kulinerLombok #kulinerSumbawa #kulinerBima #kulinerDompu #makananenak #makananNusantara #pesonakulinernusantara #demenmakandaerahku #makananMataram #makananLombok #makananSumbawa #makananBima #makananDompu #visitLombokSumbawa #kekinian #exploreMataram #exploreLombok #exploreSumbawa #instagram #onlineshop #onlineshopMataram #olshopmataram #olshopLombok</p>\r\n', ' Korean Garlic - Niat Baik Coffe', 'Niat_baik_Coffe.jpg', 'Publish', '2020-12-12 13:34:02', '2021-01-11 11:29:37'),
(7, 1, 4, 'MK1Sate - Taichan x ', 'Sate - Taichan x Nyotnyot', 'sate-taichan-x-nyotnyot-mk1sate-taichan-x', '@taichannyot2.mataram ', 'http://instagram.com/taichannyot2.mataram ', 'Jl. Selaparang No.30, Mayura, Kec. Cakranegara, Kota Mataram, Nusa Tenggara Bar. 83239', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15780.304172848912!2d116.13134706977539!3d-8.5886875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf52485e2ce3%3A0x2dc9c774199d17db!2sSate%20taichan%20Nyot%20Nyot%20Mataram!5e0!3m2!1sid!2sid!4v1610362968307!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', '<p>Hallo kuliner lovers!!&nbsp;<br />\r\nMimin mau infoin ke kalian tempat yang recommended buat di kunjungi malem ini.<br />\r\nNah, sore ini mimin lagi ada @taichannyot2.mataram nih. Buat kalian pecinta sate taichan yuk cobain sate taichan di @taichannyot2.mataram . Selain sate taichan disini juga jual beberapa menu lainnya yang sebelumnya mimin pernah post guys<br />\r\nKalian mesti cobain deh menu barunya! Di jamin doweeer! PEDES bangeet!!&nbsp;<br />\r\nJadi buat yang bingung kemana nanti, yuk buruan dateng ke @taichannyot2.mataram .<br />\r\n@taichannyot2.mataram.<br />\r\n????Makanan :<br />\r\nSate Taichan Daging<br />\r\nSate Taichan Kulit<br />\r\nSate Taichan Sayap<br />\r\nSate Taichan Mozarella<br />\r\nAyam Geprek .<br />\r\nJln. Selaparang no 31<br />\r\n(Sate Taichan Nyot Nyot 2 Mataram)<br />\r\n0813 3580 0094</p>\r\n\r\n<p>BUKA SETIAP HARI<br />\r\nPukul 11.00 - 22.00</p>\r\n\r\n<p>#kulinerLombok #kulinerSumbawa #kulinerBima #kulinerDompu #makananenak #makananNusantara #pesonakulinernusantara #demenmakandaerahku #makananMataram #makananLombok #makananSumbawa #makananBima #makananDompu #visitLombokSumbawa #kekinian #exploreMataram #exploreLombok #exploreSumbawa #instagram #onlineshop #onlineshopMataram #olshopmataram #olshopLombok</p>\r\n', '  Sate - Taichan x Nyotnyot', 'taichan_nyot2.jpg', 'Publish', '2020-12-12 13:18:22', '2021-01-11 11:03:34'),
(8, 1, 1, 'M3Boba - KingBoba', 'Boba - KingBoba', 'boba-kingboba-m3boba-kingboba', '@kingboba.sriwijaya', 'http://instagram.com/kingboba.sriwijaya', 'Jl. Sultan Kaharudin No.23, Karang Pule, Kec. Sekarbela, Kota Mataram, Nusa Tenggara Bar. 83116', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.9533283278197!2d116.08723961541621!3d-8.600479689718052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf029b6ead0b%3A0xc7760174d78857!2sKing%20Boba%20lombok!5e0!3m2!1sid!2sid!4v1610361605220!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', '<p>Hallo kuliner lover!&nbsp;<br />\r\nSore ini mimin lagi santai dirumah di temenin minuman @kingboba.sriwijaya dan juga cemilan enak dari @mr.kingkongbanana nih! Mimin suka nih sama minuman King Boba @kingboba.sriwijaya karna manisnya pas, bobanya juga gak alot, dan mimin suka sama rasa matcha dan juga brown sugarnya terdebest Naah buat cemilannya nih mimin order @mr.kingkongbanana ! Dan ini BARU banget di Lombok! Kalian yang suka pisang goreng dengan isian banyak topping bisa coba order di @mr.kingkongbanana ! Kalian harus tau! @kingboba.sriwijaya dan @mr.kingkongbanana ini lokasinya satu outlet ya sama @aaraffi.fc_lombok ! Jadi buat yang mau makan berat bisa mampir ke @aaraffi.fc_lombok , buat yang mau minuman seger dan kekinian bisa order di @kingboba.sriwijaya dan yang mau cemilan pisang enak bisa ke @mr.kingkongbanana . Jadi smua ini bisa kalian order di satu tempat! Asik banget kan!!!! Tunggu apa lagi! Yang malem ini udah mulai gabut dan bingung ngemil apa! Yuk buruan ikutan bareng mimin cobain minuman dan cemilan dari @kingboba.sriwijaya dan @mr.kingkongbanana ! Biar kalian gak ketinggalan info seru dan PROMO nya, kalian WAJIB banget follow instagramnya ya di @kingboba.sriwijaya , @mr.kingkongbanana dan juga @aaraffi.fc_lombok !! Karna bakal ada MENU MENU BARU lainnya loh! Buat anak hits Lombok! Jangan lupa buat cobain ya&nbsp;<br />\r\n@kingboba.sriwijaya<br />\r\n- Matcha Boba Brown Sugar Machiato<br />\r\n- King Boba Signature Brown Sugar Matchiato<br />\r\n- Iced Milk Tea<br />\r\n13.000 - 20.000<br />\r\nJln. Sriwijaya no 10 - 11 Mataram<br />\r\n0812 3973 5777</p>\r\n\r\n<p>Buka Setiap Hari<br />\r\n10.00 - 09.00</p>\r\n\r\n<p>#kulinermataram#kulinerLombok #kulinerSumbawa #kulinerBima #kulinerDompu #makananenak #makananNusantara #pesonakulinernusantara #demenmakandaerahku #makananMataram #makananLombok #makananSumbawa #makananBima #makananDompu #visitLombokSumbawa #kekinian #exploreMataram #exploreLombok</p>\r\n', '  Boba - KingBoba', 'king_boba.jpg', 'Publish', '2020-12-12 13:22:21', '2021-01-11 10:45:00'),
(9, 1, 1, 'M4jus - Nyotnyot', 'Nata De Coco - Nyot nyot Airlangga', 'nata-de-coco-nyot-nyot-airlangga-m4jus-nyotnyot', '@nyotnyotthaitea.lombok', 'http://instagram.com/nyotnyotthaitea.lombok', 'Jl. Airlangga, Mataram Bar., Kec. Selaparang, Kota Mataram, Nusa Tenggara Bar. 83126', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.1357366865814!2d116.10273271541612!3d-8.582945489485041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdc1c5dd77a47d%3A0xe16ace4bd7e02575!2sNyot-Nyot%20Thai%20tea%20erlangga!5e0!3m2!1sid!2sid!4v1610360418316!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', '<p>Hallo kuliner lover!!&nbsp;<br />\r\nWeekend ini mimin mau ngajak kalian buat minum yang seger seger nih dari @nyotnyotthaitea.lombok<br />\r\nDi @nyotnyotthaitea.lombok banyak banget varian minuman yang enak enak! Kayak gini guys! Dengan suansa tropikal yang super seger banget! Cocok di suasana hari ini yang lumayan panas Kalian pasti udah cobain dong varian ini, Hayooo buat kalian yang belum cobain, buruan deh buka aplikasi ojek online kalian dan cobain varian ini di @nyotnyotthaitea.lombok<br />\r\nMimin suka banget sama varian ini karna ada selasih, nata de coco dan juga air kelapa yang seger banget Jadi buat kalian yang hari ini lagi dirumah aja atau lagi jalan jalan bisa nih order varian ini dari @nyotnyotthaitea.lombok ini biar weekend kalian makin seru Jangan lupa buat follow juga @nyotnyotthaitea.lombok biar kalian gak ketinggalan info info terbarunya dari @nyotnyotthaitea.lombok&nbsp;<br />\r\n@nyotnyotthaitea.lombok<br />\r\nMinuman :<br />\r\n- Nata de coco Melon<br />\r\n- Nata de coco Mangga<br />\r\n- Nata de coco nanas<br />\r\n- Nata de coco Strawberry<br />\r\nPrice : 17.000<br />\r\nNyot nyot Thai Tea Lombok Airlangga<br />\r\n0817 5723 123<br />\r\n#kulinermataram<br />\r\n#kulinerLombok #kulinerSumbawa #kulinerBima #kulinerDompu #makananenak #makananNusantara #pesonakulinernusantara #demenmakandaerahku #makananMataram #makananLombok #makananSumbawa #makananBima #makananDompu #visitLombokSumbawa #kekinian #exploreMataram #exploreLombok #exploreSumbawa #instagram #onlineshop #onlineshopMataram #olshopmataram #olshopLombok</p>\r\n', 'Nata De Coco - Nyotnyot', 'nyot_nyot_.jpg', 'Publish', '2020-12-12 13:27:58', '2021-01-11 10:22:06'),
(10, 1, 3, 'S2Kebab - Babarafi', 'Kebab - Babarafi', 'kebab-babarafi-s2kebab-babarafi', 'babarafi.mataram', 'http://instagram.com/babarafi.mataram', 'JL. Sriwijaya, Cilinaya, Kec. cakranegara, Kota Mataram, Nusa tenggara Barat', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.035973434713!2d116.12378061541615!3d-8.592539739612414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbfdd8708739b%3A0x9b8c738e2ae74c5b!2sKebab%20Turki%20Baba%20Rafi%20Mataram!5e0!3m2!1sid!2sid!4v1610278104861!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', '<p>Hallo kuliner lover! Sore ini mimin mampir ke @babarafi.mataram&nbsp;<br />\r\nNaah, buat kalian pecinta kebab, roti canai dan burger, di @babarafi.mataram yang menurut mimin recommended banget buat kalian cobain malam minggu ini loh, Kalo menurut mimin di @babarafi.mataram ini roti tortilla (roti kebab) nya enak banget, dengan isian sayur yang fresh fresh banget dan potongan daging di dalemnya banyak. Dengan harga 20ribuan aja, kalian udah bisa dapetin kebab yang enak dan di jamin puas deh makannya&nbsp;Untuk roti canainya di @babarafi.mataram ini kalian di suguhi topping yang melimpah seperti ini. Burgernya?? jangan di tanya lagi, mantep banget, Makanya nih mimin buru buru infoin kalian hari ini buat mampir ke @babarafi.mataram karna momentnya pas banget nih buat yang lagi jalan jalan malam mingguan bisa mampir ke @babarafi.mataram yang ada di jalan stiwijaya atau pas di teras Alfamart deket Hotel Golden Palace&nbsp;</p>\r\n', '         Kebab - Babarafi', 'kebab_babarafi.jpg', 'Publish', '2020-12-12 13:22:00', '2021-01-11 06:23:52'),
(11, 1, 3, 'S2-Waffle - Pocoyo w', 'Waffle - Pocoyo waffle', 'waffle-pocoyo-waffle-s2-waffle-pocoyo-waffle', '@pocoyowaffle', 'http://instagram.com/pocoyowaffle', 'Jl. Sriwijaya No.333, Punia, Kec. Mataram, Kota Mataram, Nusa Tenggara Bar. 83127 Lombok Epicentrum Mall lantai 1 (Infront Logo Jeans)', '-', '<p>-</p>\r\n', 'Waffle - Pocoyo waffle', 'Waffle_-_Pocoyo_waffle_1.jpg', 'Publish', '2021-01-12 05:27:54', '2021-01-12 04:27:54'),
(12, 1, 4, 'M2-Warunk Meekow', 'Warunk Meekow', 'warunk-meekow-m2-warunk-meekow', '@warunk_meekow', 'http://instagram.com/warunk_meekow', '-', '-', '<p>-</p>\r\n', 'warunk_meekow', 'warunk_meekow1.jpg', 'Publish', '2021-01-12 05:37:25', '2021-01-12 04:37:25'),
(13, 1, 3, 'S3-Tahu - Tahu Brint', 'Tahu - Tahu Brintik Lombok', 'tahu-tahu-brintik-lombok-s3-tahu-tahu-brintik-lombok', '@tahubrintiklombok', 'http://instagram.com/tahubrintiklombok', '-', '-', '<p>-</p>\r\n', 'Tahu - Tahu Brintik Lombok', 'Tahu_-_Tahu_Brintik_Lombok_2.jpg', 'Publish', '2021-01-12 05:42:10', '2021-01-12 04:42:10'),
(14, 1, 4, 'M3-Nasi Kulit Lombok', 'Nasi Kulit Lombok', 'nasi-kulit-lombok-m3-nasi-kulit-lombok', '@nasikulitlombok', 'http://instagram.com/nasikulitlombok', '-', '-', '<p>-</p>\r\n', 'Nasi Kulit Lombok', 'Nasi_Kulit_Lombok_1.jpg', 'Publish', '2021-01-12 05:48:40', '2021-01-12 04:48:40'),
(15, 1, 5, 'C1-Macaroni- Macaron', 'Macaroni- Macaroni Factory', 'macaroni-macaroni-factory-c1-macaroni-macaroni-factory', '@macfac.lombok', 'http://instagram.com/macfac.lombok', '-', '-', '<p>-</p>\r\n', 'Macaroni- Macaroni Factory', 'Macaroni-_Macaroni_Factory_1.jpg', 'Publish', '2021-01-12 06:13:29', '2021-01-12 05:21:43'),
(17, 9, 1, 'minuman', 'minuman', 'minuman', '@taichannyot2.mataram ', 'http://instagram.com/taichannyot2.mataram ', 'JL. Sriwijaya, Cilinaya, Kec. cakranegara, Kota Mataram, Nusa tenggara Barat', '-', '<p>-</p>\r\n', '-', '-58959663.jpg', 'Publish', '2021-03-04 13:25:21', '2021-03-04 12:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `promosi`
--

CREATE TABLE `promosi` (
  `id_promosi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode_promosi` varchar(20) NOT NULL,
  `nama_promosi` varchar(255) NOT NULL,
  `slug_promosi` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `link_instagram` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `maps` varchar(1000) NOT NULL,
  `keterangan` text NOT NULL,
  `keywords` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status_promosi` varchar(20) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promosi`
--

INSERT INTO `promosi` (`id_promosi`, `id_user`, `kode_promosi`, `nama_promosi`, `slug_promosi`, `instagram`, `link_instagram`, `alamat`, `maps`, `keterangan`, `keywords`, `gambar`, `status_promosi`, `tanggal_post`, `tanggal_update`) VALUES
(1, 6, 'P-Kuliner.Mataram x ', 'Kuliner.Mataram x Taichan Nyot-nyot', 'kulinermataram-x-taichan-nyot-nyot-p-kulinermataram-x-taichan-nyot-nyot', '@taichannyot2.mataram ', 'http://instagram.com/taichannyot2.mataram ', '-', '-', '<p>-</p>\r\n', 'Kuliner.Mataram x Taichan Nyot-nyot', 'promosi14.jpg', 'Publish', '2021-02-18 12:43:26', '2021-02-18 11:43:26'),
(2, 6, 'p-Hash Promo Beli 2 ', 'Hash Promo Beli 2 Cup Cuma 35k', 'hash-promo-beli-2-cup-cuma-35k-p-hash-promo-beli-2-cup-cuma-35k', '-', '-', '-', '-', '<p>-</p>\r\n', 'Hash Promo Beli 2 Cup Cuma 35k', 'promosi21.jpg', 'Publish', '2021-02-18 12:47:30', '2021-02-18 11:47:30'),
(3, 6, 'p-Oh My Grill Aston ', 'Oh My Grill Aston Hotel', 'oh-my-grill-aston-hotel-p-oh-my-grill-aston-hotel', '-', '-', '-', '-', '<p>-</p>\r\n', 'Oh My Grill Aston Hotel', 'promosi31.jpg', 'Publish', '2021-02-18 12:48:44', '2021-02-18 11:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `id_user`, `nama`, `id_produk`, `review`) VALUES
(19, 6, 'Rizqi Akbarianto', 9, 'Ini enak banget loh 100%'),
(20, 6, 'Rizqi Akbarianto', 10, 'Berasa makan kebab di turki');

-- --------------------------------------------------------

--
-- Table structure for table `tersimpan`
--

CREATE TABLE `tersimpan` (
  `id_tersimpan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_tersimpan` datetime NOT NULL
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
  `telepon` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `telepon`, `alamat`, `akses_level`, `tanggal_daftar`, `tanggal_update`) VALUES
(1, 'Rizqi Akbarianto', 'riskiak@gmail.com', 'RizqiAkbarianto', '7c222fb2927d828af22f592134e8932480637c0d', '', '', 'Admin', '0000-00-00 00:00:00', '2020-10-24 06:57:27'),
(3, 'Rizqi', 'riski@gmail.com', 'Riskiadmin', '7c222fb2927d828af22f592134e8932480637c0d', '', '', 'Admin', '0000-00-00 00:00:00', '2021-01-15 18:00:52'),
(4, 'baru123', 'baru123@gmail.com', 'baru123', '7c222fb2927d828af22f592134e8932480637c0d', '081902987365', 'mataram', 'User', '0000-00-00 00:00:00', '2021-02-17 03:59:31'),
(5, 'administrator', 'admin@gmail.com', 'administrator', '7c222fb2927d828af22f592134e8932480637c0d', '', '', 'Admin', '2021-02-17 09:15:21', '2021-02-17 08:15:21'),
(6, 'Rizqi Akbarianto', 'riskiak@gmail.com', 'RizqiAk', '7c222fb2927d828af22f592134e8932480637c0d', '081902987365', 'Jl. Towuti raya no 2 Perumnas, Karang Tanjung, Ampenan, Lombok, NTB, Indonesia', 'User', '2021-02-18 08:41:54', '2021-02-18 07:41:54'),
(7, 'test123', 'test123@gmail.com', 'akuntes', '7c222fb2927d828af22f592134e8932480637c0d', '081902987365', 'mavila', 'User', '2021-02-18 09:31:12', '2021-02-18 08:31:12'),
(8, 'test124', 'test124@gmail.com', 'test124', '7c222fb2927d828af22f592134e8932480637c0d', '081902987365', 'sdcsdc', 'User', '2021-02-18 09:33:33', '2021-02-18 08:33:33'),
(9, 'produsen test', 'produsen@gmail.com', 'produsen', '7c222fb2927d828af22f592134e8932480637c0d', '081902987365', 'test', 'Produsen', '2021-03-02 10:30:15', '2021-03-02 09:48:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

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
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`);

--
-- Indexes for table `promosi`
--
ALTER TABLE `promosi`
  ADD PRIMARY KEY (`id_promosi`),
  ADD KEY `kode_promosi` (`kode_promosi`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `tersimpan`
--
ALTER TABLE `tersimpan`
  ADD PRIMARY KEY (`id_tersimpan`);

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
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `promosi`
--
ALTER TABLE `promosi`
  MODIFY `id_promosi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tersimpan`
--
ALTER TABLE `tersimpan`
  MODIFY `id_tersimpan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
