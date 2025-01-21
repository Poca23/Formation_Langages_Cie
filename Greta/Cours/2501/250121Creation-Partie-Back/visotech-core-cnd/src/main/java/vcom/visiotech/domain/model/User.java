package vcom.visiotech.domain.model;

import java.util.List;

public class User {

    private String name;
    private String email;
    private String password;
    private List<Film> viewedFilms;
    private List<Film> favoriteFilms;

    // Constructeur avec tous les attributs
    public User(String name, String email, String password, List<Film> viewedFilms, List<Film> favoriteFilms) {
        this.name = name;
        this.email = email;
        this.password = password;
        this.viewedFilms = viewedFilms;
        this.favoriteFilms = favoriteFilms;
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

    // Méthode pour afficher les détails de l'utilisateur
    public String getDetails() {
        return "Name: " + name + ", Email: " + email;
    }
}
