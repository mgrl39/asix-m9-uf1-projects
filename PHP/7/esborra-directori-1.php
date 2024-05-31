<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Esborrar directori (1)</title>
</head>

<body>
    <h1>Esborrar directori (1)</h1>

    <?php
    session_start();

    $directoris_disponibles = scandir("public");
    $directoris_disponibles = array_diff($directoris_disponibles, array('.', '..'));

    if (!empty($directoris_disponibles)) {
        // Si existeix la variable de sessió amb el nom de l'últim directori creat, mostra la info
        if (isset($_SESSION["nou_directori"])) {
            $nom_directori_predefinit = $_SESSION["nou_directori"];
        } else {
            $nom_directori_predefinit = "";
        }

        echo "<p>Últim directori creat: <strong>$nom_directori_predefinit</strong></p>";

        // Formulari per esborrar directori
        echo '<p>Escriu el nom del directori:</p>';
        echo '<form action="esborra-directori-2.php" method="post">';
        echo '<label for="fnom"><strong>Nom:</strong></label>';
        echo '<input type="text" id="fnom" name="fnom" value="' . $nom_directori_predefinit . '">';
        echo '<br><br>';
        echo '<button type="submit">Esborrar</button>';
        echo '</form>';
    } else {
        // Informa que no hi ha directoris disponibles
        echo "<p>No hi ha cap directori disponible per esborrar.</p>";
    }
    ?>

    <p><a href="index.php">Inici</a></p>
</body>

</html>
