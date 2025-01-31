package org.cnd.projectcnd.entities;

import java.time.LocalDate;

public class Film {
    private Long id; // Clé primate
    private String titre; // Titre du film
    private String synopsis; // Résumé ou description du film
    private LocalDate dateSortie; // Date de sortie
    private String image; // Lien vers une image
    private Float notation; // Note du film (exemple 8.5)
    private String critique; // Commentaire ou critique

    // Constructors
    public Film() {
    }

    public Film(Long id, String titre, String synopsis, LocalDate dateSortie, String image, Float notation,
            String critique) {
        this.id = id;
        this.titre = titre;
        this.synopsis = synopsis;
        this.dateSortie = dateSortie;
        this.image = image;
        this.notation = notation;
        this.critique = critique;
    }

    // Getters et Setters
    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getTitre() {
        return titre;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }

    public String getSynopsis() {
        return synopsis;
    }

    public void setSynopsis(String synopsis) {
        this.synopsis = synopsis;
    }

    public LocalDate getDateSortie() {
        return dateSortie;
    }

    public void setDateSortie(LocalDate dateSortie) {
        this.dateSortie = dateSortie;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public Float getNotation() {
        return notation;
    }

    public void setNotation(Float notation) {
        this.notation = notation;
    }

    public String getCritique() {
        return critique;
    }

    public void setCritique(String critique) {
        this.critique = critique;
    }
}
