package org.cnd.projectcnd.controllers;

import org.cnd.projectcnd.daos.CategorieDao;
import org.cnd.projectcnd.entities.Categorie;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;
import java.util.Optional;

@RestController
@RequestMapping("/categories")
public class CategorieController {

    private final CategorieDao categorieDao;

    public CategorieController(CategorieDao categorieDao) {
        this.categorieDao = categorieDao;
    }

    // Récupérer toutes les catégories
    @GetMapping
    public List<Categorie> getAllCategories() {
        return categorieDao.findAll();
    }

    // Récupérer une catégorie par son ID
    @GetMapping("/{id}")
    public ResponseEntity<Categorie> getCategorieById(@PathVariable Long id) {
        Optional<Categorie> categorie = categorieDao.findById(id);
        return categorie.map(ResponseEntity::ok).orElseGet(() -> ResponseEntity.notFound().build());
    }

    // Ajouter une nouvelle catégorie
    @PostMapping
    public ResponseEntity<Categorie> createCategorie(@RequestBody Categorie categorie) {
        int rowsInserted = categorieDao.save(categorie);
        if (rowsInserted > 0) {
            return ResponseEntity.ok(categorie);
        }
        return ResponseEntity.badRequest().build();
    }

    // Mettre à jour une catégorie existante
    @PutMapping("/{id}")
    public ResponseEntity<Categorie> updateCategorie(@PathVariable Long id, @RequestBody String newNom) {
        int rowsUpdated = categorieDao.update(id, newNom);
        if (rowsUpdated > 0) {
            return ResponseEntity.ok(new Categorie(id, newNom)); // Retourne la catégorie mise à jour
        }
        return ResponseEntity.notFound().build();
    }

    // Supprimer une catégorie par son ID
    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteCategorie(@PathVariable Long id) {
        int rowsDeleted = categorieDao.deleteById(id);
        if (rowsDeleted > 0) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }
}
