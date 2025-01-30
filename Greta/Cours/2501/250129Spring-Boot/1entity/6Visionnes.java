package com.example.movies.entity;

import java.util.Date;
import java.util.Objects;

public class Visionnes {
    private Long id; // Primary Key
    private Long utilisateurId; // Foreign Key vers UTILISATEURS
    private Long filmId; // Foreign Key vers FILMS
    private int listeNumero; // Numéro de la liste (1 ou 2 pour les visionnés)
    private Date dateVisionnage; // Date du visionnage

    // Constructeurs
    public Visionnes() {
    }

    public Visionnes(Long id, Long utilisateurId, Long filmId, int listeNumero, Date dateVisionnage) {
        this.id = id;
        this.utilisateurId = utilisateurId;
        this.filmId = filmId;
        this.listeNumero = listeNumero;
        this.dateVisionnage = dateVisionnage;
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

    public Date getDateVisionnage() {
        return dateVisionnage;
    }

    public void setDateVisionnage(Date dateVisionnage) {
        this.dateVisionnage = dateVisionnage;
    }

    // Egalité et hashCode
    @Override
    public boolean equals(Object o) {
        if (this == o)
            return true;
        if (o == null || getClass() != o.getClass())
            return false;
        Visionnes visionnes = (Visionnes) o;
        return listeNumero == visionnes.listeNumero &&
                Objects.equals(id, visionnes.id) &&
                Objects.equals(utilisateurId, visionnes.utilisateurId) &&
                Objects.equals(filmId, visionnes.filmId) &&
                Objects.equals(dateVisionnage, visionnes.dateVisionnage);
    }

    @Override
    public int hashCode() {
        return Objects.hash(id, utilisateurId, filmId, listeNumero, dateVisionnage);
    }
}
