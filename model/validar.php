<?php

require_once "conexion.php";


$usuario = $_POST['user'];
$contrasena = $_POST['pass'];

$consulta = "SELECT * FROM usuario WHERE nombre='$usuario' AND password ='$contrasena' ";

$resultado = $conection->query($consulta);

$filas = $resultado->rowCount();

if ($filas) {
    header("location:../index.php");
} else {
    ?>
    
    <script>alert("Error de usuario ")</script>
    <?php
    include("../login/login.php");
}
?>




