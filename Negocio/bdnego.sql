
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2016 at 06:50 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a4001911_bdnego`
--

-- --------------------------------------------------------

--
-- Table structure for table `articulos`
--

CREATE TABLE `articulos` (
  `IdArticulo` int(11) NOT NULL AUTO_INCREMENT,
  `DescripcionArticulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdArticulo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=65 ;

--
-- Dumping data for table `articulos`
--

INSERT INTO `articulos` VALUES(1, 'Loción Versace Bright Crystal');
INSERT INTO `articulos` VALUES(2, 'Loción Invictus Hombre');
INSERT INTO `articulos` VALUES(3, 'Loción Diesel Blanca Hombre');
INSERT INTO `articulos` VALUES(4, 'Loción Swize Army Altitude Hombre');
INSERT INTO `articulos` VALUES(5, 'Juguete Leo Soul Gold');
INSERT INTO `articulos` VALUES(6, 'Bases para Juguetes');
INSERT INTO `articulos` VALUES(7, 'Juguete Aries Soul Gold');
INSERT INTO `articulos` VALUES(8, 'Juguete Metal Gear Rising');
INSERT INTO `articulos` VALUES(9, 'Juguete Kaneki Ken');
INSERT INTO `articulos` VALUES(10, 'Loción Carolina Herrera 212 VIP Hombre');
INSERT INTO `articulos` VALUES(11, 'Loción Lacoste Touch of Pink Mujer');
INSERT INTO `articulos` VALUES(12, 'Loción Kenzo Amour Mujer');
INSERT INTO `articulos` VALUES(13, 'Loción Tsar Van Cleef Hombre');
INSERT INTO `articulos` VALUES(14, 'Loción Bvlgari Omnia Amethyste Mujer');
INSERT INTO `articulos` VALUES(15, 'Loción Bvlgari Omnia Crystalline Mujer');
INSERT INTO `articulos` VALUES(16, 'Loción CKIN2U Mujer');
INSERT INTO `articulos` VALUES(17, 'Loción Amor Amor Mujer');
INSERT INTO `articulos` VALUES(18, 'Loción Calvin Klein Eternity Mujer');
INSERT INTO `articulos` VALUES(19, 'Loción Calvin Klein Eternity Moment Mujer');
INSERT INTO `articulos` VALUES(20, 'Loción Emporio Armani Hombre');
INSERT INTO `articulos` VALUES(21, 'Loción Versace Eros Hombre');
INSERT INTO `articulos` VALUES(22, 'Loción Fantasy Britney Spears Mujer');
INSERT INTO `articulos` VALUES(23, 'Loción Guess by Marciano Mujer');
INSERT INTO `articulos` VALUES(24, 'Loción Paris Hilton Mujer');
INSERT INTO `articulos` VALUES(25, 'Loción Hugo Boss Red Hombre');
INSERT INTO `articulos` VALUES(26, 'Loción Jean Marie Farina Hombre');
INSERT INTO `articulos` VALUES(27, 'Loción Light Blue Mujer');
INSERT INTO `articulos` VALUES(28, 'Loción Farenheit Hombre');
INSERT INTO `articulos` VALUES(29, 'Loción Midnight Fantasy Mujer');
INSERT INTO `articulos` VALUES(30, 'Loción Issey Miyake Hombre');
INSERT INTO `articulos` VALUES(31, 'Loción Moshino Forever Sailing Hombre');
INSERT INTO `articulos` VALUES(32, 'Loción One Million Hombre');
INSERT INTO `articulos` VALUES(33, 'Loción Jean Paul Gaultier Hombre');
INSERT INTO `articulos` VALUES(34, 'Loción Lolita Lempicka Mujer');
INSERT INTO `articulos` VALUES(35, 'Loción Swize Army Clasica Hombre');
INSERT INTO `articulos` VALUES(36, 'Loción Carolina Herrera 212 VIP Mujer');
INSERT INTO `articulos` VALUES(37, 'Loción Carolina Herrera Mujer');
INSERT INTO `articulos` VALUES(38, 'Loción Jovan Musk Mujer');
INSERT INTO `articulos` VALUES(39, 'Loción Lacoste Blanca Mujer');
INSERT INTO `articulos` VALUES(40, 'Juguete Libra Soul Gold');
INSERT INTO `articulos` VALUES(41, 'Loción Desire Dolce&Gabbana Mujer');
INSERT INTO `articulos` VALUES(42, 'Juguete Batman Vaquero');
INSERT INTO `articulos` VALUES(43, 'Collar');
INSERT INTO `articulos` VALUES(44, 'MAC Rubor');
INSERT INTO `articulos` VALUES(45, 'MAC Polvo');
INSERT INTO `articulos` VALUES(46, 'MAC Delineador');
INSERT INTO `articulos` VALUES(47, 'MAC Labial');
INSERT INTO `articulos` VALUES(48, 'MAC Pestañina');
INSERT INTO `articulos` VALUES(49, 'MAC Sombra');
INSERT INTO `articulos` VALUES(50, 'MAC Corrector Ojeras');
INSERT INTO `articulos` VALUES(51, 'MAC Lápiz');
INSERT INTO `articulos` VALUES(52, 'Loción Issey Miyake Mujer');
INSERT INTO `articulos` VALUES(53, 'Excel Labial');
INSERT INTO `articulos` VALUES(54, 'MAC Base');
INSERT INTO `articulos` VALUES(55, 'MAC 2 en 1 Delineador y Pestañina');
INSERT INTO `articulos` VALUES(56, 'MAC Labial Tubito');
INSERT INTO `articulos` VALUES(57, 'Loción Funny de Moshino Mujer');
INSERT INTO `articulos` VALUES(58, 'Armadura extra');
INSERT INTO `articulos` VALUES(59, 'Loción Poison Dior Mujer');
INSERT INTO `articulos` VALUES(60, 'Loción King of Seduction Antonio Banderas Hombre');
INSERT INTO `articulos` VALUES(61, 'Loción Chanel N.5 Mujer');
INSERT INTO `articulos` VALUES(62, 'Loción L''Impératrice 3 Dolce & Gabnana Mujer');
INSERT INTO `articulos` VALUES(63, 'Loción Prada de Amber Mujer');
INSERT INTO `articulos` VALUES(64, 'Loción Blue Seduction de Antonio Banderas Hombre');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `IdCliente` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCliente` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdCliente`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=53 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` VALUES(1, 'Claudia Roldán');
INSERT INTO `clientes` VALUES(2, 'Alejandro González');
INSERT INTO `clientes` VALUES(3, 'Vanessa Toro');
INSERT INTO `clientes` VALUES(4, 'Vanessa Burbano');
INSERT INTO `clientes` VALUES(5, 'Helena Mesa');
INSERT INTO `clientes` VALUES(6, 'Adriana Posso');
INSERT INTO `clientes` VALUES(7, 'Olga Alvarez');
INSERT INTO `clientes` VALUES(8, 'Sandra Henao');
INSERT INTO `clientes` VALUES(9, 'Andres Duque');
INSERT INTO `clientes` VALUES(10, 'Freddy Sanchez');
INSERT INTO `clientes` VALUES(11, 'Ivonne Calle');
INSERT INTO `clientes` VALUES(12, 'Wilton Alvarez');
INSERT INTO `clientes` VALUES(13, 'Victoria Luisa Lopez');
INSERT INTO `clientes` VALUES(14, 'Carolina Importaciones');
INSERT INTO `clientes` VALUES(15, 'Catalina Medina');
INSERT INTO `clientes` VALUES(16, 'Claribel González');
INSERT INTO `clientes` VALUES(17, 'Yuly Berrío');
INSERT INTO `clientes` VALUES(18, 'Paula Pineda');
INSERT INTO `clientes` VALUES(19, 'David Arroyave');
INSERT INTO `clientes` VALUES(20, 'Teresa Gallego');
INSERT INTO `clientes` VALUES(21, 'Maria Edilma García');
INSERT INTO `clientes` VALUES(22, 'Maria Adelaida Alzate');
INSERT INTO `clientes` VALUES(23, 'Alejandra Valencia');
INSERT INTO `clientes` VALUES(24, 'Juan Gutierrez');
INSERT INTO `clientes` VALUES(25, 'Manuela Roldán');
INSERT INTO `clientes` VALUES(26, 'Juan Camilo Mosquera');
INSERT INTO `clientes` VALUES(27, 'Gildardo Arbelaez');
INSERT INTO `clientes` VALUES(28, 'Claudia Vecina');
INSERT INTO `clientes` VALUES(29, 'Gloria Vecina');
INSERT INTO `clientes` VALUES(30, 'Isabel Parra');
INSERT INTO `clientes` VALUES(31, 'Deiby Gallego');
INSERT INTO `clientes` VALUES(32, 'Lady Gallego');
INSERT INTO `clientes` VALUES(33, 'Nora Muñeton');
INSERT INTO `clientes` VALUES(34, 'Maria Victoria Sierra');
INSERT INTO `clientes` VALUES(35, 'Diana María Sánchez');
INSERT INTO `clientes` VALUES(36, 'Juliana Piedrahita');
INSERT INTO `clientes` VALUES(37, 'Marta Irene Jaramillo');
INSERT INTO `clientes` VALUES(38, 'Maria Alejandra Importaciones');
INSERT INTO `clientes` VALUES(39, 'Patricia Costura');
INSERT INTO `clientes` VALUES(40, 'Maria Gallego');
INSERT INTO `clientes` VALUES(41, 'Carolina Henao');
INSERT INTO `clientes` VALUES(42, 'Lina Henao');
INSERT INTO `clientes` VALUES(43, 'Luz Marina Gutierrez');
INSERT INTO `clientes` VALUES(44, 'Kelly Castaño');
INSERT INTO `clientes` VALUES(45, 'Yenny Alvarez');
INSERT INTO `clientes` VALUES(46, 'Monica Gómez');
INSERT INTO `clientes` VALUES(47, 'Marina Gallego');
INSERT INTO `clientes` VALUES(48, 'Maria Eugenia Guerra');
INSERT INTO `clientes` VALUES(49, 'Gloria Monsalve');
INSERT INTO `clientes` VALUES(50, 'Milton Callejas Gallego');
INSERT INTO `clientes` VALUES(51, 'Elizabeth Londoño');
INSERT INTO `clientes` VALUES(52, 'Amparito Aseo Exito');

-- --------------------------------------------------------

--
-- Table structure for table `registro_pagos`
--

CREATE TABLE `registro_pagos` (
  `IdRegistro` int(11) NOT NULL AUTO_INCREMENT,
  `IdVenta` int(11) NOT NULL,
  `Pago` int(7) NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`IdRegistro`),
  KEY `IdVenta` (`IdVenta`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=268 ;

--
-- Dumping data for table `registro_pagos`
--

INSERT INTO `registro_pagos` VALUES(1, 1, 0, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(2, 1, 40000, '2016-07-15');
INSERT INTO `registro_pagos` VALUES(3, 1, 40000, '2016-07-30');
INSERT INTO `registro_pagos` VALUES(4, 2, 220000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(5, 3, 20000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(6, 3, 25000, '2016-07-15');
INSERT INTO `registro_pagos` VALUES(7, 3, 40000, '2016-08-04');
INSERT INTO `registro_pagos` VALUES(8, 3, 10000, '2016-08-17');
INSERT INTO `registro_pagos` VALUES(9, 4, 190000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(10, 5, 120000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(11, 6, 350000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(12, 7, 200000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(13, 7, 100000, '2016-07-19');
INSERT INTO `registro_pagos` VALUES(14, 7, 50000, '2016-08-03');
INSERT INTO `registro_pagos` VALUES(15, 8, 0, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(16, 8, 50000, '2016-08-03');
INSERT INTO `registro_pagos` VALUES(17, 9, 110000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(18, 10, 110000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(19, 11, 196000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(20, 12, 135000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(21, 13, 145000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(22, 14, 145000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(23, 15, 220000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(24, 16, 165000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(25, 17, 190000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(26, 18, 160000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(27, 19, 220000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(28, 20, 180000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(29, 21, 140000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(30, 22, 120000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(31, 23, 100000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(32, 24, 105000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(33, 25, 100000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(34, 25, 100000, '2016-07-22');
INSERT INTO `registro_pagos` VALUES(35, 26, 120000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(36, 27, 135000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(37, 28, 140000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(38, 29, 210000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(39, 30, 150000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(40, 31, 180000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(41, 32, 190000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(42, 33, 180000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(43, 34, 160000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(44, 35, 170000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(45, 36, 210000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(46, 37, 120000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(47, 38, 120000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(48, 39, 135000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(49, 40, 135000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(50, 41, 0, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(51, 41, 100000, '2016-07-15');
INSERT INTO `registro_pagos` VALUES(52, 41, 70000, '2016-08-01');
INSERT INTO `registro_pagos` VALUES(53, 42, 130000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(54, 43, 210000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(55, 44, 140000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(56, 45, 75000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(57, 46, 169000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(58, 47, 130000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(59, 48, 80000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(60, 48, 60000, '2016-07-13');
INSERT INTO `registro_pagos` VALUES(61, 48, 30000, '2016-08-09');
INSERT INTO `registro_pagos` VALUES(62, 49, 100000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(63, 50, 130000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(64, 51, 200000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(65, 52, 105000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(66, 53, 50000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(67, 54, 0, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(68, 55, 0, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(69, 56, 205000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(70, 57, 140000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(71, 58, 120000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(72, 59, 190000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(73, 60, 210000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(74, 61, 50000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(75, 61, 35000, '2016-07-15');
INSERT INTO `registro_pagos` VALUES(76, 61, 35000, '2016-07-29');
INSERT INTO `registro_pagos` VALUES(77, 62, 170000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(78, 63, 130000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(79, 64, 130000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(80, 65, 130000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(81, 66, 220000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(82, 67, 170000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(83, 68, 210000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(84, 69, 200000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(85, 70, 0, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(86, 70, 50000, '2016-08-16');
INSERT INTO `registro_pagos` VALUES(87, 71, 110000, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(88, 71, 110000, '2016-07-22');
INSERT INTO `registro_pagos` VALUES(89, 72, 0, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(90, 73, 0, '2016-07-01');
INSERT INTO `registro_pagos` VALUES(91, 73, 100000, '2016-07-11');
INSERT INTO `registro_pagos` VALUES(92, 73, 120000, '2016-07-13');
INSERT INTO `registro_pagos` VALUES(93, 74, 0, '2016-06-30');
INSERT INTO `registro_pagos` VALUES(94, 75, 0, '2016-07-29');
INSERT INTO `registro_pagos` VALUES(95, 76, 0, '2016-07-31');
INSERT INTO `registro_pagos` VALUES(96, 77, 0, '2016-07-31');
INSERT INTO `registro_pagos` VALUES(97, 76, 30000, '2016-08-13');
INSERT INTO `registro_pagos` VALUES(98, 78, 0, '2016-08-02');
INSERT INTO `registro_pagos` VALUES(99, 79, 0, '2016-08-01');
INSERT INTO `registro_pagos` VALUES(100, 79, 20000, '2016-08-03');
INSERT INTO `registro_pagos` VALUES(101, 79, 15000, '2016-08-16');
INSERT INTO `registro_pagos` VALUES(102, 80, 30000, '2016-08-01');
INSERT INTO `registro_pagos` VALUES(103, 81, 0, '2016-08-01');
INSERT INTO `registro_pagos` VALUES(104, 82, 20000, '2016-08-01');
INSERT INTO `registro_pagos` VALUES(105, 83, 0, '2016-08-01');
INSERT INTO `registro_pagos` VALUES(106, 84, 0, '2016-08-01');
INSERT INTO `registro_pagos` VALUES(107, 85, 0, '2016-08-01');
INSERT INTO `registro_pagos` VALUES(108, 86, 0, '2016-08-03');
INSERT INTO `registro_pagos` VALUES(109, 86, 30000, '2016-08-15');
INSERT INTO `registro_pagos` VALUES(110, 87, 0, '2016-08-03');
INSERT INTO `registro_pagos` VALUES(111, 87, 20000, '2016-08-12');
INSERT INTO `registro_pagos` VALUES(112, 88, 0, '2016-08-03');
INSERT INTO `registro_pagos` VALUES(113, 89, 0, '2016-08-03');
INSERT INTO `registro_pagos` VALUES(114, 90, 0, '2016-08-10');
INSERT INTO `registro_pagos` VALUES(115, 90, 20000, '2016-08-26');
INSERT INTO `registro_pagos` VALUES(116, 91, 0, '2016-08-08');
INSERT INTO `registro_pagos` VALUES(117, 91, 40000, '2016-08-26');
INSERT INTO `registro_pagos` VALUES(118, 92, 0, '2016-08-08');
INSERT INTO `registro_pagos` VALUES(119, 93, 0, '2016-08-08');
INSERT INTO `registro_pagos` VALUES(120, 94, 0, '2016-08-12');
INSERT INTO `registro_pagos` VALUES(121, 94, 20000, '2016-08-16');
INSERT INTO `registro_pagos` VALUES(122, 95, 0, '2016-08-16');
INSERT INTO `registro_pagos` VALUES(123, 96, 0, '2016-08-16');
INSERT INTO `registro_pagos` VALUES(124, 97, 0, '2016-08-16');
INSERT INTO `registro_pagos` VALUES(125, 98, 0, '2016-08-16');
INSERT INTO `registro_pagos` VALUES(126, 99, 0, '2016-08-16');
INSERT INTO `registro_pagos` VALUES(127, 100, 0, '2016-08-16');
INSERT INTO `registro_pagos` VALUES(128, 101, 0, '2016-08-16');
INSERT INTO `registro_pagos` VALUES(129, 102, 0, '2016-08-16');
INSERT INTO `registro_pagos` VALUES(130, 103, 0, '2016-08-16');
INSERT INTO `registro_pagos` VALUES(131, 104, 0, '2016-08-22');
INSERT INTO `registro_pagos` VALUES(132, 105, 10000, '2016-08-22');
INSERT INTO `registro_pagos` VALUES(133, 106, 0, '2016-08-22');
INSERT INTO `registro_pagos` VALUES(134, 106, 30000, '2016-08-30');
INSERT INTO `registro_pagos` VALUES(135, 107, 0, '2016-08-22');
INSERT INTO `registro_pagos` VALUES(136, 108, 0, '2016-08-22');
INSERT INTO `registro_pagos` VALUES(137, 109, 0, '2016-08-22');
INSERT INTO `registro_pagos` VALUES(138, 110, 0, '2016-08-22');
INSERT INTO `registro_pagos` VALUES(139, 111, 0, '2016-08-22');
INSERT INTO `registro_pagos` VALUES(140, 112, 0, '2016-08-22');
INSERT INTO `registro_pagos` VALUES(141, 113, 0, '2016-08-22');
INSERT INTO `registro_pagos` VALUES(142, 114, 0, '2016-08-22');
INSERT INTO `registro_pagos` VALUES(143, 115, 0, '2016-08-22');
INSERT INTO `registro_pagos` VALUES(144, 116, 0, '2016-08-23');
INSERT INTO `registro_pagos` VALUES(145, 117, 0, '2016-08-23');
INSERT INTO `registro_pagos` VALUES(146, 118, 0, '2016-08-23');
INSERT INTO `registro_pagos` VALUES(147, 119, 0, '2016-08-23');
INSERT INTO `registro_pagos` VALUES(148, 120, 0, '2016-08-24');
INSERT INTO `registro_pagos` VALUES(149, 121, 0, '2016-08-24');
INSERT INTO `registro_pagos` VALUES(150, 122, 0, '2016-08-24');
INSERT INTO `registro_pagos` VALUES(151, 123, 0, '2016-08-24');
INSERT INTO `registro_pagos` VALUES(152, 124, 0, '2016-08-24');
INSERT INTO `registro_pagos` VALUES(153, 125, 0, '2016-08-24');
INSERT INTO `registro_pagos` VALUES(154, 126, 0, '2016-08-24');
INSERT INTO `registro_pagos` VALUES(155, 127, 0, '2016-08-24');
INSERT INTO `registro_pagos` VALUES(156, 128, 0, '2016-08-25');
INSERT INTO `registro_pagos` VALUES(157, 129, 0, '2016-08-25');
INSERT INTO `registro_pagos` VALUES(158, 130, 0, '2016-08-25');
INSERT INTO `registro_pagos` VALUES(159, 131, 0, '2016-08-25');
INSERT INTO `registro_pagos` VALUES(160, 132, 0, '2016-08-25');
INSERT INTO `registro_pagos` VALUES(161, 133, 0, '2016-08-25');
INSERT INTO `registro_pagos` VALUES(162, 134, 0, '2016-08-26');
INSERT INTO `registro_pagos` VALUES(163, 8, 100000, '2016-08-30');
INSERT INTO `registro_pagos` VALUES(164, 123, 20000, '2016-08-30');
INSERT INTO `registro_pagos` VALUES(165, 82, 20000, '2016-08-30');
INSERT INTO `registro_pagos` VALUES(166, 76, 20000, '2016-08-30');
INSERT INTO `registro_pagos` VALUES(167, 115, 35000, '2016-08-30');
INSERT INTO `registro_pagos` VALUES(168, 125, 20000, '2016-08-30');
INSERT INTO `registro_pagos` VALUES(169, 135, 0, '2016-08-31');
INSERT INTO `registro_pagos` VALUES(170, 136, 0, '2016-08-31');
INSERT INTO `registro_pagos` VALUES(171, 137, 0, '2016-08-31');
INSERT INTO `registro_pagos` VALUES(172, 128, 40000, '2016-08-31');
INSERT INTO `registro_pagos` VALUES(173, 138, 0, '2016-08-31');
INSERT INTO `registro_pagos` VALUES(174, 138, 10000, '2016-08-31');
INSERT INTO `registro_pagos` VALUES(175, 88, 20000, '2016-08-31');
INSERT INTO `registro_pagos` VALUES(176, 96, 50000, '2016-09-01');
INSERT INTO `registro_pagos` VALUES(177, 3, 10000, '2016-09-01');
INSERT INTO `registro_pagos` VALUES(178, 87, 10000, '2016-09-01');
INSERT INTO `registro_pagos` VALUES(179, 139, 0, '2016-09-02');
INSERT INTO `registro_pagos` VALUES(180, 140, 0, '2016-09-05');
INSERT INTO `registro_pagos` VALUES(181, 100, 20000, '2016-09-05');
INSERT INTO `registro_pagos` VALUES(182, 102, 35000, '2016-09-06');
INSERT INTO `registro_pagos` VALUES(183, 103, 35000, '2016-09-06');
INSERT INTO `registro_pagos` VALUES(184, 70, 50000, '2016-09-06');
INSERT INTO `registro_pagos` VALUES(185, 141, 0, '2016-07-29');
INSERT INTO `registro_pagos` VALUES(186, 142, 0, '2016-07-29');
INSERT INTO `registro_pagos` VALUES(187, 141, 140000, '2016-08-19');
INSERT INTO `registro_pagos` VALUES(188, 142, 40000, '2016-08-19');
INSERT INTO `registro_pagos` VALUES(189, 143, 0, '2016-09-09');
INSERT INTO `registro_pagos` VALUES(190, 144, 0, '2016-09-09');
INSERT INTO `registro_pagos` VALUES(191, 145, 0, '2016-09-09');
INSERT INTO `registro_pagos` VALUES(192, 146, 0, '2016-09-09');
INSERT INTO `registro_pagos` VALUES(193, 147, 0, '2016-09-13');
INSERT INTO `registro_pagos` VALUES(194, 142, 50000, '2016-09-14');
INSERT INTO `registro_pagos` VALUES(195, 147, 160000, '2016-09-14');
INSERT INTO `registro_pagos` VALUES(196, 78, 70000, '2016-09-14');
INSERT INTO `registro_pagos` VALUES(197, 93, 50000, '2016-09-14');
INSERT INTO `registro_pagos` VALUES(198, 116, 50000, '2016-09-14');
INSERT INTO `registro_pagos` VALUES(199, 3, 15000, '2016-09-15');
INSERT INTO `registro_pagos` VALUES(200, 148, 0, '2016-09-15');
INSERT INTO `registro_pagos` VALUES(201, 94, 15000, '2016-09-15');
INSERT INTO `registro_pagos` VALUES(202, 88, 15000, '2016-09-15');
INSERT INTO `registro_pagos` VALUES(203, 110, 40000, '2016-09-16');
INSERT INTO `registro_pagos` VALUES(204, 111, 10000, '2016-09-16');
INSERT INTO `registro_pagos` VALUES(205, 148, 135000, '2016-09-16');
INSERT INTO `registro_pagos` VALUES(206, 8, 10000, '2016-09-16');
INSERT INTO `registro_pagos` VALUES(207, 74, 5000, '2016-09-16');
INSERT INTO `registro_pagos` VALUES(208, 54, 185000, '2016-09-17');
INSERT INTO `registro_pagos` VALUES(209, 55, 175000, '2016-09-17');
INSERT INTO `registro_pagos` VALUES(210, 129, 20000, '2016-09-19');
INSERT INTO `registro_pagos` VALUES(211, 101, 20000, '2016-09-19');
INSERT INTO `registro_pagos` VALUES(212, 149, 0, '2016-09-19');
INSERT INTO `registro_pagos` VALUES(213, 124, 20000, '2016-09-21');
INSERT INTO `registro_pagos` VALUES(214, 150, 0, '2016-09-23');
INSERT INTO `registro_pagos` VALUES(215, 150, 100000, '2016-09-28');
INSERT INTO `registro_pagos` VALUES(216, 139, 15000, '2016-09-30');
INSERT INTO `registro_pagos` VALUES(217, 143, 15000, '2016-09-30');
INSERT INTO `registro_pagos` VALUES(218, 109, 10000, '2016-09-30');
INSERT INTO `registro_pagos` VALUES(219, 106, 10000, '2016-09-30');
INSERT INTO `registro_pagos` VALUES(220, 74, 150000, '2016-09-30');
INSERT INTO `registro_pagos` VALUES(221, 145, 40000, '2016-09-30');
INSERT INTO `registro_pagos` VALUES(222, 138, 10000, '2016-10-03');
INSERT INTO `registro_pagos` VALUES(223, 70, 50000, '2016-10-03');
INSERT INTO `registro_pagos` VALUES(224, 142, 50000, '2016-10-03');
INSERT INTO `registro_pagos` VALUES(225, 151, 0, '2016-10-05');
INSERT INTO `registro_pagos` VALUES(226, 152, 0, '2016-10-04');
INSERT INTO `registro_pagos` VALUES(227, 78, 10000, '2016-10-04');
INSERT INTO `registro_pagos` VALUES(228, 112, 40000, '2016-10-04');
INSERT INTO `registro_pagos` VALUES(229, 98, 40000, '2016-10-04');
INSERT INTO `registro_pagos` VALUES(230, 135, 40000, '2016-10-04');
INSERT INTO `registro_pagos` VALUES(231, 93, 30000, '2016-10-04');
INSERT INTO `registro_pagos` VALUES(232, 87, 10000, '2016-10-04');
INSERT INTO `registro_pagos` VALUES(233, 140, 10000, '2016-10-04');
INSERT INTO `registro_pagos` VALUES(234, 153, 0, '2016-10-05');
INSERT INTO `registro_pagos` VALUES(235, 124, 20000, '2016-10-06');
INSERT INTO `registro_pagos` VALUES(236, 149, 15000, '2016-10-06');
INSERT INTO `registro_pagos` VALUES(237, 48, 30000, '2016-10-06');
INSERT INTO `registro_pagos` VALUES(238, 100, 15000, '2016-10-06');
INSERT INTO `registro_pagos` VALUES(239, 101, 15000, '2016-10-06');
INSERT INTO `registro_pagos` VALUES(240, 154, 30000, '2016-10-10');
INSERT INTO `registro_pagos` VALUES(241, 155, 0, '2016-10-10');
INSERT INTO `registro_pagos` VALUES(242, 75, 15000, '2016-10-10');
INSERT INTO `registro_pagos` VALUES(243, 114, 40000, '2016-10-12');
INSERT INTO `registro_pagos` VALUES(244, 106, 5000, '2016-10-14');
INSERT INTO `registro_pagos` VALUES(245, 108, 25000, '2016-10-14');
INSERT INTO `registro_pagos` VALUES(246, 95, 20000, '2016-10-14');
INSERT INTO `registro_pagos` VALUES(247, 154, 50000, '2016-10-14');
INSERT INTO `registro_pagos` VALUES(248, 127, 20000, '2016-10-14');
INSERT INTO `registro_pagos` VALUES(249, 104, 10000, '2016-10-14');
INSERT INTO `registro_pagos` VALUES(250, 134, 15000, '2016-10-14');
INSERT INTO `registro_pagos` VALUES(251, 84, 5000, '2016-10-14');
INSERT INTO `registro_pagos` VALUES(252, 86, 20000, '2016-10-15');
INSERT INTO `registro_pagos` VALUES(253, 151, 50000, '2016-10-18');
INSERT INTO `registro_pagos` VALUES(254, 153, 15000, '2016-10-18');
INSERT INTO `registro_pagos` VALUES(255, 154, 15000, '2016-10-18');
INSERT INTO `registro_pagos` VALUES(256, 144, 20000, '2016-10-18');
INSERT INTO `registro_pagos` VALUES(257, 70, 40000, '2016-10-19');
INSERT INTO `registro_pagos` VALUES(258, 156, 0, '2016-10-19');
INSERT INTO `registro_pagos` VALUES(259, 157, 0, '2016-10-19');
INSERT INTO `registro_pagos` VALUES(260, 158, 0, '2016-10-19');
INSERT INTO `registro_pagos` VALUES(261, 158, 30000, '2016-10-21');
INSERT INTO `registro_pagos` VALUES(262, 159, 20000, '2016-10-24');
INSERT INTO `registro_pagos` VALUES(263, 154, 20000, '2016-10-21');
INSERT INTO `registro_pagos` VALUES(264, 155, 30000, '2016-10-21');
INSERT INTO `registro_pagos` VALUES(265, 116, 70000, '2016-10-24');
INSERT INTO `registro_pagos` VALUES(266, 160, 0, '2016-10-24');
INSERT INTO `registro_pagos` VALUES(267, 161, 0, '2016-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Contrasena` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `Perfil` tinyint(1) NOT NULL,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` VALUES('1017137664', 'Robinson Gallego Alzate', 'rgallegoa', 'Medellin1', 'Activo', 1);
INSERT INTO `usuarios` VALUES('1017142568', 'Yesica Gallego Tobón', 'ygallegot', 'Corazon1', 'Activo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
  `IdVenta` int(11) NOT NULL AUTO_INCREMENT,
  `IdCliente` int(11) NOT NULL,
  `IdArticulo` int(11) NOT NULL,
  `Costo` int(7) NOT NULL,
  `PVP` int(7) NOT NULL,
  `Deuda` int(7) NOT NULL,
  PRIMARY KEY (`IdVenta`),
  KEY `IdCliente` (`IdCliente`),
  KEY `IdArticulo` (`IdArticulo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=162 ;

