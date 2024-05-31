<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Esborrar directori (2)</title>
</head>

<body>
    <h1>Esborrar directori (2)</h1>

    <?php
    session_start();

    // Verificar 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Rep les dades del formulari
        $nom_directori = $_POST["fnom"];

        // Verificar si les dades no són buides
        if (!empty($nom_directori)) {
            // Filtra els paràmetres
            $nom_directori = htmlspecialchars($nom_directori);

            // Prepara l'ordre a executar
            $ordre = "rm -r public/$nom_directori";

            // Executa l'ordre
            $resultat_execucio = shell_exec($ordre);

            // Verifica si l'ordre s'ha executat amb èxit
            if ($resultat_execucio === "") {
                // Verifica
                if (isset($_SESSION["nou_directori"]) && $_SESSION["nou_directori"] === $nom_directori) {
                    // Elimina la variable de sessió
                    unset($_SESSION["nou_directori"]);
                }

                // Verifica si el directori s'ha esborrat amb èxit
                if (!file_exists("public/$nom_directori")) {
                    // Informa de l'èxit
                    echo "<p>Directori eliminat: <strong>$nom_directori</strong></p>";
                    echo '<p><a href="index.php">Inici</a></p>';
                } 
            } else {
                echo "<p>Directori eliminat: <strong>$nom_directori</strong></p>";
                echo '<p><a href="index.php">Inici</a></p>';
            }
        } 
    } 
    ?>

</body>

</html>
