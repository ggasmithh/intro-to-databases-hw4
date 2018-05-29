-- MySQL dump 10.16  Distrib 10.1.33-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: tv_apps
-- ------------------------------------------------------
-- Server version	10.1.33-MariaDB

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
-- Table structure for table `APPEARANCE`
--

DROP TABLE IF EXISTS `APPEARANCE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `APPEARANCE` (
  `Ssn` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL,
  `CodC` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Ssn`,`Date`,`StartTime`),
  KEY `CodC` (`CodC`),
  CONSTRAINT `APPEARANCE_ibfk_1` FOREIGN KEY (`Ssn`) REFERENCES `VIP` (`Ssn`),
  CONSTRAINT `APPEARANCE_ibfk_2` FOREIGN KEY (`CodC`) REFERENCES `TV_CHANNEL` (`CodC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `APPEARANCE`
--

LOCK TABLES `APPEARANCE` WRITE;
/*!40000 ALTER TABLE `APPEARANCE` DISABLE KEYS */;
/*!40000 ALTER TABLE `APPEARANCE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TV_CHANNEL`
--

DROP TABLE IF EXISTS `TV_CHANNEL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TV_CHANNEL` (
  `CodC` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Broadcaster` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Frequency` int(11) NOT NULL,
  PRIMARY KEY (`CodC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TV_CHANNEL`
--

LOCK TABLES `TV_CHANNEL` WRITE;
/*!40000 ALTER TABLE `TV_CHANNEL` DISABLE KEYS */;
INSERT INTO `TV_CHANNEL` VALUES ('C3','TestChannel','Broad Caster',125),('C35','Channel Test','Cas Tbroad',315);
/*!40000 ALTER TABLE `TV_CHANNEL` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `VIP`
--

DROP TABLE IF EXISTS `VIP`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `VIP` (
  `Ssn` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Employment` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Ssn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `VIP`
--

LOCK TABLES `VIP` WRITE;
/*!40000 ALTER TABLE `VIP` DISABLE KEYS */;
/*!40000 ALTER TABLE `VIP` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-29 18:02:42
