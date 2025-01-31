package org.cnd.projectcnd.controllers;

import org.cnd.projectcnd.daos.FavorisDao;
import org.cnd.projectcnd.entities.Favoris;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/favoris")
public class FavorisController {

    private final FavorisDao favorisDao;

    public FavorisController(FavorisDao favorisDao) {
        this.favorisDao = favorisDao;
    }

    // Récupérer tous les favoris
    @GetMapping
    public List<Favoris> getAllFavoris() {
        return favorisDao.trouverTous();
    }

    // Récupérer un favori par son ID
    @GetMapping("/{id}")
    public ResponseEntity<Favoris> getFavorisById(@PathVariable Long id) {
        Favoris favoris = favorisDao.trouverParId(id);
        if (favoris != null) {
            return ResponseEntity.ok(favoris);
        }
        return ResponseEntity.notFound().build();
    }

    // Récupérer les favoris d'un utilisateur spécifique
    @GetMapping("/utilisateur/{utilisateurId}")
    public List<Favoris> getFavorisByUtilisateur(@PathVariable Long utilisateurId) {
        return favorisDao.trouverParUtilisateurId(utilisateurId);
    }

    // Récupérer les favoris d'une liste spécifique pour un utilisateur
    @GetMapping("/utilisateur/{utilisateurId}/liste/{listeNumero}")
    public List<Favoris> getFavorisByUtilisateurAndListe(@PathVariable Long utilisateurId,
            @PathVariable int listeNumero) {
        return favorisDao.trouverParUtilisateurEtListe(utilisateurId, listeNumero);
    }

    // Ajouter un nouveau favori (avec relations directes)
    @PostMapping
    public ResponseEntity<Favoris> addFavoris(@RequestBody Favoris favoris) {
        Favoris savedFavoris = favorisDao.ajouterFavoris(favoris);
        return ResponseEntity.ok(savedFavoris);
    }

    // Ajouter un nouveau favori en utilisant les IDs d'utilisateur et de film
    @PostMapping("/ajouter")
    public ResponseEntity<Favoris> addFavorisWithIds(@RequestParam Long utilisateurId, @RequestParam Long filmId,
            @RequestParam int listeNumero) {
        Favoris favoris = favorisDao.ajouterFavoris(utilisateurId, filmId, listeNumero);
        return ResponseEntity.ok(favoris);
    }

    // Mettre à jour le numéro de liste d'un favori
    @PutMapping("/{id}")
    public ResponseEntity<Favoris> updateFavoris(@PathVariable Long id, @RequestBody int nouveauNumeroListe) {
        Favoris updatedFavoris = favorisDao.mettreAJourFavoris(id, nouveauNumeroListe);
        if (updatedFavoris != null) {
            return ResponseEntity.ok(updatedFavoris);
        }
        return ResponseEntity.notFound().build();
    }

    // Supprimer un favori par son ID
    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteFavoris(@PathVariable Long id) {
        Favoris favoris = favorisDao.trouverParId(id);
        if (favoris != null) {
            favorisDao.supprimerParId(id);
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }
}
