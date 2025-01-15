// Sélectionner l'élément navbar
const navbar = document.getElementById("navbar");

// Gérer l'événement de défilement
window.onscroll = function () {
    // Ajouter ou supprimer la classe en fonction de la position
    if (window.scrollY > 100) { // Si on défile de plus de 100px
        navbar.classList.add("vertical"); // Navbar devient verticale
    } else {
        navbar.classList.remove("vertical"); // Navbar reste normale
    }
};
