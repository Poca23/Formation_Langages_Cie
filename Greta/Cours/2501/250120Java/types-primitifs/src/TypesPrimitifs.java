public class TypesPrimitifs {

    // public static void checkLocation(int age, String categorie) {

    // if (age < 12) {
    // System.out.println("Accès refusé. Âge minimum : 12 ans.");
    // } else if (age > 12 && age <= 16 && "Horreur".equalsIgnoreCase(categorie)) {
    // System.out.println("Accès refusé. Catégorie interdite aux moins de 16 ans.");
    // } else {
    // System.out.println("\"Location autorisée.");
    // }
    // }

    public static void afficherAvantagesAbonnement(String typeAbonnement, boolean aUtiliseCodePromo) {
        switch (typeAbonnement) {
            case "Basique":
                System.out.println("Accès au catalogue standard.");
                if (aUtiliseCodePromo) {
                    System.out.println("Réduction de 5% sur la première location.");
                }
                break;
            case "Premium":
                System.out.println("Accès au catalogue complet et location HD.");
                if (aUtiliseCodePromo) {
                    System.out.println("Réduction de 10% sur les trois premières locations.");
                }
                break;
            case "VIP":
                System.out.println("Accès au catalogue complet, location HD et support prioritaire.");
                if (aUtiliseCodePromo) {
                    System.out.println("Accès à une avant-première exclusive.");
                }
                break;
            default:
                System.out.println("Type d'abonnement inconnu.");
        }
    }

    public static void main(String[] args) {
        // int age = 13;
        // String categorie = "Horreur";
        // checkLocation(age, categorie);

        afficherAvantagesAbonnement("Basique", true);
        afficherAvantagesAbonnement("Premium", false);
        afficherAvantagesAbonnement("VIP", true);
        afficherAvantagesAbonnement("Platine", false);

    }
}