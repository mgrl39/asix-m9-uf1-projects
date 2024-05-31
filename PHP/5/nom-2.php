<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>5. Nom 2 </title>
</head>

<body>
    <?php
    session_start();
    $_SESSION['id_nom'] = $_REQUEST['nom'];
    
    echo "Nom enregistrat: <strong>".$_SESSION['id_nom']; echo "</strong><br>";

    ?>

    <p><a href="index.php">Inici</a></p>
</body>

</html>