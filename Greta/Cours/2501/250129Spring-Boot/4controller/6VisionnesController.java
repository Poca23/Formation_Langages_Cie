package com.example.movies.controller;

import com.example.movies.entity.Visionnes;
import com.example.movies.service.VisionnesService;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/api/visionnes") // Base des URLs
public class VisionnesController {

    private final VisionnesService visionnesService;

    public VisionnesController(VisionnesService visionnesService) {
        this.visionnesService = visionnesService;
    }

    // Ajouter un film à la liste des visionnés
    @PostMapping
    public String ajouterFilmVisionne(@RequestBody Visionnes visionnes) {
        visionnesService.ajouterFilmVisionne(visionnes);
        return "Film ajouté à la liste des visionnés avec succès !";
    }

    // Récupérer la liste des films visionnés d’un utilisateur
    @GetMapping("/{utilisateurId}")
    public List<Visionnes> getFilmsVisionnes(@PathVariable Long utilisateurId) {
        return visionnesService.getFilmsVisionnesParUtilisateur(utilisateurId);
    }

    // Supprimer un film de la liste des visionnés
    @DeleteMapping("/{utilisateurId}/{filmId}")
    public String supprimerFilmVisionne(@PathVariable Long utilisateurId, @PathVariable Long filmId) {
        visionnesService.supprimerFilmVisionne(utilisateurId, filmId);
        return "Film supprimé de la liste des visionnés avec succès !";
    }
}
