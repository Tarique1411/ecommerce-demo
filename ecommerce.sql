-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 10:50 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_image` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'iphone', '1605440423.jpg', 1, '2020-11-15 12:40:23', '2020-10-10 22:51:13'),
(2, 'Samsung', '1602354022.png', 1, '2020-10-10 18:20:22', '2020-10-10 23:38:13'),
(3, 'Google', '1602353316.png', 1, '2020-10-10 18:08:36', '2020-10-10 23:38:36'),
(4, 'Sony', '1602353341.jpg', 1, '2020-10-10 18:09:01', '2020-10-10 23:39:01'),
(5, 'Nokia', '1602354350.png', 1, '2020-10-10 18:25:50', '2020-10-10 23:50:22'),
(6, 'Vivo', '1602354383.jpg', 0, '2020-10-10 18:26:23', '2020-10-10 23:56:23'),
(7, 'OnePlus', '1602688287.jpg', 1, '2020-10-14 15:11:27', '2020-10-14 20:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compare`
--

CREATE TABLE `compare` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pdt_id` int(11) NOT NULL,
  `pdt_qty` int(11) NOT NULL,
  `pdt_name` varchar(255) NOT NULL,
  `pdt_image` varchar(255) NOT NULL,
  `pdt_cost` varchar(255) NOT NULL,
  `pdt_specification` text NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compare`
--

