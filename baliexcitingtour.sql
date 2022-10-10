-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 04:44 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baliexcitingtour`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_packages_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `travel_packages_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(11, 3, '[\"assets\\/gallery\\/2owpatVfLfijBfRygicBDDKAXw1jyVFuMNxxmHY8.jpeg\",\"assets\\/gallery\\/HRXbOA5x0PMldK2p90BJ8nFO31IMIs4W0qAdOhEW.jpeg\",\"assets\\/gallery\\/3ImfMftGPRL3dI38xQ8Uapmau4CfUzRak44VTk0q.jpeg\",\"assets\\/gallery\\/MyopVqwgCa2kuzANu1qT23KkF2uhBkNKnw5hh3KD.jpeg\",\"assets\\/gallery\\/oizJmndfSxK1EAGPE5VUl7i4MqccdrzKkqsq2LnR.jpeg\",\"assets\\/gallery\\/Go4hyxQcJgcEBchwni8Llk40uTpejvRsci1jo5sZ.jpeg\"]', NULL, '2021-09-17 06:25:06', '2021-09-23 03:59:01'),
(12, 1, '[\"assets\\/gallery\\/aRJ2RAzS7BqjvssNnrKkIQSeRACcCmkpbz45jqah.jpeg\",\"assets\\/gallery\\/RD9DS1rHeMzVxJ6jIVAqphhdnR6BHSYttNC47GUT.jpeg\",\"assets\\/gallery\\/0Vtg2gtQMUARKAxJThU3zk6CyeDtnyua3uWox3vJ.jpeg\",\"assets\\/gallery\\/8F6VU2zt1dRX3cRU8qkdamzqYFC9UFDT5ytFwceB.jpeg\",\"assets\\/gallery\\/c5Wkf28T2GTWedLtEOFWdq06gf12ZwYHyYs99iAY.jpeg\",\"assets\\/gallery\\/lSo176HiijrKIkMreLicpq8pRXdjTqJXnajcYT6J.jpeg\"]', NULL, '2021-09-17 06:51:28', '2021-09-29 14:36:18'),
(13, 2, '[\"assets\\/gallery\\/cUBXwJlVmKNERzj21cBoLwRMEZzKFD7Z45FiTbWj.jpeg\",\"assets\\/gallery\\/YgTzvgYyzTP5APOc6v90yKmFMEXHaLOC1PrFdOly.jpeg\",\"assets\\/gallery\\/n0f2LisEG5pAcyP9Z87Z0r0ysPZl9sMwYvhLWRKH.jpeg\",\"assets\\/gallery\\/CGtRmKNMGE8GEt3NHm52Nf9n1EX35h9z2KglJ2nM.jpeg\",\"assets\\/gallery\\/mpxprWRFV5iRpWXWg5N9mtO8vbxIMMzGeqgQWXgm.jpeg\",\"assets\\/gallery\\/Z5KU74fp2hgRli94A8hfd160JEht8id0n8xbTKRa.jpeg\"]', NULL, '2021-09-17 06:51:59', '2021-09-29 15:12:00'),
(14, 4, '[\"assets\\/gallery\\/6RiX3xG2tsyGz6LDxwj3avBrYxPLjy3GuiZejW1o.jpeg\",\"assets\\/gallery\\/rMJMoPuF08b6CAHvTKB7SQjoEitJAy5gpSy1RQTL.jpeg\",\"assets\\/gallery\\/Bg9dZyr0LKnnzfIMeweSryxpruRd94CP88cdtjA1.jpeg\",\"assets\\/gallery\\/fWu2C2OqvXOAVlsK1uddU0Q5ADgMb5l1ot2D5n7L.jpeg\",\"assets\\/gallery\\/X0y2UejL8O75MV3XDKxMFOS1Eih3Q07yCSZtWaF1.jpeg\",\"assets\\/gallery\\/m5oi3FAqnZ133O5GyEmlInWL4Tb1pzByUATYq407.jpeg\"]', NULL, '2021-09-17 06:52:12', '2021-09-29 15:01:03');

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
(4, '2020_11_06_013630_create_travel_packages_table', 1),
(5, '2020_11_06_015629_create_galleries_table', 1),
(6, '2020_11_06_020159_create_transactions_table', 1),
(7, '2020_11_06_020649_create_transaction_detail_table', 1),
(8, '2020_11_08_065955_add_roles_field_to_users_table', 1),
(9, '2020_11_09_070035_add_username_field_to_users_table', 1),
(10, '2021_10_16_084755_rates', 2),
(11, '2021_10_29_130809_create_social_accounts_table', 3);

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
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_packages_id` int(11) NOT NULL,
  `star` int(1) NOT NULL DEFAULT -1,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `travel_packages_id`, `star`, `email`, `review`, `created_at`, `updated_at`) VALUES
(4, 1, 3, 'fajarprayoga23@gmail.com', 'ini sangat bagus', '2021-10-16 02:38:18', '2021-10-16 02:38:18'),
(5, 1, 2, 'admin@admin.com', 'asdasdsadas', '2021-10-16 03:17:20', '2021-10-16 03:17:20'),
(6, 1, 1, 'fajarprayoga23@gmail.com', 'halo halo', '2021-10-16 03:17:42', '2021-10-16 03:17:42'),
(7, 1, 4, 'wonderworxsbali@gmail.com', 'sangat mahal', '2021-10-16 03:33:14', '2021-10-16 03:33:14'),
(8, 1, 2, 'admin@example.com', 'bagus', '2021-10-16 06:18:50', '2021-10-16 06:18:50'),
(9, 4, 3, 'ogiksuekayasa@gmail.com', 'wisata yang populer', '2021-10-16 10:21:27', '2021-10-16 10:21:27'),
(10, 1, 3, 'admin@example.com', 'nice', '2021-10-19 17:05:28', '2021-10-19 17:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_packages_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `additional_visa` int(11) NOT NULL,
  `transaction_total` int(11) NOT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `travel_packages_id`, `users_id`, `additional_visa`, `transaction_total`, `transaction_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 190, 290, 'SUCCESS', '2020-11-26 20:46:32', NULL, '2020-11-26 20:46:32'),
