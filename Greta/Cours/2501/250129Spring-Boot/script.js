// Menu Burger
document.addEventListener("DOMContentLoaded", function () {
  const burgerMenu = document.querySelector(".burger-menu");
  const navLinks = document.querySelector(".nav-links");

  burgerMenu.addEventListener("click", () => {
    navLinks.classList.toggle("active");
  });

  // Fermer le menu si on clique en dehors
  document.addEventListener("click", (e) => {
    if (!burgerMenu.contains(e.target) && !navLinks.contains(e.target)) {
      navLinks.classList.remove("active");
    }
  });
});

// Boutons de défilement
const scrollToTop = document.getElementById("scrollToTop");
const scrollToBottom = document.getElementById("scrollToBottom");

// Afficher/Masquer le bouton scrollToTop en fonction de la position
window.addEventListener("scroll", () => {
  if (window.pageYOffset > 300) {
    scrollToTop.style.display = "flex";
  } else {
    scrollToTop.style.display = "none";
  }
});

// Fonction de défilement vers le haut
scrollToTop.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

// Fonction de défilement vers le bas
scrollToBottom.addEventListener("click", () => {
  window.scrollTo({
    top: document.documentElement.scrollHeight,
    behavior: "smooth",
  });
});

// Gestion des solutions d'exercices
document.querySelectorAll(".solution-btn").forEach((button) => {
  button.addEventListener("click", () => {
    const solutionContent = button.nextElementSibling;
    if (solutionContent.style.display === "block") {
      solutionContent.style.display = "none";
      button.textContent = "Voir la solution";
    } else {
      solutionContent.style.display = "block";
      button.textContent = "Cacher la solution";
    }
  });
});

// Animation au défilement
const observerOptions = {
  root: null,
  rootMargin: "0px",
  threshold: 0.1,
};

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
      observer.unobserve(entry.target);
    }
  });
}, observerOptions);

document.querySelectorAll(".section").forEach((section) => {
  observer.observe(section);
});

// Gestion des exemples de code
document.querySelectorAll(".code-example").forEach((example) => {
  const copyBtn = example.querySelector(".copy-btn");
  if (copyBtn) {
    copyBtn.addEventListener("click", () => {
      const code = example.querySelector("code").textContent;
      navigator.clipboard.writeText(code).then(() => {
        copyBtn.textContent = "Copié !";
        setTimeout(() => {
          copyBtn.textContent = "Copier";
        }, 2000);
      });
    });
  }
});

// Ajoutez ceci à votre fichier JavaScript existant

document.addEventListener("DOMContentLoaded", function () {
  // Récupération des éléments
  const modal = document.getElementById("modal");
  const modalText = document.getElementById("modal-text");
  const closeBtn = document.querySelector(".close");
  const infoButtons = document.querySelectorAll(".info-btn");

  // Contenu des modales
  const modalContents = {
    "En savoir plus": `
          <h3>Plus d'informations sur Spring Boot</h3>
          <p>Spring Boot est un framework qui simplifie le développement d'applications Spring en fournissant :</p>
          <ul>
              <li>Une configuration automatique intelligente qui réduit le temps de configuration</li>
              <li>Des serveurs embarqués pour un déploiement facile</li>
              <li>Des starters préconfigurés pour différents cas d'utilisation</li>
              <li>Des outils de monitoring et de métriques intégrés</li>
              <li>Une gestion simplifiée des dépendances</li>
          </ul>
      `,
    "Détails des versions": `
          <h3>Versions compatibles</h3>
          <p>Versions recommandées pour le développement avec Spring Boot :</p>
          <ul>
              <li>Java : Version 8, 11, ou 17 (LTS recommandées)</li>
              <li>Maven : Version 3.5+</li>
              <li>Gradle : Version 7.0+</li>
              <li>Spring Boot : Version 2.7+ ou 3.0+ selon la version de Java</li>
          </ul>
          <p>Note : Spring Boot 3.0+ nécessite Java 17 minimum.</p>
      `,
  };

  // Gestionnaire pour les boutons d'info
  infoButtons.forEach((button) => {
    button.addEventListener("click", () => {
      modalText.innerHTML = modalContents[button.textContent];
      modal.style.display = "block";
      // Animation d'apparition
      modal.classList.add("fadeIn");
    });
  });

  // Fermeture de la modale
  closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
  });

  // Fermeture en cliquant en dehors de la modale
  window.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.style.display = "none";
    }
  });

  // Fermeture avec la touche Echap
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && modal.style.display === "block") {
      modal.style.display = "none";
    }
  });
});

// Récupérer le bouton
const themeToggle = document.getElementById("themeToggle");
const themeIcon = themeToggle.querySelector("i");

const currentTheme = localStorage.getItem("theme");
if (currentTheme) {
  document.documentElement.setAttribute("data-theme", currentTheme);
  if (currentTheme === "dark") {
    themeIcon.classList.replace("fa-moon", "fa-sun");
  }
}

themeToggle.addEventListener("click", () => {
  let theme = document.documentElement.getAttribute("data-theme");

  if (theme === "dark") {
    document.documentElement.setAttribute("data-theme", "light");
    localStorage.setItem("theme", "light");
    themeIcon.classList.replace("fa-sun", "fa-moon");
  } else {
    document.documentElement.setAttribute("data-theme", "dark");
    localStorage.setItem("theme", "dark");
    themeIcon.classList.replace("fa-moon", "fa-sun");
  }
});
