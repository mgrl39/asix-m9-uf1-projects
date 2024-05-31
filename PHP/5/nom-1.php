<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>5. Nom 1 </title>
</head>

<body>

    <!-- Comprova si ja hi ha un nom a la variable de sessió -->

    <?php
    session_start();
    // echo "missatge de prova per veure si funciona aquesta part";
    if (isset($_SESSION['id_nom'])) {
        echo "Nom Anterior: <strong>" . $_SESSION['id_nom'] . "</strong>";
    }
    
    ?>

    <!-- Mostra el nom anterior si existeix -->
    <!-- La pàgina "Nom" sol·licita el nom de l'usuari i l'envia a una altra pàgina (nom-2.php)-->

    <!-- Formulari per recollir el nou nom -->
    <form action="nom-2.php" method="post">
        <p>Escriu el teu nom:</p>
        <label for="nom"><strong>Nom:<strong></label>
        <input type="text" id="nom" name="nom" required>
        <br><br>
        <button type="submit">Guardar</button>
        <button type="reset">Esborrar</button>

    </form>



</body>

</html>