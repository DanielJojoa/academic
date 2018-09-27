-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-09-2018 a las 16:26:42
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `cod_eve` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_typeeve` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `name_eve` text COLLATE utf8_spanish_ci NOT NULL,
  `address_eve` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `datestart_eve` date DEFAULT NULL,
  `dateend_eve` date DEFAULT NULL,
  `value_eve` int(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`cod_eve`),
  KEY `events_FKIndex1` (`name_typeeve`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`cod_eve`, `name_typeeve`, `name_eve`, `address_eve`, `datestart_eve`, `dateend_eve`, `value_eve`) VALUES
(1, 'Congreso', 'CACIED 2017', 'Udenar Pasto', '2017-12-12', '2017-12-15', 180000),
(2, 'Conversatorio', '<p>\r\n	celiat</p>\r\n', 'Unicacuca', '2017-12-15', '2017-12-17', 80000),
(3, 'Congreso', 'cucalon2', 'jkjkj', '2017-12-27', '2017-12-28', 800000),
(4, 'Congreso', 'cucalon', 'jkjkj', '2017-12-26', '2017-12-28', 800000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `level_educ`
--

DROP TABLE IF EXISTS `level_educ`;
CREATE TABLE IF NOT EXISTS `level_educ` (
  `cod_level` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_level` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`cod_level`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `level_educ`
--

INSERT INTO `level_educ` (`cod_level`, `name_level`) VALUES
(1, 'Pregrado'),
(2, 'Especialista'),
(3, 'Magister'),
(4, 'Doctorado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modality`
--

DROP TABLE IF EXISTS `modality`;
CREATE TABLE IF NOT EXISTS `modality` (
  `cod_mod` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_mod` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`cod_mod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produc_academic`
--

DROP TABLE IF EXISTS `produc_academic`;
CREATE TABLE IF NOT EXISTS `produc_academic` (
  `cod_prodc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cod_usr` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `cod_typepro` int(10) UNSIGNED NOT NULL,
  `name_produc` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `date_produc` date NOT NULL,
  `address_produc` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descrip_produc` text COLLATE utf8_spanish_ci NOT NULL,
  `certificate_produc` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`cod_prodc`),
  KEY `produc_academic_FKIndex1` (`cod_typepro`),
  KEY `produc_academic_FKIndex2` (`cod_usr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `cod_rol` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_rol` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`cod_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`cod_rol`, `nom_rol`) VALUES
(1, 'Administrador'),
(2, 'Docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titles`
--

DROP TABLE IF EXISTS `titles`;
CREATE TABLE IF NOT EXISTS `titles` (
  `cod_title` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cod_usr` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `cod_mod` int(10) UNSIGNED NOT NULL,
  `cod_level` int(10) UNSIGNED NOT NULL,
  `name_title` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dategrad_title` date NOT NULL,
  PRIMARY KEY (`cod_title`),
  KEY `titles_FKIndex1` (`cod_level`),
  KEY `titles_FKIndex2` (`cod_mod`),
  KEY `titles_FKIndex3` (`cod_usr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_event`
--

DROP TABLE IF EXISTS `type_event`;
CREATE TABLE IF NOT EXISTS `type_event` (
  `name_typeeve` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cod_typeeve` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`name_typeeve`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `type_event`
--

INSERT INTO `type_event` (`name_typeeve`, `cod_typeeve`) VALUES
('Congreso', 1),
('Conversatorio', 3),
('Seminario', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_produc`
--

DROP TABLE IF EXISTS `type_produc`;
CREATE TABLE IF NOT EXISTS `type_produc` (
  `cod_typepro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_typepro` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`cod_typepro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `cod_usr` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `cod_rol` int(10) UNSIGNED NOT NULL,
  `pass_usr` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `name_usr` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `lname_usr` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `photo_usr` text COLLATE utf8_spanish_ci,
  `mail_usr` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `address_usr` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`cod_usr`),
  KEY `users_FKIndex1` (`cod_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`cod_usr`, `cod_rol`, `pass_usr`, `name_usr`, `lname_usr`, `photo_usr`, `mail_usr`, `address_usr`) VALUES
('123', 1, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Esteban', 'Diaz', NULL, NULL, NULL),
('456', 2, '51eac6b471a284d3341d8c0c63d0f1a286262a18', 'Daniel', 'Jojoa', NULL, NULL, NULL),
('789', 2, 'fc1200c7a7aa52109d762a9f005b149abef01479', 'Diana Alejandra', 'Castrillón Ortega', '7892c-20614594_10212429636409777_266391351_n.jpg', 'nanis_aleja95@hotmail.com', 'Calle 22 No. 20 B 55');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`name_typeeve`) REFERENCES `type_event` (`name_typeeve`);

--
-- Filtros para la tabla `produc_academic`
--
ALTER TABLE `produc_academic`
  ADD CONSTRAINT `produc_academic_ibfk_1` FOREIGN KEY (`cod_typepro`) REFERENCES `type_produc` (`cod_typepro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `produc_academic_ibfk_2` FOREIGN KEY (`cod_usr`) REFERENCES `users` (`cod_usr`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `titles`
--
ALTER TABLE `titles`
  ADD CONSTRAINT `titles_ibfk_1` FOREIGN KEY (`cod_level`) REFERENCES `level_educ` (`cod_level`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `titles_ibfk_2` FOREIGN KEY (`cod_mod`) REFERENCES `modality` (`cod_mod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `titles_ibfk_3` FOREIGN KEY (`cod_usr`) REFERENCES `users` (`cod_usr`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`cod_rol`) REFERENCES `roles` (`cod_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
