<?php

include 'conexion_login.php' ;

$usuario = $_POST['usuario'] ;
$pasword = $_POST ['pasword'] ;

$query = "INSERT INTO login(usuario, pasword)
VALUES('$usuario' , '$pasword')" ;

$ejecutar = mysqli_query($conexion , $query) ;




?>