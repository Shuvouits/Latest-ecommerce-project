-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 11:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '25f9e794323b453885f5181f1b624d0b', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `top` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `image`, `date`, `top`, `created_at`, `updated_at`) VALUES
(9, 'FIMI', '60685229d848e1617449513.png', '05/08/2021', 'No', '2021-05-07 22:53:10', '2021-05-07 23:31:42'),
(10, 'Sky Art', '6068522f846281617449519.png', '05/08/2021', 'No', '2021-05-07 22:54:27', '2021-05-07 23:32:05'),
(11, 'Better World', '602cdc53954a51613552723.png', '05/08/2021', 'Yes', '2021-05-07 22:55:24', '2021-05-07 22:55:24'),
(12, 'NatureCraft', '602a4186093681613382022.png', '05/08/2021', 'Yes', '2021-05-07 22:55:56', '2021-05-07 22:55:56'),
(13, 'Lego', '602a3d2d7fbb41613380909.png', '05/08/2021', 'Yes', '2021-05-07 22:56:31', '2021-05-07 22:56:31'),
(14, 'Adidas', '60291c03410471613306883.png', '05/08/2021', 'Yes', '2021-05-07 22:57:16', '2021-05-07 22:57:16'),
(17, 'Levis', '6002b17d2ac301610789245.jpg', '05/08/2021', 'Yes', '2021-05-08 07:33:15', '2021-05-08 07:33:35'),
(18, 'Nike', 'image.jpg', '05/09/2021', NULL, '2021-05-08 20:33:44', '2021-05-08 20:33:44'),
(19, 'Puma', 'download (3).png', '05/09/2021', NULL, '2021-05-08 22:17:05', '2021-05-08 22:17:05'),
(20, 'Richman', 'N3zP5H7d_400x400.jpg', '05/09/2021', NULL, '2021-05-09 01:00:17', '2021-05-09 01:00:17'),
(21, 'Guucci', 'gucci-facts.jpg', '05/11/2021', NULL, '2021-05-10 22:11:31', '2021-05-10 22:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `cartes`
--

CREATE TABLE `cartes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_quantity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cartinformations`
--

CREATE TABLE `cartinformations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_quantity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cartinformations`
--

INSERT INTO `cartinformations` (`id`, `product_id`, `product_title`, `product_category`, `product_image`, `product_price`, `discount_price`, `product_quantity`, `total_price`, `transaction_id`, `user_name`, `created_at`, `updated_at`) VALUES
(6, '1', 'Slim Trapered Rip Jeans', 'Mens Fashion', 'thumb_602a6a82776391613392514 (1).jpg', '3000', '500', '2', '5000', '60b9c1ca756fe', 'Ashim Bhowmik', '2021-06-04 00:01:46', '2021-06-04 00:01:46'),
(7, '2', 'NuraPhone Headphone', 'Electronics', '60095e3e0159b1611226686 (1).png', '2000', '1000', '2', '2000', '60b9c1ca756fe', 'Ashim Bhowmik', '2021-06-04 00:01:46', '2021-06-04 00:01:46'),
(8, '1', 'Slim Trapered Rip Jeans', 'Mens Fashion', 'thumb_602a6a82776391613392514 (1).jpg', '3000', '500', '1', '2500', '60b9c362d07ff', 'Ashim Bhowmik', '2021-06-04 00:08:34', '2021-06-04 00:08:34'),
(9, '2', 'NuraPhone Headphone', 'Electronics', '60095e3e0159b1611226686 (1).png', '2000', '1000', '5', '5000', '60b9c4a2c4d56', 'shuvo bhowmik', '2021-06-04 00:13:54', '2021-06-04 00:13:54'),
(10, '1', 'Slim Trapered Rip Jeans', 'Mens Fashion', 'thumb_602a6a82776391613392514 (1).jpg', '3000', '500', '2', '5000', '60bb10290f1dc', 'Ashim Bhowmik', '2021-06-04 23:48:25', '2021-06-04 23:48:25'),
(11, '7', 'Puma Pink Ladies Dress', 'Womens Fashion', 'thumb_60252fb1c5e8d1613049777 (1).jpg', '3000', '0', '1', '3000', '60c35195245ae', 'shuvo bhowmik', '2021-06-11 12:05:41', '2021-06-11 12:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `meta_title`, `meta_description`, `meta_keywords`, `category_icon`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mens Fashion', 'Mens Fashion', 'Shop up-and-coming brands and trendy men\'s clothing at Urban Outfitters. Keep your look fresh with the latest arrivals in men\'s clothing, accessories and shoes Edit.', 'men\'s, fashion, Dress', 'fas fa-male', '600957c8b93281611225032.png', '2021-05-01 05:22:30', '2021-05-06 23:15:06'),
(2, 'Womens Fashion', 'Womens Fashion', 'Women\'s Fashion', 'women,girl', 'fas fa-female', '60095788b8b441611224968.png', '2021-05-01 05:39:19', '2021-05-06 23:18:04'),
(3, 'Electronics', 'Electronics', 'Electronics', 'electronics', 'fas fa-laptop-code', '60095e3e0159b1611226686.png', '2021-05-01 05:41:59', '2021-05-06 23:20:44'),
(4, 'Home Appliance', 'Home Appliances', 'Home Appliances', 'home,Appliances', 'fas fa-home', 'set-white-home-appliances-on-260nw-692475616.jpg', '2021-05-01 05:44:03', '2021-05-06 23:37:30'),
(5, 'AutoMobile & Motorcychle', 'AutoMobile & Motorcychle', 'AutoMobile & Motorcychle', 'Auto,Motorcycychle', 'fas fa-mobile-alt', 'suzuki-gixxer-sf.png', '2021-05-01 05:46:41', '2021-05-06 23:38:19'),
(6, 'Sports & Outdoor', 'Sports & Outdoor', 'Sports And Outdoor', 'sports,outdoor', 'fas fa-running', 'istockphoto-949190756-612x612.jpg', '2021-05-01 05:49:31', '2021-05-06 23:39:07'),
(7, 'Baby Fashion', 'baby fashion', 'Baby Fashion', 'baby,fashion', 'fas fa-baby', '94dc8cb945c786ab038c71d0f4a7.jpg', '2021-05-01 07:25:26', '2021-05-06 23:40:25'),
(8, 'Kids & Toy', 'Kids & Toy', 'Kids And Toy', 'kids,toy', 'far fa-kiss-wink-heart', 'maxresdefault.jpg', '2021-05-01 07:27:26', '2021-05-07 05:25:40'),
(9, 'Health & Beauty', 'Health & Beauty', 'Health and Beauty', 'health,beauty', 'far fa-heart', 'COVID-19-crisis-impacts-beauty-financials-hard-personal-care-fares-better_wrbm_large.jpg', '2021-05-01 07:29:25', '2021-05-07 05:28:20'),
(10, 'Skin & Hair solution', 'Skin & Hair Solution', 'Description of Hair Solution', 'Skin,solution,hair', 'fab fa-accessible-icon', 'Hair-Rebonding_2c843ccc-6854-4ea9-9afa-00f1af8e339f_1024x1024.jpg', '2021-05-01 07:31:32', '2021-05-07 05:29:01'),
(11, 'Gift Items', 'Gift Items', 'Meta Description of Gift Items', 'Gift,Items', 'fas fa-gift', 'light blue gift box on light blue background-7944-da9c5f12366780c66aedffff40b250d0@1x.jpg', '2021-05-01 07:33:56', '2021-05-07 05:30:45'),
(12, 'Covid 19 Protection', 'Covid 19 Protection', 'Meta Description of Covid 19 Protection', 'covid,protection', 'fas fa-head-side-mask', '1583952355.1997.jpg', '2021-05-01 07:35:42', '2021-05-07 05:33:23'),
(14, 'Weeding & Event', 'Weeding & Event', 'Meta Description of Weeding Event', 'weeding,event', 'fas fa-gift', '_112530533_brideandgroom2.jpg', '2021-05-01 07:39:00', '2021-05-07 05:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `compares`
--

CREATE TABLE `compares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `icon_name`, `created_at`, `updated_at`) VALUES
(43, 'fab fa-accessible-icon', NULL, NULL),
(44, 'fab fa-accusoft', NULL, NULL),
(45, 'fab fa-acquisitions-incorporated', NULL, NULL),
(46, 'fas fa-ad', NULL, NULL),
(47, 'fas fa-address-book', NULL, NULL),
(48, 'fas fa-address-card', NULL, NULL),
(49, 'fas fa-adjust', NULL, NULL),
(50, 'fas fa-tshirt', NULL, NULL),
(51, 'fab fa-airbnb', NULL, NULL),
(52, 'fas fa-align-justify', NULL, NULL),
(53, 'fas fa-align-left', NULL, NULL),
(54, 'fas fa-align-right', NULL, NULL),
(55, 'fab fa-alipay', NULL, NULL),
(56, 'fab fa-amazon', NULL, NULL),
(57, 'fab fa-amazon-pay', NULL, NULL),
(58, 'fas fa-ambulance', NULL, NULL),
(59, 'fas fa-angle-down', NULL, NULL),
(60, 'fas fa-angle-left', NULL, NULL),
(61, 'fas fa-angle-right', NULL, NULL),
(62, 'fas fa-angle-up', NULL, NULL),
(63, 'far fa-angry', NULL, NULL),
(64, 'fab fa-angular', NULL, NULL),
(65, 'fab fa-app-store-ios', NULL, NULL),
(66, 'fab fa-apple', NULL, NULL),
(67, 'fas fa-arrow-alt-circle-down', NULL, NULL),
(68, 'fas fa-arrow-circle-up', NULL, NULL),
(69, 'fas fa-arrow-alt-circle-right', NULL, NULL),
(70, 'fas fa-arrow-circle-left', NULL, NULL),
(71, 'fas fa-at', NULL, NULL),
(72, 'fas fa-atom', NULL, NULL),
(73, 'fas fa-atom', NULL, NULL),
(74, 'fas fa-baby', NULL, NULL),
(75, 'fas fa-baby-carriage', NULL, NULL),
(76, 'fas fa-backward', NULL, NULL),
(77, 'fas fa-balance-scale', NULL, NULL),
(78, 'fas fa-ban', NULL, NULL),
(79, 'fab fa-bandcamp', NULL, NULL),
(80, 'fas fa-barcode', NULL, NULL),
(81, 'fas fa-bars', NULL, NULL),
(82, 'fas fa-battery-full', NULL, NULL),
(83, 'fas fa-bed', NULL, NULL),
(84, 'fas fa-bible', NULL, NULL),
(85, 'fas fa-bicycle', NULL, NULL),
(86, 'fas fa-blind', NULL, NULL),
(87, 'fab fa-blogger', NULL, NULL),
(88, 'fas fa-bold', NULL, NULL),
(89, 'fab fa-bootstrap', NULL, NULL),
(90, 'fas fa-border-all', NULL, NULL),
(91, 'fas fa-box', NULL, NULL),
(92, 'fas fa-bus', NULL, NULL),
(93, 'fab fa-bluetooth', NULL, NULL),
(94, 'fas fa-bomb', NULL, NULL),
(95, 'fas fa-book-medical', NULL, NULL),
(96, 'fab fa-btc', NULL, NULL),
(97, 'fas fa-building', NULL, NULL),
(98, 'fas fa-bullhorn', NULL, NULL),
(99, 'fas fa-calculator', NULL, NULL),
(100, 'far fa-calendar-alt', NULL, NULL),
(101, 'fas fa-camera-retro', NULL, NULL),
(102, 'fas fa-capsules', NULL, NULL),
(103, 'fas fa-cannabis', NULL, NULL),
(104, 'fab fa-canadian-maple-leaf', NULL, NULL),
(105, 'fas fa-car-alt', NULL, NULL),
(106, 'fas fa-caret-up', NULL, NULL),
(107, 'fas fa-caret-down', NULL, NULL),
(108, 'fas fa-caret-left', NULL, NULL),
(109, 'fas fa-caret-right', NULL, NULL),
(110, 'fas fa-cart-plus', NULL, NULL),
(111, 'fas fa-cat', NULL, NULL),
(112, 'fab fa-cc-mastercard', NULL, NULL),
(113, 'fab fa-cc-paypal', NULL, NULL),
(114, 'fab fa-cc-stripe', NULL, NULL),
(115, 'fab fa-cc-visa', NULL, NULL),
(116, 'fas fa-certificate', NULL, NULL),
(117, 'fas fa-chair', NULL, NULL),
(118, 'fas fa-chalkboard-teacher', NULL, NULL),
(119, 'fas fa-charging-station', NULL, NULL),
(120, 'fas fa-child', NULL, NULL),
(121, 'far fa-circle', NULL, NULL),
(122, 'fas fa-city', NULL, NULL),
(123, 'fas fa-clinic-medical', NULL, NULL),
(124, 'far fa-clock', NULL, NULL),
(125, 'far fa-clone', NULL, NULL),
(126, 'fas fa-cloud-download-alt', NULL, NULL),
(127, 'fas fa-code', NULL, NULL),
(128, 'fas fa-coffee', NULL, NULL),
(129, 'fas fa-cog', NULL, NULL),
(130, 'fas fa-coins', NULL, NULL),
(131, 'far fa-comment-alt', NULL, NULL),
(132, 'far fa-compass', NULL, NULL),
(133, 'fas fa-compress', NULL, NULL),
(134, 'far fa-copyright', NULL, NULL),
(135, 'fab fa-cpanel', NULL, NULL),
(136, 'far fa-credit-card', NULL, NULL),
(137, 'fab fa-css3-alt', NULL, NULL),
(138, 'fas fa-cube', NULL, NULL),
(139, 'fas fa-desktop', NULL, NULL),
(140, 'fab fa-dailymotion', NULL, NULL),
(141, 'fas fa-database', NULL, NULL),
(142, 'fab fa-dev', NULL, NULL),
(143, 'fas fa-dice-d6', NULL, NULL),
(144, 'fas fa-directions', NULL, NULL),
(145, 'fas fa-dog', NULL, NULL),
(146, 'fas fa-dollar-sign', NULL, NULL),
(147, 'fas fa-download', NULL, NULL),
(148, 'fas fa-drafting-compass', NULL, NULL),
(149, 'fas fa-door-closed', NULL, NULL),
(150, 'fas fa-dove', NULL, NULL),
(151, 'fas fa-drum', NULL, NULL),
(152, 'fab fa-dropbox', NULL, NULL),
(153, 'fab fa-ebay', NULL, NULL),
(154, 'fab fa-ebay', NULL, NULL),
(155, 'far fa-edit', NULL, NULL),
(156, 'fas fa-egg', NULL, NULL),
(157, 'fas fa-eject', NULL, NULL),
(158, 'fab fa-elementor', NULL, NULL),
(159, 'fab fa-ello', NULL, NULL),
(160, 'fas fa-envelope', NULL, NULL),
(161, 'fas fa-equals', NULL, NULL),
(162, 'fas fa-exclamation-triangle', NULL, NULL),
(163, 'fas fa-expand', NULL, NULL),
(164, 'fas fa-expand', NULL, NULL),
(165, 'fas fa-eye', NULL, NULL),
(166, 'fas fa-eye-slash', NULL, NULL),
(167, 'fab fa-facebook', NULL, NULL),
(168, 'fab fa-facebook-messenger', NULL, NULL),
(169, 'fas fa-fast-forward', NULL, NULL),
(170, 'fas fa-fast-forward', NULL, NULL),
(171, 'fas fa-fax', NULL, NULL),
(172, 'fas fa-feather-alt', NULL, NULL),
(173, 'fas fa-female', NULL, NULL),
(174, 'fas fa-file', NULL, NULL),
(175, 'far fa-file-code', NULL, NULL),
(176, 'fas fa-file-excel', NULL, NULL),
(177, 'far fa-file-pdf', NULL, NULL),
(178, 'fas fa-film', NULL, NULL),
(179, NULL, NULL, NULL),
(180, 'fas fa-fingerprint', NULL, NULL),
(181, 'fas fa-filter', NULL, NULL),
(182, 'fas fa-fire-extinguisher', NULL, NULL),
(183, 'fas fa-fish', NULL, NULL),
(184, 'fas fa-folder-minus', NULL, NULL),
(185, 'fas fa-font', NULL, NULL),
(186, 'fas fa-forward', NULL, NULL),
(187, 'fas fa-frog', NULL, NULL),
(188, 'fas fa-gas-pump', NULL, NULL),
(189, 'fas fa-gift', NULL, NULL),
(190, 'fab fa-github', NULL, NULL),
(191, 'fas fa-glasses', NULL, NULL),
(192, 'fas fa-globe', NULL, NULL),
(193, 'fab fa-gofore', NULL, NULL),
(194, 'fab fa-google', NULL, NULL),
(195, 'fab fa-google-drive', NULL, NULL),
(196, 'fab fa-google-play', NULL, NULL),
(197, 'fas fa-graduation-cap', NULL, NULL),
(198, 'fas fa-guitar', NULL, NULL),
(199, 'fas fa-hammer', NULL, NULL),
(200, 'fas fa-hand-peace', NULL, NULL),
(201, 'far fa-hand-point-right', NULL, NULL),
(202, 'fas fa-hat-cowboy-side', NULL, NULL),
(203, 'fas fa-headphones', NULL, NULL),
(204, 'far fa-heart', NULL, NULL),
(205, 'fas fa-hiking', NULL, NULL),
(206, 'fas fa-horse', NULL, NULL),
(207, 'fas fa-hospital-alt', NULL, NULL),
(208, 'fas fa-hotel', NULL, NULL),
(209, 'fas fa-house-user', NULL, NULL),
(210, 'fab fa-html5', NULL, NULL),
(211, 'fas fa-hashtag', NULL, NULL),
(212, 'fas fa-ice-cream', NULL, NULL),
(213, 'far fa-id-card', NULL, NULL),
(214, 'far fa-image', NULL, NULL),
(215, 'fas fa-industry', NULL, NULL),
(216, 'fas fa-infinity', NULL, NULL),
(217, 'fab fa-instagram-square', NULL, NULL),
(218, 'fab fa-internet-explorer', NULL, NULL),
(219, 'fab fa-itunes', NULL, NULL),
(220, 'fab fa-java', NULL, NULL),
(221, 'fas fa-key', NULL, NULL),
(222, 'far fa-keyboard', NULL, NULL),
(223, 'far fa-kiss-wink-heart', NULL, NULL),
(224, 'fas fa-landmark', NULL, NULL),
(225, 'fas fa-laptop-code', NULL, NULL),
(226, 'fab fa-laravel', NULL, NULL),
(227, 'far fa-lightbulb', NULL, NULL),
(228, 'fab fa-linkedin', NULL, NULL),
(229, 'fas fa-lock', NULL, NULL),
(230, 'fas fa-lungs', NULL, NULL),
(231, 'fas fa-male', NULL, NULL),
(232, 'fas fa-male', NULL, NULL),
(233, 'fas fa-mask', NULL, NULL),
(234, 'fas fa-medal', NULL, NULL),
(235, 'fas fa-medkit', NULL, NULL),
(236, 'fas fa-memory', NULL, NULL),
(237, 'fas fa-microphone', NULL, NULL),
(238, 'fas fa-microchip', NULL, NULL),
(239, 'fab fa-microsoft', NULL, NULL),
(240, 'fas fa-mobile-alt', NULL, NULL),
(241, 'fas fa-money-check-alt', NULL, NULL),
(242, 'fas fa-monument', NULL, NULL),
(243, 'fas fa-monument', NULL, NULL),
(244, 'fas fa-motorcycle', NULL, NULL),
(245, 'fas fa-mouse', NULL, NULL),
(246, 'fas fa-mouse-pointer', NULL, NULL),
(247, 'fas fa-music', NULL, NULL),
(248, 'fas fa-network-wired', NULL, NULL),
(249, 'far fa-newspaper', NULL, NULL),
(250, 'fas fa-om', NULL, NULL),
(251, 'fab fa-opera', NULL, NULL),
(252, 'fab fa-page4', NULL, NULL),
(253, 'fas fa-passport', NULL, NULL),
(254, 'fas fa-pause-circle', NULL, NULL),
(255, 'fas fa-people-arrows', NULL, NULL),
(256, 'fas fa-person-booth', NULL, NULL),
(257, 'fas fa-phone-square-alt', NULL, NULL),
(258, 'fas fa-photo-video', NULL, NULL),
(259, 'fab fa-pinterest', NULL, NULL),
(260, 'far fa-play-circle', NULL, NULL),
(261, 'fas fa-plug', NULL, NULL),
(262, 'fas fa-plus-square', NULL, NULL),
(263, 'fas fa-power-off', NULL, NULL),
(264, 'fas fa-power-off', NULL, NULL),
(265, 'fas fa-print', NULL, NULL),
(266, 'fas fa-qrcode', NULL, NULL),
(267, 'far fa-question-circle', NULL, NULL),
(268, 'fab fa-quora', NULL, NULL),
(269, 'fas fa-quran', NULL, NULL),
(270, 'fab fa-readme', NULL, NULL),
(271, 'fas fa-reply-all', NULL, NULL),
(272, 'fas fa-restroom', NULL, NULL),
(273, 'fas fa-ring', NULL, NULL),
(274, 'fas fa-rss-square', NULL, NULL),
(275, 'fab fa-safari', NULL, NULL),
(276, 'fab fa-safari', NULL, NULL),
(277, 'fas fa-satellite-dish', NULL, NULL),
(278, 'fas fa-save', NULL, NULL),
(279, 'fas fa-sd-card', NULL, NULL),
(280, 'fas fa-search', NULL, NULL),
(281, 'fas fa-seedling', NULL, NULL),
(282, 'fas fa-share-alt-square', NULL, NULL),
(283, 'fab fa-shopify', NULL, NULL),
(284, 'fas fa-shopping-cart', NULL, NULL),
(285, 'fas fa-sign-in-alt', NULL, NULL),
(286, 'fas fa-sign-in-alt', NULL, NULL),
(287, 'fas fa-skating', NULL, NULL),
(288, 'fas fa-skating', NULL, NULL),
(289, 'fas fa-smoking-ban', NULL, NULL),
(290, 'fas fa-spider', NULL, NULL),
(291, 'far fa-square', NULL, NULL),
(292, 'fab fa-stack-exchange', NULL, NULL),
(293, 'fab fa-stack-exchange', NULL, NULL),
(294, 'far fa-star', NULL, NULL),
(295, 'fas fa-step-backward', NULL, NULL),
(296, 'fas fa-step-backward', NULL, NULL),
(297, 'fas fa-store-alt', NULL, NULL),
(298, 'fas fa-street-view', NULL, NULL),
(299, 'fas fa-suitcase-rolling', NULL, NULL),
(300, 'fab fa-swift', NULL, NULL),
(301, 'far fa-surprise', NULL, NULL),
(302, 'fas fa-sync-alt', NULL, NULL),
(303, 'fas fa-table', NULL, NULL),
(304, 'fas fa-tablet-alt', NULL, NULL),
(305, 'fas fa-tachometer-alt', NULL, NULL),
(306, 'fas fa-tasks', NULL, NULL),
(307, 'far fa-thumbs-up', NULL, NULL),
(308, 'far fa-times-circle', NULL, NULL),
(309, 'far fa-tired', NULL, NULL),
(310, 'fas fa-trailer', NULL, NULL),
(311, 'far fa-trash-alt', NULL, NULL),
(312, 'fas fa-tree', NULL, NULL),
(313, 'fas fa-truck', NULL, NULL),
(314, 'fas fa-truck-moving', NULL, NULL),
(315, 'fas fa-tshirt', NULL, NULL),
(316, 'fas fa-tv', NULL, NULL),
(317, 'fas fa-tv', NULL, NULL),
(318, 'fab fa-twitter-square', NULL, NULL),
(319, 'fab fa-uber', NULL, NULL),
(320, 'fas fa-umbrella', NULL, NULL),
(321, 'fab fa-unity', NULL, NULL),
(322, 'fas fa-university', NULL, NULL),
(323, 'fas fa-unlock-alt', NULL, NULL),
(324, 'fas fa-upload', NULL, NULL),
(325, 'fas fa-user-circle', NULL, NULL),
(326, 'fas fa-user-circle', NULL, NULL),
(327, 'fas fa-volume-up', NULL, NULL),
(328, 'fab fa-vuejs', NULL, NULL),
(329, 'fas fa-walking', NULL, NULL),
(330, 'fas fa-walking', NULL, NULL),
(331, 'fas fa-weight', NULL, NULL),
(332, 'fab fa-whatsapp', NULL, NULL),
(333, 'fas fa-wifi', NULL, NULL),
(334, 'fas fa-window-restore', NULL, NULL),
(335, 'fab fa-windows', NULL, NULL),
(336, 'fas fa-wine-glass-alt', NULL, NULL),
(337, 'fab fa-wordpress-simple', NULL, NULL),
(338, 'fas fa-x-ray', NULL, NULL),
(339, 'fab fa-yahoo', NULL, NULL),
(340, 'fab fa-yarn', NULL, NULL),
(341, 'fab fa-youtube', NULL, NULL),
(342, 'fas fa-home', NULL, NULL),
(343, 'fas fa-running', NULL, NULL),
(344, 'fas fa-head-side-mask', NULL, NULL),
(345, 'fas fa-stopwatch', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loginhistory`
--

CREATE TABLE `loginhistory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `browser` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `os` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `device` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loginhistory`
--

INSERT INTO `loginhistory` (`id`, `username`, `ip`, `login_time`, `browser`, `os`, `device`, `time`, `created_at`, `updated_at`) VALUES
(1, 'shuvo bhowmik', '127.0.0.1', '2021-06-07 10:00:17', 'Chrome', 'Windows 10', 'Computer', '2 hours ago', '2021-06-07 04:00:17', '2021-06-07 06:18:04'),
(2, 'Ashim Bhowmik', '127.0.0.1', '2021-06-07 08:05:18', 'Chrome', 'Windows 10', 'Computer', '4 hours ago', '2021-06-07 02:05:18', '2021-06-07 06:18:04'),
(3, 'Ashim Bhowmik', '127.0.0.1', '2021-06-07 08:51:07', 'Chrome', 'Windows 10', 'Computer', '3 hours ago', '2021-06-07 02:51:07', '2021-06-07 06:18:04'),
(7, 'Ashim Bhowmik', '127.0.0.1', '2021-06-07 12:49:59', 'Chrome', 'Windows 10', 'Computer', '1 second ago', '2021-06-07 06:49:59', '2021-06-07 06:49:59'),
(8, 'shuvo bhowmik', '127.0.0.1', '2021-06-11 18:04:31', 'Chrome', 'Windows 10', 'Computer', '1 second ago', '2021-06-11 12:04:31', '2021-06-11 12:04:31'),
(9, 'shuvo bhowmik', '127.0.0.1', '2021-06-11 18:06:28', 'Chrome', 'Windows 10', 'Computer', '1 second ago', '2021-06-11 12:06:28', '2021-06-11 12:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_30_110742_create_categories_table', 1),
(5, '2021_05_02_032331_create_subcategories_table', 2),
(6, '2021_05_03_135125_create_icons_table', 3),
(7, '2021_05_06_035945_create_sliders_table', 4),
(8, '2021_05_08_023619_create_brands_table', 5),
(9, '2021_05_08_105842_create_products_table', 6),
(10, '2021_05_22_064023_create_wishlists_table', 7),
(11, '2021_05_23_115220_create_compares_table', 8),
(12, '2021_05_24_061858_create_cartes_table', 9),
(13, '2021_05_26_104657_create_peoples_table', 10),
(14, '2021_05_28_022622_create_orders_table', 11),
(15, '2021_05_30_075410_create_orders_table', 12),
(16, '2021_06_03_122115_create_cartinformations_table', 13),
(17, '2021_06_04_052813_create_reviews_table', 14),
(18, '2021_06_07_094547_create_loginhistory_table', 15),
(19, '2021_06_08_194640_create_admin_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `amount`, `transaction_id`, `currency`, `address`, `status`, `state`, `zip`, `created_at`, `updated_at`) VALUES
(13, 'shuvo bhowmik', 'shuvobhowmik_cse11uits@yahoo.com', '8801751720590', '2000', '60b8cda45b1ea', 'BDT', 'sutrapur dhaka', 'Processing', 'Khulna', '1212', NULL, NULL),
(14, 'shuvo bhowmik', 'shuvobhowmik_cse11uits@yahoo.com', '8801751720590', '3700', '60b8d6c6cf7b5', 'BDT', 'sutrapur dhaka', 'Processing', 'Jessore', '1212', NULL, NULL),
(15, 'shuvo bhowmik', 'shuvobhowmik_cse11uits@yahoo.com', '8801751720590', '3400', '60b8db10091a0', 'BDT', 'sutrapur dhaka', 'Processing', 'Jessore', '1212', NULL, NULL),
(16, 'Ashim Bhowmik', 'ashimtradingcorporation@gmail.com', '+8801912475022', '4000', '60b9bf36689b0', 'BDT', 'sutrapur dhaka', 'Processing', 'Jessore', '1212', NULL, NULL),
(17, 'Ashim Bhowmik', 'ashimtradingcorporation@gmail.com', '+8801912475022', '7000', '60b9c1ca756fe', 'BDT', 'sutrapur dhaka', 'Failed', 'Khulna', '1212', NULL, NULL),
(18, 'Ashim Bhowmik', 'ashimtradingcorporation@gmail.com', '+8801912475022', '2500', '60b9c362d07ff', 'BDT', 'sutrapur dhaka', 'Processing', 'Khulna', '1212', NULL, NULL),
(19, 'shuvo bhowmik', 'shuvobhowmik_cse11uits@yahoo.com', '8801751720590', '5000', '60b9c4a2c4d56', 'BDT', 'sutrapur dhaka', 'Processing', 'Jessore', '1212', NULL, NULL),
(20, 'Ashim Bhowmik', 'ashimtradingcorporation@gmail.com', '+8801912475022', '5000', '60bb10290f1dc', 'BDT', 'sutrapur dhaka', 'Processing', 'Dhaka', '1212', NULL, NULL),
(21, 'shuvo bhowmik', 'shuvobhowmik_cse11uits@yahoo.com', '8801751720590', '3000', '60c35195245ae', 'BDT', 'sutrapur dhaka', 'Processing', 'Khulna', '1212', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peoples`
--

CREATE TABLE `peoples` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_confirmation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `peoples`
--

INSERT INTO `peoples` (`id`, `firstname`, `lastname`, `username`, `image`, `mobile`, `email`, `password`, `password_confirmation`, `country`, `city`, `state`, `zip`, `address`, `created_at`, `updated_at`) VALUES
(1, 'shuvo', 'bhowmik', 'shuvo bhowmik', '_112530533_brideandgroom2.jpg', '8801751720590', 'shuvobhowmik_cse11uits@yahoo.com', 'mh9DcY8AVd', NULL, 'Bangladesh', 'Dhaka', 'sutrapur', '1212', 'sutrapur dhaka', '2021-05-26 05:42:28', '2021-06-06 14:56:09'),
(2, 'Ashim', 'Bhowmik', 'Ashim Bhowmik', NULL, '+8801912475022', 'ashimtradingcorporation@gmail.com', 'bVw0Y559pw', NULL, 'India', NULL, NULL, NULL, NULL, '2021-06-03 23:44:20', '2021-06-04 01:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_subcategory` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subcategory_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regular_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stock_quantity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_brand` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `advertise_option` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_season` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount_option` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `speciality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title9` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description1` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description2` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description3` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description4` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description6` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description8` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description9` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `review_count` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `review_score` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sell` int(10) DEFAULT NULL,
  `specification` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_title`, `product_category`, `category_id`, `product_subcategory`, `subcategory_name`, `regular_price`, `discount_price`, `stock_quantity`, `product_brand`, `brand_id`, `product_description`, `meta_keywords`, `image`, `image1`, `image2`, `image3`, `advertise_option`, `featured`, `product_season`, `discount_option`, `speciality`, `title1`, `title2`, `title3`, `title4`, `title5`, `title6`, `title7`, `title8`, `title9`, `title10`, `description1`, `description2`, `description3`, `description4`, `description5`, `description6`, `description7`, `description8`, `description9`, `description10`, `review_count`, `review_score`, `sell`, `specification`, `video_url`, `video_id`, `created_at`, `updated_at`) VALUES
(1, 'Slim Trapered Rip Jeans', 'Mens Fashion', '1', '17', 'T-shirt', '3000', '500', '100', 'Levis', '17', 'Soft and stretchable faded cotton fabric\r\nWhiskering and ripped detail\r\nConcealed zipper fly and button closure\r\nClassic five-pocket closure\r\nSkinny fit jeans\r\nEach item sold separately', 'jeans, pant, style, brand-pant', 'thumb_602a6a82776391613392514 (1).jpg', 'download (2).jpg', 'best-summer-jeans-280691-1593570571190-main.700x0c.jpg', '', 'No', 'Yes', 'Summer', 'No', 'Yes', 'Color', 'Fabric', 'Category', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ocean Blue', 'Soft and stretchable faded cotton', 'Pant', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '4', 2, NULL, 'https://www.youtube.com/watch?v=j1TRbrXd3oI', 'j1TRbrXd3oI', '2021-05-08 08:04:53', '2021-06-04 23:48:25'),
(2, 'NuraPhone Headphone', 'Electronics', '3', '10', 'Headphones', '2000', '1000', '10', 'Nike', '18', 'Description of Headphone', 'Headphone, Electronics, Sound, Style', '60095e3e0159b1611226686 (1).png', '', '', '', 'Yes', 'Yes', NULL, 'No', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '3', 10, NULL, NULL, NULL, '2021-05-08 20:22:44', '2021-06-04 01:44:52'),
(3, 'Everlane T-Shirt', 'Mens Fashion', '1', '17', 'T-shirt', '1500', '0', '10', 'Levis', '17', 'Description of Shirt', 'shirt, mens-fashion,', '600957c8b93281611225032 (1).png', '', '', '', 'Yes', 'Yes', 'Summer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-08 20:30:06', '2021-05-25 04:53:56'),
(4, 'Reiss Shirt', 'Mens Fashion', '1', '17', 'T-shirt', '1600', '0', '10', 'Levis', '17', 'Description of Shirt', 'Meta Keywords of shirt', '6009576455fd61611224932.png', '', '', '', 'Yes', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-08 20:31:43', '2021-05-25 04:57:30'),
(5, 'Nike sneaker', 'Mens Fashion', '1', '3', 'Shoes', '2500', '0', '10', 'Nike', '18', 'Description of Nike Brand', 'Meta Keywords of Nike Brand', '60095e9ab30a81611226778.png', '', '', '', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-08 20:35:17', '2021-05-25 04:57:45'),
(6, 'Puma', 'Womens Fashion', '2', '6', 'Clothing', '1000', '100', '10', 'NatureCraft', '12', 'Description of women fashion', 'Meta Keywords of Women Fashion', '6017999ef01d91612159390 (1).png', '', '', '', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-08 20:37:04', '2021-05-25 04:58:03'),
(7, 'Puma Pink Ladies Dress', 'Womens Fashion', '2', '6', 'Clothing', '3000', '0', '10', 'Puma', '19', 'Description of Puma', 'Meta Keywords of Puma', 'thumb_60252fb1c5e8d1613049777 (1).jpg', '', '', '', 'No', NULL, 'Summer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '4', 1, NULL, NULL, NULL, '2021-05-08 22:20:52', '2021-06-11 12:06:55'),
(8, 'Summer stylish Panjabi', 'Mens Fashion', '1', '1', 'Clothing', '3000', '0', '10', 'Levis', '17', 'Mens Stylish Panjabi', 'Men, Style, Panjabi', 'hk-men-s-panjabi-1.jpg', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-09 00:56:08', '2021-05-25 04:58:37'),
(9, 'Men summer black Panjabi', 'Mens Fashion', '1', '1', 'Clothing', '2000', '0', '10', 'Richman', '20', 'Mens Black Panjabi', 'Black, style , panjabi,', 'download (1).jpg', '', '', '', NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-09 01:03:08', '2021-05-25 04:58:52'),
(11, 'Red color lipstick', 'Womens Fashion', '2', '5', 'Beauty & Skin', '1000', NULL, '10', 'FIMI', '9', 'Description of the Red Color Lipstick', 'Womens, Lipstick', '60179844d99fd1612159044.jpg', '', '', '', NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-10 20:34:10', '2021-05-25 04:59:07'),
(12, 'Casual Sport', 'Mens Fashion', '1', '3', 'Shoes', '2000', NULL, '20', 'Sky Art', '10', 'Beautiful Mens Sleves Shoe', 'Mens, Fashion, Shoes', '5fe09ad2820e11608555218.jpg', '', '', '', NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-10 20:36:14', '2021-05-25 04:59:24'),
(14, 'Gucci Sandels For Women', 'Womens Fashion', '2', '6', 'Clothing', '1000', NULL, '10', 'Guucci', '21', 'Description of Gucci Sandel', 'Gucci Sandal', 'thumb_60279592461901613206930.jpg', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-10 22:13:15', '2021-05-25 05:13:34'),
(15, 'Puma Ladies Dress', 'Womens Fashion', '2', '6', 'Clothing', '1000', NULL, '3', 'Puma', '19', 'Product Description of Puma T-Shirt', 'puma, shirt, women, fashion', 'thumb_60252f739e5cd1613049715.jpg', '', '', '', NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-10 23:52:05', '2021-05-25 05:13:51'),
(16, 'Man White Snekar', 'Mens Fashion', '1', '3', 'Shoes', '2000', NULL, '10', 'Adidas', '14', 'Product Description of White fashion means shoes', 'men, shoes. style, fashion', 'thumb_602b890e609081613465870.jpg', '', '', '', NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-10 23:56:00', '2021-05-25 05:14:06'),
(17, 'Baby Fshion of Sweet T shirt', 'Baby Fashion', '7', '18', 'T-shirt', '2000', NULL, '20', 'Richman', '20', 'Beautiful Full Sleves Baby T-shirt', 'baby, t-shirt', 'thumb_6006b785c77081611052933.jpg', '', '', '', NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-11 00:00:56', '2021-05-25 05:14:21'),
(18, 'TomFord Glass', 'Womens Fashion', '2', '7', 'Glasses', '1300', NULL, '23', 'Lego', '13', 'Product Description of glass', 'glass, ladies-fashion', 'thumb_6006a17e4fc301611047294.jpg', '', '', '', NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-11 00:03:13', '2021-05-25 05:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_name`, `review`, `created_at`, `updated_at`) VALUES
(1, '16', 'shuvo bhowmik', '4', '2021-06-03 23:37:31', '2021-06-03 23:37:31'),
(2, '14', 'shuvo bhowmik', '2', '2021-06-03 23:37:59', '2021-06-03 23:37:59'),
(3, '2', 'shuvo bhowmik', '4', '2021-06-04 00:15:21', '2021-06-04 00:15:21'),
(4, '2', 'Ashim Bhowmik', '3', '2021-06-04 00:18:03', '2021-06-04 00:18:03'),
(5, '2', 'Ashim Bhowmik', '3', '2021-06-04 01:12:18', '2021-06-04 01:12:18'),
(6, '2', 'Ashim Bhowmik', '3', '2021-06-04 01:15:15', '2021-06-04 01:15:15'),
(7, '2', 'Ashim Bhowmik', '1', '2021-06-04 01:20:20', '2021-06-04 01:20:20'),
(8, '2', 'Ashim Bhowmik', '2', '2021-06-04 01:22:13', '2021-06-04 01:22:13'),
(9, '1', 'Ashim Bhowmik', '4', '2021-06-04 01:28:18', '2021-06-04 01:28:18'),
(10, '1', 'Ashim Bhowmik', '4', '2021-06-04 01:44:02', '2021-06-04 01:44:02'),
(11, '2', 'Ashim Bhowmik', '1', '2021-06-04 01:44:52', '2021-06-04 01:44:52'),
(12, '7', 'shuvo bhowmik', '4', '2021-06-11 12:06:55', '2021-06-11 12:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Fly Away & Have Fun', '606ab7dc2b7681617606620.png', 'Active', '2021-05-06 05:07:21', '2021-05-06 06:01:37'),
(4, 'Summer 2021 & discount', '606ab6dbccedd1617606363.png', 'Active', '2021-05-06 05:08:46', '2021-05-06 06:01:46'),
(5, 'Wear a Mask Stay Safe', '606ab817d835b1617606679.png', 'Active', '2021-05-06 05:09:35', '2021-05-06 20:31:01'),
(6, 'Keep The Summer Vibe Alive', '606ab765333751617606501.png', 'Active', '2021-05-06 05:10:59', '2021-05-06 05:10:59'),
(8, 'Summer 2021 & discount', '606ab6dbccedd1617606363.png', 'Active', '2021-05-06 05:37:44', '2021-05-06 05:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(200) DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subcategory_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slider` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `category_name`, `subcategory_name`, `icon`, `image`, `slider`, `created_at`, `updated_at`) VALUES
(1, 1, 'Men\'s Fashion', 'Clothing', 'fas fa-tshirt', '6029109754ad21613303959.jpg', 'No', '2021-05-01 21:36:13', '2021-05-08 05:37:53'),
(2, 1, 'Men\'s Fashion', 'Glasses', 'fas fa-glasses', '600280f91f4401610776825.jpeg', 'No', '2021-05-01 21:37:17', '2021-05-08 05:38:27'),
(3, 1, 'Men\'s Fashion', 'Shoes', 'fab fa-shopify', '602911049a4b51613304068.jpg', 'Yes', '2021-05-02 00:43:04', '2021-05-06 21:08:29'),
(5, 2, 'Women\'s Fashion', 'Beauty & Skin', 'far fa-heart', '32ad5253c9a3df5638f007a5f5.jpg', 'Yes', '2021-05-02 00:49:22', '2021-05-06 21:10:56'),
(6, 2, 'Women\'s Fashion', 'Clothing', 'fas fa-tshirt', 'italianfashion.jpg', 'Yes', '2021-05-02 00:55:18', '2021-05-06 21:11:51'),
(7, 2, 'Women\'s Fashion', 'Glasses', 'fas fa-glasses', '602911aeccec81613304238.jpg', 'Yes', '2021-05-02 01:10:42', '2021-05-06 21:09:16'),
(8, 3, 'Electronics', 'Computer Accessories', 'fas fa-mobile-alt', 'Computer-Accessories-1024x683.png', 'Yes', '2021-05-02 01:24:11', '2021-05-06 21:31:41'),
(9, 3, 'Electronics', 'Drones', 'fab fa-elementor', 'The_Ups_and_Downs_of_Drones-Hero.jpg', 'Yes', '2021-05-02 01:26:53', '2021-05-06 21:32:44'),
(10, 3, 'Electronics', 'Headphones', 'fas fa-headphones', '046UyKcU86Megq3Eenq0sbo-1.1597063431.fit_lpad.size_625x365.jpg', 'Yes', '2021-05-02 01:28:50', '2021-05-06 21:33:27'),
(11, 3, 'Electronics', 'Laptops', 'fas fa-laptop-code', '6t8Zh249QiFmVnkQdCCtHK.jpg', 'Yes', '2021-05-02 01:31:34', '2021-05-06 21:34:05'),
(14, 4, 'Home Appliance', 'Bed Clothes', 'fas fa-door-closed', 'diamond-exclusive-double-bed-sheet-500x500.jpg', 'Yes', '2021-05-05 19:20:47', '2021-05-06 21:34:52'),
(15, 1, 'Men\'s Fashion', 'Watch', 'fas fa-stopwatch', 'FS5790-alt.jpg', 'Yes', '2021-05-06 23:35:18', '2021-05-06 23:35:18'),
(16, 1, 'Men\'s Fashion', 'Pant', 'fas fa-expand', 'download.jpg', 'No', '2021-05-08 05:15:31', '2021-05-08 05:40:51'),
(17, 1, 'Men\'s Fashion', 'T-shirt', 'fas fa-tshirt', '600957c8b93281611225032 (1).png', NULL, '2021-05-08 20:27:32', '2021-05-08 20:27:32'),
(18, 7, 'Baby Fashion', 'T-shirt', 'fas fa-tshirt', 'thumb_6006b785c77081611052933.jpg', NULL, '2021-05-10 23:58:53', '2021-05-10 23:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_price` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount_price` int(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartes`
--
ALTER TABLE `cartes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartinformations`
--
ALTER TABLE `cartinformations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compares`
--
ALTER TABLE `compares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginhistory`
--
ALTER TABLE `loginhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `peoples`
--
ALTER TABLE `peoples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cartes`
--
ALTER TABLE `cartes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `cartinformations`
--
ALTER TABLE `cartinformations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `compares`
--
ALTER TABLE `compares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=346;

--
-- AUTO_INCREMENT for table `loginhistory`
--
ALTER TABLE `loginhistory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `peoples`
--
ALTER TABLE `peoples`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
