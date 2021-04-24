-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2021 a las 01:01:47
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `watch_shop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `_id` int(11) NOT NULL,
  `name` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'empty',
  `mail` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'pepe@gmail.com'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `band`
--

CREATE TABLE `band` (
  `_id` int(11) NOT NULL,
  `band` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'empty'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `band`
--

INSERT INTO `band` (`_id`, `band`) VALUES
(2, 'resina'),
(3, 'metal'),
(4, 'silicona'),
(5, 'nylon'),
(6, 'cuero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brand`
--

CREATE TABLE `brand` (
  `_id` int(11) NOT NULL,
  `brand` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'empty'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `brand`
--

INSERT INTO `brand` (`_id`, `brand`) VALUES
(1, 'kaunas'),
(2, 'casio'),
(3, 'adidas'),
(4, 'lotus'),
(5, 'rolex'),
(6, 'seiko'),
(7, 'swatch'),
(8, 'tissot'),
(9, 'hublot'),
(10, 'cartier');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `_id` int(11) NOT NULL,
  `color` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'emty'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`_id`, `color`) VALUES
(1, 'beige'),
(2, 'negro'),
(3, 'dorado'),
(4, 'plateado'),
(5, 'azul'),
(6, 'marron'),
(7, 'oro'),
(8, 'marron');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `display_type`
--

CREATE TABLE `display_type` (
  `_id` int(10) NOT NULL,
  `display_type` tinytext COLLATE utf8mb4_spanish_ci DEFAULT 'analógico'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `display_type`
--

INSERT INTO `display_type` (`_id`, `display_type`) VALUES
(1, 'analógico'),
(2, 'digital'),
(3, 'analógico-digital');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
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
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`_id`, `url`, `id_product`, `alt`, `title`, `role`) VALUES
(3, 'watch-4.jpg', 4, 'empty', 'empty', 'product'),
(4, 'watch-1.jpg', 5, 'empty', 'empty', 'product'),
(5, 'watch-2.jpg', 6, 'empty', 'empty', 'product'),
(6, 'watch-3.jpg', 7, 'empty', 'empty', 'product'),
(7, 'watch-4.jpg', 9, 'empty', 'empty', 'product'),
(8, 'watch-3.jpg', 9, 'empty', 'empty', 'product');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moment`
--

CREATE TABLE `moment` (
  `_id` int(10) NOT NULL,
  `moment` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'clasico'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `moment`
--

INSERT INTO `moment` (`_id`, `moment`) VALUES
(1, 'clásico'),
(2, 'fashion'),
(3, 'deportivo'),
(4, 'smart');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
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
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`_id`, `model`, `title`, `last_modification`, `display_type`, `description`, `price`, `stock`, `band`, `case`, `color`, `user_type`, `moment`, `brand`, `submersible`, `shipping`, `weight`, `sale`) VALUES
(4, 2136598789, '_4-h', '2021-04-16 20:00:39', 'analógico-digital', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis mauris quis tempor eleifend. Donec nisl metus.', 10000, 200, 'nylon', 'cuadrado', 'negro', 'hombre', 'fashion', 'casio', 1, 0, 500, 0),
(5, 65464, '_5-m', '2021-04-23 11:37:58', 'analógico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis mauris quis tempor eleifend. Donec nisl metus.', 1000, 1, 'resina', 'redondo', 'beige', 'mujer', 'clásico', 'kaunas', 1, 1, 260, 1),
(6, 65464, '_6-m', '2021-04-23 11:37:58', 'analógico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis mauris quis tempor eleifend. Donec nisl metus.', 1200, 2, 'resina', 'redondo', 'beige', 'mujer', 'clásico', 'kaunas', 1, 1, 260, 1),
(7, 65464, '_7-m', '2021-04-23 11:38:04', 'analógico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis mauris quis tempor eleifend. Donec nisl metus.', 1300, 3, 'resina', 'redondo', 'beige', 'mujer', 'clásico', 'kaunas', 1, 1, 260, 1),
(9, 65464, '_9-m', '2021-04-23 11:38:04', 'analógico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis mauris quis tempor eleifend. Donec nisl metus.', 1300, 3, 'resina', 'redondo', 'beige', 'mujer', 'clásico', 'kaunas', 1, 1, 260, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_band`
--

CREATE TABLE `product_band` (
  `_id` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `id_band` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `product_band`
--

INSERT INTO `product_band` (`_id`, `id_product`, `id_band`) VALUES
(1, 4, 6),
(2, 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_type`
--

CREATE TABLE `user_type` (
  `_id` int(10) NOT NULL,
  `user_type` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'unisex'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `user_type`
--

INSERT INTO `user_type` (`_id`, `user_type`) VALUES
(1, 'mujer'),
(2, 'hombre'),
(3, 'unisex'),
(4, 'infantil');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`_id`);

--
-- Indices de la tabla `band`
--
ALTER TABLE `band`
  ADD PRIMARY KEY (`_id`);

--
-- Indices de la tabla `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`_id`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`_id`);

--
-- Indices de la tabla `display_type`
--
ALTER TABLE `display_type`
  ADD PRIMARY KEY (`_id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `images_FK` (`id_product`);

--
-- Indices de la tabla `moment`
--
ALTER TABLE `moment`
  ADD PRIMARY KEY (`_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`_id`);

--
-- Indices de la tabla `product_band`
--
ALTER TABLE `product_band`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `product_band_FK` (`id_product`),
  ADD KEY `product_band_FK_1` (`id_band`);

--
-- Indices de la tabla `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `band`
--
ALTER TABLE `band`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `brand`
--
ALTER TABLE `brand`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `display_type`
--
ALTER TABLE `display_type`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `moment`
--
ALTER TABLE `moment`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `product_band`
--
ALTER TABLE `product_band`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user_type`
--
ALTER TABLE `user_type`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_FK` FOREIGN KEY (`id_product`) REFERENCES `products` (`_id`);

--
-- Filtros para la tabla `product_band`
--
ALTER TABLE `product_band`
  ADD CONSTRAINT `product_band_FK` FOREIGN KEY (`id_product`) REFERENCES `products` (`_id`),
  ADD CONSTRAINT `product_band_FK_1` FOREIGN KEY (`id_band`) REFERENCES `band` (`_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
