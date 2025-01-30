public
package com.example.movies.dao;

import com.example.movies.entity.Visionnes;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public class VisionnesDao {
    private final JdbcTemplate jdbcTemplate;

    public VisionnesDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    // Mapper pour convertir une ligne SQL -> Objet Visionnes
    private final RowMapper<Visionnes> visionnesRowMapper = (rs, rowNum) -> new Visionnes(
            rs.getLong("id"),
            rs.getLong("utilisateur_id"),
            rs.getLong("film_id"),
            rs.getInt("liste_numero"),
            rs.getDate("date_visionnage")
    );

    // 1. Ajouter un film visionné
    public int save(Visionnes visionnes) {
        String sql = "INSERT INTO VISIONNES (utilisateur_id, film_id, liste_numero, date_visionnage) VALUES (?, ?, ?, ?)";
        return jdbcTemplate.update(sql, visionnes.getUtilisateurId(), visionnes.getFilmId(), visionnes.getListeNumero(), visionnes.getDateVisionnage());
    }

    // 2. Récupérer la liste des films visionnés d’un utilisateur
    public List<Visionnes> findByUtilisateurId(Long utilisateurId) {
        String sql = "SELECT * FROM VISIONNES WHERE utilisateur_id = ?";
        return jdbcTemplate.query(sql, visionnesRowMapper, utilisateurId);
    }

    // 3. Supprimer un film des visionnés
    public int delete(Long utilisateurId, Long filmId) {
        String sql = "DELETE FROM VISIONNES WHERE utilisateur_id = ? AND film_id = ?";
        return jdbcTemplate.update(sql, utilisateurId, filmId);
    }
}{

}
