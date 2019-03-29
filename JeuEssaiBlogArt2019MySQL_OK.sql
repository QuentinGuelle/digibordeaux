/*************************************************************************/
/* Blog des articles (BD MySQL) du cours M2203
//
// Jeu d'essai SQL du cours M2203
//
// @Martine Bornerie		Le 13/03/18 22:07:00
//
*/
/*************************************************************************/
/* 
--	Gestion des articles de Blog en respectant les contraintes d'intégrité référentielle
--	Base de données MySQL
*/
--
-- Base de données: `BLOGART`
--
USE BLOGART;

/*
--
-- Table DATE
--
-- (<DtJour, datetime,>)
*/
INSERT INTO DATE (DtJour) VALUES ('2018-11-09 00:00:00');
INSERT INTO DATE (DtJour) VALUES ('2018-12-01 00:00:00');
INSERT INTO DATE (DtJour) VALUES ('2018-12-12 00:00:00');
INSERT INTO DATE (DtJour) VALUES ('2018-12-12 09:00:00');
INSERT INTO DATE (DtJour) VALUES ('2018-12-12 11:00:00');
INSERT INTO DATE (DtJour) VALUES ('2018-12-13 00:00:00');
INSERT INTO DATE (DtJour) VALUES ('2018-12-17 00:00:00');
INSERT INTO DATE (DtJour) VALUES ('2018-12-18 00:00:00');
INSERT INTO DATE (DtJour) VALUES ('2019-01-11 00:00:00');
INSERT INTO DATE (DtJour) VALUES ('2019-01-13 00:00:00');
INSERT INTO DATE (DtJour) VALUES ('2019-01-17 00:00:00');
INSERT INTO DATE (DtJour) VALUES ('2019-02-22 14:30:00');
INSERT INTO DATE (DtJour) VALUES ('2017-12-12 00:00:00');

/*
--
-- Table USER
--
-- (<Login, char(30),>, <Pass, char(15),>, <LastName, char(30),>, <FirstName, char(30),>, <EMail, char(50),>)
*/
INSERT INTO USER (Login, Pass, LastName, FirstName, EMail) VALUES
('Chris45', "Ut!D5?h0", "Dupont", "Jean", "cricri@srf.fr");
INSERT INTO USER (Login, Pass, LastName, FirstName, EMail) VALUES
('PitouF', "G0_f2;A", "Durand", "Joe", "JoeStarr@free.fr");
INSERT INTO USER (Login, Pass, LastName, FirstName, EMail) VALUES
('BarbieS9', "P9#7xL", "La Rousse", "Julie", "titou@gmail.com");
INSERT INTO USER (Login, Pass, LastName, FirstName, EMail) VALUES
('Cruella', "qL:5R!1", "Mercury", "Freddy", "Cruella@free.fr");

/*
-- Respectant les contraintes d'intégrité référentielle
--
-- Table LANGUE
--
-- (<NumLang, char(8),>, <Lib1Lang, char(20)>, <Lib2Lang, char(35)>)
*/
INSERT INTO LANGUE (NumLang, Lib1Lang, Lib2Lang) 
	VALUES ("FRAN01",	"Français(e)",   "Langue française");                
INSERT INTO LANGUE (NumLang, Lib1Lang, Lib2Lang) 
	VALUES ("ANGL01", 	"Anglais(e)",   "Langue anglaise");              
INSERT INTO LANGUE (NumLang, Lib1Lang, Lib2Lang) 
	VALUES ("ALL041",	"Allemand(e)",   "Langue allemande");            
INSERT INTO LANGUE (NumLang, Lib1Lang, Lib2Lang) 
	VALUES ("SPAIN01", 	"Espagnol(e)",   "Langue espagnole");              
INSERT INTO LANGUE (NumLang, Lib1Lang, Lib2Lang) 
	VALUES ("ITAL11",	"Italien(ne)",   "Langue italienne");     
INSERT INTO LANGUE (NumLang, Lib1Lang, Lib2Lang) 
	VALUES ("BULG21",	"Bulgare",   "Langue bulgare");     
INSERT INTO LANGUE (NumLang, Lib1Lang, Lib2Lang) 
	VALUES ("URS98",	"Ukrainien(ne)",   "Langue ukrainienne");     
INSERT INTO LANGUE (NumLang, Lib1Lang, Lib2Lang) 
	VALUES ("URS99",	"Russe",   "Langue russe");     

/*
--
-- Table ANGLE
--
-- (<NumAngl, char(6),>, <LibAngl, char(60)>, <NumLang, char(8)>)
*/
INSERT INTO ANGLE (NumAngl, LibAngl, NumLang) 
	VALUES ("GHPLQ1",	"Handicap",  "FRAN01");                
INSERT INTO ANGLE (NumAngl, LibAngl, NumLang) 
	VALUES ("DF56K", 	"Grandes figures littéraires",  "FRAN01");              
INSERT INTO ANGLE (NumAngl, LibAngl, NumLang) 
	VALUES ("QR5P09",	"Happy hours",  "FRAN01");            
