package org.cnd.projectcnd.daos;

import org.cnd.projectcnd.entities.FilmsListes;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public class FilmsListesDao {

    private final JdbcTemplate jdbcTemplate;

    public FilmsListesDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    private final RowMapper<FilmsListes> filmsListesRowMapper = (rs, _) -> new FilmsListes(
            rs.getLong("id"),
            rs.getLong("liste_id"),
            rs.getLong("film_id"),
            rs.getTimestamp("date_ajout") // Conversion SQL -> Java Date
    );

    // Récupérer toutes les associations Films-Listes
    public List<FilmsListes> findAll() {
        String sql = "SELECT * FROM films_listes";
        return jdbcTemplate.query(sql, filmsListesRowMapper);
    }

    // Récupérer toutes les films associés à une liste donnée
    public List<FilmsListes> findByListeId(Long listeId) {
        String sql = "SELECT * FROM films_listes WHERE liste_id = ?";
        return jdbcTemplate.query(sql, filmsListesRowMapper, listeId);
    }

    // Récupérer toutes les listes associées à un film donné
    public List<FilmsListes> findByFilmId(Long filmId) {
        String sql = "SELECT * FROM films_listes WHERE film_id = ?";
        return jdbcTemplate.query(sql, filmsListesRowMapper, filmId);
    }

    // Ajouter une relation Films-Listes
    public FilmsListes save(FilmsListes filmsListes) {
        String sql = "INSERT INTO films_listes (liste_id, film_id, date_ajout) VALUES (?, ?, ?)";
        jdbcTemplate.update(sql,
                filmsListes.getListeId(),
                filmsListes.getFilmId(),
                filmsListes.getDateAjout() // Date automatiquement insérée
        );

        // Récupérer l'ID généré automatiquement
        String sqlGetId = "SELECT LAST_INSERT_ID()";
        Long id = jdbcTemplate.queryForObject(sqlGetId, Long.class);

        filmsListes.setId(id);
        return filmsListes;
    }

    // Supprimer une relation Films-Listes spécifique (par liste_id et film_id)
    public boolean deleteByListeAndFilm(Long listeId, Long filmId) {
        String sql = "DELETE FROM films_listes WHERE liste_id = ? AND film_id = ?";
        int rowsAffected = jdbcTemplate.update(sql, listeId, filmId);
        return rowsAffected > 0;
    }

    // Supprimer une relation spécifique (par id)
    public boolean deleteById(Long id) {
        String sql = "DELETE FROM films_listes WHERE id = ?";
        int rowsAffected = jdbcTemplate.update(sql, id);
        return rowsAffected > 0;
    }

    // Supprimer toutes les relations associées à une liste donnée
    public boolean deleteByListeId(Long listeId) {
        String sql = "DELETE FROM films_listes WHERE liste_id = ?";
        int rowsAffected = jdbcTemplate.update(sql, listeId);
        return rowsAffected > 0;
    }

    // Supprimer toutes les relations associées à un film donné
    public boolean deleteByFilmId(Long filmId) {
        String sql = "DELETE FROM films_listes WHERE film_id = ?";
        int rowsAffected = jdbcTemplate.update(sql, filmId);
        return rowsAffected > 0;
    }
}
