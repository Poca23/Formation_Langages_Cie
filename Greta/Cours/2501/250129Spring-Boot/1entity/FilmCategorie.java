package org.cnd.projectcnd.entities;

import jakarta.persistence.*;
import java.io.Serializable;

@Entity
@Table(name = "films_categories") // Table intermédiaire dans la base de données
public class FilmCategorie implements Serializable { // Implémente Serializable pour une clé composite

    @Id
    @Column(name = "film_id") // Clé étrangère vers FILMS
    private Long filmId;

    @Id
    @Column(name = "categorie_id") // Clé étrangère vers CATEGORIES
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
