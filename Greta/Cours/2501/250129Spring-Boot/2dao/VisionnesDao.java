package org.cnd.projectcnd.daos;

import org.cnd.projectcnd.entities.Visionnes;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository // Marque ce composant comme un DAO utilisable par Spring
public class VisionnesDao {

    private final JdbcTemplate jdbcTemplate;

    // Constructeur pour injection de dépendances
    public VisionnesDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    // Mapper pour convertir une ligne SQL en un objet Visionnes
    private final RowMapper<Visionnes> visionnesRowMapper = (rs, rowNum) -> new Visionnes(
            rs.getLong("id"), // Clé primaire
            rs.getLong("utilisateur_id"), // Clé étrangère vers UTILISATEURS
            rs.getLong("film_id"), // Clé étrangère vers FILMS
            rs.getInt("liste_numero"), // Liste à laquelle ce film appartient
            rs.getDate("date_visionnage") // Date associée au visionnage
    );

    // 1. Ajouter un nouveau film dans les visionnés
    public int save(Visionnes visionnes) {
        String sql = "INSERT INTO VISIONNES (utilisateur_id, film_id, liste_numero, date_visionnage) " +
                "VALUES (?, ?, ?, ?)";
        return jdbcTemplate.update(sql,
                visionnes.getUtilisateurId(),
                visionnes.getFilmId(),
                visionnes.getListeNumero(),
                new java.sql.Date(visionnes.getDateVisionnage().getTime()) // Convert Java Date en SQL Date
        );
    }

    // 2. Récupérer la liste des films visionnés d’un utilisateur
    public List<Visionnes> findByUtilisateurId(Long utilisateurId) {
        String sql = "SELECT * FROM VISIONNES WHERE utilisateur_id = ?";
        return jdbcTemplate.query(sql, visionnesRowMapper, utilisateurId);
    }

    // 3. Supprimer un film des visionnés pour un utilisateur
    public int delete(Long utilisateurId, Long filmId) {
        String sql = "DELETE FROM VISIONNES WHERE utilisateur_id = ? AND film_id = ?";
        return jdbcTemplate.update(sql, utilisateurId, filmId);
    }

    // 4. Supprimer tous les films visionnés d'un utilisateur
    public int deleteByUtilisateurId(Long utilisateurId) {
        String sql = "DELETE FROM VISIONNES WHERE utilisateur_id = ?";
        return jdbcTemplate.update(sql, utilisateurId);
    }

    // 5. Vérifier si un utilisateur a visionné un film
    public boolean existsByUtilisateurIdAndFilmId(Long utilisateurId, Long filmId) {
        String sql = "SELECT COUNT(*) FROM VISIONNES WHERE utilisateur_id = ? AND film_id = ?";
        Integer count = jdbcTemplate.queryForObject(sql, Integer.class, utilisateurId, filmId);
        return count != null && count > 0;
    }

    // 6. Récupérer tous les visionnages (par exemple pour usage administratif)
    public List<Visionnes> findAll() {
        String sql = "SELECT * FROM VISIONNES";
        return jdbcTemplate.query(sql, visionnesRowMapper);
    }

    // 7. Trouver un visionnage spécifique pour un utilisateur et un film
    public Visionnes findOne(Long utilisateurId, Long filmId) {
        String sql = "SELECT * FROM VISIONNES WHERE utilisateur_id = ? AND film_id = ?";
        return jdbcTemplate.queryForObject(sql, visionnesRowMapper, utilisateurId, filmId);
    }

    // 8. Récupérer les films visionnés récemment pour un utilisateur
    public List<Visionnes> findRecentByUtilisateurId(Long utilisateurId, int limit) {
        String sql = "SELECT * FROM VISIONNES WHERE utilisateur_id = ? ORDER BY date_visionnage DESC LIMIT ?";
        return jdbcTemplate.query(sql, visionnesRowMapper, utilisateurId, limit);
    }

    // 9. Mettre à jour la date du visionnage pour un utilisateur et un film
    public int updateVisionnageDate(Long utilisateurId, Long filmId, java.util.Date newDateVisionnage) {
        String sql = "UPDATE VISIONNES SET date_visionnage = ? WHERE utilisateur_id = ? AND film_id = ?";
        return jdbcTemplate.update(sql,
                new java.sql.Date(newDateVisionnage.getTime()), // Conversion de Date Java en Date SQL
                utilisateurId,
                filmId);
    }
}
