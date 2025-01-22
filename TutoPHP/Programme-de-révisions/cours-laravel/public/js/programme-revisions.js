// Fonction pour afficher/masquer le contenu des sections
function toggleContent(section) {
    const content = section.nextElementSibling;

    // Toggle l'affichage
    content.classList.toggle("open");

    // Gestion de la flèche (rotation ou modification de contenu)
    const arrow = section.querySelector("span");
    if (arrow) {
        arrow.textContent = content.classList.contains("open") ? "▲" : "▼";
    }

    // Gestion du style actif sur le titre
    section.classList.toggle("active");
}
