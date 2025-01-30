package com.example.movies.service;

import com.example.movies.dao.VisionnesDao;
import com.example.movies.entity.Visionnes;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class VisionnesService {

    private final VisionnesDao visionnesDao;

    public VisionnesService(VisionnesDao visionnesDao) {
        this.visionnesDao = visionnesDao;
    }

    // Ajouter un film aux visionnés
    public int ajouterFilmVisionne(Visionnes visionnes) {
        return visionnesDao.save(visionnes);
    }

    // Récupérer les films visionnés par un utilisateur
    public List<Visionnes> getFilmsVisionnesParUtilisateur(Long utilisateurId) {
        return visionnesDao.findByUtilisateurId(utilisateurId);
    }

    // Supprimer un film de la liste des visionnés
    public int supprimerFilmVisionne(Long utilisateurId, Long filmId) {
        return visionnesDao.delete(utilisateurId, filmId);
    }
}
