export class Navigation {
  constructor() {
    this.menuButton = document.getElementById("menuButton");
    this.mobileMenu = document.getElementById("mobileMenu");
    this.init();
  }

  init() {
    if (this.menuButton && this.mobileMenu) {
      this.setupEventListeners();
    }
  }

  setupEventListeners() {
    // Toggle menu
    this.menuButton.addEventListener("click", (e) => {
      e.stopPropagation();
      this.toggleMenu();
    });

    // Click outside
    document.addEventListener("click", (e) => {
      this.handleClickOutside(e);
    });

    // Window resize
    window.addEventListener("resize", () => {
      this.handleResize();
    });

    // Menu links
    const menuLinks = document.querySelectorAll("nav a");
    menuLinks.forEach((link) => {
      link.addEventListener("click", () => {
        this.closeMenu();
      });
    });
  }

  toggleMenu() {
    this.mobileMenu.classList.toggle("hidden");
    this.menuButton.setAttribute(
      "aria-expanded",
      !this.mobileMenu.classList.contains("hidden")
    );
  }

  closeMenu() {
    this.mobileMenu.classList.add("hidden");
    this.menuButton.setAttribute("aria-expanded", "false");
  }

  handleClickOutside(event) {
    if (
      !this.menuButton.contains(event.target) &&
      !this.mobileMenu.contains(event.target)
    ) {
      this.closeMenu();
    }
  }

  handleResize() {
    if (window.innerWidth >= 1024) {
      this.closeMenu();
    }
  }
}
