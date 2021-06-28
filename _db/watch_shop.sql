-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2021 a las 20:14:58
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
(3, 'pablo', 'pablo'),
(4, '1', '1'),
(6, 'root', 'root'),
(7, 'admin', 'admin'),
(8, 'fernanda', 'fernanda'),
(9, 'fer', 'fer');

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
  `id_product` int(11) DEFAULT NULL,
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
(80, '60b528256943c.png', 132, 'empty', 'empty', 'product'),
(85, 'pepe.png', NULL, 'imagen para baño', 'asdasdasd', 'login'),
(95, '60bba6508ac58.png', 167, 'empty', 'empty', 'product'),
(96, '60bba6508c1ee.png', 167, 'empty', 'empty', 'product'),
(97, '60bba6b1bff26.png', 168, 'empty', 'empty', 'product'),
(98, '60bba6b1c0cb5.png', 168, 'empty', 'empty', 'product'),
(99, '60bba74765ecb.png', 169, 'empty', 'empty', 'product'),
(100, '60bba74766a1b.png', 169, 'empty', 'empty', 'product'),
(101, '60bba7df4a739.png', 170, 'empty', 'empty', 'product'),
(102, '60bba7df4b5e0.png', 170, 'empty', 'empty', 'product'),
(103, '60bba81d93f4a.png', 171, 'empty', 'empty', 'product'),
(104, '60bba81d967fb.png', 171, 'empty', 'empty', 'product'),
(105, '60bbaada2a0af.png', 172, 'empty', 'empty', 'product'),
(106, '60bbaada2beeb.png', 172, 'empty', 'empty', 'product'),
(107, '60bbae4653207.png', 173, 'empty', 'empty', 'product'),
(108, '60bbae465501b.png', 173, 'empty', 'empty', 'product'),
(109, '60bbae46560f3.png', 173, 'empty', 'empty', 'product'),
(110, '60bbae4656edd.png', 173, 'empty', 'empty', 'product'),
(111, '60bbaea3478d0.png', 174, 'empty', 'empty', 'product'),
(112, '60bbaef23978d.png', 175, 'empty', 'empty', 'product'),
(113, '60bbaef23b0f8.png', 175, 'empty', 'empty', 'product'),
(114, '60bbaef23eabf.png', 175, 'empty', 'empty', 'product'),
(115, '60bbb06561e3f.png', 176, 'empty', 'empty', 'product'),
(116, '60bbb06dcb0b4.png', 177, 'empty', 'empty', 'product'),
(117, '60bbb0d65343a.png', 178, 'empty', 'empty', 'product'),
(118, '60bbb0e05a671.png', 179, 'empty', 'empty', 'product'),
(119, '60bbc235ca714.png', 181, 'empty', 'empty', 'product');

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
(132, 5615616, 'QQ niño', '2021-06-10 13:24:39', 'analógico', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 600, 5, 'resina', 'redondo', 'infantil', 'deportivo', 'QQ', 1, 1, 200, 1),
(133, 2343, 'QQ mujer', '2021-06-10 13:24:39', 'analógico', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1600, 5, 'silicona', 'redondo', 'mujer', 'fashion', 'QQ', 1, 0, 120, 1),
(134, 432432, 'Seiko hombre', '2021-06-10 13:24:39', 'digital', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2500, 4, 'resina', 'cuadrado', 'hombre', 'clásico', 'seiko', 0, 0, 250, 0),
(167, 235132, 'QQ niño', '2021-06-10 13:24:39', 'analógico', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 500, 4, 'resina', 'redondo', 'unisex', 'clásico', 'QQ', 1, 0, 100, 0),
(168, 52546, 'QQ niño', '2021-06-10 13:24:40', 'analógico', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 350, 3, 'resina', 'cuadrado', 'unisex', 'fashion', 'QQ', 1, 0, 100, 0),
(169, 454334, 'QQ mujer', '2021-06-10 13:24:39', 'analógico', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2500, 10, 'silicona', 'redondo', 'mujer', 'deportivo', 'QQ', 1, 1, 150, 1),
(170, 234234, 'Casio mujer', '2021-06-10 13:24:39', 'analógico', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3000, 3, 'nylon', 'cuadrado', 'mujer', 'clásico', 'casio', 0, 0, 50, 0),
(171, 234324, 'QQ mujer', '2021-06-10 13:24:39', 'analógico', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1500, 3, 'resina', 'redondo', 'mujer', 'deportivo', 'QQ', 1, 0, 60, 0),
(172, 3453, 'Hublot mujer', '2021-06-10 13:24:40', 'analógico', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 4000, 2, 'metal', 'redondo', 'mujer', 'fashion', 'hublot', 0, 0, 100, 0),
(173, 6544545, 'QQ mujer', '2021-06-10 13:23:52', 'analógico', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2500, 5, 'silicona', 'redondo', 'mujer', 'deportivo', 'QQ', 1, 1, 140, 0),
(174, 561456, 'Rolex hombre', '2021-06-10 13:24:40', 'analógico', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3000, 1, 'metal', 'redondo', 'hombre', 'smart', 'rolex', 1, 0, 200, 1),
(175, 23432, 'Seiko hombre', '2021-06-10 13:24:39', 'analógico', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3000, 5, 'silicona', 'redondo', 'hombre', 'fashion', 'seiko', 1, 1, 90, 1),
(176, 11111, '_fake', '2021-06-10 13:27:39', 'analógico', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1000, 1, 'resina', 'cuadrado', 'mujer', 'smart', 'seiko', 0, 0, 200, 0),
(177, 11111, '_fake', '2021-06-10 13:27:39', 'analógico', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1000, 1, 'resina', 'cuadrado', 'mujer', 'smart', 'seiko', 0, 0, 200, 0),
(178, 11111, '_fake', '2021-06-10 13:27:40', 'analógico', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1000, 1, 'resina', 'cuadrado', 'mujer', 'clásico', 'seiko', 0, 0, 200, 0),
(179, 11111, '_fake', '2021-06-10 13:28:15', 'analógico', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1000, 1, 'resina', 'cuadrado', 'infantil', 'clásico', 'seiko', 0, 0, 200, 0),
(181, 11111, '_fake', '2021-06-10 13:28:15', 'analógico', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1000, 1, 'resina', 'cuadrado', 'mujer', 'clásico', 'seiko', 0, 0, 200, 0);

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
(615, 132, 5),
(616, 132, 9),
(617, 132, 11),
(618, 133, 10),
(619, 133, 11),
(620, 169, 5),
(621, 167, 5),
(622, 169, 11),
(623, 167, 9),
(626, 173, 6),
(627, 173, 9),
(628, 173, 10),
(629, 171, 9),
(630, 171, 10),
(631, 134, 3),
(632, 134, 4),
(633, 134, 9),
(634, 175, 2),
(635, 175, 9),
(636, 170, 2),
(637, 170, 10),
(639, 174, 2),
(640, 172, 3),
(641, 172, 4),
(643, 168, 5),
(644, 168, 11),
(653, 176, 2),
(654, 177, 2),
(657, 178, 2),
(660, 179, 9),
(661, 181, 9);

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
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT de la tabla `moment`
--
ALTER TABLE `moment`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT de la tabla `product_color`
--
ALTER TABLE `product_color`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=697;

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
