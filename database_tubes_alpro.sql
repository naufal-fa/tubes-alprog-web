-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 03:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_tubes_alpro`
--
CREATE DATABASE IF NOT EXISTS `database_tubes_alpro` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `database_tubes_alpro`;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `cache`
--

TRUNCATE TABLE `cache`;
--
-- Dumping data for table `cache`
--

INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES
('77de68daecd823babbb58edb1c8e14d7106e83bb', 'i:1;', 1716883187),
('77de68daecd823babbb58edb1c8e14d7106e83bb:timer', 'i:1716883187;', 1716883187),
('admin@gmail.com|127.0.0.1', 'i:1;', 1713772186),
('admin@gmail.com|127.0.0.1:timer', 'i:1713772186;', 1713772186),
('admin@simulindo|127.0.0.1', 'i:1;', 1714116123),
('admin@simulindo|127.0.0.1:timer', 'i:1714116123;', 1714116123),
('user2@gmail.com|127.0.0.1', 'i:2;', 1713461256),
('user2@gmail.com|127.0.0.1:timer', 'i:1713461256;', 1713461256);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `cache_locks`
--

TRUNCATE TABLE `cache_locks`;
-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

DROP TABLE IF EXISTS `carousels`;
CREATE TABLE `carousels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `carousels`
--

TRUNCATE TABLE `carousels`;
--
-- Dumping data for table `carousels`
--

