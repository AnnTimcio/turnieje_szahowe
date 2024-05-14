-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 14, 2024 at 02:00 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turnieje_szachowe`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `turniej`
--

CREATE TABLE `turniej` (
  `id_t` int(11) NOT NULL,
  `organizator` varchar(30) NOT NULL,
  `nazwa` varchar(30) NOT NULL,
  `data_t` date NOT NULL,
  `opis` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `turniej`
--

INSERT INTO `turniej` (`id_t`, `organizator`, `nazwa`, `data_t`, `opis`) VALUES
(1, 'KOT', 'Turniej szachowy kot', '2024-05-23', 'nasz super turniej'),
(2, 'Pies', 'psie szachy', '2024-06-18', 'nasz turniej z psami');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczestnik`
--

CREATE TABLE `uczestnik` (
  `id_u` int(11) NOT NULL,
  `nazwisko` varchar(20) NOT NULL,
  `data_u` date NOT NULL,
  `id_t` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uczestnik`
--

INSERT INTO `uczestnik` (`id_u`, `nazwisko`, `data_u`, `id_t`) VALUES
(1, 'fsdfsd', '2024-05-16', 1),
(2, 'Beata Kobzidziej', '1998-02-18', 1),
(3, 'Beata Kobzidziej', '2024-05-10', 2),
(4, 'Franek Prówa', '2007-06-14', 2),
(6, 'Beata Kobzidziej', '2024-05-16', 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `turniej`
--
ALTER TABLE `turniej`
  ADD PRIMARY KEY (`id_t`);

--
-- Indeksy dla tabeli `uczestnik`
--
ALTER TABLE `uczestnik`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `turniej`
--
ALTER TABLE `turniej`
  MODIFY `id_t` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uczestnik`
--
ALTER TABLE `uczestnik`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
