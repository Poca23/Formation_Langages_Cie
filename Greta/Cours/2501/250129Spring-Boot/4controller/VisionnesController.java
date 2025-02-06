package org.cnd.projectcnd.controllers;

import jakarta.validation.Valid;
import org.cnd.projectcnd.entities.Visionnes;
import org.cnd.projectcnd.daos.VisionnesDao;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/visionnes")
public class VisionnesController {

    private final VisionnesDao visionnesDao;

    public VisionnesController(VisionnesDao visionnesDao) {
        this.visionnesDao = visionnesDao;
    }

    @GetMapping
    public ResponseEntity<List<Visionnes>> getAllVisionnes() {
        return ResponseEntity.ok(visionnesDao.findAll());
    }

    @GetMapping("/{id}")
    public ResponseEntity<Visionnes> getVisionneById(@PathVariable Long id) {
        try {
            return ResponseEntity.ok(visionnesDao.findById(id));
        } catch (RuntimeException e) {
            return ResponseEntity.notFound().build();
        }
    }

    @GetMapping("/utilisateurs/{utilisateurId}")
    public ResponseEntity<List<Visionnes>> getVisionnesByUtilisateurId(@PathVariable Long utilisateurId) {
        return ResponseEntity.ok(visionnesDao.findByUtilisateurId(utilisateurId));
    }

    @GetMapping("/films/{filmId}")
    public ResponseEntity<List<Visionnes>> getVisionnesByFilmId(@PathVariable Long filmId) {
        return ResponseEntity.ok(visionnesDao.findByFilmId(filmId));
    }

    @PostMapping
    public ResponseEntity<Visionnes> createVisionne(@Valid @RequestBody Visionnes visionnes) {
        return ResponseEntity.status(HttpStatus.CREATED).body(visionnesDao.save(visionnes));
    }

    @PutMapping("/{id}")
    public ResponseEntity<Visionnes> updateVisionne(@PathVariable Long id,
            @Valid @RequestBody Visionnes updatedVisionnes) {
        try {
            return ResponseEntity.ok(visionnesDao.update(id, updatedVisionnes));
        } catch (RuntimeException e) {
            return ResponseEntity.notFound().build();
        }
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteVisionneById(@PathVariable Long id) {
        if (visionnesDao.deleteById(id)) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }

    @DeleteMapping("/utilisateurs/{utilisateurId}")
    public ResponseEntity<Void> deleteVisionnesByUtilisateurId(@PathVariable Long utilisateurId) {
        if (visionnesDao.deleteByUtilisateurId(utilisateurId)) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }

    @DeleteMapping("/films/{filmId}")
    public ResponseEntity<Void> deleteVisionnesByFilmId(@PathVariable Long filmId) {
        if (visionnesDao.deleteByFilmId(filmId)) {
            return ResponseEntity.noContent().build();
        }
        return ResponseEntity.notFound().build();
    }
}
