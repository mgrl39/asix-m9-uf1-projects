<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Crear directori (2)</title>
</head>

<body>
    <h1>Crear directori (2)</h1>

    <?php
    session_start();

    // Verificar
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom_directori = $_POST["fnom"];

        // Si no es buit
        if (!empty($nom_directori)) {
            // Filtrar el nom del directori
            $nom_directori = htmlspecialchars($nom_directori);

            // Si el directori ja existeix
            if (file_exists("public/$nom_directori")) {
                echo "<p>Error - Command status: 1<br><br>array(0) { }<hr></p>";
                echo '<p><a href="crea-directori-1.php">Tornar al formulari</a></p>';
            } else {
                // Crear el directori
                if (mkdir("public/$nom_directori")) {
                    //  Mostrar la confirmació
                    echo "<p>Directori creat: <strong>$nom_directori</strong></p>";
                    // Guardar nom directori
                    $_SESSION["nou_directori"] = $nom_directori;
                    echo '<p><a href="index.php">Inici</a></p>';
                } else {
                    // Si hi ha algun error en la creació del directori
                    echo "<p>Error - Command status: 1<br><br>array(0) { }<hr></p>";
                    echo '<p><a href="crea-directori-1.php">Tornar al formulari</a></p>';
                }
            }
        } else {
            // Info
            echo "<p>Error - Command status: 1<br><br>array(0) { }<hr></p>";
            echo '<p><a href="crea-directori-1.php">Tornar al formulari</a></p>';
        }
    } else {
        // Redirecció
        header("Location: crea-directori-1.php");
        exit();
    }
    ?>

</body>

</html>