-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-10-2022 a las 06:03:40
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `MiBaseAylinBotelo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `id` int(11) NOT NULL,
  `ci` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`id`, `ci`, `usuario`, `password`, `rol`) VALUES
(1, 1000000, 'juan', '698d51a19d8a121ce581499d7b701668', 'estudiante'),
(2, 1000001, 'ccabrara1', 'a72fe84a9ca4af07149a39f298c8b48a', 'estudiante'),
(3, 1000002, 'cpietrzyk2', '67e59f1f478a6e3d6f129b415a2255a1', 'estudiante'),
(4, 1000003, 'aschiefersten3', '6b9071c5ce51296d3dd6a9730310ea3a', 'estudiante'),
(5, 1000004, 'fmicklewicz4', 'a641148549d7e742b5bec254ff9a11ec', 'estudiante'),
(6, 1000005, 'ldorian5', 'de530ba24e3c887bd6a4e221d867fd88', 'estudiante'),
(7, 1000006, 'ndaley6', '47c945beab9c51dedea37a06536734df', 'estudiante'),
(8, 1000007, 'ashea7', '9b8d0a43c446e65979f2f6f205a85432', 'estudiante'),
(9, 1000008, 'dmorl8', 'b6c95f2f800e063152169297dfa47c9e', 'estudiante'),
(10, 1000009, 'wdudden9', '78557416002cdc81865d380f732ebfc1', 'estudiante'),
(11, 1000010, 'bparmitera', '5634c374a023371a0dcd181c33827269', 'estudiante'),
(12, 1000011, 'sventamb', '8f90864b377648e96710e4d0e382dc95', 'estudiante'),
(13, 1000012, 'gpunchardc', '886f2fdb9d07bac864073e0c078d9913', 'estudiante'),
(14, 1000013, 'shartelld', 'ec5c9d549e3457b8c869683cd3b3adad', 'estudiante'),
(15, 1000014, 'tskillinge', 'a266d5eb0ef4f856c74569e7f2e14751', 'estudiante'),
(16, 1000015, 'fannisf', '0660a39b3925fd3a096b2db382a22ec3', 'estudiante'),
(17, 1000016, 'mclowtong', '8e7f4766304870080ae041fa1ad70812', 'estudiante'),
(18, 1000017, 'ltippetth', '1d9de3f5e6c64a0c156ab7a3fbb19a04', 'estudiante'),
(19, 1000018, 'thabbesi', 'dc073b3abf17335509b294b62a34821a', 'estudiante'),
(20, 1000019, 'mmundayj', '8e00feac6219dabf7852c39a992d4f81', 'estudiante'),
(21, 1000020, 'msimank', 'fb6528809240b6d0be6b7245f5b76a39', 'estudiante'),
(22, 1000021, 'asockelll', '4e3f05d10e62f9a61e7ef779de64d274', 'estudiante'),
(23, 1000022, 'rlemoucheuxm', 'a60c71ce0cf2738b10640b3814fa97cf', 'estudiante'),
(24, 1000023, 'cvalentin', '4009038ec5b5f3af88ec100dedd88a3f', 'estudiante'),
(25, 1000024, 'mrannieo', 'cacac27db3a0d631cfaed2fe90fbc8b2', 'estudiante'),
(26, 1000025, 'vgantp', 'e9d53cb67eb2b13757b613168142536d', 'estudiante'),
(27, 1000026, 'ngaggenq', 'cdf6a83b93e5845b4564116ac3a09c03', 'estudiante'),
(28, 1000027, 'rmilingtonr', '806ae1cd4fe5ae8b3285b365bcffcd37', 'estudiante'),
(29, 1000028, 'hhobdens', '7a9c2bd52dca2bb4e511554a421c0172', 'estudiante'),
(30, 1000029, 'vstallont', '78b5a9bb0af29761a83f9d90aa6e3efc', 'estudiante'),
(31, 1000030, 'vduckersu', '979889230b2a43f210c8b8186b17fda1', 'estudiante'),
(32, 1000031, 'apersev', 'c3f5dc96be3c01a45f6325abb3f68158', 'estudiante'),
(33, 1000032, 'kslocumbw', '62fb1a43233bbf28f947cf5a71b4cf97', 'estudiante'),
(34, 1000033, 'mfarniex', '12b9a4f0fd5c5615b6a0f26390f99650', 'estudiante'),
(35, 1000034, 'epauliny', '2d747f8d09a572be81e574fd57884f83', 'estudiante'),
(36, 1000035, 'nlightowlerz', '7e610ecc0ae9c3fea6c970934f69975f', 'estudiante'),
(37, 1000036, 'nstollwerk10', '5fee07748d6e7d034370cfec8e79753a', 'estudiante'),
(38, 1000037, 'nmotion11', 'd135e28df21db36aab96a9a5099d9e4a', 'estudiante'),
(39, 1000038, 'srawsen12', '1b1313984fabc3e27327ab3f14108381', 'estudiante'),
(40, 1000039, 'earistide13', 'effc8b21950bb2da2448659972fe6d0d', 'estudiante'),
(41, 1000040, 'epiggen14', 'c8512ecaf36b99518a6c15bcd5f196e6', 'estudiante'),
(42, 1000041, 'mpoll0', '1deb7f3a3a847e3e8ca7579cdabf61ad', 'docente'),
(43, 1000042, 'mgabits1', 'ab077472b8ecd50cbdc48b6741e83121', 'docente'),
(44, 1000043, 'pclarkin2', '3038b7115aad08714c783bc78453921b', 'docente'),
(45, 1000044, 'dsmeeton3', '844d459f470eca3c2d22c0550a69323a', 'docente'),
(46, 1000045, 'dmound4', '29e183d8448712cc99aafc471cc5b068', 'docente'),
(47, 1000046, 'sfranzke5', '1c94639fa7c2d3177dabc1fb65789f43', 'docente'),
(48, 1000047, 'djeacop6', '6c9b353247b15d7265f64122a3d0d88a', 'docente'),
(49, 1000048, 'lic', '48b96d6f53c90f8007574a235f82e4ae', 'docente'),
(50, 1000049, 'director', 'd3400988693a2d802b58a1734b8eacd5', 'director');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id` int(11) NOT NULL,
  `ci` int(11) NOT NULL,
  `sigla` varchar(30) NOT NULL,
  `nota1` int(11) NOT NULL,
  `nota2` int(11) NOT NULL,
  `nota3` int(11) NOT NULL,
  `notaFinal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id`, `ci`, `sigla`, `nota1`, `nota2`, `nota3`, `notaFinal`) VALUES
