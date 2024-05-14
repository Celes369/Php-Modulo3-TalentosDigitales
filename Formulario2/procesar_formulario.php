<?php
$nombre = $_POST['nombre'];
$cursos = $_POST['cursos'];
$miRadioButton = $_POST['miRadioButton'];
$miCheckBoxButton = $_POST['miCheckBoxButton'];
$fechaNacimiento = $_POST['fechaNacimiento'];

echo "Datos del formulario: <br>";
echo 'Nombre: '.$nombre.'<br>';
echo 'Sexo: '.$miRadioButton.'<br>';
echo 'Mascota: '.$miCheckBoxButton.'<br>';
echo "Curso: ";
// Rrecorremos el array de cursos
foreach ($cursos as $index => $curso) {
    echo $curso.' - ';
}
echo "<br> Nacimiento: $fechaNacimiento";




