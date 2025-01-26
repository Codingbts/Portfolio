// Liste des couleurs principales et leurs couleurs secondaires associées pour chaque mode
const darkModeColors = {
    "#04F430": { name: "Vert", secondary: "#007F1E" },
    "#e30a0a": { name: "Rouge", secondary: "#A00000" },
    "#08f5f5": { name: "Bleu", secondary: "#007B7B" },
    "#a252a3": { name: "Violet", secondary: "#7c007e" },
    "#ff8400": { name: "Orange", secondary: "#bd6200" },
};

const lightModeColors = {
    "#F28C8C": { name: "Rouge pâle", secondary: "#D16F6F" },
    "#F48FB1": { name: "Rose", secondary: "#F06292" },
    "#ADD8E6": { name: "Bleu clair", secondary: "#6495ED" },
    "#FF6F61": { name: "Jaune", secondary: "#FBC02D" }
};

// Initialisation : Définir les variables
const icon = document.getElementById("icon");
const mainPicker = document.getElementById("color-picker-main");
const dropdownMenu = document.getElementById("dropdownMenu");
const dropdownButton = document.getElementById("dropdownButton");

// Basculer entre les modes light et dark
icon.onclick = function () {
    const isLightMode = document.body.dataset.theme === "light";
    const newMode = isLightMode ? "dark" : "light";

    // Appliquer le thème
    setTheme(newMode);

    // Mettre à jour les options de couleurs
    const colors = newMode === "light" ? lightModeColors : darkModeColors;
    updateColorOptions(colors);

    // Charger et appliquer la couleur sauvegardée pour le nouveau mode
    applyStoredColor(newMode);

    // Sauvegarder le thème dans le localStorage
    localStorage.setItem("theme", newMode);
};

// Définir le thème (light ou dark)
function setTheme(mode) {
    const isDark = mode === "dark";
    document.documentElement.style.setProperty("--background-color", isDark ? "black" : "#EFEFEF");
    document.documentElement.style.setProperty("--write", isDark ? "#FFFFFF" : "#000000");
    document.body.dataset.theme = mode;
    icon.src = isDark ? "images/sun.svg" : "images/moon.svg";
}

// Mettre à jour les options du sélecteur de couleurs
function updateColorOptions(colorOptions) {
    mainPicker.innerHTML = ""; // Vider les options existantes

    Object.entries(colorOptions).forEach(([color, details]) => {
        const option = document.createElement("option");
        option.value = color;
        option.textContent = details.name; // Afficher le nom de la couleur
        mainPicker.appendChild(option);
    });
}

// Appliquer les couleurs principale et secondaire sélectionnées
function applySelectedColors() {
    const mainColor = mainPicker.value;

    // Appliquer la couleur principale et secondaire
    document.documentElement.style.setProperty("--main-color", mainColor);
    document.documentElement.style.setProperty("--secondary-color", getSecondaryColor(mainColor));
}

// Obtenir la couleur secondaire pour une couleur principale donnée
function getSecondaryColor(mainColor) {
    const currentColors = document.body.dataset.theme === "light" ? lightModeColors : darkModeColors;
    return currentColors[mainColor]?.secondary || "#000000";
}

// Sauvegarder la couleur actuelle dans le localStorage
function saveSelectedColor(mode) {
    const mainColor = mainPicker.value;
    localStorage.setItem(`${mode}Color`, mainColor);
}

// Charger et appliquer la couleur sauvegardée
function applyStoredColor(mode) {
    const savedColor = localStorage.getItem(`${mode}Color`);
    const colors = mode === "light" ? lightModeColors : darkModeColors;

    if (savedColor && colors[savedColor]) {
        mainPicker.value = savedColor;
    } else {
        // Si la couleur sauvegardée est invalide, utiliser la première couleur
        mainPicker.value = Object.keys(colors)[0];
    }
    applySelectedColors();
}

// Gestion des événements
mainPicker.addEventListener("change", () => {
    applySelectedColors();
    saveSelectedColor(document.body.dataset.theme);
    closeDropdownMenu(); // Fermer le menu après sélection
});

dropdownButton.addEventListener("click", () => {
    const isVisible = dropdownMenu.style.display === "block";
    dropdownMenu.style.display = isVisible ? "none" : "block";
});

// Fermer le menu déroulant
function closeDropdownMenu() {
    dropdownMenu.style.display = "none";
}

// Initialisation au chargement de la page
(function init() {
    // Vérifier si un thème est déjà sauvegardé dans le localStorage
    const savedTheme = localStorage.getItem("theme");
    const initialMode = savedTheme || "dark"; // Par défaut, dark mode si aucune préférence

    // Appliquer le thème
    setTheme(initialMode);

    // Mettre à jour les options de couleurs en fonction du thème initial
    const initialColors = initialMode === "light" ? lightModeColors : darkModeColors;
    updateColorOptions(initialColors);

    // Charger et appliquer les couleurs sauvegardées ou par défaut
    applyStoredColor(initialMode);

    // Sauvegarder le thème par défaut si c'est la première visite
    if (!savedTheme) {
        localStorage.setItem("theme", initialMode);
    }
})();

// Liste des couleurs et des images associées
const colorImages = {
    "#04F430": {
        contact: "images/Contact us-bro.svg",
        visionary: "images/Visionary technology-bro.svg"
    },
    "#e30a0a": {
        contact: "images/Contact us-bro-red.svg",
        visionary: "images/images/Visionary technology-bro-rouge.svg"
    },
    "#08f5f5": {
        contact: "images/Contact us-bro-blue.svg",
        visionary: "images/Visionary technology-bro-blue.svg"
    },
    "#a252a3": {
        contact: "images/Contact us-bro-violet.svg",
        visionary: "images/Visionary technology-bro-violet.svg"
    },
    "#ff8400": {
        contact: "images/Contact us-bro-orange.svg",
        visionary: "images/Visionary technology-bro-orange.svg"
    }
};

// Fonction pour changer les images en fonction de la couleur choisie
function changeImageBasedOnColor(color) {
    const contactImage = document.getElementById("contact-svg");
    const visionaryImage = document.getElementById("visionary-svg");

    // Vérifie si la couleur existe dans l'objet colorImages
    if (colorImages[color]) {
        // Change les images en fonction de la couleur
        contactImage.src = colorImages[color].contact;
        visionaryImage.src = colorImages[color].visionary;
    }
}

// Sélectionner le dropdown
const colorDropdown = document.getElementById("color-dropdown");

// Écouter le changement de couleur dans le dropdown
colorDropdown.addEventListener("change", () => {
    const selectedColor = colorDropdown.value;
    // Appliquer le changement d'image en fonction de la couleur sélectionnée
    changeImageBasedOnColor(selectedColor);
});
