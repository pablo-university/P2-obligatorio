-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2021 at 10:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watch_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `_id` int(11) NOT NULL,
  `name` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'empty',
  `mail` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'pepe@gmail.com'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `band`
--

CREATE TABLE `band` (
  `_id` int(11) NOT NULL,
  `band` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'empty'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `band`
--

INSERT INTO `band` (`_id`, `band`) VALUES
(2, 'resina'),
(3, 'metal'),
(4, 'silicona'),
(5, 'nylon'),
(6, 'cuero');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `_id` int(11) NOT NULL,
  `brand` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'empty'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`_id`, `brand`) VALUES
(2, 'casio'),
(5, 'rolex'),
(6, 'seiko'),
(8, 'tissot'),
(9, 'hublot');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `_id` int(11) NOT NULL,
  `color` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'emty',
  `code` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'red'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`_id`, `color`, `code`) VALUES
(2, 'negro', 'black'),
(3, 'dorado', '#e5ce4d'),
(4, 'plateado', '#808080'),
(5, 'azul', '#3c4aba'),
(6, 'marron', '#a15e21'),
(9, 'rosa', '#e39d9d'),
(10, 'verde', '#72ba3c'),
(11, 'rojo', '#ba3c3c');

-- --------------------------------------------------------

--
-- Table structure for table `display_type`
--

CREATE TABLE `display_type` (
  `_id` int(10) NOT NULL,
  `display_type` tinytext COLLATE utf8mb4_spanish_ci DEFAULT 'analógico'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `display_type`
--

INSERT INTO `display_type` (`_id`, `display_type`) VALUES
(1, 'analógico'),
(2, 'digital'),
(3, 'analógico-digital');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `_id` int(11) NOT NULL,
  `url` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'empty',
  `id_product` int(11) NOT NULL,
  `alt` tinytext COLLATE utf8mb4_spanish_ci DEFAULT 'empty',
  `title` tinytext COLLATE utf8mb4_spanish_ci DEFAULT 'empty',
  `role` enum('product','index_cover','index_card','login') COLLATE utf8mb4_spanish_ci DEFAULT 'product'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`_id`, `url`, `id_product`, `alt`, `title`, `role`) VALUES
(3, '4v1.png', 4, 'empty', 'empty', 'product'),
(9, '4v2.png', 4, 'empty', 'empty', 'product'),
(10, '4v3.png', 4, 'empty', 'empty', 'product'),
(11, '5v1.png', 12, 'empty', 'empty', 'product'),
(12, '5v2.png', 12, 'empty', 'empty', 'product'),
(13, '6v1.png', 13, 'empty', 'empty', 'product'),
(14, '6v2.png', 13, 'empty', 'empty', 'product');

-- --------------------------------------------------------

--
-- Table structure for table `moment`
--

CREATE TABLE `moment` (
  `_id` int(10) NOT NULL,
  `moment` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'clasico'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `moment`
--

INSERT INTO `moment` (`_id`, `moment`) VALUES
(1, 'clásico'),
(2, 'fashion'),
(3, 'deportivo'),
(4, 'smart');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `_id` int(10) NOT NULL,
  `model` int(10) NOT NULL DEFAULT 0,
  `title` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'empty',
  `last_modification` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `display_type` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'analógico',
  `description` longtext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'empty',
  `price` smallint(4) NOT NULL DEFAULT 10,
  `stock` smallint(4) NOT NULL DEFAULT 0,
  `band` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'resina',
  `case` enum('redondo','cuadrado') COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'redondo',
  `color` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'bage',
  `user_type` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'mujer',
  `moment` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'clásico',
  `brand` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'kaunas',
  `submersible` tinyint(1) NOT NULL DEFAULT 0,
  `shipping` tinyint(1) NOT NULL DEFAULT 0,
  `weight` smallint(4) NOT NULL DEFAULT 0,
  `sale` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`_id`, `model`, `title`, `last_modification`, `display_type`, `description`, `price`, `stock`, `band`, `case`, `color`, `user_type`, `moment`, `brand`, `submersible`, `shipping`, `weight`, `sale`) VALUES
(4, 2136598789, '_4-m', '2021-05-07 20:34:05', 'analógico-digital', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis mauris quis tempor eleifend. Donec nisl metus.', 10000, 200, 'nylon', 'cuadrado', 'negro', 'mujer', 'fashion', 'casio', 1, 1, 500, 1),
(12, 452452, '_5-h', '2021-05-07 20:55:35', 'analógico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis mauris quis tempor eleifend. Donec nisl metus.', 10, 0, 'resina', 'redondo', 'bage', 'hombre', 'clásico', 'kaunas', 0, 1, 0, 1),
(13, 2343, '_6-i', '2021-05-07 20:55:35', 'analógico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis mauris quis tempor eleifend. Donec nisl metus.', 10, 0, 'resina', 'redondo', 'bage', 'infantil', 'clásico', 'kaunas', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `_id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_color` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_color`
--

INSERT INTO `product_color` (`_id`, `id_product`, `id_color`) VALUES
(1, 4, 2),
(2, 4, 5),
(7, 4, 6),
(8, 12, 2),
(9, 12, 9),
(10, 13, 5),
(11, 13, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `_id` int(10) NOT NULL,
  `user_type` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'unisex'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`_id`, `user_type`) VALUES
(1, 'mujer'),
(2, 'hombre'),
(3, 'unisex'),
(4, 'infantil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `band`
--
ALTER TABLE `band`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `display_type`
--
ALTER TABLE `display_type`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `images_FK` (`id_product`);

--
-- Indexes for table `moment`
--
ALTER TABLE `moment`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `product_color_FK` (`id_product`),
  ADD KEY `product_color_FK_1` (`id_color`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `band`
--
ALTER TABLE `band`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `display_type`
--
ALTER TABLE `display_type`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `moment`
--
ALTER TABLE `moment`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_color`
--
ALTER TABLE `product_color`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_FK` FOREIGN KEY (`id_product`) REFERENCES `products` (`_id`);

--
-- Constraints for table `product_color`
--
ALTER TABLE `product_color`
  ADD CONSTRAINT `product_color_FK` FOREIGN KEY (`id_product`) REFERENCES `products` (`_id`),
  ADD CONSTRAINT `product_color_FK_1` FOREIGN KEY (`id_color`) REFERENCES `color` (`_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
