-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 07:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pinky_bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `id` int(11) NOT NULL,
  `no_pemesanan` char(10) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `tgl_pemesanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_pemesanan`
--

INSERT INTO `detail_pemesanan` (`id`, `no_pemesanan`, `name`, `email`, `nama_produk`, `harga`, `jumlah`, `subtotal`, `tgl_pemesanan`) VALUES
(1, 'BED39FGD6A', 'Pelanggan', 'pelanggan@gmail.com', 'Coklat Regal', 150000, 1, 150000, '2023-06-26'),
(2, 'BED39FGD6A', 'Pelanggan', 'pelanggan@gmail.com', 'Coklat Regal', 150000, 1, 150000, '2023-06-26'),
(3, 'BED39FGD6A', 'Pelanggan', 'pelanggan@gmail.com', 'Red Velvet', 350000, 1, 350000, '2023-06-26'),
(4, 'BED39FGD6A', 'Pelanggan', 'pelanggan@gmail.com', 'Klasik Opera', 250000, 1, 250000, '2023-06-26'),
(5, 'BED39FGD6A', 'Pelanggan', 'pelanggan@gmail.com', 'Choco Maltine', 230000, 1, 230000, '2023-06-26'),
(6, 'BED39FGD6A', 'Pelanggan', 'pelanggan@gmail.com', 'Coklat Regal', 150000, 1, 150000, '2023-06-26'),
(7, 'P1E2AHMSXW', 'Pelanggan', 'pelanggan@gmail.com', 'Coklat Regal', 150000, 1, 150000, '2023-06-26'),
(8, 'P1E2AHMSXW', 'Pelanggan', 'pelanggan@gmail.com', 'Coklat Regal', 150000, 1, 150000, '2023-06-26'),
(9, 'P1E2AHMSXW', 'Pelanggan', 'pelanggan@gmail.com', 'Red Velvet', 350000, 1, 350000, '2023-06-26'),
(10, 'P1E2AHMSXW', 'Pelanggan', 'pelanggan@gmail.com', 'Klasik Opera', 250000, 1, 250000, '2023-06-26'),
(11, 'P1E2AHMSXW', 'Pelanggan', 'pelanggan@gmail.com', 'Choco Maltine', 230000, 1, 230000, '2023-06-26'),
(12, 'P1E2AHMSXW', 'Pelanggan', 'pelanggan@gmail.com', 'Coklat Regal', 150000, 1, 150000, '2023-06-26'),
(13, 'GOQVE73LVU', 'Admin', 'admin@gmail.com', 'Black Forest', 250000, 1, 250000, '2023-06-26'),
(14, 'GOQVE73LVU', 'Admin', 'admin@gmail.com', 'Red Velvet', 350000, 1, 350000, '2023-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `no_pemesanan` char(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `alamat_kirim` varchar(85) NOT NULL,
  `no_telp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `keterangan` varchar(215) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `keterangan`, `harga`, `stok`, `gambar`) VALUES
(1, 'Black Forest', 'Signature Black Cake with Most Cocoa Chocolate Flavor', 250000, 35, 'blackforest-cake.jpg'),
(2, 'Red Velvet', 'Signature Cake Red Velvet with Soft Cream and Most Velvet Flavor', 350000, 30, 'redvelvet-cake.jpg'),
(3, 'Choco Maltine', 'Special Cake ChocoMaltine with Most Maltine Chocolate Flavor', 230000, 30, 'chocomaltine-cake.jpg'),
(4, 'Klasik Opera', 'Signature Cake Opera with Black Chocolate Mixed Coffee Flavor', 250000, 25, 'klasikopera-cake.jpg'),
(5, 'Matcha Opera', 'Special Cake Matcha Opera with Most Matcha and Chocolate Flavor', 180000, 25, 'matchaopera-cake.jpg'),
(6, 'Choco Devila', 'Signature Cake Choco Devila with Most Chocolate Flavor', 200000, 30, 'chocodevila-cake.jpg'),
(7, 'Coklat Regal', 'Special Cake Regal Chocolate with Biscuits and Chocolate Flavor', 150000, 30, 'cokelatregal-cake.jpg'),
(8, 'Strawberry Keju', 'Signature Cake Strawberry with Most Cheese and Strawberry Fruit', 220000, 25, 'strawberrykeju-cake.jpg'),
(9, 'Vanila Fruit', 'Special Cake Vanilla with Most Tropical Fruit Mixed Vanilla Flavor', 230000, 30, 'vanilafruit-cake.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id_temp` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `tgl_pemesanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `tgl_transaksi` int(11) NOT NULL,
  `keterangan` varchar(126) DEFAULT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `email`, `kuantitas`, `tgl_transaksi`, `keterangan`, `produk_id`) VALUES
(4, 'alexa@gmail.com', 2, 1669523926, 'testing aja 1', 1),
(5, 'alexa@gmail.com', 1, 1669524073, 'testing aja 2', 4),
(6, 'user@user.com', 4, 1669524217, 'testing aja 1', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(27, 'Admin', 'admin@gmail.com', 'default.jpg', '$2y$10$vH9okU45UXZG5HlsCJdSyudCdsZCbbZGy8rFmr4Ia6sPp5v82iFxi', 1, 1, 1687661004),
(28, 'Pelanggan', 'pelanggan@gmail.com', 'default.jpg', '$2y$10$ycCJIiNmLltXdStWcun8eOvJlJnsfzBmqCsdb7i3u9gWHsD4Vs3zO', 2, 1, 1687665498);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(7, 1, 3),
(14, 2, 2),
(26, 1, 2),
(27, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(5, 'Laporan');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Shop', 'user', 'fas fa-fw fa-shopping-bag', 1),
(3, 2, 'Transaksi', 'user/transaksi', 'far fa-fw fa-money-bill-alt', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 1, 'My Admin', 'admin/profileAdmin', 'fas fa-fw fa-user-cog', 1),
(7, 1, 'Role Access', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(9, 2, 'My Profile', 'user/profile', 'fas fa-fw fa-user', 1),
(10, 1, 'Daftar Admin', 'admin/daftarAdmin', 'fas fa-fw fa-users-cog', 1),
(11, 1, 'Daftar Member', 'admin/detailMembers', 'fas fa-fw fa-users', 1),
(12, 1, 'Products', 'admin/products', 'fas fa-fw fa-birthday-cake', 1),
(13, 1, 'Orders', 'admin/orders', 'fas fa-fw fa-inbox', 1),
(14, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(15, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(20, 2, 'Cart', 'pemesanan/cart', 'fas fa-shopping-cart', 1),
(23, 5, 'Laporan Penjualan', 'laporan/laporanPenjualan', 'fas fa-fw fa-book', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id_temp`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id_temp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
