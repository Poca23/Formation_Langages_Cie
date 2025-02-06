package org.cnd.projectcnd.entities;

import jakarta.validation.constraints.NotBlank;
import jakarta.validation.constraints.Size;

public class Categorie {

    private Long id;

    @NotBlank(message = "C'est vide wesh") // ①
    @Size(min = 2, message = "Minimum 2 et maximum 100 caractères impudent")
    private String nom;

    public Categorie() {
    }

    // Constructeur avec paramètres
    public Categorie(Long id, String nom) {
        this.id = id;
        this.nom = nom;
    }

    // Getters et Setters
    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }
}
