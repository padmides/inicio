-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-09-2020 a las 23:25:23
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `desus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `plan` varchar(10) NOT NULL,
  `monto` int(5) NOT NULL,
  `fecha_alta` date NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `3mes` int(5) NOT NULL,
  `6mes` int(5) NOT NULL,
  `12mes` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `plan`, `monto`, `fecha_alta`, `fecha_vencimiento`, `3mes`, `6mes`, `12mes`) VALUES
(1, 'Martin', 'Plan B', 1500, '2020-07-24', '2020-08-24', 15, 10, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobros`
--

DROP TABLE IF EXISTS `cobros`;
CREATE TABLE IF NOT EXISTS `cobros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(5) NOT NULL,
  `vencimiento` date NOT NULL,
  `pago` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturacion`
--

DROP TABLE IF EXISTS `facturacion`;
CREATE TABLE IF NOT EXISTS `facturacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) DEFAULT NULL,
  `descripcion` text,
  `monto` text,
  `fecha_pagar` date DEFAULT NULL,
  `fecha_cobro` date DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facturacion`
--

INSERT INTO `facturacion` (`id`, `id_cliente`, `descripcion`, `monto`, `fecha_pagar`, `fecha_cobro`, `estado`) VALUES
(1, 1, 'Paga mes de septiembre', '1.500,00', '2020-09-24', NULL, 'apagar'),
(2, 1, 'facturacion del mes agosto', '1.500,00', '2020-08-24', '2020-08-27', 'pagado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_facturacion`
--

DROP TABLE IF EXISTS `informacion_facturacion`;
CREATE TABLE IF NOT EXISTS `informacion_facturacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `telefono` text,
  `email` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `informacion_facturacion`
--

INSERT INTO `informacion_facturacion` (`id`, `nombre`, `telefono`, `email`) VALUES
(1, 'Desus Web', '+54 9 (341) 156659490', 'contacto@desusweb.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `contraseña` varchar(15) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contraseña`, `email`) VALUES
(1, 'maxhy', 'maxhy_123', 'angelimaximiliano@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
