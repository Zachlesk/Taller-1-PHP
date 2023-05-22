<?php
    /* Dado un número indicar si es par o impar y si es mayor de 10 */

    $number = $_POST['number'];
    

    if ($_POST) { 
    if ($number % 2) {
        echo "Su número es impar";
    }
    else {
        echo "Su número es par";

    }

    if ($number > 10) {
        echo "Su número es mayor a 10";
    }
    else {
        echo "Su número no es mayor a 10";
    }

    }

?>