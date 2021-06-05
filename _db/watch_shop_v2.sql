-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: watch_shop
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'empty',
  `password` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (3,'pablo@dffdv.com','kksmdfksdklfmlksmdf'),(4,'1','1'),(5,'q','q'),(6,'root','root');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `band`
--

DROP TABLE IF EXISTS `band`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `band` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `band` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'empty',
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `band`
--

LOCK TABLES `band` WRITE;
/*!40000 ALTER TABLE `band` DISABLE KEYS */;
INSERT INTO `band` VALUES (2,'resina'),(3,'metal'),(4,'silicona'),(5,'nylon'),(6,'cuero');
/*!40000 ALTER TABLE `band` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brand` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'empty',
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand`
--

LOCK TABLES `brand` WRITE;
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
INSERT INTO `brand` VALUES (2,'casio'),(5,'rolex'),(6,'seiko'),(9,'hublot'),(11,'QQ');
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `case`
--

DROP TABLE IF EXISTS `case`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `case` (
  `_id` int(10) NOT NULL AUTO_INCREMENT,
  `case` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `case`
--

LOCK TABLES `case` WRITE;
/*!40000 ALTER TABLE `case` DISABLE KEYS */;
INSERT INTO `case` VALUES (1,'cuadrado'),(2,'redondo');
/*!40000 ALTER TABLE `case` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `color`
--

DROP TABLE IF EXISTS `color`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `color` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `color` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'emty',
  `code` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'red',
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `color`
--

LOCK TABLES `color` WRITE;
/*!40000 ALTER TABLE `color` DISABLE KEYS */;
INSERT INTO `color` VALUES (2,'negro','black'),(3,'dorado','#f7d100'),(4,'plateado','#808080'),(5,'azul','#6189fb'),(6,'marron','#c7905d'),(9,'rosa','#ffb2b2'),(10,'verde','#94d067'),(11,'rojo','#f36767');
/*!40000 ALTER TABLE `color` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `display_type`
--

DROP TABLE IF EXISTS `display_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `display_type` (
  `_id` int(10) NOT NULL AUTO_INCREMENT,
  `display_type` tinytext COLLATE utf8mb4_spanish_ci DEFAULT 'analógico',
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `display_type`
--

LOCK TABLES `display_type` WRITE;
/*!40000 ALTER TABLE `display_type` DISABLE KEYS */;
INSERT INTO `display_type` VALUES (1,'analógico'),(2,'digital'),(3,'analógico-digital');
/*!40000 ALTER TABLE `display_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'empty',
  `id_product` int(11) DEFAULT NULL,
  `alt` tinytext COLLATE utf8mb4_spanish_ci DEFAULT 'empty',
  `title` tinytext COLLATE utf8mb4_spanish_ci DEFAULT 'empty',
  `role` enum('product','index_cover','index_card','login') COLLATE utf8mb4_spanish_ci DEFAULT 'product',
  PRIMARY KEY (`_id`),
  KEY `images_FK` (`id_product`),
  CONSTRAINT `images_FK` FOREIGN KEY (`id_product`) REFERENCES `products` (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (72,'60b5198b7ec04.png',132,'empty','empty','product'),(73,'60b5198b7fa0e.png',132,'empty','empty','product'),(75,'60b51c7077ea6.png',133,'empty','empty','product'),(76,'60b51c707adca.png',133,'empty','empty','product'),(77,'60b51ddfdc9fc.png',134,'empty','empty','product'),(78,'60b51ddfdd415.png',134,'empty','empty','product'),(79,'60b51ddfdec1f.png',134,'empty','empty','product'),(80,'60b528256943c.png',132,'empty','empty','product'),(85,'pepe.png',NULL,'imagen para baño','asdasdasd','login'),(95,'60bba6508ac58.png',167,'empty','empty','product'),(96,'60bba6508c1ee.png',167,'empty','empty','product'),(97,'60bba6b1bff26.png',168,'empty','empty','product'),(98,'60bba6b1c0cb5.png',168,'empty','empty','product'),(99,'60bba74765ecb.png',169,'empty','empty','product'),(100,'60bba74766a1b.png',169,'empty','empty','product'),(101,'60bba7df4a739.png',170,'empty','empty','product'),(102,'60bba7df4b5e0.png',170,'empty','empty','product'),(103,'60bba81d93f4a.png',171,'empty','empty','product'),(104,'60bba81d967fb.png',171,'empty','empty','product'),(105,'60bbaada2a0af.png',172,'empty','empty','product'),(106,'60bbaada2beeb.png',172,'empty','empty','product'),(107,'60bbae4653207.png',173,'empty','empty','product'),(108,'60bbae465501b.png',173,'empty','empty','product'),(109,'60bbae46560f3.png',173,'empty','empty','product'),(110,'60bbae4656edd.png',173,'empty','empty','product'),(111,'60bbaea3478d0.png',174,'empty','empty','product'),(112,'60bbaef23978d.png',175,'empty','empty','product'),(113,'60bbaef23b0f8.png',175,'empty','empty','product'),(114,'60bbaef23eabf.png',175,'empty','empty','product'),(115,'60bbb06561e3f.png',176,'empty','empty','product'),(116,'60bbb06dcb0b4.png',177,'empty','empty','product'),(117,'60bbb0d65343a.png',178,'empty','empty','product'),(118,'60bbb0e05a671.png',179,'empty','empty','product'),(119,'60bbc235ca714.png',181,'empty','empty','product');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moment`
--

DROP TABLE IF EXISTS `moment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moment` (
  `_id` int(10) NOT NULL AUTO_INCREMENT,
  `moment` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'clasico',
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moment`
--

LOCK TABLES `moment` WRITE;
/*!40000 ALTER TABLE `moment` DISABLE KEYS */;
INSERT INTO `moment` VALUES (1,'clásico'),(2,'fashion'),(3,'deportivo'),(4,'smart');
/*!40000 ALTER TABLE `moment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_color`
--

DROP TABLE IF EXISTS `product_color`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_color` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `product_color_FK` (`id_product`),
  KEY `product_color_FK_1` (`id_color`),
  CONSTRAINT `product_color_FK` FOREIGN KEY (`id_product`) REFERENCES `products` (`_id`),
  CONSTRAINT `product_color_FK_1` FOREIGN KEY (`id_color`) REFERENCES `color` (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=511 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_color`
--

LOCK TABLES `product_color` WRITE;
/*!40000 ALTER TABLE `product_color` DISABLE KEYS */;
INSERT INTO `product_color` VALUES (375,132,5),(384,133,9),(388,134,3),(440,170,3),(442,171,9),(443,171,10),(446,172,3),(447,172,4),(449,173,6),(450,173,9),(451,173,10),(452,173,11),(454,174,5),(456,175,5),(457,167,5),(458,167,9),(459,168,5),(460,168,11),(461,169,5),(462,169,11),(470,176,3),(471,177,5),(472,177,9),(473,178,2),(474,178,4),(475,178,9),(508,179,2),(509,179,4),(510,181,3);
/*!40000 ALTER TABLE `product_color` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `_id` int(10) NOT NULL AUTO_INCREMENT,
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
  `sale` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=182 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (132,5615616,'QQ niño','2021-05-31 17:18:59','analógico','Reloj para niño varios tamaños y variedades, escribinos para saber mas detalles!',600,5,'resina','redondo','infantil','deportivo','QQ',1,1,200,1),(133,2343,'QQ mujer','2021-05-31 17:29:54','analógico','Reloj para mujer',1600,5,'silicona','redondo','mujer','fashion','QQ',1,0,120,1),(134,432432,'Seiko hombre','2021-05-31 19:21:28','digital','Seiko para hombre, metálico agregar mas datos a esta descripción',2500,4,'resina','cuadrado','hombre','clásico','seiko',0,0,250,0),(167,235132,'QQ ni&ntilde;o','2021-06-05 17:26:23','anal&oacute;gico','QQ para ni&ntilde;o o ni&ntilde;a elegante, contactanos para saber precios o consultarnos!',500,4,'resina','redondo','unisex','clásico','QQ',1,0,100,0),(168,52546,'QQ ni&ntilde;o','2021-06-05 17:10:35','anal&oacute;gico','asd',350,3,'resina','cuadrado','unisex','fashion','QQ',1,0,100,0),(169,454334,'QQ mujer','2021-06-05 17:10:39','anal&oacute;gico','agregar descripcion aqui',2500,10,'silicona','redondo','mujer','deportivo','QQ',1,1,150,1),(170,234234,'Casio mujer','2021-06-05 17:26:50','anal&oacute;gico','asdasdasd',3000,3,'nylon','cuadrado','mujer','clásico','casio',0,0,50,0),(171,234324,'QQ mujer','2021-06-05 16:37:38','anal&oacute;gico','asdasd',1500,3,'resina','redondo','mujer','deportivo','QQ',1,0,60,0),(172,3453,'Hublot mujer','2021-06-05 16:49:25','anal&oacute;gico','werwer',4000,2,'metal','redondo','mujer','fashion','hublot',0,0,100,0),(173,6544545,'QQ hombre','2021-06-05 17:04:12','anal&oacute;gico','QWE',2500,5,'silicona','redondo','hombre','deportivo','casio',1,1,140,0),(174,561456,'Rolex hombre','2021-06-05 17:05:38','anal&oacute;gico-digital','asd',3000,1,'metal','redondo','hombre','smart','rolex',1,0,200,1),(175,23432,'Seiko hombre','2021-06-05 17:06:47','anal&oacute;gico','wed',3000,5,'silicona','redondo','hombre','fashion','seiko',1,1,90,1),(176,0,'_fake','2021-06-05 17:13:38','anal&oacute;gico','wedwed',0,0,'resina','cuadrado','mujer','smart','casio',0,0,0,0),(177,0,'_fake','2021-06-05 17:13:40','anal&oacute;gico','wedwed',0,0,'resina','cuadrado','mujer','smart','casio',0,0,0,0),(178,0,'_fake','2021-06-05 17:26:44','anal&oacute;gico','erf',0,0,'resina','cuadrado','mujer','clásico','casio',0,0,0,0),(179,0,'_fake','2021-06-05 18:26:20','analógico','erferf',0,0,'resina','cuadrado','infantil','clásico','casio',0,0,0,0),(181,0,'_fake','2021-06-05 18:28:05','analógico','asd',0,0,'resina','cuadrado','mujer','clásico','casio',0,0,0,0);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_type`
--

DROP TABLE IF EXISTS `user_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_type` (
  `_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_type` tinytext COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'unisex',
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_type`
--

LOCK TABLES `user_type` WRITE;
/*!40000 ALTER TABLE `user_type` DISABLE KEYS */;
INSERT INTO `user_type` VALUES (1,'mujer'),(2,'hombre'),(3,'unisex'),(4,'infantil');
/*!40000 ALTER TABLE `user_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'watch_shop'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-05 15:56:05
