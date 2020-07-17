-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 18. Jul 2020 um 00:29
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_andreaspirkner_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_andreaspirkner_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_andreaspirkner_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `p_date` date NOT NULL,
  `media_type` varchar(50) NOT NULL,
  `description` varchar(70) NOT NULL,
  `isbn` int(50) NOT NULL,
  `a_first_name` varchar(255) NOT NULL,
  `a_last_name` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `p_type` varchar(255) NOT NULL,
  `availability` int(50) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `image`, `title`, `p_date`, `media_type`, `description`, `isbn`, `a_first_name`, `a_last_name`, `publisher`, `p_address`, `p_type`, `availability`, `active`) VALUES
(1, 'img/1.jpg', 'Maze Runner - Death Cure', '2019-10-08', 'DVD', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,...', 1442151473, 'James', 'Dashner', '20th Century Fox', 'Los Angeles', 'L', 2, 0),
(2, 'img/2.jpg', 'Maze Runner', '2018-10-16', 'DVD', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,....', 2114151472, 'James', 'Dashner', '20th Century Fox', 'Los Angeles', 'L', 1, 0),
(3, 'img/3.jpg', 'Maze Runner-The Scorch Trials', '2018-10-09', 'DVD', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,...', 111151479, 'James', 'Dashner', '20th Century Fox', 'Los Angeles', 'L', 0, 0),
(4, 'img/4.jpg', 'Percy Jackson-The Lightening Thief', '2010-09-14', 'DVD', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,...', 1232151789, 'Rick', 'Riordan', '20th Century Fox', 'Los Angeles', 'L', 1, 0),
(5, 'img/5.jpg', 'Percy Jackson-Sea Of Monsters', '2011-08-06', 'DVD', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,...', 1232151473, 'Rick', 'Riordan', '20th Century Fox', 'Los Angeles', 'L', 3, 0),
(6, 'img/6.jpg', 'The Giver', '2014-07-21', 'DVD', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,...', 123151478, 'Lois', 'Lowry', 'Studiocanal', 'Issy-Les-Moulineaux', 'M', 0, 0),
(7, 'img/7.jpg', 'Harry Potter-Chamber Of Secrets', '2002-07-15', 'Book', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,...', 2000151777, 'J.K.', 'Rowling', 'Bloomsbury Publishing', 'London', 'S', 1, 0),
(8, 'img/8.jpg', 'Harry Potter-Complete Collection', '2015-07-15', 'Book', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,...', 1212115147, 'J.K.', 'Rowling', 'Bloomsbury Publishing', 'London', 'S', 0, 0),
(9, 'img/9.jpg', 'Harry Potter-The Halfblood Prince', '2004-07-06', 'Book', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,...', 122151473, 'J.K.', 'Rowling', 'Bloomsbury Publishing', 'London', 'S', 1, 0),
(10, 'img/10.jpg', 'Harry Potter-Goblet Of Fire-Audiobook', '2005-07-30', 'CD', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,...', 2112151473, 'J.K.', 'Rowling', 'EMI', 'New York', 'M', 2, 0),
(11, 'img/11.jpg', '', '2007-07-28', 'CD', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,...', 1112151473, 'J.K.', 'Rowling', 'EMI', 'New York', 'M', 0, 0),
(12, 'img/12.jpg', 'Attraction', '2020-01-01', 'DVD', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,...', 12345, 'Hans', 'Moser', 'irgendeiner', 'Tulln', 'S', 1, 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
