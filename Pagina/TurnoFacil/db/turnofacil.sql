-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2022 a las 18:29:10
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.22

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
  `obra_social` int(11) NOT NULL,
  `medico_dni` int(30) NOT NULL,
  `especialidad` varchar(50) NOT NULL,
  `id_secretaria` int(11) NOT NULL,
  `inicio_horario_atencion` time NOT NULL,
  `fin_horario_atencion` time NOT NULL,
  `contrasenia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`nro_matricula`, `medico_nombre`, `medico_apellido`, `obra_social`, `medico_dni`, `especialidad`, `id_secretaria`, `inicio_horario_atencion`, `fin_horario_atencion`, `contrasenia`) VALUES
(150448, 'Curtice', 'Illiston', 1, 16764263, 'Oftalmologia', 0, '08:00:00', '16:00:00', 'NVdy8X98LZc'),
(159015, 'Zacharias', 'Vasilenko', 1, 23347742, 'Odontologia', 0, '08:00:00', '16:00:00', 'WNW4SgHA'),
(185337, 'Brander', 'Mundle', 4, 37287103, 'Oftalmologia', 0, '08:00:00', '16:00:00', 'iHQQKc8869Wm'),
(290340, 'Lina', 'Tames', 2, 35127199, 'Pediatria', 0, '08:00:00', '16:00:00', 'VP2uPoRbYjI'),
(290480, 'Titus', 'Harbord', 1, 38309690, 'Pediatria', 0, '08:00:00', '16:00:00', '32l8Bi'),
(308343, 'Teddi', 'Bunstone', 2, 32310190, 'Otorrinolaringologia', 0, '08:00:00', '16:00:00', 'e2k5ExF3'),
(322491, 'Chad', 'Klemps', 4, 39968623, 'Odontologia', 0, '08:00:00', '16:00:00', '61nDJm'),
(330956, 'Myles', 'Mankor', 4, 35572155, 'Otorrinolaringologia', 0, '08:00:00', '16:00:00', '5uCEoQ2g8'),
(344042, 'Thaxter', 'Woloschin', 4, 17092412, 'Pediatria', 0, '08:00:00', '16:00:00', 'TZcYsYBW0I'),
(385739, 'Violetta', 'Erskin', 1, 16153350, 'Otorrinolaringologia', 0, '08:00:00', '16:00:00', 'JEUZXgWuUZI');

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
  `nro_matricula` int(11) NOT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `horario_turno` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `duracion_turno` time NOT NULL DEFAULT '01:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`id_turno`, `nro_matricula`, `id_paciente`, `horario_turno`, `duracion_turno`) VALUES
(3, 185337, NULL, '2022-06-01 18:44:14', '00:30:00'),
(4, 185337, 2, '2022-05-31 22:44:14', '00:30:00'),
(5, 322491, NULL, '2022-05-31 19:44:14', '00:30:00'),
(6, 185337, NULL, '2022-06-01 16:29:16', '00:30:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`nro_matricula`),
  ADD KEY `obra_social` (`obra_social`);

--
-- Indices de la tabla `obrasocial`
--
ALTER TABLE `obrasocial`
  ADD PRIMARY KEY (`id_obra_social`),
  ADD KEY `id_obra_social` (`id_obra_social`);

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
  ADD PRIMARY KEY (`id_turno`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `nro_matricula` (`nro_matricula`);

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
  MODIFY `id_turno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `medico_ibfk_1` FOREIGN KEY (`obra_social`) REFERENCES `obrasocial` (`id_obra_social`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`paciente_obra_social`) REFERENCES `obrasocial` (`id_obra_social`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `turno`
--
ALTER TABLE `turno`
  ADD CONSTRAINT `turno_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `turno_ibfk_2` FOREIGN KEY (`nro_matricula`) REFERENCES `medico` (`nro_matricula`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
