-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 04:19 PM
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
-- Database: `hurran_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `size_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `product_id`, `size_id`, `color_id`, `store_id`, `quantity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 3, '4', '2', '', 20.00, '2022-12-26 04:42:44', NULL, NULL),
(3, 4, '4', '2', '', 4.00, '2022-12-26 04:44:52', NULL, NULL),
(4, 5, '4', '2', '', 20.00, '2022-12-26 04:49:42', NULL, NULL),
(5, 6, '4', '2', '', 20.00, '2022-12-27 06:08:43', NULL, NULL),
(6, 7, '1', '2', '', 20.00, '2023-01-08 01:16:53', NULL, NULL),
(7, 7, '2', '2', '', 30.00, '2023-01-08 01:16:53', NULL, NULL),
(8, 8, '1', '2', '', 19.00, '2023-01-08 01:19:01', '2023-01-11 04:42:17', NULL),
(9, 9, '1', '2', '', 20.00, '2023-01-10 04:12:19', NULL, NULL),
(10, 10, '4', '2', '', 10.00, '2023-01-10 04:17:17', NULL, NULL),
(11, 10, '1', '2', '', 10.00, '2023-01-10 04:17:17', NULL, NULL),
(12, 11, '1', '2', '', 4.00, '2023-01-10 04:19:07', NULL, NULL),
(13, 12, '4', '2', '', 66.00, '2023-01-10 04:20:00', NULL, NULL),
(14, 13, '1', '2', '', 20.00, '2023-01-11 10:02:20', NULL, NULL),
(15, 13, '2', '4', '', 30.00, '2023-01-11 10:02:20', NULL, NULL),
(16, 14, '1', '2', '', 10.00, '2023-01-11 10:04:16', NULL, NULL),
(17, 15, '1', '2', '', 20.00, '2023-01-11 10:10:53', NULL, NULL),
(18, 15, '2', '4', '', 30.00, '2023-01-11 10:10:53', NULL, NULL),
(19, 16, '4', '2', '', 20.00, '2023-01-11 10:20:21', NULL, NULL),
(20, 16, '1', '4', '', 30.00, '2023-01-11 10:20:21', NULL, NULL),
(21, 17, '1', '2', '', 20.00, '2023-01-11 10:29:55', NULL, NULL),
(22, 17, '2', '4', '', 30.00, '2023-01-11 10:29:55', NULL, NULL),
(25, 20, '4', '4', '', 50.00, '2023-01-18 23:12:14', NULL, NULL),
(26, 21, '4', '9', '', 100.00, '2023-01-19 01:07:41', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `slug`, `created_at`, `updated_at`, `deleted_at`, `logo`) VALUES
(1, 'Jackson', 'jackson', '2022-12-25 01:16:50', '2023-01-08 03:20:43', NULL, 'XhUyEQDKs8.jpg'),
(2, 'Thomas', 'thomas', '2022-12-25 02:20:05', '2022-12-25 08:55:49', '2022-12-25 08:55:49', ''),
(3, 'Thomass', 'thomfas', '2022-12-25 08:56:12', '2023-01-08 03:20:22', NULL, 'XnHYeKstBR.jpg'),
(4, 'Jackson New', 'jackson-new', '2023-01-08 02:21:03', '2023-01-08 03:21:08', NULL, 'X4OvWUfrrw.jpg'),
(8, 'Bangla Mat', 'bangla-mat', '2023-01-18 09:35:29', NULL, NULL, '8cmZZuQF8G.jpeg'),
(9, 'Indian Bazar', 'indian-bazar', '2023-01-18 23:08:25', NULL, NULL, 'JgnTCP5LGL.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cookie_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `cookie_id`, `product_id`, `color_id`, `size_id`, `store_id`, `quantity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'amt0DZD356', 20, 4, 25, 0, 3, '2023-01-19 03:06:55', '2023-01-19 03:07:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'test_nn', 'test', '2022-12-23 23:30:41', '2023-01-01 01:30:01', NULL),
(4, 'Comment', 'comment', '2022-12-24 01:56:37', '2023-01-01 01:30:01', NULL),
(5, 'Men', 'men', '2023-01-08 01:12:47', '2023-01-08 01:12:47', NULL),
(6, 'Winter', 'winter', '2023-01-11 10:24:17', '2023-01-11 10:24:17', NULL),
(7, 'Three pics', 'three-pics', '2023-01-18 00:32:14', '2023-01-18 00:32:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color_name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Black', 'black', '2022-12-25 01:48:47', '2022-12-25 01:49:02', NULL),
(3, 'Red', 'red', '2022-12-25 02:11:09', '2022-12-25 08:53:30', '2022-12-25 08:53:30'),
(4, 'Red', 'red', '2022-12-25 08:56:35', '2022-12-25 09:05:55', NULL),
(9, 'White', 'white', '2023-01-18 09:32:40', '2023-01-18 09:32:40', NULL),
(10, 'Blue', 'blue', '2023-01-18 09:33:14', '2023-01-18 09:33:14', NULL),
(11, 'Green', 'green', '2023-01-18 09:33:37', '2023-01-18 09:33:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2' COMMENT '1=pending 2=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validity` timestamp NULL DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `code`, `validity`, `discount`, `level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'New Year 2023', 'NewYear2023', '2023-01-31 09:29:15', '50', 'percent', '2023-01-01 09:29:15', NULL, NULL),
(3, 'update', 'dfgdfg', '2023-01-25 02:50:00', '50', 'percent', '2023-01-05 01:50:29', '2023-01-05 01:56:21', NULL);

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `product_id`, `images`, `created_at`, `updated_at`) VALUES
(3, 4, 'xyKLF4tlRZ.png', '2022-12-26 04:44:52', NULL),
(4, 4, 'k4quJ5uhgo.jpg', '2022-12-26 04:44:54', NULL),
(5, 5, 'fZpftu7rKP.png', '2022-12-26 04:49:42', NULL),
(6, 5, 'RdHnhdzllP.jpg', '2022-12-26 04:49:44', NULL),
(9, 6, 'ZHAwwBC4qi.jpg', '2022-12-27 06:08:46', NULL),
(10, 6, 'BCvhZpAdBm.png', '2022-12-27 06:08:46', NULL),
(15, 6, 'wGAL85HBUp.jpg', '2022-12-27 23:42:35', '2022-12-27 23:42:35'),
(16, 6, 'QVTN8guyGq.png', '2022-12-27 23:44:40', '2022-12-27 23:44:40'),
(17, 7, 'QfdDWMF3M6.jpg', '2023-01-08 01:16:53', NULL),
(18, 7, 'Ws5b9Emcho.jpg', '2023-01-08 01:16:53', NULL),
(19, 8, '9Zzmop16NX.jpg', '2023-01-08 01:19:01', NULL),
(20, 8, 'Bgz50FNUv1.jpg', '2023-01-08 01:19:01', NULL),
(21, 9, 'ZBUxcdcUMU.jpg', '2023-01-10 04:12:20', NULL),
(22, 9, '0OvBByUWL3.jpg', '2023-01-10 04:12:20', NULL),
(23, 10, 'i7LE2LHZ1C.jpg', '2023-01-10 04:17:17', NULL),
(24, 10, 'FtKhR3bc0I.jpg', '2023-01-10 04:17:17', NULL),
(25, 11, 'QirKFbX8Oo.jpg', '2023-01-10 04:19:07', NULL),
(26, 11, 'oAcEexfh41.jpg', '2023-01-10 04:19:07', NULL),
(27, 12, 'KWbKHgB6nO.jpg', '2023-01-10 04:20:00', NULL),
(28, 12, 'Uyd8t0MJvF.jpg', '2023-01-10 04:20:00', NULL),
(29, 13, '5bmnCXnn28.jpg', '2023-01-11 10:02:20', NULL),
(30, 13, 'ZV93b21W6T.jpg', '2023-01-11 10:02:20', NULL),
(31, 13, 'hmXNHOEdcC.jpg', '2023-01-11 10:02:20', NULL),
(32, 14, '3K1NtLsvSV.jpg', '2023-01-11 10:04:16', NULL),
(33, 14, 'D5bDsAj287.jpg', '2023-01-11 10:04:16', NULL),
(34, 15, 'wvbUSLyFpt.jpg', '2023-01-11 10:10:53', NULL),
(35, 15, 'GR7xNDedWa.jpg', '2023-01-11 10:10:53', NULL),
(36, 15, 'AWX9Z0Yfhp.jpg', '2023-01-11 10:10:53', NULL),
(37, 16, 'Y5IN7KQP9i.jpg', '2023-01-11 10:20:21', NULL),
(38, 16, 'r2kg5Njmts.jpg', '2023-01-11 10:20:21', NULL),
(39, 16, 'jYaUs6Fcyc.jpg', '2023-01-11 10:20:21', NULL),
(40, 16, '5kpW1hKAYz.jpg', '2023-01-11 10:20:21', NULL),
(41, 17, 'dPguHrwvTs.png', '2023-01-11 10:29:56', NULL),
(42, 17, 'R1d4DXDQQa.jpg', '2023-01-11 10:29:56', NULL),
(43, 17, 'diltLKHw5Y.jpg', '2023-01-11 10:29:56', NULL),
(44, 17, 'eGGOgDNTby.jpg', '2023-01-11 10:29:56', NULL),
(45, 18, 'omi9kVRbrO.jpg', '2023-01-18 00:53:27', NULL),
(46, 19, 'YR1vs1bVXA.jpeg', '2023-01-18 01:01:28', NULL),
(47, 20, '2DTuOwooxW.jpg', '2023-01-18 23:12:14', NULL),
(48, 20, 'pkdQz74Zyc.jpg', '2023-01-18 23:12:15', NULL),
(49, 21, 'gWV4mQXmzE.webp', '2023-01-19 01:07:42', NULL),
(50, 21, 'TwMY5OoVA8.jpeg', '2023-01-19 01:07:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2022_12_22_060237_create_attributes_table', 1),
(10, '2022_12_22_060307_create_blogs_table', 1),
(11, '2022_12_22_060341_create_brands_table', 1),
(12, '2022_12_22_060417_create_carts_table', 1),
(13, '2022_12_22_060442_create_categories_table', 1),
(14, '2022_12_22_060519_create_cities_table', 1),
(15, '2022_12_22_060803_create_colors_table', 1),
(16, '2022_12_22_060859_create_comments_table', 1),
(17, '2022_12_22_060939_create_countries_table', 1),
(18, '2022_12_22_061009_create_coupons_table', 1),
(19, '2022_12_22_061032_create_galleries_table', 1),
(20, '2022_12_22_061121_create_messages_table', 1),
(21, '2022_12_22_061142_create_orders_table', 1),
(22, '2022_12_22_061206_create_products_table', 1),
(23, '2022_12_22_061233_create_product_reviews_table', 1),
(26, '2022_12_22_061354_create_states_table', 1),
(27, '2022_12_22_061514_create_sub_categories_table', 1),
(28, '2022_12_22_061551_create_wishlists_table', 1),
(29, '2022_12_22_063148_create_stores_table', 1),
(30, '2022_12_22_093907_create_site__details_table', 1),
(31, '2022_12_22_061327_create_sizes_table', 2),
(32, '2023_01_01_115334_create_permission_tables', 3),
(33, '2023_01_02_063534_add_column_to_product_table', 4),
(34, '2023_01_08_061709_add_column_to_brand_table', 5),
(35, '2022_12_22_061301_create_shippings_table', 6),
(36, '2023_01_14_091335_create_notifications_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 1),
(5, 'App\\Models\\User', 1),
(6, 'App\\Models\\User', 1),
(7, 'App\\Models\\User', 1),
(8, 'App\\Models\\User', 1),
(9, 'App\\Models\\User', 1),
(10, 'App\\Models\\User', 1),
(11, 'App\\Models\\User', 1),
(12, 'App\\Models\\User', 1),
(13, 'App\\Models\\User', 1),
(14, 'App\\Models\\User', 1),
(15, 'App\\Models\\User', 1),
(16, 'App\\Models\\User', 1),
(17, 'App\\Models\\User', 1),
(18, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('7b28cbe3-26c9-42f3-8bb9-14f3ac2b73ff', 'App\\Notifications\\OrderNotification', 'App\\Models\\User', 8, '{\"order_id\":12,\"shipping_id\":5,\"product_id\":8}', NULL, '2023-01-14 11:51:35', '2023-01-14 11:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_unit_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `shipping_id`, `product_id`, `color_id`, `size_id`, `store_id`, `product_unit_price`, `quantity`, `created_at`, `updated_at`) VALUES
(5, 1, 8, 1, 1, NULL, 4950, 2, '2023-01-11 02:04:07', '2023-01-11 02:04:07'),
(6, 1, 6, 1, 1, NULL, 575, 1, '2023-01-11 02:04:07', '2023-01-11 02:04:07'),
(7, 3, 9, 1, 1, 1, 575, 2, '2023-01-11 04:09:36', '2023-01-11 04:09:36'),
(8, 4, 8, 2, 1, 1, 4950, 1, '2023-01-11 04:42:17', '2023-01-11 04:42:17'),
(9, 5, 15, 2, 17, NULL, 250, 2, '2023-01-14 01:26:27', '2023-01-14 01:26:27'),
(10, 5, 8, 2, 8, 1, 4950, 3, '2023-01-14 11:12:07', '2023-01-14 11:12:07'),
(11, 5, 9, 2, 9, 1, 575, 2, '2023-01-14 11:12:07', '2023-01-14 11:12:07'),
(12, 5, 8, 2, 8, 1, 4950, 2, '2023-01-14 11:51:34', '2023-01-14 11:51:34');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard', 'web', '2023-01-02 01:51:58', '2023-01-02 01:51:58'),
(2, 'category', 'web', '2023-01-02 01:52:33', '2023-01-02 01:52:33'),
(3, 'add product', 'web', '2023-01-02 01:54:27', '2023-01-02 01:54:27'),
(4, 'edit product', 'web', '2023-01-02 01:54:43', '2023-01-02 01:54:43'),
(5, 'view product', 'web', '2023-01-02 01:55:06', '2023-01-02 01:55:06'),
(6, 'delete product', 'web', '2023-01-02 01:55:25', '2023-01-02 01:55:25'),
(7, 'edit store', 'web', '2023-01-02 01:56:07', '2023-01-02 01:56:07'),
(8, 'add store', 'web', '2023-01-02 01:57:29', '2023-01-02 01:57:29'),
(9, 'delete store', 'web', '2023-01-02 01:57:46', '2023-01-02 01:57:46'),
(10, 'view order', 'web', '2023-01-02 01:59:06', '2023-01-02 01:59:06'),
(11, 'edit order', 'web', '2023-01-02 01:59:19', '2023-01-02 01:59:19'),
(12, 'delete order', 'web', '2023-01-02 01:59:35', '2023-01-02 01:59:35'),
(13, 'delete shipping', 'web', '2023-01-02 02:00:42', '2023-01-02 02:00:42'),
(14, 'view shipping', 'web', '2023-01-02 02:00:57', '2023-01-02 02:00:57'),
(15, 'edit shipping', 'web', '2023-01-02 02:01:16', '2023-01-02 02:01:16'),
(16, 'edit user', 'web', '2023-01-02 02:02:10', '2023-01-02 02:02:10'),
(17, 'view user', 'web', '2023-01-02 02:02:21', '2023-01-02 02:02:21'),
(18, 'delete user', 'web', '2023-01-02 02:02:30', '2023-01-02 02:02:30');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `breadth` double(8,2) DEFAULT NULL,
  `length` double(8,2) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `category_id`, `subcategory_id`, `brand_id`, `store_id`, `price`, `summary`, `breadth`, `length`, `description`, `thumbnail`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(4, 'Authorize net payment', 4, 1, 1, 1, 222.00, 'Similar to .empty(), the .remove() method takes elements out of the DOM. Use .remove() when you want to remove the element itself, as well as everything inside it. In addition to the elements themselves, all bound events and jQuery data associated with the elements are removed. To remove the elements without removing data and events, use .detach() instead.\"\"', NULL, NULL, 'Similar to .empty(), the .remove() method takes elements out of the DOM. Use .remove() when you want to remove the element itself, as well as everything inside it. In addition to the elements themselves, all bound events and jQuery data associated with the elements are removed. To remove the elements without removing data and events, use .detach() instead.\"\"', 'kpiwm6AYdU.png', '2022-12-26 04:44:51', '2023-01-12 13:10:21', NULL, 'deactive'),
(5, 'Authorize net payment', 4, 1, 1, 1, 575.00, 'Similar to .empty(), the .remove() method takes elements out of the DOM. Use .remove() when you want to remove the element itself, as well as everything inside it. In addition to the elements themselves, all bound events and jQuery data associated with the elements are removed. To remove the elements without removing data and events, use .detach() instead.\"', NULL, NULL, 'Similar to .empty(), the .remove() method takes elements out of the DOM. Use .remove() when you want to remove the element itself, as well as everything inside it. In addition to the elements themselves, all bound events and jQuery data associated with the elements are removed. To remove the elements without removing data and events, use .detach() instead.\"', 'nFq6YjN7Tu.png', '2022-12-26 04:49:42', '2023-01-11 04:44:13', NULL, 'deactive'),
(6, 'Elephant Road', 4, 1, 3, 1, 575.00, 'Tshirt Size Chart Size :\r\nM (CHEST 38 LENGTH 27)\r\nL (CHEST 40 LENGTH 28)', NULL, NULL, 'Tshirt Size Chart Size :\r\nM (CHEST 38 LENGTH 27)\r\nL (CHEST 40 LENGTH 28)', 'URx69CdIrb.png', '2022-12-27 06:08:43', '2023-01-11 04:48:10', NULL, 'deactive'),
(7, 'Platinum Hoodie', 5, 5, 1, 1, 4950.00, 'The Platinum Collection comprises sophisticated designs that reflect a refinement of taste and culture.', NULL, NULL, 'Using a blend of cotton, sorona, acrylic, spandex and regenerated fiber, an environment-friendly approach to textile engineering for home earth, the engineering of the fabric results in optimum rigidity, color retention, softness and flexibility essential for active lifestyle during the cold weather. The iconic ILYN logo emerging from a contrasted white print on the chest area of this classic hoodie creates a non-stop metro impression from all directions!', 'UwOjngWAoD.jpg', '2023-01-08 01:16:53', '2023-01-08 01:17:59', NULL, 'deactive'),
(8, 'Platinum Hoodie', 5, 5, 1, 1, 4950.00, 'The Platinum Collection comprises sophisticated designs that reflect a refinement of taste and culture.\"', NULL, NULL, 'Using a blend of cotton, sorona, acrylic, spandex and regenerated fiber, an environment-friendly approach to textile engineering for home earth, the engineering of the fabric results in optimum rigidity, color retention, softness and flexibility essential for active lifestyle during the cold weather. The iconic ILYN logo emerging from a contrasted white print on the chest area of this classic hoodie creates a non-stop metro impression from all directions!\"', 'CJtSsgqtce.jpg', '2023-01-08 01:19:01', '2023-01-08 01:24:16', NULL, 'active'),
(9, 'dfgdfg', 4, 1, 1, 1, 575.00, 'This is Gazi Manik.\r\n\r\nIm planning to own a multi vendor e-commerce web application aside its  self communication window.\r\n\r\nWhere consumers as well as shop woner will be able to creat their profile and will be able to up their new or used item to sell.\r\n\r\nAnd user to user, user to user(s), user to shop will be able to conmunicate themself.\r\n\r\n\r\nConsidering mentoned description please send a quotation if possible. Besides, you can call at 01621836303 for detail discussion if interested.\r\n\r\nThank you.\"', NULL, NULL, 'This is Gazi Manik.\r\n\r\nIm planning to own a multi vendor e-commerce web application aside its  self communication window.\r\n\r\nWhere consumers as well as shop woner will be able to creat their profile and will be able to up their new or used item to sell.\r\n\r\nAnd user to user, user to user(s), user to shop will be able to conmunicate themself.\r\n\r\n\r\nConsidering mentoned description please send a quotation if possible. Besides, you can call at 01621836303 for detail discussion if interested.\r\n\r\nThank you.\"', 'myLtAGSNiH.jpg', '2023-01-10 04:12:19', '2023-01-11 03:54:33', NULL, 'active'),
(10, 'dfgdfgdsfgdg', 4, 1, 1, 1, 575.00, 'This is Gazi Manik.\r\n\r\nIm planning to own a multi vendor e-commerce web application aside its  self communication window.\r\n\r\nWhere consumers as well as shop woner will be able to creat their profile and will be able to up their new or used item to sell.\r\n\r\nAnd user to user, user to user(s), user to shop will be able to conmunicate themself.\r\n\r\n\r\nConsidering mentoned description please send a quotation if possible. Besides, you can call at 01621836303 for detail discussion if interested.\r\n\r\nThank you.', NULL, NULL, 'This is Gazi Manik.\r\n\r\nIm planning to own a multi vendor e-commerce web application aside its  self communication window.\r\n\r\nWhere consumers as well as shop woner will be able to creat their profile and will be able to up their new or used item to sell.\r\n\r\nAnd user to user, user to user(s), user to shop will be able to conmunicate themself.\r\n\r\n\r\nConsidering mentoned description please send a quotation if possible. Besides, you can call at 01621836303 for detail discussion if interested.\r\n\r\nThank you.', 'k8aHlK5sP6.jpg', '2023-01-10 04:17:17', '2023-01-10 04:17:35', NULL, 'deactive'),
(11, 'Platinum Hoodie', 5, 5, 1, 1, 575.00, 'This is Gazi Manik.\r\n\r\nIm planning to own a multi vendor e-commerce web application aside its  self communication window.\r\n\r\nWhere consumers as well as shop woner will be able to creat their profile and will be able to up their new or used item to sell.\r\n\r\nAnd user to user, user to user(s), user to shop will be able to conmunicate themself.\r\n\r\n\r\nConsidering mentoned description please send a quotation if possible. Besides, you can call at 01621836303 for detail discussion if interested.\r\n\r\nThank you.', NULL, NULL, 'This is Gazi Manik.\r\n\r\nIm planning to own a multi vendor e-commerce web application aside its  self communication window.\r\n\r\nWhere consumers as well as shop woner will be able to creat their profile and will be able to up their new or used item to sell.\r\n\r\nAnd user to user, user to user(s), user to shop will be able to conmunicate themself.\r\n\r\n\r\nConsidering mentoned description please send a quotation if possible. Besides, you can call at 01621836303 for detail discussion if interested.\r\n\r\nThank you.', 'LO5YlTp0kz.jpg', '2023-01-10 04:19:07', '2023-01-10 04:19:17', '2023-01-10 04:19:17', 'deactive'),
(12, 'Elephant Road', 5, 5, 1, 1, 575.00, 'This is Gazi Manik.\r\n\r\nIm planning to own a multi vendor e-commerce web application aside its  self communication window.\r\n\r\nWhere consumers as well as shop woner will be able to creat their profile and will be able to up their new or used item to sell.\r\n\r\nAnd user to user, user to user(s), user to shop will be able to conmunicate themself.\r\n\r\n\r\nConsidering mentoned description please send a quotation if possible. Besides, you can call at 01621836303 for detail discussion if interested.\r\n\r\nThank you.', NULL, NULL, 'This is Gazi Manik.\r\n\r\nIm planning to own a multi vendor e-commerce web application aside its  self communication window.\r\n\r\nWhere consumers as well as shop woner will be able to creat their profile and will be able to up their new or used item to sell.\r\n\r\nAnd user to user, user to user(s), user to shop will be able to conmunicate themself.\r\n\r\n\r\nConsidering mentoned description please send a quotation if possible. Besides, you can call at 01621836303 for detail discussion if interested.\r\n\r\nThank you.', 'qc08ZEcchM.jpg', '2023-01-10 04:20:00', NULL, NULL, 'deactive'),
(13, 'Winter T Shirt', 5, 5, 3, 1, 250.00, 'Download the perfect tshirt pictures. Find over 100+ of the best free tshirt images. Free for commercial use ✓ No attribution required ✓ Copyright-free.', NULL, NULL, 'Download the perfect tshirt pictures. Find over 100+ of the best free tshirt images. Free for commercial use ✓ No attribution required ✓ Copyright-free.\r\nDownload the perfect tshirt pictures. Find over 100+ of the best free tshirt images. Free for commercial use ✓ No attribution required ✓ Copyright-free.', 'xNNogDTqdJ.jpg', '2023-01-11 10:02:20', '2023-01-11 10:02:44', '2023-01-11 10:02:44', 'deactive'),
(14, 'Winter T Shirt', 4, 1, 1, 1, 250.00, 'Download the perfect tshirt pictures. Find over 100+ of the best free tshirt images. Free for commercial use ✓ No attribution required ✓ Copyright-free.\"\"', NULL, NULL, 'Download the perfect tshirt pictures. Find over 100+ of the best free tshirt images. Free for commercial use ✓ No attribution required ✓ Copyright-free.Download the perfect tshirt pictures. Find over 100+ of the best free tshirt images. Free for commercial use ✓ No attribution required ✓ Copyright-free.\"\"', 'IPlRLXVVej.jpg', '2023-01-11 10:04:16', '2023-01-12 04:58:32', NULL, 'deactive'),
(15, 'Winter T Shirt', 4, 1, 1, NULL, 250.00, 'Download the perfect tshirt pictures. Find over 100+ of the best free tshirt images. Free for commercial use ✓ No attribution required ✓ Copyright-free.\"', NULL, NULL, 'Download the perfect tshirt pictures. Find over 100+ of the best free tshirt images. Free for commercial use ✓ No attribution required ✓ Copyright-free.\r\nDownload the perfect tshirt pictures. Find over 100+ of the best free tshirt images. Free for commercial use ✓ No attribution required ✓ Copyright-free.\"', 'CZvliJybLK.jpg', '2023-01-11 10:10:53', '2023-01-12 04:58:54', NULL, 'active'),
(16, 'New Collection', 4, 5, 3, NULL, 575.00, 'Download the perfect tshirt pictures. Find over 100+ of the best free tshirt images. Free for commercial use ✓ No attribution required ✓ Copyright-free', NULL, NULL, 'Download the perfect tshirt pictures. Find over 100+ of the best free tshirt images. Free for commercial use ✓ No attribution required ✓ Copyright-free\r\nDownload the perfect tshirt pictures. Find over 100+ of the best free tshirt images. Free for commercial use ✓ No attribution required ✓ Copyright-free', 'eBD6u8N938.jpg', '2023-01-11 10:20:21', NULL, NULL, 'deactive'),
(17, 'Summer T Shirt', 4, 1, 1, 1, 340.00, 'Download the perfect tshirt pictures. Find over 100+ of the best free tshirt images. Free for commercial use ✓ No attribution required ✓ Copyright-free', NULL, NULL, 'Download the perfect tshirt pictures. Find over 100+ of the best free tshirt images. Free for commercial use ✓ No attribution required ✓ Copyright-free\r\nDownload the perfect tshirt pictures. Find over 100+ of the best free tshirt images. Free for commercial use ✓ No attribution required ✓ Copyright-free', 'fbENjT8q9w.png', '2023-01-11 10:29:55', NULL, NULL, 'deactive'),
(20, 'Red Three Pics', 7, 7, 8, 1, 8000.00, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque delectus sint suscipit dolorum tempore? Cupiditate, reprehenderit. Impedit fugiat, labore deserunt quam obcaecati, numquam eaque nesciunt ducimus reiciendis sed inventore quibusdam.\"', NULL, NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam facere expedita vitae saepe veritatis cupiditate! Beatae totam praesentium, explicabo esse provident cumque maxime suscipit dolorem qui animi odio vel illum deleniti accusamus nobis eligendi nesciunt quaerat tenetur. Ipsum, sint temporibus quas sit molestiae error possimus vero id excepturi ut dolore ex officiis soluta ullam, placeat mollitia dolorem omnis libero facere animi voluptates incidunt non. Incidunt vitae quasi maxime repellat quod eaque voluptatum totam earum qui dolorem ab suscipit pariatur consectetur ratione nulla cupiditate modi magnam laboriosam, delectus aliquid unde blanditiis. Fugit, eligendi nisi labore fugiat a voluptatum numquam eum voluptas.\"', '0qvFVfyFjB.jpeg', '2023-01-18 23:12:14', '2023-01-18 23:31:59', NULL, 'active'),
(21, 'White Three Pics', 7, 6, 9, 1, 5000.00, 'test\"\"', NULL, NULL, 'test\"\"', 'tY4ig3plul.jpeg', '2023-01-19 01:07:41', '2023-01-19 01:08:46', NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `massage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2' COMMENT '1=pending 2=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-01-01 06:07:42', '2023-01-01 06:07:42'),
(2, 'editor', 'web', '2023-01-01 06:09:04', '2023-01-01 06:09:04'),
(3, 'subscriber', 'web', '2023-01-01 06:09:51', '2023-01-01 06:09:51'),
(4, 'store_vendor', 'web', '2023-01-02 01:39:12', '2023-01-02 01:39:12'),
(5, 'store_workers', 'web', '2023-01-02 01:39:54', '2023-01-02 01:39:54'),
(6, 'delivary_boy', 'web', '2023-01-02 01:40:25', '2023-01-02 01:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 4),
(2, 1),
(2, 2),
(2, 4),
(2, 5),
(3, 1),
(3, 2),
(3, 4),
(3, 5),
(4, 1),
(4, 2),
(4, 4),
(4, 5),
(5, 1),
(5, 2),
(5, 4),
(5, 5),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(7, 4),
(8, 1),
(9, 1),
(10, 1),
(10, 2),
(10, 4),
(10, 5),
(10, 6),
(11, 1),
(11, 2),
(11, 4),
(11, 5),
(11, 6),
(12, 1),
(13, 1),
(14, 1),
(14, 2),
(14, 4),
(14, 5),
(14, 6),
(15, 1),
(15, 2),
(15, 4),
(16, 1),
(16, 2),
(16, 4),
(17, 1),
(17, 2),
(17, 4),
(18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `user_id`, `first_name`, `last_name`, `company`, `email`, `phone`, `country_name`, `city_name`, `state_name`, `address`, `zipcode`, `note`, `status`, `payment_status`, `coupon_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'sandbox', 'sdfsdf', 'sdv', '2183091033@uttarauniversity.edu.bd', '1256454654', 'dfgdfg', 'fdgfdg', 'fdgdfg', 'Rahman Mansion, Level 1, 73 New Elephant Road, Dhaka 1205', '5456', NULL, '2', '2', NULL, '2023-01-11 02:04:07', '2023-01-11 02:04:07', NULL),
(5, 8, 'Protyay', 'demo', 'fff', 'demo@gmail.com', '01869535334', 'Bangladesh', 'Dhaka', 'Bangladesh', 'Dhaka,Dhaka', '6767', 'test 2', '2', '2', NULL, '2023-01-14 01:26:27', '2023-01-14 11:51:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site__details`
--

CREATE TABLE `site__details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site__details`
--

INSERT INTO `site__details` (`id`, `logo`, `service_number`, `service_email`, `facebook_link`, `instagram_link`, `created_at`, `updated_at`) VALUES
(1, 'bJBafKanOa.png', '01754879458', 'service2@gmail.com', 'https://fontawesome.com/icons/globe?s=solid&f=classic\"\"\"\"\"\"\"\"\"', 'https://fontawesome.com/icons/globe?s=solid&f=classic\"\"\"\"\"\"\"\"\"', '2023-01-02 10:12:56', '2023-01-03 23:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size_name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'XL', 'xl', '2022-12-25 02:02:08', '2022-12-25 02:02:08', NULL),
(2, 'XXL', 'xxl', '2022-12-25 02:02:12', '2022-12-25 02:02:12', NULL),
(3, 'L', 'l', '2022-12-25 02:20:38', '2022-12-25 08:53:17', '2022-12-25 08:53:17'),
(4, 'L', 'l', '2022-12-25 08:56:55', '2022-12-25 09:06:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_hours` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `title`, `address`, `business_hours`, `contact`, `thumbnail`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Authorize net payment', 'Rahman Mansion, Level 1, 73 New Elephant Road, Dhaka 1205', '10.00 AM–08.00 PM (Wednesday To Monday), Tuesday: Closed', '01923152109', 'msnfllg2uQ.jpg', 'https://image.intervention.io/v2/introduction/installation', '2022-12-26 01:38:40', '2022-12-28 04:09:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `subcategory_name`, `slug`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test sub', 'test-sub', 4, '2022-12-24 01:04:11', '2022-12-26 23:30:08', NULL),
(5, 'winter', 'winter', 5, '2023-01-08 01:13:10', NULL, NULL),
(6, 'Indian three pices', 'indian-three-pices', 7, '2023-01-18 00:41:41', NULL, NULL),
(7, 'Bangladesi three pices', 'bangladesi-three-pices', 7, '2023-01-18 00:42:48', NULL, NULL),
(8, 'Pakistini three pices', 'pakistini-three-pices', 7, '2023-01-18 00:43:25', NULL, NULL);

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
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `provider`, `provider_id`, `images`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2183091033@uttarauniversity.edu.bd', '2022-12-01 16:05:31', '$2y$10$xjHdtXhJmBhnRmfsSMVGme7nzC4KurSQR4hVfQYN4BU5/0ob1.63O', NULL, NULL, 'Lj5WiotDy6.jpg', NULL, '2022-12-22 07:20:01', '2023-01-06 23:56:49'),
(3, 'Admin1', 'admin@gmail.com', NULL, '$2y$10$ckMXi0RZJCGR7WnMRj6CdOAw6IFdgflBJKVgY6uVmAxVvBv9e5Dtm', NULL, NULL, 'Lj5WiotDy6.jpg', NULL, '2022-12-27 00:06:28', '2022-12-27 00:06:28'),
(7, 'Test', 'test@gmail.com', NULL, '$2y$10$cbURFUFmOLV81z0eIP1ZT.GaQENKJDIZftGmwRykrrH2t3HTrFLA.', NULL, NULL, 'Lj5WiotDy6.jpg', NULL, '2023-01-07 04:28:20', '2023-01-07 04:28:20'),
(8, 'Rajdip', 'demo@gmail.com', NULL, '$2y$10$9oW3xDcsGBI3hKDuhzUWKukB7AYw42WvXNr5blUzotpKibIqXykom', NULL, NULL, 'Lj5WiotDy6.jpg', NULL, '2023-01-10 04:34:09', '2023-01-10 04:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cookie_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `size_id` bigint(20) UNSIGNED DEFAULT NULL,
  `store_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `messages_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site__details`
--
ALTER TABLE `site__details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `site__details`
--
ALTER TABLE `site__details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
