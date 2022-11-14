-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 14-11-2022 a las 17:20:13
-- Versión del servidor: 5.7.34
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_murallas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno`
--

CREATE TABLE `Alumno` (
  `id_alumno` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `nombreA` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidosA` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `expediente` int(6) NOT NULL,
  `telefonoA` varchar(12) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `emailA` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `Alumno`
--

INSERT INTO `Alumno` (`id_alumno`, `id_grupo`, `nombreA`, `apellidosA`, `expediente`, `telefonoA`, `emailA`) VALUES
(1, 1, 'Eduardo', 'Gómez Lora', 266, '87653535', 'eduardo@cifp.es'),
(8, 3, 'Paco', 'Merlo', 8374, '654212121', 'paco@email.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Grupo`
--

CREATE TABLE `Grupo` (
  `id_grupo` int(11) NOT NULL,
  `nombreGrupo` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `curso` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `Grupo`
--

INSERT INTO `Grupo` (`id_grupo`, `nombreGrupo`, `curso`) VALUES
(1, 'DAW', '2022/2023'),
(3, 'DAM', '2022/2023'),
(9, 'ASIRE', '2022/2023'),
(11, 'MKT', '2022/2023'),
(12, 'DIRECCIÓN', '2022/2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Profesor`
--

CREATE TABLE `Profesor` (
  `id_profesor` int(11) NOT NULL,
  `nombreP` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidosP` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefonoP` varchar(12) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `emailP` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `Profesor`
--

INSERT INTO `Profesor` (`id_profesor`, `nombreP`, `apellidosP`, `telefonoP`, `emailP`) VALUES
(3, 'Álvaro', 'Gil Andujar', '9564343433', 'agil@cifp.es'),
(4, 'Ricarda', 'Aroca Ros', 'no tiene', 'ricardoaroca@murallas.es'),
(5, 'manolo', 'Lama', '765454545', 'mlama@cifp.com'),
(6, 'Pepe', 'Escalante', '978656565', 'pepe@email.com'),
(7, 'Paquito', 'Yamaha', '978676767', 'pyamaha@email.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tutoria`
--

CREATE TABLE `Tutoria` (
  `id_grupo` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `Tutoria`
--

INSERT INTO `Tutoria` (`id_grupo`, `id_profesor`) VALUES
(9, 4),
(11, 6),
(1, 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `Grupo`
--
ALTER TABLE `Grupo`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `Profesor`
--
ALTER TABLE `Profesor`
  ADD PRIMARY KEY (`id_profesor`);

--
-- Indices de la tabla `Tutoria`
--
ALTER TABLE `Tutoria`
  ADD PRIMARY KEY (`id_grupo`,`id_profesor`),
  ADD KEY `Tutoria_ibfk_2` (`id_profesor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `Grupo`
--
ALTER TABLE `Grupo`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `Profesor`
--
ALTER TABLE `Profesor`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD CONSTRAINT `Alumno_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `Grupo` (`id_grupo`);

--
-- Filtros para la tabla `Tutoria`
--
ALTER TABLE `Tutoria`
  ADD CONSTRAINT `Tutoria_ibfk_2` FOREIGN KEY (`id_profesor`) REFERENCES `Profesor` (`id_profesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Tutoria_ibfk_3` FOREIGN KEY (`id_grupo`) REFERENCES `Grupo` (`id_grupo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
