export default class NavigationController {
  constructor() {
    this.hamburger = document.querySelector(".hamburger");
    this.navLinks = document.querySelector(".nav-links");
    this.init();
  }

  init() {
    // Gestionnaire pour le bouton hamburger
    this.hamburger.addEventListener("click", () => {
      this.toggleMenu();
    });

    // Fermer le menu si on clique en dehors
    document.addEventListener("click", (e) => {
      if (
        !e.target.closest(".navbar") &&
        this.navLinks.classList.contains("active")
      ) {
        this.closeMenu();
      }
    });

    // Fermer le menu si la fenêtre est redimensionnée
    window.addEventListener("resize", () => {
      if (window.innerWidth > 768) {
        this.closeMenu();
      }
    });
  }

  toggleMenu() {
    this.navLinks.classList.toggle("active");
    this.hamburger.setAttribute(
      "aria-expanded",
      this.navLinks.classList.contains("active")
    );
  }

  closeMenu() {
    this.navLinks.classList.remove("active");
    this.hamburger.setAttribute("aria-expanded", "false");
  }
}
