package org.cnd.projectcnd.daos;

import org.cnd.projectcnd.entities.FilmsListes;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.stereotype.Repository;

import java.util.Date;
import java.util.List;
import java.util.Optional;

@Repository
public class FilmsListesDao {

    private final JdbcTemplate jdbcTemplate;

    public FilmsListesDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    // Mapper pour convertir une ligne SQL en un objet FilmsListes
    private final RowMapper<FilmsListes> filmsListesRowMapper = (rs, rowNum) -> new FilmsListes(
            rs.getLong("id"),
            rs.getLong("liste_id"),
            rs.getLong("film_id"),
            rs.getTimestamp("date_ajout"));

    // 1. Ajouter un film à une liste
    public int ajouterFilmAListe(Long listeId, Long filmId, Date dateAjout) {
        String sql = "INSERT INTO FILMS_LISTES (liste_id, film_id, date_ajout) VALUES (?, ?, ?)";
        return jdbcTemplate.update(sql, listeId, filmId, dateAjout);
    }

    // 2. Récupérer tous les films d'une liste
    public List<Long> findFilmsByListeId(Long listeId) {
        String sql = "SELECT film_id FROM FILMS_LISTES WHERE liste_id = ?";
        return jdbcTemplate.queryForList(sql, Long.class, listeId);
    }

    // 3. Supprimer un film spécifique d'une liste
    public int supprimerFilmDeListe(Long listeId, Long filmId) {
        String sql = "DELETE FROM FILMS_LISTES WHERE liste_id = ? AND film_id = ?";
        return jdbcTemplate.update(sql, listeId, filmId);
    }

    // 4. Supprimer tous les films d'une liste
    public int supprimerTousLesFilmsDeListe(Long listeId) {
        String sql = "DELETE FROM FILMS_LISTES WHERE liste_id = ?";
        return jdbcTemplate.update(sql, listeId);
    }

    // 5. Rechercher une entrée spécifique (film dans une liste)
    public Optional<FilmsListes> findByListeIdAndFilmId(Long listeId, Long filmId) {
        String sql = "SELECT * FROM FILMS_LISTES WHERE liste_id = ? AND film_id = ?";
        return jdbcTemplate.query(sql, filmsListesRowMapper, listeId, filmId)
                .stream()
                .findFirst(); // Retourne un Optional si le film est trouvé dans la liste
    }

    // 6. Récupérer toutes les entrées (films associés à une liste spécifique)
    public List<FilmsListes> findAllByListeId(Long listeId) {
        String sql = "SELECT * FROM FILMS_LISTES WHERE liste_id = ?";
        return jdbcTemplate.query(sql, filmsListesRowMapper, listeId);
    }

    // 7. Récupérer toutes les entrées (tous les films dans toutes les listes)
    public List<FilmsListes> findAll() {
        String sql = "SELECT * FROM FILMS_LISTES";
        return jdbcTemplate.query(sql, filmsListesRowMapper);
    }

    // 8. Vérifier si un film est déjà dans une liste donnée
    public boolean existsByListeIdAndFilmId(Long listeId, Long filmId) {
        String sql = "SELECT COUNT(*) FROM FILMS_LISTES WHERE liste_id = ? AND film_id = ?";
        Integer count = jdbcTemplate.queryForObject(sql, Integer.class, listeId, filmId);
        return count != null && count > 0; // Retourne true si le COUNT > 0
    }

    // 9. Nombre de films dans une liste donnée
    public int countFilmsByListeId(Long listeId) {
        String sql = "SELECT COUNT(*) FROM FILMS_LISTES WHERE liste_id = ?";
        Integer count = jdbcTemplate.queryForObject(sql, Integer.class, listeId);
        return count != null ? count : 0;
    }
}
