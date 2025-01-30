package com.example.movies.controller;

import com.example.movies.entity.Listes;
import com.example.movies.service.ListesService;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/api/listes") // Base des URLs
public class ListesController {

    private final ListesService listesService;

    public ListesController(ListesService listesService) {
        this.listesService = listesService;
    }

    // Ajouter une nouvelle liste
    @PostMapping
    public String ajouterNouvelleListe(@RequestBody Listes liste) {
        listesService.ajouterNouvelleListe(liste);
        return "Nouvelle liste ajoutée avec succès !";
    }

    // Récupérer les listes d'un utilisateur
    @GetMapping("/{utilisateurId}")
    public List<Listes> getListesUtilisateur(@PathVariable Long utilisateurId) {
        return listesService.getListesParUtilisateur(utilisateurId);
    }

    // Supprimer une liste
    @DeleteMapping("/{listeId}")
    public String supprimerListe(@PathVariable Long listeId) {
        listesService.supprimerListe(listeId);
        return "Liste supprimée avec succès !";
    }
}
