package org.cnd.projectcnd.entities;

import jakarta.persistence.*;

import java.util.Objects;

public class Favoris {

    private Long id; // Clé primaire

    private Utilisateur utilisateur; // Relation avec Utilisateur

    private Film film; // Relation avec Film

    private int listeNumero; // Numéro de la liste (ex. 1 ou 2 pour les favoris)

    // Constructeurs
    public Favoris() {
    }

    public Favoris(Utilisateur utilisateur, Film film, int listeNumero) {
        this.utilisateur = utilisateur;
        this.film = film;
        this.listeNumero = listeNumero;
    }

    public Favoris(Long utilisateurId, Long filmId, int listeNumero) {
    }

    // Getters et Setters
    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public Utilisateur getUtilisateur() {
        return utilisateur;
    }

    public void setUtilisateur(Utilisateur utilisateur) {
        this.utilisateur = utilisateur;
    }

    public Film getFilm() {
        return film;
    }

    public void setFilm(Film film) {
        this.film = film;
    }

    public int getListeNumero() {
        return listeNumero;
    }

    public void setListeNumero(int listeNumero) {
        this.listeNumero = listeNumero;
    }

    // Equals et hashCode

    public boolean equals(Object o) {
        if (this == o)
            return true;
        if (o == null || getClass() != o.getClass())
            return false;
        Favoris favoris = (Favoris) o;
        return listeNumero == favoris.listeNumero &&
                Objects.equals(id, favoris.id) &&
                Objects.equals(utilisateur, favoris.utilisateur) &&
                Objects.equals(film, favoris.film);
    }

    public int hashCode() {
        return Objects.hash(id, utilisateur, film, listeNumero);
    }

    public String toString() {
        return "Favoris{" +
                "id=" + id +
                ", utilisateur=" + utilisateur +
                ", film=" + film +
                ", listeNumero=" + listeNumero +
                '}';
    }
}
