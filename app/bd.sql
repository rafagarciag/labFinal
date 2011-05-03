CREATE DATABASE  IF NOT EXISTS `arqui_lab`;
USE `arqui_lab`;

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  
  PRIMARY KEY (`id`)
);

