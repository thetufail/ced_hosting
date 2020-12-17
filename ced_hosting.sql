-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2020 at 04:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ced_hosting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(44) NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_date` datetime NOT NULL,
  `author_name` varchar(44) NOT NULL DEFAULT 'Anonymous',
  `caption_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_info`
--

CREATE TABLE `tbl_company_info` (
  `id` int(11) NOT NULL,
  `comp_name` varchar(55) NOT NULL,
  `comp_logo` varchar(1000) NOT NULL,
  `comp_contact` varchar(33) NOT NULL,
  `comp_email` varchar(33) NOT NULL,
  `comp_address` varchar(88) NOT NULL,
  `comp_city` varchar(44) NOT NULL,
  `comp_state` int(11) NOT NULL,
  `comp_pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_billing_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `promocode_applied_id` int(11) NOT NULL,
  `discount_amt` float NOT NULL,
  `total_amt_after_dis` float NOT NULL,
  `tax_amt` float NOT NULL,
  `final_invoice_amt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `prod_parent_id` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `html` longtext DEFAULT NULL,
  `prod_available` tinyint(1) NOT NULL,
  `prod_launch_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `prod_parent_id`, `prod_name`, `html`, `prod_available`, `prod_launch_date`) VALUES
(1, 0, 'Hosting', NULL, 1, '2020-12-09 14:34:49'),
(2, 1, 'Linux Hosting', 'linuxhosting.php', 1, '2020-12-10 12:29:46'),
(3, 1, 'Wordpress Hosting', 'wordpresshosting.php', 1, '2020-12-15 12:50:03'),
(4, 1, 'Windows Hosting', 'windowshosting.php', 0, '2020-12-10 12:50:42'),
(5, 1, 'CMS Hosting', 'cmshosting.php', 1, '2020-12-10 12:51:05'),
(6, 2, 'Standard', 'NA', 0, '2020-12-15 01:16:35'),
(7, 2, 'Advanced', 'NA', 1, '2020-12-15 01:17:49'),
(8, 2, 'Pro', 'NA', 1, '2020-12-15 01:18:36'),
(9, 2, 'Business', 'NA', 1, '2020-12-15 01:19:25'),
(10, 3, 'Business', 'NA', 1, '2020-12-15 01:20:24'),
(11, 4, 'Business', 'NA', 1, '2020-12-15 01:20:35'),
(12, 5, 'Business', 'NA', 1, '2020-12-15 01:20:42'),
(13, 3, 'Standard', 'NA', 1, '2020-12-15 01:26:26'),
(14, 3, 'Pro', 'NA', 1, '2020-12-15 01:27:24'),
(15, 3, 'Business', 'NA', 1, '2020-12-15 01:27:41'),
(16, 4, 'Standard', 'NA', 1, '2020-12-15 01:28:24'),
(17, 4, 'Advanced', 'NA', 1, '2020-12-15 01:28:40'),
(18, 4, 'Pro', 'NA', 1, '2020-12-15 01:28:50'),
(19, 5, 'Pro', 'NA', 1, '2020-12-15 01:29:00'),
(20, 5, 'Advanced', 'NA', 1, '2020-12-15 01:29:15'),
(21, 5, 'Pro', 'NA', 1, '2020-12-15 01:29:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_description`
--

CREATE TABLE `tbl_product_description` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`description`)),
  `mon_price` float NOT NULL,
  `annual_price` float NOT NULL,
  `sku` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_description`
--

INSERT INTO `tbl_product_description` (`id`, `prod_id`, `description`, `mon_price`, `annual_price`, `sku`) VALUES
(1, 6, '{\"web_space\":\"100\",\"bandwidth\":\"1000\",\"free_domain\":\"1\",\"langsupport\":\" PHP, MySQL\",\"mailbox\":\"1\"}', 19, 999, '#1'),
(2, 7, '{\"web_space\":\"200\",\"bandwidth\":\"2000\",\"free_domain\":\"2\",\"langsupport\":\" PHP, MySQL\",\"mailbox\":\"2\"}', 29, 1099, '#2'),
(3, 8, '{\"web_space\":\"300\",\"bandwidth\":\"3000\",\"free_domain\":\"5\",\"langsupport\":\"C++, C\",\"mailbox\":\"5\"}', 2939, 1199, '#3'),
(4, 9, '{\"web_space\":\"400\",\"bandwidth\":\"4000\",\"free_domain\":\"10\",\"langsupport\":\"C++, C, Java, Python, \",\"mailbox\":\"10\"}', 3999, 1299, '#4'),
(5, 10, '{\"web_space\":\"400\",\"bandwidth\":\"4000\",\"free_domain\":\"10\",\"langsupport\":\"C++, C, Java, Python, \",\"mailbox\":\"10\"}', 3999, 1299, '#4'),
(6, 11, '{\"web_space\":\"400\",\"bandwidth\":\"4000\",\"free_domain\":\"10\",\"langsupport\":\"C++, C, Java, Python, \",\"mailbox\":\"10\"}', 5999, 1299, '#4'),
(7, 12, '{\"web_space\":\"400\",\"bandwidth\":\"4000\",\"free_domain\":\"10\",\"langsupport\":\"C++, C, Java, Python, \",\"mailbox\":\"10\"}', 3999, 1299, '#4'),
(8, 13, '{\"web_space\":\"400\",\"bandwidth\":\"4000\",\"free_domain\":\"10\",\"langsupport\":\" PHP, MySQL, MongoDB\",\"mailbox\":\"10\"}', 49, 1299, '#4'),
(9, 14, '{\"web_space\":\"400\",\"bandwidth\":\"4000\",\"free_domain\":\"10\",\"langsupport\":\" PHP, MySQL, MongoDB\",\"mailbox\":\"10\"}', 49, 1299, '#4'),
(10, 15, '{\"web_space\":\"400\",\"bandwidth\":\"4000\",\"free_domain\":\"10\",\"langsupport\":\" PHP, MySQL, MongoDB\",\"mailbox\":\"10\"}', 49, 1299, '#4'),
(11, 16, '{\"web_space\":\"400\",\"bandwidth\":\"4000\",\"free_domain\":\"10\",\"langsupport\":\" PHP, MySQL, MongoDB\",\"mailbox\":\"10\"}', 49, 1299, '#4'),
(12, 17, '{\"web_space\":\"400\",\"bandwidth\":\"4000\",\"free_domain\":\"10\",\"langsupport\":\" PHP, MySQL, MongoDB\",\"mailbox\":\"10\"}', 49, 1299, '#4'),
(13, 18, '{\"web_space\":\"400\",\"bandwidth\":\"4000\",\"free_domain\":\"10\",\"langsupport\":\" PHP, MySQL, MongoDB\",\"mailbox\":\"10\"}', 49, 1299, '#4'),
(14, 19, '{\"web_space\":\"400\",\"bandwidth\":\"4000\",\"free_domain\":\"10\",\"langsupport\":\" PHP, MySQL, MongoDB\",\"mailbox\":\"10\"}', 49, 1299, '#4'),
(15, 20, '{\"web_space\":\"400\",\"bandwidth\":\"4000\",\"free_domain\":\"10\",\"langsupport\":\" PHP, MySQL, MongoDB\",\"mailbox\":\"10\"}', 49, 1299, '#4'),
(16, 21, '{\"web_space\":\"400\",\"bandwidth\":\"4000\",\"free_domain\":\"10\",\"langsupport\":\" PHP, MySQL, MongoDB\",\"mailbox\":\"10\"}', 49, 1299, '#4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promocode`
--

