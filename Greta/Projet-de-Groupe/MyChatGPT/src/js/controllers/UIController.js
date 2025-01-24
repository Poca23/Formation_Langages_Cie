export class UIController {
  constructor(eventEmitter) {
    this.eventEmitter = eventEmitter;
    this.modal = document.getElementById("loginModal");
    this.loginBtn = document.getElementById("loginBtn");
    this.hamburger = document.querySelector(".hamburger");
    this.navLinks = document.querySelector(".nav-links");
  }

  init() {
    this.initModalEvents();
    this.initNavigationEvents();
    this.initToastEvents();
  }

  initModalEvents() {
    this.loginBtn?.addEventListener("click", () => this.toggleModal(true));

    document.querySelectorAll("[data-close-modal]").forEach((element) => {
      element.addEventListener("click", () => this.toggleModal(false));
    });
  }

  initNavigationEvents() {
    this.hamburger?.addEventListener("click", () => this.toggleMenu());

    document.addEventListener("click", (e) => {
      if (
        this.navLinks?.classList.contains("active") &&
        !this.navLinks.contains(e.target) &&
        !this.hamburger.contains(e.target)
      ) {
        this.toggleMenu();
      }
    });
  }

  initToastEvents() {
    this.eventEmitter.on("error", (error) =>
      this.showToast(error.message, "error")
    );
    this.eventEmitter.on("success", (message) =>
      this.showToast(message, "success")
    );
  }

  toggleModal(show) {
    this.modal?.classList.toggle("active", show);
    document.body.style.overflow = show ? "hidden" : "";
  }

  toggleMenu() {
    this.navLinks?.classList.toggle("active");
    this.hamburger?.setAttribute(
      "aria-expanded",
      this.navLinks?.classList.contains("active")
    );
  }

  showToast(message, type = "info") {
    const toast = document.getElementById("toast");
    if (!toast) return;

    toast.textContent = message;
    toast.className = `toast toast-${type} show`;

    setTimeout(() => {
      toast.className = toast.className.replace("show", "");
    }, 3000);
  }
}
