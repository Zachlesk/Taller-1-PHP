<?php

    if($_POST) {

        $nombres = array();
        $edades = array();

        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        $nombre3 = $_POST['nombre3'];

        array_push($nombres, $nombre1, $nombre2, $nombre3);
        print_r ($nombres);

        $edad1 = $_POST['edad1'];
        $edad2 = $_POST['edad2'];
        $edad3 = $_POST['edad3'];

        array_push($edades, $edad1, $edad2, $edad3);
        print_r($edades);

        $select1 = $_POST['select1'];
        $select2 = $_POST['select2'];
        $select3 = $_POST['select3'];
        }

        $numero_mujeres = 0;
        $numero_hombres = 0;
        $valor_mas_grande = max($edades);
        $valor_mas_pequeño = min($edades);
        $posicion_grande = array_search($valor_mas_grande, $edades);
        $posicion_pequeño = array_search($valor_mas_pequeño, $edades);
        $nombre_mayor = array_values($nombres)[$posicion_grande];
        $nombre_mayor = array_values($nombres)[$posicion_pequeño];

        if($select1) {
            if ($select1 == "masculino"){
                $numero_hombres++;
            } else {
                $numeros_mujeres++;
            }
            }
        else if($select2) { 
            if ($select2 == "masculino"){
                $numero_hombres++;
            } else {
                $numeros_mujeres++;
            }
        }
            
        else if($select3) { 
            if ($select3 == "masculino"){
                $numero_hombres++;
            } else {
                $numeros_mujeres++;
            }
        }

        echo "<br> Persona con más edad $nombre_mayor <br>
        Edad: $valor_mas_grande <br>";
        echo "<br> Persona con menor edad $nombre_mayor <br>
        Edad: $valor_mas_pequeño <br>";
        echo "<br> Cantidad de mujeres $numero_mujeres <br>";
        echo "<br> Cantidad de hombres $numero_hombres <br>";
