package com.example.movies.service;

import com.example.movies.dao.ListesDao;
import com.example.movies.entity.Listes;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class ListesService {

    private final ListesDao listesDao;

    public ListesService(ListesDao listesDao) {
        this.listesDao = listesDao;
    }

    // Ajouter une nouvelle liste
    public int ajouterNouvelleListe(Listes liste) {
        return listesDao.save(liste);
    }

    // Récupérer toutes les listes d’un utilisateur
    public List<Listes> getListesParUtilisateur(Long utilisateurId) {
        return listesDao.findByUtilisateurId(utilisateurId);
    }

    // Supprimer une liste
    public int supprimerListe(Long listeId) {
        return listesDao.delete(listeId);
    }
}
