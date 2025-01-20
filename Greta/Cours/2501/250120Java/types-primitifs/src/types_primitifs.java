public class types_primitifs {
    public static void main(String[] args) throws Exception {
        System.out.println("toto");

        // String visioTech = "ma visiotech";
        // String maVariable = "toto";
        // String maVariaBle = "tata '\\' tata";

        // System.out.println(visioTech);
        // System.out.println(maVariable);
        // System.out.println(maVariaBle);

        // final int NOMBRE_MAXIMAL = 100;
        // System.out.println(NOMBRE_MAXIMAL);

        // char premiereLettre = 'A';

        // char retourALaligne = '\n';
        // char Tabulation = '\t';
        // char guillemetSimple = '\'';
        // char backslash = '\\';

        // String titreFilm = "Le Seigneur des Anneaux";

        // String citation = "\" Être ou ne pas être\", telle est la question.";
        // System.out.println(citation);

        // byte agePublic = 12;
        // short anneSortie = 2023;
        // long nombreVues = 1133546;
        // Boolean estEnCouleur = true;
        // char premiereLettreTitre = 'B';

        // System.out.println(agePublic);
        // System.out.println(anneSortie);
        // System.out.println(nombreVues);
        // System.out.println(estEnCouleur);
        // System.out.println(premiereLettreTitre);

        // int nombreUtilisateurs = 2147483647;
        // long addition = (long)nombreUtilisateurs + 1;
        // System.out.println(addition);

        // short tempsFilm = 120;
        // long calculSecondes = (long)tempsFilm * 60;
        // System.out.println(calculSecondes);

        // double prixLocationFilm = 2.50;
        // double reduction = prixLocationFilm * 10 / 100;
        // System.out.println(reduction);
        // double prixReduction = prixLocationFilm - reduction;
        // System.out.println(prixReduction);

        String phrase = "test cet exercice";
        phrase = phrase.substring(0, 1).toUpperCase() + phrase.substring(1).toLowerCase();
        System.out.println(phrase);

    }
}
