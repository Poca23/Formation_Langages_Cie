package com.example.movies.dao;

import com.example.movies.entity.Favoris;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public class FavorisDao {
    private final JdbcTemplate jdbcTemplate;

    public FavorisDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    // Mapper pour convertir une ligne SQL -> Objet Favoris
    private final RowMapper<Favoris> favorisRowMapper = (rs, rowNum) -> new Favoris(
            rs.getLong("id"),
            rs.getLong("utilisateur_id"),
            rs.getLong("film_id"),
            rs.getInt("liste_numero"));

    // 1. Insérer un favori
    public int save(Favoris favoris) {
        String sql = "INSERT INTO FAVORIS (utilisateur_id, film_id, liste_numero) VALUES (?, ?, ?)";
        return jdbcTemplate.update(sql, favoris.getUtilisateurId(), favoris.getFilmId(), favoris.getListeNumero());
    }

    // 2. Récupérer la liste des favoris d’un utilisateur
    public List<Favoris> findByUtilisateurId(Long utilisateurId) {
        String sql = "SELECT * FROM FAVORIS WHERE utilisateur_id = ?";
        return jdbcTemplate.query(sql, favorisRowMapper, utilisateurId);
    }

    // 3. Supprimer un favori
    public int delete(Favoris favoris) {
        String sql = "DELETE FROM FAVORIS WHERE utilisateur_id = ? AND film_id = ?";
        return jdbcTemplate.update(sql, favoris.getUtilisateurId(), favoris.getFilmId());
    }
}
