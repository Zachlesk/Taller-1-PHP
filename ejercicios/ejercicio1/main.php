<!-- Construir el algoritmo para un programa que ingrese tres
notas de un alumno, si el promedio es menor o igual a 3.9
mostrar un mensaje "Estudie“, de lo contrario un mensaje que
diga "becado" -->


<?php

    $nombre = $_POST['nombre'];
    $promedio = $_POST['promedio'];

    if($promedio <= 3.9 ) {
        echo "Querido estudiante ${nombre}, necesitas estudiar más";
    }
    else {
        echo "Estamos orgullosos, estudiante ${nombre}, ¡estás becado!";
    }


?>