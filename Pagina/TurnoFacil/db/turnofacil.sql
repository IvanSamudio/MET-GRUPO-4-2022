-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2022 a las 02:46:52
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turnofacil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `nro_matricula` int(11) NOT NULL,
  `medico_nombre` varchar(30) NOT NULL,
  `medico_apellido` varchar(30) NOT NULL,
  `obra_social` int(11) DEFAULT NULL,
  `medico_dni` int(30) NOT NULL,
  `especialidad` varchar(50) NOT NULL,
  `id_secretaria` int(11) NOT NULL,
  `horario_medico` varchar(20) NOT NULL,
  `contrasenia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`nro_matricula`, `medico_nombre`, `medico_apellido`, `obra_social`, `medico_dni`, `especialidad`, `id_secretaria`, `horario_medico`, `contrasenia`) VALUES
(125449, 'María Renata', 'Oborski', NULL, 12645837, 'Dermatología', 0, '', ''),
(346657, 'Verónica', 'Cameroni', NULL, 20387625, 'Traumatología', 0, '', ''),
(898763, 'Leandro Daniel', 'Bosnic', NULL, 30298111, 'Traumatología', 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obrasocial`
--

CREATE TABLE `obrasocial` (
  `id_obra_social` int(30) NOT NULL,
  `nombre_obra_social` varchar(30) NOT NULL,
  `cobertura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `obrasocial`
--

INSERT INTO `obrasocial` (`id_obra_social`, `nombre_obra_social`, `cobertura`) VALUES
(1, 'Osde', 100),
(2, 'Swiss Medical', 80),
(4, 'SanCor Salud', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) NOT NULL,
  `paciente_nombre` varchar(20) NOT NULL,
  `paciente_apellido` varchar(20) NOT NULL,
  `paciente_direccion` varchar(30) NOT NULL,
  `paciente_telefono` bigint(20) NOT NULL,
  `paciente_email` varchar(50) NOT NULL,
  `paciente_obra_social` int(11) DEFAULT NULL,
  `paciente_nro_afiliado` bigint(20) NOT NULL,
  `paciente_dni` bigint(20) NOT NULL,
  `paciente_contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `paciente_nombre`, `paciente_apellido`, `paciente_direccion`, `paciente_telefono`, `paciente_email`, `paciente_obra_social`, `paciente_nro_afiliado`, `paciente_dni`, `paciente_contraseña`) VALUES
(1, 'Lucia', 'Blanco', 'Arana 668', 2494878033, 'luciablanco995@gmail.com', NULL, 32123, 39198625, ''),
(2, 'Beltran', 'Peña', 'Uriburu 400', 2494225671, 'peñabeltran@gmail.com', 1, 23658, 41598625, ''),
(3, 'Ayelen', 'Bailey', 'Roca 200', 2494372111, 'ABailey@gmail.com', NULL, 51187, 42592332, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id_turno` int(11) NOT NULL,
  `nro_matricula` int(30) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `horario_turno` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`nro_matricula`);

--
-- Indices de la tabla `obrasocial`
--
ALTER TABLE `obrasocial`
  ADD PRIMARY KEY (`id_obra_social`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`),
  ADD KEY `FK_OBRA_SOCIAL` (`paciente_obra_social`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id_turno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `obrasocial`
--
ALTER TABLE `obrasocial`
  MODIFY `id_obra_social` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id_turno` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `FK_OBRA_SOCIAL` FOREIGN KEY (`paciente_obra_social`) REFERENCES `obrasocial` (`id_obra_social`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
