-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 27-02-2022 a las 01:35:12
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
  `usuario` varchar(20) NOT NULL,
  `servicio` int(11) NOT NULL,
  `costo` double NOT NULL,
  `tiempo` int(11) NOT NULL,
  `cita` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indices de la tabla `usuarios_login`
--
ALTER TABLE `usuarios_login`
  ADD PRIMARY KEY (`usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
