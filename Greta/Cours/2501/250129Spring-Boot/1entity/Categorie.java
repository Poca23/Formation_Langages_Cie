package org.cnd.projectcnd.entities;

import jakarta.persistence.*;
import jakarta.validation.constraints.NotNull;
import jakarta.validation.constraints.Size;

@Entity
@Table(name = "categories") // Table dans la base de données
public class Categorie {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY) // Auto-incrémentation de l'ID
    private Long id;

    @Column(nullable = false, length = 100) // Nom de catégorie obligatoire et limité à 100 caractères
    @NotNull
    @Size(max = 100)
    private String nom;

    // Constructeur par défaut (obligatoire pour JPA)
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
