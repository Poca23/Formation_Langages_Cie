package com.example.movies.controller;

import com.example.movies.entity.Film;
import com.example.movies.service.FilmService;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/api/films") // URL de base pour les films
public class FilmController {

    private final FilmService filmService;

    public FilmController(FilmService filmService) {
        this.filmService = filmService;
    }

    // Lister tous les films
    @GetMapping
    public List<Film> getAllFilms() {
        return filmService.getAllFilms();
    }

    // Récupérer un film par ID
    @GetMapping("/{id}")
    public Film getFilmById(@PathVariable Long id) {
        return filmService.getFilmById(id);
    }

    // Ajouter un film
    @PostMapping
    public String ajouterFilm(@RequestBody Film film) {
        filmService.ajouterFilm(film);
        return "Film ajouté avec succès !";
    }

    // Supprimer un film par ID
    @DeleteMapping("/{id}")
    public String supprimerFilm(@PathVariable Long id) {
        filmService.supprimerFilm(id);
        return "Film supprimé avec succès !";
    }
}
