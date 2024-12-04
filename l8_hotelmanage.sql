-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2024 at 04:57 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l8_hotelmanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `banner_src` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_src`, `alt_text`, `publish_status`, `created_at`, `updated_at`) VALUES
(4, 'public/imgs/h0NWXqVN8pdzeNSJhXYp2pvhex0NruaSu96An8SB.svg', '1', 'on', '2024-11-30 04:00:49', '2024-11-30 04:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint UNSIGNED NOT NULL,
  `customer_id` int NOT NULL,
  `room_id` int NOT NULL,
  `checkin_date` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout_date` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_adults` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_children` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `customer_id`, `room_id`, `checkin_date`, `checkout_date`, `total_adults`, `total_children`, `ref`, `created_at`, `updated_at`) VALUES
(2, 5, 2, '2024-11-30', '2024-12-03', '2', '0', 'admin', '2024-11-30 03:30:23', '2024-11-30 03:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `password`, `mobile`, `address`, `photo`, `created_at`, `updated_at`) VALUES
(5, 'ahyar', 'ahyar@gmail.com', '6e4db8acdd56a92db66dfb8966ffa58513015fce', '085783554819', 'Bangi Sri Agung, RT 01/RW 07, Ds. Aji Kagungan, Kec. Abung Kunang, Kab. Lampung Utara, Lampung', NULL, '2024-11-29 21:47:42', '2024-11-29 21:47:42'),
(6, 'budi', 'budi@gmail.com', '83161a62f22277c65a6cdb7ebc314f218c376c63', '085783554819', 'Bangi Sri Agung, RT 01/RW 07, Ds. Aji Kagungan, Kec. Abung Kunang, Kab. Lampung Utara, Lampung', NULL, '2024-11-29 23:50:12', '2024-11-29 23:50:12'),
(7, 'gilang', 'gilang@gmail.com', 'e239aca6e941135937208eb840dc38108d86be3b', '12345677', 'bandar lampung', NULL, '2024-12-01 00:39:56', '2024-12-01 00:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'HouseKeeping', 'HouseKeeping Detail', '2021-08-15 04:29:31', '2021-08-15 04:29:31'),
(2, 'Shift Managers', 'Shift Managers Detail', '2021-08-15 04:30:02', '2021-08-15 04:30:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_22_181853_create_room_types_table', 1),
(5, '2021_07_22_182302_create_rooms_table', 2),
(6, '2021_07_22_182755_add_room_type_id_to_rooms_table', 3),
(7, '2021_07_29_154439_create_customers_table', 4),
(8, '2021_07_29_165100_add_price_to_room_types_table', 5),
(9, '2021_08_01_163509_create_admins_table', 6),
(10, '2021_08_05_031451_create_roomtypeimages_table', 7),
(11, '2021_08_05_033838_create_roomtypeimages_table', 8),
(12, '2021_08_15_090054_create_departments_table', 9),
(13, '2021_08_15_094608_create_staff_table', 10),
(14, '2021_08_19_034453_create_staff_payments_table', 11),
(15, '2021_08_30_192906_create_bookings_table', 12),
(16, '2021_10_29_033215_create_services_table', 13),
(17, '2021_10_31_083320_create_testimonials_table', 14),
(18, '2021_11_12_180726_create_banners_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `room_type_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `title`, `created_at`, `updated_at`, `room_type_id`) VALUES
(1, 'Room 2', '2021-09-02 12:02:22', '2024-12-01 00:46:02', 1),
(2, 'Room 2', '2021-09-02 12:02:40', '2021-09-02 12:02:40', 2),
(3, 'Room 3', '2021-09-13 12:21:02', '2024-11-30 22:02:08', 22),
(4, 'Room 4', '2024-11-30 08:17:42', '2024-11-30 08:18:24', 23),
(5, 'Room 5', '2024-11-30 22:01:19', '2024-11-30 22:01:19', 24),
(6, 'Room 6', '2024-11-30 22:01:34', '2024-11-30 22:01:34', 25);

-- --------------------------------------------------------

--
-- Table structure for table `roomtypeimages`
--

CREATE TABLE `roomtypeimages` (
  `id` bigint UNSIGNED NOT NULL,
  `room_type_id` int NOT NULL,
  `img_src` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_alt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roomtypeimages`
--

INSERT INTO `roomtypeimages` (`id`, `room_type_id`, `img_src`, `img_alt`, `created_at`, `updated_at`) VALUES
(23, 21, 'public/imgs/vD5L0IlIU4sztSucrQIEq0FmEY8yeJQsJEjurKPn.jpg', 'Sweet Room', '2021-08-09 12:08:37', '2021-08-09 12:08:37'),
(31, 2, 'public/imgs/SutT7FcyCmFTJZUaj4TEcBoJgqnnPqj4vKFL82Gk.svg', 'Premium Rooms', '2024-11-30 08:12:34', '2024-11-30 08:12:34'),
(32, 2, 'public/imgs/jxdZ860aMaRy0TgcJmGaizoSKP8NO9BsVVsfWTPX.svg', 'Premium Rooms', '2024-11-30 08:12:34', '2024-11-30 08:12:34'),
(33, 2, 'public/imgs/rnxKCTS7XHWavJn8wE7kSk5sCrQz1MVFr1QVfB0R.svg', 'Premium Rooms', '2024-11-30 08:12:34', '2024-11-30 08:12:34'),
(35, 1, 'public/imgs/szEtQqUkYzhU1CdePTbUVsWoRjQVQnWzCGA0espi.svg', 'Deluxe Rooms', '2024-11-30 08:13:15', '2024-11-30 08:13:15'),
(36, 1, 'public/imgs/RvqK8jPedwXuqnMRTZltdKNvsGhnI2Q0eFfhFY5I.svg', 'Deluxe Rooms', '2024-11-30 08:13:15', '2024-11-30 08:13:15'),
(39, 22, 'public/imgs/DKRpXXQmt6zEOwnxYyqj9rl3KzNbMY5ZdfiMQmdU.svg', 'Sweet Room', '2024-11-30 08:13:37', '2024-11-30 08:13:37'),
(43, 24, 'public/imgs/D1pzsh1c5lt2LP3pBjhVjVJjqQyK7035JgWHqZNr.svg', 'aaacac', '2024-11-30 21:23:30', '2024-11-30 21:23:30'),
(44, 25, 'public/imgs/19l763q5Ady4oKPyL0sf9ZkjKTfzbQU0NqFTAsn1.svg', 'aa', '2024-11-30 21:24:20', '2024-11-30 21:24:20'),
(45, 23, 'public/imgs/3ZpTrteBjieEUdZpW6GzX5FOUsh4W64aAzk0Ehxf.svg', 'Normal Room', '2024-11-30 21:25:21', '2024-11-30 21:25:21'),
(46, 26, 'public/imgs/2Ja7H8iGkBrDqOSwsOIgx3gHb5BJqA79KFICCirh.jpg', 'ytydr', '2024-12-01 00:43:58', '2024-12-01 00:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`id`, `title`, `detail`, `created_at`, `updated_at`, `price`) VALUES
(1, 'Presidential Room', 'Kamar paling eksklusif di hotel ini. Dilengkapi dengan ruang tamu, ruang makan, dapur kecil, dan kamar mandi mewah dengan jacuzzi. Sangat cocok untuk tamu VIP.\r\nFasilitas: Balkon pribadi, TV LED 55 inci, layanan pribadi, akses eksklusif ke lounge.', '2021-07-28 11:37:11', '2024-11-30 21:31:30', '3000000'),
(2, 'Premium Rooms', 'Premium Rooms', '2021-07-28 11:37:20', '2024-11-30 21:15:43', '2000000'),
(22, 'Sweet Room', 'Sweet Room', '2021-08-09 12:26:18', '2024-11-30 21:15:53', '1500000'),
(23, 'Suite Room', 'Normall room', '2024-11-30 08:14:53', '2024-11-30 21:38:16', '1250000'),
(24, 'Family Room', '-', '2024-11-30 21:23:29', '2024-11-30 21:37:52', '1000000'),
(25, 'Single Room', '-', '2024-11-30 21:24:20', '2024-11-30 21:37:29', '500000');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `small_desc`, `detail_desc`, `photo`, `created_at`, `updated_at`) VALUES
(2, 'Gym', '-', '-', 'public/imgs/ytoKw7cEYEtjklOlrMWbhJQaoARdQkAUaABJUJnY.svg', '2021-10-29 12:08:45', '2024-11-30 20:35:12'),
(4, 'Wifi', '-', '-', 'public/imgs/mlDAAdMj6ueFuJcCzz3L4iApPdQEv8RqluNbKSc9.svg', '2024-11-30 18:08:41', '2024-11-30 20:35:50'),
(5, 'Swimming Pool', 'Swimming', 'Swimming Poolll', 'public/imgs/Am25EAL7nGVo8dFdfAzRamFfuOoKY46UEKUBFWfC.svg', '2024-11-30 18:11:29', '2024-11-30 20:14:09'),
(6, 'Parking Space', '-', '-', 'public/imgs/awSyiR8hjkPExBkh25BOXiA59kuNYjyJuFJeaSlf.svg', '2024-11-30 18:12:25', '2024-11-30 20:37:16'),
(7, 'Game Center', '-', '-', 'public/imgs/vWztMnOwK00xYtpX9WoQMkjAvxOglin1gVAaNemC.svg', '2024-11-30 20:19:53', '2024-11-30 20:37:45'),
(8, '24/7 Light', '-', '-', 'public/imgs/QZD33g0OQ2ZtZCgWJ3Vqvu1ko9tPjw194oyD7hYI.svg', '2024-11-30 20:20:13', '2024-11-30 20:38:16'),
(9, 'Laundry', '-', '-', 'public/imgs/Ls6vZPEuoFN9FJYumSI3E1gsTtLWEleeJulCqADp.svg', '2024-11-30 20:20:30', '2024-11-30 20:38:53'),
(10, 'Breakfast', '-', '-', 'public/imgs/5FKoWea39LWPkssxTOFtKOg0e16kk6uI9SzTpNYN.svg', '2024-11-30 20:21:50', '2024-11-30 20:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int NOT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_amt` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `full_name`, `department_id`, `photo`, `bio`, `salary_type`, `salary_amt`, `created_at`, `updated_at`) VALUES
(1, 'Alex Lee', 1, 'public/imgs/zIgkPJneI4uz5q4B0iKqrUByUciq4123dBTRrDev.jpg', 'This is some bio detail', 'monthly', '5000', '2021-08-15 04:34:28', '2021-08-29 02:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `staff_payments`
--

CREATE TABLE `staff_payments` (
  `id` bigint UNSIGNED NOT NULL,
  `staff_id` int NOT NULL,
  `amount` int NOT NULL,
  `payment_date` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `customer_id` int NOT NULL,
  `testi_cont` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `customer_id`, `testi_cont`, `created_at`, `updated_at`) VALUES
(4, 6, '\"Layanan di hotel ini luar biasa! Kamarnya sangat nyaman, bersih, dan fasilitasnya lengkap. Stafnya ramah, membuat saya merasa seperti di rumah sendiri. Saya pasti akan kembali lagi!\"', '2024-11-30 21:26:51', '2024-11-30 21:26:51'),
(5, 6, '\"Hotel ini memberikan pengalaman menginap yang luar biasa. Kolam renangnya bersih, makanannya lezat, dan koneksi WiFi sangat cepat. Sangat direkomendasikan untuk semua traveler!\"', '2024-11-30 21:27:26', '2024-11-30 21:27:26'),
(6, 6, '\"Saya sangat terkesan dengan kebersihan dan kenyamanan kamar. Gym dan fasilitas lainnya sangat memadai. Harga yang ditawarkan sangat sebanding dengan kualitasnya.\"', '2024-11-30 21:27:37', '2024-11-30 21:27:37'),
(7, 6, '\"Pelayanan di sini benar-benar luar biasa! Lokasinya strategis, sarapannya enak, dan stafnya selalu siap membantu. Terima kasih atas pengalaman yang menyenangkan!\"', '2024-11-30 21:27:45', '2024-11-30 21:27:45'),
(8, 6, '\"Hotel ini sangat cocok untuk liburan bersama keluarga. Anak-anak saya sangat menikmati game center dan kolam renang. Kami pasti akan kembali lagi ke sini!\"', '2024-11-30 21:27:53', '2024-11-30 21:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomtypeimages`
--
ALTER TABLE `roomtypeimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_payments`
--
ALTER TABLE `staff_payments`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roomtypeimages`
--
ALTER TABLE `roomtypeimages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_payments`
--
ALTER TABLE `staff_payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
