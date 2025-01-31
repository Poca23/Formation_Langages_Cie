package org.cnd.projectcnd.controllers;

import org.cnd.projectcnd.daos.FilmCategorieDao;
import org.cnd.projectcnd.entities.FilmCategorie;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/films-categories")
public class FilmCategorieController {

    private final FilmCategorieDao filmCategorieDao;

    public FilmCategorieController(FilmCategorieDao filmCategorieDao) {
        this.filmCategorieDao = filmCategorieDao;
    }

    // 1. Ajouter une relation entre un film et une catégorie
    @PostMapping
    public ResponseEntity<FilmCategorie> addFilmCategorie(@RequestBody FilmCategorie filmCategorie) {
        int rowsInserted = filmCategorieDao.save(filmCategorie);
        if (rowsInserted > 0) {
            return ResponseEntity.ok(filmCategorie);
        }
        return ResponseEntity.badRequest().build();
    }

    // 2. Obtenir toutes les relations film-catégorie
    @GetMapping
    public List<FilmCategorie> getAllFilmCategorie() {
        return filmCategorieDao.findAll();
    }

    // 3. Obtenir les catégories associées à un film donné
    @GetMapping("/film/{filmId}")
    public List<FilmCategorie> getFilmCategoriesByFilmId(@PathVariable Long filmId) {
        return filmCategorieDao.findByFilmId(filmId);
    }

    // 4. Supprimer une relation entre un film et une catégorie
    @DeleteMapping
    public ResponseEntity<Void> deleteFilmCategorie(@RequestBody FilmCategorie filmCategorie) {
        int rowsDeleted = filmCategorieDao.delete(filmCategorie);
        if (rowsDeleted > 0) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }

    // 5. Supprimer toutes les relations pour un film donné
    @DeleteMapping("/film/{filmId}")
    public ResponseEntity<Void> deleteByFilmId(@PathVariable Long filmId) {
        int rowsDeleted = filmCategorieDao.deleteByFilmId(filmId);
        if (rowsDeleted > 0) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }

    // 6. Supprimer toutes les relations pour une catégorie donnée
    @DeleteMapping("/categorie/{categorieId}")
    public ResponseEntity<Void> deleteByCategorieId(@PathVariable Long categorieId) {
        int rowsDeleted = filmCategorieDao.deleteByCategorieId(categorieId);
        if (rowsDeleted > 0) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }
}
