-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 sep 2019 om 19:43
-- Serverversie: 10.3.15-MariaDB
-- PHP-versie: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eindopdracht`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `item_table`
--

CREATE TABLE `item_table` (
  `id` int(4) NOT NULL,
  `title` varchar(48) NOT NULL,
  `priority` int(4) NOT NULL,
  `user_id` int(4) NOT NULL,
  `description` text NOT NULL,
  `bought` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `item_table`
--

INSERT INTO `item_table` (`id`, `title`, `priority`, `user_id`, `description`, `bought`) VALUES
(12, 'Ibuprofen', 3, 16, 'Medicijn', 'yes'),
(13, 'Zonnebloempitjes', 2, 16, 'vreten', 'no'),
(14, 'Staatsieportret', 1, 16, 'Kutwoord', 'no'),
(19, 'Een Pan', 3, 18, 'Een speciale pan', 'yes'),
(20, 'Vakantie', 1, 18, 'Vakantie naar Portugal', 'yes'),
(21, 'Cadeaubon', 2, 18, 'Bon voor massage', 'yes'),
(22, 'Ringen', 2, 19, 'Mooie ringen', 'yes'),
(23, 'Vakantie ', 1, 19, 'Vakantie naar Toscane', 'yes'),
(24, 'Een kat', 3, 19, 'Een zusje voor sky', 'yes'),
(25, 'Peper en Zoutstel', 1, 20, '', 'no'),
(26, 'Geld', 4, 20, '', 'yes'),
(28, 'Laptop', 5, 20, '', 'no'),
(29, 'Televisie', 3, 20, '', 'no'),
(31, 'Nieuwe pen', 0, 20, '', 'no');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_table`
--

CREATE TABLE `user_table` (
  `id` int(4) NOT NULL,
  `FullName` varchar(64) NOT NULL,
  `username` varchar(48) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `secret_key` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user_table`
--

INSERT INTO `user_table` (`id`, `FullName`, `username`, `password`, `email`, `secret_key`) VALUES
(16, 'Daphne Vink', 'daphnevink', '7574c24a0508487720d454917d33f150', 'daphnevink@hotmail.nl', 'c9009bc1'),
(17, 'Bryan Dijkhuizen', 'bryandijkhuizen', '005911a697e8a5976e97067fa2c45f64', 'dijkhuizenb@outlook.com', 'fdef0549'),
(18, 'Chantal Perdon', 'c.perdon', '6d938831df52a3fb3c43179b461ceaca', 'chantalenbertil@ziggo.nl', '67f5a440'),
(19, 'Sanne Dijkhuizen', 'sannedijkhuizen', '7b2cd64b85427468be1c6e568c2cded8', 'sanne2005@ziggo.nl', 'ca342ea8'),
(20, 'Bertil Dijkhuizen', 'b.r.dijkhuizen', 'baaabd908035248b70beb48482f0e731', 'bertil.dijkhuizen@nouryon.com', '29f3d1a7');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `item_table`
--
ALTER TABLE `item_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `item_table`
--
ALTER TABLE `item_table`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT voor een tabel `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `item_table`
--
ALTER TABLE `item_table`
  ADD CONSTRAINT `item_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
