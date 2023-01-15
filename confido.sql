-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2023 at 08:32 PM
-- Server version: 10.3.37-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fikridea_confido`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

CREATE TABLE `airlines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `gate` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`id`, `name`, `gate`, `created_at`, `updated_at`) VALUES
(4, 'Lion Air', '11D', '2022-12-09 09:06:57', '2022-12-15 17:51:34'),
(5, 'Batik Air', '11B', '2022-12-09 09:55:03', '2022-12-15 17:51:26'),
(7, 'Citilink', '15B', '2022-12-15 17:53:23', '2022-12-15 17:53:23'),
(8, 'Garuda Indonesia', '28A', '2022-12-15 17:54:35', '2022-12-15 17:54:35'),
(9, 'Sriwijaya Air', '18C', '2022-12-15 17:55:13', '2022-12-15 17:55:13'),
(10, 'Air Asia', '20A', '2022-12-15 17:55:35', '2022-12-15 17:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `body` varchar(255) NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `seenForAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `order_id`, `user_id`, `body`, `seen`, `seenForAdmin`, `created_at`, `updated_at`) VALUES
(9, 45, 1, 'test', 1, 1, '2022-12-22 09:42:15', '2022-12-22 10:08:27'),
(10, 45, 2, 'komentar paling akhir', 1, 1, '2022-12-22 10:05:44', '2022-12-22 10:08:27'),
(11, 45, 2, 'komentar paling akhir', 1, 1, '2022-12-22 10:05:44', '2022-12-22 10:08:27'),
(12, 45, 1, 'dawdawd', 1, 0, '2022-12-22 10:08:27', '2022-12-22 10:08:27'),
(13, 46, 8, 'halo slmt malam admin, ingin melaporkan bahwa aplikasi sedang tidak bisa diakses ya ?', 1, 1, '2022-12-23 05:02:20', '2022-12-23 05:06:26'),
(14, 46, 1, 'malam, terima kasih sudah melapor kepada kami dan web akan segera diperbaiki. mohon bersedia menunggu yaa :)', 1, 1, '2022-12-23 05:05:15', '2022-12-23 05:06:26'),
(15, 46, 8, 'baik terimakasih', 0, 1, '2022-12-23 05:06:26', '2022-12-23 05:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `methods`
--

CREATE TABLE `methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `method` varchar(255) NOT NULL,
  `target_account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `methods`
--

INSERT INTO `methods` (`id`, `method`, `target_account`, `created_at`, `updated_at`) VALUES
(6, 'Dana', '081387000325', '2022-12-16 10:54:25', '2022-12-16 10:54:25'),
(7, 'Debit - BNI', '1030923992', '2022-12-16 10:54:41', '2022-12-16 10:54:41'),
(8, 'Debit - BRI', '12319391391', '2022-12-16 10:54:49', '2022-12-16 10:55:04'),
(9, 'Debit - BCA', '139138131313', '2022-12-16 10:54:57', '2022-12-16 10:55:09'),
(10, 'GoPay', '081387000325', '2022-12-16 10:55:24', '2022-12-16 10:55:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2022_10_12_054531_create_orders_table', 1),
(6, '2022_10_12_054938_create_prices_table', 1),
(7, '2022_10_12_055110_create_tickets_table', 1),
(8, '2022_10_12_055145_create_types_table', 1),
(9, '2022_10_12_055226_create_tracks_table', 1),
(10, '2022_10_12_055334_create_transactions_table', 1),
(11, '2022_10_12_055356_create_airlines_table', 1),
(12, '2022_10_12_060759_create_posts_table', 1),
(13, '2022_10_12_074352_create_tags_table', 1),
(14, '2022_10_12_074737_create_post_tag_table', 1),
(15, '2022_10_13_054128_create_totals_table', 1),
(16, '2022_10_13_054531_create_payment_table', 1),
(17, '2022_10_19_084735_create_methods_table', 1),
(18, '2022_11_17_062817_create_histories_table', 1),
(19, '2022_11_29_151914_create_passengers_table', 1),
(20, '2022_12_07_085131_create_complaints_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_code` varchar(255) NOT NULL,
  `ticket_id` bigint(20) UNSIGNED NOT NULL,
  `round_trip` tinyint(1) NOT NULL,
  `go_date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_code`, `ticket_id`, `round_trip`, `go_date`, `amount`, `created_at`, `updated_at`) VALUES
(34, 3, '1671161330523', 19, 0, '2022-12-28', 2, '2022-12-15 20:28:50', '2022-12-15 20:28:50'),
(35, 3, '1671164725326', 15, 0, '2023-01-04', 1, '2022-12-15 21:25:25', '2022-12-15 21:25:25'),
(37, 2, '1671254864042', 11, 0, '2022-12-17', 1, '2022-12-16 22:27:44', '2022-12-16 22:27:44'),
(38, 3, '1671256689906', 18, 0, '2022-12-28', 1, '2022-12-16 22:58:09', '2022-12-16 22:58:09'),
(41, 7, '1671691852710', 13, 0, '2022-12-22', 1, '2022-12-21 23:50:52', '2022-12-21 23:50:52'),
(42, 1, '1671718523940', 13, 0, '2022-12-22', 1, '2022-12-22 07:15:23', '2022-12-22 07:15:23'),
(43, 2, '1671718927474', 13, 0, '2022-12-22', 1, '2022-12-22 07:22:07', '2022-12-22 07:22:07'),
(44, 2, '1671726137565', 13, 0, '2022-12-22', 1, '2022-12-22 09:22:17', '2022-12-22 09:22:17'),
(45, 2, '1671727227687', 19, 0, '2022-12-26', 1, '2022-12-22 09:40:27', '2022-12-22 09:40:27'),
(46, 8, '1671729633506', 19, 0, '2022-12-30', 1, '2022-12-22 10:20:33', '2022-12-22 10:20:33'),
(47, 8, '1671756881833', 17, 0, '2022-12-30', 1, '2022-12-22 17:54:41', '2022-12-22 17:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`id`, `order_id`, `name`, `id_number`, `gender`, `created_at`, `updated_at`) VALUES
(1, 3, 'dawdaw', 'awdawd', 1, '2022-12-09 23:38:55', '2022-12-09 23:38:55'),
(2, 20, 'dawd', 'awdawd', 0, '2022-12-14 08:12:38', '2022-12-14 08:12:38'),
(3, 20, 'dawd', 'awdawd', 1, '2022-12-14 08:12:38', '2022-12-14 08:12:38'),
(4, 29, 'a', 'a', 1, '2022-12-14 09:02:02', '2022-12-14 09:02:02'),
(5, 30, 'Fikri Dean', '11210910000039', 1, '2022-12-15 08:35:08', '2022-12-15 08:35:08'),
(6, 31, 'Fikri', '11210910000039', 1, '2022-12-15 08:41:59', '2022-12-15 08:41:59'),
(7, 32, 'Ryan Purnomo', '21335346', 1, '2022-12-15 17:43:24', '2022-12-15 17:43:24'),
(8, 33, 'Sudarja', '317409876424', 1, '2022-12-15 20:09:06', '2022-12-15 20:09:06'),
(9, 34, 'Firmat', '523621', 1, '2022-12-15 20:28:51', '2022-12-15 20:28:51'),
(10, 34, 'Rizky', '325235', 1, '2022-12-15 20:28:51', '2022-12-15 20:28:51'),
(11, 35, 'Umar Hasan', '25352623', 1, '2022-12-15 21:25:26', '2022-12-15 21:25:26'),
(12, 36, 'Fikri Dean', '1120191010', 1, '2022-12-16 22:20:58', '2022-12-16 22:20:58'),
(13, 37, 'dawd', 'awdawd', 1, '2022-12-16 22:27:45', '2022-12-16 22:27:45'),
(14, 38, 'Ryan Purnomo', '749591759', 1, '2022-12-16 22:58:11', '2022-12-16 22:58:11'),
(15, 39, 'Fokri Dean', '191762635363', 1, '2022-12-16 23:25:25', '2022-12-16 23:25:25'),
(16, 40, 'Fokri Dean', '191762635363', 1, '2022-12-16 23:25:25', '2022-12-16 23:25:25'),
(17, 41, 'Fikri Dean', '11210910000039', 1, '2022-12-21 23:50:54', '2022-12-21 23:50:54'),
(18, 42, 'Fikri Dean', '11210910000039', 1, '2022-12-22 07:15:24', '2022-12-22 07:15:24'),
(19, 43, 'Fikri Dean', '11210910000039', 1, '2022-12-22 07:22:08', '2022-12-22 07:22:08'),
(20, 44, 'Fikri Dean', '11210910000039', 1, '2022-12-22 09:22:18', '2022-12-22 09:22:18'),
(21, 45, 'Suiryu', '1929292921', 1, '2022-12-22 09:40:28', '2022-12-22 09:40:28'),
(22, 46, 'Fauzan', '327610987', 1, '2022-12-22 10:20:34', '2022-12-22 10:20:34'),
(23, 47, 'Iyan', '14367910', 1, '2022-12-22 17:54:42', '2022-12-22 17:54:42'),
(24, 48, 'Zone Zhiver', '12293293492', 1, '2022-12-23 05:19:55', '2022-12-23 05:19:55'),
(25, 49, 'Zone Zhiver', '12293293492', 1, '2022-12-23 05:19:55', '2022-12-23 05:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 0, '2022-12-09 09:06:57', '2022-12-09 09:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `tag_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ticket_id` bigint(20) UNSIGNED NOT NULL,
  `price` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `ticket_id`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1000000, '2022-12-09 09:06:57', '2022-12-09 09:06:57'),
(2, 2, 100000, '2022-12-09 09:18:31', '2022-12-09 09:18:31'),
(3, 3, NULL, '2022-12-09 09:27:05', '2022-12-09 09:27:05'),
(4, 4, 100000, '2022-12-09 09:28:33', '2022-12-09 09:29:47'),
(5, 5, 100000, '2022-12-09 09:30:01', '2022-12-09 09:30:01'),
(6, 6, 100000, '2022-12-09 09:37:06', '2022-12-09 09:37:12'),
(7, 7, 100000, '2022-12-09 23:37:53', '2022-12-09 23:37:53'),
(8, 8, 1500000, NULL, '2022-12-15 17:48:58'),
(9, 9, 950000, '2022-12-15 17:57:31', '2022-12-15 17:57:31'),
(10, 10, 900000, '2022-12-15 17:58:00', '2022-12-15 17:58:00'),
(11, 11, 1100000, '2022-12-15 20:08:25', '2022-12-15 20:08:25'),
(12, 12, 1150000, '2022-12-15 20:22:45', '2022-12-15 20:22:45'),
(13, 13, 800000, '2022-12-15 20:23:50', '2022-12-15 20:23:50'),
(14, 14, 820000, '2022-12-15 20:24:04', '2022-12-15 20:24:04'),
(15, 15, 910000, '2022-12-15 20:24:30', '2022-12-15 20:24:30'),
(16, 16, 950000, '2022-12-15 20:24:47', '2022-12-15 20:24:47'),
(17, 17, 1000000, '2022-12-15 20:25:08', '2022-12-15 20:25:08'),
(18, 18, 1050000, '2022-12-15 20:25:31', '2022-12-15 20:25:31'),
(19, 19, 850000, '2022-12-15 20:25:55', '2022-12-15 20:25:55'),
(20, 20, 880000, '2022-12-15 20:26:09', '2022-12-15 20:26:09'),
(21, 21, 950000, '2022-12-15 20:26:49', '2022-12-15 20:26:49'),
(22, 22, 980000, '2022-12-15 20:27:02', '2022-12-15 20:27:02'),
(23, 23, 1700000, '2022-12-15 20:42:23', '2022-12-15 20:42:23'),
(24, 24, 1750000, '2022-12-15 20:42:49', '2022-12-15 20:42:49'),
(25, 25, 2000000, '2022-12-22 07:52:21', '2022-12-22 07:53:24'),
(26, 26, 850000, '2022-12-23 05:18:56', '2022-12-23 05:18:56'),
(27, 27, 500000, '2022-12-23 08:34:39', '2022-12-23 08:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `airline_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `track_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `airline_id`, `type_id`, `track_id`, `created_at`, `updated_at`) VALUES
(11, 8, 4, 6, '2022-12-15 20:08:25', '2022-12-15 20:08:25'),
(12, 8, 4, 7, '2022-12-15 20:22:45', '2022-12-15 20:22:45'),
(13, 4, 4, 6, '2022-12-15 20:23:50', '2022-12-15 20:23:50'),
(14, 4, 4, 7, '2022-12-15 20:24:04', '2022-12-15 20:24:04'),
(15, 5, 4, 6, '2022-12-15 20:24:30', '2022-12-15 20:24:30'),
(16, 5, 4, 7, '2022-12-15 20:24:47', '2022-12-15 20:24:47'),
(17, 7, 4, 6, '2022-12-15 20:25:08', '2022-12-15 20:25:08'),
(18, 7, 4, 7, '2022-12-15 20:25:31', '2022-12-15 20:25:31'),
(19, 9, 4, 6, '2022-12-15 20:25:55', '2022-12-15 20:25:55'),
(20, 9, 4, 7, '2022-12-15 20:26:08', '2022-12-15 20:26:08'),
(21, 10, 4, 6, '2022-12-15 20:26:49', '2022-12-15 20:26:49'),
(22, 10, 4, 7, '2022-12-15 20:27:02', '2022-12-15 20:27:02'),
(23, 8, 4, 11, '2022-12-15 20:42:23', '2022-12-15 20:42:23'),
(24, 8, 4, 12, '2022-12-15 20:42:49', '2022-12-15 20:42:49'),
(26, 4, 4, 8, '2022-12-23 05:18:56', '2022-12-23 05:18:56'),
(27, 4, 4, 27, '2022-12-23 08:34:38', '2022-12-23 08:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `totals`
--

CREATE TABLE `totals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `total` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `totals`
--

INSERT INTO `totals` (`id`, `order_id`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1000000, '2022-12-09 09:06:57', '2022-12-09 09:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_route` varchar(255) NOT NULL,
  `to_route` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`id`, `from_route`, `to_route`, `created_at`, `updated_at`) VALUES
(6, 'Jakarta', 'Yogyakarta', '2022-12-15 17:50:12', '2022-12-15 17:50:12'),
(7, 'Yogyakarta', 'Jakarta', '2022-12-15 17:50:27', '2022-12-15 17:50:27'),
(8, 'Jakarta', 'Bandung', '2022-12-15 17:56:06', '2022-12-15 17:56:06'),
(9, 'Jakarta', 'Surabaya', '2022-12-15 17:56:35', '2022-12-15 17:56:35'),
(10, 'Surabaya', 'Jakarta', '2022-12-15 17:56:45', '2022-12-15 17:56:45'),
(11, 'Jakarta', 'Bali', '2022-12-15 19:45:40', '2022-12-15 19:45:40'),
(12, 'Bali', 'Jakarta', '2022-12-15 19:45:48', '2022-12-15 19:45:48'),
(13, 'Bandung', 'Jakarta', '2022-12-15 20:33:13', '2022-12-15 20:33:13'),
(14, 'Jakarta', 'Malang', '2022-12-15 20:39:53', '2022-12-15 20:39:53'),
(19, 'Malang', 'Jakarta', '2022-12-15 21:25:46', '2022-12-15 21:25:46'),
(27, 'Jakarta', 'Semarang', '2022-12-23 08:28:59', '2022-12-23 08:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `method_id` bigint(20) UNSIGNED NOT NULL,
  `name_account` varchar(255) NOT NULL,
  `from_account` varchar(255) NOT NULL,
  `total` bigint(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `order_id`, `method_id`, `name_account`, `from_account`, `total`, `image`, `status`, `created_at`, `updated_at`) VALUES
(34, 34, 1, 'Dian Santro', '8690266', 1700000, NULL, 1, '2022-12-15 20:28:50', '2022-12-15 20:37:09'),
(35, 35, 1, 'Gilang Pertama', '8503275', 910000, NULL, 0, '2022-12-15 21:25:25', '2022-12-15 21:25:25'),
(37, 37, 6, 'dawdawd', '111', 1100000, 'public_payment/DwhjaYtY2GPRWYAzawR4OfYpQDDejIbxrPWxxHTE.jpg', 1, '2022-12-16 22:27:44', '2022-12-17 00:45:27'),
(38, 38, 7, 'Gilang Pramana', '73849217', 1050000, 'public_payment/DlONRMi2yDCUVTdyUtWO2sAFiK3LSQvwd9RtFdbw.jpg', 0, '2022-12-16 22:58:10', '2022-12-19 08:02:44'),
(41, 41, 7, 'Fikri Dean', '111', 800000, 'public_payment/haygvAlrikkh6DRk5AJoGRBYVamSwANfiktLOSJ7.jpg', 0, '2022-12-21 23:50:53', '2022-12-21 23:51:16'),
(42, 42, 6, 'Fikri Dean', '081387000325', 800000, NULL, 0, '2022-12-22 07:15:23', '2022-12-22 07:15:23'),
(43, 43, 6, 'Fikri Dean', '081387000325', 800000, 'public_payment/8HMXSyZFrDzyGwVljt8nVWFdnLWzjg3aSI9CcnJf.jpg', 1, '2022-12-22 07:22:07', '2022-12-22 07:50:09'),
(44, 44, 6, 'Fikri Dean', '081387000325', 800000, 'public_payment/kOkUdMPhduNEoJZ72xebANlBFrp2ii3tnpWP6QS7.jpg', 0, '2022-12-22 09:22:17', '2022-12-22 09:22:28'),
(45, 45, 7, 'Suiryu', '001010993939', 850000, NULL, 0, '2022-12-22 09:40:27', '2022-12-22 09:40:27'),
(46, 46, 7, 'Zhiver Zone Firmansyah', '698563', 850000, 'public_payment/BO1wvYxKccHn4Y8MXavJpmQJu0sxIfeaea1MjsNI.jpg', 1, '2022-12-22 10:20:33', '2022-12-22 17:56:35'),
(47, 47, 8, 'Zhiver Zone', '784914910', 1000000, 'public_payment/LRLI0Nn8JqJc6qqh0rF8RUmqQf0YsCMnu6VOviRN.jpg', 1, '2022-12-22 17:54:41', '2022-12-23 04:43:52');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `flight_at` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `flight_at`, `created_at`, `updated_at`) VALUES
(1, 'Business Class', '07:00:00', '2022-12-09 09:06:57', '2022-12-09 09:06:57'),
(2, 'First Class', '13:00:00', '2022-12-09 09:06:57', '2022-12-09 09:06:57'),
(4, 'Ekonomi', '20:31:00', '2022-12-10 00:07:54', '2022-12-10 00:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'public_profiles/default_profile.jpg',
  `role` varchar(255) NOT NULL DEFAULT 'customer',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `phone_number`, `gender`, `image`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Ini Admin', 'deanradityo@gmail.com', '2022-12-09 09:06:56', '$2y$10$ojv6ZaoHdr3KsFh8b8I2kOS4.MHznj1Ccd0BDewDy1m79TfsJbbH6', 'mQnlEao5k12RXJKGRIjz8pP6qWl9d7EosQDOpkzhrSLdgDwTWTHUAu1vZoUM', '098653290078', 1, 'public_profiles/7U1AlBczMw3P5gd0FIQ3asF1ptdlDtcE41IyugOo.jpg', 'admin', '2022-12-09 09:06:57', '2022-12-22 08:26:19'),
(2, 'Fikri Dean', 'fikrideanradityo@gmail.com', '2022-12-09 09:06:57', '$2y$10$IHucQJj2.RiehrZBxHFoE.g0ZxjqyW.fhtlTaPDs8zHnzDaSx0PEu', '3AkA13KzhW38aC9CNe33qFU0fkZgUrnS7Gb7RNohCENsaaJ3bBBlAt1c2FO2', '081387000325', 1, 'public_profiles/1bgurL9T3fK5Dfy7pTnrqRQqGUUKzayMTElBgzTt.jpg', 'customer', '2022-12-09 09:06:57', '2022-12-22 07:21:37'),
(4, 'Fauzan21', 'fauzancom21@gmail.com', '2022-12-15 20:45:31', '$2y$10$fzb9lk/jBHic3gYkW7MbzuoXgKQDDwuCYUeXxxk.Q6WkkLxViBc0S', NULL, '085219138563', 1, 'public_profiles/v6Z9168GnOyukk6PGg7BHvvcwv96hDgIRv7Yzqhv.png', 'customer', '2022-12-15 20:45:11', '2022-12-15 20:47:29'),
(5, 'Fikri Dean Radityo', 'fikri.dean21@mhs.uinjkt.ac.id', '2022-12-15 21:22:05', '$2y$10$oS25bLTvv5BdxnL0wOHheOLTDyF8OvVzOr/QDf.a2Vubx1ay3EoBW', NULL, '081387000325', 1, 'public_profiles/default_profile.jpg', 'admin', '2022-12-15 21:21:30', '2022-12-16 10:46:52'),
(8, 'Zhiver Zone', 'zonezhiver@gmail.com', '2022-12-22 10:03:51', '$2y$10$.bMWT19fSrp..MXTPNfe8eU6uxSnyhw9HCs32Gj7oYd.3Gl5LGZG.', 'qgemYaqgMyfHvO0d9t27ZCafhFSlwL2CiI9bam9VwcQF20a5ZBOzyaXVSY0o', '087532510967', 1, 'public_profiles/default_profile.jpg', 'customer', '2022-12-22 10:01:56', '2022-12-23 05:49:33'),
(9, 'Fikri Dean Radityo', 'webkafeweb@gmail.com', '2022-12-22 10:17:27', '$2y$10$eWZAjeVInZCbEK7t2ux6ku4P.TDgeX/OnlMch1EJ9oEHKyFmTquve', NULL, NULL, NULL, 'public_profiles/default_profile.jpg', 'customer', '2022-12-22 10:17:01', '2022-12-22 10:17:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `methods`
--
ALTER TABLE `methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totals`
--
ALTER TABLE `totals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `airlines`
--
ALTER TABLE `airlines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `methods`
--
ALTER TABLE `methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `totals`
--
ALTER TABLE `totals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
