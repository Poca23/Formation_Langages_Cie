CREATE TABLE UTILISATEURS
(
    id INT
    AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR
    (100) NOT NULL,
    prenom VARCHAR
    (100) NOT NULL,
    email VARCHAR
    (255) UNIQUE NOT NULL,
    mot_de_passe VARCHAR
    (255) NOT NULL,
    date_inscription DATE NOT NULL
);

    CREATE TABLE FILMS
    (
        id INT
        AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR
        (255) NOT NULL,
    synopsis TEXT,
    date_sortie DATE,
    image VARCHAR
        (255),
    notation FLOAT,
    critique TEXT
);

        CREATE TABLE CATEGORIES
        (
            id INT
            AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR
            (100) NOT NULL
);

            -- FAVORIS avec distinction des listes
            CREATE TABLE FAVORIS
            (
                id INT
                AUTO_INCREMENT PRIMARY KEY,
    utilisateur_id INT NOT NULL,
    film_id INT NOT NULL,
    liste_numero TINYINT NOT NULL, -- Numéro de la liste (1 ou 2 pour les favoris)
    FOREIGN KEY
                (utilisateur_id) REFERENCES UTILISATEURS
                (id),
    FOREIGN KEY
                (film_id) REFERENCES FILMS
                (id)
);

                -- VISIONNES avec distinction des listes
                CREATE TABLE VISIONNES
                (
                    id INT
                    AUTO_INCREMENT PRIMARY KEY,
    utilisateur_id INT NOT NULL,
    film_id INT NOT NULL,
    liste_numero TINYINT NOT NULL, -- Numéro de la liste (1 ou 2 pour les visionnés)
    date_visionnage DATE NOT NULL,
    FOREIGN KEY
                    (utilisateur_id) REFERENCES UTILISATEURS
                    (id),
    FOREIGN KEY
                    (film_id) REFERENCES FILMS
                    (id)
);
