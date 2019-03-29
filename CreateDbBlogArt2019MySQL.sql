/*************************************************************************/
/* Blog des articles (BD MySQL) du cours M2203
//
// Création du script de la base de données BLOGART 
//
// @Martine Bornerie    Le 13/03/19 17:17:00
//
*/
/*************************************************************************/

-- First we create the database

CREATE DATABASE `BLOGART`
DEFAULT CHARACTER SET UTF8			-- Tous les formats de caractères
DEFAULT COLLATE utf8_general_ci ;	-- 

-- SHOW VARIABLES;					-- Voir les paramètres de la BD

-- Then we add a user to the database

GRANT ALL PRIVILEGES ON `BLOGART`.* TO 'blogArt_user'@'%' IDENTIFIED BY 'blogArt_password';;
GRANT ALL PRIVILEGES ON `BLOGART`.* TO 'blogArt_user'@'LOCALHOST' IDENTIFIED BY 'blogArt_password';;


-- Flush / Init all privileges
FLUSH PRIVILEGES;

-- Now we create the Database

-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 13 mars 2019 à 17:17
-- Version du serveur: 5.5.33
-- Version de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `BLOGART`
--
USE BLOGART;

-- --------------------------------------------------------
--
-- Structure de la table `ANGLE`
--
/*==============================================================*/
/* Table : ANGLE                                                */
/*==============================================================*/
create table ANGLE
(
   NumAngl char(6) not null,
   LibAngl char(60),
   NumLang char(8) not null,
   primary key (NumAngl)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*==============================================================*/
/* Index : ASSOCIATION_5_FK                                     */
/*==============================================================*/
create index ASSOCIATION_5_FK on ANGLE
(
   NumAngl
);

-- --------------------------------------------------------
--
-- Structure de la table `THEMATIQUE`
--
/*==============================================================*/
/* Table : THEMATIQUE                                           */
/*==============================================================*/
create table THEMATIQUE
(
   NumThem char(6) not null,
   LibThem char(60),
   NumLang char(8) not null,
   primary key (NumThem)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*==============================================================*/
/* Index : ASSOCIATION_6_FK                                     */
/*==============================================================*/
create index ASSOCIATION_6_FK on THEMATIQUE
(
   NumThem
);

-- --------------------------------------------------------
--
-- Structure de la table `ARTICLE`
--
/*==============================================================*/
/* Table : ARTICLE                                              */
/*==============================================================*/
create table ARTICLE
(
   NumArt char(10) not null,
   DtCreA date,
   LibTitrA text(200),
   LibChapoA text(500),
   Parag1A text(2000),
   LibSsTitr1 text(200),
   Parag2A text(2000),
   LibSsTitr2 text(200),
   Parag3A text(2000),
   LibConclA text(1500),
   UrlPhotA char(150),
   NumAngl char(6) not null,
   NumThem char(6) not null,
   NumLang char(8) not null,
   primary key (NumArt)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*==============================================================*/
/* Index : ASSOCIATION_7_FK                                     */
/*==============================================================*/
create index ASSOCIATION_7_FK on ARTICLE
(
   NumArt
);

-- --------------------------------------------------------
--
-- Structure de la table `MOTCLE`
--
/*==============================================================*/
/* Table : MOTCLE                                               */
/*==============================================================*/
create table MOTCLE
(
   NumMoCle char(8) not null,
   LibMoCle char(30),
   NumLang char(8) not null,
   primary key (NumMoCle)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*==============================================================*/
/* Index : ASSOCIATION_8_FK                                     */
/*==============================================================*/
create index ASSOCIATION_8_FK on MOTCLE
(
   NumMoCle
);

-- --------------------------------------------------------
--
-- Structure de la table `MOTCLEARTICLE`   (Table de jointure)
--
/*==============================================================*/
/* Table : MOTCLEARTICLE                                        */
/*==============================================================*/
create table MOTCLEARTICLE
(
   NumArt char(10) not null,
   NumMoCle char(8) not null,
   primary key (NumArt, NumMoCle)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*==============================================================*/
/* Index : MOTCLEARTICLE_FK                                      */
/*==============================================================*/
create index MOTCLEARTICLE_FK on MOTCLEARTICLE
(
   NumArt
);

/*==============================================================*/
/* Index : MOTCLEARTICLE2_FK                                     */
/*==============================================================*/
create index MOTCLEARTICLE2_FK on MOTCLEARTICLE
(
   NumMoCle
);

-- --------------------------------------------------------

--
-- Structure de la table `LANGUE`
--

/*==============================================================*/
/* Table : LANGUE                                               */
/*==============================================================*/
create table LANGUE
(
   NumLang char(8) not null,
   Lib1Lang char(25),	-- Libellé court
   Lib2Lang char(45),	-- Libellé long
   primary key (NumLang)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*==============================================================*/
/* Index : ASSOCIATION_2_FK                                     */
/*==============================================================*/
create index ASSOCIATION_2_FK on LANGUE
(
   NumLang
);

-- --------------------------------------------------------

--
-- Structure de la table `USER`
--

/*==============================================================*/
/* Table : USER                                                 */
/*==============================================================*/
create table USER
(
   Login char(30) not null,
   Pass char(15) not null,
   LastName char(30),	-- Nom
   FirstName char(30),	-- Prénom
   EMail char(50),
   primary key (Login, Pass)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*==============================================================*/
/* Index : ASSOCIATION_4_FK                                     */
/*==============================================================*/
create index ASSOCIATION_4_FK on USER
(
   Login, 
   Pass
);

-- --------------------------------------------------------
--
-- Structure de la table `DATE`
--
/*==============================================================*/
/* Table : DATE                                                 */
/*==============================================================*/
create table DATE
(
   DtJour DATETIME not null,
   primary key (DtJour)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*==============================================================*/
/* Index : ASSOCIATION_1_FK                                     */
/*==============================================================*/
create index ASSOCIATION_1_FK on DATE
(
   DtJour
);

-- --------------------------------------------------------


-- --------------------------------------------------------
--
-- CIR : contraintes pour les tables exportées
--
-- --------------------------------------------------------

alter table ARTICLE add constraint FK_ASSOCIATION_1 foreign key (NumAngl)
      references ANGLE (NumAngl) on delete restrict on update restrict;

alter table ARTICLE add constraint FK_ASSOCIATION_2 foreign key (NumThem)
      references THEMATIQUE (NumThem) on delete restrict on update restrict;

alter table ARTICLE add constraint FK_ASSOCIATION_3 foreign key (NumLang)
      references LANGUE (NumLang) on delete restrict on update restrict;

alter table THEMATIQUE add constraint FK_ASSOCIATION_4 foreign key (NumLang)
      references LANGUE (NumLang) on delete restrict on update restrict;

alter table MOTCLE add constraint FK_ASSOCIATION_5 foreign key (NumLang)
      references LANGUE (NumLang) on delete restrict on update restrict;

alter table ANGLE add constraint FK_ASSOCIATION_6 foreign key (NumLang)
      references LANGUE (NumLang) on delete restrict on update restrict;

-- --------------------------------------------------------

alter table MOTCLEARTICLE add constraint FK_MotCleArt1 foreign key (NumMoCle)
      references MOTCLE (NumMoCle) on delete restrict on update restrict;

alter table MOTCLEARTICLE add constraint FK_MotCleArt2 foreign key (NumArt)
      references ARTICLE (NumArt) on delete restrict on update restrict;

-- --------------------------------------------------------


