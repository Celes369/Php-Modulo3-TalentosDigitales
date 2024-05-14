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
        <select name="cursos"  id="cursos">
        <option value="select" selected disabled>Select</option>
        <option value="PHP">PHP</option>
        <option value="MySql">MySql</option>
        <option value="Laravel">Laravel</option>
        <option value="vueJs">vueJs</option>
        </select>
        <br><br>
        <button type="submit">Enviar Formulario</button>
        <br>
        <button type="reset">Limpiar Formulairo</button>
    </form>
</body>
</html>