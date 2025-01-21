package vcom.visiotech.domain.model;

import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;
import static org.junit.jupiter.api.Assertions.*;
import java.util.ArrayList;
import java.util.List;

public class UserTest {

    private Film film1;
    private Film film2;
    private Film film3;
    private User user;

    @BeforeEach
    public void setUp() {
        // Initialisation des films et de l'utilisateur
        film1 = new Film("Inception", 2010, 148);
        film2 = new Film("Titanic", 1997, 195);
        film3 = new Film("Interstellar", 2014, 169);

        List<Film> viewedFilms = new ArrayList<>();
        viewedFilms.add(film1);

        List<Film> favoriteFilms = new ArrayList<>();
        favoriteFilms.add(film2);

        user = new User("John Doe", "john.doe@example.com", "password123", viewedFilms, favoriteFilms);
    }

    @Test
    public void testUserConstructor() {
        assertEquals("John Doe", user.getName());
        assertEquals("john.doe@example.com", user.getEmail());
        assertEquals("password123", user.getPassword());
        assertEquals(1, user.getViewedFilms().size());
        assertEquals(1, user.getFavoriteFilms().size());
    }

    @Test
    public void testGetDetails() {
        assertEquals("Name: John Doe, Email: john.doe@example.com", user.getDetails());
    }

    @Test
    public void testAddFilmNote() {
        user.addFilmNote(film1, 4.5);
        assertEquals(4.5, user.getNotesOfViewedFilms().get(film1));

        // Cas où le film n'est pas dans les films vus
        IllegalArgumentException exception = assertThrows(IllegalArgumentException.class, () -> {
            user.addFilmNote(film3, 3.5);
        });
        assertEquals("Le film doit être dans la liste des films vus avant d'ajouter une note.", exception.getMessage());
    }
}
