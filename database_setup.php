<?php

mysql_connect("localhost") or die("could not connect to localhost");
mysql_create_db("dd") or die("Could not create database");
mysql_select_db("dd") or die("Could not select database");

$query = "CREATE TABLE `dd`.`kommuner` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `kommun` VARCHAR(45) NOT NULL,
  `lan` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);

// POPULATING kommuner
mysql_query("INSERT INTO kommuner VALUES (1, 'Ale', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (2, 'Alings�s', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (3, 'Alvesta', 'Kronoberg ')");
mysql_query("INSERT INTO kommuner VALUES (4, 'Aneby', 'J�nk�ping ')");
mysql_query("INSERT INTO kommuner VALUES (5, 'Arboga', 'V�stmanland ')");
mysql_query("INSERT INTO kommuner VALUES (6, 'Arjeplog', 'Norrbotten ')");
mysql_query("INSERT INTO kommuner VALUES (7, 'Arvidsjaur', 'Norrbotten ')");
mysql_query("INSERT INTO kommuner VALUES (8, 'Arvika', 'V�rmland ')");
mysql_query("INSERT INTO kommuner VALUES (9, 'Askersund', '�rebro ')");
mysql_query("INSERT INTO kommuner VALUES (10, 'Avesta', 'Dalarna ')");
mysql_query("INSERT INTO kommuner VALUES (11, 'Bengtsfors', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (12, 'Berg', 'J�mtland ')");
mysql_query("INSERT INTO kommuner VALUES (13, 'Bjurholm', 'V�sterbotten ')");
mysql_query("INSERT INTO kommuner VALUES (14, 'Bjuv', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (15, 'Boden', 'Norrbotten ')");
mysql_query("INSERT INTO kommuner VALUES (16, 'Bollebygd', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (17, 'Bolln�s', 'G�vleborg ')");
mysql_query("INSERT INTO kommuner VALUES (18, 'Borgholm', 'Kalmar ')");
mysql_query("INSERT INTO kommuner VALUES (19, 'Borl�nge', 'Dalarna ')");
mysql_query("INSERT INTO kommuner VALUES (20, 'Bor�s', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (21, 'Botkyrka', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (22, 'Boxholm', '�sterg�tland ')");
mysql_query("INSERT INTO kommuner VALUES (23, 'Brom�lla', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (24, 'Br�cke', 'J�mtland ')");
mysql_query("INSERT INTO kommuner VALUES (25, 'Burl�v', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (26, 'B�stad', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (27, 'Dals-Ed', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (28, 'Danderyd', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (29, 'Degerfors', '�rebro ')");
mysql_query("INSERT INTO kommuner VALUES (30, 'Dorotea', 'V�sterbotten ')");
mysql_query("INSERT INTO kommuner VALUES (31, 'Eda', 'V�rmland ')");
mysql_query("INSERT INTO kommuner VALUES (32, 'Eker�', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (33, 'Eksj�', 'J�nk�ping ')");
mysql_query("INSERT INTO kommuner VALUES (34, 'Emmaboda', 'Kalmar ')");
mysql_query("INSERT INTO kommuner VALUES (35, 'Enk�ping', 'Uppsala ')");
mysql_query("INSERT INTO kommuner VALUES (36, 'Eskilstuna', 'S�dermanland ')");
mysql_query("INSERT INTO kommuner VALUES (37, 'Esl�v', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (38, 'Essunga', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (39, 'Fagersta', 'V�stmanland ')");
mysql_query("INSERT INTO kommuner VALUES (40, 'Falkenberg', 'Halland ')");
mysql_query("INSERT INTO kommuner VALUES (41, 'Falk�ping', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (42, 'Falu', 'Dalarna ')");
mysql_query("INSERT INTO kommuner VALUES (43, 'Filipstad', 'V�rmland ')");
mysql_query("INSERT INTO kommuner VALUES (44, 'Finsp�ng', '�sterg�tland ')");
mysql_query("INSERT INTO kommuner VALUES (45, 'Flen', 'S�dermanland ')");
mysql_query("INSERT INTO kommuner VALUES (46, 'Forshaga', 'V�rmland ')");
mysql_query("INSERT INTO kommuner VALUES (47, 'F�rgelanda', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (48, 'Gagnef', 'Dalarna ')");
mysql_query("INSERT INTO kommuner VALUES (49, 'Gislaved', 'J�nk�ping ')");
mysql_query("INSERT INTO kommuner VALUES (50, 'Gnesta', 'S�dermanland ')");
mysql_query("INSERT INTO kommuner VALUES (51, 'Gnosj�', 'J�nk�ping ')");
mysql_query("INSERT INTO kommuner VALUES (52, 'Gotland', 'Gotland ')");
mysql_query("INSERT INTO kommuner VALUES (53, 'Grums', 'V�rmland ')");
mysql_query("INSERT INTO kommuner VALUES (54, 'Gr�storp', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (55, 'Gullsp�ng', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (56, 'G�llivare', 'Norrbotten ')");
mysql_query("INSERT INTO kommuner VALUES (57, 'G�vle', 'G�vleborg ')");
mysql_query("INSERT INTO kommuner VALUES (58, 'G�teborg', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (59, 'G�tene', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (60, 'Habo', 'J�nk�ping ')");
mysql_query("INSERT INTO kommuner VALUES (61, 'Hagfors', 'V�rmland ')");
mysql_query("INSERT INTO kommuner VALUES (62, 'Hallsberg', '�rebro ')");
mysql_query("INSERT INTO kommuner VALUES (63, 'Hallstahammar', 'V�stmanland ')");
mysql_query("INSERT INTO kommuner VALUES (64, 'Halmstad', 'Halland ')");
mysql_query("INSERT INTO kommuner VALUES (65, 'Hammar�', 'V�rmland ')");
mysql_query("INSERT INTO kommuner VALUES (66, 'Haninge', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (67, 'Haparanda', 'Norrbotten ')");
mysql_query("INSERT INTO kommuner VALUES (68, 'Heby', 'Uppsala ')");
mysql_query("INSERT INTO kommuner VALUES (69, 'Hedemora', 'Dalarna ')");
mysql_query("INSERT INTO kommuner VALUES (70, 'Helsingborg', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (71, 'Herrljunga', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (72, 'Hjo', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (73, 'Hofors', 'G�vleborg ')");
mysql_query("INSERT INTO kommuner VALUES (74, 'Huddinge', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (75, 'Hudiksvall', 'G�vleborg ')");
mysql_query("INSERT INTO kommuner VALUES (76, 'Hultsfred', 'Kalmar ')");
mysql_query("INSERT INTO kommuner VALUES (77, 'Hylte', 'Halland ')");
mysql_query("INSERT INTO kommuner VALUES (78, 'H�bo', 'Uppsala ')");
mysql_query("INSERT INTO kommuner VALUES (79, 'H�llefors', '�rebro ')");
mysql_query("INSERT INTO kommuner VALUES (80, 'H�rjedalen', 'J�mtland ')");
mysql_query("INSERT INTO kommuner VALUES (81, 'H�rn�sand', 'V�sternorrland ')");
mysql_query("INSERT INTO kommuner VALUES (82, 'H�rryda', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (83, 'H�ssleholm', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (84, 'H�gan�s', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (85, 'H�gsby', 'Kalmar ')");
mysql_query("INSERT INTO kommuner VALUES (86, 'H�rby', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (87, 'H��r', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (88, 'Jokkmokk', 'Norrbotten ')");
mysql_query("INSERT INTO kommuner VALUES (89, 'J�rf�lla', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (90, 'J�nk�ping', 'J�nk�ping ')");
mysql_query("INSERT INTO kommuner VALUES (91, 'Kalix', 'Norrbotten ')");
mysql_query("INSERT INTO kommuner VALUES (92, 'Kalmar', 'Kalmar ')");
mysql_query("INSERT INTO kommuner VALUES (93, 'Karlsborg', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (94, 'Karlshamn', 'Blekinge ')");
mysql_query("INSERT INTO kommuner VALUES (95, 'Karlskoga', '�rebro ')");
mysql_query("INSERT INTO kommuner VALUES (96, 'Karlskrona', 'Blekinge ')");
mysql_query("INSERT INTO kommuner VALUES (97, 'Karlstad', 'V�rmland ')");
mysql_query("INSERT INTO kommuner VALUES (98, 'Katrineholm', 'S�dermanland ')");
mysql_query("INSERT INTO kommuner VALUES (99, 'Kil', 'V�rmland ')");
mysql_query("INSERT INTO kommuner VALUES (100, 'Kinda', '�sterg�tland ')");
mysql_query("INSERT INTO kommuner VALUES (101, 'Kiruna', 'Norrbotten ')");
mysql_query("INSERT INTO kommuner VALUES (102, 'Klippan', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (103, 'Knivsta', 'Uppsala ')");
mysql_query("INSERT INTO kommuner VALUES (104, 'Kramfors', 'V�sternorrland ')");
mysql_query("INSERT INTO kommuner VALUES (105, 'Kristianstad', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (106, 'Kristinehamn', 'V�rmland ')");
mysql_query("INSERT INTO kommuner VALUES (107, 'Krokom', 'J�mtland ')");
mysql_query("INSERT INTO kommuner VALUES (108, 'Kumla', '�rebro ')");
mysql_query("INSERT INTO kommuner VALUES (109, 'Kungsbacka', 'Halland ')");
mysql_query("INSERT INTO kommuner VALUES (110, 'Kungs�r', 'V�stmanland ')");
mysql_query("INSERT INTO kommuner VALUES (111, 'Kung�lv', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (112, 'K�vlinge', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (113, 'K�ping', 'V�stmanland ')");
mysql_query("INSERT INTO kommuner VALUES (114, 'Laholm', 'Halland ')");
mysql_query("INSERT INTO kommuner VALUES (115, 'Landskrona', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (116, 'Lax�', '�rebro ')");
mysql_query("INSERT INTO kommuner VALUES (117, 'Lekeberg', '�rebro ')");
mysql_query("INSERT INTO kommuner VALUES (118, 'Leksand', 'Dalarna ')");
mysql_query("INSERT INTO kommuner VALUES (119, 'Lerum', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (120, 'Lessebo', 'Kronoberg ')");
mysql_query("INSERT INTO kommuner VALUES (121, 'Liding�', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (122, 'Lidk�ping', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (123, 'Lilla Edet', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (124, 'Lindesberg', '�rebro ')");
mysql_query("INSERT INTO kommuner VALUES (125, 'Link�ping', '�sterg�tland ')");
mysql_query("INSERT INTO kommuner VALUES (126, 'Ljungby', 'Kronoberg ')");
mysql_query("INSERT INTO kommuner VALUES (127, 'Ljusdal', 'G�vleborg ')");
mysql_query("INSERT INTO kommuner VALUES (128, 'Ljusnarsberg', '�rebro ')");
mysql_query("INSERT INTO kommuner VALUES (129, 'Lomma', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (130, 'Ludvika', 'Dalarna ')");
mysql_query("INSERT INTO kommuner VALUES (131, 'Lule�', 'Norrbotten ')");
mysql_query("INSERT INTO kommuner VALUES (132, 'Lund', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (133, 'Lycksele', 'V�sterbotten ')");
mysql_query("INSERT INTO kommuner VALUES (134, 'Lysekil', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (135, 'Malm�', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (136, 'Malung-S�len', 'Dalarna ')");
mysql_query("INSERT INTO kommuner VALUES (137, 'Mal�', 'V�sterbotten ')");
mysql_query("INSERT INTO kommuner VALUES (138, 'Mariestad', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (139, 'Mark', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (140, 'Markaryd', 'Kronoberg ')");
mysql_query("INSERT INTO kommuner VALUES (141, 'Mellerud', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (142, 'Mj�lby', '�sterg�tland ')");
mysql_query("INSERT INTO kommuner VALUES (143, 'Mora', 'Dalarna ')");
mysql_query("INSERT INTO kommuner VALUES (144, 'Motala', '�sterg�tland ')");
mysql_query("INSERT INTO kommuner VALUES (145, 'Mullsj�', 'J�nk�ping ')");
mysql_query("INSERT INTO kommuner VALUES (146, 'Munkedal', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (147, 'Munkfors', 'V�rmland ')");
mysql_query("INSERT INTO kommuner VALUES (148, 'M�lndal', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (149, 'M�nster�s', 'Kalmar ')");
mysql_query("INSERT INTO kommuner VALUES (150, 'M�rbyl�nga', 'Kalmar ')");
mysql_query("INSERT INTO kommuner VALUES (151, 'Nacka', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (152, 'Nora', '�rebro ')");
mysql_query("INSERT INTO kommuner VALUES (153, 'Norberg', 'V�stmanland ')");
mysql_query("INSERT INTO kommuner VALUES (154, 'Nordanstig', 'G�vleborg ')");
mysql_query("INSERT INTO kommuner VALUES (155, 'Nordmaling', 'V�sterbotten ')");
mysql_query("INSERT INTO kommuner VALUES (156, 'Norrk�ping', '�sterg�tland ')");
mysql_query("INSERT INTO kommuner VALUES (157, 'Norrt�lje', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (158, 'Norsj�', 'V�sterbotten ')");
mysql_query("INSERT INTO kommuner VALUES (159, 'Nybro', 'Kalmar ')");
mysql_query("INSERT INTO kommuner VALUES (160, 'Nykvarn', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (161, 'Nyk�ping', 'S�dermanland ')");
mysql_query("INSERT INTO kommuner VALUES (162, 'Nyn�shamn', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (163, 'N�ssj�', 'J�nk�ping ')");
mysql_query("INSERT INTO kommuner VALUES (164, 'Ockelbo', 'G�vleborg ')");
mysql_query("INSERT INTO kommuner VALUES (165, 'Olofstr�m', 'Blekinge ')");
mysql_query("INSERT INTO kommuner VALUES (166, 'Orsa', 'Dalarna ')");
mysql_query("INSERT INTO kommuner VALUES (167, 'Orust', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (168, 'Osby', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (169, 'Oskarshamn', 'Kalmar ')");
mysql_query("INSERT INTO kommuner VALUES (170, 'Ovan�ker', 'G�vleborg ')");
mysql_query("INSERT INTO kommuner VALUES (171, 'Oxel�sund', 'S�dermanland ')");
mysql_query("INSERT INTO kommuner VALUES (172, 'Pajala', 'Norrbotten ')");
mysql_query("INSERT INTO kommuner VALUES (173, 'Partille', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (174, 'Perstorp', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (175, 'Pite�', 'Norrbotten ')");
mysql_query("INSERT INTO kommuner VALUES (176, 'Ragunda', 'J�mtland ')");
mysql_query("INSERT INTO kommuner VALUES (177, 'Robertsfors', 'V�sterbotten ')");
mysql_query("INSERT INTO kommuner VALUES (178, 'Ronneby', 'Blekinge ')");
mysql_query("INSERT INTO kommuner VALUES (179, 'R�ttvik', 'Dalarna ')");
mysql_query("INSERT INTO kommuner VALUES (180, 'Sala', 'V�stmanland ')");
mysql_query("INSERT INTO kommuner VALUES (181, 'Salem', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (182, 'Sandviken', 'G�vleborg ')");
mysql_query("INSERT INTO kommuner VALUES (183, 'Sigtuna', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (184, 'Simrishamn', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (185, 'Sj�bo', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (186, 'Skara', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (187, 'Skellefte�', 'V�sterbotten ')");
mysql_query("INSERT INTO kommuner VALUES (188, 'Skinnskatteberg', 'V�stmanland ')");
mysql_query("INSERT INTO kommuner VALUES (189, 'Skurup', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (190, 'Sk�vde', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (191, 'Smedjebacken', 'Dalarna ')");
mysql_query("INSERT INTO kommuner VALUES (192, 'Sollefte�', 'V�sternorrland ')");
mysql_query("INSERT INTO kommuner VALUES (193, 'Sollentuna', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (194, 'Solna', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (195, 'Sorsele', 'V�sterbotten ')");
mysql_query("INSERT INTO kommuner VALUES (196, 'Soten�s', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (197, 'Staffanstorp', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (198, 'Stenungsund', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (199, 'Stockholm', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (200, 'Storfors', 'V�rmland ')");
mysql_query("INSERT INTO kommuner VALUES (201, 'Storuman', 'V�sterbotten ')");
mysql_query("INSERT INTO kommuner VALUES (202, 'Str�ngn�s', 'S�dermanland ')");
mysql_query("INSERT INTO kommuner VALUES (203, 'Str�mstad', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (204, 'Str�msund', 'J�mtland ')");
mysql_query("INSERT INTO kommuner VALUES (205, 'Sundbyberg', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (206, 'Sundsvall', 'V�sternorrland ')");
mysql_query("INSERT INTO kommuner VALUES (207, 'Sunne', 'V�rmland ')");
mysql_query("INSERT INTO kommuner VALUES (208, 'Surahammar', 'V�stmanland ')");
mysql_query("INSERT INTO kommuner VALUES (209, 'Sval�v', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (210, 'Svedala', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (211, 'Svenljunga', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (212, 'S�ffle', 'V�rmland ')");
mysql_query("INSERT INTO kommuner VALUES (213, 'S�ter', 'Dalarna ')");
mysql_query("INSERT INTO kommuner VALUES (214, 'S�vsj�', 'J�nk�ping ')");
mysql_query("INSERT INTO kommuner VALUES (215, 'S�derhamn', 'G�vleborg ')");
mysql_query("INSERT INTO kommuner VALUES (216, 'S�derk�ping', '�sterg�tland ')");
mysql_query("INSERT INTO kommuner VALUES (217, 'S�dert�lje', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (218, 'S�lvesborg', 'Blekinge ')");
mysql_query("INSERT INTO kommuner VALUES (219, 'Tanum', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (220, 'Tibro', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (221, 'Tidaholm', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (222, 'Tierp', 'Uppsala ')");
mysql_query("INSERT INTO kommuner VALUES (223, 'Timr�', 'V�sternorrland ')");
mysql_query("INSERT INTO kommuner VALUES (224, 'Tingsryd', 'Kronoberg ')");
mysql_query("INSERT INTO kommuner VALUES (225, 'Tj�rn', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (226, 'Tomelilla', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (227, 'Torsby', 'V�rmland ')");
mysql_query("INSERT INTO kommuner VALUES (228, 'Tors�s', 'Kalmar ')");
mysql_query("INSERT INTO kommuner VALUES (229, 'Tranemo', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (230, 'Tran�s', 'J�nk�ping ')");
mysql_query("INSERT INTO kommuner VALUES (231, 'Trelleborg', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (232, 'Trollh�ttan', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (233, 'Trosa', 'S�dermanland ')");
mysql_query("INSERT INTO kommuner VALUES (234, 'Tyres�', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (235, 'T�by', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (236, 'T�reboda', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (237, 'Uddevalla', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (238, 'Ulricehamn', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (239, 'Ume�', 'V�sterbotten ')");
mysql_query("INSERT INTO kommuner VALUES (240, 'Upplands V�sby', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (241, 'Upplands-Bro', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (242, 'Uppsala', 'Uppsala ')");
mysql_query("INSERT INTO kommuner VALUES (243, 'Uppvidinge', 'Kronoberg ')");
mysql_query("INSERT INTO kommuner VALUES (244, 'Vadstena', '�sterg�tland ')");
mysql_query("INSERT INTO kommuner VALUES (245, 'Vaggeryd', 'J�nk�ping ')");
mysql_query("INSERT INTO kommuner VALUES (246, 'Valdemarsvik', '�sterg�tland ')");
mysql_query("INSERT INTO kommuner VALUES (247, 'Vallentuna', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (248, 'Vansbro', 'Dalarna ')");
mysql_query("INSERT INTO kommuner VALUES (249, 'Vara', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (250, 'Varberg', 'Halland ')");
mysql_query("INSERT INTO kommuner VALUES (251, 'Vaxholm', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (252, 'Vellinge', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (253, 'Vetlanda', 'J�nk�ping ')");
mysql_query("INSERT INTO kommuner VALUES (254, 'Vilhelmina', 'V�sterbotten ')");
mysql_query("INSERT INTO kommuner VALUES (255, 'Vimmerby', 'Kalmar ')");
mysql_query("INSERT INTO kommuner VALUES (256, 'Vindeln', 'V�sterbotten ')");
mysql_query("INSERT INTO kommuner VALUES (257, 'Ving�ker', 'S�dermanland ')");
mysql_query("INSERT INTO kommuner VALUES (258, 'V�rg�rda', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (259, 'V�nersborg', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (260, 'V�nn�s', 'V�sterbotten ')");
mysql_query("INSERT INTO kommuner VALUES (261, 'V�rmd�', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (262, 'V�rnamo', 'J�nk�ping ')");
mysql_query("INSERT INTO kommuner VALUES (263, 'V�stervik', 'Kalmar ')");
mysql_query("INSERT INTO kommuner VALUES (264, 'V�ster�', 'V�stmanland ')");
mysql_query("INSERT INTO kommuner VALUES (265, 'V�xj�', 'Kronoberg ')");
mysql_query("INSERT INTO kommuner VALUES (266, 'Ydre', '�sterg�tland ')");
mysql_query("INSERT INTO kommuner VALUES (267, 'Ystad', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (268, '�m�l', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (269, '�nge', 'V�sternorrland ')");
mysql_query("INSERT INTO kommuner VALUES (270, '�re', 'J�mtland ')");
mysql_query("INSERT INTO kommuner VALUES (271, '�rj�ng', 'V�rmland ')");
mysql_query("INSERT INTO kommuner VALUES (272, '�sele', 'V�sterbotten ')");
mysql_query("INSERT INTO kommuner VALUES (273, '�storp', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (274, '�tvidaberg', '�sterg�tland ')");
mysql_query("INSERT INTO kommuner VALUES (275, '�lmhult', 'Kronoberg ')");
mysql_query("INSERT INTO kommuner VALUES (276, '�lvdalen', 'Dalarna ')");
mysql_query("INSERT INTO kommuner VALUES (277, '�lvkarleby', 'Uppsala ')");
mysql_query("INSERT INTO kommuner VALUES (278, '�lvsbyn', 'Norrbotten ')");
mysql_query("INSERT INTO kommuner VALUES (279, '�ngelholm', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (280, '�cker�', 'V�stra G�taland ')");
mysql_query("INSERT INTO kommuner VALUES (281, '�desh�g', '�sterg�tland ')");
mysql_query("INSERT INTO kommuner VALUES (282, '�rebro', '�rebro ')");
mysql_query("INSERT INTO kommuner VALUES (283, '�rkelljunga', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (284, '�rnsk�ldsvik', 'V�sternorrland ')");
mysql_query("INSERT INTO kommuner VALUES (285, '�stersund', 'J�mtland ')");
mysql_query("INSERT INTO kommuner VALUES (286, '�ster�ker', 'Stockholm ')");
mysql_query("INSERT INTO kommuner VALUES (287, '�sthammar', 'Uppsala ')");
mysql_query("INSERT INTO kommuner VALUES (288, '�stra G�inge', 'Sk�ne ')");
mysql_query("INSERT INTO kommuner VALUES (289, '�verkalix', 'Norrbotten ')");
mysql_query("INSERT INTO kommuner VALUES (290, '�vertorne�', 'Norrbotten')");