(1, 1000004, 'INF 281', 60, 37, 50, 49),
(2, 1000039, 'INF 282', 99, 56, 53, 69),
(3, 1000001, 'INF 324', 69, 58, 91, 72),
(4, 1000012, 'INF 282', 34, 89, 66, 63),
(5, 1000008, 'INF 281', 72, 38, 93, 67),
(6, 1000025, 'INF 282', 64, 27, 63, 51),
(7, 1000038, 'INF 324', 79, 47, 100, 75),
(8, 1000023, 'INF 324', 62, 90, 71, 74),
(9, 1000001, 'INF 282', 95, 98, 73, 88),
(10, 1000011, 'INF 282', 88, 80, 27, 65),
(11, 1000022, 'INF 324', 41, 88, 70, 66),
(12, 1000035, 'INF 282', 81, 44, 60, 61),
(13, 1000025, 'INF 324', 74, 52, 22, 49),
(14, 1000022, 'INF 324', 71, 62, 31, 54),
(15, 1000034, 'INF 281', 24, 38, 25, 29),
(16, 1000031, 'INF 281', 51, 31, 39, 40),
(17, 1000019, 'INF 282', 92, 74, 78, 81),
(18, 1000018, 'INF 282', 89, 82, 47, 72),
(19, 1000029, 'INF 281', 79, 50, 59, 62),
(20, 1000007, 'INF 324', 68, 39, 27, 44),
(21, 1000035, 'INF 324', 82, 34, 28, 48),
(22, 1000021, 'INF 282', 89, 99, 95, 94),
(23, 1000010, 'INF 281', 67, 100, 55, 74),
(24, 1000015, 'INF 324', 20, 70, 38, 42),
(25, 1000033, 'INF 282', 65, 34, 62, 53),
(26, 1000004, 'INF 282', 85, 94, 86, 88),
(27, 1000014, 'INF 324', 55, 31, 50, 45),
(28, 1000005, 'INF 281', 53, 21, 40, 38),
(29, 1000016, 'INF 324', 57, 66, 55, 59),
(30, 1000019, 'INF 324', 68, 67, 70, 68),
(31, 1000033, 'INF 282', 41, 91, 29, 53),
(32, 1000040, 'INF 324', 62, 33, 61, 52),
(33, 1000014, 'INF 281', 99, 73, 75, 82),
(34, 1000026, 'INF 281', 78, 81, 99, 86),
(35, 1000011, 'INF 281', 77, 57, 76, 70),
(36, 1000035, 'INF 281', 41, 46, 90, 59),
(37, 1000030, 'INF 324', 62, 97, 36, 65),
(38, 1000000, 'INF 282', 97, 26, 21, 48),
(39, 1000024, 'INF 282', 62, 32, 67, 53),
(40, 1000035, 'INF 324', 68, 84, 89, 80),
(41, 1000008, 'INF 324', 50, 36, 59, 48),
(42, 1000039, 'INF 281', 30, 29, 95, 51),
(43, 1000014, 'INF 281', 43, 99, 55, 65),
(44, 1000037, 'INF 324', 50, 47, 69, 55),
(45, 1000036, 'INF 324', 64, 33, 73, 56),
(46, 1000017, 'INF 282', 41, 56, 80, 59),
(47, 1000002, 'INF 282', 56, 98, 52, 68),
(48, 1000040, 'INF 282', 56, 37, 89, 60),
(49, 1000022, 'INF 281', 82, 96, 36, 71),
(50, 1000023, 'INF 324', 71, 23, 39, 44);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `ci` int(11) NOT NULL,
  `nombreCompleto` varchar(50) NOT NULL,
  `fechaNac` date NOT NULL,
  `dpto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `ci`, `nombreCompleto`, `fechaNac`, `dpto`) VALUES
(1, 1000000, 'Gilligan Audley', '1986-11-15', '08'),
(2, 1000001, 'Christos Widdall', '1990-07-27', '02'),
(3, 1000002, 'Prince Fazackerley', '1993-09-28', '03'),
(4, 1000003, 'Konstantin Patsall', '1978-09-20', '09'),
(5, 1000004, 'Shaina Bassano', '1976-07-19', '05'),
(6, 1000005, 'Kristopher Andrag', '1995-08-14', '05'),
(7, 1000006, 'Karee Ingarfill', '1999-04-05', '09'),
(8, 1000007, 'Penny Roycraft', '1982-08-16', '02'),
(9, 1000008, 'Konstanze Remnant', '1992-01-30', '08'),
(10, 1000009, 'Law Wear', '1982-09-15', '09'),
(11, 1000010, 'Casi Plaid', '1998-03-01', '02'),
(12, 1000011, 'Giulietta Beach', '1983-11-19', '04'),
(13, 1000012, 'Ophelia Phaup', '1977-10-10', '08'),
(14, 1000013, 'Josh Brassington', '1991-01-31', '02'),
(15, 1000014, 'Lyndel Straneo', '1992-03-22', '05'),
(16, 1000015, 'Domeniga Wylder', '1979-09-04', '02'),
(17, 1000016, 'Beret Barrar', '1987-09-28', '04'),
(18, 1000017, 'Rubie Teanby', '1975-12-01', '08'),
(19, 1000018, 'Winn Hellard', '2003-05-23', '01'),
(20, 1000019, 'Willi Clashe', '1973-06-08', '02'),
(21, 1000020, 'Rudolph Sustin', '2002-11-14', '09'),
(22, 1000021, 'Lonni Stutard', '1984-05-22', '06'),
(23, 1000022, 'Kiley Fidell', '2001-09-20', '04'),
(24, 1000023, 'Trip Shurlock', '1978-12-30', '08'),
(25, 1000024, 'Anna Bourrel', '1983-04-03', '01'),
(26, 1000025, 'Arleyne Beckford', '1978-05-29', '01'),
(27, 1000026, 'Lani Gandrich', '1983-09-03', '06'),
(28, 1000027, 'Keefer Frobisher', '1973-06-21', '09'),
(29, 1000028, 'Walsh Rickhuss', '1974-10-06', '08'),
(30, 1000029, 'Theresa Eaves', '1991-09-03', '08'),
(31, 1000030, 'Josi Rudolf', '1978-08-16', '04'),
(32, 1000031, 'Debbi Brighty', '1984-01-22', '09'),
(33, 1000032, 'Evaleen Coull', '1993-08-06', '08'),
(34, 1000033, 'Elwira Ferrierio', '1998-07-20', '07'),
(35, 1000034, 'Aldus Weavers', '1980-10-16', '05'),
(36, 1000035, 'Jacky Knowling', '1998-03-20', '02'),
(37, 1000036, 'Ramsay Dey', '1997-03-08', '09'),
(38, 1000037, 'Timotheus Donnell', '1974-02-24', '07'),
(39, 1000038, 'Caryn Mealham', '1976-12-11', '09'),
(40, 1000039, 'Frederich Karlicek', '1990-12-13', '07'),
(41, 1000040, 'Beulah Songer', '1987-04-22', '03'),
(42, 1000041, 'Ellynn Alesbrook', '2001-05-10', '08'),
(43, 1000042, 'Loree Padfield', '1985-10-21', '03'),
(44, 1000043, 'Cchaddie Montel', '1997-04-13', '08'),
(45, 1000044, 'Dorena Figin', '1988-02-09', '08'),
(46, 1000045, 'Hervey Langrick', '1975-02-02', '05'),
(47, 1000046, 'Darius Alyukin', '1981-04-09', '05'),
(48, 1000047, 'Florina Stelljes', '1986-10-24', '03'),
(49, 1000048, 'Archy Le Gall', '1988-07-17', '04'),
(50, 1000049, 'Gerick Weyland', '1977-09-02', '06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso`
--
ALTER TABLE `acceso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
