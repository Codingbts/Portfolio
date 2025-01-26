<div class="page-mode">
    <!-- Icône de changement de mode (lune ou soleil) -->
    <img src="images/sun.png" alt="sun" id="icon" class="d-inline-block ms-3" style="cursor: pointer;">

    <div class="dropdown-container">
        <!-- Bouton pour afficher le menu des couleurs -->
        <button class="dropdown-button" id="dropdownButton">
            <i class="bx bxs-palette"></i> <!-- Icône de palette -->
        </button>
        <!-- Menu déroulant des couleurs -->
        <ul class="dropdown-menu" id="dropdownMenu" style="display: none;">
            <li>
                <select id="color-picker-main" class="form-select">
                    <!-- Les options de couleurs seront générées ici dynamiquement -->
                </select>
            </li>
        </ul>
    </div>
</div>