CREATE TABLE `tbl_promocode` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `value` varchar(22) NOT NULL,
  `max_discount` int(11) NOT NULL,
  `code` varchar(55) NOT NULL,
  `expiry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `activation_time` datetime NOT NULL,
  `tenure` char(1) NOT NULL,
  `expiry_time` datetime NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email_approved` tinyint(1) DEFAULT 0,
  `phone_approved` tinyint(1) DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `is_admin` tinyint(1) NOT NULL,
  `sign_up_date` datetime DEFAULT current_timestamp(),
  `password` varchar(100) NOT NULL,
  `security_question` varchar(100) DEFAULT NULL,
  `security_answer` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `name`, `mobile`, `email_approved`, `phone_approved`, `active`, `is_admin`, `sign_up_date`, `password`, `security_question`, `security_answer`) VALUES
(1, 'admin@hosting.com', 'Admin', '8956231346', 1, 1, 1, 1, '2020-12-08 13:26:30', '63157ec36ea28fc3c65ddcd4067e6b11', NULL, NULL),
(2, 'neverlikebefore01@gmail.com', 'Tufail', '8896259924', 0, 1, 1, 0, '2020-12-16 11:56:39', 'f5bb0c8de146c67b44babbf4e6584cc0', 'What was your childhood nickname?', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_billing_add`
--

CREATE TABLE `tbl_user_billing_add` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `billing_name` varchar(55) NOT NULL,
  `house_no` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `state` int(11) NOT NULL,
  `country` varchar(55) NOT NULL,
  `pincode` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_company_info`
--
ALTER TABLE `tbl_company_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_description`
--
ALTER TABLE `tbl_product_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_promocode`
--
ALTER TABLE `tbl_promocode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_user_billing_add`
--
ALTER TABLE `tbl_user_billing_add`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_company_info`
--
ALTER TABLE `tbl_company_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_product_description`
--
ALTER TABLE `tbl_product_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_promocode`
--
ALTER TABLE `tbl_promocode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user_billing_add`
--
ALTER TABLE `tbl_user_billing_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
