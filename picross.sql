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
INSERT INTO `grid` VALUES ('4,3;2,3;3,1,3;1,3;2,3;2,1,3;3,1,2;2,2;2,2;3','8;1,6;3,1,1;2;1;1,1;2;5;9;9','0011111111001011111111100010011100000000100000000010100000000000011000111110000011111111101111111110');
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
-- Table structure for table `scoreboard10b`
--

DROP TABLE IF EXISTS `scoreboard10b`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scoreboard10b` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `time` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scoreboard10b`
--

LOCK TABLES `scoreboard10b` WRITE;
/*!40000 ALTER TABLE `scoreboard10b` DISABLE KEYS */;
/*!40000 ALTER TABLE `scoreboard10b` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scoreboard15a`
--

DROP TABLE IF EXISTS `scoreboard15a`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scoreboard15a` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `time` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scoreboard15a`
--

LOCK TABLES `scoreboard15a` WRITE;
/*!40000 ALTER TABLE `scoreboard15a` DISABLE KEYS */;
/*!40000 ALTER TABLE `scoreboard15a` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scoreboard15b`
--

DROP TABLE IF EXISTS `scoreboard15b`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scoreboard15b` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `time` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scoreboard15b`
--

LOCK TABLES `scoreboard15b` WRITE;
/*!40000 ALTER TABLE `scoreboard15b` DISABLE KEYS */;
/*!40000 ALTER TABLE `scoreboard15b` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scoreboard15c`
--

DROP TABLE IF EXISTS `scoreboard15c`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scoreboard15c` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `time` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scoreboard15c`
--

LOCK TABLES `scoreboard15c` WRITE;
/*!40000 ALTER TABLE `scoreboard15c` DISABLE KEYS */;
/*!40000 ALTER TABLE `scoreboard15c` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scoreboard20a`
--

LOCK TABLES `scoreboard20a` WRITE;
/*!40000 ALTER TABLE `scoreboard20a` DISABLE KEYS */;
/*!40000 ALTER TABLE `scoreboard20a` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scoreboard20b`
--

DROP TABLE IF EXISTS `scoreboard20b`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scoreboard20b` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `time` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scoreboard20b`
--

LOCK TABLES `scoreboard20b` WRITE;
/*!40000 ALTER TABLE `scoreboard20b` DISABLE KEYS */;
/*!40000 ALTER TABLE `scoreboard20b` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scoreboard20c`
--

DROP TABLE IF EXISTS `scoreboard20c`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scoreboard20c` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `time` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scoreboard20c`
--

LOCK TABLES `scoreboard20c` WRITE;
/*!40000 ALTER TABLE `scoreboard20c` DISABLE KEYS */;
/*!40000 ALTER TABLE `scoreboard20c` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-28 17:58:55
