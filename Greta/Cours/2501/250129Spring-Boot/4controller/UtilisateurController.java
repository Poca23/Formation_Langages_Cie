package org.cnd.projectcnd.controllers;

import org.cnd.projectcnd.daos.UtilisateurDao;
import org.cnd.projectcnd.entities.Utilisateur;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;
import java.util.Optional;

@RestController
@RequestMapping("/utilisateurs")
public class UtilisateurController {

    private final UtilisateurDao utilisateurDao;

    public UtilisateurController(UtilisateurDao utilisateurDao) {
        this.utilisateurDao = utilisateurDao;
    }

    // Récupérer tous les utilisateurs
    @GetMapping
    public List<Utilisateur> getAllUtilisateurs() {
        return utilisateurDao.findAllUtilisateurs();
    }

    // Récupérer un utilisateur par ID
    @GetMapping("/{id}")
    public ResponseEntity<Utilisateur> getUtilisateurById(@PathVariable Long id) {
        Optional<Utilisateur> utilisateur = utilisateurDao.findUtilisateurById(id);
        return utilisateur.map(ResponseEntity::ok).orElseGet(() -> ResponseEntity.notFound().build());
    }

    // Rechercher un utilisateur par email
    @GetMapping("/search")
    public ResponseEntity<Utilisateur> findUtilisateurByEmail(@RequestParam String email) {
        Optional<Utilisateur> utilisateur = utilisateurDao.findUtilisateurByEmail(email);
        return utilisateur.map(ResponseEntity::ok).orElseGet(() -> ResponseEntity.notFound().build());
    }

    // Ajouter un nouvel utilisateur
    @PostMapping
    public ResponseEntity<Utilisateur> createUtilisateur(@RequestBody Utilisateur utilisateur) {
        int rowsInserted = utilisateurDao.saveUtilisateur(utilisateur);
        if (rowsInserted > 0) {
            return ResponseEntity.ok(utilisateur);
        }
        return ResponseEntity.badRequest().build();
    }

    // Modifier les informations d'un utilisateur
    @PutMapping("/{id}")
    public ResponseEntity<Utilisateur> updateUtilisateur(@PathVariable Long id, @RequestBody Utilisateur utilisateur) {
        int rowsUpdated = utilisateurDao.updateUtilisateur(id, utilisateur);
        if (rowsUpdated > 0) {
            return ResponseEntity.ok(utilisateur); // Retourne l'utilisateur mis à jour
        }
        return ResponseEntity.notFound().build();
    }

    // Supprimer un utilisateur par ID
    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteUtilisateur(@PathVariable Long id) {
        int rowsDeleted = utilisateurDao.deleteUtilisateurById(id);
        if (rowsDeleted > 0) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }
}