(2, 2, 2, 190, 290, 'SUCCESS', '2020-11-26 20:46:30', NULL, '2020-11-26 20:46:30'),
(3, 2, 1, 0, 400, 'IN_CART', '2020-11-26 20:46:27', '2020-11-26 17:09:09', '2020-11-26 20:46:27'),
(4, 3, 1, 190, 570, 'SUCCESS', NULL, '2020-11-26 20:32:48', '2021-09-23 04:54:33'),
(5, 2, 2, 0, 0, 'IN_CART', NULL, '2020-12-03 06:58:24', '2020-12-03 06:58:55'),
(6, 3, 2, 190, 570, 'PENDING', NULL, '2020-12-03 06:59:04', '2020-12-03 06:59:51'),
(7, 4, 2, 190, 570, 'PENDING', NULL, '2020-12-03 08:50:43', '2020-12-03 08:50:56'),
(8, 1, 1, 0, 190, 'PENDING', NULL, '2020-12-28 04:58:03', '2020-12-28 04:58:26'),
(9, 1, 12, 0, 190, 'IN_CART', NULL, '2021-09-05 23:12:58', '2021-09-05 23:12:58'),
(10, 1, 12, 0, 190, 'IN_CART', NULL, '2021-09-05 23:35:13', '2021-09-05 23:35:13'),
(11, 2, 12, 0, 200, 'PENDING', NULL, '2021-09-06 06:13:23', '2021-09-06 06:22:01'),
(12, 1, 12, 0, 0, 'IN_CART', NULL, '2021-09-07 18:56:33', '2021-09-07 18:56:38'),
(13, 5, 12, 0, 200, 'PENDING', NULL, '2021-09-07 19:07:51', '2021-09-07 19:21:49'),
(14, 5, 12, 0, 200, 'IN_CART', NULL, '2021-09-07 19:25:10', '2021-09-07 19:25:10'),
(15, 1, 12, 0, 190, 'PENDING', NULL, '2021-09-07 19:25:20', '2021-09-07 19:25:23'),
(16, 2, 12, 0, 400, 'PENDING', NULL, '2021-09-07 19:25:47', '2021-09-07 19:26:01'),
(17, 5, 12, 0, 400, 'PENDING', NULL, '2021-09-07 19:26:15', '2021-09-07 19:26:30'),
(18, 2, 12, 0, 400, 'PENDING', NULL, '2021-09-07 19:29:18', '2021-09-07 19:29:31'),
(19, 5, 12, 0, 400, 'PENDING', NULL, '2021-09-07 20:21:06', '2021-09-07 20:21:33'),
(20, 5, 13, 0, 400, 'PENDING', NULL, '2021-09-07 20:24:44', '2021-09-07 20:25:06'),
(21, 5, 13, 0, 400, 'PENDING', NULL, '2021-09-07 20:27:53', '2021-09-07 20:28:17'),
(22, 5, 15, 0, 200, 'PENDING', NULL, '2021-09-15 02:29:12', '2021-09-15 02:29:46'),
(23, 2, 1, 0, 200, 'IN_CART', NULL, '2021-09-15 04:41:56', '2021-09-15 04:41:56'),
(24, 3, 1, 0, 190, 'IN_CART', NULL, '2021-09-16 04:28:02', '2021-09-16 04:46:50'),
(25, 3, 1, 190, 570, 'IN_CART', NULL, '2021-09-27 12:28:26', '2021-09-27 12:28:53'),
(26, 5, 20, 0, 200, 'IN_CART', NULL, '2021-09-27 12:30:42', '2021-09-27 12:30:42'),
(27, 5, 1, 0, 200, 'IN_CART', NULL, '2021-09-27 12:37:05', '2021-09-27 12:37:05'),
(28, 3, 1, 0, 190, 'IN_CART', NULL, '2021-09-27 12:38:06', '2021-09-27 12:38:06'),
(29, 5, 20, 0, 200, 'IN_CART', NULL, '2021-09-27 17:25:01', '2021-09-27 17:25:01'),
(30, 5, 20, 0, 200, 'IN_CART', NULL, '2021-09-27 18:34:12', '2021-09-27 18:34:12'),
(31, 3, 1, 0, 190, 'IN_CART', NULL, '2021-09-27 18:47:25', '2021-09-27 18:47:25'),
(32, 3, 1, 0, 49, 'IN_CART', NULL, '2021-09-27 18:49:05', '2021-09-27 18:49:05'),
(33, 3, 1, 0, 49, 'IN_CART', NULL, '2021-09-27 18:50:02', '2021-09-27 18:50:02'),
(34, 3, 1, 0, 49, 'IN_CART', NULL, '2021-09-27 20:05:25', '2021-09-27 20:05:25'),
(35, 5, 1, 0, 80, 'IN_CART', NULL, '2021-09-28 21:17:35', '2021-09-28 21:17:35'),
(36, 5, 1, 0, 80, 'IN_CART', NULL, '2021-09-28 21:19:50', '2021-09-28 21:19:50'),
(37, 1, 1, 0, 190, 'IN_CART', NULL, '2021-09-29 15:46:47', '2021-09-29 15:47:03'),
(38, 2, 1, 0, 200, 'PENDING', NULL, '2021-09-29 21:34:23', '2021-09-30 22:00:15'),
(39, 5, 1, 0, 80, 'PENDING', NULL, '2021-09-30 22:10:11', '2021-09-30 22:11:04'),
(40, 3, 1, 0, 49, 'PENDING', NULL, '2021-09-30 22:28:46', '2021-09-30 22:28:48'),
(41, 2, 1, 0, 200, 'PENDING', NULL, '2021-09-30 22:29:09', '2021-09-30 22:29:10'),
(42, 2, 1, 0, 200, 'PENDING', NULL, '2021-09-30 22:30:31', '2021-09-30 22:30:32'),
(43, 2, 1, 0, 200, 'PENDING', NULL, '2021-09-30 22:50:23', '2021-09-30 22:50:24'),
(44, 3, 1, 0, 49, 'PENDING', NULL, '2021-09-30 23:07:01', '2021-09-30 23:07:03'),
(45, 2, 1, 0, 200, 'PENDING', NULL, '2021-09-30 23:25:44', '2021-09-30 23:47:28'),
(46, 5, 1, 0, 80, 'IN_CART', NULL, '2021-09-30 23:30:17', '2021-09-30 23:30:17'),
(47, 3, 1, 0, 49, 'PENDING', NULL, '2021-09-30 23:48:42', '2021-09-30 23:48:43'),
(48, 1, 1, 0, 190, 'PENDING', NULL, '2021-09-30 23:51:40', '2021-09-30 23:51:42'),
(49, 5, 1, 0, 80, 'PENDING', NULL, '2021-09-30 23:56:52', '2021-09-30 23:56:54'),
(50, 4, 1, 0, 190, 'PENDING', NULL, '2021-09-30 23:59:48', '2021-09-30 23:59:52'),
(51, 4, 22, 0, 190, 'PENDING', NULL, '2021-10-01 01:05:13', '2021-10-01 01:05:19'),
(52, 4, 22, 0, 190, 'PENDING', NULL, '2021-10-01 01:06:58', '2021-10-01 01:07:00'),
(53, 3, 22, 0, 49, 'PENDING', NULL, '2021-10-01 01:17:36', '2021-10-01 01:17:38'),
(54, 1, 1, 0, 190, 'IN_CART', NULL, '2021-10-03 21:12:06', '2021-10-03 21:12:06'),
(55, 1, 12, 0, 190, 'PENDING', NULL, '2021-10-05 03:47:37', '2021-10-05 03:47:46'),
(56, 1, 1, 0, 190, 'IN_CART', NULL, '2021-10-16 06:22:57', '2021-10-16 06:22:57'),
(57, 1, 1, 0, 190, 'PENDING', NULL, '2021-10-16 06:25:06', '2021-10-16 06:38:12'),
(58, 1, 1, 0, 190, 'IN_CART', NULL, '2021-10-16 06:59:41', '2021-10-16 06:59:41'),
(59, 1, 1, 0, 190, 'IN_CART', NULL, '2021-10-16 07:18:57', '2021-10-16 07:18:57'),
(60, 1, 1, 0, 190, 'PENDING', NULL, '2021-10-16 07:24:36', '2021-10-16 07:24:47'),
(61, 1, 1, 0, 190, 'PENDING', NULL, '2021-10-16 07:25:43', '2021-10-16 07:26:08'),
(62, 5, 1, 0, 80, 'IN_CART', NULL, '2021-10-16 07:36:59', '2021-10-16 07:36:59'),
(63, 5, 1, 0, 80, 'IN_CART', NULL, '2021-10-16 07:49:14', '2021-10-16 07:49:14'),
(64, 5, 1, 0, 80, 'IN_CART', NULL, '2021-10-16 07:49:59', '2021-10-16 07:49:59'),
(65, 5, 1, 0, 80, 'IN_CART', NULL, '2021-10-16 07:50:20', '2021-10-16 07:50:20'),
(66, 5, 1, 0, 80, 'IN_CART', NULL, '2021-10-16 07:51:04', '2021-10-16 07:51:04'),
(67, 1, 1, 0, 190, 'PENDING', NULL, '2021-10-16 08:59:19', '2021-10-16 08:59:35'),
(68, 4, 1, 0, 190, 'PENDING', NULL, '2021-10-16 09:03:15', '2021-10-16 09:03:19'),
(69, 5, 1, 0, 80, 'IN_CART', NULL, '2021-10-19 17:52:59', '2021-10-19 17:52:59'),
(70, 2, 1, 0, 200, 'IN_CART', NULL, '2021-10-19 17:53:42', '2021-10-19 17:53:42'),
(71, 2, 1, 0, 200, 'IN_CART', NULL, '2021-10-19 17:54:00', '2021-10-19 17:54:00'),
(72, 5, 1, 0, 80, 'IN_CART', NULL, '2021-10-19 17:54:11', '2021-10-19 17:54:11'),
(73, 3, 1, 0, 49, 'IN_CART', NULL, '2021-10-28 03:27:22', '2021-10-28 03:27:22'),
(74, 2, 1, 0, 200, 'IN_CART', NULL, '2021-10-28 11:22:07', '2021-10-28 11:22:07'),
(75, 2, 1, 0, 200, 'IN_CART', NULL, '2021-10-28 12:08:50', '2021-10-28 12:08:50'),
(76, 3, 1, 0, 49, 'IN_CART', NULL, '2021-10-28 12:16:11', '2021-10-28 12:16:11'),
(77, 3, 1, 0, 49, 'IN_CART', NULL, '2021-10-28 12:31:08', '2021-10-28 12:31:08'),
(78, 3, 1, 0, 49, 'IN_CART', NULL, '2021-10-28 12:32:29', '2021-10-28 12:32:29'),
(79, 5, 1, 0, 80, 'IN_CART', NULL, '2021-10-28 12:54:57', '2021-10-28 12:54:57'),
(80, 5, 1, 0, 80, 'IN_CART', NULL, '2021-10-28 12:55:08', '2021-10-28 12:55:08'),
(81, 1, 1, 0, 190, 'IN_CART', NULL, '2021-11-24 03:33:45', '2021-11-24 03:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transactions_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_visa` tinyint(1) NOT NULL,
  `departure_date` date NOT NULL DEFAULT current_timestamp(),
  `doe_passport` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transactions_id`, `username`, `nationality`, `is_visa`, `departure_date`, `doe_passport`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'adit', 'ID', 1, '2021-10-16', '2020-11-23', NULL, NULL, NULL),
(2, 1, 'Reyvaldo', 'ID', 0, '2021-10-16', '2020-11-23', NULL, NULL, NULL),
(3, 3, 'Reyvaldo', 'ID', 1, '2021-10-16', '2025-11-27', NULL, '2020-11-26 17:09:09', '2020-11-26 17:09:09'),
(4, 3, 'adit', 'ID', 0, '2021-10-16', '2020-12-30', NULL, '2020-11-26 20:28:39', '2020-11-26 20:28:39'),
(5, 4, 'Reyvaldo', 'ID', 0, '2021-10-16', '2025-11-27', NULL, '2020-11-26 20:32:48', '2020-11-26 20:32:48'),
(6, 4, 'adit', 'ID', 1, '2021-10-16', '2020-12-24', '2020-11-26 20:39:12', '2020-11-26 20:33:23', '2020-11-26 20:39:12'),
(7, 4, 'adit', 'ID', 1, '2021-10-16', '2020-12-23', NULL, '2020-11-26 20:45:33', '2020-11-26 20:45:33'),
(8, 5, 'adit', 'ID', 0, '2021-10-16', '2025-12-03', '2020-12-03 06:58:55', '2020-12-03 06:58:24', '2020-12-03 06:58:55'),
(9, 6, 'adit', 'ID', 0, '2021-10-16', '2025-12-03', NULL, '2020-12-03 06:59:04', '2020-12-03 06:59:04'),
(10, 6, 'Reyvaldo', 'ID', 1, '2021-10-16', '2021-01-01', NULL, '2020-12-03 06:59:22', '2020-12-03 06:59:22'),
(11, 7, 'adit', 'ID', 0, '2021-10-16', '2025-12-03', NULL, '2020-12-03 08:50:43', '2020-12-03 08:50:43'),
(12, 7, 'Reyvaldo', 'ID', 1, '2021-10-16', '2021-01-01', NULL, '2020-12-03 08:50:54', '2020-12-03 08:50:54'),
(13, 8, 'Reyvaldo', 'ID', 0, '2021-10-16', '2025-12-28', NULL, '2020-12-28 04:58:03', '2020-12-28 04:58:03'),
(14, 9, 'fajar', 'ID', 0, '2021-10-16', '2026-09-06', NULL, '2021-09-05 23:12:59', '2021-09-05 23:12:59'),
(15, 10, 'fajar', 'ID', 0, '2021-10-16', '2026-09-06', NULL, '2021-09-05 23:35:13', '2021-09-05 23:35:13'),
(16, 11, 'fajar', 'ID', 0, '2021-10-16', '2026-09-06', NULL, '2021-09-06 06:13:23', '2021-09-06 06:13:23'),
(17, 11, 'fajar', '10', 1, '2021-10-16', '2021-09-01', '2021-09-06 06:19:06', '2021-09-06 06:18:49', '2021-09-06 06:19:06'),
(18, 11, 'fajar', '10', 1, '2021-10-16', '2021-09-29', '2021-09-06 06:22:01', '2021-09-06 06:21:52', '2021-09-06 06:22:01'),
(19, 12, 'fajar', 'ID', 0, '2021-10-16', '2026-09-08', '2021-09-07 18:56:38', '2021-09-07 18:56:33', '2021-09-07 18:56:38'),
(20, 13, 'fajar', 'ID', 0, '2021-10-16', '2026-09-08', NULL, '2021-09-07 19:07:51', '2021-09-07 19:07:51'),
(21, 13, 'adit', 'ID', 0, '2021-10-16', '2021-09-17', '2021-09-07 19:21:49', '2021-09-07 19:19:59', '2021-09-07 19:21:49'),
(22, 14, 'fajar', 'ID', 0, '2021-10-16', '2026-09-08', NULL, '2021-09-07 19:25:10', '2021-09-07 19:25:10'),
(23, 15, 'fajar', 'ID', 0, '2021-10-16', '2026-09-08', NULL, '2021-09-07 19:25:20', '2021-09-07 19:25:20'),
(24, 16, 'fajar', 'ID', 0, '2021-10-16', '2026-09-08', NULL, '2021-09-07 19:25:47', '2021-09-07 19:25:47'),
(25, 16, 'adit', '10', 0, '2021-10-16', '2021-09-01', NULL, '2021-09-07 19:25:59', '2021-09-07 19:25:59'),
(26, 17, 'fajar', 'ID', 0, '2021-10-16', '2026-09-08', NULL, '2021-09-07 19:26:15', '2021-09-07 19:26:15'),
(27, 17, 'adit', 'ID', 0, '2021-10-16', '2021-09-01', NULL, '2021-09-07 19:26:27', '2021-09-07 19:26:27'),
(28, 18, 'fajar', 'ID', 0, '2021-10-16', '2026-09-08', NULL, '2021-09-07 19:29:18', '2021-09-07 19:29:18'),
(29, 18, 'adit', 'ID', 0, '2021-10-16', '2021-09-29', NULL, '2021-09-07 19:29:29', '2021-09-07 19:29:29'),
(30, 19, 'fajar', 'ID', 0, '2021-10-16', '2026-09-08', NULL, '2021-09-07 20:21:06', '2021-09-07 20:21:06'),
(31, 19, 'fajar', '10', 0, '2021-10-16', '2021-09-01', NULL, '2021-09-07 20:21:33', '2021-09-07 20:21:33'),
(32, 20, 'test 1', 'ID', 0, '2021-10-16', '2026-09-08', NULL, '2021-09-07 20:24:44', '2021-09-07 20:24:44'),
(33, 20, 'fajar', 'ID', 0, '2021-10-16', '2021-09-02', NULL, '2021-09-07 20:25:01', '2021-09-07 20:25:01'),
(34, 21, 'test 1', 'ID', 0, '2021-10-16', '2026-09-08', NULL, '2021-09-07 20:27:53', '2021-09-07 20:27:53'),
(35, 21, 'fajar', '10', 0, '2021-10-16', '2021-09-18', NULL, '2021-09-07 20:28:07', '2021-09-07 20:28:07'),
(36, 22, 'restu', 'ID', 0, '2021-10-16', '2026-09-15', NULL, '2021-09-15 02:29:12', '2021-09-15 02:29:12'),
(37, 23, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-09-15', NULL, '2021-09-15 04:41:56', '2021-09-15 04:41:56'),
(38, 24, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-09-16', NULL, '2021-09-16 04:28:02', '2021-09-16 04:28:02'),
(39, 24, 'fajar', 'ID', 1, '2021-10-16', '2022-01-05', '2021-09-16 04:46:50', '2021-09-16 04:46:34', '2021-09-16 04:46:50'),
(40, 25, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-09-27', NULL, '2021-09-27 12:28:26', '2021-09-27 12:28:26'),
(41, 25, 'fajar', 'ID', 1, '2021-10-16', '2021-12-29', NULL, '2021-09-27 12:28:53', '2021-09-27 12:28:53'),
(42, 26, 'tutadi', 'ID', 0, '2021-10-16', '2026-09-27', NULL, '2021-09-27 12:30:42', '2021-09-27 12:30:42'),
(43, 27, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-09-27', NULL, '2021-09-27 12:37:05', '2021-09-27 12:37:05'),
(44, 28, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-09-27', NULL, '2021-09-27 12:38:06', '2021-09-27 12:38:06'),
(45, 29, 'tutadi', 'ID', 0, '2021-10-16', '2026-09-28', NULL, '2021-09-27 17:25:01', '2021-09-27 17:25:01'),
(46, 30, 'tutadi', 'ID', 0, '2021-10-16', '2026-09-28', NULL, '2021-09-27 18:34:12', '2021-09-27 18:34:12'),
(47, 31, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-09-28', NULL, '2021-09-27 18:47:25', '2021-09-27 18:47:25'),
(48, 32, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-09-28', NULL, '2021-09-27 18:49:05', '2021-09-27 18:49:05'),
(49, 33, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-09-28', NULL, '2021-09-27 18:50:02', '2021-09-27 18:50:02'),
(50, 34, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-09-28', NULL, '2021-09-27 20:05:25', '2021-09-27 20:05:25'),
(51, 35, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-09-29', NULL, '2021-09-28 21:17:35', '2021-09-28 21:17:35'),
(52, 36, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-09-29', NULL, '2021-09-28 21:19:50', '2021-09-28 21:19:50'),
(53, 37, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-09-29', NULL, '2021-09-29 15:46:47', '2021-09-29 15:46:47'),
(54, 37, 'fajar', 'ID', 1, '2021-10-16', '2021-10-09', '2021-09-29 15:47:03', '2021-09-29 15:47:02', '2021-09-29 15:47:03'),
(55, 38, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-09-30', NULL, '2021-09-29 21:34:23', '2021-09-29 21:34:23'),
(56, 38, 'fajar', 'ID', 1, '2021-10-16', '2022-02-03', '2021-09-30 20:20:15', '2021-09-30 20:20:05', '2021-09-30 20:20:15'),
(57, 39, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-10-01', NULL, '2021-09-30 22:10:11', '2021-09-30 22:10:11'),
(58, 40, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-10-01', NULL, '2021-09-30 22:28:46', '2021-09-30 22:28:46'),
(59, 41, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-10-01', NULL, '2021-09-30 22:29:09', '2021-09-30 22:29:09'),
(60, 42, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-10-01', NULL, '2021-09-30 22:30:31', '2021-09-30 22:30:31'),
(61, 43, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-10-01', NULL, '2021-09-30 22:50:23', '2021-09-30 22:50:23'),
(62, 44, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-10-01', NULL, '2021-09-30 23:07:01', '2021-09-30 23:07:01'),
(63, 45, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-10-01', NULL, '2021-09-30 23:25:44', '2021-09-30 23:25:44'),
(64, 46, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-10-01', NULL, '2021-09-30 23:30:17', '2021-09-30 23:30:17'),
(65, 47, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-10-01', NULL, '2021-09-30 23:48:42', '2021-09-30 23:48:42'),
(66, 48, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-10-01', NULL, '2021-09-30 23:51:40', '2021-09-30 23:51:40'),
(67, 49, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-10-01', NULL, '2021-09-30 23:56:52', '2021-09-30 23:56:52'),
(68, 50, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-10-01', NULL, '2021-09-30 23:59:48', '2021-09-30 23:59:48'),
(69, 51, 'reza', 'ID', 0, '2021-10-16', '2026-10-01', NULL, '2021-10-01 01:05:13', '2021-10-01 01:05:13'),
(70, 52, 'reza', 'ID', 0, '2021-10-16', '2026-10-01', NULL, '2021-10-01 01:06:58', '2021-10-01 01:06:58'),
(71, 53, 'reza', 'ID', 0, '2021-10-16', '2026-10-01', NULL, '2021-10-01 01:17:36', '2021-10-01 01:17:36'),
(72, 54, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-10-04', NULL, '2021-10-03 21:12:06', '2021-10-03 21:12:06'),
(73, 55, 'fajar', 'ID', 0, '2021-10-16', '2026-10-05', NULL, '2021-10-05 03:47:37', '2021-10-05 03:47:37'),
(74, 56, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-10-16', NULL, '2021-10-16 06:22:57', '2021-10-16 06:22:57'),
(75, 57, 'Reyvaldo', 'ID', 0, '2021-10-16', '2026-10-16', NULL, '2021-10-16 06:25:06', '2021-10-16 06:25:06'),
(76, 58, 'Reyvaldo', 'ID', 0, '2021-10-17', '2026-10-16', NULL, '2021-10-16 06:59:41', '2021-10-16 06:59:41'),
(77, 59, 'Reyvaldo', 'ID', 0, '2021-10-20', '2026-10-16', NULL, '2021-10-16 07:18:57', '2021-10-16 07:18:57'),
(78, 60, 'Reyvaldo', 'ID', 0, '2021-10-20', '2026-10-16', NULL, '2021-10-16 07:24:36', '2021-10-16 07:24:36'),
(79, 61, 'Reyvaldo', 'ID', 0, '2022-01-01', '2026-10-16', NULL, '2021-10-16 07:25:43', '2021-10-16 07:25:43'),
(80, 65, 'Reyvaldo', 'ID', 0, '2021-10-09', '2026-10-16', NULL, '2021-10-16 07:50:20', '2021-10-16 07:50:20'),
(81, 66, 'Reyvaldo', 'ID', 0, '2021-10-14', '2026-10-16', NULL, '2021-10-16 07:51:04', '2021-10-16 07:51:04'),
(82, 67, 'Reyvaldo', 'ID', 0, '2022-01-04', '2026-10-16', NULL, '2021-10-16 08:59:19', '2021-10-16 08:59:19'),
(83, 68, 'Reyvaldo', 'ID', 0, '2021-10-06', '2026-10-16', NULL, '2021-10-16 09:03:15', '2021-10-16 09:03:15'),
(84, 69, 'Reyvaldo', 'ID', 0, '2021-12-03', '2026-10-20', NULL, '2021-10-19 17:52:59', '2021-10-19 17:52:59'),
(85, 70, 'Reyvaldo', 'ID', 0, '2021-12-10', '2026-10-20', NULL, '2021-10-19 17:53:42', '2021-10-19 17:53:42'),
(86, 71, 'Reyvaldo', 'ID', 0, '2022-01-06', '2026-10-20', NULL, '2021-10-19 17:54:00', '2021-10-19 17:54:00'),
(87, 72, 'Reyvaldo', 'ID', 0, '2022-01-01', '2026-10-20', NULL, '2021-10-19 17:54:11', '2021-10-19 17:54:11'),
(88, 73, 'Reyvaldo', 'ID', 0, '2021-10-01', '2026-10-28', NULL, '2021-10-28 03:27:22', '2021-10-28 03:27:22'),
(89, 74, 'Reyvaldo', 'ID', 0, '2021-12-17', '2026-10-28', NULL, '2021-10-28 11:22:07', '2021-10-28 11:22:07'),
(90, 75, 'Reyvaldo', 'ID', 0, '2021-10-07', '2026-10-28', NULL, '2021-10-28 12:08:50', '2021-10-28 12:08:50'),
(91, 76, 'Reyvaldo', 'ID', 0, '2021-10-30', '2026-10-28', NULL, '2021-10-28 12:16:11', '2021-10-28 12:16:11'),
(92, 77, 'Reyvaldo', 'ID', 0, '2021-10-30', '2026-10-28', NULL, '2021-10-28 12:31:08', '2021-10-28 12:31:08'),
(93, 78, 'Reyvaldo', 'ID', 0, '2021-12-16', '2026-10-28', NULL, '2021-10-28 12:32:29', '2021-10-28 12:32:29'),
(94, 79, 'Reyvaldo', 'ID', 0, '2021-10-30', '2026-10-28', NULL, '2021-10-28 12:54:57', '2021-10-28 12:54:57'),
(95, 80, 'Reyvaldo', 'ID', 0, '2021-11-12', '2026-10-28', NULL, '2021-10-28 12:55:08', '2021-10-28 12:55:08'),
(96, 81, 'Reyvaldo', 'ID', 0, '2021-11-23', '2026-11-24', NULL, '2021-11-24 03:33:45', '2021-11-24 03:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `travel_packages`
--

CREATE TABLE `travel_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foods` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_date` date NOT NULL DEFAULT current_timestamp(),
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_travel` enum('bookperday','more') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'more',
  `price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_packages`
--

INSERT INTO `travel_packages` (`id`, `title`, `slug`, `location`, `about`, `featured_event`, `language`, `foods`, `departure_date`, `duration`, `type`, `type_travel`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'UBUD', 'ubud', 'BALI', 'Stressed Out', 'Dance', 'English', 'Tipat Cantok', '2020-12-01', '1D1N', 'Private Trip', 'more', 190, NULL, '2020-11-18 08:59:35', '2021-09-30 23:16:33'),
(2, 'KARANGASEM', 'karangasem', 'BALI', 'ngalih demen', 'More Event', 'English', 'More Foods', '2020-12-30', '3D', 'Private Trip', 'more', 200, NULL, '2020-11-19 00:03:04', '2021-09-28 21:40:16'),
(3, 'NUSA PENIDA', 'nusa-penida', 'BALI', 'Nusa Penida is an island southeast of Indonesia\'s island Bali and a district of Klungkung \r\nRegency that includes the neighbouring small island of Nusa Lembongan. The Badung \r\nStrait separates the island and Bali. The interior of Nusa Penida is hilly with a maximum \r\naltitude of 524 metres. It is drier than the nearby island of Bali.\r\n\r\nBali and a district of Klungkung Regency that includes the neighbouring small island of \r\nNusa Lembongan. The Badung Strait separates the island and Bali.', 'Tari Kecak', 'English', 'More Foods', '2020-12-01', '1D1N', 'Private Trip', 'more', 49, NULL, '2020-11-25 11:17:17', '2021-09-28 21:41:16'),
(4, 'BEDUGUL', 'bedugul', 'BALI', 'aa', 'More Event', 'English', 'More Foods', '2020-11-26', '1D1N', 'Private Trip', 'more', 190, NULL, '2020-11-25 11:25:10', '2021-09-28 21:40:49'),
(5, 'Booking Per Day', 'booking-per-day', 'All Location', 'Kamu bisa keliling ke semua lokasi di bali dalam satu hari sepuasnya kemana pun dan dimana pun kami siap ajak anda berkililing di daerah Bali', 'Go Arround As Much', 'Bahasa Indonesia', 'More Foods', '2021-09-01', '1D', 'Private Trip', 'bookperday', 80, NULL, '2021-09-07 18:21:17', '2021-09-28 20:54:47'),
(6, 'Test image Upload Image', 'test-image-upload-image', 'BALI', 'Test Image Upload Image', 'More Event', 'Bahasa Indonesia', 'Sate', '2021-09-16', '2D1N', 'Private Trip', 'more', 20000, '2021-09-17 19:49:37', '2021-09-15 05:10:26', '2021-09-17 19:49:37');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `username`) VALUES
(1, 'Reyvaldo Lingga', 'linggaedo9@gmail.com', '2020-11-18 08:30:00', '$2y$10$kcjGjrWswWtRfEcYhYa1x.miGMAVnpWZipGhY3h4YF/zuNtziSEm.', NULL, '2020-11-18 08:29:35', '2020-11-18 08:30:00', 'ADMIN', 'Reyvaldo'),
(2, 'adit', 'adit@gmail.com', '2020-11-18 08:33:23', '$2y$10$5xU.LQeqwWQp9DP6/kBLh.3UhoxcdLkNELnR0LvgxGtNI15gBokdy', NULL, '2020-11-18 08:33:12', '2020-11-18 08:33:23', 'USER', 'adit'),
(12, 'fajar prayoga', 'fajarprayoga23@gmail.com', '2021-09-05 23:08:52', '$2y$10$Jj6OiZjg4ZYKsJHaDaUF9OU6blc/Ykvk8X7lEADRS8TY1Vmo3zrZa', NULL, '2021-09-05 23:08:17', '2021-09-05 23:08:52', 'ADMIN', 'fajar'),
(13, 'test-1', 'test1@gmail.com', '2021-09-07 20:24:27', '$2y$10$a4nSmBCgrsFax9GCngb2Q.722..11uKOOHtQuZVZztmTKEx64iryC', NULL, '2021-09-07 20:23:20', '2021-09-07 20:24:27', 'USER', 'test 1'),
(14, 'revaldo', 'revaldo@gmail.com', '2021-09-07 20:32:07', '$2y$10$Q9QXdDMj3YLoU1IH4TuGAOb.pAjaCxMCEBlkEQ257JBFaPil0P9Du', NULL, '2021-09-07 20:31:31', '2021-09-07 20:32:07', 'USER', 'revaldo'),
(15, 'restu', 'restu@gmail.com', '2021-09-15 02:27:03', '$2y$10$qY.mWXe61s2azhWS/tB5ke02cpEqciQU6D68DZnYB6Jm/dSfTC2Ie', NULL, '2021-09-15 02:25:41', '2021-09-15 02:27:03', 'USER', 'restu'),
(16, 'esa', 'edobastard13@gmail.com', NULL, '$2y$10$2nGWuwWMrBygbd79gqzuyOu655U1Gkyz5SplBhaGxBycTCQtDmGva', NULL, '2021-09-16 03:11:19', '2021-09-16 03:11:19', 'USER', 'esa'),
(17, 'ode', 'edobastard17@gmail.com', NULL, '$2y$10$QFAosa4qVNGKujth7tNEgehFDDwrAxK1VO.RkwpLvYef8TsjaZYUS', NULL, '2021-09-16 03:16:45', '2021-09-16 03:16:45', 'USER', 'ode'),
(18, 'tabis', 'tabis@gmail.com', NULL, '$2y$10$lDkxx3NaCy30Dh3RexzHRuLb4Mcx0UTnE5jc/alkV515w/WP0bwnC', NULL, '2021-09-25 04:19:58', '2021-09-25 04:19:58', 'USER', 'tabis'),
(19, 'ade', 'adesurya@gmail.com', NULL, '$2y$10$tEKiHokVz/Acpsq98PqmYuKJ40JfwljaKXd5dq.S0vE.RppMxZhMS', NULL, '2021-09-25 04:21:42', '2021-09-25 04:21:42', 'USER', 'adesurya'),
(20, 'tut adi', 'tutadi@gmail.com', '2021-09-27 12:30:23', '$2y$10$7EE6AxlEDtblE714MEhkCe5..SeMSl5UKHkful1KYbX2a98MAGIgy', NULL, '2021-09-27 12:29:31', '2021-09-27 12:30:23', 'USER', 'tutadi'),
(21, 'adi', 'adi@gmail.com', NULL, '$2y$10$JVlWe5RfEO.pSHbWT/7ByOVfiS.i9CH.jQ1DwDeKcCW7qoIBv5u2S', NULL, '2021-10-01 00:01:20', '2021-10-01 00:01:20', 'USER', 'adi'),
(22, 'reza', 'reza@gmail.com', '2021-10-01 01:05:01', '$2y$10$k3BKMEAQnoIIlCm.TGKHRuRMZGhuLZJUjR2Rt4T2nbsqNw4/7JAri', NULL, '2021-10-01 00:28:35', '2021-10-05 04:45:06', 'ADMIN', 'reza');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `social_accounts_provider_id_unique` (`provider_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_packages`
--
ALTER TABLE `travel_packages`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `travel_packages`
--
ALTER TABLE `travel_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
