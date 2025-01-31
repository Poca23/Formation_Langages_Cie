package org.cnd.projectcnd.daos;

import jakarta.persistence.EntityManager;
import jakarta.persistence.PersistenceContext;
import jakarta.transaction.Transactional;
import org.cnd.projectcnd.entities.Favoris;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
@Transactional
public class FavorisDao {

    @PersistenceContext
    private EntityManager entityManager;

    // Ajouter un Favoris (avec relation directe)
    public Favoris ajouterFavoris(Favoris favoris) {
        entityManager.persist(favoris); // Persiste l'entité en base
        return favoris;
    }

    // Ajouter un Favoris en utilisant des IDs d'utilisateur et de film
    public Favoris ajouterFavoris(Long utilisateurId, Long filmId, int listeNumero) {
        Favoris favoris = new Favoris(utilisateurId, filmId, listeNumero);
        entityManager.persist(favoris); // Persiste directement en base
        return favoris;
    }

    // Trouver un Favoris par son ID
    public Favoris trouverParId(Long id) {
        return entityManager.find(Favoris.class, id); // Recherche par clé primaire
    }

    // Trouver tous les Favoris
    public List<Favoris> trouverTous() {
        return entityManager.createQuery("SELECT f FROM Favoris f", Favoris.class).getResultList();
    }

    // Trouver les Favoris pour un utilisateur donné
    public List<Favoris> trouverParUtilisateurId(Long utilisateurId) {
        return entityManager.createQuery(
                "SELECT f FROM Favoris f WHERE f.utilisateur.id = :utilisateurId", Favoris.class)
                .setParameter("utilisateurId", utilisateurId)
                .getResultList();
    }

    // Trouver les Favoris pour un utilisateur et une liste spécifique
    public List<Favoris> trouverParUtilisateurEtListe(Long utilisateurId, int listeNumero) {
        return entityManager.createQuery(
                "SELECT f FROM Favoris f WHERE f.utilisateur.id = :utilisateurId AND f.listeNumero = :listeNumero",
                Favoris.class)
                .setParameter("utilisateurId", utilisateurId)
                .setParameter("listeNumero", listeNumero)
                .getResultList();
    }

    // Supprimer un Favoris par son ID
    public void supprimerParId(Long id) {
        Favoris favoris = trouverParId(id);
        if (favoris != null) {
            entityManager.remove(favoris);
        }
    }

    // Mettre à jour un Favoris
    public Favoris mettreAJourFavoris(Long id, int nouveauNumeroListe) {
        Favoris favoris = trouverParId(id);
        if (favoris != null) {
            favoris.setListeNumero(nouveauNumeroListe); // Modifie le numéro de la liste
            entityManager.merge(favoris); // Met à jour l'entité dans la base
        }
        return favoris;
    }
}
