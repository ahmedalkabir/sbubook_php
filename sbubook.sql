-- MySQL dump 10.16  Distrib 10.1.25-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: sbubook
-- ------------------------------------------------------
-- Server version	10.1.25-MariaDB

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
-- Table structure for table `department_list`
--

DROP TABLE IF EXISTS `department_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department_list` (
  `id_department` int(11) NOT NULL AUTO_INCREMENT,
  `code_department` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name_department` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_department`),
  UNIQUE KEY `code_department` (`code_department`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department_list`
--

LOCK TABLES `department_list` WRITE;
/*!40000 ALTER TABLE `department_list` DISABLE KEYS */;
INSERT INTO `department_list` VALUES (1,'GS','General'),(2,'EE','Electornic');
/*!40000 ALTER TABLE `department_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ee200`
--

DROP TABLE IF EXISTS `ee200`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ee200` (
  `id_book` int(11) NOT NULL AUTO_INCREMENT,
  `name_book` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type_book` varchar(255) CHARACTER SET utf8 NOT NULL,
  `size_book` varchar(255) CHARACTER SET utf8 NOT NULL,
  `url_book` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_book`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ee200`
--

LOCK TABLES `ee200` WRITE;
/*!40000 ALTER TABLE `ee200` DISABLE KEYS */;
INSERT INTO `ee200` VALUES (1,'(Boylestad Introductory Circuit Analysis (11th Edition','Book','25MB','https://drive.google.com/file/d/0B9rEorKFNmGZZ2tQV1VpWVhWVDQ/view?usp=sharing');
/*!40000 ALTER TABLE `ee200` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ee_sbj`
--

DROP TABLE IF EXISTS `ee_sbj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ee_sbj` (
  `code_subject` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name_subject` varchar(255) CHARACTER SET utf8 NOT NULL,
  `units` int(3) NOT NULL,
  `prerequisites` varchar(255) CHARACTER SET utf8 NOT NULL,
  UNIQUE KEY `code_subject` (`code_subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ee_sbj`
--

LOCK TABLES `ee_sbj` WRITE;
/*!40000 ALTER TABLE `ee_sbj` DISABLE KEYS */;
/*!40000 ALTER TABLE `ee_sbj` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gs101`
--

DROP TABLE IF EXISTS `gs101`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gs101` (
  `id_book` int(11) NOT NULL AUTO_INCREMENT,
  `name_book` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type_book` varchar(255) CHARACTER SET utf8 NOT NULL,
  `size_book` varchar(255) CHARACTER SET utf8 NOT NULL,
  `url_book` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_book`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gs101`
--

LOCK TABLES `gs101` WRITE;
/*!40000 ALTER TABLE `gs101` DISABLE KEYS */;
/*!40000 ALTER TABLE `gs101` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gs102`
--

DROP TABLE IF EXISTS `gs102`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gs102` (
  `id_book` int(11) NOT NULL AUTO_INCREMENT,
  `name_book` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type_book` varchar(255) CHARACTER SET utf8 NOT NULL,
  `size_book` varchar(255) CHARACTER SET utf8 NOT NULL,
  `url_book` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_book`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gs102`
--

LOCK TABLES `gs102` WRITE;
/*!40000 ALTER TABLE `gs102` DISABLE KEYS */;
/*!40000 ALTER TABLE `gs102` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gs_sbj`
--

DROP TABLE IF EXISTS `gs_sbj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gs_sbj` (
  `code_subject` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name_subject` varchar(255) CHARACTER SET utf8 NOT NULL,
  `units` int(3) NOT NULL,
  `prerequisites` varchar(255) CHARACTER SET utf8 NOT NULL,
  UNIQUE KEY `code_subject` (`code_subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gs_sbj`
--

LOCK TABLES `gs_sbj` WRITE;
/*!40000 ALTER TABLE `gs_sbj` DISABLE KEYS */;
/*!40000 ALTER TABLE `gs_sbj` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `list_sbj`
--

DROP TABLE IF EXISTS `list_sbj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `list_sbj` (
  `code_subject` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name_subject` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `list_sbj`
--

LOCK TABLES `list_sbj` WRITE;
/*!40000 ALTER TABLE `list_sbj` DISABLE KEYS */;
INSERT INTO `list_sbj` VALUES ('GS101','╪▒┘è╪º╪╢╪⌐ 1');
/*!40000 ALTER TABLE `list_sbj` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(255) NOT NULL,
  `post_user` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_content` text NOT NULL,
  `post_comment_count` int(3) NOT NULL,
  `post_image` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(255) NOT NULL,
  `pass_user` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_data`
--

DROP TABLE IF EXISTS `user_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_data` (
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_data`
--

LOCK TABLES `user_data` WRITE;
/*!40000 ALTER TABLE `user_data` DISABLE KEYS */;
INSERT INTO `user_data` VALUES ('alkabir','9a23b6d49aa244b7b0db52949c0932c365ec8191');
/*!40000 ALTER TABLE `user_data` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-03  0:54:25
