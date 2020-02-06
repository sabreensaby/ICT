-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 09:58 AM
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
-- Database: `registration`
--

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
(1, 'PGVCL', 'good provider', 180000);

-- --------------------------------------------------------

--
-- Table structure for table `gas_connection`
--

CREATE TABLE `gas_connection` (
  `id` int(30) NOT NULL,
  `gas_service_provider` varchar(50) NOT NULL,
  `gas_connection_details` text NOT NULL,
  `gas_price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gas_connection`
--

INSERT INTO `gas_connection` (`id`, `gas_service_provider`, `gas_connection_details`, `gas_price`) VALUES
(1, '', '', 0),
(2, 'high', 'Best connection Provider', 2500),
(3, 'high', 'smart', 3000),
(4, 'high', '', 0),
(5, 'high', '', 0),
(6, 'high', '', 0),
(7, 'low', 'good one', 5000);

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
(2, 'manpreet kaur', 'manpreetkaur81993@gmail.com', 'headchef', 'italian cuisine expert', 4, 'master chef');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactno` bigint(10) NOT NULL,
  `dob` date NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `contactno`, `dob`, `username`, `password`, `address`) VALUES
(13, 'manpreet kaur', 'manpreetkaur81993@gmail.com', 4325874617, '2020-01-09', 'harj91@gmail.com', 'jdshfj', '5/32'),
(14, 'manpreet kaur', 'manpreetkaur81993@gmail.com', 4325874617, '2020-01-17', 'jc519711', 'jdshfj', '5/32'),
(15, 'manpreet kaur', 'manpreetkaur81993@gmail.com', 4325874617, '2020-01-04', 'harj91@gmail.com', 'jgbhn', '5/32'),
(16, 'shfksj', 'jkdshkj', 63278647, '2020-01-16', 'jfhsjv', 'snslfh', 'sljehlgjwr;gm'),
(17, 'shfksj', 'jkdshkj', 63278647, '2020-01-16', 'jfhsjv', 'm,nvjsf', 'sljehlgjwr;gm'),
(18, 'khk', 'sndbsj@jhj', 63278647, '2020-01-16', 'jfhsjv', 'jfbhkjsf', 'sljehlgjwr;gm'),
(19, 'khk', 'sndbsj@jhj', 63278647, '2020-01-16', 'jfhsjv', 'khghkj', 'sljehlgjwr;gm'),
(20, 'manpreet kaur', 'manpreetkaur81993@gmail.com', 4325874617, '2020-01-17', 'jc519711', 'qwerty', '5/32'),
(21, 'kjkjkj', 'harj91@gmail.com', 4325874617, '2020-01-01', 'jc519711', 'ghghghg', '2/65\r\nBELLEVUE TERRACE'),
(22, 'kjkjkj', 'harj91@gmail.com', 4325874617, '2020-01-01', 'jc519711', 'kkjh', '2/65\r\nBELLEVUE TERRACE'),
(23, 'kjkjkj', 'harj91@gmail.com', 4325874617, '2020-01-01', 'jc519711', 'jhkjh', '2/65\r\nBELLEVUE TERRACE'),
(33, 'khushi', 'khushi@gmail.com', 432099742, '2020-01-17', 'khushi', 'khushi', 'e.g Level 15 100 Miller St, North Sydney, NSW, 2060'),
(34, 'kesha', 'kesha@gmail.com', 432099742, '2020-01-17', 'kesha@gmail.com', '3f363cbc1e74c3ff27c8cd2b8911ff2e', 'e.g Level 15 100 Miller St, North Sydney, NSW, 2060'),
(35, 'kaur', 'kaur@gmail.com', 9876543456, '2020-01-10', 'kaurman', '81a7b0619dde6aa8963033d7e34f3afb', 'APARTMENT 2, 1310 HOMESTEAD ROAD'),
(36, 'kesh', 'kesh@gmail.com', 2564584518, '2020-01-23', 'kesh', 'dbc66f8e35149ba7b73cb752ee7ac975', 'Postmaster, Post Office\r\nKURUKSHETRA UNIversity'),
(37, 'abdul', 'abdul@gmail.com', 1323456744, '2020-01-29', 'abdul', '82027888c5bb8fc395411cb6804a066c', '3098 16 highway east'),
(38, 'sabreen', 'sabreenkaur95@gmail.com', 432099742, '2020-01-23', 'saby', '3b965e813f9ce59bf252c2915e6123f4', 'e.g Level 15 100 Miller St, North Sydney, NSW, 2060'),
(39, 'manpr', 'ugfhejf@hjbsh.com', 6578757834, '2020-02-13', '544bvhgh', '47bce5c74f589f4867dbd57e9ca9f808', '5/32'),
(40, 'sabby', 'sabby@gmail.com', 5671565487, '2020-02-14', 'sabby', '7815696ecbf1c96e6894b779456d330e', '13766 HOLLY AVE'),
(41, 'msghf', 'hskrjghrjks@hfousf', 4517841746, '2020-02-13', 'qwe', '7815696ecbf1c96e6894b779456d330e', 'APARTMENT 2, 1310 HOMESTEAD ROAD'),
(42, 'mani', 'mani@gmail.com', 432099742, '2020-02-13', 'mani', '07cd55c7b42715ec44c133a6a165e8d2', 'e.g Level 15 100 Miller St, North Sydney, NSW, 2060');

-- --------------------------------------------------------

--
-- Table structure for table `water_connection`
--

CREATE TABLE `water_connection` (
  `id` int(30) NOT NULL,
  `water_connection_provider` varchar(50) NOT NULL,
  `water_connection_details` text NOT NULL,
  `water_price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `water_connection`
--

INSERT INTO `water_connection` (`id`, `water_connection_provider`, `water_connection_details`, `water_price`) VALUES
(1, 'GWSSB', 'liked it', 60000),
(2, 'GWSASB', 'good one', 60000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `electricity_connection`
--
ALTER TABLE `electricity_connection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gas_connection`
--
ALTER TABLE `gas_connection`
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
-- AUTO_INCREMENT for table `electricity_connection`
--
ALTER TABLE `electricity_connection`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gas_connection`
--
ALTER TABLE `gas_connection`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `water_connection`
--
ALTER TABLE `water_connection`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