$query = "CREATE TABLE `dd`.`users` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(128) NOT NULL,
  `remember_me_token` VARCHAR(128) DEFAULT null,
  `registration_time` INTEGER UNSIGNED NOT NULL,
  `deletion_time` INTEGER UNSIGNED DEFAULT null,
  `last_login_time` INTEGER UNSIGNED DEFAULT null,
  `last_activity_time` INTEGER UNSIGNED DEFAULT null,
  `first_name` VARCHAR(45) DEFAULT '',
  `last_name` VARCHAR(45) DEFAULT '',
  `street_address` VARCHAR(45) DEFAULT '',
  `zip_code` VARCHAR(10) DEFAULT '',
  `city_address` VARCHAR(45) DEFAULT '',
  `county` VARCHAR(45) DEFAULT '',
  `region` VARCHAR(45) DEFAULT '',
  `social_security_number` VARCHAR(13) DEFAULT '',
  `email` VARCHAR(45) NOT NULL,
  `telephone1` VARCHAR(20) DEFAULT '',
  `telephone2` VARCHAR(20) DEFAULT '',
  `skype_name` VARCHAR(45) DEFAULT '',
  `show_email` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
  `show_telephone` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
  `show_skype` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
  `number_of_posts` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  `number_of_topics` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  `membership_fee_payed` INTEGER UNSIGNED DEFAULT null,
  `last_contact_with_admin` INTEGER UNSIGNED DEFAULT null,
  `acting_as_delegate` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
  `user_role` INTEGER UNSIGNED NOT NULL DEFAULT 2,
  `admin_notes` VARCHAR(255) DEFAULT '',
  `image` VARCHAR(90) NOT NULL DEFAULT 'no_image.png',
  `description` TEXT DEFAULT '',
  PRIMARY KEY (`id`), 
  FULLTEXT KEY 'search' ('first_name', 'last_name', 'description')
)
ENGINE = MyISAM;";

