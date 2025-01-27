<?php 

/**
 * 
 * @author Izan Garrido Quintana
 * 
 * Validaciones para la ampliación del ejercicio 25
 * 
 */


// Función para verificar que un campo no esté vacío
function campoVacio($campo) {
    if (empty($campo)) {
        return true;
    } else {
        return false;
    }
}

// Función para verificar que el nombre solo contenga letras y espacios
function validarNombre($nombre) {

    if (ctype_alpha(str_replace(' ', '', $nombre)) === false) {
        return false;
    } else {
        return true;
    }

}

// Funcion para comprobar que la contraseña tenga un mínimo de 6 caracteres
function validarContrasena($contrasena) {

    if (strlen($contrasena) < 6) {
        return false;
    } else {
        return true;
    }

}

// Función para comprobar que el email tenga el formato correcto
function validarEmail($email) {

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else {
        return true;
    }

}

?>