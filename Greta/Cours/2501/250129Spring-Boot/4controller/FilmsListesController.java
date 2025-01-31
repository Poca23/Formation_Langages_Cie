package org.cnd.projectcnd.controllers;

import org.cnd.projectcnd.daos.FilmsListesDao;
import org.cnd.projectcnd.entities.FilmsListes;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.Date;
import java.util.List;
import java.util.Optional;

@RestController
@RequestMapping("/films-listes")
public class FilmsListesController {

    private final FilmsListesDao filmsListesDao;

    public FilmsListesController(FilmsListesDao filmsListesDao) {
        this.filmsListesDao = filmsListesDao;
    }

    // 1. Ajouter un film à une liste
    @PostMapping
    public ResponseEntity<String> addFilmToListe(@RequestParam Long listeId, @RequestParam Long filmId) {
        // Vérification si le film est déjà dans la liste
        if (filmsListesDao.existsByListeIdAndFilmId(listeId, filmId)) {
            return ResponseEntity.badRequest().body("Film déjà présent dans la liste !");
        }

        int rowsInserted = filmsListesDao.ajouterFilmAListe(listeId, filmId, new Date());
        if (rowsInserted > 0) {
            return ResponseEntity.ok("Film ajouté à la liste avec succès !");
        }
        return ResponseEntity.badRequest().build();
    }

    // 2. Obtenir tous les films d'une liste
    @GetMapping("/liste/{listeId}")
    public List<Long> getFilmsByListeId(@PathVariable Long listeId) {
        return filmsListesDao.findFilmsByListeId(listeId);
    }

    // 3. Supprimer un film spécifique d'une liste
    @DeleteMapping
    public ResponseEntity<String> deleteFilmFromListe(@RequestParam Long listeId, @RequestParam Long filmId) {
        int rowsDeleted = filmsListesDao.supprimerFilmDeListe(listeId, filmId);
        if (rowsDeleted > 0) {
            return ResponseEntity.ok("Film supprimé de la liste avec succès !");
        }
        return ResponseEntity.notFound().build();
    }

    // 4. Supprimer tous les films d'une liste
    @DeleteMapping("/liste/{listeId}/clear")
    public ResponseEntity<String> deleteAllFilmsFromListe(@PathVariable Long listeId) {
        int rowsDeleted = filmsListesDao.supprimerTousLesFilmsDeListe(listeId);
        if (rowsDeleted > 0) {
            return ResponseEntity.ok("Tous les films ont été supprimés de la liste !");
        }
        return ResponseEntity.noContent().build();
    }

    // 5. Vérifier si un film est dans une liste
    @GetMapping("/exists")
    public ResponseEntity<Boolean> checkIfFilmExistsInListe(@RequestParam Long listeId, @RequestParam Long filmId) {
        boolean exists = filmsListesDao.existsByListeIdAndFilmId(listeId, filmId);
        return ResponseEntity.ok(exists);
    }

    // 6. Nombre de films dans une liste donnée
    @GetMapping("/liste/{listeId}/count")
    public ResponseEntity<Integer> countFilmsInListe(@PathVariable Long listeId) {
        int count = filmsListesDao.countFilmsByListeId(listeId);
        return ResponseEntity.ok(count);
    }

    // 7. Obtenir toutes les entrées pour une liste donnée
    @GetMapping("/liste/{listeId}/details")
    public List<FilmsListes> getFilmsListesDetailsByListeId(@PathVariable Long listeId) {
        return filmsListesDao.findAllByListeId(listeId);
    }

    // 8. Obtenir toutes les entrées (toutes les listes et films)
    @GetMapping
    public List<FilmsListes> getAllFilmsListes() {
        return filmsListesDao.findAll();
    }

    // 9. Rechercher un film dans une liste
    @GetMapping("/find")
    public ResponseEntity<FilmsListes> findFilmInListe(@RequestParam Long listeId, @RequestParam Long filmId) {
        Optional<FilmsListes> filmsListes = filmsListesDao.findByListeIdAndFilmId(listeId, filmId);
        return filmsListes.map(ResponseEntity::ok).orElseGet(() -> ResponseEntity.notFound().build());
    }
}
