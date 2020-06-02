-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 08:51 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

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
(3, 69, '', '', '', ''),
(4, 75, '15', 'Yeronga', 'QLD', '4104'),
(5, 78, '15', 'Yeronga', 'QLD', '4104');

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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_services`
--

INSERT INTO `cart_services` (`id`, `sessioni_id`, `item_id`, `item_type`, `qty`, `user_id`, `created_at`) VALUES
(17, 'vig2q04idm0q7nh4a5u77lgbn5', 10, NULL, NULL, '', '2020-05-22 12:40:33'),
(18, '3n4bu1p70k7i8lfilp5d3ek1h0', 22, NULL, NULL, '', '2020-06-02 16:45:18');

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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
(22, 10, 12, 69, '3', '104', '2020-05-16 14:57:20', NULL),
(23, 12, 28, 78, '1', '1465', '2020-06-01 23:45:11', NULL),
(24, 13, 28, 78, '1', '1465', '2020-06-01 23:46:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_ids`
--

CREATE TABLE `order_ids` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(11, 69, '312', '2020-05-16 15:03:12'),
(12, 78, '1465', '2020-06-01 23:45:11'),
(13, 78, '1465', '2020-06-01 23:46:38');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(50) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `package_desc` varchar(500) NOT NULL,
  `package_price` int(7) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package_name`, `package_desc`, `package_price`, `created_at`) VALUES
(6, 'Italian Package', '1 head chef + 2 helpers + 1 Desert Expert + Italian Equipment + Menu Design', 300000, '2020-06-02 12:13:11'),
(7, 'Mexican Package', '1 head chef + 1 Sous Chef + 2 Cleaners + Mexican Equipment + 1 helper', 350000, '2020-06-02 12:49:12'),
(9, 'Indian Package', '1 head chef + 1 commis chef + 1 helper + 1 cleaner + Indian Equipment', 280000, '2020-06-02 12:49:59'),
(10, 'Spanish Package', '1 head chef + 2 Commis Chef + Spanish Equipment + 1 cleaner + 1 helper', 370000, '2020-06-02 12:50:46'),
(11, 'Chinese Package', '2 head chef + 1 Sous Chef + 1 Commis Chef + Chinese Equipment + 2 cleaner ', 400000, '2020-06-02 12:51:31');

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
  `descrptions` longtext,
  `img_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_cat`, `price`, `descrptions`, `img_name`, `created_at`) VALUES
(17, 'SAB34050B', 'Mop Head 400g Blue', '14', 20, 'Premium Textile Blend 400Gram Mop Head from the SABCO Professional Range.\r\nFeatures H/D plastic ferrule.\r\nIdeal for commercial cleaning.\r\nIncludes adaptor to suit 25mm wooden or metal handles.\r\nCut ends for easy rinsing.', '5ed4ee7d66037_1591012989.jpg', '2020-05-30 14:45:58'),
(21, 'PV700', 'Pacvac Vacuum Cleaner Superhero 700', '14', 21250, 'The most popular of the Pacvac backpack range. The Superpro 700 encompasses the perfect balance of comfort, durability, and efficiency, making this machine the number one choice for everyday cleaning.\r\nâ€¢	Commercial grade\r\nâ€¢	2 Year warranty (body and motor)\r\nâ€¢	Lightweight\r\nâ€¢	Ergonomic harness\r\nâ€¢	Premium airflow\r\nâ€¢	Low noise\r\nâ€¢	Premium quality motor\r\nâ€¢	Capacity - 5L\r\nâ€¢	Filtration - 4 stage HEPA rated hypercone filter\r\nâ€¢	Power cord - 18m\r\nâ€¢	Weight - 5.2Kg', '5ed500874145e_1591017607.png', '2020-06-01 23:20:07'),
(22, 'SAB37024#', 'Mop Bucket 16Ltr Mobile Yellow - Other colours available', '14', 2350, '16 Litre with castors, Plastic, Ass. Colours available.\r\n16L capacity wringer bucket\r\nâ€¢	Plastic rollers & metal mechanism\r\nâ€¢	Features a unique wide mouth design which allows for ease of use with larger mops\r\nâ€¢	Castors for easy movement\r\nâ€¢	Spike design on non-slip pads for slip resistance\r\nâ€¢	Not affected by cleaning chemicals\r\nâ€¢	Rust resistant\r\nâ€¢	Colour coded to prevent cross-contamination', '5ed5018962145_1591017865.jpg', '2020-06-01 23:24:25'),
(23, 'SAB76262#', 'Mop Handle Aluminium - Assorted Colours', '14', 50, 'Aluminium Mop Handle with 24mm Threaded Adaptor Ideal for commercial use.\r\nAluminium Handle with 24mm Threaded Adaptor Colour coded thread and end cap to help avoid the risk\r\nof cross contamination between different work areas.\r\nLength 1450mm x 24mm\r\nAssorted colors available\r\n', '5ed50313e652e_1591018259.jpg', '2020-06-01 23:30:59'),
(24, 'DOM-EGB15', 'Essentially Green Bleach Sanitiser 15Litre', '14', 750, 'Essentially Green Liquid Bleach Sanitiser\r\nConcentrated germicidal agent for cleaning food preparation equipment and hard surfaces, refrigerators, and cutting boards etc.\r\n\r\nHygienically cleans and freshens tea towels, dishcloths, and floor mops.\r\n\r\n', '5ed50383a254e_1591018371.jpg', '2020-06-01 23:32:51'),
(25, 'MEGT500', 'MEIKO Rinse Aid Meikolon 5Litre (Carton of 2)', '14', 2000, 'MEIKO Rinse Aid Meikolon 5Litre\r\n(Carton of 2)', '5ed503c91d3bf_1591018441.jpg', '2020-06-01 23:34:01'),
(26, 'C23806', 'Essentially Green Floorclean Neutral ', '14', 465, '\"Victory\", a pH-neutral, general-purpose, solvent-free cleaner, for all hard surfaces.', '5ed50402bc007_1591018498.jpg', '2020-06-01 23:34:58'),
(27, 'MOCC10L', 'CONVOTHERM Convoclean Oven Cleaner 10Ltr', '14', 400, 'Heavy Duty cleaner designed for Convotherm ovens with the ConvoClean system.', '5ed5045557ff7_1591018581.jpg', '2020-06-01 23:36:21'),
(28, 'DOM-71098#', 'Dispensing System for Warewashers', '14', 1465, 'Seko series of Dispensers offer Durability and Reliability. Every Warewash Application is covered.', '5ed5048633c95_1591018630.jpg', '2020-06-01 23:37:10'),
(29, 'TK70424', 'Stockpot 25.5Litre Stainless Steel Chef Inox', '13', 3000, '18/10 Food-grade Stainless Steel, 6.00mm thermal base for fast, even and efficient heat distribution.\r\nStainless Steel 18/10.\r\nHACCP accredited.\r\nProfessional strengthened handles.\r\nIntensive 3 plies, 6.0mm thermal base for fast, even and efficient heat distribution.\r\nRolled edge for added strength, with the dripless pouring rim.\r\nSuitable for all heat sources including Induction.\r\nEuropean inspired satin-finished body, inside and out, with 1.0mm gauge sidewalls.\r\nDiameter 320mm x Height 320mm.\r\nCapacity 25.50 Litre.', '5ed505975d32d_1591018903.jpg', '2020-06-01 23:41:43'),
(30, 'TK70453', 'Saucepan S/S 3Litre Chef Inox', '13', 1500, '18/10 Food-grade Stainless Steel, 6.00mm thermal base for fast, even and efficient heat distribution.\r\nStainless Steel 18/10.\r\nHACCP accredited.\r\nStrengthened tubular and watertight handles, ergonomically shaped.\r\nIntensive 3 plies, 6.0mm thermal base for fast, even and efficient heat distribution.\r\nSuitable for all heat sources including Induction.\r\nEuropean inspired satin-finished body, inside and out, with 1.0mm gauge sidewalls.\r\nDiameter 180mm x Height 120mm.', '5ed5a93e0e241_1591060798.jpg', '2020-06-02 11:19:58'),
(31, 'TK70444', 'Stockpot 70Litre Stainless Steel Chef Inox', '13', 4000, 'â€¢	18/10 Food-grade Stainless Steel, 6.00mm thermal base for fast, even and efficient heat distribution\r\nâ€¢	Stainless Steel 18/10\r\nâ€¢	HACCP accredited\r\nâ€¢	Professional strengthened handles\r\nâ€¢	Intensive 3 ply, 6.0mm thermal base for fast, even and efficient heat distribution\r\nâ€¢	Rolled edge for added strength, with dripless pouring rim\r\nâ€¢	Suitable for all heat sources including Induction\r\nâ€¢	European inspired satin-finished body, inside and out, with 1.0mm gauge sidewalls\r\nâ€¢	Diameter 450mm x Height 450mm\r\nâ€¢	Capacity 70 Litre', '5ed5aa905ce85_1591061136.jpg', '2020-06-02 11:25:36'),
(32, 'TK63631', 'Saute Pan Non Stick 260mm', '13', 800, 'Aluminum Body Construction, Teflon Platinum, heavy-duty non-stick interior for professional use\r\nâ€¢	Aluminum Body Construction\r\nâ€¢	DuPont Teflon Platinum, Heavy-duty non-stick interior for professional use\r\nâ€¢	Machine scrolled base for optimum contact with the cooking surface\r\nâ€¢	Forged rivetted handles coated with heat resistant epoxy resin\r\nâ€¢	4mm Gauge Aluminum\r\nâ€¢	Heat resistant up to 500 degrees Celsius', '5ed5aaea6d811_1591061226.jpg', '2020-06-02 11:27:06'),
(33, 'KH18340', 'Baking Dish Rolled Edge Aluminium 340x280mm', '13', 400, 'Professional Quality Heavy Gauge Aluminium - 340 x 280 x 55mm\r\nâ€¢	Baking Dish\r\nâ€¢	Length 340mm\r\nâ€¢	Width 280mm\r\nâ€¢	Depth 55mm\r\nâ€¢	Rolled Edge\r\nâ€¢	Professional Quality Heavy Gauge Aluminium\r\nâ€¢	Made from Aluminium, a Great Heat Conductor Which Is Designed To Keep Your Food Hotter For Longer And To Get Hotter Quicker, Ideal For Those Busy Kitchens.\r\nâ€¢	Wide Edge Classic Commercial Design\r\nâ€¢	Heavy duty\r\nâ€¢	Perfect For Baking And Roasting\r\nâ€¢	Suitable For Oven Use. (Please Note Leaving Baking Dish On Direct Flame May Leave Permanent Markings)\r\nâ€¢	Thickened Rims\r\nâ€¢	Dishwasher Safe but May Cause Discolouration, handwash Recommended', '5ed5ab7540a3c_1591061365.jpg', '2020-06-02 11:29:25'),
(34, 'WE759035', 'Baking Dish 345x250x70mm Enamel', '13', 300, 'Quality roasting dish. Dishwasher safe Colour - Black.\r\nâ€¢	Enamel quality roasting dish\r\nâ€¢	Dishwasher safe\r\nâ€¢	Colour - Black\r\nâ€¢	Size - 345mm x 250mm x 70mm', '5ed5ab9b948c9_1591061403.jpg', '2020-06-02 11:30:03'),
(35, 'TI48030-SET', 'Cutting Board Set - 325x530x20mm', '13', 1000, 'Set of 6 Polyethylene material cutting boards, 530mm x 325mm x 20mm\r\nâ€¢	Polyethylene\r\nâ€¢	530mmx325mmx20mm\r\nâ€¢	Set of 6\r\nâ€¢	Brown, Blue, Red, Yellow, Green, White', '5ed5ac20aa3a8_1591061536.jpg', '2020-06-02 11:32:16'),
(36, 'OP97001-02', 'F.Dick Essential Professional Kit 9 Piece Box Set', '13', 2000, 'F.Dick The Real Chefs Choice! Traditionally Better Since 1778 - Made In Germany\r\nIncludes the following Items:\r\nâ€¢	UTILITYBOX SHARP Utility Box with Removable Tray â€“ Black\r\nâ€¢	FD-85447-21 F.Dick Pro-Dynamic Chefâ€™s Knife, 21cm \r\nâ€¢	FD-85039-21 F.Dick Pro-Dynamic Bread Knife, Serrated Edge, 21cm \r\nâ€¢	FD-85368-15 F.Dick Pro-Dynamic Boning Knife, Stiff, 15cm\r\nâ€¢	FD-85980-18 F.Dick Pro-Dynamic Filleting Knife, Flexible, 18cm\r\nâ€¢	FD-82620-08 F.Dick Pro-Dynamic Paring Knife, 8cm\r\nâ€¢	FD-82605-05 F.Dick Pro-Dynamic Turning Knife, 5cm\r\nâ€¢	FD-95101-17 F.Dick Pro-Dynamic Kitchen Fork, 17cm\r\nâ€¢	FD-77551-30 F.Dick EuroCut, Sharpening Steel, Regular Cut, 30cm', '5ed5acb19d526_1591061681.jpg', '2020-06-02 11:34:41'),
(37, 'SH79575', 'Knife Block Global', '13', 1500, 'Global Knife Block, Paring 80mm, Utility 110mm, Cooks 100mm & 200mm, Vegetable 140mm, Bread 220mm Knife and Stainless Steel Block\r\nGlobal Knife Block 7 Piece\r\nSet includes:\r\nâ€¢	Paring 80mm,\r\nâ€¢	Utility 110mm,\r\nâ€¢	Cooks 130mm\r\nâ€¢	Cooks 200mm,\r\nâ€¢	Vegetable 140mm,\r\nâ€¢	Bread 220mm Knife\r\nâ€¢	Stainless Steel Block\r\nâ€¢	Modern contemporary design\r\n', '5ed5ad092b37a_1591061769.jpg', '2020-06-02 11:36:09'),
(38, 'TK66016', 'Scoop Aluminium 160x80mm', '13', 250, 'Round Bottom Scoop 340ml,12OZ\r\nâ€¢	Round Bottom Scoop \r\nâ€¢	Polished Aluminium  \r\nâ€¢	Ideal as a scoop for bulk ice\r\n', '5ed5ad5588c81_1591061845.jpg', '2020-06-02 11:37:25'),
(39, 'TI48005#', 'Dredge S/S 285ml Coloured', '13', 300, 'Medium Hole, Stainless Steel 285ml, Assorted Colours available\r\nâ€¢	Medium Hole \r\nâ€¢	Stainless Steel \r\nâ€¢	285ml \r\nâ€¢	Powder Coated\r\nâ€¢	Available in Red, Green, Yellow, Black, White, Blue', '5ed5ad899ee0b_1591061897.jpg', '2020-06-02 11:38:17'),
(40, 'TK05000', 'Bonzer Can Opener', '13', 800, 'Benchtop H/D Can Opener with stainless steel base to mount on bench\r\nâ€¢	Benchtop H/D Can Opener\r\nâ€¢	STANDARD Model \r\nâ€¢	S/S Base Plate screws to counter top\r\nâ€¢	Can size up to 36cm\r\nâ€¢	Grey enamel finish with patented antibacterial coating\r\nâ€¢	Replaceable blade and wheel can be purchased', '5ed5add9dd24d_1591061977.jpg', '2020-06-02 11:39:37'),
(41, 'CCEGF24-4T', 'Garland Gas Cooktop 600mm - 4 Burners GF24-4T', '12', 83000, 'The Garland Heavy Duty Restaurant Series Modular Cooktop utilizes Garlandâ€™s patented cast-iron Starfire ProÂ® burners for maximum efficiency and reliability in your kitchen. With Garlandâ€™s patented burners providing the most effective heat impingement pattern in the foodservice industry in addition to having the largest useable cooking surface, the Garland Restaurant Series is guaranteed to work as hard as you do.', '5ed5ae7ee73c0_1591062142.jpg', '2020-06-02 11:42:22'),
(42, 'GOPFB36', 'Goldstein Gas Cooktop 914mm - 6 Burners', '12', 90000, 'High performance even heat 28mj gas open burners and griddle options\r\nPilot light standard maximising operating and energy efficiency\r\nHeavy duty removable, easy clean cast iron trivets Combination cooktops providing flexibility of configuration to suit any application.\r\nBench mounted models supplied as standard - Stand is an optional extra\r\nHeavy-duty fully welded steel body ensures rigidity and durability.\r\nStainless steel fascia and sides, spill zones, and drip trays for ease of cleaning.', '5ed5aebee1195_1591062206.jpg', '2020-06-02 11:43:26'),
(43, 'ROAHT860', 'Austheat Electric Griddle Toaster 590mm AHT860', '12', 75000, 'The electric Austheat Hotplate Griller is the ideal solution for busy fast food outlets where high-speed grilling and toasting is required. Ideal as a hamburger or grill station, the Austheat Hotplate/Grill is designed to work either as a stand-alone machine or alongside Austheat Deep Fryers in a modular configuration.', '5ed5af19bc4a4_1591062297.jpg', '2020-06-02 11:44:57'),
(44, 'EQTT98G', 'MORETTI FORNI Gas Conveyor Oven 32\' x 36\' TT98G', '12', 57950, 'The series range by Moretti Forni Professional represents a new generation of multi-function conveyor ovens. With this range, Moretti Forni achieves two primary goals: an uncompromised cooking quality and the lowest external temperature in its category.', '5ed5afaa30a80_1591062442.jpg', '2020-06-02 11:47:22'),
(45, 'UNXV1093', 'UNOX Convection Oven with Humidity 20 Tray 1/1GN XV1093', '12', 35468, 'Developed by UNOX to easily carry out the most common traditional cooking processes, CHEFLUXâ„¢ovens combine effectiveness and essentiality. They are effective as every detail has been studied to guarantee maximum cooking uniformity in every environment and with any load conditions. And they are essential as they have been designed to give you everything that you are looking for in a professional oven, without any unnecessary extras. The perfect combination of performance and simplicity.', '5ed5b0488db45_1591062600.jpg', '2020-06-02 11:50:00'),
(46, 'CCES86', 'Trueheat Gas Salamander 860mm', '12', 18500, 'Designed with Australian commercial kitchens in mind, Trueheatâ€™s S86-NG Salamander features quality stainless steel construction and powerful 14MJ high-speed gas burners to radiate intense heat, which seals in the natural flavors to leave a grilled appearance on steaks, chicken, seafood and vegetables. With its heavy-duty gas burners providing maximum efficiency and durability, the Trueheart range of commercial gas cooking equipment provides unparalleled performance at a competitive price point.', '5ed5b09375ae4_1591062675.jpg', '2020-06-02 11:51:15'),
(47, 'CCEJET5192', 'Menumaster Jetwave Microwave/Convection Oven 1900W', '12', 46000, 'The JETWAVE evenly and consistently bakes, browns, and toasts food up to four times faster than traditional methods.\r\nAccelerated cooking combination ovens deliver on a variety of levels. They are more compact and more efficient than using a separate microwave and convection oven. They not only give you quicker cook times, but they are also designed for ideal browning, toasting, and crisping, resulting in better food quality.\r\nDigital, 2700w convection, 1900w microwave, 34 liters', '5ed5b0e168a8f_1591062753.jpg', '2020-06-02 11:52:33'),
(48, 'AOKRF45-2H', 'TURBO AIR Upright Storage Fridge Freezer Combo - 2 Doors - 1152L KRF45-2H', '12', 130000, 'Turbo Air Inc. designs manufacture and distributes refrigerators and its parts. Turbo Air Inc. was founded in 1997 and is based in Long Beach, California.', '5ed5b1483c58e_1591062856.jpg', '2020-06-02 11:54:16'),
(49, 'AOKURF18-3', 'TURBO AIR Undercounter Storage Fridge/Freezer 3 Doors 465L KURF18-3', '12', 120000, 'Turbo Air Inc. designs manufacture and distributes refrigerators and its parts. Turbo Air Inc. was founded in 1997 and is based in Long Beach, California', '5ed5b1867e1de_1591062918.jpg', '2020-06-02 11:55:18'),
(50, 'WRHTCFH9', 'Topaz (By Williams) Cold Food Display Cabinet 4 Tier - 900mm', '12', 40000, 'Topaz Cake And Food display cabinets are perfectly suited to the fast-growing cafÃ© market and for those with a tighter budget.', '5ed5b290c504c_1591063184.png', '2020-06-02 11:59:44'),
(51, 'TSCH.IBSJ.BMC.U.GSF.4', 'CULINAIRE Heated Mobile Island Buffet - 4 Module CH.IBSJ.BMC.U.GSF.4', '12', 156000, 'Culinaire Heated Mobile Island Buffet - Stone Top and Joinery Panels - Flat Glass Gantry - Stainless Steel Fixings.', '5ed5b2c2037ed_1591063234.jpg', '2020-06-02 12:00:34'),
(52, 'MOE35T6-30', 'Turbofan Convection Oven With Humidity 6 Tray 406 x 736 E35T6-30', '12', 46550, 'Turbofan convection ovens are of durable construction and ingenious design. Be it chocolate cake or prime rib, you can rely on quality componentry and features to deliver results that are effortless, flawless, and, most importantly, consistent.', '5ed5b30a41b97_1591063306.jpg', '2020-06-02 12:01:46'),
(53, '', 'Restaurant Decorative Room wall divider', '15', 2500, 'Quick Details\r\nType:\r\nScreens & Room Dividers\r\nStyle:\r\nTraditional Chinese, Modern and Simple\r\nFans:\r\n4\r\nLeaf Quantity:\r\n3\r\nTechnics:\r\nCOATING\r\nTheme:\r\nConstruction\r\nFunction:\r\nMulti-Functional, Balcony, and floor\r\nConfirmation:\r\nFrame Structure\r\nPlace of Origin:\r\nGuangdong, China\r\nBrand Name:\r\nSamsung\r\nModel Number:\r\nSC-362\r\nMaterial:\r\nMetal\r\nMetal Type:\r\nStainless Steel\r\nProduct Name:\r\nHotel Restaurant Decorative partition metal screen /Room wall divider\r\nColor:\r\nSatin/Polished\r\nSize:\r\nStandard or Customized\r\nUsage:\r\nStairs/Handrail\r\nPackage:\r\nCarton\r\nCertificate:\r\nISO\r\nInstallation:\r\nEasy Diy Install\r\nApplication:\r\nStaircase\r\n\r\n\r\nThe price is per piece. ', '5ed5bae5f01b8_1591065317.jpg', '2020-06-02 12:35:17'),
(54, 'Price is per roll', 'Indian use background wall design for restaurant modern decoration wall coverings wallpaper', '15', 225, 'Type:\r\nWall Coating\r\nPlace of Origin:\r\nBeijing, China\r\nBrand Name:\r\nMSYD\r\nModel Number:\r\nAyana\r\nFunction:\r\nAnti-static, Fireproof, Heat Insulation, Moisture-Proof, Mould-Proof, Smoke-Proof, Sound-Absorbing, Soundproof, Waterproof\r\nUsage:\r\nAdministration, Commerce, Entertainment, Household\r\nStyle:\r\nCountry\r\nThickness:\r\n380g/sqm\r\nCertification:\r\nCE, SGS, ISO9001, ISO14001\r\nInk type:\r\nwater-ink\r\nColor:\r\nfor options\r\nRoll weight:\r\n1.2kg\r\nWidth:\r\n0.53m\r\nLength:\r\n10m\r\nPackaging:\r\nper carton boxes\r\nMaterial:\r\nPVC wallpaper\r\n', '5ed5bbdb1a299_1591065563.jpg', '2020-06-02 12:39:23'),
(55, 'Price is per roll', 'Background wall design for restaurant - wall coverings wallpaper', '15', 225, 'Type:\r\nWall Coating\r\nPlace of Origin:\r\nBeijing, China\r\nBrand Name:\r\nMSYD\r\nModel Number:\r\nAyana\r\nFunction:\r\nAnti-static, Fireproof, Heat Insulation, Moisture-Proof, Mould-Proof, Smoke-Proof, Sound-Absorbing, Soundproof, Waterproof\r\nUsage:\r\nAdministration, Commerce, Entertainment, Household\r\nStyle:\r\nCountry\r\nThickness:\r\n380g/sqm\r\nCertification:\r\nCE, SGS, ISO9001, ISO14001\r\nInk type:\r\nwater-ink\r\nColor:\r\nfor options\r\nRoll weight:\r\n1.2kg\r\nWidth:\r\n0.53m\r\nLength:\r\n10m\r\nPackaging:\r\nper carton boxes\r\nMaterial:\r\nPVC wallpaper\r\n', '5ed5bcbda05ec_1591065789.jpg', '2020-06-02 12:43:09'),
(56, 'Price is per roll', 'modern decoration wall coverings wallpaper', '15', 225, 'Type:\r\nWall Coating\r\nPlace of Origin:\r\nBeijing, China\r\nBrand Name:\r\nMSYD\r\nModel Number:\r\nAyana\r\nFunction:\r\nAnti-static, Fireproof, Heat Insulation, Moisture-Proof, Mould-Proof, Smoke-Proof, Sound-Absorbing, Soundproof, Waterproof\r\nUsage:\r\nAdministration, Commerce, Entertainment, Household\r\nStyle:\r\nCountry\r\nThickness:\r\n380g/sqm\r\nCertification:\r\nCE, SGS, ISO9001, ISO14001\r\nInk type:\r\nwater-ink\r\nColor:\r\nfor options\r\nRoll weight:\r\n1.2kg\r\nWidth:\r\n0.53m\r\nLength:\r\n10m\r\nPackaging:\r\nper carton boxes\r\nMaterial:\r\nPVC wallpaper', '5ed5bced296e6_1591065837.jpg', '2020-06-02 12:43:57'),
(57, 'Price per piece', 'Decorative partition metal screen ', '15', 2500, 'Type:\r\nScreens & Room Dividers\r\nStyle:\r\nTraditional Chinese, Modern and Simple\r\nFans:\r\n4\r\nLeaf Quantity:\r\n3\r\nTechnics:\r\nCOATING\r\nTheme:\r\nConstruction\r\nFunction:\r\nMulti-Functional, Balcony, and floor\r\nConfirmation:\r\nFrame Structure\r\nPlace of Origin:\r\nGuangdong, China\r\nBrand Name:\r\nSamsung\r\nModel Number:\r\nSC-362\r\nMaterial:\r\nMetal\r\nMetal Type:\r\nStainless Steel\r\nProduct Name:\r\nHotel Restaurant Decorative partition metal screen /Room wall divider\r\nColor:\r\nSatin/Polished\r\nSize:\r\nStandard or Customized\r\nUsage:\r\nStairs/Handrail\r\nPackage:\r\nCarton\r\nCertificate:\r\nISO\r\nInstallation:\r\nEasy Diy Install\r\nApplication:\r\nStaircase\r\n', '5ed5bd6a33424_1591065962.jpg', '2020-06-02 12:45:36'),
(58, '', 'Restaurant Cutlery And Crockery, Dishwasher & Microwave Safe Dinner Sets', '10', 200, 'Product Details=  6 x Dinner plates: 27cm diameter, 6 x Side plates: 21.5cm diameter, 6 x Bowls: 13.5cm diameter, 6 x Big Spoons , 6 x Small Spoons, 6 x cups\r\n\r\nâ€¢	Dinnerware Type: Dinnerware Sets\r\nâ€¢	Pattern Type: Plant\r\nâ€¢	Number of Users: 6\r\nâ€¢	Technique: Under Glazed\r\nâ€¢	Style: Western\r\nâ€¢	Production: Cup Kit\r\nâ€¢	Material: Ceramic, Porcelain\r\nâ€¢	Ceramic Type: Porcelain\r\nâ€¢	Certification: FDA, LFGB, EC, FDA, LFGB\r\nâ€¢	Feature: Eco-Friendly, Stocked\r\nâ€¢	Place of Origin: Guangdong, China\r\nâ€¢	Brand Name: Hosen 28\r\nâ€¢	Model Number: WangGe Series\r\nâ€¢	Stock: Available\r\nâ€¢	Dinnerwasher: Available\r\nâ€¢	Grade: A Grade\r\nâ€¢	Usage: Hotel, Restaurant\r\nâ€¢	Customized: OEM,ODM\r\nâ€¢	Scratch Proof: Strong\r\nâ€¢	Technical: 3 Times Burned\r\nâ€¢	Packing details: Bubble paper+carton\r\n', '5ed5c27978b57_1591067257.jpg', '2020-06-02 13:07:37'),
(59, '', 'Teteras Al Por Mayor Dinnerware Sets Cutlery Set, Black Ceramic Hotel Crockery, Dinnerware Sets Luxury plates Restaurant (Japanese Style)', '10', 450, 'Product details=  12 x Dinner plates: 27cm diameter, 12 x Side plates: 21.5cm diameter, 12 x Bowls: 13.5cm diameter, 12 x spoons, 12 x glasses, 12 x tea pot\r\n\r\nQuick Details\r\nDinnerware Type: Dinnerware Sets\r\nNumber of Users:12\r\nTechnique: On-glazed\r\nStyle: Japan Style\r\nProduction: Cup Kit\r\nMaterial: Ceramic\r\nCeramic Type: Porcelain\r\nCertification: CE / EU, FDA, LFGB, SGS\r\nFeature: Eco-Friendly, Stocked, Eco-friendly, Stocked\r\nPlace of Origin: Guangdong, China\r\nBrand Name: Two Eight/28/Hosen\r\nModel Number: Japanese Dinnerware Set HSY\r\nSize: Full Size\r\nColor: Black\r\nBrand name: Two Eight Ceramics\r\nUsage: Hotel,restaurant,cafe,shop,banquet hall\r\n', '5ed5c4325f1c6_1591067698.jpg', '2020-06-02 13:14:58'),
(60, '', 'Bulk silver stainless steel cutlery included dinner spoon, fork, knife, dessert spoon, and dessert fork ', '10', 150, 'Product details= 6 x dinner spoon, 6 x fork, 6 x knife, 6 x dessert spoon, 6 x dessert fork\r\nFlatware Type:\r\nFlatware Sets\r\nMaterial:\r\nMetal, 201stainless steel\r\nMetal Type:\r\nStainless Steel\r\nCertification:\r\nCE / EU, CQI, EEC, FDA, LFGB, SGS\r\nFeature:\r\nEco-Friendly, Stocked\r\nPlace of Origin:\r\nChina\r\nBrand Name:\r\nArmhorse\r\nModel Number:\r\nA56\r\nItem:\r\nstainless steel cutlery\r\nSurface finish:\r\nhigh mirror polish\r\nColor:\r\nstainless steel\r\nSafety:\r\ndishwasher safe\r\nApplication:\r\nhotel,restaurant,cafe,home use,etc.\r\nTechnology:\r\nstamping/forging\r\nGrade:\r\ntop-level\r\nLogo:\r\nembossing, laser, engraving\r\nStyle:\r\nsimplicity\r\n', '5ed5ee0149858_1591078401.jpg', '2020-06-02 16:12:43'),
(61, '', 'Popular design luxury gold plated ceramic dinnerware set', '10', 320, 'Dinnerware Type: Dinnerware Sets\r\nPattern Type: Gold Inlay\r\nNumber of Users: 6\r\nTechnique: In-glaze Decoration\r\nStyle: Western\r\nProduction: Spoon/Fork/Knife/Chopsticks Kit\r\nMaterial: Ceramic\r\nCeramic Type: Porcelain\r\nCertification: CE / EU, CIQ, EEC, FDA, LFGB, SGS\r\nFeature: Eco-Friendly, Stocked\r\nPlace of Origin: Fujian, China\r\nBrand Name: RD\r\nUsage: Home Hotel Restaurant, party, events\r\nMOQ: 6PCS\r\nPacking: Standard export safety package\r\nDelivery time: 7-10 Days', '5ed5ef390d5bc_1591078713.jpg', '2020-06-02 16:18:33'),
(62, '', 'Royal blue plate sets dinnerware', '10', 100, 'Dinnerware Type:\r\nDinnerware Sets\r\nPattern Type:\r\nGold Inlay\r\nNumber of Users:\r\n1\r\nTechnique:\r\nOn-glazed\r\nStyle:\r\nWestern, Western, fashionable\r\nProduction:\r\nCup Kit\r\nMaterial:\r\nCeramic\r\nCeramic Type:\r\nBone China, Bone China\r\nCertification:\r\nCE / EU, CIQ, EEC, FDA, LFGB, SGS\r\nFeature:\r\nDisposable, Eco-Friendly, Eco-Friendly, Stocked\r\nPlace of Origin:\r\nShanxi, China\r\nBrand Name:\r\nSY Dinnerware\r\nModel Number:\r\nSY-0218LQ01\r\nName:\r\nroyal blue dinnerware set\r\nLogo:\r\nAccept\r\nProperty:\r\nReusable, durable\r\nSample:\r\nAvailable\r\nPacking:\r\nIndividual box package', '5ed5f03d7e1c3_1591078973.jpg', '2020-06-02 16:22:53'),
(63, ' ', 'Wholesale designer customised modern luxury dining chair furniture for restaurant', '9', 39000, 'â€¢	Type: Restaurant Furniture\r\nâ€¢	Specific Use: Restaurant Set\r\n\r\n\r\nâ€¢	General Use: Commercial Furniture\r\nâ€¢	Material: Metal\r\nâ€¢	Metal Type: Stainless Steel\r\nâ€¢	Appearance: Modern\r\nâ€¢	Folded: No\r\nâ€¢	Place of Origin: China\r\nâ€¢	Brand Name: Zhongsen (TRINITY)\r\nâ€¢	Model Number: ZSR03\r\nâ€¢	Restaurant standard: 3-star, 4-star, 5-star\r\nâ€¢	Painting: semi-closed paint, open paint, glossy paint\r\nâ€¢	Furniture material: Fabric/ genuine leather/synthetic leather/wood\r\nâ€¢	Suitable occasion: hotel lobby, coffee shop, restaurant, living room, and club\r\nâ€¢	Furniture size: Customize\r\nâ€¢	Business Type: Manufacturer, factory\r\nâ€¢	Service: Customized service, on-site installation guidance service.\r\nâ€¢	Quality of the product: More than 5 years\r\nâ€¢	Certificates: ISO9001:2008,SGS\r\nâ€¢	Packing: Standard Export Packaging\r\n\r\n\r\nPRICE= â€¢20-29 Sets 39,000  â€¢30-39 Sets 36000  â€¢40-49 Sets 33000  â€¢>=50 Sets 30000', '5ed5f2886375c_1591079560.jpg', '2020-06-02 16:29:44'),
(64, '', 'Professional Custom High End Indian Restaurant Furniture Set', '9', 30000, 'Product detail= 1 large table with 12 chairs. \r\nCan be customized according to customer need.\r\nType:\r\nRestaurant Furniture\r\nSpecific Use:\r\nRestaurant Set\r\nGeneral Use:\r\nCommercial Furniture\r\nMail packing:\r\nY\r\nMaterial:\r\nWood\r\nWood Style:\r\nPanel\r\nAppearance:\r\nModern\r\nPlace of Origin:\r\nGuangdong, China\r\nBrand Name:\r\nPaken\r\nModel Number:\r\nHotel Restaurant Furniture\r\nFabric color:\r\nOptional\r\nCustomized:\r\nAcceptable\r\nUsage:\r\nHotel\r\nFeature:\r\nDurable\r\nSample:\r\nYes\r\nSize:\r\nCustom made\r\nHotel level:\r\n3~5 STAR\r\nStyle:\r\nModern\r\n\r\n\r\n', '5ed5f3bfacc60_1591079871.jpg', '2020-06-02 16:36:38'),
(65, '', 'Custom made restaurant furniture wood set modern restaurant furniture India', '9', 90000, 'Type:\r\nRestaurant Furniture\r\nSpecific Use:\r\nRestaurant Set\r\nGeneral Use:\r\nCommercial Furniture, Commercial Furniture\r\nMaterial:\r\nWood\r\nWood Style:\r\nSolid Wood\r\nAppearance:\r\nModern\r\nFolded:\r\nNo\r\nPlace of Origin:\r\nGuangdong, China\r\nBrand Name:\r\nHOLDER\r\nModel Number:\r\nHTR-04\r\nProduct name:\r\nrestaurant furniture wood set modern restaurant furniture India\r\nColor:\r\nCustomer Required\r\nSize:\r\nCustomized\r\nStyle:\r\nNeoclassic\r\nService:\r\ndesigned idea\r\nCertificates:\r\nISO9001 ISO14001 etc\r\nHotel Standard:\r\n3-5star Hotels\r\nUsage:\r\nRestaurant Set\r\nOEM&ODM:\r\nAcceptable\r\n', '5ed5f43adeb05_1591079994.jpg', '2020-06-02 16:39:54'),
(66, 'XC250', 'High Quality Coated Paper Promotion Menu', '16', 10, 'Price is per piece.', '5ed5f52a25771_1591080234.jpg', '2020-06-02 16:42:08'),
(67, 'XC251', 'Restaurant Book Board Menu', '16', 20, 'Price is per piece.', '5ed5f51ebe708_1591080222.jpg', '2020-06-02 16:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `purchased_pacakge`
--

CREATE TABLE `purchased_pacakge` (
  `id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchased_services`
--

INSERT INTO `purchased_services` (`id`, `service_id`, `user_id`, `price`, `created_at`) VALUES
(11, 10, 69, '12546', '2020-05-17 10:30:49'),
(12, 10, 75, '12546', '2020-05-22 12:45:20');

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
  `descriptions` longtext,
  `price` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `experience` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_type_id`, `staff_name`, `staff_email`, `staff_role`, `descriptions`, `price`, `created_at`, `experience`, `skills`) VALUES
