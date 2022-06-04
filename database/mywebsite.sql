-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 10:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mywebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `nama`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'NISRINA AMALIA', '123@gmail.com', 'semangatnis', '2022-04-13 21:40:25', '2022-05-20 07:15:43'),
(2, 'NISRINA AMALIA IFFATUNNISA', '3103120165@student.smktelkom-pwt.sch.id', 'semangat na', '2022-05-14 00:51:12', '2022-05-14 00:51:12'),
(18, 'Amalia', 'amalia11@gmail.com', 'sangat bagus, semangat terus', '2022-05-29 20:49:48', '2022-05-29 20:49:48');

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `teks`, `img`, `created_at`, `updated_at`) VALUES
(19, 'App Inventory using C#', 'inventoryapp.jpg', '2022-05-14 20:44:12', '2022-05-29 20:40:32'),
(20, 'Calculator With JavaScript', 'calculajs.png', '2022-05-18 05:30:04', '2022-05-20 06:43:12'),
(35, 'Prototype Krafindo Cool', 'krafindo.png', '2022-05-29 20:19:38', '2022-05-29 20:19:38'),
(40, 'App Inventory using C#', 'inventoryapp.jpg', '2022-05-29 20:39:51', '2022-05-29 20:39:51'),
(42, 'Casistel pemesanan makanan dan minuman', 'casistel2.jpg', '2022-05-29 20:47:51', '2022-05-29 20:48:42');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_08_144107_create_contacts_table', 1),
(6, '2022_05_11_000329_create_images_table', 2);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'adminmin', '123@gmail.com', NULL, '$2y$10$aTIF82OatRG4wrYpPBGhb.V8lGyKfhm2R3F26cBFIVzv0IBAZST0y', NULL, '2022-04-13 20:28:28', '2022-04-13 20:28:28'),
(2, 'Nisrina Amalia Iffatunnisa', 'nisrinaamaliaiffatunnisa@gmail.com', NULL, '$2y$10$qMdnrZ8Q3.RFW62l9zqDhOo877LELt1BvwvN6hfvjsNvCvKbZOgDC', NULL, '2022-05-15 00:30:08', '2022-05-15 00:30:08'),
(3, 'Nisrina Amalia Iffatunnisa', '3103120165@student.smktelkom-pwt.sch.id', NULL, '$2y$10$Ft0RuVfr44VjwwtAZP3Vmur3vFFwpxziAJBX3hcl1.aceO3tMFu7C', NULL, '2022-05-15 00:34:57', '2022-05-15 00:34:57'),
(4, 'Amalia', 'amalia11@gmail.com', NULL, '$2y$10$LPNK9sTr.BTvcudInenJauBQFRjxjCHwr.wa35/zn5lPiGHgg1wY.', NULL, '2022-05-18 20:58:49', '2022-05-18 20:58:49'),
(5, 'Nisrina', 'nis@gmail.com', NULL, '$2y$10$wkumwJKTNT4ww7kQXz/uzurtarBqvSjf6JazhpIW.dcXFgSjt3O5q', NULL, '2022-05-20 06:12:02', '2022-05-20 06:12:02'),
(6, 'Nisrin User', 'nisrina11@gmail.com', NULL, '$2y$10$GjkNzQBF.CVmAjC5nGPTmOBveXpOXU6S.Uy0ami2Wg5kxmBR8f7LK', NULL, '2022-05-20 07:17:58', '2022-05-20 07:17:58'),
(7, 'User Nisrin', 'nisrin@gmail.com', NULL, '$2y$10$L/bKcT6cv3EVCVfjnReLUeu2DaM.IWORKw1jF0hUONtXR8X4Yd.WC', NULL, '2022-05-20 07:22:35', '2022-05-20 07:22:35'),
(8, 'User Nisrin', 'nisrin11@gmail.com', NULL, '$2y$10$pclditRiTg0/6bwOF.W70OmPt6vWQRe/dYGDb2od5QVHT5NOgYe8S', NULL, '2022-05-20 07:29:49', '2022-05-20 07:29:49'),
(9, 'Nisrin User', 'userna@gmail.com', NULL, '$2y$10$7WCZXU4kApIQ6d8KFrdMXetZDRSerN3.1ySsmihOdD1URd/D7zCb.', NULL, '2022-05-20 07:44:28', '2022-05-20 07:44:28'),
(10, 'User Nisrin', 'nisuser@gmail.com', NULL, '$2y$10$78CjHD0wlCwkJPKkCeP.kuaP7I16qbk4uuYDg6BrAWytY2aLVzApO', NULL, '2022-05-20 07:49:38', '2022-05-20 07:49:38'),
(11, 'Nisrin User', 'nisuser11@gmail.com', NULL, '$2y$10$e0/BrP4UuZ9.Zc4XOhWiIesq6azzXBsZDaIe3VJUQmiKx5qqPY.7W', NULL, '2022-05-20 07:57:52', '2022-05-20 07:57:52'),
(12, 'Nisrina User', 'nisruser@gmail.com', NULL, '$2y$10$s1rDMiAEUh2oVn/Dz49C4.a1RTIKzRFhTSA3oHeZIwPGV55iHNg6S', NULL, '2022-05-20 08:06:23', '2022-05-20 08:06:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
