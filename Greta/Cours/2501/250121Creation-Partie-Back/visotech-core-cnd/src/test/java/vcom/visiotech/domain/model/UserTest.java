package vcom.visiotech.domain.model;

import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;

import static org.junit.jupiter.api.Assertions.*;

public class UserTest {

    private Film film1;
    private Film film2;
    private User user;

    @BeforeEach
    public void setUp() {
        film1 = new Film("Inception", 2010, 148);
        film2 = new Film("Titanic", 1997, 195);

        user = new User("john.doe@example.com");
    }

    @Test
    public void testUserConstructor() {
        assertEquals("john.doe@example.com", user.getEmail());

        assertNotNull(user.getViewedFilms());
        assertNotNull(user.getFavoriteFilms());
        assertTrue(user.getViewedFilms().isEmpty());
        assertTrue(user.getFavoriteFilms().isEmpty());
    }

    @Test
    public void testAddViewedFilm() {
        user.getViewedFilms().put(film1, 4.5);

        assertEquals(1, user.getViewedFilms().size());
        assertEquals(4.5, user.getViewedFilms().get(film1));
    }

    @Test
    public void testAddFavoriteFilm() {
        user.getFavoriteFilms().add(film2);

        assertEquals(1, user.getFavoriteFilms().size());
        assertTrue(user.getFavoriteFilms().contains(film2));
    }

    @Test
    public void testGetEmail() {
        assertEquals("john.doe@example.com", user.getEmail());
    }
}
