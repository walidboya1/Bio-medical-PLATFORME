-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 21 mars 2020 à 02:23
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `teleradio`
--

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetAllDegrees` (IN `inst_id` INT(11))  BEGIN
 select * 
 from degree 
 where institute_id=inst_id;
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetContactList` (IN `login_user` INT(11))  BEGIN
 SELECT * 
 FROM user
 JOIN contact
 ON contact_id = id
 WHERE user_id = login_user;
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetMsgList` (IN `from_id` INT(11), IN `login_user` INT(11))  BEGIN
 SELECT * 
 FROM chat
 WHERE (sent_from = from_id and sent_to = login_user) or (sent_from = login_user and sent_to = from_id);
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Login` (IN `email` TEXT, IN `passwd` VARCHAR(32))  BEGIN
 SELECT * 
 FROM user
 WHERE email_id = email and password = passwd;
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `msg_counter` (IN `id` INT(11))  BEGIN
 SELECT * 
 FROM chat
 WHERE sent_to = id;
 END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `centre`
--

CREATE TABLE `centre` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `respo` varchar(200) NOT NULL,
  `site` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `Id` int(11) NOT NULL,
  `Radio` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Id_patient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `id_med` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `site` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `Id` int(11) NOT NULL,
  `Id_image` int(11) NOT NULL,
  `id_medecin` int(11) NOT NULL,
  `id_technicien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `technitien`
--

CREATE TABLE `technitien` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `centre` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `cin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `passsword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `centre`
--
ALTER TABLE `centre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`nom`,`contact`,`respo`,`site`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`),
  ADD UNIQUE KEY `Id_2` (`Id`),
  ADD KEY `id patient` (`Id_patient`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`id_med`,`id_user`,`site`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`,`Id_image`,`id_medecin`,`id_technicien`),
  ADD UNIQUE KEY `Id_2` (`Id`),
  ADD KEY `id image` (`Id_image`),
  ADD KEY `id medecin` (`id_medecin`),
  ADD KEY `id technitien` (`id_technicien`);

--
-- Index pour la table `technitien`
--
ALTER TABLE `technitien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`id_user`,`cin`),
  ADD KEY `id user` (`id_user`),
  ADD KEY `id centre` (`centre`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`email_id`,`passsword`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `centre`
--
ALTER TABLE `centre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `technitien`
--
ALTER TABLE `technitien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `id patient` FOREIGN KEY (`Id_patient`) REFERENCES `patient` (`Id`);

--
-- Contraintes pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD CONSTRAINT `id user1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `id image` FOREIGN KEY (`Id_image`) REFERENCES `image` (`Id`),
  ADD CONSTRAINT `id medecin` FOREIGN KEY (`id_medecin`) REFERENCES `medecin` (`id`),
  ADD CONSTRAINT `id technitien` FOREIGN KEY (`id_technicien`) REFERENCES `technitien` (`id`);

--
-- Contraintes pour la table `technitien`
--
ALTER TABLE `technitien`
  ADD CONSTRAINT `id centre` FOREIGN KEY (`centre`) REFERENCES `centre` (`id`),
  ADD CONSTRAINT `id user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
