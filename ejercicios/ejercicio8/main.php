<!-- 8. Programa que ingrese por teclado:
a. el valor del lado de un cuadrado para mostrar por pantalla el
perímetro del mismo
b. la base y la altura de un rectángulo para mostrar el área del
mismo -->

<?php

    $lado = $_POST["lado"];
    $base = $_POST["base"];
    $altura = $_POST["altura"];

    $area = $base * $altura;
    $perimetro = $lado * $lado;
    
    echo "El perimetro del cuadrado de lado {$lado} es de {$perimetro} <br>";
    echo "El area de el triangulo de base {$base} y de altura {$altura} es de {$area}";


?>