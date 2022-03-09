-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2022 alle 22:46
-- Versione del server: 8.0.21
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_davidbrugnara`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Dipartimenti`
--

CREATE TABLE IF NOT EXISTS `Dipartimenti` (
  `Codice` char(5) NOT NULL,
  `Descrizione` char(20) NOT NULL,
  `Sede` char(20) DEFAULT NULL,
  `Manager` smallint DEFAULT NULL,
  PRIMARY KEY (`Codice`),
  UNIQUE KEY `Descrizione` (`Descrizione`),
  KEY `Manager` (`Manager`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
