<?php

/**
 * @author Izan Garrido Quintana
 * 
 * 8. Usa el formulario (Ejercicio 18 UD5) de cálculo de media, mediana y moda donde se indiquen
 * varios números y pueda seleccionar una o todas las opciones de cálculo sobre esos números y
 * las muestre guardando estos datos en una Cookie. Se deben mostrar los números con los
 * cálculos seleccionados en el presente y los números y los cálculos realizados en la ocasión
 * anterior (cookie).
 * 
 */

include 'valida.php';
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST["enviar"])) {

        if (isset($_POST["num"]) && isset($_POST["opciones"])) {
    
            

        }

    }

}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 - Izan Garrido Quintana</title>
</head>

<body>

    <form action="Ejer8.php" method="post">
        <fieldset>
            <legend>
                <h1>Ejercicio 8 - Izan</h1>
            </legend>

            <label for="numeros">Introduce los números separados por comas:</label><br>
            <input type="text" name="num" placeholder="1,2,3"><br><br>

            <label for="opciones">Escoge una o varias opciones:</label><br>
            <select name="opciones[]" multiple size="3">
                <option value="media">Media</option>
                <option value="mediana">Mediana</option>
                <option value="moda">Moda</option>
            </select><br><br>

            <input type="submit" value="Enviar" name="enviar"><br><br>
        </fieldset>
    </form>

</body>

</html>