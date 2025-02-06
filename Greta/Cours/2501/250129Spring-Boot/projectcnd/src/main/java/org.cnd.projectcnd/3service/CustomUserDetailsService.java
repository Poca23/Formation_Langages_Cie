package org.cnd.projectcnd.service;

import org.cnd.projectcnd.daos.UtilisateurDao;
import org.cnd.projectcnd.entities.CustomUserDetails;
import org.cnd.projectcnd.entities.Utilisateur;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.core.userdetails.UsernameNotFoundException;
import org.springframework.stereotype.Service;

@Service
public class CustomUserDetailsService implements UserDetailsService {

    private final UtilisateurDao utilisateurDao;

    public CustomUserDetailsService(UtilisateurDao utilisateurDao) {
        this.utilisateurDao = utilisateurDao;
    }

    @Override
    public UserDetails loadUserByUsername(String username) throws UsernameNotFoundException {
        Utilisateur utilisateur = utilisateurDao.findByEmail(username);
        return new CustomUserDetails(utilisateur);
    }
}