-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 10:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diet`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` double(6,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 1.100, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(2, 1.275, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(3, 1.350, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(4, 1.525, '2022-11-30 06:41:39', '2022-11-30 06:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `age_ranges`
--

CREATE TABLE `age_ranges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diet_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `age_ranges`
--

INSERT INTO `age_ranges` (`id`, `name`, `diet_type_id`, `created_at`, `updated_at`) VALUES
(1, '10-15 YEARS OLD', 1, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(2, '15-20 YEARS OLD', 1, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(3, '20-25 YRS OLD', 1, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(4, '25-30 YEARS OLD', 1, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(5, '30-35 YEARS OLD', 1, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(6, '35-40 YEARS OLD', 1, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(7, '40-45 YEARS OLD', 1, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(8, '45-50 YRS OLD', 1, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(9, '50-55 YEARS OLD', 1, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(10, '55-60 YEARS OLD', 1, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(11, '65+ YEARS OLD', 1, '2022-11-30 06:41:39', '2022-11-30 06:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `allergens`
--

CREATE TABLE `allergens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allergens`
--

INSERT INTO `allergens` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'MILK', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(2, 'EGGS', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(3, 'PEANUTS', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(4, 'TREENUTS', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(5, 'WALNUTS', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(6, 'ALMOND', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(7, 'HAZELNUT', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(8, 'PECAN', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(9, 'CASHEW', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(10, 'PISTACHIO', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(11, 'SESAME', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(12, 'SOY', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(13, 'FISH', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(14, 'SHELLFISH', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(15, 'WHEAT', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(16, 'TRITICALE(hybrid grain created by crossing wheat and rye)', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(17, 'CARROT', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(18, 'AVOCADO', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(19, 'BELL PEPPER', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(20, 'CELERY', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(21, 'TRITICALE(HYBRID GRAIN FROM ', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(22, 'POTATO', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(23, 'PUMPIN', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(24, 'MUSHROOM', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(25, 'ONION', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(26, 'MUSTARD', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(27, 'SPICES', '2022-11-30 06:41:39', '2022-11-30 06:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `allergen_patient`
--

CREATE TABLE `allergen_patient` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `allergen_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diet_types`
--

CREATE TABLE `diet_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diet_types`
--

INSERT INTO `diet_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'INTERMITTENT FASTING', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(2, 'FODMAP DIET', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(3, 'VEGETARIAN', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(4, 'VEGAN', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(5, 'GLUTEN-FREE', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(6, 'OTHER TYPES', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(7, 'MULTIPLE SELECTION', '2022-11-30 06:41:39', '2022-11-30 06:41:39');

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
-- Table structure for table `input_calculations`
--

CREATE TABLE `input_calculations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `milk_s` double(8,2) NOT NULL,
  `milk_l` double(8,2) NOT NULL,
  `milk_f` double(8,2) NOT NULL,
  `vegetable` double(8,2) NOT NULL,
  `fruit` double(8,2) NOT NULL,
  `starch` double(8,2) NOT NULL,
  `proteins_l` double(8,2) NOT NULL,
  `proteins_m` double(8,2) NOT NULL,
  `proteins_h` double(8,2) NOT NULL,
  `fat` double(8,2) NOT NULL,
  `halfstlmfat_s` double(8,2) NOT NULL,
  `halfstlmfat_a` double(8,2) NOT NULL,
  `stlmfat_p` double(8,2) NOT NULL,
  `stlmfat_f` double(8,2) NOT NULL,
  `beverages` double(8,2) NOT NULL,
  `alcohol` double(8,2) NOT NULL,
  `cho` double(8,2) NOT NULL,
  `miscellaneous` double(8,2) NOT NULL,
  `supplements` double(8,2) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kcals`
--

CREATE TABLE `kcals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cho` double(8,2) NOT NULL,
  `prot` double(8,2) NOT NULL,
  `fat` double(8,2) NOT NULL,
  `kcal` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kcals`
--

INSERT INTO `kcals` (`id`, `type`, `cho`, `prot`, `fat`, `kcal`, `created_at`, `updated_at`) VALUES
(1, 'MILK Skimmed', 12.00, 8.00, 3.00, 107.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(2, 'MILK Low Fat', 12.00, 8.00, 5.00, 125.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(3, 'MILK Full Fat', 12.00, 8.00, 8.00, 152.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(4, 'VEGETABLE', 5.00, 2.00, 0.00, 28.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(5, 'FRUIT', 15.00, 0.00, 0.00, 60.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(6, 'STARCH', 15.00, 3.00, 1.00, 81.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(7, 'PROTEINS Lean Meat', 0.00, 7.00, 3.00, 55.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(8, 'PROTEINS Medium Fat', 0.00, 7.00, 5.00, 73.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(9, 'PROTEINS High Fat', 0.00, 7.00, 0.00, 91.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(10, 'FAT', 0.00, 0.00, 5.00, 45.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(11, 'HALFSTLMFAT Soup', 7.50, 5.00, 4.00, 86.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(12, 'HALFSTLMFAT Appetizer', 7.50, 5.00, 4.00, 86.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(13, 'STLMFAT Prepared Meals', 15.00, 10.00, 9.00, 181.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(14, 'STLMFAT Fast Food', 15.00, 10.00, 9.00, 181.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(15, 'BEVERAGES', 15.00, 0.00, 0.00, 60.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(16, 'ALCOHOL', 4.00, 0.00, 5.00, 61.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(17, 'CHO', 15.00, 0.00, 0.00, 60.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(18, 'MISCELLANEOUS', 3.00, 3.00, 4.00, 60.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(19, 'SUPPLEMENTS', 3.00, 3.00, 4.00, 60.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `macro_distributions`
--

CREATE TABLE `macro_distributions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_cho` double(8,2) NOT NULL DEFAULT 0.00,
  `ideal_cho` double(8,2) NOT NULL DEFAULT 0.00,
  `max_cho` double(8,2) NOT NULL DEFAULT 0.00,
  `min_protien` double(8,2) NOT NULL DEFAULT 0.00,
  `ideal_protien` double(8,2) NOT NULL DEFAULT 0.00,
  `max_protien` double(8,2) NOT NULL DEFAULT 0.00,
  `min_fat` double(8,2) NOT NULL DEFAULT 0.00,
  `ideal_fat` double(8,2) NOT NULL DEFAULT 0.00,
  `max_fat` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `macro_distributions`
--

INSERT INTO `macro_distributions` (`id`, `name`, `min_cho`, `ideal_cho`, `max_cho`, `min_protien`, `ideal_protien`, `max_protien`, `min_fat`, `ideal_fat`, `max_fat`, `created_at`, `updated_at`) VALUES
(1, 'GENERAL', 45.00, 40.00, 65.00, 10.00, 30.00, 35.00, 20.00, 30.00, 35.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(2, 'PREGNANCY', 45.00, 55.00, 65.00, 10.00, 22.50, 35.00, 20.00, 27.50, 35.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(3, 'FITNESS', 45.00, 55.00, 65.00, 10.00, 22.50, 35.00, 20.00, 27.50, 35.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(4, 'MUSCLE GAIN(WT GAIN THEN MACRO DISTRIBUTION)', 40.00, 50.00, 60.00, 25.00, 30.00, 35.00, 15.00, 20.00, 25.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(5, 'FAT LOSS(WT LOSS THEN MACRO DISTRIBUTION)', 30.00, 40.00, 45.00, 25.00, 30.00, 35.00, 25.00, 30.00, 35.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(6, 'KETO', 0.00, 5.00, 0.00, 0.00, 25.00, 0.00, 0.00, 70.00, 0.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(7, '1-Ectomorph', 0.00, 55.00, 0.00, 0.00, 25.00, 0.00, 0.00, 20.00, 0.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(8, '2-Mesomorph', 0.00, 40.00, 0.00, 0.00, 30.00, 0.00, 0.00, 30.00, 0.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(9, '3-Endomorph', 0.00, 25.00, 0.00, 0.00, 35.00, 0.00, 0.00, 40.00, 0.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(10, 'DIABETES/DYSLIPIDEMIC', 45.00, 50.00, 55.00, 15.00, 20.00, 25.00, 25.00, 30.00, 35.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(11, 'CKD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '2022-11-30 06:41:39', '2022-11-30 06:41:39');

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
(20, '2014_10_12_000000_create_roles_table', 1),
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2022_11_28_122245_create_activities_table', 1),
(26, '2022_11_28_122308_create_diet_types_table', 1),
(27, '2022_11_28_122508_create_kcals_table', 1),
(28, '2022_11_28_122553_create_macro_distributions_table', 1),
(29, '2022_11_28_122622_create_age_ranges_table', 1),
(30, '2022_11_28_122725_create_allergens_table', 1),
(31, '2022_11_28_122748_create_patients_table', 1),
(32, '2022_11_28_122832_create_patient_details_table', 1),
(33, '2022_11_28_123248_create_allergen_patient_table', 1),
(34, '2022_11_28_123310_create_input_calculations_table', 1),
(35, '2022_11_29_065516_create_schedules_table', 1);

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `birthday`, `phone`, `address`, `gender`, `created_at`, `updated_at`) VALUES
(1, 'Nayda', NULL, 'Ellison', 'qunagapog@mailinator.com', '1992-12-23', '1', 'Tempor veniam conse', 'Female', '2022-11-30 06:42:03', '2022-11-30 06:42:03'),
(2, 'Gary', 'Kiona Spence', 'Hart', 'busaka@mailinator.com', '2021-07-17', '57', 'Reprehenderit odit e', 'Female', '2022-11-30 07:09:53', '2022-11-30 07:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `height` double(8,2) NOT NULL,
  `weight` double(8,2) NOT NULL,
  `activity_value` double(8,2) NOT NULL,
  `bmr` double(8,2) NOT NULL,
  `tde` double(8,2) NOT NULL,
  `goal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_goal` double(8,2) NOT NULL,
  `ideal_goal` double(8,2) NOT NULL,
  `max_goal` double(8,2) NOT NULL,
  `macro_distribution_id` bigint(20) UNSIGNED NOT NULL,
  `diet_type_id` bigint(20) UNSIGNED NOT NULL,
  `age_range_id` int(11) DEFAULT NULL,
  `fasting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`id`, `height`, `weight`, `activity_value`, `bmr`, `tde`, `goal`, `start_goal`, `ideal_goal`, `max_goal`, `macro_distribution_id`, `diet_type_id`, `age_range_id`, `fasting`, `slug`, `patient_id`, `created_at`, `updated_at`) VALUES
(1, 73.00, 18.00, 1.10, 667.20, 733.92, 'maintenance', 733.92, 733.92, 733.92, 11, 4, NULL, NULL, 'nayda', 1, '2022-11-30 06:42:03', '2022-11-30 06:42:03'),
(2, 23.00, 64.00, 1.27, 1155.10, 1472.75, 'gain', 1546.39, 1620.03, 1693.66, 2, 4, NULL, NULL, 'gary', 2, '2022-11-30 07:09:53', '2022-11-30 07:09:53');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(2, 'Admin', '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(3, 'User', '2022-11-30 06:41:39', '2022-11-30 06:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` datetime NOT NULL,
  `finish_time` datetime NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `title`, `start_time`, `finish_time`, `color`, `description`, `slug`, `patient_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Consequat Consequun', '2022-11-30 07:19:00', '2022-11-30 13:10:00', '#e871de', 'Ipsum corrupti offi', 'consequat-consequun', 1, 2, '2022-11-30 06:42:23', '2022-11-30 06:42:23'),
(2, 'Nulla magni ut est', '2022-11-30 11:20:00', '2022-11-30 14:44:00', '#7b848b', 'Non sit nihil conse', 'nulla-magni-ut-est', 1, 2, '2022-11-30 07:10:27', '2022-11-30 07:11:09');

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
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'a@m.com', NULL, '$2y$10$s6.ruNQ0FI6V3QjSRsXPYevuuoYM4vrO9aqigDQ7Grz6TSb1nbs/G', 1, NULL, '2022-11-30 06:41:39', '2022-11-30 06:41:39'),
(2, 'Mazhar', 'm@m.com', NULL, '$2y$10$MtXI.kFmI5x1TAarqeS48.n8NLq19/nHkzjmlhSViy1YAmwlYRcym', 1, NULL, '2022-11-30 06:41:39', '2022-11-30 06:41:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `age_ranges`
--
ALTER TABLE `age_ranges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `age_ranges_diet_type_id_foreign` (`diet_type_id`);

--
-- Indexes for table `allergens`
--
ALTER TABLE `allergens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allergen_patient`
--
ALTER TABLE `allergen_patient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `allergen_patient_allergen_id_foreign` (`allergen_id`),
  ADD KEY `allergen_patient_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `diet_types`
--
ALTER TABLE `diet_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `input_calculations`
--
ALTER TABLE `input_calculations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `input_calculations_slug_unique` (`slug`),
  ADD KEY `input_calculations_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `kcals`
--
ALTER TABLE `kcals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `macro_distributions`
--
ALTER TABLE `macro_distributions`
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
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patients_email_unique` (`email`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patient_details_slug_unique` (`slug`),
  ADD KEY `patient_details_macro_distribution_id_foreign` (`macro_distribution_id`),
  ADD KEY `patient_details_diet_type_id_foreign` (`diet_type_id`),
  ADD KEY `patient_details_patient_id_foreign` (`patient_id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `schedules_slug_unique` (`slug`),
  ADD KEY `schedules_patient_id_foreign` (`patient_id`),
  ADD KEY `schedules_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `age_ranges`
--
ALTER TABLE `age_ranges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `allergens`
--
ALTER TABLE `allergens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `allergen_patient`
--
ALTER TABLE `allergen_patient`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diet_types`
--
ALTER TABLE `diet_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `input_calculations`
--
ALTER TABLE `input_calculations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kcals`
--
ALTER TABLE `kcals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `macro_distributions`
--
ALTER TABLE `macro_distributions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `age_ranges`
--
ALTER TABLE `age_ranges`
  ADD CONSTRAINT `age_ranges_diet_type_id_foreign` FOREIGN KEY (`diet_type_id`) REFERENCES `diet_types` (`id`);

--
-- Constraints for table `allergen_patient`
--
ALTER TABLE `allergen_patient`
  ADD CONSTRAINT `allergen_patient_allergen_id_foreign` FOREIGN KEY (`allergen_id`) REFERENCES `allergens` (`id`),
  ADD CONSTRAINT `allergen_patient_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `input_calculations`
--
ALTER TABLE `input_calculations`
  ADD CONSTRAINT `input_calculations_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD CONSTRAINT `patient_details_diet_type_id_foreign` FOREIGN KEY (`diet_type_id`) REFERENCES `diet_types` (`id`),
  ADD CONSTRAINT `patient_details_macro_distribution_id_foreign` FOREIGN KEY (`macro_distribution_id`) REFERENCES `macro_distributions` (`id`),
  ADD CONSTRAINT `patient_details_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `schedules_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
