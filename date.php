<?php
/*
// Obtener la zona horaria predeterminada
$zona_horaria = date_default_timezone_get();

echo "La zona horaria predeterminada es: $zona_horaria";
echo '<br>';

// Establecer la zona horaria predeterminada a Argentina, Buenos Aires
date_default_timezone_set('America/Argentina/Buenos_Aires');

// Obtener la zona horaria predeterminada
$zona_horaria = date_default_timezone_get();

echo "La zona horaria predeterminada es: $zona_horaria";


// Estructura basica de la funcion date()
string date ( string $format [, int $timestamp = time() ] );


// Obtener la fecha y hora actual en formato "día/mes/año hora:minutos:segundos"
$fecha_actual = date("d/m/Y H:i:s");

echo "La fecha y hora actual es: $fecha_actual";
echo '<br>';

*/

// Otros ejemplos de formato
echo date('d-m-y'); 
echo '<br>';
echo date('D-M-Y'); 
echo '<br>';
echo date('Y-m');
echo '<br>';
echo date('d');
echo '<br>';
echo date('D');
echo '<br>';
echo date('h:m:s');
/* Salidas correspondiente a otros ejemplos de formato
29-02-24
Thu-Feb-2024
2024-02
29
Thu
11:02:10
*/
