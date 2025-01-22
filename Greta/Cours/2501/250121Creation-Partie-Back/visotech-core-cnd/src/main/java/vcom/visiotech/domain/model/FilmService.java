package vcom.visiotech.domain.model;

import java.util.ArrayList;
import java.util.List;

public class FilmService {

    private List<Film> films = new ArrayList<>();

    public void addFilms(List<Film> films) {

        this.films.addAll(films);

    }

    public List<Film> listFilms() {

        return new ArrayList<>(films);

    }

    public List<Film> searchFilms(String keyword) {

        List<Film> result = new ArrayList<>();

        for (Film film : films) {

            if (film.getTitle().toLowerCase().contains(keyword.toLowerCase())) {

                result.add(film);

            }

        }

        return result;

    }

}