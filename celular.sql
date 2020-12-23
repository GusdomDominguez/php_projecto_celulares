-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-12-2020 a las 02:42:20
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
-- Base de datos: `ventacelulares`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celular`
--

CREATE TABLE `celular` (
  `id` int(11) NOT NULL,
  `nombre` varchar(512) NOT NULL,
  `descripcion` longtext DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(2048) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `celular`
--

INSERT INTO `celular` (`id`, `nombre`, `descripcion`, `precio`, `imagen`) VALUES
(9, 'Samsung', 'Samsung es un conglomerado de empresas multinacionales con sede en Seúl, Corea del Sur. Se trata del mayor grupo empresarial surcoreano, con numerosas filiales que abarcan negocios como la electrónica de consumo, tecnología, finanzas, aseguradoras, construcción, biotecnología y sector servicios.​', '5000.00', 'images/hww6to10.jpg'),
(11, 'Xiaomi', 'Los móviles Xiaomi son de muy buena calidad, pero eso no significa tener que dejarte riñón y medio. A excepción de los móviles más punteros de la serie Mi, como los Mi 10 y Mi 10 Pro, los móviles de Xiaomi están entre los más baratos del mercado. Redmi Note 8T, uno de los móviles más populares de Xiaomi.', '4000.00', 'images/dape44ar.jpg'),
(12, 'Motorola', 'Motorola Mobility LLC, comercializada como Motorola, es una empresa estadounidense de telecomunicaciones y electrónica de consumo y filial del conglomerado tecnológico chino Lenovo. La compañía fabrica principalmente teléfonos inteligentes y otros dispositivos móviles que ejecutan el sistema operativo Android.', '3000.00', 'images/3iy5weir.jpg'),
(13, 'Oneplus', 'OnePlus es una compañía fabricante de teléfonos inteligentes. Fue fundada en 2013 y su actual sede se encuentra en Shenzhen, China. ', '3500.00', 'images/jc3la1h6.jpg'),
(14, 'Iphone', 'iPhone es una línea de teléfonos inteligentes de alta gama diseñada y comercializada por Apple Inc. Ejecuta el sistema operativo móvil iOS, conocido hasta mediados de 2010 como \"iPhone OS\".\r\n', '8000.00', 'images/6mcm1nft.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `celular`
--
ALTER TABLE `celular`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `celular`
--
ALTER TABLE `celular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
