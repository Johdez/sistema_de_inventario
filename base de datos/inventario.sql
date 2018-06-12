-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2018 a las 07:25:42
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `codigoC` int(4) unsigned zerofill NOT NULL DEFAULT '0000',
  `nombreC` varchar(50) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`codigoC`, `nombreC`, `tipo`) VALUES
(0114, 'EQUIPO DE CÃ“MPUTO', 'Equipo'),
(0718, 'RETROPROYECTOR MULTIMEDIA', 'Equipo'),
(1135, 'MESA', 'Mobiliario'),
(1146, 'PIZARRA', 'Mobiliario'),
(1165, 'SILLA', 'Mobiliario'),
(4442, 'IMPRESORA', 'Equipo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `codigoE` varchar(50) NOT NULL,
  `numero` int(4) unsigned zerofill DEFAULT NULL,
  `marca` varchar(40) DEFAULT NULL,
  `modelo` varchar(40) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `fechaR` date DEFAULT NULL,
  `fechaA` date DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `codigoC` int(11) unsigned zerofill DEFAULT NULL,
  `idSector` int(11) DEFAULT NULL,
  `codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`codigoE`, `numero`, `marca`, `modelo`, `valor`, `fechaR`, `fechaA`, `descripcion`, `estado`, `codigoC`, `idSector`, `codigo`) VALUES
('12072-0114-0001', 0001, 'HP', 'D530', 0, '2004-04-16', '2004-03-16', 'COMPUTADORA DE ESCRITORIO', 'Bueno', 00000000114, 3, 12072),
('12072-0114-0002', 0002, 'HP', 'D530', 0, '2016-05-01', '2016-05-01', 'COMPUTADORA DE ESCRITORIO', 'Bueno', 00000000114, 3, 12072);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE IF NOT EXISTS `institucion` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`codigo`, `nombre`) VALUES
(12072, 'Centro Escolar Dr. Joaquín Jule Gálvez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mobiliario`
--

CREATE TABLE IF NOT EXISTS `mobiliario` (
  `codigoM` varchar(50) NOT NULL,
  `numero` int(4) unsigned zerofill DEFAULT NULL,
  `marca` varchar(40) DEFAULT NULL,
  `modelo` varchar(40) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `fechaR` date DEFAULT NULL,
  `fechaA` date DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `codigoC` int(11) unsigned zerofill DEFAULT NULL,
  `idSector` int(11) DEFAULT NULL,
  `codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mobiliario`
--

INSERT INTO `mobiliario` (`codigoM`, `numero`, `marca`, `modelo`, `valor`, `fechaR`, `fechaA`, `descripcion`, `estado`, `codigoC`, `idSector`, `codigo`) VALUES
('12072-1135-0001', 0001, 'S/M', 'S/M', 125.75, '2002-04-29', '2002-03-27', 'MESA PARA EQUIPO DE CÃ“MPUTO', 'Bueno', 00000001135, 3, 12072),
('12072-1165-0001', 0001, 'Ergonomica', '2134', 55, '2018-06-01', '2018-05-30', 'Silla de Cuero', 'Bueno', 00000001165, 3, 12072);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector`
--

CREATE TABLE IF NOT EXISTS `sector` (
  `idSector` int(11) NOT NULL,
  `codigoS` varchar(50) DEFAULT NULL,
  `nombreS` varchar(50) DEFAULT NULL,
  `codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sector`
--

INSERT INTO `sector` (`idSector`, `codigoS`, `nombreS`, `codigo`) VALUES
(1, '1', 'DIRECCIÃ“N', 12072),
(2, '2', 'SUB-DIRECCIÃ“N', 12072),
(3, '3', 'CRA', 12072);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(60) DEFAULT NULL,
  `apellidos` varchar(60) DEFAULT NULL,
  `dui` varchar(20) DEFAULT NULL,
  `direccion` varchar(80) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `telefono` varchar(12) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usuario` varchar(10) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `rol` varchar(25) DEFAULT NULL,
  `codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `dui`, `direccion`, `fecha_nacimiento`, `telefono`, `sexo`, `email`, `usuario`, `password`, `rol`, `codigo`) VALUES
(1, 'Administrador', 'Administrador', '00000000-6', 'Santiago Nonualco', '2013-01-10', '00000000', 'M', 'admin@admin', 'admin', 'admin', 'admin', 12072),
(2, 'Franklin Leonel ', 'GÃ³mez Barahona', '01234567-8', 'Santiago Nonualco', '1979-03-31', '77190255', 'M', 'leogo310379@gmail.com', 'leo', 'leo', 'estandar', 12072),
(3, 'Sandra Marlene', 'Rodríguez de Torres', '02478417-5', 'Santiago Nonualco', '1969-05-20', '7414-8567', 'F', 'sandra.mrdtorres@gmail.com', 'sandra', 'sandra', 'estandar', 12072);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
 ADD PRIMARY KEY (`codigoC`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
 ADD PRIMARY KEY (`codigoE`), ADD KEY `idSector` (`idSector`), ADD KEY `codigo` (`codigo`), ADD KEY `codigoC` (`codigoC`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
 ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `mobiliario`
--
ALTER TABLE `mobiliario`
 ADD PRIMARY KEY (`codigoM`), ADD KEY `idSector` (`idSector`), ADD KEY `codigo` (`codigo`), ADD KEY `codigoC` (`codigoC`);

--
-- Indices de la tabla `sector`
--
ALTER TABLE `sector`
 ADD PRIMARY KEY (`idSector`), ADD KEY `codigo` (`codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id_usuario`), ADD KEY `codigo` (`codigo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
ADD CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`codigoC`) REFERENCES `categoria` (`codigoC`),
ADD CONSTRAINT `equipo_ibfk_2` FOREIGN KEY (`idSector`) REFERENCES `sector` (`idSector`),
ADD CONSTRAINT `equipo_ibfk_3` FOREIGN KEY (`codigo`) REFERENCES `institucion` (`codigo`);

--
-- Filtros para la tabla `mobiliario`
--
ALTER TABLE `mobiliario`
ADD CONSTRAINT `mobiliario_ibfk_1` FOREIGN KEY (`codigoC`) REFERENCES `categoria` (`codigoC`),
ADD CONSTRAINT `mobiliario_ibfk_2` FOREIGN KEY (`idSector`) REFERENCES `sector` (`idSector`),
ADD CONSTRAINT `mobiliario_ibfk_3` FOREIGN KEY (`codigo`) REFERENCES `institucion` (`codigo`);

--
-- Filtros para la tabla `sector`
--
ALTER TABLE `sector`
ADD CONSTRAINT `sector_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `institucion` (`codigo`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `institucion` (`codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
