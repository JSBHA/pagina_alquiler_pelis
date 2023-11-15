<?php
require_once '../model/conexion.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylos1.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <title>Pelis-login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-black d-flex justify-content-center alingn-items-center">
    <form action="../model/validar.php" method="post">

        <a href="../index.php" class="link-sin-resalte">
            <h2 class="logotipo">Pelis</h2>
        </a>

        <h2 class="logotipo">Inicio de sesión</h2>

        <p>Usuario <input type="text" name=user placeholder="Usuario"></p>

        <p>Contraseña <input type="password" name="pass" placeholder="Ingrese contraseña"></p>

        <label for="#">
            <p>Olvide mi contraseña</p>
        </label>

        <input type="submit" value="Iniciar" class="btn btn-secondary">

        <a href="registro.php" class="btn btn-secondary">Crear cuenta</a>

    </form>



</body>