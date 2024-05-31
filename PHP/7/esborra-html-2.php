<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nomplantilla"])) {
        $nom_plantilla = $_POST["nomplantilla"];

        if (!empty($nom_plantilla)) {
            // Filtrar 
            $nom_plantilla = htmlspecialchars($nom_plantilla);

            $comando_borrar = "rm public/$nom_plantilla.html";

            exec($comando_borrar, $output, $exit_code);

            if ($exit_code === 0) {
                if (isset($_SESSION["ruta_plantilla_creada"]) && $_SESSION["ruta_plantilla_creada"] === $nom_plantilla) {
                    unset($_SESSION["ruta_plantilla_creada"]);
                }

                if (!file_exists("public/$nom_plantilla.html")) {
                    echo "<p>Plantilla eliminada: <strong>$nom_plantilla</strong></p>";
                    echo '<p><a href="index.php">Inici</a></p>';
                } else {
                    echo "<p>Error: La plantilla no s'ha esborrat correctament.</p>";
                    echo '<p><a href="esborra-html-1.php">Tornar al formulari</a></p>';
                }
            } else {
                echo "<p>Error</p>";
                echo "<p>Error: " . implode("\n", $output) . "</p>";
                echo '<p><a href="esborra-html-1.php">Tornar al formulari</a></p>';
            }
        }
    }
}

?>
