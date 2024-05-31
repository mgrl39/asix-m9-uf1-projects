<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>5. Esborrar</title>
</head>

<body>

    <?php
    session_start();
    // Esborrem totes les variables de la sessió
    // Encara que crec que nof aria falta posar el _SESSION = array
    $_SESSION= array();

    // Destruim la sessió
    session_destroy();
    ?>


    <p>Dades esborrades amb èxit.</p>
    <p><a href="index.php">Inici</a></p>
</body>

</html>