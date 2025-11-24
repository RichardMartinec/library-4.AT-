-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Po 24.Nov 2025, 21:39
-- Verzia serveru: 10.4.32-MariaDB
-- Verzia PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `library`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `nazov` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `pocet_stran` int(11) NOT NULL,
  `zaner` varchar(255) NOT NULL,
  `pozicana` varchar(255) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `books`
--

INSERT INTO `books` (`id`, `nazov`, `autor`, `pocet_stran`, `zaner`, `pozicana`) VALUES
(7, 'book11', 'author11', 216, 'Komedia', 'NO'),
(10, 'book9', 'author9', 147, 'Fantasy', 'YES'),
(12, 'knihavecna', 'richard', 255, 'Fantasy', 'YES'),
(14, 'novakniha', 'novyautor', 255, 'Drama', 'YES'),
(16, 'Kniha24', 'autor24', 215, 'Sci-fi', 'YES'),
(17, 'Kniha25', 'Autor25', 215, 'Komiks', 'YES'),
(19, 'kniha', 'autor', 500, 'Komedia', 'NO');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'pokus', 'heslo', 'admin'),
(3, 'lubo', 'lubo', 'user'),
(4, 'richard', 'hesl10', 'user'),
(13, 'lubolubo', 'heslo455', 'user'),
(15, 'RichardMartinec', '9898', 'user'),
(17, 'newman', 'newpas', 'user'),
(19, 'newuse', 'newhes', 'user'),
(20, 'novyuz', 'novehe', 'admin'),
(21, 'lubo1', 'lubo1', 'user'),
(22, 'richard2', 'richard2', 'user');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
