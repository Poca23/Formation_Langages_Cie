package org.cnd.projectcnd.entities;

import jakarta.validation.constraints.*;
import org.hibernate.validator.constraints.URL;

import java.time.LocalDate;
import java.util.Objects;

public class Film {

    private Long id; // Clé primaire

    @NotNull(message = "Le titre ne peut pas être null")
    @NotBlank(message = "Le titre ne peut pas être vide")
    @Size(min = 1, max = 100, message = "Le titre doit contenir entre 1 et 100 caractères")
    private String titre; // Titre du film

    @NotNull(message = "Le synopsis ne peut pas être null")
    @NotBlank(message = "Le synopsis ne peut pas être vide")
    @Size(min = 10, max = 1000, message = "Le synopsis doit contenir entre 10 et 1000 caractères")
    private String synopsis; // Résumé ou description du film

    @NotNull(message = "La date de sortie ne peut pas être null")
    @PastOrPresent(message = "La date de sortie ne peut pas être dans le futur")
    private LocalDate dateSortie; // Date de sortie

    @NotNull(message = "L'URL de l'image ne peut pas être null")
    @URL(message = "L'URL de l'image doit être valide")
    private String image; // Lien vers une image

    @NotNull(message = "La notation ne peut pas être null")
    @Min(value = 0, message = "La notation ne peut pas être inférieure à 0")
    @Max(value = 10, message = "La notation ne peut pas être supérieure à 10")
    private Float notation; // Note du film (exemple 8.5)

    @Size(max = 2000, message = "La critique ne peut pas dépasser 2000 caractères")
    private String critique; // Commentaire ou critique (optionnel)

    // Constructeurs
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
