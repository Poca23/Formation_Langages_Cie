package org.cnd.projectcnd.entities;

import java.util.Date;
import java.util.Objects;

public class Visionnes {

    private Long id; // Clé primaire
    private Long utilisateurId;
    private Long filmId;
    private int listeNumero;
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
}