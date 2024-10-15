// Présentation :

// L'un des villageois, Camthalion, est très intéressé par votre robot. 
// Il vous a longuement observé(e) alors que vous écriviez votre programme, 
// et a souhaité écrire le sien. 
// Le robot affiche cependant les lignes dans le mauvais ordre. 
// Pouvez-vous y remédier ?

// Ce que vous devez faire :
// Camthalion a écrit le programme ci-dessous :

// class Main {
//     public static void main(String[] args) {
//         System.out.println("Ma devise est 'Parler peu mais parler bien'.");
//         System.out.println("Je m'appelle Camthalion");
//         System.out.println("Coucou !");
//     }
// }

// et il obtient en sortie :

// Ma devise est 'Parler peu mais parler bien'.
// Je m'appelle Camthalion
// Coucou !

// Il veut que son programme affiche à la place :

// Coucou !
// Je m'appelle Camthalion
// Ma devise est 'Parler peu mais parler bien'.

// Il vous demande d'effectuer les modifications nécessaires.

// Afficher plusieurs lignes de texte
// Pour afficher plusieurs lignes de texte,
// il faut écrire des instructions d'affichage successives terminées par un
// point-virgule (une par ligne) :

// class Main {
//     public static void main(String[] args) {
//         System.out.println("Bonjour !");
//         System.out.println("Comment vas-tu ?");
//     }
// }

// Bonjour !
// Comment vas-tu ?

// On a donc :

class Main {
    public static void main(String[] args) {
        System.out.println("Coucou !");
        System.out.println("Je m'appelle Camthalion");
        System.out.println("Ma devise est 'Parler peu mais parler bien'.");
    }
}
