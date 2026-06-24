-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: info_php_26
-- ------------------------------------------------------
-- Server version	5.5.5-10.6.23-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `CIDADE`
--

DROP TABLE IF EXISTS `CIDADE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CIDADE` (
  `Id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `idEstado` tinyint(4) NOT NULL,
  `CriadoEm` datetime NOT NULL,
  `AtualizadoEm` datetime NOT NULL,
  `Prefeito` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `CIDADE_ESTADOS_FK` (`idEstado`),
  CONSTRAINT `CIDADE_ESTADOS_FK` FOREIGN KEY (`idEstado`) REFERENCES `ESTADOS` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CIDADE`
--

LOCK TABLES `CIDADE` WRITE;
/*!40000 ALTER TABLE `CIDADE` DISABLE KEYS */;
/*!40000 ALTER TABLE `CIDADE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ESTADOS`
--

DROP TABLE IF EXISTS `ESTADOS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ESTADOS` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `UF` varchar(2) NOT NULL,
  `IDH` double DEFAULT NULL,
  `DemsidadeDemografica` double DEFAULT NULL,
  `Pais` tinyint(4) NOT NULL,
  `CriandoEm` datetime NOT NULL,
  `Atualizado em` datetime NOT NULL,
  `governador` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ESTADOS`
--

LOCK TABLES `ESTADOS` WRITE;
/*!40000 ALTER TABLE `ESTADOS` DISABLE KEYS */;
/*!40000 ALTER TABLE `ESTADOS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Usuario` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(100) NOT NULL,
  `idpessoa` tinyint(4) DEFAULT NULL,
  `CriadEm` datetime DEFAULT NULL,
  `AtualizadoEm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `id.pessoa` FOREIGN KEY (`id`) REFERENCES `pessoa` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `endereco` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `cep` varchar(10) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `rua` varchar(512) NOT NULL,
  `numero` varchar(50) DEFAULT NULL,
  `idEstado` tinyint(4) DEFAULT NULL,
  `idCidade` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `endereco_CIDADE_FK` (`idCidade`),
  KEY `endereco_ESTADOS_FK` (`idEstado`),
  CONSTRAINT `endereco_CIDADE_FK` FOREIGN KEY (`idCidade`) REFERENCES `CIDADE` (`Id`),
  CONSTRAINT `endereco_ESTADOS_FK` FOREIGN KEY (`idEstado`) REFERENCES `ESTADOS` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES (1,'2225645','COHATRAC','JAPONESA','06',NULL,NULL),(2,'4488845','FULERO','DIACHO','666',NULL,NULL),(3,'8484894','TIROTERO','PRAIA','55',NULL,NULL),(4,'420083190','PAO DE','QUEIJO','3',NULL,NULL),(5,'5555552','FORRO','CALCINHA PRETA','5',NULL,NULL),(6,'4444444','TACACA','FULERO','8',NULL,NULL);
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionario` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `salario` decimal(10,0) NOT NULL,
  `cargo` varchar(512) NOT NULL,
  `setor` varchar(150) NOT NULL,
  `cracha` varchar(15) NOT NULL,
  `idpessoa` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `funcionario_pessoa_FK` (`idpessoa`),
  CONSTRAINT `funcionario_pessoa_FK` FOREIGN KEY (`idpessoa`) REFERENCES `pessoa` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (1,'RAFA','G',1546554555,'ADM','GRUPO','66666666',1);
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoa` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(512) NOT NULL,
  `idade` int(3) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `idEndereco` tinyint(4) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `IdPessoa` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pessoa_endereco_FK` (`idEndereco`),
  CONSTRAINT `pessoa_endereco_FK` FOREIGN KEY (`idEndereco`) REFERENCES `endereco` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoa`
--

LOCK TABLES `pessoa` WRITE;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` VALUES (1,'RAFAELA',21,'5555555555',1,'54544',NULL,1),(2,'JULIA',555545454,'255544422525',2,NULL,'555555',NULL);
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'info_php_26'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-06-23 22:01:35
