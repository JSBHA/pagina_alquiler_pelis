<?php
include '../model/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylos1.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <title>Pelis-Registro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body class="bg-black d-flex justify-content-center alingn-items-center">
    <form action="registro_Usuario.php" method="post">

        <a href="../index.php" class="link-sin-resalte">
            <h2 class="logotipo">Pelis</h2>
        </a>

        <h2 class="logotipo">Crear cuenta</h2>
        <p>Correo<input type="text" name=correo required placeholder="Correo"></p>

        <p>Usuario <input type="text" name=user required placeholder="Usuario"></p>

        <p>Contraseña <input type="password" name="pass" required placeholder="Contraseña"></p>

        <input type="submit" value="enviar">
    </form>


</body>

</html>