mysql_query($query);


$query = "CREATE TABLE `dd`.`membership_fees` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` INTEGER UNSIGNED NOT NULL,
  `timestamp` INTEGER UNSIGNED NOT NULL,
  `sum` INTEGER UNSIGNED NOT NULL,
  `to_account_id` INTEGER UNSIGNED,
  `message` VARCHAR(255),
  `payment_for_year` INTEGER(4) UNSIGNED,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);


$query = "CREATE TABLE `dd`.`admin_roles` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(90) NOT NULL,
  `description` TEXT,
  `type` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);


$query = "CREATE TABLE `dd`.`admin_roles_users` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_role_id` INTEGER UNSIGNED NOT NULL,
  `user_id` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);


// FILLING IN DEFAULT ADMIN ROLES
mysql_query("INSERT INTO admin_roles VALUES (1, 'Superadmin', '', 'superadmin')");
mysql_query("INSERT INTO admin_roles VALUES (2, 'Medlemsadministrat�r', '', 'member_admin')");
mysql_query("INSERT INTO admin_roles VALUES (3, 'Forumadministrat�r', '', 'forum_admin')");
mysql_query("INSERT INTO admin_roles VALUES (4, 'Valadministrat�r', '', 'vote_admin')");
mysql_query("INSERT INTO admin_roles VALUES (5, 'Kass�r', '', 'treasurer')");


