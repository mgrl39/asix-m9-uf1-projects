<?php
// Verifiquem si és la primera vegada que s'entra al document
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    ?>
<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>4. Fomularis</title>
    <style>
    input[type="text"],
    input[type="password"] {
        border: 2px solid;
    }

    label {
        display: inline-block;
        width: 100%;
        /* Ocupa todo el ancho de la celda */
        text-align: right;
        /* Alinea el text a la dreta */
        /* Espaciado inferior para separar los labels */
    }

    input {
        margin: 0.2% 0;
    }

    td .esquerra {
        text-align: left;
    }

    td .dreta {
        text-align: right;
    }

    textarea {
        vertical-align: top;
    }
    </style>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">

        <table>
            <!-- Camps de text -->
            <tr>
                <td><label for="nom">Nom</label></td>
                <td><input type="text" name="nom" size="35" required></td>
            </tr>

            <tr>
                <td>
                    <label for="cognom">Cognom</label>
                </td>
                <td><input type="text" name="cognom" size="35" required></td>
            </tr>

            <tr>
                <td><label for="password">Passwd</label></td>
                <td><input type="password" name="password" size="35" required></td>
            </tr>

            <!-- Radiobutton per l'usuari -->

            <tr>
                <td><label>Usuari</label></td>
                <td><input type="radio" name="usuari" value="professor" checked> Profe&emsp;&emsp;
                    <input type="radio" name="usuari" value="alumne"> Alumne
                </td>
            </tr>


            <!-- Checkbox per l'estat -->
            <tr>
                <td><label>Actiu</label></td>
                <td><input type="checkbox" name="actiu" checked></td>
            </tr>

            <!-- Camp per adjuntar fitxers -->
            <tr>
                <td><label for="foto">Foto</label></td>
                <td><input type="file" name="foto" required></td>
            </tr>

            <!-- Camp d'edat amb min i max value -->
            <tr>
                <td><label for="edat">Edat</label></td>
                <td><select id="edat" name="edat" required>
                        <?php
                            for ($i = 18; $i <= 99; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                    </select>
                </td>
            </tr>

            <!-- Camp de comentaris -->
            <tr>
                <td style="text-align: right; vertical-align: top;"><label for="comentaris">Comentaris</label></td>
                <td>
                    <textarea name="comentaris" rows="6" cols="35"
                        onfocus="if(this.value=='(Comentaris de l\'usuari)') this.value='';"
                        onblur="if(this.value=='') this.value='(Comentaris de l\'usuari)';"
                        required>(Comentaris de l'usuari)</textarea>
                </td>
            </tr>


            <!-- Camp ocult amb nom i valor -->
            <tr>
                <td>
                    <input type="hidden" name="ocult" value="prova">
                </td>
            </tr>

            <!-- Botons d'enviar i esborrar -->
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Esborrar">
                </td>
            </tr>

        </table>
    </form>
</body>

</html>
<?php
} else {
    if (!empty($_POST)) {
        $keys = array_keys($_POST);
        $count = count($keys);

        if (isset($_POST['password']) && !empty($_POST['password'])) {
            $password = md5($_POST['password']); 
            $_POST['password'] = $password; 
        }

        for ($i = 0; $i < $count; $i++) {
            $index = $keys[$i];
            $value = $_POST[$index];
            echo "POST[$index] = $value<br>";
        }
    }
}
?>