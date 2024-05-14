<?php
/*  While
// -> Estructura 

while (condición) {
    // Código a ejecutar mientras la condición sea verdadera
}

*/

/*Ejemplo hacemos una calculadora para aprender las tablas de multiplicar

En la tabla de multiplicar, cada parte tiene un nombre específico:

1.Multiplicando: Es el número que se está multiplicando por otro número.
2.Multiplicador: Es el número por el cual se multiplica el multiplicando.
3.Producto: Es el resultado de la multiplicación.
4.Opcionalmente en nuestro caso agregamos un Tope: para indicar hasta donde
 se desea realizar el producto.
 
Por ejemplo, en la operación "7 x 3 = 21":

7 es el multiplicando.
3 es el multiplicador.
21 es el producto.
*/

$multiplicando = 3;
$multiplicador = 11;
$tope = 10;

echo "Tabla de multiplicar del $multiplicando :<br>";

while ($multiplicador <= $tope) {
    $producto = $multiplicando * $multiplicador;
    echo "$multiplicando x $multiplicador = $producto<br>";
    $multiplicador++;
}