// CREATING DEFAULT ADMIN USER
mysql_query("INSERT INTO users (id, username, first_name, password, registration_time, email, show_email) VALUES (1, 'admin', 'Admin', '$2a$08$e.8wjns479C6my6mBkWBUey/cCK5iY3zO1e5dO15AkJgCi6mVVA.C', " . time() . ", 'admin@direktdemokraterna.se', 0)");
mysql_query("INSERT INTO admin_roles_users VALUES (null, 1, 1)");


$query = "CREATE TABLE `dd`.`messages` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `sender_id` INTEGER UNSIGNED NOT NULL,
  `recipient_id` INTEGER UNSIGNED NOT NULL,
  `sent_time` INTEGER UNSIGNED NOT NULL,
  `read_time` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  `deleted_by_sender` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  `deleted_by_recipient` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  `title` VARCHAR(90) NOT NULL DEFAULT '',
  `content` TEXT NOT NULL DEFAULT '',
  PRIMARY KEY (`id`), 
  FULLTEXT KEY 'search' ('title', 'content')
)
ENGINE = MyISAM;";

mysql_query($query);



$query = "CREATE TABLE `dd`.`kommuner` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `kommun` VARCHAR(45) NOT NULL,
  `lan` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);



$query = "CREATE TABLE `dd`.`workgroups` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(90) NOT NULL,
  `description` TEXT NOT NULL,
  `is_active` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
  `number_of_members` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  `propose_time` INTEGER UNSIGNED NOT NULL,
  `create_time` INTEGER UNSIGNED DEFAULT null,
  `create_user` INTEGER UNSIGNED NOT NULL,
  `public_forum_id` INTEGER UNSIGNED NOT NULL,
  `private_forum_id` INTEGER UNSIGNED NOT NULL,
  `is_restricted` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`), 
  FULLTEXT KEY 'search' ('title', 'description')
)
ENGINE = MyISAM;"

mysql_query($query);


// FILLING IN DEFAULT WORKGROUPS
mysql_query("INSERT INTO workgroups VALUES (1, 'Styrelsen', 'Styrelsen har det yttersta ansvaret f�r den l�pande driften av Direktdemokraterna.', 1, 0, 0, 0, null, null, null, 1)");



$query = "CREATE TABLE `dd`.`workgroups_members` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `workgroup_id` INTEGER UNSIGNED NOT NULL,
  `user_id` INTEGER UNSIGNED NOT NULL,
  `member_since` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);




$query = "CREATE TABLE `dd`.`workgroups_candidates` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `workgroup_id` INTEGER UNSIGNED NOT NULL,
  `candidate_id` INTEGER UNSIGNED NOT NULL,
  `number_of_supporters` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);




$query = "CREATE TABLE `dd`.`workgroups_candidates_support` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `workgroup_id` INTEGER UNSIGNED NOT NULL,
  `candidate_id` INTEGER UNSIGNED NOT NULL,
  `supporter_id` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);




$query = "CREATE TABLE `dd`.`workgroups_members_exclude` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `workgroup_id` INTEGER UNSIGNED NOT NULL,
  `excluded_id` INTEGER UNSIGNED NOT NULL,
  `excluder_id` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);




$query = "CREATE TABLE `dd`.`categories` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `description` TEXT NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);


// FILLING IN DEFAULT CATEGORIES
mysql_query("INSERT INTO categories VALUES (1, 'Allm�nt', 'Allm�nna fr�gor.')");
mysql_query("INSERT INTO categories VALUES (2, 'Valkretsar', 'Nya omr�stningar och f�rslag presenteras i dessa forum.')");
mysql_query("INSERT INTO categories VALUES (3, 'Administration', 'Forum f�r administrat�rer.')");
mysql_query("INSERT INTO categories VALUES (8, 'Interna arbetsgruppsforum', 'Dessa forum har bara medlemmarna i den respektive arbetsgrupperna tillg�ng till.')");
mysql_query("INSERT INTO categories VALUES (9, 'Arbetsgrupper', 'Publika forum f�r de olika arbetsgrupperna.')");


$query = "CREATE TABLE `dd`.`forums` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` INTEGER UNSIGNED NOT NULL,
  `title` VARCHAR(45) NOT NULL,
  `description` TEXT NOT NULL DEFAULT '',
  `last_posted_time` INTEGER UNSIGNED,
  `last_posted_post` INTEGER UNSIGNED,
  `number_of_topics` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  `number_of_posts` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  `access_type` VARCHAR(12) NOT NULL DEFAULT 'public',
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);

