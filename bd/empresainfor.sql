-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: empresainfor
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

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
-- Table structure for table `dispositivo`
--

DROP TABLE IF EXISTS `dispositivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dispositivo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(150) DEFAULT NULL,
  `marca` varchar(150) DEFAULT NULL,
  `procesador` varchar(150) DEFAULT NULL,
  `memoria` varchar(150) DEFAULT NULL,
  `almacenamiento` varchar(150) DEFAULT NULL,
  `sistema_operativo` varchar(150) DEFAULT NULL,
  `precio` varchar(150) DEFAULT NULL,
  `tipo_dispositivo` varchar(150) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `dispositivo_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dispositivo`
--

LOCK TABLES `dispositivo` WRITE;
/*!40000 ALTER TABLE `dispositivo` DISABLE KEYS */;
INSERT INTO `dispositivo` VALUES (1,'010142','Lenovo','Ryzen 7','8 gb','1 tb','Windows Home','1980000','Computador',1),(2,'10101011','compaq','intel celeron','4 gb','500 gb','Linux Ubuntu','1.500.000','Computador',6),(3,'2020011','Apple','core i3','12 gb','500 gb','MacOs','2.500.000','laptop',6);
/*!40000 ALTER TABLE `dispositivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil_tecnico`
--

DROP TABLE IF EXISTS `perfil_tecnico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfil_tecnico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `especialidad` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil_tecnico`
--

LOCK TABLES `perfil_tecnico` WRITE;
/*!40000 ALTER TABLE `perfil_tecnico` DISABLE KEYS */;
INSERT INTO `perfil_tecnico` VALUES (1,'Hardware'),(2,'Software'),(3,'Redes');
/*!40000 ALTER TABLE `perfil_tecnico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tecnico_perfil_tecnico`
--

DROP TABLE IF EXISTS `tecnico_perfil_tecnico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tecnico_perfil_tecnico` (
  `id_tecnico` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL,
  KEY `id_tecnico` (`id_tecnico`),
  KEY `id_perfil` (`id_perfil`),
  CONSTRAINT `tecnico_perfil_tecnico_ibfk_1` FOREIGN KEY (`id_tecnico`) REFERENCES `usuario` (`id`),
  CONSTRAINT `tecnico_perfil_tecnico_ibfk_2` FOREIGN KEY (`id_perfil`) REFERENCES `perfil_tecnico` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tecnico_perfil_tecnico`
--

LOCK TABLES `tecnico_perfil_tecnico` WRITE;
/*!40000 ALTER TABLE `tecnico_perfil_tecnico` DISABLE KEYS */;
INSERT INTO `tecnico_perfil_tecnico` VALUES (3,3),(4,3),(3,2),(5,1),(5,2);
/*!40000 ALTER TABLE `tecnico_perfil_tecnico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_usuario`
--

LOCK TABLES `tipo_usuario` WRITE;
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
INSERT INTO `tipo_usuario` VALUES (1,'Usuario final'),(2,'Usuario de aplicaciones'),(3,'Asistente'),(4,'Tecnico');
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `primer_apellido` varchar(150) DEFAULT NULL,
  `segundo_apellido` varchar(150) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `usuario` varchar(250) DEFAULT NULL,
  `contraseña` varchar(250) DEFAULT NULL,
  `cc` varchar(15) DEFAULT NULL,
  `tipo_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo_usuario` (`tipo_usuario`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipo_usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Juan Esteban','López','Obando','5810105','juan.elopez4265@gmail.com','Calle 1b #54-07','user1','12345','1000412058',1),(2,'Hildefonso','Muñoz','David','3617114','hildefonso_munoz@elpoli.edu.co','Carrera 1b #54-07','asis1','12345','1000325424',3),(3,'Larry Santiago','Villa','Cardona','2554416','larry_villa23191@elpoli.edu.co','Carrera 1b #54-07','tecni1','12345','1020345673',4),(4,'Juan Diego','Villegas','Llano','2556322','juan_villegas23191@elpoli.edu.co','carrera 57 #23-1','tecni2','12345','1000245953',4),(5,'Jorge Armando','Casas','Rojas','3783734','jorgeacr@gmail.com','carrera 57 29-38','tecni3','12345','1000654321',4),(6,'Luis Alberto','Villegas','Diaz','3216541234','alberto12@gmail.com','calle 12 a sur 51-32','user2','12345','1000123456',2);
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

-- Dump completed on 2020-07-23 13:08:10
