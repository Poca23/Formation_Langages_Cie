// package com.example.movies.dao;

import com.example.movies.entity.FilmCategorie;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public class FilmCategorieDao {

    private final JdbcTemplate jdbcTemplate;

    public FilmCategorieDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    // Mapper : Transforme une ligne SQL -> Objet FilmCategorie
    private final RowMapper<FilmCategorie> filmCategorieRowMapper = (rs, rowNum) -> new FilmCategorie(
            rs.getLong("film_id"),
            rs.getLong("categorie_id"));

    // 1. Insérer une relation entre un film et une catégorie
    public int save(FilmCategorie filmCategorie) {
        String sql = "INSERT INTO FILMS_CATEGORIES (film_id, categorie_id) VALUES (?, ?)";
        return jdbcTemplate.update(sql, filmCategorie.getFilmId(), filmCategorie.getCategorieId());
    }

    // 2. Récupérer toutes les relations film-catégorie
    public List<FilmCategorie> findAll() {
        String sql = "SELECT * FROM FILMS_CATEGORIES";
        return jdbcTemplate.query(sql, filmCategorieRowMapper);
    }

    // 3. Récupérer les relations pour un film donné
    public List<FilmCategorie> findByFilmId(Long filmId) {
        String sql = "SELECT * FROM FILMS_CATEGORIES WHERE film_id = ?";
        return jdbcTemplate.query(sql, filmCategorieRowMapper, filmId);
    }

    // 4. Supprimer une relation entre un film et une catégorie
    public int delete(FilmCategorie filmCategorie) {
        String sql = "DELETE FROM FILMS_CATEGORIES WHERE film_id = ? AND categorie_id = ?";
        return jdbcTemplate.update(sql, filmCategorie.getFilmId(), filmCategorie.getCategorieId());
    }
}