// FILLING IN DEFAULT FORUMS
mysql_query("INSERT INTO forums VALUES (1, 1, 'Allm�nt', '', null, null, 0, 0, 'public')");
// FILLING IN CONSTITUENCY FOR�MS 
mysql_query("INSERT INTO forums VALUES (null, 2, 'DD Riks', '', null, null, 0, 0, 'public')");



$query = "CREATE TABLE `dd`.`forums_users` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` INTEGER UNSIGNED NOT NULL,
  `forum_id` INTEGER UNSIGNED NOT NULL,
  `access_type` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);




$query = "CREATE TABLE `dd`.`posts` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `topic_id` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  `user_id` INTEGER UNSIGNED NOT NULL,
  `forum_id` INTEGER UNSIGNED NOT NULL,
  `is_topic` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
  `posted_time` INTEGER UNSIGNED NOT NULL,
  `last_edited_time` INTEGER UNSIGNED DEFAULT null,
  `title` VARCHAR(90) NOT NULL,
  `content` TEXT NOT NULL,
  PRIMARY KEY (`id`), 
  FULLTEXT KEY 'search' ('title', 'content')
)
ENGINE = MyISAM;";

mysql_query($query);




$query = "CREATE TABLE `dd`.`error_messages` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` INTEGER UNSIGNED NOT NULL,
  `message` VARCHAR(90) NOT NULL,
  `color` VARCHAR(9) NOT NULL DEFAULT 'green',
  `timestamp` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);




