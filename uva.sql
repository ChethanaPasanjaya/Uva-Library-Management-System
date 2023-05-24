-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 10:27 AM
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
-- Database: `uva`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_id`, `name`, `email`, `mobile`, `password`, `created_at`, `updated_at`) VALUES
(1, 'AD|01', 'lakshan madusanke', 'lak@gmail.com', 778337399, '12345678', '2022-07-06 17:04:08', '2022-08-04 16:37:26'),
(8, 'AD|8', 'randula vidhana', 'randula123@gmail.com', 778337399, '12345678', '2022-08-04 16:43:18', '2022-08-04 16:43:18');

-- --------------------------------------------------------

--
-- Table structure for table `allusers`
--

CREATE TABLE `allusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `indexNo` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardiansname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardianphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(5) NOT NULL DEFAULT 0,
  `quantity` int(10) NOT NULL,
  `is_damaged` int(2) NOT NULL DEFAULT 0,
  `damaged_quantity` int(2) NOT NULL DEFAULT 0,
  `author_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_id`, `book_name`, `book_desc`, `book_image`, `price`, `quantity`, `is_damaged`, `damaged_quantity`, `author_name`, `category_id`, `created_at`, `updated_at`) VALUES
(11, 'B|NA|11', 'Forces and equilibrium on the particle', 'Educational book', '1656842954.jpg', 500, 10, 0, 0, 'K.S.A.M.Jayathilaka', 'C|NA|5', '2022-07-03 04:39:14', '2022-08-23 06:04:35'),
(13, 'B|GE|13', 'The Tunnels of CU CHI', 'story book', '1656843316.jpg', 380, 9, 1, 1, 'Translater: Sujeewa dissanayake', 'C|LI|8', '2022-07-03 04:45:16', '2022-08-24 09:32:19'),
(14, 'B|GE|14', 'GINI', 'story book', '1656843399.jpg', 650, 10, 0, 0, 'Aerawwala Nandimithra', 'C|GE|9', '2022-07-03 04:46:39', '2022-08-23 06:07:05'),
(15, 'B|GE|15', 'The secret cat of the croocked cat by wiliam arden', 'story book', '1656843553.jpg', 320, 10, 0, 0, 'Translater: Wishraawana galppaththi', 'C|LA|4', '2022-07-03 04:49:13', '2022-08-24 09:18:11'),
(16, 'B|GE|16', 'Oliver Twist', 'story book', '1656843613.jpg', 250, 11, 0, 0, 'Charles Dickens', 'C|GE|1', '2022-07-03 04:50:13', '2022-08-24 07:43:28'),
(27, 'B|SU|27', 'Combine Maths | A/L', 'A/L 1st edition', '1657957445.jpg', 650, 6, 1, 2, 'K.M.D.S.Jayathilaka', 'C|SU|13', '2022-07-16 02:14:06', '2022-08-24 09:36:01'),
(33, 'B|PH|33', 'Kit\'s Hill', 'Beginning her splendid lancastrian saga of the howarths of garth', '1661317597.jpg', 600, 10, 0, 0, 'Jean stubbs', 'C|PH|2', '2022-08-24 05:06:37', '2022-08-24 09:29:31'),
(34, 'B|RE|34', 'Ganthera Theraniya', 'Religional book', '1661317789.jpg', 450, 0, 0, 0, 'Erawwala nandhimithra', 'C|RE|3', '2022-08-24 05:09:49', '2022-08-24 05:09:49'),
(36, 'B|AD|36', 'Mystery of the three deaths', 'It\'s a story', '1663089019.jpg', 750, 10, 0, 0, 'Lasitha Raveen', 'C|AD|16', '2022-09-13 17:10:19', '2022-09-13 17:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `book_requests`
--

CREATE TABLE `book_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `user_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryId` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `books_quantity` int(3) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryId`, `categoryName`, `books_quantity`, `created_at`, `updated_at`) VALUES
(1, 'C|GE|1', 'General Books | සාමාන්‍ය කෘති', 12, '2022-06-28 05:35:03', '2022-08-12 18:03:37'),
(2, 'C|PH|2', 'Philosophy and Psychology | දර්ශනය සහ මනෝ විද්‍යාව', 16, '2022-07-03 00:16:15', '2022-08-24 05:06:37'),
(3, 'C|RE|3', 'Religion | ආගම', 2, '2022-07-03 00:20:15', '2022-08-24 05:09:49'),
(4, 'C|LA|4', 'Language | භාෂාව', 1, '2022-07-03 00:33:48', '2022-08-17 10:19:37'),
(5, 'C|NA|5', 'Natural science and maths | ස්වාභාව විද්‍යාව සහ ගණිතය', 3, '2022-07-03 00:34:05', '2022-08-24 09:30:36'),
(6, 'C|TE|6', 'Technology|තාක්ෂණ විද්‍යා', 1, '2022-07-03 00:34:21', '2022-08-24 05:02:49'),
(8, 'C|LI|8', 'Literature | සාහිත්‍ය', 1, '2022-07-03 00:34:49', '2022-07-04 07:11:23'),
(9, 'C|GE|9', 'Geography | භූගෝල විද්‍යාව', 1, '2022-07-03 00:35:18', '2022-08-12 17:21:12'),
(13, 'C|SU|13', 'Subjects | විශයයන්', 1, '2022-07-16 02:04:08', '2022-07-16 02:14:06'),
(15, 'C|AR|15', 'Art Blah', 0, '2022-08-24 09:32:51', '2022-08-24 09:33:14'),
(16, 'C|AD|16', 'Advanced Level', 1, '2022-09-13 17:07:08', '2022-09-13 17:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `response` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `phone`, `message`, `response`, `created_at`, `updated_at`) VALUES
(1, 'lakshan', 'madusanka', 'lak@gmail.com', '0778337399', 'this is for test', 1, '2022-08-20 08:37:45', '2022-08-23 20:51:53'),
(8, 'Shan', 'Levin', 'lak@gmail.com', '0778337399', 'this is test', 1, '2022-08-20 09:11:58', '2022-08-24 05:23:10'),
(9, 'lakshan', 'madusanka', 'lakshan@gmail.com', '0778337399', 'I want to borrow a book', 0, '2022-08-24 08:56:52', '2022-08-24 08:56:52');

-- --------------------------------------------------------

--
-- Table structure for table `damage_books`
--

CREATE TABLE `damage_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `damage_book_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ebooks`
--

CREATE TABLE `ebooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ebook_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ebooks`
--

INSERT INTO `ebooks` (`id`, `ebook_id`, `category`, `grade`, `subject`, `name`, `pdf`, `img`, `created_at`, `updated_at`) VALUES
(3, 'e001', 'past papers', '7', 'Buddhism', 'පිළියන්දල කලාපය - වසර මැද - 2017', 'ebooks/pdf/gr7/Pp/Bud_G7_2017_I,II_pp _T2_piliyandala_kalapaya.pdf', 'ebooks/img/gr7/buddhism-pp-piliyandala-2017-t2.png', NULL, NULL),
(4, 'e002', 'past papers', '7', 'Buddhism', 'දකුණු පළාත - වසර අවසාන - 2017\r\n', 'ebooks/pdf/gr7/Pp/Bud_G7_T3_I,II_pp_dakunu_palatha_2017.pdf', 'ebooks/img/gr7/buddhism-pp-dakuna-2017-t3.png', NULL, NULL),
(5, 'e003', 'past papers', '7', 'Buddhism', 'දකුණු පළාත - වසර අවසාන - 2018', 'ebooks/pdf/gr7/Pp/Bud_G7_I,Ii_2018.pdf', 'ebooks/img/gr7/buddhism-pp-dakunu-2018-t3.png', NULL, NULL),
(7, 'e004', 'syllabus', '7', 'science', 'විෂය නිර්දේශය ', ' ebooks/pdf/gr7/Syllabus/s7_Syllabus_science.pdf', 'ebooks/img/gr7/science-sy.png', NULL, NULL),
(8, 'e005', 'teachers guide', '7', 'Buddhism', 'ගුරු මාර්ගෝපදේශය ', 'ebooks/pdf/gr7/teachers_guide/teachers_guid_buddhism.pdf', 'ebooks/img/gr7/buddhism-tg.png', NULL, NULL),
(10, 'e006', 'past papers', '7', 'Buddhism', 'බස්නාහිර පළාත - වසර මැද - 2018\r\n', 'ebooks/pdf/gr7/Pp/Budd_G7_T2_pp_I,II_2018.pdf', 'ebooks/img/gr7/buddhism-pp-western-2018-t2.png', NULL, NULL),
(11, 'e007', 'past papers', '7', 'Buddhism', 'දේවි බාලිකා විද්‍යාලය - පළමු වාර - 2012 ', 'ebooks/pdf/gr7/Pp/SG7_Bud_PP_T1_2012_Devi_Balika.pdf', 'ebooks/img/gr7/buddhism-pp-devi-2012-t1.png', NULL, NULL),
(12, 'e008', 'past papers', '7', 'Buddhism', 'වයඹ පළාත - වසර අවසාන - 2018', 'ebooks/pdf/gr7/Pp/sg7_buddism_3rd_tp_nwp_2018.PDF', 'ebooks/img/gr7/buddhism-pp-wayaba-2018-t3.png', NULL, NULL),
(14, 'e010', 'teachers guide', '7', 'Science', 'ගුරු මාර්ගෝපදේශය \r\n', 'ebooks/pdf/gr7/teachers_guide/s7tim_Science.pdf', 'ebooks/img/gr7/science-tg.png', NULL, NULL),
(15, 'e011', 'teachers guide', '7', 'Information and Communication Technology', 'ගුරු මාර්ගෝපදේශය \r\n', 'ebooks/pdf/gr7/teachers_guide/sg7_ict_tim.pdf', 'ebooks/img/gr7/ict-tg.png', NULL, NULL),
(18, 'e013', 'text books', '7', 'Information and Communication Technology', 'Information and Communication Technology', 'ebooks/pdf/gr7/text_books/ict_G_7E_RB.pdf', 'ebooks/img/gr7/ict-t-e.png', NULL, NULL),
(20, 'e015', 'text books', '7', 'Mathematics', 'Mathematics - Part I', 'ebooks/pdf/gr7/text_books/maths_G_7%20_P_IE.pdf', 'ebooks/img/gr7/maths-t-p1-e.png', NULL, NULL),
(21, 'e016', 'text books', '7', 'Mathematics', 'Mathematics - Part II', 'ebooks/pdf/gr7/text_books/maths_G_7_P_IIE.pdf', 'ebooks/img/gr7/maths-t-p2-e.png', NULL, NULL),
(22, 'e017', 'syllabus', '8', 'Buddhism', 'විෂය නිර්දේශය \r\n', 'ebooks/pdf/gr8/syllabus/Buddhism.pdf', 'ebooks/img/gr8/buddhism-sy.png\r\n', NULL, NULL),
(23, 'e018', 'syllabus', '8', 'Mathematics', 'විෂය නිර්දේශය \r\n', 'ebooks/pdf/gr8/syllabus/Maths.pdf', 'ebooks/img/gr8/maths-sy.png', NULL, NULL),
(24, 'e019', 'syllabus', '8', 'Sinhala', 'විෂය නිර්දේශය \r\n', 'ebooks/pdf/gr8/syllabus/sinhala.pdf', 'ebooks/img/gr8/sinhala-sy.png\r\n', NULL, NULL),
(25, 'e020', 'teachers guide', '8', 'Information and Communication Technology', 'ගුරු මාර්ගෝපදේශය ', 'ebooks/pdf/gr8/teachers_guide/sg8_ict_tim.pdf', 'ebooks/img/gr8/ict-tg.png', NULL, NULL),
(26, 'e021', 'teachers guide', '8', 'Buddhism', 'ගුරු මාර්ගෝපදේශය ', 'ebooks/pdf/gr8/teachers_guide/Sg8_Tim_Bud.pdf', 'ebooks/img/gr8/buddhism-tg.png', NULL, NULL),
(27, 'e022', 'teachers guide', '8', 'Mathematics', 'ගුරු මාර්ගෝපදේශය ', 'ebooks/pdf/gr8/teachers_guide/Sg8_Tim_Mat.pdf', 'ebooks/img/gr8/maths-tg.png', NULL, NULL),
(28, 'e023', 'teachers guide', '8', 'Sinhala', 'ගුරු මාර්ගෝපදේශය ', 'ebooks/pdf/gr8/teachers_guide/Sg8_Tim_Sin.pdf', 'ebooks/img/gr8/sinhala-tg.png', NULL, NULL),
(29, 'e024', 'text books', '8', 'Buddhism', 'Buddhism', 'ebooks/pdf/gr8/text_book/bud_g8.pdf', 'ebooks/img/gr8/buddhism-t.png', NULL, NULL),
(30, 'e025', 'text books', '8', 'Information and Communication Technology', 'Information and Communication Technology', 'ebooks/pdf/gr8/text_book/Grade_8_ICT_CTP.pdf', 'ebooks/img/gr8/ict-t.png', NULL, NULL),
(31, 'e026', 'text books', '8', 'Health', 'Health - English Medium', 'ebooks/pdf/gr8/text_book/Health.pdf', 'ebooks/img/gr8/health-t-e.png', NULL, NULL),
(32, 'e027', 'text books', '8', 'Information and Communication Technology', 'Information and Communication Technology - English Medium', 'ebooks/pdf/gr8/text_book/it.pdf', 'ebooks/img/gr8/ict-t-e.png', NULL, NULL),
(33, 'e028', 'text books', '8', 'Mathematics', 'MAthematics - Part 1 - English Medium', 'ebooks/pdf/gr8/text_book/maths_G_8P_1E.pdf', 'ebooks/img/gr8/maths-t-p1-e.png', NULL, NULL),
(34, 'e029', 'text books', '8', 'Mathematics', 'Mathematics - English Medium - Part 2', 'ebooks/pdf/gr8/text_book/maths_G_8p_2E.pdf', 'ebooks/img/gr8/maths-t-p2-e.png', NULL, NULL),
(35, 'e030', 'text books', '8', 'Mathematics', 'Mathematics - Part 1\r\n', 'ebooks/pdf/gr8/text_book/maths_g_8p_1S.pdf', 'ebooks/img/gr8/maths-t-p1.png', NULL, NULL),
(36, 'e031', 'text books', '8', 'Science', 'Science - Part 2', 'ebooks/pdf/gr8/text_book/science_8_2S.pdf', 'ebooks/img/gr8/science-t-p2.png', NULL, NULL),
(37, 'e032', 'text books', '8', 'Science', 'Science - English Medium - Part 2', 'ebooks/pdf/gr8/text_book/scienceG8P2E.pdf', 'ebooks/img/gr8/science-t-p2-e.png', NULL, NULL),
(38, 'e033', 'text books', '8', 'Science', 'Science - Part 1', 'ebooks/pdf/gr8/text_book/sciencePG8S.pdf', 'ebooks/img/gr8/science-t-p1.png', NULL, NULL),
(39, 'e034', 'kids stories', '-', 'අපූරු දවස් ', 'අපූරු ඉස්කෝලේ අපූරු දවස් ', 'ebooks/pdf/kids_stories/apuru_iskole/apuru_dawas.pdf', 'ebooks/img/kids_stories/apuru_dawas.png', NULL, NULL),
(40, 'e035', 'kids stories', '-', 'අවසන් වාරේ', 'අපූරු ඉස්කෝලේ අවසන් වාරේ\r\n', 'ebooks/pdf/kids_stories/apuru_iskole/Awasan_Ware.pdf', 'ebooks/img/kids_stories/Awasan_Ware.png', NULL, NULL),
(41, 'e036', 'kids stories', '-', 'ගිම්හාන කාලේ', 'අපූරු ඉස්කෝලේ ගිම්හාන කාලේ \r\n', 'ebooks/pdf/kids_stories/apuru_iskole/gimhana_kale.pdf', 'ebooks/img/kids_stories/gimhana_kale.png', NULL, NULL),
(42, 'e037', 'kids stories', '-', 'හිම මිදෙන කාලේ ', 'අපූරු ඉස්කෝලේ හිම මිදෙන කාලේ  \r\n', 'ebooks/pdf/kids_stories/apuru_iskole/Hima_Midena_kale.pdf', 'ebooks/img/kids_stories/hima_midena_kale.png', NULL, NULL),
(43, 'EB|BU|43', 'text books', '8', 'Buddism', 'Buddism grade 8', 'ebooks/pdf/1658308445.pdf', 'ebooks/img/1658308445.png', '2022-07-20 03:44:05', '2022-07-20 03:44:05'),
(45, 'EB|KI|45', 'novels', '-', '-', 'kill hill\'s', 'ebooks/pdf/1661333661.pdf', 'ebooks/img/1661333661.png', '2022-08-24 09:34:21', '2022-08-24 09:34:21');

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
-- Table structure for table `librarians`
--

CREATE TABLE `librarians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `librarian_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_04_06_102430_create_time_tables_table', 1),
(5, '2022_04_25_075557_create_admins_table', 1),
(6, '2022_04_25_080708_create_damage_books_table', 1),
(7, '2022_04_25_081235_create_parents_table', 1),
(8, '2022_04_25_081423_create_principles_table', 1),
(9, '2022_04_25_081443_create_racks_table', 1),
(10, '2022_04_25_081508_create_librarians_table', 1),
(11, '2022_04_27_040532_create_staff_table', 1),
(12, '2022_05_13_085039_create_books_table', 1),
(13, '2022_05_13_103208_create_student_borrows_table', 2),
(14, '2022_05_14_205823_create_allusers_table', 2),
(15, '2022_05_15_043758_create_staff_borrows_table', 2),
(16, '2022_05_20_152247_create_book_requests_table', 2),
(17, '2022_05_23_081730_create_categories_table', 2),
(18, '2022_05_24_092827_create_users_table', 2),
(19, '2022_05_24_115210_create_user_students_table', 2),
(20, '2022_05_24_120622_create_user_staff_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `memberid` varchar(10) NOT NULL,
  `read` int(11) NOT NULL DEFAULT 0,
  `notification` text DEFAULT NULL,
  `job` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `memberid`, `read`, `notification`, `job`, `created_at`, `updated_at`) VALUES
(199, '14587', 0, 'You have registered successfull. Your ID: 14587', 'user register', '2022-09-13 17:38:08', '2022-09-13 17:38:08'),
(200, '11457', 1, 'You have registered successfull. Your ID: 11457', 'user register', '2022-09-13 17:51:43', '2022-09-13 17:51:43'),
(201, '11568', 0, 'You have registered successfull. Your ID: 11568', 'user register', '2022-09-14 03:36:43', '2022-09-14 03:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('lakshanmadusanka870@gmail.com', '$2y$10$VuD4NrYVVAe.pBCDxx5nheNT0akQh1KtPxpwhRQo9yXwWLk5Q/40y', '2022-07-15 21:57:40');

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
-- Table structure for table `principles`
--

CREATE TABLE `principles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `principle_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `racks`
--

CREATE TABLE `racks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rack_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_Id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `First_Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Last_Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TeleNum` int(11) NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff_borrows`
--

CREATE TABLE `staff_borrows` (
  `id` int(11) NOT NULL,
  `Book_Id` varchar(10) NOT NULL,
  `User_Id` varchar(10) NOT NULL,
  `Book_Name` text NOT NULL,
  `Borrow_Date` date NOT NULL,
  `Return_Date` date NOT NULL,
  `New_Return_Date` date DEFAULT NULL,
  `status` int(3) NOT NULL DEFAULT 1,
  `reminder_msg` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff_fines`
--

CREATE TABLE `staff_fines` (
  `id` bigint(20) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'Missing',
  `User_Id` varchar(10) NOT NULL,
  `Book_Id` varchar(10) NOT NULL,
  `desc` text NOT NULL,
  `Total_Fine` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_borrows`
--

CREATE TABLE `student_borrows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Book_Id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_Id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Book_Name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Borrow_Date` date NOT NULL,
  `Return_Date` date NOT NULL,
  `New_Return_Date` date DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `reminder_msg` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_fines`
--

CREATE TABLE `student_fines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Missing',
  `User_Id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Book_Id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Total_Fine` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_tables`
--

CREATE TABLE `time_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Monday` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tuesday` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Wednesday` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Thursday` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Friday` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_tables`
--

INSERT INTO `time_tables` (`id`, `time`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `created_at`, `updated_at`) VALUES
(1, '07:50 - 08:30', 'Grade 6A', 'Grade 7A', 'Grade 8A', 'Grade 9A', 'Grade 10A', '2022-04-06 08:36:52', '2022-07-06 12:01:00'),
(2, '8.30 - 9.10', 'Grade 6B', 'Grade 7B', 'Grade 8B', 'Grade 9B', 'Grade 10B', '2022-04-06 08:36:52', '2022-04-06 08:36:52'),
(3, '9.10 - 9.50', 'Grade 6C', 'Grade 7C', 'Grade 8C', 'Grade 9C', 'Grade 10C', '2022-04-06 08:36:52', '2022-04-06 08:36:52'),
(4, '9.50 - 10.30', 'Grade 6D', 'Grade 7D', 'Grade 8D', 'Grade 9D', 'Grade 10D', '2022-04-06 08:37:42', '2022-04-06 08:37:42'),
(5, '11.00 - 11.40', 'Grade 6E', 'Grade 7E', 'Grade 8E', 'Grade 9E', 'Grade 10E', '2022-04-06 08:36:52', '2022-04-06 08:36:52'),
(6, '11.40 - 12.20', 'Grade 6F', 'Grade 7F', 'Grade 8F', 'Grade 9F', 'Grade 10F', '2022-04-06 08:37:42', '2022-04-06 08:37:42'),
(7, '12.20 - 1.00', 'Grade 11A', 'Grade 11B', 'Grade 11C', 'Grade 11D', 'Grade 11E & 11F', '2022-04-06 08:36:52', '2022-04-06 08:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `memberid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `token` int(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `memberid`, `firstname`, `lastname`, `email`, `email_verified_at`, `password`, `is_admin`, `token`, `created_at`, `updated_at`) VALUES
(1, 'AD|01', 'lakshan', 'madusanke', 'lak@gmail.com', NULL, '$2y$10$3dTsikPJspRS7oY1JP9A7.7daWVVFEQIv3a56vs0mQ8FtIHoaxoTq', 1, NULL, NULL, '2022-08-04 16:37:26'),
(34, '11457', 'lakshan', 'madusanka', 'madhusanka@gmail.com', NULL, '$2y$10$X.ICytk9ULny2LbDb0GcXOTYkBX710r5qS4N4ZqcbBYr.nhK5Shs6', 0, NULL, '2022-09-13 16:59:13', '2022-09-13 16:59:13'),
(35, '14587', 'Lakshan', 'Madhusanka', 'levin.madhu@gmail.com', NULL, '$2y$10$B8bC874X9tK9POlpZ5s0RO5L5.pQiTN3e5wa1g3dQz3zzNQt37WDW', 0, 5864, '2022-09-13 17:38:08', '2022-09-14 04:16:15'),
(36, '11457', 'randula', 'vidanapathirana', 'randu@gmail.com', NULL, '$2y$10$WoX0UuTfiJnQjUQX8JC0oeKyUPCU25ivoHTMIZmW62UrQZFmDTgK2', 0, NULL, '2022-09-13 17:51:43', '2022-09-13 17:51:43'),
(37, '11568', 'chethana', 'pasanjaya', 'chethana@gmail.com', NULL, '$2y$10$myRZg1qnrFSCbU1BcBQoc.kxeOLJXBIFeYmxoVXlEZpCSnlSeod.W', 0, NULL, '2022-09-14 03:36:43', '2022-09-14 03:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_staff`
--

CREATE TABLE `user_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_Id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `First_Name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Last_Name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TeleNum` int(11) NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_staff`
--

INSERT INTO `user_staff` (`id`, `staff_Id`, `First_Name`, `Last_Name`, `Gender`, `DOB`, `Address`, `TeleNum`, `Email`, `Password`, `created_at`, `updated_at`) VALUES
(22, 'TE25', 'lakshan', 'madusanka', 'Female', '2022-09-05', 'kadduwa', 766859785, 'madhusanka@gmail.com', '12345678', '2022-09-13 16:59:13', '2022-09-13 16:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_students`
--

CREATE TABLE `user_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Stu_Id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `First_Name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Last_Name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Grade` int(11) NOT NULL,
  `Class` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TeleNum` int(11) NOT NULL,
  `guardName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardNo` int(10) NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_students`
--

INSERT INTO `user_students` (`id`, `Stu_Id`, `First_Name`, `Last_Name`, `Grade`, `Class`, `Gender`, `DOB`, `Address`, `TeleNum`, `guardName`, `guardNo`, `Email`, `Password`, `created_at`, `updated_at`) VALUES
(28, '14587', 'Lakshan', 'Madhusanka', 6, 'B', 'Male', '2022-09-05', 'kadduwa', 778337399, 'nissanka', 123456987, 'levin.madhu@gmail.com', '12345678', '2022-09-13 17:38:08', '2022-09-13 17:38:08'),
(29, '11457', 'randula', 'vidanapathirana', 11, 'C', 'Female', '2022-08-28', 'nivithigala', 778337399, 'vidanapathirana', 767218932, 'randu@gmail.com', '12345678', '2022-09-13 17:51:43', '2022-09-13 17:51:43'),
(30, '11568', 'chethana', 'pasanjaya', 6, 'D', 'Male', '2010-02-07', 'jaffna', 766859785, 'walathara', 767218932, 'chethana@gmail.com', '12345678', '2022-09-14 03:36:43', '2022-09-14 03:36:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `allusers`
--
ALTER TABLE `allusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `allusers_email_unique` (`email`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_requests`
--
ALTER TABLE `book_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `damage_books`
--
ALTER TABLE `damage_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebooks`
--
ALTER TABLE `ebooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `librarians`
--
ALTER TABLE `librarians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
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
-- Indexes for table `principles`
--
ALTER TABLE `principles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `racks`
--
ALTER TABLE `racks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_Id`),
  ADD UNIQUE KEY `staff_telenum_unique` (`TeleNum`),
  ADD UNIQUE KEY `staff_email_unique` (`Email`);

--
-- Indexes for table `staff_borrows`
--
ALTER TABLE `staff_borrows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_fines`
--
ALTER TABLE `staff_fines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_borrows`
--
ALTER TABLE `student_borrows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_fines`
--
ALTER TABLE `student_fines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_tables`
--
ALTER TABLE `time_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_staff`
--
ALTER TABLE `user_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_students`
--
ALTER TABLE `user_students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `allusers`
--
ALTER TABLE `allusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `book_requests`
--
ALTER TABLE `book_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `damage_books`
--
ALTER TABLE `damage_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ebooks`
--
ALTER TABLE `ebooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `librarians`
--
ALTER TABLE `librarians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `principles`
--
ALTER TABLE `principles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `racks`
--
ALTER TABLE `racks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_borrows`
--
ALTER TABLE `staff_borrows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `staff_fines`
--
ALTER TABLE `staff_fines`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_borrows`
--
ALTER TABLE `student_borrows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `student_fines`
--
ALTER TABLE `student_fines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `time_tables`
--
ALTER TABLE `time_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_staff`
--
ALTER TABLE `user_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_students`
--
ALTER TABLE `user_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
