<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Crear HTML (1)</title>
</head>

<body>
    <h1>Crear Plantilla HTML (1)</h1>

    <form action="crea-html-2.php" method="post">
        <label for="nomplantilla"><strong>Nom plantilla HTML:</strong></label>
        <input type="text" id="nomplantilla" name="nomplantilla" required>
        <br><br>
        <label for="titol"><strong>Títol de la pàgina:</strong></label>
        <input type="text" id="titol" name="titol" required>
        <br><br>

        <label for="color_fons"><strong>Color de fons:</strong></label>
        <input type="color" id="color_fons" name="color_fons" value="#ffffff">
        <br><br>

        <label for="mostrar_footer"><strong>Footer inclós</strong></label>
        <input type="checkbox" id="mostrar_footer" name="mostrar_footer" checked>
        <br><br>

        <label for="directori"><strong>Selecciona el directori:</strong></label>
        <?php
        // Obtenir la llista de subdirectoris dins de "public"
        $directoris = array_filter(glob('public/*'), 'is_dir');

        // Afegir "public" si no està a la llista
        if (!in_array('public', $directoris)) {
            $directoris[] = 'public';
        }

        // Mostrar com a radio buttons
        foreach ($directoris as $directori) {
            $directori_nom = basename($directori);
            echo '<br>';
            echo "<input type='radio' id='$directori_nom' name='directori' value='$directori_nom' required>";
            echo "<label for='$directori_nom'>$directori_nom</label><br>";
        }
        ?>

        <br><br>

        <button type="submit">bash script</button>
    </form>

    <p><a href="index.php">Inici</a></p>
</body>

</html>