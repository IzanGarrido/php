<?php

function numerosComas($num){
    $array = explode(",",$num);

    foreach ($array as $numero) {
        if (!is_numeric($numero)) {
            return false;
        }
    }
    return true;
}

?>