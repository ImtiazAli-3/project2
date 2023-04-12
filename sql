-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2020 at 02:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(1, 'BOSS MAN', 'admin@hotmail.com', 'admin', 'm-dev-info.jpg', 'England', ' ADMIN', '-----------', 'MAIN MAN');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_top` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_top`, `cat_image`) VALUES
(6, 'Men', 'no', ''),
(7, 'Women', 'no', ''),
(8, 'Unisex', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(1, 'Jizz Supreme', 'cummuncher', 'cummuncher', 'Democratic Republic of Congo', 'Kinhasa', 'nine nine nine', 'EN1 1JZ', '', '::1'),
(18, 'test', 'test', 'test', 'test', 'test', 'test', 'test', '', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` float NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(123, 18, 154.99, 1414446405, 1, 'N/A', '2020-02-14', 'pending'),
(124, 18, 124.99, 38924350, 1, 'N/A', '2020-02-14', 'pending'),
(125, 18, 24.95, 38924350, 1, 'S', '2020-02-14', 'pending'),
(126, 18, 39.99, 38924350, 1, 'N/A', '2020-02-14', 'pending'),
(127, 18, 67.99, 462463994, 1, 'N/A', '2020-02-14', 'pending'),
(128, 18, 39.98, 1544862354, 2, 'N/A', '2020-02-14', 'pending'),
(129, 18, 99.95, 480145524, 5, 'N/A', '2020-02-14', 'pending'),
(130, 18, 203.97, 480145524, 3, 'N/A', '2020-02-14', 'pending'),
(131, 18, 39.98, 480145524, 2, 'N/A', '2020-02-14', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_title` text NOT NULL,
  `manufacturer_top` text NOT NULL,
  `manufacturer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturer_id`, `manufacturer_title`, `manufacturer_top`, `manufacturer_image`) VALUES
(9, 'Attack on Titans', 'no', ''),
(10, 'Black Butler', 'no', ''),
(11, 'Black Clover', 'no', ''),
(12, 'Bleach', 'no', ''),
(13, 'Code Geass', 'no', ''),
(14, 'Dan Machi', 'no', ''),
(15, 'Darling in the Franxx', 'no', ''),
(16, 'Date A Live', 'no', ''),
(17, 'Deathnote', 'no', ''),
(18, 'Demon Slayer', 'no', ''),
(19, 'Dragonball', 'no', ''),
(21, 'Fairy Tail', 'no', ''),
(22, 'Fire Force', 'no', ''),
(23, 'Fullmetal Alchemist', 'no', ''),
(24, 'Gate', 'no', ''),
(25, 'Hataraku Maou-sama', 'no', ''),
(26, 'Highschool DxD', 'no', ''),
(27, 'Highschool of the Dead', 'no', ''),
(28, 'Hunter X Hunter', 'no', ''),
(29, 'KonoSuba', 'no', ''),
(30, 'Log Horizon', 'no', ''),
(31, 'Magi', 'no', ''),
(32, 'Mob Psycho 100', 'no', ''),
(33, 'My Hero Academia', 'no', ''),
(34, 'No Game No Life', 'no', ''),
(35, 'Noragami', 'no', ''),
(36, 'One Piece', 'no', ''),
(37, 'One Punch Man', 'no', ''),
(38, 'Re:Life', 'no', ''),
(39, 'Re:Zero', 'no', ''),
(40, 'Shokugeki no Souma', 'no', ''),
(41, 'Sword Art Online', 'no', ''),
(42, 'Terra Formars', 'no', ''),
(43, 'That Time I Got Reincarnated As A Slime', 'no', ''),
(44, 'The Asterisk War', 'no', ''),
(45, 'The Rising of the Shield Hero', 'no', ''),
(46, 'The Seven Deadly Sins', 'no', ''),
(47, 'Tokyo Ghoul', 'no', ''),
(48, 'Naruto', 'no', ''),
(49, 'Goblin Slayer', 'no', ''),
(50, 'Persona 5', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` float NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(72, 18, 1414446405, '11', 1, 'N/A', 'pending'),
(73, 18, 38924350, '4', 1, 'N/A', 'pending'),
(74, 18, 38924350, '13', 1, 'S', 'pending'),
(75, 18, 38924350, '25', 1, 'N/A', 'pending'),
(76, 18, 462463994, '5', 1, 'N/A', 'pending'),
(77, 18, 1544862354, '2', 2, 'N/A', 'pending'),
(78, 18, 480145524, '2', 5, 'N/A', 'pending'),
(79, 18, 480145524, '5', 3, 'N/A', 'pending'),
(80, 18, 480145524, '14', 2, 'N/A', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_title` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_img4` text NOT NULL,
  `product_price` float NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_status` enum('0','1') CHARACTER SET utf8mb4 NOT NULL COMMENT '0-active, 1-inactive '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `p_cat_title`, `cat_id`, `cat_title`, `manufacturer_id`, `manufacturer_title`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `product_price`, `product_keywords`, `product_desc`, `product_status`) VALUES
(1, 13, 'Accessories', 8, 'Unisex', 47, 'Tokyo Ghoul', '2020-02-04 17:59:43', 'Tokyo Ghoul Keyrings 3 Set', 'image12-4.jpg', 'image12-1.jpg', 'image12-3.jpg', 'image12-2.jpg', 7.99, 'set', '<p><strong>Set of 3 Kaneki Ken mask keyrings</strong></p>\r\n<p><strong>-Size:&nbsp;</strong>35mmx40mm</p>\r\n<p><strong>-Material</strong>: Metal</p>\r\n<p><strong>-Colors:</strong> Silver; Black; Bronze</p>\r\n<p>&nbsp;</p>\r\n<p><em>*Select Size N/A*</em></p>', '1'),
(2, 10, 'Figures', 8, 'Unisex', 11, 'Black Clover', '2020-02-04 17:59:44', 'Asta DXF Figure Ver. Demon', 'bc2.png', 'bc2-3.png', 'bc2-2.png', 'bc2-1.png', 19.99, 'Pre-order', '<p><strong>*Purchase now as preorder*</strong></p>\r\n<p><strong>-Size:&nbsp;</strong>Approx. 130mm/5.1in tall</p>\r\n<p><strong>-Material:</strong>&nbsp;ABS &amp; PVC, stand included</p>\r\n<p><strong>-Manufacturer:</strong>&nbsp;Banpresto</p>\r\n<p><strong>-UK Release Date:&nbsp;</strong>Approx.&nbsp;February 2020</p>\r\n<p>&nbsp;</p>\r\n<p><em>*SELECT SIZE N/A*</em></p>', '1'),
(3, 13, 'Accessories', 6, 'Men', 48, 'Naruto', '2020-02-04 17:59:47', 'Naruto Rings 4 Set', 'image8-1.jpg', 'image8.jpg', 'image8-3.jpg', 'image8-2.jpg', 5.99, 'Set', '', '1'),
(4, 10, 'Figures', 8, 'Unisex', 22, 'Fire Force', '2020-02-04 17:59:49', 'Shinra ARTFX J Figure', 'ff1.png', 'ff1-2.png', 'ff1-3.png', 'ff1-4.png', 124.99, 'Pre-order', '<p><strong>-Size:</strong> Approx. 210mm tall</p>\r\n<p><strong>-Material</strong><strong>:&nbsp;</strong>ABS &amp; PVC</p>\r\n<p><strong>-Manufacturer:</strong>&nbsp;Kotobukiya</p>\r\n<p><strong>-UK Release Date:</strong>&nbsp;February 2020</p>\r\n<p><em>*SELECT SIZE N/A*</em></p>', '1'),
(5, 10, 'Figures', 8, 'Unisex', 48, 'Naruto', '2020-02-04 17:59:49', 'Kakashi Relation Figuarts ZERO', 'n1.png', 'n1-1.png', 'n1-2.png', 'n1-3.png', 67.99, 'Set Part', '<p><strong>-Size:&nbsp;</strong>Approx. 16.93 in tall</p>\r\n<p><strong>-Material:</strong> ABS &amp; PVC</p>\r\n<p><strong>-Manufacturer:&nbsp;</strong>Tamashii Nations</p>', '1'),
(6, 10, 'Figures', 8, 'Unisex', 22, 'Fire Force', '2020-02-04 17:59:50', 'Tamaki ARTFX J Figure', 'ff2.png', 'ff2-1.png', 'ff2-2.png', 'ff2-3.png', 124.99, 'Pre-order', '<p><strong>-Size:&nbsp;</strong>Approx. 195mm tall (7.67 in)</p>\r\n<p><strong>-Material:</strong> ABS &amp; PVC</p>\r\n<p><strong>-Manufacturer:</strong>&nbsp;Kotobukiya</p>\r\n<p><strong>-UK Release Date:&nbsp;</strong>March 2020</p>\r\n<p>*<em>SELECT SIZE N/A*</em></p>', '1'),
(7, 10, 'Figures', 8, 'Unisex', 11, 'Black Clover', '2020-02-04 17:59:51', 'Asta DXF Figure Ver. Normal', 'bc1.png', 'bc1-3.png', 'bc1-2.png', 'bc1-1.png', 19.99, 'pre', '<p><strong>*Purchase now as preorder*</strong></p>\r\n<p><strong>-Size:&nbsp;</strong>Approx. 130mm/5.1in tall</p>\r\n<p><strong>-Material:</strong>&nbsp;ABS &amp; PVC, stand included</p>\r\n<p><strong>-Manufacturer:</strong>&nbsp;Banpresto</p>\r\n<p><strong>-UK Release Date:&nbsp;</strong>Approx.&nbsp;February 2020</p>\r\n<p>&nbsp;</p>\r\n<p><em>*SELECT SIZE N/A*</em></p>', '1'),
(8, 10, 'Figures', 8, 'Unisex', 15, 'Darling in the Franxx', '2020-02-04 17:59:51', 'Strelizia Robot Spirits Figure', 'df1.png', 'df1-2.png', 'df1-1.png', 'df1-3.png', 49.99, 'none', '<p>-<strong>Size:&nbsp;</strong>Approx. 6.3 in tall</p>\r\n<p>-<strong>Manufacturer:&nbsp;</strong>Tamashii Nations</p>', '1'),
(9, 10, 'Figures', 8, 'Unisex', 49, 'Goblin Slayer', '2020-02-04 17:59:52', 'Goblin Slayer Figma', 'gb1.png', 'gb1-1.png', 'gb1-2.png', 'gb1-3.png', 69.99, 'none', '<p><strong>-Size:</strong> Approx. 145mm tall (5.7 in)</p>\r\n<p><strong>-Material</strong><strong>:&nbsp;</strong>ABS &amp; PVC</p>\r\n<p><strong>-Manufacturer:&nbsp;</strong>Max Factory</p>\r\n<p><em>*SELECT SIZE N/A*</em></p>', '1'),
(10, 13, 'Accessories', 7, 'Women', 15, 'Darling in the Franxx', '2020-02-04 17:59:55', 'Darling in the Franxx Ring', 'image24-1.jpg', 'image24-2.jpg', 'image24-3.jpg', 'image24-4.jpg', 5.99, 'none', '<p><strong>-Material:</strong>&nbsp;925 Sterling Silver</p>\r\n<p><strong>-Size:&nbsp;</strong>Adjustable 53-58mm</p>\r\n<p>&nbsp;</p>', '1'),
(11, 10, 'Figures', 8, 'Unisex', 45, 'The Rising of the Shield Hero', '2020-02-04 17:59:56', 'Raphtalia Scale Figure', 'rs1.png', 'rs1-1.png', 'rs1-2.png', 'rs1-3.png', 154.99, 'Pre-order', '<p><strong>-Size:&nbsp;</strong>Approx. 235mm tall</p>\r\n<p><strong>-Material:&nbsp;</strong>ABS &amp; PVC, stand included</p>\r\n<p><strong>-Manufacturer:&nbsp;</strong>Kotobukiya</p>\r\n<p><strong>-UK Release Date:&nbsp;</strong>March 2020</p>', '1'),
(12, 13, 'Accessories', 8, 'Unisex', 9, 'Attack on Titans', '2020-02-04 17:59:57', 'Attack on Titan Keyrings Set', 'image5.jpg', 'image5-1.jpg', 'image5-2.jpg', 'image5-3.jpg', 16.99, 'none', '<p><strong>Set of 3 Scouting Legion Attack on Titans keyrings</strong></p>\r\n<p><strong>-Logo Size:&nbsp;</strong>Approx. 35mm x 25mm</p>\r\n<p><strong>-Material:&nbsp;</strong>Zinc Alloy</p>\r\n<p><strong>-Color:&nbsp;</strong>Sliver/Black; Sliver/Blue; Gold/Blue</p>', '1'),
(13, 16, 'Clothes', 6, 'Men', 36, 'One Piece', '2020-02-04 18:00:02', 'Surgeon Of Death Long Sleeve', 'op1.png', 'op1-1.png', 'op1-2.png', 'op1-3.png', 24.95, 'none', '<p><strong>-Material:</strong> 100% pre-shrunk soft spunn cotton</p>', '1'),
(14, 16, 'Clothes', 8, 'Unisex', 28, 'Hunter X Hunter', '2020-02-04 18:00:10', 'Bungee Gum T-shirt', 'hh1.png', 'hh1-1.png', 'hh1-2.png', 'hh1-3.png', 19.99, 'none', 'none', '1'),
(15, 19, 'Home', 8, 'Unisex', 17, 'Deathnote', '2020-02-04 18:00:11', 'Death Note Notebook L A5', 'dn1-2.png', 'dn1-1.png', 'dn1.png', 'dn1-3.png', 9.99, 'none', '<p>none</p>', '1'),
(16, 19, 'Home', 8, 'Unisex', 11, 'Black Clover', '2020-02-04 18:00:12', 'Black Clover Group Mug', 'bc3.png', 'bc3-1.png', 'bc3-2.png', 'bc3-3.png', 11.99, 'none', '<p><strong>-Size: </strong> Standard 320ml</p>\r\n<p><strong>-Packaging:&nbsp;</strong>Black Window-Box</p>\r\n<p>Dishwasher&nbsp;and Microwave safe</p>\r\n<p><em>*SELECT SIZE N/A*</em></p>', '1'),
(17, 19, 'Home', 8, 'Unisex', 11, 'Black Clover', '2020-02-04 18:00:13', 'Asta and Yuno Mug', 'bc4.png', 'bc4-1.png', 'bc4-2.png', 'bc4-3.png', 11.99, 'none', '<p><strong>-Size: </strong> Standard 320ml</p>\r\n<p><strong>-Packaging:&nbsp;</strong>Black Window-Box</p>\r\n<p>Dishwasher&nbsp;and Microwave safe</p>\r\n<p><em>*SELECT SIZE N/A*</em></p>', '1'),
(18, 19, 'Home', 8, 'Unisex', 17, 'Deathnote', '2020-02-04 18:00:14', 'Death Note - L Character Mug', 'dn2.png', 'dn2-1.png', 'dn2-2.png', 'dn2-3.png', 12.99, 'none', '<p><strong>-Size: </strong> King 460ml</p>\r\n<p><strong>-Packaging:&nbsp;</strong>PVC Box</p>\r\n<p>High Quality Printing Process</p>\r\n<p>Dishwasher&nbsp;and Microwave safe</p>\r\n<p><em>*SELECT SIZE N/A*</em></p>', '1'),
(19, 19, 'Home', 8, 'Unisex', 19, 'Dragonball', '2020-02-04 18:00:15', 'Goku & Shenron Mug', 'db1.png', 'db1-1.png', 'db1-2.png', 'db1-3.png', 9.99, 'none', '<p><strong>-Size: </strong> Standard 320ml</p>\r\n<p><strong>-Packaging:&nbsp;</strong>PVC Box</p>\r\n<p>High Quality Printing Process</p>\r\n<p>Dishwasher&nbsp;and Microwave safe</p>\r\n<p><em>*SELECT SIZE N/A*</em></p>', '1'),
(20, 19, 'Home', 8, 'Unisex', 19, 'Dragonball', '2020-02-04 18:00:18', 'Goku UI VS Jiren Mug', 'db2.png', 'db2-1.png', 'db2-2.png', 'db2-3.png', 11.99, 'none', '<p><strong>-Size: </strong> Standard 320ml</p>\r\n<p><strong>-Packaging:&nbsp;</strong>Black Window-Box</p>\r\n<p>High Quality Ceramic</p>\r\n<p>Dishwasher&nbsp;and Microwave safe</p>\r\n<p><em>*SELECT SIZE N/A*</em></p>', '1'),
(21, 19, 'Home', 8, 'Unisex', 33, 'My Hero Academia', '2020-02-04 18:00:17', 'My Hero Academia Versus Mug', 'mh1.png', 'mh1-1.png', 'mh1-2.png', 'mh1-3.png', 11.99, 'none', '<p><strong>-Size: </strong> Standard 320ml</p>\r\n<p><strong>-Packaging:&nbsp;</strong>Black Window-Box</p>\r\n<p>High Quality Ceramic</p>\r\n<p>Dishwasher&nbsp;and Microwave safe</p>\r\n<p><em>*SELECT SIZE N/A*</em></p>', '1'),
(22, 19, 'Home', 8, 'Unisex', 48, 'Naruto', '2020-02-04 18:00:20', 'Naruto Shippuden Group Mug', 'n2.png', 'n2-1.png', 'n2-2.png', 'n2-3.png', 11.99, 'none', '<p><strong>-Size: </strong> Standard 320ml</p>\r\n<p><strong>-Packaging:&nbsp;</strong>PVC Box</p>\r\n<p>Dishwasher&nbsp;and Microwave safe</p>\r\n<p><em>*SELECT SIZE N/A*</em></p>', '1'),
(23, 19, 'Home', 8, 'Unisex', 34, 'No Game No Life', '2020-02-04 18:00:22', 'No Game No Life Shiro Body Pillow', 'ng1.png', 'ng1-1.png', 'ng1-2.png', 'ng1-3.png', 39.99, 'none', '<p><strong>-Size: </strong> 14\" by 40\"</p>\r\n<p>&nbsp;</p>', '1'),
(24, 19, 'Home', 8, 'Unisex', 34, 'No Game No Life', '2020-02-04 18:00:23', 'No Game No Life Stephanie Body Pillow', 'ng2.png', 'ng2-1.png', 'ng2-2.png', 'ng2-3.png', 39.99, 'none', '<p><strong>-Size: </strong> 14\" by 40\"</p>\r\n<p>&nbsp;</p>', '1'),
(25, 19, 'Home', 8, 'Unisex', 33, 'My Hero Academia', '2020-02-04 18:00:24', 'My Hero Academia Bakugo Body Pillow', 'mh2.png', 'mh2-1.png', 'mh2-2.png', 'mh2-3.png', 39.99, 'none', '<p><strong>-Size: </strong> 14\" by 40\"</p>\r\n<p>&nbsp;</p>', '1'),
(26, 19, 'Home', 8, 'Unisex', 50, 'Persona 5', '2020-02-04 18:00:27', 'Persona 5 \'Protagonist\' Body Pillow', 'p5,1.png', 'p5,1-1.png', 'p5,1-2.png', 'p5,1-3.png', 39.99, 'none', '<p><strong>-Size: </strong> 14\" by 40\"</p>\r\n<p>&nbsp;</p>', '1'),
(27, 19, 'Home', 8, 'Unisex', 50, 'Persona 5', '2020-02-04 18:00:26', 'Persona 5 Ann Takamaki Body Pillow', 'p5.png', 'p5-1.png', 'p5-2.png', 'p5-3.png', 39.99, 'none', '<p><strong>-Size: </strong> 14\" by 40\"</p>\r\n<p>&nbsp;</p>', '1'),
(28, 17, 'Games', 8, 'Unisex', 19, 'Dragonball', '2020-02-04 18:00:26', 'DRAGON BALL FighterZ', 'p5.png', 'p5-1.png', 'p5-2.png', 'p5-3.png', 44.99, 'none', '<p><strong>Available on Steam:</strong> https://store.steampowered.com/app/678950/DRAGON_BALL_FighterZ/ </p>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_top` text NOT NULL,
  `p_cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_top`, `p_cat_image`) VALUES
(10, 'Figures', 'no', ''),
(13, 'Accessories', 'no', ''),
(15, 'Other', 'no', ''),
(16, 'Clothes', 'no', ''),
(17, 'Games', 'no', ''),
(18, ' Manga ', 'no', ''),
(19, 'Home', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `slide_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`, `slide_url`) VALUES
(33, 'Slide 1', 'slide1-2.png', '../terms.php'),
(34, 'Slide 3', 'slide3-2.png', '../filter/indexgam.php'),
(35, 'Slide 2', 'slide2-2.png', '../filter/indexman.php'),
(37, 'Slide 4', 'slide4-3.png', '../filter/indexfig.php');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL,
  `term_title` varchar(100) NOT NULL,
  `term_link` varchar(100) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_id`, `term_title`, `term_link`, `term_desc`) VALUES
(11, 'Delivery', 'link_1', '<p><strong>-Free delivery</strong> for orders over&nbsp;<strong>&pound;40</strong></p>\r\n<p><strong>-&pound;4.99</strong> for orders under &pound;40</p>\r\n<p><strong>Worldwide Shipping:</strong></p>\r\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; -Europe:&nbsp;</strong>&pound;20 per shipment</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>-Ireland:&nbsp;</strong>&pound;15 per shipment</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>-U.S:&nbsp;</strong>&pound;35 per shipment</p>\r\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; -Canada:&nbsp;</strong>&pound;35 per shipment</p>\r\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; -Rest of the world:&nbsp;</strong>&pound;40 per shipment</p>\r\n<p>-Please allow up to 1 month for overseas delivery</p>'),
(12, 'Returns, Refunds & Exchanges', 'link_2', '<p>-You may&nbsp;<strong>return&nbsp;</strong>most goods&nbsp;<strong>within 30 days</strong>&nbsp;of the delivery date for a&nbsp;<strong>full refund</strong>&nbsp;of the purchased price</p>\r\n<p>-The<strong>&nbsp;shipping cost</strong>&nbsp;will<strong>&nbsp;not be refunded</strong>&nbsp;unless you were given a wrong or damaged item</p>\r\n<p>-We&nbsp;<strong>do not</strong>&nbsp;accept returns for&nbsp;<strong>digital goods, mystery bundles or opened DVDs and Blu-rays</strong></p>\r\n<p>-Products&nbsp;<strong>must</strong>&nbsp;be returned in&nbsp;<strong>good condition</strong>&nbsp;in their&nbsp;<strong>original&nbsp;</strong>packaging</p>\r\n<p>-We&nbsp;<strong>do not accept exhanges.&nbsp;</strong>&nbsp;If you wish to exchange an item&nbsp;<strong>return&nbsp;</strong>it in&nbsp;<strong>good condition&nbsp;</strong>with its&nbsp;<strong>original packaging</strong>&nbsp;and&nbsp;<strong>purchase&nbsp;</strong><strong>it again.</strong></p>'),
(13, 'Preorders', 'link_3', '<p>-If you have&nbsp;<strong>purchased&nbsp;</strong>an item that is only available for&nbsp;<strong>preorder</strong>&nbsp;you will recieve your item with&nbsp;<strong>express delivery&nbsp;</strong>on the&nbsp;<strong>day of its release</strong></p>\r\n<p><strong>-</strong><strong>Preorder dates are not accurate.</strong>&nbsp;Items will be released subject to availabilty. Please note that depending on where you live the item may take more time to be released or to be shipped</p>\r\n<p>-Your card will be charged&nbsp;on the&nbsp;<strong>date of release</strong>. You can also cancel your order&nbsp;<strong>up to this date</strong>&nbsp;by contacting customer service</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2356246;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483649;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
