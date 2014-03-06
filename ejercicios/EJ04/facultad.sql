-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-03-2013 a las 19:04:53
-- Versión del servidor: 5.1.53
-- Versión de PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `facultad`
--
CREATE DATABASE `facultad` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `facultad`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `idDepartamento` int(2) DEFAULT NULL,
  `nombre` varchar(4) DEFAULT NULL,
  `nombreCompleto` varchar(53) DEFAULT NULL,
  `telefono` int(9) DEFAULT NULL,
  `fax` int(9) DEFAULT NULL,
  `email` varchar(57) DEFAULT NULL,
  `sede` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`idDepartamento`, `nombre`, `nombreCompleto`, `telefono`, `fax`, `email`, `sede`) VALUES
(1, 'CCIA', 'Ciencias de la Computación e Inteligencia Artificial', 954556580, 954556599, 'jalonso@us.es', 1),
(2, 'LSI', 'Lenguajes y Sistemas Informáticos', 954555964, 954557139, 'buzon@lsi.us.es', 4),
(3, 'DTE', 'Tecnología Electrónica', 954552764, 954552764, 'secretario@dte.us.es', 4),
(4, 'ALG', 'Álgebra', 954556946, 954556938, 'secalg@algebra.us.es', 1),
(5, 'AM', 'Análisis Matemático', 954557973, 954557972, 'anamate@us.es', 1),
(6, 'EDAN', 'Ecuaciones Diferenciales y Análisis Numérico', 954557981, 954552898, 'edan@us.es', 1),
(7, 'EIO', 'Estadística e Investigación Operativa', 954557927, 954622800, 'estio@us.es', 1),
(8, 'GYT', 'Geometría y Topología', 954557971, 954557970, 'mvhp@us.es', 1),
(9, 'FAMN', 'Física Atómica, Molecular y Nuclear', 954552890, 954554445, 'secrefamn@us.es', 2),
(10, 'TEEP', 'Análisis Económico y Economía Política', 954557538, 954556716, 'madelmar@us.es', 5),
(11, 'OIGE', 'Organización Industrial y Gestión de Empresas', 954487204, 954487329, 'sdoige@esi.us.es', 3),
(12, 'MA1', 'Matemática Aplicada I', 954552766, 954557878, 'secretarma1@us.es', 4),
(13, 'MA2', 'Matemática Aplicada II', 954486165, 954486165, 'secretaria_ma2@esi.us.es', 3),
(14, 'ISA', 'Ingeniería de Sistemas y Automática', 954487343, 954487340, 'secreisa@us.es', 3);
