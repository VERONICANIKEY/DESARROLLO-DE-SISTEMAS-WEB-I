<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de Datos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="dive">

        <h1>Captura de datos personales</h1>

        <br>

        <h2>Ingresa los datos que se te piden</h2>

        <br>

        <p>Mi primera encuesta</p>

        <hr>

        <br>

        <form action="resultados.php" method="POST">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <br><br>

    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" required>

    <br><br>

    <label for="ciudad">Ciudad donde vives:</label>
    <input type="text" id="ciudad" name="ciudad" required>

    <br><br>

    <label for="fecha_nacimiento">Fecha de nacimiento:</label>
    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

    <br><br>

    <label for="pasatiempo">Pasatiempo favorito:</label>
    <input type="text" id="pasatiempo" name="pasatiempo" required>

    <br><br>

    <button type="submit">Registrar datos</button>

</form>

    </div>

</body>
</html>