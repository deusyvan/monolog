CREATE DATABASE  IF NOT EXISTS `paginacao` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `paginacao`;
-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: paginacao
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB-0+deb9u1

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
-- Table structure for table `itens`
--

DROP TABLE IF EXISTS `itens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itens`
--

LOCK TABLES `itens` WRITE;
/*!40000 ALTER TABLE `itens` DISABLE KEYS */;
INSERT INTO `itens` VALUES (1,'Item1'),(2,'Item2'),(3,'Item3'),(4,'Item4'),(5,'Item5'),(6,'Item6'),(7,'Item7'),(8,'Item8'),(9,'Item9'),(10,'Item10'),(11,'Item11'),(12,'Item12'),(13,'Item13'),(14,'Item14'),(15,'Item15'),(16,'Item16'),(17,'Item17'),(18,'Item18'),(19,'Item19'),(20,'Item20'),(21,'Item21'),(22,'Item22'),(23,'Item23'),(24,'Item24'),(25,'Item25'),(26,'Item26'),(27,'Item27'),(28,'Item28'),(29,'Item29'),(30,'Item30'),(31,'Item31'),(32,'Item32'),(33,'Item33'),(34,'Item34'),(35,'Item35'),(36,'Item36'),(37,'Item37'),(38,'Item38'),(39,'Item39'),(40,'Item40'),(41,'Item41'),(42,'Item42'),(43,'Item43'),(44,'Item44'),(45,'Item45'),(46,'Item46'),(47,'Item47'),(48,'Item48'),(49,'Item49'),(50,'Item50'),(51,'Item51'),(52,'Item52'),(53,'Item53'),(54,'Item54');
/*!40000 ALTER TABLE `itens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dt_cadastro` datetime NOT NULL,
  `dt_habilitacao` varchar(45) DEFAULT NULL,
  `nome` varchar(150) NOT NULL,
  `apelido` varchar(45) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `rg` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel_fixo` varchar(15) DEFAULT NULL,
  `celular` varchar(15) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `status` varchar(45) NOT NULL DEFAULT 'SOLICITADO',
  `id_grupos` varchar(100) NOT NULL,
  `avatar` varchar(100) DEFAULT 'default_avatar.jpg',
  `mensagens` int(11) DEFAULT '0',
  `alertas` int(11) DEFAULT '0',
  `cpf_user_habilitador` varchar(11) DEFAULT NULL,
  `codigo_habilitacao` varchar(10) NOT NULL,
  `jogos_credito_mega` int(11) DEFAULT NULL COMMENT 'Valor da quantidade de apostas que o usuario pode executar',
  `total_pagamentos` decimal(10,2) NOT NULL COMMENT 'Soma acrescida de todos os pagamentos realizados pelo usuario',
  `ativo` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `celular_UNIQUE` (`celular`),
  UNIQUE KEY `codigo_habilitacao_UNIQUE` (`codigo_habilitacao`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'2019-03-23 15:13:40',NULL,'admin','','admin','','admin',NULL,'61999999999','21232f297a57a5a743894a0e4a801fc3','HABILITADO','1','65805585120.jpg',1,0,NULL,'adm',4,0.00,1),(2,'2019-03-23 15:13:40',NULL,'Deusyvan Ferreira da Silva','DFSWeb','65805585120','112726474-3 MEX-DF','deusyvan@gmail.com','6133889188','61985481931','21232f297a57a5a743894a0e4a801fc3','HABILITADO','1','default_avatar.jpg',0,0,NULL,'dfs',10,0.00,1);
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

-- Dump completed on 2019-06-10 16:32:15




/*consulta para relatorio**/
SELECT i.id AS codigo
	, i.data_criacao AS criacao
	, i.title AS item
    , u.nome AS nome_cliente
    , u.dt_cadastro AS data_cadastro_usuario
    , u.cpf AS identificacao
    , u.ativo AS status_ativo
FROM itens i INNER JOIN usuario u ON i.id_usuario = u.id
WHERE i.data_criacao BETWEEN '2005-01-01' AND '2010-06-10 23:59:59'
ORDER BY i.data_criacao ASC;

/*Inserção automatica com datas diferentes**/
UPDATE itens SET data_criacao = FROM_UNIXTIME(ROUND(RAND() * (1473292800 - 145428400)));
