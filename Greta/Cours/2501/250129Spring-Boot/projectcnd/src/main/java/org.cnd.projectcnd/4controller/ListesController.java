package org.cnd.projectcnd.controllers;

import jakarta.validation.Valid;
import org.cnd.projectcnd.entities.Listes;
import org.cnd.projectcnd.daos.ListesDao;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/listes")
public class ListesController {

    private final ListesDao listesDao;

    public ListesController(ListesDao listesDao) {
        this.listesDao = listesDao;
    }

    @GetMapping
    public ResponseEntity<List<Listes>> getAllListes() {
        return ResponseEntity.ok(listesDao.findAll());
    }

    @GetMapping("/{id}")
    public ResponseEntity<Listes> getListeById(@PathVariable Long id) {
        try {
            return ResponseEntity.ok(listesDao.findById(id));
        } catch (RuntimeException e) {
            return ResponseEntity.notFound().build();
        }
    }

    @GetMapping("/utilisateurs/{utilisateurId}")
    public ResponseEntity<List<Listes>> getListesByUtilisateurId(@PathVariable Long utilisateurId) {
        return ResponseEntity.ok(listesDao.findByUtilisateurId(utilisateurId));
    }

    @PostMapping
    public ResponseEntity<Listes> createListe(@Valid @RequestBody Listes liste) {
        return ResponseEntity.status(HttpStatus.CREATED).body(listesDao.save(liste));
    }

    @PutMapping("/{id}")
    public ResponseEntity<Listes> updateListe(@PathVariable Long id, @Valid @RequestBody Listes updatedListe) {
        try {
            return ResponseEntity.ok(listesDao.update(id, updatedListe));
        } catch (RuntimeException e) {
            return ResponseEntity.notFound().build();
        }
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteListeById(@PathVariable Long id) {
        if (listesDao.deleteById(id)) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }

    @DeleteMapping("/utilisateurs/{utilisateurId}")
    public ResponseEntity<Void> deleteListesByUtilisateurId(@PathVariable Long utilisateurId) {
        if (listesDao.deleteByUtilisateurId(utilisateurId)) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }
}
