package vcom.visiotech.domain.service;

import java.util.List;
import java.util.ArrayList;
import vcom.visiotech.domain.model.Film;

public class FilmService {

    // méthode temporaire pour stocker un jeu de films en local, sans la DB
    private List<Film> films = new ArrayList<>();

    public void addFilm(Film film) {
        // Ajouter le film à la DataBase
        films.add(film);
    }

    public List<Film> listFilms() {
        // Récupérer les films depuis la DataBase
        return films;
    }
}