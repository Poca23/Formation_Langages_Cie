package com.example.movies.dao;

import com.example.movies.entity.Listes;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public class ListesDao {
    private final JdbcTemplate jdbcTemplate;

    public ListesDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    // Mapper pour convertir une ligne SQL -> Objet Listes
    private final RowMapper<Listes> listesRowMapper = (rs, rowNum) -> new Listes(
            rs.getLong("id"),
            rs.getLong("utilisateur_id"),
            rs.getString("nom"),
            rs.getString("type"));

    // 1. Insérer une nouvelle liste
    public int save(Listes listes) {
        String sql = "INSERT INTO LISTES (utilisateur_id, nom, type) VALUES (?, ?, ?)";
        return jdbcTemplate.update(sql, listes.getUtilisateurId(), listes.getNom(), listes.getType());
    }

    // 2. Récupérer toutes les listes d'un utilisateur
    public List<Listes> findByUtilisateurId(Long utilisateurId) {
        String sql = "SELECT * FROM LISTES WHERE utilisateur_id = ?";
        return jdbcTemplate.query(sql, listesRowMapper, utilisateurId);
    }

    // 3. Supprimer une liste
    public int delete(Long listeId) {
        String sql = "DELETE FROM LISTES WHERE id = ?";
        return jdbcTemplate.update(sql, listeId);
    }
}
