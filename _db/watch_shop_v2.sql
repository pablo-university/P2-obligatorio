-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2021 a las 00:05:11
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
  `user_name` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'empty',
  `password` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`_id`, `user_name`, `password`) VALUES
(3, 'pablo@dffdv.com', 'kksmdfksdklfmlksmdf'),
(4, '1', '1'),
(5, 'q', 'q'),
(6, 'root', 'root');

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
(2, 'casio'),
(5, 'rolex'),
(6, 'seiko'),
(9, 'hublot'),
(11, 'QQ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `case`
--

CREATE TABLE `case` (
  `_id` int(10) NOT NULL,
  `case` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `case`
--

INSERT INTO `case` (`_id`, `case`) VALUES
(1, 'cuadrado'),
(2, 'redondo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `_id` int(11) NOT NULL,
  `color` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'emty',
  `code` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'red'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`_id`, `color`, `code`) VALUES
(2, 'negro', 'black'),
(3, 'dorado', '#f7d100'),
(4, 'plateado', '#808080'),
(5, 'azul', '#6189fb'),
(6, 'marron', '#c7905d'),
(9, 'rosa', '#ffb2b2'),
(10, 'verde', '#94d067'),
(11, 'rojo', '#f36767');

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
(72, '60b5198b7ec04.png', 132, 'empty', 'empty', 'product'),
(73, '60b5198b7fa0e.png', 132, 'empty', 'empty', 'product'),
(75, '60b51c7077ea6.png', 133, 'empty', 'empty', 'product'),
(76, '60b51c707adca.png', 133, 'empty', 'empty', 'product'),
(77, '60b51ddfdc9fc.png', 134, 'empty', 'empty', 'product'),
(78, '60b51ddfdd415.png', 134, 'empty', 'empty', 'product'),
(79, '60b51ddfdec1f.png', 134, 'empty', 'empty', 'product'),
(80, '60b528256943c.png', 132, 'empty', 'empty', 'product');

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
  `case` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'redondo',
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

INSERT INTO `products` (`_id`, `model`, `title`, `last_modification`, `display_type`, `description`, `price`, `stock`, `band`, `case`, `user_type`, `moment`, `brand`, `submersible`, `shipping`, `weight`, `sale`) VALUES
(132, 5615616, 'QQ niño', '2021-05-31 17:18:59', 'analógico', 'Reloj para niño varios tamaños y variedades, escribinos para saber mas detalles!', 600, 5, 'resina', 'redondo', 'infantil', 'deportivo', 'QQ', 1, 1, 200, 1),
(133, 2343, 'QQ mujer', '2021-05-31 17:29:54', 'analógico', 'Reloj para mujer', 1600, 5, 'silicona', 'redondo', 'mujer', 'fashion', 'QQ', 1, 0, 120, 1),
(134, 432432, 'Seiko hombre', '2021-05-31 19:21:28', 'digital', 'Seiko para hombre, metálico agregar mas datos a esta descripción', 2500, 4, 'resina', 'cuadrado', 'hombre', 'clásico', 'seiko', 0, 0, 250, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_color`
--

CREATE TABLE `product_color` (
  `_id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_color` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product_color`
--

INSERT INTO `product_color` (`_id`, `id_product`, `id_color`) VALUES
(375, 132, 5),
(384, 133, 9),
(388, 134, 3);

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
-- Indices de la tabla `case`
--
ALTER TABLE `case`
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
-- Indices de la tabla `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `product_color_FK` (`id_product`),
  ADD KEY `product_color_FK_1` (`id_color`);

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
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `band`
--
ALTER TABLE `band`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `brand`
--
ALTER TABLE `brand`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `case`
--
ALTER TABLE `case`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `display_type`
--
ALTER TABLE `display_type`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `moment`
--
ALTER TABLE `moment`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT de la tabla `product_color`
--
ALTER TABLE `product_color`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=390;

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
-- Filtros para la tabla `product_color`
--
ALTER TABLE `product_color`
  ADD CONSTRAINT `product_color_FK` FOREIGN KEY (`id_product`) REFERENCES `products` (`_id`),
  ADD CONSTRAINT `product_color_FK_1` FOREIGN KEY (`id_color`) REFERENCES `color` (`_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
