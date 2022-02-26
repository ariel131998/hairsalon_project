-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2022 a las 21:46:15
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

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
-- Estructura de tabla para la tabla `usuarios_login`
--

CREATE TABLE `usuarios_login` (
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `metodo` varchar(40) DEFAULT NULL,
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

INSERT INTO `usuarios_login` (`usuario`, `contrasena`, `metodo`, `Nombre`, `Apellido`, `ApellidoM`, `direccion`, `correo`, `celular`, `fecha_registro`) VALUES
('ariel', '689150106b3524a078a0ef39190456', 'sha1', '', NULL, '', NULL, '', '', '2022-02-25'),
('ortega', 'f6f9ada5616798aa9e0ba80c7f1857', 'md5', '', NULL, '', NULL, '', '', '2022-02-25'),
('zitle', 'ariel1304', 'texto', '', NULL, '', NULL, '', '', '2022-02-25');

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
