package com.example.movies.service;

import com.example.movies.dao.FilmDao;
import com.example.movies.entity.Film;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class FilmService {

    private final FilmDao filmDao;

    public FilmService(FilmDao filmDao) {
        this.filmDao = filmDao;
    }

    // Récupérer tous les films
    public List<Film> getAllFilms() {
        return filmDao.findAll();
    }

    // Récupérer un film par ID
    public Film getFilmById(Long id) {
        return filmDao.findById(id);
    }

    // Ajouter un nouveau film
    public int ajouterFilm(Film film) {
        return filmDao.save(film);
    }

    // Supprimer un film par ID
    public int supprimerFilm(Long id) {
        return filmDao.deleteById(id);
    }
}