INSERT DELAYED IGNORE INTO `carousels` (`id`, `title`, `subtitle`, `description`, `image`, `link`, `created_at`, `updated_at`) VALUES
(8, 'WELCOME TO NATURE\'S PARADISE', 'EXPERIENCE BREATHTAKING NATURAL BEAUTY', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam illum iure iusto ducimus officia quasi repellat aut voluptate minima. Dolorum aliquam sapiente cum iusto repudiandae, placeat cumque inventore illo dolorem.', 'CAROUSEL_25042024_042754.png', NULL, '2024-04-25 09:27:54', '2024-04-25 09:27:54'),
(9, 'MAJESTIC GREEN MOUNTAINS', 'TREKKING AND NATURAL WONDERS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam illum iure iusto ducimus officia quasi repellat aut voluptate minima. Dolorum aliquam sapiente cum iusto repudiandae, placeat cumque inventore illo dolorem.', 'CAROUSEL_25042024_042936.png', NULL, '2024-04-25 09:29:36', '2024-04-25 09:29:36'),
(10, 'WILDLIFE EXPLORATION', 'ENCHANTING TROPICAL FORESTS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam illum iure iusto ducimus officia quasi repellat aut voluptate minima. Dolorum aliquam sapiente cum iusto repudiandae, placeat cumque inventore illo dolorem.', 'CAROUSEL_25042024_042958.png', NULL, '2024-04-25 09:29:58', '2024-04-25 09:29:58'),
(11, 'CAPTIVATING COASTAL VIEWS', 'WAVES AND SANDY SHORES', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam illum iure iusto ducimus officia quasi repellat aut voluptate minima. Dolorum aliquam sapiente cum iusto repudiandae, placeat cumque inventore illo dolorem.', 'CAROUSEL_25042024_043022.png', NULL, '2024-04-25 09:30:22', '2024-04-25 09:30:22'),
(12, 'TRANQUILITY AND BEAUTY', 'ROMANTIC SUNSETS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam illum iure iusto ducimus officia quasi repellat aut voluptate minima. Dolorum aliquam sapiente cum iusto repudiandae, placeat cumque inventore illo dolorem.', 'CAROUSEL_25042024_043051.png', NULL, '2024-04-25 09:30:51', '2024-04-25 09:30:51'),
(13, 'aaa', 'aaaaa', 'aaaaaaaa', 'CAROUSEL_26042024_072405.png', 'aa', '2024-04-26 00:24:05', '2024-04-26 00:24:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `failed_jobs`
--

TRUNCATE TABLE `failed_jobs`;
-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `jobs`
--

TRUNCATE TABLE `jobs`;
-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `job_batches`
--

TRUNCATE TABLE `job_batches`;
-- --------------------------------------------------------

--
-- Table structure for table `merchandises`
--

DROP TABLE IF EXISTS `merchandises`;
CREATE TABLE `merchandises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `merchandises`
--

TRUNCATE TABLE `merchandises`;
--
-- Dumping data for table `merchandises`
--

INSERT DELAYED IGNORE INTO `merchandises` (`id`, `name`, `description`, `price`, `location`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Name of Merchandise Product', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, aut neque aliquid nostrum, exercitationem repudiandae doloribus in eaque suscipit doloremque placeat sequi, molestias ex eligendi recusandae nesciunt dolorem ad perspiciatis nisi omnis. Dolorem ipsam aliquid quasi! Minima sit modi in officia possimus aut facilis optio aliquam porro. Obcaecati, culpa ipsum?', 500000, 'Address SBY 2333, ID', 'MERCHANDISE_25042024_085420.png', '2024-04-25 13:54:20', '2024-04-25 13:54:20'),
(3, 'Name of Merchandise Product', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, aut neque aliquid nostrum, exercitationem repudiandae doloribus in eaque suscipit doloremque placeat sequi, molestias ex eligendi recusandae nesciunt dolorem ad perspiciatis nisi omnis. Dolorem ipsam aliquid quasi! Minima sit modi in officia possimus aut facilis optio aliquam porro. Obcaecati, culpa ipsum?', 500000, 'Address SBY 2333, ID', 'MERCHANDISE_25042024_085429.png', '2024-04-25 13:54:29', '2024-04-25 13:54:29'),
(4, 'Name of Merchandise Product', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, aut neque aliquid nostrum, exercitationem repudiandae doloribus in eaque suscipit doloremque placeat sequi, molestias ex eligendi recusandae nesciunt dolorem ad perspiciatis nisi omnis. Dolorem ipsam aliquid quasi! Minima sit modi in officia possimus aut facilis optio aliquam porro. Obcaecati, culpa ipsum?', 500000, 'Address SBY 2333, ID', 'MERCHANDISE_25042024_085437.png', '2024-04-25 13:54:37', '2024-04-25 13:54:37'),
(5, 'Name of Merchandise Product', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, aut neque aliquid nostrum, exercitationem repudiandae doloribus in eaque suscipit doloremque placeat sequi, molestias ex eligendi recusandae nesciunt dolorem ad perspiciatis nisi omnis. Dolorem ipsam aliquid quasi! Minima sit modi in officia possimus aut facilis optio aliquam porro. Obcaecati, culpa ipsum?', 500000, 'Address SBY 2333, ID', 'MERCHANDISE_25042024_085444.png', '2024-04-25 13:54:44', '2024-04-25 13:54:44'),
(6, 'Name of Merchandise Product', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, aut neque aliquid nostrum, exercitationem repudiandae doloribus in eaque suscipit doloremque placeat sequi, molestias ex eligendi recusandae nesciunt dolorem ad perspiciatis nisi omnis. Dolorem ipsam aliquid quasi! Minima sit modi in officia possimus aut facilis optio aliquam porro. Obcaecati, culpa ipsum?', 500000, 'Address SBY 2333, ID', 'MERCHANDISE_25042024_085454.png', '2024-04-25 13:54:54', '2024-04-25 13:54:54'),
(7, 'Name of Merchandise Product', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, aut neque aliquid nostrum, exercitationem repudiandae doloribus in eaque suscipit doloremque placeat sequi, molestias ex eligendi recusandae nesciunt dolorem ad perspiciatis nisi omnis. Dolorem ipsam aliquid quasi! Minima sit modi in officia possimus aut facilis optio aliquam porro. Obcaecati, culpa ipsum?', 500000, 'Address SBY 2333, ID', 'MERCHANDISE_25042024_085502.png', '2024-04-25 13:55:02', '2024-04-25 13:55:02'),
(8, 'Name of Merchandise Product', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, aut neque aliquid nostrum, exercitationem repudiandae doloribus in eaque suscipit doloremque placeat sequi, molestias ex eligendi recusandae nesciunt dolorem ad perspiciatis nisi omnis. Dolorem ipsam aliquid quasi! Minima sit modi in officia possimus aut facilis optio aliquam porro. Obcaecati, culpa ipsum?', 500000, 'Address SBY 2333, ID', 'MERCHANDISE_25042024_085511.png', '2024-04-25 13:55:11', '2024-04-25 13:55:11'),
(9, 'Name of Merchandise Product', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, aut neque aliquid nostrum, exercitationem repudiandae doloribus in eaque suscipit doloremque placeat sequi, molestias ex eligendi recusandae nesciunt dolorem ad perspiciatis nisi omnis. Dolorem ipsam aliquid quasi! Minima sit modi in officia possimus aut facilis optio aliquam porro. Obcaecati, culpa ipsum?', 500000, 'Address SBY 2333, ID', 'MERCHANDISE_25042024_085521.png', '2024-04-25 13:55:21', '2024-04-25 13:55:21');

-- --------------------------------------------------------

--
-- Table structure for table `merchandise_categories`
--

DROP TABLE IF EXISTS `merchandise_categories`;
CREATE TABLE `merchandise_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `merchandise_categories`
--

TRUNCATE TABLE `merchandise_categories`;
--
-- Dumping data for table `merchandise_categories`
--

INSERT DELAYED IGNORE INTO `merchandise_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Gelang', '2024-04-25 13:33:41', '2024-04-25 13:33:41'),
(3, 'Kalung', '2024-04-25 13:33:47', '2024-04-25 13:33:47'),
(4, 'Perhiasan', '2024-04-25 13:33:55', '2024-04-25 13:33:55'),
(5, 'sepatu', '2024-04-25 22:48:02', '2024-04-25 22:48:02'),
(6, 'Topi', '2024-04-25 23:02:40', '2024-04-25 23:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `merchandise_has_categories`
--

DROP TABLE IF EXISTS `merchandise_has_categories`;
CREATE TABLE `merchandise_has_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `merchandise_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `merchandise_has_categories`
--

TRUNCATE TABLE `merchandise_has_categories`;
--
-- Dumping data for table `merchandise_has_categories`
--

INSERT DELAYED IGNORE INTO `merchandise_has_categories` (`id`, `category_id`, `merchandise_id`, `created_at`, `updated_at`) VALUES
(34, 2, 3, '2024-04-25 23:02:25', '2024-04-25 23:02:25'),
(35, 3, 3, '2024-04-25 23:02:25', '2024-04-25 23:02:25'),
(36, 4, 3, '2024-04-25 23:02:25', '2024-04-25 23:02:25'),
(37, 5, 3, '2024-04-25 23:02:25', '2024-04-25 23:02:25'),
(38, 2, 4, '2024-04-25 23:02:30', '2024-04-25 23:02:30'),
(39, 3, 4, '2024-04-25 23:02:30', '2024-04-25 23:02:30'),
(40, 2, 2, '2024-04-25 23:02:54', '2024-04-25 23:02:54'),
(41, 3, 2, '2024-04-25 23:02:54', '2024-04-25 23:02:54'),
(42, 4, 2, '2024-04-25 23:02:54', '2024-04-25 23:02:54'),
(43, 5, 2, '2024-04-25 23:02:54', '2024-04-25 23:02:54'),
(44, 6, 2, '2024-04-25 23:02:54', '2024-04-25 23:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `migrations`
--

TRUNCATE TABLE `migrations`;
--
-- Dumping data for table `migrations`
--

INSERT DELAYED IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_03_124609_create_permission_tables', 1),
(5, '2024_04_03_124856_create_personal_access_tokens_table', 1),
(6, '2024_04_25_141838_create_carousels_table', 2),
(7, '2024_04_25_170201_create_testimonials_table', 3),
(12, '2024_04_25_191006_create_merchandise_categories_table', 4),
(13, '2024_04_25_192031_create_merchandises_table', 4),
(14, '2024_04_25_193924_create_merchandise_has_categories_table', 4),
(15, '2024_05_13_040722_create_sensors_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `model_has_permissions`
--

TRUNCATE TABLE `model_has_permissions`;
-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `model_has_roles`
--

TRUNCATE TABLE `model_has_roles`;
--
-- Dumping data for table `model_has_roles`
--

INSERT DELAYED IGNORE INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `password_reset_tokens`
--

TRUNCATE TABLE `password_reset_tokens`;
-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `permissions`
--

TRUNCATE TABLE `permissions`;
-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
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

--
-- Truncate table before insert `personal_access_tokens`
--

TRUNCATE TABLE `personal_access_tokens`;
-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `roles`
--

TRUNCATE TABLE `roles`;
--
-- Dumping data for table `roles`
--

INSERT DELAYED IGNORE INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(3, 'ADMIN', 'web', '2024-04-18 09:29:48', '2024-04-18 09:29:48'),
(4, 'STAFF', 'web', '2024-04-19 06:23:41', '2024-04-19 06:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `role_has_permissions`
--

TRUNCATE TABLE `role_has_permissions`;
-- --------------------------------------------------------

--
-- Table structure for table `sensors`
--

DROP TABLE IF EXISTS `sensors`;
CREATE TABLE `sensors` (
  `id` int(11) NOT NULL,
  `sensor_name` varchar(255) NOT NULL,
  `value1` varchar(255) NOT NULL,
  `value2` varchar(255) NOT NULL,
  `value3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `sensors`
--

TRUNCATE TABLE `sensors`;
--
-- Dumping data for table `sensors`
--

INSERT DELAYED IGNORE INTO `sensors` (`id`, `sensor_name`, `value1`, `value2`, `value3`) VALUES
(1, 'uji_coba', '25', '539', ''),
(2, 'uji_coba', '25', '317', ''),
(3, 'uji_coba', '24', '360', '');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `sessions`
--

TRUNCATE TABLE `sessions`;
--
-- Dumping data for table `sessions`
--

INSERT DELAYED IGNORE INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('zyIvCm9irXr7kqkxDYwe9h6c9KvnrLbzaaiowjqe', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNEJaTnRXcUF6NG1xS2NaWjBhdGVKeGcxbXk3dXJXMDFsbVI5czVMTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMS9hcnRpY2xlLWRldGFpbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzE3Njc4ODI3O319', 1717679570);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `testimonials`
--

TRUNCATE TABLE `testimonials`;
--
-- Dumping data for table `testimonials`
--

INSERT DELAYED IGNORE INTO `testimonials` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Name of Visitor 1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?', 'TESTIMONIAL_25042024_052214.png', '2024-04-25 10:22:14', '2024-04-25 10:22:14'),
(2, 'Name of Visitor 2', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?', 'TESTIMONIAL_25042024_052313.png', '2024-04-25 10:23:13', '2024-04-25 10:23:13'),
(3, 'Name of Visitor 3', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?', 'TESTIMONIAL_25042024_052322.png', '2024-04-25 10:23:22', '2024-04-25 10:23:22'),
(4, 'Name of Visitor 4', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?', 'TESTIMONIAL_25042024_052332.png', '2024-04-25 10:23:32', '2024-04-25 10:23:32'),
(5, 'Name of Visitor 5', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?', 'TESTIMONIAL_25042024_052343.png', '2024-04-25 10:23:43', '2024-04-25 10:23:43'),
(7, 'Name of Visitor 6', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?', 'TESTIMONIAL_25042024_052407.png', '2024-04-25 10:24:07', '2024-04-25 10:24:07'),
(8, 'Name of Visitor 7', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?', 'TESTIMONIAL_25042024_052416.png', '2024-04-25 10:24:16', '2024-04-25 10:24:16'),
(9, 'Name of Visitor 8', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?', 'TESTIMONIAL_25042024_052427.png', '2024-04-25 10:24:27', '2024-04-25 10:24:27'),
(10, 'Name of Visitor 9', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consectetur pariatur ullam optio, unde suscipit?', 'TESTIMONIAL_25042024_052438.png', '2024-04-25 10:24:38', '2024-04-25 10:24:38'),
(11, 'aaaaaa', 'aaaa', 'TESTIMONIAL_26042024_072521.png', '2024-04-26 00:25:21', '2024-04-26 00:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'admin@simulindo.com', NULL, '$2y$12$Bk.2YULB/ZP9hEvlrYqtE.mgf71bd5AxqbzhC.ayOUk1l/N9cu6f2', NULL, '2024-04-18 09:29:48', '2024-04-18 09:29:48'),
(13, 'Staff', 'staff@simulindo.com', NULL, '$2y$12$4yuR96vnVzrI7T3MQjP9HO1gq2nQ8ou2JjIP.rJsKKww4InOqYAx.', NULL, '2024-04-25 03:29:06', '2024-04-25 03:53:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchandises`
--
ALTER TABLE `merchandises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchandise_categories`
--
ALTER TABLE `merchandise_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchandise_has_categories`
--
ALTER TABLE `merchandise_has_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchandise_has_categories_merchandise_id_foreign` (`merchandise_id`),
  ADD KEY `merchandise_has_categories_category_id_foreign` (`category_id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `sensors`
--
ALTER TABLE `sensors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchandises`
--
ALTER TABLE `merchandises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `merchandise_categories`
--
ALTER TABLE `merchandise_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `merchandise_has_categories`
--
ALTER TABLE `merchandise_has_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sensors`
--
ALTER TABLE `sensors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `merchandise_has_categories`
--
ALTER TABLE `merchandise_has_categories`
  ADD CONSTRAINT `merchandise_has_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `merchandise_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `merchandise_has_categories_merchandise_id_foreign` FOREIGN KEY (`merchandise_id`) REFERENCES `merchandise_categories` (`id`) ON DELETE CASCADE;

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
