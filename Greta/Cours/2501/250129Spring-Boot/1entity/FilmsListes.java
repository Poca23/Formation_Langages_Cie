package org.cnd.projectcnd.entities;

import jakarta.persistence.*;

import java.util.Date;
import java.util.Objects;

@Entity // Définit cette classe comme une entité JPA
@Table(name = "films_listes") // Nom de la table associée dans la base de données
public class FilmsListes {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY) // Clé primaire auto-générée
    private Long id;

    @Column(name = "liste_id", nullable = false) // Clé étrangère vers LISTES
    private Long listeId;

    @Column(name = "film_id", nullable = false) // Clé étrangère vers FILMS
    private Long filmId;

    @Column(name = "date_ajout", nullable = false) // Date d'ajout du film à la liste
    @Temporal(TemporalType.TIMESTAMP) // Définit le type de date comme TIMESTAMP
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

    // equals et hashCode
    @Override
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

    @Override
    public int hashCode() {
        return Objects.hash(id, listeId, filmId, dateAjout);
    }
}
