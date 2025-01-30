package com.example.movies.controller;

import com.example.movies.service.FilmsListesService;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/api/films-listes")
public class FilmsListesController {

    private final FilmsListesService filmsListesService;

    public FilmsListesController(FilmsListesService filmsListesService) {
        this.filmsListesService = filmsListesService;
    }

    // Ajouter un film à une liste
    @PostMapping("/{listeId}/{filmId}")
    public String ajouterFilmAListe(@PathVariable Long listeId, @PathVariable Long filmId) {
        filmsListesService.ajouterFilmAListe(listeId, filmId);
        return "Film ajouté à la liste avec succès !";
    }

    // Récupérer tous les films d'une liste donnée
    @GetMapping("/{listeId}")
    public List<Long> getFilmsDansListe(@PathVariable Long listeId) {
        return filmsListesService.getFilmsDansListe(listeId);
    }

    // Supprimer un film d'une liste
    @DeleteMapping("/{listeId}/{filmId}")
    public String supprimerFilmDeListe(@PathVariable Long listeId, @PathVariable Long filmId) {
        filmsListesService.supprimerFilmDeListe(listeId, filmId);
        return "Film supprimé de la liste avec succès !";
    }
}
