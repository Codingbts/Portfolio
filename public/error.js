document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contact-form");
    const errorMessageDiv = document.getElementById("error-message");

    form.addEventListener("submit", function (event) {
        let errors = [];
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const subject = document.getElementById("subject").value.trim();
        const message = document.getElementById("message").value.trim();

        // Vérification des champs vides
        if (!name || !email || !subject || !message) {
            errors.push("Tous les champs doivent être complétés !");
        }

        // Vérification du format de l'email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email && !emailRegex.test(email)) {
            errors.push("Veuillez entrer une adresse email valide !");
        }

        // Affichage des erreurs
        if (errors.length > 0) {
            event.preventDefault();
            errorMessageDiv.innerHTML = errors
                .map((error) => `<p>${error}</p>`)
                .join("");
            errorMessageDiv.classList.add("visible"); // Rendre le message visible
            return;
        }

        // Efface les messages d'erreur s'il n'y a aucun problème
        errorMessageDiv.innerHTML = "";
        errorMessageDiv.classList.remove("visible"); // Cacher le message d'erreur
    });
});
