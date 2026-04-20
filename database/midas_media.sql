-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2026 at 07:22 AM
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
-- Database: `midas_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `email`, `full_name`, `last_login`, `created_at`, `updated_at`) VALUES
(2, 'admin', '$2y$10$UFtzVTYOpKayaGgqkeNJqeMNFCciHB/.M0IyKOlz0CNHesEtwjqda', 'admin@midastouch.com', 'Super Admin', '2026-02-05 11:46:52', '2026-02-04 08:46:36', '2026-02-05 06:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(10) DEFAULT NULL COMMENT 'Mr/Mrs/Ms/Dr',
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('new','read','replied','archived') DEFAULT 'new',
  `notes` text DEFAULT NULL COMMENT 'Admin notes',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Contact form enquiries';

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `title`, `first_name`, `last_name`, `email`, `subject`, `message`, `submitted_at`, `status`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'mr', 'Srihari Prasath', 'A', 'hari54stark@gmail.com', 'Testing', 'This is a testing enquiry', '2026-02-04 13:00:16', 'read', NULL, '2026-02-04 07:30:16', '2026-02-05 06:05:46');

-- --------------------------------------------------------

--
-- Table structure for table `media_items`
--

CREATE TABLE `media_items` (
  `id` int(11) NOT NULL,
  `media_key` varchar(100) NOT NULL COMMENT 'Unique identifier for the media (e.g., home_hero_video)',
  `media_type` enum('image','video') NOT NULL COMMENT 'Type of media file',
  `file_path` varchar(500) NOT NULL COMMENT 'Relative path to the media file',
  `page` varchar(50) NOT NULL COMMENT 'Page where media is used (e.g., home, about)',
  `section` varchar(100) NOT NULL COMMENT 'Section within the page (e.g., hero, gallery)',
  `description` text DEFAULT NULL COMMENT 'Admin notes or description',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_items`
--

