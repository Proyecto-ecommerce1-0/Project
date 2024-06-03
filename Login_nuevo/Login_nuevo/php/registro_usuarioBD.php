<?php

include 'conexión_BD.php';

$nombre = $_POST['nombre'];

$segundo_nombre = $_POST['segundo_nombre'];

$apellido = $_POST['apellido'];

$segundo_apellido = $_POST['segundo_apellido'];

$cedula = $_POST['cedula'];

$telefono = $_POST['telefono'];

$correo = $_POST['correo'];

$contrasena = $_POST['password'];

$genero_seleccionado = $_POST['genero'];

$query = "INSERT INTO cliente(Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Cedula, Telefono, Correo, Contrasena, genero)
VALUES('$nombre', '$segundo_nombre', '$apellido', '$segundo_apellido', '$cedula', '$telefono', '$correo', '$contrasena', '$genero_seleccionado')";

/*Verificar que el correo no se repita en la base de datos */
$verificar_correo = mysqli_query($conexion, "SELECT*FROM cliente WHERE correo = '$correo'");

if(mysqli_num_rows($verificar_correo) > 0 ){

    echo '<script>
    alert("Este correo ya esta registrado, intenta con otro diferente");
    window.location= "../Login.php";
    </script>';
    exit();
}
 
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){

    echo '<script>
    alert("usuario almacenado exitosamente");
    window.location= "../Login.php";
    </script>';
}
else{
    echo '<script>
    alert("Intentelo de nuevo, usuario no almacenado");
    window.location= "../Login.php";
    </script>';
    exit();
}

mysqli_close($conexion);

?>