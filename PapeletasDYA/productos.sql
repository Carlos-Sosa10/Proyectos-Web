-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2020 a las 19:57:32
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `producciondya`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `producto` varchar(350) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo`, `producto`, `cantidad`) VALUES
('FMX04834	 	', 'JAB PROTEX DOYPAK 500ML					 					 					 					', '51 CAJAS C/12PZAS					 					 					'),
('FMX05307A	 	', 'LHS PROTEX BALANCE DOYPK 250 ML					 					 					 					', '60 CAJAS C/24PZAS					 					 					'),
('FMX91731	 	', 'NEUTRO BALANCE CREMA CJA C/12 PZAS					 					 					 					', '78 CAJAS C/12PZAS					 					 					'),
('MPT0032	 	', 'GEL BACTEX 19 LT 					 					 					 					', '36 CAJAS C/1PZAS					 					 					'),
('MX01520A	 	', 'LHS PROTEX AVENA DOYPK 500 ML					 					 					 					', '51 CAJAS C/12PZAS					 					 					'),
('MX02168A', 'LHS PO AQUARIUM 7.5 OZ', '154 CAJAS C/12PZAS'),
('MX02310A	 	', 'PO AQUARIUM DOYPACK 500ML					 					 					 					', '51 CAJAS C/12PZAS					 					 					'),
('MX02364A	 	', 'GEL BAÑO PALMOLIVE MEN ENERGIZING 250 ML					 					 					 					', '160 CAJAS C/12PZAS					 					 					'),
('MX02411A	 	', 'SHAMPOO CAPRICE CERAMIDAS 					 					 					 				', '48 CAJAS C/6PZAS					 					 					'),
('MX02420A	 	', 'SHAMPOO CAPRICE CONTROL CAIDA					 					 					 					', '48 CAJAS C/6PZAS					 					 					'),
('MX02785A	 	', 'LSH PO NAT POMEGRANATE DOYPK 500 ML					 					 					 					', '51 CAJAS C/12PZAS					 					 					51 CAJAS C/12PZAS					 					 					'),
('MX02787A	 	', 'JA LIQ BACTEX AVENA Y MANZA 221 ML SACH					 					 					 					', '80 CAJAS C/24PZAS					 					 					'),
('MX02789A', 'BACTEX SEDA Y COLAGENO 221 ML', '80 CAJAS C/24PZAS'),
('MX02792A	 	', 'BACTEX ANTIBACTERIAL SABILA Y TE VERDE 221 ML					 					 					 					', '80 CAJAS C/24PZAS					 					 					'),
('MX02794A	 	', 'JA LIQ BACTEX FRUTO VERDE 200 ML SACH					 					 					 					', '80 CAJAS C/24PZAS					 					 					'),
('MX02796A	 	', 'JABON LIQ BACTEX SABILA Y TE VERDE 3.785 LT					 					 					 					', '36 CAJAS C/4PZAS					 					 					'),
('MX02798A	 	', 'GEL BACTEX 100ML CJA C/24 PZAS					 					 					 					', '171 CAJAS C/24PZAS					 					 					'),
('MX02799A', 'BACTEX ANTIBACTERIAL GEL 200ML', '90 CAJAS C/24PZAS'),
('MX02809A	 	', 'GEL BACTEX 1000ML CJA C/12 PZAS					 					 					 					', '33 CAJAS C/12PZAS					 					 					'),
('MX02947A	 	', 'SH PO NAT ANTICAIDA Y PROTEC CREC 300 ML					 					 					 					', '60 CAJAS C/18PZAS					 					 					'),
('MX02992A	 	', 'ACTI-CERAMIDAS COMPLETE 300 ML.					 					 					 					', '60 CAJAS C/18PZAS					 					 					'),
('MX03040A	 	', 'LSH PO NAT POMEGRANATE DOYPK 250 ML					 					 					 					', '60 CAJAS C/24PZAS					 					 					'),
('MX03179A', 'SG PO HOMBRE 3 EN 1 250 ML', '160 CAJAS C/12PZAS'),
('MX03578A', 'JAB. LIQ. STEFANO PLAY 250 ML', '160 CAJAS C/12PZAS'),
('MX04106A', 'SH CAPRICE ESPEC DOYPACK 390 ML.', '60 CAJAS C/16PZAS'),
('S/N	 	', 'GEL SANITIZANTE PARA MANOS DE MH					 					 					 					', '36 CAJAS C/1PZAS					 					 					');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `codigo` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
