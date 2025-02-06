package org.cnd.projectcnd.controllers;

import jakarta.validation.Valid;
import org.cnd.projectcnd.entities.FilmsListes;
import org.cnd.projectcnd.daos.FilmsListesDao;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/films-listes")
public class FilmsListesController {

    private final FilmsListesDao filmsListesDao;

    public FilmsListesController(FilmsListesDao filmsListesDao) {
        this.filmsListesDao = filmsListesDao;
    }

    @GetMapping
    public ResponseEntity<List<FilmsListes>> getAllFilmsListes() {
        return ResponseEntity.ok(filmsListesDao.findAll());
    }

    @GetMapping("/listes/{listeId}")
    public ResponseEntity<List<FilmsListes>> getFilmsByListeId(@PathVariable Long listeId) {
        return ResponseEntity.ok(filmsListesDao.findByListeId(listeId));
    }

    @GetMapping("/films/{filmId}")
    public ResponseEntity<List<FilmsListes>> getListesByFilmId(@PathVariable Long filmId) {
        return ResponseEntity.ok(filmsListesDao.findByFilmId(filmId));
    }

    @PostMapping
    public ResponseEntity<FilmsListes> createFilmsListes(@Valid @RequestBody FilmsListes filmsListes) {
        return ResponseEntity.status(HttpStatus.CREATED).body(filmsListesDao.save(filmsListes));
    }

    @DeleteMapping("/listes/{listeId}/films/{filmId}")
    public ResponseEntity<Void> deleteByListeAndFilm(@PathVariable Long listeId, @PathVariable Long filmId) {
        if (filmsListesDao.deleteByListeAndFilm(listeId, filmId)) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteById(@PathVariable Long id) {
        if (filmsListesDao.deleteById(id)) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }

    @DeleteMapping("/listes/{listeId}")
    public ResponseEntity<Void> deleteByListeId(@PathVariable Long listeId) {
        if (filmsListesDao.deleteByListeId(listeId)) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }

    @DeleteMapping("/films/{filmId}")
    public ResponseEntity<Void> deleteByFilmId(@PathVariable Long filmId) {
        if (filmsListesDao.deleteByFilmId(filmId)) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }
}
