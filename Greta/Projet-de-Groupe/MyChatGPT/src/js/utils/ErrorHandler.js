export class ErrorHandler {
  constructor() {
    this.toastContainer = this.createToastContainer();
  }

  createToastContainer() {
    const container = document.createElement("div");
    container.id = "toast-container";
    container.style.cssText = `
            position: fixed;
            top: 1rem;
            right: 1rem;
            z-index: 9999;
        `;
    document.body.appendChild(container);
    return container;
  }

  handleError(error) {
    console.error("Application Error:", error);
    this.showErrorToast(error.message || "Une erreur est survenue");
  }

  showErrorToast(message) {
    const toast = document.createElement("div");
    toast.className = "toast toast-error";
    toast.textContent = message;

    this.toastContainer.appendChild(toast);

    setTimeout(() => {
      toast.classList.add("fade-out");
      setTimeout(() => {
        this.toastContainer.removeChild(toast);
      }, 300);
    }, 3000);
  }
}
