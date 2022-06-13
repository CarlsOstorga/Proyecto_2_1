-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2021 a las 23:46:40
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `c022021`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `codciudad` char(3) NOT NULL,
  `nomciudad` varchar(50) NOT NULL,
  `poblacion` int(11) NOT NULL,
  `coddepto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`codciudad`, `nomciudad`, `poblacion`, `coddepto`) VALUES
('soy', 'Soyapango', 250000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `codcliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `codciudad` char(3) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `estado` char(1) NOT NULL DEFAULT 'A',
  `usuario` varchar(25) NOT NULL,
  `clave` varchar(25) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `tipocliente` varchar(7) NOT NULL DEFAULT 'cliente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`codcliente`, `nombre`, `direccion`, `codciudad`, `telefono`, `correo`, `estado`, `usuario`, `clave`, `apellido`, `dui`, `tipocliente`) VALUES
(1, 'Juan Perez', 'Utec', 'soy', '2222-2323', 'mail@mail.com', 'A', 'juan.perez', '12345', '', '', 'cliente'),
(2, 'Alan', 'NO', 'soy', '', 'alan@mail.com', 'A', 'alan.parker', '12345', 'Parker', '12', 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `coddepto` int(11) NOT NULL,
  `nomdepto` varchar(50) NOT NULL,
  `municipios` int(11) NOT NULL,
  `poblacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`coddepto`, `nomdepto`, `municipios`, `poblacion`) VALUES
(1, 'San Salvador', 54, 1000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `producto` varchar(150) NOT NULL,
  `existencia` varchar(6) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `categoria` varchar(4) NOT NULL,
  `tamano` varchar(100) NOT NULL,
  `resolucion` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `existencia`, `precio`, `categoria`, `tamano`, `resolucion`, `descripcion`, `imagen`) VALUES
(1, 'Mortal Kombat 11', '4', '30.50', 'comb', '120 gb', 'Full HD, 4k', 'Disfuta de MORTAL KOMBAT 11 en su maximo explendor y juega con amigos y demuestra tus habilidades en el combate.', 'mk11.jpg'),
(2, 'FIFA 2021', '4', '30.95', 'Desp', '90 gb', 'Full HD, 4k', 'Disfuta de FIFA 2021, juega con amigos y demuestra tus habilidades en el deporte del futbol, elije tus jugadores y ve por el trofeo.', 'fifa_21.jpg'),
(3, 'Need for Speed N.L.', '4', '23.65', 'Carr', '90 gb', 'Full HD, 4k', 'Disfuta de NEED FOR EPEED NO LIMITS, juega con amigos y demuestra tus habilidades en las calles, conduce por la gloria, juega com tus amigos y compite por la victoria.', 'nfp_2.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`codciudad`),
  ADD KEY `coddepto` (`coddepto`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codcliente`),
  ADD KEY `codciudad` (`codciudad`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`coddepto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `codcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `coddepto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `ciudades_ibfk_1` FOREIGN KEY (`coddepto`) REFERENCES `departamentos` (`coddepto`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`codciudad`) REFERENCES `ciudades` (`codciudad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
