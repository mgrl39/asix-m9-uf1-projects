<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titol_pagina = $_POST["titol"];
    $nom_plantilla_html = $_POST["nomplantilla"];
    $color_fons = $_POST["color_fons"];
    $mostrar_footer = isset($_POST["mostrar_footer"]) ? "true" : "false";  // Convertim a cadena perquè s'espera com a text en el shell script
    $directori_desti = $_POST["directori"];

    // Verifiquem 
    if (!empty($nom_plantilla_html)) {

        // Ajustem la ruta
        if ($directori_desti !== "public") {
            $directori_desti = "public/$directori_desti";
            echo $directori_desti;
        }

        // Script Bash
        $resultat_execucio = shell_exec("./script.sh \"$nom_plantilla_html\" \"$titol_pagina\" \"$color_fons\" \"$mostrar_footer\" \"$directori_desti\"");

        // si l'ordre s'ha executat amb èxit
        if ($resultat_execucio !== null) {
            // Es crea una variable de sessió 
            $_SESSION["ruta_plantilla_creada"] = $resultat_execucio;

            // Informa de la plantilla creada 
            echo "<p>Plantilla HTML creada: <strong>$directori_desti/$nom_plantilla_html</strong></p>";
            echo "Títol: <strong>$titol_pagina</strong><br><br>";
            echo "Color de fons: <strong>$color_fons</strong><br><br>";
            echo "Footer inclós: <strong>$mostrar_footer</strong><br><br>";
            echo "Plantilla: ";
            echo "<a href=\"$directori_desti/$resultat_execucio\" target=\"_blank\"><strong>$directori_desti/$nom_plantilla_html.html</strong></a>";
            echo '<p><a href="index.php">Inici</a></p>';
        } else {
            // Error
            echo "<p>Error en l'execució de l'ordre.</p>";
            echo "<p>Error: $resultat_execucio</p>";
            echo '<p><a href="crea-html-1.html">Tornar al formulari</a></p>';
        }
    }
} else {
    // Informa d'un error
    echo "<p>Error</p>";
    echo '<p><a href="crea-html-1.html">Tornar al formulari</a></p>';
}
?>