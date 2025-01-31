package org.cnd.projectcnd.entities;

import jakarta.persistence.*;

import java.util.Objects;

@Entity // Définit cette classe comme une entité JPA
@Table(name = "listes") // Nom de la table associée dans la base
public class Listes {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY) // Clé primaire auto-générée
    private Long id;

    @Column(name = "utilisateur_id", nullable = false) // Clé étrangère vers UTILISATEURS
    private Long utilisateurId;

    @Column(name = "nom", nullable = false) // Nom de la liste
    private String nom;

    @Column(name = "type", nullable = false) // Type de la liste (exemple : "Favoris", "À voir", etc.)
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

    // Equals and hashCode
    @Override
    public boolean equals(Object o) {
        if (this == o)
            return true;
        if (o == null || getClass() != o.getClass())
            return false;
        Listes listes = (Listes) o;
        return Objects.equals(id, listes.id) &&
                Objects.equals(utilisateurId, listes.utilisateurId) &&
                Objects.equals(nom, listes.nom) &&
                Objects.equals(type, listes.type);
    }

    @Override
    public int hashCode() {
        return Objects.hash(id, utilisateurId, nom, type);
    }
}
