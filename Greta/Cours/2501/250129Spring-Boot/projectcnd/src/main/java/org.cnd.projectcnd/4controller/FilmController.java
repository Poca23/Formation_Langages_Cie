package org.cnd.projectcnd.controllers;

import jakarta.validation.Valid;
import org.cnd.projectcnd.entities.Film;
import org.cnd.projectcnd.daos.FilmDao;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/films")
public class FilmController {

    private final FilmDao filmDao;

    // Injection de dépendance
    public FilmController(FilmDao filmDao) {
        this.filmDao = filmDao;
    }

    // GET /films : Récupérer tous les films
    @GetMapping
    public ResponseEntity<List<Film>> getAllFilms() {
        return ResponseEntity.ok(filmDao.findAll());
    }

    // GET /films/{id} : Récupérer un film par son ID
    @GetMapping("/{id}")
    public ResponseEntity<Film> getFilmById(@PathVariable Long id) {
        try {
            return ResponseEntity.ok(filmDao.findById(id));
        } catch (RuntimeException e) {
            return ResponseEntity.notFound().build();
        }
    }

    // POST /films : Ajouter un nouveau film
    @PostMapping
    public ResponseEntity<Film> createFilm(@Valid @RequestBody Film film) {
        return ResponseEntity.status(HttpStatus.CREATED).body(filmDao.save(film));
    }

    // PUT /films/{id} : Mettre à jour un film existant
    @PutMapping("/{id}")
    public ResponseEntity<Film> updateFilm(@PathVariable Long id, @Valid @RequestBody Film updatedFilm) {
        try {
            return ResponseEntity.ok(filmDao.update(id, updatedFilm));
        } catch (RuntimeException e) {
            return ResponseEntity.notFound().build();
        }
    }

    // DELETE /films/{id} : Supprimer un film par son ID
    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteFilm(@PathVariable Long id) {
        if (filmDao.delete(id)) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }
}
