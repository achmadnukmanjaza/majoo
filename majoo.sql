-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 07:30 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `id_beli` int(20) NOT NULL,
  `id_produk` int(20) NOT NULL,
  `nama_pembeli` varchar(200) NOT NULL,
  `email_pembeli` varchar(100) NOT NULL,
  `tlp_pembeli` varchar(100) NOT NULL,
  `alamat_pembeli` text NOT NULL,
  `jumlah_beli` int(100) NOT NULL,
  `proses` varchar(255) DEFAULT 'Belum Di Proses',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`id_beli`, `id_produk`, `nama_pembeli`, `email_pembeli`, `tlp_pembeli`, `alamat_pembeli`, `jumlah_beli`, `proses`, `created_at`, `updated_at`) VALUES
(7, 1, 'Jon Champion', 'Jon Champion', '081999222333', 'Jl. Kawi Malang', 1, 'Proses', '2021-08-06 18:28:18', '2021-08-09 21:02:09'),
(8, 1, 'Jon Champion', 'Jon Champion', '081999222333', 'Jl. Kawi Malang', 5, 'Belum Di Proses', '2021-08-06 18:28:59', '2021-08-06 18:28:59'),
(9, 3, 'Nukman', 'Nukman', '081999222333', 'Jl. Klayatan 3 Malang', 2, 'Belum Di Proses', '2021-08-06 18:30:59', '2021-08-06 18:30:59'),
(10, 3, 'Nukman', 'Nukman', '081999222333', 'Jl. Klayatan 3 Malang', 3, 'Belum Di Proses', '2021-08-06 18:32:42', '2021-08-06 18:32:42'),
(11, 11, 'Jon Champion', 'Jon Champion', '081999222333', 'Malang', 2, 'Belum Di Proses', '2021-08-06 18:36:45', '2021-08-06 18:36:45'),
(12, 1, 'qw', 'qw', '12', 'Surapati Core C8 Bandung Indonesia 40192', 12, 'Belum Di Proses', '2021-08-08 21:34:46', '2021-08-08 21:34:46'),
(13, 3, 'qw', 'qw', '12', 'Surapati Core C8 Bandung Indonesia 40192', 13, 'Belum Di Proses', '2021-08-08 21:44:42', '2021-08-08 21:44:42'),
(14, 1, 'qw', 'qw', '1209', 'Surapati Core C8 Bandung Indonesia 40192', 321, 'Belum Di Proses', '2021-08-08 23:27:51', '2021-08-08 23:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id_produk` int(20) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `harga` int(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `gambar_produk` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id_produk`, `nama_produk`, `harga`, `deskripsi_produk`, `gambar_produk`, `created_at`, `updated_at`) VALUES
(1, 'majoo Pro', 2750000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'standard_repo.png', NULL, '2021-08-08 21:24:51'),
(2, 'majoo Advance', 2750000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a', 'paket-advance.png', NULL, '2021-08-06 13:49:53'),
(3, 'majoo Lifestyle', 2750000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'paket-lifestyle.png', NULL, '2021-08-06 13:50:03'),
(11, 'majoo Dekstop', 2750000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'paket-desktop.png', NULL, '2021-08-08 23:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin', 'admin@majoo.id', NULL, '$2y$10$63ceyEDVjuE9u9pk9BaLFOA7vbl7dd8xvzg6pCsZN093YY/w2Vlpm', 'F6nHv1yGlYVVJ8dlrSAJwIXxaeLz3nsbBJdlFVwcXeZkjnuJAJNyR9XE2bt1', '2021-08-06 10:06:29', '2021-08-06 10:06:29'),
(3, 'admin', 'admin1', 'admin1@majoo.id', NULL, '$2y$10$haXO6K9CnXgCbuUKL8x65.yTIaM.qpK2d5P5rlOhWgo.7tdeNpCi.', 'WcQvGlGnctE4jMLZEb0QDKJ7SQxMmqmLFf2doJ20tT9bKlQhSfLGbMTPqTTX', '2021-08-06 11:39:54', '2021-08-06 11:39:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `nama_produk` (`nama_produk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beli`
--
ALTER TABLE `beli`
  MODIFY `id_beli` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id_produk` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
