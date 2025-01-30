package com.example.movies.controller;

import com.example.movies.entity.FilmCategorie;
import com.example.movies.service.FilmCategorieService;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/api/film-categories") // Base des URL
public class FilmCategorieController {

    private final FilmCategorieService filmCategorieService;

    public FilmCategorieController(FilmCategorieService filmCategorieService) {
        this.filmCategorieService = filmCategorieService;
    }

    // Ajouter une relation entre un film et une catégorie
    @PostMapping
    public String ajouterRelation(@RequestBody FilmCategorie filmCategorie) {
        filmCategorieService.ajouterRelation(filmCategorie);
        return "Relation film-catégorie ajoutée avec succès !";
    }

    // Lister toutes les relations
    @GetMapping
    public List<FilmCategorie> getAllRelations() {
        return filmCategorieService.getAllRelations();
    }

    // Obtenir les relations pour un film donné
    @GetMapping("/film/{filmId}")
    public List<FilmCategorie> getRelationsByFilmId(@PathVariable Long filmId) {
        return filmCategorieService.getRelationsByFilmId(filmId);
    }

    // Supprimer une relation
    @DeleteMapping
    public String supprimerRelation(@RequestBody FilmCategorie filmCategorie) {
        filmCategorieService.supprimerRelation(filmCategorie);
        return "Relation film-catégorie supprimée avec succès !";
    }
}
