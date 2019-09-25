-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 sep 2019 om 19:43
-- Serverversie: 10.3.15-MariaDB
-- PHP-versie: 7.3.6
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET
  AUTOCOMMIT = 0;
START TRANSACTION;
SET
  time_zone = "+00:00";
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
  ) ENGINE = InnoDB DEFAULT CHARSET = latin1;
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
  ) ENGINE = InnoDB DEFAULT CHARSET = latin1;
--
  -- Indexen voor tabel `item_table`
  --
ALTER TABLE
  `item_table`
ADD
  PRIMARY KEY (`id`),
ADD
  KEY `user_id` (`user_id`);
--
  -- Indexen voor tabel `user_table`
  --
ALTER TABLE
  `user_table`
ADD
  PRIMARY KEY (`id`);
--
  -- AUTO_INCREMENT voor geëxporteerde tabellen
  --
  --
  -- AUTO_INCREMENT voor een tabel `item_table`
  --
ALTER TABLE
  `item_table`
MODIFY
  `id` int(4) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 32;
--
  -- AUTO_INCREMENT voor een tabel `user_table`
  --
ALTER TABLE
  `user_table`
MODIFY
  `id` int(4) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 21;
--
  -- Beperkingen voor geëxporteerde tabellen
  --
  --
  -- Beperkingen voor tabel `item_table`
  --
ALTER TABLE
  `item_table`
ADD
  CONSTRAINT `item_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`id`);
COMMIT;
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;