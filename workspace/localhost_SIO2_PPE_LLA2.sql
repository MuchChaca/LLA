--
-- Database: `SIO2_PPE_LLA2`
--
CREATE DATABASE IF NOT EXISTS `SIO2_PPE_LLA2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `SIO2_PPE_LLA2`;

-- --------------------------------------------------------

--
-- Table structure for table `athletes`
--

CREATE TABLE `athletes` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `sex` char(1) DEFAULT NULL COMMENT 'F = Female M = Male',
  `club_id` varchar(7) DEFAULT NULL,
  `category_id` varchar(5) DEFAULT NULL,
  `trainer_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `athletes`
--

INSERT INTO `athletes` (`id`, `last_name`, `first_name`, `birth_date`, `sex`, `club_id`, `category_id`, `trainer_id`, `created`) VALUES
(1, 'BETTE', 'Emma', '1992-10-08', 'F', '054060', 'ESF', 1, NULL),
(2, 'BENNIE', 'Julie', '1995-09-29', 'F', '054064', 'JUF', 1, NULL),
(3, 'BENNIE', 'Sylvain', '1993-07-02', 'M', '054064', 'ESM', 2, NULL),
(4, 'AUDILE', 'Nancy', '1993-11-12', 'F', '088008', 'ESF', 6, NULL),
(5, 'GUYANT', 'Jean-Yves', '1992-02-09', 'M', '055017', 'ESM', 6, NULL),
(6, 'ALLONS', 'Kévin', '1994-12-10', 'M', '054020', 'ESM', 1, NULL),
(7, 'JANNE', 'Andréa', '1992-10-09', 'F', '054020', 'ESF', 3, NULL),
(8, 'CORTE', 'Manon', '1992-06-01', 'F', '054020', 'ESF', 2, NULL),
(9, 'KOPE', 'Paul', '1996-12-03', 'M', '054020', 'JUM', 3, NULL),
(10, 'DINA', 'Karim', '1995-02-20', 'M', '054020', 'JUM', 2, NULL),
(11, 'DOPE', 'Isabelle', '1993-04-23', 'F', '054020', 'ESF', 1, NULL),
(12, 'DEMANT', 'Gilles', '1992-12-12', 'M', '054007', 'ESM', 6, NULL),
(13, 'LABORY', 'Luc', '1995-01-09', 'M', '088020', 'JUM', 6, NULL),
(14, 'GONTIER', 'Louis', '1995-06-14', 'M', '057049', 'JUM', 1, NULL),
(15, 'LOUMI', 'Samuel', '1996-06-30', 'M', '054061', 'JUM', 5, NULL),
(16, 'ROY', 'Jean', '1993-05-15', 'M', '057049', 'ESM', 2, NULL),
(17, 'LAVOIE', 'Marine', '1996-04-05', 'F', '088060', 'JUF', 1, NULL),
(18, 'PELLETIER', 'Léa', '1995-06-07', 'F', '055029', 'JUF', 6, NULL),
(19, 'LEBLANC', 'Sacha', '1993-11-04', 'M', '054061', 'ESM', 1, NULL),
(20, 'GIRARD', 'Nathan', '1994-04-24', 'M', '054052', 'ESM', 3, NULL),
(21, 'LECLERC', 'Clho', '1996-10-30', 'F', '088017', 'JUF', 4, NULL),
(22, 'POIRIER', 'Alice', '1995-04-21', 'F', '054007', 'JUF', 3, NULL),
(23, 'FOURNIER', 'Nina', '1993-12-01', 'F', '057058', 'ESF', 5, NULL),
(24, 'CLOUTIER', 'Bastien', '1995-03-21', 'M', '054060', 'JUM', 5, NULL),
(25, 'POULIN', 'Laura', '1996-06-15', 'F', '054018', 'JUF', 4, NULL),
(26, 'MARTEL', 'Paul', '1995-08-26', 'M', '088037', 'JUM', 4, NULL),
(27, 'BERNIER', 'Agathe', '1996-10-30', 'F', '088037', 'JUF', 1, NULL),
(28, 'Jeune', 'Testeur', '2007-01-01', 'M', '054016', 'JUM', 5, '2017-01-02 09:47:27');

