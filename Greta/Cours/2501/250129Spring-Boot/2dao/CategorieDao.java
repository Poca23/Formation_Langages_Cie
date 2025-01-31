package org.cnd.projectcnd.daos;

import org.cnd.projectcnd.entities.Categorie;
import org.springframework.dao.EmptyResultDataAccessException;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.stereotype.Repository;

import java.util.List;
import java.util.Optional;

@Repository // Indique que cette classe appartient à la couche DAO
public class CategorieDao {

    private final JdbcTemplate jdbcTemplate;

    // Constructeur pour injecter JdbcTemplate
    public CategorieDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    // Mapper : Transforme une ligne SQL en objet Categorie
    private final RowMapper<Categorie> categorieRowMapper = (rs, rowNum) -> new Categorie(
            rs.getLong("id"), // Récupère l'ID
            rs.getString("nom") // Récupère le nom
    );

    // 1. Obtenir une catégorie par ID
    public Optional<Categorie> findById(Long id) {
        String sql = "SELECT * FROM CATEGORIES WHERE id = ?";
        try {
            return Optional.ofNullable(jdbcTemplate.queryForObject(sql, categorieRowMapper, id));
        } catch (EmptyResultDataAccessException e) {
            return Optional.empty(); // Renvoie vide si non trouvé
        }
    }

    // 2. Lister toutes les catégories
    public List<Categorie> findAll() {
        String sql = "SELECT * FROM CATEGORIES";
        return jdbcTemplate.query(sql, categorieRowMapper);
    }

    // 3. Ajouter une nouvelle catégorie
    public int save(Categorie categorie) {
        String sql = "INSERT INTO CATEGORIES (nom) VALUES (?)"; // Insère une nouvelle catégorie
        return jdbcTemplate.update(sql, categorie.getNom());
    }

    // 4. Mettre à jour une catégorie par ID
    public int update(Long id, String newNom) {
        String sql = "UPDATE CATEGORIES SET nom = ? WHERE id = ?"; // Met à jour le nom correspondant
        return jdbcTemplate.update(sql, newNom, id);
    }

    // 5. Supprimer une catégorie par ID
    public int deleteById(Long id) {
        String sql = "DELETE FROM CATEGORIES WHERE id = ?"; // Supprime une catégorie
        return jdbcTemplate.update(sql, id);
    }
}
