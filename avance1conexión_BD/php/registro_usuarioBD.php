<?php

include 'conexión_BD.php';

$nombre = $_POST['nombre'];

$apellido = $_POST['apellido'];

$cedula = $_POST['cedula'];

$telefono = $_POST['telefono'];

$correo = $_POST['correo'];

$contrasena = $_POST['password'];

$genero_seleccionado = $_POST['genero'];

$query = "INSERT INTO cliente(Primer_Nombre, Primer_Apellido, Cedula, Telefono, Correo, Contrasena, genero)
VALUES('$nombre', '$apellido', '$cedula', '$telefono', '$correo', '$contrasena', '$genero_seleccionado')";

$ejecutar = mysqli_query($conexion, $query);
echo "su contraseña es ".$contrasena ;

?>