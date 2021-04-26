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


-- INSERT INTO `utilisateurs` (`idUtilisateur`, `nom`, `prenom`, `motDePasse`, `adresseMail`, `role`, `pseudo`) VALUES
-- (7, 'ad', 'ad', '11d437a3e6695447bd1bf2331651049e', 'ad', 1, 'ad'),
-- (8, 'u', 'u', '1d0a5a28d53430e7f2293a1f36682f23', 'u', 2, 'u');