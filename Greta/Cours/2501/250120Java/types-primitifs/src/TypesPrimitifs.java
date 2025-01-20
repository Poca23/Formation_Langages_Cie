public class TypesPrimitifs {

    // Méthode pour comparer deux acteurs sans tenir compte des
    // majuscules/minuscules
    // public static boolean comparerActeurs(String acteur1, String acteur2) {
    // return acteur1.equalsIgnoreCase(acteur2);

    public static void main(String[] args) {
        // Tests de la méthode comparerActeurs
        // System.out.println(comparerActeurs("Leonardo DiCaprio", "leonardo
        // dicaprio")); // Affiche true
        // System.out.println(comparerActeurs("Brad Pitt", "Angelina Jolie")); //
        // Affiche false

        // String note1 = "8.5";
        // String note2 = "9";
        // String note3 = "9.5";
        // System.out.println((Double.parseDouble(note1) + Double.parseDouble(note2) +
        // Double.parseDouble(note3)) / 3);

        // System.out.println(verifierIdentifiant("123", 123)); // Affiche true
        // System.out.println(verifierIdentifiant("456", 789)); // Affiche false

        // afficherTitreFilm("Inception");
        // System.out.println(titre); // Erreur de compilation : titre non accessible
        // ici car en dehors du bloc ou elle est déclarée.

    }

    // public static boolean verifierIdentifiant(String identifiantString, Integer
    // identifiantRecherche) {
    // try {
    // int identifiantConverti = Integer.parseInt(identifiantString);

    // return identifiantConverti == identifiantRecherche;
    // } catch (NumberFormatException e) {

    // System.out.println("Erreur : l'identifiantString n'est pas un nombre
    // valide.");
    // return false;
    // }

    // }

    // public static void afficherTitreFilm(String titreParam) {
    // String titre = titreParam; // Variable locale à la méthode afficherTitreFilm
    // System.out.println("Titre du film : " + titre);
    // }

    // public static void verifierAge(int age) {
    //     if (age >= 18) {
    //         String message = "Accès autorisé."; // Variable locale au bloc if
    //         System.out.println(message);
    //     }
    //     System.out.println(message); // Erreur de compilation : message non accessible ici
    // }

}
