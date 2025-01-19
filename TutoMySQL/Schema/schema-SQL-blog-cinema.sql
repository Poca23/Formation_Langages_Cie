-- Table UTILISATEURS
CREATE TABLE UTILISATEURS
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,  -- Taille 255 pour l'email
    mot_de_passe VARCHAR(255) NOT NULL,
    date_inscription DATE NOT NULL
);

-- Table CATEGORIES (représente les genres des films)
CREATE TABLE CATEGORIES
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL  -- Exemple : Action, Comédie, Drame
);

-- Table FILMS
CREATE TABLE FILMS
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,  -- Taille de 255 caractères pour le titre
    synopsis TEXT,
    date_sortie DATE,
    image VARCHAR(255),
    notation FLOAT,
    critique TEXT
);

-- Table FILMS_CATEGORIES (table de jonction entre FILMS et CATEGORIES)
CREATE TABLE FILMS_CATEGORIES
(
    film_id INT NOT NULL,
    categorie_id INT NOT NULL,
    PRIMARY KEY (film_id, categorie_id),
    FOREIGN KEY (film_id) REFERENCES FILMS(id) ON DELETE CASCADE,
    FOREIGN KEY (categorie_id) REFERENCES CATEGORIES(id) ON DELETE CASCADE
);

-- Table FAVORIS
CREATE TABLE FAVORIS
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    utilisateur_id INT NOT NULL,
    film_id INT NOT NULL,
    liste_numero TINYINT NOT NULL,  -- Numéro de la liste (1 ou 2 pour les favoris)
    FOREIGN KEY (utilisateur_id) REFERENCES UTILISATEURS(id),
    FOREIGN KEY (film_id) REFERENCES FILMS(id)
);

-- Table VISIONNES
CREATE TABLE VISIONNES
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    utilisateur_id INT NOT NULL,
    film_id INT NOT NULL,
    liste_numero TINYINT NOT NULL,  -- Numéro de la liste (1 ou 2 pour les visionnés)
    date_visionnage DATE NOT NULL,
    FOREIGN KEY (utilisateur_id) REFERENCES UTILISATEURS(id),
    FOREIGN KEY (film_id) REFERENCES FILMS(id)
);

-- Table LISTES
CREATE TABLE LISTES
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    utilisateur_id INT NOT NULL,
    nom VARCHAR(255) NOT NULL,  -- Contrainte NOT NULL pour le nom de la liste
    type VARCHAR(50),
    FOREIGN KEY (utilisateur_id) REFERENCES UTILISATEURS(id)
);

-- Table FILMS_LISTES
CREATE TABLE FILMS_LISTES
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    liste_id INT NOT NULL,
    film_id INT NOT NULL,
    date_ajout DATE NOT NULL,
    FOREIGN KEY (liste_id) REFERENCES LISTES(id),
    FOREIGN KEY (film_id) REFERENCES FILMS(id)
);