INSERT INTO ANGLE (NumAngl, LibAngl, NumLang) 
	VALUES ("YH40QL", 	"Histoire médiévale",  "FRAN01");              
INSERT INTO ANGLE (NumAngl, LibAngl, NumLang) 
	VALUES ("H23KK1",	"Intelligence collective",  "FRAN01");     
INSERT INTO ANGLE (NumAngl, LibAngl, NumLang) 
	VALUES ("F67AS9",	"Expérience 3.0",  "FRAN01");     
INSERT INTO ANGLE (NumAngl, LibAngl, NumLang) 
	VALUES ("VG32QML",	"Chatbot et IA",  "FRAN01");     
INSERT INTO ANGLE (NumAngl, LibAngl, NumLang) 
	VALUES ("MG8Q0V1",	"Stories",  "FRAN01");     
INSERT INTO ANGLE (NumAngl, LibAngl, NumLang) 
	VALUES ("DVM1PL3",	"Secret",  "FRAN01");     
INSERT INTO ANGLE (NumAngl, LibAngl, NumLang) 
	VALUES ("WM44GQD",	"We heart it",  "FRAN01");     
INSERT INTO ANGLE (NumAngl, LibAngl, NumLang) 
	VALUES ("JH39M2X",	"Yik Yak",  "FRAN01");     
INSERT INTO ANGLE (NumAngl, LibAngl, NumLang) 
	VALUES ("SF6QQ3X",	"Shots",  "FRAN01");     
INSERT INTO ANGLE (NumAngl, LibAngl, NumLang) 
	VALUES ("ZH0LO40",	"Tik Tak",  "FRAN01");     
INSERT INTO ANGLE (NumAngl, LibAngl, NumLang) 
	VALUES ("JU5M219",	"Recherche vocale",  "FRAN01");     

/*
--
-- Table THEMATIQUE
--
-- (<NumThem, char(6),>, <LibThem, char(60),>, <NumLang, char(8),>)
*/
INSERT INTO THEMATIQUE (NumThem, LibThem, NumLang) 
VALUES
		('2ZQ4', "L'événement", "FRAN01");
INSERT INTO THEMATIQUE (NumThem, LibThem, NumLang) 
VALUES
		('76D1', "L'acteur-clé", "FRAN01");
INSERT INTO THEMATIQUE (NumThem, LibThem, NumLang) 
VALUES
		('CH91', "Le mouvement émergeant", "FRAN01");
INSERT INTO THEMATIQUE (NumThem, LibThem, NumLang) 
VALUES
		('F67A', "L'insolite / le clin d'oeil", "FRAN01");
INSERT INTO THEMATIQUE (NumThem, LibThem, NumLang) 
VALUES
		('MM77', "The event", "ANGL01");
INSERT INTO THEMATIQUE (NumThem, LibThem, NumLang) 
VALUES
		('W8L9', "The key player", "ANGL01");
INSERT INTO THEMATIQUE (NumThem, LibThem, NumLang) 
VALUES
		('WL45G', "The unusual / the wink", "ANGL01");

/*
--
-- Table MOTCLE
--
-- (<NumMoCle, char(8),>, <LibMoCle, char(30),>, <NumLang, char(8),>)
*/
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('MT01', "Mot1", "FRAN01");             
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('MT02', "Mot2", "FRAN01");             
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('MT03', "Mot3", "FRAN01");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('MT04', "Mot4", "FRAN01");             
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('MT05', "Mot5", "FRAN01");             
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('MT06', "Mot6", "FRAN01");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('WD01', "Word1", "ANGL01");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('WD02', "Word2", "ANGL01");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('WD03', "Word3", "ANGL01");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('WT01', "Wort1", "ALL041");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('WT02', "Wort2", "ALL041");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('WT03', "Wort3", "ALL041");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('MA01', "дума", "BULG21");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('MA02', "дума", "BULG21");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('MA03', "дума", "BULG21");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('PRA01', "Palabra", "SPAIN01");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('PRA02', "Palabra", "SPAIN01");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('PRA03', "Palabra", "SPAIN01");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('PLA01', "Parola", "ITAL11");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('PLA02', "Parola", "ITAL11");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('PLA03', "Parola", "ITAL11");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('CO01', "Cлово", "URS98");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('CO02', "Cлово", "URS98");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('CO03', "Cлово", "URS98");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('W8L92', "Mot1", "FRAN01");             
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('W8L93', "Mot2", "FRAN01");             
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('W8L94', "Mot3", "FRAN01");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('W8L95', "Mot4", "FRAN01");             
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('W8L96', "Mot5", "FRAN01");             
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('W8L97', "Mot6", "FRAN01");                                      
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('W8L98', "Mot7", "FRAN01");             
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('W8L99', "Mot8", "FRAN01");             
INSERT INTO MOTCLE (NumMoCle, LibMoCle, NumLang) 
VALUES
	('W8L100', "Mot9", "FRAN01");                                      
