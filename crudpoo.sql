-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2018 a las 19:28:07
-- Versión del servidor: 5.5.57-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `crudpoo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` char(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `apellido`, `telefono`, `email`) VALUES
(1, 'Robert', 'Ramos', '3226182669', 'robertramosastudillo@gmail.com'),
(3, 'Camila', 'DueÃ±as', '3152836519', 'camila98@hotmail.es'),
(4, 'Jefer', 'Guzman', '3216782309', 'jeferson99@gmail.es'),
(5, 'Daniel', 'Guerrero', '3126238712', 'daniel97@yahoo.es'),
(6, 'Liz', 'Valencia', '3115679823', 'lizvalencia2000@hotmail.com'),
(7, 'Sebastian', 'Villada', '32012348721', 'jsebastian99@yahoo.com'),
(8, 'Valentina', 'Garcia', '3182983409', 'valengarcia2002@hotmail.es'),
(9, 'Mateo', 'Zea', '3118236230', 'mateozea@gmail.com'),
(11, 'Celmira', 'Astudillo', '3152786309', 'celmiraastudillo@gmail.com'),
(16, 'Jhon', 'Florez', '3166876115', 'jedinsonflorez@gmail.es');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
