package org.cnd.projectcnd.daos;

import org.cnd.projectcnd.entities.Visionnes;
import org.cnd.projectcnd.exceptions.ResourceNotFoundException;
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

    // Mapper pour convertir une ligne SQL en une entité Visionnes
    private final RowMapper<Visionnes> visionnesRowMapper = (rs, _) -> new Visionnes(
            rs.getLong("id"),
            rs.getLong("utilisateur_id"),
            rs.getLong("film_id"),
            rs.getInt("liste_numero"),
            rs.getTimestamp("date_visionnage") // Conversion de SQL TIMESTAMP à Java Date
    );

    // Récupérer tous les films visionnés
    public List<Visionnes> findAll() {
        String sql = "SELECT * FROM visionnes";
        return jdbcTemplate.query(sql, visionnesRowMapper);
    }

    // Récupérer un film visionné par ID
    public Visionnes findById(Long id) {
        String sql = "SELECT * FROM visionnes WHERE id = ?";
        return jdbcTemplate.query(sql, visionnesRowMapper, id)
                .stream()
                .findFirst()
                .orElseThrow(() -> new ResourceNotFoundException("Visionné avec ID " + id + " non trouvé"));
    }

    // Récupérer tous les films visionnés par un utilisateur
    public List<Visionnes> findByUtilisateurId(Long utilisateurId) {
        String sql = "SELECT * FROM visionnes WHERE utilisateur_id = ?";
        return jdbcTemplate.query(sql, visionnesRowMapper, utilisateurId);
    }

    // Récupérer tous les films visionnés pour un film spécifique
    public List<Visionnes> findByFilmId(Long filmId) {
        String sql = "SELECT * FROM visionnes WHERE film_id = ?";
        return jdbcTemplate.query(sql, visionnesRowMapper, filmId);
    }

    // Ajouter un nouvel enregistrement dans visionnés
    public Visionnes save(Visionnes visionnes) {
        String sql = "INSERT INTO visionnes (utilisateur_id, film_id, liste_numero, date_visionnage) VALUES (?, ?, ?, ?)";
        jdbcTemplate.update(sql,
                visionnes.getUtilisateurId(),
                visionnes.getFilmId(),
                visionnes.getListeNumero(),
                visionnes.getDateVisionnage());

        // Récupérer l'ID généré automatiquement
        String sqlGetId = "SELECT LAST_INSERT_ID()";
        Long id = jdbcTemplate.queryForObject(sqlGetId, Long.class);

        visionnes.setId(id);
        return visionnes;
    }

    // Mettre à jour un enregistrement existant
    public Visionnes update(Long id, Visionnes visionnes) {
        String sql = "UPDATE visionnes SET utilisateur_id = ?, film_id = ?, liste_numero = ?, date_visionnage = ? WHERE id = ?";
        int rowsAffected = jdbcTemplate.update(sql,
                visionnes.getUtilisateurId(),
                visionnes.getFilmId(),
                visionnes.getListeNumero(),
                visionnes.getDateVisionnage(),
                id);

        if (rowsAffected <= 0) {
            throw new ResourceNotFoundException("Impossible de mettre à jour le visionné avec ID : " + id);
        }

        return findById(id);
    }

    // Supprimer un enregistrement par ID
    public boolean deleteById(Long id) {
        String sql = "DELETE FROM visionnes WHERE id = ?";
        int rowsAffected = jdbcTemplate.update(sql, id);
        return rowsAffected > 0;
    }

    // Supprimer tous les films visionnés d'un utilisateur
    public boolean deleteByUtilisateurId(Long utilisateurId) {
        String sql = "DELETE FROM visionnes WHERE utilisateur_id = ?";
        int rowsAffected = jdbcTemplate.update(sql, utilisateurId);
        return rowsAffected > 0;
    }

    // Supprimer les enregistrements pour un film spécifique
    public boolean deleteByFilmId(Long filmId) {
        String sql = "DELETE FROM visionnes WHERE film_id = ?";
        int rowsAffected = jdbcTemplate.update(sql, filmId);
        return rowsAffected > 0;
    }
}
