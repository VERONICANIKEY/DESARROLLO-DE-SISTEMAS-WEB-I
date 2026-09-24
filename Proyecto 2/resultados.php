<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Resultados de datos!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="dive2">

        <h1>Resultados</h1>

        <br>

        <img src="imagen.png" alt="Imagen de resultados" width="300">

        <br><br>

        <?php

            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $ciudad = $_POST['ciudad'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $pasatiempo = $_POST['pasatiempo'];

        ?>

        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>

        <p><strong>Edad:</strong> <?php echo $edad; ?></p>

        <p><strong>Ciudad donde vives:</strong> <?php echo $ciudad; ?></p>

        <p><strong>Fecha de nacimiento:</strong> <?php echo $fecha_nacimiento; ?></p>

        <p><strong>Pasatiempo favorito:</strong> <?php echo $pasatiempo; ?></p>

        <br>

        <h2>¡Bien Hecho!</h2>

        <br>

        <button onclick="Alert.render('¿Deseas regresar para ingresar un nuevo dato?')">
            Ingresar nuevo dato
        </button>

    </div>


    <div id="popUpBox">

        <div id="box">

            <img src="imagen.png" alt="Confirmación" width="100">

            <br><br>

            <p>¿Deseas regresar para ingresar un nuevo dato?</p>

            <button onclick="Alert.ok()">Sí, regresar</button>

        </div>

    </div>


    <script src="app.js"></script>

</body>
</html>