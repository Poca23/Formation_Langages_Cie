package com.example.movies.controller;

import com.example.movies.entity.Categorie;
import com.example.movies.service.CategorieService;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/api/categories") // URL de base pour les catégories
public class CategorieController {

    private final CategorieService categorieService;

    public CategorieController(CategorieService categorieService) {
        this.categorieService = categorieService;
    }

    // Lister toutes les catégories
    @GetMapping
    public List<Categorie> getAllCategories() {
        return categorieService.getAllCategories();
    }

    // Récupérer une catégorie par ID
    @GetMapping("/{id}")
    public Categorie getCategorieById(@PathVariable Long id) {
        return categorieService.getCategorieById(id);
    }

    // Ajouter une nouvelle catégorie
    @PostMapping
    public String ajouterCategorie(@RequestBody Categorie categorie) {
        categorieService.ajouterCategorie(categorie);
        return "Catégorie ajoutée avec succès !";
    }

    // Supprimer une catégorie par ID
    @DeleteMapping("/{id}")
    public String supprimerCategorie(@PathVariable Long id) {
        categorieService.supprimerCategorie(id);
        return "Catégorie supprimée avec succès !";
    }
}
