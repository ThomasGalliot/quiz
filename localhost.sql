-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 20 août 2018 à 15:03
-- Version du serveur :  10.1.34-MariaDB
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `quiz`
--
CREATE DATABASE IF NOT EXISTS `quiz` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `quiz`;

-- --------------------------------------------------------

--
-- Structure de la table `choix`
--

CREATE TABLE `choix` (
  `question` varchar(255) NOT NULL,
  `choix` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choix1` varchar(255) NOT NULL,
  `choix2` varchar(255) NOT NULL,
  `choix3` varchar(255) NOT NULL,
  `choix4` varchar(255) NOT NULL,
  `réponse` varchar(255) NOT NULL,
  `catégorie` varchar(255) DEFAULT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `question`, `choix1`, `choix2`, `choix3`, `choix4`, `réponse`, `catégorie`, `point`) VALUES
(1, 'Quel sport pratiquait Morice Herzog?', 'Le cyclisme', 'La natation', 'L\'alpinisme', 'L\'atlétisme', 'L\'alpinisme', 'Sport', 0),
(2, 'Dans quel ville s\'est déroulée la finale du mondiale de foot 2002?', 'Shanghaï', 'Séoul', 'Yokohama', 'Tokyo', 'Yokohama', 'Sport', 0),
(3, 'Dans quelle station de sport d\'hiver les bronzés ont-ils fait du ski?', 'Alpes d\'Huez', 'Tigne', 'La plagne', 'Val-d\'Isère', 'Val-d\'Isère', 'Sport', 0),
(4, 'En Kitsurf, par quoi est-on tracté?', 'Un bateau', 'Une voile', 'Un cerf-volant', 'Une planche a voile', 'Un cerf-volant', 'Sport', 0),
(5, 'Quel sport a été codifier par les regle de Queensberry?', 'Le Rugby', 'L\'escrime', 'La boxe', 'Le tennis', 'La boxe', 'Sport', 0),
(6, 'Quel était le slogan de campagne de François Mitterrand en 1981?', 'La force tranquille', 'La force paisible', 'La force calme', 'La force sage', 'La force tranquille', 'Culture général', 0),
(7, 'Quel armée a envahi la Slovenie et la Croatie en 1991?', 'L\'armée Bulgare', 'L\'armée Grecque', 'L\'armée Yugoslav', 'L\'armée russe', 'L\'armée Yugoslav', 'Culture géneral', 0),
(8, 'Quel était le métier de Gandhi?', 'Avocat', 'Professeur', 'Médecin', 'Journalist', 'Avocat', 'Culture géneral', 0),
(9, 'Qui fut le quarantième président des USA?', 'Bill Clinton', 'Ronald Reagan', 'Gerald Fort', 'George W. Bush', 'Ronald Reagan', 'Culture géneral', 0),
(10, 'Quelle ville a construit le 1er métro?', 'Londres', 'New-York', 'Paris', 'Boston', 'Londres', 'Culture géneral', 0),
(11, 'Dans l\'histoire du cinéma, combien de films ont remportés 11 Oscars?', '1', '2', '3', '4', '3', 'Cinéma', 0),
(12, 'Qui joue le fan de Jonny Hallyday \"Jean-Philippe\"?', 'Clovis Cordillac', 'Fabrice Luchini', 'Gérard Depardieu', 'François Cluzet', 'Fabrice Luchini', 'Cinéma', 0),
(13, 'Quel animal est skipper dans \"Madagascar\"?', 'Une girafe', 'Un pingouin', 'un raton-laveur', 'Un zèbre', 'Un pingouin', 'Cinéma', 0),
(14, 'Face à qui Léonardo Di Caprio joue-t-il dans \"Blessures secrète\"?', 'Robert De Niro', 'Dustin Hollman', 'Al Pacino', 'Jim Qarrey', 'Robert De Niro', 'Cinéma', 0),
(15, 'Depuis la création des Césars, un seul film à réussi \"le grand Chelem\": meilleur film, meilleur acteur, meilleur actrice, meilleur réalisateur. Quel était?', 'Le dernier métro (1981)', 'La balance (1983)', 'Trop belle pour toi (1990)', 'Cyrano de Bergerac (1991)', 'Le dernier métro (1981)', 'Cinéma', 0),
(16, 'Quel chanteur a chanter \"Remember the time\"?', 'Mica', 'Michael Jackson', 'Bob Marley', 'Réponse 4', 'Michael Jackson', 'Musique', 0),
(17, 'Pour quel Pays France Gall a-t-elle remporté le concours Eurovision en 1965?', 'France', 'Belgique', 'Suisse', 'Luxembourg', 'Luxembourg', 'Musique', 0),
(18, 'quelle était le surnom de Barbara?', 'La grande dame', 'La belle dame', 'La dame en noir', 'réponse 4', 'La dame en noir', 'Musique', 0),
(19, 'Complétez le titre de la chanson de Françis cabrel \"L\'encre de tes ...\"?', 'Yeux', 'Main', 'Mot', 'Stylos', 'Yeux', 'Musique', 0),
(20, 'Dans la chanson \"L\'aventurier\", d\'Indochine, Bob Morane est a la recherche?', 'Des fibustiers', 'Du malaraja', 'Du gang de l\'archipel', 'De l\'ombre jaune', 'De l\'ombre jaune', 'Musique', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `choix`
--
ALTER TABLE `choix`
  ADD PRIMARY KEY (`question`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
