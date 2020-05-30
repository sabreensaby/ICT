-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2020 at 04:57 PM
-- Server version: 10.4.11-MariaDB-log
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ictatjcu_cons2`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `user_id`, `address`, `city`, `state`, `zip_code`) VALUES
(2, 49, '', '', '', ''),
(3, 69, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_area`
--

CREATE TABLE `admin_area` (
  `id` int(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_area`
--

INSERT INTO `admin_area` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `buy_packages`
--

CREATE TABLE `buy_packages` (
  `id` int(11) NOT NULL,
  `sessioni_id` varchar(255) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `item_type` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy_packages`
--

INSERT INTO `buy_packages` (`id`, `sessioni_id`, `item_id`, `item_type`, `qty`, `user_id`, `created_at`) VALUES
(6, 'phq41r4h38oo93c7f2bb1lmgdm', 5, NULL, NULL, 49, '2020-05-05 21:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `sessioni_id` varchar(255) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `item_type` enum('product','service','package') DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `sessioni_id`, `item_id`, `item_type`, `qty`, `user_id`, `created_at`) VALUES
(3, 'sss', 5, NULL, 50, 3, '2020-04-20 22:42:15'),
(8, 'phq41r4h38oo93c7f2bb1lmgdm', 13, NULL, 1, 49, '2020-05-09 11:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `cart_services`
--

CREATE TABLE `cart_services` (
  `id` int(11) NOT NULL,
  `sessioni_id` varchar(255) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `item_type` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `user_id` varchar(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_reason` varchar(50) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `contact_reason`, `comments`, `created_at`) VALUES
(2, 'GAGANDEEP SINGH', 'harj91@gmail.com', 'Report a Bug', 'hahahahah', '2020-04-09 21:11:55'),
(3, 'Basil Beach', 'jojibuvugu@mailinator.net', 'Question', 'In hic est quod cor', '2020-04-09 21:11:55'),
(4, 'Basil Beach', 'jojibuvugu@mailinator.net', 'Question', 'In hic est quod cor', '2020-04-09 21:11:55'),
(5, 'Hayes Prince', 'lewip@mailinator.com', 'Report a Bug', 'Irure rerum nihil si', '2020-04-09 21:11:55'),
(6, 'Galvin Mcknight', 'sobowudo@mailinator.com', 'Question', 'Laudantium dolores ', '2020-04-09 21:11:55'),
(7, 'Galvin Mcknight', 'sobowudo@mailinator.com', 'Question', 'Laudantium dolores ', '2020-04-09 21:11:55'),
(9, 'Odysseus Flowers', 'lyfasyvela@mailinator.com', 'Question', 'Enim voluptate et fu', '2020-04-13 19:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `electricity_connection`
--

CREATE TABLE `electricity_connection` (
  `id` int(50) NOT NULL,
  `electricity_connection_provider` varchar(50) NOT NULL,
  `electricity_connection_details` text NOT NULL,
  `electricity_price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electricity_connection`
--

INSERT INTO `electricity_connection` (`id`, `electricity_connection_provider`, `electricity_connection_details`, `electricity_price`) VALUES
(1, 'PGVCL', 'good provider', 180000),
(2, 'MGVCL', 'cheapest and best', 50000),
(3, 'MGVCL', 'sfsf', 23);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `comment` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `name`, `comment`, `city`, `created_at`) VALUES
(1, 'wytom@mailinator.com', 'Brian', 'Alias nemo ex maxime', 'Porro earum velit o', '2020-04-19 16:22:23'),
(2, 'wytom@mailinator.com', 'Brian', 'Alias nemo ex maxime', 'Porro earum velit o', '2020-04-19 16:23:51'),
(4, 'wajoqyvuby@mailinator.net', 'Gail', 'Incidunt aliquip no', 'Officia reprehenderi', '2020-05-04 20:47:11'),
(5, 'vogos@mailinator.net', 'Lunea', 'Sed atque et nulla sSed atque et nulla sSed atque et nulla sSed atque et nulla sSed atque et nulla sSed atque et nulla sSed atque et nulla sSed atque et nulla sSed atque et nulla sSed atque et nulla sSed atque et nulla sSed atque et nulla sSed atque et nulla sSed atque et nulla sSed atque et nulla s', 'Sequi cumque eiusmod', '2020-05-04 20:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `gas_connection`
--

CREATE TABLE `gas_connection` (
  `id` int(30) NOT NULL,
  `gas_service_provider` varchar(50) NOT NULL,
  `gas_connection_details` text NOT NULL,
  `gas_price` int(5) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gas_connection`
--

INSERT INTO `gas_connection` (`id`, `gas_service_provider`, `gas_connection_details`, `gas_price`, `created_at`) VALUES
(3, 'high', 'smart', 3000, '2020-04-05 10:28:19'),
(9, 'Bharat', 'afasdd fdsf', 54, '2020-04-05 10:53:52'),
(11, 'Indane', 'sdfdsd aewr a', 123, '2020-04-05 13:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `interior_design`
--

CREATE TABLE `interior_design` (
  `id` int(50) NOT NULL,
  `interior_type` varchar(50) NOT NULL,
  `interior_details` varchar(250) NOT NULL,
  `interior_price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interior_design`
--

INSERT INTO `interior_design` (`id`, `interior_type`, `interior_details`, `interior_price`) VALUES
(1, 'Kitchen Design', 'interior_details', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `kitchen_equipment`
--

CREATE TABLE `kitchen_equipment` (
  `id` int(50) NOT NULL,
  `equipment_type` varchar(50) NOT NULL,
  `quality` varchar(10) NOT NULL,
  `details` varchar(255) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kitchen_equipment`
--

INSERT INTO `kitchen_equipment` (`id`, `equipment_type`, `quality`, `details`, `price`) VALUES
(1, 'benchtop', '5star', 'Best', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `kitchen_service`
--

CREATE TABLE `kitchen_service` (
  `id` int(50) NOT NULL,
  `kitchen_service_type` varchar(50) NOT NULL,
  `service_details` text NOT NULL,
  `service_price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kitchen_service`
--

INSERT INTO `kitchen_service` (`id`, `kitchen_service_type`, `service_details`, `service_price`) VALUES
(1, 'low', 'Small place', 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `kitchen_staff`
--

CREATE TABLE `kitchen_staff` (
  `id` int(50) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `years_of_experience` int(10) NOT NULL,
  `additional_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kitchen_staff`
--

INSERT INTO `kitchen_staff` (`id`, `name`, `email`, `role`, `skills`, `years_of_experience`, `additional_details`) VALUES
(1, 'Robin', 'robin@gmail.com', 'souschef', 'italian cuisine expert', 4, 'master chef'),
(2, 'manpreet kaur', 'manpreetkaur81993@gmail.com', 'headchef', 'italian cuisine expert', 4, 'master chef'),
(3, 'sabreen', 'sabreen@gmail.com', 'cleaners', 'worst cleaning', 5, 'can clean toilets'),
(4, 'HARJEET SINGH', 'harj91@gmail.com', 'headchef', 'italian cuisine expert', 2, ''),
(5, 'suzzu', 'suzzu@gmail.com', 'headchef', 'italian cuisine expert', 4, 'best'),
(6, 'kiara', 'suzzu@gmail.com', 'headchef', 'italian cuisine expert', 4, 'best'),
(7, 'Samuel', 'samuel@gmail.com', 'souschef', 'best chef', 2, 'two hands worker');

-- --------------------------------------------------------

--
-- Table structure for table `menu_design`
--

CREATE TABLE `menu_design` (
  `id` int(50) NOT NULL,
  `menu_type` varchar(50) NOT NULL,
  `menu_details` text NOT NULL,
  `menu_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_design`
--

INSERT INTO `menu_design` (`id`, `menu_type`, `menu_details`, `menu_price`) VALUES
(1, 'Fun Restaurant Menu Designs', 'funny theme designs', 200000),
(2, 'Fun Restaurant Menu Designs', 'funny theme design', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `item_id` int(11) UNSIGNED DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `transactin_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `item_id`, `user_id`, `qty`, `price`, `created_at`, `transactin_id`) VALUES
(1, NULL, 13, 49, '', '', '2020-04-29 22:45:46', NULL),
(2, NULL, 8, 49, '', '', '2020-04-29 22:45:46', NULL),
(3, NULL, 5, 49, '', '', '2020-04-29 22:45:46', NULL),
(4, NULL, 13, 49, '1', '104', '2020-04-29 22:46:10', NULL),
(5, NULL, 8, 49, '2', '126', '2020-04-29 22:46:10', NULL),
(6, NULL, 5, 49, '4', '126', '2020-04-29 22:46:10', NULL),
(7, 4, 13, 49, '1', '104', '2020-04-29 23:02:23', NULL),
(8, 4, 8, 49, '2', '126', '2020-04-29 23:02:23', NULL),
(9, 4, 5, 49, '4', '126', '2020-04-29 23:02:23', NULL),
(10, 5, 13, 49, '1', '104', '2020-04-29 23:44:12', NULL),
(11, 5, 8, 49, '2', '126', '2020-04-29 23:44:12', NULL),
(12, 5, 5, 49, '4', '126', '2020-04-29 23:44:12', NULL),
(13, 6, 13, 49, '1', '104', '2020-04-29 23:44:58', NULL),
(14, 6, 8, 49, '2', '126', '2020-04-29 23:44:58', NULL),
(15, 6, 5, 49, '4', '126', '2020-04-29 23:44:58', NULL),
(16, 8, 13, 49, '2', '104', '2020-05-06 20:13:32', NULL),
(17, 8, 8, 49, '2', '126', '2020-05-06 20:13:32', NULL),
(18, 8, 5, 49, '4', '126', '2020-05-06 20:13:32', NULL),
(19, 9, 13, 49, '2', '104', '2020-05-07 23:34:16', NULL),
(20, 9, 8, 49, '2', '126', '2020-05-07 23:34:16', NULL),
(21, 9, 5, 49, '4', '126', '2020-05-07 23:34:16', NULL),
(22, 10, 12, 69, '3', '104', '2020-05-16 14:57:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_ids`
--

CREATE TABLE `order_ids` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_ids`
--

INSERT INTO `order_ids` (`id`, `user_id`, `amount`, `created_at`) VALUES
(1, 49, NULL, '2020-04-29 22:59:49'),
(2, 49, NULL, '2020-04-29 22:59:51'),
(3, 49, NULL, '2020-04-29 22:59:55'),
(4, 49, NULL, '2020-04-29 23:02:23'),
(5, 49, NULL, '2020-04-29 23:44:12'),
(6, 49, NULL, '2020-04-29 23:44:58'),
(7, 49, '964', '2020-05-06 20:12:46'),
(8, 49, '964', '2020-05-06 20:13:32'),
(9, 49, '964', '2020-05-07 23:34:16'),
(10, 69, '312', '2020-05-16 14:57:20'),
(11, 69, '312', '2020-05-16 15:03:12');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(50) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `package_desc` varchar(500) NOT NULL,
  `package_price` int(7) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package_name`, `package_desc`, `package_price`, `created_at`) VALUES
(1, 'Italian Package', 'One head chef+2 helpers+Italian Equipments +Menu Design', 300000, '2020-04-08 22:21:54'),
(2, 'test', 'df er rtert dfgd', 6454, '2020-04-08 22:39:52'),
(4, 'goa package', ' 3 dyas 2 night  package', 20000, '2020-04-10 20:35:56'),
(5, 'kerala tour', ' 10 dyas  food + trevel+pick and drop', 3000, '2020-04-10 20:37:01');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_cat` varchar(255) DEFAULT NULL,
  `price` int(255) DEFAULT NULL,
  `descrptions` longtext DEFAULT NULL,
  `img_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_cat`, `price`, `descrptions`, `img_name`, `created_at`) VALUES
(5, 'Distinctio Reprehen', 'Sed laborum optio e', '15', 126, 'Ex esse nulla ea deb', 'download.jpg', '2020-04-18 16:35:19'),
(8, 'Distinctio Reprehen', 'Sed laborum optio e', '15', 126, 'Ex esse nulla ea deb', '5e9ae77416000_1587210100.jpg', '2020-04-18 17:11:40'),
(9, 'Consectetur natus i', 'Id magnam blanditiis', '11', 936, 'Voluptatem Magnam e', '5e9ae78ad4bbd_1587210122.jpg', '2020-04-18 17:12:02'),
(10, 'Culpa ipsam aspernat', 'Aut velit natus inci', '10', 104, 'Est et incididunt s', '5e9ae7c36ca9b_1587210179.jpg', '2020-04-18 17:12:59'),
(11, 'Culpa ipsam aspernat', 'Aut velit natus inci', '10', 104, 'Est et incididunt s', '5e9ae7e07708f_1587210208.jpg', '2020-04-18 17:13:28'),
(12, 'Culpa ipsam aspernat', 'Aut velit natus inci', '10', 104, 'Est et incididunt s', '5e9ae80d832cd_1587210253.jpg', '2020-04-18 17:14:13'),
(13, 'Culpa ipsam aspernat', 'Aut velit natus inci', '10', 104, 'Est et incididunt s', '5e9ae8e612327_1587210470.jpg', '2020-04-18 17:17:50'),
(14, '0024pc', 'product', '10', 104, ' jasdfsjd fsdfjs idf sjuewf s', '5e9b33172d2aa_1587229463.png', '2020-04-18 19:39:11'),
(15, '43', 'wall 1', '15', 520, 'dfased ad', '5eb033e8497b1_1588605928.png', '2020-05-04 20:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `purchased_pacakge`
--

CREATE TABLE `purchased_pacakge` (
  `id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchased_pacakge`
--

INSERT INTO `purchased_pacakge` (`id`, `package_id`, `user_id`, `price`, `created_at`) VALUES
(1, 5, 49, '3000', '2020-05-05 23:27:38'),
(2, 5, 49, '12546', '2020-05-11 22:28:40'),
(3, 5, 69, '3000', '2020-05-16 08:37:37'),
(4, 5, 69, '3000', '2020-05-16 08:39:38'),
(5, 5, 69, '3000', '2020-05-16 08:41:56'),
(6, 5, 69, '3000', '2020-05-16 08:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `purchased_services`
--

CREATE TABLE `purchased_services` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchased_services`
--

INSERT INTO `purchased_services` (`id`, `service_id`, `user_id`, `price`, `created_at`) VALUES
(11, 10, 69, '12546', '2020-05-17 10:30:49');

-- --------------------------------------------------------

--
-- Table structure for table `receipie_design`
--

CREATE TABLE `receipie_design` (
  `id` int(50) NOT NULL,
  `receipie_type` varchar(50) NOT NULL,
  `receipie_details` varchar(250) NOT NULL,
  `receipie_price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipie_design`
--

INSERT INTO `receipie_design` (`id`, `receipie_type`, `receipie_details`, `receipie_price`) VALUES
(1, 'Modern Food Receipies', 'receipie_details', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_type_id` int(11) UNSIGNED DEFAULT NULL,
  `staff_name` varchar(255) DEFAULT NULL,
  `staff_email` varchar(255) DEFAULT NULL,
  `staff_role` varchar(255) DEFAULT NULL,
  `descriptions` longtext DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `experience` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_type_id`, `staff_name`, `staff_email`, `staff_role`, `descriptions`, `price`, `created_at`, `experience`, `skills`) VALUES
(9, 11, 'Yuli Contreras', 'lubezy@mailinator.com', 'Atque commodi autem ', 'Quae est eaque volup', '718', '2020-04-19 12:35:00', '3yrs', 'Veniam consectetur '),
(10, 11, 'Yuli Contreras', 'lubezy@mailinator.com', 'Atque commodi autem ', 'Quae est eaque volup', '12546', '2020-04-19 12:35:39', '3yrs', 'php');

-- --------------------------------------------------------

--
-- Table structure for table `services_cat`
--

CREATE TABLE `services_cat` (
  `id` int(11) NOT NULL,
  `service_cat` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=>deactive,1=>active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `service_description` text DEFAULT NULL,
  `img_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_cat`
--

INSERT INTO `services_cat` (`id`, `service_cat`, `status`, `created_at`, `service_description`, `img_name`) VALUES
(12, 'Design service', 1, '2020-04-02 21:43:15', 'dmeo taks', 'Screen Shot 2019-08-19 at 12.08.14 PM.png'),
(16, 'Restaurent setup', 1, '2020-04-13 21:04:38', 'The Commercial Architectural Service involves taking a client\'s brief then designing and managing the process of the delivery of a building. \r\nIt can be a new building, housing project, alterations, or conservation of an existing building.\r\nOur service range includes a wide range of architectural designing service, commercial architecture designing service, green building design service, building.', 'download.jpg'),
(17, 'Kitchen setup', 1, '2020-04-13 21:12:38', 'The Kitchen Service involves taking a client\'s brief then designing and managing the process of the delivery of a building. \r\nIt can be a new building, housing project, alterations, or conservation of an existing restaurants.\r\nOur service range includes a wide range of architectural designing service, commercial architecture designing service, green building design service, building.', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `services_types`
--

CREATE TABLE `services_types` (
  `id` int(11) NOT NULL,
  `service_type` varchar(255) DEFAULT NULL,
  `service_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `img_name` varchar(255) DEFAULT NULL,
  `is_staff_page` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_types`
--

INSERT INTO `services_types` (`id`, `service_type`, `service_id`, `created_at`, `img_name`, `is_staff_page`) VALUES
(5, ' stef', 7, '2020-04-01 22:03:37', NULL, NULL),
(6, ' dsfsdf ---', 4, '2020-04-01 22:03:44', NULL, NULL),
(7, 'dmeoddddddddddddd ', 7, '2020-04-01 22:44:07', NULL, NULL),
(8, ' ded', 3, '2020-04-01 22:56:02', NULL, NULL),
(9, 'Restaurent furniture', 16, '2020-04-02 22:28:20', '1.png', NULL),
(10, 'Restaurant crockery ', 16, '2020-04-13 21:19:09', '1.png', NULL),
(11, ' kitchen Staff ', 17, '2020-04-16 22:27:31', '1.png', 'yes'),
(12, ' kitchen equipment', 17, '2020-04-16 22:28:02', 'download.jpg', NULL),
(13, ' kitchenware & nives', 17, '2020-04-16 22:31:08', 'download.jpg', NULL),
(14, ' cleaning & hygiene', 17, '2020-04-16 22:32:00', '1.png', NULL),
(15, ' Wall design', 12, '2020-04-16 22:33:17', '1.png', NULL),
(16, ' Menu design', 12, '2020-04-16 22:33:34', 'download.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactno` bigint(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_type` enum('users','admin') NOT NULL DEFAULT 'users',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `contactno`, `dob`, `username`, `password`, `address`, `user_type`, `created_at`) VALUES
(13, 'manpreet kaur', 'manpreetkaur81993@gmail.com', 4325874617, '2020-01-09', 'harj91@gmail.com', 'jdshfj', '5/32', 'users', '2020-04-05 09:34:18'),
(14, 'manpreet kaur', 'manpreetkaur81993@gmail.com', 4325874617, '2020-01-17', 'jc519711', 'jdshfj', '5/32', 'users', '2020-04-05 09:34:18'),
(15, 'manpreet kaur', 'manpreetkaur81993@gmail.com', 4325874617, '2020-01-04', 'harj91@gmail.com', 'jgbhn', '5/32', 'users', '2020-04-05 09:34:18'),
(16, 'shfksj', 'jkdshkj', 63278647, '2020-01-16', 'jfhsjv', 'snslfh', 'sljehlgjwr;gm', 'users', '2020-04-05 09:34:18'),
(17, 'shfksj', 'jkdshkj', 63278647, '2020-01-16', 'jfhsjv', 'm,nvjsf', 'sljehlgjwr;gm', 'users', '2020-04-05 09:34:18'),
(18, 'khk', 'sndbsj@jhj', 63278647, '2020-01-16', 'jfhsjv', 'jfbhkjsf', 'sljehlgjwr;gm', 'users', '2020-04-05 09:34:18'),
(19, 'khk', 'sndbsj@jhj', 63278647, '2020-01-16', 'jfhsjv', 'khghkj', 'sljehlgjwr;gm', 'users', '2020-04-05 09:34:18'),
(20, 'manpreet kaur', 'manpreetkaur81993@gmail.com', 4325874617, '2020-01-17', 'jc519711', 'qwerty', '5/32', 'users', '2020-04-05 09:34:18'),
(21, 'kjkjkj', 'harj91@gmail.com', 4325874617, '2020-01-01', 'jc519711', 'ghghghg', '2/65\r\nBELLEVUE TERRACE', 'users', '2020-04-05 09:34:18'),
(22, 'kjkjkj', 'harj91@gmail.com', 4325874617, '2020-01-01', 'jc519711', 'kkjh', '2/65\r\nBELLEVUE TERRACE', 'users', '2020-04-05 09:34:18'),
(23, 'kjkjkj', 'harj91@gmail.com', 4325874617, '2020-01-01', 'jc519711', 'jhkjh', '2/65\r\nBELLEVUE TERRACE', 'users', '2020-04-05 09:34:18'),
(33, 'khushi', 'khushi@gmail.com', 432099742, '2020-01-17', 'khushi', 'khushi', 'e.g Level 15 100 Miller St, North Sydney, NSW, 2060', 'users', '2020-04-05 09:34:18'),
(34, 'kesha', 'kesha@gmail.com', 432099742, '2020-01-17', 'kesha@gmail.com', '3f363cbc1e74c3ff27c8cd2b8911ff2e', 'e.g Level 15 100 Miller St, North Sydney, NSW, 2060', 'users', '2020-04-05 09:34:18'),
(35, 'kaur', 'kaur@gmail.com', 9876543456, '2020-01-10', 'kaurman', '81a7b0619dde6aa8963033d7e34f3afb', 'APARTMENT 2, 1310 HOMESTEAD ROAD', 'users', '2020-04-05 09:34:18'),
(36, 'kesh', 'kesh@gmail.com', 2564584518, '2020-01-23', 'kesh', 'dbc66f8e35149ba7b73cb752ee7ac975', 'Postmaster, Post Office\r\nKURUKSHETRA UNIversity', 'users', '2020-04-05 09:34:18'),
(37, 'abdul', 'abdul@gmail.com', 1323456744, '2020-01-29', 'abdul', '82027888c5bb8fc395411cb6804a066c', '3098 16 highway east', 'users', '2020-04-05 09:34:18'),
(38, 'sabreen', 'sabreenkaur95@gmail.com', 432099742, '2020-01-23', 'saby', '3b965e813f9ce59bf252c2915e6123f4', 'e.g Level 15 100 Miller St, North Sydney, NSW, 2060', 'users', '2020-04-05 09:34:18'),
(40, 'sabby', 'sabby@gmail.com', 5671565487, '2020-02-14', 'sabby', '7815696ecbf1c96e6894b779456d330e', '13766 HOLLY AVE', 'users', '2020-04-05 09:34:18'),
(41, 'msghf', 'hskrjghrjks@hfousf', 4517841746, '2020-02-13', 'qwe', '7815696ecbf1c96e6894b779456d330e', 'APARTMENT 2, 1310 HOMESTEAD ROAD', 'users', '2020-04-05 09:34:18'),
(42, 'mani', 'mani@gmail.com', 432099742, '2020-02-13', 'mani', '07cd55c7b42715ec44c133a6a165e8d2', 'e.g Level 15 100 Miller St, North Sydney, NSW, 2060', 'users', '2020-04-05 09:34:18'),
(43, 'sam', 'sam@gmail.com', 1234567890, '2020-02-11', 'sam', '332532dcfaa1cbf61e2a266bd723612c', '2/65\r\nBELLEVUE TERRACE', 'users', '2020-04-05 09:34:18'),
(44, 'ram', 'ram@gmail.com', 1234567890, '1988-02-12', 'ram', '4641999a7679fcaef2df0e26d11e3c72', 'ram', 'users', '2020-04-05 09:34:18'),
(45, 'lima', 'lima@gmail.com', 1234567890, '2003-03-12', 'lima', '6742923575546471370cc028f289db40', 'lima home', 'users', '2020-04-05 09:34:18'),
(46, 'manu', 'manu@yahoo.com', 1234567890, '1997-01-24', 'manu', 'f13bb1bed03db9d68a7d9a48aafeec78', 'manu home', 'users', '2020-04-05 09:34:18'),
(47, 'ravi', 'ravi@k.com', 1234567890, '1997-01-24', 'ravi', '63dd3e154ca6d948fc380fa576343ba6', 'ravi home', 'users', '2020-04-05 09:34:18'),
(48, 'Bob', 'bob@gmail.com', 452405356, '2016-11-06', 'bob the builder', '2acba7f51acfd4fd5102ad090fc612ee', 'bob home, QLD', 'users', '2020-04-05 09:34:18'),
(49, 'jit1', 'jit@jit.com', 7847544745, '2020-01-14', 'jit@jit.com', '123123', '5/32', 'admin', '2020-04-05 09:34:18'),
(51, 'Chantale Bean', 'zukihi@mailinator.com', 4159066718, '1981-09-28', 'komiqukuj', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Deserunt proident i', 'users', '2020-04-05 09:34:18'),
(52, 'Yoko Ware', 'wirup@mailinator.com', 9874545533, '1974-06-03', 'diremiji', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Impedit repellendus', 'users', '2020-04-05 09:34:18'),
(53, 'Yoko Ware', 'wirup@mailinator.com', 9874545533, '1974-06-03', 'diremiji', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Impedit repellendus', 'users', '2020-04-05 09:34:18'),
(54, 'jit', 'jit@jit.com', 7847544745, '2020-01-14', 'jit@jit.com', '123456', '5/32', 'users', '2020-04-05 09:34:18'),
(55, 'Cecilia Burks', 'qapem@mailinator.com', 9874563214, '2011-08-05', 'rihusulyty', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Reprehenderit molest', 'users', '2020-04-24 22:11:38'),
(56, 'Illana Parks', 'quby@mailinator.net', 9874563214, '1992-12-17', 'gorikokifu', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Voluptate dolores ei', 'users', '2020-04-29 19:56:51'),
(57, 'Ifeoma Flowers', 'pypaqu@mailinator.com', 9874545533, '1978-10-09', 'huhazi', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Error sit quia perf', 'users', '2020-05-04 20:13:45'),
(58, 'Britanney Branch', 'pelowor@mailinator.com', 1544659545, '1979-05-25', 'wylupo', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Voluptas ut sed sint', 'users', '2020-05-04 20:26:59'),
(59, 'Britanney Branch', 'pelowor@mailinator.com', 1544659545, '1979-05-25', 'wylupo', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Voluptas ut sed sint', 'users', '2020-05-04 20:27:17'),
(60, 'Britanney Branch', 'pelowor@mailinator.com', 1544659545, '1979-05-25', 'wylupo', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Voluptas ut sed sint', 'users', '2020-05-04 20:27:49'),
(61, 'Gloria Jarvis', 'simum@mailinator.net', 9874563214, '2020-03-13', 'bahyny', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Voluptatem Facilis ', 'users', '2020-05-04 20:29:07'),
(62, 'Cade Dickerson', 'hycusa@mailinator.net', 1236547898, '2011-06-13', 'pewepy', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Quia voluptate minus', 'users', '2020-05-04 20:30:29'),
(63, 'Yasir Boyer', 'zicow@mailinator.net', 1234564654, '2002-07-19', 'wezekoduxa', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Voluptates dolore ha', 'users', '2020-05-04 20:31:58'),
(64, 'Venus Osborne', 'miqopu@mailinator.net', 1231231231, '2001-08-17', 'telololydi', '123456', 'Aut quae esse aut c', 'users', '2020-05-04 20:33:53'),
(65, 'Naida Booth', 'leja@mailinator.net', 1234567897, '1996-10-21', 'humuzi', '123123', 'Illum accusantium i', 'users', '2020-05-04 20:40:31'),
(66, 'Mia Finley', 'koxevili@mailinator.com', 9874563214, '2012-07-02', 'futomoroxi', 'Pa$$w0rd!', 'Ut occaecat minim qu', 'users', '2020-05-04 20:46:20'),
(67, 'Callum Rojas', 'vufipygaf@mailinator.net', 7879812345, '1973-11-21', 'koqawetevo', 'Pa$$w0rd!', 'Nostrum labore assum', 'users', '2020-05-14 20:41:53'),
(68, 'Piper Weeks', 'recifub@mailinator.com', 1231231231, '2014-11-10', 'lepajefetu', 'Pa$$w0rd!kk', 'Libero illum ad dig', 'users', '2020-05-14 20:43:42'),
(69, 'Hu Melendez', 'fapiqek@mailinator.net', 1231231231, '1993-04-18', 'moceky', '123123', 'Sed consectetur magn', 'users', '2020-05-14 22:31:43'),
(70, 'Janna Bruce', 'jase@mailinator.net', 1231231231, '2016-04-09', 'qojanux', '123123', 'Quae adipisicing vol', 'users', '2020-05-17 15:59:04'),
(71, 'Janna Bruce', 'jase@mailinator.net', 1231231231, '2016-04-09', 'qojanux', '12312', 'Quae adipisicing vol', 'users', '2020-05-17 15:59:31'),
(72, 'Sybill Lucas', 'hyhyh@mailinator.net', 1231231231, '1988-12-06', 'nurifygac', '123122', 'Nobis non numquam vo', 'users', '2020-05-17 16:05:24'),
(73, 'Rooney Sanders', 'cibisih@mailinator.net', 1231231231, '2010-01-14', 'hevag', 'Pa$$w0rd!', 'Consectetur porro el', 'users', '2020-05-17 16:07:51'),
(74, 'Jelani Blackburn', 'cimar@mailinator.com', 1231231231, '2000-01-03', 'nakovy', 'Pa$$w0rd!', 'Dolor non alias sed ', 'users', '2020-05-17 16:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `water_connection`
--

CREATE TABLE `water_connection` (
  `id` int(30) NOT NULL,
  `water_connection_provider` varchar(50) NOT NULL,
  `water_connection_details` text NOT NULL,
  `water_price` int(5) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `water_connection`
--

INSERT INTO `water_connection` (`id`, `water_connection_provider`, `water_connection_details`, `water_price`, `created_at`) VALUES
(1, 'GWSSB', 'liked it', 60000, '2020-04-05 15:37:20'),
(2, 'GWSASB', 'good one', 60000, '2020-04-05 15:37:20'),
(8, 'Gujarat Water Supplier', 'sdf as56', 56, '2020-04-05 21:30:01'),
(9, 'Gujarat Water Supplier', 'dsfsd', 232, '2020-04-08 22:05:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_area`
--
ALTER TABLE `admin_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_packages`
--
ALTER TABLE `buy_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_services`
--
ALTER TABLE `cart_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electricity_connection`
--
ALTER TABLE `electricity_connection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gas_connection`
--
ALTER TABLE `gas_connection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interior_design`
--
ALTER TABLE `interior_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchen_equipment`
--
ALTER TABLE `kitchen_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchen_service`
--
ALTER TABLE `kitchen_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchen_staff`
--
ALTER TABLE `kitchen_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_design`
--
ALTER TABLE `menu_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_ids`
--
ALTER TABLE `order_ids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchased_pacakge`
--
ALTER TABLE `purchased_pacakge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchased_services`
--
ALTER TABLE `purchased_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipie_design`
--
ALTER TABLE `receipie_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_cat`
--
ALTER TABLE `services_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_types`
--
ALTER TABLE `services_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `water_connection`
--
ALTER TABLE `water_connection`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_area`
--
ALTER TABLE `admin_area`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buy_packages`
--
ALTER TABLE `buy_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cart_services`
--
ALTER TABLE `cart_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `electricity_connection`
--
ALTER TABLE `electricity_connection`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gas_connection`
--
ALTER TABLE `gas_connection`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `interior_design`
--
ALTER TABLE `interior_design`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kitchen_equipment`
--
ALTER TABLE `kitchen_equipment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kitchen_service`
--
ALTER TABLE `kitchen_service`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kitchen_staff`
--
ALTER TABLE `kitchen_staff`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu_design`
--
ALTER TABLE `menu_design`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_ids`
--
ALTER TABLE `order_ids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `purchased_pacakge`
--
ALTER TABLE `purchased_pacakge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `purchased_services`
--
ALTER TABLE `purchased_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `receipie_design`
--
ALTER TABLE `receipie_design`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services_cat`
--
ALTER TABLE `services_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `services_types`
--
ALTER TABLE `services_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `water_connection`
--
ALTER TABLE `water_connection`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
