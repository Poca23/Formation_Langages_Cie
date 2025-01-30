package com.example.movies.service;

import com.example.movies.dao.FavorisDao;
import com.example.movies.entity.Favoris;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class FavorisService {

    private final FavorisDao favorisDao;

    public FavorisService(FavorisDao favorisDao) {
        this.favorisDao = favorisDao;
    }

    // Ajouter un favori
    public int ajouterFavori(Favoris favoris) {
        return favorisDao.save(favoris);
    }

    // Récupérer les favoris d’un utilisateur
    public List<Favoris> getFavorisByUtilisateurId(Long utilisateurId) {
        return favorisDao.findByUtilisateurId(utilisateurId);
    }

    // Supprimer un favori
    public int supprimerFavori(Favoris favoris) {
        return favorisDao.delete(favoris);
    }
}
