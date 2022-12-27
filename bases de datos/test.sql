-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2022 a las 18:25:54
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
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `celular` varchar(250) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `estrato` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `correo`, `celular`, `cedula`, `estrato`) VALUES
(680, 'Alex puti', 'alexsarriahenao.2307@gmail.com', '3112781478', '3112781478', '1'),
(2734, 'andres', 'contreraslopezandresdavid@gmail.com', '3053324345', '248986', '2'),
(2735, 'andres', 'contreraslopezandresdavid@gmail.com', '3114330777', '548', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculoclientes`
--

CREATE TABLE `vehiculoclientes` (
  `id` int(11) NOT NULL,
  `tipo` varchar(250) NOT NULL,
  `marca` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `version` varchar(250) NOT NULL,
  `serie` varchar(250) NOT NULL,
  `matricula` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculoclientes`
--

INSERT INTO `vehiculoclientes` (`id`, `tipo`, `marca`, `modelo`, `version`, `serie`, `matricula`) VALUES
(2734, 'Furgoneta', 'renault', '455', '15wsqwq', '65wewdwe', '5989hxhtsr');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viviendaclientes`
--

CREATE TABLE `viviendaclientes` (
  `id` int(11) NOT NULL,
  `departamento` varchar(250) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `cedula` varchar(250) NOT NULL,
  `serie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `viviendaclientes`
--

INSERT INTO `viviendaclientes` (`id`, `departamento`, `nombre`, `correo`, `direccion`, `cedula`, `serie`) VALUES
(2735, 'Cordoba', 'andres', 'contreraslopezandresdavid@gmail.com', 'tierralta', '1003073979', '65'),
(2736, 'Tolima', 'andres d', 'elias@gmail.com', 'tierralta', '32989944', '65');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculoclientes`
--
ALTER TABLE `vehiculoclientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `viviendaclientes`
--
ALTER TABLE `viviendaclientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2736;

--
-- AUTO_INCREMENT de la tabla `vehiculoclientes`
--
ALTER TABLE `vehiculoclientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2735;

--
-- AUTO_INCREMENT de la tabla `viviendaclientes`
--
ALTER TABLE `viviendaclientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2737;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