$query = "CREATE TABLE `dd`.`post_reports` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` INTEGER UNSIGNED NOT NULL,
  `reporter_id` INTEGER UNSIGNED NOT NULL,
  `time_report_filed` INTEGER UNSIGNED NOT NULL,
  `argument` TEXT NOT NULL,
  `time_resolved` INTEGER UNSIGNED NOT NULL,
  `resolved_by_id` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);





$query = "CREATE TABLE `dd`.`calendar` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `timestamp` INTEGER UNSIGNED NOT NULL,
  `year` INTEGER(4) UNSIGNED NOT NULL,
  `month` INTEGER(2) UNSIGNED NOT NULL,
  `day` INTEGER(2) UNSIGNED NOT NULL,
  `time` VARCHAR(20) NOT NULL
  `timestamp_added` INTEGER UNSIGNED NOT NULL,
  `added_by_user` INTEGER UNSIGNED NOT NULL,
  `location` VARCHAR(45) NOT NULL,
  `title` VARCHAR(90) NOT NULL,
  `content` TEXT NOT NULL,
  PRIMARY KEY (`id`), 
  FULLTEXT KEY 'search' ('title', 'content')
)
ENGINE = MyISAM;";

mysql_query($query);





$query = "CREATE TABLE `dd`.`calendar_participants` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `calendar_id` INTEGER UNSIGNED NOT NULL,
  `user_id` INTEGER UNSIGNED NOT NULL,
  `timestamp_registration` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);





