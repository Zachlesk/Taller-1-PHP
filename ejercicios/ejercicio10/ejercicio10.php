
<!-- Desarrolle un programa cíclico que capture un dato
numérico cada vez, y los vaya acumulando. El programa se
detiene cuando el usuario digita un cero. El programa debe
mostrar: LA SUMATORIA DE LOS VALORES, EL VALOR DEL
PROMEDIO, CUÁNTOS VALORES FUERON DIGITADOS, MAYOR
VALOR Y MENOR VALOR. -->

<?php


session_start();

if (isset($POST["ejecutar"])) {
    if ($_POST ["ejecutar"] == "Agregar número") {
        $numero = $_POST["numero"];
        if ($numero != 0) {
            array_push($_SESSION["numeros"], $numero);
        };

    } else if ($_POST ["ejecutar"] == "Mostrar resultados") {
        $numeros = $_SESSION["numeros"];
        $suma = array_sum($numeros);
        $promedio = count($numeros) > 0 ? $suma / count($numeros) : 0; 
        $mayor = max($numeros);
        $menor = min($numeros);
        $contador = count($numeros);  

    }
}


        
        
?>