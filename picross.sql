-- MariaDB dump 10.17  Distrib 10.4.13-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: picross
-- ------------------------------------------------------
-- Server version	10.4.13-MariaDB

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
-- Table structure for table `grid`
--

DROP TABLE IF EXISTS `grid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grid` (
  `dimension` tinyint(4) NOT NULL,
  `legendL` text NOT NULL,
  `legendC` text NOT NULL,
  `solution` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grid`
--

LOCK TABLES `grid` WRITE;
/*!40000 ALTER TABLE `grid` DISABLE KEYS */;
INSERT INTO `grid` VALUES (10,'9;1,3,2;5,1,2;3,6;4,2;3,1,2;2,3,1;2,6;2,4,2;2,3\r','4,4;1,8;6,1;3,1,3;5,3;1,1,4;5,2;2,3,1,1;1,2,1,3;2,1,2\r','1111111110101110110011111010111110111111011110110011100101101101110001110111111011011110110110000111');
/*!40000 ALTER TABLE `grid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scoreboard10a`
--

DROP TABLE IF EXISTS `scoreboard10a`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scoreboard10a` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `temps` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scoreboard10a`
--

LOCK TABLES `scoreboard10a` WRITE;
/*!40000 ALTER TABLE `scoreboard10a` DISABLE KEYS */;
INSERT INTO `scoreboard10a` VALUES (3,'Xx_ProPicross_xX',60),(4,'CasualGamer',75),(5,'UncasualGamer',85),(6,'TheNonogramMaster',90),(7,'PuzzleEnjoyer02',105),(8,'PuzzleFan1998',120),(19,'Xx_D4rKRand0m_xX',334),(20,'Xx_D4rKRand0m_xX',153);
/*!40000 ALTER TABLE `scoreboard10a` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scoreboard15a`
--

DROP TABLE IF EXISTS `scoreboard15a`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scoreboard15a` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `temps` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scoreboard15a`
--

LOCK TABLES `scoreboard15a` WRITE;
/*!40000 ALTER TABLE `scoreboard15a` DISABLE KEYS */;
INSERT INTO `scoreboard15a` VALUES (1,'PicrossMaster',120),(2,'NoNoGrammer',160),(29,'Oats',774);
/*!40000 ALTER TABLE `scoreboard15a` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scoreboard5a`
--

DROP TABLE IF EXISTS `scoreboard5a`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scoreboard5a` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `temps` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scoreboard5a`
--

LOCK TABLES `scoreboard5a` WRITE;
/*!40000 ALTER TABLE `scoreboard5a` DISABLE KEYS */;
INSERT INTO `scoreboard5a` VALUES (3,'Xx_ProPicross_xX',3),(4,'CasualGamer',15),(5,'UncasualGamer',20),(6,'TheNonogramMaster',30),(7,'PuzzleEnjoyer02',55),(8,'PuzzleFan1998',100),(19,'Oetam',6);
/*!40000 ALTER TABLE `scoreboard5a` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-03 19:49:54
