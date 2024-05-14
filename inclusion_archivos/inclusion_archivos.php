<?php
/*Incluyendo el archivo foreach.php del ej anterior, usando require
 otra forma de enlace sabiendo que ambos archivos estan en el mismo 
nivel de directorio 

require './foreach.php';
*/

/*Incluyendo el archivo foreach.php del ej anterior, usando require
 otra forma de enlace sabiendo que ambos archivos estan en DISTINTOS 
niveles de directorio

require './foreach.php';
echo("Seguimos trabajando...");
*/
/*Incluyendo el archivo foreach.php del ej anterior, usando require
 otra forma de enlace sabiendo que ambos archivos estan en DISTINTOS 
niveles de directorio, archivo requerido en nivel inferior

require './foreachExterno/foreach.php';
*/

/*Incluyendo el archivo foreach.php del ej anterior, usando require
 otra forma de enlace sabiendo que ambos archivos estan en DISTINTOS 
niveles de directorio archivo, requerido en un nivel superior

require '../foreachExterno/foreach.php';

*/

/*Error require corta la ejecución sin la posibilidad de imprimir
 "Seguimos ejecutando..."

require './foreach.php';
echo("Seguimos ejecutando...");
*/
/*Ejemplo include del archivo foreach.php

include '../foreach.php';
*/

/*Error include sigue la ejecución e imprime
 "Seguimos ejecutando..."

include_once '../foreach.php';
echo("Seguimos ejecutando...");
*/

/*Ejemplo 1 include_once incluye solo una vez el archivo foreach.php"

include '../foreach.php';
echo("Despues de hacer include al archivo. <br>");
include_once '../foreach.php'; // no lo vuelve a incluir ya que antes lo fue con include
echo("Despues de hacer include_once al mismo archivo que en include <br>");
echo("Como vemos, no vuelve a incluir el mismo archivo.<br>");
*/

/*Ejemplo 3 include_once incluye solo una vez el archivo foreach.php
pero si luego se ejecutan nuevamente las instrucciones include con el mismo
nombre del archivo que en include_once, aquí si se vuelve a incluir dicho
archivo

include_once '../foreach.php';
echo("Despues de hacer include al archivo. <br>");
include '../foreach.php'; // vuelve a incluir ya que antes lo fue con include
echo("Despues de hacer include al mismo archivo que en include_once <br>");
echo("Como vemos, aquí sí se vuelve a incluir el mismo archivo.<br>");
*/

/*Ejemplo 1 require_once incluye solo una vez el archivo foreach.php
pero si luego se ejecutan nuevamente las instrucciones require con el mismo
nombre del archivo que en require_once, aquí si se vuelve a incluir dicho
archivo

require_once "../foreach.php";
echo("Despues de hacer require_once al archivo. <br>");
require '../foreach.php'; // vuelve a incluir ya que antes lo fue con require_once
echo("Despues de hacer require al mismo archivo que en require_once <br>");
echo("Como vemos, aquí sí se vuelve a incluir el mismo archivo.<br>");
*/
/*Ejemplo 2 require_once incluye solo una vez el archivo foreach.php

require_once "../foreach.php";
echo("Despues de hacer require_once al archivo. <br>");
require_once '../foreach.php'; // no vuelve a incluir ya que antes lo fue con require_once
echo("Despues de hacer require_once, nuevamente al mismo archivo que en require_once antes <br>");
echo("Como vemos, NO vuelve a incluir el mismo archivo.<br>");
*/

/*Ejemplo 3 require_once incluye solo una vez el archivo foreach.php
*/
require "../foreach.php";
echo("Despues de hacer require al archivo. <br>");
require_once '../foreach.php'; // no vuelve a incluir ya que antes lo fue con require_once
echo("Despues de hacer require_once, nuevamente al mismo archivo que en require antes <br>");
echo("Como vemos, NO vuelve a incluir el mismo archivo.<br>");