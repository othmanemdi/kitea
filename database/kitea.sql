-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 20 avr. 2022 à 01:08
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `kitea`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prix` double(11,2) NOT NULL DEFAULT 0.00,
  `ancien_prix` double(11,2) NOT NULL DEFAULT 0.00,
  `couleur` varchar(150) DEFAULT NULL,
  `categorie` varchar(150) DEFAULT NULL,
  `img` varchar(255) NOT NULL DEFAULT '1.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `prix`, `ancien_prix`, `couleur`, `categorie`, `img`) VALUES
(1, 'ARMOIRE DAILY 4 PORTES 2 TIROIRS - BLANC', 3595.00, 4595.00, 'white', 'Rangement', '_a_r_armoire_daily_4_portes_2_tiroirs_blanc-9.jpg'),
(2, 'ARMOIRE DAILY 3 PORTES 2 TIROIRS - CHÊNE BEIGE', 2795.00, 3295.00, 'BEIGE', 'Rangement', '_a_r_armoire_daily_3_portes_2_tiroirs_ch_ne-1.jpg'),
(3, 'ARMOIRE BEAUTIFUL - BLANC ET ROSE', 4990.00, 5490.00, 'ROSE', 'Rangement', '_2_2_2273_a3pt_biotiful.jpg'),
(4, 'ARMOIRE PRIVILEGIO BLANC', 4490.00, 0.00, 'white', 'Rangement', '_1_0_10030179605-1.jpg'),
(5, 'TABLE À MANGER GOTEBORG', 2295.00, 3395.00, 'Blanc', 'Tables à manger', '1_0_10060397939.jpg'),
(6, 'TABLE À MANGER EPIK EXTENSIBLE GRIS CLAIR', 2995.00, 4495.00, 'Gris', 'Tables à manger', '1_0_10059641925.jpg'),
(7, 'TABLE À MANGER VITRUVIA CHÊNE ARTISANAL NOIR', 4095.00, 4595.00, 'Black', 'Tables à manger', '1_0_10057608906.jpg'),
(8, 'TABLE À MANGER SAINT TROPEZ BLANC BRILLANT', 2495.00, 3250.00, 'Blanc', 'Tables à manger', '1_0_10043279243-11.jpg'),
(9, 'TABLE À MANGER CORY MARRON', 2995.00, 3795.00, 'Marron', 'Tables à manger', '1_0_10041717246.jpg'),
(10, 'TABLE À MANGER LOMBARDO MARRON', 2495.00, 3250.00, 'Marron', 'Tables à manger', '1_0_10035581244.jpg'),
(11, 'TABLE À MANGER EXTENSIBLE LUND CHÊNE BLANC', 1895.00, 2395.00, 'Blanc', 'Tables à manger', '1_0_10050361316.jpg'),
(12, 'TABLE À MANGER EXTENSIBLE SUNNY BLANC BRILLANT', 3995.00, 5595.00, 'Blanc\r\n', 'Tables à manger', '1_0_10049289596-1.jpg'),
(13, 'TABLE À MANGER ELEGANCE CHÊNE GRIS', 6995.00, 8395.00, 'Gris\r\n', 'Tables à manger', '1_0_10039667355-11.jpg'),
(14, 'TABLE À MANGER LUCI - ARTISAN OAK', 2395.00, 2995.00, 'Marron', 'Tables à manger', '10063555874_1.jpg'),
(15, 'TABLE CAFÉ BUZZANCA - NOIR', 1999.00, 2499.00, 'Noir', 'Décorations et luminaires', '10052182234.jpg'),
(16, 'TABLE RONDE AVEC TABLE D\'APPOINT - NOIR', 1499.00, 1599.00, 'Noir', 'Décorations et luminaires', '10052181234.jpg'),
(17, 'SET DE 3 TABLES TOLLINI - VERT/DORÉ/ROSE', 1999.00, 2199.00, 'Multicouleur', 'Décorations et luminaires', 'aking27-19_62575-set_.jpg'),
(18, 'SET DE 2 TABLES À CAFÉ AZEGLIO - NOIR / MARRON', 1699.00, 1999.00, 'Marron', 'Décorations et luminaires', '_1_0_10044906640.jpg'),
(19, 'TABLE D\'APPOINT DEMITRA EN ACIER - ROSE GOLD', 2399.00, 2699.00, 'Rose', 'Décorations et luminaires', '10044928409.jpg'),
(20, 'SET DE 2 TABLES ALEGRO', 1399.00, 1599.00, 'cuivre', 'Décorations et luminaires', '10044915409_1.jpg'),
(21, 'CHAISES ANA', 4.00, 4.00, 'white', 'chaises', '_1_0_10035868234-11_ok.jpg'),
(22, ' CHAISES CHÊNE', 3.00, 3.00, 'Gray', 'chaises', '_1_0_10039665313.1.JPG'),
(23, 'CHAISES GLADYS', 2.00, 4.00, 'brown', 'chaises', '_1_0_10048378314.jpg'),
(24, 'CHAISES ANA\r\n', 4.00, 4.00, 'black', 'chaises', '_1_0_100358683151.jpg'),
(25, 'CHAISES BORA', 10.00, 0.00, 'brown', 'chaise', '_3_3_333333331.jpg\r\n'),
(26, 'SET TABLE EN VERRE TRANSPARENT', 3.00, 0.00, 'gray', 'chaises', '_1_0_100484102851.jpg\r\n\r\n'),
(27, 'SET TABLE ARRY ', 5.00, 0.00, 'brown', 'chaise', '_s_e_set_arra1.jpg'),
(28, 'CHAISES RICK CHÊNE', 2.00, 0.00, 'beige', 'chaine', '_1_0_100356963161.jpg\r\n'),
(29, 'CHAISES ZELDA', 4.00, 0.00, 'bleu', 'chaise', '_z_e_zelda_bleu_1.jpg'),
(30, ' CHAISES EN TISSU', 3.00, 0.00, 'dark brown', 'chaises', '_1_0_100498192871.jpg\r\n'),
(31, 'CHAISE ERIS PIEDS EN CHROME - NOIR', 895.00, 1295.00, 'black', 'Chaises', '10061697234.jpg'),
(32, 'CHAISE TINA PIEDS EN MÉTAL - NOIR', 1195.00, 1795.00, 'black', 'Chaises', '10061697234.jpg'),
(33, 'CHAISE MATTI ROUGE', 2495.00, 3450.00, 'red', 'Chaises', '_1_0_10037355274_3.jpg'),
(34, 'CHAISE TINA JAUNE', 1495.00, 2095.00, 'yellow', 'Chaises', '10061692337.jpg'),
(35, 'CHAISE CORY VERT', 790.00, 850.00, 'green', 'Chaises', '_1_0_10043676294-21.jpg'),
(36, 'CHAISE DEMINA EN VELOURS GRIS FONCÉ', 599.00, 799.00, 'grey', 'Chaises', '_1_0_10049773420_11.jpg'),
(37, 'CHAISE ELEGANCE BLANC', 1550.00, 1875.00, 'white', 'Chaises', '_1_0_10039668315.jpg'),
(38, 'CHAISE KOLMAR - MARORN', 1299.00, 0.00, 'brown', 'Chaises', '_1_0_10012515314_2.jpg'),
(39, 'CHAISE LUNA EN BOIS MASSIF MARRON', 1599.00, 0.00, 'brown', 'Chaises', '_1_0_10048309777_1.jpg'),
(40, 'CHAISE VIGGO - GRIS CLAIR', 1695.00, 0.00, 'gray', 'Chaises', '_c_h_chaise_viggo.jpg'),
(41, 'CHAISE BETTY PATCHWORK', 2350.00, 0.00, 'multicolor', 'Chaises', '_1_0_10021538318-2.jpg'),
(42, 'CHAISE BETTY - PATCHWORK', 2650.00, 0.00, 'multicolor', 'Chaises', '_1_0_10027905318.jpg'),
(43, 'CHAISE VIRAGE NOIR', 1350.00, 0.00, 'black', 'Chaises', '_1_0_10029122234.jpg'),
(44, 'CHAISE CALLY BRUN FONCÉ', 1195.00, 0.00, 'brown', 'Chaises', '_1_0_10011004287_3.jpg'),
(45, 'CHAISE OCEANE GRIS', 999.00, 0.00, 'gray', 'Chaises', '_1_0_10047257313-12.jpg'),
(46, 'CHAISE LIF NOIR', 1250.00, 0.00, 'black', 'Chaises', '_1_0_10033073234.jpg'),
(47, 'CHAISE DIMA NOIR', 1150.00, 0.00, 'black', 'Chaises', '_1_0_10037354234-21.jpg'),
(48, 'GRANDE ÉTAGÈRE KAMA CHÊNE ET NOIR\r\n', 850.00, 1295.00, 'Black', 'Etagères Murales', '_1_0_10049181674_1.jpg'),
(49, 'ÉTAGÈRE LOMBARDO NOIR', 595.00, 0.00, 'Black', 'Etagères Murales', '_1_0_10035579244.jpg'),
(50, 'PETITE ÉTAGÈRE LYON BLANC\r\n', 550.00, 0.00, 'White', 'Etagères Murales', '_1_0_10039586316.jpg'),
(51, 'ÉTAGÈRE TULUZA BLANC\r\n', 455.00, 495.00, 'White', 'Etagères Murales', '_1_0_10049764798.jpg'),
(52, 'ÉTAGÈRE SELENE BLANC BRILLANT\r\n', 299.00, 695.00, 'White', 'Etagères Murales', '_1_0_10049286596_1.jpg'),
(53, 'ÉTAGÈRE MIROIR DURO BLANC\r\n', 1095.00, 1155.00, 'White', 'Etagères Murales', '_1_0_10028677343.jpg'),
(54, 'ÉTAGÈRE KASHMIR BLANC BRILLANT\r\n', 650.00, 795.00, 'White', 'Etagères Murales', '_1_0_10028689315-3.jpg'),
(55, 'ETAGÈRE VERTICALE FREETOWN - CHÊNE BEIGE ET BLANC\r\n', 595.00, 895.00, 'White', 'Etagères Murales', '_1_0_10059136316-2.jpg'),
(56, '3 CUBES VITTORIA GRIS\r\n', 750.00, 995.00, 'Black', 'Etagères Murales', '_1_0_10043246739.jpg'),
(57, 'ETAGÈRE SEAFORD 4 NIVEAUX CHÊNE BEIGE\r\n', 995.00, 1895.00, 'Black', 'Etagères Murales', '_1_0_10049727541-1.jpg'),
(58, 'CONSOLE MATERA AVEC LED BLANC - CHÊNE GRIS\r\n', 3395.00, 4295.00, 'Black', 'Consoles', '10062549883_2.jpg'),
(59, 'CONSOLE BOLZANO CHÊNE BÉTON\r\n', 3295.00, 4295.00, 'Gris', 'Consoles', '10062558677_1.jpg'),
(60, 'CONSOLE VERTIGO - CHÊNE GRIS ET BLANC\r\n', 2995.00, 3295.00, 'White', 'Consoles', '_c_o_console-vertigo-10056905883-2.jpg'),
(61, 'CONSOLE PODIUM BLANC BRILLANT\r\n', 1450.00, 0.00, 'White', 'Consoles', '_1_0_10039746315.jpg'),
(62, 'CONSOLE PODIUM NOIR\r\n', 1450.00, 0.00, 'Black', 'Consoles', '_1_0_10040418234_3.jpg'),
(63, 'CONSOLE GAMLA CHÊNE BEIGE\r\n', 1890.00, 0.00, 'Black', 'Consoles', '_1_0_10043091570-1k.jpg'),
(64, 'CONSOLE CORY MARRON\r\n', 1495.00, 2195.00, 'Marron', 'Consoles', '_1_0_10041721246_2.jpg'),
(65, 'CONSOLE EPIK GRIS CLAIR/ FONCÉ\r\n', 1495.00, 2495.00, 'Gris', 'Consoles', '_1_0_10059640925.jpg'),
(66, 'CONSOLE FLAIR\r\n', 2350.00, 0.00, NULL, 'Consoles', '_1_0_10027656285_1.jpg'),
(67, 'CONSOLE PODIUM CHÊNE BEIGE\r\n', 1295.00, 0.00, 'Beige', 'Consoles', '_1_0_10039745246_5.jpg'),
(68, 'CONSOLE WILMA EN VERRE TREMPÉ\r\n', 1050.00, 0.00, NULL, 'Consoles', '_b_b_bb_3_2.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
