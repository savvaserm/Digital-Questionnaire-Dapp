

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: svdb
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `contracts`
--

CREATE TABLE `contracts` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `perigrafi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `contracts`
--

INSERT INTO `contracts` (`id`, `id_user`, `title`, `perigrafi`) VALUES
(1, 2, 'tetst1', 'test23422'),
(2, 2, 'tetst1', 'test23422'),
(3, 2, 'tetst1', 'test23422'),
(4, 2, 'tetst1', 'test23422');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `erotiseis`
--

CREATE TABLE `erotiseis` (
  `id` int(11) NOT NULL,
  `id_test` int(11) NOT NULL,
  `ekfonisi` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `typos` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `answers` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `erotiseis`
--

INSERT INTO `erotiseis` (`id`, `id_test`, `ekfonisi`, `typos`, `answers`) VALUES
(13, 4, 'Φύλο', 'Multiple Choice', 'Άντρας, Γυναίκα'),
(14, 4, 'Αποτέλεσμα', 'Multiple Choice', '1,2,3,4,5,6,7,8,9,10'),
(16, 4, 'Βαθμός', 'Value', ''),
(17, 6, 'Όνομα', 'Value', ''),
(19, 6, 'Μεταδοτικότητα', 'Multiple Choice', '1,2,3,4,5'),
(20, 6, 'Εκπειρία', 'Multiple Choice', '1,2,3,4,5');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `onoma` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `perigrafi` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `tests`
--

INSERT INTO `tests` (`id`, `onoma`, `perigrafi`, `id_user`) VALUES
(4, 'test1', 'test1', 1),
(5, 'test22', 'this is a sample test', 5),
(6, 'karagiannis', 'This test is evaluate for karagiannis', 5);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `fullname`) VALUES
(1, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'user1@user.gr', 'user1 user1'),
(2, 'user20', '81dc9bdb52d04dc20036dbd8313ed055', 'user20@user.gr', 'user20 user20'),
(3, 'Papadge', '9036488da115103a2a724ccb79e5a1a8', 'g.papadopoulou91@gmail.com', 'Georgia Papadopoulou'),
(4, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'user1@user.gr', 'user1 user1'),
(5, 'user2', '7e58d63b60197ceb55a1c487989a3720', 'user2@user.gr', 'user2 user2');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `erotiseis`
--
ALTER TABLE `erotiseis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `erotiseis_ibfk_1` (`id_test`);

--
-- Ευρετήρια για πίνακα `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT για πίνακα `erotiseis`
--
ALTER TABLE `erotiseis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT για πίνακα `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `erotiseis`
--
ALTER TABLE `erotiseis`
  ADD CONSTRAINT `erotiseis_ibfk_1` FOREIGN KEY (`id_test`) REFERENCES `tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
