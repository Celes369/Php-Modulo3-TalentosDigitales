<?php
$nombre = 'Celeste';
$apellido = 'Sandoval';
$edad = 36;
// una manera más simple de ir agregando más datos para despues mostrarlos
$datosAlumno = $nombre.' '.$apellido.' '.$edad;
// Formas de concatenación: Ejemplos
// echo 'Mi nombre es: '.$nombre.' y mi apellido es : '.$apellido;
// echo 'Nombre y Apellido: '.$nombre.' '.$apellido;
echo 'Datos del alumno: '.$datosAlumno;
echo '<br>';

// Interpolación ejemplo
echo "Mi nombre es: $nombre"; 
echo '<br>';
// Otra forma
echo "Mi nombre es: {$nombre}"; 
echo '<br>';


// Interpolación de variables dentro de una cadena
$cadena = "Hola, mi nombre es $nombre y tengo $edad años.";

echo $cadena; // Imprime Hola, mi nombre es Celeste y tengo 36 años.


$cadena = 'Hola, mi nombre es $nombre y tengo $edad años.';
echo $cadena; //  imprime Hola, mi nombre es $nombre y tengo $edad años.

