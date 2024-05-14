<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <label for="cursos">Cursos</label>
        <select name="cursos[]"  id="cursos" multiple>
        <option value="select" selected disabled>Select</option>
        <option value="PHP">PHP</option>
        <option value="MySql">MySql</option>
        <option value="Laravel">Laravel</option>
        <option value="vueJs">vueJs</option>
        </select>
        <br>
        <br>
        <label for="">Masculino</label>
        <input type="radio" name="miRadioButton" value="masculino" checked>
        <br>
        <label for="">Femenino</label>
        <input type="radio" name="miRadioButton" value="femenino">
        <br>
        <label for="">Perro</label>
        <input type="checkbox" name="miCheckBoxButton" value="perro">
        <br>
        <label for="">Gato</label>
        <input type="checkbox" name="miCheckboxButton" value="gato">
        <br>
        <label for="">Nacimiento: </label>
        <input type="date" name="fechaNacimiento">
        <br><br>
        <button type="submit">Enviar Formulario</button>
        <br>
        <button type="reset">Limpiar Formulairo</button>
    </form>
</body>
</html>