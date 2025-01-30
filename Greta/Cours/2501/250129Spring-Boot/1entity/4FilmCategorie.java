package com.example.movies.entity;

public class FilmCategorie {
    private Long filmId; // Clé étrangère vers la table FILMS
    private Long categorieId; // Clé étrangère vers la table CATEGORIES

    // Constructeurs
    public FilmCategorie() {
    }

    public FilmCategorie(Long filmId, Long categorieId) {
        this.filmId = filmId;
        this.categorieId = categorieId;
    }

    // Getters et Setters
    public Long getFilmId() {
        return filmId;
    }

    public void setFilmId(Long filmId) {
        this.filmId = filmId;
    }

    public Long getCategorieId() {
        return categorieId;
    }

    public void setCategorieId(Long categorieId) {
        this.categorieId = categorieId;
    }
}

// ⚠️ Note : Ici, pas besoin de créer de véritable table ou relation complexe
// côté ORM parce qu'on utilise JdbcTemplate. La table FILMS_CATEGORIES sera
// manipulée comme n'importe quelle autre table.