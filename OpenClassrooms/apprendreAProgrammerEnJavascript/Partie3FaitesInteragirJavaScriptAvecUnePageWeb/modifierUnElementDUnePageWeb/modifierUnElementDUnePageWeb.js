// ////////////////////////////////
// Modifiez un élément d’une page web
// ////////////////////////////////

let baliseImage = document.getElementById("premiereImage");
baliseImage.setAttribute("alt", "Ceci est la nouvelle valeur de alt");

// baliseImage.alt = "Ceci est une image de test modifiée";
// baliseImage.classList.add("nouvelleClasse");
// baliseImage.classList.remove("photo");

baliseImage = document.getElementById("premiereImage");
baliseImage.setAttribute("alt", "Ceci est une image de test modifiee ouf..");
baliseImage.src = "baccBlackSmoke.jpg";
baliseImage.classList.add("nouvelleClasse");
baliseImage.classList.remove("photoFlexCenter");
