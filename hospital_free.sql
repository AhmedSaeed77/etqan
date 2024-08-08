-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2024 at 08:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_free`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `name`, `image`, `description`, `date_time`, `created_at`, `updated_at`) VALUES
(1, 'اعلان 1', 'storage/advertisements/images/olwWSSzsA0rurj4XrUW71bQCEKsqzrpe0bsLN1uK.jpg', '<p><span style=\"font-size: 1rem;\">وصف </span>اعلان وصف <span style=\"font-size: 1rem;\">وصف </span><span style=\"font-size: 1rem;\">اعلان وصف </span><span style=\"font-size: 1rem;\">وصف </span><span style=\"font-size: 1rem;\">اعلان وصف </span><span style=\"font-size: 1rem;\">وصف </span><span style=\"font-size: 1rem;\">اعلان وصف</span></p>', '2024-08-05 09:06:00', '2024-08-04 15:05:17', '2024-08-04 15:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ssss', 'superadmin@superadmin.comqq', 'sss', '2024-08-05 13:29:07', '2024-08-05 13:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'احمد سعيد', 'storage/doctors/images/0E9uXqJ7Y285zo65ejOU26WK2idHERGRrgb2FLPU.jpg', '<p><span style=\"font-weight: 700;\">وصف الطبيب&nbsp;</span><br></p>', '2024-08-04 15:43:17', '2024-08-04 15:55:54'),
(3, 'احمد سعيد', 'storage/doctors/images/0E9uXqJ7Y285zo65ejOU26WK2idHERGRrgb2FLPU.jpg', '<p><span style=\"font-weight: 700;\">وصف الطبيب&nbsp;</span><br></p>', '2024-08-04 15:43:17', '2024-08-04 15:55:54'),
(4, 'احمد سعيد', 'storage/doctors/images/0E9uXqJ7Y285zo65ejOU26WK2idHERGRrgb2FLPU.jpg', '<p><span style=\"font-weight: 700;\">وصف الطبيب&nbsp;</span><br></p>', '2024-08-04 15:43:17', '2024-08-04 15:55:54'),
(5, 'احمد سعيد', 'storage/doctors/images/0E9uXqJ7Y285zo65ejOU26WK2idHERGRrgb2FLPU.jpg', '<p><span style=\"font-weight: 700;\">وصف الطبيب&nbsp;</span><br></p>', '2024-08-04 15:43:17', '2024-08-04 15:55:54'),
(6, 'احمد سعيد', 'storage/doctors/images/0E9uXqJ7Y285zo65ejOU26WK2idHERGRrgb2FLPU.jpg', '<p><span style=\"font-weight: 700;\">وصف الطبيب&nbsp;</span><br></p>', '2024-08-04 15:43:17', '2024-08-04 15:55:54'),
(7, 'احمد سعيد', 'storage/doctors/images/0E9uXqJ7Y285zo65ejOU26WK2idHERGRrgb2FLPU.jpg', '<p><span style=\"font-weight: 700;\">وصف الطبيب&nbsp;</span><br></p>', '2024-08-04 15:43:17', '2024-08-04 15:55:54'),
(8, 'احمد سعيد', 'storage/doctors/images/0E9uXqJ7Y285zo65ejOU26WK2idHERGRrgb2FLPU.jpg', '<p><span style=\"font-weight: 700;\">وصف الطبيب&nbsp;</span><br></p>', '2024-08-04 15:43:17', '2024-08-04 15:55:54'),
(9, 'احمد سعيد', 'storage/doctors/images/0E9uXqJ7Y285zo65ejOU26WK2idHERGRrgb2FLPU.jpg', '<p><span style=\"font-weight: 700;\">وصف الطبيب&nbsp;</span><br></p>', '2024-08-04 15:43:17', '2024-08-04 15:55:54'),
(10, 'احمد سعيد', 'storage/doctors/images/0E9uXqJ7Y285zo65ejOU26WK2idHERGRrgb2FLPU.jpg', '<p><span style=\"font-weight: 700;\">وصف الطبيب&nbsp;</span><br></p>', '2024-08-04 15:43:17', '2024-08-04 15:55:54'),
(12, 'احمد سعيد', 'storage/doctors/images/0E9uXqJ7Y285zo65ejOU26WK2idHERGRrgb2FLPU.jpg', '<p><span style=\"font-weight: 700;\">وصف الطبيب&nbsp;</span><br></p>', '2024-08-04 15:43:17', '2024-08-04 15:55:54'),
(13, 'احمد سعيد', 'storage/doctors/images/0E9uXqJ7Y285zo65ejOU26WK2idHERGRrgb2FLPU.jpg', '<p><span style=\"font-weight: 700;\">وصف الطبيب&nbsp;</span><br></p>', '2024-08-04 15:43:17', '2024-08-04 15:55:54'),
(14, 'احمد سعيد', 'storage/doctors/images/0E9uXqJ7Y285zo65ejOU26WK2idHERGRrgb2FLPU.jpg', '<p><span style=\"font-weight: 700;\">وصف الطبيب&nbsp;</span><br></p>', '2024-08-04 15:43:17', '2024-08-04 15:55:54'),
(15, 'احمد سعيد', 'storage/doctors/images/0E9uXqJ7Y285zo65ejOU26WK2idHERGRrgb2FLPU.jpg', '<p><span style=\"font-weight: 700;\">وصف الطبيب&nbsp;</span><br></p>', '2024-08-04 15:43:17', '2024-08-04 15:55:54'),
(16, 'احمد سعيد', 'storage/doctors/images/0E9uXqJ7Y285zo65ejOU26WK2idHERGRrgb2FLPU.jpg', '<p><span style=\"font-weight: 700;\">وصف الطبيب&nbsp;</span><br></p>', '2024-08-04 15:43:17', '2024-08-04 15:55:54'),
(17, 'احمد سعيد', 'storage/doctors/images/0E9uXqJ7Y285zo65ejOU26WK2idHERGRrgb2FLPU.jpg', '<p><span style=\"font-weight: 700;\">وصف الطبيب&nbsp;</span><br></p>', '2024-08-04 15:43:17', '2024-08-04 15:55:54');

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
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `type` enum('image','text') DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `key`, `value`, `type`, `name_ar`, `name_en`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'https://github.com/AhmedSaeed77/hospital', 'text', 'فيس بوك', 'facebook', '2024-08-06 07:19:58', '2024-08-08 03:04:56'),
(2, 'linkedin', 'linkedin@linkedin.com', 'text', 'لينكد ان', 'linkedIn', '2024-08-06 07:19:58', '2024-08-08 03:04:56'),
(3, 'twitter', 'twiter@twiter.com', 'text', 'تويتر', 'Twitter', '2024-08-06 07:19:58', '2024-08-08 03:04:56'),
(4, 'phone', '012457878878', 'text', 'رقم الهاتف', 'Phone', '2024-08-06 07:19:58', '2024-08-08 03:04:56'),
(5, 'email', 'info@etqan.com', 'text', 'البريد الالكترونى', 'Email', '2024-08-06 07:19:58', '2024-08-08 03:04:56'),
(6, 'location', 'الرياض', 'text', ' العنوان', 'Location', '2024-08-06 07:19:58', '2024-08-08 03:04:56'),
(7, 'ads', 'الاعلانات الجديده', 'text', ' الاعلانات', 'Advertisements', '2024-08-06 07:19:58', '2024-08-08 03:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `email`, `phone`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '+96650000000', NULL, '$2y$12$6r2.2MZKm2Rgjz/o8ROdTOtKqXMGBD9tfSyfPeMpz4rbmK6e2usvG', '57ehF3pEw7R7gC4yoSSrAZVzJCf4bSPBrXfVU6ngjDjKkD07B5n523iRBW9i', '2024-08-02 12:44:50', '2024-08-02 12:44:50');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_20_170134_create_managers_table', 1),
(6, '2024_08_04_165607_create_structures_table', 2),
(7, '2024_08_04_173014_create_advertisements_table', 3),
(8, '2024_08_04_183106_create_doctors_table', 4),
(11, '2024_08_05_134049_create_contact_us_table', 5),
(12, '2024_08_05_165934_change_password_nullable_in_users_table', 6),
(13, '2024_08_06_092734_create_infos_table', 7),
(14, '2024_08_06_095840_create_programs_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url_video` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `name`, `image`, `description`, `url_video`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Saeed', 'storage/programs/images/FelTTKwhYbnrvDszceDerGwktSWMznyeYzxLHKyc.png', '<p>aaaaaaaaa</p>', 'GVNDbTwOSiw', '2024-08-06 10:10:28', '2024-08-06 10:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `structures`
--

