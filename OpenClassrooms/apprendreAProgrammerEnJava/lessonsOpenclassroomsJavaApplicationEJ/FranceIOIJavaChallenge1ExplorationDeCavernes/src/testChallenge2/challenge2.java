// package testChallenge2;

// public class challenge2 {

// }
import static algorea.Robot.*;
class Main
{
   public static void main(String[] args)
   {
      for (int idCase = 0; idCase < 15; idCase = idCase + 1)
      {
         if (nbAuSol() == 1)
         {
            ramasse();
         }
         avance();
      }
      if (nbDansSac() >= 2)
      {
         depose();
         depose();
      }
   }
}