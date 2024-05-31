<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>5. Cognoms 1 </title>
</head>

<body>

    <?php
    session_start();
    if (isset($_SESSION['id_cognoms'])) {
        echo "Cognoms Anteriors: <strong>" . $_SESSION['id_cognoms'] . "</strong>";
    }
    
    ?>

    <form action="cognoms-2.php" method="post">
        <p>Escriu els teus cognoms:</p>
        <label for="cognoms"><strong>Cognoms:</strong></label>
        <input type="text" id="nom" name="cognoms" required>
        <br><br>
        <button type="submit">Guardar</button>
        <button type="reset">Esborrar</button>
    </form>



</body>

</html>