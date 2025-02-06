package org.cnd.projectcnd.controllers;

import jakarta.validation.Valid;
import org.cnd.projectcnd.entities.Favoris;
import org.cnd.projectcnd.daos.FavorisDao;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/favoris")
public class FavorisController {

    private final FavorisDao favorisDao;

    // Injection du DAO
    public FavorisController(FavorisDao favorisDao) {
        this.favorisDao = favorisDao;
    }

    // GET /favoris : Récupérer tous les favoris
    @GetMapping
    public ResponseEntity<List<Favoris>> getAllFavoris() {
        return ResponseEntity.ok(favorisDao.findAll());
    }

    // GET /favoris/{id} : Récupérer un favori par son ID
    @GetMapping("/{id}")
    public ResponseEntity<Favoris> getFavorisById(@PathVariable Long id) {
        try {
            return ResponseEntity.ok(favorisDao.findById(id));
        } catch (RuntimeException e) {
            return ResponseEntity.notFound().build();
        }
    }

    // POST /favoris : Ajouter un nouveau favori
    @PostMapping
    public ResponseEntity<Favoris> createFavoris(@Valid @RequestBody Favoris nouveauxFavoris) {
        return ResponseEntity.status(HttpStatus.CREATED).body(favorisDao.save(nouveauxFavoris));
    }

    // PUT /favoris/{id} : Mettre à jour un favori existant
    @PutMapping("/{id}")
    public ResponseEntity<Favoris> updateFavoris(@PathVariable Long id, @Valid @RequestBody Favoris favoris) {
        try {
            return ResponseEntity.ok(favorisDao.update(id, favoris));
        } catch (RuntimeException e) {
            return ResponseEntity.notFound().build();
        }
    }

    // DELETE /favoris/{id} : Supprimer un favori par son ID
    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteFavoris(@PathVariable Long id) {
        if (favorisDao.delete(id)) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }
}
