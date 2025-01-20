public class TypesPrimitifs {

    public static void checkLocation(int age, String categorie) {

        if (age < 12) {
            System.out.println("Accès refusé. Âge minimum : 12 ans.");
        } else if (age > 12 && age <= 16 && "Horreur".equalsIgnoreCase(categorie)) {
            System.out.println("Accès refusé. Catégorie interdite aux moins de 16 ans.");
        } else {
            System.out.println("\"Location autorisée.");
        }

    }

    public static void main(String[] args) {
        int age = 13;
        String categorie = "Horreur";
        checkLocation(age, categorie);
    }
}