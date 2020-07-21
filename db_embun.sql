-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Apr 2018 pada 08.20
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_embun`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar`
--

CREATE TABLE `tb_daftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `domisili` varchar(50) NOT NULL,
  `aktivitas` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `socmed` varchar(50) NOT NULL,
  `motto` text NOT NULL,
  `no` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_daftar`
--

INSERT INTO `tb_daftar` (`id`, `nama`, `ttl`, `domisili`, `aktivitas`, `instansi`, `socmed`, `motto`, `no`) VALUES
(1, 'Harun', 'Bogor, 14 Januari 1999', 'Depok', 'Kuliah', 'Politeknik Negeri Jakarta', 'Ig : @harun141_', 'Terus lah berjuang', '2147483647'),
(2, 'Bagus', 'Depok, 13 Desember 1995', 'Jakarta', 'Kerja', 'PT PANASONIC', 'Ig : Bagusgus', 'Tak Terkalahkan', '089678987651'),
(3, 'Tampan', 'Jakarta, 17 Agustus 1990', 'Depok', 'Kerja', 'IT Developer', 'Ig : @TampandanBerani', 'Tampan itu harus, Berani itu wajib', '089767688765'),
(4, 'Muhammad Al Fatih', 'Bandung, 14 Januari 1999', 'Bandung', 'Kerja', 'PT SEJAHTERA MAKMUR', '@alfatih', 'Kuy Maju', '089676567854'),
(5, 'kdnsadnsadnj', 'dnsjdnasj', 'sjdnasjd', 'ndsan', 'dnskn', 'dnask', 'ndksa', '4378837384'),
(6, 'dfdfdfgdf', 'ddasdas', 'sdsdsd', 'sdsd', 'sdsdsa', 'asdsad', 'sdsdsd', '434343423'),
(7, 'dnjs', 'ndjsdjasb', 'ndjsbd', 'dnqjnd', 'nsjndj', 'sndsjn', 'dnsjdn', 'nsdjsnd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_donasi`
--

CREATE TABLE `tb_donasi` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `jenis_donatur` varchar(20) NOT NULL,
  `nominal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_donasi`
--

INSERT INTO `tb_donasi` (`id`, `nama_lengkap`, `alamat`, `pekerjaan`, `no_hp`, `jenis_donatur`, `nominal`) VALUES
(1, 'dnajn', 'dsandndjandja', 'dnjsandjsa', 283728, 'donatur tetap', 37287);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_krisar`
--

CREATE TABLE `tb_krisar` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kritik` text NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_krisar`
--

INSERT INTO `tb_krisar` (`id`, `nama`, `kritik`, `saran`) VALUES
(1, 'Harun', 'Bagussss', 'Lebih Bagusssss'),
(2, 'Harun', 'no kritik', 'Alhamdulillah sangat bagus sekali yaa'),
(3, 'Bedul', 'kritik kritik cuy', 'Bagus Bagus Banget'),
(4, 'Bedul', 'Balik lagi gan', 'oke oke sip'),
(5, 'Dul', 'Kritik ketik tik', 'gus gus bagussss'),
(6, 'Run', 'bingung mau kritik apan', 'soalnya udah bagus banget'),
(7, 'Run', 'bingung mau kritik apan', 'soalnya udah bagus banget'),
(8, 'Run', 'bingung mau kritik apan', 'soalnya udah bagus banget'),
(9, 'Run', 'bingung mau kritik apan', 'soalnya udah bagus banget'),
(10, 'Bagus', 'kuyy kritik yang pedes', 'bagus tapi mantap lah'),
(11, 'Gus', 'kritik apan yaa', 'semoga maju terus'),
(12, 'shsbh', 'hsbahsb', 'jsbajsbjs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_posting`
--

CREATE TABLE `tb_posting` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `path` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_posting`
--

INSERT INTO `tb_posting` (`id`, `judul`, `isi`, `path`, `waktu`) VALUES
(19, 'jdnsjdnsaj', 'ndjnsdjnsdjnsdjnsajdnsjdnsajdnsjadnsjsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssskjkjkjkjsdkjdksadkndksndsndjndjsndjsndjnmxznc,mn,cmnxzncmzxnczxmcnzxmcnzxmcnnsnjncnzm,ncmznczncnsndsajdnjsddjiwiowuuwiuwidjdksadjksnjncjscnjcnsjncjsakncsanckjsncjsnacjsancjnscjnsackjnsajkcnsjkancjksancjksnacjknsajkcnsjakncjksancjsnacjksancjksancjksancjksancjksancjsancjksncjsancjnjajddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'post8-03.JPG', '2018-03-07 15:44:56'),
(15, 'CARILAH WAKTU-WAKTU MUSTAJABAH SAAT BERDOA', 'Bismillahirrahmanirrahim', 'WhatsApp Image 2018-02-27 at 08.17.11.jpeg', '2018-03-05 15:20:51'),
(17, 'bdjsabdhab', 'njdnsajndjndsdnjsdnsad\r\nsjdnsajndjandajs', '2010-shadowed-black-brick-wall-background.jpg', '2018-03-06 00:47:11'),
(20, 'fdfdfs', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.', 'post 5-01.png', '2018-03-09 08:20:05'),
(22, 'dsds', 'sdsdsd\r\nsdsdsds\r\ndsdsd\r\nsdsd\r\nsdsdsd', 'coba.png', '2018-03-09 08:34:27'),
(23, 'dsadsa', 'sadsdsd\r\nsdsdsdsd\r\ndsds\r\ndssds', 'Desain Kreatif Embun Pagi-01.png', '2018-03-09 08:35:43'),
(24, 'HARUN', 'BLABLA', 'post8-03.JPG', '2018-03-13 05:57:58'),
(25, 'sds', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.', 'Desain Kreatif Embun Pagi.png', '2018-03-13 06:08:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post_artikel`
--

CREATE TABLE `tb_post_artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `path` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_post_artikel`
--

INSERT INTO `tb_post_artikel` (`id`, `judul`, `deskripsi`, `path`, `waktu`) VALUES
(1, '#ManusiaBiasa', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.', 'post4.png', '2018-03-13 08:59:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post_galeri`
--

CREATE TABLE `tb_post_galeri` (
  `id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_post_galeri`
--

INSERT INTO `tb_post_galeri` (`id`, `path`) VALUES
(5, 'post9.JPG'),
(6, 'coba.png'),
(7, 'post1.png'),
(9, 'post4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', '97784fec6e2313cf5f1d7ffac21c7098'),
(2, 'harun', '09a53b84d8517089b07467c303e2d807');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_krisar`
--
ALTER TABLE `tb_krisar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_posting`
--
ALTER TABLE `tb_posting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_post_artikel`
--
ALTER TABLE `tb_post_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_post_galeri`
--
ALTER TABLE `tb_post_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_krisar`
--
ALTER TABLE `tb_krisar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_posting`
--
ALTER TABLE `tb_posting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_post_artikel`
--
ALTER TABLE `tb_post_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_post_galeri`
--
ALTER TABLE `tb_post_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
