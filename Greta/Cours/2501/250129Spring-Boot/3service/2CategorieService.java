package com.example.movies.service;

import com.example.movies.dao.CategorieDao;
import com.example.movies.entity.Categorie;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class CategorieService {

    private final CategorieDao categorieDao;

    public CategorieService(CategorieDao categorieDao) {
        this.categorieDao = categorieDao;
    }

    // Récupérer une catégorie par ID
    public Categorie getCategorieById(Long id) {
        return categorieDao.findById(id);
    }

    // Lister toutes les catégories
    public List<Categorie> getAllCategories() {
        return categorieDao.findAll();
    }

    // Ajouter une nouvelle catégorie
    public int ajouterCategorie(Categorie categorie) {
        return categorieDao.save(categorie);
    }

    // Supprimer une catégorie
    public int supprimerCategorie(Long id) {
        return categorieDao.deleteById(id);
    }
}
