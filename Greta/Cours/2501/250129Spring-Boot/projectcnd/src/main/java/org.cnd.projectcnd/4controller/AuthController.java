package org.cnd.projectcnd.controllers;

import org.cnd.projectcnd.daos.UtilisateurDao;
import org.cnd.projectcnd.entities.Utilisateur;
import org.cnd.projectcnd.security.JwtUtil;
import org.springframework.http.ResponseEntity;
import org.springframework.security.authentication.AuthenticationManager;
import org.springframework.security.authentication.UsernamePasswordAuthenticationToken;
import org.springframework.security.core.Authentication;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("/auth")
public class AuthController {
    private final AuthenticationManager authenticationManager;
    private final UtilisateurDao utilisateurDao;
    private final PasswordEncoder encoder;
    private final JwtUtil jwtUtils;

    public AuthController(AuthenticationManager authenticationManager, UtilisateurDao utilisateurDao, PasswordEncoder encoder, JwtUtil jwtUtils) {
        this.authenticationManager = authenticationManager;
        this.utilisateurDao = utilisateurDao;
        this.encoder = encoder;
        this.jwtUtils = jwtUtils;
    }

    @PostMapping("/register")
    public ResponseEntity<String> registerUser(@RequestBody Utilisateur utilisateur) {
        boolean alreadyExists = utilisateurDao.existsByEmail(utilisateur.getEmail());
        if (alreadyExists) {
            return ResponseEntity.badRequest().body("Error: Email is already in use!");
        }
        Utilisateur newUtilisateur = new Utilisateur(
                utilisateur.getEmail(),
                encoder.encode(utilisateur.getMotDePasse()),
                "USER"
        );


        boolean isUSerSaved = utilisateurDao.save(newUtilisateur);
        return isUSerSaved ? ResponseEntity.ok("User registered successfully!") : ResponseEntity.badRequest().
                body("Error: User registration failed!");
    }

    @PostMapping("/login")
    public String authenticateUser(@RequestBody Utilisateur utilisateur) {
        Authentication authentication = authenticationManager.authenticate(
                new UsernamePasswordAuthenticationToken(
                        utilisateur.getEmail(),
                        utilisateur.getMotDePasse()
                )
        );
        UserDetails userDetails = (UserDetails) authentication.getPrincipal();
        return jwtUtils.generateToken(userDetails.getUsername());
    }

}