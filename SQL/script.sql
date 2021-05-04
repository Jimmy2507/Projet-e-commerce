CREATE DATABASE IF NOT EXISTS jimmymatthieu DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE jimmymatthieu;

DROP TABLE IF EXISTS utilisateurs;

CREATE TABLE IF NOT EXISTS utilisateurs(
  idUtilisateur int (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  pseudoUtilisateur varchar (50) NOT NULL,
  mdpUtilisateur varchar (50) NOT NULL,
  mailUtilisateur varchar (50) NOT NULL,
  nomUtilisateur varchar (50) NOT NULL,
  prenomUtilisateur varchar (50) NOT NULL,
  adresseUtilisateur varchar (50) NOT NULL,
  telUtilisateur varchar (50) NOT NULL,
  idRole int (2) NOT NULL
) ENGINE = InnoDB;

DROP TABLE IF EXISTS roles;

CREATE TABLE IF NOT EXISTS roles(
  idRole int (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nomRole varchar (50) NOT NULL
) ENGINE = InnoDB;

DROP TABLE IF EXISTS produits;

CREATE TABLE IF NOT EXISTS produits(
  idProduit int (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nomProduit varchar (50) NOT NULL,
  prixProduit float (25) NOT NULL,
  imageProduit varchar (50) NOT NULL,
  descProduit varchar (500) NOT NULL,
  stockProduit int (5) NOT NULL,
  idCategorie int (11) NOT NULL
) ENGINE = InnoDB;

DROP TABLE IF EXISTS categories;

CREATE TABLE IF NOT EXISTS categories(
  idCategorie int (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nomCategorie varchar (50) NOT NULL
) ENGINE = InnoDB;

DROP TABLE IF EXISTS paniers;

CREATE TABLE IF NOT EXISTS paniers(
  idPanier int (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  idUtilisateur int (11) NOT NULL,
  idProduit int (11) NOT NULL,
  qteProduit int (11) NOT NULL
) ENGINE = InnoDB;

DROP TABLE IF EXISTS commandes;

CREATE TABLE IF NOT EXISTS commandes(
  idCommande int (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  idUtilisateur int (11) NOT NULL,
  idProduit int (11) NOT NULL,
  qteProduit int (11) NOT NULL
) ENGINE = InnoDB;

ALTER TABLE utilisateurs ADD CONSTRAINT utilisateurs_roles_FK FOREIGN KEY (idRole) REFERENCES roles(idRole);
ALTER TABLE produits ADD CONSTRAINT produits_categories_FK FOREIGN KEY (idCategorie) REFERENCES categories(idCategorie);
ALTER TABLE commandes ADD CONSTRAINT commandes_utilisateurs_FK FOREIGN KEY (idUtilisateur) REFERENCES utilisateurs(idUtilisateur);
ALTER TABLE commandes ADD CONSTRAINT commandes_produits_FK FOREIGN KEY (idProduit) REFERENCES produits(idProduit);
ALTER TABLE paniers ADD CONSTRAINT paniers_utilisateurs_FK FOREIGN KEY (idUtilisateur) REFERENCES utilisateurs(idUtilisateur);
ALTER TABLE paniers ADD CONSTRAINT paniers_produits_FK FOREIGN KEY (idProduit) REFERENCES produits(idProduit);

INSERT INTO roles VALUES (null,'Administrateur');
INSERT INTO roles VALUES (null,'Utilisateur');
INSERT INTO utilisateurs VALUES (null,'admin','66009c4fc388c3326c50f8677d6af203','admin@admin.fr','admin','admin','161 rue des Admins','0700000000',1);
INSERT INTO utilisateurs VALUES (null,'toto','22cec2a22e5b71a57c3cd460501737e3','toto@toto.fr','toto','toto','1 rue des Toto','0700000000',2);
INSERT INTO categories VALUES (null,'Cartes Graphiques');
INSERT INTO categories VALUES (null,'Processeurs');
INSERT INTO categories VALUES (null,'Cartes mères');
INSERT INTO produits VALUES (null,'NVIDIA RTX 3070 Founders Edition','519','IMG/prd_6088405221456.png','La GeForce RTX™ 3070 est basée sur Ampere, l’architecture NVIDIA RTX de seconde génération. Cette carte graphique ultra-puissante est dotée d’une multitude de cœurs RT et Tensor spécialement optimisés, et elle embarque de nouveaux multiprocesseurs de flux et de la mémoire G6 à haute vitesse pour faire tourner les jeux les plus exigeants en toute fluidité.',25,1);
INSERT INTO produits VALUES (null,'Gigabyte GeForce GTX 1660 Ti','319.99','IMG/prd_608829f6976bb.jpeg','La carte graphique GeForce GTX 1660 Ti OC 6G, basée sur l''architecture de pointe NVIDIA Turing promet des graphismes ultra immersifs, une VR fluide et des performances gaming à couper le souffle pour profiter de vos titres actuels et ceux à venir sereinement.',36,1);
INSERT INTO produits VALUES (null,'MSI GeForce GTX 1660 SUPER VENTUS XS OC','289.99','IMG/prd_608aec3b8c09e.jpeg','La MSI GeForce GTX 1660 SUPER VENTUS XS OC est une carte graphique gaming abordable basée sur l''architecture GPU NVIDIA Turing. Version améliorée de la GTX 1660 elle s''appuie sur la puce graphique TU116, de la VRAM GDDR6, une interface mémoire 192 bits et 1408 Cores CUDA.',18,1);
INSERT INTO produits VALUES (null,'ZOTAC GeForce GTX 1660 SUPER Twin Fan','274.99','IMG/prd_608aed263981d.jpeg','La ZOTAC GeForce GTX 1660 SUPER Twin Fan est une carte graphique gaming abordable basée sur l''architecture GPU NVIDIA Turing. Version améliorée de la GTX 1660 elle s''appuie sur la puce graphique TU116, de la VRAM GDDR6, une interface mémoire 192 bits et 1408 Cores CUDA.',42,1);
INSERT INTO produits VALUES (null,'EVGA GeForce RTX 3070 XC3 ULTRA GAMING','959.95','IMG/prd_608af3f76683b.jpeg','La carte graphique EVGA GeForce RTX 3070 XC3 ULTRA GAMING embarque 8 Go de mémoire vidéo de nouvelle génération GDDR6. Ce modèle overclocké d''usine bénéficie de fréquences de fonctionnement élevées et d''un système de refroidissement amélioré gage de fiabilité et de performances à long terme.',12,1);
INSERT INTO produits VALUES (null,'KFA2 GeForce RTX 3070 (1-Click OC)','979.95','IMG/prd_608aef587eab9.jpeg','La carte graphique KFA2 GeForce RTX 3070 (1-Click OC) embarque 8 Go de mémoire vidéo de nouvelle génération GDDR6. Ce modèle bénéficie de fréquences de fonctionnement élevées et d''un système de refroidissement amélioré gage de fiabilité et de performances à long terme.',19,1);
INSERT INTO produits VALUES (null,'AMD Ryzen 5 3600 Wraith Stealth','229.96','IMG/prd_608b00767bbdb.jpeg','Le processeur AMD Ryzen 5 3600 Wraith Stealth (3.6 GHz / 4.2 GHz) fait partie des premiers processeurs pour PC gravés en 7 nm. Ses 6 coeurs et 12 threads, une fréquence jusqu''à 4.2 GHz et 35 Mo de GameCache le rendent polyvalent, il vous permet de tout faire rapidement et en toute fluidité.',49,2);
