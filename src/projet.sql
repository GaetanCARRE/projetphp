-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 07 juin 2022 à 21:35
-- Version du serveur :  8.0.29-0ubuntu0.20.04.3
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE categorie (
  id int NOT NULL,
  name varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO categorie (id, name) VALUES
(1, 'Vêtements'),
(2, 'Chaussures'),
(3, 'Accessoires');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE product (
  id int NOT NULL,
  nom varchar(255) NOT NULL,
  prix double NOT NULL,
  marque varchar(255) NOT NULL,
  image text NOT NULL,
  taille varchar(255) NOT NULL,
  categorie int NOT NULL,
  quantite int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO product (id, nom, prix, marque, image, taille, categorie, quantite) VALUES
(1, 'Jordan 1', 140, 'Jordan', 'img/JORDAN_CH.webp', '43', 2, 10),
(4, 'Veste Nike', 140, 'Nike', 'img/NIKE_VESTE.webp', 'M', 1, 7),
(5, 'Hoodie Chase', 110, 'Carhartt', 'img/CARHARTT_HOODIE.webp', 'M', 1, 2),
(7, 'Veste Lacoste', 130, 'Lacoste', 'img/LACOSTE_VESTE.webp', 'S', 1, 12),
(8, 'New Balance - MS327PR', 120, 'New Balance', 'img/NB_CH.webp', '43', 2, 11),
(11, 'Hoodie Stussy', 50, 'Stussy', 'img/STUSSY_HOODIE.webp', 'M', 1, 3),
(12, 'JEFF BLACK', 130, 'Komono', 'img/KOMONO_LUNETTES.webp', 'Taille Unique', 3, 10),
(13, 'GRAPHIC BOTTLE', 10, 'ACG', 'img/BOTTLE_ACG.webp', 'Taille Unique', 3, 10),
(14, 'STRAP BAG', 40, 'Carhartt', 'img/STRAPBAG_CARHARTT.webp', 'Taille Unique', 3, 10),
(15, 'BACKPACK', 120, 'Carhartt', 'img/BACKPACK_CARHARTT.webp', 'Taille Unique', 3, 10),
(16, 'LOS ANGELES DODGERS', 25, 'New Era', 'img/CASQUETTE_NEWERA.webp', 'Taille Unique', 3, 10),
(17, 'MOUNTAIN HAT', 25, 'Columbia', 'img/HAT_COLUMBIA.webp', 'Taille Unique', 3, 10),
(18, 'PREMIUM BASKET BALL', 55, 'Jordan', 'img/BALL_JORDAN.webp', 'Taille Unique', 3, 10),
(19, 'CLASSIC SPORT CAP', 40, 'RALPH LAUREN', 'img/CASQUETTE_POLO.webp', 'Taille Unique', 3, 10),
(20, 'SPORTSWEAR TOTE BAG', 40, 'NIKE', 'img/TOTEBAG_NIKE.webp', 'Taille unique', 3, 10),
(21, 'H86 FUTURA HAT', 23, 'NIKE', 'img/CASQUETTE_NIKE.webp', 'Taille Unique', 3, 10);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE utilisateurs (
  id int NOT NULL,
  pseudo varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  password text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO utilisateurs (id, pseudo, email, password) VALUES
(1, 'gaetan', 'gaetan.carre74@gmail.com', 'cd0aa9856147b6c5b4ff2b7dfee5da20aa38253099ef1b4a64aced233c9afe29'),
(2, 'altan', 'altan@gmail.com', 'd2ceb37d4f2f193133db1bfc3d2163cb061e4ba4d4ff2fddf05a1dedb78876d7'),
(3, 'djelel', 'djelel@gmail.com', 'e10dc45fdd1e1de84913e3d23f1f7ab721b1ffacbe91002d1f9c45a4e044867d');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE categorie
  ADD PRIMARY KEY (id);

--
-- Index pour la table `product`
--
ALTER TABLE product
  ADD PRIMARY KEY (id);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE utilisateurs
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE categorie
  MODIFY id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE product
  MODIFY id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE utilisateurs
  MODIFY id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
