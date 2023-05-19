<!-- Construir el algoritmo para determinar el voltaje de un
circuito a partir de la resistencia y la intensidad de corriente. -->

<?php

    $resistencia = $_POST['resistencia'];
    $intensidad = $_POST['intensidad'];

    $voltaje = $resistencia * $intensidad;

    echo "El voltaje del circuito es ${voltaje}";
?>