$query = "CREATE TABLE `dd`.`user_applications` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `application_filed_time` INTEGER UNSIGNED DEFAULT null,
  `first_name` VARCHAR(45) DEFAULT '',
  `last_name` VARCHAR(45) DEFAULT '',
  `street_address` VARCHAR(45) DEFAULT '',
  `zip_code` VARCHAR(10) DEFAULT '',
  `city_address` VARCHAR(45) DEFAULT '',
  `county` VARCHAR(45) DEFAULT '',
  `region` VARCHAR(45) DEFAULT '',
  `social_security_number` VARCHAR(13) DEFAULT '',
  `email` VARCHAR(45) NOT NULL,
  `telephone1` VARCHAR(20) DEFAULT '',
  `telephone2` VARCHAR(20) DEFAULT '',
  `skype_name` VARCHAR(45) DEFAULT '',
  `membership_fee_payed` INTEGER UNSIGNED DEFAULT null,
  `admin_notes` VARCHAR(255) DEFAULT '',
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);





$query = "CREATE TABLE `dd`.`propositions` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(20) NOT NULL,
  `created_by_user` INTEGER UNSIGNED,
  `created_by_delegate` INTEGER UNSIGNED,
  `timestamp_created` INTEGER UNSIGNED NOT NULL,
  `timestamp_ended` INTEGER UNSIGNED,
  `constituency_id` INTEGER UNSIGNED NOT NULL,
  `status` VARCHAR(12) NOT NULL DEFAULT 'pending',
  `number_of_supporters` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  `number_of_enemies` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  `title` VARCHAR(90) NOT NULL,
  `description` TEXT NOT NULL,
  `forum_topic_id` INTEGER UNSIGNED,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `search`(`title`, `description`)
)
ENGINE = MyISAM;";

mysql_query($query);






$query = "CREATE TABLE `dd`.`propositions_support` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `proposition_id` INTEGER UNSIGNED NOT NULL,
  `user_code` VARCHAR(20) NOT NULL,
  `delegate_id` INTEGER UNSIGNED,
  `support_type` VARCHAR(7) NOT NULL DEFAULT 'support',
  `time_ballot_placed` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);






$query = "CREATE TABLE `dd`.`votes` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(20) NOT NULL,
  `from_proposition_id` INTEGER UNSIGNED,
  `timestamp_created` INTEGER UNSIGNED NOT NULL,
  `timestamp_delegate_ended` INTEGER UNSIGNED,
  `timestamp_ended` INTEGER UNSIGNED,
  `constituency_id` INTEGER UNSIGNED NOT NULL,
  `status` VARCHAR(10) NOT NULL DEFAULT 'active',
  `title` VARCHAR(90) NOT NULL,
  `description` TEXT NOT NULL,
  `number_of_alternatives` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  `number_of_ballots` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  `number_of_direct_ballots` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  `forum_topic_id` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `search`(`title`, `description`)
)
ENGINE = MyISAM;";

mysql_query($query);






$query = "CREATE TABLE `dd`.`votes_alternatives` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `vote_id` INTEGER UNSIGNED NOT NULL,
  `added_by_user` INTEGER UNSIGNED,
  `added_by_delegate` INTEGER UNSIGNED,
  `timestamp_added` INTEGER UNSIGNED NOT NULL,
  `alternative_title` VARCHAR(90) NOT NULL,
  `alternative_description` TEXT NOT NULL,
  `alternative_user_id` INTEGER UNSIGNED,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);






$query = "CREATE TABLE `dd`.`delegates` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(90) NOT NULL,
  `description` TEXT NOT NULL,
  `timestamp_created` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);






