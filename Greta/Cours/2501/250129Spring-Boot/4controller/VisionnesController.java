package org.cnd.projectcnd.controllers;

import org.cnd.projectcnd.daos.VisionnesDao;
import org.cnd.projectcnd.entities.Visionnes;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.Date;
import java.util.List;
import java.util.Optional;

@RestController
@RequestMapping("/visionnes")
public class VisionnesController {

    private final VisionnesDao visionnesDao;

    public VisionnesController(VisionnesDao visionnesDao) {
        this.visionnesDao = visionnesDao;
    }

    // 1. Ajouter un nouveau film dans les visionnés
    @PostMapping
    public ResponseEntity<String> addVisionne(@RequestBody Visionnes visionne) {
        // Vérifier si le film est déjà visionné par l'utilisateur
        if (visionnesDao.existsByUtilisateurIdAndFilmId(visionne.getUtilisateurId(), visionne.getFilmId())) {
            return ResponseEntity.badRequest().body("Ce film est déjà marqué comme visionné !");
        }
        int rowsInserted = visionnesDao.save(visionne);
        if (rowsInserted > 0) {
            return ResponseEntity.ok("Film ajouté à la liste des visionnements avec succès !");
        }
        return ResponseEntity.badRequest().build();
    }

    // 2. Récupérer la liste des films visionnés d’un utilisateur
    @GetMapping("/utilisateur/{utilisateurId}")
    public List<Visionnes> getVisionnesByUtilisateurId(@PathVariable Long utilisateurId) {
        return visionnesDao.findByUtilisateurId(utilisateurId);
    }

    // 3. Supprimer un film des visionnés pour un utilisateur
    @DeleteMapping
    public ResponseEntity<String> deleteVisionne(@RequestParam Long utilisateurId, @RequestParam Long filmId) {
        int rowsDeleted = visionnesDao.delete(utilisateurId, filmId);
        if (rowsDeleted > 0) {
            return ResponseEntity.ok("Film retiré de la liste des visionnements !");
        }
        return ResponseEntity.notFound().build();
    }

    // 4. Supprimer tous les films visionnés d'un utilisateur
    @DeleteMapping("/utilisateur/{utilisateurId}")
    public ResponseEntity<String> deleteAllVisionnesByUtilisateurId(@PathVariable Long utilisateurId) {
        int rowsDeleted = visionnesDao.deleteByUtilisateurId(utilisateurId);
        if (rowsDeleted > 0) {
            return ResponseEntity.ok("Tous les films visionnés par l'utilisateur ont été supprimés !");
        }
        return ResponseEntity.noContent().build();
    }

    // 5. Vérifier si un utilisateur a visionné un film
    @GetMapping("/exists")
    public ResponseEntity<Boolean> checkIfVisionneExists(@RequestParam Long utilisateurId, @RequestParam Long filmId) {
        boolean exists = visionnesDao.existsByUtilisateurIdAndFilmId(utilisateurId, filmId);
        return ResponseEntity.ok(exists);
    }

    // 6. Récupérer tous les visionnages (pour usage administratif ou global)
    @GetMapping
    public List<Visionnes> getAllVisionnes() {
        return visionnesDao.findAll();
    }

    // 7. Trouver un visionnage spécifique pour un utilisateur et un film
    @GetMapping("/search")
    public ResponseEntity<Visionnes> findVisionne(@RequestParam Long utilisateurId, @RequestParam Long filmId) {
        try {
            Visionnes visionne = visionnesDao.findOne(utilisateurId, filmId);
            return ResponseEntity.ok(visionne);
        } catch (Exception e) {
            return ResponseEntity.notFound().build();
        }
    }

    // 8. Récupérer les films visionnés récemment pour un utilisateur
    @GetMapping("/utilisateur/{utilisateurId}/recent")
    public List<Visionnes> getRecentVisionnesByUtilisateurId(
            @PathVariable Long utilisateurId, @RequestParam int limit) {
        return visionnesDao.findRecentByUtilisateurId(utilisateurId, limit);
    }

    // 9. Mettre à jour la date du visionnage pour un utilisateur et un film
    @PutMapping
    public ResponseEntity<String> updateVisionnageDate(
            @RequestParam Long utilisateurId,
            @RequestParam Long filmId,
            @RequestParam Date nouvelleDateVisionnage) {

        int rowsUpdated = visionnesDao.updateVisionnageDate(utilisateurId, filmId, nouvelleDateVisionnage);
        if (rowsUpdated > 0) {
            return ResponseEntity.ok("Date de visionnage mise à jour avec succès !");
        }
        return ResponseEntity.badRequest().build();
    }
}
