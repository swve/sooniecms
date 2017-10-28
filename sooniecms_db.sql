-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 28 oct. 2017 à 23:11
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
-- Base de données :  `sooniecms_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `soonie_adm_users`
--

CREATE TABLE `soonie_adm_users` (
  `id` int(11) NOT NULL,
  `adm_user` varchar(255) NOT NULL,
  `adm_pass` varchar(255) NOT NULL,
  `adm_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `soonie_adm_users`
--

INSERT INTO `soonie_adm_users` (`id`, `adm_user`, `adm_pass`, `adm_email`) VALUES
(1, 'Admin', 'd0eebf7a2886bca8d6977a01411c1a6ac117f2a5', 'adm@adm.ma');

-- --------------------------------------------------------

--
-- Structure de la table `soonie_appearance`
--

CREATE TABLE `soonie_appearance` (
  `id` int(11) NOT NULL,
  `gradient_color1` varchar(255) NOT NULL,
  `gradient_color2` varchar(255) NOT NULL,
  `logo_img` varchar(255) NOT NULL,
  `gradient_opacity` int(11) NOT NULL,
  `bg_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `soonie_appearance`
--

INSERT INTO `soonie_appearance` (`id`, `gradient_color1`, `gradient_color2`, `logo_img`, `gradient_opacity`, `bg_img`) VALUES
(1, '#5bc0de ', '#636c72', 'http://localhost/sn/upload/adm_logo_v2.png', 85, 'http://localhost/sn/upload/bg2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `soonie_emails`
--

CREATE TABLE `soonie_emails` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `soonie_emails`
--

INSERT INTO `soonie_emails` (`id`, `email`) VALUES
(1, 'my@email.com'),
(2, 'secondtest2@gmail.com'),
(55, 'hey@dude.fr');

-- --------------------------------------------------------

--
-- Structure de la table `soonie_social`
--

CREATE TABLE `soonie_social` (
  `id` int(11) NOT NULL,
  `fb_link` varchar(255) NOT NULL,
  `tw_link` varchar(255) NOT NULL,
  `go_link` varchar(255) NOT NULL,
  `ln_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `soonie_social`
--

INSERT INTO `soonie_social` (`id`, `fb_link`, `tw_link`, `go_link`, `ln_link`) VALUES
(1, '', '', 'google.fr', '');

-- --------------------------------------------------------

--
-- Structure de la table `soonie_texts`
--

CREATE TABLE `soonie_texts` (
  `id` int(11) NOT NULL,
  `first_text` varchar(255) NOT NULL,
  `second_text` varchar(255) NOT NULL,
  `third_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `soonie_texts`
--

INSERT INTO `soonie_texts` (`id`, `first_text`, `second_text`, `third_text`) VALUES
(1, 'Hello world', 'The website will be here soon ', 'sweave 2017 ');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `soonie_adm_users`
--
ALTER TABLE `soonie_adm_users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `soonie_appearance`
--
ALTER TABLE `soonie_appearance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `soonie_emails`
--
ALTER TABLE `soonie_emails`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `soonie_social`
--
ALTER TABLE `soonie_social`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `soonie_texts`
--
ALTER TABLE `soonie_texts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `soonie_adm_users`
--
ALTER TABLE `soonie_adm_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `soonie_emails`
--
ALTER TABLE `soonie_emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
