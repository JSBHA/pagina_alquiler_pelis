<?php
include '../model/conexion.php';

if ($_POST) {
    $correo = $_POST["correo"];
    $usuario = $_POST["user"];
    $password = $_POST["pass"];


     try {
        $sqlSelect = "SELECT COUNT(*) FROM usuario WHERE correo = :correo";
        $consulta = $conection->prepare($sqlSelect);
        $consulta->bindParam(':correo', $correo);
        $consulta->execute();
        
        $numRows = $consulta->fetchColumn();
        
        if ($numRows > 0) {
            echo "<p class='alerta_registro'>Este usuario ya está registrado.</p>";
        } else {
            $insertar = "INSERT INTO usuario (correo, nombre, password)
                         VALUES (:correo, :usuario, :password)";

            $resultado = $conection->prepare($insertar);
            $resultado->bindParam(':correo', $correo);
            $resultado->bindParam(':usuario', $usuario);
            $resultado->bindParam(':password', $password);
            $resultado->execute();
            
            if ($resultado) {
                header("location:login.php");
            }
        }
    } catch (Exception $exception) {
        $message = $exception->getMessage();
        echo '<script>alert("' . $message . '");</script>';
    }

}




?>