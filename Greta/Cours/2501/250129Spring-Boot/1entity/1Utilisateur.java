package com.example.movies.entity;

import jakarta.persistence.*;
import java.time.LocalDate;
import java.util.List;

@Entity
@Table(name = "UTILISATEURS") // Liée à la table SQL UTILISATEURS
public class Utilisateur {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY) // Auto-incrémentation
    private Long id;

    @Column(nullable = false, length = 100) // Correspond à VARCHAR(100)
    private String nom;

    @Column(nullable = false, length = 100) // Correspond à VARCHAR(100)
    private String prenom;

    @Column(nullable = false, unique = true, length = 255) // L'email est unique
    private String email;

    @Column(nullable = false, length = 255) // Mot de passe crypté
    private String motDePasse;

    @Column(name = "date_inscription", nullable = false) // Correspond à SQL DATE
    private LocalDate dateInscription;

    // Exemple d'association : un utilisateur peut avoir plusieurs favoris (films)
    @OneToMany(mappedBy = "utilisateur", cascade = CascadeType.ALL, orphanRemoval = true)
    private List<Favori> favoris;

    @OneToMany(mappedBy = "utilisateur", cascade = CascadeType.ALL, orphanRemoval = true)
    private List<Visionne> visionnes;

    // Constructeurs
    public Utilisateur() {
    }

    public Utilisateur(Long id, String nom, String prenom, String email, String motDePasse, LocalDate dateInscription) {
        this.id = id;
        this.nom = nom;
        this.prenom = prenom;
        this.email = email;
        this.motDePasse = motDePasse;
        this.dateInscription = dateInscription;
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

    public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getMotDePasse() {
        return motDePasse;
    }

    public void setMotDePasse(String motDePasse) {
        this.motDePasse = motDePasse;
    }

    public LocalDate getDateInscription() {
        return dateInscription;
    }

    public void setDateInscription(LocalDate dateInscription) {
        this.dateInscription = dateInscription;
    }

    public List<Favori> getFavoris() {
        return favoris;
    }

    public void setFavoris(List<Favori> favoris) {
        this.favoris = favoris;
    }

    public List<Visionne> getVisionnes() {
        return visionnes;
    }

    public void setVisionnes(List<Visionne> visionnes) {
        this.visionnes = visionnes;
    }
}
