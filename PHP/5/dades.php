<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>5. Dades</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['id_nom']) || isset($_POST['id_cognoms'])) {
        if (isset($_SESSION['id_nom'])) {
            echo "Nom: <strong>" . $_SESSION['id_nom'] . "</strong><br>";
        }

        if (isset($_SESSION['id_cognoms'])) {
            echo "Cognoms: <strong>" . $_SESSION['id_cognoms'] . "</strong>";
        }
    
    }
    ?>
    <p><a href="index.php">Inici</a></p>
</body>

</html>