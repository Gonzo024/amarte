<?php

include 'conexion_contacto.php';


$nombre_apellido = $_POST['nombre y apellido'];
$correo = $_POST['correo electronico'];
$asunto = $_POST['asunto'];
$comentario = $_POST['comentario'];

$query = "INSERT INTO contacto(nombre_apellido, correo, asunto, comentario)
    VALUES('$nombre_apellido', '$correo', '$asunto', '$comentario')";


    $ejecutar = mysqli_query($conexion, $query);

?>

$nombre_apellido = $_POST['nombre y apellido'];
