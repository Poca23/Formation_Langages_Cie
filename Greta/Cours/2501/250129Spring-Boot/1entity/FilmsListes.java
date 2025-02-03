package org.cnd.projectcnd.entities;

import jakarta.persistence.*;

import java.util.Date;
import java.util.Objects;

public class FilmsListes {

    private Long id;

    private Long listeId;

    private Long filmId;

    private Date dateAjout;

    // Constructeur par défaut
    public FilmsListes() {
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

    public boolean equals(Object o) {
        if (this == o)
            return true;
        if (o == null || getClass() != o.getClass())
            return false;
        FilmsListes that = (FilmsListes) o;
        return Objects.equals(id, that.id) &&
                Objects.equals(listeId, that.listeId) &&
                Objects.equals(filmId, that.filmId) &&
                Objects.equals(dateAjout, that.dateAjout);
    }

    public int hashCode() {
        return Objects.hash(id, listeId, filmId, dateAjout);
    }
}
