-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2020 pada 15.30
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `postingan`
--

CREATE TABLE `postingan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `isi` longtext,
  `keterangan` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `postingan`
--

INSERT INTO `postingan` (`id`, `judul`, `tag`, `isi`, `keterangan`, `gambar`, `author`, `tanggal`) VALUES
(1, 'card 1', 'card 1', 'card 1', 'card 1', 'http://localhost/dugam%20scout/public/img/unyu.png', 'admin', '2020-06-27'),
(2, 'card 2', 'card 2', 'card 2', 'card 2', 'http://localhost/dugam%20scout/public/img/moan yudachi.gif', 'admin', '2020-06-27'),
(3, 'card 3', 'card 3', 'card 3', 'card 3', 'http://localhost/dugam%20scout/public/img/yuudachi.gif', 'admin', '2020-06-27'),
(4, 'card 4', 'card 4', 'card 4', 'card 4', 'http://localhost/dugam%20scout/public/img/pak ali mantab b.png', 'admin', '2020-06-27'),
(5, 'card 5', 'card 5', 'card 5', 'card 5', 'http://localhost/dugam%20scout/public/img/NEko sama.png', 'admin', '2020-06-27'),
(6, 'card 6', 'card 6', 'card 6', 'card 6', 'http://localhost/dugam%20scout/public/img/Nezukooo.png', 'admin', '2020-06-27'),
(29, 'Yuudachi Poi', 'kegiatan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque posuere est quis lectus dignissim ornare. Nunc massa nibh, feugiat eget purus ut, tempus sodales sem. In diam turpis, pellentesque nec felis eget, ornare iaculis dui. Fusce bibendum, felis ac finibus ultricies, justo ex tempor massa, non pulvinar lorem mi vitae felis. Vestibulum non quam risus. Curabitur auctor accumsan interdum. In in lectus ut justo suscipit ultrices. Duis viverra egestas ante sed lobortis. Proin interdum aliquet felis, in congue mauris tincidunt vitae.\r\n\r\nMaecenas vestibulum euismod est sit amet dignissim. Cras tempus nibh sit amet nunc laoreet viverra. Praesent tortor leo, condimentum ac massa vitae, lacinia fermentum mi. Nullam ultricies sodales placerat. Vivamus ultrices mi finibus, egestas urna viverra, aliquam augue. Sed vitae aliquam tortor. Aenean rutrum, mi quis scelerisque consectetur, leo risus euismod nisl, sit amet sodales dolor leo a leo. Duis nec commodo massa, non rutrum eros. Maecenas mi velit, fermentum nec justo sed, commodo dictum sapien. Vivamus pharetra velit dolor, a feugiat metus dictum quis. Sed ultricies egestas leo, sed accumsan ante auctor id. Mauris tempus, arcu faucibus aliquet cursus, orci nibh bibendum purus, a cursus lacus nisl at neque. Duis cursus ac nunc a faucibus. Nam at condimentum odio.\r\n\r\nAenean euismod vehicula purus, eget vulputate arcu volutpat eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam sed elit nisl. Sed a pulvinar dolor. Duis tincidunt euismod erat a malesuada. Morbi semper iaculis mauris sit amet dictum. Integer nec accumsan est. Curabitur luctus quis nisl et ultrices. Mauris vel ornare eros. In lacus velit, auctor id turpis eu, pulvinar sagittis elit.\r\n\r\nNullam malesuada sem feugiat, efficitur ante id, malesuada ante. Fusce blandit neque convallis nunc mollis interdum. Nam eget dolor fringilla, feugiat felis non, tincidunt massa. Maecenas ligula neque, molestie eget nisi aliquam, gravida faucibus odio. Cras ornare velit non lacus ornare convallis. Nam quis nisl enim. Proin consequat facilisis risus, porttitor convallis dolor venenatis ut. Phasellus at lacinia nunc.\r\n\r\nFusce dignissim dui nec tincidunt venenatis. Donec ullamcorper, dolor ac congue vehicula, velit mauris accumsan felis, eu pellentesque lectus odio ut sem. Vivamus varius ligula quis eros pharetra hendrerit. Ut id blandit odio, sed sollicitudin nisi. Curabitur eros purus, porta id leo sit amet, viverra cursus tellus. Nulla mollis neque mauris, ac pharetra nibh tempus a. Suspendisse egestas eget quam ac rutrum. In', 'Yuudachi poi sangat kawaii', 'http://localhost/dugam%20scout/public/img/naii.gif', 'Admin', '2020-06-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Uname` varchar(255) DEFAULT NULL,
  `Upass` varchar(255) DEFAULT NULL,
  `Level` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `Uname`, `Upass`, `Level`) VALUES
(2, 'Admin', 'DugamScoutJaya', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
