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
  `legendC` text NOT NULL,
  `legendL` text NOT NULL,
  `solution` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grid`
--

LOCK TABLES `grid` WRITE;
/*!40000 ALTER TABLE `grid` DISABLE KEYS */;
INSERT INTO `grid` VALUES (15,'3,3;3;2,2;5;1,4;1,4,4;2,4,4;3,6,1,1;3,3,1,1;4,3,2,1;4,1,2;1,1,1,6;1,6,2;7,2;4,3,1\r','8;5;4,1;3,1;3;3,8;3,5,2;2,6,3;3,3;5,4;1,1,1,1,1;4,1;1,5,1;1,5,4;1,13\r','000001111111100000000111110000000000011110001000000000111001000000000000111111000011111111111001111100110110011111100111000001110000111000001111101111000100010101010000111100001000100111110001000101111100011110101111111111111');
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scoreboard10a`
--

LOCK TABLES `scoreboard10a` WRITE;
/*!40000 ALTER TABLE `scoreboard10a` DISABLE KEYS */;
INSERT INTO `scoreboard10a` VALUES (3,'Xx_ProPicross_xX',60),(4,'CasualGamer',75),(5,'UncasualGamer',85),(6,'TheNonogramMaster',90),(7,'PuzzleEnjoyer02',105),(8,'PuzzleFan1998',120);
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scoreboard15a`
--

LOCK TABLES `scoreboard15a` WRITE;
/*!40000 ALTER TABLE `scoreboard15a` DISABLE KEYS */;
INSERT INTO `scoreboard15a` VALUES (1,'PicrossMaster',120),(2,'NoNoGrammer',160);
/*!40000 ALTER TABLE `scoreboard15a` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scoreboard20a`
--

DROP TABLE IF EXISTS `scoreboard20a`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scoreboard20a` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `time` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scoreboard20a`
--

LOCK TABLES `scoreboard20a` WRITE;
/*!40000 ALTER TABLE `scoreboard20a` DISABLE KEYS */;
INSERT INTO `scoreboard20a` VALUES (1,'Xx_PiX_xX',180),(2,'ProGamer',230);
/*!40000 ALTER TABLE `scoreboard20a` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-31 16:32:50
