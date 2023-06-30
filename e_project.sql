-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 04:33 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Fardeen', 'fardeen@gmail.com', 'fardeen'),
(2, 'Shahab', 'shahab@gmail.com', 'shahab');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(233) NOT NULL,
  `cat_name` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(2, 'Gift Articles'),
(3, 'Greeting Cards'),
(4, 'Files And Folder'),
(5, 'Hand Bags'),
(6, 'Men\'s Wallets'),
(7, 'Beauty Products'),
(8, 'Stationary Items'),
(10, 'Art Supplies');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `cust_name` text NOT NULL,
  `cust_email` varchar(30) NOT NULL,
  `cust_contact` varchar(15) NOT NULL,
  `cust_pass` varchar(15) NOT NULL,
  `cust_address` varchar(255) NOT NULL,
  `cust_city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cust_name`, `cust_email`, `cust_contact`, `cust_pass`, `cust_address`, `cust_city`) VALUES
(1, 'fardeen', 'fardeen19sep@gmail.com', '92-3112027130', 'fardeen', '1/213 nazimabad block 2', 'Karachi'),
(4, 'fardeen', 'fardeen@gmail.com', '92-3112027131', 'fardeen', '', ''),
(5, 'umer', 'umer@gmail.com', '92-3112027190', 'umer', '', ''),
(6, 'xsf', 'new@gmail.com', '92-3112027450', 'dads', '', ''),
(7, 'asim', 'asim@gmail.com', '92-3112027139', 'asim', '1/154 liaquatabad no.3 karachi', 'Islamabad');

-- --------------------------------------------------------

--
-- Table structure for table `customers_feedback`
--

