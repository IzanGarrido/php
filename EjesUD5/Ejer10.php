<?php
/**
 * @author Izan Garrido Quintana
 */

# Ejercicio 23 Dado un vector asociativo de trabajadores con su salario, crea usando funciones
# y a criterio del usuario, el salario máximo, el salario mínimo y el salario medio. (puede elegir uno
# de ellos, varios o todos)

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>

<h1>Izan Garrido - Ejercicio 10</h1>

<!-- Formulario para seleccionar el cálculo deseado -->
<form action="./Ejer10.php" method="post">
    <label for="salario">Salario a calcular:</label>
    <select name="salario[]" id="salario" multiple>
        <option value="maximo">Salario Máximo</option>
        <option value="minimo">Salario Mínimo</option>
        <option value="medio">Salario Medio</option>
    </select><br><br>
    <input type="submit" name="submit">
</form>
    
</body>
</html>

<?php 

// Array asociativo de trabajadores con sus respectivos salarios
$trabajadores = array(
    "Juan" => 2500,
    "Ana" => 3000,
    "Carlos" => 2800,
    "Marta" => 3200,
    "Luis" => 2700
);

// Función que calcula el salario máximo
function maximo($arr) {
    // La función max() devuelve el valor mayor de un array
    echo "Salario máximo: " . max($arr) . "<br>";
}

// Función que calcula el salario mínimo
function minimo($arr) {
    // La función min() devuelve el valor menor de un array
    echo "Salario mínimo: " . min($arr) . "<br>";
}

// Función que calcula el salario medio
function medio($arr) {
    // Calcula la media dividiendo la suma de salarios entre el número de trabajadores
    echo "Salario medio: " . array_sum($arr)/count($arr) . "<br>";
}

// Comprueba si el formulario ha sido enviado
if (isset($_POST["submit"])) {
    $salario = $_POST["salario"]; // Recupera las opciones seleccionadas por el usuario

    // Recorre cada selección y llama a la función correspondiente
    foreach ($salario as $valor) {
        $valor($trabajadores); // Llama a la función con el nombre almacenado en $valor
    }
}
?>