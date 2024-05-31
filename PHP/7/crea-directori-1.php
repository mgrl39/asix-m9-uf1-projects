<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Crear directori (1)</title>
</head>

<body>
    <h1>Crear directori (1)</h1>
    <p>Escriu el nom del directori:</p>
    <form action="crea-directori-2.php" method="post">
        <label for="fnom"><strong>Nom:</strong></label>
        <input type="text" id="fnom" name="fnom" required>
        <br><br>
        <button type="submit">mkdir</button>
    </form>
    <p><a href="index.php">Inici</a></p>
</body>

</html>