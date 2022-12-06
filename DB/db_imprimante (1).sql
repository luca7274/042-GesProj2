-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 22 nov. 2022 à 13:27
-- Version du serveur : 5.7.11
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_imprimante`
--
CREATE DATABASE IF NOT EXISTS `db_imprimante` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_imprimante`;

-- --------------------------------------------------------

--
-- Structure de la table `t_imprimante`
--

CREATE TABLE `t_imprimante` (
  `idImprimante` int(11) NOT NULL,
  `impFabriquant` varchar(50) NOT NULL,
  `impModele` varchar(100) NOT NULL,
  `impTechImpression` varchar(50) NOT NULL,
  `impVitesseImpression` varchar(200) NOT NULL,
  `impCapaciteBacPapier` varchar(50) NOT NULL,
  `impPoids` varchar(200) NOT NULL,
  `impResolution` varchar(20) NOT NULL,
  `impLargeur` varchar(200) NOT NULL,
  `impLongeur` varchar(200) NOT NULL,
  `impHauter` varchar(200) NOT NULL,
  `impPrix` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_imprimante`
--

INSERT INTO `t_imprimante` (`idImprimante`, `impFabriquant`, `impModele`, `impTechImpression`, `impVitesseImpression`, `impCapaciteBacPapier`, `impPoids`, `impResolution`, `impLargeur`, `impLongeur`, `impHauter`, `impPrix`) VALUES
(1, 'Canon', 'PIXMA TS3450', 'Encre', '4', '60', '4', '4800 x 1200 ', '43,5', '32,7', '32,7', '54,1'),
(2, 'Brother', 'HL-L3270CDW', 'Laser', '24', '250', '18,3', '600 x 2400', '43,9', '46,1', '25,2', '308'),
(3, 'Brother', 'MFC-l3730CDN', 'Laser', '24', '250', '24,5', '2400 x 600', '41', '47,5', '41,4', '373'),
(4, 'Epson', 'EcoTank ET-3850', 'Réservoir d\'encre', '24', '250', '6,7', '4800 x 1200', '37,5', '34,7', '30,5', '379'),
(5, 'HP', 'OfficeJet Pro 9015e', 'Encre', '22', '250', '9,24', '4800 x 1200 ', '43,93', '3,24', '27,8', '203'),
(6, 'Brother', 'DCP-L3550CDW', 'Laser', '18', '250', '23,2', '600x2400', '41', '47,5', '41,4', '369'),
(7, 'Epson', 'EcoTank ET-8500', 'Réservoir d\'encre', '32', '170', '11,26', '5760x1440', '40,3', '36,9', '16,2', '559'),
(8, 'canon', 'MF742Cdw i-SENSYS', 'Laser', '27', '300', '27', '600x600', '58', '59', '59', '399'),
(9, 'Canon', 'MAXIFY GX7050', 'Réservoir d\'encre', '24', '600', '10', '1200 x 600', '39,9', '41', '31,4', '601'),
(10, 'HP', 'LaserJet M140we', 'Laser', '20', '150', '6,63', '600x600', '29,6', '39,4', '25,3', '169'),
(11, 'Brother', 'MFC-L9570CDWT', 'Laser', '31', '250', '36,2', '2400x600', '49,5', '68,2', '52,6', '1299'),
(12, 'HP', 'OfficeJet Pro 8024', 'Encre', '20', '225', '8,95', '4800 x 1200', '40,5', '50,5', '30', '208'),
(13, 'Brother', 'MFC-L8900CDW', 'Laser', '31', '250', '29,7', '2400x600', '43,5', '54,9', '52,6', '889'),
(14, 'HP', 'LaserJet Pro M283fdw', 'Laser', '21', '250', '18,7', '600x600', '42', '42,1', '33,4', '529'),
(15, 'HP', 'Designjet T2600dr', 'Encre', '180', '250', '115', '2400 x 1200', '139', '76', '124', '12919'),
(16, 'HP', 'MFP M578dn', 'Laser', '38', '650', '38,1', '1200x1200', '48,2', '50,4', '58,3', '1813'),
(17, 'OKI', 'MC883dnv', 'Laser', '35', '2005', '120', '1200 x 1200', '56,3', '60', '121,6', '2188'),
(18, 'Canon', 'PIXMA G7050 MegaTank', 'Réservoir d\'encre', '13', '350', '9,6', '4800x1200', '36,9', '40,3', '23,4', '351'),
(19, 'Canon ', 'PIXMA TR4650', 'jet d\'encre', '11', '100', '5,8', '600x1200', '43,5', '29,5', '18,9', '59,95'),
(20, 'Canon ', 'i-SENSYS MF443dw', 'Laser', '38', '350', '17,2', '1200 x 1200', '45,3', '46,4', '39,2', '454'),
(21, 'Brother', 'DCP-L3510CDW', 'Laser', '18', '250', '21,7', '600 x 2400', '41', '47,5', '36,8', '332'),
(22, 'Epson', 'EcoTank ET-2810', 'Encre', '33', '100', '5,88', '5760 x 1440', '37,5', '34,7', '17,9', '203'),
(23, 'HP', 'ENVY 6020e', 'jet d\'encre', '7', '100', '5,22', '1200x1200', '43,25', '36,11', '13,21', '69,95'),
(24, 'Camon', 'PIXMA TS9550', 'Encre', '15', '100', '9,7', '4800 x 1200 ', '36,6', '45', '19,3', '219'),
(25, 'OKI', 'MC853dnv', 'Laser', '23', '535', '89,3', '1200 x 600', '56,3', '60', '121,6', '1923'),
(26, 'Canon ', 'PIXMA TS3350', 'jet d\'encre', '13', '60', '5,43', '4800x1200', '19,6', '46', '39,8', '49,95'),
(27, 'HP', 'Smart Tank 7005 All-in-One', 'Encre', '13', '250', '9,2', '1200 x 1200', '48,4', '36,4', '19,86', '285'),
(28, 'HP', 'MFP M578dn LaserJet Enterprise', 'Laser', '38', '650', '38,1', '600 x 600', '48,2', '50,4', '58,3', '1827'),
(29, 'HP', 'MFP 779', 'Encre', '45', '2750', '66,6', '1024x768', '60,4', '65,2', '77,2', '4371'),
(30, 'HP', 'LaserJet Enterprise Flow MFP M635z', 'Laser', '65', '3200', '64,3', '600 x 600', '66,1', '123,4', '123,4', '6866');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_imprimante`
--
ALTER TABLE `t_imprimante`
  ADD PRIMARY KEY (`idImprimante`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_imprimante`
--
ALTER TABLE `t_imprimante`
  MODIFY `idImprimante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
