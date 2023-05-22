
<!-- Desarrolle un programa cíclico que capture un dato
numérico cada vez, y los vaya acumulando. El programa se
detiene cuando el usuario digita un cero. El programa debe
mostrar: LA SUMATORIA DE LOS VALORES, EL VALOR DEL
PROMEDIO, CUÁNTOS VALORES FUERON DIGITADOS, MAYOR
VALOR Y MENOR VALOR. -->

<?php

$enviar = '"enviar"';
$post = '"post"';
$text = '"number"';
$submit = '"submit"';
$name = '"numero"';
$numero = $_POST["numero"];

while ($numero != 0) {
    echo "<form method=$post> 
            <label for=$name>Ingrese un nuevo numero</label>
            <input type=$text name=$name><br><br>
            <input type=$submit value= $enviar>
        </form>";
    $numero = $_POST["numero"];
    break
};
        
        
?>