CREATE TABLE `customers_feedback` (
  `cust_id` int(11) NOT NULL,
  `cust_name` text NOT NULL,
  `cust_email` varchar(30) NOT NULL,
  `cust_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers_feedback`
--

INSERT INTO `customers_feedback` (`cust_id`, `cust_name`, `cust_email`, `cust_message`) VALUES
(1, 'fardeen', 'fardeen@gmail.com', 'hi'),
(2, 'umer', 'umer@gmail.com', 'hi'),
(3, 'new', 'new@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i'),
(4, 'admin', 'admin@gamil.com', 'jhdkffsafsda');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(233) NOT NULL,
  `reciept_id` varchar(233) NOT NULL,
  `user_id` int(233) NOT NULL,
  `prod_id` int(255) NOT NULL,
  `total_quan` int(233) NOT NULL,
  `total_amount` int(233) NOT NULL,
  `order_date` varchar(233) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `order_status` int(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `reciept_id`, `user_id`, `prod_id`, `total_quan`, `total_amount`, `order_date`, `payment_type`, `order_status`) VALUES
(1, '1668097682-213', 1, 3, 1, 145, '0', 2, 1),
(2, '1668097769-213', 1, 3, 1, 145, 'Thursday 10th of November 2022 05:29:29 PM', 2, 1),
(4, '1668097932-213', 1, 3, 1, 145, 'Thursday 10th of November 2022 05:32:12 PM', 2, 1),
(5, '1668173357-21', 1, 1, 1, 75, 'Friday 11th of November 2022 02:29:17 PM', 2, 1),
(6, '1668173357-212', 1, 2, 1, 75, 'Friday 11th of November 2022 02:29:17 PM', 2, 1),
(7, '1668173537-212', 1, 1, 1, 75, 'Friday 11th of November 2022 02:32:17 PM', 2, 1),
(8, '1668173537-212', 1, 2, 1, 75, 'Friday 11th of November 2022 02:32:17 PM', 2, 1),
(9, '1668173914-112', 1, 1, 1, 75, 'Friday 11th of November 2022 02:38:34 PM', 1, 1),
(10, '1668173914-112', 1, 2, 1, 75, 'Friday 11th of November 2022 02:38:34 PM', 1, 1),
(11, '1668173983-112', 1, 1, 1, 75, 'Friday 11th of November 2022 02:39:43 PM', 1, 3),
(12, '1668173983-112', 1, 2, 1, 75, 'Friday 11th of November 2022 02:39:43 PM', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `order_status_id` int(233) NOT NULL,
  `order_status_name` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`order_status_id`, `order_status_name`) VALUES
(1, 'Placed'),
(2, 'Confirmed'),
(3, 'Shipped');

-- --------------------------------------------------------

--
-- Table structure for table `payment_type`
--

CREATE TABLE `payment_type` (
  `pay_id` int(233) NOT NULL,
  `pay_type` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_type`
--

INSERT INTO `payment_type` (`pay_id`, `pay_type`) VALUES
(1, 'Cash On Delivery'),
(2, 'Debit / Credit Card');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(233) NOT NULL,
  `pro_name` varchar(233) NOT NULL,
  `pro_desc` varchar(233) NOT NULL,
  `pro_price` int(233) NOT NULL,
  `pro_qty` int(255) NOT NULL,
  `pro_image` varchar(233) NOT NULL,
  `pro_cat` int(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_desc`, `pro_price`, `pro_qty`, `pro_image`, `pro_cat`) VALUES
(1, 'DELI 2B NEON PENCIL', 'High Quality Wood Pencil Intense Blackness Graphite, Hexagonal Shape with Eraser', 25, 50, 'assets/img/13689Deli-HB-Neon-Pencil-With-Eraser-deli-p1j_400x.jpg', 8),
(2, 'LYRA DUST FREE ERASER', 'Small or Large. Whatever the size of your mistake, erase it without trace thanks to Lyra Dust Free vinyl erasers.', 50, 20, 'assets/img/42622LyraEraser_5000x.jpg', 8),
(3, 'DELI HIGHLIGHTERS', 'High Quality Watercolor Highlighters 1.5mm Non-toxic Ink ', 120, 20, 'assets/img/10728Deli-Highlighters-deli-v1l_400x.jpg', 8),
(4, 'GRADIENT - GEL PEN', 'High Quality Gradient Gel Pen Ink Blue', 145, 50, 'assets/img/11125IMG-20200726-WA0053_400x.jpg', 8),
(5, 'TRENDY FASHION - FOUNTAIN INK PEN', 'High Quality Trendy Fashion - Fountain Ink Pen', 120, 30, 'assets/img/61356WhatsAppImage2022-07-02at2.23.43PM_400x.jpg', 8),
(6, 'DELI THINK DRY ERASE - MARKER', 'High Quality Deli Dry Erase Marker  Writing Point Marker : 2.0 mm', 125, 40, 'assets/img/50714Deli-Think-Dry-Erase-Marker-deli-a1s_400x.jpg', 8),
(7, 'newpr', 'fxdgxd', 23, 45, 'assets/img/36773download.jpg', 2),
(8, 'BASIC PINK - GIFT BAG / HAND BAG', 'High Quality Gift Bag / Hand Bag Material :  Available In 3 s  Small   : 8.2  inch x 5.1 inch Medium : 11.1  inch x 6.7 inch Large : 14.3 inch x 8.4 inch', 195, 30, 'assets/img/40176WhatsAppImage.jpg', 2),
(9, 'DESIGNER MIX SHADES GIFT BAG', 'Spice up your gift packaging with these super turdy & trendy gift bags! Because, packaging matters.', 75, 10, 'assets/img/43757designer bag.jpg', 2),
(10, 'TRIANGLE GOLD FOIL STYLE 2 - GIFT BAG', 'High Quality Thick Card Bags. Absolute Fine High Quality Print. Specifications: Gift Bag / Shopping Bag  High Quality Gift Bag  Available In 2 s  Medium : 9.5 x 7.1 Inch Large : 12.9 x 10.2 Inch', 135, 15, 'assets/img/71289TRIANGLE GOLD FOIL STYLE 2 - GIFT BAG.jpg', 2),
(11, 'BIRTHDAY STYLE 3 - GIFT BAG', 'High Quality Thick Card Bags. Absolute Fine High Quality Print. TBS Exclusive Collection. Available In 4 s  Small : 5.7 x 5.9 inch  Medium : 9.1 x 7.2 inch  Large : 13.0 x 10.3 inch  Extra Large :  17.5 x 12.5 inch ', 165, 15, 'assets/img/63711BIRTHDAY STYLE 3 - GIFT BAG.jpg', 2),
(12, 'BEST DAY EVER - GREETING CARD', 'Envelope + Card  : 13 cm x 9 cm Gold Foil Card', 135, 25, 'assets/img/17637BEST DAY EVER - GREETING CARD.jpg', 3),
(13, 'BEST WISHES (FLORAL) - GIFT CARD', 'Gift Card : 6.5 cm x 9.4 cm', 10, 40, 'assets/img/8001BEST WISHES (FLORAL) - GIFT CARD.jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_feedback`
--
ALTER TABLE `customers_feedback`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `orders_ibfk_2` (`order_status`),
  ADD KEY `payment_type` (`payment_type`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`order_status_id`);

--
-- Indexes for table `payment_type`
--
ALTER TABLE `payment_type`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `FK_cat_pro` (`pro_cat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers_feedback`
--
ALTER TABLE `customers_feedback`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `order_status_id` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_type`
--
ALTER TABLE `payment_type`
  MODIFY `pay_id` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`order_status`) REFERENCES `order_status` (`order_status_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`payment_type`) REFERENCES `payment_type` (`pay_id`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`prod_id`) REFERENCES `products` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_cat_pro` FOREIGN KEY (`pro_cat`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
