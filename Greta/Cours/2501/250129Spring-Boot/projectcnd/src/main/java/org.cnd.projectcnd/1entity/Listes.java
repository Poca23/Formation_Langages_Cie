package org.cnd.projectcnd.entities;

import jakarta.validation.constraints.NotBlank;
import jakarta.validation.constraints.NotNull;
import jakarta.validation.constraints.Positive;
import jakarta.validation.constraints.Size;

import java.util.Objects;

public class Listes {

    private Long id;

    @NotNull(message = "L'ID de l'utilisateur ne peut pas être null")
    @Positive(message = "L'ID de l'utilisateur doit être un nombre positif")
    private Long utilisateurId;

    @NotBlank(message = "Le nom ne peut pas être vide")
    @Size(min = 1, max = 100, message = "Le nom doit contenir entre 1 et 100 caractères")
    private String nom;

    @NotBlank(message = "Le type ne peut pas être vide")
    @Size(min = 1, max = 50, message = "Le type doit contenir entre 1 et 50 caractères")
    private String type;

    // Constructeur par défaut
    public Listes() {
    }

    // Constructeur complet
    public Listes(Long id, Long utilisateurId, String nom, String type) {
        this.id = id;
        this.utilisateurId = utilisateurId;
        this.nom = nom;
        this.type = type;
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

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }
}
