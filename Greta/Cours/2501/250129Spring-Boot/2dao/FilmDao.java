package org.cnd.projectcnd.daos;

import org.cnd.projectcnd.entities.Film;
import org.cnd.projectcnd.exceptions.EntityNotFoundException;
import org.springframework.dao.EmptyResultDataAccessException;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public class FilmDao {

    private final JdbcTemplate jdbcTemplate;

    public FilmDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    // Constantes SQL
    private static final String SQL_SELECT_ALL = "SELECT * FROM FILMS";
    private static final String SQL_SELECT_BY_ID = "SELECT * FROM FILMS WHERE id = ?";
    private static final String SQL_INSERT = "INSERT INTO FILMS (titre, synopsis, date_sortie, image, notation, critique) VALUES (?, ?, ?, ?, ?, ?)";
    private static final String SQL_UPDATE = "UPDATE FILMS SET titre = ?, synopsis = ?, date_sortie = ?, image = ?, notation = ?, critique = ? WHERE id = ?";
    private static final String SQL_DELETE_BY_ID = "DELETE FROM FILMS WHERE id = ?";
    private static final String SQL_COUNT_BY_ID = "SELECT COUNT(*) FROM FILMS WHERE id = ?";
    private static final String SQL_SELECT_BY_TITRE = "SELECT * FROM FILMS WHERE titre LIKE ?";
    private static final String SQL_SELECT_CATEGORIES_BY_FILM = "SELECT c.nom FROM CATEGORIES c INNER JOIN FILMS_CATEGORIES fc ON c.id = fc.categorie_id WHERE fc.film_id = ?";
    private static final String SQL_INSERT_FILM_CATEGORY = "INSERT INTO FILMS_CATEGORIES (film_id, categorie_id) VALUES (?, ?)";

    // Constantes colonnes
    private static final String COL_ID = "id";
    private static final String COL_TITRE = "titre";
    private static final String COL_SYNOPSIS = "synopsis";
    private static final String COL_DATE_SORTIE = "date_sortie";
    private static final String COL_IMAGE = "image";
    private static final String COL_NOTATION = "notation";
    private static final String COL_CRITIQUE = "critique";

    // Mappers
    private final RowMapper<Film> filmRowMapper = (rs, rowNum) -> new Film(
            rs.getLong(COL_ID),
            rs.getString(COL_TITRE),
            rs.getString(COL_SYNOPSIS),
            rs.getDate(COL_DATE_SORTIE) != null ? rs.getDate(COL_DATE_SORTIE).toLocalDate() : null,
            rs.getString(COL_IMAGE),
            rs.getObject(COL_NOTATION, Float.class),
            rs.getString(COL_CRITIQUE));

    /**
     * Récupère tous les films présents dans la base de données.
     *
     * @return Liste contenant tous les films.
     */
    public List<Film> findAll() {
        return jdbcTemplate.query(SQL_SELECT_ALL, filmRowMapper);
    }

    /**
     * Recherche des films par titre partiel ou complet.
     *
     * @param titre Le mot clé du titre.
     * @return Liste des films correspondants.
     */
    public List<Film> findByTitre(String titre) {
        return jdbcTemplate.query(SQL_SELECT_BY_TITRE, filmRowMapper, "%" + titre + "%");
    }

    /**
     * Récupère un film par son ID.
     *
     * @param id L'identifiant du film.
     * @return L'objet Film correspondant.
     * @throws EntityNotFoundException si le film n'existe pas.
     */
    public Film findById(Long id) {
        try {
            return jdbcTemplate.queryForObject(SQL_SELECT_BY_ID, filmRowMapper, id);
        } catch (EmptyResultDataAccessException ex) {
            throw new EntityNotFoundException("Film avec l'ID " + id + " n'existe pas.");
        }
    }

    /**
     * Sauvegarde un nouveau film dans la base.
     *
     * @param film L'objet Film à sauvegarder.
     * @return Le nombre de lignes affectées.
     */
    public int save(Film film) {
        return jdbcTemplate.update(SQL_INSERT,
                film.getTitre(),
                film.getSynopsis(),
                film.getDateSortie(),
                film.getImage(),
                film.getNotation(),
                film.getCritique());
    }

    /**
     * Met à jour un film existant.
     *
     * @param id   L'ID du film à modifier.
     * @param film Les nouvelles informations à mettre à jour.
     * @return Le film modifié.
     * @throws EntityNotFoundException si le film n'existe pas.
     */
    public Film update(Long id, Film film) {
        if (!existsById(id)) {
            throw new EntityNotFoundException("Film avec l'ID " + id + " n'existe pas.");
        }

        jdbcTemplate.update(SQL_UPDATE,
                film.getTitre(),
                film.getSynopsis(),
                film.getDateSortie(),
                film.getImage(),
                film.getNotation(),
                film.getCritique(),
                id);
        return findById(id); // Retourner l'objet Film modifié
    }

    /**
     * Vérifie l'existence d'un film par son ID.
     *
     * @param id L'identifiant.
     * @return True si le film existe, False sinon.
     */
    public boolean existsById(Long id) {
        Integer count = jdbcTemplate.queryForObject(SQL_COUNT_BY_ID, Integer.class, id);
        return count != null && count > 0;
    }

    /**
     * Supprime un film de la base de données.
     *
     * @param id L'identifiant du film à supprimer.
     * @return Nombre de lignes affectées.
     * @throws EntityNotFoundException si le film n'existe pas.
     */
    public int deleteById(Long id) {
        if (!existsById(id)) {
            throw new EntityNotFoundException("Film avec l'ID " + id + " n'existe pas.");
        }
        return jdbcTemplate.update(SQL_DELETE_BY_ID, id);
    }

    /**
     * Récupère les catégories associées à un film.
     *
     * @param filmId L'ID du film.
     * @return Liste des noms des catégories.
     */
    public List<String> findCategorieByFilmId(Long filmId) {
        return jdbcTemplate.query(SQL_SELECT_CATEGORIES_BY_FILM,
                (rs, rowNum) -> rs.getString("nom"),
                filmId);
    }

    /**
     * Associe un film à une ou plusieurs catégories.
     *
     * @param filmId       L'ID du film.
     * @param categorieIds Liste des IDs des catégories.
     * @return Le nombre de relations ajoutées.
     */
    public int addFilmToCategories(Long filmId, List<Long> categorieIds) {
        int rowsAdded = 0;
        for (Long categorieId : categorieIds) {
            rowsAdded += jdbcTemplate.update(SQL_INSERT_FILM_CATEGORY, filmId, categorieId);
        }
        return rowsAdded;
    }
}
