package org.cnd.projectcnd.entities;

import jakarta.validation.constraints.NotBlank;
import jakarta.validation.constraints.NotNull;
import jakarta.validation.constraints.Email;
import jakarta.validation.constraints.Size;

import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;

public class Utilisateur {

    private Long id;

    @NotBlank(message = "Le nom ne peut pas être vide")
    @Size(min = 2, max = 50, message = "Le nom doit contenir entre 2 et 50 caractères")
    private String nom;

    @NotBlank(message = "Le prénom ne peut pas être vide")
    @Size(min = 2, max = 50, message = "Le prénom doit contenir entre 2 et 50 caractères")
    private String prenom;

    @NotBlank(message = "L'email ne peut pas être vide")
    @Email(message = "L'email doit être valide")
    private String email;

    @NotBlank(message = "Le mot de passe ne peut pas être vide")
    @Size(min = 8, max = 100, message = "Le mot de passe doit contenir entre 8 et 100 caractères")
    private String motDePasse;

    @NotNull(message = "La date d'inscription ne peut pas être nulle")
    private LocalDate dateInscription;

    private List<Favoris> favoris = new ArrayList<>();

    @NotBlank(message = "le rôle ne peut pas être vide")
    private String role;

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
        this.role = role;
    }

    public Utilisateur(String email, String motDePasse, String role) {
        this.email = email;
        this.motDePasse = motDePasse;
        this.role = role;
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

    // Getter role
    public String getRole() {
        return role;
    }

    // Setter role
    public String setRole(String string) {
        this.role = role;
        return "";
    }

    // Ajout d'un favoris à la liste
    public void addFavoris(Favoris favoris) {
        this.favoris.add(favoris);
        favoris.setUtilisateur(this); // Établit la relation bidirectionnelle
    }

    // Suppression d'un favoris de la liste
    public void removeFavoris(Favoris favoris) {
        this.favoris.remove(favoris);
        favoris.setUtilisateur(null); // Dissocie le favoris de l'utilisateur
    }

}
