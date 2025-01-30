// package com.example.movies.entity;

public class Categorie {
    private Long id; // Clé primaire
    private String nom; // Nom de la catégorie (Exemple : Action, Comédie, etc.)

    // Constructeurs
    public Categorie() {
    }

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
