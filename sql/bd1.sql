-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-11-2015 a las 12:30:25
-- Versión del servidor: 5.5.46-0ubuntu0.14.04.2
-- Versión de PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ControlSalas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cliente`
--

CREATE TABLE IF NOT EXISTS `Cliente` (
  `idCliente` int(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'identificador del cliente',
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'nombre del cliente',
  `apPaterno` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'apellido paterno del cliente',
  `apMaterno` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'apellido materno del cliente',
  `email` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'email para respuesta de los veredictos',
  `puesto` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'puesto que ocupa dentro de la institución',
  `fechaRegistro` date NOT NULL COMMENT 'fecha en la que se registró en el sistema',
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'usuario de la cuenta para acceso al sistema ',
  `password` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'contraseña de la cuenta para acceso al sistema',
  `estadoCuenta` int(1) NOT NULL DEFAULT '0' COMMENT 'si la cuenta fue aceptada o no',
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Clientes que soliciten salas del centro de computo' AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `Cliente`
--

INSERT INTO `Cliente` (`idCliente`, `nombre`, `apPaterno`, `apMaterno`, `email`, `puesto`, `fechaRegistro`, `usuario`, `password`, `estadoCuenta`) VALUES
(1, 'Jose Ramon', 'Martinez', 'Lara', 'jose@gmail.com', 'Jefe de Depto. Mecanica', '2015-10-30', 'JoseRa', '12345', 0),
(4, 'Luis', 'Perez', 'MuÃ±oz', 'mimo_perez94@hotmail.com', 'DIRECTOR GRAL', '2015-11-10', '', '', 0),
(6, 'Luis', 'Miron', 'Garcia', 'srmw@gmail.com', 'KI', '2015-11-10', '', '', 0),
(7, 'cesar', 'cordoba', 'morales', 'qwerty@erty', 'estudiante', '2015-11-10', '', '', 0),
(8, 'Ivan', 'Romero', 'Garcia', 'ivan_archer93@hotmail.com', 'DIRECTOR GRAL', '2015-11-10', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
