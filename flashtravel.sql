-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 09 déc. 2022 à 12:08
-- Version du serveur :  10.1.25-MariaDB
-- Version de PHP :  7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `flashtravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `mdp`) VALUES
(1, 'maevadjoko9@gmail.com', 'maeva'),
(2, 'kouadjo07@gmail.com', 'syntichemonbebe');

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `email`, `mdp`) VALUES
(1, 'dylan@gmail.com', 'dylan');

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE `voyage` (
  `id` int(11) NOT NULL,
  `villeDepart` varchar(20) NOT NULL,
  `villeArrivee` varchar(20) NOT NULL,
  `datedep` date NOT NULL,
  `heureDepart` varchar(20) NOT NULL,
  `heureArrivee` varchar(20) NOT NULL,
  `prix` double NOT NULL,
  `type` varchar(20) NOT NULL,
  `confort` varchar(20) NOT NULL,
  `nbPlaces` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `voyage`
--

INSERT INTO `voyage` (`id`, `villeDepart`, `villeArrivee`, `datedep`, `heureDepart`, `heureArrivee`, `prix`, `type`, `confort`, `nbPlaces`) VALUES
(1, 'Douala', 'Yaounde', '2022-12-01', '8:00', '12:00', 15000, 'aller simple', 'vip', 40),
(2, 'Douala', 'Yaounde', '2022-12-11', '17:00', '12:00', 15000, 'aller simple', 'vip', 40),
(3, 'Douala', 'Yaounde', '2022-12-12', '12:00', '16:00', 3500, 'aller simple', 'classique', 40),
(4, 'Douala', 'Yaounde', '2022-12-13', '05:00', '10:00', 3500, 'aller simple', 'classique', 40),
(5, 'Douala', 'Yaounde', '2022-12-14', '20:00', '23:00', 15000, 'aller simple', 'vip', 40),
(6, 'Yaounde', 'Douala', '2023-01-10', '8:00', '12:00', 15000, 'aller simple', 'vip', 40),
(7, 'Yaounde', 'Douala', '2023-01-11', '17:00', '12:00', 15000, 'aller simple', 'vip', 40),
(8, 'Yaounde', 'Douala', '2023-01-12', '12:00', '16:00', 3500, 'aller simple', 'classique', 40),
(9, 'Yaounde', 'Douala', '2023-01-13', '05:00', '10:00', 3500, 'aller simple', 'classique', 40),
(10, 'Yaounde', 'Douala', '2023-01-14', '20:00', '23:00', 15000, 'aller simple', 'vip', 40),
(11, 'Douala', 'Bafoussam', '2023-01-10', '8:00', '12:00', 15000, 'aller simple', 'vip', 40),
(12, 'Douala', 'Bafoussam', '2023-01-11', '17:00', '12:00', 15000, 'aller simple', 'vip', 40),
(13, 'Douala', 'Bafoussam', '2023-01-12', '12:00', '16:00', 6000, 'aller simple', 'classique', 40),
(14, 'Douala', 'Bafoussam', '2023-01-13', '05:00', '10:00', 6000, 'aller simple', 'classique', 40),
(15, 'Douala', 'Bafoussam', '2023-01-14', '20:00', '23:00', 15000, 'aller simple', 'vip', 40),
(16, 'Bafoussam', 'Yaounde', '2022-12-10', '8:00', '12:00', 15000, 'aller simple', 'vip', 40),
(17, 'Bafoussam', 'Yaounde', '2022-12-11', '17:00', '12:00', 15000, 'aller simple', 'vip', 40),
(18, 'Bafoussam', 'Yaounde', '2022-12-12', '12:00', '16:00', 7000, 'aller simple', 'classique', 40),
(19, 'Bafoussam', 'Yaounde', '2022-12-13', '05:00', '10:00', 7000, 'aller simple', 'classique', 40),
(20, 'Bafoussam', 'Yaounde', '2022-12-14', '20:00', '23:00', 15000, 'aller simple', 'vip', 40);

-- --------------------------------------------------------

--
-- Structure de la table `voyageur`
--

CREATE TABLE `voyageur` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `tel` int(11) NOT NULL,
  `numcni` varchar(30) NOT NULL,
  `datedepart` date NOT NULL,
  `heuredepart` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `prixticket` double NOT NULL,
  `bagage` int(11) NOT NULL,
  `date` date NOT NULL,
  `iddep` int(11) NOT NULL,
  `depart` varchar(30) NOT NULL,
  `arrivee` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `voyageur`
--

INSERT INTO `voyageur` (`nom`, `prenom`, `tel`, `numcni`, `datedepart`, `heuredepart`, `type`, `prixticket`, `bagage`, `date`, `iddep`, `depart`, `arrivee`) VALUES
('Djoko', 'Syntiche Maeva', 455668, '1234', '2022-12-06', '8:00', 'aller-retour', 15000, 0, '2022-12-09', 1, 'Douala', 'Yaounde'),
('djoko', 'maeva', 695447937, '123654', '2022-12-16', '18:00', 'vip', 10000, 3, '2022-12-09', 3, 'Douala', 'Bafoussam'),
('metcheka', 'dylan', 2147483647, '1789', '2022-12-06', '8:00', 'aller-retour', 15000, 0, '2022-12-09', 1, 'Douala', 'Yaounde'),
('fokoua', 'ange', 455668, '178988', '2022-12-07', '11:00', 'aller', 3500, 1, '2022-12-09', 2, 'Yaounde', 'Douala'),
('Djoko', 'Syntiche Maeva', 12222222, '444444', '2022-12-06', '8:00', 'aller-retour', 15000, 0, '2022-12-09', 1, 'Douala', 'Yaounde'),
('NGO TCHOCK', 'Rachel-Alice', 67898, 'lk45', '2022-12-07', '11:00', 'aller', 3500, 0, '2022-12-09', 2, 'Yaounde', 'Douala');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mdp` (`mdp`),
  ADD KEY `email` (`email`);

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voyage`
--
ALTER TABLE `voyage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `villeDepart` (`villeDepart`),
  ADD KEY `villeArrivee` (`villeArrivee`),
  ADD KEY `heureDepart` (`heureDepart`),
  ADD KEY `heureArrivee` (`heureArrivee`),
  ADD KEY `prix` (`prix`),
  ADD KEY `type` (`type`),
  ADD KEY `confort` (`confort`),
  ADD KEY `datedep` (`datedep`);

--
-- Index pour la table `voyageur`
--
ALTER TABLE `voyageur`
  ADD PRIMARY KEY (`numcni`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `voyage`
--
ALTER TABLE `voyage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
