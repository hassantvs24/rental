-- MariaDB dump 10.19  Distrib 10.5.13-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: rental
-- ------------------------------------------------------
-- Server version	10.5.13-MariaDB-1:10.5.13+maria~focal

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('0fa0f5ab13a71f808f89a2524ea21aa7','2603:6081:8745:b272::1011',1638211651,'__ci_last_regenerate|i:1638211650;lo_code|s:4:\"L001\";lo_name|s:32:\"Bluebird Self Storage - Dufferin\";lo_address|s:59:\"Calgary, AB, T2C 4Y2<br/><strong>Tel: 403-724-0617</strong>\";'),('2ec28ffa991c5e2c6a0a8d084eb77c27','202.83.126.237',1637072502,'__ci_last_regenerate|i:1637072502;lo_code|s:4:\"L005\";lo_name|s:43:\"Bluebird Self Storage - Edmonton - Meridian\";lo_address|s:60:\"Edmonton, AB, T6P 1R5<br/><strong>Tel: 780-612-4206</strong>\";unit_id|s:5:\"37264\";type|s:4:\"rent\";date|s:10:\"2021-11-25\";'),('3d8a84c269fb7762e77cccd9b361b659','2600:1000:bf0c:2daa:867:308c:3fed:1c2a',1637100366,'__ci_last_regenerate|i:1637100366;lo_code|s:4:\"L001\";lo_name|s:32:\"Bluebird Self Storage - Dufferin\";lo_address|s:59:\"Calgary, AB, T2C 4Y2<br/><strong>Tel: 403-724-0617</strong>\";'),('40a5456db8493f4bab198d88e6667053','2603:6081:8745:b272::1011',1638202472,'__ci_last_regenerate|i:1638202469;lo_code|s:4:\"L001\";lo_name|s:32:\"Bluebird Self Storage - Dufferin\";lo_address|s:59:\"Calgary, AB, T2C 4Y2<br/><strong>Tel: 403-724-0617</strong>\";'),('467c4dbcf1a226925a1eb7be0a443f11','2603:6081:8745:b272::1011',1638300251,'__ci_last_regenerate|i:1638300251;lo_code|s:4:\"L001\";lo_name|s:32:\"Bluebird Self Storage - Dufferin\";lo_address|s:59:\"Calgary, AB, T2C 4Y2<br/><strong>Tel: 403-724-0617</strong>\";'),('540d039ddb0e19915f9f3b8faee78e55','202.83.126.236',1637066991,'__ci_last_regenerate|i:1637066991;lo_code|s:4:\"L001\";lo_name|s:32:\"Bluebird Self Storage - Dufferin\";lo_address|s:59:\"Calgary, AB, T2C 4Y2<br/><strong>Tel: 403-724-0617</strong>\";unit_id|s:4:\"7775\";type|s:7:\"reserve\";date|s:10:\"2021-11-19\";done|s:45:\"You have successfully booked your Reservation\";__ci_vars|a:1:{s:4:\"done\";s:3:\"new\";}'),('5944acf183f7bb30bd291a3784e2a85f','2603:6081:8745:b272::1011',1638298893,'__ci_last_regenerate|i:1638298893;lo_code|s:4:\"L001\";lo_name|s:32:\"Bluebird Self Storage - Dufferin\";lo_address|s:59:\"Calgary, AB, T2C 4Y2<br/><strong>Tel: 403-724-0617</strong>\";'),('7347210e4acc2194a0f83c37c2c186cb','37.111.198.25',1637071622,'__ci_last_regenerate|i:1637071622;lo_code|s:4:\"L004\";lo_name|s:37:\"Bluebird Self Storage - Truro Parkway\";lo_address|s:65:\"Truro Heights, NS, B6L 1N8<br/><strong>Tel: 902-896-1000</strong>\";unit_id|s:5:\"37264\";type|s:4:\"rent\";date|s:10:\"2021-11-25\";'),('8a633a7bc181fc228773672a1249af7f','2603:6081:8745:b272::1011',1638300102,'__ci_last_regenerate|i:1638300102;lo_code|s:4:\"L001\";lo_name|s:32:\"Bluebird Self Storage - Dufferin\";lo_address|s:59:\"Calgary, AB, T2C 4Y2<br/><strong>Tel: 403-724-0617</strong>\";unit_id|s:4:\"7775\";type|s:7:\"reserve\";date|s:10:\"2021-12-03\";'),('92ec445e98f1fb7ae218f3d96a991606','2603:6081:8240:c1f0:c50f:c606:e3e:5ae8',1637611846,'__ci_last_regenerate|i:1637611819;lo_code|s:4:\"L001\";lo_name|s:32:\"Bluebird Self Storage - Dufferin\";lo_address|s:59:\"Calgary, AB, T2C 4Y2<br/><strong>Tel: 403-724-0617</strong>\";unit_id|s:4:\"7775\";type|s:4:\"rent\";date|s:10:\"2021-12-01\";'),('a398cc667a0d9e5fb1a07a46305a85a6','2603:6081:8745:b272::100d',1637342170,'__ci_last_regenerate|i:1637341935;lo_code|s:4:\"L001\";lo_name|s:32:\"Bluebird Self Storage - Dufferin\";lo_address|s:59:\"Calgary, AB, T2C 4Y2<br/><strong>Tel: 403-724-0617</strong>\";unit_id|s:4:\"7775\";type|s:7:\"reserve\";date|s:10:\"2021-11-19\";'),('a649f1c21a65f93db510609de802280d','2600:1000:be06:14ec:7124:d1d1:e4c3:4858',1638309643,'__ci_last_regenerate|i:1638309643;lo_code|s:4:\"L001\";lo_name|s:32:\"Bluebird Self Storage - Dufferin\";lo_address|s:59:\"Calgary, AB, T2C 4Y2<br/><strong>Tel: 403-724-0617</strong>\";unit_id|s:4:\"7775\";type|s:4:\"rent\";date|s:10:\"2021-12-10\";'),('b8a2dea045e2ee7fb236685b2ebd4d33','2600:1000:be06:14ec:7124:d1d1:e4c3:4858',1638309779,'__ci_last_regenerate|i:1638309643;lo_code|s:4:\"L001\";lo_name|s:32:\"Bluebird Self Storage - Dufferin\";lo_address|s:59:\"Calgary, AB, T2C 4Y2<br/><strong>Tel: 403-724-0617</strong>\";unit_id|s:4:\"7775\";type|s:7:\"reserve\";date|s:10:\"2021-12-10\";'),('c13c2a70bd3f8b8432f944c2d4518c67','2600:1000:bf0c:2daa:480c:18d0:cbe0:e4eb',1637072327,'__ci_last_regenerate|i:1637072327;lo_code|s:4:\"L001\";lo_name|s:32:\"Bluebird Self Storage - Dufferin\";lo_address|s:59:\"Calgary, AB, T2C 4Y2<br/><strong>Tel: 403-724-0617</strong>\";unit_id|s:4:\"7775\";type|s:7:\"reserve\";date|s:10:\"2021-11-16\";'),('ca049bf1cab6b9becfe947336e505352','2600:1000:bf0c:2daa:480c:18d0:cbe0:e4eb',1637067193,'__ci_last_regenerate|i:1637067192;lo_code|s:4:\"L001\";lo_name|s:32:\"Bluebird Self Storage - Dufferin\";lo_address|s:59:\"Calgary, AB, T2C 4Y2<br/><strong>Tel: 403-724-0617</strong>\";'),('ea967a948c1c685229731a1146499de5','2603:6081:8745:b272::100e',1637072327,'__ci_last_regenerate|i:1637072327;lo_code|s:4:\"L001\";lo_name|s:32:\"Bluebird Self Storage - Dufferin\";lo_address|s:59:\"Calgary, AB, T2C 4Y2<br/><strong>Tel: 403-724-0617</strong>\";unit_id|s:4:\"7775\";type|s:7:\"reserve\";date|s:10:\"2021-11-16\";'),('f6071ac316f6469deb672d6d94dbcf03','202.83.126.236',1637065053,'__ci_last_regenerate|i:1637065053;lo_code|s:4:\"L001\";lo_name|s:32:\"Bluebird Self Storage - Dufferin\";lo_address|s:59:\"Calgary, AB, T2C 4Y2<br/><strong>Tel: 403-724-0617</strong>\";unit_id|s:4:\"7775\";type|s:7:\"reserve\";date|s:10:\"2021-11-18\";');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-01  5:41:59
