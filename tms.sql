-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2015 at 06:04 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `shortdesc` varchar(255) NOT NULL DEFAULT '',
  `longdesc` text NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `sortorder` int(3) NOT NULL DEFAULT '0',
  `parentid` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `shortdesc`, `longdesc`, `status`, `sortorder`, `parentid`) VALUES
(8, 'Wisata', 'tempat wisata', '', 'inactive', 0, 0),
(5, 'Berita', 'tentang berita', '', 'inactive', 0, 0),
(3, 'Teknology', 'teknologi', '', 'inactive', 0, 0),
(9, 'Codeigniter', 'framework ci', '', 'inactive', 0, 0),
(10, 'Tramigo_T23', 'Type Produk GPS Tramigo', 'Type Produk GPS Tramigo', 'active', 0, 0),
(11, 'Berkualitas', 'Jual GPS Tracker Tramigo', 'Jual GPS Tracker Tramigo', 'active', 0, 0),
(12, 'Murah', 'Jual GPS Murah Berkualitas', 'Jual GPS Murah Berkualitas', 'active', 0, 0),
(13, 'Jual', 'Jual GPS Tracker Tramigo', 'Jual GPS Tracker Tramigo', 'active', 0, 0),
(14, 'Promo', 'Promo GPS Tracker', 'Promo GPS Tracker', 'active', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `pubdate` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `isi`, `post_id`, `pubdate`) VALUES
(7, 'sby', 'sby@suda.oc', 'coment framework ci', 10, '2014-01-14 21:24:12'),
(8, 'saya', 'saya@dot.com', 'apa itu framework codeigniter', 14, '2014-01-15 23:18:04'),
(9, 'woow', 'wow@aja.abc', 'parangtritis wooow', 11, '2014-01-15 23:18:52'),
(10, 'helmi', 'helmi.tech@gmail.com', 'Mantap', 15, '2015-07-03 00:05:29'),
(11, 'hhh', 'helmi.tech@gmail.com', 'sffdfdfdgdg', 11, '2015-07-03 01:09:21'),
(12, 'helmi', 'helmi.tech@gmail.com', 'wakawwwww', 10, '2015-07-03 04:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('draft','published') COLLATE utf8_unicode_ci NOT NULL,
  `isi` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `pubdate` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `tags`, `status`, `isi`, `category_id`, `pubdate`, `user_id`) VALUES
