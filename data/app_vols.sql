-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 19 juin 2020 à 19:29
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `app_vols`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(254) NOT NULL,
  `prenom` varchar(254) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(254) NOT NULL,
  `num_passport` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `phone`, `email`, `num_passport`) VALUES
(134, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 767676),
(135, 'MOU', 'BRA', 607279713, 'brahi@gmail.com', 767676),
(136, 'MOU', 'BRA', 607279713, 'brahi@gmail.com', 767676),
(137, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 767676),
(138, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 767676),
(139, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 767676),
(140, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 767676),
(141, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 767676);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_vol` int(11) NOT NULL,
  `date_reservation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(254) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(254) NOT NULL,
  `num_passport` int(11) NOT NULL,
  `mot_de_passe` varchar(72) NOT NULL,
  `groupID` int(11) NOT NULL DEFAULT 0,
  `cree_a` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `nom`, `prenom`, `tel`, `email`, `num_passport`, `mot_de_passe`, `groupID`, `cree_a`) VALUES
(57, 'MOUISSI', 'BRAHIM', '0607279713', 'm@m.com', 18, '105afa7ab982c081ea03b9566b669264884a5fa6', 1, '2020-05-26 22:56:48'),
(71, 'MOUISSI', 'BRAHIM', '0607279713', '4@gmail.com', 767676, '0ea9b73b428727034c7cb0f2a7d6aaac6e761ad3', 0, '2020-06-11 20:41:48');

-- --------------------------------------------------------

--
-- Structure de la table `vols`
--

CREATE TABLE `vols` (
  `id_vol` int(11) NOT NULL,
  `nom_vol` varchar(254) DEFAULT NULL,
  `departure` varchar(254) DEFAULT NULL,
  `arrival` varchar(254) DEFAULT NULL,
  `d_depart` datetime DEFAULT NULL,
  `d_arrival` datetime DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `place` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vols`
--

INSERT INTO `vols` (`id_vol`, `nom_vol`, `departure`, `arrival`, `d_depart`, `d_arrival`, `prix`, `place`) VALUES
(1, 'AirBUS', 'Paris', 'Casablanca', '2020-05-03 10:30:00', '2020-05-03 14:30:00', 2000, 200),
(2, 'AIRFRANCE', 'Lyon', 'Wahrane', '2020-05-12 15:30:00', '2020-05-12 19:30:00', 1000, 150),
(3, 'AIRFRANCE', 'Rabat', 'Roma', '2020-05-19 10:54:00', '2020-05-19 14:55:00', 2000, 20),
(4, 'SKY4', 'Tanger', 'Roma', '2020-10-19 10:00:00', '2020-10-19 14:00:00', 800, 90),
(5, 'VUELING', 'Agadir', 'Las Palmas', '2020-07-19 10:00:00', '2020-07-19 14:00:00', 700, 200),
(6, 'VOY4U', 'Casablanca', 'Madrid', '2020-12-19 10:00:00', '2020-12-19 14:00:00', 1200, 60),
(7, 'QATAR', 'Barcalona', 'Marrakesh', '2020-09-19 10:00:00', '2020-09-19 14:00:00', 1000, 100),
(29, 'SKY4', 'Casablanca', 'Paris', '2020-05-05 00:00:00', '2020-05-11 00:00:00', 17, 18),
(32, 'airline', 'Paris', 'Roma', '2020-05-21 05:05:00', '2020-05-21 02:05:00', 3999, 199),
(122, 'airline', 'Paris', 'Casablanca', '2020-06-14 19:04:00', '2020-06-14 21:04:00', 3999, 90),
(123, 'AH', 'Paris', 'Roma', '2020-06-14 14:00:00', '2020-06-03 13:00:00', 3999, 199),
(126, 'BRH90', 'Paris', 'Casablanca', '2020-06-03 20:29:00', '2020-06-03 21:30:00', 3999, 199),
(128, 'BRH90', 'Paris', 'Casablanca', '2020-06-03 20:29:00', '2020-06-03 21:30:00', 3999, 199),
(129, 'CCF', 'Paris', 'Casablanca', '2020-06-03 20:32:00', '2020-06-04 20:32:00', 988, 90),
(134, 'CCF', 'Paris', 'Casablanca', '2020-06-03 20:32:00', '2020-06-04 20:32:00', 988, 90),
(136, 'airline', 'Paris', 'Casablanca', '2020-06-07 20:36:00', '2020-06-07 21:37:00', 988, 20),
(143, 'SKY4', 'Paris', 'Casablanca', '2020-06-06 22:36:00', '2020-06-10 22:36:00', 3999, 90),
(148, 'airline', 'Paris', 'Casablanca', '2020-06-11 22:38:00', '2020-06-11 01:38:00', 3999, 90),
(154, 'VCF', 'Paris', 'Casablanca', '2020-06-01 21:40:00', '2020-06-01 01:40:00', 555, 2),
(159, 'XVC', 'Paris', 'Casablanca', '2020-06-10 21:48:00', '2020-06-10 21:48:00', 988, 90),
(165, 'airline', 'Paris', 'Roma', '2020-06-04 21:56:00', '2020-06-03 21:56:00', 3999, 90);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_vol` (`id_vol`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `vols`
--
ALTER TABLE `vols`
  ADD PRIMARY KEY (`id_vol`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT pour la table `vols`
--
ALTER TABLE `vols`
  MODIFY `id_vol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_vol`) REFERENCES `vols` (`id_vol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
