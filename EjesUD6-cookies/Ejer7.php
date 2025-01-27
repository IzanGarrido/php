<?php

/**
 * @author Izan Garrido Quintana
 * 
 * 7. Usa el formulario (Ejercicio 12 UD5) de la caja fuerte donde se
 * indique la contraseña y muestre las contraseñas ya introducidas y
 * el número de intentos guardando estos datos en una Cookie.
 * Se deben mostrar la contraseña correcta, las contraseñas ya
 * introducidas y el número de intentos (cookie).
 * 
 */

 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $array = array();
    if (isset($_POST["enviar"])) {

        if (isset($_POST["num"])) {
    
            if (empty(trim($_POST["num"]))){
                echo "<p style='color: red'>No puede estar vacío</p>";
            }else if (!is_numeric(trim($_POST["num"]))) {
                echo "<p style='color: red'>Tiene que ser númerico</p>";
            } else if (strlen(trim($_POST["num"])) != 4) {
                echo "<p style='color: red'>Tiene que contener 4 digitos</p>";
            } else {
                

            }

        }

    }

}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Izan Garrido Quintana</title>
</head>

<body>

    <form action="Ejer7.php" method="post">
        <fieldset>
            <legend>
                <h1>Ejercicio 7 - Izan</h1>
            </legend>

            <label for="probar">Introduce la combinación:</label><br><br>
            <input type="text" name="num"><br><br>


            <input type="submit" value="Enviar" name="enviar"><br><br>
        </fieldset>
    </form>

</body>

</html>