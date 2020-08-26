-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 août 2020 à 21:04
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
  `num_passport` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `phone`, `email`, `num_passport`, `id_user`) VALUES
(1, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(2, 'HIMMMM', 'SOOOOO', 2147483647, 'bra@gmail.com', 9899889, 3),
(3, 'bob', 'marly', 2147483647, 'bob@bob.com', 87878776, 2),
(4, 'YOUSSEF', 'KIRAN', 2147483647, 'k@gmail.com', 87878776, 2),
(5, 'MOUISSI', 'BRAHIM', 607279713, 'B@gmail.com', 9899889, 2),
(6, 'Omar', 'HB', 2147483647, 'hb@gmail.com', 87878776, 2),
(7, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(8, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 87878776, 2),
(9, 'MOUISSI', 'BRAHIM', 607279713, 'B.mouissi94@gmail.com', 9999999, 2),
(10, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(11, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(12, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(13, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(14, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(15, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(16, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(17, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(18, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(19, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(20, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(21, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(22, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(23, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(24, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(25, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(26, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(27, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(28, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(29, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(30, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(31, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(32, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(33, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(34, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(35, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(36, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(37, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(38, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(39, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(40, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(41, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(42, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(43, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(44, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(45, 'MPMPMP', 'MPMPM', 607279713, 'brahim7khalil@gmail.com', 0, 2),
(46, 'MPMPMP', 'MPMPM', 607279713, 'brahim7khalil@gmail.com', 0, 2),
(47, 'MPMPMP', 'MPMPM', 607279713, 'brahim7khalil@gmail.com', 0, 2),
(48, 'MPMPMP', 'MPMPM', 607279713, 'brahim7khalil@gmail.com', 0, 2),
(49, 'MPMPMP', 'MPMPM', 607279713, 'brahim7khalil@gmail.com', 0, 2),
(50, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(51, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(52, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(53, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(54, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(55, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(56, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(57, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(58, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(59, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(60, 'mmm', 'bbbbbbbbbb', 2147483647, 'bbbb@gmail.com', 9999999, 2),
(61, 'ssss', 'qsqsqs', 2147483647, 'l@gmail.com', 9999999, 2),
(62, 'hhhhhhhhhhh', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(63, 'JKJK', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(64, '1111', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(65, 'oooo', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(66, 'bvb', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(67, 'bbb', 'bbb', 2147483647, 'bbb@bbb', 9999999, 3),
(68, 'hbhbhb', 'hbhbhbh', 2147483647, 'hbhbh@gmail.com', 87878776, 3),
(69, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(70, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(71, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(72, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(73, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(74, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(75, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(76, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(77, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(78, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(79, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(80, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(81, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(82, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(83, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(84, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(85, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(86, 'vvvvvvvv', 'vvvvvvvvvvvvvvvv', 2147483647, 'vvvvvvvvvv@gmail.com', 9899889, 3),
(87, 'www', 'wwww', 2147483647, '222@gmail.com', 9899889, 3),
(88, 'www', 'wwww', 2147483647, '222@gmail.com', 9899889, 3),
(89, 'www', 'wwww', 2147483647, '222@gmail.com', 9899889, 3),
(90, 'wqqwq', 'qqqqq', 607279713, 'qqqq@gmail.com', 9899889, 3),
(91, 'rihan', 'rihan', 2147483647, 'hgg@hgh', 9888888, 3),
(92, 'aaaa', 'aaaa', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(93, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 2),
(94, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 3),
(95, 'MOUISSI', 'BRAHIM', 607279713, 'brahim7khalil@gmail.com', 9899889, 3),
(96, 'eeeeeeee', 'eeeeeeeeee', 607279713, 'brahim7khalil@gmail.com', 9999999, 2),
(97, 'ccccc', 'BRAHIMcccc', 607279713, 'B.c@gmail.com', 9888888, 2),
(98, 'MOUISSI', 'BRAHIM', 607279713, 'B.mouissi94@gmail.com', 9899889, 2);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_vol` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_reservation` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `id_client`, `id_vol`, `id_user`, `date_reservation`) VALUES
(1, 1, 1, 2, NULL),
(2, 2, 2, 3, NULL),
(3, 3, 9, 2, '0000-00-00 00:00:00'),
(4, 4, 8, 2, '2020-08-19 15:53:01'),
(5, 5, 1, 2, '2020-08-19 17:59:00'),
(6, 6, 2, 2, '2020-08-19 18:16:46'),
(7, 7, 2, 2, '2020-08-19 18:29:37'),
(8, 8, 1, 2, '2020-08-19 18:35:53'),
(9, 9, 2, 2, '2020-08-19 18:55:36'),
(10, 10, 9, 2, '2020-08-19 18:59:25'),
(11, 11, 2, 2, '2020-08-19 19:02:16'),
(12, 12, 1, 2, '2020-08-19 19:11:34'),
(13, 13, 1, 2, '2020-08-19 19:14:01'),
(14, 14, 1, 2, '2020-08-19 19:15:00'),
(15, 15, 1, 2, '2020-08-19 19:15:45'),
(16, 16, 1, 2, '2020-08-19 19:16:59'),
(17, 17, 1, 2, '2020-08-19 19:17:39'),
(18, 18, 1, 2, '2020-08-19 19:19:15'),
(19, 19, 1, 2, '2020-08-19 19:20:04'),
(20, 20, 1, 2, '2020-08-19 19:21:06'),
(21, 21, 1, 2, '2020-08-19 19:21:39'),
(22, 22, 1, 2, '2020-08-19 19:22:16'),
(23, 23, 1, 2, '2020-08-19 19:22:45'),
(24, 24, 1, 2, '2020-08-19 19:23:54'),
(25, 25, 1, 2, '2020-08-19 19:24:16'),
(26, 26, 1, 2, '2020-08-19 19:27:49'),
(27, 27, 1, 2, '2020-08-19 19:28:12'),
(28, 28, 1, 2, '2020-08-19 19:31:27'),
(29, 29, 1, 2, '2020-08-19 19:32:49'),
(30, 30, 1, 2, '2020-08-19 19:32:55'),
(31, 31, 1, 2, '2020-08-19 19:33:31'),
(32, 32, 1, 2, '2020-08-19 19:33:39'),
(33, 33, 1, 2, '2020-08-19 19:34:18'),
(34, 34, 1, 2, '2020-08-19 19:39:36'),
(35, 35, 1, 2, '2020-08-19 19:40:23'),
(36, 36, 1, 2, '2020-08-19 19:41:25'),
(37, 37, 1, 2, '2020-08-19 19:43:53'),
(38, 38, 1, 2, '2020-08-19 19:44:53'),
(39, 39, 1, 2, '2020-08-19 19:47:59'),
(40, 40, 1, 2, '2020-08-19 19:49:08'),
(41, 41, 1, 2, '2020-08-19 19:53:17'),
(42, 42, 1, 2, '2020-08-19 19:53:44'),
(43, 43, 1, 2, '2020-08-19 19:54:37'),
(44, 44, 1, 2, '2020-08-19 19:55:30'),
(45, 45, 1, 2, '2020-08-19 19:58:13'),
(46, 46, 1, 2, '2020-08-19 20:00:15'),
(47, 47, 1, 2, '2020-08-19 20:00:58'),
(48, 48, 1, 2, '2020-08-19 20:02:13'),
(49, 49, 1, 2, '2020-08-19 20:03:57'),
(51, 50, 2, 2, '2020-08-19 20:06:05'),
(53, 51, 2, 2, '2020-08-19 20:08:20'),
(55, 52, 2, 2, '2020-08-19 20:13:27'),
(57, 53, 2, 2, '2020-08-19 20:13:51'),
(61, 54, 2, 2, '2020-08-19 20:24:36'),
(62, 55, 2, 2, '2020-08-19 20:24:53'),
(64, 56, 2, 2, '2020-08-19 20:25:20'),
(65, 57, 2, 2, '2020-08-19 20:25:28'),
(66, 58, 2, 2, '2020-08-19 20:25:39'),
(69, 63, 2, 2, '2020-08-19 20:42:44'),
(70, 64, 11, 2, '2020-08-19 20:47:31'),
(71, 65, 9, 2, '2020-08-19 20:51:46'),
(72, 66, 12, 2, '2020-08-19 21:18:22'),
(75, 67, 1, 3, '2020-08-25 15:10:21'),
(76, 68, 1, 3, '2020-08-25 15:25:00'),
(77, 69, 8, 3, '2020-08-25 15:25:51'),
(78, 70, 8, 3, '2020-08-25 16:01:50'),
(79, 71, 8, 3, '2020-08-25 16:02:39'),
(80, 72, 8, 3, '2020-08-25 16:06:49'),
(81, 73, 8, 3, '2020-08-25 16:08:24'),
(82, 74, 8, 3, '2020-08-25 16:19:46'),
(83, 75, 8, 3, '2020-08-25 16:20:31'),
(84, 76, 8, 3, '2020-08-25 16:21:37'),
(85, 77, 8, 3, '2020-08-25 16:34:16'),
(86, 78, 8, 3, '2020-08-25 16:35:19'),
(87, 79, 8, 3, '2020-08-25 17:31:03'),
(88, 80, 8, 3, '2020-08-25 17:31:40'),
(89, 81, 8, 3, '2020-08-25 17:31:43'),
(90, 82, 8, 3, '2020-08-25 17:31:56'),
(91, 83, 8, 3, '2020-08-25 17:32:29'),
(92, 84, 8, 3, '2020-08-25 17:32:51'),
(93, 85, 8, 3, '2020-08-25 17:36:10'),
(94, 86, 8, 3, '2020-08-25 17:38:06'),
(95, 87, 8, 3, '2020-08-25 17:48:30'),
(96, 88, 8, 3, '2020-08-25 17:50:53'),
(97, 89, 8, 3, '2020-08-25 17:57:37'),
(98, 90, 8, 3, '2020-08-25 17:58:06'),
(99, 91, 8, 3, '2020-08-25 17:59:31'),
(103, 95, 1, 3, '2020-08-25 18:35:55'),
(104, 96, 11, 2, '2020-08-25 18:36:57'),
(105, 97, 9, 2, '2020-08-26 20:02:57'),
(106, 98, 1, 2, '2020-08-26 20:03:30');

--
-- Déclencheurs `reservation`
--
DELIMITER $$
CREATE TRIGGER `decrementer` AFTER INSERT ON `reservation` FOR EACH ROW BEGIN
 DECLARE SELECTED INT;
   set SELECTED=NEW.id_vol;
    UPDATE vols
        SET place=place - 1
        WHERE id_vol = SELECTED;
END
$$
DELIMITER ;

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
  `mot_de_passe` varchar(50) DEFAULT NULL,
  `groupID` int(11) NOT NULL DEFAULT 0,
  `cree_a` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `nom`, `prenom`, `tel`, `email`, `num_passport`, `mot_de_passe`, `groupID`, `cree_a`) VALUES
(2, 'himmm', 'BRA', '9898787667676', 'm@m.com', 98787, 'BHUBHUBHU', 1, '2020-08-19 15:23:55'),
(3, 'himooo', 'bratwayt', '9898787667676', 'b@b.com', 98787, 'BHUBHUBHU', 0, '2020-08-19 15:25:44');

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
  `place` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vols`
--

INSERT INTO `vols` (`id_vol`, `nom_vol`, `departure`, `arrival`, `d_depart`, `d_arrival`, `prix`, `place`, `status`) VALUES
(1, 'airline', 'Paris', 'Casablanca', '2020-08-14 14:09:00', '2020-08-19 14:09:00', 988, 89, 1),
(2, 'airline', 'Paris', 'Casablanca', '2020-08-14 14:09:00', '2020-08-19 14:09:00', 988, 90, 1),
(3, 'AIRFRANCE', 'Rabat', 'Roma', '2020-05-19 10:54:00', '2020-05-19 14:55:00', 2000, 20, 1),
(4, 'SKY4', 'Tanger', 'Roma', '2020-10-19 10:00:00', '2020-10-19 14:00:00', 800, 90, 1),
(5, 'VUELING', 'Agadir', 'Las Palmas', '2020-07-19 10:00:00', '2020-07-19 14:00:00', 700, 200, 1),
(6, 'VOY4U', 'Casablanca', 'Madrid', '2020-12-19 10:00:00', '2020-12-19 14:00:00', 1200, 60, 1),
(7, 'QATAR', 'Barcalona', 'Marrakesh', '2020-09-19 10:00:00', '2020-09-19 14:00:00', 1000, 100, 1),
(8, 'SKY4', 'Casablanca', 'Paris', '2020-05-05 00:00:00', '2020-05-11 00:00:00', 17, 18, 1),
(9, 'AirBUS', 'Paris', 'Casablanca', '2020-05-03 10:30:00', '2020-05-03 14:30:00', 2000, 199, 1),
(10, 'AIRFRANCE', 'Lyon', 'Wahrane', '2020-05-12 15:30:00', '2020-05-12 19:30:00', 1000, 150, 1),
(11, 'airline', 'Paris', 'Roma', '2020-06-04 21:56:00', '2020-06-03 21:56:00', 3999, 90, 1),
(12, 'SKY4', 'Miami', 'Brazil', '2020-08-19 21:17:00', '2020-08-20 21:17:00', 988, 90, 1),
(13, 'AIR94', 'Miami', 'Roma', '2020-08-21 23:02:00', '2020-08-22 23:02:00', 988, 90, 1),
(19, 'SKY4', 'Miami', 'Brazil', '2020-08-15 02:16:00', '2020-07-31 23:19:00', 988, 80, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_vol` (`id_vol`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`);

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
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `vols`
--
ALTER TABLE `vols`
  MODIFY `id_vol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_vol`) REFERENCES `vols` (`id_vol`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
