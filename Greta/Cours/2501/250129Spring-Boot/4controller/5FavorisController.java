package com.example.movies.controller;

import com.example.movies.entity.Favoris;
import com.example.movies.service.FavorisService;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/api/favoris") // Base des URLs
public class FavorisController {

    private final FavorisService favorisService;

    public FavorisController(FavorisService favorisService) {
        this.favorisService = favorisService;
    }

    // Ajouter un film aux favoris
    @PostMapping
    public String ajouterFavori(@RequestBody Favoris favoris) {
        favorisService.ajouterFavori(favoris);
        return "Film ajouté aux favoris avec succès !";
    }

    // Récupérer les films favoris d’un utilisateur
    @GetMapping("/{utilisateurId}")
    public List<Favoris> getFavorisParUtilisateur(@PathVariable Long utilisateurId) {
        return favorisService.getFavorisByUtilisateurId(utilisateurId);
    }

    // Supprimer un film des favoris
    @DeleteMapping
    public String supprimerFavori(@RequestBody Favoris favoris) {
        favorisService.supprimerFavori(favoris);
        return "Film supprimé des favoris avec succès !";
    }
}
