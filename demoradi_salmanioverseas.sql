-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2023 at 12:33 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demoradi_srsoverseas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$163vkGFvNIHRMofvqOAzSupCREHiI2qBH6LuJS0zbgOXhwC1v2SCi', NULL, '2020-09-16 03:15:20', '2020-09-16 03:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `page_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `number`, `email`, `job_id`, `message`, `file`, `created_at`, `updated_at`, `last_name`) VALUES
(40, 'bagamati', NULL, 'nabin.01least@gmail.com', NULL, 'sadfas', NULL, '2022-12-13 18:18:07', '2022-12-13 18:18:07', NULL),
(41, 'nabin', NULL, 'nabin.01least@gmail.com', NULL, 'abc', NULL, '2022-12-13 18:22:02', '2022-12-13 18:22:02', NULL),
(44, 'nabin', '+97714441337', 'nabin.01least@gmail.com', NULL, 'gfdg', NULL, '2022-12-14 11:42:31', '2022-12-14 11:42:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `global_settings`
--

CREATE TABLE `global_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_nepali_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_ne` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_full_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ne` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_description` text COLLATE utf8mb4_unicode_ci,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_logo_nepali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `global_settings`
--

INSERT INTO `global_settings` (`id`, `site_name`, `site_nepali_name`, `site_email`, `phone`, `phone_ne`, `website_full_address`, `address_ne`, `facebook`, `twitter`, `linkedin`, `other`, `page_title`, `page_keyword`, `page_description`, `favicon`, `site_logo`, `site_logo_nepali`, `site_status`, `extra_one`, `extra_two`, `created_at`, `updated_at`) VALUES
(1, 'SRS OVERSEAS SERVICES PRIVATE LIMITED', 'SRS OVERSEAS PRIVATE LIMITED', 'srs17overseasnepal@gmail.com', '+977-1-44371675', '4371664', 'Sukedhara, Kathmandu, Nepal', NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', NULL, 'SRS OVERSEAS PRIVATE LIMITED', 'SRS OVERSEAS PRIVATE LIMITED', 'G.P.O. BOX: 8975, EPC 5626', '1670758735_logo.png', '1670758756_logo.png', '1670758735_logo.jpeg', '1', '', '', '2020-09-16 03:15:20', '2022-12-18 16:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(100) NOT NULL,
  `company_name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract_time` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navigation_id` bigint(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posted_on` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foodaccommondation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_demand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_hour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visa_ticket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_charge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lt_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_name`, `salary`, `country`, `contract_time`, `navigation_id`, `created_at`, `updated_at`, `deadline`, `posted_on`, `foodaccommondation`, `total_demand`, `working_day`, `working_hour`, `visa_ticket`, `service_charge`, `lt_number`, `interview`) VALUES
