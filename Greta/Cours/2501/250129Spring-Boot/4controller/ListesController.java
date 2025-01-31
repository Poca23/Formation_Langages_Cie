package org.cnd.projectcnd.controllers;

import org.cnd.projectcnd.daos.ListesDao;
import org.cnd.projectcnd.entities.Listes;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;
import java.util.Optional;

@RestController
@RequestMapping("/listes")
public class ListesController {

    private final ListesDao listesDao;

    public ListesController(ListesDao listesDao) {
        this.listesDao = listesDao;
    }

    // 1. Ajouter une nouvelle liste pour un utilisateur
    @PostMapping
    public ResponseEntity<String> addListe(@RequestBody Listes liste) {
        // Vérification: existe déjà une liste avec le même nom pour cet utilisateur ?
        if (listesDao.existsByUtilisateurIdAndNom(liste.getUtilisateurId(), liste.getNom())) {
            return ResponseEntity.badRequest().body("Une liste avec ce nom existe déjà pour l'utilisateur !");
        }

        int rowsInserted = listesDao.save(liste);
        if (rowsInserted > 0) {
            return ResponseEntity.ok("Liste ajoutée avec succès !");
        }
        return ResponseEntity.badRequest().build();
    }

    // 2. Récupérer toutes les listes liées à un utilisateur
    @GetMapping("/utilisateur/{utilisateurId}")
    public List<Listes> getListesByUtilisateurId(@PathVariable Long utilisateurId) {
        return listesDao.findByUtilisateurId(utilisateurId);
    }

    // 3. Trouver une liste par ID
    @GetMapping("/{id}")
    public ResponseEntity<Listes> getListeById(@PathVariable Long id) {
        Optional<Listes> liste = listesDao.findById(id);
        return liste.map(ResponseEntity::ok).orElseGet(() -> ResponseEntity.notFound().build());
    }

    // 4. Supprimer une liste par son ID
    @DeleteMapping("/{id}")
    public ResponseEntity<String> deleteListeById(@PathVariable Long id) {
        int rowsDeleted = listesDao.deleteById(id);
        if (rowsDeleted > 0) {
            return ResponseEntity.ok("Liste supprimée avec succès !");
        }
        return ResponseEntity.notFound().build();
    }

    // 5. Mettre à jour une liste
    @PutMapping("/{id}")
    public ResponseEntity<String> updateListe(@PathVariable Long id, @RequestBody Listes updatedListe) {
        // Vérification : la liste doit exister pour pouvoir la mettre à jour
        Optional<Listes> existingListe = listesDao.findById(id);
        if (existingListe.isEmpty()) {
            return ResponseEntity.notFound().build();
        }

        updatedListe.setId(id); // Associer l'ID de l'entrée existante
        int rowsUpdated = listesDao.update(updatedListe);
        if (rowsUpdated > 0) {
            return ResponseEntity.ok("Liste mise à jour avec succès !");
        }
        return ResponseEntity.badRequest().build();
    }

    // 6. Récupérer toutes les listes d'un type spécifique pour un utilisateur
    @GetMapping("/utilisateur/{utilisateurId}/type/{type}")
    public List<Listes> getListesByUtilisateurIdAndType(@PathVariable Long utilisateurId, @PathVariable String type) {
        return listesDao.findByUtilisateurIdAndType(utilisateurId, type);
    }

    // 7. Supprimer toutes les listes associées à un utilisateur
    @DeleteMapping("/utilisateur/{utilisateurId}")
    public ResponseEntity<String> deleteAllListesByUtilisateurId(@PathVariable Long utilisateurId) {
        int rowsDeleted = listesDao.deleteByUtilisateurId(utilisateurId);
        if (rowsDeleted > 0) {
            return ResponseEntity.ok("Toutes les listes de l'utilisateur ont été supprimées !");
        }
        return ResponseEntity.noContent().build();
    }

    // 8. Vérifier si une liste existe pour un utilisateur avec un nom spécifique
    @GetMapping("/exists")
    public ResponseEntity<Boolean> checkIfListeExists(@RequestParam Long utilisateurId, @RequestParam String nom) {
        boolean exists = listesDao.existsByUtilisateurIdAndNom(utilisateurId, nom);
        return ResponseEntity.ok(exists);
    }

    // 9. Récupérer toutes les listes (utiles pour diagnostics ou administration)
    @GetMapping
    public List<Listes> getAllListes() {
        return listesDao.findAll();
    }
}
