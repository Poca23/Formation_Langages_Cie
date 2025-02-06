package org.cnd.projectcnd.controllers;

import jakarta.validation.Valid;
import org.cnd.projectcnd.entities.FilmCategorie;
import org.cnd.projectcnd.daos.FilmCategorieDao;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/film-categories")
public class FilmCategorieController {

    private final FilmCategorieDao filmCategorieDao;

    // Injection du DAO
    public FilmCategorieController(FilmCategorieDao filmCategorieDao) {
        this.filmCategorieDao = filmCategorieDao;
    }

    // Récupérer toutes les associations Film-Catégorie
    @GetMapping
    public ResponseEntity<List<FilmCategorie>> getAllFilmCategories() {
        return ResponseEntity.ok(filmCategorieDao.findAll());
    }

    // Récupérer toutes les catégories associées à un film donné
    @GetMapping("/films/{filmId}/categories")
    public ResponseEntity<List<Long>> getCategoriesByFilmId(@PathVariable Long filmId) {
        return ResponseEntity.ok(filmCategorieDao.findCategoriesByFilmId(filmId));
    }

    // Récupérer tous les films associés à une catégorie donnée
    @GetMapping("/categories/{categorieId}/films")
    public ResponseEntity<List<Long>> getFilmsByCategorieId(@PathVariable Long categorieId) {
        return ResponseEntity.ok(filmCategorieDao.findFilmsByCategorieId(categorieId));
    }

    // Ajouter une nouvelle association Film-Catégorie
    @PostMapping
    public ResponseEntity<FilmCategorie> createFilmCategorie(@Valid @RequestBody FilmCategorie filmCategorie) {
        return ResponseEntity.status(HttpStatus.CREATED).body(filmCategorieDao.save(filmCategorie));
    }

    // Supprimer une association spécifique Film-Catégorie
    @DeleteMapping("/films/{filmId}/categories/{categorieId}")
    public ResponseEntity<Void> deleteFilmCategorie(@PathVariable Long filmId, @PathVariable Long categorieId) {
        if (filmCategorieDao.deleteByFilmAndCategorie(filmId, categorieId)) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }

    // Supprimer toutes les associations pour un film donné
    @DeleteMapping("/films/{filmId}")
    public ResponseEntity<Void> deleteAssociationsByFilmId(@PathVariable Long filmId) {
        if (filmCategorieDao.deleteByFilmId(filmId)) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }

    // Supprimer toutes les associations pour une catégorie donnée
    @DeleteMapping("/categories/{categorieId}")
    public ResponseEntity<Void> deleteAssociationsByCategorieId(@PathVariable Long categorieId) {
        if (filmCategorieDao.deleteByCategorieId(categorieId)) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }
}
