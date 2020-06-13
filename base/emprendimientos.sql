-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-06-2020 a las 02:15:53
-- Versión del servidor: 5.7.28
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `emprendimientos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emprendimientos`
--

DROP TABLE IF EXISTS `emprendimientos`;
CREATE TABLE IF NOT EXISTS `emprendimientos` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nombre_emprendimiento` varchar(255) DEFAULT NULL,
  `categoria_id` varchar(40) DEFAULT NULL,
  `descripcion` text,
  `direccion` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `provincia` varchar(100) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `usuario_id` int(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `emprendimientos`
--

INSERT INTO `emprendimientos` (`id`, `nombre_emprendimiento`, `categoria_id`, `descripcion`, `direccion`, `ciudad`, `provincia`, `instagram`, `facebook`, `logo`, `usuario_id`) VALUES
(1, 'Tipp Sistemas', 'Comercio', 'Somos una empresa chica que se suma a las potencias tecnologicas para armar los mejores sistemas de la ciudad', 'Hernandarias 2262', 'Gualeguaychu', 'Entre Rios', 'https://www.instagram.com/p/B6de_sAHrsb/', 'https://www.facebook.com/IPGchu/', 'C:\\fakepath\\Modelo2.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(50) DEFAULT NULL,
  `apellido_usuario` varchar(50) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `emprendimiento_id` int(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
