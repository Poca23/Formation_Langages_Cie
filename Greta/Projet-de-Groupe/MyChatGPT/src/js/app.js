import { Navigation } from "./modules/navigation.js";

document.addEventListener("DOMContentLoaded", () => {
  // Initialisation de la navigation
  new Navigation();

  // Autres initialisations...
});

// Attendre que le DOM soit complètement chargé
document.addEventListener("DOMContentLoaded", () => {
  // Gestion du menu burger
  const menuButton = document.getElementById("menuButton");
  const mobileMenu = document.getElementById("mobileMenu");

  if (menuButton && mobileMenu) {
    menuButton.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });

    // Fermer le menu si on clique en dehors
    document.addEventListener("click", (event) => {
      if (
        !menuButton.contains(event.target) &&
        !mobileMenu.contains(event.target)
      ) {
        mobileMenu.classList.add("hidden");
      }
    });

    // Fermer le menu si la fenêtre est redimensionnée
    window.addEventListener("resize", () => {
      if (window.innerWidth >= 1024) {
        // 1024px est le breakpoint 'lg' de Tailwind
        mobileMenu.classList.add("hidden");
      }
    });
  }

  // Gestion des liens du menu
  const menuLinks = document.querySelectorAll("nav a");
  menuLinks.forEach((link) => {
    link.addEventListener("click", () => {
      mobileMenu.classList.add("hidden");
    });
  });

  // Vous pouvez ajouter d'autres initialisations ici
});
