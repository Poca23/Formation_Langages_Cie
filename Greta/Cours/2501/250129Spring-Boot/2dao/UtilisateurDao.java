package org.cnd.projectcnd.daos;

import org.cnd.projectcnd.entities.Utilisateur;
import org.springframework.dao.EmptyResultDataAccessException;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.stereotype.Repository;

import java.util.List;
import java.util.Optional;

@Repository
public class UtilisateurDao {

    private final JdbcTemplate jdbcTemplate;

    // Constructeur pour injecter JdbcTemplate
    public UtilisateurDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    // Mapper : Conversion des lignes SQL vers des objets Java (Utilisateur)
    private final RowMapper<Utilisateur> utilisateurRowMapper = (rs, rowNum) -> new Utilisateur(
            rs.getString("nom"),
            rs.getString("prenom"),
            rs.getString("email"),
            rs.getString("mot_de_passe"),
            rs.getDate("date_inscription").toLocalDate());

    // 1. Trouver un utilisateur par ID
    public Optional<Utilisateur> findUtilisateurById(Long id) {
        String sql = "SELECT * FROM UTILISATEURS WHERE id = ?";
        try {
            return Optional.ofNullable(
                    jdbcTemplate.queryForObject(sql, utilisateurRowMapper, id));
        } catch (EmptyResultDataAccessException e) {
            return Optional.empty();
        }
    }

    // 2. Lister tous les utilisateurs
    public List<Utilisateur> findAllUtilisateurs() {
        String sql = "SELECT * FROM UTILISATEURS";
        return jdbcTemplate.query(sql, utilisateurRowMapper);
    }

    // 3. Ajouter un nouvel utilisateur
    public int saveUtilisateur(Utilisateur utilisateur) {
        String sql = "INSERT INTO UTILISATEURS (nom, prenom, email, mot_de_passe, date_inscription) VALUES (?, ?, ?, ?, ?)";
        return jdbcTemplate.update(
                sql,
                utilisateur.getNom(),
                utilisateur.getPrenom(),
                utilisateur.getEmail(),
                utilisateur.getMotDePasse(),
                utilisateur.getDateInscription());
    }

    // 4. Mettre à jour un utilisateur
    public int updateUtilisateur(Long id, Utilisateur utilisateur) {
        String sql = "UPDATE UTILISATEURS SET nom = ?, prenom = ?, email = ?, mot_de_passe = ?, date_inscription = ? WHERE id = ?";
        return jdbcTemplate.update(
                sql,
                utilisateur.getNom(),
                utilisateur.getPrenom(),
                utilisateur.getEmail(),
                utilisateur.getMotDePasse(),
                utilisateur.getDateInscription(),
                id);
    }

    // 5. Supprimer un utilisateur par ID
    public int deleteUtilisateurById(Long id) {
        String sql = "DELETE FROM UTILISATEURS WHERE id = ?";
        return jdbcTemplate.update(sql, id);
    }

    // 6. Trouver un utilisateur par email
    public Optional<Utilisateur> findUtilisateurByEmail(String email) {
        String sql = "SELECT * FROM UTILISATEURS WHERE email = ?";
        try {
            return Optional.ofNullable(
                    jdbcTemplate.queryForObject(sql, utilisateurRowMapper, email));
        } catch (EmptyResultDataAccessException e) {
            return Optional.empty();
        }
    }
}
