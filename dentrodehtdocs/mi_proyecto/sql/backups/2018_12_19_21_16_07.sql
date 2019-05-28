-- MySQL dump 10.16  Distrib 10.1.36-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: mi_proyecto
-- ------------------------------------------------------
-- Server version	10.1.36-MariaDB

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
-- Table structure for table `apartamentos`
--

DROP TABLE IF EXISTS `apartamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apartamentos` (
  `id_apartamento` int(4) NOT NULL AUTO_INCREMENT,
  `nombre_apartamento` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `valor_adm` varchar(12) NOT NULL,
  PRIMARY KEY (`id_apartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apartamentos`
--

LOCK TABLES `apartamentos` WRITE;
/*!40000 ALTER TABLE `apartamentos` DISABLE KEYS */;
INSERT INTO `apartamentos` VALUES (1,'Apartamento 101','Zona A','200000'),(2,'Apartamento 102','Zona A','320000'),(3,'Aparamtento 103','Zona A','120000'),(4,'Apartamento 201','Zona A','150000'),(8,'Apartamento 202','Zona A','125000'),(10,'Apartamento 203','Zona A','175000'),(11,'Apartamento 301','Zona A','200000'),(12,'Apartamento 302','Zona A','320000'),(13,'Apartamento 303','Zona A','120000'),(14,'Apartamento 401','Zona A','200000'),(15,'Apartamento 402','Zona A','320000'),(16,'Apartamento 403','Zona A','120000'),(17,'Apartamento 501','Zona A','200000'),(18,'Apartamento 502','Zona A','320000'),(19,'Apartamento 503','Zona A','120000'),(20,'Apartamento 101','Zona B','200000'),(21,'Apartamento 102','Zona B','320000'),(22,'Apartamento 103','Zona B','120000'),(23,'Apartamento 201','Zona B','200000'),(24,'Apartamento 202','Zona B','320000'),(25,'Apartamento 203','Zona B','120000'),(26,'Apartamento 301','Zona B','200000'),(27,'Apartamento 302','Zona B','320000'),(28,'Apartamento 303','Zona B','120000'),(29,'Apartamento 401','Zona B','200000'),(30,'Apartamento 402','Zona B','320000'),(31,'Apartamento 403','Zona B','120000'),(32,'Apartamento 501','Zona B','200000'),(33,'Apartamento 502','Zona B','320000'),(34,'Apartamento 503','Zona B','120000'),(35,'Apartamento 101','Zona C','200000'),(36,'Apartamento 102','Zona C','320000'),(37,'Apartamento 103','Zona C','120000'),(38,'Apartamento 201','Zona C','200000'),(39,'Apartamento 202','Zona C','320000'),(40,'Apartamento 203','Zona C','120000'),(41,'Apartamento 301','Zona C','200000'),(42,'Apartamento 302','Zona C','320000'),(43,'Apartamento 303','Zona C','120000'),(44,'Apartamento 401','Zona C','200000'),(45,'Apartamento 402','Zona C','320000'),(46,'Apartamento 403','Zona C','120000'),(47,'Apartamento 501','Zona C','200000'),(48,'Apartamento 502','Zona C','320000'),(49,'Apartamento 503','Zona C','120000'),(50,'Apartamento 101','Zona D','200000'),(51,'Apartamento 102','Zona D','320000'),(52,'Apartamento 103','Zona D','120000'),(53,'Apartamento 201','Zona D','200000'),(54,'Apartamento 202','Zona D','320000'),(55,'Apartamento 203','Zona D','120000'),(56,'Apartamento 301','Zona D','200000'),(57,'Apartamento 302','Zona D','320000'),(58,'Apartamento 303','Zona D','120000'),(59,'Apartamento 401','Zona D','200000'),(60,'Apartamento 402','Zona D','320000'),(61,'Apartamento 403','Zona D','120000'),(62,'Apartamento 501','Zona D','200000'),(63,'Apartamento 502','Zona D','320000'),(64,'Apartamento 503','Zona D','120000');
/*!40000 ALTER TABLE `apartamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aux_perfiles_menus`
--

DROP TABLE IF EXISTS `aux_perfiles_menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aux_perfiles_menus` (
  `id_aux` int(4) NOT NULL AUTO_INCREMENT,
  `perfil_id` int(2) NOT NULL,
  `menu_id` int(2) NOT NULL,
  PRIMARY KEY (`id_aux`),
  KEY `perfil_id` (`perfil_id`),
  KEY `menu_id` (`menu_id`),
  CONSTRAINT `aux_perfiles_menus_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id_perfil`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `aux_perfiles_menus_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aux_perfiles_menus`
--

LOCK TABLES `aux_perfiles_menus` WRITE;
/*!40000 ALTER TABLE `aux_perfiles_menus` DISABLE KEYS */;
INSERT INTO `aux_perfiles_menus` VALUES (1,1,1),(2,1,2),(3,1,3),(4,1,4),(5,1,5),(6,1,6),(7,1,7),(8,1,8),(9,1,9),(10,1,10),(11,1,11),(12,1,12),(13,1,13),(14,1,14),(15,2,12),(16,2,13),(17,2,14),(18,3,7),(19,4,7);
/*!40000 ALTER TABLE `aux_perfiles_menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id_menu` int(2) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `modulo` varchar(100) NOT NULL,
  `icono` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Admón Usuarios','adm_usuarios','<i class=\"fa fa-archive\"></i>','admon-usuarios'),(2,'Admón Menús','adm_menus','<i class=\"fa fa-amazon\"></i>','adm-menus'),(3,'Admón Perfiles','adm_perfiles','<i class=\"fa fa-cogs\"></i>','admon-perfiles'),(4,'Admón Clientes','adm_clientes','<i class=\"fa fa-desktop\"></i>','admon-clientes'),(5,'Admón Banners','adm_banners','<i class=\"fa fa-bed\"></i>','admon-banners'),(6,'Estadísticas Banners','estadisticas_banners','<i class=\"fa fa-ban\"></i>','estadisticas-banners'),(7,'Admón Visitantes','adm_visitantes','<i class=\"fa fa-amazon\"></i>','adm-visitantes'),(8,'Admón Propietarios','adm_propietario','<i class=\"fa fa-amazon\"></i>','adm-propietario'),(9,'Admón Residentes','adm_residentes','<i class=\"fa fa-amazon\"></i>','adm-residentes'),(10,'Admon Apartamentos','adm_apartamentos','<i class=\"fa fa-amazon\"></i>','adm-apartamentos'),(11,'Admón Interiores','adm_interiores','<i class=\"fa fa-amazon\"></i>','adm_interiores'),(12,'Admon Eventos','adm_eventos','<i class=\"fa fa-amazon\"></i>','adm-eventos'),(13,'Admón Reservas','adm_reservas','<i class=\"fa fa-amazon\"></i>','adm_reservas'),(14,'Admón Correspondencia','adm_correspondencia','<i class=\"fa fa-amazon\"></i>','adm_correspondencia');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfiles`
--

DROP TABLE IF EXISTS `perfiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfiles` (
  `id_perfil` int(2) NOT NULL AUTO_INCREMENT,
  `nombre_perfil` varchar(30) NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfiles`
--

LOCK TABLES `perfiles` WRITE;
/*!40000 ALTER TABLE `perfiles` DISABLE KEYS */;
INSERT INTO `perfiles` VALUES (1,'administrador'),(2,'cliente'),(3,'guarda'),(4,'invitado'),(5,'nuevo perfil');
/*!40000 ALTER TABLE `perfiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propietarios`
--

DROP TABLE IF EXISTS `propietarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propietarios` (
  `id_propietario` int(2) NOT NULL AUTO_INCREMENT,
  `nombre_propietario` varchar(30) NOT NULL,
  `identificacion` int(15) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id_propietario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propietarios`
--

LOCK TABLES `propietarios` WRITE;
/*!40000 ALTER TABLE `propietarios` DISABLE KEYS */;
INSERT INTO `propietarios` VALUES (1,'Jimmy Fernando Cantor Garcia',1000782057,'3115105208','jamzgarcia16@gmail.com','1992-04-25','fotos/jimmy.jpg'),(2,'Andres Cardenas',52412365,'3214568741','andres123@gmail.com','1994-08-10','fotos/andres.jpg'),(3,'Andrea Rozo',52478654,'3204785421','andrea@gmail.com','1993-03-08','fotos/andrea.jpg'),(4,'benito perez',1009827384,'3205412321','benitoperez6@gmail.com','1991-07-17','fotos/benito.jpg'),(6,'Nuevo Propietario',2147483647,'3125444962','otrouser2@gmail.com','1993-03-02','fotos/otrouser2@gmail.com.jpg');
/*!40000 ALTER TABLE `propietarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `cuenta` varchar(100) NOT NULL,
  `clave` varchar(128) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1' COMMENT ' 1=activo,0=inactivo ',
  `perfil_id` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `perfil_id` (`perfil_id`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id_perfil`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'administrador','admin@conjuntoseguro.com','8ca32d950873fd2b5b34a7d79c4a294b2fd805abe3261beb04fab61a3b4b75609afd6478aa8d34e03f262d68bb09a2ba9d655e228c96723b2854838a6e613b9d','fotos/admin.png',1,1),(2,'jimmy','prueba1@gmail.com','8ca32d950873fd2b5b34a7d79c4a294b2fd805abe3261beb04fab61a3b4b75609afd6478aa8d34e03f262d68bb09a2ba9d655e228c96723b2854838a6e613b9d','fotos/logon.png',1,2),(3,'otrousuario','otrouser@gmail.com','8ca32d950873fd2b5b34a7d79c4a294b2fd805abe3261beb04fab61a3b4b75609afd6478aa8d34e03f262d68bb09a2ba9d655e228c96723b2854838a6e613b9d','fotos/goku.png',1,3),(4,'David Palacios','davidpalacios@conjuseguro.com','808d63ba47fcef6a7c52ec47cb63eb1b747a9d527a77385fc05c8a5ce8007586265d003b4130f6b0c8f3bb2ad89965a5da07289ba5d1e35321e160bea4f766f8','fotos/davidpalacios@conjuseguro.com.jpg',1,4),(5,'jefe','jefe@gmail.com','40b787e94778266fb196a73b7a77edf9de2ef172451a2b87531324812250df8f26fcc11e69b35afddbe639956c96153e71363f97010bc99405dd2d77b8c41986','fotos/jefe@gmail.com.jpg',1,3),(6,'prueba','otro123@gmail.com','808d63ba47fcef6a7c52ec47cb63eb1b747a9d527a77385fc05c8a5ce8007586265d003b4130f6b0c8f3bb2ad89965a5da07289ba5d1e35321e160bea4f766f8','fotos/otro123@gmail.com.jpg',1,5);
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

-- Dump completed on 2018-12-19 15:16:08
