package com.example.movies.controller;

import com.example.movies.entity.Utilisateur;
import com.example.movies.service.UtilisateurService;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/api/utilisateurs")
public class UtilisateurController {

    private final UtilisateurService utilisateurService;

    public UtilisateurController(UtilisateurService utilisateurService) {
        this.utilisateurService = utilisateurService;
    }

    // Lister tous les utilisateurs
    @GetMapping
    public List<Utilisateur> getAllUtilisateurs() {
        return utilisateurService.getAllUtilisateurs();
    }

    // Obtenir un utilisateur par ID
    @GetMapping("/{id}")
    public Utilisateur getUtilisateurById(@PathVariable Long id) {
        return utilisateurService.getUtilisateurById(id);
    }

    // Ajouter un utilisateur
    @PostMapping
    public String ajouterUtilisateur(@RequestBody Utilisateur utilisateur) {
        utilisateurService.ajouterUtilisateur(utilisateur);
        return "Utilisateur ajouté avec succès !";
    }

    // Supprimer un utilisateur par ID
    @DeleteMapping("/{id}")
    public String supprimerUtilisateur(@PathVariable Long id) {
        utilisateurService.supprimerUtilisateur(id);
        return "Utilisateur supprimé avec succès !";
    }
}
