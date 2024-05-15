<?php

include 'conexión_BD.php';

$nombre = $_POST['nombre'];

$correo = $_POST['correo'];

$contrasena = $_POST['password'];

$query = "INSERT INTO cliente(Primer_Nombre, Correo, Contrasena)
VALUES('$nombre', '$correo', '$contrasena')";

$ejecutar = mysqli_query($conexion, $query);
echo "su contraseña es ".$contrasena ;

?>