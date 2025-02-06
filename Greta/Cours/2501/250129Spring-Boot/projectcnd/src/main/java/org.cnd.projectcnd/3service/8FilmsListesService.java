package com.example.movies.service;

import com.example.movies.dao.FilmsListesDao;
import org.springframework.stereotype.Service;

import java.util.Date;
import java.util.List;

@Service
public class FilmsListesService {

    private final FilmsListesDao filmsListesDao;

    public FilmsListesService(FilmsListesDao filmsListesDao) {
        this.filmsListesDao = filmsListesDao;
    }

    // Ajouter un film à une liste
    public int ajouterFilmAListe(Long listeId, Long filmId) {
        return filmsListesDao.ajouterFilmAListe(listeId, filmId, new Date()); // Date d'ajout = aujourd'hui
    }

    // Récupérer tous les films d'une liste donnée
    public List<Long> getFilmsDansListe(Long listeId) {
        return filmsListesDao.findFilmsByListeId(listeId);
    }

    // Supprimer un film d'une liste
    public int supprimerFilmDeListe(Long listeId, Long filmId) {
        return filmsListesDao.supprimerFilmDeListe(listeId, filmId);
    }
}
