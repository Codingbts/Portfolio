// Liste des couleurs principales et leurs couleurs secondaires associées pour chaque mode
const darkModeColors = {
    "#04F430": { name: "Vert", secondary: "#007F1E" },
    "#e30a0a": { name: "Rouge", secondary: "#A00000" },
    "#08f5f5": { name: "Bleu", secondary: "#007B7B" },
    "#F48FB1": { name: "Rose", secondary: "#D13CA4" },
    "#ff8400": { name: "Orange", secondary: "#bd6200" },
};

const lightModeColors = {
    "#83E000": { name: "Vert vif", secondary: "#6CB506" },
    "#D49E00": { name: "Or", secondary: "#C68E17" },    
    "#A252A3": { name: "Violet", secondary: "#7c007e" },
    "#1A8E8E": { name: "Turquoise foncé", secondary: "#137C7C" }, 
    "#FF6F61": { name: "Corail", secondary: "#E05D52" },
    

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

    // Mettre à jour les images en fonction de la couleur choisie
    updateImagesBasedOnColor(mainColor);  // Appel à la fonction de changement d'image
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


function updateImagesBasedOnColor(color) {
    
    const images = {
        //dark
        "#04F430": {
            contactImg: "images/Contact us-bro.svg",
            visionaryImg: "images/Visionary technology-bro.svg",
            programmingImg: "images/Programming-bro.svg",
            iaImg: "images/Artificial intelligence-bro.svg"
        },
        "#e30a0a": {
            contactImg: "images/Contact us-bro-red.svg",
            visionaryImg: "images/Visionary technology-bro-rouge.svg",
            programmingImg: "images/Programming-bro-red.svg",
            iaImg: "images/Artificial intelligence-bro-red.svg"
        },
        "#08f5f5": {
            contactImg: "images/Contact us-bro-blue.svg",
            visionaryImg: "images/Visionary technology-bro-blue.svg",
            programmingImg: "images/Programming-bro-blue.svg",
            iaImg: "images/Artificial intelligence-bro-blue.svg"
        },
        "#F48FB1":{
            contactImg: "images/Contact us-bro-rose.svg",
            visionaryImg: "images/Visionary technology-bro-rose.svg",
            programmingImg: "images/Programming-bro-rose.svg",
            iaImg: "images/Artificial intelligence-bro-rose.svg"
        },
        "#ff8400": {
            contactImg: "images/Contact us-bro-orange.svg",
            visionaryImg: "images/Visionary technology-bro-orange.svg",
            programmingImg: "images/Programming-bro-orange.svg",
            iaImg: "images/Artificial intelligence-bro-orange.svg"
        },
        //light
        "#83E000":{
            contactImg: "images/Contact us-bro-vert-vif.svg",
            visionaryImg: "images/Visionary technology-bro-vert-vif.svg",
            programmingImg: "images/Programming-bro-vert-vif.svg",
            iaImg: "images/Artificial intelligence-bro-vert-vif.svg"
        },
        "#D49E00":{
            contactImg: "images/Contact us-bro-or.svg",
            visionaryImg: "images/Visionary technology-bro-or.svg",
            programmingImg: "images/Programming-bro-or.svg",
            iaImg: "images/Artificial intelligence-bro-or.svg"
        }, 
        "#A252A3": {
            contactImg: "images/Contact us-bro-violet.svg",
            visionaryImg: "images/Visionary technology-bro-violet.svg",
            programmingImg: "images/Programming-bro-violet.svg",
            iaImg: "images/Artificial intelligence-bro-violet.svg"
        },
        "#1A8E8E": {
            contactImg: "images/Contact us-bro-turquoise.svg",
            visionaryImg: "images/Visionary technology-bro-turquoise.svg",
            programmingImg: "images/Programming-bro-turquoise.svg",
            iaImg: "images/Artificial intelligence-bro-turquoise.svg"
        },
        "#FF6F61": {
            contactImg: "images/Contact us-bro-corail.svg",
            visionaryImg: "images/Visionary technology-bro-corail.svg",
            programmingImg: "images/Programming-bro-corail.svg",
            iaImg: "images/Artificial intelligence-bro-corail.svg"
        },
    };
  
   const selectedImages = images[color];

  
   if (selectedImages) {
       const contactImg = document.getElementById("contact-img");
       const visionaryImg = document.getElementById("visionary-img");
       const programmingImg = document.getElementById("programming-img"); 
       const iaImg = document.getElementById("ia-img");

       if (contactImg) contactImg.src = selectedImages.contactImg;
       if (visionaryImg) visionaryImg.src = selectedImages.visionaryImg;
       if (programmingImg) programmingImg.src = selectedImages.programmingImg; 
       if (iaImg) iaImg.src = selectedImages.iaImg;
   }
}


mainPicker.addEventListener("change", () => {
    applySelectedColors();
    saveSelectedColor(document.body.dataset.theme);
    closeDropdownMenu(); 
});

dropdownButton.addEventListener("click", () => {
    const isVisible = dropdownMenu.style.display === "block";
    dropdownMenu.style.display = isVisible ? "none" : "block";
});


function closeDropdownMenu() {
    dropdownMenu.style.display = "none";
}


(function init() {
    
    const savedTheme = localStorage.getItem("theme");
    const initialMode = savedTheme || "dark";

   
    setTheme(initialMode);

    
    const initialColors = initialMode === "light" ? lightModeColors : darkModeColors;
    updateColorOptions(initialColors);

    
    applyStoredColor(initialMode);

    
    if (!savedTheme) {
        localStorage.setItem("theme", initialMode);
    }
})();
