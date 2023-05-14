-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2023 pada 23.37
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `id_produk`, `jumlah`, `total_harga`) VALUES
(3, 4, 1, 60000),
(4, 8, 2, 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `gambar`, `deskripsi`, `harga`) VALUES
(1, 'Anting Mixthings', '2023-04-30 011515.jpg', 'Anting Mixthings dengan desain elegan dan fashionable, terbuat dari bahan alloy ini bisa dipakai untuk acara pesta maupun formal. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 70000),
(2, 'Anting Rantai', '2023-04-29 235922.jpg', 'Anting Rantai cocok untuk daily style, dengan desain geomteric dipadukan dengan pom-pom membuat simple tapi elegan. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 60000),
(3, 'Anting Multi Bintang', '2023-04-30 000729.jpg', 'Anting Multi Bintang cocok untuk dipakai sehari-hari dan tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 50000),
(4, 'Anting Hoop Boucle ', '2023-04-30 001051.jpg', 'Anting Hoop Boucle cocok untuk dipakai acara pesta maupun formal, tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 60000),
(5, 'Anting Hoops Stainles', '2023-04-30 003102.jpg', 'Anting Hoops Stainles dengan desain klasik cocok untuk dipakai acara pesta atau formal dan tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 50000),
(6, 'Gelang Rantai Cinta', '2023-04-30 003910.jpg', 'Gelang Rantai Cinta dengan desain klasik cocok untuk daily style. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi. ', 60000),
(7, 'Gelang Hati', '2023-05-01 121807.jpg', 'Gelang Hati dengan desain elegan dan fashionable cocok untuk dipakai acara pesta atau formal. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 80000),
(8, 'Gelang Romawi Pecah Kopi', '2023-04-30 005052.jpg', 'Gelang Romawi Pecah Kopi dengan desain elegan dan fashionable, terbuat dari bahan titanium bisa dipakai untuk daily style, acara pesta maupun formal. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 75000),
(9, 'Gelang Fairy', '2023-05-04 142811.jpg', 'Gelang Fairy dengan desain klasik cocok untuk dipakai untuk daily style, acara pesta maupun formal. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 65000),
(10, 'Gelang Kupu-Kupu', '2023-04-30 005758.jpg', 'Gelang Kupu-Kupu dengan desain klasik cocok untuk dipakai untuk daily style, acara pesta maupun formal. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 75000),
(11, 'Kalung Bulgaria', '2023-04-30 010149.jpg', 'Kalung Bulgaria dengan desain klasik dan fashionable, cocok untuk dipakai daily style, acara pesta maupun formal. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 150000),
(12, 'Kalung Zirkon', '2023-05-04 141943.jpg', 'Kalung Zirkon dengan desain klasik dan fashionable, cocok untuk dipakai daily style, acara pesta maupun formal. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 200000),
(13, 'Kalung Kupu-Kupu', '2023-04-30 010732.jpg', 'Kalung Kupu-Kupu dengan desain klasik dan fashionable, cocok untuk dipakai daily style, acara pesta maupun formal. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 180000),
(14, 'Kalung Markis', '2023-04-30 011009.jpg', 'Kalung Markis dengan desain klasik cocok untuk dipakai acara pesta atau formal dan tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 160000),
(15, 'Kalung Liontin Bola', '2023-04-30 011151.jpg', 'Kalung Liontin Bola dengan desain klasik cocok untuk dipakai acara pesta atau formal dan tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` enum('admin','staf','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Erni', 'vero', '029', 'admin'),
(2, 'Xin', 'xin', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
