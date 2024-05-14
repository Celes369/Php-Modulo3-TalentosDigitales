<?php
/* 
foreach ($array as $valor) {
    // código a ejecutar para cada elemento del array
}

foreach ($array as $indice => $valor) {
    // código a ejecutar para cada elemento del array
}

// Ejemplo 1 recorrido array imprimiendo el valor del elemento actual
$frutas = array("manzana", "banana", "naranja", "uva");

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

// Ejemplo 2 recorrido arraypor imprimiendo el indice y el valor del elemento actual
$frutas = array("manzana", "banana", "naranja", "uva");

foreach ($frutas as $indice => $fruta) {
    echo "En el índice $indice, se encuentra la fruta: $fruta<br>";
}

// Ejemplo con objeto
$persona = new stdClass();
$persona->nombre = "Celeste";
$persona->apellido = "Sandoval";
$persona->edad = 33;

foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>"; // imprime cada propiedad del objeto $persona junto con su valor asociado.
}



$productos = [
    [
        "codigo" => "A001",
        "descripcion" => "yerba"
    ],
    [
        "codigo" => "A002",
        "descripcion" => "azucar"
    ],
    [
        "codigo" => "A003",
        "descripcion" => "termo"
    ],
];

foreach ($productos as $key => $producto){
//exit($producto["codigo"]);
//var_dump($producto);
echo "<br> -> $key =>".$producto["codigo"];
}
$mensaje = "Fin de ejecución";
exit($mensaje);

// Ejemplo interrupción break
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

foreach ($numeros as $numero) {
    echo $numero . "<br>";

    // Si el número es mayor que 5, salir del bucle
    if ($numero > 5) {
        break;
    }
}*/
// Ejemplo alteración ejecución continue
echo "Del archivo foreach.php  (mismo nivel) <br>";
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// Imprime todos los impares desde el 1 al 9
foreach ($numeros as $numero) {
    // Si el número es par, saltar esta iteración. 
    if ($numero % 2 == 0) {
        continue;
    }

    echo $numero . "<br>";
}


