-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2020 a las 02:16:03
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `plan` varchar(10) NOT NULL,
  `monto` int(5) NOT NULL,
  `fecha_alta` date NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `3mes` int(5) NOT NULL,
  `6mes` int(5) NOT NULL,
  `12mes` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `plan`, `monto`, `fecha_alta`, `fecha_vencimiento`, `3mes`, `6mes`, `12mes`) VALUES
(1, 'Martin', 'Plan B', 1500, '2020-07-24', '2020-08-24', 15, 10, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobros`
--

CREATE TABLE `cobros` (
  `id` int(11) NOT NULL,
  `id_cliente` int(5) NOT NULL,
  `vencimiento` date NOT NULL,
  `pago` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturacion`
--

CREATE TABLE `facturacion` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `monto` text DEFAULT NULL,
  `fecha_pagar` date DEFAULT NULL,
  `fecha_cobro` date DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `informacion_facturacion` (
  `id` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `telefono` text DEFAULT NULL,
  `email` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `informacion_facturacion`
--

INSERT INTO `informacion_facturacion` (`id`, `nombre`, `telefono`, `email`) VALUES
(1, 'Desus Web', '+54 9 (341) 156659490', 'contacto@desusweb.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `contraseña` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `tipo` int(1) NOT NULL,
  `domicilio` text NOT NULL,
  `localidad` text NOT NULL,
  `cuit` text NOT NULL,
  `telefono` int(11) NOT NULL,
  `razon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contraseña`, `email`, `tipo`, `domicilio`, `localidad`, `cuit`, `telefono`, `razon`) VALUES
(1, 'maxhy', 'maxhy_123', 'angelimaximiliano@gmail.com', 1, '', '', '', 0, ''),
(2, 'juan', '1', 'juanpabloruizbre@gmail.com', 1, 'Corrientes 5780', 'Rosario', '20-38905672-4', 2147483647, 'EMPRESA JP');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cobros`
--
ALTER TABLE `cobros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facturacion`
--
ALTER TABLE `facturacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informacion_facturacion`
--
ALTER TABLE `informacion_facturacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cobros`
--
ALTER TABLE `cobros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `facturacion`
--
ALTER TABLE `facturacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `informacion_facturacion`
--
ALTER TABLE `informacion_facturacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
