package org.cnd.projectcnd.entities;

import jakarta.persistence.*;

import java.util.Date;
import java.util.Objects;

@Entity // Indique que cette classe est une entité JPA
@Table(name = "visionnes") // Table associée dans la base de données
public class Visionnes {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY) // Génération automatique de l'ID
    private Long id; // Clé primaire

    @Column(name = "utilisateur_id", nullable = false) // Clé étrangère vers la table UTILISATEURS
    private Long utilisateurId;

    @Column(name = "film_id", nullable = false) // Clé étrangère vers la table FILMS
    private Long filmId;

    @Column(name = "liste_numero", nullable = false) // Numéro de liste (1 ou 2)
    private int listeNumero;

    @Temporal(TemporalType.DATE) // Date sans l'heure
    @Column(name = "date_visionnage", nullable = false) // Date du visionnage obligatoire
    private Date dateVisionnage;

    // Constructeurs
    public Visionnes() {
    }

    public Visionnes(Long id, Long utilisateurId, Long filmId, int listeNumero, Date dateVisionnage) {
        this.id = id;
        this.utilisateurId = utilisateurId;
        this.filmId = filmId;
        this.listeNumero = listeNumero;
        this.dateVisionnage = dateVisionnage;
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

    public Long getFilmId() {
        return filmId;
    }

    public void setFilmId(Long filmId) {
        this.filmId = filmId;
    }

    public int getListeNumero() {
        return listeNumero;
    }

    public void setListeNumero(int listeNumero) {
        this.listeNumero = listeNumero;
    }

    public Date getDateVisionnage() {
        return dateVisionnage;
    }

    public void setDateVisionnage(Date dateVisionnage) {
        this.dateVisionnage = dateVisionnage;
    }

    // Méthodes equals et hashCode
    @Override
    public boolean equals(Object o) {
        if (this == o)
            return true;
        if (o == null || getClass() != o.getClass())
            return false;
        Visionnes visionnes = (Visionnes) o;
        return listeNumero == visionnes.listeNumero &&
                Objects.equals(id, visionnes.id) &&
                Objects.equals(utilisateurId, visionnes.utilisateurId) &&
                Objects.equals(filmId, visionnes.filmId) &&
                Objects.equals(dateVisionnage, visionnes.dateVisionnage);
    }

    @Override
    public int hashCode() {
        return Objects.hash(id, utilisateurId, filmId, listeNumero, dateVisionnage);
    }
}
