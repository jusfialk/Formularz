-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: poll_mariadb
-- Czas generowania: 17 Maj 2017, 18:37
-- Wersja serwera: 10.1.23-MariaDB-1~jessie
-- Wersja PHP: 7.0.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `poll`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `udar`
--

CREATE TABLE `udar` (
  `ID` int(11) NOT NULL,
  `sex` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `what_is_stroke` int(11) NOT NULL,
  `which_is_more_frequent` int(11) NOT NULL,
  `causes` varchar(127) NOT NULL,
  `symptoms` varchar(127) NOT NULL,
  `causes_young_people` int(11) NOT NULL,
  `age_stroke` int(11) NOT NULL,
  `prevention` varchar(127) NOT NULL,
  `recognition` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `death` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `udar`
--

INSERT INTO `udar` (`ID`, `sex`, `age`, `city`, `what_is_stroke`, `which_is_more_frequent`, `causes`, `symptoms`, `causes_young_people`, `age_stroke`, `prevention`, `recognition`, `time`, `death`, `weight`, `height`) VALUES
(5, 1, 2, 1, 1, 0, 'a:8:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"3\";i:4;s:1:\"4\";i:5;s:1:\"5\";i:6;s:1:\"6\";i:7;s:1:\"7\";}', 'a:8:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"3\";i:4;s:1:\"4\";i:5;s:1:\"5\";i:6;s:1:\"6\";i:7;s:1:\"7\";}', 0, 1, 'a:6:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"3\";i:4;s:1:\"4\";i:5;s:1:\"5\";}', 0, 1, 0, 90, 172),
(6, 1, 2, 1, 1, 0, 'a:8:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"3\";i:4;s:1:\"4\";i:5;s:1:\"5\";i:6;s:1:\"6\";i:7;s:1:\"7\";}', 'a:8:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"3\";i:4;s:1:\"4\";i:5;s:1:\"5\";i:6;s:1:\"6\";i:7;s:1:\"7\";}', 0, 1, 'a:6:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"3\";i:4;s:1:\"4\";i:5;s:1:\"5\";}', 0, 1, 0, 90, 172);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `udar`
--
ALTER TABLE `udar`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `udar`
--
ALTER TABLE `udar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
