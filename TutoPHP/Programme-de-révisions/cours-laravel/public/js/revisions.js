function toggleContent(section) {
    const content = section.nextElementSibling;

    content.classList.toggle("open");

    const arrow = section.querySelector("span");
    if (arrow) {
        arrow.textContent = content.classList.contains("open") ? "▲" : "▼";
    }

    section.classList.toggle("active");
}
