-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2021 a las 20:18:35
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `potenciados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dietas`
--

CREATE TABLE `dietas` (
  `id_dieta` int(11) NOT NULL,
  `dia` int(1) NOT NULL,
  `comida_1` text COLLATE utf8_spanish_ci NOT NULL,
  `comida_2` text COLLATE utf8_spanish_ci NOT NULL,
  `comida_3` text COLLATE utf8_spanish_ci NOT NULL,
  `comida_4` text COLLATE utf8_spanish_ci NOT NULL,
  `id_objetivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dietas`
--

INSERT INTO `dietas` (`id_dieta`, `dia`, `comida_1`, `comida_2`, `comida_3`, `comida_4`, `id_objetivo`) VALUES
(1, 1, '2x Tostada integral + 1 vaso de jugo Naranja', 'Ensalada mixta + Filette de ternera', '1 Fruta', 'Merluza a la plancha', 1),
(2, 2, 'Café con leche descremada + Cereales integrales', 'Guiso de lentejas + Ensalada Mixta', '5 Ciruelas', 'Filette de Pollo', 1),
(3, 3, 'Zumo de naranja + 2x Tostada con queso', 'Sopa de fideos', 'Manzana', 'Revuelto de zetas', 1),
(4, 4, 'Tostadas con aceite y tomate + Zumo de piña', 'Puré de papas y bacalao', 'Manzana', 'Jamón cocido y queso fresco + Ensalada Mixta', 1),
(5, 5, 'Cereales integrales + 1x Mandarina', 'Pollo asado + Crema de calabaza', '2x Bananas', 'Emperador a la plancha', 1),
(6, 6, 'Café con leche + galletas tipo maría', 'Lomo a la plancha + Revuelto de verduras', '2x Peras', 'Salmón empapillote', 1),
(7, 7, 'Café con leche + tostada con queso fresco', 'Ensalada mixta + Paeya Valenciana', '2 Naranja', 'PERMITIDO', 1),
(8, 1, 'Tortilla de huevo y 4 claras y una yema + 80g de avena + leche', '100g de pavo + 200g pan integral + 1 Fruta', 'Sanguche de atún', '1 Plato de pasta integral y pollo', 2),
(9, 2, 'Tostadas con yogurt', 'Sanguche de carne', 'Avena con yogur', 'Asado con ensalada', 2),
(10, 3, 'Tortilla de huevo con avena y leche', 'Guiso de pollo', '3 bananas y un sancguche de jamón', 'Estofado de salmón', 2),
(11, 4, '2x Tostadas con mermelada + Zumo de narnja', 'Sanguche de pechuga de pollo', 'Sanguche de pavo', 'Guiso de merluza con papas cocidas', 2),
(12, 5, 'Tortilla con avena y leche', 'Pavo a la plancha con arroz y queso fresco', 'Cereal con yogur', 'Pasta con sardinas', 2),
(13, 6, 'Tortilla de papa y huevo', 'Filette de merluza', '3mandarinas y 2 bananas', 'Pavo al horno', 2),
(14, 7, 'Yogur con 100g de avena', 'Sanguche de atún', 'Yogurt con tostadas', 'PERMITIDO', 2),
(15, 1, 'Café con leche y tostadas de tomate', 'Espinaca con piñones y pollo y verura', 'Tostadas con jugo de avena y banana', 'Ensalada de lentejas + Tomate y espinacas', 3),
(16, 2, 'Tostadas de pan integral con salmón', 'Verengena a la plancha con tortilla y calabaza', 'Café con leche y tostadas de tomate', 'Ensalada de arroz y pavo al horno', 3),
(17, 3, 'Tostadas con plátano y canela', 'Ensalada de lentejas + Tomate y espinacas', 'Yogurt de avena con fresas', 'Espaguetti de calabaza + Langostinos', 3),
(18, 4, 'Tostadas con jugo de avena y banana', 'Ensalada de arroz y pavo al horno', 'Yogurt de avena con fresas', 'Calabacín santiago con pollo', 3),
(19, 5, 'Helado de platano y cacao', 'Ensalada de lentejas + Tomate y espinacas', 'Tostadas con plátano y canela', 'Verengena a la plancha con tortilla y calabaza', 3),
(20, 6, 'Tostadas de pan integral con salmón', 'Calabacín santiago con pollo', 'Tostadas con plátano y canela', 'Espinaca con piñones y pollo y verura', 3),
(21, 7, 'Helado de platano y cacao', 'Espinaca con piñones y pollo y verura', 'Tostadas con jugo de avena y banana', 'PERMITIDO', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicios`
--

CREATE TABLE `ejercicios` (
  `id_ejercicio` int(11) NOT NULL,
  `dia` int(1) NOT NULL,
  `serie_1` int(11) NOT NULL,
  `repe_1` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ejercicio_1` text COLLATE utf8_spanish_ci NOT NULL,
  `serie_2` int(11) NOT NULL,
  `repe_2` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ejercicio_2` text COLLATE utf8_spanish_ci NOT NULL,
  `serie_3` int(11) NOT NULL,
  `repe_3` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ejercicio_3` text COLLATE utf8_spanish_ci NOT NULL,
  `serie_4` int(11) NOT NULL,
  `repe_4` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ejercicio_4` text COLLATE utf8_spanish_ci NOT NULL,
  `serie_5` int(11) DEFAULT NULL,
  `repe_5` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ejercicio_5` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `serie_6` int(11) DEFAULT NULL,
  `repe_6` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ejercicio_6` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `serie_7` int(11) DEFAULT NULL,
  `repe_7` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ejercicio_7` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `serie_8` int(11) DEFAULT NULL,
  `repe_8` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ejercicio_8` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `serie_9` int(11) DEFAULT NULL,
  `repe_9` int(11) DEFAULT NULL,
  `ejercicio_9` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_objetivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ejercicios`
--

INSERT INTO `ejercicios` (`id_ejercicio`, `dia`, `serie_1`, `repe_1`, `ejercicio_1`, `serie_2`, `repe_2`, `ejercicio_2`, `serie_3`, `repe_3`, `ejercicio_3`, `serie_4`, `repe_4`, `ejercicio_4`, `serie_5`, `repe_5`, `ejercicio_5`, `serie_6`, `repe_6`, `ejercicio_6`, `serie_7`, `repe_7`, `ejercicio_7`, `serie_8`, `repe_8`, `ejercicio_8`, `serie_9`, `repe_9`, `ejercicio_9`, `id_objetivo`) VALUES
(1, 1, 4, '10-8-8-6', 'Pres Banca', 4, '8-8-8-6', 'Pres Banca Inclinado', 4, '8-8-8-7', 'Pres Banca Declinado', 4, '8', 'Aperturas con mancuernas', 4, '8', 'Pullover', 4, '10-8-8-6', 'Extención triceps en polea', 4, '10', 'Press Frances', 4, '10-10-10-8', 'Fondos', NULL, NULL, NULL, 2),
(2, 2, 4, '8', 'Dominadas', 4, '8', 'Remo horizontal a una mano con mancuerna', 4, '8-8-8-6', 'Remo sentado en poleo con agarre abierto', 4, '8-8-8-7', 'Remo sentado en poleo con agarre cerrado', 4, '10-10-10-8', 'Poleo al pecho', 4, '8-8-8-6', 'Curl biceps con barra recta', 4, '8-8-8-6', 'Curl biceps en banco Scoot', 3, '14', 'Curl inclindo con mancuernas', 3, 10, 'Curl concentradas', 2),
(3, 3, 4, '10', 'Press frontal con barras', 4, '10', 'Elevaciones posteriores', 4, '10', 'Press Arnold', 3, '10', 'Elevaciones laterales acostado de lado', 3, '10', 'Encogimeintos con mancuernas', 3, '10', 'Remo al cuello con barra Z', 4, '10', 'Curl antebrazo Supinacion frontales', 4, '10', 'Curl antebrazo Propanacion traseros', NULL, NULL, NULL, 2),
(4, 4, 4, '8', 'Sentadillas', 4, '8', 'Extensiones cuadriceps en maquina', 4, '8', 'Curl Femoral en maquina', 4, '10', 'Zuncadas', 3, '10', 'Gemelos de pie', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(5, 1, 4, '6-8-10-10', 'Press banca pectoral', 4, '8', 'Press banca inclinado', 4, '12', 'Press declinado', 4, '15', 'Apertura en polea', 6, '25', 'Crunch abdominal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 2, 4, '20', 'Dominadas supinas', 4, '8', 'Jálon al pecho', 4, '12', 'Remo mancuerna', 4, '15', 'Remo poela baja agarre ancho', 6, '25', 'Elevaciones de piernas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 3, 4, '6-8-10-10', 'Sentadilla libre', 4, '8', 'Prensa inclinada', 4, '12', 'Curl femoral', 4, '15', 'Leg extensión en polea', 6, '20', 'Gemelos de pie', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, 4, 4, '6-8-10-10', 'Press militar barra', 4, '8', 'Press Press arnold', 4, '12', 'Elevaciones laterales', 4, '15', 'Elevaciones posteriores', 6, '60', 'Plancha isométrica', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, 1, 4, '12', 'Sentadillas', 4, '12', 'Zancadas laterales', 4, '10', 'Femoral sobre banco', 4, '12', 'Curl alterno de pie', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(10, 2, 5, '12', 'Flexiones', 5, '12', 'Espalda en el suelo', 5, '12', 'Elevaciones frontales', 5, '10', 'Rotaciones cubanas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(11, 3, 3, '10', 'Zancadas', 4, '12', 'Patada trasera', 4, '12', 'Elevación de cadera rodilla doblada', 3, '25', 'Elevación de piernas', 4, '30', 'Encogimientos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(12, 4, 4, '12', 'Sentadillas', 4, '12', 'Zancadas laterales', 4, '20', 'Elevación de talones', 4, '12', 'Fondos entre bancos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrados`
--

CREATE TABLE `registrados` (
  `id_registrado` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL,
  `pass` text COLLATE utf8_spanish_ci NOT NULL,
  `peso` int(3) NOT NULL,
  `altura` int(3) NOT NULL,
  `edad` date NOT NULL,
  `metodo_entrenamiento` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL,
  `pass` text COLLATE utf8_spanish_ci NOT NULL,
  `peso` int(3) NOT NULL,
  `altura` int(3) NOT NULL,
  `edad` date NOT NULL,
  `metodo_entrenamiento` int(1) NOT NULL,
  `fecha_sesion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `pass`, `peso`, `altura`, `edad`, `metodo_entrenamiento`, `fecha_sesion`) VALUES
(8, 'Luis Prado', 'luisprado@gmail.com', 'luis', 65, 171, '1995-08-06', 3, '2021-01-29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dietas`
--
ALTER TABLE `dietas`
  ADD PRIMARY KEY (`id_dieta`);

--
-- Indices de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD PRIMARY KEY (`id_ejercicio`);

--
-- Indices de la tabla `registrados`
--
ALTER TABLE `registrados`
  ADD PRIMARY KEY (`id_registrado`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dietas`
--
ALTER TABLE `dietas`
  MODIFY `id_dieta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  MODIFY `id_ejercicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `registrados`
--
ALTER TABLE `registrados`
  MODIFY `id_registrado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
