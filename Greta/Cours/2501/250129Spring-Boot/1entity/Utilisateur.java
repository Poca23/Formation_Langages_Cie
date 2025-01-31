package org.cnd.projectcnd.entities;

import jakarta.persistence.*;
import jakarta.validation.constraints.Email;
import jakarta.validation.constraints.NotNull;
import jakarta.validation.constraints.Size;

import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;

@Entity
@Table(name = "UTILISATEURS", uniqueConstraints = {
        @UniqueConstraint(columnNames = "email") // Assure que l'email est unique
})
public class Utilisateur {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY) // Génère automatiquement les IDs
    private Long id;

    @Column(nullable = false, length = 100) // Nom obligatoire avec une limite de 100 caractères
    @NotNull
    @Size(max = 100)
    private String nom;

    @Column(nullable = false, length = 100) // Prénom obligatoire avec une limite de 100 caractères
    @NotNull
    @Size(max = 100)
    private String prenom;

    @Column(nullable = false, unique = true, length = 100) // Email unique et obligatoire
    @NotNull
    @Email
    @Size(max = 100)
    private String email;

    @Column(nullable = false, length = 255) // Mot de passe obligatoire
    @NotNull
    @Size(max = 255)
    private String motDePasse;

    @Column(nullable = false) // Date d'inscription obligatoire
    @NotNull
    private LocalDate dateInscription;

    @OneToMany(mappedBy = "utilisateur", cascade = CascadeType.ALL, orphanRemoval = true)
    private List<Favoris> favoris = new ArrayList<>();

    // Constructeur par défaut
    public Utilisateur() {
    }

    // Constructeur avec paramètres
    public Utilisateur(String nom, String prenom, String email, String motDePasse, LocalDate dateInscription) {
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

    public List<Favoris> getFavoris() {
        return favoris;
    }

    public void setFavoris(List<Favoris> favoris) {
        this.favoris = favoris;
    }

    // Ajout d’un favoris à la liste
    public void addFavoris(Favoris favori) {
        this.favoris.add(favori);
        favori.setUtilisateur(this); // Établit la relation bidirectionnelle
    }

    // Suppression d’un favoris de la liste
    public void removeFavoris(Favoris favori) {
        this.favoris.remove(favori);
        favori.setUtilisateur(null); // Dissocie le favoris de l'utilisateur
    }
}