INSERT INTO `compare` (`id`, `user_id`, `pdt_id`, `pdt_qty`, `pdt_name`, `pdt_image`, `pdt_cost`, `pdt_specification`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-29 06:37:49', '2020-10-29 12:07:49'),
(2, 1, 5, 1, 'Apple AirPods with Wireless Charging Case', '1602477963.jpg', '16499', 'About	Manufacturer	Apple\nOfficial Name	Apple AirPods 1, Apple AirPods (1st generation)\nType	Wireless Headphones\nForm-factor	Earbuds\nLaunch	Introduced	September 7, 2016\nReleased	December 13, 2016\nBody	Dimensions	AirPods (each): 0.65 x 0.71 x 1.59 inc', 0, '2020-10-29 06:38:01', '2020-10-29 12:08:01'),
(3, 1, 4, 1, 'Apple iPhone 11 64GB - Product RED', '1602477505.jpg', '61990', 'iPhone 11 Full Specifications\nGeneral\nBrand	Apple\nModel	iPhone 11\nRelease date	10th September 2019\nLaunched in India	Yes\nForm factor	Touchscreen\nBody type	Glass\nDimensions (mm)	150.90 x 75.70 x 8.30\nWeight (g)	194.00\nIP rating	IP68\nBattery capa', 0, '2020-10-29 06:38:05', '2020-10-29 12:08:05'),
(4, 1, 3, 1, 'Apple iPhone XR 64GB - Black', '1602477176.jpg', '47500', 'Apple iPhone XR Full Specifications\nGeneral\nBrand	Apple\nModel	iPhone XR\nRelease date	September 2018\nLaunched in India	Yes\nForm factor	Touchscreen\nDimensions (mm)	150.90 x 75.70 x 8.30\nWeight (g)	194.00\nIP rating	IP67\nBattery capacity (mAh)	2942\n', 0, '2020-10-29 06:49:38', '2020-10-29 12:19:38'),
(5, 1, 4, 1, 'Apple iPhone 11 64GB - Product RED', '1602477505.jpg', '61990', 'iPhone 11 Full Specifications\nGeneral\nBrand	Apple\nModel	iPhone 11\nRelease date	10th September 2019\nLaunched in India	Yes\nForm factor	Touchscreen\nBody type	Glass\nDimensions (mm)	150.90 x 75.70 x 8.30\nWeight (g)	194.00\nIP rating	IP68\nBattery capa', 0, '2020-10-29 06:49:57', '2020-10-29 12:19:57'),
(6, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-29 06:52:47', '2020-10-29 12:22:47'),
(7, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-29 06:54:05', '2020-10-29 12:24:05'),
(8, 1, 2, 1, 'Apple iPhone 11 Pro 64GB - Space Grey', '1602476424.jpg', '96990', 'ALL VERSIONS A2215A2160A2217\nVersions:\nA2215 (Global market)\nA2160 (USA, Canada, Puerto Rico, U.S. Virgin Islands)\nA2217 (China, Hong Kong)\n\nNETWORK	Technology	\nGSM / CDMA / HSPA / EVDO / LTE\nLAUNCH	Announced	2019, September 10\nStatus	Available. ', 0, '2020-10-29 06:54:54', '2020-10-29 12:24:54'),
(9, 1, 3, 1, 'Apple iPhone XR 64GB - Black', '1602477176.jpg', '47500', 'Apple iPhone XR Full Specifications\nGeneral\nBrand	Apple\nModel	iPhone XR\nRelease date	September 2018\nLaunched in India	Yes\nForm factor	Touchscreen\nDimensions (mm)	150.90 x 75.70 x 8.30\nWeight (g)	194.00\nIP rating	IP67\nBattery capacity (mAh)	2942\n', 0, '2020-10-29 14:59:00', '2020-10-29 20:29:00'),
(10, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-29 15:12:15', '2020-10-29 20:42:15'),
(11, 1, 5, 1, 'Apple AirPods with Wireless Charging Case', '1602477963.jpg', '16499', 'About	Manufacturer	Apple\nOfficial Name	Apple AirPods 1, Apple AirPods (1st generation)\nType	Wireless Headphones\nForm-factor	Earbuds\nLaunch	Introduced	September 7, 2016\nReleased	December 13, 2016\nBody	Dimensions	AirPods (each): 0.65 x 0.71 x 1.59 inc', 0, '2020-10-29 15:24:39', '2020-10-29 20:54:39'),
(12, 1, 2, 1, 'Apple iPhone 11 Pro 64GB - Space Grey', '1602476424.jpg', '96990', 'ALL VERSIONS A2215A2160A2217\nVersions:\nA2215 (Global market)\nA2160 (USA, Canada, Puerto Rico, U.S. Virgin Islands)\nA2217 (China, Hong Kong)\n\nNETWORK	Technology	\nGSM / CDMA / HSPA / EVDO / LTE\nLAUNCH	Announced	2019, September 10\nStatus	Available. ', 0, '2020-10-29 15:25:03', '2020-10-29 20:55:03'),
(13, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-29 18:00:21', '2020-10-29 23:30:21'),
(14, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-29 18:00:55', '2020-10-29 23:30:55'),
(15, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-29 18:01:09', '2020-10-29 23:31:09'),
(16, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-30 01:44:19', '2020-10-30 07:14:19'),
(17, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-30 01:44:24', '2020-10-30 07:14:24'),
(18, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-30 01:45:08', '2020-10-30 07:15:08'),
(19, 1, 5, 1, 'Apple AirPods with Wireless Charging Case', '1602477963.jpg', '16499', 'About	Manufacturer	Apple\nOfficial Name	Apple AirPods 1, Apple AirPods (1st generation)\nType	Wireless Headphones\nForm-factor	Earbuds\nLaunch	Introduced	September 7, 2016\nReleased	December 13, 2016\nBody	Dimensions	AirPods (each): 0.65 x 0.71 x 1.59 inc', 0, '2020-10-30 01:46:00', '2020-10-30 07:16:00'),
(20, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-30 01:49:59', '2020-10-30 07:19:59'),
(21, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-30 01:50:12', '2020-10-30 07:20:12'),
(22, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-30 01:50:29', '2020-10-30 07:20:29'),
(23, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-30 01:50:58', '2020-10-30 07:20:58'),
(24, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-30 01:52:01', '2020-10-30 07:22:01'),
(25, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-30 01:53:13', '2020-10-30 07:23:13'),
(26, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-30 01:53:48', '2020-10-30 07:23:48'),
(27, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-30 01:54:35', '2020-10-30 07:24:35'),
(28, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-10-30 02:02:10', '2020-10-30 07:32:10'),
(29, 1, 5, 1, 'Apple AirPods with Wireless Charging Case', '1602477963.jpg', '16499', 'About	Manufacturer	Apple\nOfficial Name	Apple AirPods 1, Apple AirPods (1st generation)\nType	Wireless Headphones\nForm-factor	Earbuds\nLaunch	Introduced	September 7, 2016\nReleased	December 13, 2016\nBody	Dimensions	AirPods (each): 0.65 x 0.71 x 1.59 inc', 0, '2020-10-30 02:02:13', '2020-10-30 07:32:13'),
(30, 1, 2, 1, 'Apple iPhone 11 Pro 64GB - Space Grey', '1602476424.jpg', '96990', 'ALL VERSIONS A2215A2160A2217\nVersions:\nA2215 (Global market)\nA2160 (USA, Canada, Puerto Rico, U.S. Virgin Islands)\nA2217 (China, Hong Kong)\n\nNETWORK	Technology	\nGSM / CDMA / HSPA / EVDO / LTE\nLAUNCH	Announced	2019, September 10\nStatus	Available. ', 0, '2020-10-30 02:03:29', '2020-10-30 07:33:29'),
(31, 1, 22, 1, 'Nokia 5.1 Plus Black 32 GB 3 GB RAM', '1602488083.jpg', '12999.00', 'Nokia 5.1 Plus Full Specifications\nGeneral\nBrand	Nokia\nModel	5.1 Plus\nRelease date	August 2018\nLaunched in India	Yes\nForm factor	Touchscreen\nDimensions (mm)	149.51 x 71.98 x 8.10\nWeight (g)	160.00\nBattery capacity (mAh)	3060\nRemovable battery	No', 0, '2020-10-30 02:13:15', '2020-10-30 07:43:15'),
(32, 1, 21, 1, 'Nokia 2.3 Android 10 Smartphone 2GB RAM, 32GB Storage, Dual Rear Camera, Cyan Green', '1602487828.jpg', '8999.00 ', 'Nokia 2.3 Full Specifications\nGeneral\nBrand	Nokia\nModel	2.3\nRelease date	5th December 2019\nForm factor	Touchscreen\nBody type	Plastic\nDimensions (mm)	157.69 x 75.41 x 8.68\nWeight (g)	183.00\nBattery capacity (mAh)	4000\nRemovable battery	No\nColour', 0, '2020-10-30 02:17:06', '2020-10-30 07:47:06'),
(33, 1, 5, 1, 'Apple AirPods with Wireless Charging Case', '1602477963.jpg', '16499', 'About	Manufacturer	Apple\nOfficial Name	Apple AirPods 1, Apple AirPods (1st generation)\nType	Wireless Headphones\nForm-factor	Earbuds\nLaunch	Introduced	September 7, 2016\nReleased	December 13, 2016\nBody	Dimensions	AirPods (each): 0.65 x 0.71 x 1.59 inc', 0, '2020-11-02 02:42:12', '2020-11-02 07:12:12'),
(34, 1, 3, 1, 'Apple iPhone XR 64GB - Black', '1602477176.jpg', '47500', 'Apple iPhone XR Full Specifications\nGeneral\nBrand	Apple\nModel	iPhone XR\nRelease date	September 2018\nLaunched in India	Yes\nForm factor	Touchscreen\nDimensions (mm)	150.90 x 75.70 x 8.30\nWeight (g)	194.00\nIP rating	IP67\nBattery capacity (mAh)	2942\n', 0, '2020-11-02 02:42:16', '2020-11-02 07:12:16'),
(35, 1, 3, 1, 'Apple iPhone XR 64GB - Black', '1602477176.jpg', '47500', 'Apple iPhone XR Full Specifications\nGeneral\nBrand	Apple\nModel	iPhone XR\nRelease date	September 2018\nLaunched in India	Yes\nForm factor	Touchscreen\nDimensions (mm)	150.90 x 75.70 x 8.30\nWeight (g)	194.00\nIP rating	IP67\nBattery capacity (mAh)	2942\n', 0, '2020-11-02 02:42:20', '2020-11-02 07:12:20'),
(36, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-11-02 02:42:38', '2020-11-02 07:12:38'),
(37, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-11-04 09:18:35', '2020-11-04 13:48:35'),
(38, 1, 4, 1, 'Apple iPhone 11 64GB - Product RED', '1602477505.jpg', '61990', 'iPhone 11 Full Specifications\nGeneral\nBrand	Apple\nModel	iPhone 11\nRelease date	10th September 2019\nLaunched in India	Yes\nForm factor	Touchscreen\nBody type	Glass\nDimensions (mm)	150.90 x 75.70 x 8.30\nWeight (g)	194.00\nIP rating	IP68\nBattery capa', 0, '2020-11-04 09:18:39', '2020-11-04 13:48:39'),
(39, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 0, '2020-11-04 14:11:34', '2020-11-04 18:41:34'),
(40, 1, 23, 1, 'One Plus 8-Pro', '1602688828.jpg', '59999', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', 1, '2020-11-05 15:44:21', '2020-11-05 14:44:21'),
(41, 1, 5, 1, 'Apple AirPods with Wireless Charging Case', '1602477963.jpg', '16499', 'About	Manufacturer	Apple\nOfficial Name	Apple AirPods 1, Apple AirPods (1st generation)\nType	Wireless Headphones\nForm-factor	Earbuds\nLaunch	Introduced	September 7, 2016\nReleased	December 13, 2016\nBody	Dimensions	AirPods (each): 0.65 x 0.71 x 1.59 inc', 1, '2020-11-05 15:44:25', '2020-11-05 14:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `addressline1` varchar(255) NOT NULL,
  `addressline2` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `phone`, `addressline1`, `addressline2`, `city`, `state`, `zipcode`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'nadeem', 'raza', 'nadimraza80@gmail.com', '9798697038', 'Friends Colony, Bye pass road', 'Bhuli, Dhanbad', 'Dhanbad', 'Jharkhand', '826001', 1, '2020-10-17 00:00:00', '2020-10-17 10:00:01'),
(2, 'Tarique', 'Anwar', 'srahman39@gmail.com', '08987578286', 'Friends Colony, Bye pass road', 'Bhuli, Dhanbad', 'Dhanbad', 'Jharkhand', '828130', 1, '2020-10-17 00:00:00', '2020-10-17 21:47:15'),
(3, 'Tarique', 'Anwar', 'srahman39@gmail.com', '08987578286', 'Friends Colony, Bye pass road', 'Bhuli, Dhanbad', 'Dhanbad', 'Jharkhand', '828130', 1, '2020-10-17 00:00:00', '2020-10-17 21:52:54'),
(4, 'Tarique', 'Anwar', 'srahman39@gmail.com', '7979773914', 'B-65 sector 63', 'noida-63', 'noida', 'up', '201307', 1, '2020-10-17 00:00:00', '2020-10-17 21:53:37'),
(5, 'Tarique', 'Anwar', 'srahman39@gmail.com', '07979773914', 'balaji,pg,behind fortis', 'noida-63', 'noida', 'up', '201301', 1, '2020-10-17 00:00:00', '2020-10-17 21:56:36'),
(6, 'Tarique', 'Anwar', 'srahman39@gmail.com', '08987578286', 'Friends Colony, Bye pass road', 'Bhuli, Dhanbad', 'Dhanbad', 'Jharkhand', '828130', 1, '2020-10-17 00:00:00', '2020-10-17 22:07:37'),
(7, 'nadeem', 'raza', 'nadimraza80@gmail.com', '09798697038', 'Friends Colony, Bye pass road', 'Bhuli, Dhanbad', 'Dhanbad', 'Jharkhand', '826001', 1, '2020-10-17 00:00:00', '2020-10-17 22:09:48'),
(8, 'Tarique', 'Anwar', 'srahman39@gmail.com', '07979773914', 'balaji,pg,behind fortis', 'noida-63', 'noida', 'up', '201301', 1, '2020-10-17 00:00:00', '2020-10-17 22:13:22'),
(9, 'Tarique', 'Anwar', 'srahman39@gmail.com', '07979773914', 'balaji,pg,behind fortis', 'noida-63', 'noida', 'up', '201301', 1, '2020-10-17 00:00:00', '2020-10-17 22:24:41'),
(10, 'Tarique', 'Anwar', 'srahman39@gmail.com', '07979773914', 'balaji,pg,behind fortis', 'noida-63', 'noida', 'up', '201301', 1, '2020-10-17 00:00:00', '2020-10-17 22:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `multi_image`
--

CREATE TABLE `multi_image` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `pdt_id` int(11) NOT NULL,
  `pdt_color` varchar(255) NOT NULL,
  `multi_pdt_image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multi_image`
--

INSERT INTO `multi_image` (`id`, `brand_id`, `pdt_id`, `pdt_color`, `multi_pdt_image`) VALUES
(1, 1, 2, 'Space Grey', '1602607798.jpg'),
(2, 1, 2, 'Space Grey', '16026077981.jpg'),
(3, 1, 2, 'Space Grey', '16026077982.jpg'),
(4, 1, 2, 'Space Grey', '16026077983.jpg'),
(5, 1, 2, 'Space Grey', '16026077984.jpg'),
(6, 7, 23, 'Ultramarine Blue', '1602689492.jpg'),
(7, 7, 23, 'Ultramarine Blue', '16026894921.jpg'),
(8, 7, 23, 'Ultramarine Blue', '16026894922.jpg'),
(9, 7, 23, 'Ultramarine Blue', '16026894923.jpg'),
(10, 7, 23, 'Ultramarine Blue', '16026894924.jpg'),
(11, 7, 23, 'Ultramarine Blue', '16026894925.jpg'),
(12, 7, 24, 'Glacial Green', '1602702047.jpg'),
(13, 7, 24, 'Glacial Green', '16027020471.jpg'),
(14, 7, 24, 'Glacial Green', '16027020472.jpg'),
(15, 7, 24, 'Glacial Green', '16027020473.jpg'),
(16, 7, 24, 'Glacial Green', '16027020474.jpg'),
(17, 7, 24, 'Glacial Green', '16027020475.jpg'),
(18, 1, 5, 'White', '1604571643.jpg'),
(19, 1, 5, 'White', '16045716431.jpg'),
(20, 1, 5, 'White', '16045716432.jpg'),
(21, 1, 5, 'White', '16045716433.jpg'),
(22, 1, 5, 'White', '16045716434.jpg'),
(23, 1, 4, 'Red', '1604571743.jpg'),
(24, 1, 4, 'Red', '16045717431.jpg'),
(25, 1, 4, 'Red', '16045717432.jpg'),
(26, 1, 4, 'Red', '16045717433.jpg'),
(27, 1, 4, 'Red', '16045717434.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pdt_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qty` varchar(11) NOT NULL,
  `subtotal` varchar(250) NOT NULL,
  `amount_payable` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `shipment_status` varchar(255) DEFAULT NULL,
  `note` varchar(255) NOT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `email`, `phone`, `pdt_id`, `price`, `name`, `qty`, `subtotal`, `amount_payable`, `payment_status`, `payment_mode`, `shipment_status`, `note`, `is_active`, `image`, `created_at`) VALUES
(1, 'OM201017041001MSW0977389698', 'nadimraza80@gmail.com', '9798697038', '23', '59999', 'One Plus 8-Pro', '1', '59999', '60099', 'pending', 'cod', NULL, '', 1, '1602688828.jpg', '2020-10-17 04:30:01'),
(2, 'OM201017041015MSW08752879868', 'srahman39@gmail.com', '08987578286', '23,5', '59999,16499', 'One Plus 8-Pro,Apple AirPods with Wireless Charging Case', '1,1', '59999,16499', '76598', 'pending', 'cod', NULL, '', 1, '1602688828.jpg,1602477963.jpg', '2020-10-17 04:17:15'),
(3, 'OM201017041037MSW7971377994', 'srahman39@gmail.com', '7979773914', '23', '59999', 'One Plus 8-Pro', '1', '59999', '60099', 'pending', 'cod', NULL, '', 1, '1602688828.jpg', '2020-10-17 04:23:37'),
(4, 'OM201017041036MSW79701979473', 'srahman39@gmail.com', '07979773914', '23,5', '59999,16499', 'One Plus 8-Pro,Apple AirPods with Wireless Charging Case', '1,1', '59999,16499', '76598', 'pending', 'cod', NULL, '', 1, '1602688828.jpg,1602477963.jpg', '2020-10-17 04:26:36'),
(5, 'OM201017041037MSW89787802685', 'srahman39@gmail.com', '08987578286', '23,5', '59999,16499', 'One Plus 8-Pro,Apple AirPods with Wireless Charging Case', '3,3', '179997,49497', '229594', 'pending', 'cod', NULL, '', 1, '1602688828.jpg,1602477963.jpg', '2020-10-17 04:37:37'),
(6, 'OM201017041048MSW79036897098', 'nadimraza80@gmail.com', '09798697038', '23', '59999', 'One Plus 8-Pro', '1', '59999', '60099', 'pending', 'cod', NULL, '', 1, '1602688828.jpg', '2020-10-17 04:39:48'),
(7, 'OM201017041022MSW97737741990', 'srahman39@gmail.com', '07979773914', '23', '59999', 'One Plus 8-Pro', '1', '59999', '60099', 'pending', 'cod', NULL, '', 1, '1602688828.jpg', '2020-10-17 04:43:22'),
(8, 'OM201017041041MSW71497770399', 'srahman39@gmail.com', '07979773914', '23', '59999', 'One Plus 8-Pro', '1', '59999', '60099', 'pending', 'cod', NULL, '', 1, '1602688828.jpg', '2020-10-17 04:54:41'),
(9, 'OM201017041034MSW39170779947', 'srahman39@gmail.com', '07979773914', '23', '59999', 'One Plus 8-Pro', '1', '59999', '60099', 'pending', 'cod', NULL, '', 1, '1602688828.jpg', '2020-10-17 04:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `pdt_sku` varchar(255) DEFAULT NULL,
  `spl_offer_pdt` varchar(255) DEFAULT NULL,
  `top_pdt` varchar(255) DEFAULT NULL,
  `best_selling_pdt` varchar(255) DEFAULT NULL,
  `featured_pdt` varchar(255) DEFAULT NULL,
  `top_twenty_pdt` varchar(255) DEFAULT NULL,
  `pdt_name` varchar(255) NOT NULL,
  `pdt_specification` text NOT NULL,
  `pdt_desc` text NOT NULL,
  `old_pdt_cost` varchar(255) NOT NULL,
  `new_pdt_cost` varchar(255) NOT NULL,
  `pdt_color` varchar(255) NOT NULL,
  `pdt_stk` int(30) NOT NULL,
  `pdt_image` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `brand`, `pdt_sku`, `spl_offer_pdt`, `top_pdt`, `best_selling_pdt`, `featured_pdt`, `top_twenty_pdt`, `pdt_name`, `pdt_specification`, `pdt_desc`, `old_pdt_cost`, `new_pdt_cost`, `pdt_color`, `pdt_stk`, `pdt_image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 2, 'Samsung', 'SAM1235', 'no', 'no', 'no', 'no', 'yes', 'Samsung Galaxy Note 10 -Aura Red- 8GB RAM- 256GB Storage ', 'General\r\nBrand	Samsung\r\nModel	Galaxy Note 10\r\nRelease date	7th August 2019\r\nLaunched in India	Yes\r\nForm factor	Touchscreen\r\nBody type	Glass\r\nDimensions (mm)	151.00 x 71.80 x 7.90\r\nWeight (g)	168.00\r\nIP rating	IP68\r\nBattery capacity (mAh)	3500\r\nWireless ch', 'Samsung Galaxy Note 10 Summary\r\nSamsung Galaxy Note 10 smartphone was launched on 7th August 2019. The phone comes with a 6.30-inch touchscreen display with a resolution of 1080x2280 pixels at a pixel density of 401 pixels per inch (ppi) and an aspect ratio of 19:9. Samsung Galaxy Note 10 is powered by a 1.9GHz octa-core Samsung Exynos 9825 processor that features 4 cores clocked at 1.9GHz, 2 cores clocked at 2.4GHz and 2 cores clocked at 2.7GHz. It comes with 8GB of RAM. The Samsung Galaxy Note 10 runs Android 9 Pie and is powered by a 3500mAh battery. The Samsung Galaxy Note 10 supports wireless charging.\r\n\r\nAs far as the cameras are concerned, the Samsung Galaxy Note 10 on the rear packs a 12-megapixel primary camera with an f/1.5-2.4 aperture; a second 16-megapixel camera with an f/2.2 aperture and a third 12-megapixel camera with an f/2.1 aperture. The rear camera setup has phase detection autofocus. It sports a 10-megapixel camera on the front for selfies, with an f/2.2 aperture. The front camera also features autofocus.\r\n\r\nThe Samsung Galaxy Note 10 runs One UI based on Android 9 Pie and packs 256GB of inbuilt storage. The Samsung Galaxy Note 10 is a dual-SIM (GSM and GSM) smartphone that accepts Nano-SIM and Nano-SIM cards. The Samsung Galaxy Note 10 measures 151.00 x 71.80 x 7.90mm (height x width x thickness) and weighs 168.00 grams. It was launched in Aura Black, Aura Glow, Aura White, and Aura Red colours. It features an IP68 rating for dust and water protection. It bears a glass body.\r\n\r\nConnectivity options on the Samsung Galaxy Note 10 include Wi-Fi 802.11 a/b/g/ac/Yes, GPS, Bluetooth v5.00, NFC, USB Type-C, 3G, and 4G (with support for Band 40 used by some LTE networks in India) with active 4G on both SIM cards. Sensors on the phone include accelerometer, ambient light sensor, barometer, compass/ magnetometer, gyroscope, proximity sensor, and fingerprint sensor. The Samsung Galaxy Note 10 supports face unlock with 3D face recognition.\r\n\r\nAs of 12th October 2020, Samsung Galaxy Note 10 price in India starts at Rs. 68,999.', '73600', '62560', 'Aura Red', 30, '1602475680.jpg', 1, '2020-10-12 04:08:00', '2020-10-12 09:38:00'),
(2, 1, 'iphone', 'iphone123', 'yes', 'no', 'yes', 'yes', 'yes', 'Apple iPhone 11 Pro 64GB - Space Grey', 'ALL VERSIONS A2215A2160A2217\r\nVersions:\r\nA2215 (Global market)\r\nA2160 (USA, Canada, Puerto Rico, U.S. Virgin Islands)\r\nA2217 (China, Hong Kong)\r\n\r\nNETWORK	Technology	\r\nGSM / CDMA / HSPA / EVDO / LTE\r\nLAUNCH	Announced	2019, September 10\r\nStatus	Available. ', 'iPhone 11 Pro Summary\r\niPhone 11 Pro smartphone was launched on 10th September 2019. The phone comes with a 5.80-inch touchscreen display with a resolution of 1125x2436 pixels at a pixel density of 458 pixels per inch (ppi). iPhone 11 Pro is powered by a hexa-core Apple A13 Bionic processor. It comes with 4GB of RAM. The iPhone 11 Pro runs iOS 13 and is powered by a 3046mAh non-removable battery. The iPhone 11 Pro supports wireless charging, as well as proprietary fast charging.\r\n\r\nAs far as the cameras are concerned, the iPhone 11 Pro on the rear packs a 12-megapixel primary camera with an f/1.8 aperture; a second 12-megapixel camera with an f/2.4 aperture and a third 12-megapixel camera with an f/2.0 aperture. The rear camera setup has autofocus. It sports a 12-megapixel camera on the front for selfies, with an f/2.2 aperture.\r\n\r\niPhone 11 Pro based on iOS 13 and packs 64GB of inbuilt storage. The iPhone 11 Pro is a dual-SIM (GSM and GSM) smartphone that accepts Nano-SIM and eSIM cards. The iPhone 11 Pro measures 144.00 x 71.40 x 8.10mm (height x width x thickness) and weighs 188.00 grams. It was launched in Gold, Midnight Green, Silver, and Space Grey colours. It features an IP68 rating for dust and water protection. It bears a glass body.\r\n\r\nConnectivity options on the iPhone 11 Pro include Wi-Fi 802.11 a/b/g/n/ac/Yes, GPS, Bluetooth v5.00, NFC, Lightning, 3G, and 4G (with support for Band 40 used by some LTE networks in India). Sensors on the phone include accelerometer, ambient light sensor, barometer, gyroscope, proximity sensor, and compass/ magnetometer. The iPhone 11 Pro supports face unlock with 3D face recognition.\r\n\r\nAs of 12th October 2020, iPhone 11 Pro price in India starts at Rs. 96,990.', '990000', '96990', 'Space Grey', 30, '1602476424.jpg', 1, '2020-10-12 04:20:24', '2020-10-12 09:50:24'),
(3, 1, 'iphone', '12344', 'no', 'yes', 'yes', 'yes', 'yes', 'Apple iPhone XR 64GB - Black', 'Apple iPhone XR Full Specifications\r\nGeneral\r\nBrand	Apple\r\nModel	iPhone XR\r\nRelease date	September 2018\r\nLaunched in India	Yes\r\nForm factor	Touchscreen\r\nDimensions (mm)	150.90 x 75.70 x 8.30\r\nWeight (g)	194.00\r\nIP rating	IP67\r\nBattery capacity (mAh)	2942\r', 'Apple iPhone XR Summary\r\nApple iPhone XR smartphone was launched in September 2018. The phone comes with a 6.10-inch touchscreen display with a resolution of 828x1792 pixels at a pixel density of 326 pixels per inch (ppi) and an aspect ratio of 19.5:9. Apple iPhone XR is powered by a hexa-core Apple A12 Bionic processor. It comes with 3GB of RAM. The Apple iPhone XR runs iOS 12 and is powered by a 2942mAh non-removable battery. The Apple iPhone XR supports wireless charging, as well as proprietary fast charging.\r\n\r\nAs far as the cameras are concerned, the Apple iPhone XR on the rear packs a 12-megapixel camera with an f/1.8 aperture. The rear camera setup has autofocus. It sports a 7-megapixel camera on the front for selfies, with an f/2.2 aperture.\r\n\r\nApple iPhone XR based on iOS 12 and packs 64GB of inbuilt storage. The Apple iPhone XR is a dual-SIM (GSM and GSM) smartphone that accepts Nano-SIM and eSIM cards. The Apple iPhone XR measures 150.90 x 75.70 x 8.30mm (height x width x thickness) and weighs 194.00 grams. It was launched in Black, Blue, Coral, Red, White, and Yellow colours. It features an IP67 rating for dust and water protection.\r\n\r\nConnectivity options on the Apple iPhone XR include Wi-Fi 802.11 a/b/g/n/ac, GPS, Bluetooth v5.00, NFC, Lightning, 3G, and 4G (with support for Band 40 used by some LTE networks in India) with active 4G on both SIM cards. Sensors on the phone include accelerometer, ambient light sensor, barometer, gyroscope, proximity sensor, and compass/ magnetometer. The Apple iPhone XR supports face unlock with 3D face recognition.\r\n\r\nAs of 12th October 2020, Apple iPhone XR price in India starts at Rs. 47,500.', '49900', '47500', 'Black', 30, '1602477176.jpg', 1, '2020-10-12 04:32:56', '2020-10-12 10:02:56'),
(4, 1, 'iphone', 'iphone11', 'no', 'no', 'yes', 'yes', 'yes', 'Apple iPhone 11 64GB - Product RED', 'iPhone 11 Full Specifications\r\nGeneral\r\nBrand	Apple\r\nModel	iPhone 11\r\nRelease date	10th September 2019\r\nLaunched in India	Yes\r\nForm factor	Touchscreen\r\nBody type	Glass\r\nDimensions (mm)	150.90 x 75.70 x 8.30\r\nWeight (g)	194.00\r\nIP rating	IP68\r\nBattery capa', 'iPhone 11 Summary\r\nThe iPhone 11 is a successor to the iPhone XR and the name represents a reset in Apple\'s naming strategy to emphasise that this is the \"default\" iPhone for everyone. Powered by Apple\'s own A13 Bionic chip, the iPhone 11 trio are the fastest smartphones you can buy today, with the closest competition at the time of filing this review being last year\'s iPhone lineup.\r\n\r\nPerhaps the biggest improvements are in the camera department, achieved by both software and hardware changes. On the rear, you get Wide and Ultra Wide 12-megapixel cameras that produce excellent image quality in nearly all situations. Night Mode makes Apple competitive in low-light photography, and then some, which means the iPhone can finally compete favourably with offerings from Google, Samsung, and Huawei when it comes to night-time shots.\r\n\r\nJust like the iPhone XR, this phone will offer you all-day battery life and iOS brings with it the promise of timely updates, something most Android OEMs falter with even today. However, it\'s not a perfect phone.\r\n\r\nThe screen is the same low-resolution panel that we saw last year, and Apple continues to bundle a 5W charger with the phone, which is just appalling. While the former is something most people won\'t notice thanks to the panel\'s excellent colour accuracy and brightness, the latter is a pain point you will need to live with every day, unless you decide to buy a faster charger separately.\r\n\r\nAll in all, the iPhone 11 is an unexpectedly compelling upgrade, thanks largely to the significantly improved low-light camera performance. If you have your eyes set on last year\'s iPhone XR, spend a little bit extra and get this one instead.', '68300', '61990', 'Red', 30, '1602477505.jpg', 1, '2020-10-12 04:38:25', '2020-10-12 10:08:25'),
(5, 1, 'iphone', 'airopod', 'no', 'no', 'no', 'yes', 'yes', 'Apple AirPods with Wireless Charging Case', 'About	Manufacturer	Apple\r\nOfficial Name	Apple AirPods 1, Apple AirPods (1st generation)\r\nType	Wireless Headphones\r\nForm-factor	Earbuds\r\nLaunch	Introduced	September 7, 2016\r\nReleased	December 13, 2016\r\nBody	Dimensions	AirPods (each): 0.65 x 0.71 x 1.59 inc', 'The Apple AirPods 1 (1st generation), the first wireless earbuds to have been introduced by Apple, were initially released on December 13, 2016. The first generation AirPods are configured with a built-in microphone capable of filtering out any background noise, commences phone calls and interactions with Siri. Externally, the AirPods appear identical to the standard Apple wired EarPods – of course, sans the wire itself – the distinctive difference being a thicker arm noticeable on the AirPods explained by the necessity to fit both the device’s battery and microphone inside it.\r\n\r\n', '18900', '16499', 'White', 30, '1602477963.jpg', 1, '2020-10-12 04:46:03', '2020-10-12 10:16:03'),
(6, 1, 'iphone', 'iphone-charger', 'no', 'no', 'no', 'no', 'yes', 'AmazonBasics Apple Certified Lightning to USB Charge and Sync Tough Cable 6 Feet 1.8 Meters - Black', 'Brand	AmazonBasics\r\nManufacturer	Luxshare Precision Limited, Luxshare Precision Limited No.17 Kuiqing road, Qinghuang Industrial Zone,Qingxi Town, Dongguan City, Guangdong,China+86 13510109455\r\nModel	L6LMF109-CS-R\r\nModel Name	B07DTJ7RV5\r\nProduct Dimension', 'Apple MFi certified charging and syncing cable for your Apple devices\r\nApple MFi certification ensures complete charge and sync compatibility with iPhone XS / XS Max / XR / X / 8 Plus / 8 / 7 Plus / 7 / 6s Plus / 6s / 6 Plus / 6 / 5s / 5c / 5 / iPad Pro / iPad Air / Air 2 / iPad mini / mini 2 / mini 4 / iPad 4th gen / iPod Touch 5th gen / iPod nano 7th gen and Beats Pill+\r\nConnects to your iPhone, iPad, or iPod with Lightning Connector and charges/syncs by connecting the USB connector into your wall charger or computer\r\nCompact Lightning Connector head works with nearly all cases\r\nAn additional layer of protection has been added to the Lightning and USB ends to improve durability and reduce fraying; cables have been tested to bend 95-degrees 10,000 times\r\n2 year limited warranty\r\nFor customer service and warranty related queries please contact_us: [1800-419-0416] (available Monday to Saturday from 9:30 AM to 6:00 PM except national holidays)\r\n', '1400', '849', 'Black', 30, '1602478384.jpg', 1, '2020-10-12 04:53:04', '2020-10-12 10:23:04'),
(7, 2, 'Samsung', 'M21', 'no', 'no', 'yes', 'no', 'yes', 'Samsung Galaxy M21-Midnight Blue 4GB RAM 64GB Storage', 'Samsung Galaxy M21 Full Specifications\r\nGeneral\r\nBrand	Samsung\r\nModel	Galaxy M21\r\nRelease date	18th March 2020\r\nLaunched in India	Yes\r\nForm factor	Touchscreen\r\nThickness	8.9\r\nWeight (g)	188.00\r\nBattery capacity (mAh)	6000\r\nRemovable battery	No\r\nFast charg', 'Samsung Galaxy M21 Summary\r\nThe Samsung Galaxy is yet another smartphone to join the Galaxy M series. It brings some of the key features that the Galaxy M series is known for. The smartphone packs in a 6.4-inch AMOLED display that isn’t very common at this price point. It has a vivid output and very good viewing angles. Samsung has made the Galaxy M21 out of plastic to keep the price of the smartphone in the affordable segment. The highlight of the Galaxy M21 is the massive 6,000mAh battery that helps it deliver great battery life. One downside is that the charging time is longer which could get annoying.\r\n\r\nPowering the smartphone is an Exynos 9611 SoC that is capable of delivering decent performance. It is available in 4GB and 6GB RAM variants. It also comes in 64GB and 128GB storage variants. The Galaxy M21 sports a triple camera setup with the highlight being the 48-megapixel primary scanner. The camera clicks good photos during the day but low-light camera performance takes a hit. Video performance is below average. Overall camera performance is below average compared to the other phones at this price.\r\n\r\n', '15999.00', '13999.00', 'Midnight Blue', 30, '1602479782.jpg', 0, '2020-10-12 05:16:22', '2020-10-12 10:46:22'),
(8, 2, 'Samsung', 'm51', 'no', 'no', 'no', 'yes', 'yes', 'Samsung Galaxy M51 Celestial Black 6GB RAM 128GB Storage ', 'Samsung Galaxy M51 Full Specifications\r\nGeneral\r\nBrand	Samsung\r\nModel	Galaxy M51\r\nRelease date	31st August 2020\r\nLaunched in India	Yes\r\nForm factor	Touchscreen\r\nWeight (g)	213.00\r\nBattery capacity (mAh)	7000\r\nFast charging	Proprietary\r\nColours	Electric Bl', 'Samsung Galaxy M51 Summary\r\nThe Samsung Galaxy M51 is the first smartphone from the company to pack in a massive 7,000mAh battery. The Galaxy  M51 also gets a bigger 6.7-inch SuperAMOLED display with a full-HD+ resolution. Samsung has opted for the 20:9 aspect ratio which makes the device tall and narrow. The Galaxy M51 has a hole-punch camera at the center towards the top of the display. A few users could find this distracting while watching content.\r\n\r\nPowering the Galaxy M51 is the Qualcomm Snapdragon 730G SoC which is a first for a Galaxy M series smartphone. It is capable of loading apps quickly as well as multitasking without any issues. Samsung has launched two variants, one with 6GB of RAM and 64GB of storage and the other with 8GB RAM and 128GB of storage. The Galaxy M51 has two Nano-SIM slots and a dedicated slot for microSD. The Galaxy M51 offered good performance without any lag or stutter when we used it.\r\n\r\nSamsung has gone with a quad-camera setup on the Galaxy M51 consisting of a 64-megapixel primary camera, a 12-megapixel ultra-wide-angle camera, a macro camera and a depth sensor. The camera clicked good photos in daylight with abundant details. Photos clicked using the wide-angle camera has distortion at the edges. Video recording tops out at 4K for the primary as well as the selfie camera but video stabilisation isn\'t great.\r\n\r\nBattery performance was excellent and we could go beyond two days without needing the smartphone to be charged. The supplied charger is also quick to charge the device. \r\n\r\n', '28999.00', '24999.00 ', 'Black', 30, '1602480245.jpg', 0, '2020-10-12 05:24:05', '2020-10-12 10:54:05'),
(9, 2, 'Samsung', 'sam-m51', 'no', 'no', 'yes', 'no', NULL, 'Samsung Galaxy M51 Celestial Black 6GB RAM 128GB Storage', 'Samsung Galaxy M51 Full Specifications\r\nGeneral\r\nBrand	Samsung\r\nModel	Galaxy M51\r\nRelease date	31st August 2020\r\nLaunched in India	Yes\r\nForm factor	Touchscreen\r\nWeight (g)	213.00\r\nBattery capacity (mAh)	7000\r\nFast charging	Proprietary\r\nColours	Electric Bl', 'Samsung Galaxy M51 Summary\r\nThe Samsung Galaxy M51 is the first smartphone from the company to pack in a massive 7,000mAh battery. The Galaxy  M51 also gets a bigger 6.7-inch SuperAMOLED display with a full-HD+ resolution. Samsung has opted for the 20:9 aspect ratio which makes the device tall and narrow. The Galaxy M51 has a hole-punch camera at the center towards the top of the display. A few users could find this distracting while watching content.\r\n\r\nPowering the Galaxy M51 is the Qualcomm Snapdragon 730G SoC which is a first for a Galaxy M series smartphone. It is capable of loading apps quickly as well as multitasking without any issues. Samsung has launched two variants, one with 6GB of RAM and 64GB of storage and the other with 8GB RAM and 128GB of storage. The Galaxy M51 has two Nano-SIM slots and a dedicated slot for microSD. The Galaxy M51 offered good performance without any lag or stutter when we used it.\r\n\r\nSamsung has gone with a quad-camera setup on the Galaxy M51 consisting of a 64-megapixel primary camera, a 12-megapixel ultra-wide-angle camera, a macro camera and a depth sensor. The camera clicked good photos in daylight with abundant details. Photos clicked using the wide-angle camera has distortion at the edges. Video recording tops out at 4K for the primary as well as the selfie camera but video stabilisation isn\'t great.\r\n\r\nBattery performance was excellent and we could go beyond two days without needing the smartphone to be charged. The supplied charger is also quick to charge the device. \r\n\r\n', '28999.00', '24999.00 ', 'Black', 30, '1602480383.jpg', 0, '2020-10-12 05:26:23', '2020-10-12 10:56:23'),
(10, 2, 'Samsung', 'a7', 'no', 'no', 'no', 'no', NULL, 'Samsung Galaxy Tab A7 10.4 inchRA M 3 GB ROM 32 GB, Wi-Fi-only Gold', 'Samsung Galaxy Tab A7 Full Specifications\r\nGeneral\r\nBrand	Samsung\r\nModel	Galaxy Tab A7\r\nRelease date	28th September 2020\r\nForm factor	Touchscreen\r\nDimensions (mm)	157.40 x 247.60 x 7.00\r\nWeight (g)	476.00\r\nBattery capacity (mAh)	7040\r\nRemovable battery	No', 'Samsung Galaxy Tab A7 Summary\r\nSamsung Galaxy Tab A7 tablet was launched on 28th September 2020. The tablet comes with a 10.40-inch touchscreen display with a resolution of 2000x1200 pixels. Samsung Galaxy Tab A7 is powered by an octa-core Qualcomm Snapdragon 662 processor. It comes with 3GB of RAM. The Samsung Galaxy Tab A7 runs Android 10 and is powered by a 7040mAh non-removable battery.\r\n\r\nAs far as the cameras are concerned, the Samsung Galaxy Tab A7 on the rear packs 8-megapixel camera. It sports a 5-megapixel camera on the front for selfies.\r\n\r\nThe Samsung Galaxy Tab A7 runs One UI 2.5 based on Android 10 and packs 32GB of inbuilt storage that can be expanded via microSD card (up to 1000GB). The Samsung Galaxy Tab A7 measures 157.40 x 247.60 x 7.00mm (height x width x thickness) and weighs 476.00 grams. It was launched in Dark Gray, Gold, and Silver colours.\r\n\r\nConnectivity options on the Samsung Galaxy Tab A7 include USB Type-C, Wi-Fi, and GPS. Sensors on the tablet include accelerometer, ambient light sensor, gyroscope, and proximity sensor.\r\n\r\nAs of 12th October 2020, Samsung Galaxy Tab A7 price in India starts at Rs. 17,999.\r\n\r\n', '20999.00', '32990.00 ', 'Gold', 30, '1602480646.jpg', 1, '2020-10-12 05:30:46', '2020-10-12 11:00:46'),
(11, 2, 'Samsung', 'note10-lite', 'no', 'no', 'yes', 'no', NULL, 'Samsung Galaxy Note10 Lite Aura Glow 8GB RAM, 128GB Storage with No Cost EMI/Additional Exchange Offers', 'Samsung Galaxy Note 10 Lite (8GB RAM, 128GB) Full Specifications\r\nGeneral\r\nBrand	Samsung\r\nModel	Galaxy Note 10 Lite\r\nRelease date	3rd January 2020\r\nForm factor	Touchscreen\r\nDimensions (mm)	163.70 x 76.10 x 8.70\r\nWeight (g)	199.00\r\nBattery capacity (mAh)	4', 'Samsung Galaxy Note 10 Lite (8GB RAM, 128GB) price in India starts from ? 35,590. The lowest price of Samsung Galaxy Note 10 Lite (8GB RAM, 128GB) is ? 35,590 at Amazon on 12th October 2020. This smartphone is available in 1 other variant like 6GB RAM + 128GB Storage with colour options like Aura Black, Aura Glow, and Aura Red.\r\n\r\n', '45000.00', '39999.00 ', 'Lite Aura Glow', 30, '1602481060.jpg', 1, '2020-10-12 05:37:40', '2020-10-12 11:07:40'),
(12, 3, 'Google', '4a', '', 'no', 'no', 'no', NULL, 'Google Pixel 4a Just Black 6GB RAM, 128GB Storage', 'Google Pixel 4a Full Specifications\r\nGeneral\r\nBrand	Google\r\nModel	Pixel 4a\r\nRelease date	3rd August 2020\r\nLaunched in India	Yes\r\nForm factor	Touchscreen\r\nBody type	Plastic\r\nDimensions (mm)	144.00 x 69.40 x 8.20\r\nWeight (g)	143.00\r\nBattery capacity (mAh)	3', 'Google Pixel 4a Summary\r\nGoogle Pixel 4a smartphone was launched on 3rd August 2020. The phone comes with a 5.81-inch touchscreen display with a resolution of 1080x2340 pixels at a pixel density of 443 pixels per inch (ppi) and an aspect ratio of 19.5:9. Google Pixel 4a is powered by a 1.8GHz octa-core Qualcomm Snapdragon 730G processor that features 6 cores clocked at 1.8GHz and 2 cores clocked at 2GHz. It comes with 6GB of RAM. The Google Pixel 4a runs Android 10 and is powered by a 3140mAh non-removable battery. The Google Pixel 4a supports proprietary fast charging.\r\n\r\nAs far as the cameras are concerned, the Google Pixel 4a on the rear packs a 12.2-megapixel camera with an f/1.7 aperture and a pixel size of 1.4-micron. The rear camera setup has autofocus. It sports a 8-megapixel camera on the front for selfies, with an f/2.0 aperture and a pixel size of 1.12-micron.\r\n\r\nGoogle Pixel 4a based on Android 10 and packs 128GB of inbuilt storage. The Google Pixel 4a measures 144.00 x 69.40 x 8.20mm (height x width x thickness) and weighs 143.00 grams. It was launched in Just Black colour. It bears a plastic body.\r\n\r\nConnectivity options on the Google Pixel 4a include Wi-Fi 802.11 a/b/g/n/ac, GPS, Bluetooth v5.00, and USB Type-C. Sensors on the phone include accelerometer, ambient light sensor, barometer, compass/ magnetometer, gyroscope, proximity sensor, and fingerprint sensor. The Google Pixel 4a supports face unlock.\r\n\r\n', '79990.00', '52888.00 ', 'Black', 30, '1602481373.jpg', 1, '2020-10-12 05:42:53', '2020-10-12 11:12:53'),
(13, 3, 'Google', '4xl', 'no', 'no', 'no', 'no', NULL, 'Google Pixel 4 XL -Just Black -64GB', 'Google Pixel 4 XL Full Specifications\r\nGeneral\r\nBrand	Google\r\nModel	Pixel 4 XL\r\nRelease date	15th October 2019\r\nLaunched in India	No\r\nForm factor	Touchscreen\r\nBody type	Glass\r\nDimensions (mm)	160.40 x 75.10 x 8.20\r\nWeight (g)	193.00\r\nBattery capacity (mAh', 'Google Pixel 4 XL Summary\r\nGoogle Pixel 4 XL smartphone was launched on 15th October 2019. The phone comes with a 6.30-inch touchscreen display with a resolution of 1440x3040 pixels at a pixel density of 537 pixels per inch (ppi) and an aspect ratio of 19:9. Google Pixel 4 XL is powered by an octa-core Qualcomm Snapdragon 855 processor. It comes with 6GB of RAM. The Google Pixel 4 XL runs Android 10 and is powered by a 3700mAh non-removable battery. The Google Pixel 4 XL supports proprietary fast charging.\r\n\r\nAs far as the cameras are concerned, the Google Pixel 4 XL on the rear packs a 16-megapixel primary camera with an f/2.4 aperture and a pixel size of 1.0-micron and a second 12.2-megapixel camera with an f/1.7 aperture and a pixel size of 1.4-micron. The rear camera setup has phase detection autofocus. It sports a 8-megapixel camera on the front for selfies, with an f/2.0 aperture and a pixel size of 1.22-micron.\r\n\r\nGoogle Pixel 4 XL based on Android 10 and packs 64GB of inbuilt storage. The Google Pixel 4 XL is a dual-SIM (GSM and GSM) smartphone that accepts Nano-SIM and eSIM cards. The Google Pixel 4 XL measures 160.40 x 75.10 x 8.20mm (height x width x thickness) and weighs 193.00 grams. It was launched in Just Black and Oh So Orange colours. It bears a glass body.\r\n\r\nConnectivity options on the Google Pixel 4 XL include Wi-Fi 802.11 a/b/g/n/ac, GPS, NFC, USB Type-C, 3G, and 4G with active 4G on both SIM cards. Sensors on the phone include accelerometer, ambient light sensor, barometer, gyroscope, proximity sensor, and compass/ magnetometer. The Google Pixel 4 XL supports face unlock.\r\n\r\n', '109990.00', '94500.00 ', 'Black', 30, '1602481513.jpg', 1, '2020-10-12 05:45:13', '2020-10-12 11:15:13'),
(14, 3, 'Google', '3xl', 'no', 'no', 'no', 'no', NULL, 'Google Pixel 3 XL Just Black 4GB RAM, 64GB Storage', 'Google Pixel 3 XL Full Specifications\r\nGeneral\r\nBrand	Google\r\nModel	Pixel 3 XL\r\nRelease date	October 2018\r\nLaunched in India	Yes\r\nForm factor	Touchscreen\r\nBody type	Glass\r\nDimensions (mm)	158.00 x 76.70 x 7.90\r\nWeight (g)	184.00\r\nIP rating	IP68\r\nBattery c', 'Google Pixel 3 XL Summary\r\nThe Pixel 3XL, like the name suggests is bigger than the Pixel 3. It has similar build quality with a bigger 6.3-inch QHD+ display and a notch. It has an aluminium frame and the back is made out of Corning Gorilla 5. The smartphone is powered by the Snapdragon 845 processor and has a Titan M security chip onboard. The Pixel 3 XL has 4GB of RAM and comes in 64GB and 128GB storage options. It sports a single 12.2-megapixel camera setup at the back and has a dual 8-megapixel selfie camera setup consisting of a regular lens and a wide angle lens. The phone runs on stock Android 9 Pie and has a 3450mAh battery.\r\n\r\n', '62990.00', '51799.00 ', 'Black', 30, '1602481880.jpg', 1, '2020-10-12 05:51:20', '2020-10-12 11:21:20'),
(15, 3, 'Google', 'pixel1', 'no', 'no', 'no', 'no', NULL, 'Google Pixel 2 18:9 Display, 128 GB Just Black', 'Google Pixel 2 (128GB) Full Specifications\r\nGeneral\r\nBrand	Google\r\nModel	Pixel 2\r\nRelease date	November 2017\r\nForm factor	Touchscreen\r\nDimensions (mm)	145.70 x 69.70 x 7.80\r\nWeight (g)	143.00\r\nBattery capacity (mAh)	2700\r\nRemovable battery	No\r\nColours	Bla', 'Google Pixel 2 (128GB) price in India starts from ? 49,998. The lowest price of Google Pixel 2 (128GB) is ? 49,998 at Amazon on 12th October 2020. This smartphone is available in 1 other variant like 64GB with colour options like Clearly White, Just Black, Kinda Blue, and Black.\r\n\r\n', '89999.00', '49998.00 ', 'Black', 30, '1602485560.jpg', 1, '2020-10-12 06:52:40', '2020-10-12 12:22:40'),
(16, 4, 'Sony', 'xperiaz5', 'no', 'no', 'no', 'no', NULL, 'Sony Xperia Z5 Dual Gold', 'Sony Xperia Z5 Dual Full Specifications\r\nGeneral\r\nAlternate names	E6683\r\nBrand	Sony\r\nModel	Xperia Z5 Dual\r\nRelease date	September 2015\r\nForm factor	Touchscreen\r\nDimensions (mm)	146.00 x 72.00 x 7.30\r\nWeight (g)	144.00\r\nBattery capacity (mAh)	2900\r\nRemovab', 'Sony Xperia Z5 Dual Summary\r\nThe Sony Xperia Z5 Dual continues the fine craftsmanship and attention to detail of its predecessors. The phone now sports a fingerprint sensor and also retains its IP68 weather-proof certification. The display is sharp and colours appear vivid. The camera performs very well under natural light and is good for macro shots. Battery life has improved a bit compared to its predecessor, and overall performance is zippy. However, there very little to get excited about here and the phone continues to heat up very quickly even with simple tasks. The Xperia Z5 Dual is priced very steeply and there are much better offerings available for a whole lot less.\r\n\r\n', '59000', '55000', 'Gold', 30, '1602486052.jpg', 1, '2020-10-12 07:00:52', '2020-10-12 12:30:53'),
(17, 4, 'Sony', 'l2', 'no', 'no', 'no', 'no', NULL, 'Sony Xperia L2-5.5\" Screen - 32GB Dual Sim Black', 'Sony Xperia L2 Full Specifications\r\nGeneral\r\nBrand	Sony\r\nModel	Xperia L2\r\nRelease date	January 2018\r\nForm factor	Touchscreen\r\nDimensions (mm)	150.00 x 78.00 x 9.80\r\nWeight (g)	178.00\r\nBattery capacity (mAh)	3300\r\nRemovable battery	No\r\nColours	Black, Gold,', 'Sony Xperia L2 Summary\r\nSony Xperia L2 smartphone was launched in January 2018. The phone comes with a 5.50-inch touchscreen display with a resolution of 720x1280 pixels. Sony Xperia L2 is powered by a quad-core MediaTek MT6737T processor. It comes with 3GB of RAM. The Sony Xperia L2 runs Android 7.1.1 and is powered by a 3300mAh non-removable battery.\r\n\r\nAs far as the cameras are concerned, the Sony Xperia L2 on the rear packs 13-megapixel camera. It sports a 8-megapixel camera on the front for selfies.\r\n\r\nSony Xperia L2 based on Android 7.1.1 and packs 32GB of inbuilt storage that can be expanded via microSD card (up to 256GB). The Sony Xperia L2 is a dual-SIM (GSM and GSM) smartphone that accepts Nano-SIM and Nano-SIM cards. The Sony Xperia L2 measures 150.00 x 78.00 x 9.80mm (height x width x thickness) and weighs 178.00 grams. It was launched in Black, Gold, and Pink colours.\r\n\r\nConnectivity options on the Sony Xperia L2 include Wi-Fi 802.11 b/g/n, GPS, Bluetooth v4.20, NFC, USB OTG, FM radioWi-Fi Direct, 3G, and 4G (with support for Band 40 used by some LTE networks in India). Sensors on the phone include accelerometer, ambient light sensor, gyroscope, and proximity sensor.\r\n\r\n', '96000.00', '85900.00', 'Black', 30, '1602486322.jpg', 1, '2020-10-12 07:05:22', '2020-10-12 12:35:22'),
(18, 4, 'Sony', 'sp', 'no', 'no', 'no', 'no', NULL, 'Sony Xperia SP ', 'Sony Xperia SP Full Specifications\r\nGeneral\r\nBrand	Sony\r\nModel	Xperia SP\r\nRelease date	March 2013\r\nForm factor	Touchscreen\r\nDimensions (mm)	130.60 x 67.10 x 9.98\r\nWeight (g)	155.00\r\nBattery capacity (mAh)	2370\r\nRemovable battery	No\r\nDisplay\r\nScreen size (', 'Sony Xperia SP Summary\r\nSony Xperia SP smartphone was launched in March 2013. The phone comes with a 4.60-inch touchscreen display with a resolution of 720x1280 pixels. Sony Xperia SP is powered by a 1.7GHz dual-core Qualcomm Snapdragon S4 processor. It comes with 1GB of RAM. The Sony Xperia SP runs Android 4.1 and is powered by a 2370mAh non-removable battery.\r\n\r\nAs far as the cameras are concerned, the Sony Xperia SP on the rear packs 8-megapixel camera. It sports a 0.3-megapixel camera on the front for selfies.\r\n\r\nSony Xperia SP based on Android 4.1 and packs 8GB of inbuilt storage that can be expanded via microSD card (up to 32GB). The Sony Xperia SP is a single SIM (GSM) smartphone that accepts a Micro-SIM card. The Sony Xperia SP measures 130.60 x 67.10 x 9.98mm (height x width x thickness) and weighs 155.00 grams.\r\n\r\nConnectivity options on the Sony Xperia SP include Wi-Fi 802.11 a/b/g/n, GPS, Bluetooth v4.00, NFC, FM radioWi-Fi Direct, Mobile High-Definition Link (MHL), 3G, and 4G. Sensors on the phone include accelerometer, ambient light sensor, gyroscope, proximity sensor, and compass/ magnetometer.\r\n\r\n', '19900', '16141', 'Black', 30, '1602486722.png', 1, '2020-10-12 07:12:02', '2020-10-12 12:42:03'),
(19, 4, 'Sony', 'z1', 'no', 'no', 'no', 'no', NULL, 'Sony Xperia Z1 Compact', 'Sony Xperia Z1 Compact Full Specifications\r\nGeneral\r\nBrand	Sony\r\nModel	Xperia Z1 Compact\r\nRelease date	January 2014\r\nForm factor	Touchscreen\r\nDimensions (mm)	127.00 x 64.90 x 9.40\r\nWeight (g)	138.00\r\nBattery capacity (mAh)	2300\r\nRemovable battery	No\r\nDisp', 'Sony Xperia Z1 Compact Summary\r\nSony Xperia Z1 Compact smartphone was launched in January 2014. The phone comes with a 4.30-inch touchscreen display with a resolution of 720x1280 pixels at a pixel density of 342 pixels per inch (ppi). Sony Xperia Z1 Compact is powered by a 2.2GHz quad-core Qualcomm Snapdragon 800 processor. It comes with 2GB of RAM. The Sony Xperia Z1 Compact runs Android 4.2 and is powered by a 2300mAh non-removable battery.\r\n\r\nAs far as the cameras are concerned, the Sony Xperia Z1 Compact on the rear packs 20.7-megapixel camera. It sports a 2-megapixel camera on the front for selfies.\r\n\r\nSony Xperia Z1 Compact based on Android 4.2 and packs 16GB of inbuilt storage that can be expanded via microSD card (up to 64GB). The Sony Xperia Z1 Compact is a single SIM (GSM) smartphone that accepts a Micro-SIM card. The Sony Xperia Z1 Compact measures 127.00 x 64.90 x 9.40mm (height x width x thickness) and weighs 138.00 grams.\r\n\r\nConnectivity options on the Sony Xperia Z1 Compact include Wi-Fi 802.11 a/b/g/n/ac, GPS, Bluetooth v4.00, NFC, FM radioWi-Fi Direct, Mobile High-Definition Link (MHL), 3G, and 4G. Sensors on the phone include accelerometer, ambient light sensor, gyroscope, proximity sensor, and compass/ magnetometer.\r\n\r\n', '16500', '11999', 'Pink', 30, '1602487193.jpeg', 1, '2020-10-12 07:19:53', '2020-10-12 12:49:53'),
(20, 4, 'Sony', 'c3', 'no', 'no', 'no', 'no', NULL, 'Sony Xperia C3', 'Sony Xperia C3 Full Specifications\r\nGeneral\r\nBrand	Sony\r\nModel	Xperia C3\r\nRelease date	July 2014\r\nForm factor	Touchscreen\r\nDimensions (mm)	156.00 x 78.50 x 7.60\r\nWeight (g)	150.00\r\nBattery capacity (mAh)	2500\r\nRemovable battery	No\r\nColours	White, Black, M', 'Sony Xperia C3 Summary\r\nSony Xperia C3 smartphone was launched in July 2014. The phone comes with a 5.50-inch touchscreen display with a resolution of 720x1280 pixels. Sony Xperia C3 is powered by a 1.2GHz quad-core Qualcomm Snapdragon 400 (MSM8926) processor. It comes with 1GB of RAM. The Sony Xperia C3 runs Android 4.4 and is powered by a 2500mAh non-removable battery.\r\n\r\nAs far as the cameras are concerned, the Sony Xperia C3 on the rear packs 8-megapixel camera. It sports a 5-megapixel camera on the front for selfies.\r\n\r\nSony Xperia C3 based on Android 4.4 and packs 8GB of inbuilt storage that can be expanded via microSD card (up to 32GB). The Sony Xperia C3 is a single SIM (GSM) smartphone that accepts a Micro-SIM card. The Sony Xperia C3 measures 156.00 x 78.50 x 7.60mm (height x width x thickness) and weighs 150.00 grams. It was launched in White, Black, and Mint colours.\r\n\r\nConnectivity options on the Sony Xperia C3 include Wi-Fi 802.11 b/g/n, GPS, Bluetooth v4.00, NFC, USB OTG, FM radio, 3G, and 4G. Sensors on the phone include ambient light sensor and proximity sensor.\r\n\r\n', '24000', '19990', 'Black', 30, '1602487551.jpeg', 1, '2020-10-12 07:25:51', '2020-10-12 12:55:51'),
(21, 5, 'Nokia', 'nokia2', 'no', 'no', 'no', 'no', NULL, 'Nokia 2.3 Android 10 Smartphone 2GB RAM, 32GB Storage, Dual Rear Camera, Cyan Green', 'Nokia 2.3 Full Specifications\r\nGeneral\r\nBrand	Nokia\r\nModel	2.3\r\nRelease date	5th December 2019\r\nForm factor	Touchscreen\r\nBody type	Plastic\r\nDimensions (mm)	157.69 x 75.41 x 8.68\r\nWeight (g)	183.00\r\nBattery capacity (mAh)	4000\r\nRemovable battery	No\r\nColour', 'Nokia 2.3 Summary\r\nNokia 2.3 smartphone was launched on 5th December 2019. The phone comes with a 6.20-inch touchscreen display with a resolution of 720x1520 pixels and an aspect ratio of 19:9. Nokia 2.3 is powered by a 2GHz quad-core MediaTek Helio A22 (MT6761) processor that features 4 cores clocked at 2GHz. It comes with 2GB of RAM. The Nokia 2.3 runs Android 9 Pie and is powered by a 4000mAh non-removable battery.\r\n\r\nAs far as the cameras are concerned, the Nokia 2.3 on the rear packs a 13-megapixel primary camera with an f/2.2 aperture and a second 2-megapixel camera. It sports a 5-megapixel camera on the front for selfies, with an f/2.4 aperture.\r\n\r\nNokia 2.3 based on Android 9 Pie and packs 32GB of inbuilt storage that can be expanded via microSD card (up to 400GB). The Nokia 2.3 is a dual-SIM (GSM and GSM) smartphone that accepts Nano-SIM and Nano-SIM cards. The Nokia 2.3 measures 157.69 x 75.41 x 8.68mm (height x width x thickness) and weighs 183.00 grams. It was launched in Charcoal, Cyan Green, and Sand colours. It bears a plastic body.\r\n\r\nConnectivity options on the Nokia 2.3 include Wi-Fi 802.11 b/g/n, Bluetooth v5.00, USB OTG, Micro-USB, 3G, and 4G (with support for Band 40 used by some LTE networks in India). Sensors on the phone include accelerometer, ambient light sensor, and proximity sensor.\r\n\r\n', '9999.00', '8999.00 ', 'Cyan Green', 30, '1602487828.jpg', 1, '2020-10-12 07:30:28', '2020-10-12 13:00:28'),
(22, 5, 'Nokia', 'nokia5', 'no', 'no', 'no', 'no', NULL, 'Nokia 5.1 Plus Black 32 GB 3 GB RAM', 'Nokia 5.1 Plus Full Specifications\r\nGeneral\r\nBrand	Nokia\r\nModel	5.1 Plus\r\nRelease date	August 2018\r\nLaunched in India	Yes\r\nForm factor	Touchscreen\r\nDimensions (mm)	149.51 x 71.98 x 8.10\r\nWeight (g)	160.00\r\nBattery capacity (mAh)	3060\r\nRemovable battery	No', 'Nokia 5.1 Plus Summary\r\nThe Nokia 5.1 Plus sports a high-gloss design and comes with a 2.5D glass back, which makes it looks very stylish. It features a 5.86-inch HD+ display, which has good colour reproduction and sunlight legibility. The phone is powered by a MediaTek Helio P60 SoC and comes with 3GB of RAM and 32GB of storage. App and UI performance is quick thanks to the stock Android 8.1 Oreo. It\'s also part of the Android One programme so updates should be timely. Games run well too but the phone gets warm quickly. The rear 13-megapixel camera captures decent details in daylight but struggles a bit in low-light. The 3060mAh battery easily delivers all-day battery life, which is very good.\r\n\r\n', '13999.00', '12999.00', 'Black', 30, '1602488083.jpg', 1, '2020-10-12 07:34:43', '2020-10-12 13:04:43'),
(23, 7, 'OnePlus', '12ONEPLUS125', '', 'yes', 'yes', 'yes', 'yes', 'One Plus 8-Pro', '<li>48MP rear camera with 4k video at 30/60 fps</li><li> 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps</li> <li>1080p video at 240fps, time-lapse: 1080p 30fps</li><li> 4k 30fps</li> <li>cine aspect ratio video recording, video hdr</li><li> cat&dog face detect & focus, ultrashot</li>', '<p>Smartphone manufacturer giant, OnePlus has started offering its latest OnePlus 8 Pro mobile at a starting price of Rs. 54,999. The phone is available in Glacial Green, Onyx Black, and Ultramarine Blue color options. It weighs 199 grams and its dimensions are 165.3 mm x 74.3 mm x 8.5 mm (H x W x T).</p>\r\n\r\n<p>The OnePlus 8 Pro is an IP68 rated phone that is resistant to dust and water. It comes with an impressive 6.78-inch AMOLED panel that has a resolution of 1440x3168 pixels with high color accuracy and HDR10+ support. Also, it can run at 120Hz at the QHD+ resolution. The display of the phone is vibrant, colorful, and bright. </p>\r\n\r\n<p>The smartphone runs OxygenOS 10, based on Android 10, and is powered by Qualcomm Snapdragon 865 processor, coupled with 8GB/12GB LPDDR5 RAM. Talking about the internal storage of the phone, OnePlus 8 Pro has 128GB and 256GB of UFS 3.0 storage versions. </p>\r\n\r\n \r\n\r\n<p>To shoot amazing photos and videos, there is a quad rear camera setup that consists of a 48 MP primary camera, an 8 MP secondary camera with a telephoto lens, a 48 MP camera with a wide-angle lens, and a 5 MP ‘Color Filter’ camera sensor. Also, it features a 16 MP camera at the front that lets you capture amazing selfies.</p>\r\n\r\n \r\n\r\n<p>The OnePlus 8 Pro is powered with a non-removable 4,510mAh battery that supports Warp Charge 30T (5V/ 6A) and Warp Charge 30 Wireless technologies. There is also reverse wireless charging support. With a single charge, the battery will last 24 hours with normal usage. In addition to this, connectivity options on the phone include USB Type-C port, Bluetooth v5.1, GPS/ A-GPS, NFC, Wi-Fi 6, and a 5G, and 4G LTE. Sensors on the phone include Face unlock, fingerprint sensor, in-display fingerprint sensor, proximity sensor, compass/magnetometer, accelerometer, ambient light sensor, and gyroscope.</p>\r\n\r\n<h3>ONEPLUS 8 PRO PRICE IN INDIA</h3>\r\nOnePlus 8 Pro smartphone price in India is Rs 54,999. OnePlus 8 Pro was launched in the country onApril 24, 2020 (Official).The smartphone comes in 1 other storage and RAM variants - OnePlus 8 Pro 256GB. As for the colour options, the OnePlus 8 Pro smartphone comes in Onyx Black, Glacial Green, Ultramarine Blue colours.</p>', '59999', '59999', 'Ultramarine Blue', 30, '1602688828.jpg', 1, '2020-10-14 15:20:28', '2020-10-14 20:50:28'),
(24, 7, 'OnePlus', '12ONEPLUS125', 'yes', 'no', 'yes', 'no', 'yes', 'OnePlus 8 5G', 'OS	Android\r\nRAM	6 GB\r\nProduct Dimensions	16 x 0.8 x 7.3 cm; 180 Grams\r\nBatteries	1 Lithium ion batteries required. (included)\r\nItem model number	OES_IN2011_GLLGRN\r\nWireless communication technologies	Bluetooth, WiFi Hotspot\r\nConnectivity technologies	(B2/', 'OnePlus 8 is amongst the new smartphones by the brand that was launched in April 2020. OnePlus 8 is a Dual SIM (Nano-SIM, dual stand-by) smartphone that supports 5g. Comprising striking features, the smartphone has a glossy finish and is lightweight. The dimensions of the phone measure 160.2 mm x 72.9 mm x 8 mm (HXWXD), and it weighs around 180 grams. Moreover, you can buy the phone in Glacial Green, Interstellar Glow, and Onyx Black color options. You can use two Nano-SIM cards in your OnePlus 8.\r\n\r\nOnePlus 8 comes with a 6.55 inches fluid AMOLED capacitive touchscreen that has a resolution of 1080 x 2400 pixels and an aspect ratio of 20:9. Hence, you can have an immersive viewing experience while watching movies, playing games, or browsing the internet. In addition to this, you get Corning Gorilla Glass 5 protection on the device. \r\n\r\nThe smartphone from OnePlus is equipped with really good speakers that give you a crisp and clear sound while playing games or watching movies. Moreover, the Dolby Atmos enhancement helps boost the low and mid-range frequencies providing added depth and clarity in the sound.\r\n\r\nOnePlus 8 is powered by the Qualcomm Snapdragon 855 Plus processor that gives you a faster performance without any lags. You can buy the smartphone in 8GB RAM + 128GB internal storage and 12GB RAM + 256GB internal storage variants. In addition to this, the smartphone comes with OxygenOS 10.0 based on Android 10.\r\n\r\nSpeaking about the camera of OnePlus 8, on the rear, it sports a 48 MP primary camera with f/1.75 aperture, a 2 MP macro lens with f/2.4 aperture, and a 16 MP ultrawide angle lens with f/2.2 aperture. Camera features on the rear include dual-LED flash, multi autofocus, CINE aspect ratio video recording, UltraShot HDR, nightscape, micro, portrait, pro mode, panorama, cat&dog face detection & focus, AI scene detection, and RAW image. Besides, on the front, the mobile features a 16 MP camera with an f/2.45 aperture including Face Unlock, HDR, Screen Flash, and Face Retouching features.\r\n\r\nOnePlus 8 houses a 4300 mAh (non-removable) battery with Warp Charge 30T that supports fast charging. You can charge your phone more than 50 percent by putting it up on charging just for 30 minutes.  \r\n\r\nThere are various connectivity options on the OnePlus 8 mobile that include Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct, DLNA, hotspot, Bluetooth, GPS with dual-band A-GPS, GLONASS, BDS, GALILEO, SBAS, NFC, Radio, Type-C 1.0 reversible connector, and USB on-the-go. Sensors on the phone include proximity sensor, accelerometer, gyroscope, electronic compass, ambient light sensor, in-display fingerprint sensor, and sensor core.\r\n\r\n', '41999', '47999', 'Glacial Green', 30, '1602701737.jpg', 1, '2020-10-14 18:55:37', '2020-10-15 00:25:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email_id`, `password`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'Tarique', 'Anwar', 'srahman39@gmail.com', '123456', '2020-10-28 07:29:43', '2020-10-28 12:25:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pdt_id` int(11) NOT NULL,
  `pdt_qty` varchar(255) NOT NULL,
  `pdt_name` varchar(255) NOT NULL,
  `pdt_cost` varchar(255) NOT NULL,
  `pdt_image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `pdt_id`, `pdt_qty`, `pdt_name`, `pdt_cost`, `pdt_image`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-28 09:17:27', '2020-10-28 14:47:27', 0),
(2, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-28 09:32:23', '2020-10-28 15:02:23', 0),
(3, 1, 3, '1', 'Apple iPhone XR 64GB - Black', '47500', '1602477176.jpg', '2020-10-28 09:35:17', '2020-10-28 15:05:17', 0),
(4, 1, 5, '1', 'Apple AirPods with Wireless Charging Case', '16499', '1602477963.jpg', '2020-10-28 09:36:07', '2020-10-28 15:06:07', 0),
(5, 1, 3, '1', 'Apple iPhone XR 64GB - Black', '47500', '1602477176.jpg', '2020-10-28 09:36:34', '2020-10-28 15:06:34', 0),
(6, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-28 09:38:19', '2020-10-28 15:08:19', 0),
(7, 1, 5, '1', 'Apple AirPods with Wireless Charging Case', '16499', '1602477963.jpg', '2020-10-28 09:38:29', '2020-10-28 15:08:29', 0),
(8, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-28 09:53:49', '2020-10-28 15:23:49', 0),
(9, 1, 5, '1', 'Apple AirPods with Wireless Charging Case', '16499', '1602477963.jpg', '2020-10-28 09:54:02', '2020-10-28 15:24:02', 0),
(10, 1, 3, '1', 'Apple iPhone XR 64GB - Black', '47500', '1602477176.jpg', '2020-10-28 09:54:09', '2020-10-28 15:24:09', 0),
(11, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-28 10:17:08', '2020-10-28 15:47:08', 0),
(12, 1, 2, '1', 'Apple iPhone 11 Pro 64GB - Space Grey', '96990', '1602476424.jpg', '2020-10-28 10:17:33', '2020-10-28 15:47:33', 0),
(13, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-28 12:19:59', '2020-10-28 17:49:59', 0),
(14, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-28 12:20:47', '2020-10-28 17:50:47', 0),
(15, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-28 12:21:53', '2020-10-28 17:51:53', 0),
(16, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-28 12:50:37', '2020-10-28 18:20:37', 0),
(17, 1, 2, '1', 'Apple iPhone 11 Pro 64GB - Space Grey', '96990', '1602476424.jpg', '2020-10-28 12:51:02', '2020-10-28 18:21:02', 0),
(18, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-28 13:18:41', '2020-10-28 18:48:41', 0),
(19, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-28 17:39:11', '2020-10-28 23:09:11', 0),
(20, 1, 5, '1', 'Apple AirPods with Wireless Charging Case', '16499', '1602477963.jpg', '2020-10-28 17:39:58', '2020-10-28 23:09:58', 0),
(21, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-28 17:41:53', '2020-10-28 23:11:53', 0),
(22, 1, 4, '1', 'Apple iPhone 11 64GB - Product RED', '61990', '1602477505.jpg', '2020-10-28 17:44:00', '2020-10-28 23:14:00', 0),
(23, 1, 2, '1', 'Apple iPhone 11 Pro 64GB - Space Grey', '96990', '1602476424.jpg', '2020-10-28 17:44:08', '2020-10-28 23:14:08', 0),
(24, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-28 17:52:26', '2020-10-28 23:22:26', 0),
(25, 1, 2, '1', 'Apple iPhone 11 Pro 64GB - Space Grey', '96990', '1602476424.jpg', '2020-10-28 17:52:42', '2020-10-28 23:22:42', 0),
(26, 1, 24, '1', 'OnePlus 8 5G', '47999', '1602701737.jpg', '2020-10-28 17:54:16', '2020-10-28 23:24:16', 0),
(27, 1, 11, '1', 'Samsung Galaxy Note10 Lite Aura Glow 8GB RAM, 128GB Storage with No Cost EMI/Additional Exchange Offers', '39999.00 ', '1602481060.jpg', '2020-10-28 17:54:39', '2020-10-28 23:24:39', 0),
(28, 1, 24, '1', 'OnePlus 8 5G', '47999', '1602701737.jpg', '2020-10-28 17:56:50', '2020-10-28 23:26:50', 0),
(29, 1, 4, '1', 'Apple iPhone 11 64GB - Product RED', '61990', '1602477505.jpg', '2020-10-28 17:56:59', '2020-10-28 23:26:59', 0),
(30, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-28 18:13:29', '2020-10-28 23:43:29', 0),
(31, 1, 20, '1', 'Sony Xperia C3', '19990', '1602487551.jpeg', '2020-10-28 18:13:51', '2020-10-28 23:43:51', 0),
(32, 1, 1, '1', 'Samsung Galaxy Note 10 -Aura Red- 8GB RAM- 256GB Storage ', '62560', '1602475680.jpg', '2020-10-28 18:13:57', '2020-10-28 23:43:57', 0),
(33, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-28 18:14:27', '2020-10-28 23:44:27', 0),
(34, 1, 2, '1', 'Apple iPhone 11 Pro 64GB - Space Grey', '96990', '1602476424.jpg', '2020-10-28 18:21:20', '2020-10-28 23:51:20', 0),
(35, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-28 18:22:47', '2020-10-28 23:52:47', 0),
(36, 1, 24, '1', 'OnePlus 8 5G', '47999', '1602701737.jpg', '2020-10-28 18:28:42', '2020-10-28 23:58:42', 0),
(37, 1, 22, '1', 'Nokia 5.1 Plus Black 32 GB 3 GB RAM', '12999.00', '1602488083.jpg', '2020-10-28 18:30:29', '2020-10-29 00:00:29', 0),
(38, 1, 10, '1', 'Samsung Galaxy Tab A7 10.4 inchRA M 3 GB ROM 32 GB, Wi-Fi-only Gold', '32990.00 ', '1602480646.jpg', '2020-10-28 18:53:23', '2020-10-29 00:23:23', 0),
(39, 1, 5, '1', 'Apple AirPods with Wireless Charging Case', '16499', '1602477963.jpg', '2020-10-29 06:30:10', '2020-10-29 12:00:10', 0),
(40, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-30 02:27:13', '2020-10-30 07:57:13', 0),
(41, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-10-30 02:47:44', '2020-10-30 08:17:44', 0),
(42, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-11-02 02:41:54', '2020-11-02 07:11:54', 0),
(43, 1, 2, '1', 'Apple iPhone 11 Pro 64GB - Space Grey', '96990', '1602476424.jpg', '2020-11-02 02:42:05', '2020-11-02 07:12:05', 0),
(44, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-11-04 09:18:46', '2020-11-04 13:48:46', 0),
(45, 1, 5, '1', 'Apple AirPods with Wireless Charging Case', '16499', '1602477963.jpg', '2020-11-05 15:44:29', '2020-11-05 14:44:29', 0),
(46, 1, 23, '1', 'One Plus 8-Pro', '59999', '1602688828.jpg', '2020-11-05 15:44:32', '2020-11-05 14:44:32', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `compare`
--
ALTER TABLE `compare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_image`
--
ALTER TABLE `multi_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `compare`
--
ALTER TABLE `compare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `multi_image`
--
ALTER TABLE `multi_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
