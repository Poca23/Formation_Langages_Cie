package org.cnd.projectcnd.daos;

import org.cnd.projectcnd.entities.Categorie;
import org.cnd.projectcnd.exceptions.ResourceNotFoundException;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public class CategorieDao {

    private final JdbcTemplate jdbcTemplate;

    public CategorieDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    private final RowMapper<Categorie> categorieRowMapper = (rs, _) -> new Categorie(
            rs.getLong("id"),
            rs.getString("nom"));

    public List<Categorie> findAll() {
        try {
            String sql = "SELECT * FROM CATEGORIES";
            return jdbcTemplate.query(sql, categorieRowMapper);
        } catch (Exception e) {
            System.err.println("Erreur lors de la récupération de toutes les catégories : " + e.getMessage());
            e.printStackTrace();
            throw e;
        }
    }

    public Categorie findById(Long id) {
        try {
            String sql = "SELECT * FROM CATEGORIES WHERE id = ?";
            return jdbcTemplate.query(sql, categorieRowMapper, id)
                    .stream()
                    .findFirst()
                    .orElseThrow(() -> new ResourceNotFoundException("Catégorie avec l'ID : " + id + " n'existe pas"));
        } catch (Exception e) {
            System.err.println("Erreur lors de la recherche de la catégorie avec l'ID " + id + " : " + e.getMessage());
            e.printStackTrace();
            throw e;
        }
    }

    public Categorie save(Categorie categorie) {
        try {
            String sql = "INSERT INTO CATEGORIES (nom) VALUES (?)";
            jdbcTemplate.update(sql, categorie.getNom());

            String sqlGetId = "SELECT LAST_INSERT_ID()";
            Long id = jdbcTemplate.queryForObject(sqlGetId, Long.class);

            categorie.setId(id);
            return categorie;
        } catch (Exception e) {
            System.err.println("Erreur lors de la sauvegarde de la catégorie : " + e.getMessage());
            e.printStackTrace();
            throw e;
        }
    }

    public Categorie update(Long id, Categorie categorie) {
        try {
            if (!categorieExists(id)) {
                throw new ResourceNotFoundException("Catégorie avec l'ID : " + id + " n'existe pas");
            }

            String sql = "UPDATE CATEGORIES SET nom = ? WHERE id = ?";
            int rowsAffected = jdbcTemplate.update(sql, categorie.getNom(), id);

            if (rowsAffected <= 0) {
                throw new ResourceNotFoundException("Échec de la mise à jour de la catégorie avec l'ID : " + id);
            }

            return this.findById(id);
        } catch (Exception e) {
            System.err
                    .println("Erreur lors de la mise à jour de la catégorie avec l'ID " + id + " : " + e.getMessage());
            e.printStackTrace();
            throw e;
        }
    }

    public boolean delete(Long id) {
        try {
            if (!categorieExists(id)) {
                throw new ResourceNotFoundException("Catégorie avec l'ID : " + id + " n'existe pas");
            }

            String sql = "DELETE FROM CATEGORIES WHERE id = ?";
            int rowsAffected = jdbcTemplate.update(sql, id);
            return rowsAffected > 0;
        } catch (Exception e) {
            System.err
                    .println("Erreur lors de la suppression de la catégorie avec l'ID " + id + " : " + e.getMessage());
            e.printStackTrace();
            throw e;
        }
    }

    private boolean categorieExists(Long id) {
        try {
            String checkSql = "SELECT COUNT(*) FROM CATEGORIES WHERE id = ?";
            int count = jdbcTemplate.queryForObject(checkSql, Integer.class, id);
            return count > 0;
        } catch (Exception e) {
            System.err.println("Erreur lors de la vérification de l'existence de la catégorie avec l'ID " + id + " : "
                    + e.getMessage());
            e.printStackTrace();
            throw e;
        }
    }
}
