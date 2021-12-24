-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 09:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amr_lrv_standar`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit_trails`
--

CREATE TABLE `audit_trails` (
  `kd_audit_trail` int(10) UNSIGNED NOT NULL,
  `fk_kd_user` int(11) NOT NULL,
  `nama_form` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_field` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_sebelumnya` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_terbaru` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kegiatan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `impl_role_permissions`
--

CREATE TABLE `impl_role_permissions` (
  `kd_impl_role_permission` int(10) UNSIGNED NOT NULL,
  `fk_kd_role` int(11) NOT NULL,
  `fk_kd_permission` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `impl_role_permissions`
--

INSERT INTO `impl_role_permissions` (`kd_impl_role_permission`, `fk_kd_role`, `fk_kd_permission`, `created_by`, `created_at`, `updated_at`) VALUES
(35, 10, 'sidebar.index', 101195007, '2021-10-31 23:39:16', '2021-10-31 23:39:16'),
(36, 10, 'sidebar.store', 101195007, '2021-10-31 23:40:22', '2021-10-31 23:40:22'),
(37, 10, 'sidebar.show', 101195007, '2021-10-31 23:40:22', '2021-10-31 23:40:22'),
(38, 10, 'sidebar.update', 101195007, '2021-10-31 23:40:23', '2021-10-31 23:40:23'),
(39, 10, 'sidebar.destroy', 101195007, '2021-10-31 23:40:23', '2021-10-31 23:40:23'),
(40, 11, 'sidebar.index', 101195007, '2021-10-31 23:41:01', '2021-10-31 23:41:01'),
(41, 10, 'kelola-user.search', 101195007, '2021-11-01 21:18:13', '2021-11-01 21:18:13'),
(42, 10, 'kelola-user.search', 101195007, '2021-11-01 21:18:14', '2021-11-01 21:18:14'),
(43, 10, 'kelola-user.index', 101195007, '2021-11-01 21:18:18', '2021-11-01 21:18:18'),
(44, 10, 'kelola-user.index', 101195007, '2021-11-01 21:18:18', '2021-11-01 21:18:18'),
(45, 10, 'kelola-user.store', 101195007, '2021-11-01 21:18:20', '2021-11-01 21:18:20'),
(46, 10, 'kelola-user.show', 101195007, '2021-11-01 21:18:23', '2021-11-01 21:18:23'),
(47, 10, 'kelola-user.update', 101195007, '2021-11-01 21:18:24', '2021-11-01 21:18:24'),
(48, 10, 'kelola-user.destroy', 101195007, '2021-11-01 21:18:25', '2021-11-01 21:18:25'),
(49, 10, 'permission.search', 101195007, '2021-11-01 21:18:25', '2021-11-01 21:18:25'),
(50, 10, 'permission.index', 101195007, '2021-11-01 21:18:26', '2021-11-01 21:18:26'),
(51, 10, 'permission.show', 101195007, '2021-11-01 21:18:27', '2021-11-01 21:18:27'),
(52, 10, 'role.index', 101195007, '2021-11-01 21:18:28', '2021-11-01 21:18:28'),
(53, 10, 'role.store', 101195007, '2021-11-01 21:18:29', '2021-11-01 21:18:29'),
(54, 10, 'role.show', 101195007, '2021-11-01 21:18:30', '2021-11-01 21:18:30'),
(55, 10, 'role.update', 101195007, '2021-11-01 21:18:32', '2021-11-01 21:18:32'),
(56, 10, 'role.destroy', 101195007, '2021-11-01 21:18:34', '2021-11-01 21:18:34'),
(57, 10, 'role-permission.store', 101195007, '2021-11-01 21:18:36', '2021-11-01 21:18:36'),
(58, 10, 'role-permission.search', 101195007, '2021-11-01 21:18:38', '2021-11-01 21:18:38'),
(59, 10, 'role-permission.index', 101195007, '2021-11-01 21:18:39', '2021-11-01 21:18:39'),
(60, 10, 'role-permission.destroy', 101195007, '2021-11-01 21:18:40', '2021-11-01 21:18:40'),
(61, 11, 'sidebar.destroy', 101195007, '2021-11-01 23:42:54', '2021-11-01 23:42:54'),
(62, 11, 'sidebar.update', 101195007, '2021-11-02 00:49:17', '2021-11-02 00:49:17'),
(63, 11, 'kelola-user.index', 101195007, '2021-11-02 01:29:03', '2021-11-02 01:29:03'),
(64, 11, 'kelola-user.store', 101195007, '2021-11-02 01:30:38', '2021-11-02 01:30:38'),
(65, 10, 'subsidebar.search', 101195007, '2021-11-02 02:03:14', '2021-11-02 02:03:14'),
(66, 10, 'subsidebar.index', 101195007, '2021-11-02 02:03:17', '2021-11-02 02:03:17'),
(67, 10, 'subsidebar.store', 101195007, '2021-11-02 02:03:18', '2021-11-02 02:03:18'),
(68, 10, 'subsidebar.show', 101195007, '2021-11-02 02:03:19', '2021-11-02 02:03:19'),
(69, 10, 'subsidebar.update', 101195007, '2021-11-02 02:03:20', '2021-11-02 02:03:20'),
(70, 10, 'subsidebar.destroy', 101195007, '2021-11-02 02:03:21', '2021-11-02 02:03:21'),
(71, 10, 'audit-trail.index', 101195007, '2021-11-04 00:07:31', '2021-11-04 00:07:31');

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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2021_10_21_085529_create_roles_table', 1),
(11, '2021_10_21_085547_create_sidebars_table', 1),
(12, '2021_10_21_085601_create_sub_sidebars_table', 1),
(13, '2021_10_21_085635_create_audit_trails_table', 1),
(14, '2021_10_21_085718_create_impl_role_permissions_table', 1),
(15, '2021_11_01_013931_add_status_user_to_users', 2),
(17, '2021_11_01_022220_create_permissions_table', 3),
(18, '2021_11_01_134504_add_nama_route_to__sub_sidebar', 4),
(19, '2021_11_04_040609_create_aplikasis_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('13f7ac341cdc156e8b7bbf3ae7ff142f6aeff90677a68dda4f3d0e23b8cc10354b07bf0aa97fac40', 101195007, 8, 'amr_apps_basic', '[]', 0, '2021-11-03 21:18:54', '2021-11-03 21:18:54', '2022-11-04 04:18:54'),
('1ef3635c9d5c2bbf633f6302ac40f2457db61ec31f96a5130bbdbad471af8f1803f752d4f849abcd', 101195007, 8, 'amr_apps_basic', '[]', 0, '2021-11-03 21:20:49', '2021-11-03 21:20:49', '2022-11-04 04:20:49'),
('83e83d25d04568eae309abc0061938c2f2daef34aa8b29be60f643a2ad283c7bcc688db352a73e46', 101195007, 6, 'testing', '[]', 0, '2021-10-28 21:08:28', '2021-10-28 21:08:28', '2022-10-29 04:08:28'),
('cf9603a19d59b39046f15d7987cb969e87e434a9e0d3a8b9b8366535a2622e878831cba22d703f73', 101195007, 6, 'amr_apps_basic', '[]', 0, '2021-10-30 01:14:37', '2021-10-30 01:14:37', '2022-10-30 08:14:37'),
('d1f2d81ede2ea6781b7a452add36f0082b4f633d8827a8313baf28909751d32f524531c6f3398e52', 101195007, 8, 'amr_apps_basic', '[]', 0, '2021-11-03 21:18:40', '2021-11-03 21:18:40', '2022-11-04 04:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'OP5x6Nkt0tDhg5M2I1hxjZtHI4ZoAjwRHehgnJXh', NULL, 'http://localhost', 1, 0, 0, '2021-10-21 02:31:01', '2021-10-21 02:31:01'),
(2, NULL, 'Laravel Password Grant Client', 'gCpGM4PfV2dOrSkMJJFP5C7ahKr8N15zHwSbcuIK', 'users', 'http://localhost', 0, 1, 0, '2021-10-21 02:31:01', '2021-10-21 02:31:01'),
(3, NULL, 'Laravel Personal Access Client', 'uqR7XMSVn5uEqijmLSL1LWjHIRwWTdlJ1amllSej', NULL, 'http://localhost', 1, 0, 0, '2021-10-28 20:37:51', '2021-10-28 20:37:51'),
(4, NULL, 'Laravel Password Grant Client', 'HB63ePD4BRN95n70tMQcTV2UgYQf8hnIE7keYtqE', 'users', 'http://localhost', 0, 1, 0, '2021-10-28 20:37:51', '2021-10-28 20:37:51'),
(5, NULL, 'testing', 'tY4WMEL9tYAngtMVCduG9fkyGrQKjNcRafyVrc1d', NULL, 'http://localhost', 1, 0, 0, '2021-10-28 20:46:30', '2021-10-28 20:46:30'),
(6, NULL, 'Laravel Personal Access Client', 'cxakF5DSfmmVen0AUDj1HTsRV55naAPJHGBEbSAL', NULL, 'http://localhost', 1, 0, 0, '2021-10-28 21:07:50', '2021-10-28 21:07:50'),
(7, NULL, 'Laravel Password Grant Client', 'IBtAo01I4rFL2jpm2ejZ5r791qD3sqykkDTMqeh0', 'users', 'http://localhost', 0, 1, 0, '2021-10-28 21:07:50', '2021-10-28 21:07:50'),
(8, NULL, 'AMR_APPS_BOILER Personal Access Client', 'sIM3TPBHSHVQ8bg5qJQj0wCScnkCZvDuIlZ5qNRL', NULL, 'http://localhost', 1, 0, 0, '2021-11-03 21:05:28', '2021-11-03 21:05:28'),
(9, NULL, 'AMR_APPS_BOILER Password Grant Client', 'rVhEo5uwbfAtfhT875VlpDLMTC4ILEWqwcB3uCbH', 'users', 'http://localhost', 0, 1, 0, '2021-11-03 21:05:28', '2021-11-03 21:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-10-21 02:31:01', '2021-10-21 02:31:01'),
(2, 3, '2021-10-28 20:37:51', '2021-10-28 20:37:51'),
(3, 5, '2021-10-28 20:46:30', '2021-10-28 20:46:30'),
(4, 6, '2021-10-28 21:07:50', '2021-10-28 21:07:50'),
(5, 8, '2021-11-03 21:05:28', '2021-11-03 21:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `kd_permission` int(10) UNSIGNED NOT NULL,
  `nama_route` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_grup` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_url` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`kd_permission`, `nama_route`, `nama_grup`, `route_url`, `created_at`, `updated_at`) VALUES
(109, 'login app', 'app', 'app.login', NULL, NULL),
(110, 'Daftar role-permission', 'role-permission', 'role-permission.index', NULL, NULL),
(111, 'Pencarian role-permission', 'role-permission', 'role-permission.search', NULL, NULL),
(112, 'Menyimpan role-permission', 'role-permission', 'role-permission.store', NULL, NULL),
(113, 'Menghapus role-permission', 'role-permission', 'role-permission.destroy', NULL, NULL),
(114, 'Daftar sidebar', 'sidebar', 'sidebar.index', NULL, NULL),
(115, 'Menyimpan sidebar', 'sidebar', 'sidebar.store', NULL, NULL),
(116, 'Detail sidebar', 'sidebar', 'sidebar.show', NULL, NULL),
(117, 'Update sidebar', 'sidebar', 'sidebar.update', NULL, NULL),
(118, 'Menghapus sidebar', 'sidebar', 'sidebar.destroy', NULL, NULL),
(119, 'Daftar role', 'role', 'role.index', NULL, NULL),
(120, 'Menyimpan role', 'role', 'role.store', NULL, NULL),
(121, 'Detail role', 'role', 'role.show', NULL, NULL),
(122, 'Update role', 'role', 'role.update', NULL, NULL),
(123, 'Menghapus role', 'role', 'role.destroy', NULL, NULL),
(124, 'Pencarian kelola-user', 'kelola-user', 'kelola-user.search', NULL, NULL),
(125, 'Daftar kelola-user', 'kelola-user', 'kelola-user.index', NULL, NULL),
(126, 'Menyimpan kelola-user', 'kelola-user', 'kelola-user.store', NULL, NULL),
(127, 'Detail kelola-user', 'kelola-user', 'kelola-user.show', NULL, NULL),
(128, 'Update kelola-user', 'kelola-user', 'kelola-user.update', NULL, NULL),
(129, 'Menghapus kelola-user', 'kelola-user', 'kelola-user.destroy', NULL, NULL),
(130, 'Pencarian permission', 'permission', 'permission.search', NULL, NULL),
(131, 'Daftar permission', 'permission', 'permission.index', NULL, NULL),
(132, 'Detail permission', 'permission', 'permission.show', NULL, NULL),
(133, 'Pencarian subsidebar', 'subsidebar', 'subsidebar.search', NULL, NULL),
(134, 'Daftar subsidebar', 'subsidebar', 'subsidebar.index', NULL, NULL),
(135, 'Menyimpan subsidebar', 'subsidebar', 'subsidebar.store', NULL, NULL),
(136, 'Detail subsidebar', 'subsidebar', 'subsidebar.show', NULL, NULL),
(137, 'Update subsidebar', 'subsidebar', 'subsidebar.update', NULL, NULL),
(138, 'Menghapus subsidebar', 'subsidebar', 'subsidebar.destroy', NULL, NULL),
(139, 'Daftar audit-trail', 'audit-trail', 'audit-trail.index', NULL, NULL),
(140, 'Detail audit-trail', 'audit-trail', 'audit-trail.show', NULL, NULL);

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 101195007, 'helo', 'ae3804a832dbb34ef98b70039b9010b0c1f8036b779b991f86bfe2d5f18d084f', '[\"*\"]', NULL, '2021-10-28 20:14:27', '2021-10-28 20:14:27'),
(2, 'App\\Models\\User', 101195007, 'helo', '07d8edae758408fc563f8f2532abe892706ffd8675537745af0f612705849300', '[\"*\"]', NULL, '2021-10-28 20:14:53', '2021-10-28 20:14:53'),
(3, 'App\\Models\\User', 101195007, 'helo', 'e8d3cb28b8afe882ce134db91cfa5454d900e0596d20f0310a27f8b3e5610966', '[\"*\"]', NULL, '2021-10-28 20:16:38', '2021-10-28 20:16:38'),
(4, 'App\\Models\\User', 101195007, 'My Token', 'bcc448d4285acf15821158e2b1cf2add800f3f27a6486068a12e6f59978a788a', '[\"place-orders\"]', NULL, '2021-10-28 20:17:33', '2021-10-28 20:17:33'),
(5, 'App\\Models\\User', 101195007, 'My Token', '5bb47fff576a828d02a1a76bc1fb6cd8e33db106da4aedd00d4897341935b0f8', '[\"place-orders\"]', NULL, '2021-10-28 20:17:49', '2021-10-28 20:17:49'),
(6, 'App\\Models\\User', 101195007, 'My Token', 'e2965a5fc1427d89c85dc9f5c844bffd0317b371852ee9fe730d0851723218a9', '[\"place-orders\"]', NULL, '2021-10-28 20:19:02', '2021-10-28 20:19:02'),
(7, 'App\\Models\\User', 101195007, 'My Token', '68c3b265f1a50756fb3e36885ae20fee4d6ddce8c8436ddfb799126c6cc57134', '[\"place-orders\"]', NULL, '2021-10-28 20:19:18', '2021-10-28 20:19:18'),
(8, 'App\\Models\\User', 101195007, 'My Token', '394b1e8ed79e73971160cd9ba885cbfa20a93f588cfebd171bda25739d2ce2ce', '[\"place-orders\"]', NULL, '2021-10-28 20:19:30', '2021-10-28 20:19:30'),
(9, 'App\\Models\\User', 101195007, 'MyApp', 'e35a0b09f07fa3a751ba4a043ee555beaff227b55c947320439c5f98894c39b8', '[\"*\"]', NULL, '2021-10-28 20:24:16', '2021-10-28 20:24:16'),
(10, 'App\\Models\\User', 101195007, 'MyApp', '538a3e78b546f8706c4ecb704e9989562b1ae5a0b886989f9fd3b7c0e8474bac', '[\"*\"]', NULL, '2021-10-28 20:24:47', '2021-10-28 20:24:47'),
(11, 'App\\Models\\User', 101195007, 'MyApp', '4d1f5d7ed8d4742976825cbadc04f6a4bbb5f82347d0efcb42e6cb75cdd6e749', '[\"*\"]', NULL, '2021-10-28 20:24:51', '2021-10-28 20:24:51'),
(12, 'App\\Models\\User', 101195007, 'MyApp', '132937841ceb17cb635d3df7bfdbc082bbd63cc48cee7f995060b274a2182a86', '[\"*\"]', NULL, '2021-10-28 20:26:06', '2021-10-28 20:26:06'),
(13, 'App\\Models\\User', 101195007, 'MyApp', 'e391d809510fcd976997dd2774aeff07ee9d15a2eddb8c3b5e07346cf9a79fa5', '[\"*\"]', '2021-10-28 20:58:25', '2021-10-28 20:26:19', '2021-10-28 20:58:25'),
(14, 'App\\Models\\User', 101195007, 'MyApp', '145a298e27ba3dd3d9e42ee4a689729b121dcb2b23bf94a4e7d3d453264bc3ce', '[\"*\"]', NULL, '2021-10-28 20:27:15', '2021-10-28 20:27:15'),
(15, 'App\\Models\\User', 101195007, 'helo', 'a31f7ae1967d0a331e8e9862d5b80691c642ee8e7328b90302e8af716c22a612', '[\"*\"]', NULL, '2021-10-28 20:30:02', '2021-10-28 20:30:02'),
(16, 'App\\Models\\User', 101195007, 'testing', '3604e9f359a35a4fb58dc0ade1a56d8346014d00e539c84da4664de55f87eeb7', '[\"*\"]', NULL, '2021-10-28 20:46:53', '2021-10-28 20:46:53'),
(17, 'App\\Models\\User', 101195007, 'testing', '379b47a699b1d099dfc3840e00ab669d00633cfbe8b8ee415f3092260ed33d93', '[\"*\"]', NULL, '2021-10-28 20:46:57', '2021-10-28 20:46:57'),
(18, 'App\\Models\\User', 101195007, 'testing', 'a0be4e40e375f1880b26f097d3b22a33f89957311f7b2346595fdf2f9fa5f3bd', '[\"*\"]', NULL, '2021-10-28 20:52:19', '2021-10-28 20:52:19'),
(19, 'App\\Models\\User', 101195007, 'testing', '2bd7682120e1faee1ad8308888b77879575f9f9b4f2117c051dda4bc49cb8d02', '[\"*\"]', NULL, '2021-10-28 20:56:59', '2021-10-28 20:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `kd_role` int(10) UNSIGNED NOT NULL,
  `nama_role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`kd_role`, `nama_role`, `created_by`, `created_at`, `updated_at`) VALUES
