-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 13 août 2021 à 14:39
-- Version du serveur : 10.3.22-MariaDB-1
-- Version de PHP : 7.3.15-3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ks_kfa_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `admine`
--

CREATE TABLE `admine` (
  `admi` int(11) NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail_verif` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `admine`
--

INSERT INTO `admine` (`admi`, `mail`, `pass`, `mail_verif`) VALUES
(91, 'dklars.dev@gmail.com', '33a485cb146e1153c69b588c671ab474f2e5b800', 1);

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_article` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ville` text COLLATE utf8_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `titre` text COLLATE utf8_unicode_ci NOT NULL,
  `pays` text COLLATE utf8_unicode_ci NOT NULL,
  `quartier` text COLLATE utf8_unicode_ci NOT NULL,
  `descript` text COLLATE utf8_unicode_ci NOT NULL,
  `nbrSalbain` text COLLATE utf8_unicode_ci NOT NULL,
  `nbrrchambre` text COLLATE utf8_unicode_ci NOT NULL,
  `nbr_cuisine` text COLLATE utf8_unicode_ci NOT NULL,
  `nbr_salon` text COLLATE utf8_unicode_ci NOT NULL,
  `type_art` enum('vente','louer','reserve','photo') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_article`, `ville`, `prix`, `titre`, `pays`, `quartier`, `descript`, `nbrSalbain`, `nbrrchambre`, `nbr_cuisine`, `nbr_salon`, `type_art`) VALUES
