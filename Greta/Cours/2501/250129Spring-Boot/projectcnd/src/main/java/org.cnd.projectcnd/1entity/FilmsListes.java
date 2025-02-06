package org.cnd.projectcnd.entities;

import jakarta.validation.constraints.NotNull;
import jakarta.validation.constraints.PastOrPresent;
import jakarta.validation.constraints.Positive;

import java.util.Date;
import java.util.Objects;

public class FilmsListes {

    private Long id;

    @NotNull(message = "L'ID de la liste ne peut pas être null")
    @Positive(message = "L'ID de la liste doit être un nombre positif")
    private Long listeId;

    @NotNull(message = "L'ID du film ne peut pas être null")
    @Positive(message = "L'ID du film doit être un nombre positif")
    private Long filmId;

    @NotNull(message = "La date d'ajout ne peut pas être null")
    @PastOrPresent(message = "La date d'ajout ne peut pas être dans le futur")
    private Date dateAjout;

    // Constructeur par défaut
    public FilmsListes() {
        this.dateAjout = new Date();
    }

    // Constructeur complet
    public FilmsListes(Long id, Long listeId, Long filmId, Date dateAjout) {
        this.id = id;
        this.listeId = listeId;
        this.filmId = filmId;
        this.dateAjout = dateAjout;
    }

    // Getters et Setters
    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public Long getListeId() {
        return listeId;
    }

    public void setListeId(Long listeId) {
        this.listeId = listeId;
    }

    public Long getFilmId() {
        return filmId;
    }

    public void setFilmId(Long filmId) {
        this.filmId = filmId;
    }

    public Date getDateAjout() {
        return dateAjout;
    }

    public void setDateAjout(Date dateAjout) {
        this.dateAjout = dateAjout;
    }
}
