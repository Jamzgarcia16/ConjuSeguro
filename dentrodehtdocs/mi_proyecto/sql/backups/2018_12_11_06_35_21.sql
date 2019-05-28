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
  `valor_adm` int(12) NOT NULL,
  PRIMARY KEY (`id_apartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apartamentos`
--

LOCK TABLES `apartamentos` WRITE;
/*!40000 ALTER TABLE `apartamentos` DISABLE KEYS */;
INSERT INTO `apartamentos` VALUES (1,'Apartamento 10122','Zona A',22222222),(2,'Apartamento 102333','Zona A',1222222),(3,'Aparamtento 103','Zona A',120000),(4,'Apartamento 104aaa','Zona b',1233),(6,'Apartamento 102111111','Zona B',4444444),(7,'Apartamento 103','Zona B',200000);
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
  `id_menu` int(1) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `modulo` varchar(100) NOT NULL,
  `icono` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfiles`
--

LOCK TABLES `perfiles` WRITE;
/*!40000 ALTER TABLE `perfiles` DISABLE KEYS */;
INSERT INTO `perfiles` VALUES (1,'administrador'),(2,'cliente'),(3,'guarda'),(4,'invitado');
/*!40000 ALTER TABLE `perfiles` ENABLE KEYS */;
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
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'administrador','admin@conjuntoseguro.com','8ca32d950873fd2b5b34a7d79c4a294b2fd805abe3261beb04fab61a3b4b75609afd6478aa8d34e03f262d68bb09a2ba9d655e228c96723b2854838a6e613b9d','fotos/admin.png',1,1),(2,'jimmy','prueba1@gmail.com','8ca32d950873fd2b5b34a7d79c4a294b2fd805abe3261beb04fab61a3b4b75609afd6478aa8d34e03f262d68bb09a2ba9d655e228c96723b2854838a6e613b9d','fotos/logon.png',1,2),(3,'otrousuario','otrouser@gmail.com','8ca32d950873fd2b5b34a7d79c4a294b2fd805abe3261beb04fab61a3b4b75609afd6478aa8d34e03f262d68bb09a2ba9d655e228c96723b2854838a6e613b9d','fotos/goku.png',1,3),(4,'David Palacios','davidpalacios@conjuseguro.com','808d63ba47fcef6a7c52ec47cb63eb1b747a9d527a77385fc05c8a5ce8007586265d003b4130f6b0c8f3bb2ad89965a5da07289ba5d1e35321e160bea4f766f8','fotos/davidpalacios@conjuseguro.com.jpg',1,4);
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

-- Dump completed on 2018-12-11  0:35:22