(51, 'Hotel Habibi', '60000 to 70000', 'Nepal', '5', 2490, '2022-12-13 10:32:52', '2022-12-13 10:32:52', '7 days left', '24 Nov, 2022', 'Provide', '55', '6 day per week', '8 Hour per day', 'Provide', '100000', '15424', 'Kathmandu Chaitra 16, 17 and 18 (29, 30 and 31 March 2021)'),
(53, 'USA Drive', '60000 to 70000', 'USA', '2', 2504, '2022-12-17 17:04:36', '2022-12-17 17:04:36', '7 days left', '24 Nov, 2022', 'Provide', '55', '6 day per week', '8 Hour per day', 'Provide', '100000', '15424', 'Kathmandu Chaitra 16, 17 and 18 (29, 30 and 31 March 2021)'),
(54, 'Hotel Heb', '60000 to 70000', 'UAE', '3', 2505, '2022-12-17 17:36:42', '2022-12-17 17:36:42', '7 days left', '24 Nov, 2022', 'Provide', '55', '6 day per week', '8 Hour per day', 'Provide', '100000', '15424', 'Kathmandu Chaitra 16, 17 and 18 (29, 30 and 31 March 2021)');

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
(3, '2020_08_06_040112_create_admins_table', 1),
(4, '2020_08_06_040148_create_navigations_table', 1),
(5, '2020_08_06_040229_create_navigation_items_table', 1),
(6, '2020_08_06_040251_create_page_types', 1),
(7, '2020_08_06_040325_create_subscribers_table', 1),
(8, '2020_08_06_040351_create_global_settings_table', 1),
(9, '2020_08_06_040430_create_navigation_video_items_table', 1),
(10, '2020_08_06_040522_create_comments_table', 1),
(11, '2022_07_12_231308_create_jobs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `navigations`
--

CREATE TABLE `navigations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nav_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption_nepali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_template` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  `short_content` text COLLATE utf8mb4_unicode_ci,
  `short_content_nepali` text COLLATE utf8mb4_unicode_ci,
  `long_content` text COLLATE utf8mb4_unicode_ci,
  `long_content_nepali` text COLLATE utf8mb4_unicode_ci,
  `parent_page_id` int(11) NOT NULL,
  `icon_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_image_caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nav_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `span` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigations`
--

INSERT INTO `navigations` (`id`, `nav_name`, `alias`, `caption`, `caption_nepali`, `nav_category`, `page_type`, `page_template`, `position`, `short_content`, `short_content_nepali`, `long_content`, `long_content_nepali`, `parent_page_id`, `icon_image`, `featured_image`, `icon_image_caption`, `banner_image`, `link`, `main_attachment`, `attachment`, `page_title`, `page_keyword`, `page_description`, `page_status`, `nav_status`, `extra_one`, `extra_two`, `extra_three`, `created_at`, `updated_at`, `span`) VALUES
(2254, 'about', 'about', 'about', NULL, 'Home', 'Group', NULL, 1, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'about', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 16:11:46', '2022-09-12 20:18:54', NULL),
(2255, 'About Us', 'about-us', 'SRS OVERSEAS PRIVATE LIMITED', '.', 'Home', 'Normal', NULL, 1, 'SRS Overseas Private Limited is a top manpower and recruitment agency in Nepal, duly licensed by the Department Of Foreign Employment (DOFE), Government of Nepal. It is engaged in the placement of highly qualified and trained skilled and unskilled workers overseas.', '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;', 'SRS has deployed since 2002 more than 10,000 workers all over the world primarily focussing on the Middle East. These workers and their employers will attest to our dependability, honesty and commitment towards delivering the professional output.', NULL, 2254, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'About Us', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 16:12:09', '2022-12-15 23:37:17', '(21)'),
(2265, 'gal1', 'gal1', 'picnic pic', '.', 'Main', 'Photo Gallery', NULL, 1, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658326379_download (1).jfif', NULL, NULL, NULL, NULL, 'gal1', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 16:58:42', '2022-07-21 00:57:59', NULL),
(2288, 'gallary1', 'gallary1', 'Gallary1', '.', 'Main', 'Photo Gallery', NULL, 2, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658326408_download (5).jfif', NULL, NULL, NULL, NULL, 'gallary1', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 19:41:18', '2022-07-21 00:58:28', NULL),
(2289, 'gallary2', 'gallary2', 'Gallary2', '.', 'Main', 'Photo Gallery', NULL, 3, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658326422_download (6).jfif', NULL, NULL, NULL, NULL, 'gallary2', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 19:42:28', '2022-07-21 00:58:42', NULL),
(2290, 'gallary4', 'gallary4', 'Gallary4', '.', 'Main', 'Photo Gallery', NULL, 4, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658326448_images (2).jfif', NULL, NULL, NULL, NULL, 'gallary4', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 19:43:57', '2022-07-21 00:59:08', NULL),
(2291, 'gallary5', 'gallary5', 'Gallary5', '.', 'Main', 'Photo Gallery', NULL, 5, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658326467_wallpapersden.com_north-america-usa-florida_1280x720.jpg', NULL, NULL, NULL, NULL, 'gallary5', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 19:44:19', '2022-07-21 00:59:27', NULL),
(2292, 'gallary6', 'gallary6', 'Gallary6', '.', 'Main', 'Photo Gallery', NULL, 6, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658326491_wallpapersden.com_dubai-uae-top-view_1280x720.jpg', NULL, NULL, NULL, NULL, 'gallary6', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 19:45:32', '2022-07-21 00:59:51', NULL),
(2293, 'gallary7', 'gallary7', 'Gallary7', '.', 'Main', 'Photo Gallery', NULL, 7, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658326514_images.jfif', NULL, NULL, NULL, NULL, 'gallary7', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 19:46:16', '2022-07-21 01:00:14', NULL),
(2294, 'gallary8', 'gallary8', 'Gallary7', '.', 'Main', 'Photo Gallery', NULL, 8, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658326532_wallpapersden.com_australia_1280x720.jpg', NULL, NULL, NULL, NULL, 'gallary8', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 19:47:01', '2022-07-21 01:00:32', NULL),
(2295, 'slider', 'slider', 'slider', NULL, 'Home', 'Group', NULL, 6, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 19:58:10', '2022-09-12 20:18:56', NULL),
(2332, 'notice1', 'notice1', 'Misson', NULL, 'Main', 'Notice', NULL, 1, 'Vision & Values', NULL, 'Our Vision is to lead in the creation and delivery of innovative workforce solutions and services that enable our clients to win in the changing world of work', NULL, 2317, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'notice1', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 04:01:21', '2022-07-22 17:12:00', NULL),
(2340, 'People', 'people', 'People', NULL, 'Main', 'Notice', NULL, 2, 'People', NULL, 'We care about people and the role of work in their lives. We respect people as individuals, trusting them, supporting them, enabling them to achieve their aims in work and in life.\r\n\r\nWe help people develop their careers through planning, work, coaching and training.\r\n\r\nWe recognize everyone’s contribution to our success - our staff, our clients and our candidates. We encourage and reward achievement.', NULL, 2317, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'People', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 15:39:15', '2022-07-22 15:39:15', NULL),
(2341, 'Knowledge', 'knowledge', 'Knowledge', NULL, 'Main', 'Notice', NULL, 3, 'Knowledge', NULL, 'We share our knowledge, our expertise and our resources, so that everyone understands what is important now and what’s happening next in the world of work - and knows how best to respond.\r\n\r\nWe actively listen and act upon this information to improve our relationships, solutions and services.', NULL, 2317, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Knowledge', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 15:40:55', '2022-07-22 15:40:55', NULL),
(2342, 'Innovation', 'innovation', 'Innovation', NULL, 'Main', 'Notice', NULL, 4, 'Innovation', NULL, 'Based on our understanding of the world of work, we actively pursue the development and adoption of the best practices worldwide. We lead in the world of work. We dare to innovate, to pioneer and to evolve.\r\n\r\nWe never accept the status quo. We constantly challenge the norm to find new and better ways of doing things.\r\n\r\nWe thrive on our entrepreneurial spirit and speed of response; taking risks, knowing that we will not always succeed, but never exposing our clients to risk.', NULL, 2317, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Innovation', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 15:41:41', '2022-07-22 15:41:41', NULL),
(2343, 'Certificates1', 'certificates1', 'Membership Certificates', NULL, 'Main', 'Photo Gallery', NULL, 1, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468241_16 (1).jpg', NULL, NULL, NULL, NULL, 'Certificates1', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:00:13', '2022-07-22 16:22:21', NULL),
(2344, 'Certificates2', 'certificates2', 'Appreciation Letter', NULL, 'Main', 'Photo Gallery', NULL, 2, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468272_17.jpg', NULL, NULL, NULL, NULL, 'Certificates2', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:02:27', '2022-07-22 16:22:52', NULL),
(2345, 'Certificates3', 'certificates3', 'Entry Card', NULL, 'Main', 'Photo Gallery', NULL, 3, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468287_18.jpg', NULL, NULL, NULL, NULL, 'Certificates3', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:03:45', '2022-07-22 16:23:07', NULL),
(2346, 'Certificates4', 'certificates4', 'Shram Tatha Rojgar Bibhag Letter', NULL, 'Main', 'Photo Gallery', NULL, 4, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468302_19.jpg', NULL, NULL, NULL, NULL, 'Certificates4', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:05:52', '2022-07-22 16:23:22', NULL),
(2347, 'Certificates5', 'certificates5', 'Company Registration Paper', NULL, 'Main', 'Photo Gallery', NULL, 5, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468325_20.jpg', NULL, NULL, NULL, NULL, 'Certificates5', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:07:19', '2022-07-22 16:23:45', NULL),
(2348, 'Certificates6', 'certificates6', 'PAN', NULL, 'Main', 'Photo Gallery', NULL, 6, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468367_21 (1).jpg', NULL, NULL, NULL, NULL, 'Certificates6', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:08:22', '2022-07-22 16:24:27', NULL),
(2349, 'Certificates7', 'certificates7', 'Baideshik Rojgar Sewa Sulka Ijazat Patra', NULL, 'Main', 'Photo Gallery', NULL, 7, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468393_22.jpg', NULL, NULL, NULL, NULL, 'Certificates7', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:11:17', '2022-07-22 16:24:53', NULL),
(2350, 'Certificates9', 'certificates9', 'Letter of Appreciation', NULL, 'Main', 'Photo Gallery', NULL, 8, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468410_fodefeen1.jpg', NULL, NULL, NULL, NULL, 'Certificates9', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:17:20', '2022-07-22 16:25:10', NULL),
(2351, 'Certificates10', 'certificates10', 'Certificate of Registration', NULL, 'Main', 'Photo Gallery', NULL, 9, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468002_iso-certificate.jpg', NULL, NULL, NULL, NULL, 'Certificates10', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:18:22', '2022-07-22 16:25:18', NULL),
(2352, 'Photo1', 'photo1', 'Photo', NULL, 'Main', 'Photo Gallery', NULL, 1, NULL, NULL, NULL, NULL, 2323, NULL, NULL, NULL, '/uploads/banner_image/1658468652_09.jpg', NULL, NULL, NULL, NULL, 'Photo1', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:29:12', '2022-07-22 16:29:12', NULL),
(2353, 'Photo2', 'photo2', 'Photo', NULL, 'Main', 'Photo Gallery', NULL, 2, NULL, NULL, NULL, NULL, 2323, NULL, NULL, NULL, '/uploads/banner_image/1658468756_07.jpg', NULL, NULL, NULL, NULL, 'Photo2', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:29:28', '2022-07-22 16:30:56', NULL),
(2354, 'Photo3', 'photo3', 'Photo', NULL, 'Main', 'Photo Gallery', NULL, 3, NULL, NULL, NULL, NULL, 2323, NULL, NULL, NULL, '/uploads/banner_image/1658468744_08.jpg', NULL, NULL, NULL, NULL, 'Photo3', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:30:02', '2022-07-24 15:50:31', NULL),
(2355, 'Photo4', 'photo4', 'Photo', NULL, 'Main', 'Photo Gallery', NULL, 4, NULL, NULL, NULL, NULL, 2323, NULL, NULL, NULL, '/uploads/banner_image/1658468855_05.jpg', NULL, NULL, NULL, NULL, 'Photo4', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:32:35', '2022-07-22 16:32:35', NULL),
(2356, 'Photo5', 'photo5', 'Photo', NULL, 'Main', 'Photo Gallery', NULL, 5, NULL, NULL, NULL, NULL, 2323, NULL, NULL, NULL, '/uploads/banner_image/1658468878_06.jpg', NULL, NULL, NULL, NULL, 'Photo5', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:32:58', '2022-07-22 16:32:58', NULL),
(2357, 'Photo6', 'photo6', 'Photo', NULL, 'Main', 'Photo Gallery', NULL, 6, NULL, NULL, NULL, NULL, 2323, NULL, NULL, NULL, '/uploads/banner_image/1658468910_04.jpg', NULL, NULL, NULL, NULL, 'Photo6', NULL, '0', '0', NULL, NULL, NULL, '2022-07-22 16:33:30', '2022-07-24 15:54:35', NULL),
(2358, 'Photo7', 'photo7', 'Photo', NULL, 'Main', 'Photo Gallery', NULL, 7, NULL, NULL, NULL, NULL, 2323, NULL, NULL, NULL, '/uploads/banner_image/1658468939_03.jpg', NULL, NULL, NULL, NULL, 'Photo7', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:33:59', '2022-07-24 15:52:13', NULL),
(2359, 'Photo8', 'photo8', 'Photo', NULL, 'Main', 'Photo Gallery', NULL, 8, NULL, NULL, NULL, NULL, 2323, NULL, NULL, NULL, '/uploads/banner_image/1658468966_02.jpg', NULL, NULL, NULL, NULL, 'Photo8', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:34:26', '2022-07-24 15:52:13', NULL),
(2361, 'gly', '-gly', 'gly1', NULL, 'Main', 'Photo Gallery', NULL, 9, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658480717_org.jpg', NULL, NULL, NULL, NULL, 'gly', NULL, '0', '0', NULL, NULL, NULL, '2022-07-22 19:50:17', '2022-07-22 20:05:44', NULL),
(2389, 'slider-one', 'sliderone', 'The Leading Exports in HR International Hiring', NULL, 'Home', 'Normal', NULL, 1, NULL, NULL, NULL, NULL, 2295, NULL, NULL, NULL, '/uploads/banner_image/1670762855_slide-1.jpg', NULL, NULL, NULL, NULL, 'slider-one', NULL, '1', '0', NULL, NULL, NULL, '2022-09-03 13:24:29', '2022-12-16 20:16:48', NULL),
(2390, 'slider-two', 'slidertwo', 'The Leading Exports in HR International Hiring', NULL, 'Home', 'Normal', NULL, 2, NULL, NULL, NULL, NULL, 2295, NULL, NULL, NULL, '/uploads/banner_image/1670762842_slide-3.jpg', NULL, NULL, NULL, NULL, 'slider-two', NULL, '1', '0', NULL, NULL, NULL, '2022-09-03 13:28:09', '2022-12-16 20:16:54', NULL),
(2391, 'slider-three', 'sliderthree', 'The Leading Exports in HR International Hiring', NULL, 'Home', 'Normal', NULL, 3, NULL, NULL, NULL, NULL, 2295, NULL, NULL, NULL, '/uploads/banner_image/1670762828_slide-2.jpg', NULL, NULL, NULL, NULL, 'slider-three', NULL, '1', '0', NULL, NULL, NULL, '2022-09-03 13:29:24', '2022-12-16 20:17:00', NULL),
(2392, 'slider-four', 'sliderfour', 'The Leading Exports in HR International Hiring', NULL, 'Home', 'Normal', NULL, 4, NULL, NULL, NULL, NULL, 2295, NULL, NULL, NULL, '/uploads/banner_image/1670762816_slide-1.jpg', NULL, NULL, NULL, NULL, 'slider-four', NULL, '1', '0', NULL, NULL, NULL, '2022-09-03 13:33:21', '2022-12-16 20:17:06', NULL),
(2393, 'partner', 'partner', 'partner', NULL, 'Home', 'Group', NULL, 12, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'partner', NULL, '1', '0', NULL, NULL, NULL, '2022-09-03 13:53:26', '2022-09-14 17:08:22', NULL),
(2394, 'partners-one', 'partnersone', 'partner', NULL, 'Home', 'Normal', NULL, 1, NULL, NULL, NULL, NULL, 2393, NULL, NULL, NULL, '/uploads/banner_image/1670761748_client.png', NULL, NULL, NULL, NULL, 'partners-one', NULL, '1', '0', NULL, NULL, NULL, '2022-09-03 13:54:19', '2022-12-11 12:29:08', NULL),
(2395, 'partners-two', 'partnerstwo', 'partner', NULL, 'Home', 'Normal', NULL, 2, NULL, NULL, NULL, NULL, 2393, NULL, NULL, NULL, '/uploads/banner_image/1670761761_client-1.png', NULL, NULL, NULL, NULL, 'partners-two', NULL, '1', '0', NULL, NULL, NULL, '2022-09-03 13:55:28', '2022-12-11 12:29:21', NULL),
(2396, 'partners-three', 'partnersthree', 'partner', NULL, 'Home', 'Normal', NULL, 3, NULL, NULL, NULL, NULL, 2393, NULL, NULL, NULL, '/uploads/banner_image/1670761781_client-2.png', NULL, NULL, NULL, NULL, 'partners-three', NULL, '1', '0', NULL, NULL, NULL, '2022-09-03 14:01:17', '2022-12-11 12:29:41', NULL),
(2397, 'partners-four', 'partnersfour', 'partner', NULL, 'Home', 'Normal', NULL, 4, NULL, NULL, NULL, NULL, 2393, NULL, NULL, NULL, '/uploads/banner_image/1670761796_client-3.png', NULL, NULL, NULL, NULL, 'partners-four', NULL, '1', '0', NULL, NULL, NULL, '2022-09-03 14:05:45', '2022-12-11 12:29:56', NULL),
(2398, 'partners-five', 'partnersfive', 'partner', NULL, 'Home', 'Normal', NULL, 5, NULL, NULL, NULL, NULL, 2393, NULL, NULL, NULL, '/uploads/banner_image/1662214019_719.gif', NULL, NULL, NULL, NULL, 'partners-five', NULL, '1', '0', NULL, NULL, NULL, '2022-09-03 14:06:59', '2022-09-03 14:06:59', NULL),
(2399, 'partners-six', 'partnerssix', 'partner', NULL, 'Home', 'Normal', NULL, 6, NULL, NULL, NULL, NULL, 2393, NULL, NULL, NULL, '/uploads/banner_image/1670761820_client-4.png', NULL, NULL, NULL, NULL, 'partners-six', NULL, '1', '0', NULL, NULL, NULL, '2022-09-03 14:07:33', '2022-12-11 12:30:20', NULL),
(2413, 'home', 'home', 'Home', NULL, 'Main', 'Group', NULL, 1, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'home', NULL, '1', '0', NULL, NULL, NULL, '2022-09-05 18:24:43', '2022-09-05 21:05:57', NULL),
(2414, 'aboutus', 'aboutus', 'About Us', NULL, 'Main', 'Group', NULL, 2, NULL, NULL, '<p>&nbsp;</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<ul>\r\n</ul>', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aboutus', NULL, '1', '0', NULL, NULL, NULL, '2022-09-05 18:26:10', '2022-12-15 23:40:27', '(21)'),
(2415, 'job', 'job', 'Job', NULL, 'Main', 'Group', NULL, 5, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'job', NULL, '1', '0', NULL, NULL, NULL, '2022-09-05 18:26:45', '2023-01-27 17:14:52', NULL),
(2418, 'gallery', 'gallery', 'Gallery', NULL, 'Main', 'Group', NULL, 6, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '/uploads/banner_image/1670945380_Economy-1.jpg', NULL, NULL, NULL, NULL, 'gallery', NULL, '1', '0', NULL, NULL, NULL, '2022-09-05 18:30:40', '2023-01-27 17:14:40', NULL),
(2443, 'photo-gallery', 'photogallery', 'Photo Gallery', NULL, 'Main', 'Group', NULL, 1, NULL, NULL, NULL, NULL, 2418, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'photo-gallery', NULL, '1', '0', NULL, NULL, NULL, '2022-09-11 22:17:33', '2022-09-13 20:55:17', '(21)'),
(2444, 'video-gallery', 'videogallery', 'Video Gallery', NULL, 'Main', 'Video Gallery', NULL, 2, NULL, NULL, NULL, NULL, 2418, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'video-gallery', NULL, '1', '0', NULL, NULL, NULL, '2022-09-11 22:18:45', '2022-12-16 19:30:30', '(21)'),
(2445, 'video-one', 'videoone', 'Video Gallery', NULL, 'Main', 'Video Gallery', NULL, 1, NULL, NULL, NULL, NULL, 2444, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'video-one', NULL, '1', '0', NULL, NULL, NULL, '2022-09-11 22:19:19', '2022-09-11 22:19:19', '(21)'),
(2446, 'photo', 'photo', 'Our Meeting', NULL, 'Main', 'Photo Gallery', NULL, 1, NULL, NULL, NULL, NULL, 2443, NULL, NULL, NULL, '/uploads/banner_image/1670945414_Economy-1.jpg', NULL, NULL, NULL, NULL, 'photo', NULL, '1', '0', NULL, NULL, NULL, '2022-09-11 22:20:26', '2022-12-13 15:30:14', '(21)'),
(2461, 'about-one', 'aboutone', 'About Company', NULL, 'Main', 'Normal', NULL, 0, '<p>SRS OVERSEAS PRIVATE LIMITED</p>', NULL, '<p>SRS Overseas Private Limited is a top manpower and recruitment agency in Nepal, duly licensed by the Department Of Foreign Employment (DOFE), Government of Nepal. It is engaged in the placement of highly qualified and trained skilled and unskilled workers overseas.</p>\r\n\r\n<p>SRS has deployed since 2002 more than 10,000 workers all over the world primarily focussing on the Middle East. These workers and their employers will attest to our dependability, honesty and commitment towards delivering the professional output.</p>\r\n\r\n<p>SRS business is to connect companies with top employee prospects in a wide range of markets, sectors and geographic locations. We actively search for the best candidates and take attitude, personality, aptitude and flexibility to learn and adopt into special consideration. By knowing our markets, we are able to handle all the changes, trends and challenges that come before us. Our only motto is to provide appropriate manpower as per the demand of our clients for the mutual benefit for both the clients and candidates.</p>\r\n\r\n<p>SRS takes pride in the fact that we maintain a professional work team made up of competent professionals who are always willing to give the best services that they can provide. Consistency, quality and reliability characterize our operation.</p>\r\n\r\n<p>SRS Overseas Private Limited has provided manpower to almost all sectors from hospitality to construction, security to sales and marketing. Engineering to unskilled labor as per the need of our valued clients.</p>\r\n\r\n<p>SRS look forward to working with you and developing the bond for future endeavors.</p>', NULL, 2414, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'about-one', NULL, '1', '0', NULL, NULL, NULL, '2022-09-14 22:13:18', '2022-12-18 17:32:57', NULL),
(2466, 'partner-six', 'partnersix', 'partner', NULL, 'Home', 'Normal', NULL, 7, NULL, NULL, NULL, NULL, 2393, NULL, NULL, NULL, '/uploads/banner_image/1670761946_client.png', NULL, NULL, NULL, NULL, 'partner-six', NULL, '1', '0', NULL, NULL, NULL, '2022-12-11 12:32:26', '2022-12-11 12:32:26', NULL),
(2467, 'partner-seven', 'partnerseven', 'partner', NULL, 'Home', 'Normal', NULL, 8, NULL, NULL, NULL, NULL, 2393, NULL, NULL, NULL, '/uploads/banner_image/1670761973_client-1.png', NULL, NULL, NULL, NULL, 'partner-seven', NULL, '1', '0', NULL, NULL, NULL, '2022-12-11 12:32:53', '2022-12-11 12:32:53', NULL),
(2468, 'partner-eight', 'partnereight', 'partner', NULL, 'Home', 'Normal', NULL, 9, NULL, NULL, NULL, NULL, 2393, NULL, NULL, NULL, '/uploads/banner_image/1670762001_client-2.png', NULL, NULL, NULL, NULL, 'partner-eight', NULL, '1', '0', NULL, NULL, NULL, '2022-12-11 12:33:21', '2022-12-11 12:33:21', NULL),
(2469, 'partner-nine', 'partnernine', 'partner', NULL, 'Home', 'Normal', NULL, 10, NULL, NULL, NULL, NULL, 2393, NULL, NULL, NULL, '/uploads/banner_image/1670762055_client-3.png', NULL, NULL, NULL, NULL, 'partner-nine', NULL, '1', '0', NULL, NULL, NULL, '2022-12-11 12:34:15', '2022-12-11 12:34:15', NULL),
(2470, 'partner-ten', 'partnerten', 'partner', NULL, 'Home', 'Normal', NULL, 11, NULL, NULL, NULL, NULL, 2393, NULL, NULL, NULL, '/uploads/banner_image/1670762090_client-5.png', NULL, NULL, NULL, NULL, 'partner-ten', NULL, '1', '0', NULL, NULL, NULL, '2022-12-11 12:34:50', '2022-12-11 12:34:50', NULL),
(2472, 'message', 'message', 'Message from the Chairperson', NULL, 'Home', 'Group', NULL, 13, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '/uploads/banner_image/1670837002_chairperson.jpg', NULL, NULL, NULL, NULL, 'message', NULL, '1', '0', NULL, NULL, NULL, '2022-12-12 09:23:22', '2022-12-12 10:17:28', NULL),
(2473, 'message-1', 'message1', 'Message From Chairman', NULL, 'Home', 'Normal', NULL, 1, 'As the chairperson of SRS Overseas Services Pvt. Ltd. and being in this position. I realize it took so many years of hard work and dedicated leadership to steer my company into this position .It is a unique opportunity to meet the HR challenges of multi-diverse industries around this region, since the company\'s inception, we continued to be the leader and role model in providing quality manpower service to the UAE market...', NULL, 'Mrs. Subhadra Devi Baral (Mishra)', NULL, 2472, NULL, NULL, NULL, '/uploads/banner_image/1670840278_chairperson.jpg', NULL, NULL, NULL, NULL, 'message-1', NULL, '1', '0', NULL, NULL, NULL, '2022-12-12 10:17:58', '2022-12-13 17:54:30', NULL),
(2483, 'food', 'food', 'Food Industries', NULL, 'Main', 'Group Jobs', NULL, 1, NULL, NULL, NULL, NULL, 2415, NULL, NULL, NULL, '/uploads/banner_image/1670915618_job-cat-2.jpg', NULL, NULL, NULL, NULL, 'food', NULL, '1', '0', NULL, NULL, NULL, '2022-12-13 07:13:38', '2022-12-13 08:25:08', NULL),
(2490, 'security-one-one', 'securityoneone', 'Security Guard', NULL, 'Main', 'Job', NULL, 3, 'Reputed Company in UAE is looking for candidates from Nepal. Interested Worker are requested to apply as soon as possible.', NULL, '<p>They can directly contact the manpower , details are under how to apply section.</p>\r\n\r\n<p>Please verify the LT Number from the Official website of Department of Foreign Employment.</p>', NULL, 2483, NULL, NULL, NULL, '/uploads/banner_image/1670927572_news-paper.png', NULL, NULL, NULL, NULL, 'security-one-one', NULL, '1', '0', NULL, NULL, NULL, '2022-12-13 10:32:52', '2022-12-13 10:32:52', NULL),
(2498, 'hospitality-industries', 'hospitalityindustries', 'Hospitality Industries', NULL, 'Main', 'Group Jobs', NULL, 2, NULL, NULL, NULL, NULL, 2415, NULL, NULL, NULL, '/uploads/banner_image/1671253595_job-cat-3.jpg', NULL, NULL, NULL, NULL, 'hospitality-industries', NULL, '1', '0', NULL, NULL, NULL, '2022-12-17 16:51:35', '2022-12-17 16:51:35', NULL),
(2499, 'taxi-companies', 'taxicompanies', 'Taxi Companies', NULL, 'Main', 'Group Jobs', NULL, 3, NULL, NULL, NULL, NULL, 2415, NULL, NULL, NULL, '/uploads/banner_image/1671253649_job-cat-6.jpg', NULL, NULL, NULL, NULL, 'taxi-companies', NULL, '1', '0', NULL, NULL, NULL, '2022-12-17 16:52:29', '2022-12-17 16:52:29', NULL),
(2500, 'civil-construction', 'civilconstruction', 'Civil Construction', NULL, 'Main', 'Group Jobs', NULL, 4, NULL, NULL, NULL, NULL, 2415, NULL, NULL, NULL, '/uploads/banner_image/1671253853_job-cat-5.jpg', NULL, NULL, NULL, NULL, 'civil-construction', NULL, '1', '0', NULL, NULL, NULL, '2022-12-17 16:55:53', '2022-12-17 16:55:53', NULL),
(2501, 'aviation-airport', 'aviationairport', 'Aviation & Airport', NULL, 'Main', 'Group Jobs', NULL, 5, NULL, NULL, NULL, NULL, 2415, NULL, NULL, NULL, '/uploads/banner_image/1671253938_job-cat-4.jpg', NULL, NULL, NULL, NULL, 'aviation-airport', NULL, '1', '0', NULL, NULL, NULL, '2022-12-17 16:57:18', '2022-12-17 16:57:18', NULL),
(2502, 'security-service', 'securityservice', 'Security Services', NULL, 'Main', 'Group Jobs', NULL, 6, NULL, NULL, NULL, NULL, 2415, NULL, NULL, NULL, '/uploads/banner_image/1671254052_job-cat-1.jpg', NULL, NULL, NULL, NULL, 'security-service', NULL, '1', '0', NULL, NULL, NULL, '2022-12-17 16:59:12', '2022-12-17 16:59:12', NULL),
(2503, 'manufacture-company', 'manufacturecompany', 'Professional', NULL, 'Main', 'Group Jobs', NULL, 7, NULL, NULL, NULL, NULL, 2415, NULL, NULL, NULL, '/uploads/banner_image/1671340644_Gerab-WH-2017115_600-540x365.jpg', NULL, NULL, NULL, NULL, 'manufacture-company', NULL, '1', '0', NULL, NULL, NULL, '2022-12-17 17:00:09', '2022-12-18 17:02:24', NULL),
(2504, 'taxi-driver', 'taxidriver', 'Taxi Driver', NULL, 'Main', 'Job', NULL, 1, NULL, NULL, NULL, NULL, 2499, NULL, NULL, NULL, '/uploads/banner_image/1671254376_news-paper.png', NULL, NULL, NULL, NULL, 'taxi-driver', NULL, '1', '0', NULL, NULL, NULL, '2022-12-17 17:04:36', '2022-12-17 17:04:36', NULL),
(2505, 'cook-one', 'cookone', 'Cook', NULL, 'Main', 'Job', NULL, 1, NULL, NULL, NULL, NULL, 2498, NULL, NULL, NULL, '/uploads/banner_image/1671256302_news-paper.png', NULL, NULL, NULL, NULL, 'cook-one', NULL, '1', '0', NULL, NULL, NULL, '2022-12-17 17:36:42', '2022-12-17 17:36:42', NULL),
(2508, 'about-nepal', 'aboutnepal', 'About Nepal', NULL, 'Main', 'Normal', NULL, 1, 'ABOUT NEPAL', NULL, '<br />\r\nNepal is situated at the foothills of the Himalayas, where the great Mountains like Mt. Everest, the highest mountain of the world lies. Our neighboring countries are China, India, Bhutan and Bangladesh. Nepal is the Land of the lord Buddha, where peace and tranquility is as natural as the ice in the Himalayas. The Nepalese people are well known for their bravery, loyalty, Peace keeping and well-disciplined and nature. Nepal is also rich in lush green vegetation, Thick rain forest flocks of tourists from all over the world. So never ever miss an opportunity to visit this beauty full Himalayan kingdom of the world fondly described as the Switzerland of Asia.<br />\r\n<br />\r\nSize: 885-km (553 mile) long, 145-241 km (91-151 mile wide, 147,181-sq. km in area.<br />\r\n<br />\r\nPosition: 26-300 north latitude, 80-880 east longitude: on the India subcontinent bounded on the north By Tibet autonomous region of the people\'s Republic of china, &amp; on the West, south and east by the republic of India.<br />\r\n<br />\r\nTerrain: Hilly and mountains, 77% Terai lowlands. 23% more than above 3000m.<br />\r\n<br />\r\nLatitude Ranga: from 70m above sea level (230ft) in the terai,- to 8848m )29,028ft) at sagarmatha (Mt. Everest), Kathmandu Valley: 853m (2,798).<br />\r\n<br />\r\nClimate: Kathmandu- Summer 15-30 c, winter 0-16 c, terai- summer 21- 39 c, winter 9-30 C, Raifall Kathmandu) - OCT- May 300 mm june sept. 1100mm. Time: 15 minutes ached of Indian standard<br />\r\n<br />\r\nTime, 5 hour 45 minutes ahead of gmt<br />\r\n<br />\r\nPopulation: 2,75,00000 Approx. Language: Nepali is the national language, Devanagari the script. Altogether 26 languages are spoken.<br />\r\n&nbsp;', NULL, 2414, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'about-nepal', NULL, '1', '0', NULL, NULL, NULL, '2022-12-18 17:35:32', '2022-12-18 17:38:03', NULL),
(2509, 'message-from-chairman', 'messagefromchairman', 'Message From Chairman', NULL, 'Main', 'Normal', NULL, 2, 'MESSAGE FROM CHAIRMAN', NULL, '<p>As the chairperson of SRS Overseas Services Pvt. Ltd. and being in this position. I realize it took so many years of hard work and dedicated leadership to steer my company into this position .It is a unique opportunity to meet the HR challenges of multi-diverse industries around this region, since the company\'s inception, we continued to be the leader and role model in providing quality manpower service to the UAE market.</p>\r\n\r\n<p>Emerging as the leading manpower providing organization our team is committed to our basic philosophy of delivering high quality in all areas of business and the core values we practice where hard work and commitment is a lifestyle by providing efficient and effective service flowing from the management down to the root level.</p>\r\n\r\n<p>We provide solutions to our business partners by deeply understanding their projects and requirements, treating each requirement with urgency and working hard to meet, achieve and exceed their expectations.</p>\r\n\r\n<p>Our business is driven by a talented, enthusiastic and competent team of people. We also supply the major service for Security Guard, skilled, semi skilled and unskilled workers.</p>\r\n\r\n<p>I am very thankful to my ever devoted team, clients, business partners, vendors and our well-wishers for their continued support and guidance in making us one of the most preferred organizations to work with.</p>\r\n\r\n<p>I take this opportunity to thank you for taking the initiative to visit our website which I am sure will enable you to understand us better and serve you in the very near future.</p>\r\n\r\n<h3>Mrs. Subhadra Devi Baral (Mishra)<br />\r\nChairperson</h3>', NULL, 2414, NULL, NULL, NULL, '/uploads/banner_image/1671342852_chairperson.jpg', NULL, NULL, NULL, NULL, 'message-from-chairman', NULL, '1', '0', NULL, NULL, NULL, '2022-12-18 17:39:12', '2022-12-18 17:39:12', NULL),
(2510, 'message-from-md', 'messagefrommd', 'Message From  MD', NULL, 'Main', 'Normal', NULL, 3, 'MESSAGE FROM MANAGING DIRECTOR&nbsp;', NULL, '&nbsp;<br />\r\nHello and Namaste!<br />\r\nDear friends,<br />\r\n<br />\r\nWelcome to the Himalayan Kingdom of Nepal<br />\r\nPrestige HR Solution’s passion to match the right people to the right job has helped us to amass over a decade of successful stories in the human resource business.<br />\r\nEach client and candidate is like an extended family member to us. And like family, we understand and anticipate your needs, matching the right candidates to the right clients.<br />\r\nOur professionalism, coupled with a strong personal touch enhances the probability of success at every step. Our goal is to create a long-lasting client-candidate relationship. This will translate into long-term winning strategies and exponential growth for both parties but we know that finding a candidate with the right skill set is not the be-all and end-all at Prestige hr. We understand that the overall chemistry between the candidate and the existing management is paramount in ensuring good match consultants are empowered with the final authority and flexibility to deal with each client’s requirements. In our commitment to finding the best match. We customize our approach, systems, and processes not only from client to client but also from the assignment, all the while keeping underlying principles common. To ensure success, we believe in hiring people with the right values and specialized experience. If you wish to find out more or engage our manpower solution, please do not hesitate to contact us. We look forward to having you as a part of the Prestige HR family.<br />\r\n<br />\r\nThanks and best regards &nbsp; &nbsp; &nbsp;<br />\r\nTARA B.K<br />\r\nManaging Director<br />\r\nMBA MARKETING<br />\r\n&nbsp;', NULL, 2414, NULL, NULL, NULL, '/uploads/banner_image/1671342953_unnamed.jpg', NULL, NULL, NULL, NULL, 'message-from-md', NULL, '1', '0', NULL, NULL, NULL, '2022-12-18 17:40:37', '2022-12-18 17:40:53', NULL),
(2519, 'documents', 'documents', 'Documents', NULL, 'Main', 'Group', NULL, 4, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'documents', NULL, '1', '0', NULL, NULL, NULL, '2023-01-27 17:14:09', '2023-01-27 17:15:02', NULL),
(2520, 'required-documents-one', 'requireddocumentsone', 'Required Documents', NULL, 'Main', 'Normal', NULL, 1, 'REQUIRED DOCUMENTS', NULL, '<p>The following documents need t be proved b the Employer for recruitment from Nepal.<br />\r\n<strong>Consular Letter</strong><br />\r\nThis letter is issued by the employer addressing the Consulate General of the respective Embassy informing:</p>\r\n\r\n<ol>\r\n	<li>The appointment of SRS Overseas Services Pvt. Ltd. as the lawful Agent of the employer.</li>\r\n	<li>Authorization to act on behalf of the employer and to carry all your visa formalities with the Embassy.</li>\r\n</ol>\r\n<strong>Demand Letter</strong><br />\r\nA formal letter issued by the employer addressing SRS Overseas Services Pvt. Ltd. Lic. No. 252/058/059 Kathmandu, Nepal With full details of :\r\n<ol>\r\n	<li>The job categories and number of workers</li>\r\n	<li>Monthly salary</li>\r\n	<li>Contract Period</li>\r\n	<li>Working hours</li>\r\n	<li>Description of all other facilities like food accommodation, medical and air passage</li>\r\n</ol>', NULL, 2519, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'required-documents-one', NULL, '1', '0', NULL, NULL, NULL, '2023-01-27 17:16:52', '2023-01-27 17:16:52', NULL),
(2521, 'recruitment-procedure-one', 'recruitmentprocedureone', 'Recruitment Procedure', NULL, 'Main', 'Normal', NULL, 2, 'RECRUITMENT PROCEDURE', NULL, 'Recruitment Procedure at SRS Overseas Services Pvt.Ltd.is efficient and expeditious. On receipt of the original manpower demands documents from the client, interviews are organized within 7-10 days.<br />\r\n<strong>Documents</strong><br />\r\n- The following original documents are required for any recruitment from Nepal: Saudi Arabia, Qatar, UAE, Kuwait, Bahrain, Oman, Malaysia &amp; Others.\r\n<ol>\r\n	<li>Demand Letter</li>\r\n	<li>Power of Attorney</li>\r\n	<li>Employment Agreement paper</li>\r\n</ol>\r\n<b>Verification of Documents</b><br />\r\n- On receipt of the manpower recruitment documents from you we approach the ministry of Labour for government permission and they may contact you directly to verify these doc-uments. On Such occasions we kindly request you for kind cooperation with this verification please.<br />\r\n<b>Interview Process</b>\r\n\r\n<ol>\r\n	<li>Day 01: Advertising in authorized daily newspapers.</li>\r\n	<li>Day 02: Pre-screening of all suitable candidates.</li>\r\n	<li>Day 08: Final interview of candidates by the client and trade tests where applicable.</li>\r\n</ol>\r\n<b>Medical Check-up</b><br />\r\n- All the selected candidates are sent for medical fitness check to the authorized medical centers.<br />\r\n<b>Visa processes</b><br />\r\n- Only the visa process of candidates who are medically fit and available for travel are processed.<br />\r\n<b>Orientation</b><br />\r\n- This plays a very important role. We brief all the workers about their jobs, safety procedures, the climbing conditions, teach them to honor the different religion, rules and regulations of the country, Customs and traditions of the other nationalities they will meet and work with. and we pay special attention to make them understand and respect the islami traditions. The object is to try to give them some idea of their place of work and environment before their departure so that they can adjust easily to the new environment of their arrival at the place of work.<br />\r\n<b>Mobilization</b><br />\r\n- On receipt of the visa we try to dispatch them as soon as possible and as per our experience we normally send them from the day 7to 15 days As for Saudi Arabia, the candidates will be deployed within 25 to 35 days from the day the original visa documents are received by us in Nepal.<br />\r\n<br />\r\n<br />\r\n&nbsp;', NULL, 2519, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'recruitment-procedure-one', NULL, '1', '0', NULL, NULL, NULL, '2023-01-27 17:18:08', '2023-01-27 17:19:36', NULL),
(2522, 'demand-letters-one', 'demandlettersone', 'Demand Letters', NULL, 'Main', 'Normal', NULL, 3, 'DEMAND LETTER', NULL, 'Date:&nbsp;<br />\r\n<br />\r\nM/S SRS&nbsp;Overseas Services Pvt. Ltd.<br />\r\nLic. No. 252/058/059<br />\r\nBalwatar, Kathmandu, Nepal<br />\r\n<br />\r\nKindley arrange, to select and recruit following workers to work for our various projects in<br />\r\n<br />\r\nS. No.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Job Tilte&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;No Required&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Salary(.........................)<br />\r\n1.<br />\r\n2.<br />\r\n3.<br />\r\n4.<br />\r\n5.<br />\r\n6.<br />\r\n7.<br />\r\n8.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Total&nbsp;<br />\r\n<br />\r\nTerms and Conditions:<br />\r\n1. The Place of employment shall be..............................<br />\r\n2. Working hours will be eight (8) hours per day, 6 days a week.<br />\r\n3. Resident permit fee will be borne by the Employer<br />\r\n4. (food) Accommodation, Insurance, Medical And Transportation will be pro-video bt the company.<br />\r\n5. Duration of contract will be 2 years.<br />\r\n6. Company will provide round trip ticket upon completion of contract.<br />\r\n7. Other terms as per .........................Labour Law.<br />\r\n<br />\r\nName:<br />\r\nPosition:&nbsp;&nbsp;&nbsp;<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;', NULL, 2519, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'demand-letters-one', NULL, '1', '0', NULL, NULL, NULL, '2023-01-27 17:21:04', '2023-01-27 17:21:04', NULL),
(2523, 'guarantee-one', 'guaranteeone', 'Guarantee Letter', NULL, 'Main', 'Normal', NULL, 4, 'GUARANTEE LETTER', NULL, 'To<br />\r\nThe Director of General<br />\r\nMinistry of labor and Transport Management<br />\r\nDepartment of labor and Employment promotion<br />\r\nKathmandu, Nepal<br />\r\nRe: Guarantee Letter<br />\r\nDear Sir,<br />\r\n<br />\r\nWe do confirm to recruit.... nos, Nepalese worker Through M/S SRS Overseas Service Pvt. Ltd. Lic No. 252/058/059/ Kathmandu, Nepal for our company Only Under Our Management.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />\r\nWe Shall guarantee you for these recruited worker who will not be transferred to Any other company/ Country beside our company as they will be working with us according To company\'s Agreement at all.<br />\r\n<br />\r\nThank you,<br />\r\n<br />\r\n..................................<br />\r\nName &amp; Signature&nbsp;<br />\r\nCompany\'s seal<br />\r\n<br />\r\nAttested<br />\r\nThe chamber of commerce<br />\r\nNepelese embassy', NULL, 2519, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'guarantee-one', NULL, '1', '0', NULL, NULL, NULL, '2023-01-27 17:22:52', '2023-01-27 17:22:52', NULL),
(2524, 'terms-and-conditions-one', 'termsandconditionsone', 'Terms & Condition', NULL, 'Main', 'Normal', NULL, 5, 'TERMS AND CONDITIONS', NULL, 'The terms and conditions are based on the foreign Employment Act of Nepal. They Mainly focus for benefit and rights of the migrant worker.\r\n<ol>\r\n	<li>Final interview of the selected workers would be carried out within 10 days after receiving the original documents.</li>\r\n	<li>Arrangement for deployment of worker would be made within 15 days after we receive visa copy except if the visa is not necessary to endorse in the passport. If the visaendorsement is required it will take at least 45 days.</li>\r\n	<li>Free replacement would be made with new workers if any worker is found unqualified for the assigned work within 90 days after her assumes the job.</li>\r\n	<li>The company in contract should clearly mention the salary of a worker and other facilities mentioned under clause 5.</li>\r\n	<li>As per the Nepalese government\'s directives, the employer compny should offer following facilities to the workers in written contract.</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Salary</li>\r\n	<li>Accommodation</li>\r\n	<li>Food</li>\r\n	<li>Transportation</li>\r\n	<li>Medical Facilities</li>\r\n	<li>Insurance of worker</li>\r\n	<li>8 hours per day</li>\r\n	<li>Six- days a week</li>\r\n	<li>15 days leave in a year</li>\r\n	<li>Residence Permit</li>\r\n	<li>Over Time (O.T.) If worked more than 8 hours a day</li>\r\n</ul>\r\n\r\n<p>The contract letter should clearly state the company\'s rules regarding the above facilities.</p>', NULL, 2519, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'terms-and-conditions-one', NULL, '1', '0', NULL, NULL, NULL, '2023-01-27 17:24:21', '2023-01-27 17:24:21', NULL),
(2525, 'power-of-attorney-one', 'powerofattorneyone', 'Power Of Attorney', NULL, 'Main', 'Normal', NULL, 6, 'POWER OF ATTORNEY', NULL, '<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;POWER OF ATTORNEY</div>\r\n<br />\r\nWe Company Name.......................................hareby Appoint M/S SRS Oversease Services Pvt. Ltd. Lic. No. 252/058/059 Kathmandu, Nepal to be our lawful attorney and recruiting Agent Nepal for the purpose of handling all affairs concerning the recruitment of workers For employment with our company to sign all necessary documents as required by the Laws and regulations pertaining to employment of workers to arrange for their passports And visa endorsements with the Embassy and arrangement for their passage and other Legal formalities that deem necessary.<br />\r\n<br />\r\nFor Company Name<br />\r\n<br />\r\nName :<br />\r\nPosition :<br />\r\n&nbsp;', NULL, 2519, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'power-of-attorney-one', NULL, '1', '0', NULL, NULL, NULL, '2023-01-27 17:25:26', '2023-01-27 17:25:26', NULL),
(2526, 'legal-document-one', 'legaldocumentone', 'Legal Documents', NULL, 'Main', 'Photo Gallery', NULL, 7, NULL, NULL, NULL, NULL, 2519, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'legal-document-one', NULL, '1', '0', NULL, NULL, NULL, '2023-01-27 17:28:49', '2023-01-27 17:28:49', NULL),
(2527, 'organization-chart-one', 'organizationchartone', 'Organization Chart', NULL, 'Main', 'Normal', NULL, 8, 'ORGANIZATION CHART', NULL, '<img src=\"https://srs.demo.radiantnepal.com/uploads/photo_gallery/1674798999_1671532678_organization-chart-employment-link%20-%20Copy.png\" /><img alt=\"\" src=\"/ckfinder/userfiles/images/1671532678_organization-chart-employment-link%20-%20Copy.png\" /><img alt=\"\" src=\"/ckfinder/userfiles/images/1671532678_organization-chart-employment-link%20-%20Copy.png\" />', NULL, 2519, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'organization-chart-one', NULL, '1', '0', NULL, NULL, NULL, '2023-01-27 17:35:42', '2023-01-27 17:44:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `navigation_items`
--

CREATE TABLE `navigation_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sort` int(11) NOT NULL,
  `navigation_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_nepali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_nepali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigation_items`
--

INSERT INTO `navigation_items` (`id`, `sort`, `navigation_id`, `name`, `name_nepali`, `file`, `content`, `content_nepali`, `link`, `extra_one`, `extra_two`, `created_at`, `updated_at`) VALUES
(19, 1, 2322, NULL, NULL, '1658466642_thumb_fodefeen1.jpg', NULL, NULL, NULL, NULL, NULL, '2022-07-22 15:55:42', '2022-07-22 15:58:47'),
(20, 1, 2322, NULL, NULL, '1658466658_thumb_22.jpg', NULL, NULL, NULL, NULL, NULL, '2022-07-22 15:55:58', '2022-07-22 15:58:47'),
(21, 1, 2322, NULL, NULL, '1658466669_thumb_20.jpg', NULL, NULL, NULL, NULL, NULL, '2022-07-22 15:56:09', '2022-07-22 15:58:47'),
(22, 1, 2322, NULL, NULL, '1658466678_thumb_19.jpg', NULL, NULL, NULL, NULL, NULL, '2022-07-22 15:56:18', '2022-07-22 15:58:47'),
(23, 1, 2322, NULL, NULL, '1658466688_thumb_17.jpg', NULL, NULL, NULL, NULL, NULL, '2022-07-22 15:56:28', '2022-07-22 15:58:47'),
(24, 1, 2322, NULL, NULL, '1658466697_thumb_16.jpg', NULL, NULL, NULL, NULL, NULL, '2022-07-22 15:56:37', '2022-07-22 15:58:47'),
(25, 1, 2445, NULL, NULL, NULL, NULL, NULL, 'https://youtu.be/syKIp6HXf2Y', NULL, NULL, '2022-09-11 22:19:26', '2022-09-11 22:19:26'),
(26, 1, 2445, NULL, NULL, NULL, NULL, NULL, 'https://youtu.be/syKIp6HXf2Y', NULL, NULL, '2022-09-11 22:19:26', '2022-09-11 22:19:26'),
(45, 1, 2457, NULL, NULL, '1663921747_gallery-pic.png', NULL, NULL, NULL, NULL, NULL, '2022-09-13 21:00:14', '2022-09-23 19:14:07'),
(59, 1, 2464, NULL, NULL, '1663998841_2-1.png', NULL, NULL, NULL, NULL, NULL, '2022-09-14 22:23:28', '2022-09-24 16:39:01'),
(60, 2, 2464, NULL, NULL, '1663998858_Ijajat-Patra1-copy-Copy.jpg', NULL, NULL, NULL, NULL, NULL, '2022-09-14 22:23:28', '2022-09-24 16:39:18'),
(61, 3, 2464, NULL, NULL, '1663998876_renewed-License.jpeg', NULL, NULL, NULL, NULL, NULL, '2022-09-14 22:23:28', '2022-09-24 16:39:36'),
(62, 1, 2465, NULL, NULL, '1663999042_organization-chart-employment-link.png', NULL, NULL, NULL, NULL, NULL, '2022-09-14 22:25:18', '2022-10-28 17:22:33'),
(63, 1, 2457, NULL, NULL, '1663921783_gallery-pic-1.png', NULL, NULL, NULL, NULL, NULL, '2022-09-23 19:14:43', '2022-09-23 19:14:43'),
(64, 2, 2457, NULL, NULL, '1663921783_gallery-pic-3.png', NULL, NULL, NULL, NULL, NULL, '2022-09-23 19:14:43', '2022-09-23 19:14:43'),
(65, 3, 2457, NULL, NULL, '1663921783_gallery-pic-4.png', NULL, NULL, NULL, NULL, NULL, '2022-09-23 19:14:43', '2022-09-23 19:14:43'),
(66, 1, 2446, NULL, NULL, '1670945328_Economy-1.jpg', NULL, NULL, NULL, NULL, NULL, '2022-09-23 19:15:46', '2022-12-13 15:30:15'),
(74, 1, 2462, NULL, NULL, '1670944478_legal-document-1.jpg', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:34:32', '2022-12-16 20:07:30'),
(75, 2, 2462, NULL, NULL, '1670944487_legal-document-3.jpg', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:34:32', '2022-12-16 20:07:30'),
(76, 3, 2462, NULL, NULL, '1670944510_legal-document-2.jpg', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:34:32', '2022-12-16 20:07:30'),
(78, 1, 2463, NULL, NULL, '1663998773_AL-Sary-National-Indoor-Cleaner.png', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:37:53', '2022-09-24 16:37:53'),
(79, 2, 2463, NULL, NULL, '1663998773_Al-Waha-Farm-Kuwait.png', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:37:53', '2022-09-24 16:37:53'),
(80, 3, 2463, NULL, NULL, '1663998773_BYSM-Electromechinical-Demand-Qatar.png', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:37:53', '2022-09-24 16:37:53'),
(81, 4, 2463, NULL, NULL, '1663998773_Kuwait-Waste-Collection-Cleaner.png', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:37:53', '2022-09-24 16:37:53'),
(82, 5, 2463, NULL, NULL, '1663998773_kuwat-costacoffee.png', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:37:53', '2022-09-24 16:37:53'),
(83, 6, 2463, NULL, NULL, '1663998773_SP-SP-International-Electro-Mechanical-Works-Demand.png', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:37:53', '2022-09-24 16:37:53'),
(85, 2, 2446, NULL, NULL, '1670945349_legal-document-3.jpg', NULL, NULL, NULL, NULL, NULL, '2022-12-13 15:29:09', '2022-12-13 15:30:15'),
(86, 3, 2446, NULL, NULL, '1670945349_legal-document-2.jpg', NULL, NULL, NULL, NULL, NULL, '2022-12-13 15:29:09', '2022-12-13 15:30:15'),
(87, 1, 2517, NULL, NULL, '1671354038_legal-document-2.jpg', NULL, NULL, NULL, NULL, NULL, '2022-12-18 20:45:38', '2022-12-18 20:45:38'),
(88, 2, 2517, NULL, NULL, '1671354038_legal-document-1.jpg', NULL, NULL, NULL, NULL, NULL, '2022-12-18 20:45:38', '2022-12-18 20:45:38'),
(89, 3, 2517, NULL, NULL, '1671354038_legal-document-3.jpg', NULL, NULL, NULL, NULL, NULL, '2022-12-18 20:45:38', '2022-12-18 20:45:38'),
(90, 1, 2517, NULL, NULL, '1671432110_license up to 2080.jpeg', NULL, NULL, NULL, NULL, NULL, '2022-12-19 18:26:50', '2022-12-19 18:26:50'),
(91, 1, 2526, NULL, NULL, '1674798581_1671354038_legal-document-2.jpg', NULL, NULL, NULL, NULL, NULL, '2023-01-27 17:34:41', '2023-01-27 17:34:41'),
(92, 2, 2526, NULL, NULL, '1674798581_1671432110_license up to 2080.jpeg', NULL, NULL, NULL, NULL, NULL, '2023-01-27 17:34:41', '2023-01-27 17:34:41'),
(93, 3, 2526, NULL, NULL, '1674798581_1671354038_legal-document-1q.jpg', NULL, NULL, NULL, NULL, NULL, '2023-01-27 17:34:41', '2023-01-27 17:34:41'),
(94, 4, 2526, NULL, NULL, '1674798581_1671354038_legal-document-3.jpg', NULL, NULL, NULL, NULL, NULL, '2023-01-27 17:34:41', '2023-01-27 17:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `navigation_video_items`
--

CREATE TABLE `navigation_video_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sort` int(11) NOT NULL,
  `nav_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_nepali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vlink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_nepali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_types`
--

CREATE TABLE `page_types` (
  `sort` int(10) UNSIGNED NOT NULL,
  `page_type_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_types`
--

INSERT INTO `page_types` (`sort`, `page_type_title`, `created_at`, `updated_at`) VALUES
(1, 'Job', '2020-09-16 03:15:20', '2020-09-16 03:15:20'),
(2, 'Group', '2020-09-16 03:15:20', '2020-09-16 03:15:20'),
(3, 'Photo Gallery', '2020-09-16 03:15:20', '2020-09-16 03:15:20'),
(11, 'Normal', NULL, NULL),
(12, 'Group Jobcategory', NULL, NULL),
(13, 'Group Jobs', NULL, NULL),
(14, 'Video Gallery\r\n', NULL, NULL),
(15, 'Chart', NULL, NULL);

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
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_settings`
--
ALTER TABLE `global_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigations`
--
ALTER TABLE `navigations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_items`
--
ALTER TABLE `navigation_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_video_items`
--
ALTER TABLE `navigation_video_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_types`
--
ALTER TABLE `page_types`
  ADD PRIMARY KEY (`sort`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `global_settings`
--
ALTER TABLE `global_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `navigations`
--
ALTER TABLE `navigations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2528;

--
-- AUTO_INCREMENT for table `navigation_items`
--
ALTER TABLE `navigation_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `navigation_video_items`
--
ALTER TABLE `navigation_video_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_types`
--
ALTER TABLE `page_types`
  MODIFY `sort` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
