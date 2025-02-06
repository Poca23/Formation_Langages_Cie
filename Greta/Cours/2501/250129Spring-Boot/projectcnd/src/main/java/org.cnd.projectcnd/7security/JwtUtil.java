package org.cnd.projectcnd.security;

import io.jsonwebtoken.*;
import io.jsonwebtoken.security.Keys;
import jakarta.annotation.PostConstruct;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.stereotype.Service;

import javax.crypto.SecretKey;
import java.util.Base64;
import java.util.Date;

@Service
public class JwtUtil {

    @Value("${jwt.secret}")
    private String jwtSecret;

    @Value("${jwt.expiration}")
    private int jwtExpirationMs;

    private SecretKey key;

    @PostConstruct
    public void init() {
        try {
            // Décoder la clé encodée en Base64
            byte[] decodedKey = Base64.getDecoder().decode(jwtSecret);

            // Vérifier que la clé fait au moins 32 bytes (256 bits)
            if (decodedKey.length < 32) {
                throw new IllegalArgumentException("La clé JWT n'est pas assez longue, elle doit faire au moins 32 bytes.");
            }

            // Créer une SecretKey compatible pour HMAC-SHA
            this.key = Keys.hmacShaKeyFor(decodedKey);

            // Debug : Afficher la longueur pour validation
            System.out.println("Clé JWT initialisée avec succès. Taille : " + decodedKey.length + " bytes.");
        } catch (IllegalArgumentException e) {
            throw new RuntimeException("Erreur lors de l'initialisation de la clé JWT : " + e.getMessage(), e);
        }
    }

    // Ajout d'un getter si tu veux utiliser la clé ailleurs
    public SecretKey getKey() {
        return key;
    }

    public String generateToken(String email) {
        return Jwts.builder()
                .setSubject(email)
                .setIssuedAt(new Date())
                .setExpiration(new Date((new Date()).getTime() + jwtExpirationMs))
                .signWith(key, SignatureAlgorithm.HS256)
                .compact();
    }

    public String getEmailFromToken(String token) {
        return Jwts.parserBuilder()
                .setSigningKey(key).build()
                .parseClaimsJws(token)
                .getBody()
                .getSubject();
    }


    public boolean validateJwtToken(String token) {
        try {
            Jwts.parserBuilder().setSigningKey(key).build().parseClaimsJws(token);
            return true;
        } catch (SecurityException e) {
            throw  new SecurityException("Invalid JWT signature: " + e.getMessage());
        } catch (MalformedJwtException e) {
            throw new MalformedJwtException("Invalid JWT token: " + e.getMessage());
        } catch (ExpiredJwtException e) {
            throw new ExpiredJwtException(null, null, "JWT token is expired: " + e.getMessage());
        } catch (UnsupportedJwtException e) {
            throw new UnsupportedJwtException("JWT token is unsupported: " + e.getMessage());
        } catch (IllegalArgumentException e) {
            throw new IllegalArgumentException("JWT claims string is empty: " + e.getMessage());
        }
    }
}
