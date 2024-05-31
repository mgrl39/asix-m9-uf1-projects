<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>5. Cognoms 2 </title>
</head>

<body>
    <?php
    session_start();
    $_SESSION['id_cognoms'] = $_REQUEST['cognoms'];
    
    echo "Cognoms enregistrats: <strong>".$_SESSION['id_cognoms']; echo "</strong><br>";

    ?>

    <p><a href="index.php">Inici</a></p>
</body>

</html>