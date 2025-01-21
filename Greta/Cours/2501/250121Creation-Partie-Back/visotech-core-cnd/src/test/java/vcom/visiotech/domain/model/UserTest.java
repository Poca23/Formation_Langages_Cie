package vcom.visiotech.domain.model;

import org.junit.jupiter.api.Test;
import static org.junit.jupiter.api.Assertions.*;
import java.util.ArrayList;
import java.util.List;

public class UserTest {

    @Test
    public void testUserConstructor() {
        // Création de films fictifs pour les tests
        Film film1 = new Film("Inception", 2010, 148); // Vous devez ajouter la durée ici, car c'est nécessaire pour la
                                                       // classe Film.
        Film film2 = new Film("Titanic", 1997, 195);

        // Création de la liste de films vus et favoris
        List<Film> viewedFilms = new ArrayList<>();
        viewedFilms.add(film1);
        List<Film> favoriteFilms = new ArrayList<>();
        favoriteFilms.add(film2);

        // Création d'un utilisateur
        User user = new User("John Doe", "john.doe@example.com", "password123", viewedFilms, favoriteFilms);

        // Vérification des attributs
        assertEquals("John Doe", user.getName());
        assertEquals("john.doe@example.com", user.getEmail());
        assertEquals("password123", user.getPassword());
        assertEquals(1, user.getViewedFilms().size()); // On vérifie qu'il y a 1 film vu
        assertEquals(1, user.getFavoriteFilms().size()); // On vérifie qu'il y a 1 film favori
    }

    @Test
    public void testGetDetails() {
        // Création de films fictifs pour les tests
        Film film1 = new Film("Inception", 2010, 148); // Vous devez ajouter la durée ici, car c'est nécessaire pour la
                                                       // classe Film.
        Film film2 = new Film("Titanic", 1997, 195);

        // Création de la liste de films vus et favoris
        List<Film> viewedFilms = new ArrayList<>();
        viewedFilms.add(film1);
        List<Film> favoriteFilms = new ArrayList<>();
        favoriteFilms.add(film2);

        // Création d'un utilisateur
        User user = new User("John Doe", "john.doe@example.com", "password123", viewedFilms, favoriteFilms);

        // Vérification de la méthode getDetails()
        assertEquals("Name: John Doe, Email: john.doe@example.com", user.getDetails());
    }
}
