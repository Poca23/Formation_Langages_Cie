document.addEventListener("DOMContentLoaded", function () {
  // Gestion du modal
  const modal = document.getElementById("modal");
  const modalText = document.getElementById("modal-text");
  const closeBtn = document.getElementsByClassName("close")[0];
  const infoBtns = document.getElementsByClassName("info-btn");

  // Contenu pour le modal
  const modalContent = {
    introCard: `
        <h3>Spring Boot en détail</h3>
        <p>Spring Boot offre:</p>
        <ul>
            <li>Une configuration automatique intelligente</li>
            <li>Un serveur embarqué (Tomcat, Jetty, ou Undertow)</li>
            <li>Des métriques et un monitoring via Actuator</li>
            <li>Une configuration externalisée</li>
            <li>Des environnements de développement et de production</li>
            <li>Aucune génération de code et pas de configuration XML requise</li>
        </ul>
    `,
    prerequisCard: `
        <h3>Versions compatibles</h3>
        <table>
            <tr>
                <th>Spring Boot</th>
                <th>Java Version</th>
            </tr>
            <tr>
                <td>2.7.x</td>
                <td>Java 8-18</td>
            </tr>
            <tr>
                <td>2.6.x</td>
                <td>Java 8-17</td>
            </tr>
            <tr>
                <td>3.0+</td>
                <td>Java 17+</td>
            </tr>
        </table>
        <p>IDE recommandé: IntelliJ IDEA Ultimate ou Spring Tool Suite</p>
    `,
  };
  // Gestionnaire pour les boutons d'info
  Array.from(infoBtns).forEach((btn) => {
    btn.addEventListener("click", function () {
      const parentId = this.closest(".card").id;
      modalText.innerHTML = modalContent[parentId];
      modal.style.display = "block";
    });
  });

  // Fermer le modal
  closeBtn.onclick = function () {
    modal.style.display = "none";
  };

  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };

  // Gestion du bouton copier
  const copyBtn = document.querySelector(".copy-btn");
  const codeBlock = document.querySelector("code");

  copyBtn.addEventListener("click", function () {
    navigator.clipboard.writeText(codeBlock.textContent.trim()).then(() => {
      copyBtn.textContent = "Copié !";
      setTimeout(() => {
        copyBtn.textContent = "Copier";
      }, 2000);
    });
  });

  // Animation au défilement
  const sections = document.querySelectorAll(".section");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = 1;
        entry.target.style.transform = "translateY(0)";
      }
    });
  });

  sections.forEach((section) => {
    section.style.opacity = 0;
    section.style.transform = "translateY(20px)";
    section.style.transition = "all 0.5s ease-out";
    observer.observe(section);
  });
});

document.querySelectorAll(".solution-btn").forEach((button) => {
  button.addEventListener("click", function () {
    const exerciseNumber = this.dataset.exercise;
    const solutionContent = document.getElementById(
      `solution-${exerciseNumber}`
    );

    // Toggle la solution
    if (solutionContent.style.display === "none") {
      solutionContent.style.display = "block";
      this.textContent = "Masquer la solution";
    } else {
      solutionContent.style.display = "none";
      this.textContent = "Voir la solution";
    }

    // Animation du bouton
    this.style.transform = "scale(0.95)";
    setTimeout(() => {
      this.style.transform = "scale(1)";
    }, 200);
  });
});
