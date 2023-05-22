<?php
// Variables para almacenar la información del estudiante con mayor y menor nota
$estudianteMayorNota = null;
$estudianteMenorNota = null;

// Contadores para hombres y mujeres
$cantidadHombres = 0;
$cantidadMujeres = 0;

// Cantidad total de estudiantes
$cantidadEstudiantes = 0;

// Bucle para procesar los datos de los estudiantes
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos enviados desde el formulario
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $nota = floatval($_POST['nota']);
    
    // Incrementar el contador de estudiantes
    $cantidadEstudiantes++;
    
    // Verificar si es el primer estudiante o si tiene la mayor nota
    if ($estudianteMayorNota == null || $nota > $estudianteMayorNota['nota']) {
        $estudianteMayorNota = [
            'nombre' => $nombre,
            'sexo' => $sexo,
            'nota' => $nota
        ];
    }
    
    // Verificar si es el primer estudiante o si tiene la menor nota
    if ($estudianteMenorNota == null || $nota < $estudianteMenorNota['nota']) {
        $estudianteMenorNota = [
            'nombre' => $nombre,
            'sexo' => $sexo,
            'nota' => $nota
        ];
    }
    
    // Incrementar el contador correspondiente al sexo del estudiante
    if ($sexo == "M") {
        $cantidadHombres++;
    } elseif ($sexo == "F") {
        $cantidadMujeres++;
    }
}

// Mostrar los resultados
echo "Estudiante con la mayor nota:<br>";
echo "Nombre: " . $estudianteMayorNota['nombre'] . "<br>";
echo "Sexo: " . $estudianteMayorNota['sexo'] . "<br>";
echo "Nota: " . $estudianteMayorNota['nota'] . "<br><br>";

echo "Estudiante con la menor nota:<br>";
echo "Nombre: " . $estudianteMenorNota['nombre'] . "<br>";
echo "Sexo: " . $estudianteMenorNota['sexo'] . "<br>";
echo "Nota: " . $estudianteMenorNota['nota'] . "<br><br>";

echo "Cantidad de estudiantes hombres: " . $cantidadH;