INSERT INTO `media_items` (`id`, `media_key`, `media_type`, `file_path`, `page`, `section`, `description`, `created_at`, `updated_at`) VALUES
(1, 'home_hero_vide', 'video', 'images/photos/School files/Videos/C1357.MP4', 'home', 'hero', 'Main hero section video - Another year of memories', '2026-02-03 06:17:14', '2026-02-03 06:51:56'),
(2, 'home_explore_video', 'video', 'images/photos/School files/Videos/5.mp4', 'home', 'explore', 'Explore with us section video', '2026-02-03 06:17:14', '2026-02-03 06:31:56'),
(3, 'home_testimonial_video', 'video', 'images/photos/School files/Videos/6.mp4', 'home', 'testimonials', 'Hear from our families video', '2026-02-03 06:17:14', '2026-02-03 07:24:28'),
(4, 'home_hand_svg', 'image', 'images/svg/hand.svg', 'home', 'decorations', 'Hand decoration SVG', '2026-02-03 06:17:14', '2026-02-03 06:28:38'),
(5, 'home_lotus_svg', 'image', 'images/svg/lotus.svg', 'home', 'decorations', 'Lotus decoration SVG', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(6, 'home_yoga_svg', 'image', 'images/svg/yoga.svg', 'home', 'decorations', 'Yoga decoration SVG', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(7, 'home_flower_svg', 'image', 'images/svg/flower.svg', 'home', 'decorations', 'Flower decoration SVG', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(8, 'home_chariot_svg', 'image', 'images/svg/chariot.svg', 'home', 'decorations', 'Chariot decoration SVG', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(9, 'home_pot_svg', 'image', 'images/svg/pot.svg', 'home', 'decorations', 'Pot decoration SVG', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(10, 'home_drum_svg', 'image', 'images/svg/drum.svg', 'home', 'decorations', 'Drum decoration SVG', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(11, 'home_diamond_svg', 'image', 'images/svg/diamond.svg', 'home', 'decorations', 'Diamond decoration SVG', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(12, 'home_heart_svg', 'image', 'images/svg/heart.svg', 'home', 'decorations', 'Heart decoration SVG', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(13, 'home_values_image', 'image', 'images/photos/6.jpg', 'home', 'carousel_values', 'Our values section image', '2026-02-03 06:17:14', '2026-02-03 06:56:40'),
(14, 'home_head_welcome_image1', 'image', 'images/photos/7.jpg', 'home', 'carousel_head', 'Head welcome image 1', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(15, 'home_head_welcome_image2', 'image', 'images/photos/8.jpg', 'home', 'carousel_head', 'Head welcome image 2', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(16, 'home_head_welcome_image3', 'image', 'images/photos/9.jpg', 'home', 'carousel_head', 'Head welcome image 3', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(17, 'home_ethos_background', 'image', 'images/photos/10.jpg', 'home', 'carousel_ethos', 'Panchakoshas background image', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(18, 'home_ethos_compass', 'image', 'images/photos/11.jpg', 'home', 'carousel_ethos', 'Learning compass image', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(19, 'home_ethos_powers', 'image', 'images/photos/12.jpg', 'home', 'carousel_ethos', 'Learning powers image', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(20, 'home_year78_image1', 'image', 'images/photos/13.jpg', 'home', 'carousel_year78', 'Year 7&8 experience image 1', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(21, 'home_year78_image2', 'image', 'images/photos/14.jpg', 'home', 'carousel_year78', 'Year 7&8 experience image 2', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(22, 'home_announcement_main', 'image', 'images/photos/4.jpg', 'home', 'announcements', 'Main announcement featured image', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(23, 'home_announcement_1', 'image', 'images/photos/15.jpg', 'home', 'announcements', 'Robyn\'s nest article image', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(24, 'home_announcement_2', 'image', 'images/photos/33.jpg', 'home', 'announcements', 'Midas touch school article image', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(25, 'home_announcement_3', 'image', 'images/photos/17.jpg', 'home', 'announcements', 'Explorer newsletter image', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(26, 'home_announcement_4', 'image', 'images/photos/18.jpg', 'home', 'announcements', 'Unlocking potential article image', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(27, 'home_announcement_5', 'image', 'images/photos/19.jpg', 'home', 'announcements', 'School admissions article image', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(28, 'home_announcement_6', 'image', 'images/photos/20.jpg', 'home', 'announcements', 'Nurturing leaders article image', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(29, 'home_announcement_7', 'image', 'images/photos/21.jpg', 'home', 'announcements', 'Reception team article image', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(30, 'home_announcement_8', 'image', 'images/photos/22.jpg', 'home', 'announcements', 'Innovative approach article image', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(31, 'home_announcement_9', 'image', 'images/photos/23.jpg', 'home', 'announcements', 'Math magic article image', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(32, 'home_gallery_1', 'image', 'images/photos/24.jpg', 'home', 'gallery', 'Year in numbers gallery image 1', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(33, 'home_gallery_2', 'image', 'images/photos/25.jpg', 'home', 'gallery', 'Year in numbers gallery image 2', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(34, 'home_gallery_3', 'image', 'images/photos/26.jpg', 'home', 'gallery', 'Year in numbers gallery image 3', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(35, 'home_gallery_4', 'image', 'images/photos/27.jpg', 'home', 'gallery', 'Year in numbers gallery image 4', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(36, 'home_gallery_5', 'image', 'images/photos/28.jpg', 'home', 'gallery', 'Year in numbers gallery image 5', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(37, 'home_gallery_6', 'image', 'images/photos/29.jpg', 'home', 'gallery', 'Year in numbers gallery image 6', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(38, 'home_gallery_7', 'image', 'images/photos/30.jpg', 'home', 'gallery', 'Year in numbers gallery image 7', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(39, 'home_gallery_8', 'image', 'images/photos/31.jpg', 'home', 'gallery', 'Year in numbers gallery image 8', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(40, 'home_gallery_9', 'image', 'images/photos/32.jpg', 'home', 'gallery', 'Year in numbers gallery image 9', '2026-02-03 06:17:14', '2026-02-03 06:17:14'),
(41, 'home_decorations_hand', 'image', 'images/svg/hand.svg', 'home', 'decorations', 'Hand decoration SVG', '2026-02-03 06:20:57', '2026-02-03 06:29:38'),
(42, 'home_decorations_lotus', 'image', 'images/svg/lotus.svg', 'home', 'decorations', 'Lotus decoration SVG', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(43, 'home_decorations_yoga', 'image', 'images/svg/yoga.svg', 'home', 'decorations', 'Yoga decoration SVG', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(44, 'home_decorations_flower', 'image', 'images/svg/flower.svg', 'home', 'decorations', 'Flower decoration SVG', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(45, 'home_hero_c1357', 'video', 'images/photos/School files/Videos/C1357.MP4', 'home', 'hero', 'Main hero section video - Another year of memories', '2026-02-03 06:20:57', '2026-02-03 06:54:02'),
(46, 'home_decorations_chariot', 'image', 'images/svg/chariot.svg', 'home', 'decorations', 'Chariot decoration SVG', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(47, 'home_explore_5', 'video', 'images/photos/School files/Videos/5.mp4', 'home', 'explore', 'Explore with us section video', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(48, 'home_carousel_6', 'image', 'images/photos/6.jpg', 'home', 'carousel', 'Our values section image', '2026-02-03 06:20:57', '2026-02-03 06:58:17'),
(49, 'home_carousel_7', 'image', 'images/photos/7.jpg', 'home', 'carousel', 'Head welcome image 1', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(50, 'home_carousel_8', 'image', 'images/photos/8.jpg', 'home', 'carousel', 'Head welcome image 2', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(51, 'home_general_3', 'image', 'assets/photos/3.jpg', 'home', 'general', '', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(52, 'home_carousel_9', 'image', 'images/photos/9.jpg', 'home', 'carousel', 'Head welcome image 3', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(53, 'home_carousel_10', 'image', 'images/photos/10.jpg', 'home', 'carousel', 'Panchakoshas background image', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(54, 'home_carousel_11', 'image', 'images/photos/11.jpg', 'home', 'carousel', 'Learning compass image', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(55, 'home_general_asset_16', 'image', 'assets/images/decorations/badges/Asset-16.svg', 'home', 'general', '', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(56, 'home_general_asset_11', 'image', 'assets/images/decorations/badges/Asset-11.svg', 'home', 'general', '', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(57, 'home_general_asset_13', 'image', 'assets/images/decorations/badges/Asset-13.svg', 'home', 'general', '', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(58, 'home_general_asset_14', 'image', 'assets/images/decorations/badges/Asset-14.svg', 'home', 'general', '', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(59, 'home_general_asset_17', 'image', 'assets/images/decorations/badges/Asset-17.svg', 'home', 'general', '', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(60, 'home_general_asset_18', 'image', 'assets/images/decorations/badges/Asset-18.svg', 'home', 'general', '', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(61, 'home_general_asset_19', 'image', 'assets/images/decorations/badges/Asset-19.svg', 'home', 'general', '', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(62, 'home_decorations_6', 'image', 'images/photos/svg/6.svg', 'home', 'decorations', '6 decoration SVG', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(63, 'home_carousel_12', 'image', 'images/photos/12.jpg', 'home', 'carousel', 'Learning powers image', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(64, 'home_general_asset_10', 'image', 'assets/images/decorations/badges/Asset-10.svg', 'home', 'general', '', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(65, 'home_general_asset_4', 'image', 'assets/images/decorations/badges/Asset-4.svg', 'home', 'general', '', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(66, 'home_general_asset_6', 'image', 'assets/images/decorations/badges/Asset-6.svg', 'home', 'general', '', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(67, 'home_general_asset_5', 'image', 'assets/images/decorations/badges/Asset-5.svg', 'home', 'general', '', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(68, 'home_general_asset_7', 'image', 'assets/images/decorations/badges/Asset-7.svg', 'home', 'general', '', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(69, 'home_general_asset_8', 'image', 'assets/images/decorations/badges/Asset-8.svg', 'home', 'general', '', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(70, 'home_carousel_13', 'image', 'images/photos/13.jpg', 'home', 'carousel', 'Year 7&8 experience image 1', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(71, 'home_carousel_14', 'image', 'images/photos/14.jpg', 'home', 'carousel', 'Year 7&8 experience image 2', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(72, 'home_announcements_4', 'image', 'images/photos/4.jpg', 'home', 'announcements', 'Main announcement featured image', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(73, 'home_announcements_15', 'image', 'images/photos/15.jpg', 'home', 'announcements', 'Robyn\'s nest article', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(74, 'home_announcements_33', 'image', 'images/photos/33.jpg', 'home', 'announcements', 'Midas touch school article', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(75, 'home_announcements_17', 'image', 'images/photos/17.jpg', 'home', 'announcements', 'Explorer newsletter', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(76, 'home_announcements_18', 'image', 'images/photos/18.jpg', 'home', 'announcements', 'Unlocking potential article', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(77, 'home_announcements_19', 'image', 'images/photos/19.jpg', 'home', 'announcements', 'School admissions article', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(78, 'home_announcements_20', 'image', 'images/photos/20.jpg', 'home', 'announcements', 'Nurturing leaders article', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(79, 'home_announcements_21', 'image', 'images/photos/21.jpg', 'home', 'announcements', 'Reception team article', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(80, 'home_announcements_22', 'image', 'images/photos/22.jpg', 'home', 'announcements', 'Innovative approach article', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(81, 'home_announcements_23', 'image', 'images/photos/23.jpg', 'home', 'announcements', 'Math magic article', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(82, 'home_decorations_drum', 'image', 'images/svg/drum.svg', 'home', 'decorations', 'Drum decoration SVG', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(83, 'home_decorations_pot', 'image', 'images/svg/pot.svg', 'home', 'decorations', 'Pot decoration SVG', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(84, 'home_testimonials_6', 'video', 'images/photos/School files/Videos/6.mp4', 'home', 'testimonials', 'Hear from our families video', '2026-02-03 06:20:57', '2026-02-03 07:24:45'),
(85, 'home_gallery_24', 'image', 'images/photos/24.jpg', 'home', 'gallery', 'Year in numbers gallery image 1', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(86, 'home_gallery_25', 'image', 'images/photos/25.jpg', 'home', 'gallery', 'Year in numbers gallery image 2', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(87, 'home_gallery_26', 'image', 'images/photos/26.jpg', 'home', 'gallery', 'Year in numbers gallery image 3', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(88, 'home_gallery_27', 'image', 'images/photos/27.jpg', 'home', 'gallery', 'Year in numbers gallery image 4', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(89, 'home_gallery_28', 'image', 'images/photos/28.jpg', 'home', 'gallery', 'Year in numbers gallery image 5', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(90, 'home_gallery_29', 'image', 'images/photos/29.jpg', 'home', 'gallery', 'Year in numbers gallery image 6', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(91, 'home_gallery_30', 'image', 'images/photos/30.jpg', 'home', 'gallery', 'Year in numbers gallery image 7', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(92, 'home_gallery_31', 'image', 'images/photos/31.jpg', 'home', 'gallery', 'Year in numbers gallery image 8', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(93, 'home_gallery_32', 'image', 'images/photos/32.jpg', 'home', 'gallery', 'Year in numbers gallery image 9', '2026-02-03 06:20:57', '2026-02-03 06:20:57'),
(145, 'home_video_6', 'video', 'images/photos/School files/Videos/6.mp4', 'home', 'hero', 'Hero section background video', '2026-02-03 07:22:20', '2026-02-03 07:24:15'),
(146, 'admissions_hero_7', 'image', 'images/photos/7.jpg', 'admissions', 'hero', 'Admissions page hero image', '2026-02-04 05:44:52', '2026-02-04 05:53:58'),
(147, 'admissions_video_c1357', 'video', 'images/photos/School files/Videos/C1357.MP4', 'admissions', 'testimonial', 'Testimonial section background video', '2026-02-04 05:44:52', '2026-02-04 05:53:58'),
(148, 'admissions_leaf_image', 'image', 'images/photos/leaf-image/test-leaf-image (3).png', 'admissions', 'content', 'Decorative leaf image in content section', '2026-02-04 05:44:52', '2026-02-04 05:53:58'),
(149, 'admissions_svg_hand', 'image', 'images/svg/hand.svg', 'admissions', 'decorations', 'Hand SVG decoration', '2026-02-04 05:44:52', '2026-02-04 05:53:58'),
(150, 'admissions_svg_lotus', 'image', 'images/svg/lotus.svg', 'admissions', 'decorations', 'Lotus SVG decoration', '2026-02-04 05:44:52', '2026-02-04 05:53:58'),
(161, 'book_visit_hero_33', 'image', 'images/photos/33.jpg', 'book-a-visit', 'hero', 'Book a visit page hero image', '2026-02-04 05:58:31', '2026-02-04 05:59:47'),
(162, 'book_visit_svg_hand', 'image', 'images/svg/hand.svg', 'book-a-visit', 'decorations', 'Hand SVG decoration', '2026-02-04 05:58:31', '2026-02-04 05:58:31'),
(163, 'scholarships_hero_28', 'image', 'images/photos/28.jpg', 'scholarships', 'hero', 'Scholarships page hero image', '2026-02-04 06:01:47', '2026-02-04 06:02:09'),
(164, 'fees_hero_16', 'image', 'images/photos/16.jpg', 'fees', 'hero', 'Fees page hero image', '2026-02-04 06:04:12', '2026-02-04 06:04:41'),
(168, 'faqs_hero_21', 'image', 'images/photos/21.jpg', 'faqs', 'hero', 'FAQs page hero image', '2026-02-04 06:13:21', '2026-02-04 06:15:07'),
(169, 'faqs_testimonial_1', 'image', 'images/photos/13.JPG', 'faqs', 'testimonials', 'Testimonial video thumbnail 1', '2026-02-04 06:13:21', '2026-02-04 06:13:21'),
(170, 'faqs_testimonial_2', 'image', 'images/photos/11.JPG', 'faqs', 'testimonials', 'Testimonial video thumbnail 2', '2026-02-04 06:13:21', '2026-02-04 06:14:53'),
(171, 'faqs_question_1', 'image', 'images/photos/7.jpg', 'faqs', 'faq_videos', 'FAQ question video thumbnail - Which senior school', '2026-02-04 06:13:21', '2026-02-04 06:13:21'),
(172, 'faqs_question_3', 'image', 'images/photos/8.jpg', 'faqs', 'faq_videos', 'FAQ question video thumbnail - Homework policy', '2026-02-04 06:13:21', '2026-02-04 06:13:21'),
(173, 'faqs_question_5', 'image', 'images/photos/6.jpg', 'faqs', 'faq_videos', 'FAQ question video thumbnail - Class sizes', '2026-02-04 06:13:21', '2026-02-04 06:13:21'),
(174, 'faqs_question_10', 'image', 'images/photos/22.jpg', 'faqs', 'faq_videos', 'FAQ question video thumbnail - Senior school support', '2026-02-04 06:13:21', '2026-02-04 06:13:21'),
(175, 'faqs_question_13', 'image', 'images/photos/24.jpg', 'faqs', 'faq_videos', 'FAQ question video thumbnail - Sports', '2026-02-04 06:13:21', '2026-02-04 06:13:21'),
(176, 'faqs_question_16', 'image', 'images/photos/31.jpg', 'faqs', 'faq_videos', 'FAQ question video thumbnail - Charity work', '2026-02-04 06:13:21', '2026-02-04 06:13:21'),
(186, 'term_dates_hero_23', 'image', 'images/photos/23.jpg', 'term-dates', 'hero', 'Term dates page hero image', '2026-02-04 06:21:25', '2026-02-04 06:22:25'),
(187, 'term_dates_announcement_1', 'image', 'images/photos/31.jpg', 'term-dates', 'announcements', 'Announcement card 1 - Parent Survey Results', '2026-02-04 06:21:25', '2026-02-04 06:21:25'),
(188, 'term_dates_announcement_2', 'image', 'images/photos/24.jpg', 'term-dates', 'announcements', 'Announcement card 2 - Explorer Newsletter', '2026-02-04 06:21:25', '2026-02-04 06:21:25'),
(189, 'term_dates_announcement_3', 'image', 'images/photos/20.jpg', 'term-dates', 'announcements', 'Announcement card 3 - VAT Changes', '2026-02-04 06:21:25', '2026-02-04 06:21:25'),
(190, 'term_dates_announcement_5', 'image', 'images/photos/22.jpg', 'term-dates', 'announcements', 'Announcement card 5 - Joining MidasTouch', '2026-02-04 06:21:25', '2026-02-04 06:21:25'),
(191, 'term_dates_announcement_7', 'image', 'images/photos/40.jpg', 'term-dates', 'announcements', 'Announcement card 7 - Prep School Education', '2026-02-04 06:21:25', '2026-02-04 06:21:25'),
(192, 'term_dates_announcement_8', 'image', 'images/photos/6.jpg', 'term-dates', 'announcements', 'Announcement card 8 - School Admissions', '2026-02-04 06:21:25', '2026-02-04 06:21:25'),
(193, 'term_dates_announcement_9', 'image', 'images/photos/5.jpg', 'term-dates', 'announcements', 'Announcement card 9 - Future Leaders', '2026-02-04 06:21:25', '2026-02-04 06:21:25'),
(194, 'term_dates_announcement_10', 'image', 'images/photos/13.jpg', 'term-dates', 'announcements', 'Announcement card 10 - Reception Team', '2026-02-04 06:21:25', '2026-02-04 06:21:25'),
(195, 'term_dates_announcement_11', 'image', 'images/photos/41.jpg', 'term-dates', 'announcements', 'Announcement card 11 - Spring Newsletter', '2026-02-04 06:21:25', '2026-02-04 06:21:25'),
(206, 'uniform_hero_26', 'image', 'images/photos/26.jpg', 'uniform-essentials', 'hero', 'Uniform essentials page hero image', '2026-02-04 06:25:33', '2026-02-04 06:25:57'),
(207, 'uniform_gallery_27', 'image', 'images/photos/27.jpg', 'uniform-essentials', 'gallery', 'Uniform gallery/showcase image', '2026-02-04 06:25:33', '2026-02-04 06:25:33'),
(210, 'welcome_hero_12', 'image', 'images/photos/12.jpg', 'welcome', 'hero', 'Welcome page hero image', '2026-02-04 06:31:01', '2026-02-04 06:31:31'),
(211, 'welcome_empathy_9', 'image', 'images/photos/9.jpg', 'welcome', 'empathy', 'Our Values - Empathy section image', '2026-02-04 06:31:01', '2026-02-04 06:31:01'),
(212, 'welcome_headteacher_21', 'image', 'images/photos/21.jpg', 'welcome', 'headteacher', 'Ask our headteacher section image', '2026-02-04 06:31:01', '2026-02-04 06:31:01'),
(213, 'welcome_video_6', 'video', 'images/photos/School files/Videos/6.mp4', 'welcome', 'hero-video', 'Welcome page local video (6.mp4)', '2026-02-04 06:31:01', '2026-02-04 06:31:01'),
(214, 'welcome_youtube_1', 'video', 'https://youtu.be/0PmsR3B_8xM?si=lg_9VrplJ-YYCj3z', 'welcome', 'hear-from-head', 'YouTube video - Hear from our Head', '2026-02-04 06:31:01', '2026-02-04 06:31:01'),
(215, 'welcome_youtube_1_embed', 'video', 'https://www.youtube.com/embed/0PmsR3B_8xM?si=lg_9VrplJ-YYCj3z', 'welcome', 'hear-from-head-embed', 'YouTube embed URL - Hear from our Head', '2026-02-04 06:31:01', '2026-02-04 06:31:01'),
(216, 'welcome_youtube_2', 'video', 'https://youtu.be/pBzOk9IqzLg?si=HMdCx6lf7ZX2JKRt', 'welcome', 'main-video', 'YouTube video - Main welcome video', '2026-02-04 06:31:01', '2026-02-04 06:31:01'),
(217, 'welcome_youtube_2_embed', 'video', 'https://www.youtube.com/embed/pBzOk9IqzLg?si=HMdCx6lf7ZX2JKRt', 'welcome', 'main-video-embed', 'YouTube embed URL - Main welcome video', '2026-02-04 06:31:01', '2026-02-04 06:31:01'),
(226, 'learning_hero_28', 'image', 'images/photos/28.jpg', 'learning-philosophy', 'hero', 'Learning philosophy page hero image', '2026-02-04 06:35:55', '2026-02-04 06:38:05'),
(227, 'learning_gif_1', 'image', 'images/photos/gif/gif1.png', 'learning-philosophy', 'decoration', 'Decorative GIF 1 - Mudpi logo', '2026-02-04 06:35:55', '2026-02-04 06:35:55'),
(228, 'learning_gif_2', 'image', 'images/photos/gif/gif2.png', 'learning-philosophy', 'decoration', 'Decorative GIF 2 - Reading boy', '2026-02-04 06:35:55', '2026-02-04 06:35:55'),
(229, 'learning_carousel_1', 'image', 'images/photos/13.jpg', 'learning-philosophy', 'carousel', 'Forest School carousel image 1', '2026-02-04 06:35:55', '2026-02-04 06:35:55'),
(230, 'learning_carousel_2', 'image', 'images/photos/15.jpg', 'learning-philosophy', 'carousel', 'Forest School carousel image 2', '2026-02-04 06:35:55', '2026-02-04 06:35:55'),
(231, 'learning_carousel_3', 'image', 'images/photos/17.jpg', 'learning-philosophy', 'carousel', 'Forest School carousel image 3', '2026-02-04 06:35:55', '2026-02-04 06:35:55'),
(232, 'learning_leaf_1', 'image', 'images/photos/Leaf-image/test-leaf-image (1).png', 'learning-philosophy', 'content', 'Leaf image 1 - Our Values section', '2026-02-04 06:35:55', '2026-02-04 06:35:55'),
(233, 'learning_leaf_2', 'image', 'images/photos/Leaf-image/test-leaf-image (2).png', 'learning-philosophy', 'content', 'Leaf image 2 - Content section', '2026-02-04 06:35:55', '2026-02-04 06:35:55'),
(234, 'learning_video_6', 'video', 'images/photos/School files/Videos/6.mp4', 'learning-philosophy', 'hero-video', 'Learning philosophy local video (6.mp4)', '2026-02-04 06:35:55', '2026-02-04 06:35:55'),
(235, 'learning_youtube_1', 'video', 'https://youtu.be/0PmsR3B_8xM?si=lg_9VrplJ-YYCj3z', 'learning-philosophy', 'empowering-minds', 'YouTube video - Empowering Minds', '2026-02-04 06:35:55', '2026-02-04 06:35:55'),
(236, 'learning_youtube_1_embed', 'video', 'https://www.youtube.com/embed/0PmsR3B_8xM?si=lg_9VrplJ-YYCj3z', 'learning-philosophy', 'empowering-minds-embed', 'YouTube embed URL - Empowering Minds', '2026-02-04 06:35:55', '2026-02-04 06:35:55'),
(237, 'learning_youtube_2', 'video', 'https://youtu.be/pBzOk9IqzLg?si=HMdCx6lf7ZX2JKRt', 'learning-philosophy', 'main-video', 'YouTube video - Main philosophy video', '2026-02-04 06:35:55', '2026-02-04 06:35:55'),
(238, 'learning_youtube_2_embed', 'video', 'https://www.youtube.com/embed/pBzOk9IqzLg?si=HMdCx6lf7ZX2JKRt', 'learning-philosophy', 'main-video-embed', 'YouTube embed URL - Main philosophy video', '2026-02-04 06:35:55', '2026-02-04 06:35:55'),
(252, 'values_hero_14', 'image', 'images/photos/14.jpg', 'our-values', 'hero', 'Our values page hero image', '2026-02-04 06:43:58', '2026-02-04 06:44:43'),
(253, 'values_empathy_21', 'image', 'images/photos/21.jpg', 'our-values', 'carousel', 'Empathy value card image', '2026-02-04 06:43:58', '2026-02-04 06:43:58'),
(254, 'values_vibrancy_22', 'image', 'images/photos/22.jpg', 'our-values', 'carousel', 'Vibrancy value card image', '2026-02-04 06:43:58', '2026-02-04 06:43:58'),
(255, 'values_adventure_23', 'image', 'images/photos/23.jpg', 'our-values', 'carousel', 'Adventure value card image', '2026-02-04 06:43:58', '2026-02-04 06:43:58'),
(256, 'values_determination_24', 'image', 'images/photos/24.jpg', 'our-values', 'carousel', 'Determination value card image', '2026-02-04 06:43:58', '2026-02-04 06:43:58'),
(257, 'values_instagram_1', 'image', 'images/photos/16.jpg', 'our-values', 'instagram', 'Instagram feed image 1', '2026-02-04 06:43:58', '2026-02-04 06:43:58'),
(258, 'values_instagram_2', 'image', 'images/photos/17.jpg', 'our-values', 'instagram', 'Instagram feed image 2', '2026-02-04 06:43:58', '2026-02-04 06:43:58'),
(259, 'values_instagram_3', 'image', 'images/photos/18.jpg', 'our-values', 'instagram', 'Instagram feed image 3', '2026-02-04 06:43:58', '2026-02-04 06:43:58'),
(260, 'values_instagram_4', 'image', 'images/photos/19.jpg', 'our-values', 'instagram', 'Instagram feed image 4', '2026-02-04 06:43:58', '2026-02-04 06:43:58'),
(261, 'values_bottom_10', 'image', 'images/photos/10.jpg', 'our-values', 'content', 'Bottom section image', '2026-02-04 06:43:58', '2026-02-04 06:43:58'),
(262, 'values_youtube_1', 'video', 'https://youtu.be/0PmsR3B_8xM?si=lg_9VrplJ-YYCj3z', 'our-values', 'school-values', 'YouTube video - School values', '2026-02-04 06:43:58', '2026-02-04 06:43:58'),
(263, 'values_youtube_1_embed', 'video', 'https://www.youtube.com/embed/0PmsR3B_8xM?si=lg_9VrplJ-YYCj3z', 'our-values', 'school-values-embed', 'YouTube embed URL - School values', '2026-02-04 06:43:58', '2026-02-04 06:43:58'),
(264, 'values_youtube_2', 'video', 'https://youtu.be/pBzOk9IqzLg?si=HMdCx6lf7ZX2JKRt', 'our-values', 'main-video', 'YouTube video - Main values video', '2026-02-04 06:43:58', '2026-02-04 06:43:58'),
(265, 'values_youtube_2_embed', 'video', 'https://www.youtube.com/embed/pBzOk9IqzLg?si=HMdCx6lf7ZX2JKRt', 'our-values', 'main-video-embed', 'YouTube embed URL - Main values video', '2026-02-04 06:43:58', '2026-02-04 06:43:58'),
(266, 'facilities_hero_10', 'image', 'images/photos/10.jpg', 'exceptional-facilities', 'hero', 'Facilities page hero image', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(267, 'facilities_gallery_21', 'image', 'images/photos/21.jpg', 'exceptional-facilities', 'gallery', 'School map gallery image 1', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(268, 'facilities_gallery_23', 'image', 'images/photos/23.jpg', 'exceptional-facilities', 'gallery', 'School map gallery image 2', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(269, 'facilities_gallery_27', 'image', 'images/photos/27.jpg', 'exceptional-facilities', 'gallery', 'Take a look around gallery image 1', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(270, 'facilities_gallery_28', 'image', 'images/photos/28.jpg', 'exceptional-facilities', 'gallery', 'Take a look around gallery image 2', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(271, 'facilities_gallery_30', 'image', 'images/photos/30.jpg', 'exceptional-facilities', 'gallery', 'Take a look around gallery image 3', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(272, 'facilities_gallery_31', 'image', 'images/photos/31.jpg', 'exceptional-facilities', 'gallery', 'Take a look around gallery image 4', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(273, 'facilities_gallery_33', 'image', 'images/photos/33.jpg', 'exceptional-facilities', 'gallery', 'Take a look around gallery image 5', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(274, 'facilities_gallery_16', 'image', 'images/photos/16.jpg', 'exceptional-facilities', 'gallery', 'Take a look around gallery image 6', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(275, 'facilities_gallery_17', 'image', 'images/photos/17.jpg', 'exceptional-facilities', 'gallery', 'Take a look around gallery image 7', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(276, 'facilities_gallery_18', 'image', 'images/photos/18.jpg', 'exceptional-facilities', 'gallery', 'Take a look around gallery image 8', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(277, 'facilities_gallery_19', 'image', 'images/photos/19.jpg', 'exceptional-facilities', 'gallery', 'Take a look around gallery image 9', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(278, 'facilities_gallery_13', 'image', 'images/photos/13.jpg', 'exceptional-facilities', 'gallery', 'Take a look around gallery image 10', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(279, 'facilities_gallery_9', 'image', 'images/photos/9.jpg', 'exceptional-facilities', 'gallery', 'Take a look around gallery image 11', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(280, 'facilities_gallery_6', 'image', 'images/photos/6.jpg', 'exceptional-facilities', 'gallery', 'Take a look around gallery image 12', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(281, 'facilities_gif_2', 'image', 'images/photos/gif/gif2.png', 'exceptional-facilities', 'decoration', 'Decorative GIF 2', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(282, 'facilities_video_3', 'video', 'images/photos/School files/Videos/3.mp4', 'exceptional-facilities', 'hero-video', 'Facilities local video (3.mp4)', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(283, 'ethos_hero_15', 'image', 'images/photos/15.jpg', 'our-ethos', 'hero', 'Ethos page hero image', '2026-02-04 06:48:58', '2026-02-04 06:49:59'),
(284, 'ethos_gallery_10', 'image', 'images/photos/10.jpg', 'our-ethos', 'gallery', 'Panchakoshas gallery image', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(285, 'ethos_annamaya_24', 'image', 'images/photos/24.jpg', 'our-ethos', 'panchakoshas', 'Annamaya Kosha - Physical Body', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(286, 'ethos_pranamaya_9', 'image', 'images/photos/9.jpg', 'our-ethos', 'panchakoshas', 'Pranamaya Kosha - Energy Body', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(287, 'ethos_manomaya_13', 'image', 'images/photos/13.jpg', 'our-ethos', 'panchakoshas', 'Manomaya Kosha - Mental Body', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(288, 'ethos_vijnanamaya_6', 'image', 'images/photos/6.jpg', 'our-ethos', 'panchakoshas', 'Vijnanamaya Kosha - Intellectual Body', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(289, 'ethos_anandamaya_23', 'image', 'images/photos/23.jpg', 'our-ethos', 'panchakoshas', 'Anandamaya Kosha - Bliss Body', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(290, 'ethos_award_40', 'image', 'images/photos/40.jpg', 'our-ethos', 'content', 'Award winning section image', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(291, 'ethos_gif_1', 'image', 'images/photos/gif/gif1.png', 'our-ethos', 'decoration', 'Decorative GIF 1 - Mudpi logo', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(292, 'ethos_video_6', 'video', 'images/photos/School files/Videos/6.mp4', 'our-ethos', 'hero-video', 'Ethos local video (6.mp4)', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(293, 'award_hero_16', 'image', 'images/photos/16.jpg', 'award-winning', 'hero', 'Award winning page hero image', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(294, 'award_facilities_31', 'image', 'images/photos/31.jpg', 'award-winning', 'content', 'World class facilities section image', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(295, 'award_open_week_10', 'image', 'images/photos/10.jpg', 'award-winning', 'content', 'Open week section image', '2026-02-04 06:48:58', '2026-02-04 06:48:58'),
(326, 'gallery_hero_19', 'image', 'images/photos/19.jpg', 'gallery', 'hero', 'Gallery page hero image', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(327, 'gallery_testimonial_6', 'image', 'images/photos/6.jpg', 'gallery', 'testimonials', 'Testimonial thumbnail 1', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(328, 'gallery_testimonial_5', 'image', 'images/photos/5.jpg', 'gallery', 'testimonials', 'Testimonial thumbnail 2', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(329, 'gallery_faq_36', 'image', 'images/photos/36.jpg', 'gallery', 'faq', 'FAQ video thumbnail 1', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(330, 'gallery_faq_37', 'image', 'images/photos/37.jpg', 'gallery', 'faq', 'FAQ video thumbnail 2', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(331, 'gallery_faq_38', 'image', 'images/photos/38.jpg', 'gallery', 'faq', 'FAQ video thumbnail 3', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(332, 'gallery_gif_1', 'image', 'images/photos/gif/gif1.png', 'gallery', 'decoration', 'Decorative GIF - Mudpi logo', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(333, 'gallery_video_3', 'video', 'images/photos/School files/Videos/3.mp4', 'gallery', 'hero-video', 'Gallery local video (3.mp4)', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(334, 'gallery_video_6', 'video', 'images/photos/School files/Videos/6.mp4', 'gallery', 'hero-video', 'Gallery local video (6.mp4)', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(335, 'gallery_video_5', 'video', 'images/photos/School files/Videos/5.mp4', 'gallery', 'hero-video', 'Gallery local video (5.mp4)', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(336, 'events_hero_30', 'image', 'images/photos/30.jpg', 'events', 'hero', 'Events page hero image', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(337, 'events_gallery_17', 'image', 'images/photos/17.jpg', 'events', 'gallery', 'Events gallery image 1', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(338, 'events_gallery_21', 'image', 'images/photos/21.jpg', 'events', 'gallery', 'Events gallery image 2', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(339, 'events_gallery_22', 'image', 'images/photos/22.jpg', 'events', 'gallery', 'Events gallery image 3', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(340, 'events_gallery_40', 'image', 'images/photos/40.jpg', 'events', 'gallery', 'Events gallery image 4', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(341, 'events_gallery_41', 'image', 'images/photos/41.jpg', 'events', 'gallery', 'Events gallery image 5', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(342, 'events_carousel_13', 'image', 'images/photos/13.jpg', 'events', 'carousel', 'Events carousel image 1', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(343, 'events_carousel_9', 'image', 'images/photos/9.jpg', 'events', 'carousel', 'Events carousel image 2', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(344, 'events_carousel_32', 'image', 'images/photos/32.jpg', 'events', 'carousel', 'Events carousel image 3', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(345, 'events_gif_1', 'image', 'images/photos/gif/gif1.png', 'events', 'decoration', 'Decorative GIF - Mudpi logo', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(346, 'faculty_hero_32', 'image', 'images/photos/32.jpg', 'faculty', 'hero', 'Faculty page hero image', '2026-02-04 06:57:26', '2026-02-04 06:58:08'),
(347, 'faculty_content_27', 'image', 'images/photos/27.jpg', 'faculty', 'content', 'Faculty content image', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(348, 'faculty_leaf_3', 'image', 'images/photos/leaf-image/test-leaf-image (3).png', 'faculty', 'decoration', 'Decorative leaf image', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(349, 'faculty_carousel_37', 'image', 'images/photos/37.jpg', 'faculty', 'carousel', 'Faculty carousel image 1', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(350, 'faculty_carousel_17', 'image', 'images/photos/17.jpg', 'faculty', 'carousel', 'Faculty carousel image 2', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(351, 'faculty_carousel_36', 'image', 'images/photos/36.jpg', 'faculty', 'carousel', 'Faculty carousel image 3', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(352, 'faculty_carousel_38', 'image', 'images/photos/38.jpg', 'faculty', 'carousel', 'Faculty carousel image 4', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(353, 'faculty_numbers_28', 'image', 'images/photos/28.jpg', 'faculty', 'year-in-numbers', 'Year in numbers image 1', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(354, 'faculty_numbers_29', 'image', 'images/photos/29.jpg', 'faculty', 'year-in-numbers', 'Year in numbers image 2', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(355, 'faculty_numbers_31', 'image', 'images/photos/31.jpg', 'faculty', 'year-in-numbers', 'Year in numbers image 3', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(356, 'success_hero_26', 'image', 'images/photos/26.jpg', 'success-stories', 'hero', 'Success stories page hero image', '2026-02-04 06:57:26', '2026-02-04 06:57:26'),
(388, 'blogs_hero_19', 'image', 'images/photos/19.jpg', 'blogs', 'hero', 'Blogs page hero image', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(389, 'blogs_testimonial_6', 'image', 'images/photos/6.jpg', 'blogs', 'testimonials', 'Blogs testimonial thumbnail 1', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(390, 'blogs_testimonial_5', 'image', 'images/photos/5.jpg', 'blogs', 'testimonials', 'Blogs testimonial thumbnail 2', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(391, 'blogs_faq_36', 'image', 'images/photos/36.jpg', 'blogs', 'faq', 'Blogs FAQ video thumbnail 1', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(392, 'blogs_faq_37', 'image', 'images/photos/37.jpg', 'blogs', 'faq', 'Blogs FAQ video thumbnail 2', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(393, 'blogs_faq_38', 'image', 'images/photos/38.jpg', 'blogs', 'faq', 'Blogs FAQ video thumbnail 3', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(394, 'blogs_gif_1', 'image', 'images/photos/gif/gif1.png', 'blogs', 'decoration', 'Decorative GIF - Mudpi logo', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(395, 'blogs_video_3', 'video', 'images/photos/School files/Videos/3.mp4', 'blogs', 'hero-video', 'Blogs local video (3.mp4)', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(396, 'blogs_video_6', 'video', 'images/photos/School files/Videos/6.mp4', 'blogs', 'hero-video', 'Blogs local video (6.mp4)', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(397, 'blogs_video_5', 'video', 'images/photos/School files/Videos/5.mp4', 'blogs', 'hero-video', 'Blogs local video (5.mp4)', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(398, 'testimonials_hero_35', 'image', 'images/photos/35.jpg', 'testimonials', 'hero', 'Testimonials page hero image', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(399, 'testimonials_carousel_28', 'image', 'images/photos/28.jpg', 'testimonials', 'carousel', 'Testimonials carousel image', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(400, 'testimonials_video_31', 'image', 'images/photos/31.jpg', 'testimonials', 'video-grid', 'Testimonials video thumbnail 1', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(401, 'testimonials_video_33', 'image', 'images/photos/33.jpg', 'testimonials', 'video-grid', 'Testimonials video thumbnail 2', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(402, 'testimonials_grid_26', 'image', 'images/photos/26.jpg', 'testimonials', 'grid', 'Testimonials grid image 1', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(403, 'testimonials_grid_30', 'image', 'images/photos/30.jpg', 'testimonials', 'grid', 'Testimonials grid image 2', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(404, 'testimonials_grid_40', 'image', 'images/photos/40.jpg', 'testimonials', 'grid', 'Testimonials grid image 3', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(405, 'testimonials_grid_25', 'image', 'images/photos/25.jpg', 'testimonials', 'grid', 'Testimonials grid image 4', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(406, 'testimonials_signpost_8', 'image', 'images/photos/8.jpg', 'testimonials', 'signpost', 'Testimonials signpost image', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(407, 'testimonials_gif_2', 'image', 'images/photos/gif/gif2.png', 'testimonials', 'decoration', 'Decorative GIF - Reading girl', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(408, 'followus_hero_13', 'image', 'images/photos/13.jpg', 'follow-us', 'hero', 'Follow Us page hero image', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(409, 'followus_leaf_2', 'image', 'images/photos/leaf-image/test-leaf-image (2).png', 'follow-us', 'decoration', 'Decorative leaf image', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(410, 'followus_signpost_33', 'image', 'images/photos/33.jpg', 'follow-us', 'signpost', 'Follow Us signpost image', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(411, 'alumni_hero_10', 'image', 'images/uploads/alumni_hero_10_1770196166.jpg', 'alumni', 'hero', 'Alumni page hero image', '2026-02-04 07:11:06', '2026-02-04 09:09:26'),
(412, 'alumni_gif_2', 'image', 'images/photos/gif/gif2.png', 'alumni', 'decoration', 'Decorative GIF - Reading girl', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(413, 'alumni_journey_5', 'image', 'images/uploads/alumni_journey_5_1770268918.jpg', 'alumni', 'journey', 'Alumni journey image', '2026-02-04 07:11:06', '2026-02-05 05:21:58'),
(414, 'alumni_history_6', 'image', 'images/photos/6.jpg', 'alumni', 'history-carousel', 'Alumni history 1925', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(415, 'alumni_history_7', 'image', 'images/photos/7.jpg', 'alumni', 'history-carousel', 'Alumni history 1927', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(416, 'alumni_history_8', 'image', 'images/photos/8.jpg', 'alumni', 'history-carousel', 'Alumni history 1960', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(417, 'alumni_history_9', 'image', 'images/photos/9.jpg', 'alumni', 'history-carousel', 'Alumni history 1975', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(418, 'alumni_history_13', 'image', 'images/photos/13.jpg', 'alumni', 'history-carousel', 'Alumni history 1978', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(419, 'alumni_history_14', 'image', 'images/photos/14.jpg', 'alumni', 'history-carousel', 'Alumni history 1986', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(420, 'alumni_history_15', 'image', 'images/photos/15.jpg', 'alumni', 'history-carousel', 'Alumni history 1987', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(421, 'alumni_history_16', 'image', 'images/photos/16.jpg', 'alumni', 'history-carousel', 'Alumni history 1991', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(422, 'alumni_history_17', 'image', 'images/photos/17.jpg', 'alumni', 'history-carousel', 'Alumni history 1993', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(423, 'alumni_history_18', 'image', 'images/photos/18.jpg', 'alumni', 'history-carousel', 'Alumni history 2006', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(424, 'alumni_history_19', 'image', 'images/photos/19.jpg', 'alumni', 'history-carousel', 'Alumni history 2007', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(425, 'alumni_history_20', 'image', 'images/photos/20.jpg', 'alumni', 'history-carousel', 'Alumni history 2008', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(426, 'alumni_history_21', 'image', 'images/photos/21.jpg', 'alumni', 'history-carousel', 'Alumni history 2015', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(427, 'alumni_history_22', 'image', 'images/photos/22.jpg', 'alumni', 'history-carousel', 'Alumni history 2020', '2026-02-04 07:11:06', '2026-02-04 07:11:06'),
(468, 'mission_hero_42', 'image', 'images/photos/42.jpg', 'mission-vision', 'hero', 'Mission & Vision page hero image', '2026-02-04 07:19:28', '2026-02-04 07:19:28'),
(469, 'mission_leaf_1', 'image', 'images/photos/leaf-image/test-leaf-image (1).png', 'mission-vision', 'decoration', 'Decorative leaf image', '2026-02-04 07:19:28', '2026-02-04 07:19:28'),
(470, 'mission_video_3', 'video', 'images/photos/School files/Videos/3.mp4', 'mission-vision', 'signpost-video', 'Mission signpost video (3.mp4)', '2026-02-04 07:19:28', '2026-02-04 07:19:28'),
(471, 'leadership_hero_40', 'image', 'images/photos/40.jpg', 'our-leadership-team', 'hero', 'Leadership Team page hero image', '2026-02-04 07:19:28', '2026-02-04 07:19:28'),
(472, 'leadership_leaf_1', 'image', 'images/photos/leaf-image/test-leaf-image (1).png', 'our-leadership-team', 'decoration', 'Decorative leaf image', '2026-02-04 07:19:28', '2026-02-04 07:19:28'),
(473, 'leadership_video_5', 'video', 'images/photos/School files/Videos/5.mp4', 'our-leadership-team', 'signpost-video', 'Leadership signpost video (5.mp4)', '2026-02-04 07:19:28', '2026-02-04 07:19:28'),
(474, 'employment_hero_22', 'image', 'images/photos/22.jpg', 'employment-opportunities', 'hero', 'Employment Opportunities page hero image', '2026-02-04 07:19:28', '2026-02-04 07:19:28'),
(475, 'employment_job_29', 'image', 'images/photos/29.jpg', 'employment-opportunities', 'job-carousel', 'Job posting - Head of Drama', '2026-02-04 07:19:28', '2026-02-04 07:19:28'),
(476, 'employment_job_21', 'image', 'images/photos/21.jpg', 'employment-opportunities', 'job-carousel', 'Job posting - Head of Learning Enhancement', '2026-02-04 07:19:28', '2026-02-04 07:19:28'),
(477, 'employment_job_23', 'image', 'images/photos/23.jpg', 'employment-opportunities', 'job-carousel', 'Job posting - Holiday Club Assistant', '2026-02-04 07:19:28', '2026-02-04 07:19:28'),
(478, 'employment_job_24', 'image', 'images/photos/24.jpg', 'employment-opportunities', 'job-carousel', 'Job posting - Sports Graduate', '2026-02-04 07:19:28', '2026-02-04 07:19:28'),
(479, 'employment_job_25', 'image', 'images/photos/25.jpg', 'employment-opportunities', 'job-carousel', 'Job posting - Domestic Assistant', '2026-02-04 07:19:28', '2026-02-04 07:19:28'),
(480, 'partnership_hero_13', 'image', 'images/photos/13.jpg', 'partnership-colloboration', 'hero', 'Partnership & Collaboration page hero image', '2026-02-04 07:19:28', '2026-02-04 07:19:28'),
(481, 'partnership_leaf_1', 'image', 'images/photos/leaf-image/test-leaf-image (1).png', 'partnership-colloboration', 'decoration', 'Decorative leaf image', '2026-02-04 07:19:28', '2026-02-04 07:19:28'),
(482, 'partnership_video_6', 'video', 'images/photos/School files/Videos/6.mp4', 'partnership-colloboration', 'signpost-video', 'Partnership signpost video (6.mp4)', '2026-02-04 07:19:28', '2026-02-04 07:19:28'),
(483, 'policies_hero_16', 'image', 'images/photos/16.jpg', 'policies-reports', 'hero', 'Policies & Reports page hero image', '2026-02-04 07:19:28', '2026-02-04 07:19:58'),
(500, 'contact_hero_42', 'image', 'images/photos/42.jpg', 'contact-us', 'hero', 'Contact Us page hero image', '2026-02-04 07:22:09', '2026-02-04 07:22:09'),
(502, 'alumni_history_23', 'image', 'images/photos/23.jpg', 'alumni', 'history', 'History: Libraries opened', '2026-02-04 09:10:53', '2026-02-04 09:10:53'),
(503, 'alumni_history_24', 'image', 'images/photos/24.jpg', 'alumni', 'history', 'History: Art room Cedar building', '2026-02-04 09:10:53', '2026-02-04 09:10:53'),
(504, 'alumni_history_25', 'image', 'images/photos/25.jpg', 'alumni', 'history', 'History: Secret Garden', '2026-02-04 09:10:53', '2026-02-04 09:10:53'),
(505, 'alumni_history_26', 'image', 'images/photos/26.jpg', 'alumni', 'history', 'History: Artists Courtyard', '2026-02-04 09:10:53', '2026-02-04 09:10:53'),
(506, 'alumni_history_27', 'image', 'images/photos/27.jpg', 'alumni', 'history', 'History: Dining room refurbished', '2026-02-04 09:10:53', '2026-02-04 09:10:53'),
(507, 'alumni_history_28', 'image', 'images/photos/28.jpg', 'alumni', 'history', 'History: Reception classroom block', '2026-02-04 09:10:53', '2026-02-04 09:10:53'),
(508, 'alumni_history_29', 'image', 'images/photos/29.jpg', 'alumni', 'history', 'History: Outdoor classroom', '2026-02-04 09:10:53', '2026-02-04 09:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `video_links`
--

CREATE TABLE `video_links` (
  `id` int(11) NOT NULL,
  `link_key` varchar(100) NOT NULL COMMENT 'Unique identifier (e.g., hero_youtube_link)',
  `video_url` varchar(500) NOT NULL COMMENT 'Full YouTube or external video URL',
  `embed_url` varchar(500) DEFAULT NULL COMMENT 'Embed URL for iframe',
  `page` varchar(50) NOT NULL COMMENT 'Page where link is used',
  `section` varchar(100) NOT NULL COMMENT 'Section within page',
  `description` text DEFAULT NULL COMMENT 'Description of the video',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_links`
--

INSERT INTO `video_links` (`id`, `link_key`, `video_url`, `embed_url`, `page`, `section`, `description`, `created_at`, `updated_at`) VALUES
(1, 'home_hero_youtube', 'https://www.youtube.com/watch?v=D5lzvL7CkYI', 'https://www.youtube.com/embed/D5lzvL7CkYI', 'home', 'hero', 'Another year of memories - Main hero YouTube video', '2026-02-03 06:36:56', '2026-02-03 06:50:25'),
(2, 'home_explore_youtube', 'https://youtu.be/0PmsR3B_8xM?si=lg_9VrplJ-YYCj3z', 'https://www.youtube.com/embed/0PmsR3B_8xM?si=lg_9VrplJ-YYCj3z', 'home', 'explore', 'Explore with us - Explore section YouTube video', '2026-02-03 06:36:56', '2026-02-03 06:55:05'),
(3, 'home_head_carousel_youtube', 'https://youtu.be/pBzOk9IqzLg?si=HMdCx6lf7ZX2JKRt', 'https://www.youtube.com/embed/pBzOk9IqzLg?si=HMdCx6lf7ZX2JKRt', 'home', 'carousel_head', 'Head\'s welcome carousel video', '2026-02-03 06:36:56', '2026-02-03 06:36:56'),
(4, 'admissions_testimonial_youtube', 'https://youtu.be/9K9LfwcIA18?si=OzuFo3hBl_qza80x', 'https://www.youtube.com/embed/9K9LfwcIA18?si=OzuFo3hBl_qza80x', 'admissions', 'testimonial', 'Testimonial video from MidasTouch parent', '2026-02-04 05:44:52', '2026-02-04 05:53:58'),
(7, 'faqs_video_testimonial', 'https://www.youtube.com/watch?v=pBzOk9IqzLg', 'https://www.youtube.com/embed/pBzOk9IqzLg?si=QapEIrgHuhuoZD74', 'faqs', 'testimonials', 'Parent testimonial video', '2026-02-04 06:14:00', '2026-02-04 06:14:00'),
(8, 'faqs_video_faq', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'https://www.youtube.com/embed/dQw4w9WgXcQ', 'faqs', 'faq_videos', 'FAQ answer video', '2026-02-04 06:14:00', '2026-02-04 09:13:52'),
(9, 'faqs_video_vimeo', 'https://vimeo.com/887584922', 'https://player.vimeo.com/video/887584922', 'faqs', 'faq_videos', 'Sports FAQ Vimeo video', '2026-02-04 06:14:00', '2026-02-04 06:14:00'),
(19, 'welcome_youtube_2_embed', 'https://www.youtube.com/watch?v=FjItoFpBf_8', 'https://www.youtube.com/embed/FjItoFpBf_8', 'welcome', 'intro', 'Welcome Page Secondary Video', '2026-02-04 09:13:52', '2026-02-04 09:13:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_email` (`email`),
  ADD KEY `idx_status` (`status`),
  ADD KEY `idx_submitted_at` (`submitted_at`);

--
-- Indexes for table `media_items`
--
ALTER TABLE `media_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_key` (`media_key`),
  ADD KEY `idx_page` (`page`),
  ADD KEY `idx_media_type` (`media_type`),
  ADD KEY `idx_section` (`section`);

--
-- Indexes for table `video_links`
--
ALTER TABLE `video_links`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `link_key` (`link_key`),
  ADD KEY `idx_page` (`page`),
  ADD KEY `idx_section` (`section`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media_items`
--
ALTER TABLE `media_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=516;

--
-- AUTO_INCREMENT for table `video_links`
--
ALTER TABLE `video_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
