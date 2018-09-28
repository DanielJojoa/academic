-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 28, 2018 at 12:49 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academic`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_production`
--

DROP TABLE IF EXISTS `academic_production`;
CREATE TABLE IF NOT EXISTS `academic_production` (
  `id_academic_production` int(11) NOT NULL AUTO_INCREMENT,
  `type_academic_prod` int(11) NOT NULL,
  `name_academic_prod` varchar(150) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_academic_production`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `id_type_event` int(11) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `name_event` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_event`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `idRol` int(11) NOT NULL AUTO_INCREMENT,
  `nameRol` varchar(20) NOT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type_academic_prod`
--

DROP TABLE IF EXISTS `type_academic_prod`;
CREATE TABLE IF NOT EXISTS `type_academic_prod` (
  `id_type_academic_prod` int(11) NOT NULL AUTO_INCREMENT,
  `nom_type_event` varchar(100) NOT NULL,
  PRIMARY KEY (`id_type_academic_prod`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type_event`
--

DROP TABLE IF EXISTS `type_event`;
CREATE TABLE IF NOT EXISTS `type_event` (
  `id_type_event` int(11) NOT NULL AUTO_INCREMENT,
  `name_event` varchar(50) NOT NULL,
  PRIMARY KEY (`id_type_event`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_int_usr` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `rol` int(11) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id_int_usr`),
  UNIQUE KEY `id_user` (`id_user`),
  KEY `rol` (`rol`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_int_usr`, `id_user`, `name`, `lastname`, `mail`, `rol`, `password`) VALUES
(1, '12324', 'name p', 'jojoa', 'prueba@prueba.com', 1, 'f0e4c2f76c58916ec258f246851bea091d14d4247a2fc3e18694461b1816e13b');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
