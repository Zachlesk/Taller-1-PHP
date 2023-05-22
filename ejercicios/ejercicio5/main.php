<!-- Construir el algoritmo que lea por teclado dos números,
si el primero es mayor al segundo informar su suma y
diferencia, en caso contrario, informar el producto y la
división del primero respecto al segundo. -->


<?php

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    if ($numero1 > $numero2) {
        $suma = $numero1 + $numero2;
        $diferencia = $numero1 - $numero2;
        echo "El número {$numero1} es mayor al numero {$numero2} por lo tanto, la suma de sus valores es {$suma} y su diferencia es {$suma}";
    }
    
    else {
        $multiplicacion = $numero1 * $numero2;
        $division = $numero1 / $numero2;
        echo "El numero {$numero1} es menor o igual a {$numero2}, por lo tanto, el producto de sus valores es {$multiplicacion} y su division es {$division}";
    }


?>