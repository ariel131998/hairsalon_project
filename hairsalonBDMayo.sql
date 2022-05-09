-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 09-05-2022 a las 23:05:48
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
  `servicio` varchar(50) NOT NULL,
  `costo` double NOT NULL,
  `tiempo` int(11) NOT NULL,
  `cita` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `usuario`, `servicio`, `costo`, `tiempo`, `cita`) VALUES
(1, 'ariel', '1', 100, 1, '2022-03-09 15:00:00'),
(2, 'jorge', '2', 200, 2, '2022-03-07 10:00:00'),
(30, 'ariel', 'Corte de cabello Dama', 100, 1, '2022-04-11 14:04:00'),
(31, 'ariel', 'Corte de cabello Dama', 100, 1, '2022-04-11 19:57:00'),
(33, 'ariel', 'Coloración de cabello', 600, 3, '2022-04-11 20:03:00'),
(34, 'ariel', '', 0, 0, '2022-04-11 20:04:00'),
(35, 'ariel', 'Coloración de cabello', 600, 3, '2022-05-04 19:58:00'),
(36, 'ariel', 'Coloración de cabello', 600, 3, '2022-05-04 19:58:00'),
(37, 'ariel', 'Coloración de cabello', 600, 3, '2022-05-02 21:39:00'),
(38, 'ariel', '', 0, 0, '2022-05-04 12:32:00'),
(39, 'ariel', 'Depilado ceja', 100, 1, '2022-05-10 14:00:00'),
(40, 'ariel', 'Corte de cabello Dama', 100, 1, '2022-05-12 15:00:00'),
(41, 'ariel', 'Peinado Dama', 500, 1, '2022-05-12 17:00:00'),
(42, 'ariel', 'Corte de cabello Dama', 100, 1, '2022-05-09 16:00:00'),
(43, 'ariel', 'Pintar unas', 200, 3, '2022-05-12 18:00:00'),
(44, 'ariel', 'Pintar unas', 200, 3, '2022-05-13 15:00:00'),
(45, 'ariel', 'Depilado ceja', 100, 1, '2022-05-13 16:00:00');

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
(5, 'Peinado Dama', 500, 1),
(7, 'Pintar unas', 200, 3),
(9, 'Depilado ceja', 100, 1);

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
('admin', 'admin', 'Admin', '', '', NULL, 'admin@gmail.com', '', '0000-00-00'),
('ariel', 'ariel13', 'ariel', 'ortega', 'zitle', 'Monaco 59 bosques del pilar', 'aririno13@gmail.com', '2228231832', '2022-02-25'),
('pruebaRegistro', '123456', 'Prueba', 'Final', 'Pagina', 'Prueba 21 Lomas 21', 'prueba@gmail.com', '2221322212', '2022-05-09');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