(11, 11, 'Raman Singh', 'raman_singh@gmail.com', 'Head Chef ', 'Great Cooking Skills and attention to detail, leadership and management skills, ability to work under pressure, Innovation in cooking because customers want to see something different.', '50000', '2020-06-02 12:05:50', '9 years', 'Menu planning, ensuring food is priced right, managing stock and ordering food from various suppliers, ensuring everyone knows what theyâ€™re doing, maintaining good health and hygiene standards.'),
(12, 11, 'Munjal Vohra', 'munjal_vohra86@gmail.com', 'Head Chef ', 'Great Cooking Skills and attention to detail, leadership and management skills, ability to work under pressure, Innovation in cooking. ', '50000  ', '2020-06-02 12:08:34', '12 years', 'Making sure the quality of the food is in keeping with the calibre of restaurant, Controlling and managing a budget, organising the staff rota and ensuring everyone knows what theyâ€™re doing and when, menu planning, ensuring food is priced right, maintai'),
(13, 11, 'Hetvi', 'hetvi_bharambatt@gmail.com', 'Sous Chef ', 'As a Sous Chef, I will be the partner of head chef, the ability to build relationships with all members of the team, the ability to create and deliver inventive menus. ', '45000', '2020-06-02 12:10:56', '12 years', 'Managing the kitchen staff, taking responsibility for more technical elements of cuisine, training junior chefs, ensuring the kitchen meets high standards of quality, supervising all food preparation and deputising for the head chef in their absence.'),
(14, 11, 'Herik', 'herik90@yahoo.com', 'Sous Chef ', 'An excellent understanding of customer requirements, the ability to build relationships with all members of the team, the ability to create and deliver inventive menus and Supervising', '45000', '2020-06-02 12:15:12', '7 years', 'Act as a mentor to the kitchen team responsible for pastries and desserts, Support the pastry chef with menu design, Onboarding new employees, `Menu Design, Presentation, Baking, Knife Skills and multitasking.'),
(15, 11, 'Kavia', 'kavia452@gmail.com', 'Dessert Expert ', 'Have the ability to build relationships with all members of the team, the ability to create new and exciting desserts to renew the menu, and engage the interest of customers. ', '40000', '2020-06-02 12:16:26', '12 years', 'Social Adaptability, planning and administration, preparing a wide variety of goods following traditional and modern recipes. '),
(16, 11, 'Joshil ', 'joshil983@hotmail.com', 'Dessert Expert ', 'Have the ability to build relationships with all members of the team, the ability to create new and exciting desserts to renew the menu.', '38000', '2020-06-02 12:17:43', '11 years', 'Planning and administration, preparing a wide variety of goods following traditional and modern recipes. '),
(17, 11, 'Taran', 'taran_kaur@gmail.com', 'Helper', 'Have the ability to build relationships with all members of the team, follow the instructions of the chef.', '28000', '2020-06-02 12:20:04', '10 years', 'Professional in cutting and shopping, Excellent organizational skills and Assisted with general kitchen tasks such as: cleaning dishes, washing dishes, food preparation, laundry, etc'),
(18, 11, 'Pramukh ', 'pramukh90@gmail.com', 'Helper', 'Have the ability to build relationships with all members of the team, follow the instructions of the chef.', '28000', '2020-06-02 12:20:59', '10 years', 'Professional in cutting and shopping, Excellent organizational skills, can assist in some food preparations as well as keeping the kitchen area cleaned. '),
(19, 11, 'Prerna', 'prernaarora@gmail.com', 'Commis', 'Have the ability to build relationships with all members of the team.', '34000', '2020-06-02 12:22:08', '10 years', 'Willingness to learn, patience, ability to learn under pressure, keeping kitchen area clean '),
(20, 11, 'Pinal ', 'pinal_560@gmail.com', 'Commis', 'Have the ability to build relationships with all members of the team', '32000', '2020-06-02 12:23:32', '8 years', 'Willingness to learn, patience, ability to learn under pressure, keeping kitchen area clean '),
(21, 11, 'Prakat', 'prakat_arora@gmail.com', 'Cleaner', 'Have the ability to build relationships with all members of the team and clean the area.', '20000', '2020-06-02 12:24:28', '6 years', 'Ability to work both alone and in a team, awareness of health and safety procedures, punctual, reliable, trustworthy and able to manage time effectively.  '),
(22, 11, 'Neesh', 'sathneesh93@gmail.com', 'Cleaner', 'Have the ability to build relationships with all members of the team. ', '20000', '2020-06-02 12:25:27', '4 years', 'Ability to work both alone and in a team, awareness of health and safety procedures, punctual, reliable, trustworthy and able to manage time effectively.  ');

