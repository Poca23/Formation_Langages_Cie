package vcom.visiotech.domain.service;

import static org.junit.jupiter.api.Assertions.assertEquals;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

import org.junit.jupiter.api.BeforeAll;
import org.junit.jupiter.api.Test;

import vcom.visiotech.domain.model.Film;


public class FilmServiceTest {

    static List<Film> storedFilms = new ArrayList<>();
    static FilmService filmService = new FilmService();
    static Film film1 = new Film("Avatar", 2009, 162);
    static Film film2 = new Film("Avatar2", 2022, 192);
    static Film film3 = new Film("tototo", 1997, 90);
    static Film film4 = new Film("tatata", 2023, 120);
    static Film film5 = new Film("lololo", 2020, 95);
    static Film film6 = new Film("lalala", 1998, 100);

    @BeforeAll
    static void setup() {
        storedFilms = Arrays.asList(film1, film2, film3, film4, film5, film6);
        filmService.addFilms(storedFilms);
    }

    @Test
    void testListFilms() {
        List<Film> films = filmService.listFilms();

        assertEquals(6, films.size());
        assertEquals(storedFilms, films);
    }

    @Test
    void testSearchFilms() {
        List<Film> films = filmService.searchFilms("Avatar");

        assertEquals(Arrays.asList(film1, film2), films);
    }

    @Test
    void testSearchFilmsCaseInsensitive() {
        List<Film> films = filmService.searchFilms("avatar");

        assertEquals(Arrays.asList(film1, film2), films);
    }

    @Test
    void testSearchFilmsOneLetter() {
        List<Film> films = filmService.searchFilms("o");

        assertEquals(Arrays.asList(film3, film5), films);
    }
}