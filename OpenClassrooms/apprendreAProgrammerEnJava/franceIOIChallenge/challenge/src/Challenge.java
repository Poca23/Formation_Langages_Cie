// public class Challenge{
//     public static void main(String[] args) throws Exception {
//         System.out.println("Hello, World!");
//     }
// }

// Challenge 1 :

// import static algorea.Robot.*;
 
// class Main
// {
//    public static void main(String[] args)
//    {
//       droite();
//       fonce();


//       gauche();
//       fonce();  

//       droite();
//       fonce();

//       droite();
//       fonce();

//       droite();
//       fonce();

//       gauche();

//       fonce();
//     }

// Challenge 2 :

// avance() -> avancer
// nbAuSol() -> retourner le nombre de pierre sur la case
// ramasse() -> ramasser
// nbDansSac() -> retourner le nombre de pierre dans le sac
// depose() -> déposer


// Une boucle for qui commence à la case
//  numCase = 0; numCase < 15; numCase++

//Si la case est vide
// J'avance
// Sinon
// Je ramasse la pierre
    // Si mon sac contient trois pierres
    // Je dépose les pierres dans la case
import static algorea.Robot.*;

class Main {
    public static void main(String[] args) {

        for (int numCase = 0; numCase < 15; numCase++) {
            if (nbAuSol() > 0) {
                ramasse();
                if (nbDansSac() == 3) {
                    depose();
                    depose();
                    depose();
                    avance();
                } else {
                    avance();
                }
            } else {
                avance();             
            }          
        }
    }
}