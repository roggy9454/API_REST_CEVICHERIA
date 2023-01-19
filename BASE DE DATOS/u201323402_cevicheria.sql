-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-12-2022 a las 14:00:47
-- Versión del servidor: 10.5.12-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u201323402_cevicheria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `cedula_cliente` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_cliente` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido_cliente` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono_cliente` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `cedula_cliente`, `nombre_cliente`, `apellido_cliente`, `telefono_cliente`) VALUES
(6, '1310639362', 'william', 'guadamud', '123456'),
(7, '1309169454', 'Isaias', 'Betacnourt', 'Olives');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `id_informacion` int(11) NOT NULL,
  `nombre_empresa` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mision` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valores` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`id_informacion`, `nombre_empresa`, `mision`, `vision`, `valores`) VALUES
(1, 'Cevichería del negro Betancourt', 'Formar profesionales competentes y emprendedores desde lo académico, la investigación, y la vinculación, que contribuyan a mejorar la calidad de vida de la sociedad.', 'Ser un referente nacional e internacional de Institución de Educación Superior que contribuye al desarrollo social, cultural y productivo con profesionales éticos, creativos, cualificados y con sentido de pertinencia.', 'La Universidad Laica “Eloy Alfaro” de Manabí, creada mediante Ley No. 10 publicada en el Registro Oficial No. 313 de noviembre 13 de 1985, es una institución de Educación Superior, con personería jurídica de derecho público sin fines de lucro, de carácter laico, autónoma, democrática, pluralista, crítica y científica.La Universidad Laica “Eloy Alfaro” de Manabí tiene su sede en Manta, una de las cinco principales ciudades del Ecuador, ciudad ribereña al mar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numero`
--

CREATE TABLE `numero` (
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `numero`
--

INSERT INTO `numero` (`numero`) VALUES
(7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio_producto` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_producto` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `precio_producto`, `foto_producto`) VALUES
(1, 'Ceviche de Camarón', '8.00', 'foto1_n.jpg'),
(3, 'Ceviche de Pescado', '7.50', 'foto3_b.jpg'),
(5, 'Ceviche Mixto', '10.00', 'foto5_5.jpg'),
(6, 'Arroz Marinero', '10.00', 'foto6_o.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedores`
--

CREATE TABLE `provedores` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion_proveedor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mision_proveedor` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vision_proveedor` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `provedores`
--

INSERT INTO `provedores` (`id_proveedor`, `nombre_proveedor`, `descripcion_proveedor`, `mision_proveedor`, `vision_proveedor`) VALUES
(2, 'proveedor 12', 'prueba de ingreso de informacion xdd', 'La misión de una empresa se define como la razón principal por la cual esta existe, es decir, cuál es su propósito u objetivo y cuál es su función dentro de la sociedad.', 'La visión permite definir el camino que se debe seguir para alcanzar las metas propuestas. Para ello, debe representar de una forma clara y realista los principios que dan una identidad a esta empresa'),
(4, 'proveedor 3', 'Si se especifica el length y es positivo, la cadena devuelta contendrá como máximo de caracteres de ', 'Devuelve la parte extraída del string, o FALSE en caso de error o un string vacío.', 'Si se omite el length, la subcadena empezará por start hasta el final de la cadena donde será devuelta.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`id_informacion`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `provedores`
--
ALTER TABLE `provedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `id_informacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `provedores`
--
ALTER TABLE `provedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
