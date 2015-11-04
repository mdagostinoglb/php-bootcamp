-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-11-2015 a las 07:09:11
-- Versión del servidor: 5.5.43-0ubuntu0.14.04.1
-- Versión de PHP: 5.6.10-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bookstore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Books`
--

CREATE TABLE IF NOT EXISTS `Books` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Books'' ID',
  `Title` text NOT NULL COMMENT 'Books'' Title',
  `Description` text NOT NULL COMMENT 'Books'' Description',
  `Price` float NOT NULL COMMENT 'Books'' Price',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Bookstore Database' AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `Books`
--

INSERT INTO `Books` (`ID`, `Title`, `Description`, `Price`) VALUES
(1, 'Harry Potter and the Deadthly Hallows', 'Harry and his friends keep on the search for the Horrocruxes, hoping that with them they may defeat the Dark Lord', 280),
(2, 'Narnia Chronicles: The Lion, The Witch and The Wardrobe', 'During World War Two, four kids find a secret door to a whole new world: Narnia', 180),
(3, 'Harry Potter and the Sorcerers Stone', 'Harry is a normal boy, but one day he discovers his real identity, he''s a magician', 150),
(4, 'A Song of Ice and Fire: A Game Of Thrones', 'The story of A Song of Ice and Fire takes place in a fictional world in which seasons last for years on end. Centuries before the events of the first novel (see backstory), the Seven Kingdoms on the continent Westeros had been united under the Targaryen dynasty established by the first Targaryen King, Aegon I. As A Game of Thrones begins, it has been 15 years since the feudal lords led by Robert Baratheon killed the last Targaryen ruler, King Aerys II Targaryen, and made Robert king.', 300),
(5, 'Dragonlance Chronicles: Dragons of Autumn Twilight', 'Tanis, Sturm, Caramon, Raistlin, Flint, and Tasslehoff, had been separated to pursue their own quests and pledged to return in five years. Kitiara Uth Matar, the half sister of the twins Caramon and Raistlin, was supposed to be there as well, but only sent a mysterious note.', 120),
(6, 'Single Variable Essential Calculus: Early Transcendentals', 'Offers a concise approach to teaching calculus that focuses on major concepts, and supports those concepts with precise definitions, patient explanations, and carefully graded problems.', 350),
(7, 'Calculus, Volume 2. Tom Apostol', 'Multi variable calculus and linear algebra with applications to differential equations and probability', 320),
(8, 'Applying UML and Patterns - Craig Larman', 'An Introduction to Object Oriented Analysis and Design and the Unified Process', 280),
(9, 'Libgdx Cross platform Game Development Cookbook', 'Book Description: Gain an in depth understanding of every Libgdx subsystem, including 2D graphics, input, audio, file extensions, and third-party libraries.\nWrite once and deploy to Windows, Linux, Mac, Android, iOS, and browsers.\nFull of uniquely structured recipes that help you get the most out of Libgdx', 220);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
