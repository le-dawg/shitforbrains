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
-- Table structure for table `prosalg`
--

DROP TABLE IF EXISTS `prosalg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prosalg` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id2` int NOT NULL,
  `firma_navn` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `c5_firma_navn_id` int NOT NULL,
  `ans` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `navn` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `by` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `dato` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `v_ref` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `d_ref` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `Navn_lev` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `Adresse_lev` text COLLATE utf8mb3_danish_ci NOT NULL,
  `post_lev` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `land_lev` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `att_lev` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `tele_lev` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `revk` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `telefon` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `mobil` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `baaf` text COLLATE utf8mb3_danish_ci NOT NULL,
  `note` text COLLATE utf8mb3_danish_ci NOT NULL,
  `ASAP` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `land` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `post` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `dato2` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dato3` datetime NOT NULL,
  `dato4` datetime NOT NULL,
  `flag_dato` datetime NOT NULL,
  `status_kode` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `flag_kode` int NOT NULL DEFAULT '0',
  `forvente` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `datotilbud` datetime NOT NULL,
  `uni_firma_navn_id` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `EAN` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `CVR` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `FAKMAIL` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `by_lev` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=523906 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_danish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-02-09 14:48:52
