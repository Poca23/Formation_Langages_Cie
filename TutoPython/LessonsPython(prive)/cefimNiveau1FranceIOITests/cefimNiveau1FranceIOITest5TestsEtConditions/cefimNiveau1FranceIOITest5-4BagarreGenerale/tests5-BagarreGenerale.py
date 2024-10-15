# À peine arrivé dans le village, voilà qu'une bagarre générale est sur le point d'éclater ! 
# Tout en vous mettant à l'abri, vous tâchez de savoir ce qui se passe. 
# On vous explique que le village est principalement composé de deux grandes familles rivales 
# qui ne se supportent pas. 
# Tout sujet étant une source de discorde possible, ils avaient décidé que les superficies 
# de leurs champs respectifs ne devaient pas être trop différentes afin de ne pas attiser 
# la jalousie de la famille opposée. Mais voilà que le patriarche des Arignon suspecte 
# qu'un des champs des Evaran est trop grand ! Vous décidez de les aider ; 
# mais la tâche ne sera pas facile, chacun gardant jalousement secrète la superficie réelle de ses champs.

# Ce que doit faire votre programme :
# Votre programme devra lire deux entiers, 
# la superficie d'un champ des Arignon et la superficie d'un champ des Evaran. 
# Si l'un des champs est plus grand d'au moins 10 m² (strictement) que l'autre champ, 
# alors il faudra afficher le texte « La famille X a un champ trop grand », 
# « X » devant bien sûr être remplacé par « Arignon » ou « Evaran » selon le cas.

# Exemples
# Exemple 1
# entrée :

# 42
# 54
# sortie :

# La famille Evaran a un champ trop grand

supChampArignon = int(input())
supChampEvaran = int(input())

if supChampArignon - supChampEvaran > 10:
    print("La famille Arignon a un champ trop grand")
elif supChampEvaran - supChampArignon > 10 :
    print("La famille Evaran a un champ trop grand")
