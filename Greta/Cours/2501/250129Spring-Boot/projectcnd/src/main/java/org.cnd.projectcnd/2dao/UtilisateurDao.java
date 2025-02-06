package org.cnd.projectcnd.daos;

import org.cnd.projectcnd.entities.Utilisateur;
import org.cnd.projectcnd.exceptions.ResourceNotFoundException;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.security.core.userdetails.UsernameNotFoundException;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public class UtilisateurDao {

    private final JdbcTemplate jdbcTemplate;

    public UtilisateurDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    // Mapper pour convertir une ligne SQL en une entité Utilisateur
    private final RowMapper<Utilisateur> utilisateurRowMapper = (rs, _) -> {
        Utilisateur utilisateur = new Utilisateur();
        utilisateur.setId(rs.getLong("id"));
        utilisateur.setNom(rs.getString("nom"));
        utilisateur.setPrenom(rs.getString("prenom"));
        utilisateur.setEmail(rs.getString("email"));
        utilisateur.setMotDePasse(rs.getString("mot_de_passe"));
        utilisateur.setDateInscription(rs.getDate("date_inscription").toLocalDate());
        utilisateur.setRole(rs.getString("role")); // Assurez-vous du nom exact de la colonne en base
        return utilisateur;
    };

    // Récupérer tous les utilisateurs
    public List<Utilisateur> findAll() {
        String sql = "SELECT * FROM utilisateurs";
        return jdbcTemplate.query(sql, utilisateurRowMapper);
    }

    // Récupérer un utilisateur par ID
    public Utilisateur findById(Long id) {
        String sql = "SELECT * FROM utilisateurs WHERE id = ?";
        return jdbcTemplate.query(sql, utilisateurRowMapper, id)
                .stream()
                .findFirst()
                .orElseThrow(() -> new UsernameNotFoundException("Utilisateur avec ID " + id + " non trouvé"));
    }

    // Récupérer un utilisateur par email
    public Utilisateur findByEmail(String email) {
        String sql = "SELECT * FROM utilisateurs WHERE email = ?";
        return jdbcTemplate.query(sql, utilisateurRowMapper, email)
                .stream()
                .findFirst()
                .orElseThrow(() -> new UsernameNotFoundException("Utilisateur avec email " + email + " non trouvé"));
    }

    // Ajouter un nouvel utilisateur
    public Utilisateur save(Utilisateur utilisateur) {
        String sql = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe, date_inscription, role) VALUES (?, ?, ?, ?, ?, ?)";
        jdbcTemplate.update(sql,
                utilisateur.getNom(),
                utilisateur.getPrenom(),
                utilisateur.getEmail(),
                utilisateur.getMotDePasse(),
                utilisateur.getDateInscription(),
                utilisateur.getRole() // Ajout de la colonne `role`
        );

        // Récupérer l'ID généré automatiquement
        String sqlGetId = "SELECT LAST_INSERT_ID()";
        Long id = jdbcTemplate.queryForObject(sqlGetId, Long.class);

        utilisateur.setId(id);
        return utilisateur;
    }

    // Mettre à jour un utilisateur existant
    public Utilisateur update(Long id, Utilisateur utilisateur) {
        String sql = "UPDATE utilisateurs SET nom = ?, prenom = ?, email = ?, mot_de_passe = ?, date_inscription = ?, role = ? WHERE id = ?";
        int rowsAffected = jdbcTemplate.update(sql,
                utilisateur.getNom(),
                utilisateur.getPrenom(),
                utilisateur.getEmail(),
                utilisateur.getMotDePasse(),
                utilisateur.getDateInscription(),
                utilisateur.getRole(), // Ajout de la colonne `role`
                id);

        if (rowsAffected <= 0) {
            throw new UsernameNotFoundException("Impossible de mettre à jour l'utilisateur avec ID : " + id);
        }

        return findById(id);
    }

    // Supprimer un utilisateur par ID
    public boolean deleteById(Long id) {
        String sql = "DELETE FROM utilisateurs WHERE id = ?";
        int rowsAffected = jdbcTemplate.update(sql, id);
        return rowsAffected > 0;
    }

    // Supprimer un utilisateur par email
    public boolean deleteByEmail(String email) {
        String sql = "DELETE FROM utilisateurs WHERE email = ?";
        int rowsAffected = jdbcTemplate.update(sql, email);
        return rowsAffected > 0;
    }

    // Vérifier l'existence d'un utilisateur par email
    public boolean existsByEmail(String email) {
        String sql = "SELECT COUNT(*) FROM utilisateurs WHERE email = ?";
        Integer count = jdbcTemplate.queryForObject(sql, Integer.class, email);
        return count != null && count > 0;
    }
}