$query = "CREATE TABLE `dd`.`delegates_users` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `delegate_id` INTEGER UNSIGNED NOT NULL,
  `user_id` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);






$query = "CREATE TABLE `dd`.`constituencies` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(90) NOT NULL,
  `description` TEXT NOT NULL,
  `number_of_voters` INTEGER UNSIGNED,
  `forum_id` INTEGER UNSIGNED NOT NULL,
  `access_type` VARCHAR(12) NOT NULL DEFAULT 'public',
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);



// FILLING IN LOCAL FORUMS AND CONSTITUENCIES
$kommuner = mysql_fetch_array(mysql_query("SELECT kommun FROM kommuner ORDER BY kommun ASC"));
foreach($kommuner as $row){
  mysql_query("INSERT INTO forums VALUES (null, 2, '$row[kommun]', null, null, 0, 0, 'local_county')");
  $insert_id = mysql_insert_id();
  mysql_query("INSERT INTO constituencies VALUES (null, '$row[kommun]', 0, $insert_id, 'local_county')");
}
$lan = mysql_fetch_array(mysql_query("SELECT DISTINCT lan FROM kommuner ORDER BY lan ASC"));
foreach($lan as $row){
  mysql_query("INSERT INTO forums VALUES (null, 2, '$row[lan]', null, null, 0, 0, 'local_region')");
  $insert_id = mysql_insert_id();
  mysql_query("INSERT INTO constituencies VALUES (null, '$row[lan]', 0, $insert_id, 'local_region')");
}




$query = "CREATE TABLE `dd`.`constituencies_users` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `constituency_id` INTEGER UNSIGNED NOT NULL,
  `user_id` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);






$query = "CREATE TABLE `dd`.`constituencies_delegates` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `constituency_id` INTEGER UNSIGNED NOT NULL,
  `delegate_id` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);





$query = "CREATE TABLE `dd`.`ballots` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `vote_id` INTEGER UNSIGNED NOT NULL,
  `constituency_id` INTEGER UNSIGNED NOT NULL,
  `ballot_alternative` VARCHAR(9),
  `prio_ranking` TEXT DEFAULT NULL,
  `median_vote_value` FLOAT,
  `user_code` VARCHAR(20),
  `voter_is_delegate_id` INTEGER UNSIGNED,
  `delegate_id` INTEGER UNSIGNED,
  `delegation_level` INTEGER UNSIGNED,
  `delegate_priority` INTEGER UNSIGNED,
  `time_ballot_placed` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);




$query = "CREATE TABLE `dd`.`delegate_ballots` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `vote_id` INTEGER UNSIGNED NOT NULL,
  `constituency_id` INTEGER UNSIGNED NOT NULL,
  `ballot_alternative` VARCHAR(9),
  `vote_alternative_id` INTEGER UNSIGNED,
  `priority` INTEGER UNSIGNED,
  `median_vote_value` FLOAT,
  `ballot_owner_id` INTEGER UNSIGNED NOT NULL,
  `delegate_id` INTEGER UNSIGNED,
  `delegation_level` INTEGER UNSIGNED,
  `delegate_priority` INTEGER UNSIGNED,
  `time_ballot_placed` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);




$query = "CREATE TABLE `dd`.`voters_delegates` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `delegate_id` INTEGER UNSIGNED NOT NULL,
  `user_code` VARCHAR(20),
  `voter_id_delegate_id` INTEGER UNSIGNED,
  `constituency_id` INTEGER UNSIGNED NOT NULL,
  `priority` INTEGER UNSIGNED NOT NULL DEFAULT 1,
  `time_delegate_chosen` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);




$query = "CREATE TABLE `dd`.`delegates_delegates` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `delegate_id` INTEGER UNSIGNED NOT NULL,
  `delegand_id` INTEGER UNSIGNED NOT NULL,
  `constituency_id` INTEGER UNSIGNED NOT NULL,
  `priority` INTEGER UNSIGNED NOT NULL DEFAULT 1,
  `time_delegate_chosen` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = MyISAM;";

mysql_query($query);




$query = "";

mysql_query($query);




$query = "";

mysql_query($query);




$query = "";

mysql_query($query);




$query = "";

mysql_query($query);




$query = "";

mysql_query($query);





mysql_create_db("dd_anon") or die("Could not create database");
mysql_select_db("dd_anon") or die("Could not select database");



$query = "CREATE TABLE `dd_anon`.`users` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` INTEGER UNSIGNED NOT NULL,
  `active_user_code` VARCHAR(20) NOT NULL,
  `passive_user_code1` VARCHAR(20) NOT NULL,
  `passive_user_code2` VARCHAR(20) NOT NULL,
  `passive_user_code3` VARCHAR(20) NOT NULL,
  `timestamp_last_login` INTEGER UNSIGNED,
  `timestamp_last_activity` INTEGER UNSIGNED,
  PRIMARY KEY (`id`)
)
ENGINE = InnoDB;";

mysql_query($query);


$query = "CREATE TABLE `dd_anon`.`user_temp_codes` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `temp_code` VARCHAR(45) NOT NULL,
  `user_id` INTEGER UNSIGNED,
  `timestamp_created` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = InnoDB;";

mysql_query($query);




$query = "CREATE TABLE `dd_anon`.`temp_codes_constituencies` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `temp_code` VARCHAR(45) NOT NULL,
  `constituency_id` INTEGER UNSIGNED NOT NULL,
  `timestamp_created` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = InnoDB;";

mysql_query($query);




