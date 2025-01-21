package vcom.visiotech.domain.model;

import java.util.List;
import java.util.Map;
import java.util.HashMap;
import java.util.ArrayList;

public class User {

    private String name;
    private String email;
    private String password;
    private List<Film> viewedFilms;
    private List<Film> favoriteFilms;
    private Map<Film, Integer> notesOfViewedFilms;

    // Constructeur avec tous les attributs
    public User(String name, String email, String password, List<Film> viewedFilms, List<Film> favoriteFilms) {
        this.name = name;
        this.email = email;
        this.password = password;
        this.viewedFilms = viewedFilms;
        this.favoriteFilms = favoriteFilms;
        this.notesOfViewedFilms = new HashMap<>(); // Initialisation des notes
    }

    // Constructeur avec Map pour les notes des films
    public User(Map<Film, Integer> notesOfViewedFilms) {
        this.name = "Default Name"; // Valeur par défaut
        this.email = "default@example.com"; // Valeur par défaut
        this.password = "defaultPassword"; // Valeur par défaut
        this.viewedFilms = new ArrayList<>(); // Liste vide de films vus
        this.favoriteFilms = new ArrayList<>(); // Liste vide de films favoris
        this.notesOfViewedFilms = notesOfViewedFilms; // Initialisation des notes
    }

    // Getters
    public String getName() {
        return name;
    }

    public String getEmail() {
        return email;
    }

    public String getPassword() {
        return password;
    }

    public List<Film> getViewedFilms() {
        return viewedFilms;
    }

    public List<Film> getFavoriteFilms() {
        return favoriteFilms;
    }

    public Map<Film, Integer> getNotesOfViewedFilms() {
        return notesOfViewedFilms;
    }

    // Méthode pour afficher les détails de l'utilisateur
    public String getDetails() {
        return "Name: " + name + ", Email: " + email;
    }
}
