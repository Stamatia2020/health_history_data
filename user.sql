-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1:3306
-- Χρόνος δημιουργίας: 08 Ιουλ 2020 στις 20:21:12
-- Έκδοση διακομιστή: 10.4.10-MariaDB
-- Έκδοση PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `hhd`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `empid` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(40) NOT NULL,
  `id` char(8) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `sex` enum('Α','Γ') DEFAULT NULL,
  `depid` int(11) NOT NULL,
  `cost` float UNSIGNED DEFAULT NULL,
  `date_exam` date NOT NULL,
  PRIMARY KEY (`empid`),
  UNIQUE KEY `id` (`id`),
  KEY `depid` (`depid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `employee`
--

INSERT INTO `employee` (`empid`, `firstname`, `lastname`, `id`, `birthdate`, `sex`, `depid`, `cost`, `date_exam`) VALUES
(1, 'ΝΙΚΟΣ', 'ΑΡΣΕΝΗΣ', 'ΑΧ120133', '1996-02-04', 'Α', 4, 150, '2020-07-01'),
(2, 'ΜΑΝΟΣ', 'ΣΤΑΜΟΣ', 'ΑΒ190380', '1991-02-12', 'Α', 1, 1100, '0000-00-00'),
(3, 'ΑΝΝΑ', 'ΣΤΑΜΙΟΥ', 'ΑΝ400555', '1992-12-14', 'Γ', 3, 950, '0000-00-00'),
(4, 'ΑΝΤΩΝΗΣ', 'ΒΕΡΓΟΣ', 'ΣΣ300400', '1992-03-05', 'Α', 2, 900, '0000-00-00'),
(5, 'ΜΑΡΑΚΙ', 'ΒΑΣΙΛΙΚΟΥ', 'ΠΠ450455', '1995-11-20', 'Γ', 2, 900, '0000-00-00'),
(6, 'ΜΑΙΡΗ', 'ΒΟΓΛΗ', 'ΑΝ400600', '1995-11-11', 'Γ', 3, 1300, '0000-00-00'),
(7, 'ΜΑΡΚΟΣ', 'ΒΑΣΙΛΙΚΟΣ', 'ΤΤ345456', '1970-12-13', 'Α', 1, 750, '0000-00-00'),
(8, 'ΑΛΙΝΑ', 'ΒΕΡΓΟΥ', 'ΠΤ123456', '1990-10-02', 'Γ', 1, 130, '2020-05-12'),
(10, 'ΣΤΑΜΑΤΙΑ', 'ΚΑΡΑΜΠΕΛΑ', 'ΑΙ700800', '1966-11-24', 'Γ', 2, 50, '2020-07-01'),
(11, 'ΔΗΜΗΤΡΙΟΣ', 'ΚΑΤΙΡΤΖΟΓΛΟΥ', 'ΑΧ111111', '1964-02-06', 'Α', 1, 180, '2020-06-09'),
(100, 'ΜΑΡΙΑΝΑ', 'ΠΑΠΑΔΟΠΟΥΛΟΥ', 'ΑΤ548792', '1988-11-11', 'Γ', 1, 150, '2020-06-10'),
(300, 'ΒΑΣΙΛΗΣ', 'ΝΕΤΕΤΑΣ', 'ΝΝ456789', '1999-12-25', 'Γ', 3, 180, '2020-06-12'),
(400, 'ΑΛΙΚΗ', 'ΚΑΣΚΑΝΗ', 'ΑΚ123456', '2002-09-25', 'Γ', 3, 120, '2020-06-04'),
(500, 'ΕΥΑΓΓΕΝΙΑ', 'ΚΑΡΑΚΑΣΗ', 'XX111111', '2000-11-11', 'Γ', 4, 125, '2020-06-05'),
(1111, 'ΚΑΤΕΡΙΝΑ', 'ΠΑΣΧΑΛΙΔΟΥ', 'ΧΧ111111', '2000-11-11', 'Γ', 1, 100, '2020-06-25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
