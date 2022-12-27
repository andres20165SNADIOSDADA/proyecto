-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2022 a las 18:26:23
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulariocotizacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cedula` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `estrato` int(10) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vida`
--

CREATE TABLE `vida` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `estrato` int(2) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vida`
--

INSERT INTO `vida` (`id`, `nombre`, `cedula`, `email`, `celular`, `estrato`, `direccion`) VALUES
(34, 'andres', '1003073979', 'contreraslopezandresdavid@gmail.com', '3053324345', 1, 'tierralta'),
(50, 'andres', 'rrgtr', 'contreraslopezandresdavid@gmail.com', '3053324345', 1, 'lorica'),
(57, 'andres', '1003073979', 'contreraslopezandresdavid@gmail.com', '3053324345', 52, 'tierralta'),
(65, 'andres', '1003073979', 'contreraslopezandresdavid@gmail.com', '3053324345', 1, 'tierralta'),
(70, 'elias', '1003073979', 'contreraslopezandresdavid@gmail.com', '3053324345', 1, 'tierralta'),
(82, 'andres', '1003073979', 'contreraslopezandresdavid@gmail.com', '3053324345', 1, 'tierralta'),
(86, 'elias', 'rrgtr', 'contreraslopezandresdavid@gmail.com', '3053324345', 1, 'tierralta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivienda`
--

CREATE TABLE `vivienda` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cedula` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `estrato` int(10) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vida`
--
ALTER TABLE `vida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `vida`
--
ALTER TABLE `vida`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