--
-- Dumping data for table `ventas`
--

INSERT INTO `ventas` VALUES(1, 5, 3, 40000, 80000, 0);
INSERT INTO `ventas` VALUES(2, 6, 2, 181000, 220000, 0);
INSERT INTO `ventas` VALUES(3, 10, 4, 82000, 120000, 0);
INSERT INTO `ventas` VALUES(4, 2, 5, 137000, 190000, 0);
INSERT INTO `ventas` VALUES(5, 2, 6, 90000, 120000, 0);
INSERT INTO `ventas` VALUES(6, 2, 7, 304650, 350000, 0);
INSERT INTO `ventas` VALUES(7, 2, 8, 253000, 350000, 0);
INSERT INTO `ventas` VALUES(8, 2, 9, 110000, 160000, 0);
INSERT INTO `ventas` VALUES(9, 3, 14, 83000, 110000, 0);
INSERT INTO `ventas` VALUES(10, 3, 14, 83000, 110000, 0);
INSERT INTO `ventas` VALUES(11, 3, 2, 156000, 196000, 0);
INSERT INTO `ventas` VALUES(12, 3, 14, 96000, 135000, 0);
INSERT INTO `ventas` VALUES(13, 3, 14, 102000, 145000, 0);
INSERT INTO `ventas` VALUES(14, 3, 14, 102000, 145000, 0);
INSERT INTO `ventas` VALUES(15, 3, 10, 170000, 220000, 0);
INSERT INTO `ventas` VALUES(16, 3, 14, 125000, 165000, 0);
INSERT INTO `ventas` VALUES(17, 3, 1, 150000, 190000, 0);
INSERT INTO `ventas` VALUES(18, 3, 14, 120000, 160000, 0);
INSERT INTO `ventas` VALUES(19, 6, 12, 165000, 220000, 0);
INSERT INTO `ventas` VALUES(20, 6, 10, 145000, 180000, 0);
INSERT INTO `ventas` VALUES(21, 6, 11, 109000, 140000, 0);
INSERT INTO `ventas` VALUES(22, 8, 15, 93000, 120000, 0);
INSERT INTO `ventas` VALUES(23, 7, 13, 54500, 100000, 0);
INSERT INTO `ventas` VALUES(24, 5, 24, 75000, 105000, 0);
INSERT INTO `ventas` VALUES(25, 5, 33, 160000, 200000, 0);
INSERT INTO `ventas` VALUES(26, 11, 14, 93000, 120000, 0);
INSERT INTO `ventas` VALUES(27, 11, 14, 96000, 135000, 0);
INSERT INTO `ventas` VALUES(28, 9, 21, 109000, 140000, 0);
INSERT INTO `ventas` VALUES(29, 9, 2, 169500, 210000, 0);
INSERT INTO `ventas` VALUES(30, 9, 31, 110000, 150000, 0);
INSERT INTO `ventas` VALUES(31, 12, 10, 145000, 180000, 0);
INSERT INTO `ventas` VALUES(32, 13, 36, 143000, 190000, 0);
INSERT INTO `ventas` VALUES(33, 14, 10, 145000, 180000, 0);
INSERT INTO `ventas` VALUES(34, 15, 25, 109000, 160000, 0);
INSERT INTO `ventas` VALUES(35, 15, 25, 127000, 170000, 0);
INSERT INTO `ventas` VALUES(36, 16, 28, 172000, 210000, 0);
INSERT INTO `ventas` VALUES(37, 16, 22, 63000, 120000, 0);
INSERT INTO `ventas` VALUES(38, 17, 18, 79000, 120000, 0);
INSERT INTO `ventas` VALUES(39, 17, 18, 92000, 135000, 0);
INSERT INTO `ventas` VALUES(40, 17, 18, 92000, 135000, 0);
INSERT INTO `ventas` VALUES(41, 17, 19, 93000, 170000, 0);
INSERT INTO `ventas` VALUES(42, 18, 14, 88000, 130000, 0);
INSERT INTO `ventas` VALUES(43, 18, 37, 166500, 210000, 0);
INSERT INTO `ventas` VALUES(44, 18, 34, 96000, 140000, 0);
INSERT INTO `ventas` VALUES(45, 5, 3, 40000, 75000, 0);
INSERT INTO `ventas` VALUES(46, 19, 20, 128500, 169000, 0);
INSERT INTO `ventas` VALUES(47, 20, 26, 86500, 130000, 0);
INSERT INTO `ventas` VALUES(48, 21, 2, 170000, 210000, 10000);
INSERT INTO `ventas` VALUES(49, 10, 4, 61000, 100000, 0);
INSERT INTO `ventas` VALUES(50, 27, 26, 86500, 130000, 0);
INSERT INTO `ventas` VALUES(51, 23, 32, 159000, 200000, 0);
INSERT INTO `ventas` VALUES(52, 24, 35, 63000, 105000, 0);
INSERT INTO `ventas` VALUES(53, 29, 38, 25000, 50000, 0);
INSERT INTO `ventas` VALUES(54, 28, 10, 145000, 185000, 0);
INSERT INTO `ventas` VALUES(55, 28, 17, 135000, 175000, 0);
INSERT INTO `ventas` VALUES(56, 22, 10, 170000, 205000, 0);
INSERT INTO `ventas` VALUES(57, 22, 29, 100000, 140000, 0);
INSERT INTO `ventas` VALUES(58, 22, 23, 55000, 120000, 0);
INSERT INTO `ventas` VALUES(59, 4, 1, 150000, 190000, 0);
INSERT INTO `ventas` VALUES(60, 4, 10, 170000, 210000, 0);
INSERT INTO `ventas` VALUES(61, 26, 35, 75000, 120000, 0);
INSERT INTO `ventas` VALUES(62, 25, 27, 135000, 170000, 0);
INSERT INTO `ventas` VALUES(63, 25, 16, 86000, 130000, 0);
INSERT INTO `ventas` VALUES(64, 25, 16, 86000, 130000, 0);
INSERT INTO `ventas` VALUES(65, 25, 16, 86000, 130000, 0);
INSERT INTO `ventas` VALUES(66, 25, 30, 170000, 220000, 0);
INSERT INTO `ventas` VALUES(67, 1, 27, 135000, 170000, 0);
INSERT INTO `ventas` VALUES(68, 1, 27, 155000, 210000, 0);
INSERT INTO `ventas` VALUES(69, 1, 27, 159000, 200000, 0);
INSERT INTO `ventas` VALUES(70, 7, 39, 145000, 190000, 0);
INSERT INTO `ventas` VALUES(71, 4, 27, 160000, 220000, 0);
INSERT INTO `ventas` VALUES(72, 2, 40, 320000, 400000, 400000);
INSERT INTO `ventas` VALUES(73, 30, 41, 170000, 220000, 0);
INSERT INTO `ventas` VALUES(74, 2, 42, 172000, 260000, 105000);
INSERT INTO `ventas` VALUES(75, 31, 43, 7000, 15000, 0);
INSERT INTO `ventas` VALUES(76, 20, 45, 15000, 50000, 0);
INSERT INTO `ventas` VALUES(77, 32, 43, 7000, 15000, 15000);
INSERT INTO `ventas` VALUES(78, 5, 3, 40000, 80000, 0);
INSERT INTO `ventas` VALUES(79, 3, 47, 15000, 35000, 0);
INSERT INTO `ventas` VALUES(80, 17, 43, 18000, 30000, 0);
INSERT INTO `ventas` VALUES(81, 33, 43, 7000, 15000, 15000);
INSERT INTO `ventas` VALUES(82, 34, 48, 15000, 40000, 0);
INSERT INTO `ventas` VALUES(83, 17, 48, 15000, 40000, 40000);
INSERT INTO `ventas` VALUES(84, 16, 49, 15000, 35000, 30000);
INSERT INTO `ventas` VALUES(85, 22, 46, 15000, 40000, 40000);
INSERT INTO `ventas` VALUES(86, 31, 35, 75000, 85000, 35000);
INSERT INTO `ventas` VALUES(87, 35, 50, 15000, 40000, 0);
INSERT INTO `ventas` VALUES(88, 6, 47, 15000, 35000, 0);
INSERT INTO `ventas` VALUES(89, 21, 47, 15000, 35000, 35000);
INSERT INTO `ventas` VALUES(90, 16, 51, 5000, 20000, 0);
INSERT INTO `ventas` VALUES(91, 16, 48, 15000, 40000, 0);
INSERT INTO `ventas` VALUES(92, 16, 44, 15000, 40000, 40000);
INSERT INTO `ventas` VALUES(93, 33, 52, 135000, 175000, 95000);
INSERT INTO `ventas` VALUES(94, 18, 47, 15000, 35000, 0);
INSERT INTO `ventas` VALUES(95, 3, 51, 5000, 20000, 0);
INSERT INTO `ventas` VALUES(96, 3, 45, 15000, 50000, 0);
INSERT INTO `ventas` VALUES(97, 13, 47, 14000, 35000, 35000);
INSERT INTO `ventas` VALUES(98, 13, 48, 15000, 40000, 0);
INSERT INTO `ventas` VALUES(99, 13, 54, 20000, 50000, 50000);
INSERT INTO `ventas` VALUES(100, 37, 47, 14000, 35000, 0);
INSERT INTO `ventas` VALUES(101, 37, 44, 15000, 35000, 0);
INSERT INTO `ventas` VALUES(102, 38, 49, 15000, 35000, 0);
INSERT INTO `ventas` VALUES(103, 38, 47, 14000, 35000, 0);
INSERT INTO `ventas` VALUES(104, 16, 53, 3800, 10000, 0);
INSERT INTO `ventas` VALUES(105, 40, 53, 3800, 10000, 0);
INSERT INTO `ventas` VALUES(106, 39, 55, 17000, 45000, 0);
INSERT INTO `ventas` VALUES(107, 39, 54, 20000, 60000, 60000);
INSERT INTO `ventas` VALUES(108, 39, 45, 15000, 50000, 25000);
INSERT INTO `ventas` VALUES(109, 39, 53, 3800, 10000, 0);
INSERT INTO `ventas` VALUES(110, 41, 50, 15000, 40000, 0);
INSERT INTO `ventas` VALUES(111, 41, 53, 3800, 10000, 0);
INSERT INTO `ventas` VALUES(112, 41, 48, 15000, 40000, 0);
INSERT INTO `ventas` VALUES(113, 17, 56, 6000, 20000, 20000);
INSERT INTO `ventas` VALUES(114, 42, 44, 15000, 40000, 0);
INSERT INTO `ventas` VALUES(115, 36, 47, 17000, 35000, 0);
INSERT INTO `ventas` VALUES(116, 3, 14, 100000, 140000, 20000);
INSERT INTO `ventas` VALUES(117, 3, 27, 150000, 180000, 180000);
INSERT INTO `ventas` VALUES(118, 9, 31, 105000, 160000, 160000);
INSERT INTO `ventas` VALUES(119, 21, 43, 9000, 15000, 15000);
INSERT INTO `ventas` VALUES(120, 13, 56, 6000, 20000, 20000);
INSERT INTO `ventas` VALUES(121, 13, 56, 6000, 20000, 20000);
INSERT INTO `ventas` VALUES(122, 13, 54, 20000, 50000, 50000);
INSERT INTO `ventas` VALUES(123, 44, 56, 6000, 20000, 0);
INSERT INTO `ventas` VALUES(124, 43, 46, 15000, 40000, 0);
INSERT INTO `ventas` VALUES(125, 43, 56, 6000, 20000, 0);
INSERT INTO `ventas` VALUES(126, 43, 53, 3800, 10000, 10000);
INSERT INTO `ventas` VALUES(127, 43, 48, 15000, 40000, 20000);
INSERT INTO `ventas` VALUES(128, 5, 44, 17000, 40000, 0);
INSERT INTO `ventas` VALUES(129, 35, 53, 7600, 20000, 0);
INSERT INTO `ventas` VALUES(130, 40, 46, 15000, 40000, 40000);
INSERT INTO `ventas` VALUES(131, 46, 56, 6000, 20000, 20000);
INSERT INTO `ventas` VALUES(132, 46, 44, 17000, 35000, 35000);
INSERT INTO `ventas` VALUES(133, 46, 50, 15000, 40000, 40000);
INSERT INTO `ventas` VALUES(134, 16, 43, 7000, 15000, 0);
INSERT INTO `ventas` VALUES(135, 13, 48, 15000, 40000, 0);
INSERT INTO `ventas` VALUES(136, 46, 45, 20000, 50000, 50000);
INSERT INTO `ventas` VALUES(137, 46, 56, 6000, 20000, 20000);
INSERT INTO `ventas` VALUES(138, 48, 51, 5000, 20000, 0);
INSERT INTO `ventas` VALUES(139, 49, 43, 7000, 15000, 0);
INSERT INTO `ventas` VALUES(140, 4, 53, 3800, 10000, 0);
INSERT INTO `ventas` VALUES(141, 17, 18, 100000, 140000, 0);
INSERT INTO `ventas` VALUES(142, 17, 18, 100000, 140000, 0);
INSERT INTO `ventas` VALUES(143, 49, 43, 7000, 15000, 0);
INSERT INTO `ventas` VALUES(144, 11, 51, 5000, 20000, 0);
INSERT INTO `ventas` VALUES(145, 11, 55, 17000, 40000, 0);
INSERT INTO `ventas` VALUES(146, 50, 2, 180000, 200000, 200000);
INSERT INTO `ventas` VALUES(147, 51, 57, 120000, 160000, 0);
INSERT INTO `ventas` VALUES(148, 2, 58, 105000, 135000, 0);
INSERT INTO `ventas` VALUES(149, 6, 43, 9000, 15000, 0);
INSERT INTO `ventas` VALUES(150, 1, 27, 160000, 190000, 90000);
INSERT INTO `ventas` VALUES(151, 5, 59, 250000, 300000, 250000);
INSERT INTO `ventas` VALUES(152, 32, 60, 65000, 85000, 85000);
INSERT INTO `ventas` VALUES(153, 5, 43, 9000, 15000, 0);
INSERT INTO `ventas` VALUES(154, 52, 18, 75000, 115000, 0);
INSERT INTO `ventas` VALUES(155, 52, 61, 340000, 380000, 350000);
INSERT INTO `ventas` VALUES(156, 22, 62, 150000, 190000, 190000);
INSERT INTO `ventas` VALUES(157, 52, 27, 180000, 220000, 220000);
INSERT INTO `ventas` VALUES(158, 52, 63, 160000, 200000, 170000);
INSERT INTO `ventas` VALUES(159, 52, 62, 150000, 190000, 170000);
INSERT INTO `ventas` VALUES(160, 9, 2, 180000, 220000, 220000);
INSERT INTO `ventas` VALUES(161, 9, 64, 60000, 100000, 100000);
