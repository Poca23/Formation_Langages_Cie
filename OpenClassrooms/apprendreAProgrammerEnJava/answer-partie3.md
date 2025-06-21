Question 1

Question 1

Je choisis d’ajouter une bibliothèque de logging. Cela demande d’ajouter un code tier à l’application mais grâce à cela je pourrais ajouter des traces tout au long de l’exécution du code. Ces traces seront associées à un niveau en fonction de la criticité de l’information.

Question 2

J’implémente une méthode toString() dans la classe Personnage qui renvoie le nom du personnage et je change le code de la méthode afficherPersonnagesDeLaSession de la façon suivante :

Question 3

La méthode utilise un BufferedReader mais en utilisant à la place un BufferedWriter tout en gardant le FileWriter en paramètre de la construction de l’objet les deux erreurs seront corrigées d’un coup.

Question 4

private static Logger logger = LogManager.getLogger(SessionDeJeu.class);

Question 5

Il faut que plusieurs threads ajoutent simultanément les personnages à la collection. Il s’agit donc d’avoir à disposition une instance d’un ExecutorService et d’appeler la méthode invokeAll avec en paramètre une liste de tâche où chaque tâche permet d’ajouter un personnage dans la liste.

Question 6

réponse 2

Question 7

Aucune

Question 8

Il faut remplacer la ligneExecutorService service = Executors.newFixedThreadPool(10); par ExecutorService service = Executors.newVirtualThreadPerTaskExecutor();