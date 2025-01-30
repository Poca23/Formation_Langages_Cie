package com.example.movies.entity;

import java.util.Objects;

public class Favoris {
    private Long id; // Primary Key
    private Long utilisateurId; // Foreign Key vers UTILISATEURS
    private Long filmId; // Foreign Key vers FILMS
    private int listeNumero; // Numéro de la liste (1 ou 2 pour les favoris)

    // Constructeurs
    public Favoris() {
    }

    public Favoris(Long id, Long utilisateurId, Long filmId, int listeNumero) {
        this.id = id;
        this.utilisateurId = utilisateurId;
        this.filmId = filmId;
        this.listeNumero = listeNumero;
    }

    // Getters et Setters
    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public Long getUtilisateurId() {
        return utilisateurId;
    }

    public void setUtilisateurId(Long utilisateurId) {
        this.utilisateurId = utilisateurId;
    }

    public Long getFilmId() {
        return filmId;
    }

    public void setFilmId(Long filmId) {
        this.filmId = filmId;
    }

    public int getListeNumero() {
        return listeNumero;
    }

    public void setListeNumero(int listeNumero) {
        this.listeNumero = listeNumero;
    }

    // Egalité et hashCode
    @Override
    public boolean equals(Object o) {
        if (this == o)
            return true;
        if (o == null || getClass() != o.getClass())
            return false;
        Favoris favoris = (Favoris) o;
        return listeNumero == favoris.listeNumero &&
                Objects.equals(id, favoris.id) &&
                Objects.equals(utilisateurId, favoris.utilisateurId) &&
                Objects.equals(filmId, favoris.filmId);
    }

    @Override
    public int hashCode() {
        return Objects.hash(id, utilisateurId, filmId, listeNumero);
    }
}
