package org.cnd.projectcnd.daos;

import org.cnd.projectcnd.entities.FilmCategorie;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository // Indique que cette classe fait partie de la couche DAO
public class FilmCategorieDao {

    private final JdbcTemplate jdbcTemplate;

    // Constructeur pour injecter JdbcTemplate
    public FilmCategorieDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    // Mapper : Transforme une ligne SQL en objet FilmCategorie
    private final RowMapper<FilmCategorie> filmCategorieRowMapper = (rs, rowNum) -> new FilmCategorie(
            rs.getLong("film_id"), // Récupère l'identifiant du film
            rs.getLong("categorie_id") // Récupère l'identifiant de la catégorie
    );

    // 1. Insérer une relation entre un film et une catégorie
    public int save(FilmCategorie filmCategorie) {
        String sql = "INSERT INTO FILMS_CATEGORIES (film_id, categorie_id) VALUES (?, ?)";
        return jdbcTemplate.update(sql, filmCategorie.getFilmId(), filmCategorie.getCategorieId());
    }

    // 2. Obtenir toutes les relations film-catégorie
    public List<FilmCategorie> findAll() {
        String sql = "SELECT * FROM FILMS_CATEGORIES"; // Requête pour récupérer toutes les lignes
        return jdbcTemplate.query(sql, filmCategorieRowMapper);
    }

    // 3. Obtenir les relations pour un film donné
    public List<FilmCategorie> findByFilmId(Long filmId) {
        String sql = "SELECT * FROM FILMS_CATEGORIES WHERE film_id = ?"; // Filtre par film_id
        return jdbcTemplate.query(sql, filmCategorieRowMapper, filmId);
    }

    // 4. Supprimer une relation entre un film et une catégorie
    public int delete(FilmCategorie filmCategorie) {
        String sql = "DELETE FROM FILMS_CATEGORIES WHERE film_id = ? AND categorie_id = ?"; // Supprime où les deux
                                                                                            // correspondent
        return jdbcTemplate.update(sql, filmCategorie.getFilmId(), filmCategorie.getCategorieId());
    }

    // 5. Supprimer toutes les relations pour un film donné
    public int deleteByFilmId(Long filmId) {
        String sql = "DELETE FROM FILMS_CATEGORIES WHERE film_id = ?"; // Supprime toutes les relations utilisant
                                                                       // film_id
        return jdbcTemplate.update(sql, filmId);
    }

    // 6. Supprimer toutes les relations pour une catégorie donnée
    public int deleteByCategorieId(Long categorieId) {
        String sql = "DELETE FROM FILMS_CATEGORIES WHERE categorie_id = ?"; // Supprime toutes les relations utilisant
                                                                            // categorie_id
        return jdbcTemplate.update(sql, categorieId);
    }
}
