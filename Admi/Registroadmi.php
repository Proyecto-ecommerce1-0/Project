<?php

$conexion= new mysqli("localhost", "root", "", "bd_actualizada");

/*if($conexion)
{
    echo 'conexion exitosa';
}
else{
    echo 'conexion no exitosa';
}*/

$nombre = $_POST['nombre'];

$segundo_nombre = $_POST['segundo_nombre'];

$apellido = $_POST['apellido'];

$segundo_apellido = $_POST['segundo_apellido'];

$cedula = $_POST['cedula'];

$telefono = $_POST['telefono'];

$correo = $_POST['correo'];

$contrasena = $_POST['password'];

$genero_seleccionado = $_POST['genero'];

$query = "INSERT INTO administrador(Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Cedula, Telefono, Correo, Contrasena, genero)
VALUES('$nombre', '$segundo_nombre', '$apellido', '$segundo_apellido', '$cedula', '$telefono', '$correo', '$contrasena', '$genero_seleccionado')";

/*Verificar que el correo no se repita en la base de datos */
$verificar_correo = mysqli_query($conexion, "SELECT*FROM administrador WHERE correo = '$correo'");

if(mysqli_num_rows($verificar_correo) > 0 ){

    echo '<script>
    alert("Este correo ya esta registrado, intenta con otro diferente");
    window.location= "/Project_nuevo/Admi/Login_admi.php";
    </script>';
    exit();
}
 
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){

    echo '<script>
    alert("usuario almacenado exitosamente");
    window.location= "/Project_nuevo/Admi/Login_admi.php";
    </script>';
}
else{
    echo '<script>
    alert("Intentelo de nuevo, usuario no almacenado");
    window.location= "/Project_nuevo/Admi/Login_admi.php";
    </script>';
    exit();
}

mysqli_close($conexion);

?>