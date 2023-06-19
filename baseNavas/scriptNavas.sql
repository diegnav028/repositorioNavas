-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2023 a las 19:19:57
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cartas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baraja`
--

CREATE TABLE `baraja` (
  `id_baraja` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `baraja`
--

INSERT INTO `baraja` (`id_baraja`, `id_usu`) VALUES
(43, 62),
(44, 63);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baraja_cartas`
--

CREATE TABLE `baraja_cartas` (
  `id_barajacarta` int(11) NOT NULL,
  `id_baraja` int(11) NOT NULL,
  `id_carta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `baraja_cartas`
--

INSERT INTO `baraja_cartas` (`id_barajacarta`, `id_baraja`, `id_carta`) VALUES
(210, 43, 1),
(211, 43, 2),
(212, 43, 3),
(213, 43, 4),
(214, 43, 7),
(215, 43, 8),
(216, 43, 9),
(217, 43, 10),
(218, 44, 1),
(219, 44, 2),
(220, 44, 3),
(221, 44, 4),
(222, 44, 7),
(223, 44, 8),
(224, 44, 9),
(225, 44, 10),
(226, 44, 5),
(227, 44, 6),
(228, 44, 11),
(229, 44, 12),
(230, 44, 13),
(231, 44, 14),
(232, 44, 15),
(233, 44, 16),
(234, 44, 17),
(235, 44, 18),
(236, 44, 19),
(237, 44, 20),
(238, 44, 21),
(239, 44, 22),
(240, 44, 23),
(241, 44, 24),
(242, 44, 25),
(243, 44, 26),
(244, 44, 27),
(245, 44, 28),
(246, 44, 29),
(247, 44, 30),
(248, 44, 31),
(249, 44, 32),
(250, 44, 33),
(251, 44, 34),
(252, 44, 35),
(253, 44, 36),
(254, 44, 37),
(255, 44, 38),
(256, 44, 39),
(257, 44, 40),
(258, 44, 41),
(259, 44, 42),
(260, 44, 43),
(261, 44, 44);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartas`
--

CREATE TABLE `cartas` (
  `id_carta` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `familia` varchar(50) NOT NULL,
  `clave1` varchar(50) NOT NULL,
  `clave2` varchar(50) NOT NULL,
  `clave3` varchar(50) NOT NULL,
  `multiataque` tinyint(1) NOT NULL,
  `mana` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `ataque` int(11) NOT NULL,
  `turnos` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `rareza` int(11) NOT NULL,
  `tienda` tinyint(1) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cartas`
--

INSERT INTO `cartas` (`id_carta`, `nombre`, `familia`, `clave1`, `clave2`, `clave3`, `multiataque`, `mana`, `descripcion`, `ataque`, `turnos`, `tipo`, `rareza`, `tienda`, `foto`, `precio`) VALUES
(1, 'tajo primitivo', 'melee', 'espada', 'primitivo', 'simple', 0, 1, 'Un corte simple con la espada.Tan basico como imprescindible.', 5, 0, 'ataque', 1, 0, 'sord.jpg', 0),
(2, 'disparo primitivo', 'gun', 'pistola', 'primitivo', 'simple', 0, 1, 'Un disparo con un arma anticuada.Sorprendentemente poderoso.', 7, 0, 'ataque', 1, 0, 'gunbasic.jpg', 0),
(3, 'migraña', 'psi', 'telepatia', 'primitivo', 'esoterico', 0, 2, 'Invade la mente del enemigo y provoca dolor de cabeza.', 5, 0, 'ataque', 1, 0, 'head.jpg', 0),
(4, 'guante taser', 'cyber', 'artilugio', 'primitivo', 'simple', 0, 1, 'Una descarga con guante electrico. Provoca electrizantes secuelas.', 3, 1, 'ataque', 1, 0, 'shock.jpg', 0),
(5, 'estocada relampago', 'melee', 'espada', 'primitivo', 'esoterico', 1, 3, 'Una estocada de espada tan rapida que golpea a todos los enemigos.', 5, 0, 'ataque', 3, 1, 'ligt.jpg', 1),
(6, 'disparo multiple', 'gun', 'pistola', 'primitivo', 'esoterico', 1, 3, 'Con gran velocidad se dispara una vez a cada enemigo. Tan util que tu defensa aumenta durante 3 turnos.', 7, 0, 'ataque', 4, 1, 'mult.jpg', 2),
(7, 'escudo primitivo', 'melee', 'espada', 'primitivo', 'simple', 0, 1, 'Un bloqueo con espada y escudo. Un clasico.', 5, 0, 'defensa', 1, 0, 'mescudo.png', 0),
(8, 'virgueria defensiva', 'gun', 'pistola', 'complejo', 'simple', 0, 1, 'La pistola se mueve de formas extrañas y distrae al enemigo. No es muy efectivo.', 3, 0, 'defensa', 1, 0, 'virg.jpg', 0),
(9, 'escudo mental', 'psi', 'telekinesis', 'primitivo', 'esoterico', 0, 2, 'El psiquico se protege con un campo de energia telekinetica.', 5, 0, 'defensa', 1, 0, 'psiesc.png', 0),
(10, 'escudo portatil', 'cyber', 'artilugio', 'complejo', 'simple', 0, 1, 'Un campo de energia portatil que se arroja al suelo y dura varios turnos.', 3, 2, 'defensa', 1, 0, 'force.jpg', 0),
(11, 'pulso telekinetico', 'psi', 'telekinesis', 'complejo', 'esoterico', 1, 4, 'Se lanzan rocas a gran velocidad usando telekinesis.', 5, 0, 'ataque', 4, 1, 'teleke.jpg', 2),
(12, 'granada primitiva', 'cyber', 'artilugio', 'primitivo', 'simple', 1, 3, 'Una granada de polvora.Muy comun.', 5, 0, 'ataque', 2, 1, 'grenade.jpg', 2),
(13, 'espada sangrienta', 'melee', 'espada', 'archeo', 'esoterico', 0, 8, 'Una espada de los precursores. Se alimenta de la sangre de tus enemigos para curarte.', 5, 0, 'curacion', 5, 1, 'blood.jpg', 3),
(14, 'pistola medica', 'gun', 'pistola', 'complejo', 'esoterico', 0, 8, 'Una pistola medica usado por los medicos de combate de la galaxia. Muy poco segura.', 4, 0, 'curacion', 5, 1, 'needle.png', 3),
(15, 'energia curativa', 'psi', 'dinakinesis', 'complejo', 'alien', 0, 10, 'Una compleja tecnica por la cual se canaliza la energia de la galaxia para curar tus heridas.', 10, 0, 'curacion', 5, 1, 'heal.png', 3),
(16, 'sustitucion mecanica', 'cyber', 'implante', 'complejo', 'simple', 0, 5, 'Sustituye tu debil y dañada carne por fuerte metal. Vuelvete algo mas que humano, algo peor.', 5, 0, 'curacion', 4, 1, 'implante.jpg', 3),
(17, 'asalto escudado', 'melee', 'lanza', 'primitivo', 'simple', 0, 3, 'Un poderoso lanzazo desde detras de un escudo.', 6, 0, 'ataque/def', 2, 1, 'bloqueospear.jpg', 3),
(18, 'escopeta energia', 'gun', 'escopeta', 'archeo', 'esoterico', 0, 5, 'Una escopeta de los precursores. Genera un escudo de fuerza tras disparar.', 14, 0, 'ataque/def', 4, 1, 'shot.jpg', 3),
(19, 'muro fuego', 'psi', 'dinakinesis', 'primitivo', 'esoterico', 1, 7, 'El psiquico lanza un gran muro de fuego a sus enemigos. Las llamas lo protegen.', 8, 1, 'ataque/def', 4, 1, 'fire.jpg', 3),
(20, 'granada de gas', 'cyber', 'artilugio', 'complejo', 'simple', 1, 5, 'Una granada de gas toxico. El gas hace dificil golpearte.', 6, 1, 'ataque/def', 4, 1, 'gas.jpg', 3),
(21, 'hacha escudo', 'melee', 'hacha', 'complejo', 'esoterico', 0, 4, 'Un hacha que genera un poderoso campo de energia.Tambien sirve para atacar.', 6, 0, 'defensa/atk', 2, 1, 'defax.jpg', 3),
(22, 'rifle de humo', 'gun', 'automatica', 'primitivo', 'esoterico', 0, 4, 'Un rifle automatico con un lanzagranadas de humo.Util para evitar el daño.', 8, 0, 'defensa/atk', 2, 1, 'under.jpg', 3),
(23, 'muro de piedra', 'psi', 'telekinesis', 'primitivo', 'esoterico', 1, 6, 'El psiquico levanta el suelo para hacer una barrera. Los cascotes dañan a los enemigos.', 8, 0, 'defensa/atk', 4, 1, 'meteor.jpg', 3),
(24, 'hackeo', 'cyber', 'protesis', 'primitivo', 'simple', 0, 4, 'Se utiliza un superordenador en la muñeca para hackear a los enemigos causandoles algo de daño y desorientandoles.', 6, 1, 'defensa/atk', 2, 1, 'hack.jpg', 3),
(25, 'espada de cristal', 'melee', 'espada', 'complejo', 'alien', 0, 0, 'Una espada hecha de un cristal desconocido.Tan poderosa como fragil.', 40, 0, 'instantanea', 5, 1, 'moon.jpg', 3),
(26, 'lanzacohetes alienigena', 'gun', 'automatica', 'complejo', 'alien', 1, 0, 'Un lanzacohetes con misiles de materia oscura. Se rompe tras dispararlo.', 20, 0, 'instantanea', 5, 1, 'rocket.jpeg', 3),
(27, 'agujero negro', 'psi', 'dinakinesis', 'primitivo', 'esoterico', 1, 0, 'El psiquico desgarra la realidad y crea un agujero negro. No se puede hacer mucho o el universo morira.', 10, 3, 'instantanea', 5, 1, 'black.jpg', 3),
(28, 'cañon de fusion', 'cyber', 'implante', 'complejo', 'esoterico', 0, 0, 'Una cañon que sustituye el brazo y dispara reactores de fusion del tamaño de una cabeza humana.', 20, 3, 'instantanea', 5, 1, 'arm.jpg', 3),
(29, 'menuano', 'melee', 'espada', 'primitivo', 'simple', 0, 3, 'El poder del kunfu brasileño te consume. No sabes porque ni que es brasil pero el poder es inmenso.', 5, 3, 'bufo', 3, 1, 'menuano.jpg', 3),
(30, 'overcharge', 'gun', 'pistola', 'complejo', 'simple', 0, 4, 'La tecnica por la cual sobrecalientas el reactor de las armas.Incrementa el daño y te quema los dedos.', 3, 3, 'bufo', 4, 1, 'overcharge.jpg', 3),
(31, 'exoesqueleto', 'cyber', 'protesis', 'complejo', 'esoterico', 0, 5, 'Un exoesqueleto mecanico que aumenta todas tus habilidades y destrezas', 5, 3, 'bufo', 4, 1, 'exo.jpg', 3),
(32, 'ojo mental', 'psi', 'telepatia', 'complejo', 'alien', 0, 6, 'Una tecnica para ver el futuro. Lo haras todo mejor.', 8, 1, 'bufo', 4, 1, 'ojo.jpg', 3),
(33, 'entrenamiento', 'melee', 'espada', 'primitivo', 'simple', 0, 4, 'Recuerda a tu maestro, recuerda el entrenamiento.Golpea rapido, golpea deprisa.', 4, 2, 'bufo-familia', 2, 1, 'training.jpg', 3),
(34, 'akimbo', 'gun', 'pistola', 'primitivo', 'simple', 0, 4, 'Sabes que es mejor que un arma. Dos armas.', 6, 3, 'bufo-familia', 3, 1, 'dual.jpg', 3),
(35, 'cristal de psionita', 'psi', 'telekinesis', 'complejo', 'esoterico', 0, 5, 'Un crital de psionita puro. Aumenta enormemente los poderes psionicos.', 5, 2, 'bufo-familia', 4, 1, 'psiopura.jpg', 3),
(36, 'estimulantes', 'cyber', 'artilugio', 'primitivo', 'simple', 0, 4, 'Los ganadores si que lo usan.', 3, 3, 'bufo-familia', 3, 1, 'syringe.jpg', 3),
(37, 'herrero de espadas', 'melee', 'espada', 'primitivo', 'simple', 0, 3, 'Un mitico e inmortal herrero reforja tu espada. Sera mas afilada un tiempo.', 4, 2, 'bufo-tipo', 3, 1, 'forge.jpg', 3),
(38, 'meditacion telepatica', 'psi', 'telepatia', 'complejo', 'esoterico', 0, 4, 'Concentrate, siente las mentes de tus enemigos y dominalos.', 4, 2, 'bufo-tipo', 4, 1, 'meditar2.jpg', 3),
(39, 'balas de fusion', 'gun', 'pistola', 'complejo', 'esoterico', 0, 3, 'Cambia tus balas por mini-reactores de fusion. El estandar galactico.', 5, 3, 'bufo-tipo', 2, 1, 'bullet.jpeg', 3),
(40, 'mantemiento implantes', 'cyber', 'implante', 'primitivo', 'simple', 0, 3, 'Repara y actualiza tus implantes.', 4, 2, 'bufo-tipo', 3, 1, 'ripper.jpg', 3),
(41, 'corazon melee', 'melee', 'espada', 'complejo', 'alien', 0, 5, 'Siente el corazon de las cartas melee. Adquiere mas.', 4, 0, 'robo', 5, 1, 'swordcover.png', 3),
(42, 'corazon gun', 'gun', 'pistola', 'primitivo', 'esoterico', 0, 5, 'Siente el corazon de las cartas gun. Consigue mas.', 5, 0, 'robo', 5, 1, 'guncover.png', 3),
(43, 'corazon psi', 'psi', 'telepatia', 'complejo', 'alien', 0, 5, 'Siente el corazon de las cartas psi.Consigue mas.', 4, 0, 'robo', 5, 1, 'psicover.png', 3),
(44, 'corazon cyber', 'cyber', 'artilugio', 'primitivo', 'simple', 0, 4, 'Siente el corazon de las cartas cyber. Consigue mas.', 5, 0, 'robo', 5, 1, 'artifactcover.png', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carta_mazos`
--

CREATE TABLE `carta_mazos` (
  `id_cartamazo` int(11) NOT NULL,
  `id_mazo` int(11) NOT NULL,
  `id_carta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carta_mazos`
--

INSERT INTO `carta_mazos` (`id_cartamazo`, `id_mazo`, `id_carta`) VALUES
(1411, 160, 1),
(1412, 160, 1),
(1413, 160, 1),
(1414, 160, 1),
(1415, 160, 1),
(1416, 161, 2),
(1417, 161, 2),
(1418, 161, 2),
(1419, 161, 2),
(1420, 161, 2),
(1421, 162, 3),
(1422, 162, 3),
(1423, 162, 3),
(1424, 162, 3),
(1425, 162, 3),
(1426, 163, 4),
(1427, 163, 4),
(1428, 163, 4),
(1429, 163, 4),
(1430, 163, 4),
(1436, 166, 2),
(1437, 166, 2),
(1438, 166, 2),
(1439, 166, 2),
(1440, 166, 2),
(1441, 167, 3),
(1442, 167, 3),
(1443, 167, 3),
(1444, 167, 3),
(1445, 167, 3),
(1446, 168, 4),
(1447, 168, 4),
(1448, 168, 4),
(1449, 168, 4),
(1450, 168, 4),
(1523, 165, 5),
(1524, 165, 13),
(1525, 165, 17),
(1526, 165, 21),
(1527, 165, 25),
(1528, 165, 29),
(1529, 165, 33),
(1530, 165, 37),
(1531, 165, 41),
(1541, 169, 5),
(1542, 169, 13),
(1543, 169, 17),
(1544, 169, 21),
(1545, 169, 25),
(1546, 169, 29),
(1547, 169, 33),
(1548, 169, 37),
(1549, 169, 41),
(1550, 169, 18),
(1551, 169, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enemigos`
--

CREATE TABLE `enemigos` (
  `id_enemigo` int(11) NOT NULL,
  `ataque1` varchar(50) NOT NULL,
  `dano1` int(11) NOT NULL,
  `descripcion1` varchar(200) NOT NULL,
  `ataque2` varchar(50) NOT NULL,
  `dano2` int(11) NOT NULL,
  `descripcion2` varchar(200) NOT NULL,
  `ataque3` varchar(50) NOT NULL,
  `dano3` int(11) NOT NULL,
  `descripcion3` varchar(200) NOT NULL,
  `vida` int(11) NOT NULL,
  `boss` tinyint(1) NOT NULL,
  `dificultad` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `enemigos`
--

INSERT INTO `enemigos` (`id_enemigo`, `ataque1`, `dano1`, `descripcion1`, `ataque2`, `dano2`, `descripcion2`, `ataque3`, `dano3`, `descripcion3`, `vida`, `boss`, `dificultad`, `foto`, `tipo`, `clave`) VALUES
(1, '20', 0, 'sufre un cortocircuito', '80', 4, 'te embiste', '100', 5, 'te dispara', 10, 0, 1, 'robot.png', 'incompetente', '5'),
(2, '20', 2, 'te da un zarpazo', '80', 4, 'te muerde', '100', 6, 'te escupe acido', 10, 0, 2, 'bicho1.png', 'neutral', '0'),
(3, '40', 3, 'te maldice', '90', 5, 'te corta con su cuchillo', '100', 9, 'te lanza una bola de fuego', 18, 0, 3, 'demonio.png', 'incompetente', '5'),
(4, '20', 3, 'te electrocuta', '80', 6, 'dispara su laser', '100', 9, 'dispara un misil', 25, 0, 4, 'robot2.png', 'competente', '5'),
(5, '40', 5, 'utiliza telepatia para dañar tu mente', '95', 8, 'utiliza dinakinesis para lanzar un rayo', '100', 12, 'invoca una microbrecha dimensional', 50, 1, 5, 'cutulu.png', 'neutral', '0'),
(6, '40', 6, 'te da una patada', '80', 7, 'te dispara un laser', '100', 9, 'lanza una andanada de granadas', 30, 0, 6, 'Conga.png', 'neutral', '0'),
(7, '20', 6, 'se tambalea sobre ti', '99', 8, 'utiliza poderes psiquicos con gran dificultad.', '100', 15, 'tiene un momento de claridad y utiliza telekinesis para aplastarte.', 25, 0, 7, 'chozo.png', 'neutral', '0'),
(8, '40', 7, 'carga contra ti', '80', 10, 'te dispara con su cañon de particulas', '100', 12, 'utiliza una explosion de onda', 30, 0, 8, 'ojocutulu.png', 'incompetente', '10'),
(9, '20', 5, 'te maldice', '80', 10, 'utiliza una gran maldicion', '100', 18, 'apuñala tu calma y se come tus sueños', 40, 1, 9, 'skeletron.png', 'competente', '10'),
(10, '20', 7, 'dispara sus metralletas', '70', 15, 'desata una lluvia de misiles que tapa el cielo', '100', 20, 'abre la boca y dispara un rayo de antimateria', 68, 1, 10, 'metalgear.png', 'competente', '5'),
(11, '40', 6, 'te atraviesa', '80', 14, 'te muerde', '100', 18, 'absorbe tu energia vital', 40, 0, 11, 'metroid.png', 'incompetente', '10'),
(12, '40', 10, 'carga contra ti', '80', 16, 'realiza un tajo veloz con su espada', '100', 20, 'su espada brilla y golpea en tres puntos a la vez', 40, 0, 12, 'centauro.png', 'competente', '10'),
(13, '60', 10, 'lanza una gran bola de fuego', '80', 17, 'lanza plasma', '100', 20, 'drena tu alma', 40, 0, 13, 'Mago.png', 'neutral', '0'),
(14, '40', 16, 'dispara una bola de plasma', '90', 19, 'dispara un supermisil', '100', 25, 'utiliza una hiperbomba', 30, 0, 14, 'samusbien.png', 'competente', '10'),
(15, '60', 15, 'escupe lava', '80', 25, 'carga contra ti a hipervelocidad', '100', 30, 'ordena un bombardeo orbital.', 80, 1, 15, 'mecaridley.png', 'incompetente', '10'),
(16, '20', 0, 'sufre un cortocircuito', '99', 10, 'te golpea por accidente', '100', 30, 'lanza misiles de materia oscura', 30, 0, 16, 'robot3.png', 'neutral', '0'),
(17, '40', 20, 'te muerde con colmillos sierra', '80', 22, 'escupe materia exotica', '100', 25, 'utiliza su nucleo de psionita', 50, 0, 17, 'dragonmeca.png', 'neutral', '0'),
(18, '40', 19, 'realiza un corte simple', '90', 22, 'salta sobre ti', '100', 25, 'realiza un corte combinado', 60, 0, 18, 'boss1.png', 'incompetente', '10'),
(19, '40', 22, 'lanza un rayo divino desde la espada', '80', 25, 'hace un ataque giratorio', '100', 30, 'grita hiyaaah', 50, 0, 19, 'lonk.png', 'competente', '10'),
(20, '40', 28, 'utiliza su poder divino', '95', 30, 'utiliza apoteosis', '100', 40, 'te tira un meteorito', 100, 1, 20, 'sephirot.png', 'neutral', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mazos`
--

CREATE TABLE `mazos` (
  `id_mazo` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL,
  `familia` varchar(50) NOT NULL,
  `tamano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mazos`
--

INSERT INTO `mazos` (`id_mazo`, `id_usu`, `familia`, `tamano`) VALUES
(160, 62, 'melee', 11),
(161, 62, 'gun', 11),
(162, 62, 'psi', 11),
(163, 62, 'cyber', 11),
(164, 62, 'combate', 10),
(165, 63, 'melee', 10),
(166, 63, 'gun', 10),
(167, 63, 'psi', 10),
(168, 63, 'cyber', 10),
(169, 63, 'combate', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mejoras`
--

CREATE TABLE `mejoras` (
  `id_mejora` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mejoras`
--

INSERT INTO `mejoras` (`id_mejora`, `tipo`, `cantidad`, `precio`, `foto`) VALUES
(1, 'vida', 5, 1, 'corazon.png'),
(2, 'defensa', 1, 1, 'escudo.png'),
(3, 'mana', 1, 2, 'mana.png'),
(4, 'mano', 1, 2, 'mano.png'),
(5, 'mazo', 1, 3, 'baraja2.png'),
(6, 'vida', 5, 2, 'corazon.png'),
(7, 'defensa', 1, 2, 'escudo.png'),
(8, 'vida', 5, 3, 'corazon.png'),
(9, 'defensa', 1, 3, 'escudo.png'),
(10, 'mana', 1, 5, 'mana.png'),
(11, 'vida', 5, 5, 'corazon.png'),
(12, 'defensa', 1, 5, 'escudo.png'),
(13, 'mano', 1, 8, 'mano.png'),
(14, 'mazo', 1, 8, 'baraja2.png'),
(15, 'vida', 5, 10, 'corazon.png'),
(16, 'defensa', 1, 10, 'escudo.png'),
(17, 'mana', 1, 15, 'mana.png'),
(18, 'mano', 1, 15, 'mano.png'),
(19, 'mazo', 1, 15, 'baraja2.png'),
(20, 'vida', 5, 15, 'corazon.png'),
(21, 'defensa', 1, 15, 'escudo.png'),
(22, 'mana', 1, 20, 'mana.png'),
(23, 'mano', 1, 25, 'mano.png'),
(24, 'mazo', 1, 25, 'baraja2.png'),
(25, 'vida', 5, 20, 'corazon.png'),
(26, 'defensa', 1, 20, 'escudo.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `id_personaje` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL,
  `vida` int(11) NOT NULL,
  `mana` int(11) NOT NULL,
  `defensa` int(11) NOT NULL,
  `mano` int(11) NOT NULL,
  `vida_combate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`id_personaje`, `id_usu`, `vida`, `mana`, `defensa`, `mano`, `vida_combate`) VALUES
(43, 62, 50, 10, 2, 5, 50),
(44, 63, 50, 10, 1, 5, 44);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas`
--

CREATE TABLE `tiendas` (
  `id_tienda` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tiendas`
--

INSERT INTO `tiendas` (`id_tienda`, `id_usu`) VALUES
(44, 62),
(45, 63);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda_cartas`
--

CREATE TABLE `tienda_cartas` (
  `id_tiendacartas` int(11) NOT NULL,
  `id_tienda` int(11) NOT NULL,
  `id_carta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tienda_cartas`
--

INSERT INTO `tienda_cartas` (`id_tiendacartas`, `id_tienda`, `id_carta`) VALUES
(82, 44, 5),
(83, 44, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda_personajes`
--

CREATE TABLE `tienda_personajes` (
  `id_tiendapersonaje` int(11) NOT NULL,
  `id_tienda` int(11) NOT NULL,
  `id_mejora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tienda_personajes`
--

INSERT INTO `tienda_personajes` (`id_tiendapersonaje`, `id_tienda`, `id_mejora`) VALUES
(38, 44, 1),
(40, 44, 3),
(41, 44, 4),
(43, 44, 6),
(44, 44, 7),
(45, 44, 8),
(46, 44, 9),
(47, 44, 10),
(48, 44, 11),
(49, 44, 12),
(50, 44, 13),
(51, 44, 14),
(52, 44, 15),
(53, 44, 16),
(54, 44, 17),
(55, 44, 18),
(56, 44, 19),
(57, 44, 20),
(58, 44, 21),
(59, 44, 22),
(60, 44, 23),
(61, 44, 24),
(62, 44, 25),
(63, 44, 26),
(64, 45, 1),
(65, 45, 2),
(66, 45, 3),
(67, 45, 4),
(68, 45, 5),
(69, 45, 6),
(70, 45, 7),
(71, 45, 8),
(72, 45, 9),
(73, 45, 10),
(74, 45, 11),
(75, 45, 12),
(76, 45, 13),
(77, 45, 14),
(78, 45, 15),
(79, 45, 16),
(80, 45, 17),
(81, 45, 18),
(82, 45, 19),
(83, 45, 20),
(84, 45, 21),
(85, 45, 22),
(86, 45, 23),
(87, 45, 24),
(88, 45, 25),
(89, 45, 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL,
  `nick` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contrasena` varchar(200) NOT NULL,
  `fecha_naci` date NOT NULL,
  `rol` varchar(50) NOT NULL,
  `piso` int(11) NOT NULL,
  `gold` int(11) NOT NULL,
  `victorias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `nick`, `email`, `contrasena`, `fecha_naci`, `rol`, `piso`, `gold`, `victorias`) VALUES
(62, 'diego', 'diegnav028@gmail.com', '$2y$10$ZPDOyoDhn8WNVAbIaQqOIu6eUG8oOklVqOBRuUuab8JirRYrUZ3t6', '2000-06-01', 'admin', 0, 0, 0),
(63, 'adminsup', 'adminsup@gmail.com', '$2y$10$uPLwsjaZYEG5Ga6FWXVt3ecDg0tLlXhkCPQdDBTvJEx.lNep9zXu.', '2000-06-01', 'admin', 3, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `baraja`
--
ALTER TABLE `baraja`
  ADD PRIMARY KEY (`id_baraja`),
  ADD KEY `fk_idusubaraja` (`id_usu`);

--
-- Indices de la tabla `baraja_cartas`
--
ALTER TABLE `baraja_cartas`
  ADD PRIMARY KEY (`id_barajacarta`),
  ADD KEY `fk_idcartabaraja` (`id_carta`),
  ADD KEY `fk_idbarajacarta` (`id_baraja`);

--
-- Indices de la tabla `cartas`
--
ALTER TABLE `cartas`
  ADD PRIMARY KEY (`id_carta`);

--
-- Indices de la tabla `carta_mazos`
--
ALTER TABLE `carta_mazos`
  ADD PRIMARY KEY (`id_cartamazo`),
  ADD KEY `fk_idmazo` (`id_mazo`),
  ADD KEY `fk_idcartamazo` (`id_carta`);

--
-- Indices de la tabla `enemigos`
--
ALTER TABLE `enemigos`
  ADD PRIMARY KEY (`id_enemigo`);

--
-- Indices de la tabla `mazos`
--
ALTER TABLE `mazos`
  ADD PRIMARY KEY (`id_mazo`),
  ADD KEY `fk_idusumazo` (`id_usu`);

--
-- Indices de la tabla `mejoras`
--
ALTER TABLE `mejoras`
  ADD PRIMARY KEY (`id_mejora`);

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id_personaje`),
  ADD KEY `fk_idusuario` (`id_usu`);

--
-- Indices de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  ADD PRIMARY KEY (`id_tienda`),
  ADD KEY `FK_idusu` (`id_usu`);

--
-- Indices de la tabla `tienda_cartas`
--
ALTER TABLE `tienda_cartas`
  ADD PRIMARY KEY (`id_tiendacartas`),
  ADD KEY `fk_idcarta` (`id_carta`),
  ADD KEY `fk_idtiendara` (`id_tienda`);

--
-- Indices de la tabla `tienda_personajes`
--
ALTER TABLE `tienda_personajes`
  ADD PRIMARY KEY (`id_tiendapersonaje`),
  ADD KEY `fk_idtienda` (`id_tienda`),
  ADD KEY `fk_idmejora` (`id_mejora`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `baraja`
--
ALTER TABLE `baraja`
  MODIFY `id_baraja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `baraja_cartas`
--
ALTER TABLE `baraja_cartas`
  MODIFY `id_barajacarta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT de la tabla `cartas`
--
ALTER TABLE `cartas`
  MODIFY `id_carta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `carta_mazos`
--
ALTER TABLE `carta_mazos`
  MODIFY `id_cartamazo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1552;

--
-- AUTO_INCREMENT de la tabla `enemigos`
--
ALTER TABLE `enemigos`
  MODIFY `id_enemigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `mazos`
--
ALTER TABLE `mazos`
  MODIFY `id_mazo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT de la tabla `mejoras`
--
ALTER TABLE `mejoras`
  MODIFY `id_mejora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id_personaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  MODIFY `id_tienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `tienda_cartas`
--
ALTER TABLE `tienda_cartas`
  MODIFY `id_tiendacartas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT de la tabla `tienda_personajes`
--
ALTER TABLE `tienda_personajes`
  MODIFY `id_tiendapersonaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `baraja`
--
ALTER TABLE `baraja`
  ADD CONSTRAINT `fk_idusubaraja` FOREIGN KEY (`id_usu`) REFERENCES `usuarios` (`id_usu`);

--
-- Filtros para la tabla `baraja_cartas`
--
ALTER TABLE `baraja_cartas`
  ADD CONSTRAINT `fk_idbarajacarta` FOREIGN KEY (`id_baraja`) REFERENCES `baraja` (`id_baraja`),
  ADD CONSTRAINT `fk_idcartabaraja` FOREIGN KEY (`id_carta`) REFERENCES `cartas` (`id_carta`);

--
-- Filtros para la tabla `carta_mazos`
--
ALTER TABLE `carta_mazos`
  ADD CONSTRAINT `fk_idcartamazo` FOREIGN KEY (`id_carta`) REFERENCES `cartas` (`id_carta`),
  ADD CONSTRAINT `fk_idmazo` FOREIGN KEY (`id_mazo`) REFERENCES `mazos` (`id_mazo`);

--
-- Filtros para la tabla `mazos`
--
ALTER TABLE `mazos`
  ADD CONSTRAINT `fk_idusumazo` FOREIGN KEY (`id_usu`) REFERENCES `usuarios` (`id_usu`);

--
-- Filtros para la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD CONSTRAINT `fk_idusuario` FOREIGN KEY (`id_usu`) REFERENCES `usuarios` (`id_usu`);

--
-- Filtros para la tabla `tiendas`
--
ALTER TABLE `tiendas`
  ADD CONSTRAINT `FK_idusu` FOREIGN KEY (`id_usu`) REFERENCES `usuarios` (`id_usu`);

--
-- Filtros para la tabla `tienda_cartas`
--
ALTER TABLE `tienda_cartas`
  ADD CONSTRAINT `fk_idcarta` FOREIGN KEY (`id_carta`) REFERENCES `cartas` (`id_carta`),
  ADD CONSTRAINT `fk_idtiendara` FOREIGN KEY (`id_tienda`) REFERENCES `tiendas` (`id_tienda`);

--
-- Filtros para la tabla `tienda_personajes`
--
ALTER TABLE `tienda_personajes`
  ADD CONSTRAINT `fk_idmejora` FOREIGN KEY (`id_mejora`) REFERENCES `mejoras` (`id_mejora`),
  ADD CONSTRAINT `fk_idtienda` FOREIGN KEY (`id_tienda`) REFERENCES `tiendas` (`id_tienda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
