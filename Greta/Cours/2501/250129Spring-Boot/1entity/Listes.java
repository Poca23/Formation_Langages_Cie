package org.cnd.projectcnd.entities;

import jakarta.persistence.*;

import java.util.Objects;

public class Listes {

    private Long id;

    private Long utilisateurId;

    private String nom;

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

    public int hashCode() {
        return Objects.hash(id, utilisateurId, nom, type);
    }
}