(10, 'Super Admin', 101195007, '2021-10-30 01:50:28', '2021-11-04 00:40:33'),
(11, 'User Biasa', 101195007, '2021-10-31 23:40:54', '2021-11-02 01:28:41');

-- --------------------------------------------------------

--
-- Table structure for table `sidebars`
--

CREATE TABLE `sidebars` (
  `kd_sidebar` int(10) UNSIGNED NOT NULL,
  `nama_sidebar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_sidebar` tinyint(1) NOT NULL,
  `urutan_sidebar` int(11) NOT NULL,
  `icon_sidebar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sidebars`
--

INSERT INTO `sidebars` (`kd_sidebar`, `nama_sidebar`, `status_sidebar`, `urutan_sidebar`, `icon_sidebar`, `created_at`, `updated_at`) VALUES
(9, 'Pengelolaan Aplikasi', 1, 1, 'fa-cogs', '2021-10-31 23:49:10', '2021-11-04 00:08:07'),
(10, 'Daftar User', 1, 2, 'fa-users', '2021-11-01 07:22:54', '2021-11-02 01:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sidebars`
--

CREATE TABLE `sub_sidebars` (
  `kd_sub_sidebar` int(10) UNSIGNED NOT NULL,
  `fk_kd_sidebar` int(10) UNSIGNED NOT NULL,
  `nama_sub_sidebar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_sub_sidebar` tinyint(1) NOT NULL,
  `urutan_sub_sidebar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fk_nama_permission` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sidebars`
--

INSERT INTO `sub_sidebars` (`kd_sub_sidebar`, `fk_kd_sidebar`, `nama_sub_sidebar`, `status_sub_sidebar`, `urutan_sub_sidebar`, `created_at`, `updated_at`, `fk_nama_permission`) VALUES
(1, 9, 'Daftar sidebar', 1, 21, '2021-11-01 06:48:22', '2021-11-04 00:09:56', 'sidebar.index'),
(2, 9, 'Daftar role', 1, 3, '2021-11-01 07:16:43', '2021-11-04 00:05:44', 'role.index'),
(3, 9, 'Daftar permission', 1, 4, '2021-11-01 07:16:53', '2021-11-04 00:08:36', 'permission.index'),
(5, 10, 'Daftar kelola-user', 1, 12, '2021-11-01 07:23:24', '2021-11-04 00:13:51', 'kelola-user.index'),
(6, 9, 'Daftar audit-trail', 1, 5, '2021-11-04 00:07:46', '2021-11-04 00:07:46', 'audit-trail.index');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `kd_user` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_user` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`kd_user`, `nama`, `email`, `username`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status_user`) VALUES
(101195007, 'Fahmi Amrullah', 'david.sipes@example.net', 'admin', '10', '2021-10-21 02:23:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gkSwXKh318cm4nL53oqWXg4S7m15MCJlijIlXJbv0V0TIFt5iqcY6XpFJkKa', '2021-10-21 02:23:05', '2021-10-31 18:49:01', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit_trails`
--
ALTER TABLE `audit_trails`
  ADD PRIMARY KEY (`kd_audit_trail`),
  ADD KEY `audit_trails_fk_kd_user_index` (`fk_kd_user`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `impl_role_permissions`
--
ALTER TABLE `impl_role_permissions`
  ADD PRIMARY KEY (`kd_impl_role_permission`),
  ADD KEY `impl_role_permissions_fk_kd_role_index` (`fk_kd_role`),
  ADD KEY `impl_role_permissions_fk_kd_permission_index` (`fk_kd_permission`),
  ADD KEY `impl_role_permissions_created_by_index` (`created_by`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`kd_permission`);

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
  ADD PRIMARY KEY (`kd_role`),
  ADD KEY `roles_created_by_index` (`created_by`);

--
-- Indexes for table `sidebars`
--
ALTER TABLE `sidebars`
  ADD PRIMARY KEY (`kd_sidebar`);

--
-- Indexes for table `sub_sidebars`
--
ALTER TABLE `sub_sidebars`
  ADD PRIMARY KEY (`kd_sub_sidebar`),
  ADD KEY `sub_sidebars_fk_kd_sidebar_foreign` (`fk_kd_sidebar`),
  ADD KEY `sub_sidebars_fk_nama_permission_index` (`fk_nama_permission`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`kd_user`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audit_trails`
--
ALTER TABLE `audit_trails`
  MODIFY `kd_audit_trail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `impl_role_permissions`
--
ALTER TABLE `impl_role_permissions`
  MODIFY `kd_impl_role_permission` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `kd_permission` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `kd_role` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sidebars`
--
ALTER TABLE `sidebars`
  MODIFY `kd_sidebar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sub_sidebars`
--
ALTER TABLE `sub_sidebars`
  MODIFY `kd_sub_sidebar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_sidebars`
--
ALTER TABLE `sub_sidebars`
  ADD CONSTRAINT `sub_sidebars_fk_kd_sidebar_foreign` FOREIGN KEY (`fk_kd_sidebar`) REFERENCES `sidebars` (`kd_sidebar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
