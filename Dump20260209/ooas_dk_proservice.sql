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
-- Table structure for table `proservice`
--

DROP TABLE IF EXISTS `proservice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proservice` (
  `id` int NOT NULL AUTO_INCREMENT,
  `c5id` int NOT NULL,
  `uni_firma_navn_id` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `firma_navn` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `c5_firma_navn_id` int NOT NULL,
  `ans` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '50',
  `navn` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `adresse` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `by` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `dato` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `v_ref` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `d_ref` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `EAN` varchar(225) COLLATE utf8mb3_danish_ci NOT NULL,
  `CVR` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `FAKMAIL` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `Navn_lev` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL DEFAULT '-',
  `Adresse_lev` text COLLATE utf8mb3_danish_ci NOT NULL,
  `post_lev` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL DEFAULT '-',
  `by_lev` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL,
  `land_lev` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL DEFAULT '-',
  `att_lev` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL DEFAULT '-',
  `tele_lev` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL DEFAULT '-',
  `revk` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `telefon` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `mobil` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT ' ',
  `mail` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `baaf` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `baof` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `fabrikat` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `type` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL DEFAULT ' ',
  `maskine` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `sn_nr` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `med_emb` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `dok_retur` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `rapp_korrekt` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `label` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `pakket` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `pris_s` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `pris_b` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `pris_n` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `pris_k` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '  ',
  `pris_f` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `note` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `bafa` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `godkent` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `forsendelse` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `ic5` varchar(225) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT 'NEJ',
  `ASAP` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT 'NEJ',
  `ind_kode` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '-',
  `status_kode` int NOT NULL DEFAULT '0',
  `land` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '-',
  `post` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '-',
  `for_mod` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `salg_type` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `salg_kontagt` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `salg_lev` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ' ',
  `salg_kommet` varchar(24) COLLATE utf8mb3_danish_ci NOT NULL DEFAULT 'JA',
  `dato2` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dato3` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dato4` datetime NOT NULL,
  `datoafslu` datetime NOT NULL,
  `flag` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `dato_fl` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pic_flag` varchar(4) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT 'nej',
  `forvente` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL DEFAULT '-',
  `pic1` varchar(225) COLLATE utf8mb3_danish_ci NOT NULL,
  `pic2` varchar(225) COLLATE utf8mb3_danish_ci NOT NULL,
  `pic3` varchar(225) COLLATE utf8mb3_danish_ci NOT NULL,
  `pic4` varchar(225) COLLATE utf8mb3_danish_ci NOT NULL,
  `pic5` varchar(225) COLLATE utf8mb3_danish_ci NOT NULL,
  `tekstt` text COLLATE utf8mb3_danish_ci NOT NULL,
  `tekstk` text COLLATE utf8mb3_danish_ci NOT NULL,
  `fakbelob` varchar(255) COLLATE utf8mb3_danish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=210331 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_danish_ci;
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
