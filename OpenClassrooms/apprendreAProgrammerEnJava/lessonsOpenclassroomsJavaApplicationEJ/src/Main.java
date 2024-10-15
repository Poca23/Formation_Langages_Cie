



// public class Main {
//     // public static void main(String[] args) {
//     // String texte = "Hello World";
//     // System.out.println(texte);

//     //     System.out.println("Hello world !");
//     //     System.out.println("Salut les gens");
//     //     String langage = "Java";
//     //     String phrase = langage + " est un langage de programmation.";
//     //     System.out.println(phrase);

//     //     int[] unTableuDEntier = { 5, 10, 15, 20 };
//     //     char[] unTableauDeChar = new char[3];
//     //     System.out.println(unTableuDEntier[0]);
//     //     System.out.println(unTableauDeChar.length);

//     //     unTableauDeChar[0] = 'a';
//     //     unTableauDeChar[1] = 'b';
//     //     unTableauDeChar[2] = 'c';
//     //     System.out.println(unTableauDeChar);

//     //     int[][] unTableauBiDimentionnel = new int[2][3];
//     //     System.out.println(unTableauBiDimentionnel.length);

//     //     var unEntier = 5;
//     //     System.out.println(unEntier);

//     //     String texte = "Une fonction en Java a été exécutée";
//     //     System.out.println(texte);

//     //     int somme = Main.addition(2, 7);
//     //     System.out.println(somme);
//     // }

//     // public static int addition(final int entier1, final int entier2) {
//     //     return entier1 + entier2;
//     // }

//     // public static void decompte(final int valeur) {
//     //     if (valeur >= 0) {
//     //         System.out.println(valeur);
//     //         decompte(valeur - 1);
//     //     }
//     // }

//     // public static void main(String[] args) {
//     //     affichage(" Marty");
//     // }

//     // public static void affichage(String texte) {
//     //     System.out.println("Bonjour" + texte);
//     // }
//     // public static void main(String[] args) {
//     //     int valeur = 5;
//     //     System.out.println(valeur);
//     //     chiffreEgalAZero(valeur);
//     // }

//     // public static void chiffreEgalAZero(final int valeur) {
//     //     if (valeur == 0) {
//     //         System.out.println("L’entier passé en paramètre vaut 0");
//     //     } else {
//     //         System.out.println("L’entier passé en paramètre est différent de 0");
//     //     }
//     // }

//     // public static void main(String[] args) {
//     //     boolean beauTemps = false;
//     //     meteo(beauTemps);
//     // }

//     // public static void meteo(final boolean beauTemps) {
//     //     if(beauTemps) {
//     //         System.out.println(“Je vais à la plage”);
//     //     } else {
//     //         System.out.println(“Je vais au cinéma”);
//     //     }
//     // }

//     // public static void main(String[] args) {
//     //     boolean beauTemps = false;
//     //     System.out.println(beauTemps);
//     //     meteo(beauTemps);
//     // }

//     // public static void meteo(final boolean beauTemps) {
//     //     if (!beauTemps) {
//     //         System.out.println("Le temps est pas beau.");
//     //     }
//     // }

//     // public static void main(String[] args) {
//     //     String temps = "pluie";
//     //     // System.out.println(temps);
//     //     meteo(temps);
//     // }

//     // public static void meteo(final String temps) {
//     //     if (temps.equals("soleil")) {
//     //         System.out.println("Je vais à la plage");
//     //     } else {
//     //         System.out.println("je vais me coucher sous mon plumar..");
//     //     }
//     // }

//     // public static void commenteLaMeteo(final String meteo) {
//     //     switch (meteo) {
//     //         case "soleil" -> System.out.println("Beau temps");
//     //         case "nuageux" -> System.out.println("Prendre son manteau");
//     //         case "pluie" -> System.out.println("Prendre son parapluie");
//     //         default -> System.out.println("Restez chez vous, c'est la hess..");
//     //     }
//     // }
//     // public static String categorieDeFilm(final String film) {
//     // String meteo = "de la boue wesh";
//     // System.out.println(meteo);
//     // commenteLaMeteo(meteo);
//     // Main.commenteLaMeteo("soleil");
//     // System.out.println(categorieDeFilm("Star Wars"));
//     // System.out.println(categorieDeFilm("Blanche neige"));
//     // System.out.println(categorieDeFilm("La petite sirène"));
//     // System.out.println(categorieDeFilm("Indiana Jones"));
//     // System.out.println(categorieDeFilm("Pocahontas"));

//     // Main.affiche();

//     //     var resultat = switch(film) {
//     //         case "Star Wars" -> "Science Fiction";
//     //         case "Blanche neige", "La petite sirène" -> "Disney";
//     //         case "Indiana Jones" -> {
//     //             String categorie = "Aventure";
//     //             yield categorie;
//     //         }
//     //         default -> "Inconnu";
//     //     };
//     //     return resultat;
//     // }

//     // public static void affiche() {
//     //     int chiffre = 5;
//     //     while (chiffre < 5) {
//     //         System.out.println(chiffre);
//     //         chiffre++;
//     //     }
//     // }

//     // public static void affiche() {
//     //     int chiffre = 0;
//     //     do { 
//     //         System.out.println(chiffre);
//     //         chiffre++;
//     //     } while (chiffre == 1);
//     // }

//     // Main.compteJusquaDix();
//     // public static void compteJusquaDix() {
//     //     for (int i = 1; i <= 10; i++){
//     //     System.out.println(i);
//     //     }
//     // }
//     // List<String> nomsDesLangages = Arrays.asList("Java", "PHP", "JavaScript", "C#");

//     // for (String nomDUnLangage : nomsDesLangages) {
//     //     String resultat = nomDUnLangage.toUpperCase();
//     //     System.out.println(resultat);}

//     //     int[] tableauDEntier = { 26, 10, 1985, 0, 12, 11, 1955};
//     //     int cpt = 0;

//     //     for (int i = 0; i < 7; i++) {
//     //         if (tableauDEntier[i] == 0) {
//     //             cpt++;
//     //         }
//     //     }
//     // System.out.println(cpt);



//     // QUIZ :

//     // public static void main(String[] args) {
//     // }

//     // Question 3 :
//    // System.out.println("Programme d'entraînement aux nouveaux apprentis");
// // //Exercice 1: créer un compteur numérique initialisé à 0.
// // compteurNumerique = 0;
   

// // Question 6 :
//      // public static String gentilOuMechant(String personne) {
//     // String resultatGentil = "gentil";
//     //     return switch (personne) {
//     //         case "Superman", "Chuck Norris", "Luke Skywalker" -> resultatGentil;
//     //         case "Joker", "Cruella" -> "méchant";
//     //         default -> resultatGentil;
//     //     };


   
//     public static void main(String[] args) {
             
//     System.out.println("Programme d'entrainement aux nouveaux apprentis");  
        
//     do {
//     double valeur = (Math.random() * 10) + 1; // cette ligne génère une valeur en 0 et 10.          
//     } while (valeur <5);
//     }

// }

