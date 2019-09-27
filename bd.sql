-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: bict
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.04.1

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
-- Table structure for table `engenharias`
--

DROP TABLE IF EXISTS `engenharias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `engenharias` (
  `idEngenharia` int(11) NOT NULL AUTO_INCREMENT,
  `strnomeengenharia` varchar(255) NOT NULL,
  `descricao` varchar(555) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idEngenharia`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `engenharias`
--

LOCK TABLES `engenharias` WRITE;
/*!40000 ALTER TABLE `engenharias` DISABLE KEYS */;
INSERT INTO `engenharias` VALUES (1,'Engenharia da Computação',NULL,NULL,NULL),(2,'Engenharia Civil',NULL,NULL,NULL),(3,'Engenhraria Ambiental',NULL,NULL,NULL),(4,'Engenharia Mecânica',NULL,NULL,NULL),(5,'Engenharia Aeroespacial',NULL,NULL,NULL);
/*!40000 ALTER TABLE `engenharias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obrigatorias`
--

DROP TABLE IF EXISTS `obrigatorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `obrigatorias` (
  `idDiciplina` int(11) NOT NULL AUTO_INCREMENT,
  `strnomediciplina` varchar(255) NOT NULL,
  `horas` int(11) DEFAULT NULL,
  `descricao` varchar(555) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idDiciplina`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obrigatorias`
--

LOCK TABLES `obrigatorias` WRITE;
/*!40000 ALTER TABLE `obrigatorias` DISABLE KEYS */;
INSERT INTO `obrigatorias` VALUES (1,'Ciecia e Tecnologia',60,NULL,NULL,NULL),(2,'Calculo Diferencial',60,NULL,NULL,NULL),(3,'Vetores e Gometria Analitica',60,NULL,NULL,NULL),(4,'Desenho Computacionall',60,NULL,NULL,NULL),(5,'Meio Ambiente',30,NULL,NULL,NULL),(6,'Quimica Geral e Inorganica',60,NULL,NULL,NULL),(7,'Pratica de Leitura e Escrita',30,NULL,NULL,NULL),(8,'Fundamentos da Computação',60,NULL,NULL,NULL),(9,'Calculo Integral',60,NULL,NULL,NULL),(10,'Álgebra Linear',60,NULL,NULL,NULL),(11,'Fenômenos Mecanicos',60,NULL,NULL,NULL),(12,'Adminstração e Economia',60,NULL,NULL,NULL),(13,'Quimica Experimental',30,NULL,NULL,NULL),(14,'Fundamentos da Segurança do Trabalho',30,NULL,NULL,NULL),(15,'Metodologia da Pesquisa Cientifica',30,NULL,NULL,NULL),(16,'Introdução a Probabilidade e Estatistica',30,NULL,NULL,NULL),(17,'Funções de Varias Variaveis',90,NULL,NULL,NULL),(18,'Oscilaçoes, Ondas e Ópticas',60,NULL,NULL,NULL),(19,'Fisica Experimental I',30,NULL,NULL,NULL),(20,'Calculo Numerico',60,NULL,NULL,NULL),(21,'Equações Diferenciais I',60,NULL,NULL,NULL),(22,'Fenomenos Eletromagneticos',30,NULL,NULL,NULL),(23,'Fisica Experimental II',30,NULL,NULL,NULL),(24,'Trabalho de Conclusão de cursos',60,NULL,NULL,NULL),(25,'Atividades Complementares',90,NULL,NULL,NULL);
/*!40000 ALTER TABLE `obrigatorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `optativas`
--

DROP TABLE IF EXISTS `optativas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `optativas` (
  `idOptativa` int(11) NOT NULL AUTO_INCREMENT,
  `strnomeoptativa` varchar(255) NOT NULL,
  `horas` varchar(10) DEFAULT NULL,
  `descricao` varchar(555) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idOptativa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `optativas`
--

LOCK TABLES `optativas` WRITE;
/*!40000 ALTER TABLE `optativas` DISABLE KEYS */;
/*!40000 ALTER TABLE `optativas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `stremailusuario` varchar(255) NOT NULL,
  `periodoentrada` varchar(10) NOT NULL,
  `strsenha` varchar(500) NOT NULL,
  `fk_idengenharia` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idUsuarios`),
  KEY `fk_idengenharia` (`fk_idengenharia`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`fk_idengenharia`) REFERENCES `engenharias` (`idEngenharia`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'billyfranklim@gmail.com','2017.1','$2y$10$1oiaO/yIeCeUKC6Me/VMKODtckLuJf9fkOmSOBaNYKQZC6yKc6rNm',1,NULL,NULL),(2,'teste@gmail.com','2016.2','$2y$10$l6DTijoPOikKXTqjkLLG/uYA8u8wzHzWVidoCuQMd3GmrW1ws2KSO',1,NULL,NULL),(3,'nome@gmail.com','2019.1','123',1,NULL,NULL),(4,'nome@gmail.com','2019.1','$2y$10$VGi5JwFodwgfVBCIIuL4TO3z65EyfAsD7pq.76yBCUq47bQJELlt6',1,NULL,NULL),(5,'nome@gmail.com','2019.1','$2y$10$bxTdbmCq5c1OTIB2ikpUwOi5er0.E1Wdjhq36yFGuxZIAYv9m4dna',1,'2019-07-23 16:28:45','2019-07-23 16:28:45'),(6,'nome@gmail.com','2019.1','$2y$10$wrCwrysZDcNngbzR9eeGPuZYZR2YZ2Jd/FJvKOYL0YqzhhiRI5Ky.',1,'2019-07-23 16:29:26','2019-07-23 16:29:26'),(7,'billyfranklim@gmail.com','2019.1','$2y$10$OxinU4MLc7TZdp2FQEkPIuYifIORwjeLa.fqHi3cKZxt5Zwrm7NNy',1,'2019-07-23 16:31:18','2019-07-23 16:31:18'),(8,'billyfranklim@gmail.com','2019.1','$2y$10$cE4RDGICa5vEphDf82fJVOnJsNHAliP4VK/sYN.UTdfOsL766M6Ue',1,'2019-07-23 16:31:50','2019-07-23 16:31:50'),(9,'billyfranklim@gmail.com','2019.1','$2y$10$8GyHphi.teZSrY7Qp0fLcuJQWGh.BLjHQtcRiFS2LTvpAr8FruLMy',4,'2019-07-23 16:40:00','2019-07-23 16:40:00'),(10,'billyfranklim@gmail.com','2019.1','$2y$10$OqlNeLvKdirh578zMPIe7uSSNFFgGW5ip2h/banRODCnicehMr0LG',2,'2019-07-23 16:40:35','2019-07-23 16:40:35');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-23 14:32:29
