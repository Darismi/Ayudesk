-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: reportesayudesk
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
-- Table structure for table `reporte`
--

DROP TABLE IF EXISTS `reporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reporte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `descripcion_usuario` text DEFAULT NULL,
  `descripcion_asistente` text DEFAULT NULL,
  `descripcion_tecnico` text DEFAULT NULL,
  `id_dispositivo` int(11) DEFAULT NULL,
  `id_tecnico` int(11) DEFAULT NULL,
  `id_tecnico_esc` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_asistente` int(11) DEFAULT NULL,
  `autoSolu` varchar(2) DEFAULT NULL,
  `autoSolu_Descripcion` text DEFAULT NULL,
  `estado` varchar(80) DEFAULT NULL,
  `fecha_solu` date DEFAULT NULL,
  `prioridad` varchar(80) DEFAULT NULL,
  `tipo` varchar(80) DEFAULT NULL,
  `herramientas` text DEFAULT NULL,
  `razon` text DEFAULT NULL,
  `finalizado` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reporte`
--

LOCK TABLES `reporte` WRITE;
/*!40000 ALTER TABLE `reporte` DISABLE KEYS */;
INSERT INTO `reporte` VALUES (1,'2020-05-04','adasda','asddasd','iiskamlajsjsanja',1,3,3,1,2,'Si','adsdas','Finalizado',NULL,'Baja','2','teamviewer',NULL,NULL),(2,'2020-05-14','quiero ver que se agregue el tipo de incidente','el usuario manifestó bien lo que desea visualizar','tuve que vender mi alma',1,3,4,1,2,'Si','la semana pasada hice una corrección, pero no recuerdo haberla probado','Finalizado',NULL,'Baja','3','un conjuro','no fui capaz, pero diego puede solucionarlo',NULL),(3,'2020-05-25','cambié mi direccion ip de la empresa y no me llega información','el usuario presenta dificultades al recibir información por haber cambiado la direccion ip de su dispositivo asignado, el requiere que su direccion ip sea cambiada nuevamente','no se pero lo solucione',1,4,3,1,3,'Si','le he puesto puros unos','Finalizado',NULL,'Baja','3','ni idea','larry el mejor',NULL),(4,'2020-05-29','voy a hacer el 4to reporte','este es el segundo incidente de software','',1,3,5,1,2,'Si','ahora miramos','Finalizado',NULL,'Baja','2','','santiago puede solucionarlo',NULL),(5,'2020-05-29','se me dañó el disco duro','el usuario manifiesta que el disco duro se le ha dañado','',2,5,NULL,6,2,'Si','destapando y extrayendo el disco duro','Finalizado',NULL,'Media','1','',NULL,NULL),(6,'2020-05-29','se me dañó el disco duro, no lo reconoce el sistema','el usuario necesita un cambio de disco duro','',2,5,NULL,6,2,'Si','extrayendo el disco duro al destapar el dispositivo','Finalizado',NULL,'Baja','1','',NULL,NULL),(7,'2020-05-30','instalé linux sin querer','el usuario es el feo','',3,3,4,6,2,'Si','creando a sinforosa','Finalizado',NULL,'Media','3','','no pude',NULL),(8,'2020-06-11','prueba 1','prueba uno','lo solucioné',1,3,4,1,2,'Si','prueba uno','Finalizado',NULL,'Baja','3','teamviewer','usted es capaz',NULL),(9,'2020-06-12','esta es una prueba para escalar','larry es un teso','',1,3,4,1,2,'No','ya lo mencioné','Finalizado',NULL,'Baja','3','','lo dañé',NULL),(10,'2020-06-12','incidente para larry','voy a ver','',2,3,5,6,2,'No','XD','Finalizado',NULL,'Baja','2','','incidente para el amiguis',NULL),(11,'2020-06-12','incidente para armando','XD','',1,5,3,1,2,'No','xd','Finalizado',NULL,'Media','2','','debe dar uno',NULL),(12,'2020-06-12','se volvio a dañar','xd','',2,3,5,6,2,'No','llamando aki','Finalizado',NULL,'Media','2','','voy a ver si suma',NULL),(13,'2020-06-12','a ver si ya suma','xd','',3,3,5,6,2,'No','xd','Finalizado',NULL,'Baja','2','','por favor suma',NULL),(14,'2020-06-13','no tengo internet cuando estoy en mi casa, pero si en el trabajo','el usuario puede tener problemas con los puertos','le abrí los puertos al computador',3,3,4,6,2,'Si','reiniciando el modem de mi casa','Finalizado',NULL,'Media','3','teamviewer','no cuento con las  herramientas para solucionar el incidente',NULL),(15,'2020-06-18','reporte uno','reporte 1',NULL,1,3,5,1,2,'Si','reporte 1','Escalonado',NULL,'Baja','2',NULL,'No pude resolver el incidente',NULL),(16,'2020-06-19','mi computador no conecta a internet','probablemente el usuario tiene desbilitado un driver','instalé un driver de red',3,3,4,6,2,'Si','cambiando la mascara de red','Finalizado',NULL,'Baja','3','driver package','no fui capaz de solucionarlo, este no es mi especialidad',NULL),(17,'2020-06-23','no me funciona el mouse a mi laptop','puede que le falte la resistencia del voltaje del mouse','fui a la casa del usuario y con un medidor de voltaje arreglé el dispositivo',3,5,NULL,6,2,'Si','he intentado cambiar la batería de mi mouse','Finalizado',NULL,'Media','1','medidor de voltaje, soldador',NULL,NULL),(18,'2020-06-23','necesito instalar netbeans','el usuario necesita la instalación de un programa pero no cuenta con los conocimientos','instalé el programa en la computadora del usuario',1,5,3,1,2,'Si','instalando el jdk del año pasado','Finalizado',NULL,'Alta','2','teamviewer, netbeans, jdk','no fui capaz de instalarlo porque tengo linux',NULL);
/*!40000 ALTER TABLE `reporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tecnico_escalado`
--

DROP TABLE IF EXISTS `tecnico_escalado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tecnico_escalado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cc` varchar(255) DEFAULT NULL,
  `id_tecnico` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `n_escalados` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tecnico_escalado`
