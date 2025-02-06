package org.cnd.projectcnd.daos;

import org.cnd.projectcnd.entities.FilmCategorie;
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

    private final RowMapper<FilmCategorie> filmCategorieRowMapper = (rs, _) -> new FilmCategorie(
            rs.getLong("film_id"),
            rs.getLong("categorie_id"));

    // Récupérer toutes les associations Film-Categorie
    public List<FilmCategorie> findAll() {
        String sql = "SELECT * FROM film_categorie";
        return jdbcTemplate.query(sql, filmCategorieRowMapper);
    }

    // Récupérer les catégories associées à un film donné
    public List<Long> findCategoriesByFilmId(Long filmId) {
        String sql = "SELECT categorie_id FROM film_categorie WHERE film_id = ?";
        return jdbcTemplate.queryForList(sql, Long.class, filmId);
    }

    // Récupérer les films associés à une catégorie donnée
    public List<Long> findFilmsByCategorieId(Long categorieId) {
        String sql = "SELECT film_id FROM film_categorie WHERE categorie_id = ?";
        return jdbcTemplate.queryForList(sql, Long.class, categorieId);
    }

    // Ajouter une association Film-Categorie
    public FilmCategorie save(FilmCategorie filmCategorie) {
        String sql = "INSERT INTO film_categorie (film_id, categorie_id) VALUES (?, ?)";
        jdbcTemplate.update(sql, filmCategorie.getFilmId(), filmCategorie.getCategorieId());
        return filmCategorie;
    }

    // Supprimer une association Film-Categorie spécifique
    public boolean deleteByFilmAndCategorie(Long filmId, Long categorieId) {
        String sql = "DELETE FROM film_categorie WHERE film_id = ? AND categorie_id = ?";
        int rowsAffected = jdbcTemplate.update(sql, filmId, categorieId);
        return rowsAffected > 0;
    }

    // Supprimer toutes les associations pour un film donné
    public boolean deleteByFilmId(Long filmId) {
        String sql = "DELETE FROM film_categorie WHERE film_id = ?";
        int rowsAffected = jdbcTemplate.update(sql, filmId);
        return rowsAffected > 0;
    }

    // Supprimer toutes les associations pour une catégorie donnée
    public boolean deleteByCategorieId(Long categorieId) {
        String sql = "DELETE FROM film_categorie WHERE categorie_id = ?";
        int rowsAffected = jdbcTemplate.update(sql, categorieId);
        return rowsAffected > 0;
    }
}
