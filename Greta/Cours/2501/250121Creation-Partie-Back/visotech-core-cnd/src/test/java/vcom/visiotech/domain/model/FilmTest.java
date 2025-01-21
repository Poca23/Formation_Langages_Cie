package vcom.visiotech.domain.model;

import org.junit.jupiter.api.Test;
import static org.junit.jupiter.api.Assertions.*;

class FilmTest {

    @Test
    void testFilmCreation() {
        Film film = new Film("Inception", 2010, 148);
        assertEquals("Inception", film.getTitle());
        assertEquals(2010, film.getReleaseYear());
        assertEquals(148, film.getDuration());
    }

    @Test
    void testGetDetails() {
        Film film = new Film("Inception", 2010, 148);
        assertEquals("Inception (2010), 148 minutes", film.getDetails());
    }
}
