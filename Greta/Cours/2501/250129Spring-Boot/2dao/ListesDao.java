package org.cnd.projectcnd.daos;

import org.cnd.projectcnd.entities.Listes;
import org.cnd.projectcnd.exceptions.ResourceNotFoundException;
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

    // Mapper pour convertir une ligne SQL en une entité Listes
    private final RowMapper<Listes> listesRowMapper = (rs, _) -> new Listes(
            rs.getLong("id"),
            rs.getLong("utilisateur_id"),
            rs.getString("nom"),
            rs.getString("type"));

    // Récupérer toutes les listes
    public List<Listes> findAll() {
        String sql = "SELECT * FROM listes";
        return jdbcTemplate.query(sql, listesRowMapper);
    }

    // Récupérer une liste par son ID
    public Listes findById(Long id) {
        String sql = "SELECT * FROM listes WHERE id = ?";
        return jdbcTemplate.query(sql, listesRowMapper, id)
                .stream()
                .findFirst()
                .orElseThrow(() -> new ResourceNotFoundException("Liste avec ID : " + id + " non trouvée"));
    }

    // Récupérer toutes les listes associées à un utilisateur
    public List<Listes> findByUtilisateurId(Long utilisateurId) {
        String sql = "SELECT * FROM listes WHERE utilisateur_id = ?";
        return jdbcTemplate.query(sql, listesRowMapper, utilisateurId);
    }

    // Ajouter une nouvelle liste
    public Listes save(Listes liste) {
        String sql = "INSERT INTO listes (utilisateur_id, nom, type) VALUES (?, ?, ?)";
        jdbcTemplate.update(sql,
                liste.getUtilisateurId(),
                liste.getNom(),
                liste.getType());

        // Récupérer l'ID généré automatiquement
        String sqlGetId = "SELECT LAST_INSERT_ID()";
        Long id = jdbcTemplate.queryForObject(sqlGetId, Long.class);

        liste.setId(id);
        return liste;
    }

    // Mettre à jour une liste existante
    public Listes update(Long id, Listes liste) {
        String sql = "UPDATE listes SET utilisateur_id = ?, nom = ?, type = ? WHERE id = ?";
        int rowsAffected = jdbcTemplate.update(sql,
                liste.getUtilisateurId(),
                liste.getNom(),
                liste.getType(),
                id);

        if (rowsAffected <= 0) {
            throw new ResourceNotFoundException("Impossible de mettre à jour la liste avec ID : " + id);
        }

        return findById(id);
    }

    // Supprimer une liste par son ID
    public boolean deleteById(Long id) {
        String sql = "DELETE FROM listes WHERE id = ?";
        int rowsAffected = jdbcTemplate.update(sql, id);
        return rowsAffected > 0;
    }

    // Supprimer toutes les listes d'un utilisateur
    public boolean deleteByUtilisateurId(Long utilisateurId) {
        String sql = "DELETE FROM listes WHERE utilisateur_id = ?";
        int rowsAffected = jdbcTemplate.update(sql, utilisateurId);
        return rowsAffected > 0;
    }
}