(31, 'T23 Tramigo GPS Tracker Berkualitas', 'gpstracker, berkualitas', 'published', '<div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Kualitas adalah nomor satu dengan kualitas kemanan dan kenyamanan dan tahan lama sebuah produk anda akan dapatkan, kami PT.&nbsp;</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">TMS&nbsp;</span></font><span style="font-size: 13.3333330154419px; font-family: Arial, Verdana;">menghadirkan alat GPS Tracker dengan kualitas no.1 di dunia GPS Tracker dari Finlandia yang kami publiskan di indonesia sebagai&nbsp;</span><span style="font-size: 13.3333330154419px; font-family: Arial, Verdana;">salah satu jawaban dari permasalahan yang menggeluti dunia keriminal terhadap asset kendaraan anda.</span></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;"><br></span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Untuk mendapatkan informasi selanjutnya anda hubungi kontak kami.</span></font></div>', 11, '2015-07-07', 0),
(32, 'GPS Tracker Murah TRAMIGO-T23', 'gpsmurah, tracker', 'published', '<div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Harga murah adalah prioritas yang di utaman bagi semua kalangan karena cost adalah sangat sensitif sekali di dalam sebuah transaksi</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">jual dan beli barang atau jasa.</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Kami PT. TMS (Tramindo Mitra Sarana) menjual gps tracker TRAMIGO dengan harga murah dan kualitas terbaik di dunia yang anda bisa</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">dapatkan dengan mudah dan cepat.</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;"><br></span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Untuk mendapatkan informasi selanjutnya anda hubungi kontak kami.</span></font></div>', 12, '2015-07-07', 0),
(33, 'Alat Pengamanan Kendaraan Murah', 'gpsmurah, tracker', 'published', '<div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Pengamanan Kendaraan saat ini sangat di perlukan oleh pemilik kendaraan namnun begitu banyaknya alat pengamanan dari mulai</span></font><span style="font-size: 13.3333330154419px; font-family: Arial, Verdana;">Level 1-10 yang kadang pemilik kendaraan bingun mau pilih yang mana.</span></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Kami menghadirkan Alat pengamanan yang tidak akan bikin anda bingung karena sudah teruji dan berkualitas internasional yang</span></font><span style="font-size: 13.3333330154419px; font-family: Arial, Verdana;">kami bawa dari Finlandia dan kami hadirkan di indonesia untuk anda.</span></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Anda ingin tau alat pengamanan GPS Tracker TRAMIGO makanya buruan pake dan rasakan kenyamanan dan keamanan berkendara&nbsp;</span></font><span style="font-size: 13.3333330154419px; font-family: Arial, Verdana;">tanpa perlu takut akan adanya pencurian dan bingun dengan kualitas produk mana yang paling bagus.</span></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;"><br></span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Untuk mendapatkan informasi selanjutnya anda hubungi kontak kami.</span></font></div>', 12, '2015-07-07', 0),
(34, 'Jual GPS Tracker Harga Murah', 'jualgps, gpsmurah, gpstracker', 'published', '<div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Penjualan adalah salah satu faktor no satu dalam kelangsungan sebuah perusahaan dan kami PT. TMS Menjual Alat Pengamanan untuk&nbsp;</span></font><span style="font-size: 13.3333330154419px; font-family: Arial, Verdana;">asset perusahaan anda dan orang tersayang anda dengan TRAMIGO T23 dengan harga murah dan berkualitas anda bisa dapatkan dengan&nbsp;</span><span style="font-size: 13.3333330154419px; font-family: Arial, Verdana;">mudah dan cepat.</span></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;"><br></span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Untuk mendapatkan informasi selanjutnya anda hubungi kontak kami.</span></font></div>', 13, '2015-07-07', 0),
(36, 'Jual GPS Dengan Harga Murah', 'jualgps, gpsmurah, gpstracker', 'published', '<div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">PT. TMS Menjual GPS Dengan Harga Murah Tracker TRAMIGO T23&nbsp;</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">dari Finlandia dengan fitur yang sangat lengkap dan bisa di customize sesuai</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">kebutukan keamanan anda dengan beberapa type produk yang kami berikan secara fleksibel.</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Anda bisa mendapatkan produk kami dengan mudah dan aman.</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;"><br></span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Untuk mendapatkan informasi selanjutnya anda hubungi kontak kami.</span></font></div>', 13, '2015-07-07', 0),
(37, 'Diskon 32% produk TRAMIGO-T23', 'diskon, gpstracker', 'published', '<div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">PT. TMS (Tramindo Mitra Sarana) Membuka diskon berkah di bualan suci romadhon&nbsp;</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">demi keamanan kedaraan anda ketika di tinggal mudik atau</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">di pinjamkan ke sanak saudara kami memberikan solusi yang tepat&nbsp;</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">dengan memasang alat pelacak yang real time serta di dukung dengan&nbsp;</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">fitur canggih dari TRAMIGO T23 Finlandia.</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Buruan pesan sekarang juga stok barang terbatas.</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;"><br></span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Untuk mendapatkan informasi selanjutnya anda hubungi kontak kami.</span></font></div>', 14, '2015-07-07', 0),
(28, 'Tramigo T23 Jual GPS Tracker', 'gpstracker', 'published', '<div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">PT. TMS (Tramindo Mitra Sarana) bekerjasama dengan TRAMIGO Finlandia dalam produk jasa&nbsp;</span></font><span style="font-size: 13.3333330154419px; font-family: Arial, Verdana;">GPS Tracker terbaik di dunia yang kami pasarkan di indonesia karena kami yakin</span></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">betapa pentingnya mengamankan asset tercinta anda baik itu keluargan kendaraan dan lainnya.</span></font></div><div><span style="font-size: 13.3333330154419px; font-family: Arial, Verdana;">Kami menjual GPS Tracker Tramigo dengan harga murah dan berkualitas&nbsp;</span></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">anda ingin tau seperti apa kehebatan dari T23 ini, cepat anda aplikasikan terhadap asset tercinta anda.</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;"><br></span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Untuk mendapatkan informasi selanjutnya anda hubungi kontak kami.</span></font></div>', 10, '2015-07-07', 0),
(29, 'Amankan Asset Anda', 'gpstracker', 'published', '<div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">PT. TMS (Tramindo Mitra Sarana) bekerjasama dengan TRAMIGO Finlandia dalam produk jasa&nbsp;</span></font><span style="font-size: 13.3333330154419px; font-family: Arial, Verdana;">GPS Tracker terbaik di dunia yang kami pasarkan di indonesia karena kami yakin</span><span style="font-size: 13.3333330154419px; font-family: Arial, Verdana;">betapa pentingnya mengamankan asset tercinta anda baik itu keluargan kendaraan dan lainnya.</span></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Kami menjual GPS Tracker Tramigo dengan harga murah dan berkualitas.</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Keamanan penuh dengan fitur yang lengkap dari mulai alarm, deteksi kecepatan, zona, bahkan tempat pelosokpun anda bisa&nbsp;</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">tandai dengan sesuai yang anda inginkan.</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Buruan pake GPS Tracker TRAMIGO T23 mungpung lagi banyak promo dan diskon.</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;"><br></span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Untuk mendapatkan informasi selanjutnya anda hubungi kontak kami.</span></font></div>', 10, '2015-07-07', 0),
(30, 'Guanakan GPS Tracker Bekualitas', 'bekualitas, gps tracker', 'published', '<div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">Di era modern ini dengan begitu banyaknya kendaraan dan bermunculan kasus kriminal pencurian baik itu kendaraan roda dua atau</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">roda empat kini kami memberikan solusi dengan GPS Tracker TRAMIGO Finlandia untuk pengamanan penuh asset anda secara real time&nbsp;</span></font></div><div><font face="Arial, Verdana"><span style="font-size: 13.3333330154419px;">dan pemberitahun secara periodik yang mudahnya lagi anda bisa atur sendiri sesuai keinginan dan kebutuhan anda.</span></font></div>', 11, '2015-07-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `password` varchar(128) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `status`, `password`) VALUES
(1, 'admin', 'admin@jadibaru.com', 'active', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'saya', 'saya@dot.com', 'active', 'beb41a2241e489bc2d7d54b4252ba28c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
