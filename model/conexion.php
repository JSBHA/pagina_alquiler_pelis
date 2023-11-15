<?php

$password = "";
$user = "root";
$name_bd = "pelis";
$conection = null;

try {
    $conection = new PDO("mysql:dbname=pelis;host=localhost", $user, $password);
} catch (Exception $e) {
    echo "problema con la conexion " . $e->getMessage();
}
?>