('1619934942qrJNcVQQTE', 'Cotonou', 1000000, 'Maison de vie cool sur le popo', 'Benin', 'Segbeya', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.', '10', '12', '10', '14', 'vente'),
('1619935133wZmBJMhxbL', 'Calavie', 20000, 'Appartement au regard du carefour', 'Benin', 'Djadjo', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.\nLe lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.', '1', '1', '0', '1', 'vente'),
('1619935451oDOJSpyKnM', 'Porto-Novo', 2000, 'Maison zoom zoom', 'Benin', 'Ekpe', ' Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum. ', '1', '1', '1', '0', 'vente'),
('1619957184GSiVnngmWn', 'kbeb', 5454, '5kjk', 'France', '5454', 'jhuhh', '1', '1', '1', '0', 'louer'),
('1619957201ISGZSpiBxb', 'bnfgtyfy', 4564684, 'hjgyugu', 'France', 'hjbghjghgbh564', 'ghfghfghfhg', '1', '1', '1', '0', 'louer'),
('1624811319JZUMoSpLgs', 'xvfdscds', 545, 'ghghvhfghf', 'France', 'nbb', 'kfvjfvdkvjfvfk', '32', '21', '21', '2', 'vente'),
('1624811320egOIXxwrjs', 'xvfdscds', 545, 'ghghvhfghf', 'France', 'nbb', 'kfvjfvdkvjfvfk', '32', '21', '21', '2', 'vente'),
('1624811320gvsudoFcOz', 'xvfdscds', 545, 'ghghvhfghf', 'France', 'nbb', 'kfvjfvdkvjfvfk', '32', '21', '21', '2', 'vente'),
('1624811320LjpobYaqMz', 'xvfdscds', 545, 'ghghvhfghf', 'France', 'nbb', 'kfvjfvdkvjfvfk', '32', '21', '21', '2', 'vente'),
('1624811320sjmIvMZMXI', 'xvfdscds', 545, 'ghghvhfghf', 'France', 'nbb', 'kfvjfvdkvjfvfk', '32', '21', '21', '2', 'vente'),
('1624811321cLmpYsuYOA', 'xvfdscds', 545, 'ghghvhfghf', 'France', 'nbb', 'kfvjfvdkvjfvfk', '32', '21', '21', '2', 'vente'),
('1624811321UZGUhzxbJV', 'xvfdscds', 545, 'ghghvhfghf', 'France', 'nbb', 'kfvjfvdkvjfvfk', '32', '21', '21', '2', 'vente'),
('1624811321vHZWVjwPhA', 'xvfdscds', 545, 'ghghvhfghf', 'France', 'nbb', 'kfvjfvdkvjfvfk', '32', '21', '21', '2', 'vente');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `statut` int(11) NOT NULL DEFAULT 0,
  `id_users` int(11) NOT NULL,
  `date_commentaire` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etoilage`
--

CREATE TABLE `etoilage` (
  `note` int(11) NOT NULL DEFAULT 0,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `maison_achat`
--

CREATE TABLE `maison_achat` (
  `id_maison_achat` int(11) NOT NULL,
  `piscine` int(11) NOT NULL DEFAULT 0,
  `jardin` int(11) NOT NULL DEFAULT 0,
  `type_log` enum('appart','home') COLLATE utf8_unicode_ci NOT NULL,
  `id_article` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `maison_achat`
--

INSERT INTO `maison_achat` (`id_maison_achat`, `piscine`, `jardin`, `type_log`, `id_article`) VALUES
(1, 2, 15, 'home', '1619934942qrJNcVQQTE'),
(2, 0, 0, 'appart', '1619935133wZmBJMhxbL'),
(3, 0, 0, 'appart', '1619935451oDOJSpyKnM'),
(4, 2, 21, 'appart', '1624811319JZUMoSpLgs'),
(5, 2, 21, 'appart', '1624811320LjpobYaqMz'),
(6, 2, 21, 'appart', '1624811320sjmIvMZMXI'),
(7, 2, 21, 'appart', '1624811320gvsudoFcOz'),
(8, 2, 21, 'appart', '1624811320egOIXxwrjs'),
(9, 2, 21, 'appart', '1624811321UZGUhzxbJV'),
(10, 2, 21, 'appart', '1624811321vHZWVjwPhA'),
(11, 2, 21, 'appart', '1624811321cLmpYsuYOA');

-- --------------------------------------------------------

--
-- Structure de la table `maison_louer`
--

CREATE TABLE `maison_louer` (
  `id_maison_louer` int(11) NOT NULL,
  `piscine` int(11) NOT NULL,
  `jardin` int(11) NOT NULL,
  `type_log` enum('appart','home') COLLATE utf8_unicode_ci NOT NULL,
  `id_article` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `maison_louer`
--

INSERT INTO `maison_louer` (`id_maison_louer`, `piscine`, `jardin`, `type_log`, `id_article`) VALUES
(1, 0, 0, 'appart', '1619957184GSiVnngmWn'),
(2, 0, 0, 'home', '1619957201ISGZSpiBxb');

-- --------------------------------------------------------

--
-- Structure de la table `photo_article`
--

CREATE TABLE `photo_article` (
  `id_photo_article` int(11) NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `id_article` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `photo_article`
--

INSERT INTO `photo_article` (`id_photo_article`, `photo`, `id_article`) VALUES
(1, 'IMMO_VENTE_NAS_SARA_7_347267381696033.png', '1619935133wZmBJMhxbL'),
(2, 'IMMO_VENTE_NAS_SARA_4_136226700710714.png', '1619935133wZmBJMhxbL'),
(3, 'IMMO_VENTE_NAS_SARA_2_302204285666920.png', '1619935133wZmBJMhxbL'),
(4, 'IMMO_VENTE_NAS_SARA_8_888413202422108.png', '1619934942qrJNcVQQTE'),
(5, 'IMMO_VENTE_NAS_SARA_3_591568905239096.png', '1619934942qrJNcVQQTE'),
(6, 'IMMO_VENTE_NAS_SARA_7_676014997160038.png', '1619934942qrJNcVQQTE');

-- --------------------------------------------------------

--
-- Structure de la table `recrutement`
--

CREATE TABLE `recrutement` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `text` longtext NOT NULL,
  `dade_in` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `recrutement`
--

INSERT INTO `recrutement` (`id`, `titre`, `text`, `dade_in`) VALUES
(6, 'rororo', 'rgkgjkgjgbr', '2021-06-11 17:02:33');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `date_reservation` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_article` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `date_reservation`, `id_users`, `id_article`) VALUES
(1, '1636647300', 2, '1619935133wZmBJMhxbL'),
(2, '1636643700', 3, '1619935133wZmBJMhxbL'),
(3, '1640969100', 4, '1624811321cLmpYsuYOA');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` text COLLATE utf8_unicode_ci NOT NULL,
  `nom` text COLLATE utf8_unicode_ci NOT NULL,
  `id_users` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`mail`, `tel`, `nom`, `id_users`) VALUES
('dklars.dev@gmail.com', '62273861', 'Sarlas ALLADAYE', 2),
('dklars.dev@gmail.comiii', '62273861 mi', 'Sarlas ALLADAYE mi', 3),
('dklars.dev@gmail.comiiitot', '62273861 mi tot', 'Sarlas ALLADAYE mi tot', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admine`
--
ALTER TABLE `admine`
  ADD PRIMARY KEY (`admi`),
  ADD UNIQUE KEY `user` (`mail`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `id_users` (`id_users`);

--
-- Index pour la table `etoilage`
--
ALTER TABLE `etoilage`
  ADD PRIMARY KEY (`note`,`id_users`),
  ADD KEY `id_users` (`id_users`);

--
-- Index pour la table `maison_achat`
--
ALTER TABLE `maison_achat`
  ADD PRIMARY KEY (`id_maison_achat`);

--
-- Index pour la table `maison_louer`
--
ALTER TABLE `maison_louer`
  ADD PRIMARY KEY (`id_maison_louer`);

--
-- Index pour la table `photo_article`
--
ALTER TABLE `photo_article`
  ADD PRIMARY KEY (`id_photo_article`);

--
-- Index pour la table `recrutement`
--
ALTER TABLE `recrutement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_users` (`id_users`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`mail`),
  ADD KEY `id_users` (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admine`
--
ALTER TABLE `admine`
  MODIFY `admi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `maison_achat`
--
ALTER TABLE `maison_achat`
  MODIFY `id_maison_achat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `maison_louer`
--
ALTER TABLE `maison_louer`
  MODIFY `id_maison_louer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `photo_article`
--
ALTER TABLE `photo_article`
  MODIFY `id_photo_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `recrutement`
--
ALTER TABLE `recrutement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;