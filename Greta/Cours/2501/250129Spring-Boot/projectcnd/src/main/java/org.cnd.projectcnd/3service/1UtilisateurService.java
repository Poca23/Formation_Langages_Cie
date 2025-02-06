package com.example.movies.service;

import com.example.movies.dao.UtilisateurDao;
import com.example.movies.entity.Utilisateur;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class UtilisateurService {

    private final UtilisateurDao utilisateurDao;

    public UtilisateurService(UtilisateurDao utilisateurDao) {
        this.utilisateurDao = utilisateurDao;
    }

    public List<Utilisateur> getAllUtilisateurs() {
        return utilisateurDao.findAll();
    }

    public Utilisateur getUtilisateurById(Long id) {
        return utilisateurDao.findById(id);
    }

    public int ajouterUtilisateur(Utilisateur utilisateur) {
        return utilisateurDao.save(utilisateur);
    }

    public int supprimerUtilisateur(Long id) {
        return utilisateurDao.deleteById(id);
    }
}
