-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2023 a las 20:42:14
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cartas`
--
ALTER TABLE `cartas`
  ADD PRIMARY KEY (`id_carta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cartas`
--
ALTER TABLE `cartas`
  MODIFY `id_carta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
