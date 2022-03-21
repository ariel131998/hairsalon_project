-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 21-03-2022 a las 17:38:12
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hairsalon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `servicio` int(11) NOT NULL,
  `costo` double NOT NULL,
  `tiempo` int(11) NOT NULL,
  `cita` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `usuario`, `servicio`, `costo`, `tiempo`, `cita`) VALUES
(1, 'ariel', 1, 100, 1, '2022-03-09 15:00:00'),
(2, 'jorge', 2, 200, 2, '2022-03-07 10:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `servicio` varchar(30) NOT NULL,
  `costo` float NOT NULL,
  `tiempo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `servicio`, `costo`, `tiempo`) VALUES
(1, 'Corte de cabello Hombre', 100, 1),
(2, 'Corte de cabello Dama', 100, 1),
(3, 'Coloración de cabello', 600, 3),
(4, 'Corte de barba', 100, 1),
(5, 'Peinado Dama', 500, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_login`
--

CREATE TABLE `usuarios_login` (
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) DEFAULT NULL,
  `ApellidoM` varchar(30) NOT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `correo` varchar(30) NOT NULL,
  `celular` varchar(12) NOT NULL,
  `fecha_registro` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_login`
--

INSERT INTO `usuarios_login` (`usuario`, `contrasena`, `Nombre`, `Apellido`, `ApellidoM`, `direccion`, `correo`, `celular`, `fecha_registro`) VALUES
('abi13', 'au', 'aoua', 'aoeuao', 'aouau', 'uoaouaououuaouao', 'prueba@gmail.com', '2221234323', '2022-02-26'),
('ariel', 'ariel13', 'ariel', 'ortega', 'zitle', 'Monaco 59 bosques del pilar', 'aririno13@gmail.com', '2228231832', '2022-02-25'),
('jorge', 'preuoba', 'jorge', 'ortega', 'herrerias', 'monaco 12 ubos 1231', 'jorge@gmail.com', '1234567890', '2022-02-26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_login`
--
ALTER TABLE `usuarios_login`
  ADD PRIMARY KEY (`usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
