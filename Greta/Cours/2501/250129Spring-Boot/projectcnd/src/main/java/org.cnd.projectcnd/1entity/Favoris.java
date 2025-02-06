package org.cnd.projectcnd.entities;

import jakarta.validation.constraints.*;
import jakarta.validation.Valid;

import java.util.Objects;

public class Favoris {

    private Long id; // Clé primaire

    @NotNull(message = "L'utilisateur ne peut pas être null")
    @Valid // Pour valider l'objet Utilisateur imbriqué
    private Utilisateur utilisateur; // Relation avec Utilisateur

    @NotNull(message = "Le film ne peut pas être null")
    @Valid // Pour valider l'objet Film imbriqué
    private Film film; // Relation avec Film

    @Min(value = 1, message = "Le numéro de liste doit être au minimum 1")
    @Max(value = 2, message = "Le numéro de liste ne peut pas dépasser 2")
    @PositiveOrZero(message = "Le numéro de liste doit être positif")
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
}
