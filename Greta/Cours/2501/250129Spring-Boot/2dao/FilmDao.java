package org.cnd.projectcnd.daos;

import org.cnd.projectcnd.entities.Film;
import org.cnd.projectcnd.exceptions.ResourceNotFoundException;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.stereotype.Repository;

import java.time.LocalDate;
import java.util.List;

@Repository
public class FilmDao {

    private final JdbcTemplate jdbcTemplate;

    public FilmDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    private final RowMapper<Film> filmRowMapper = (rs, _) -> new Film(
            rs.getLong("id"),
            rs.getString("titre"),
            rs.getString("synopsis"),
            rs.getObject("date_sortie", LocalDate.class), // Conversion SQL -> LocalDate
            rs.getString("image"),
            rs.getFloat("notation"),
            rs.getString("critique"));

    public List<Film> findAll() {
        String sql = "SELECT * FROM films";
        return jdbcTemplate.query(sql, filmRowMapper);
    }

    public Film findById(Long id) {
        String sql = "SELECT * FROM films WHERE id = ?";
        return jdbcTemplate.query(sql, filmRowMapper, id)
                .stream()
                .findFirst()
                .orElseThrow(() -> new ResourceNotFoundException("Film avec l'ID : " + id + " n'existe pas"));
    }

    public Film save(Film film) {
        String sql = "INSERT INTO films (titre, synopsis, date_sortie, image, notation, critique) VALUES (?, ?, ?, ?, ?, ?)";
        jdbcTemplate.update(sql,
                film.getTitre(),
                film.getSynopsis(),
                film.getDateSortie(),
                film.getImage(),
                film.getNotation(),
                film.getCritique());

        // Récupérer l'ID généré automatiquement
        String sqlGetId = "SELECT LAST_INSERT_ID()";
        Long id = jdbcTemplate.queryForObject(sqlGetId, Long.class);

        film.setId(id);
        return film;
    }

    public Film update(Long id, Film film) {
        if (!filmExists(id)) {
            throw new ResourceNotFoundException("Film avec l'ID : " + id + " n'existe pas");
        }

        String sql = "UPDATE films SET titre = ?, synopsis = ?, date_sortie = ?, image = ?, notation = ?, critique = ? WHERE id = ?";
        int rowsAffected = jdbcTemplate.update(sql,
                film.getTitre(),
                film.getSynopsis(),
                film.getDateSortie(),
                film.getImage(),
                film.getNotation(),
                film.getCritique(),
                id);

        if (rowsAffected <= 0) {
            throw new ResourceNotFoundException("Échec de la mise à jour du film avec l'ID : " + id);
        }

        return this.findById(id);
    }

    public boolean delete(Long id) {
        String sql = "DELETE FROM films WHERE id = ?";
        int rowsAffected = jdbcTemplate.update(sql, id);
        return rowsAffected > 0;
    }

    private boolean filmExists(Long id) {
        String checkSql = "SELECT COUNT(*) FROM films WHERE id = ?";
        int count = jdbcTemplate.queryForObject(checkSql, Integer.class, id);
        return count > 0;
    }
}
