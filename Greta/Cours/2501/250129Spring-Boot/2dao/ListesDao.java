package org.cnd.projectcnd.daos;

import org.cnd.projectcnd.entities.Listes;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.stereotype.Repository;

import java.util.List;
import java.util.Optional;

@Repository
public class ListesDao {

    private final JdbcTemplate jdbcTemplate;

    public ListesDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    // Mapper pour convertir une ligne SQL en un objet Listes
    private final RowMapper<Listes> listesRowMapper = (rs, rowNum) -> new Listes(
            rs.getLong("id"), // Clé primaire
            rs.getLong("utilisateur_id"), // Référence utilisateur
            rs.getString("nom"), // Nom de la liste
            rs.getString("type") // Type de la liste (ex : Favoris, À regarder...)
    );

    // 1. Insérer une nouvelle liste associée à un utilisateur
    public int save(Listes listes) {
        String sql = "INSERT INTO LISTES (utilisateur_id, nom, type) VALUES (?, ?, ?)";
        return jdbcTemplate.update(sql, listes.getUtilisateurId(), listes.getNom(), listes.getType());
    }

    // 2. Récupérer toutes les listes d’un utilisateur
    public List<Listes> findByUtilisateurId(Long utilisateurId) {
        String sql = "SELECT * FROM LISTES WHERE utilisateur_id = ?";
        return jdbcTemplate.query(sql, listesRowMapper, utilisateurId);
    }

    // 3. Supprimer une liste par son ID
    public int deleteById(Long listeId) {
        String sql = "DELETE FROM LISTES WHERE id = ?";
        return jdbcTemplate.update(sql, listeId);
    }

    // 4. Trouver une liste par son ID
    public Optional<Listes> findById(Long id) {
        String sql = "SELECT * FROM LISTES WHERE id = ?";
        return jdbcTemplate.query(sql, listesRowMapper, id)
                .stream()
                .findFirst(); // Permet de renvoyer un Optional
    }

    // 5. Mettre à jour une liste
    public int update(Listes listes) {
        String sql = "UPDATE LISTES SET nom = ?, type = ? WHERE id = ?";
        return jdbcTemplate.update(sql, listes.getNom(), listes.getType(), listes.getId());
    }

    // 6. Récupérer toutes les listes (par exemple pour l'administrateur ou pour
    // diagnostiquer des erreurs)
    public List<Listes> findAll() {
        String sql = "SELECT * FROM LISTES";
        return jdbcTemplate.query(sql, listesRowMapper);
    }

    // 7. Supprimer toutes les listes associées à un utilisateur
    public int deleteByUtilisateurId(Long utilisateurId) {
        String sql = "DELETE FROM LISTES WHERE utilisateur_id = ?";
        return jdbcTemplate.update(sql, utilisateurId);
    }

    // 8. Vérifier si une liste avec un nom spécifique existe pour un utilisateur
    public boolean existsByUtilisateurIdAndNom(Long utilisateurId, String nom) {
        String sql = "SELECT COUNT(*) FROM LISTES WHERE utilisateur_id = ? AND nom = ?";
        Integer count = jdbcTemplate.queryForObject(sql, Integer.class, utilisateurId, nom);
        return count != null && count > 0;
    }

    // 9. Récupérer toutes les listes d'un type donné pour un utilisateur
    public List<Listes> findByUtilisateurIdAndType(Long utilisateurId, String type) {
        String sql = "SELECT * FROM LISTES WHERE utilisateur_id = ? AND type = ?";
        return jdbcTemplate.query(sql, listesRowMapper, utilisateurId, type);
    }
}
