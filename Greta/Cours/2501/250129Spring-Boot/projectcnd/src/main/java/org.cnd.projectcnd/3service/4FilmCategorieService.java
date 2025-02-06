// package com.example.movies.service;

import com.example.movies.dao.FilmCategorieDao;
import com.example.movies.entity.FilmCategorie;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class FilmCategorieService {

    private final FilmCategorieDao filmCategorieDao;

    public FilmCategorieService(FilmCategorieDao filmCategorieDao) {
        this.filmCategorieDao = filmCategorieDao;
    }

    // Ajouter une relation entre un film et une catégorie
    public int ajouterRelation(FilmCategorie filmCategorie) {
        return filmCategorieDao.save(filmCategorie);
    }

    // Lister toutes les relations
    public List<FilmCategorie> getAllRelations() {
        return filmCategorieDao.findAll();
    }

    // Obtenir les relations pour un film donné
    public List<FilmCategorie> getRelationsByFilmId(Long filmId) {
        return filmCategorieDao.findByFilmId(filmId);
    }

    // Supprimer une relation entre un film et une catégorie
    public int supprimerRelation(FilmCategorie filmCategorie) {
        return filmCategorieDao.delete(filmCategorie);
    }
}
