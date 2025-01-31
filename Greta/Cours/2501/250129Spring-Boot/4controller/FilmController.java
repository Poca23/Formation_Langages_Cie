package org.cnd.projectcnd.controllers;

import org.cnd.projectcnd.daos.FilmDao;
import org.cnd.projectcnd.entities.Film;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/films")
public class FilmController {

    private final FilmDao filmDao;

    public FilmController(FilmDao filmDao) {
        this.filmDao = filmDao;
    }

    // Endpoint pour récupérer tous les films
    @GetMapping
    public List<Film> getAllFilms() {
        return filmDao.findAll();
    }

    // Endpoint pour récupérer un film par son ID
    @GetMapping("/{id}")
    public ResponseEntity<Film> getFilmById(@PathVariable Long id) {
        try {
            return ResponseEntity.ok(filmDao.findById(id));
        } catch (Exception e) {
            return ResponseEntity.notFound().build();
        }
    }

    // Endpoint pour rechercher des films par titre
    @GetMapping("/search")
    public List<Film> searchFilms(@RequestParam String titre) {
        return filmDao.findByTitre(titre);
    }

    // Endpoint pour créer un nouveau film
    @PostMapping
    public ResponseEntity<Film> createFilm(@RequestBody Film film) {
        int rowsInserted = filmDao.save(film);
        if (rowsInserted > 0) {
            return ResponseEntity.ok(film);
        }
        return ResponseEntity.badRequest().build();
    }

    // Endpoint pour mettre à jour un film existant
    @PutMapping("/{id}")
    public ResponseEntity<Film> updateFilm(@PathVariable Long id, @RequestBody Film updatedFilm) {
        try {
            Film film = filmDao.update(id, updatedFilm);
            return ResponseEntity.ok(film);
        } catch (Exception e) {
            return ResponseEntity.notFound().build();
        }
    }

    // Endpoint pour supprimer un film par ID
    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteFilm(@PathVariable Long id) {
        try {
            filmDao.deleteById(id);
            return ResponseEntity.noContent().build();
        } catch (Exception e) {
            return ResponseEntity.notFound().build();
        }
    }

    // Endpoint pour récupérer les catégories d'un film
    @GetMapping("/{id}/categories")
    public List<String> getCategoriesByFilmId(@PathVariable Long id) {
        return filmDao.findCategorieByFilmId(id);
    }

    // Endpoint pour associer un film à des catégories
    @PostMapping("/{id}/categories")
    public ResponseEntity<Void> addFilmToCategories(@PathVariable Long id, @RequestBody List<Long> categorieIds) {
        int rowsAdded = filmDao.addFilmToCategories(id, categorieIds);
        if (rowsAdded > 0) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.badRequest().build();
    }
}
