package vcom.visiotech.domain.model;

import java.util.Collections;
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
    private Map<Film, Double> notesOfViewedFilms;

    // Constructeur principal
    public User(String name, String email, String password, List<Film> viewedFilms, List<Film> favoriteFilms) {
        validateParams(name, email, password);
        this.name = name;
        this.email = email;
        this.password = password;
        this.viewedFilms = copyOrEmpty(viewedFilms);
        this.favoriteFilms = copyOrEmpty(favoriteFilms);
        this.notesOfViewedFilms = new HashMap<>();
    }

    // Constructeur avec Map pour les notes des films
    public User(Map<Film, Double> notesOfViewedFilms) {
        this("Default Name", "default@example.com", "defaultPassword", Collections.emptyList(),
                Collections.emptyList());
        this.notesOfViewedFilms = copyOrEmpty(notesOfViewedFilms);
    }

    // Méthode de validation des paramètres
    private void validateParams(String name, String email, String password) {
        if (name == null || email == null || password == null) {
            throw new IllegalArgumentException("Name, email, and password cannot be null");
        }
    }

    // Méthode générique pour copier une liste ou retourner une liste vide
    private <T> List<T> copyOrEmpty(List<T> list) {
        return list != null ? new ArrayList<>(list) : new ArrayList<>();
    }

    // Méthode pour copier un Map ou retourner un map vide
    private <K, V> Map<K, V> copyOrEmpty(Map<K, V> map) {
        return map != null ? new HashMap<>(map) : new HashMap<>();
    }

    // Getters avec collections immuables
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
        return Collections.unmodifiableList(viewedFilms);
    }

    public List<Film> getFavoriteFilms() {
        return Collections.unmodifiableList(favoriteFilms);
    }

    public Map<Film, Double> getNotesOfViewedFilms() {
        return Collections.unmodifiableMap(notesOfViewedFilms);
    }

    // Méthode pour afficher les détails de l'utilisateur
    public String getDetails() {
        return String.format("Name: %s, Email: %s", name, email);
    }

    // Ajout d'un film à la liste des films vus
    public void addViewedFilm(Film film) {
        if (!viewedFilms.contains(film)) {
            viewedFilms.add(film);
        }
    }

    // Ajout d'un film à la liste des films favoris
    public void addFavoriteFilm(Film film) {
        if (!favoriteFilms.contains(film)) {
            favoriteFilms.add(film);
        }
    }

    // Ajout d'une note à un film déjà vu
    public void addFilmNote(Film film, Double note) {
        if (viewedFilms.contains(film)) {
            notesOfViewedFilms.put(film, note);
        } else {
            throw new IllegalArgumentException(
                    "Le film doit être dans la liste des films vus avant d'ajouter une note.");
        }
    }
}
