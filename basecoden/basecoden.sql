/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.5-10.4.22-MariaDB : Database - ccoden
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ccoden` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `ccoden`;

/*Table structure for table `agenda` */

DROP TABLE IF EXISTS `agenda`;

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `seguimiento` varchar(200) DEFAULT NULL,
  `alias_clave` varchar(200) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellido_p` varchar(200) DEFAULT NULL,
  `apellido_m` varchar(200) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `dia` date DEFAULT NULL,
  `publicidad` varchar(200) DEFAULT NULL,
  `contesto` varchar(200) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_agenda`),
  KEY `id_empleado` (`id_empleado`),
  CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `agenda` */

/*Table structure for table `curso` */

DROP TABLE IF EXISTS `curso`;

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellido_p` varchar(200) DEFAULT NULL,
  `apellido_m` varchar(200) DEFAULT NULL,
  `alias` varchar(200) DEFAULT NULL,
  `clave_agenda` varchar(200) DEFAULT NULL,
  `edad` int(10) DEFAULT NULL,
  `junta_informacion` varchar(200) DEFAULT NULL,
  `despacho` varchar(200) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `campo_vacio_f1` varchar(200) DEFAULT NULL,
  `id_entrevistas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_curso`),
  KEY `curso_ibfk_1` (`id_entrevistas`),
  CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`id_entrevistas`) REFERENCES `entrevistas` (`id_entrevistas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `curso` */

/*Table structure for table `empleados` */

DROP TABLE IF EXISTS `empleados`;

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `alias` varchar(200) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellido_p` varchar(200) DEFAULT NULL,
  `apellido_m` varchar(200) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `genero` varchar(200) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `empleados` */

/*Table structure for table `entrevistas` */

DROP TABLE IF EXISTS `entrevistas`;

CREATE TABLE `entrevistas` (
  `id_entrevistas` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_agenda` varchar(200) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `citado` varchar(200) DEFAULT NULL,
  `publicidad` varchar(200) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `oficina` varchar(200) DEFAULT NULL,
  `estatus_aceptado` varchar(200) DEFAULT NULL,
  `id_agenda` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_entrevistas`),
  KEY `id_agenda` (`id_agenda`),
  CONSTRAINT `entrevistas_ibfk_1` FOREIGN KEY (`id_agenda`) REFERENCES `agenda` (`id_agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `entrevistas` */

/*Table structure for table `productividad` */

DROP TABLE IF EXISTS `productividad`;

CREATE TABLE `productividad` (
  `id_productividad` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellido_p` varchar(200) DEFAULT NULL,
  `apellido_m` varchar(200) DEFAULT NULL,
  `contesto` varchar(200) DEFAULT NULL,
  `llego` varchar(200) DEFAULT NULL,
  `porcentaje` varchar(200) DEFAULT NULL,
  `efectividad` varchar(200) DEFAULT NULL,
  `id_entrevistas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_productividad`),
  KEY `id_entrevistas` (`id_entrevistas`),
  CONSTRAINT `productividad_ibfk_1` FOREIGN KEY (`id_entrevistas`) REFERENCES `entrevistas` (`id_entrevistas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `productividad` */

/*Table structure for table `registro_personal` */

DROP TABLE IF EXISTS `registro_personal`;

CREATE TABLE `registro_personal` (
  `id_registro_p` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `id_entrevistas` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_registro_p`),
  KEY `id_entrevistas` (`id_entrevistas`),
  KEY `id_curso` (`id_curso`),
  CONSTRAINT `registro_personal_ibfk_1` FOREIGN KEY (`id_entrevistas`) REFERENCES `entrevistas` (`id_entrevistas`),
  CONSTRAINT `registro_personal_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `registro_personal` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
