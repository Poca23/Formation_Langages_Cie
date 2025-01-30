package com.example.movies.dao;

import com.example.movies.entity.Categorie;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public class CategorieDao {

    private final JdbcTemplate jdbcTemplate;

    public CategorieDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    // Mapper : Transforme une ligne SQL en objet Categorie
    private final RowMapper<Categorie> categorieRowMapper = (rs, rowNum) -> new Categorie(
            rs.getLong("id"),
            rs.getString("nom")
    );

    // 1. Obtenir une catégorie par ID
    public Categorie findById(Long id) {
        String sql = "SELECT * FROM CATEGORIES WHERE id = ?";
        return jdbcTemplate.queryForObject(sql, categorieRowMapper, id);
    }

    // 2. Lister toutes les catégories
    public List<Categorie> findAll() {
        String sql = "SELECT * FROM CATEGORIES";
        return jdbcTemplate.query(sql, categorieRowMapper);
    }

    // 3. Ajouter une nouvelle catégorie
    public int save(Categorie categorie) {
        String sql = "INSERT INTO CATEGORIES (nom) VALUES (?)";
        return jdbcTemplate.update(sql, categorie.getNom());
    }

    // 4. Supprimer une catégorie par ID
    public int deleteById(Long id) {
        String sql = "DELETE FROM CATEGORIES WHERE id = ?";
        return jdbcTemplate.update(sql, id);
    }
}