/*
--
-- Table ARTICLE
--
-- (<NumArt, char(10),>, <DtCreA, date,>, <LibTitrA, char(100),>, 
-- <LibChapoA char(500),>, <Parag1A, char(1200),>, <LibSsTitr1, char(100),>,
-- <Parag2A, char(1200),>, <LibSsTitr2, char(100),>, <Parag3A, char(1200),>,
-- <LibConclA, char(800),>, <UrlPhotA, char(32),>, <NumAngl, char(6) not null,>,
-- <NumThem, char(6) not null,>, <NumLang, char(8) not null,>
-- )
*/
INSERT INTO ARTICLE (NumArt, DtCreA, LibTitrA, LibChapoA, Parag1A,
   LibSsTitr1, Parag2A, LibSsTitr2, Parag3A, LibConclA, UrlPhotA, 
   NumAngl, NumThem, NumLang)
VALUES
	('ART011', '2019-02-24 00:00:00', "Titre 1", "Chapeau !!", "Paragraphe 1",
	"Sous-titre 1", "Paragraphe 2", "Sous-titre 2", "Paragraphe 3", "Conclusion :-)",
	"https://monsiteamoi.com/image.png",
	"QR5P09", "76D1", "FRAN01");
INSERT INTO ARTICLE (NumArt, DtCreA, LibTitrA, LibChapoA, Parag1A,
   LibSsTitr1, Parag2A, LibSsTitr2, Parag3A, LibConclA, UrlPhotA, 
   NumAngl, NumThem, NumLang)
VALUES
	('ART021', '2019-01-09 00:00:00', "Titre 1", "Chapeau !!", "Paragraphe 1",
	"Sous-titre 1", "Paragraphe 2", "Sous-titre 2", "Paragraphe 3", "Conclusion :-)",
	"https://monsiteamoi.com/image.png",
	"QR5P09", "F67A", "FRAN01");             
INSERT INTO ARTICLE (NumArt, DtCreA, LibTitrA, LibChapoA, Parag1A,
   LibSsTitr1, Parag2A, LibSsTitr2, Parag3A, LibConclA, UrlPhotA, 
   NumAngl, NumThem, NumLang)
VALUES
	('ART031', '2019-01-09 00:00:00', "Titre 1", "Chapeau !!", "Paragraphe 1",
	"Sous-titre 1", "Paragraphe 2", "Sous-titre 2", "Paragraphe 3", "Conclusion :-)",
	"https://monsiteamoi.com/image.png",
	"QR5P09", "F67A", "FRAN01");             
INSERT INTO ARTICLE (NumArt, DtCreA, LibTitrA, LibChapoA, Parag1A,
   LibSsTitr1, Parag2A, LibSsTitr2, Parag3A, LibConclA, UrlPhotA, 
   NumAngl, NumThem, NumLang)
VALUES
	('ART041', '2019-01-09 00:00:00', "Titre 1", "Chapeau !!", "Paragraphe 1",
	"Sous-titre 1", "Paragraphe 2", "Sous-titre 2", "Paragraphe 3", "Conclusion :-)",
	"https://monsiteamoi.com/image.png",
	"QR5P09", "F67A", "FRAN01");             
INSERT INTO ARTICLE (NumArt, DtCreA, LibTitrA, LibChapoA, Parag1A,
   LibSsTitr1, Parag2A, LibSsTitr2, Parag3A, LibConclA, UrlPhotA, 
   NumAngl, NumThem, NumLang)
VALUES
	('ART051', '2019-01-09 00:00:00', "Titre 1", "Chapeau !!", "Paragraphe 1",
	"Sous-titre 1", "Paragraphe 2", "Sous-titre 2", "Paragraphe 3", "Conclusion :-)",
	"https://monsiteamoi.com/image.png",
	"QR5P09", "F67A", "FRAN01");             

/*
--
-- Table MOTCLEARTICLE (Table de jointure)
--
-- (<NumArt, char(10),>, <NumMoCle, char(8),>)
*/
INSERT INTO MOTCLEARTICLE (NumArt, NumMoCle) VALUES ('ART011', "MT01");
INSERT INTO MOTCLEARTICLE (NumArt, NumMoCle) VALUES ('ART011', "MT02");
INSERT INTO MOTCLEARTICLE (NumArt, NumMoCle) VALUES ('ART011', "MT03");
INSERT INTO MOTCLEARTICLE (NumArt, NumMoCle) VALUES ('ART011', "MT04");
INSERT INTO MOTCLEARTICLE (NumArt, NumMoCle) VALUES ('ART011', "MT05");
INSERT INTO MOTCLEARTICLE (NumArt, NumMoCle) VALUES ('ART021', "W8L92");
INSERT INTO MOTCLEARTICLE (NumArt, NumMoCle) VALUES ('ART021', "W8L93");
INSERT INTO MOTCLEARTICLE (NumArt, NumMoCle) VALUES ('ART021', "W8L94");
INSERT INTO MOTCLEARTICLE (NumArt, NumMoCle) VALUES ('ART021', "W8L95");



