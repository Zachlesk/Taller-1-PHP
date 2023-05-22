<!--  Construir el algoritmo que solicite el nombre y edad de 3
personas y determine el nombre de la persona con mayor edad.-->

<?php

    $edad1 = $_POST["edad1"];
    $edad2 = $_POST["edad2"];
    $edad3 = $_POST["edad3"];
    $nombre1 = $_POST["nombre1"];
    $nombre2 = $_POST["nombre2"];
    $nombre3 = $_POST["nombre3"];

    $nombreMayor;
    $edadMayor = 0;

    while ($edad1 > $edadMayor || $edad2 > $edadMayor || $edad3 > $edadMayor) {

        if ($edad1 > $edadMayor) {
            $edadMayor = $edad1;
            $nombreMayor = $nombre1;
        }
        if ($edad2 > $edadMayor){
            $edadMayor = $edad2;
            $nombreMayor = $nombre2;
        }
        if ($edad3 > $edadMayor){
            $edadMayor = $edad3;
            $nombreMayor = $nombre3;
        }
        break;
    }

    echo "La edad mas alta le corresponde a {$nombreMayor} con {$edadMayor}";

?>  