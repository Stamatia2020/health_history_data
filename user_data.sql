-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1:3306
-- Χρόνος δημιουργίας: 30 Ιουν 2020 στις 12:26:28
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
-- Βάση δεδομένων: `user.data`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `personal_data`
--

DROP TABLE IF EXISTS `personal_data`;
CREATE TABLE IF NOT EXISTS `personal_data` (
  `ΑΜΚΑ` bigint(11) NOT NULL,
  `Όνομα` varchar(40) CHARACTER SET utf8 NOT NULL,
  `Επώνυμο` varchar(40) CHARACTER SET utf8 NOT NULL,
  `Διεύθυνση κατοικίας` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Τηλέφωνο` bigint(10) NOT NULL,
  `Ημερομηνία Γέννησης` date DEFAULT NULL,
  PRIMARY KEY (`ΑΜΚΑ`),
  UNIQUE KEY `ΑΜΚΑ` (`ΑΜΚΑ`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `personal_data`
--

INSERT INTO `personal_data` (`ΑΜΚΑ`, `Όνομα`, `Επώνυμο`, `Διεύθυνση κατοικίας`, `Τηλέφωνο`, `Ημερομηνία Γέννησης`) VALUES
(15048745167, 'Μαρία', 'Πασχαλίδου', 'Θεσσαλονίκη', 2141234567, '1985-06-10');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `portofolio`
--

DROP TABLE IF EXISTS `portofolio`;
CREATE TABLE IF NOT EXISTS `portofolio` (
  `Όνοματεπώνυμο Ιατρού` varchar(40) CHARACTER SET utf8 NOT NULL,
  `Ημερομηνία εξέτασης` date NOT NULL,
  `Αιτία εξέτασης` text CHARACTER SET utf8 NOT NULL,
  `Διάγνωση` text CHARACTER SET utf8 NOT NULL,
  `Αντιμετώπιση` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Τηλέφωνο Ιατρού` bigint(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `portofolio`
--

INSERT INTO `portofolio` (`Όνοματεπώνυμο Ιατρού`, `Ημερομηνία εξέτασης`, `Αιτία εξέτασης`, `Διάγνωση`, `Αντιμετώπιση`, `Τηλέφωνο Ιατρού`) VALUES
('Παπαδόπουλος Ευάγγελος', '2020-06-01', 'Πόνος κατά την αναπνοή', 'Υγρό στους πνέυμονες', 'Αντιβίωση \"τάδε\" για 10 μέρες', 2121245789),
('Καράμπελας Ιωάννης', '2020-05-12', 'Πόνος στο δόντι', 'Φλεγμονή δοντιού', 'αντιφλεγμονώδες ταδε για 14 μέρες', 6971478954),
('Παρίση Μαρία', '2020-03-09', 'έντονη κόπωση και υπνηλία', 'Χαμηλά επίπεδα σιδήρου στο αίμα', 'Συμπληρώματα σιδήρου για 2 μήνες', 6944227894),
('Χαριστού Κατερίνα', '2020-04-13', 'γυναικολογικό τσεκ απ', 'καθαρό τεστ παπ', 'Δεν απαιτείται', 6974845789);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