--
-- Triggers `athletes`
--
DELIMITER $$
CREATE TRIGGER `athletes_created` BEFORE INSERT ON `athletes` FOR EACH ROW BEGIN
         SET NEW.created = NOW();
      END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` varchar(5) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `starting_age` smallint(6) DEFAULT NULL,
  `ending_age` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `sex`, `starting_age`, `ending_age`) VALUES
('ESF', 'Espoir Fille', 'F', 20, 22),
('ESM', 'Espoir Garçon', 'M', 20, 22),
('JUF', 'Junior Fille', 'F', 18, 19),
('JUM', 'Junior Garçon', 'M', 18, 19);

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` varchar(7) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `created`) VALUES
('054007', 'ASHTTP Nancy', NULL),
('054016', 'LAC Lunéville', NULL),
('054018', 'US Jarny', NULL),
('054020', 'US Toul', NULL),
('054052', 'COS Villers lès Nancy', NULL),
('054060', 'ASTV Nancy', NULL),
('054061', 'EAVL', NULL),
('054064', 'CA Tour Pédestre de Villiers', NULL),
('054088', 'OC Custines', NULL),
('055017', 'GAM Ligny en Barrois', NULL),
('055029', 'ATHLE 55 Bar le Duc', NULL),
('057049', 'FM Fensch', NULL),
('057058', 'A2M Metz', NULL),
('088008', 'COHM Vagney', NULL),
('088017', 'RESDA', NULL),
('088020', 'AVEC Rambervilliers', NULL),
('088037', 'AVEC Epinal', NULL),
('088060', 'ACHM', NULL),
('88061', 'TEST La Ligue qui test', '2017-01-03 09:14:50');

--
-- Triggers `clubs`
--
DELIMITER $$
CREATE TRIGGER `clubs_id_trg` BEFORE INSERT ON `clubs` FOR EACH ROW BEGIN
		SET NEW.id = (SELECT MAX(id)+1
							FROM clubs);
	END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `specialties`
--

CREATE TABLE `specialties` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specialties`
--

INSERT INTO `specialties` (`id`, `name`) VALUES
(1, '100m'),
(2, '200m'),
(3, '250m haie'),
(4, 'marathon'),
(5, 'decathlon'),
(6, 'marche à pied'),
(7, 'javelot');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `sex` char(1) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT 'F = Female M = Male',
  `old_athlete` tinyint(1) DEFAULT NULL,
  `club_id` varchar(7) DEFAULT NULL,
  `specialty_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `last_name`, `first_name`, `birth_date`, `sex`, `old_athlete`, `club_id`, `specialty_id`, `created`) VALUES
(1, 'EXTRATER', 'Paul', '1990-10-11', 'M', 0, '057058', 2, NULL),
(2, 'PRIMA', 'Calleid', '1990-09-08', 'F', 1, '088017', 1, NULL),
(3, 'DONOVAN', 'Minerva', '1988-11-24', 'F', 1, '054060', 4, NULL),
(4, 'MINERTA', 'Gilfoild', '1986-06-06', 'M', 1, '088037', 6, NULL),
(5, 'ISHNEN', 'Dinesh', '1986-10-10', 'M', 0, '088020', 3, NULL),
(6, 'BIG', 'Head', '1992-01-30', 'M', 0, '054061', 3, NULL);

--
-- Triggers `trainers`
--
DELIMITER $$
CREATE TRIGGER `trainers_created` BEFORE INSERT ON `trainers` FOR EACH ROW BEGIN
			SET NEW.created = NOW();
		END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athletes`
--
ALTER TABLE `athletes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `athletes_trainers_fk` (`trainer_id`),
  ADD KEY `athletes_categories_fk` (`category_id`),
  ADD KEY `athletes_clubs_fk` (`club_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialties`
--
ALTER TABLE `specialties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specialties_trainers_fk` (`specialty_id`),
  ADD KEY `clubs_trainers_fk` (`club_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athletes`
--
ALTER TABLE `athletes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `specialties`
--
ALTER TABLE `specialties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `athletes`
--
ALTER TABLE `athletes`
  ADD CONSTRAINT `athletes_categories_fk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `athletes_clubs_fk` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`),
  ADD CONSTRAINT `athletes_trainers_fk` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`);

--
-- Constraints for table `trainers`
--
ALTER TABLE `trainers`
  ADD CONSTRAINT `clubs_trainers_fk` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`),
  ADD CONSTRAINT `specialties_trainers_fk` FOREIGN KEY (`specialty_id`) REFERENCES `specialties` (`id`);