-- --------------------------------------------------------

--
-- Table structure for table `services_cat`
--

CREATE TABLE `services_cat` (
  `id` int(11) NOT NULL,
  `service_cat` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0=>deactive,1=>active',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `service_description` text,
  `img_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_cat`
--

INSERT INTO `services_cat` (`id`, `service_cat`, `status`, `created_at`, `service_description`, `img_name`) VALUES
(12, 'Design Service', 1, '2020-04-02 21:43:15', 'Design Service allows you to quickly access design overview information, reports, and messages. By default, the Design Service appears in the Workspace when you open a project, and it displays information specific to your targeted device and software tools. ', '5ed1de44dc3c2_1590812228.jpg'),
(16, 'Restaurant Setup', 1, '2020-04-13 21:04:38', 'The Commercial Architectural Service involves taking a client\'s brief then designing and managing the process of the delivery of a building. \r\nOur service range includes a wide range of architectural designing , commercial architecture designing service, and building.', '5ed1dca79b923_1590811815.png'),
(17, 'Kitchen Setup', 1, '2020-04-13 21:12:38', 'The Kitchen Service involves taking a client\'s brief then designing and managing the process of the delivery of a building. \r\nOur service range includes a wide range of architectural designing services, commercial, green building design service, building.', '5ed1de5788f10_1590812247.webp');

-- --------------------------------------------------------

--
-- Table structure for table `services_types`
--

CREATE TABLE `services_types` (
  `id` int(11) NOT NULL,
  `service_type` varchar(255) DEFAULT NULL,
  `service_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
(9, 'Restaurant Furniture ', 16, '2020-04-02 22:28:20', '5ed504f4c8255_1591018740.png', ''),
(10, 'Restaurant Crockery  ', 16, '2020-04-13 21:19:09', '5ed4f760309d4_1591015264.webp', ''),
(11, 'Kitchen Staff  ', 17, '2020-04-16 22:27:31', '5ed4f3dd66632_1591014365.png', 'yes'),
(12, 'Kitchen Equipment ', 17, '2020-04-16 22:28:02', '5ed4f3a337845_1591014307.png', ''),
(13, 'Kitchenware & Knives ', 17, '2020-04-16 22:31:08', '5ed4f26c8eca7_1591013996.png', ''),
(14, ' Cleaning & Hygiene    ', 17, '2020-04-16 22:32:00', '5ed1e2f2cec17_1590813426.png', ''),
(15, ' Wall design ', 12, '2020-04-16 22:33:17', '5ed5b9a83d217_1591065000.png', ''),
(16, ' Menu design ', 12, '2020-04-16 22:33:34', '5ed5ba139217c_1591065107.jpg', '');

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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(74, 'Jelani Blackburn', 'cimar@mailinator.com', 1231231231, '2000-01-03', 'nakovy', 'Pa$$w0rd!', 'Dolor non alias sed ', 'users', '2020-05-17 16:09:52'),
(75, 'Ranvir Singh', 'ranchahal5432@gmail.com', 452405356, '1990-01-08', 'Ran Chahal', 'dodhjaghar95', '15\r\nNelson', 'users', '2020-05-22 12:42:44'),
(76, 'kety', 'kety@gmail.com', 452605356, '1999-09-28', 'kety', 'kety', '15\r\nNelson', 'users', '2020-05-30 13:46:19'),
(77, 'Shael', 'shael95@gmail.com', 452405356, '1995-08-18', 'Shael', 'Dodhjaghar95', '1/15 Nelson Street, QLD', 'users', '2020-06-01 21:48:13'),
(78, 'Ranvir Singh', 'ranchahal5432@gmail.com', 452405356, '1995-08-18', 'Ranvi', 'Dodhjaghar', '15\r\nNelson', 'users', '2020-06-01 22:59:36'),
(79, 'Sabreen Kaur', 'sabreen90@gmail.com', 452405356, '1995-08-18', 'Saby', 'Dodhjaghar95', '15 Nelson Street, Yeronga, QLD', 'users', '2020-06-02 16:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `water_connection`
--

CREATE TABLE `water_connection` (
  `id` int(30) NOT NULL,
  `water_connection_provider` varchar(50) NOT NULL,
  `water_connection_details` text NOT NULL,
  `water_price` int(5) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_area`
--
ALTER TABLE `admin_area`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buy_packages`
--
ALTER TABLE `buy_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart_services`
--
ALTER TABLE `cart_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `order_ids`
--
ALTER TABLE `order_ids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `purchased_pacakge`
--
ALTER TABLE `purchased_pacakge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchased_services`
--
ALTER TABLE `purchased_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `receipie_design`
--
ALTER TABLE `receipie_design`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `services_cat`
--
ALTER TABLE `services_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `services_types`
--
ALTER TABLE `services_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `water_connection`
--
ALTER TABLE `water_connection`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
