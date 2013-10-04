CREATE DATABASE  IF NOT EXISTS `dmbbi` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `dmbbi`;
-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: dmbbi
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.12.04.1

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
-- Table structure for table `banco`
--

DROP TABLE IF EXISTS `banco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_banco_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_banco_status_banco1_idx` (`status_banco_id`),
  KEY `fk_banco_cliente1_idx` (`cliente_id`),
  CONSTRAINT `fk_banco_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_banco_status_banco1` FOREIGN KEY (`status_banco_id`) REFERENCES `status_banco` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banco`
--

LOCK TABLES `banco` WRITE;
/*!40000 ALTER TABLE `banco` DISABLE KEYS */;
INSERT INTO `banco` VALUES (3,'bbi_alpha',1,22);
/*!40000 ALTER TABLE `banco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campo`
--

DROP TABLE IF EXISTS `campo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tamanho` int(11) DEFAULT NULL,
  `padrao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banco_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `campo_tipo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_campo_banco1_idx` (`banco_id`),
  KEY `fk_campo_cliente1_idx` (`cliente_id`),
  KEY `fk_campo_campo_tipo1_idx` (`campo_tipo_id`),
  CONSTRAINT `fk_campo_banco1` FOREIGN KEY (`banco_id`) REFERENCES `banco` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_campo_campo_tipo1` FOREIGN KEY (`campo_tipo_id`) REFERENCES `campo_tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_campo_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campo`
--

LOCK TABLES `campo` WRITE;
/*!40000 ALTER TABLE `campo` DISABLE KEYS */;
/*!40000 ALTER TABLE `campo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campo_tipo`
--

DROP TABLE IF EXISTS `campo_tipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campo_tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campo_tipo`
--

LOCK TABLES `campo_tipo` WRITE;
/*!40000 ALTER TABLE `campo_tipo` DISABLE KEYS */;
/*!40000 ALTER TABLE `campo_tipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuario_tableau` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `master_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cliente_master1_idx` (`master_id`),
  CONSTRAINT `fk_cliente_master1` FOREIGN KEY (`master_id`) REFERENCES `master` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (22,'Alpha Beta Zita','alpha','saulo','142536',3);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `csv`
--

DROP TABLE IF EXISTS `csv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `csv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `local` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tamanho` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cliente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_csv_cliente1_idx` (`cliente_id`),
  CONSTRAINT `fk_csv_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `csv`
--

LOCK TABLES `csv` WRITE;
/*!40000 ALTER TABLE `csv` DISABLE KEYS */;
/*!40000 ALTER TABLE `csv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descrição` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `csv_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_log_csv_idx` (`csv_id`),
  CONSTRAINT `fk_log_csv` FOREIGN KEY (`csv_id`) REFERENCES `csv` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `master`
--

DROP TABLE IF EXISTS `master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuario` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `master`
--

LOCK TABLES `master` WRITE;
/*!40000 ALTER TABLE `master` DISABLE KEYS */;
INSERT INTO `master` VALUES (3,'BBI','admina','pieigual3,1415',1),(6,'Outro','outro','123',1),(9,'almap','almap','123',1),(25,'daulo','123','142536',1),(26,'Zulo','zelo','123',1),(29,'Mais um','master','123',0);
/*!40000 ALTER TABLE `master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_banco`
--

DROP TABLE IF EXISTS `status_banco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status_banco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_banco`
--

LOCK TABLES `status_banco` WRITE;
/*!40000 ALTER TABLE `status_banco` DISABLE KEYS */;
INSERT INTO `status_banco` VALUES (1,'Ativo'),(2,'Inativo');
/*!40000 ALTER TABLE `status_banco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-04 18:06:17
