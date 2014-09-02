-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 21 Août 2014 à 13:06
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `intraesp_test`
--

-- --------------------------------------------------------

--
-- Structure de la table `affectation`
--

CREATE TABLE IF NOT EXISTS `affectation` (
  `idAffectation` int(30) NOT NULL AUTO_INCREMENT,
  `idMatiere` int(30) NOT NULL,
  `idAgent` int(30) NOT NULL,
  `CM` int(30) DEFAULT NULL,
  `TP` int(30) DEFAULT NULL,
  `TD` int(30) DEFAULT NULL,
  PRIMARY KEY (`idAffectation`),
  KEY `fk_Affectation_Matiere` (`idMatiere`),
  KEY `fk_Affectation_Agent` (`idAgent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `agents`
--

CREATE TABLE IF NOT EXISTS `agents` (
  `idAgent` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prenom` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `matricule` varchar(9) DEFAULT NULL,
  `Fonction` varchar(200) NOT NULL,
  `idTypeAgent` int(11) DEFAULT NULL,
  `idGrade` int(11) DEFAULT NULL,
  `idStructure` int(11) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idAgent`),
  KEY `idAgent` (`idAgent`),
  KEY `idAgent_2` (`idAgent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=791 ;

--
-- Contenu de la table `agents`
--

INSERT INTO `agents` (`idAgent`, `nom`, `prenom`, `matricule`, `Fonction`, `idTypeAgent`, `idGrade`, `idStructure`, `telephone`, `email`) VALUES
(177, 'ANNE', 'Alkassoume Abdoulaye', '100 136/C', 'Maint. Atel. Encad.TP', 3, 50, NULL, '77 652 83 67', 'kassoum10@gmail.com'),
(178, 'AW', 'Penda  Houléye Marceline', '100 075/C', 'Responsable des Dépenses', 3, 49, 11, '77 528 19 40', 'awsyfr@yahoo.fr'),
(179, 'BA', 'Tidiane Amadou', '100 311/B', 'Vaguemestre', 3, 52, NULL, '77 658 31 43', 'néant'),
(180, 'BA', 'Yaya', '106 355/D', 'Vaguemestre', 3, 47, 12, '77 808 42 89', 'néant'),
(181, 'BADIANE', 'Aladji', '100 336/E', 'Souffleur de verre', 3, 54, NULL, '77 501 75 56', 'albadiane58@yahoo,fr'),
(182, 'BADJI', 'Mamadou Lamine', '100 373/B', 'Agent nett. chargé du débit mat.', 3, 55, NULL, '77 237 70 57', 'laizobadji@yahoo.fr'),
(183, 'BADJI', 'Safiétou', NULL, 'Vaguemestre', 4, 77, NULL, '77 536 90 71', 'safietoubadji@yahoo.fr'),
(184, 'BARO', 'Pathé', '100 163/C', 'Electro. & syst. Infor', 3, 50, NULL, '77 568 09 72', 'pbaro77@yahoo.fr'),
(185, 'BASSENE', 'Médard', '100 554/C', 'Maintenance machines Administrateur réseau, système', 3, 50, NULL, '77 646 58 97', 'mdrbassene@gmail.com'),
(186, 'BOCOUM', 'Fatoumata', '100 380/F', '', 3, 47, NULL, '77 947 46 52', 'néant'),
(187, 'BODIAN', 'Bakary', '100 671/A', 'Electricien', 3, 56, 15, NULL, NULL),
(188, 'BOYE', 'Abdel Aziz', '102 942/D', 'Réalisateur', 3, 57, 16, '76 330 92 07', 'abdelazizboye@yahoo.fr'),
(189, 'CAMARA', 'Papa Arona', '100 788/F', 'Photographe - Caméraman', 3, 58, 17, '77 412 04 90', 'ronecamara1@yahoo.fr'),
(190, 'CISS', 'Ousseynou', '100 948/L', 'Chauffeur', 3, 57, 18, '77 242 15 26', 'néant'),
(191, 'CISSE', 'Anne Marie', '100 926/L', 'Secrétaire', 3, 59, NULL, '77 567 66 04', 'annemariecisse@yahoo.fr'),
(192, 'CISSE', 'Oumar', '100 593/B', '', 3, 60, NULL, NULL, NULL),
(193, 'CISSE', 'Papa Ousmane', NULL, 'Techn. Supérieur en informatique', 4, 77, NULL, '77 301 08 44', 'cissepoc@yahoo.fr'),
(194, 'DANSOKHO', 'Malamine', '101 095/F', 'Agent de service', 3, 47, 30, '77 559 40 97   ', 'néant'),
(195, 'DANSOKHO', 'Mankama', '106 389/C', '', 3, 52, NULL, '77 539 33 24   ', 'makama.dansokho@yahoo.fr'),
(196, 'DIA', 'Mamadou', '101 228/F', 'Vaguemestre', 3, 47, NULL, '77 636 54 45   ', 'badou.dia@yahoo.fr'),
(197, 'DIACK', 'Moctar', '_', '', 3, 77, NULL, '77 376 28 66', 'diack95@hotmail.com'),
(198, 'DIAGNE', 'Dieynaba Mané', '_', 'Secrétaire', 3, 77, NULL, '77 573 90 17', 'dieynabam@gmail.com'),
(199, 'DIAGNE', 'Djily Mbaye', '100 729/M', 'Comptable', 3, 49, NULL, '77 592 40 92   ', 'djily_d@hotmail.com'),
(200, 'DIAGNE', 'Mamadou', '101 299/Z', 'Préposé au prêt', 3, 62, NULL, '77 272 08 98', 'néant'),
(201, 'DIAGNE', 'Yamar', '101 406/H', 'Adjoint Resp. fich. Scolarité', 3, 52, 22, '77 650 11 57', 'yamdia2002@yahoo.fr'),
(202, 'DIAKHATE', 'Sokhna Ka', '104 213/A', 'Secrétaire', 3, 61, 23, '77 550 39 09', 'skdiakhate@yahoo.fr'),
(203, 'DIAKO', 'Ibrahima', '100 301/C', 'Chauffeur', 3, 62, 18, '77 678 33 27', 'néant'),
(204, 'DIALLO', 'Aïssatou Bouna', '100 962/D', 'Secrétaire', 3, 59, 24, '77 630 95 10', 'astoubouna2000@yahoo.fr'),
(205, 'DIALLO', 'Fatoumata Binta', '106 359/Z', 'Assistante de Direction', 3, 63, NULL, '77 543 10 03', 'binou.diallo@gmail.com'),
(206, 'DIALLO', 'Khadizatou Fall', '102 069/Z', 'Resp. Publications en série', 3, 64, NULL, '77 541 70 57', 'khadyfa@hotmail.fr'),
(207, 'DIALLO', 'Oumar Samba', '101 542/A', 'Electricien', 3, 56, 15, '77 655 72 30', 'néant'),
(208, 'DIALLO', 'Papa Taïr', '101 404/P', 'Chef du Service des Approvisionnements', 3, 49, 25, '77 521 29 16', 'billydi53@yahoo.fr'),
(209, 'DIATTA', 'Hèlène', '101 195/E', 'Assistance pédagogique', 3, 49, NULL, '77 568 08 07', NULL),
(210, 'DIATTA', 'Mariama Dramé', '100 478/D', 'Technicienne', 3, 63, NULL, '77 617 97 28   ', 'mayana832003@yahoo.fr'),
(211, 'DIATTA', 'Ngoné Niang', '102 213/A', 'TP & Maint. Labo Autom', 3, 63, NULL, '77 505 88 11', 'ngoneniang@yahoo.fr'),
(212, 'DIEDHIOU', 'Djibril', '101 662/Z', 'Aide-infirmier', 3, 62, 26, '77 539 41 95', 'néant'),
(213, 'DIEDHIOU', 'Saly', '101 663/A', 'Agent de nettoiement', 3, 62, NULL, '77 376 85 33', 'néant'),
(214, 'DIENG', 'Salif', '101 312/B', 'Superviseur espaces verts', 3, 62, 13, '77 650 09 95', 'néant'),
(215, 'DIENG', 'Thiadji', '101 763/B', 'Secrétaire', 3, 49, NULL, '77 611 77 57', 'dthiadji@yahoo.fr'),
(216, 'DIEYE', 'Safiétou Ly', '102 826/I', 'Chargée de la saisie', 3, 61, NULL, '77 537 96 76', 'sofi_ly@hotmai.fr'),
(217, 'DIONE', 'Eve Madeleine Alice', '106 398/E', 'Assistante', 3, 49, 27, '77 517 03 62', 'dioneeva@gmail.com'),
(218, 'DIOP', 'Mame Diarra Pouye', '104 703/E', 'Responsable des recettes F.S', 3, 49, 11, '77 657 72 61', 'mdpouye@yahoo.fr'),
(219, 'DIOP', 'Maréme', '106 021/H', 'Secrétaire', 3, 65, NULL, '77 630 38 53', 'diopmareme76@yahoo.fr'),
(220, 'DIOP', 'Moctar', '100 533/D', 'Génie Chimique', 3, 66, NULL, '77 631 21 44', NULL),
(221, 'DIOP', 'Ndéye Adiara Ndiaye', '104 061/J', 'Labo Microbiologie', 3, 66, NULL, '77 640 60 58   ', 'ndadiara@hotmail.com'),
(222, 'DIOP', 'Ousmane', '101 748/I', 'Agent Administratif', 3, 52, NULL, '77 730 84 49', NULL),
(223, 'DIOP', 'Ousmane Niébé', '514 648/B', 'CSA', 3, 67, NULL, '77 549 55 99   ', 'oniebe@yahoo.fr'),
(224, 'DIOUF', 'Chérif', '106 339/D', 'Technicien', 3, 50, NULL, '77 425 50 09', 'dioufeolsenegal@yahoo.fr'),
(225, 'DIOUF', 'Marie Henriette Mbengue', '_', 'Secrétaire', 3, 77, NULL, '77 630 09 38   ', 'henriettembengue12@yahoo.fr'),
(226, 'FALL', 'Anna Gueye', '102 087/D', 'Secrétaire Caissiére', 3, 59, NULL, '77 553 75 55', 'anna_gueye_fall@yahoo.fr'),
(227, 'FALL', 'Elie', '100 667/F', 'CEMU', 3, 62, 17, '77 409 28 93', 'eliefall7@gmail.com'),
(228, 'FALL', 'Madjiguéne', '102 216/D', '', 3, 49, 11, '77 524 92 31', 'mbaien@hotmail.com'),
(229, 'FALL', 'Matar', '100 576/C', 'Reprographe', 3, 62, NULL, '77 517 75 54', 'fallmatar@yahoo.fr'),
(230, 'FATY', 'Boubacar', '102 575/Z', 'Maintenance machines', 3, 66, NULL, '77 541 42 70   ', 'bfaty@ucad.sn'),
(231, 'FAYE', 'Louise Diouf', '100 681/B', 'Secrétaire du Chef de Département', 3, 61, NULL, '77 655 58 29', 'louise.diouf@ucad.edu.sn'),
(232, 'FAYE', 'Louise Yande', '102 591/F', 'Secrétaire', 3, 61, NULL, '77 532 44 77', 'louloufaye@yahoo.fr'),
(233, 'FAYE', 'Mama Tata Dia', '101 226/D', 'TP Chim. Inst. Alim. Ch . Gén', 3, 63, NULL, '77 630 11 31', NULL),
(234, 'GNINGUE', 'Khadidiatou Diop', '101 496/A', 'Secretaire', 3, 59, 22, '77 306 82 56', 'kdg552003@yahoo.fr'),
(235, 'GNINGUE', 'Seynabou Faye', '102 164/D', 'Secretaire', 3, 59, NULL, '77 540 79 86', 'naboubada15@yahoo.fr'),
(236, 'GOUDIABY', 'Youssouf', '102 362/D', 'Magasinier', 3, 69, NULL, '77 503 73 25', NULL),
(237, 'GUEYE', 'Amadou Moustapha', '102 589/C', 'Chauffeur', 3, 62, NULL, '77 573 99 14', 'néant'),
(238, 'GUEYE', 'Awa Boubou SALL', '104 223/B', 'Analys, Physico-chimiques', 3, 66, 24, '77 510 72 99', 'hawasall@yahoo.fr'),
(239, 'GUEYE', 'Mbarou NDIAYE', '103 396/D', 'Aide laboratoire', 3, 70, NULL, '77 650 87 71   ', 'néant'),
(240, 'HANNE', 'Aminata', '106 191/N', 'Technicienne Supérieure', 3, 63, NULL, '77 445 81 17', 'Natah2000@hotmail.com'),
(241, 'HANNE', 'Dior Dieng', '101 764/C', 'TP Chim. Inst. Alim. Ch . Gén', 3, 63, NULL, '77 536 82 53', 'néant'),
(242, 'KA', 'Adama', '102 622/C', 'Maintenance Informatique', 3, 66, NULL, '77 551 84 93', 'adama.ka@ucad n° 31'),
(243, 'KABOU', 'Emmanuel', '102 626/G', 'Chef du Service SID', 3, 64, NULL, '77 642 19 96', 'ekabou@yahoo.fr'),
(244, 'KAMARA', 'Bineta', NULL, 'Assistante', 4, 77, NULL, '77 542 18 30', 'binetak@yahoo.fr'),
(245, 'KANE', 'Alé', '102 955/F', 'Laboratoire formation continue en Industrie Agro-alimentairre', 3, 66, NULL, '77 541 60 66', 'alekane11@yahoo.fr'),
(246, 'KHARMA', 'Mouhamadou Lamine', '102 625/F', 'Chargé de mission', 3, 62, 18, '77 643 82 43   ', 'laminekharma@yahoo.fr'),
(247, 'KOITA', 'Ndeye Mariama', '106 004/C', 'Aide Laboratoire', 3, 47, NULL, '76 632 23 01', 'mail non fonctionnel'),
(248, 'LO', 'Libasse', '106 364/F', 'Caissier', 3, 71, 11, '77 653 01 46', 'l_libasse@yahoo.fr'),
(249, 'LO', 'Ndeye Peinda Seye', '104 108/D', 'Secrétaire Caissiére', 3, 61, 11, '77 645 90 76', 'gmeca43@hotmail.com'),
(250, 'LY', 'Bara', '102 825/H', 'Agent de liaison', 3, 62, 18, '77 651 87 60', 'néant'),
(251, 'LY', 'Kheifate Ndiaye', '104 471/G', 'Technicienne', 3, 66, 29, NULL, 'boucoum@yahoo.fr'),
(252, 'MANDIAME', 'Henriette Diagne', '100 281/F', 'Secrétaire', 3, 59, 22, '77 649 49 47   ', 'hdiagne@hotmail.fr'),
(253, 'MANGA', 'Albert', '102 972/A', 'Standardiste', 3, 57, 30, '77 510 23 68', 'néant'),
(254, 'MARIA', 'Bakary', '102 979/H', 'Chauffeur', 3, 62, 15, '77 650 48 43', 'néant'),
(255, 'MBAYE', 'Mamadou', '_', 'Technicien', 3, 77, NULL, '77 502 48 62', 'mbaymama@gmail.com'),
(256, 'MBAYE', 'Mame Lissa Badiane', '100 359/F', 'Secrétaire', 3, 59, 11, '77 216 31 36', 'mame.lissa@yahoo.fr'),
(257, 'MBENGUE', 'Maria Yadiouf Ndiaye', '103 253/D', 'TP & Maint. Labo Electro.', 3, 66, NULL, '77 644 11 01', 'mariayadiouf_n@hotmail.com'),
(258, 'MBENGUE', 'Marie Noelle', '103 155/C', 'Chef Service de la Scolarité', 3, 49, 22, '77 573 65 72', 'marino@ucad.sn'),
(259, 'NDAW', 'Maguette', '104 588/Z', 'Electricien', 3, 52, 15, '77 558 29 72', 'mxabody@hotmail.fr'),
(260, 'NDIAYE', 'Aïda Diouf', '103 268/Z', 'Lingére', 3, 62, 15, '77 649 75 66', 'néant'),
(261, 'NDIAYE', 'Arame', '103 634/C', 'Responsable salle des présentoirs', 3, 52, NULL, '77 442 45 09   ', 'néant'),
(262, 'NDIAYE', 'Balla', '101 961/A', 'Menuisier Metallique', 3, 62, NULL, '77 512 32 58', NULL),
(263, 'NDIAYE', 'Mamadou', '106 235/C', 'Chef du Service des Finances et de la Comptabilité', 3, 49, 11, '77 650 89 61', 'ndiayemamadou73@yahoo.fr'),
(264, 'NDIAYE', 'Manatou Kane', '102 701/E', 'Secrétaire Directeur', 3, 59, 18, '77 565 23 87', 'kane_manatou@yahoo.fr'),
(265, 'NDIAYE', 'Ousseynou', '106 358/A', 'Techncien', 3, 72, 17, '77 781 85 83', 'ouzzin4@hotmail.com'),
(266, 'NDIAYE', 'Tamsir Malicke', '106 374/G', 'Agent de service', 3, 47, NULL, '77 322 60 80', NULL),
(267, 'NDIR', 'Khady  Diouf', '101 001/A', 'Secrétaire Directeur des Etudes', 3, 61, 12, '77 561 18 35', 'dkhadija@ucad.sn'),
(268, 'NDIR', 'Malick', '106 356/C', '', 3, 62, NULL, '76 690 42 35   ', 'ndirmalick@yahoo.fr'),
(269, 'NDOUR', 'Ibrahima', '104 308/F', 'Techn. Supérieur', 3, 50, NULL, '77 534 22 47', 'ibisndour@yahoo.fr'),
(270, 'NDOUR', 'Ndéye Khady Virginie', '_', 'Comptable', 3, 77, NULL, '77 649 69 14', 'kvndour@yahoo.fr'),
(271, 'NDOYE', 'Moussa', '103 254/C', 'Menuisier', 3, 62, NULL, '76 671 30 98', NULL),
(272, 'NGOM', 'Adama Diakhère', '106 190/O', 'Technicienne Supérieure', 3, 63, NULL, '77 613 49 22', 'cocoadu@gmail.com'),
(273, 'NIANE', 'Seynabou Fall', '100 568/F', 'Secrétaire', 3, 49, NULL, '550 55 69', 'seynaboufall@hotmail.com'),
(274, 'NIANG', 'Seynabou Dieng', '101 313/C', 'Secrétaire', 3, 59, 11, '77 636 84 35', 'naboudieng3000@yahoo.fr'),
(275, 'NIASSY', 'Baboucar', '100 758/I', '', 3, 49, NULL, '77 556 23 52', 'bniassy2000@yahoo.fr'),
(276, 'SAKHO', 'Mbaye', '103 778/D', 'Chauffeur du Directeur des Etudes', 3, 62, 12, '77 563 51 46   ', NULL),
(277, 'SAKHO', 'Volimata Sall', '104 259/A', 'Secrétaire', 3, 57, NULL, '77 785 65 63', 'salloulimata@yahoo.fr'),
(278, 'SALL', 'Cheikh Ahmet Tidiane', '106 388/D', 'Agent de liaison', 3, 62, 11, '77 034 56 53', 'néant'),
(279, 'SALL', 'Cheikh Tidiane', '100 509/M', '', 3, 49, 29, NULL, NULL),
(280, 'SAMB', 'Seyni Ndiaye', '103 374/D', 'Aide-infirmiére', 3, 52, 26, '77 557 23 07', 'néant'),
(281, 'SANE', 'Ibrahima', '104 714/E', '', 3, 52, 22, '77 557 48 30', 'papissanefr@hotmail.com'),
(282, 'SANE', 'Ibrahima Papia', '103 858/G', 'Agent de liaison', 3, 47, 13, '77 517 18 75   ', 'néant'),
(283, 'SANE', 'Insa', '103 851/Z', 'Chargé de la maintenance', 3, 73, NULL, '33  825 75 28', 'babadisane@gmail.com'),
(284, 'SANE', 'Souleymane', '100 567/E', 'Informaticien', 3, 74, NULL, '77 650 28 35', 'jssane@gmail.com'),
(285, 'SARR', 'Emilie Ndiaye', '103 377/A', 'Aide laboratoire', 3, 57, NULL, '77 549 99 07', 'néant'),
(286, 'SECK', 'Abdourakhmane', '106 354/E', '', 3, 52, NULL, '76 395 23 23', NULL),
(287, 'SECK', 'Madiop', '104 211/C', '', 3, 49, NULL, '77 756 10 65', 'madiop.seck@ucad.edu.sn'),
(288, 'SECK', 'Matar', '100 474/Z', 'Technicien', 3, 50, NULL, '77 456 27 24', 'seck.matar@gmail.com'),
(289, 'SECK', 'Samba', '_', 'Plombier', 3, 77, NULL, '77 651 52 78', 'néant'),
(290, 'SEYDI', 'Ismaîla', '104 261/H', 'Electricien', 3, 62, 15, '77 100 34 06', 'papiseydi@live.fr'),
(291, 'SEYDI', 'Souleymane', '104 581/G', 'Préposé au prêt', 3, 76, NULL, '77 539 60 89   ', 'seydi31@yahoo.fr'),
(292, 'SOW', 'Mariama Soda Rosa', '_', 'Assistante', 3, 77, NULL, '77 520 37 50', 'rosa_sow@yahoo.fr'),
(293, 'SOW', 'Mbacké', '104 073/I', 'Menuisier', 3, 52, 15, '77 373 84 09', 'néant'),
(294, 'SY', 'Samba Ciré', '104 535/B', 'Techncien', 3, 50, NULL, '77 532 60 08', 'sambaciresy@yahoo.fr'),
(295, 'TALL', 'Oumar', '104 677/A', 'Chauffeur', 3, 62, 15, '77 659 97 79', 'néant'),
(296, 'TAMBA', 'Seydou', '104 645/B', 'Aide-frigoriste', 3, 62, NULL, '77 654 43 25', 'néant'),
(297, 'THIAM', 'Mamadou Mamoudou', '104 762/B', 'Charg.cont.entrées/sorties', 3, 62, NULL, '77 650 62 47   ', 'maothiam2003@yahoo.fr'),
(298, 'THIAM', 'Mbissane', '104 687/Z', 'Assistante Pédagogique', 3, 61, NULL, '77 655 82 99', 'tmbissane@hotmail.com'),
(299, 'THIAM', 'Momar', '106 012/F', '', 3, 52, 22, '77 905 77 36   ', 'momarthiam50@gmail.com'),
(300, 'THIAM', 'Mouhamadou', '104 378/A', 'Equi. Elec. Et Autom. Indus', 3, 66, NULL, '70 703 78 09   ', 'mouhamadou_thiam80@hotmail.com'),
(301, 'THIAM', 'Nogoye Diop', '101 814/I', 'Secrétaire', 3, 49, 17, '77 568 07 45', 'nogaye@ucad.sn'),
(302, 'THIAM', 'Kadeidiata Toubra', '104 708/J', 'Agent de nettoiement', 3, 47, 15, '77 563 76 47', 'néant'),
(303, 'THIAW', 'Cany Sall', '104 916/I', 'Chef du Service Comptabilité Matiéres', 3, 49, 30, '77 632 62 95', 'kanysall@hotmail.fr'),
(304, 'THIOUNE', 'Awa Kâ', '104 908/L', 'Chef du Service des Ressources Humaines', 3, 61, 13, '77 029 81 06', 'awambka@yahoo.fr'),
(305, 'TOURE', 'Cheikh Ahmadou Mbacké', '104 849/H', 'Chef du bureau Audit et Contrôle', 3, 49, NULL, '77 872 13 36   ', 'tourval@yahoo.fr'),
(306, 'TOURE', 'Rokhaya Sow', '_', 'Secrétaire', 3, 77, NULL, '77 270 34 51', 'rokhayast@hotmail.fr'),
(307, 'WELE', 'Abou', '105 008/E', 'Assistant au CEPECS', 3, 52, NULL, '77 630 08 45', 'weleabou@yahoo.fr'),
(686, 'ADJ', 'Mamadou', '100 045/Z', 'Enseignant-Chercheur', 1, 1, 4, '77 819 62 00', NULL),
(687, 'AGNE', 'Alassane Elfecky', '100 063/D', 'Enseignant-Chercheur', 1, 2, 5, '77 681 81 98', NULL),
(688, 'ANNE', 'Cheikh Oumar', '100 065/B', 'Enseignant-Chercheur', 1, 2, 6, '77 332 00 43', NULL),
(689, 'AYESSOU', 'Nicolas', '100 198/A', 'Enseignant-Chercheur', 1, 3, 6, '77 251 48 48', NULL),
(690, 'AZILINON', 'Dorothé B.', '100 101/A', 'Enseignant-Chercheur', 1, 1, 7, '77 555 33 71', NULL),
(691, 'BA', 'Oumar', '510 434/A', 'Enseignant-Chercheur', 1, 4, 4, '77 639 46 62', NULL),
(692, 'BADIANE', 'Daouda', '100 337/F', 'Enseignant-Chercheur', 1, 2, 8, '77 654 73 44', NULL),
(693, 'BAH', 'Alassane', '100 166/Z', 'Enseignant-Chercheur', 1, 3, 8, '77 641 42 99', NULL),
(694, 'BALDE', 'Mamadou', '100 406/I', 'Enseignant-Chercheur', 1, 3, 6, '77 552 20 80', NULL),
(695, 'BALDE', 'Samba', '100 213/C', 'Enseignant-Chercheur', 1, 2, 8, '77 534 79 40', NULL),
(696, 'BAMPOKY', 'Boniface', '100 482/C', 'Enseignant-Chercheur', 1, 3, 5, '77 565 28 57', NULL),
(697, 'CAMARA', 'Mamadou Samba', '106 293 /', 'Enseignant-Chercheur', 1, 5, 8, '77 395 54 22', NULL),
(698, 'CISSE', 'Mady', '100 754/E', 'Enseignant-Chercheur', 1, 2, 6, '77 378 72 40', NULL),
(699, 'CORENTHIN', 'Alex Louis', '101 034/A', 'Enseignant-Chercheur', 1, 2, 8, '77 631 77 76', NULL),
(700, 'COULIBALY', 'Hamidou', '101 060/H', 'Enseignant-Chercheur', 1, 3, 5, NULL, NULL),
(701, 'DIALLO', 'Mamadou Salif', '357 858/F', 'Enseignant-Chercheur', 1, 6, 9, '77 659 40 74', NULL),
(702, 'DIENE', 'Aminata Diop', '101 154/B', 'Enseignant-Chercheur', 1, 5, 8, '77 641 32 35', NULL),
(703, 'DIENG', 'Modou', '102 223/Z', 'Enseignant-Chercheur', 1, 7, 6, '77 630 46 07', NULL),
(704, 'DIEYE', 'Ngagne', '101 671/B', 'Enseignant-Chercheur', 1, 2, 4, '77 655 25 51', NULL),
(705, 'DIONG', 'Mamadou', '101 734/F', 'Enseignant-Chercheur', 1, 5, 5, '77 654 43 84', NULL),
(706, 'DIOP', 'Christiane Romain', '103 703/F', 'Enseignant-Chercheur', 1, 7, 10, NULL, NULL),
(707, 'DIOP', 'Codou Gueye Mar', '102 975/D', 'Enseignant-Chercheur', 1, 8, 6, '77 630 96 46', NULL),
(708, 'DIOP', 'Magaye', '101 497/Z', 'Enseignant-Chercheur', 1, 2, 4, '77 643 69 58', NULL),
(709, 'DIOP', 'Mbaye', '101 056/A', 'Enseignant-Chercheur', 1, 5, 10, '77 554 07 17  7', NULL),
(710, 'DIOP', 'Moussa', '101 946/I', 'Enseignant-Chercheur', 1, 5, 5, '77 567 71 82', NULL),
(711, 'DIOUM', 'Ibra', '100 468/E', 'Enseignant-Chercheur', 1, 5, 8, '77 531 27 10', NULL),
(712, 'FALL', 'Amadou Amdy', '106415/A', 'Enseignant-Chercheur', 1, 5, 5, '77 534 86 65', NULL),
(713, 'FALL', 'Aynina', '102 042/E', 'Enseignant-Chercheur', 1, 5, 5, '77 176 67 00', NULL),
(714, 'FALL', 'Ibrahima', '100 335/D', 'Enseignant-Chercheur', 1, 5, 8, '77 531 40 37', NULL),
(715, 'FALL', 'Ndeye Maguette', '100 282/E', 'Enseignant-Chercheur', 1, 5, 10, '77 639 63 07', NULL),
(716, 'FALL', 'Oumar', '102 047/Z', 'Enseignant-Chercheur', 1, 5, 8, '77 658 24 52', NULL),
(717, 'FALL', 'Salif Sagana', '102 491/G', 'Enseignant-Chercheur', 1, 5, 4, '77 536 81 43', NULL),
(718, 'FARSSI', 'Sidi Mohamed', '102 222 /', 'Enseignant-Chercheur', 1, 9, 8, '77 637 16 37', NULL),
(719, 'FAYE', 'Mamadou', '106 291/M', 'Enseignant-Chercheur', 1, 5, 6, '77 560 57 83', NULL),
(720, 'FAYE', 'Roger Marcellin', '102 274/F', 'Enseignant-Chercheur', 1, 9, 4, '77 536 50 20', NULL),
(721, 'GAYE', 'Amadou Thierno', '102 530/A', 'Enseignant-Chercheur', 1, 9, 8, '77 578 28 38   ', NULL),
(722, 'GOUDIABY', 'Chérif Ibrahima', '381 712/L', 'Enseignant-Chercheur', 1, 7, 10, '77 573 22 56 77', NULL),
(723, 'GUEYE', 'Amadou Moctar', '386 842/E', 'Enseignant-Chercheur', 1, 7, 7, '77 503 64 66', NULL),
(724, 'HANNE', 'Ibrahima', '102 554/F', 'Enseignant-Chercheur', 1, 10, 5, '77 418 00 26', NULL),
(725, 'JANANTO', 'Pierre', '102 595/B', 'Enseignant-Chercheur', 1, 3, 5, '77 510 80 12', NULL),
(726, 'KA', 'Oury', '353 621/D', 'Enseignant-Chercheur', 1, 7, 8, '77 545 14 11', NULL),
(727, 'KAMARA', 'Lioudmila F. Pavlovskaya', '607 689 /', 'Enseignant-Chercheur', 1, 2, 7, '77 515 26 38', NULL),
(728, 'KANE', 'Cheikhou', '100 734/G', 'Enseignant-Chercheur', 1, 3, 6, '77 148 79 61', NULL),
(729, 'KEBE', 'Mohamed Fadel', '102 604/G', 'Enseignant-Chercheur', 1, 2, 10, '77 819 29 09', NULL),
(730, 'KEINDE', 'Dame', '100 596/A', 'Enseignant-Chercheur', 1, 5, 10, '77 273 42 79 77', NULL),
(731, 'KEITA', 'Khadidiatou Wane', '104 989/E', 'Enseignant-Chercheur', 1, 5, 8, '77 548 38 41', NULL),
(732, 'KOITA', 'Démo', '103 942/C', 'Enseignant-Chercheur', 1, 2, 6, '76 693 81 91', NULL),
(733, 'LISHOU', 'Claude', '102 854/D', 'Enseignant-Chercheur', 1, 1, 4, '77 638 41 85  7', NULL),
(734, 'LO', 'Sidi Mambaye', '102 853/C', 'Enseignant-Chercheur', 1, 11, 4, '77 650 63 34', NULL),
(735, 'MALOU', 'Paul', '102 896/B', 'Enseignant-Chercheur', 1, 2, 7, '76 664 69 02', NULL),
(736, 'MANDIANG', 'Youssouf', '102 964/D', 'Enseignant-Chercheur', 1, 11, 7, '77 532 59 72', NULL),
(737, 'MBACKE', 'Ahmath Bamba', '104 433/A', 'Enseignant-Chercheur', 1, 5, 8, '77 575 64 90', NULL),
(738, 'MBAYE', 'Abibou', '103 037/Z', 'Enseignant-Chercheur', 1, 10, 5, '77 654 43 82', NULL),
(739, 'MBAYE', 'Cheikh Tidiane', '103 047/A', 'Enseignant-Chercheur', 1, 11, 6, '77 572 71 38', NULL),
(740, 'MBENGUE', 'Malick', '104 417/E', 'Enseignant-Chercheur', 1, 3, 6, '77 653 28 81', NULL),
(741, 'MBOUP', 'Alioune Badara', '601 642/C', 'Enseignant-Chercheur', 1, 4, 4, '77 637 37 69', NULL),
(742, 'MENDY', 'Gervais', '101 045/A', 'Enseignant-Chercheur', 1, 5, 8, '70 100 65 02', NULL),
(743, 'NDIAYE', 'Abdoulaye', '508 187/M', 'Enseignant-Chercheur', 1, 12, 7, '77 654 26 28', NULL),
(744, 'NDIAYE', 'Mamadou', '103 121/D', 'Enseignant-Chercheur', 1, 2, 7, '77 433 98 65', NULL),
(745, 'NDIAYE', 'Mamadou Lamine', '100 985/E', 'Enseignant-Chercheur', 1, 3, 4, '77 111 68 70', NULL),
(746, 'NDIAYE', 'Mame Mor Diarra', '602 211/F', 'Enseignant-Chercheur', 1, 4, 7, '77 649 63 11', NULL),
(747, 'NDIAYE', 'Mouhamadou Falilou', '104 047/B', 'Enseignant-Chercheur', 1, 5, 4, '77 657 46 71', NULL),
(748, 'NDIAYE', 'Ndiaga', '106 347/A', 'Enseignant-Chercheur', 1, 5, 5, '77 442 37 37', NULL),
(749, 'NDIAYE', 'Papa Alioune Sarr', '103 346/A', 'Enseignant-Chercheur', 1, 11, 4, '77 819 60 01', NULL),
(750, 'NDIAYE', 'Seydi Ababacar', '103 199/C', 'Enseignant-Chercheur', 1, 2, 6, '77 648 10 00', NULL),
(751, 'NDIAYE', 'Talla', '103 453/B', 'Enseignant-Chercheur', 1, 7, 4, '77 310 67 76', NULL),
(752, 'NDOYE', 'Djibril', '103 493/F', 'Enseignant-Chercheur', 1, 3, 5, '77 743 33 83', NULL),
(753, 'NDOYE', 'Mame Moussé', '103 537/E', 'Enseignant-Chercheur', 1, 3, 5, '77 639 50 83', NULL),
(754, 'NDOYE', 'Seyni', '102 963/C', 'Enseignant-Chercheur', 1, 2, 10, '77 557 73 49 77', NULL),
(755, 'NGOM', 'Blaise', '103 539/G', 'Enseignant-Chercheur', 1, 2, 6, '77 634 39 56', NULL),
(756, 'NGOM', 'El Hadji Abib', '103 534/B', 'Enseignant-Chercheur', 1, 1, 4, '77 638 45 02', NULL),
(757, 'NGOM', 'Ibrahima', '104 424/A', 'Enseignant-Chercheur', 1, 5, 8, '77 655 50 39', NULL),
(758, 'NGUER', 'Cheikh Momar', '102 614/F', 'Enseignant-Chercheur', 1, 2, 6, '77 540 57 27', NULL),
(759, 'NIANG', 'Ababacar', '103 669/E', 'Enseignant-Chercheur', 1, 2, 4, '77 542 54 30', NULL),
(760, 'NIANG', 'Awa', '103 128/C', 'Enseignant-Chercheur', 1, 11, 7, '77 642 55 16', NULL),
(761, 'NIANG', 'Boubacar', '510 443/A', 'Enseignant-Chercheur', 1, 2, 4, '77 576 69 33', NULL),
(762, 'NIANG', 'Libasse', '103 564/A', 'Enseignant-Chercheur', 1, 10, 5, '77100 29 23', NULL),
(763, 'NIANG', 'Mamadou', '103 119/E', 'Enseignant-Chercheur', 1, 2, 8, '77 531 62 62', NULL),
(764, 'NJIE', 'Codou Mbassy Diene', '101 668/F', 'Enseignant-Chercheur', 1, 3, 4, '77 637 65 44', NULL),
(765, 'OUYA', 'Samuel', '103 614/E', 'Enseignant-Chercheur', 1, 2, 8, '77 637 27 89', NULL),
(766, 'SAKHO', 'Mama', '607 490/R', 'Enseignant-Chercheur', 1, 2, 6, '77 560 74 99', NULL),
(767, 'SALL', 'Fatou DIOP', '101 204/D', 'Enseignant-Chercheur', 1, 2, 5, '77 636 74 47', NULL),
(768, 'SALL', 'Saïdou Moustapha', '104 069/B', 'Enseignant-Chercheur', 1, 9, 6, '77 538 54 59', NULL),
(769, 'SAMBE', 'Falilou Mbacké', '104 074/E', 'Enseignant-Chercheur', 1, 2, 6, '77 510 57 07', NULL),
(770, 'SAMBOU', 'Vincent', '103 728/I', 'Enseignant-Chercheur', 1, 2, 10, '77 819 29 10', NULL),
(771, 'SARR', 'Oumar', '103 948/I', 'Enseignant-Chercheur', 1, 3, 8, NULL, NULL),
(772, 'SECK', 'Mamadou Amadou', '104 085/H', 'Enseignant-Chercheur', 1, 2, 6, '77 630 80 17', NULL),
(773, 'SECK', 'Mame  Ndella', '103 145/B', 'Enseignant-Chercheur', 1, 4, 8, '77 639 50 58', NULL),
(774, 'SECK', 'Mohamed Tidiane', '104 083/J', 'Enseignant-Chercheur', 1, 2, 8, '77 569 17 49', NULL),
(775, 'SENE', 'Ndeye Awa', '106 348/Z', 'Enseignant-Chercheur', 1, 5, 10, '77 653 90 55', NULL),
(776, 'SIMEN', 'Serge Francis', '100 983/C', 'Enseignant-Chercheur', 1, 5, 5, '77 676 97 07', NULL),
(777, 'SOUARE', 'Cheikhou', '104 387/C', 'Enseignant-Chercheur', 1, 10, 5, '77 541 16 35', NULL),
(778, 'SOW', 'Abdoulaye', '104 412/Z', 'Enseignant-Chercheur', 1, 2, 6, '77 534 71 25', NULL),
(779, 'SOW', 'Amy GASSAMA', '102 492/F', 'Enseignant-Chercheur', 1, 11, 6, '77 641 80 33', NULL),
(780, 'SOW', 'Demba', '104 446/A', 'Enseignant-Chercheur', 1, 9, 6, '77 569 71 79', NULL),
(781, 'SOW', 'Gustave', '104 508/H', 'Enseignant-Chercheur', 1, 2, 4, '77 654 55 40', NULL),
(782, 'SY', 'Abdoulaye', '104 511 /', 'Enseignant-Chercheur', 1, 4, 4, '77 646 32 53', NULL),
(783, 'TALL', 'Khaly', '104 669/D', 'Enseignant-Chercheur', 1, 2, 4, '77 560 27 55', NULL),
(784, 'THIAM', 'Ababacar', '603 370/M', 'Enseignant-Chercheur', 1, 12, 7, '77 551 69 04', NULL),
(785, 'THIAM', 'Mamadou Moustapha', '104 779/D', 'Enseignant-Chercheur', 1, 10, 5, '77 639 49 92', NULL),
(786, 'THIAW', 'Lamine', '104 808/K', 'Enseignant-Chercheur', 1, 2, 4, '77 658 59 97', NULL),
(787, 'TIDJANI', 'Bassirou', '104 811/C', 'Enseignant-Chercheur', 1, 1, 5, '77 644 58 85', NULL),
(788, 'TINE', 'Emmanuel', '104 816/H', 'Enseignant-Chercheur', 1, 2, 6, '77 645 28 20', NULL),
(789, 'TOURE', 'Alioune', '510 511/A', 'Enseignant-Chercheur', 1, 7, 5, NULL, NULL),
(790, 'TOURE', 'Coumba Kane', '104 879/E', 'Enseignant-Chercheur', 1, 1, 6, '77 637 22 66', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `agent_pats`
--

CREATE TABLE IF NOT EXISTS `agent_pats` (
  `N°` int(15) DEFAULT NULL,
  `PRENOMS` char(25) DEFAULT NULL,
  `NOM` char(9) DEFAULT NULL,
  `MledeSolde` char(12) DEFAULT NULL,
  `GRADE` char(31) DEFAULT NULL,
  `FONCTIONS` char(61) DEFAULT NULL,
  `DEPT/SERVICE` char(100) DEFAULT NULL,
  `TELEPHONE` char(42) DEFAULT NULL,
  `EMAIL` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `agent_pats`
--

INSERT INTO `agent_pats` (`N°`, `PRENOMS`, `NOM`, `MledeSolde`, `GRADE`, `FONCTIONS`, `DEPT/SERVICE`, `TELEPHONE`, `EMAIL`) VALUES
(1, 'Alkassoume Abdoulaye', 'ANNE', '100 136/C', 'Techn. Supérieur', 'Maint. Atel. Encad.TP', 'Dept Génie Mécanique', '77 652 83 67', 'kassoum10@gmail.com'),
(2, 'Penda  Houléye Marceline', 'AW', '100 075/C', 'A.A.U', 'Responsable des Dépenses', 'Service des Finances et de la Comptabilité', '77 528 19 40', 'awsyfr@yahoo.fr'),
(3, 'Tidiane Amadou', 'BA', '100 311/B', 'C.A.U', 'Vaguemestre', 'Dept Génie Electrique', '77 658 31 43', 'néant'),
(4, 'Yaya', 'BA', '106 355/D', 'Agent de service', 'Vaguemestre', 'Direction des Etudes', '77 808 42 89', 'néant'),
(5, 'Aladji', 'BADIANE', '100 336/E', 'Technicien', 'Souffleur de verre', 'Dept Génie Chimique & Biologie Appliquée', '77 501 75 56', 'albadiane58@yahoo,fr'),
(6, 'Mamadou Lamine', 'BADJI', '100 373/B', 'Mécanicien', 'Agent nett. chargé du débit mat.', 'Dept Génie Mécanique', '77 237 70 57', 'laizobadji@yahoo.fr'),
(7, 'Safiétou', 'BADJI', NULL, 'Agent de service', 'Vaguemestre', 'Service des Ressources Humaines', '77 536 90 71', 'safietoubadji@yahoo.fr'),
(8, 'Pathé', 'BARO', '100 163/C', 'Techn. Supérieur', 'Electro. & syst. Infor', 'Dept Génie Electrique', '77 568 09 72', 'pbaro77@yahoo.fr'),
(9, 'Médard', 'BASSENE', '100 554/C', 'Techn. Supérieur', 'Maintenance machines Administrateur réseau, système', 'Dept Génie Informatique', '77 646 58 97', 'mdrbassene@gmail.com'),
(10, 'Fatoumata', 'BOCOUM', '100 380/F', 'Agent de service', NULL, 'SID', '77 947 46 52', 'néant'),
(11, 'Bakary', 'BODIAN', '100 671/A', 'Aide-Technique', 'Electricien', 'Service Maintenance et Logistique', NULL, NULL),
(12, 'Abdel Aziz', 'BOYE', '102 942/D', 'S.A.U', 'Réalisateur', 'Service chargé de la vie Etudiante', '76 330 92 07', 'abdelazizboye@yahoo.fr'),
(13, 'Papa Arona', 'CAMARA', '100 788/F', 'Caméraman', 'Photographe - Caméraman', 'CRENT', '77 412 04 90', 'ronecamara1@yahoo.fr'),
(14, 'Ousseynou', 'CISS', '100 948/L', 'S.A.U', 'Chauffeur', 'Direction', '77 242 15 26', 'néant'),
(15, 'Anne Marie', 'CISSE', '100 926/L', 'Secrétaire Sténodactylo', 'Secrétaire', 'Secrétariat Général', '77 567 66 04', 'annemariecisse@yahoo.fr'),
(16, 'Oumar', 'CISSE', '100 593/B', 'Ingénieur de conception', NULL, 'Dept Génie Electrique', NULL, NULL),
(17, 'Papa Ousmane', 'CISSE', NULL, 'Techn. Supérieur', 'Techn. Supérieur en informatique', 'CRENT', '77 301 08 44', 'cissepoc@yahoo.fr'),
(18, 'Malamine', 'DANSOKHO', '101 095/F', 'Agent de service', 'Agent de service', 'Service Comptabilité matiéres', '77 559 40 97                77 963 99 39', 'néant'),
(19, 'Mankama', 'DANSOKHO', '106 389/C', 'C.A.U', NULL, 'SID', '77 539 33 24                76 389 28 37', 'makama.dansokho@yahoo.fr'),
(20, 'Mamadou', 'DIA', '101 228/F', 'Agent de service', 'Vaguemestre', 'Secrétariat Général', '77 636 54 45                  70 107 44 24', 'badou.dia@yahoo.fr'),
(21, 'Moctar', 'DIACK', '_', 'S.A.U', NULL, 'Service des Finances et de la Comptabilité', '77 376 28 66', 'diack95@hotmail.com'),
(22, 'Dieynaba Mané', 'DIAGNE', '_', 'Secrétaire de Direction', 'Secrétaire', 'S.R.H', '77 573 90 17', 'dieynabam@gmail.com'),
(23, 'Djily Mbaye', 'DIAGNE', '100 729/M', 'A.A.U', 'Comptable', 'Dept Gestion', '77 592 40 92    77 403 74 84', 'djily_d@hotmail.com'),
(24, 'Mamadou', 'DIAGNE', '101 299/Z', 'E.A.U', 'Préposé au prêt', 'SID', '77 272 08 98', 'néant'),
(25, 'Yamar', 'DIAGNE', '101 406/H', 'C.A.U', 'Adjoint Resp. fich. Scolarité', 'Service de la Scolarité', '77 650 11 57', 'yamdia2002@yahoo.fr'),
(26, 'Sokhna Ka', 'DIAKHATE', '104 213/A', 'Secrétaire de Direction', 'Secrétaire', 'Laboratoire pour la Physique de l''Athmosphere', '77 550 39 09', 'skdiakhate@yahoo.fr'),
(27, 'Ibrahima', 'DIAKO', '100 301/C', 'E.A.U', 'Chauffeur', 'Direction', '77 678 33 27', 'néant'),
(28, 'Aïssatou Bouna', 'DIALLO', '100 962/D', 'Secrétaire Sténodactylo', 'Secrétaire', 'Laboratoire d''Analyses et d''Essais', '77 630 95 10', 'astoubouna2000@yahoo.fr'),
(29, 'Fatoumata Binta', 'DIALLO', '106 359/Z', 'Techn. Supérieure', 'Assistante de Direction', 'Dept Génie Informatique', '77 543 10 03', 'binou.diallo@gmail.com'),
(30, 'Khadizatou Fall', 'DIALLO', '102 069/Z', 'Conserv. Bibliot', 'Resp. Publications en série', 'SID', '77 541 70 57', 'khadyfa@hotmail.fr'),
(31, 'Oumar Samba', 'DIALLO', '101 542/A', 'Aide-Technique', 'Electricien', 'Service Maintenance et Logistique', '77 655 72 30', 'néant'),
(32, 'Papa Taïr', 'DIALLO', '101 404/P', 'A.A.U', 'Chef du Service des Approvisionnements', 'Service des Approvisionnements', '77 521 29 16', 'billydi53@yahoo.fr'),
(33, 'Hèlène', 'DIATTA', '101 195/E', 'A.A.U', 'Assistance pédagogique', 'Dept Gestion', '77 568 08 07', NULL),
(34, 'Mariama Dramé', 'DIATTA', '100 478/D', 'Techn. Supérieure', 'Technicienne', 'Dept Génie Chimique & Biologie Appliquée', '77 617 97 28        70 607 33 19', 'mayana832003@yahoo.fr'),
(35, 'Ngoné Niang', 'DIATTA', '102 213/A', 'Techn. Supérieure', 'TP & Maint. Labo Autom', 'Dept Génie Electrique', '77 505 88 11', 'ngoneniang@yahoo.fr'),
(36, 'Djibril', 'DIEDHIOU', '101 662/Z', 'E.A.U', 'Aide-infirmier', 'Service Médical', '77 539 41 95', 'néant'),
(37, 'Saly', 'DIEDHIOU', '101 663/A', 'E.A.U', 'Agent de nettoiement', 'Dept Génie Civil', '77 376 85 33', 'néant'),
(38, 'Salif', 'DIENG', '101 312/B', 'E.A.U', 'Superviseur espaces verts', 'Service des Ressources Humaines', '77 650 09 95', 'néant'),
(39, 'Thiadji', 'DIENG', '101 763/B', 'A.A.U', 'Secrétaire', 'Dept Génie Chimique & Biologie Appliquée', '77 611 77 57', 'dthiadji@yahoo.fr'),
(40, 'Safiétou Ly', 'DIEYE', '102 826/I', 'Secrétaire de Direction', 'Chargée de la saisie', 'SID', '77 537 96 76', 'sofi_ly@hotmai.fr'),
(41, 'Eve Madeleine Alice', 'DIONE', '106 398/E', 'A.A.U', 'Assistante', 'Projet INNODEV', '77 517 03 62', 'dioneeva@gmail.com'),
(42, 'Mame Diarra Pouye', 'DIOP', '104 703/E', 'A.A.U', 'Responsable des recettes F.S', 'Service des Finances et de la Comptabilité', '77 657 72 61', 'mdpouye@yahoo.fr'),
(43, 'Maréme', 'DIOP', '106 021/H', 'Secrétaire BEP', 'Secrétaire', 'Secrétariat Général', '77 630 38 53', 'diopmareme76@yahoo.fr'),
(44, 'Moctar', 'DIOP', '100 533/D', 'Ingénieur', 'Génie Chimique', 'Dept Génie Chimique & Biologie Appliquée', '77 631 21 44', NULL),
(45, 'Ndéye Adiara Ndiaye', 'DIOP', '104 061/J', 'Ingénieur', 'Labo Microbiologie', 'Dept Génie Chimique & Biologie Appliquée', '77 640 60 58    70 103 93 84', 'ndadiara@hotmail.com'),
(46, 'Ousmane', 'DIOP', '101 748/I', 'C.A.U', 'Agent Administratif', 'Dept Gestion', '77 730 84 49', NULL),
(47, 'Ousmane Niébé', 'DIOP', '514 648/B', 'Administrateur Civil', 'CSA', 'Secrétariat Général', '77 549 55 99    77 644 22 09', 'oniebe@yahoo.fr'),
(48, 'Chérif', 'DIOUF', '106 339/D', 'Techn. Supérieur', 'Technicien', 'Dept Génie Electrique', '77 425 50 09', 'dioufeolsenegal@yahoo.fr'),
(49, 'Marie Henriette Mbengue', 'DIOUF', '_', 'Secrétaire Bureautique', 'Secrétaire', 'Service de la Scolarité', '77 630 09 38        70 200 84 75', 'henriettembengue12@yahoo.fr'),
(50, 'Anna Gueye', 'FALL', '102 087/D', 'Secrétaire Sténodactylo', 'Secrétaire Caissiére', 'Dept Gestion', '77 553 75 55', 'anna_gueye_fall@yahoo.fr'),
(51, 'Elie', 'FALL', '100 667/F', 'E.A.U', 'CEMU', 'CRENT', '77 409 28 93', 'eliefall7@gmail.com'),
(52, 'Madjiguéne', 'FALL', '102 216/D', 'A.A.U', NULL, 'Service des Finances et de la Comptabilité', '77 524 92 31', 'mbaien@hotmail.com'),
(53, 'Matar', 'FALL', '100 576/C', 'E.A.U', 'Reprographe', 'Dept Gestion', '77 517 75 54', 'fallmatar@yahoo.fr'),
(54, 'Boubacar', 'FATY', '102 575/Z', 'Ingénieur', 'Maintenance machines', 'Dept Génie Informatique', '77 541 42 70        70 646 42 74', 'bfaty@ucad.sn'),
(55, 'Louise Diouf', 'FAYE', '100 681/B', 'Secrétaire de Direction', 'Secrétaire du Chef de Département', 'Dept Gestion', '77 655 58 29', 'louise.diouf@ucad.edu.sn'),
(56, 'Louise Yande', 'FAYE', '102 591/F', 'Secrétaire de Direction', 'Secrétaire', 'Dept Génie Mécanique', '77 532 44 77', 'louloufaye@yahoo.fr'),
(57, 'Mama Tata Dia', 'FAYE', '101 226/D', 'Techn. Supérieure', 'TP Chim. Inst. Alim. Ch . Gén', 'Dept Génie Chimique & Biologie Appliquée', '77 630 11 31', NULL),
(58, 'Khadidiatou Diop', 'GNINGUE', '101 496/A', 'Secrétaire Sténodactylo', 'Secretaire', 'Service de la Scolarité', '77 306 82 56', 'kdg552003@yahoo.fr'),
(59, 'Seynabou Faye', 'GNINGUE', '102 164/D', 'Secrétaire Sténodactylo', 'Secretaire', 'Dept Génie Civil', '77 540 79 86', 'naboubada15@yahoo.fr'),
(60, 'Youssouf', 'GOUDIABY', '102 362/D', 'Aide-Technicien', 'Magasinier', 'Dept Génie Mécanique', '77 503 73 25', NULL),
(61, 'Amadou Moustapha', 'GUEYE', '102 589/C', 'E.A.U', 'Chauffeur', 'Secrétariat Général', '77 573 99 14', 'néant'),
(62, 'Awa Boubou SALL', 'GUEYE', '104 223/B', 'Ingénieur', 'Analys, Physico-chimiques', 'Laboratoire d''analyses et d''essais', '77 510 72 99', 'hawasall@yahoo.fr'),
(63, 'Mbarou NDIAYE', 'GUEYE', '103 396/D', 'Aide laboratoire', 'Aide laboratoire', 'Dept Génie Chimique & Biologie Appliquée', '77 650 87 71    77 402 74 62', 'néant'),
(64, 'Aminata', 'HANNE', '106 191/N', 'Techn. Supérieure', 'Technicienne Supérieure', 'Dept Génie Chimique & Biologie Appliquée', '77 445 81 17', 'Natah2000@hotmail.com'),
(65, 'Dior Dieng', 'HANNE', '101 764/C', 'Techn. Supérieure', 'TP Chim. Inst. Alim. Ch . Gén', 'Dept Génie Chimique & Biologie Appliquée', '77 536 82 53', 'néant'),
(66, 'Adama', 'KA', '102 622/C', 'Ingénieur', 'Maintenance Informatique', 'Dept Génie Informatique', '77 551 84 93', 'adama.ka@ucad n° 31'),
(67, 'Emmanuel', 'KABOU', '102 626/G', 'Conserv. Bibliot', 'Chef du Service SID', 'SID', '77 642 19 96', 'ekabou@yahoo.fr'),
(68, 'Bineta', 'KAMARA', NULL, 'A.A.U', 'Assistante', 'CIFRES', '77 542 18 30', 'binetak@yahoo.fr'),
(69, 'Alé', 'KANE', '102 955/F', 'Ingénieur', 'Laboratoire formation continue en Industrie Agro-alimentairre', 'Dept Génie Chimique & Biologie Appliquée', '77 541 60 66', 'alekane11@yahoo.fr'),
(70, 'Mouhamadou Lamine', 'KHARMA', '102 625/F', 'E.A.U', 'Chargé de mission', 'Direction', '77 643 82 43    76 388 18 71', 'laminekharma@yahoo.fr'),
(71, 'Ndeye Mariama', 'KOITA', '106 004/C', 'Agent de service', 'Aide Laboratoire', 'Dept Génie Chimique & Biologie Appliquée', '76 632 23 01', 'mail non fonctionnel'),
(72, 'Libasse', 'LO', '106 364/F', 'Programmeur', 'Caissier', 'Service des Finances et de la Comptabilité', '77 653 01 46', 'l_libasse@yahoo.fr'),
(73, 'Ndeye Peinda Seye', 'LO', '104 108/D', 'Secrétaire de Direction', 'Secrétaire Caissiére', 'Service des Finances et de la Comptabilité', '77 645 90 76', 'gmeca43@hotmail.com'),
(74, 'Bara', 'LY', '102 825/H', 'E.A.U', 'Agent de liaison', 'Direction', '77 651 87 60', 'néant'),
(75, 'Kheifate Ndiaye', 'LY', '104 471/G', 'Ingénieur', 'Technicienne', 'Labo MAGI', NULL, 'boucoum@yahoo.fr'),
(76, 'Henriette Diagne', 'MANDIAME', '100 281/F', 'Secrétaire Sténodactylo', 'Secrétaire', 'Service de la Scolarité', '77 649 49 47    76 873 59 69', 'hdiagne@hotmail.fr'),
(77, 'Albert', 'MANGA', '102 972/A', 'S.A.U', 'Standardiste', 'Service Comptabilité  des Matiéres', '77 510 23 68', 'néant'),
(78, 'Bakary', 'MARIA', '102 979/H', 'E.A.U', 'Chauffeur', 'Service Maintenance et Logistique', '77 650 48 43', 'néant'),
(79, 'Mamadou', 'MBAYE', '_', 'Techn. Supérieur', 'Technicien', 'CRENT', '77 502 48 62', 'mbaymama@gmail.com'),
(80, 'Mame Lissa Badiane', 'MBAYE', '100 359/F', 'Secrétaire Sténodactylo', 'Secrétaire', 'Service des Finances et de la Comptabilité', '77 216 31 36', 'mame.lissa@yahoo.fr'),
(81, 'Maria Yadiouf Ndiaye', 'MBENGUE', '103 253/D', 'Ingénieur', 'TP & Maint. Labo Electro.', 'Dept Génie Electrique', '77 644 11 01', 'mariayadiouf_n@hotmail.com'),
(82, 'Marie Noelle', 'MBENGUE', '103 155/C', 'A.A.U', 'Chef Service de la Scolarité', 'Service de la Scolarité', '77 573 65 72', 'marino@ucad.sn'),
(83, 'Maguette', 'NDAW', '104588/Z', 'C.A.U', 'Electricien', 'Service Maintenance et Logistique', '77 558 29 72', 'mxabody@hotmail.fr'),
(84, 'Aïda Diouf', 'NDIAYE', '103 268/Z', 'E.A.U', 'Lingére', 'Service Maintenance et Logistique', '77 649 75 66', 'néant'),
(85, 'Arame', 'NDIAYE', '103 634/C', 'C.A.U', 'Responsable salle des présentoirs', 'SID', '77 442 45 09    70 205 56 61', 'néant'),
(86, 'Balla', 'NDIAYE', '101 961/A', 'E.A.U', 'Menuisier Metallique', 'Dept Génie Mécanique', '77 512 32 58', NULL),
(87, 'Mamadou', 'NDIAYE', '106 235/C', 'A.A.U', 'Chef du Service des Finances et de la Comptabilité', 'Service des Finances et de la Comptabilité', '77 650 89 61', 'ndiayemamadou73@yahoo.fr'),
(88, 'Manatou Kane', 'NDIAYE', '102 701/E', 'Secrétaire Sténodactylo', 'Secrétaire Directeur', 'Direction', '77 565 23 87', 'kane_manatou@yahoo.fr'),
(89, 'Ousseynou', 'NDIAYE', '106 358/A', 'Techn. Supérieur en maintenance', 'Techncien', 'CRENT', '77 781 85 83', 'ouzzin4@hotmail.com'),
(90, 'Tamsir Malicke', 'NDIAYE', '106 374/G', 'Agent de service', 'Agent de service', 'Dept Génie Informatique', '77 322 60 80', NULL),
(91, 'Khady  Diouf', 'NDIR', '101 001/A', 'Secrétaire de Direction', 'Secrétaire Directeur des Etudes', 'Direction des Etudes', '77 561 18 35', 'dkhadija@ucad.sn'),
(92, 'Malick', 'NDIR', '106 356/C', 'E.A.U', NULL, 'Dept Gestion', '76 690 42 35      77 794 61 48', 'ndirmalick@yahoo.fr'),
(93, 'Ibrahima', 'NDOUR', '104 308/F', 'Techn. Supérieur', 'Techn. Supérieur', 'Dept Génie Mécanique', '77 534 22 47', 'ibisndour@yahoo.fr'),
(94, 'Ndéye Khady Virginie', 'NDOUR', '_', 'A.A.U', 'Comptable', 'Service des Finances et de la Comptabilité', '77 649 69 14', 'kvndour@yahoo.fr'),
(95, 'Moussa', 'NDOYE', '103 254/C', 'E.A.U', 'Menuisier', 'Dept Génie Mécanique', '76 671 30 98', NULL),
(96, 'Adama Diakhère', 'NGOM', '106 190/O', 'Techn. Supérieure', 'Technicienne Supérieure', 'Dept Génie Chimique & Biologie Appliquée', '77 613 49 22', 'cocoadu@gmail.com'),
(97, 'Seynabou Fall', 'NIANE', '100 568/F', 'A.A.U', 'Secrétaire', 'Dept Gestion', '550 55 69', 'seynaboufall@hotmail.com'),
(98, 'Seynabou Dieng', 'NIANG', '101 313/C', 'Secrétaire Sténodactylo', 'Secrétaire', 'Service des Finances et de la Comptabilité', '77 636 84 35', 'naboudieng3000@yahoo.fr'),
(99, 'Baboucar', 'NIASSY', '100 758/I', 'A.A.U', NULL, 'Dept Gestion', '77 556 23 52', 'bniassy2000@yahoo.fr'),
(100, 'Mbaye', 'SAKHO', '103 778/D', 'E.A.U', 'Chauffeur du Directeur des Etudes', 'Direction des Etudes', '77 563 51 46     77 114 15 85', NULL),
(101, 'Volimata Sall', 'SAKHO', '104 259/A', 'S.A.U', 'Secrétaire', 'Dept Génie Electrique', '77 785 65 63', 'salloulimata@yahoo.fr'),
(102, 'Cheikh Ahmet Tidiane', 'SALL', '106 388/D', 'E.A.U', 'Agent de liaison', 'Service des Finances et de la Comptabilité', '77 034 56 53', 'néant'),
(103, 'Cheikh Tidiane', 'SALL', '100509/M', 'A.A.U', NULL, 'Labo MAGI', NULL, NULL),
(104, 'Seyni Ndiaye', 'SAMB', '103 374/D', 'C.A.U', 'Aide-infirmiére', 'Service Médical', '77 557 23 07', 'néant'),
(105, 'Ibrahima', 'SANE', '104 714/E', 'C.A.U', NULL, 'Service de la Scolarité', '77 557 48 30', 'papissanefr@hotmail.com'),
(106, 'Ibrahima Papia', 'SANE', '103 858/G', 'Agent de service', 'Agent de liaison', 'Service des Ressources Humaines', '77 517 18 75    76 136 01 81', 'néant'),
(107, 'Insa', 'SANE', '103 851/Z', 'Aide-Techni. Spécialisé', 'Chargé de la maintenance', 'Dept Génie Informatique', '33  825 75 28', 'babadisane@gmail.com'),
(108, 'Souleymane', 'SANE', '100 567/E', 'Ingénieur en Informatique', 'Informaticien', 'Dept Gestion', '77 650 28 35', 'jssane@gmail.com'),
(109, 'Emilie Ndiaye', 'SARR', '103 377/A', 'S.A.U', 'Aide laboratoire', 'Dept Génie Chimique & Biologie Appliquée', '77 549 99 07', 'néant'),
(110, 'Abdourakhmane', 'SECK', '106 354/E', 'C.A.U', NULL, 'Dept Génie Civil', '76 395 23 23', NULL),
(111, 'Madiop', 'SECK', '104 211/C', 'A.A.U', NULL, 'Dept Gestion', '77 756 10 65', 'madiop.seck@ucad.edu.sn'),
(112, 'Matar', 'SECK', '100 474/Z', 'Techn. Supérieur', 'Technicien', 'Dept Génie Mécanique', '77 456 27 24', 'seck.matar@gmail.com'),
(113, 'Samba', 'SECK', '_', 'Plombier', 'Plombier', 'Service Maintenance et Logistique', '77 651 52 78', 'néant'),
(114, 'Ismaîla', 'SEYDI', '104 261/H', 'E.A.U', 'Electricien', 'Service Maintenance et Logistique', '77 100 34 06', 'papiseydi@live.fr'),
(115, 'Souleymane', 'SEYDI', '104 581/G', 'Bibliothécaire', 'Préposé au prêt', 'SID', '77 539 60 89    77 894 52 81', 'seydi31@yahoo.fr'),
(116, 'Mariama Soda Rosa', 'SOW', '_', 'A.A.U', 'Assistante', 'Service chargé de la Vie Etudiante', '77 520 37 50', 'rosa_sow@yahoo.fr'),
(117, 'Mbacké', 'SOW', '104 073/I', 'C.A.U', 'Menuisier', 'Service Maintenance et Logistique', '77 373 84 09', 'néant'),
(118, 'Samba Ciré', 'SY', '104 535/B', 'Techn. Supérieur', 'Techncien', 'Dept Génie Mécanique', '77 532 60 08', 'sambaciresy@yahoo.fr'),
(119, 'Oumar', 'TALL', '104 677/A', 'E.A.U', 'Chauffeur', 'Service Maintenance et Logistique', '77 659 97 79', 'néant'),
(120, 'Seydou', 'TAMBA', '104 645/B', 'E.A.U', 'Aide-frigoriste', 'Dept Génie Chimique & Biologie Appliquée', '77 654 43 25', 'néant'),
(121, 'Mamadou Mamoudou', 'THIAM', '104 762/B', 'E.A.U', 'Charg.cont.entrées/sorties', 'SID', '77 650 62 47    77 446 16 85', 'maothiam2003@yahoo.fr'),
(122, 'Mbissane', 'THIAM', '104 687/Z', 'Secrétaire de Direction', 'Assistante Pédagogique', 'Dept Gestion', '77 655 82 99', 'tmbissane@hotmail.com'),
(123, 'Momar', 'THIAM', '106 012/F', 'C.A.U', NULL, 'Service de la Scolarité', '77 905 77 36     77 650 79 51', 'momarthiam50@gmail.com'),
(124, 'Mouhamadou', 'THIAM', '104 378/A', 'Ingénieur', 'Equi. Elec. Et Autom. Indus', 'Dept Génie Electrique', '70 703 78 09   77 573 39 43', 'mouhamadou_thiam80@hotmail.com'),
(125, 'Nogoye Diop', 'THIAM', '101 814/I', 'A.A.U', 'Secrétaire', 'CRENT', '77 568 07 45', 'nogaye@ucad.sn'),
(126, 'Kadeidiata Toubra', 'THIAM', '104 708/J', 'Agent de service', 'Agent de nettoiement', 'Service Maintenance et Logistique', '77 563 76 47', 'néant'),
(127, 'Cany Sall', 'THIAW', '104 916/I', 'A.A.U', 'Chef du Service Comptabilité Matiéres', 'Service Comptabilité  des Matiéres', '77 632 62 95', 'kanysall@hotmail.fr'),
(128, 'Awa Kâ', 'THIOUNE', '104 908/L', 'Secrétaire de Direction', 'Chef du Service des Ressources Humaines', 'Service des Ressources Humaines', '77 029 81 06', 'awambka@yahoo.fr'),
(129, 'Cheikh Ahmadou Mbacké', 'TOURE', '104 849/H', 'A.A.U', 'Chef du bureau Audit et Contrôle', 'Dept Gestion', '77 872 13 36    77 519 71 19', 'tourval@yahoo.fr'),
(130, 'Rokhaya Sow', 'TOURE', '_', 'S.A.U', 'Secrétaire', 'Service des Finances et de la Comptabilité', '77 270 34 51', 'rokhayast@hotmail.fr'),
(131, 'Abou', 'WELE', '105 008/E', 'C.A.U', 'Assistant au CEPECS', 'Dept Gestion', '77 630 08 45', 'weleabou@yahoo.fr');

-- --------------------------------------------------------

--
-- Structure de la table `agent_per`
--

CREATE TABLE IF NOT EXISTS `agent_per` (
  `N°` int(15) DEFAULT NULL,
  `PRENOMS` char(24) DEFAULT NULL,
  `NOM` char(9) DEFAULT NULL,
  `Mle de Solde` char(12) DEFAULT NULL,
  `GRADE` char(43) DEFAULT NULL,
  `DISCIPLINE` char(68) DEFAULT NULL,
  `DEPARTEMENT` char(18) DEFAULT NULL,
  `Téléphone` char(38) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `agent_per`
--

INSERT INTO `agent_per` (`N°`, `PRENOMS`, `NOM`, `Mle de Solde`, `GRADE`, `DISCIPLINE`, `DEPARTEMENT`, `Téléphone`) VALUES
(1, 'Mamadou', 'ADJ', '100 045/Z', 'Professeur', 'Electrotechnique', 'Génie Electrique', '77 819 62 00'),
(2, 'Alassane Elfecky', 'AGNE', '100 063/D', 'Maître-Assistant', 'Gestion', 'Gestion', '77 681 81 98'),
(3, 'Cheikh Oumar', 'ANNE', '100 065/B', 'Maître-Assistant', 'Génie Chimique', 'Génie Chimique', '77 332 00 43'),
(4, 'Nicolas', 'AYESSOU', '100 198/A', 'Assistant Titulaire', 'Biologie', 'Génie Chimique', '77 251 48 48'),
(5, 'Dorothé B.', 'AZILINON', '100 101/A', 'Professeur', 'Energétique', 'Génie Mécanique', '77 555 33 71'),
(6, 'Oumar', 'BA', '510 434/A', 'Chef de Travaux', 'Automatismes Industriels', 'Génie Electrique', '77 639 46 62'),
(7, 'Daouda', 'BADIANE', '100 337/F', 'Maître-Assistant', 'Algorithmique', 'Génie Informatique', '77 654 73 44'),
(8, 'Alassane', 'BAH', '100 166/Z', 'Assistant Titulaire', 'Système d''information', 'Génie Informatique', '77 641 42 99'),
(9, 'Mamadou', 'BALDE', '100 406/I', 'Assistant Titulaire', 'Mathématiques Aplliquées', 'Génie Chimique', '77 552 20 80'),
(10, 'Samba', 'BALDE', '100 213/C', 'Maître-Assistant', 'Micro-Informatiique', 'Génie Informatique', '77 534 79 40'),
(11, 'Boniface', 'BAMPOKY', '100 482/C', 'Assistant Titulaire', 'Comptabilités des Finances', 'Gestion', '77 565 28 57'),
(12, 'Mamadou Samba', 'CAMARA', '106 293 /K', 'Assistant Stagiaire', 'Intelligence Artificiel', 'Génie Informatique', '77 395 54 22'),
(13, 'Mady', 'CISSE', '100 754/E', 'Maître-Assistant', 'Sciences des Aliments', 'Génie Chimique', '77 378 72 40'),
(14, 'Alex Louis', 'CORENTHIN', '101 034/A', 'Maître-Assistant', 'Electronique', 'Génie Informatique', '77 631 77 76'),
(15, 'Hamidou', 'COULIBALY', '101 060/H', 'Assistant Titulaire', 'Gestion Marketing', 'Gestion', NULL),
(16, 'Mamadou Salif', 'DIALLO', '357 858/F', 'Professeur d''Education Physique et Sportive', 'Education Physique', 'Polyvalent', '77 659 40 74'),
(17, 'Aminata Diop', 'DIENE', '101 154/B', 'Assistant Stagiaire', 'Réseaux et Téléinform', 'Génie Informatique', '77 641 32 35'),
(18, 'Modou', 'DIENG', '102 223/Z', 'Professeur Technique', 'Anal. Microbilogie - LAE', 'Génie Chimique', '77 630 46 07'),
(19, 'Ngagne', 'DIEYE', '101 671/B', 'Maître-Assistant', 'Informatique Industrielle', 'Génie Electrique', '77 655 25 51'),
(20, 'Mamadou', 'DIONG', '101 734/F', 'Assistant Stagiaire', 'Gestion', 'Gestion', '77 654 43 84'),
(21, 'Christiane Romain', 'DIOP', '103 703/F', 'Professeur Technique', 'Techniques d''Expression', 'Génie Civil', NULL),
(22, 'Codou Gueye Mar', 'DIOP', '102 975/D', 'Professeur Titulaire', 'Chimie', 'Génie Chimique', '77 630 96 46'),
(23, 'Magaye', 'DIOP', '101 497/Z', 'Maître-Assistant', 'Informatique Industrielle', 'Génie Electrique', '77 643 69 58'),
(24, 'Mbaye', 'DIOP', '101 056/A', 'Assistant Stagiaire', 'Conception de projet, Béton Armé (Architecture)', 'Génie Civil', '77 554 07 17  77 639 63 08'),
(25, 'Moussa', 'DIOP', '101 946/I', 'Assistant Stagiaire', 'Gestion', 'Gestion', '77 567 71 82'),
(26, 'Ibra', 'DIOUM', '100 468/E', 'Assistant Stagiaire', 'Télécom et réseaux', 'Génie Informatique', '77 531 27 10'),
(27, 'Amadou Amdy', 'FALL', '106415/A', 'Assistant Stagiaire', 'Marketing/Affaires internationales', 'Gestion', '77 534 86 65'),
(28, 'Aynina', 'FALL', '102 042/E', 'Assistant Stagiaire', 'Gestion', 'Gestion', '77 176 67 00'),
(29, 'Ibrahima', 'FALL', '100 335/D', 'Assistant Stagiaire', 'Méthodes,gestion & administrat de base de données', 'Génie Informatique', '77 531 40 37'),
(30, 'Ndeye Maguette', 'FALL', '100 282/E', 'Assistant Stagiaire', 'Mécaniques des sols,  Géotechnique, Route', 'Génie Civil', '77 639 63 07'),
(31, 'Oumar', 'FALL', '102 047/Z', 'Assistant Stagiaire', 'Maths Appliquées', 'Génie Informatique', '77 658 24 52'),
(32, 'Salif Sagana', 'FALL', '102 491/G', 'Assistant Stagiaire', 'Automatique & Informat Ind', 'Génie Electrique', '77 536 81 43'),
(33, 'Sidi Mohamed', 'FARSSI', '102 222 /A', 'Maïtre de conférence', 'Informatique de Gestion', 'Génie Informatique', '77 637 16 37'),
(34, 'Mamadou', 'FAYE', '106 291/M', 'Assistant Stagiaire', 'Génie Chimique', 'Génie Chimique', '77 560 57 83'),
(35, 'Roger Marcellin', 'FAYE', '102 274/F', 'Maïtre de conférence', 'Automatique', 'Génie Electrique', '77 536 50 20'),
(36, 'Amadou Thierno', 'GAYE', '102 530/A', 'Maïtre de conférence', 'Physique de l''Atmosphère', 'Génie Informatique', '77 578 28 38              77 639 81 55'),
(37, 'Chérif Ibrahima', 'GOUDIABY', '381 712/L', 'Professeur Technique', 'Structures métalliques', 'Génie Civil', '77 573 22 56 77 529 86 50'),
(38, 'Amadou Moctar', 'GUEYE', '386 842/E', 'Professeur Technique', 'Fabrication Mécanique', 'Génie Mécanique', '77 503 64 66'),
(39, 'Ibrahima', 'HANNE', '102 554/F', 'Maître-Assistant Associé', 'Gestion DESCAF', 'Gestion', '77 418 00 26'),
(40, 'Pierre', 'JANANTO', '102 595/B', 'Assistant Titulaire', 'Gestion', 'Gestion', '77 510 80 12'),
(41, 'Oury', 'KA', '353 621/D', 'Professeur Technique', 'Lettres Modernes', 'Génie Informatique', '77 545 14 11'),
(42, 'Lioudmila F. Pavlovskaya', 'KAMARA', '607 689 /H', 'Maître-Assistant', 'Fabrication Mécanique', 'Génie Mécanique', '77 515 26 38'),
(43, 'Cheikhou', 'KANE', '100 734/G', 'Assistant Titulaire', 'Génie Chimique', 'Génie Chimique', '77 148 79 61'),
(44, 'Mohamed Fadel', 'KEBE', '102 604/G', 'Maître-Assistant', 'Physique (Energie Solaire)', 'Génie Civil', '77 819 29 09'),
(45, 'Dame', 'KEINDE', '100 596/A', 'Assistant Stagiaire', 'Structure', 'Génie Civil', '77 273 42 79 77 450 59 94'),
(46, 'Khadidiatou Wane', 'KEITA', '104 989/E', 'Assistant Stagiaire', 'Informatique', 'Génie Informatique', '77 548 38 41'),
(47, 'Démo', 'KOITA', '103 942/C', 'Maître-Assistant', 'Génie Chimique & Biologie Appliquée', 'Génie Chimique', '76 693 81 91'),
(48, 'Claude', 'LISHOU', '102 854/D', 'Professeur', 'Informatique Industrielle', 'Génie Electrique', '77 638 41 85  77 499 36 36'),
(49, 'Sidi Mambaye', 'LO', '102 853/C', 'Maïtre de conférences', 'Energétique', 'Génie Electrique', '77 650 63 34'),
(50, 'Paul', 'MALOU', '102 896/B', 'Maître-Assistant', 'Sciences & Tecn. des Mat.', 'Génie Mécanique', '76 664 69 02'),
(51, 'Youssouf', 'MANDIANG', '102 964/D', 'Maïtre de conférences', 'Mécanique des Fluides', 'Génie Mécanique', '77 532 59 72'),
(52, 'Ahmath Bamba', 'MBACKE', '104 433/A', 'Assistant Stagiaire', 'Informatique', 'Génie Informatique', '77 575 64 90'),
(53, 'Abibou', 'MBAYE', '103 037/Z', 'Maître-Assistant Associé', 'Gestion', 'Gestion', '77 654 43 82'),
(54, 'Cheikh Tidiane', 'MBAYE', '103 047/A', 'Maïtre de conférences', 'Chimie', 'Génie Chimique', '77 572 71 38'),
(55, 'Malick', 'MBENGUE', '104 417/E', 'Assistant Titulaire', 'Chimie et Biochimie', 'Génie Chimique', '77 653 28 81'),
(56, 'Alioune Badara', 'MBOUP', '601 642/C', 'Chef de Travaux', 'Electromécanique', 'Génie Electrique', '77 637 37 69'),
(57, 'Gervais', 'MENDY', '101 045/A', 'Assistant Stagiaire', 'Analyse numérique', 'Génie Informatique', '70 100 65 02'),
(58, 'Abdoulaye', 'NDIAYE', '508 187/M', 'Professeur d''Enseignement Secondaire', 'Construction mécanique', 'Génie Mécanique', '77 654 26 28'),
(59, 'Mamadou', 'NDIAYE', '103 121/D', 'Maître-Assistant', 'Construction mécanique', 'Génie Mécanique', '77 433 98 65'),
(60, 'Mamadou Lamine', 'NDIAYE', '100 985/E', 'Assistant Titulaire', 'Traitement du signal et Télécommunication', 'Génie Electrique', '77 111 68 70'),
(61, 'Mame Mor Diarra', 'NDIAYE', '602 211/F', 'Chef de Travaux', 'Fabrication Mécanique', 'Génie Mécanique', '77 649 63 11'),
(62, 'Mouhamadou Falilou', 'NDIAYE', '104 047/B', 'Assistant Stagiaire', 'Génie Electrique', 'Génie Electrique', '77 657 46 71'),
(63, 'Ndiaga', 'NDIAYE', '106 347/A', 'Assistant Stagiaire', 'Sociologie des Organisations', 'Gestion', '77 442 37 37'),
(64, 'Papa Alioune Sarr', 'NDIAYE', '103 346/A', 'Maïtre de conférences', 'Electronique', 'Génie Electrique', '77 819 60 01'),
(65, 'Seydi Ababacar', 'NDIAYE', '103 199/C', 'Maître-Assistant', 'Chimie', 'Génie Chimique', '77 648 10 00'),
(66, 'Talla', 'NDIAYE', '103 453/B', 'Professeur Technique', 'Electronique Industrielle', 'Génie Electrique', '77 310 67 76'),
(67, 'Djibril', 'NDOYE', '103 493/F', 'Assistant Titulaire', 'G.R.H', 'Gestion', '77 743 33 83'),
(68, 'Mame Moussé', 'NDOYE', '103 537/E', 'Assistant Titulaire', 'Gestion', 'Gestion', '77 639 50 83'),
(69, 'Seyni', 'NDOYE', '102 963/C', 'Maître-Assistant', 'Hydrogéologie', 'Génie Civil', '77 557 73 49 77 639 63 12'),
(70, 'Blaise', 'NGOM', '103 539/G', 'Maître-Assistant', 'Physique', 'Génie Chimique', '77 634 39 56'),
(71, 'El Hadji Abib', 'NGOM', '103 534/B', 'Professeur', 'Physique', 'Génie Electrique', '77 638 45 02'),
(72, 'Ibrahima', 'NGOM', '104 424/A', 'Assistant Stagiaire', 'Analyses numériques', 'Génie Informatique', '77 655 50 39'),
(73, 'Cheikh Momar', 'NGUER', '102 614/F', 'Maître-Assistant', 'Biologie Médicale', 'Génie Chimique', '77 540 57 27'),
(74, 'Ababacar', 'NIANG', '103 669/E', 'Maître-Assistant', 'Automatisme', 'Génie Electrique', '77 542 54 30'),
(75, 'Awa', 'NIANG', '103 128/C', 'Maïtre de conférences', 'Electronique (Phys.Maté)', 'Génie Mécanique', '77 642 55 16'),
(76, 'Boubacar', 'NIANG', '510 443/A', 'Maître-Assistant', 'Electrotechnique', 'Génie Electrique', '77 576 69 33'),
(77, 'Libasse', 'NIANG', '103 564/A', 'Maître-Assistant Associé', 'Gestion', 'Gestion', '77100 29 23'),
(78, 'Mamadou', 'NIANG', '103 119/E', 'Maître-Assistant', 'Informatique', 'Génie Informatique', '77 531 62 62'),
(79, 'Codou Mbassy Diene', 'NJIE', '101 668/F', 'Assistant Titulaire', 'Anglais', 'Génie Electrique', '77 637 65 44'),
(80, 'Samuel', 'OUYA', '103 614/E', 'Maître-Assistant', 'Informatique', 'Génie Informatique', '77 637 27 89'),
(81, 'Mama', 'SAKHO', '607 490/R', 'Maître-Assistant', 'Sciences Alimentaires', 'Génie Chimique', '77 560 74 99'),
(82, 'Fatou DIOP', 'SALL', '101 204/D', 'Maître-Assistant', 'Gestion', 'Gestion', '77 636 74 47'),
(83, 'Saïdou Moustapha', 'SALL', '104 069/B', 'Maïtre de conférence', 'Physique de l''Atmosphère', 'Génie Chimique', '77 538 54 59'),
(84, 'Falilou Mbacké', 'SAMBE', '104 074/E', 'Maître-Assistant', ' Chimie', 'Génie Chimique', '77 510 57 07'),
(85, 'Vincent', 'SAMBOU', '103 728/I', 'Maître-Assistant', 'Physiques (Energie solaire)', 'Génie Civil', '77 819 29 10'),
(86, 'Oumar', 'SARR', '103 948/I', 'Assistant Titulaire', 'Informatique', 'Génie Informatique', NULL),
(87, 'Mamadou Amadou', 'SECK', '104 085/H', 'Maître-Assistant', 'Chimie', 'Génie Chimique', '77 630 80 17'),
(88, 'Mame  Ndella', 'SECK', '103 145/B', 'Chef de Travaux', 'Anglais', 'Génie Informatique', '77 639 50 58'),
(89, 'Mohamed Tidiane', 'SECK', '104 083/J', 'Maître-Assistant', 'Physique', 'Génie Informatique', '77 569 17 49'),
(90, 'Ndeye Awa', 'SENE', '106 348/Z', 'Assistant Stagiaire', 'Mécanique des Structures', 'Génie Civil', '77 653 90 55'),
(91, 'Serge Francis', 'SIMEN', '100 983/C', 'Assistant Stagiaire', 'G.R.H', 'Gestion', '77 676 97 07'),
(92, 'Cheikhou', 'SOUARE', '104 387/C', 'Maître-Assistant Associé', 'Gestion', 'Gestion', '77 541 16 35'),
(93, 'Abdoulaye', 'SOW', '104 412/Z', 'Maître-Assistant', 'Chimie', 'Génie Chimique', '77 534 71 25'),
(94, 'Amy GASSAMA', 'SOW', '102 492/F', 'Maître de conférences', 'Biologie Médicale', 'Génie Chimique', '77 641 80 33'),
(95, 'Demba', 'SOW', '104 446/A', 'Maïtre de conférence', 'Chimie', 'Génie Chimique', '77 569 71 79'),
(96, 'Gustave', 'SOW', '104 508/H', 'Maître-Assistant', 'Electronique', 'Génie Electrique', '77 654 55 40'),
(97, 'Abdoulaye', 'SY', '104 511 /Z', 'Chef de Travaux', 'Maintenance', 'Génie Electrique', '77 646 32 53'),
(98, 'Khaly', 'TALL', '104 669/D', 'Maître-Assistant', 'Equipements Electriques et Industrielles', 'Génie Electrique', '77 560 27 55'),
(99, 'Ababacar', 'THIAM', '603 370/M', 'Professeur d''Enseignement Secondaire', NULL, 'Génie Mécanique', '77 551 69 04'),
(100, 'Mamadou Moustapha', 'THIAM', '104 779/D', 'Maître-Assistant Associé', 'Gestion', 'Gestion', '77 639 49 92'),
(101, 'Lamine', 'THIAW', '104 808/K', 'Maître-Assistant', 'Electrotech. Equipement Indus Réseaux  B&M. Tension  Génie Sanitaire', 'Génie Electrique', '77 658 59 97'),
(102, 'Bassirou', 'TIDJANI', '104 811/C', 'Professeur', 'Gestion R.H', 'Gestion', '77 644 58 85'),
(103, 'Emmanuel', 'TINE', '104 816/H', 'Maître-Assistant', 'Génie Sanitaire', 'Génie Chimique', '77 645 28 20'),
(104, 'Alioune', 'TOURE', '510 511/A', 'Professeur Technique', 'Terciaire', 'Gestion', NULL),
(105, 'Coumba Kane', 'TOURE', '104 879/E', 'Professeur', 'Bactériologie  Virologie', 'Génie Chimique', '77 637 22 66');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE IF NOT EXISTS `classe` (
  `idClasse` int(30) NOT NULL AUTO_INCREMENT,
  `libClasse` varchar(200) DEFAULT NULL,
  `codeClasse` varchar(10) DEFAULT NULL,
  `idFormation` int(30) DEFAULT NULL,
  PRIMARY KEY (`idClasse`),
  KEY `fk_Classe_Formation` (`idFormation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `idFormation` int(30) NOT NULL AUTO_INCREMENT,
  `idDepartement` int(30) NOT NULL,
  `libFormation` varchar(200) NOT NULL,
  `durée` varchar(30) NOT NULL,
  `codeFormation` varchar(30) NOT NULL,
  PRIMARY KEY (`idFormation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`idFormation`, `idDepartement`, `libFormation`, `durée`, `codeFormation`) VALUES
(1, 4, 'DUT en Electronique, Electrotechnique et Automatique Informatique industrielle et Télécommunications (EEAIT)', '', ''),
(2, 4, 'Licence en Electronique et Systèmes  de Télécommunications', '', ''),
(3, 4, 'DIC en Electronique, Electrotechnique et Automatique Informatique industrielle (EEAI)', '', ''),
(4, 4, 'Licence Distribution Electrique & Automatismes ', '', ''),
(5, 8, 'DUT en Informatique', '', ''),
(6, 8, 'DUT en Télécommunications et Réseaux', '', ''),
(7, 8, 'DST en Informatique', '', ''),
(8, 8, 'DST en Télécommunications et Réseaux', '', ''),
(9, 8, 'Licence Informatique, Télécommunications et Réseaux', '', ''),
(10, 8, 'Licence Télé-informatique', '', ''),
(11, 8, 'DIC en Télécommunications et Réseaux', '', ''),
(12, 8, 'DIC en Informatique  ', '', ''),
(13, 8, 'Licence Informatique, Télécommunications et Réseaux', '', ''),
(14, 8, 'Licence Télé-informatique', '', ''),
(15, 8, 'DIT en Informatique  ', '', ''),
(16, 8, 'Master Télécommunications et Réseaux ', '', ''),
(17, 8, 'Master Global e-Business', '', ''),
(18, 7, 'DUT en Génie Mécanique et Systèmes Industriels', '', ''),
(19, 7, 'Licence en Gestion des Systèmes Industriels et de la Production', '', ''),
(20, 7, 'DIC en Génie Mécanique et Systèmes Industriels', '', ''),
(21, 7, 'Master en  Gestion des Systèmes Industriels et de la Production', '', ''),
(22, 5, 'DUT en Finances-Comptabilité', '', ''),
(23, 5, 'DUT en Techniques de Commercialisation', '', ''),
(24, 5, 'DST en Comptabilité et Gestion des Organisations', '', ''),
(25, 5, 'Licence en Sciences et Techniques Comptable et Financière', '', ''),
(26, 5, 'Licence en Banque-Finance-Assurance', '', ''),
(27, 5, 'Licence en Marketing et Action Commerciale', '', ''),
(28, 5, 'Licence en Marketing des Affaires Internationales', '', ''),
(29, 5, 'Licence en Gestion Hôtelière et Touristique', '', ''),
(30, 5, 'Licence en Gestion des Ressources Humaines', '', ''),
(31, 5, 'DESCAF (Diplôme d’Etudes Supérieures en Commerce et Administration Financière)', '', ''),
(32, 5, 'Master en Gestion Hôtelière et Touristique', '', ''),
(33, 5, 'Master en Gestion des Ressources Humaines', '', ''),
(34, 5, 'Master en Contrôle Comptabilité et Audit', '', ''),
(35, 5, 'Master en Gestion des Institutions Financières', '', ''),
(36, 5, 'Master en Gestion Commerciale', '', ''),
(37, 5, 'Master en Gestion des Ressources Humaines', '', ''),
(38, 5, 'Master en Commerce Marketing et Management des Affaires Internationales (double diplomation avec Lille)', '', ''),
(39, 5, 'Master Gestion de la Mobilité, des Transports et de la Logistique', '', ''),
(40, 5, 'DEC (Diplôme Elémentaire Comptable)', '', ''),
(41, 5, 'DSC (Diplôme Supérieur Comptable)', '', ''),
(42, 5, 'DSECG (Diplôme Supérieur des Etudes Comptables et de Gestion)', '', ''),
(43, 10, 'DST en Génie Civil', '', ''),
(44, 10, 'DUT en Génie Civil', '', ''),
(45, 10, 'DIT en Génie Civil', '', ''),
(46, 10, 'Licence en METERBAT', '', ''),
(47, 10, 'Licence en Conducteur des Travaux', '', ''),
(48, 10, 'Licence en Géométrie', '', ''),
(49, 10, 'DIC en Génie Civil', '', ''),
(50, 6, 'DST  en Biologie Appliquée', '', ''),
(51, 6, 'DST en  Industries Chimiques et Agroalimentaires', '', ''),
(52, 6, 'DIT  en Génie Biologique et Sanitaire', '', ''),
(53, 6, 'DUT  en Analyses Biologiques', '', ''),
(54, 6, 'DUT en  Industries  Alimentaires', '', ''),
(55, 6, 'DUT en  Génie Chimique', '', ''),
(56, 6, 'DIT  en Génie Chimique', '', ''),
(57, 6, 'DIT  en  Industries Chimiques et Agroalimentaires', '', ''),
(58, 6, 'Licence en Qualité Hygiène Sécurité et Environnement', '', ''),
(59, 6, 'Master en  Qualité Sécurité et Environnement', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `idGrade` int(11) NOT NULL AUTO_INCREMENT,
  `libGrade` varchar(100) DEFAULT NULL,
  `idTypeAgent` int(11) DEFAULT NULL,
  PRIMARY KEY (`idGrade`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=79 ;

--
-- Contenu de la table `grades`
--

INSERT INTO `grades` (`idGrade`, `libGrade`, `idTypeAgent`) VALUES
(1, 'Professeur', 1),
(2, 'Maître-Assistant', 1),
(3, 'Assistant Titulaire', 1),
(4, 'Chef de Travaux', 1),
(5, 'Assistant Stagiaire', 1),
(6, 'Professeur d''Education Physique et Sportive', 1),
(7, 'Professeur Technique', 1),
(8, 'Professeur Titulaire', 1),
(9, 'Maïtre de conférence', 1),
(10, 'Maître-Assistant Associé', 1),
(11, 'Maïtre de conférences', 1),
(12, 'Professeur d''Enseignement Secondaire', 1),
(47, 'Agent de service', 3),
(49, 'A.A.U', 3),
(50, 'Techn. Supérieur', 3),
(52, 'C.A.U', 3),
(54, 'Technicien', 3),
(55, 'Mécanicien', 3),
(56, 'Aide-Technique', 3),
(57, 'S.A.U', 3),
(58, 'Caméraman', 3),
(59, 'Secrétaire Sténodactylo', 3),
(60, 'Ingénieur de conception', 3),
(61, 'Secrétaire de Direction', 3),
(62, 'E.A.U', 3),
(63, 'Techn. Supérieure', 3),
(64, 'Conserv. Bibliot', 3),
(65, 'Secrétaire BEP', 3),
(66, 'Ingénieur', 3),
(67, 'Administrateur Civil', 3),
(68, 'Secrétaire Bureautique', 3),
(69, 'Aide-Technicien', 3),
(70, 'Aide laboratoire', 3),
(71, 'Programmeur', 3),
(72, 'Techn. Supérieur en maintenance', 3),
(73, 'Aide-Techni. Spécialisé', 3),
(74, 'Ingénieur en Informatique', 3),
(75, 'Plombier', 3),
(76, 'Bibliothécaire', 3),
(77, 'No Grade-PATS vacat.', 4),
(78, 'No Grade-PER vacat.', 2);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE IF NOT EXISTS `matiere` (
  `idMatiere` int(30) NOT NULL AUTO_INCREMENT,
  `libMatiere` varchar(100) DEFAULT NULL,
  `idClasse` int(30) NOT NULL,
  `codeMatiere` varchar(10) DEFAULT NULL,
  `coefMatiere` int(30) DEFAULT NULL,
  `CM` int(30) DEFAULT NULL,
  `TP` int(30) DEFAULT NULL,
  `TD` int(30) DEFAULT NULL,
  PRIMARY KEY (`idMatiere`),
  KEY `fk_Matiere_Classe` (`idClasse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `mois`
--

CREATE TABLE IF NOT EXISTS `mois` (
  `idMois` int(30) NOT NULL AUTO_INCREMENT,
  `libMois` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idMois`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `idRole` int(11) NOT NULL AUTO_INCREMENT,
  `idAgent` int(11) NOT NULL,
  `idTypeRole` int(11) NOT NULL,
  PRIMARY KEY (`idRole`),
  KEY `fk_role_agent` (`idAgent`),
  KEY `fk_role_typerole` (`idTypeRole`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`idRole`, `idAgent`, `idTypeRole`) VALUES
(1, 686, 1),
(2, 742, 3),
(3, 725, 3),
(4, 690, 3),
(5, 734, 3),
(6, 722, 3),
(7, 758, 3);

-- --------------------------------------------------------

--
-- Structure de la table `structure`
--

CREATE TABLE IF NOT EXISTS `structure` (
  `idStructure` int(11) NOT NULL AUTO_INCREMENT,
  `codeStructure` varchar(30) NOT NULL,
  `idtypeStructure` int(11) DEFAULT NULL,
  `libStructure` varchar(100) NOT NULL,
  `DateCreation` date NOT NULL,
  PRIMARY KEY (`idStructure`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `structure`
--

INSERT INTO `structure` (`idStructure`, `codeStructure`, `idtypeStructure`, `libStructure`, `DateCreation`) VALUES
(4, 'DGE', 1, 'Génie Electrique', '0000-00-00'),
(5, 'DGEST', 1, 'Gestion', '0000-00-00'),
(6, 'DGCH', 1, 'Génie Chimique', '0000-00-00'),
(7, 'DGM', 1, 'Génie Mécanique', '0000-00-00'),
(8, 'DGI', 1, 'Génie Informatique', '0000-00-00'),
(9, 'XX', 1, 'Polyvalent', '0000-00-00'),
(10, 'DGCI', 1, 'Génie Civil', '0000-00-00'),
(11, 'SFC', 2, 'Service des Finances et de la Comptabilité', '0000-00-00'),
(12, 'DE', 2, 'Direction des Etudes', '0000-00-00'),
(13, 'SRH', 2, 'Service des Ressources Humaines', '0000-00-00'),
(14, 'SID', 2, 'Service de l''Information et de la Documentation', '0000-00-00'),
(15, 'SML', 2, 'Service Maintenance et Logistique', '0000-00-00'),
(16, 'SCVE', 2, 'Service chargé de la vie des Etudiants', '0000-00-00'),
(17, 'CRENT', 2, 'Centre de Ressources pour l''Environnement Numérique de Travail', '0000-00-00'),
(18, 'DIR', 2, 'Direction', '0000-00-00'),
(19, 'SG', 2, 'Secrétariat Général', '0000-00-00'),
(22, 'SSCOL', 2, 'Service de la Scolarité', '0000-00-00'),
(23, 'LPA', 3, 'Laboratoire pour la Physique de l''Athmosphere', '0000-00-00'),
(24, 'LEA', 3, 'Laboratoire d''Analyses et d''Essai', '0000-00-00'),
(25, 'SAPPRO', 2, 'Service des Approvisionnements', '0000-00-00'),
(26, 'SMED', 2, 'Service Médical', '0000-00-00'),
(27, 'INNODEV', 2, 'Projet INNODEV', '0000-00-00'),
(28, 'CIFRES', 2, 'CIFRES', '0000-00-00'),
(29, 'MAGI', 3, 'Labo MAGI', '0000-00-00'),
(30, 'SCM', 2, 'Service Comptabilité  des Matieres', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `typeagent`
--

CREATE TABLE IF NOT EXISTS `typeagent` (
  `idTypeAgent` int(11) NOT NULL AUTO_INCREMENT,
  `libTypeAgent` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idTypeAgent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `typeagent`
--

INSERT INTO `typeagent` (`idTypeAgent`, `libTypeAgent`) VALUES
(1, 'PER permanent'),
(2, 'PER vacataire'),
(3, 'PATS permanent'),
(4, 'PATS contractuel');

-- --------------------------------------------------------

--
-- Structure de la table `typerole`
--

CREATE TABLE IF NOT EXISTS `typerole` (
  `idTypeRole` int(11) NOT NULL AUTO_INCREMENT,
  `libTypeRole` varchar(50) DEFAULT NULL,
  `level` int(30) NOT NULL,
  PRIMARY KEY (`idTypeRole`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `typerole`
--

INSERT INTO `typerole` (`idTypeRole`, `libTypeRole`, `level`) VALUES
(1, 'Administrateur', 1),
(2, 'Directeur des Etudes', 2),
(3, 'Chef de Département', 3),
(4, 'Responsable Pédagogique', 4),
(5, 'Enseignant', 5);

-- --------------------------------------------------------

--
-- Structure de la table `typestructure`
--

CREATE TABLE IF NOT EXISTS `typestructure` (
  `idTypeStructure` int(11) NOT NULL AUTO_INCREMENT,
  `libTypeStructure` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idTypeStructure`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `typestructure`
--

INSERT INTO `typestructure` (`idTypeStructure`, `libTypeStructure`) VALUES
(1, 'Departement'),
(2, 'Service'),
(3, 'Laboratoire');

-- --------------------------------------------------------

--
-- Structure de la table `vacation`
--

CREATE TABLE IF NOT EXISTS `vacation` (
  `idAffectation` int(30) DEFAULT NULL,
  `idMois` int(30) DEFAULT NULL,
  KEY `fk_Vacation_Mois` (`idMois`),
  KEY `fk_Vacation_Affectation` (`idAffectation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `affectation`
--
ALTER TABLE `affectation`
  ADD CONSTRAINT `fk_Affectation_Agent` FOREIGN KEY (`idAgent`) REFERENCES `agents` (`idAgent`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_Affectation_Matiere` FOREIGN KEY (`idMatiere`) REFERENCES `matiere` (`idMatiere`) ON DELETE CASCADE;

--
-- Contraintes pour la table `classe`
--
ALTER TABLE `classe`
  ADD CONSTRAINT `fk_Classe_Formation` FOREIGN KEY (`idFormation`) REFERENCES `formation` (`idFormation`) ON DELETE CASCADE;

--
-- Contraintes pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD CONSTRAINT `fk_Matiere_Classe` FOREIGN KEY (`idClasse`) REFERENCES `classe` (`idClasse`) ON DELETE CASCADE;

--
-- Contraintes pour la table `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `fk_role_agent` FOREIGN KEY (`idAgent`) REFERENCES `agents` (`idAgent`),
  ADD CONSTRAINT `fk_role_typerole` FOREIGN KEY (`idTypeRole`) REFERENCES `typerole` (`idTypeRole`);

--
-- Contraintes pour la table `vacation`
--
ALTER TABLE `vacation`
  ADD CONSTRAINT `fk_Vacation_Affectation` FOREIGN KEY (`idAffectation`) REFERENCES `affectation` (`idAffectation`),
  ADD CONSTRAINT `fk_Vacation_Mois` FOREIGN KEY (`idMois`) REFERENCES `mois` (`idMois`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
