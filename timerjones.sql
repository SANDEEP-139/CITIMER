-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 06:39 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timerjones`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `user_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `address` varchar(220) DEFAULT NULL,
  `qualification` varchar(222) DEFAULT NULL,
  `gender` varchar(222) DEFAULT NULL,
  `hoobies` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`user_id`, `name`, `email`, `contact`, `address`, `qualification`, `gender`, `hoobies`) VALUES
(1, 'puja software', 'sandeep139@gmail.com', '9996263333', 'hello sir', 'BCA', 'male', 'Car'),
(2, 'sandeep sinhjh', '139sandeepsingh@gmail.com', '9991199', 'lucknow', 'MCA', 'male', 'Bike'),
(3, 'sandeep', '139sandeepsingh@gmail.com', '9919693361', 'lucknow', 'MCA', 'female', 'Car'),
(4, 'sandeep Software developer', '139sandeepsingh@gmail.com', '9919693361', 'lucknow', 'Btec', 'male', 'Bike'),
(5, 'puja software', 'sandeep139@gmail.com', '9952332', 'lucknow', 'B.sc computer', 'male', 'Bike');

-- --------------------------------------------------------

--
-- Table structure for table `import`
--

CREATE TABLE `import` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `first_name` varchar(100) NOT NULL COMMENT 'First Name',
  `last_name` varchar(100) NOT NULL COMMENT 'Last Name',
  `email` varchar(255) NOT NULL COMMENT 'Email Address',
  `dob` varchar(20) NOT NULL COMMENT 'Date of Birth',
  `contact_no` varchar(50) NOT NULL COMMENT 'Contact No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

--
-- Dumping data for table `import`
--

INSERT INTO `import` (`id`, `first_name`, `last_name`, `email`, `dob`, `contact_no`) VALUES
(1, 'Team', 'test', 'info@test.com', '21-02-2011', '9000000001'),
(2, 'Admin', 'second', 'admin@test.com', '21-02-2011', '9000000002'),
(3, 'User', 'third', 'user@test.com', '21-02-2011', '9000000003'),
(4, 'Editor', 'fouth', 'editor@test.com', '21-02-2011', '9000000004'),
(5, 'Writer', 'fifth', 'writer@test.com', '21-02-2011', '9000000005'),
(6, 'Contact', 'sixth', 'contact@test.com', '21-02-2011', '9000000006'),
(7, 'Manager', 'seven', 'manager@test.com', '21-02-2011', '9000000007');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_num` bigint(20) NOT NULL,
  `card_cvc` int(5) NOT NULL,
  `card_exp_month` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `card_exp_year` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_price` float(10,2) NOT NULL,
  `item_price_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paid_amount` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paid_amount_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `h` int(50) NOT NULL,
  `m` int(50) NOT NULL,
  `s` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`id`, `date`, `h`, `m`, `s`) VALUES
(9, '2020-11-11', 4, 10, 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `import`
--
ALTER TABLE `import`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `import`
--
ALTER TABLE `import`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `timer`
--
ALTER TABLE `timer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
