@Repository
public class FilmsListesDao {
    private final JdbcTemplate jdbcTemplate;

    public FilmsListesDao(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    // Ajouter un film à une liste
    public int ajouterFilmAListe(Long listeId, Long filmId, Date dateAjout) {
        String sql = "INSERT INTO FILMS_LISTES (liste_id, film_id, date_ajout) VALUES (?, ?, ?)";
        return jdbcTemplate.update(sql, listeId, filmId, dateAjout);
    }

    // Récupérer tous les films d'une liste
    public List<Long> findFilmsByListeId(Long listeId) {
        String sql = "SELECT film_id FROM FILMS_LISTES WHERE liste_id = ?";
        return jdbcTemplate.queryForList(sql, Long.class, listeId);
    }

    // Supprimer un film d'une liste
    public int supprimerFilmDeListe(Long listeId, Long filmId) {
        String sql = "DELETE FROM FILMS_LISTES WHERE liste_id = ? AND film_id = ?";
        return jdbcTemplate.update(sql, listeId, filmId);
    }
}
