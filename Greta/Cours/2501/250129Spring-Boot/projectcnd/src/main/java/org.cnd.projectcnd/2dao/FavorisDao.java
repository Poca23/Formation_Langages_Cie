package org.cnd.projectcnd.daos;

import org.cnd.projectcnd.entities.Favoris;
import org.cnd.projectcnd.entities.Film;
import org.cnd.projectcnd.entities.Utilisateur;
import org.cnd.projectcnd.exceptions.ResourceNotFoundException;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public class FavorisDao {

    private final JdbcTemplate jdbcTemplate;

    public FavorisDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    private final RowMapper<Favoris> favorisRowMapper = (rs, _) -> {
        Favoris favoris = new Favoris();
        favoris.setId(rs.getLong("id"));

        // Charger les relations avec les entités `Utilisateur` et `Film`
        Utilisateur utilisateur = new Utilisateur();
        utilisateur.setId(rs.getLong("utilisateur_id"));
        favoris.setUtilisateur(utilisateur);

        Film film = new Film();
        film.setId(rs.getLong("film_id"));
        favoris.setFilm(film);

        favoris.setListeNumero(rs.getInt("liste_numero"));
        return favoris;
    };

    public List<Favoris> findAll() {
        String sql = "SELECT * FROM favoris";
        return jdbcTemplate.query(sql, favorisRowMapper);
    }

    public Favoris findById(Long id) {
        String sql = "SELECT * FROM favoris WHERE id = ?";
        return jdbcTemplate.query(sql, favorisRowMapper, id)
                .stream()
                .findFirst()
                .orElseThrow(() -> new ResourceNotFoundException("Favoris avec l'ID : " + id + " n'existe pas"));
    }

    public Favoris save(Favoris favoris) {
        String sql = "INSERT INTO favoris (utilisateur_id, film_id, liste_numero) VALUES (?, ?, ?)";
        jdbcTemplate.update(sql,
                favoris.getUtilisateur().getId(),
                favoris.getFilm().getId(),
                favoris.getListeNumero()
        );

        String sqlGetId = "SELECT LAST_INSERT_ID()";
        Long id = jdbcTemplate.queryForObject(sqlGetId, Long.class);

        favoris.setId(id);
        return favoris;
    }

    public Favoris update(Long id, Favoris favoris) {
        if (!favorisExists(id)) {
            throw new ResourceNotFoundException("Favoris avec l'ID : " + id + " n'existe pas");
        }

        String sql = "UPDATE favoris SET utilisateur_id = ?, film_id = ?, liste_numero = ? WHERE id = ?";
        int rowsAffected = jdbcTemplate.update(sql,
                favoris.getUtilisateur().getId(),
                favoris.getFilm().getId(),
                favoris.getListeNumero(),
                id
        );

        if (rowsAffected <= 0) {
            throw new ResourceNotFoundException("Échec de la mise à jour du favori avec l'ID : " + id);
        }

        return this.findById(id);
    }

    public boolean delete(Long id) {
        String sql = "DELETE FROM favoris WHERE id = ?";
        int rowsAffected = jdbcTemplate.update(sql, id);
        return rowsAffected > 0;
    }

    private boolean favorisExists(Long id) {
        String checkSql = "SELECT COUNT(*) FROM favoris WHERE id = ?";
        int count = jdbcTemplate.queryForObject(checkSql, Integer.class, id);
        return count > 0;
    }
}
