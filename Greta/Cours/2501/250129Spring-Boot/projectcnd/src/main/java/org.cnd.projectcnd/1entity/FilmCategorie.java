package org.cnd.projectcnd.entities;

import jakarta.validation.constraints.NotNull;
import jakarta.validation.constraints.Positive;

import java.io.Serializable;
import java.util.Objects;

public class FilmCategorie implements Serializable { // Implémente Serializable pour une clé composite

    @NotNull(message = "L'ID du film ne peut pas être null")
    @Positive(message = "L'ID du film doit être un nombre positif")
    private Long filmId;

    @NotNull(message = "L'ID de la catégorie ne peut pas être null")
    @Positive(message = "L'ID de la catégorie doit être un nombre positif")
    private Long categorieId;

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
