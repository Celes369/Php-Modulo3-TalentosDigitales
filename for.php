<?php
/* 
for (inicio; condición; incremento/decremento) {
    // Código a ejecutar en cada iteración
}


// Este bucle imprimirá los valores de i desde 0 hasta 4.
for ($i = 0; $i < 5; $i++) {
    echo "El valor de i es: $i <br>"; 
}


// Siguiendo con el ejemplo de las tablas de multiplicar 
$multiplicando = 7;
$tope = 10;

echo "Tabla de multiplicar del $multiplicando :<br>";

for ($multiplicador = 0; $multiplicador <= $tope;  $multiplicador++){
    $producto = $multiplicando * $multiplicador;
    echo "$multiplicando x $multiplicador = $producto<br>";
}

// Imprimimos resultados de mayor a menor usando decremento en lugar de incremento
$multiplicando = 7;
$tope = 0;

echo "Tabla de multiplicar del $multiplicando :<br>";

for ($multiplicador = 10; $multiplicador >= $tope;  $multiplicador--){
    $producto = $multiplicando * $multiplicador;
    echo "$multiplicando x $multiplicador = $producto<br>";
}
*/

// Ejemplo recorrido de un array 
$personas = array("Celeste", "Rocío", "Juan", "Pepe", "Pepa", 33, true, 2.4);

for ($i = 0; $i < count($personas); $i++){
    echo $personas[$i].'<br>';
}