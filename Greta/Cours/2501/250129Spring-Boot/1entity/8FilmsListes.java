package com.example.movies.entity;

import java.util.Date;
import java.util.Objects;

public class FilmsListes {
    private Long id;
    private Long listeId; // Foreign Key vers LISTES
    private Long filmId; // Foreign Key vers FILMS
    private Date dateAjout;

    public FilmsListes() {
    }

    public FilmsListes(Long id, Long listeId, Long filmId, Date dateAjout) {
        this.id = id;
        this.listeId = listeId;
        this.filmId = filmId;
        this.dateAjout = dateAjout;
    }

    // Getters, Setters, equals et hashCode
    // ...
}
