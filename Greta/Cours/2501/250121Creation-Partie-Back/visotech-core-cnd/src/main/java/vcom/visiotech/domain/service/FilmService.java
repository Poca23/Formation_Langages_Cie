package vcom.visiotech.domain.service;

import java.util.List;
import vcom.visiotech.domain.model.Film;

public class FilmService {

    // méthode temporaire pour stocker un jeu de films en local, sans la DB
    private List<Film> films = new ArrayList<>();

    // méthode temporaire pour stocker un jeu de films en local, sans la DB
    public class FilmService {
        public void addFilm(Film film) {
            // Ajouter le film à la DataBase
            films.add(newFilm);
        }

        public List<Film> listFilms() {
            // Récupérer les films depuis la DataBase
            return films;
        }
    }
}