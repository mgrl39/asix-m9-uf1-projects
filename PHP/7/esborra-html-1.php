<?php
session_start();

if (isset($_SESSION["ruta_plantilla_creada"])) {
    echo "<p>Última plantilla generada: <strong>{$_SESSION["ruta_plantilla_creada"]}</strong></p>";
}
// Utilitzem la comanda find
$comando = "find public/ -iname '*.html'";
$resultado = shell_exec($comando);

if ($resultado !== null) {
    $plantillas = explode("\n", trim($resultado));

    if (!empty($plantillas)) {
        echo "<form action=\"esborra-html-2.php\" method=\"post\">";
        echo "<p><strong>Plantilles:</strong></p>";

        foreach ($plantillas as $plantilla) {
            $plantillaNombre = basename($plantilla);
            echo "<input type='radio' id='$plantillaNombre' name='plantilla' value='$plantillaNombre'>";
            echo "<label for='$plantillaNombre'>$plantillaNombre</label><br>";
        }

        echo "<br>";
        echo "<button type=\"submit\">rm</button>";
        echo "</form>";
    } else {
        echo "<p>No s'han trobat plantilles</p>";
    }
} else {
    echo "<p>No s'han trobat plantilles</p>";
}

// retorn a la pàgina inici
echo '<p><a href="index.php">Inici</a></p>';
?>
