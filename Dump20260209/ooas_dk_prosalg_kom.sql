-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: ooas_dk
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `prosalg_kom`
--

DROP TABLE IF EXISTS `prosalg_kom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prosalg_kom` (
  `id` int NOT NULL AUTO_INCREMENT,
  `producent` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `varenr` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `varebe` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `snnr` text COLLATE utf8mb3_danish_ci NOT NULL,
  `antal` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `enhed` varchar(225) COLLATE utf8mb3_danish_ci NOT NULL,
  `leverandor` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `liste` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `rab1` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `kob` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `adv` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `rab2` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `salg` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `db` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `levtid` int NOT NULL,
  `levtid2` date NOT NULL,
  `id2` int NOT NULL,
  `id3` int NOT NULL,
  `flag` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `valuta` varchar(25) COLLATE utf8mb3_danish_ci NOT NULL,
  `datobestilt` datetime NOT NULL,
  `datolev` datetime NOT NULL,
  `modaf` varchar(11) COLLATE utf8mb3_danish_ci NOT NULL,
  `betaf` varchar(11) COLLATE utf8mb3_danish_ci NOT NULL,
  `antalkommet` int NOT NULL,
  `levid` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19609 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_danish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-02-09 14:48:50