--

LOCK TABLES `tecnico_escalado` WRITE;
/*!40000 ALTER TABLE `tecnico_escalado` DISABLE KEYS */;
INSERT INTO `tecnico_escalado` VALUES (1,'1020345673',3,'Larry Santiago','tecni1',5),(2,'1000654321',5,'Jorge Armando','tecni3',2);
/*!40000 ALTER TABLE `tecnico_escalado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tecnico_finalizado`
--

DROP TABLE IF EXISTS `tecnico_finalizado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tecnico_finalizado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cc` varchar(255) DEFAULT NULL,
  `id_tecnico` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `n_finalizados` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tecnico_finalizado`
--

LOCK TABLES `tecnico_finalizado` WRITE;
/*!40000 ALTER TABLE `tecnico_finalizado` DISABLE KEYS */;
INSERT INTO `tecnico_finalizado` VALUES (1,'1000654321',5,'Jorge Armando','tecni3',7),(2,'1020345673',3,'Larry Santiago','tecni1',3),(3,'1000245953',4,'Juan Diego','tecni2',4);
/*!40000 ALTER TABLE `tecnico_finalizado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_reportes`
--

DROP TABLE IF EXISTS `usuario_reportes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario_reportes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cc` varchar(25) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `usuario` varchar(10) DEFAULT NULL,
  `n_reportes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_reportes`
--

LOCK TABLES `usuario_reportes` WRITE;
/*!40000 ALTER TABLE `usuario_reportes` DISABLE KEYS */;
INSERT INTO `usuario_reportes` VALUES (1,'1000412058',1,'Juan Esteban','user1',9),(2,'1000123456',6,'Luis Alberto','user2',9);
/*!40000 ALTER TABLE `usuario_reportes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-23 13:08:33
