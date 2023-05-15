-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2023 pada 13.44
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `user_type`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_pesanan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_user`, `id_produk`, `jumlah`, `total_harga`, `status_pesanan`) VALUES
(3, 2, 4, 1, 60000, 1),
(4, 5, 8, 2, 150000, 0),
(5, 3, 4, 1, 60000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `gambar`, `deskripsi`, `harga`) VALUES
(1, 'Anting Mixthings', '2023-04-30 011515.jpg', 'Anting Mixthings dengan desain elegan dan fashionable, terbuat dari bahan alloy ini bisa dipakai untuk acara pesta maupun formal. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 70000),
(2, 'Anting Rantai', '2023-04-29 235922.jpg', 'Anting Rantai cocok untuk daily style, dengan desain geomteric dipadukan dengan pom-pom membuat simple tapi elegan. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 60000),
(3, 'Anting Multi Bintang', '2023-04-30 000729.jpg', 'Anting Multi Bintang cocok untuk dipakai sehari-hari dan tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 50000),
(4, 'Anting Hoop Boucle ', '2023-04-30 001051.jpg', 'Anting Hoop Boucle cocok untuk dipakai acara pesta maupun formal, tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 60000),
(5, 'Anting Hoops Stainles', '2023-04-30 003102.jpg', 'Anting Hoops Stainles dengan desain klasik cocok untuk dipakai acara pesta atau formal dan tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 50000),
(6, 'Gelang Rantai Cinta', '2023-04-30 003910.jpg', 'Gelang Rantai Cinta dengan desain klasik cocok untuk daily style. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi. ', 60000),
(7, 'Gelang Hati', '2023-04-30 003910.jpg', 'Gelang Hati dengan desain elegan dan fashionable cocok untuk dipakai acara pesta atau formal. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 80000),
(8, 'Gelang Romawi Pecah Kopi', '2023-04-30 005052.jpg', 'Gelang Romawi Pecah Kopi dengan desain elegan dan fashionable, terbuat dari bahan titanium bisa dipakai untuk daily style, acara pesta maupun formal. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 75000),
(9, 'Gelang Fairy', '2023-04-30 005354.jpg', 'Gelang Fairy dengan desain klasik cocok untuk dipakai untuk daily style, acara pesta maupun formal. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 65000),
(10, 'Gelang Kupu-Kupu', '2023-04-30 005758.jpg', 'Gelang Kupu-Kupu dengan desain klasik cocok untuk dipakai untuk daily style, acara pesta maupun formal. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 75000),
(11, 'Kalung Bulgaria', '2023-04-30 010149.jpg', 'Kalung Bulgaria dengan desain klasik dan fashionable, cocok untuk dipakai daily style, acara pesta maupun formal. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 150000),
(12, 'Kalung Zirkon', '2023-04-30 010558.jpg', 'Kalung Zirkon dengan desain klasik dan fashionable, cocok untuk dipakai daily style, acara pesta maupun formal. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 200000),
(13, 'Kalung Kupu-Kupu', '2023-04-30 010732.jpg', 'Kalung Kupu-Kupu dengan desain klasik dan fashionable, cocok untuk dipakai daily style, acara pesta maupun formal. Tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 180000),
(14, 'Kalung Markis', '2023-04-30 011009.jpg', 'Kalung Markis dengan desain klasik cocok untuk dipakai acara pesta atau formal dan tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 160000),
(15, 'Kalung Liontin Bola', '2023-04-30 011151.jpg', 'Kalung Liontin Bola dengan desain klasik cocok untuk dipakai acara pesta atau formal dan tahan terhadap asam kuat dan alkali kuat, tidak ada perubahan warna, tidak ada alergi, keras, tidak ada deformasi.', 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi`
--

CREATE TABLE `produksi` (
  `id_produksi` int(2) NOT NULL,
  `id_user` int(4) NOT NULL,
  `id_produk` int(2) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produksi`
--

INSERT INTO `produksi` (`id_produksi`, `id_user`, `id_produk`, `id_pemesanan`, `jumlah`, `total`, `status`) VALUES
(1, 2, 4, 3, 1, 60000, 0),
(2, 4, 8, 4, 2, 150000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `user_type`) VALUES
(1, 'andi aman', 'andiaman', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(2, 'ayam', 'kfc', 'ed354ac1834a230044c9980e2ce18239', 'user'),
(3, 'aku', 'akukua', '3444f0735977e69b6dd7135228a8a224', 'user'),
(4, '', 'user', '$2y$10$JzYYas9zd2iG/2MXWOudF.apuwKIFLqAFEZZ9Xdj7B2UP5LOeRO/O', 'user'),
(5, 'aman', 'ayamenak', '1e48c4420b7073bc11916c6c1de226bb', 'user'),
(7, 'lelah', 'hantuu', 'd9a07834404334b0e4406138d3da0f54', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_produksi`),
  ADD UNIQUE KEY `id_pemesanan` (`id_pemesanan`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_produk` (`id_produk`),
  ADD UNIQUE KEY `jumlah` (`jumlah`),
  ADD UNIQUE KEY `total` (`total`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD CONSTRAINT `produksi_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`),
  ADD CONSTRAINT `produksi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
