-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 09:46 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftarantk`
--

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
-- Table structure for table `galeries`
--

CREATE TABLE `galeries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titlegalery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `captiongalery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeries`
--

INSERT INTO `galeries` (`id`, `foto`, `titlegalery`, `captiongalery`, `created_at`, `updated_at`) VALUES
(2, 'gelery1.jpg', 'Kegiatan', 'Menggambar', '2023-06-01 01:40:32', '2023-06-01 01:40:32'),
(3, 'paralax2.jpg', 'ddaada', 'daadada', '2023-06-01 03:36:37', '2023-06-01 03:36:37'),
(4, 'gelery1.jpg', 'gvgvgvg', 'vgvgvg', '2023-06-01 03:37:59', '2023-06-01 03:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'logo1.jpg', '2023-06-01 01:45:21', '2023-06-01 01:45:21');

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
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_05_31_103920_create_users_table', 1),
(5, '2023_05_31_104039_create_roles_table', 1),
(6, '2023_05_31_104221_create_siswas_table', 1),
(7, '2023_05_31_104519_create_pictures_table', 1),
(8, '2023_05_31_104758_create_galeries_table', 1),
(10, '2023_05_31_180520_add_role_id_column_to_users_table', 2),
(11, '2023_06_01_074320_create_logos_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titleparalax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `captionparalax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `foto`, `titleparalax`, `captionparalax`, `created_at`, `updated_at`) VALUES
(19, 'paralax1.jpg', 'Selamat Datang', 'ini profile kami', '2023-06-01 01:38:11', '2023-06-01 01:38:11'),
(20, 'paralax2.jpg', 'Selamat Datang', 'Ini profile kami', '2023-06-01 01:39:03', '2023-06-01 01:39:03'),
(21, 'paralax3.jpg', 'Selamat Datang', 'ini Profile kami', '2023-06-01 01:39:28', '2023-06-01 01:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'pendaftar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_orangtua` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelpon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akte` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` enum('Kelas A','Kelas B') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Aktif','Tidak Aktif','Lulus') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `nama_siswa`, `usia`, `foto`, `nama_orangtua`, `jeniskelamin`, `notelpon`, `alamat`, `nik`, `akte`, `kelas`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(42, 'adcd', '13', 'paralax3.jpg', '12313331', 'Perempuan', '121313', 'Jl pesantren', '3671130605990007', '12345667', 'Kelas A', 'Lulus', NULL, '2023-06-01 08:59:01', '2023-06-01 09:40:05'),
(43, 'test', '12', 'paralax3.jpg', '12313331', 'Laki-Laki', '1212122121', 'Jl pesantren', '14134', '12345667', 'Kelas A', 'Aktif', NULL, '2023-06-01 09:00:36', '2023-06-01 09:08:16'),
(44, 'azaka', '13', 'gelery1.jpg', 'cadcadcad', 'Perempuan', '68767', 'Jl pesantren', '6767676', '121121', NULL, 'Lulus', NULL, '2023-06-01 09:06:23', '2023-06-01 09:45:18'),
(46, 'test', '12', 'logo1.jpg', '12313331', 'Laki-Laki', '68767', 'Jl pesantren', '1212', '12345667', 'Kelas A', 'Tidak Aktif', NULL, '2023-06-01 10:08:21', '2023-06-01 10:08:21'),
(47, 'test', '12', 'logo1.jpg', '12313331', 'Perempuan', '1313134324', 'Jl pesantren', '687676', '12345667', 'Kelas A', 'Lulus', NULL, '2023-06-01 10:18:32', '2023-06-01 10:18:32'),
(53, 'kunyuk', '16', 'paralax2.jpg', '12313331', 'Laki-Laki', '1212122121', 'Jl pesantren', '555555', '121121', 'Kelas A', 'Aktif', NULL, '2023-06-01 10:55:36', '2023-06-01 10:55:36'),
(54, 'cdadcda', '16', 'paralax1.jpg', '12313331', 'Perempuan', '68767', 'Jl pesantren', '77777', '12134234', 'Kelas A', 'Aktif', NULL, '2023-06-01 10:56:52', '2023-06-01 10:56:52'),
(55, 'test', '12', 'paralax3.jpg', '12313331', 'Laki-Laki', '121313', 'Jl pesantren', '78787', '121121', 'Kelas A', 'Aktif', NULL, '2023-06-01 10:58:24', '2023-06-01 10:58:24'),
(56, 'test123', '12', 'logo1.jpg', '12313331', 'Laki-Laki', '68767', 'Jl pesantren', '22222', '12345667', 'Kelas B', 'Lulus', NULL, '2023-06-01 12:21:48', '2023-06-01 12:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `role_id`, `updated_at`) VALUES
(1, 'admin', '$2y$10$M1X4480qTo/Eg3ktncZA3Oa1GZlCvpf0iyZW.6ZJ2WzWUu3UwuIJq', NULL, 1, NULL),
(2, 'riski', '$2y$10$xjpIQoGlrTCgsh2iNpFLme6qCsduTakbuo2CDfg0QHhG/pKErPnZa', '2023-05-31 11:08:06', 2, '2023-05-31 11:08:06'),
(3, 'riski', '$2y$10$y112.y20BSLiQYHedAlFR.xWuDwT1Xf.jXk6PR/nVCKJXK4wuOx6S', '2023-06-01 03:34:37', 2, '2023-06-01 03:34:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswas_nik_unique` (`nik`),
  ADD KEY `siswas_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `siswas`
--
ALTER TABLE `siswas`
  ADD CONSTRAINT `siswas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
