-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1:3306
-- Χρόνος δημιουργίας: 30 Ιουν 2020 στις 12:54:23
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
-- Βάση δεδομένων: `doctor.data`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `personal_data`
--

DROP TABLE IF EXISTS `personal_data`;
CREATE TABLE IF NOT EXISTS `personal_data` (
  `Ιατρικό μητρώο` bigint(15) NOT NULL,
  `Όνομα` varchar(40) CHARACTER SET utf8 NOT NULL,
  `Επώνυμο` varchar(40) CHARACTER SET utf8 NOT NULL,
  `Ειδικότητα γιατρού` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Διεύθυνση Εργασίας` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Τηλέφωνο Επικοινωνίας` bigint(10) NOT NULL,
  `Ημερομηνία Γέννησης` date DEFAULT NULL,
  PRIMARY KEY (`Ιατρικό μητρώο`),
  UNIQUE KEY `ΑΜΚΑ` (`Ιατρικό μητρώο`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `personal_data`
--

INSERT INTO `personal_data` (`Ιατρικό μητρώο`, `Όνομα`, `Επώνυμο`, `Ειδικότητα γιατρού`, `Διεύθυνση Εργασίας`, `Τηλέφωνο Επικοινωνίας`, `Ημερομηνία Γέννησης`) VALUES
(124578967458, 'Μαρία', 'Πασχαλίδου', 'Πνευμονολόγος', 'Θεσσαλονίκη', 6974512347, NULL);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `portofolio`
--

DROP TABLE IF EXISTS `portofolio`;
CREATE TABLE IF NOT EXISTS `portofolio` (
  `Όνοματεπώνυμο Ασθενή` varchar(40) CHARACTER SET utf8 NOT NULL,
  `Ημερομηνία εξέτασης` date NOT NULL,
  `Αιτία εξέτασης` text CHARACTER SET utf8 NOT NULL,
  `Διάγνωση` text CHARACTER SET utf8 NOT NULL,
  `Αντιμετώπιση` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Τηλέφωνο Ασθενή` bigint(10) NOT NULL,
  UNIQUE KEY `Όνοματεπώνυμο Ασθενή` (`Όνοματεπώνυμο Ασθενή`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `portofolio`
--

INSERT INTO `portofolio` (`Όνοματεπώνυμο Ασθενή`, `Ημερομηνία εξέτασης`, `Αιτία εξέτασης`, `Διάγνωση`, `Αντιμετώπιση`, `Τηλέφωνο Ασθενή`) VALUES
('Παπαδοπούλου Ευαγγελία', '2020-06-01', 'Πόνος κατά την αναπνοή', 'Υγρό στους πνέυμονες', 'Αντιβίωση \"τάδε\" για 10 μέρες', 6978546123),
('Καράμπελας Ιωάννης', '2020-05-15', 'Δυσκολία στην αναπνοή', 'Φλεγμονή του αναπνευστικού', 'αντιφλεγμονώδες ταδε για 14 μέρες', 6971478958),
('Παρίση Μαρία', '2020-03-19', 'Δυσκολία στον ύπνο ', 'Υπνική άπνοια', 'Αποφυγή ύπνου σε ανάσκελη στάση', 6944227894),
('Χαριστού Κατερίνα', '2020-04-10', 'Δυσκολία στην αναπνοή', 'Ήπιο πνευμονικό οίδημα ', 'αντιβιωτικό \"τάδε\" για 7 ημέρες', 6974845789);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