CREATE TABLE `structures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`content`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `structures`
--

INSERT INTO `structures` (`id`, `key`, `content`, `created_at`, `updated_at`) VALUES
(1, 'home', '{\"ar\":{\"home_content\":{\"title\":\"\\u0639\\u0646\\u0648\\u0627\\u0646 \\u0645\\u062d\\u062a\\u0648\\u0649 \\u0627\\u0644\\u0635\\u0641\\u062d\\u0647 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\\u0647 \\u0628\\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629\",\"description\":\"<p><span style=\\\"color: rgb(119, 119, 119); font-family: Cairo, sans-serif;\\\">\\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645\\u00a0<\\/span><br><\\/p>\",\"image\":\"http:\\/\\/127.0.0.1:8000\\/storage\\/content\\/home\\/4oyoOBE6w9bt936BUGdHHbtWht8aaZPEjHXIKr6d.jpg\"},\"about_content\":{\"title\":\"\\u0639\\u0646\\u0648\\u0627\\u0646 \\u0645\\u062d\\u062a\\u0648\\u0649 \\u0639\\u0646 \\u0627\\u0644\\u0645\\u0648\\u0642\\u0639 \\u0628\\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629\",\"description\":\"<p><span style=\\\"color: rgb(119, 119, 119); font-family: Cairo, sans-serif;\\\">\\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645<\\/span><br><\\/p>\",\"image\":\"http:\\/\\/127.0.0.1:8000\\/storage\\/content\\/home\\/hMRH21oDNJ9ATdOpvFdC7zGidoJdHMOdKYncQrRS.jpg\"}},\"en\":{\"home_content\":{\"image\":\"http:\\/\\/127.0.0.1:8000\\/storage\\/content\\/home\\/4oyoOBE6w9bt936BUGdHHbtWht8aaZPEjHXIKr6d.jpg\"},\"about_content\":{\"image\":\"http:\\/\\/127.0.0.1:8000\\/storage\\/content\\/home\\/hMRH21oDNJ9ATdOpvFdC7zGidoJdHMOdKYncQrRS.jpg\"}}}', '2024-08-04 14:07:34', '2024-08-04 14:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `graduation_document` varchar(255) NOT NULL,
  `certificate` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `created_at`, `updated_at`, `graduation_document`, `certificate`, `is_active`) VALUES
(1, 'User', 'user@elryad.com', '$2y$12$5GnQ8nAscBSAAXtLbxj.t.mBpwPutdiKRET99QcYq4hv2ziizZUuy', '012121212', '2024-08-02 12:44:51', '2024-08-05 19:41:11', 'aaaaaaaaaaaaa', 'aaaaaaaaaaa', 1),
(10, 'Ahmed Saeed', 'ahmedsaeed1722@gmail.com', NULL, '01271020837', '2024-08-05 14:10:03', '2024-08-05 19:30:43', 'storage/user/images/0jkwZPJhO6yELY9dCMXm1m4QX3FwsaiPj0rUImGR.pdf', 'storage/user/images/814tJUfbCXRtDnNErd9hgeMWN53oEVKlS5OOLak3.pdf', 1),
(11, 'Ahmed Saeed', 'ahmedsaeed1720@gmail.com', NULL, '01271020803', '2024-08-05 14:11:07', '2024-08-05 14:11:07', 'storage/user/images/vQfSQlGyACQ9y9uS0Lq2Lzl4CJARcslx1GRCYhYd.pdf', 'storage/user/images/fhxqOTNCel6UOtiZhkzabR6ssSJI01NgrXtOcmUD.pdf', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `infos_key_unique` (`key`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `managers_email_unique` (`email`),
  ADD UNIQUE KEY `managers_phone_unique` (`phone`);

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
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `structures`
--
ALTER TABLE `structures`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `structures_key_unique` (`key`);

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
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `structures`
--
ALTER TABLE `structures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
