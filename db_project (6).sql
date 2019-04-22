-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 04:07 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `aksesoris`
--

CREATE TABLE `aksesoris` (
  `id` int(10) NOT NULL,
  `jenis` varchar(191) NOT NULL,
  `tipe` varchar(191) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `fitur` varchar(191) NOT NULL,
  `harga_sewa` varchar(191) NOT NULL,
  `gambar` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL,
  `remember_token` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aksesoris`
--

INSERT INTO `aksesoris` (`id`, `jenis`, `tipe`, `deskripsi`, `fitur`, `harga_sewa`, `gambar`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'tripod', 'Tripod 3 kaki 4 perpanjangan', 'Tripod yang kokoh dengan 3 kaki dan 4 konfigurasi perpanjangan kaki kakinya.', 'Kuat, bahan aluminium, tahan lama', 'Rp : 200.000  / Hari', '1515680821_tripod.jpg', 'sedang_dipesan', '', '2018-01-11 07:27:01', '2018-01-26 18:35:30'),
(6, 'lighting', 'LED Panel : DISON (21 inch)', 'lighting best seller!!', '- Lightstand, battery v-mount (tahan 3 jam), perlength', 'Rp : 80.000 / Hari', '1516029486_lighting.jpg', 'tersedia', '', '2018-02-10 15:03:41', '2018-01-15 08:38:02'),
(8, 'lighting', 'LED Panel : DISON (21 inch', 'tripod best seller!!', 'Benro A2573FS4 / A2980F-S4', 'Rp : 110.000 / Hari', '1516029503_lighting.jpg', 'tersedia', '', '2018-02-10 15:03:41', '2018-01-15 08:38:11'),
(9, 'microphone', 'Rode', 'The VideoMic GO On-Camera Shotgun Microphone from Rode is a lightweight microphone which adds high-quality audio recording to your small camcorder and HDSLR camera.', 'No battery required\r\nHigh quality directional microphone\r\nIntegrated Rycote Lyre shock mounting\r\nOur lightest mic at only 73g', 'Rp : 500.000 / Hari', '1516030265_rode.jpg', 'kosong', '', '2018-01-15 08:31:05', '2018-01-15 08:31:05'),
(10, 'extra_battery', 'Xiaomi Extra Baterai Kamera for Xiaomi Yi', 'Xiaomi Extra Baterai Kamera merupakan baterai yang kompatibel dengan Action Camera Xiaomi Yi. Baterai cadangan ini menggunakan teknologi baterai Lithium-ion berkapasitas tinggi, yaitu 1010mAh dengan voltase 3.7 V. Baterai ini dapat dipercaya karena berkualitas tinggi.', 'Baterai kamera\r\nTipe baterai : Lithium Ion\r\nKapasitas : 1010 mAh\r\nKompatibel Action Camera Xiaomi Yi\r\nDapat dipercaya karena berkualitas tinggi', 'Rp : 150.000 / Hari', '1516030631_x-battery.jpg', 'tersedia', '', '2018-01-15 08:37:11', '2018-01-15 08:37:11'),
(11, 'memory', 'Sandisk Micro SD Class 10 Memory Card', 'Sandisk Micro SD Class 10 Memory Card [64 GB/No Adaptor] merupakan memory card dengan kapasitas 64 GB serta class 10 yang dapat digunakan untuk pengambilan video dengan kualitas Full HD. Memory Card ini memiliki kecepatan transfer sampai dengan 48MB/s serta memiliki fitur waterproof.', 'Memory Card\r\nKapasitas : 64 GB\r\nClass 10\r\nSpeed : 48 MB/s\r\nMemiliki fitur waterproof', 'Rp : 200.000 / Hari', '1516030940_sd.jpg', 'tersedia', '', '2018-01-15 08:42:20', '2018-01-15 08:42:47');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id_masukkan` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id_masukkan`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(5, 'Subroto Umar', 'subumar@gmail.com', 'Website yang bagus, terus tingkatkan fitur dan jaringan yang ada.', '2018-01-13 21:22:05', '2018-01-13 21:22:05'),
(6, 'Gregori Vidznikov', 'gregorivilain@gmail.com', 'Good Website, helping me to rent a camera with fun ways.', '2018-01-13 21:23:38', '2018-01-13 21:23:38'),
(7, 'Raisa', 'raisahamish@gmail.com', 'Sumber rejeki camera rent membuat aku lebih mudah dalam meminjam perlengkapan fotografi. Terus tingkatkan dengan fitur yang ada.', '2018-01-13 21:25:12', '2018-01-13 21:25:12'),
(8, 'asdasd', 'asdasd@gmail.com', 'asdasdd', '2018-02-07 22:58:10', '2018-02-07 22:58:10');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_admins`
--

CREATE TABLE `daftar_admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_admins`
--

INSERT INTO `daftar_admins` (`id`, `name`, `email`, `password`, `tel`, `level`, `gambar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dika Adji', 'r.dikaadji@gmail.com', '$2y$10$n/vlG0j7ZCR68hJZBrbdi.FHsnCXpFXc.pDxyu4obrdY8uJvJpK22', '082265565378', 'admin', 'admin_dika.jpg', 'J0sR7YhrMByFkDMC23qTxST2Vk9EAhcGWe6aHU9iEZMeaHX3lVpHX2RnvKNM', '2018-01-10 17:10:29', '2018-01-10 17:10:29'),
(2, 'Muhammad Rizky', 'rizky.ajie30@gmail.com', '$2y$10$V269zOYE82GDOWjKvXo.WeHuO8pxIo9UECDktRZRVC2ToVZ/L0wIe', '089653580794', 'admin', 'admin_rizky.jpg', '69RFIACMVJYw98uECLErSogBz1Oq1EENDaNyUXS6y1WUBISDTn0Z9q9Cv7RV', '2018-01-10 17:15:52', '2018-01-10 17:15:52'),
(3, 'monica', 'monica.brill@gmail.com', '$2y$10$ZuUbQPHpcY46rdvlN6SVAOYlim6PJ0D00GbVJbybG4xIuKCLK2TgS', '081453739081', 'admin', 'admin_monica.jpg', '1c0asMNSYwovktH8bV6XNuBHv99E9vkyrGnw8gOiZII5ZZ4G12sSoFqZt07l', '2018-01-10 17:19:07', '2018-01-10 17:19:07'),
(6, 'toli', 'tolicoki@gmail.com', '$2y$10$f8o3R00xU7ZLWZ9BcNSf.uxPrzFonC07H5aUfOXJ6B5y8fbC0NvJq', '0202020', 'operator', '1516659051_uchiha_sasuke.ico', 'F9ZqylKTXIxckkyStxfglTuTxzB7beO5RHmod3aHKp5TlzLBaZbykxyTKkD7', '2018-01-22 15:10:51', '2018-01-22 15:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'kit', '2018-02-10 05:51:10', '2018-02-10 05:51:10'),
(2, 'tripod', '2018-02-10 06:02:42', '2018-02-10 06:02:42'),
(3, 'lighting', '2018-02-10 06:02:55', '2018-02-10 06:02:55'),
(4, 'microphone', '2018-02-10 06:02:59', '2018-02-10 06:02:59'),
(5, 'extra_battery', '2018-02-10 06:03:04', '2018-02-10 06:03:04'),
(6, 'memory', '2018-02-10 06:03:09', '2018-02-10 06:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `kameras`
--

CREATE TABLE `kameras` (
  `id_kamera` int(11) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `fitur` varchar(100) NOT NULL,
  `harga_sewa` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kameras`
--

INSERT INTO `kameras` (`id_kamera`, `merk`, `tipe`, `deskripsi`, `fitur`, `harga_sewa`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(7, 'canon', 'eos5d', 'EOS 5D is a good Camera', '20.1 MP,  Auto Stabilizzer, Fast Shutter, Fast record', 'Rp : 200.000  /  Hari', '1515659556_eos 5d.jpg', 'kosong', '2018-01-11 01:32:36', '2018-01-15 17:09:59'),
(8, 'nikon', 'D5200 Kit', 'Impressive 24.1MP with great image quality and can connect the optional WU-1a Wireless Mobile Adapte', 'DSLR - dengan Lens, 24.1MP; ISO 100 - 6400; 30-1/4000; ISO 100 - 6400', 'Rp : 300.000 /  Hari', '1515676335_nikond5200.jpg', 'tersedia', '2018-01-11 06:12:15', '2018-01-15 16:53:34'),
(9, 'sony', '?7 ILCE-7K Kit', 'Kesempurnaan pada desain dan berat yang ringan membuat kamera full frame ini popular di pasar.', 'MirrorLess; 24.30 MP; ISO 100-25600; Ringan, Body kompak', 'Rp : 400.000 /hari', '1515678338_sonya7.jpg', 'tersedia', '2018-01-11 06:45:38', '2018-01-15 06:56:21'),
(11, 'goPro', 'HERO6 Black', 'GoPro HERO6 berlayar 2" dibenami GP1 chip mengahsilkan 2x kualitas gambar lebih baik daripada HERO5,', '2" display; Slow-Mo Pro; Water Resist Up to 10m; Voice Command; Image Stabilization', 'Rp : 500.000/hari', '1515678915_gopro6.jpg', 'tersedia', '2018-01-11 06:55:15', '2018-01-15 06:56:11'),
(12, 'canon', 'Powershot sx430 kit', 'Improved autofocus with a 9-point, all cross-type AF system (including high-precision dual-cross f/2', 'Body type	Large sensor compact\r\nMax resolution	6000 x 4000\r\nEffective pixels	24 megapixels\r\nSensor s', 'Rp : 500.000 / hari', '1516026073_canonsx.jpg', 'kosong', '2018-01-15 06:13:22', '2018-01-15 16:27:37'),
(13, 'sony', 'b6 ILCE-7K', 'Kesempurnaan pada desain dan berat yang ringan membuat kamera full frame ini popular di pasar. serta', 'MirrorLess; 27.30 MP; ISO 100-25600; Ringan, Body kompak', 'Rp : 400.000 /hari', '1516026273_Untitled-1.jpg', 'kosong', '2018-02-10 14:59:02', '2018-01-15 16:27:57'),
(14, 'sony', 'C12 ILCE-7K Kit', 'Kesempurnaan pada desain dan berat yang ringan membuat kamera full frame ini popular di pasar. Terma', 'MirrorLess; 27.30 MP; ISO 100-25600; Ringan, Body kompak', 'Rp : 480.000 /  Hari', '1516026484_alpha7.jpg', 'tersedia', '2018-02-10 14:59:02', '2018-01-15 07:28:04'),
(15, 'sony', 'a9 VERO-7K', 'Termasuk dalam keluarga sony alpha yang terkenal akan ketangguhan dan performanya.', 'MirrorLess; 27.30 MP; ISO 100-25600; Ringan, Body kompak', 'Rp : 500.000 /  Hari', '1516026733_sony9.jpg', 'tersedia', '2018-02-10 14:59:02', '2018-01-15 16:29:10'),
(19, 'samsung', 'NX300M', 'The ultra-sensitive sensor has the highest resolution and is the largest in its class—so it collects', 'Dual-band supported Wi-Fi, Tilt display, NX300’s image processor', 'Rp : 400.000 / Hari', '1516027258_samsungnx300.jpg', 'kosong', '2018-01-15 07:40:58', '2018-01-15 07:40:58'),
(20, 'canon', 'Canon EF 16-35mm f/2.8 L II USM45', 'canon cyber shot with ultra graphic theoritum,\r\nmax 2 lens for calibrating \r\nhigh iso', 'water resistance', 'Rp : 300.000 /  Hari', '1517016596_canon1.jpg', 'sedang_dipesan', '2018-01-26 18:29:56', '2018-01-26 18:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `lensas`
--

CREATE TABLE `lensas` (
  `id_lensa` int(11) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `fitur` varchar(500) NOT NULL,
  `harga_sewa` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lensas`
--

INSERT INTO `lensas` (`id_lensa`, `merk`, `tipe`, `deskripsi`, `fitur`, `harga_sewa`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(10, 'sony', 'SAL 35MM F1.4 G', 'lensa sony keluaran 2017 dengan 5.4 sr exclusive lensa', 'Aperture Range: f/1.4-22\r\nFor Alpha & Minolta Maxxum Series\r\nAspherical Glass Lens Elements\r\nMinimum Focus Distance: 1.0''\r\nGaransi 1 Tahun (Sony Indonesia)', 'Rp : 350.000 / Hari', '1516027789_lensa_sony.jpg', 'kosong', NULL, '2018-01-28 20:09:57'),
(11, 'nikon', 'DAL 35MM F1.4 G', 'lensa Nikon keluaran 2017 dengan 5.4 sr exclusive lensa', 'Aperture Range: f/1.4-22\r\nFor Alpha & Minolta Maxxum Series\r\nAspherical Glass Lens Elements\r\nMinimum Focus Distance: 1.0''\r\nGaransi 1 Tahun (Sony Indonesia)', 'Rp : 300.000 / Hari', '1516027689_nikonlens.jpg', 'tersedia', NULL, '2018-01-15 16:35:08'),
(12, 'canon', 'Fix 50 mm', 'Lensa ini memiliki keunggulan lainnya yaitu memiliki motor fokus USM yang cepat. Anda bisa memasangkan filter dengan ukuran diameter 58mm di lensa ini, selain itu lensa ini memiliki jarak minimum fokus di titik sejauh 45cm.', 'EF Mount Lens/Full-Frame Format, Maximum Aperture: f/1.8, Optimized Lens Coatings, STM AF Motor Supports Movie Servo AF', 'Rp : 300.000 / Hari', '1516028151_canonlens.jpg', 'tersedia', '2018-01-15 07:55:51', '2018-01-15 07:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id_merk` int(11) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id_merk`, `merk`, `created_at`, `updated_at`) VALUES
(1, 'bloofing', '2018-02-10 05:48:56', '2018-02-10 05:48:56'),
(2, 'canon', '2018-02-10 05:58:42', '2018-02-10 05:58:42'),
(3, 'nikon', '2018-02-10 05:58:50', '2018-02-10 05:58:50'),
(4, 'samsung', '2018-02-10 05:58:57', '2018-02-10 05:58:57'),
(5, 'sony', '2018-02-10 05:59:04', '2018-02-10 05:59:04'),
(6, 'gopro', '2018-02-10 05:59:11', '2018-02-10 05:59:11'),
(7, 'tripod', '2018-02-10 05:59:49', '2018-02-10 05:59:49'),
(8, 'lighting', '2018-02-10 05:59:53', '2018-02-10 05:59:53'),
(9, 'microphone', '2018-02-10 05:59:58', '2018-02-10 05:59:58'),
(10, 'extra_battery', '2018-02-10 06:00:03', '2018-02-10 06:00:03'),
(11, 'memory', '2018-02-10 06:00:10', '2018-02-10 06:00:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_12_30_080625_create_daftars_table', 1),
(2, '2018_01_01_104954_create_admins_table', 2),
(3, '2018_01_09_143336_create_kameras_table', 3),
(4, '2018_01_10_053839_create_aksesoris_table', 4),
(5, '2018_01_12_010319_create_contacts_table', 5),
(7, '2018_01_12_031656_create_whistlists_table', 6),
(8, '2018_01_12_084703_create_momons_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `request` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id_wishlist`, `nama`, `email`, `telepon`, `request`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'purnomo', 'purnomo.tamvandihati@gmail.com', '099887876564', 'Sonny Alpha', 'Mantab', '2018-01-14 18:01:47', '2018-01-14 18:01:47'),
(3, 'purnomolwe', 'purnomo.tamvandihatieee@gmail.com', '09988787656422', 'Sonny Alucard', 'Mantabbb', '2018-01-14 18:02:37', '2018-01-14 18:02:37'),
(4, 'adad', 'coba2@gmail.com3', '23123123', 'life steal', 'dot dot', '2018-01-14 18:03:47', '2018-01-14 18:03:47'),
(5, 'prabowo', 'prabo@gmail.com', '0202020200202', 'lesley', 'lifesteal , blade of despair , swallow', '2018-01-14 18:22:36', '2018-01-14 18:22:36'),
(6, 'prabowo23', 'prabo@gmail.com23', '020202020020223', 'lesley23', 'lifesteal , blade of despair , swallow23', '2018-01-14 18:25:18', '2018-01-14 18:25:18'),
(8, 'lakilaki', 'laki@gmail.com', '0292929292', 'akai', 'akai', '2018-01-14 18:31:21', '2018-01-14 18:31:21'),
(19, 'coba', 'coba2@gmail.com', '089889877656', 'coba', 'cobaaa', '2018-01-14 19:20:38', '2018-01-14 19:20:38'),
(20, 'Gatot', 'gatotpurnomoaji@gmail.com', '089653580794', 'Go Pro Hero 6', 'Action cam terbaru dari Go Pro', '2018-01-15 16:55:46', '2018-01-15 16:55:46'),
(26, 'coba', 'cobadwawda2@gmail.com', '1233435', 'awda', 'adwdawd', '2018-01-18 20:49:38', '2018-01-18 20:49:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aksesoris`
--
ALTER TABLE `aksesoris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis` (`jenis`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id_masukkan`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `daftar_admins`
--
ALTER TABLE `daftar_admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `daftar_users_email_unique` (`email`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`),
  ADD KEY `jenis` (`jenis`);

--
-- Indexes for table `kameras`
--
ALTER TABLE `kameras`
  ADD PRIMARY KEY (`id_kamera`),
  ADD KEY `merk` (`merk`);

--
-- Indexes for table `lensas`
--
ALTER TABLE `lensas`
  ADD PRIMARY KEY (`id_lensa`),
  ADD KEY `merk` (`merk`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id_merk`),
  ADD KEY `merk` (`merk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wishlist`),
  ADD UNIQUE KEY `whistlists_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aksesoris`
--
ALTER TABLE `aksesoris`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id_masukkan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `daftar_admins`
--
ALTER TABLE `daftar_admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kameras`
--
ALTER TABLE `kameras`
  MODIFY `id_kamera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `lensas`
--
ALTER TABLE `lensas`
  MODIFY `id_lensa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id_wishlist` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `aksesoris`
--
ALTER TABLE `aksesoris`
  ADD CONSTRAINT `aksesoris_ibfk_1` FOREIGN KEY (`jenis`) REFERENCES `jenis` (`jenis`);

--
-- Constraints for table `kameras`
--
ALTER TABLE `kameras`
  ADD CONSTRAINT `kameras_ibfk_1` FOREIGN KEY (`merk`) REFERENCES `merk` (`merk`);

--
-- Constraints for table `lensas`
--
ALTER TABLE `lensas`
  ADD CONSTRAINT `lensas_ibfk_1` FOREIGN KEY (`merk`) REFERENCES `merk` (`merk`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
